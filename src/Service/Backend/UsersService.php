<?php 

namespace App\Service\Backend;
use App\Entity\CollaboratorUser;
use App\Service\UtilsBase\UtilsService;
use App\Service\Backend\ValidatorService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface as EncoderUserPasswordEncoderInterface;

class UsersService
{
    private $name = "UsersService";

    public function __construct(EntityManagerInterface $em, 
                                UtilsService $utilsService,
                                ValidatorService $validatorService,
                                EncoderUserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->em = $em;
        $this->utilsService = $utilsService;
        $this->validatorService = $validatorService;
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Guardar perfil de un usuario
     * 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function saveProfile(CollaboratorUser $collaboratorUser, $params){
        $required = [ 
            ['name' => 'name', 'type' => 'string'],
            ['name' => 'password', 'type' => 'string'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $resultValidation;    
        }

        // Guardamos los campos ya validados
        $collaboratorUser->setName($params['name']);
       
        if ($params['password'] != ''){
            $encodedPassword = $this->userPasswordEncoder->encodePassword($collaboratorUser, $params['password']);
            $collaboratorUser->setPassword($encodedPassword);
        }

        $this->em->persist($collaboratorUser);
        $this->em->flush();
        
        $responseResult = $this->utilsService->sendResponse(true, 200, 'OK');
        return $responseResult;
    }

    /**
     * Guardar configuración en un usuario
     * 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function saveSettings(CollaboratorUser $collaboratorUser, $params){
        $required = [ 
            ['name' => 'dateFormat', 'type' => 'string'],
            ['name' => 'dateFormatSql', 'type' => 'string'],
            ['name' => 'hourFormat', 'type' => 'string'],
            ['name' => 'hourFormatSql', 'type' => 'string'],
            //['name' => 'email_notification_active', 'type' => 'bool'], // no podemos ponerlo ya que no es un tipo bool, es un string
            ['name' => 'language', 'type' => 'string'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $resultValidation;    
        }

        // Este lo validamos fuera porque puede estar vacío
        if (isset($params['email_notification']) && $params['email_notification'] != ''){
            $required = [ 
                ['name' => 'email_notification', 'type' => 'email'],
            ];

            $resultValidation =  $this->validatorService->validatorBase ($params,$required);
            
            if (!$resultValidation["status"]){
                return $resultValidation;    
            }
            $collaboratorUser->setEmailNotification($params['email_notification']);
        }
        else
            $collaboratorUser->setEmailNotification('');
    

        // Guardamos los campos ya validados
        $collaboratorUser->setDateFormat($params['dateFormat']);
        $collaboratorUser->setDateFormatSql($params['dateFormatSql']);
        $collaboratorUser->setHourFormat($params['hourFormat']);
        $collaboratorUser->setHourFormatSql($params['hourFormatSql']);
        $collaboratorUser->setEmailNotificationActive(filter_var($params['email_notification_active'], FILTER_VALIDATE_BOOLEAN));
        $collaboratorUser->setLocale($params['language']);

        $this->em->persist($collaboratorUser);
        $this->em->flush();
        
        $responseResult = $this->utilsService->sendResponse(true, 200, 'OK');
        return $responseResult;
    }
}

?>