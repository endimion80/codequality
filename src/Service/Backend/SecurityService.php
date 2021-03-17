<?php 

namespace App\Service\Backend;

#use Psr\Log\LoggerInterface;

use App\Entity\Collaborator;
use App\Entity\CollaboratorUser;
use App\Entity\MailerLog;
use App\Service\Utils\MailerService;
use App\Service\UtilsBase\UtilsService;
use DateTime;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;




class SecurityService
{
    private $name = "SecurityService";

    public function __construct(
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        UtilsService $utilsService,
        MailerService $mailerService
        
    ) {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->mailerService = $mailerService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para comprobar si el email que quiere recuperar contraseña pertenece a algún collaboratorUser en nuestra BD
     * @author Sara García <sara.garcia@eurotransportcar.com>
     * @param Array $params
     * @return void
     */
    public function checkCollaboratorEmail($params){

        if( !empty($this->utilsService->getMissingParams($params, ['email'])) ){            
            $response = $this->utilsService->sendResponse(false, 400, 'No se han recibido todos los parámetros');
        }else{

            //Buscamos un colaborador que tenga ese email
            $collaboratorUser = $this->em->getRepository(CollaboratorUser::class)->findOneByEmail($params['email']);

            
            if (!$collaboratorUser){
                $response = $this->utilsService->sendResponse(false, 501, 'No existe ningún usuario con ese email');
            }else{
                $collaboratorUserEmail = $collaboratorUser->getEmail();
                $collaboratorUserId = $collaboratorUser->getId();
                $response = $this->utilsService->sendResponse(true, 200, 'Usuario encontrado', ['collaboratorUser_email'  => $collaboratorUserEmail,
                                                                                                'collaboratorUser_id'     => $collaboratorUserId]);
            }
        }     

        return $response;
    }

    /**
     * Manda un mail al solicitante para recuperar su contraseña
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * @param Array $params
     * @return Response
     * 
     */
    public function sendMailForgotPassword($params)
    {
        $collaboratorUserEmail = $params['collaboratorUser_email'];
        $collaboratorUserId    = $params['collaboratorUser_id'];
        
        $collaboratorUserToken = uniqid($collaboratorUserId) . uniqid($collaboratorUserId);

        $message = array(
                        'subject'               => "Restablecer contraseña",
                        'to'                    => $collaboratorUserEmail, 
                        'template'              => "mails/passwordRecovery.html.twig", 
                        'parametersTemplate'    => array('token'         => $collaboratorUserToken)
                        );

        $response = $this->mailerService->send($message);
        
        // Guardamos el token del usuario colaborador en bd y la fecha en la que el enlace del correo caduca
        if($response['data']['mailSent']) {

            $limitDate = new \DateTime();
            $limitDate->modify('+60 minutes');

            $collaboratorUser = $this->em->getRepository(CollaboratorUser::class)->findOneById($collaboratorUserId);
            $collaboratorUser->setRecoveryPasswordToken($collaboratorUserToken);
            $collaboratorUser->setRecoveryPasswordLimitDate($limitDate);
            $this->em->persist($collaboratorUser);
            $this->em->flush();
        }

        return $response;
    }

    /**
     * Función para comprobar si el token de recuperación de contraseña existe o ha expirado
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param Array $recoveryToken  El token de la recuperación de contraseña para dicho usuario
     * @return $response
     */
    public function checkCollaboratorRecoveryPasswordToken($recoveryToken){

        $collaboratorUser = $this->em->getRepository(CollaboratorUser::class)->findOneByRecoveryPasswordToken($recoveryToken);

        // Se comprueba que el usuario con ese token exista
        if (!$collaboratorUser){
            $response = $this->utilsService->sendResponse(false, 400, 'No existe ningún usuario con ese token');
        
        // Si existe ese token, se comprueba que la fecha de expiración no se haya superado 
        }else if ( $collaboratorUser->getRecoveryPasswordLimitDate() < new \DateTime() ) {
            $response = $this->utilsService->sendResponse(false, 509, 'El token para la recuperación de contraseña ha expirado');
            $collaboratorUser->setRecoveryPasswordToken(NULL);
            $collaboratorUser->setRecoveryPasswordLimitDate(NULL);
            $this->em->persist($collaboratorUser);
            $this->em->flush();

        // Existe un usuario con ese token y aún se puede recuperar la contraseña
        } else {
            $response = $this->utilsService->sendResponse(true, 200, 'Token encontrado');
        }

        return $response;
    }
    
}
