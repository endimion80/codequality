<?php 

namespace App\Service\Backend;

use App\Entity\OperatorAvailableCranes;
use App\Service\EventsAndSync\SyncService;
use App\Service\UpdateRequest\UpdateRequestService;
use App\Service\Utils\LogService;
use App\Service\Utils\SmsService;
use App\Service\UtilsBase\UtilsService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface as EncoderUserPasswordEncoderInterface;

class OperatorService
{
    private $name = "OperatorService";

    public function __construct(
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        UtilsService $utilsService,
        SecurityService $securityService,
        SyncService $syncService,
        UpdateRequestService $updateRequestService,
        LogService $logService,
        AttachmentService $attachmentService,
        EncoderUserPasswordEncoderInterface $userPasswordEncoder,
        SmsService $smsService
    ) {
        $this->em = $em;
        $this->conn = $em->getConnection();
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->securityService = $securityService;
        $this->syncService = $syncService;
        $this->updateRequestService = $updateRequestService;
        $this->logService = $logService;
        $this->attachmentService = $attachmentService;
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->smsService = $smsService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para dar de alta a un operario
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param CollaboratorUser  $user           Objeto del usuario colaborador
     * @param array             $inputs         Array con la información del operario
     * @param Collaborator      $collaborator   Objeto de la entidad colaboradora
     * 
     * @return $response
     */
    public function createNewOperator($user, $inputs, $collaborator){

        // Comprobación del array de inputs
        if( trim($inputs["username"]) == null || trim($inputs["username"] == "") ) {
            return $this->utilsService->sendResponse(false, 400, "Missing username");
        }
        
        if( trim($inputs["mobile"]) == null || trim($inputs["mobile"] == "") ) {
            return $this->utilsService->sendResponse(false, 400, "Missing mobile phone");
        }

        if( $inputs["password"] == null || $inputs["password"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing password");
        }
        
        if( $inputs["password_2"] == null || $inputs["password_2"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing second password");
        }

        if( $inputs["password"] != $inputs["password_2"] ) {
            return $this->utilsService->sendResponse(false, 400, "Passwords don't match");
        }
        
        //if( trim($inputs["name"]) == null || trim($inputs["name"]) == "" ) {
            //return $this->utilsService->sendResponse(false, 400, "Missing name");
        //}
        
        //if( trim($inputs["last_name"]) == null || trim($inputs["last_name"]) == "" ) {
            //return $this->utilsService->sendResponse(false, 400, "Missing last name");
        //}

        if( trim($inputs["reference"]) == null || trim($inputs["reference"]) == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing identifier");
        }
        
        //if( trim($inputs["dni"]) == null || trim($inputs["dni"]) == "" ) {
            //return $this->utilsService->sendResponse(false, 400, "Missing NIF");
        //}
        
        if( $inputs["branch_office"] == null || $inputs["branch_office"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing Branch Office");
        }
        
        if( $inputs["crane"] == null || $inputs["crane"] == "" ) {
            $assignedCrane = null;
        } else {
            $assignedCrane = $this->em->getRepository('App:Crane')->findOneById($inputs["crane"]);

            if(!$assignedCrane) {
                return $this->utilsService->sendResponse(false, 400, "Not existing Crane");
            }
        }
        
        /*if( $inputs["creation_date"] == null || $inputs["creation_date"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing creation date");
        }*/

        if( $inputs["status"] == null || $inputs["status"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing operator status");
        }

        // Formateamos la hora para la base de datos
        //list($day, $month, $year) = explode("/", $inputs["creation_date"]);
        //$formatCreationDate = $year . $month . $day;
        
        $now = new \DateTime();
        $formatCreationDate = $now->format('Ymd');

        //? En principio, la fecha de baja de establece a null para que no se borre hasta que se modifique
        $formatDeletionDate = null;

        // Comprobación de sucursal
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneBy( array('id' => $inputs["branch_office"],
                                                                                       'collaborator' => $collaborator  
                                                                                      ) );

        if(!$branchOffice) {
            return $this->utilsService->sendResponse(false, 400, "Not existing Branch Office");
        }
        $branchOfficeCode = $branchOffice->getCode();

        if($assignedCrane) {
            $assignedCraneCode = $assignedCrane->getCode();
        } else {
            $assignedCraneCode = null;
        }

        // Comprobación de que dicho operario ya exista (Username, DNI, identificador/reference o móvil ya existente)
        $existingUsername = $this->em->getRepository('App:Operator')->findOneBy( array('username' => trim($inputs["username"]), 'deletionDate' => null) );
        
        if (trim($inputs["dni"]) != ''){
            $existingDni = $this->em->getRepository('App:Operator')->findOneBy( array('dni' => trim($inputs["dni"]), 'deletionDate' => null) );
            if($existingDni) {
                $errorMessage = $this->translator->trans("form.operator.dni.alreadyExists");
                return $this->utilsService->sendResponse(false, 400, $errorMessage);
            }
        }

        $existingReference = $this->em->getRepository('App:Operator')->findOneBy( array('reference' => trim($inputs["reference"]), 'deletionDate' => null) );
        $existingMobile = $this->em->getRepository('App:Operator')->findOneBy( array('mobile' => trim($inputs["mobile"]), 'deletionDate' => null) );

        if($existingUsername) {
            $errorMessage = $this->translator->trans("form.operator.username.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        if($existingReference) {
            $errorMessage = $this->translator->trans("form.operator.reference.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        if($existingMobile) {
            $errorMessage = $this->translator->trans("form.operator.reference.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        // Creación del operario
        $requestOperatorData = array(  "NombreOperario"        =>  trim($inputs["name"]),
                                       "ApellidosOperario"     =>  trim($inputs["last_name"]),
                                       "DNIOperario"           =>  trim($inputs["dni"]), 
                                       "IdentificadorOperario" =>  trim($inputs["reference"]),
                                       "MovilOperario"         =>  trim($inputs["mobile"]),
                                       "GruaAsignadaOperario"  =>  $assignedCraneCode,
                                       "EstadoOperario"        =>  $inputs["status"],
                                       "FechaAltaOperario"     =>  $formatCreationDate,
                                       "FechaBajaOperario"     =>  $formatDeletionDate,
                                       "CodigoSucursal"        =>  $branchOfficeCode
                                    );

        $credentials = array("username" =>  trim($inputs["username"]),
                             "password" =>  $inputs["password"]
                            );

        $result = $this->updateRequestService->requestNewOperator($user, $collaborator, $requestOperatorData, $credentials);
        
        return $result;
    }

    /**
     * Función para modificar un operario
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param CollaboratorUser $user        Usuario colaborador
     * @param array         $params         Array con la información para modificar los datos del operario
     *                          ==> $params["operatorId"]            ID del operario
     *                          ==> $params["dataArray"]             Array con los datos del operario
     *                                  ==> $params["dataArray"]["reference"]   Nuevo identificador del operario
     *                                  ==> $params["dataArray"]["mobile"]      Nuevo número de teléfono móvil del operario
     *                                  ==> $params["dataArray"]["password"]    Nueva contraseña del operario
     *                                  ==> $params["dataArray"]["password2"]   Verificación de contraseña
     *                          ==> $params["availabilityStatus"]    Disponibilidad del operario 
     *                          ==> $params["assignedCraneId"]       ID de la grúa asignada
     *                          ==> $params["availableCranes"]       Array con las grúas disponibles para ser asignadas
     *                          ==> $params["branchOfficesSelected"] Sucursales a asignar
     *                          ==> $params["attachmentsToAdd"]      Ficheros adjuntos a añadir
     *                          ==> $params["attachmentsToRemove"]   Ficheros adjuntos a eliminar
     *                          ==> $params["modifiedProfileImage"]  Foto de perfil a actualizar
     * @return $response
     */
    public function modifyOperator($user, $params){

        $operator = $this->em->getRepository('App:Operator')->findOneById( $params["operatorId"] );
        $assignedCrane = "empty";
        $availabilityOperatorStatus = null;
        $currentDate = new \DateTime();

        // Variables para controlar si se envían SMS y se guardan logs
        $modifiedMobileNotification = false;
        $modifiedPasswordNotification = false;

        if( !is_null($params["assignedCraneId"]) && $params["assignedCraneId"] != "" && $params["assignedCraneId"] != "0" ) {
            $assignedCrane = $this->em->getRepository('App:Crane')->findOneById( $params["assignedCraneId"] );
        }

        if( $params["availabilityStatus"] == "true" ) {
            $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneByCode("available");
        } else {
            $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneByCode("not_available");
        }

        if(!$operator) {
            return $this->utilsService->sendResponse(false, 400, "Not existing operator");
        }

        if( $assignedCrane != "empty" && $assignedCrane != true ) {
            return $this->utilsService->sendResponse(false, 400, "Not existing crane");
        }

        if(!$availabilityOperatorStatus) {
            return $this->utilsService->sendResponse(false, 400, "That operator's availability status doesn't exist");
        }

        // Comprobación del array de inputs
        if( trim($params["dataArray"]["reference"]) == null || trim($params["dataArray"]["reference"]) == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing reference");
        }

        if( trim($params["dataArray"]["mobile"]) == null || trim($params["dataArray"]["mobile"]) == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing mobile");
        }

        if( ($params["dataArray"]["password"] != "" || $params["dataArray"]["password2"] != "") && 
            $params["dataArray"]["password"] != $params["dataArray"]["password2"] 
        ) {
            $errorMessage = $this->translator->trans("change_password.form.not_same");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        // Comprobación de que dicho operario ya exista ("Identificador" o nº teléfono móvil ya existente)
        $operatorWithThatReference = $this->em->getRepository('App:Operator')->findOneBy( array('reference' => trim($params["dataArray"]["reference"]), 'deletionDate' => null) );
        $operatorWithThatMobile = $this->em->getRepository('App:Operator')->findOneBy( array('mobile' => trim($params["dataArray"]["mobile"]), 'deletionDate' => null) );

        if( $operatorWithThatReference && ($operatorWithThatReference->getId() != $operator->getId()) ) {
            $errorMessage = $this->translator->trans("form.operator.reference.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        if( $operatorWithThatMobile && ($operatorWithThatMobile->getId() != $operator->getId()) ) {
            $errorMessage = $this->translator->trans("form.operator.mobile.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        // Actualización de datos de operario
        if(trim($params["dataArray"]["reference"]) != $operator->getReference()) {
            $operator->setReference(trim($params["dataArray"]["reference"]));
        }

        if(trim($params["dataArray"]["mobile"]) != $operator->getMobile()) {
            $operator->setMobile(trim($params["dataArray"]["mobile"]));
            $modifiedMobileNotification = true;
        }

        if( is_null($params["availableCranes"]) || empty($params["availableCranes"]) ) {
            $operator->setCrane(null);
        } else if( $assignedCrane != "empty" && in_array($assignedCrane->getId(), $params["availableCranes"]) ) {
            $operator->setCrane($assignedCrane);
        } else {
            $operator->setCrane(null);
        }

        $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);

        if( $params["dataArray"]["password"]  != "" && 
            $params["dataArray"]["password2"] != "" && 
            $params["dataArray"]["password"]  == $params["dataArray"]["password2"] 
        ) {
            // Encriptamos y seteamos la contraseña
            $encodedPassword = $this->userPasswordEncoder->encodePassword($operator, $params["dataArray"]["password"]);
            $operator->setPassword($encodedPassword);

            $modifiedPasswordNotification = true;
        }

        $this->em->persist($operator);
        $this->em->flush();

        // Sincronización en el cambio de datos
        $confirmation = $this->syncService->updateOperator($operator);

        if(!$confirmation["status"]) {
            $this->logService->log("Error al sincronizar los datos del operario (Modo edición) con ID ".$operator->getId(), "Error de sincronización");

            $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError");
            return $this->utilsService->sendResponse(false, 500, $errorMessage);
        }

        // Borramos las grúas disponibles para operario que no estén en el nuevo listado
        $oldAvailableCranes = $this->em->getRepository('App:OperatorAvailableCranes')->findBy( array('operator' => $params["operatorId"]) );
        if($oldAvailableCranes) {
            foreach($oldAvailableCranes as $oldAvCrane) {
                if( !in_array($oldAvCrane->getCrane()->getId(), $params["availableCranes"]) ) {
                    $this->em->remove($oldAvCrane);
                    $this->em->flush();
                }
            }
        }

        // Actualizamos las nuevas grúas disponibles para asignar al operario
        if($params["availableCranes"]) {
            foreach($params["availableCranes"] as $avCrane) {
                $auxAvCrane = $this->em->getRepository('App:OperatorAvailableCranes')->findOneBy( array('operator' => $params["operatorId"],
                                                                                                        'crane'    => $avCrane
                                                                                                       ) );
                if(!$auxAvCrane) {
                    $auxCrane = $this->em->getRepository('App:Crane')->findOneById($avCrane);
                    if($auxCrane) {
                        $newAvCrane = new OperatorAvailableCranes;
                        $newAvCrane->setCrane($auxCrane);
                        $newAvCrane->setOperator($operator);
    
                        $this->em->persist($newAvCrane);
                        $this->em->flush();
                    }
                } 
            }
        }

        // Actualización de sucursales asignadas al operario
        if( !is_null($params["branchOfficesSelected"]) ) { 
            foreach($params["branchOfficesSelected"] as $branchOfficeId) {
                $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById($branchOfficeId);
                $branchOfficeOperator = $this->em->getRepository('App:BranchOfficeOperator')->findOneBy(array("branchOffice" => $branchOffice,
                                                                                                              "operator" => $operator));
                if($branchOfficeOperator) {
                    if( !is_null($branchOfficeOperator->getDateTo()) && ($branchOfficeOperator->getDateTo() <= $currentDate) ) {
                        $syncResult = $this->updateRequestService->assignOperatorToBranchOffice($operator, $branchOffice, null, $branchOfficeOperator);
                        if(!$syncResult["status"]) {
                            $this->logService->log('Error al asignar el operario con ID: '.$operator->getId().' a la sucursal con ID: '.$branchOffice->getId().')', "Error de sincronización");
                        }
                    }
                // Añadir relación Sucursal - Operario
                } else {
                    $syncResult = $this->updateRequestService->assignOperatorToBranchOffice($operator, $branchOffice);
                    if(!$syncResult["status"]) {
                        $this->logService->log('Error al asignar el operario con ID: '.$operator->getId().' a la sucursal con ID: '.$branchOffice->getId().')', "Error de sincronización");
                    }
                }
            }
        }

        // Borrar sucursales desactivadas
        $branchOfficeOperatorByOperator = $this->em->getRepository('App:BranchOfficeOperator')->findBy(array("operator" => $operator));

        if( !is_null($branchOfficeOperatorByOperator) ) { 
            foreach($branchOfficeOperatorByOperator as $branchOfficeOperator) {
                if( !in_array($branchOfficeOperator->getBranchOffice()->getId(), $params["branchOfficesSelected"]) ) {
                    // Sincronización del borrado de la relación sucursal y grúa
                    $syncResult = $this->updateRequestService->removeOperatorFromBranchOffice($branchOfficeOperator);
                    if(!$syncResult["status"]) {
                        $this->logService->log('Error al eliminar la relación entre sucursal y operario (BranchOfficeOperator) con ID: '.$branchOfficeOperator->getId(), "Error de sincronización");
                    }
                }
            }
        }

        // Adición de los ficheros adjuntos nuevos 
        if( !is_null($params["attachmentsToAdd"]) ) { 
            foreach($params["attachmentsToAdd"] as $fileDataToAdd) {
                $response = $this->attachmentService->uploadAttachment($fileDataToAdd, "fichero_adjunto_operario", null, null, $operator);
    
                if(!$response["status"]) {
                    $errorMessage = $this->translator->trans("modal.attachment.upload.failed");
                    return $this->utilsService->sendResponse(false, 500, $errorMessage);
                }
            }
        }

        // Borrado de ficheros seleccionados
        if( !is_null($params["attachmentsToRemove"]) ) { 
            foreach($params["attachmentsToRemove"] as $fileToRemoveId) {
                $fileToRemove = $this->em->getRepository('App:Attachment')->findOneById($fileToRemoveId);
    
                if($fileToRemove) {
                    $this->em->remove($fileToRemove);
                    $this->em->flush();
                }
            }
        }

        // Adición o modificación de foto de perfil
        if( !is_null($params["modifiedProfileImage"]) && !empty($params["modifiedProfileImage"]) ) {

            $response = $this->attachmentService->createOrModifyProfileImage($params["modifiedProfileImage"], $operator);
    
            if(!$response["status"]) {
                $errorMessage = $this->translator->trans("modal.attachment.upload.failed");
                return $this->utilsService->sendResponse(false, 500, $errorMessage);
            }
        }

        // Se mandan los SMS pertinentes y se guardan las operaciones en el log
        if($modifiedMobileNotification) {
            $this->logService->logUser("Se ha modificado el número de teléfono móvil del operario con ID ".$operator->getId(), $operator->getId(), "operator_new_mobile");

            $smsTo = '+34'.$operator->getMobile();
            $appName = $this->utilsService->getParameter("APP_NAME");
            $smsContent = 'Su número de móvil '.$operator->getMobile().' está habilitado para usar con la aplicación '.$appName;

            $sms = array(
                'to'        => $smsTo,
                'content' 	=> $smsContent          
            );
            $smsResult = $this->smsService->sendSms($sms);

            if($smsResult["status"]) {
                $this->logService->logUser("Se enviado un SMS al operario con ID ".$operator->getId()." para notificarle la modificación de su número de teléfono móvil", $operator->getId(), "operator_new_mobile_notification");
            }
        }

        if($modifiedPasswordNotification) {
            $this->logService->logUser("Se ha modificado la contraseña del operario con ID ".$operator->getId(), $operator->getId(), "operator_new_password");

            $smsTo = '+34'.$operator->getMobile();
            $appName = $this->utilsService->getParameter("APP_NAME");
            $smsContent = 'El usuario '.$user->getName().' de la empresa '.$user->getCollaborator()->getName().' ha generado la siguiente contraseña para ingresar a la aplicación '.$appName.': "'.$params["dataArray"]["password"].'"';

            $sms = array(
                'to'        => $smsTo,
                'content' 	=> $smsContent          
            );
            $smsResult = $this->smsService->sendSms($sms);

            if($smsResult["status"]) {
                $this->logService->logUser("Se enviado un SMS al operario con ID ".$operator->getId()." para notificarle la modificación de su contraseña", $operator->getId(), "operator_new_password_notification");
            }
        }
        
        return $this->utilsService->sendResponse(true, 200);
    }

    /**
     * Función del botón que da de baja a los operarios seleccinados
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param array     $arrayChecked    Array con las IDs de los operarios que hay que modificar
     * @param string    $collaboratorId  ID de la entidad colaboradora
     * 
     * @return $response
     */
    public function deleteSelectedOperators($arrayChecked, $collaboratorId) {

        $selectedOperators = [];

        // Comprobación del array de grúas seleccionadas
        if( empty($arrayChecked) ) {
            $errorMessage = $this->translator->trans("modal.operators.not_selected");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        // Creación array de objetos Operario
        foreach($arrayChecked as $item) {
            $selectedOperators[] = $this->em->getRepository('App:Operator')->findOneBy(array('id' => $item, 'collaborator' => $collaboratorId));
        }

        $retiredStatus = $this->em->getRepository('App:OperatorStatus')->findOneBy( array('code' => "no_active") );
        if(!$retiredStatus) {
            return $this->utilsService->sendResponse(false, 500, "Internal error: Status retired not found");
        }

        $notAvailable = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy( array('code' => 'not_available') );
        if(!$notAvailable) {
            return $this->utilsService->sendResponse(false, 500, 'Internal error: Availability Operator Status "Not available" not found');
        }

        // Actualización de los datos
        foreach($selectedOperators as $operator) {
            $operator->setDeletionDate(new \DateTime());
            $operator->setOperatorStatus($retiredStatus);
            $operator->setAvailabilityOperatorStatus($notAvailable);
            $this->em->persist($operator);
            $this->logService->log("Se ha dado de baja al operario con ID ".$operator->getId(), "Baja de operario");
        }
        $this->em->flush();

        // Sincronización
        $errorsCounter = 0;
        foreach($selectedOperators as $operator) {
            $confirmation = $this->syncService->updateOperator($operator);

            if(!$confirmation["status"]) {
                $errorsCounter++;
                $this->logService->log("Error al dar de baja al operario con ID ".$operator->getId(), "Error de sincronización");
            }
        }
        
        if($errorsCounter) {
            $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError").": ". $errorsCounter ." errors";
            return $this->utilsService->sendResponse(false, 500, $errorMessage);
        }
        
        return $this->utilsService->sendResponse(true, 200);
    }

    /**
     * Función para recoger los datos que se van a exportar de un operario
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param integer $collaboratorId           ID de la entidad colaboradora
     * @param string  $operatorId               ID del operario
     * 
     * @return $response
     */
    public function getOperatorDataToExport($collaboratorId, $operatorId){

        $resultData = array();

        // Datos del operario
        array_push($resultData, array('Datos del operario:'));
        array_push($resultData, array('Identificador', 
                                      'Móvil', 
                                      'Grúa asignada',
                                      'Disponibilidad'
                                    ));

        $operator = $this->em->getRepository('App:Operator')->findOneById($operatorId);                             
        $operatorAvailableCranes = $this->em->getRepository('App:operatorAvailableCranes')->findBy(array('operator' => $operatorId));

        if ($operator) {
            array_push($resultData, array($operator->getReference(), 
                                          $operator->getMobile(), 
                                          $operator->getCrane()->getReference(), 
                                          $operator->getavailabilityOperatorStatus()->getDescription()
                                        ));

            // Línea Vacía para separar
            array_push($resultData, array());

            if( !empty($operatorAvailableCranes) && !is_null($operatorAvailableCranes) ) {

                array_push($resultData, array('Grúas disponibles para asignar:'));
                $operatorAvailableCranesLine = array();

                foreach($operatorAvailableCranes as $opAvCrane) {
                    array_push($operatorAvailableCranesLine, $opAvCrane->getCrane()->getReference());
                }

                array_push($resultData, $operatorAvailableCranesLine);
            }

            // Línea Vacía para separar
            array_push($resultData, array());         

        } else {
            array_push($resultData, array());
        }

        $operatorData = array($resultData);
        
        return $operatorData;
    }

    /**
     * Función para poner como no disponible a un operador después de X minutos
     * @author Javier Lago <javi.lago@kosaas.com>
     * 
     * @return $response
     */
    public function autoNoAvailabilityOperator(){
        $APP_MINUTES_TO_AUTO_NO_AVAILABILITY = $this->utilsService->getParameter('APP_MINUTES_TO_AUTO_NO_AVAILABILITY');

        $now = new \DateTime();

        $now->modify('-' . $APP_MINUTES_TO_AUTO_NO_AVAILABILITY . ' minute'); 

        $sql = "SELECT  o.id AS id
                FROM operator AS o
                LEFT JOIN availability_operator_status AS aos ON o.availability_operator_status_id = aos.id 
                WHERE  aos.code = 'available' AND
                        o.last_position_date < :lastPositionDate"; 
         
        $parameters = [];
        $parameters['lastPositionDate'] = $now->format('Y-m-d H:i:s') ;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_ASSOC);

        foreach($queryRecords as $operatorRow){
            $operator = $this->em->getRepository('App:Operator')->findOneBy(array('id' => $operatorRow['id']));
            $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'not_available'));
         
            $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);
            $this->em->persist($operator);
            $this->em->flush();
        }

        return $this->utilsService->sendResponse(true, 200);
    }
}

?>