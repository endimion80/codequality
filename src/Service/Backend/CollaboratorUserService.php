<?php 

namespace App\Service\Backend;


use App\Entity\CollaboratorUser;
use App\Service\UtilsBase\UtilsService;
use App\Service\Backend\SecurityService;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CollaboratorUserService
{
    private $name = "CollaboratorUserService";

    public function __construct(
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        UtilsService $utilsService,
        SecurityService $securityService,
        ValidatorService $validatorService
    ) {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->securityService = $securityService;
        $this->validatorService = $validatorService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para actualizar la contraseña de un usuario colaborador
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $password1  Contraseña del primer campo de texto
     * @param string $password2  Contraseña del segundo campo de texto
     * @param string $token      Token de la recuperación de contraseña vinculado un usuario colaborador
     * 
     * @return $response
     */
    public function updateCollaboratorUserPassword($password1, $password2, $recovery_token){

        // Se comprueba que los parámetros no sean nulos o vacíos
        if($password1      == null || $password1        == '' ||
           $password2      == null || $password2        == '' ||
           $recovery_token == null || $recovery_token   == '') {
            
            $response = $this->utilsService->sendResponse(false, 400, 'No se han recibido todos los parámetros');
        
        // Las contraseñas deben ser las mismas
        } else if ($password1 !== $password2) {
            $response = $this->utilsService->sendResponse(false, 501, 'Ambos campos de contraseña deben coincidir');
        } else {

            // Se comprueba que el token exista
            $check = $this->securityService->checkCollaboratorRecoveryPasswordToken($recovery_token);

            // Si existe token para recuperar contraseña
            if($check['status']) {

                $response = $this->utilsService->sendResponse(true, 200, 'Contraseña actualizada');

                $encryptedPassword = password_hash($password1, PASSWORD_BCRYPT, ["cost" => 13]);
                $collaboratorUser = $this->em->getRepository(CollaboratorUser::class)->findOneByRecoveryPasswordToken($recovery_token);
                
                $collaboratorUser->setPassword($encryptedPassword);
                $collaboratorUser->setRecoveryPasswordToken(NULL);
                $collaboratorUser->setRecoveryPasswordLimitDate(NULL);
                $this->em->persist($collaboratorUser);
                $this->em->flush();

            // Si no existe token o ha expirado
            } else {
                $response = $this->utilsService->sendResponse(false, 502, 'No existe petición de cambio de contraseña o ha expirado');
            }

        }

        return $response;
    }

    /**
     * Función para crear un usuario colaborador
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param Array $inputs     Datos para insertar en la nueva instancia
     * 
     * @return jsonResponse
     */
    public function createCollaboratorUser($inputs){

        $data = array();

        foreach ($inputs as $item) {
            $data[$item["name"]] = $item["value"];
        }

        $required = [
                      ['name' => 'c_username', 'type' => 'string', 'notEmpty' => true],
                      ['name' => 'c_collaborator', 'type' => 'string', 'notEmpty' => true],
                      ['name' => 'c_email', 'type' => 'string', 'notEmpty' => true],
                      ['name' => 'c_password', 'type' => 'string', 'notEmpty' => true],
                      ['name' => 'c_name', 'type' => 'string', 'notEmpty' => true],
                      ['name' => 'c_cif', 'type' => 'string', 'notEmpty' => true],
                    ];

        $resultValidation = $this->validatorService->validatorBase ($data,$required,true);

        if(!$resultValidation["status"]) {
            return $this->utilsService->sendResponse(false, 400, $this->translator->trans("general.form.allfields.mandatory"), null, 'jsonResponse');
        }

        $data2 = [
                  'c_username' => $data["c_username"],
                  'c_email'    => $data["c_email"],
                  'c_cif'      => $data["c_cif"],
                ];

        $required = [
                  ['name' => 'c_username', 'type' => 'notInTable', 'tableName' => 'collaborator_user', 'tableCol' => 'username'],
                  ['name' => 'c_email'   , 'type' => 'notInTable', 'tableName' => 'collaborator_user', 'tableCol' => 'email'],
                  ['name' => 'c_cif'     , 'type' => 'notInTable', 'tableName' => 'collaborator_user', 'tableCol' => 'cif'],
                ];

        $resultValidation = $this->validatorService->validatorBase ($data2,$required,true);
        if(!$resultValidation["status"]) {
            if(strpos($resultValidation["errors"][0], "c_username")) {
                return ($this->utilsService->sendResponse(false, 400, $this->translator->trans("form.collaboratorUser.username.alreadyExists"), null, 'jsonResponse'));
            } else if(strpos($resultValidation["errors"][0], "c_email")) {
                return ($this->utilsService->sendResponse(false, 400, $this->translator->trans("form.collaboratorUser.email.alreadyExists"), null, 'jsonResponse'));
            } else if(strpos($resultValidation["errors"][0], "c_cif")) {
                return ($this->utilsService->sendResponse(false, 400, $this->translator->trans("form.collaboratorUser.cif.alreadyExists"), null, 'jsonResponse'));
            } else {
                return ($this->utilsService->sendResponse(false, 400, $this->translator->trans("general.form.error"), null, 'jsonResponse'));
            }
        }

        $collaboratorUserRepository = $this->em->getRepository('App:CollaboratorUser');
        $createCollaboratorUser = $collaboratorUserRepository->createCollaboratorUser($inputs);

        if($createCollaboratorUser["status"]) {
            return $this->utilsService->sendResponse(true, 200, $this->translator->trans("general.modal.success"), null, 'jsonResponse');
        } else {
            return $this->utilsService->sendResponse(false, 500, $this->translator->trans("general.modal.error"), null, 'jsonResponse');
        }
    }

}