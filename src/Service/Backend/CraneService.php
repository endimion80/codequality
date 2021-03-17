<?php 

namespace App\Service\Backend;

use App\Entity\BranchOfficeCrane;
use App\Entity\CraneService as EntityCraneService;
use App\Service\EventsAndSync\SyncService;
use App\Service\UpdateRequest\UpdateRequestService;
use App\Service\Utils\LogService;
use App\Service\UtilsBase\UtilsService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class CraneService
{
    private $name = "CraneService";

    public function __construct(
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        UtilsService $utilsService,
        SecurityService $securityService,
        SyncService $syncService,
        UpdateRequestService $updateRequestService,
        LogService $logService,
        AttachmentService $attachmentService
    ) {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->securityService = $securityService;
        $this->syncService = $syncService;
        $this->updateRequestService = $updateRequestService;
        $this->logService = $logService;
        $this->attachmentService = $attachmentService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para dar de alta a una grúa
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param array         $inputs         Array con la información de la grúa
     * @param Collaborator  $collaborator   Objeto de la entidad colaboradora
     * 
     * @return $response
     */
    public function createNewCrane($inputs, $collaborator){

        // Comprobación del array de inputs
        if( trim($inputs["c_plate"]) == null || trim($inputs["c_plate"]) == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing plate");
        }
        
        if( trim($inputs["c_reference"]) == null || trim($inputs["c_reference"]) == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing reference");
        }

        if( $inputs["c_branchOffice"] == null || $inputs["c_branchOffice"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing branchOffice");
        }
        
        if( $inputs["c_label"] == null || $inputs["c_label"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing label");
        }
        
        if( $inputs["c_brand"] == null || $inputs["c_brand"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing brand");
        }
        
        if( $inputs["c_model"] == null || $inputs["c_model"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing model");
        }

        if( $inputs["c_type"] == null || $inputs["c_type"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing type");
        }
        
        if( $inputs["c_managementType"] == null || $inputs["c_managementType"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing managementType");
        }
        
        if( $inputs["c_status"] == null || $inputs["c_status"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing status");
        }
        
        if( $inputs["c_availabilityStatus"] == null || $inputs["c_availabilityStatus"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing availabilityStatus");
        }
        
        /*if( $inputs["c_creationDate"] == null || $inputs["c_creationDate"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing creationDate");
        }

        // Formateamos la hora para la base de datos
        list($day, $month, $year) = explode("/", $inputs["c_creationDate"]);
        $formatCreationDate = $year . $month . $day;*/
        $now = new \DateTime();
        $formatCreationDate = $now->format('Ymd');

        //? En principio, la fecha de baja de establece a null para que no se borre hasta que se modifique
        $formatDeletionDate = null;

        // Comprobación de sucursal
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneBy( array('id' => $inputs["c_branchOffice"],
                                                                                       'collaborator' => $collaborator  
                                                                                      ) );

        if(!$branchOffice) {
            return $this->utilsService->sendResponse(false, 400, "Not existing branchOffice");
        }
        $branchOfficeCode = $branchOffice->getCode();

        // Comprobación de que dicha grúa ya exista (Matrícula o "identificador" ya existente)
        $existingPlate = $this->em->getRepository('App:Crane')->findOneBy( array('plate' => trim($inputs["c_plate"]), 'deletionDate' => null) );
        $existingReference = $this->em->getRepository('App:Crane')->findOneBy( array('reference' => trim($inputs["c_reference"]), 'deletionDate' => null) );
        
        if($existingPlate) {
            $errorMessage = $this->translator->trans("form.crane.plate.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        if($existingReference) {
            $errorMessage = $this->translator->trans("form.crane.reference.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        } 
        // Creación de la grúa
        $requestCraneData = array(  "MatriculaGrua"         =>  trim($inputs["c_plate"]),
                                    "IdentificadorGrua"     =>  trim($inputs["c_reference"]),
                                    "MarcaGrua"             =>  $inputs["c_brand"], 
                                    "ModeloGrua"            =>  $inputs["c_model"],
                                    "TipoGrua"              =>  $inputs["c_type"],
                                    "TipoGestionGrua"       =>  $inputs["c_managementType"],
                                    "EstadoGrua"            =>  $inputs["c_status"],
                                    "DisponibilidadGrua"    =>  $inputs["c_availabilityStatus"],
                                    "RotuladoGrua"          =>  $inputs["c_label"],
                                    "FechaAltaGrua"         =>  $formatCreationDate,
                                    "FechaBajaGrua"         =>  $formatDeletionDate,
                                    "CodigoSucursal"        =>  $branchOfficeCode,
        );

        $result = $this->updateRequestService->requestNewCrane($collaborator, $requestCraneData);
        
        return $result;
    }

    /**
     * Función para modificar una grúa
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param array         $params         Array con la información para modificar la grúa
     *                          ==> $params["craneId"]               ID de la grúa
     *                          ==> $params["dataArray"]             Datos de la grúa
     *                          ==> $params["prefServicesToAdd"]     Servicios preferente a asignar 
     *                          ==> $params["avServicesToAdd"]       Servicios disponibles a asignar 
     *                          ==> $params["branchOfficesSelected"] Sucursales a asignar
     *                          ==> $params["attachmentsToAdd"]      Ficheros adjunto a añadir
     *                          ==> $params["attachmentsToRemove"]   Ficheros adjuntos a eliminar
     * @return $response
     */
    public function modifyCrane($params) {

        $crane = $this->em->getRepository('App:Crane')->findOneById( $params["craneId"] );
        $prefServiceType = $this->em->getRepository('App:CraneServiceType')->findOneById(1);
        $avServiceType = $this->em->getRepository('App:CraneServiceType')->findOneById(2);
        $currentDate = new \DateTime();
        
        if(!$crane) {
            return $this->utilsService->sendResponse(false, 400, "Not existing crane");
        }

        // Comprobación del array de inputs
        if( trim($params["dataArray"]["c_plate"]) == null || trim($params["dataArray"]["c_plate"]) == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing plate");
        }

        if( trim($params["dataArray"]["c_reference"]) == null || trim($params["dataArray"]["c_reference"]) == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing reference");
        }

        if( $params["dataArray"]["c_brand"] == null || $params["dataArray"]["c_brand"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing brand");
        }
        
        if( $params["dataArray"]["c_model"] == null || $params["dataArray"]["c_model"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing model");
        }
        
        if( $params["dataArray"]["c_managementType"] == null || $params["dataArray"]["c_managementType"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing managementType");
        }

        if( $params["dataArray"]["c_craneStatus"] == null || $params["dataArray"]["c_craneStatus"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing status");
        }

        if( $params["dataArray"]["c_label"] == null || $params["dataArray"]["c_label"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing label");
        }
        
        if( $params["dataArray"]["c_availabilityStatus"] == null || $params["dataArray"]["c_availabilityStatus"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing availabilityStatus");
        }

        if( $params["dataArray"]["c_type"] == null || $params["dataArray"]["c_type"] == "" ) {
            return $this->utilsService->sendResponse(false, 400, "Missing type");
        }

        // Comprobación de que dicha grúa ya exista (Matrícula o "identificador" ya existente)
        $craneWithThatPlate = $this->em->getRepository('App:Crane')->findOneBy( array('plate' => trim($params["dataArray"]["c_plate"]), 'deletionDate' => null) );
        $craneWithThatReference = $this->em->getRepository('App:Crane')->findOneBy( array('reference' => trim($params["dataArray"]["c_reference"]), 'deletionDate' => null) );

        if( $craneWithThatPlate && ($craneWithThatPlate->getId() != $crane->getId()) ) {
            $errorMessage = $this->translator->trans("form.crane.plate.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        if( $craneWithThatReference && ($craneWithThatReference->getId() != $crane->getId()) ) {
            $errorMessage = $this->translator->trans("form.crane.reference.alreadyExists");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        } 

        // Actualización de datos de grúa
        if(trim($params["dataArray"]["c_plate"]) != $crane->getPlate()) {
            $crane->setPlate(trim($params["dataArray"]["c_plate"]));
        }

        if(trim($params["dataArray"]["c_reference"]) != $crane->getReference()) {
            $crane->setReference(trim($params["dataArray"]["c_reference"]));
        }

        $brand = $this->em->getRepository('App:Brand')->findOneById($params["dataArray"]["c_brand"]);
        $model = $this->em->getRepository('App:Model')->findOneById($params["dataArray"]["c_model"]);
        $managementType = $this->em->getRepository('App:CraneManagementType')->findOneById($params["dataArray"]["c_managementType"]);
        $craneStatus = $this->em->getRepository('App:CraneStatus')->findOneById($params["dataArray"]["c_craneStatus"]);
        $labeledType = $this->em->getRepository('App:LabeledType')->findOneById($params["dataArray"]["c_label"]);
        $availabilityStatus = $this->em->getRepository('App:AvailabilityStatus')->findOneById($params["dataArray"]["c_availabilityStatus"]);
        $craneType = $this->em->getRepository('App:CraneType')->findOneById($params["dataArray"]["c_type"]);

        $crane->setBrand($brand);
        $crane->setmodel($model);
        $crane->setLabeledType($labeledType);
        $crane->setCraneType($craneType);
        
        $original_managementType = $crane->getManagementType()->getId();
        $original_craneStatus = $crane->getCraneStatus()->getId();
        $original_availabilityStatus = $crane->getAvailabilityStatus()->getId();

        $crane->setManagementType($managementType);
        $crane->setCraneStatus($craneStatus);
        $crane->setAvailabilityStatus($availabilityStatus);

        $this->em->persist($crane);
        $this->em->flush();

        // Sincronización en el cambio de datos
        $confirmation = $this->syncService->updateCrane($crane);

         

        if ($original_managementType != $crane->getManagementType()->getId() ){
            $confirmation_1 = $this->syncService->updateCraneManagementTypeStatus($crane);

            if(!$confirmation_1["status"]) {
                $this->logService->log("Error al sincronizar los datos de la grúa (Tipo Gestión) con ID ".$crane->getId(), "Error de sincronización");

                $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError");
                return $this->utilsService->sendResponse(false, 500, $errorMessage);
            }
        }
        if ($original_craneStatus != $crane->getCraneStatus()->getId() ){
            $confirmation_2 = $this->syncService->updateCraneStatus($crane);

            if(!$confirmation_2["status"]) {
                $this->logService->log("Error al sincronizar los datos de la grúa (Estado) con ID ".$crane->getId(), "Error de sincronización");

                $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError");
                return $this->utilsService->sendResponse(false, 500, $errorMessage);
            }
        }
        if ($original_availabilityStatus != $crane->getAvailabilityStatus()->getId() ){
            $confirmation_3 = $this->syncService->updateCraneAvailabilityStatus($crane);

            if(!$confirmation_3["status"]) {
                $this->logService->log("Error al sincronizar los datos de la grúa (Disponibilidad) con ID ".$crane->getId(), "Error de sincronización");

                $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError");
                return $this->utilsService->sendResponse(false, 500, $errorMessage);
            }
        }


        if(!$confirmation["status"]) {
            $this->logService->log("Error al sincronizar los datos de la grúa (Modo edición) con ID ".$crane->getId(), "Error de sincronización");

            $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError");
            return $this->utilsService->sendResponse(false, 500, $errorMessage);
        }

        // Actualización de servicios preferentes
        if( !is_null($params["prefServicesToAdd"]) ) {
            foreach($params["prefServicesToAdd"] as $pServiceId) {
                $colService = $this->em->getRepository('App:CollaboratorService')->findOneById($pServiceId);
                $pService = $this->em->getRepository('App:CraneService')->findOneBy(array("craneServiceType" => $prefServiceType,
                                                                                          "crane" => $crane,
                                                                                          "collaboratorService" => $colService,
                                                                                        ));
                if($pService) {
                    if( !is_null($pService->getDateTo()) && ($pService->getDateTo() <= $currentDate) ) {
                        
                        $pService->setDateTo(null);
    
                        // Petición del código del servicio de grúa
                        $pServiceCodeResponse = $this->updateRequestService->getCodeToAssignServiceToCrane($crane, $colService, $prefServiceType);
                        if($pServiceCodeResponse["status"]) {
                            $pServiceCode = $pServiceCodeResponse["data"];
                            $pService->setCode($pServiceCode);
                        } else {
                            $this->logService->log('Error al notificar un nuevo servicio (CollaboratorService con ID: '.$colService->getId().') como servicio preferente para la grúa con ID: '.$crane->getId(), "Error de sincronización");
                        }

                        $this->em->persist($pService);
                        $this->em->flush();
                    }
                // Añadir servicio preferente
                } else {
                    $newPrefService = new EntityCraneService;
    
                    $newPrefService->setCraneServiceType($prefServiceType);
                    $newPrefService->setCrane($crane);
                    $newPrefService->setCollaboratorService($colService);
                    $newPrefService->setDateFrom($currentDate);
    
                    // Petición del código del servicio de grúa
                    $pServiceCodeResponse = $this->updateRequestService->getCodeToAssignServiceToCrane($crane, $colService, $prefServiceType);
                    if($pServiceCodeResponse["status"]) {
                        $pServiceCode = $pServiceCodeResponse["data"];
                        $newPrefService->setCode($pServiceCode);
                    } else {
                        $this->logService->log('Error al notificar un nuevo servicio (CollaboratorService con ID: '.$colService->getId().') como servicio preferente para la grúa con ID: '.$crane->getId(), "Error de sincronización");
                    }
    
                    $this->em->persist($newPrefService);
                    $this->em->flush();
                }
            }
        }

        // Borrar servicios preferentes desactivados
        $prefCraneServicesByCrane = $this->em->getRepository('App:CraneService')->findBy(array("crane" => $crane,
                                                                                               "craneServiceType" => $prefServiceType));
        if( !is_null($prefCraneServicesByCrane) ) {
            foreach($prefCraneServicesByCrane as $pServiceByCrane) {
                if( !in_array($pServiceByCrane->getCollaboratorService()->getId(), $params["prefServicesToAdd"]) ) {
                    $pServiceByCrane->setDateTo($currentDate);
                    $this->em->persist($pServiceByCrane);
                    $this->em->flush();
    
                    // Notificación de la eliminación del servicio
                    $syncResult = $this->updateRequestService->notifyRemoveCraneService($pServiceByCrane);
                    if(!$syncResult["status"]) {
                        $this->logService->log('Error al notificar la eliminación del "CraneService" con ID: '.$pServiceByCrane->getId().')', "Error de sincronización");
                    }
                }
            }
        }

        // Actualización de servicios disponibles
        if( !is_null($params["avServicesToAdd"]) ) {
            foreach($params["avServicesToAdd"] as $aServiceId) {
                $colService = $this->em->getRepository('App:CollaboratorService')->findOneById($aServiceId);
                $aService = $this->em->getRepository('App:CraneService')->findOneBy(array("craneServiceType" => $avServiceType,
                                                                                          "crane" => $crane,
                                                                                          "collaboratorService" => $colService,
                                                                                        ));
                if($aService) {
                    if( !is_null($aService->getDateTo()) && ($aService->getDateTo() <= $currentDate) ) {
                        $aService->setDateTo(null);
    
                        // Petición del código del servicio de grúa
                        $aServiceCodeResponse = $this->updateRequestService->getCodeToAssignServiceToCrane($crane, $colService, $avServiceType);
                        if($aServiceCodeResponse["status"]) {
                            $aServiceCode = $aServiceCodeResponse["data"];
                            $aService->setCode($aServiceCode);
                        } else {
                            $this->logService->log('Error al notificar un nuevo servicio (CollaboratorService con ID: '.$colService->getId().') como servicio disponible para la grúa con ID: '.$crane->getId(), "Error de sincronización");
                        }

                        $this->em->persist($aService);
                        $this->em->flush();
                    }
                // Añadir servicio disponible
                } else {
                    $newAvService = new EntityCraneService;
    
                    $newAvService->setCraneServiceType($avServiceType);
                    $newAvService->setCrane($crane);
                    $newAvService->setCollaboratorService($colService);
                    $newAvService->setDateFrom($currentDate);
    
                    // Petición del código del servicio de grúa
                    $aServiceCodeResponse = $this->updateRequestService->getCodeToAssignServiceToCrane($crane, $colService, $avServiceType);
                    if($aServiceCodeResponse["status"]) {
                        $aServiceCode = $aServiceCodeResponse["data"];
                        $newAvService->setCode($aServiceCode);
                    } else {
                        $this->logService->log('Error al notificar un nuevo servicio (CollaboratorService con ID: '.$colService->getId().') como servicio disponible para la grúa con ID: '.$crane->getId(), "Error de sincronización");
                    }
    
                    $this->em->persist($newAvService);
                    $this->em->flush();
                }
            }
        }

        // Borrar servicios disponibles desactivados
        $avCraneServicesByCrane = $this->em->getRepository('App:CraneService')->findBy(array("crane" => $crane,
                                                                                             "craneServiceType" => $avServiceType));

        if( !is_null($avCraneServicesByCrane) ) { 
            foreach($avCraneServicesByCrane as $aServiceByCrane) {
                if( !in_array($aServiceByCrane->getCollaboratorService()->getId(), $params["avServicesToAdd"]) ) {
                    $aServiceByCrane->setDateTo($currentDate);
                    $this->em->persist($aServiceByCrane);
                    $this->em->flush();
    
                    // Notificación de la eliminación del servicio
                    $syncResult = $this->updateRequestService->notifyRemoveCraneService($aServiceByCrane);
                    if(!$syncResult["status"]) {
                        $this->logService->log('Error al notificar la eliminación del "CraneService" con ID: '.$aServiceByCrane->getId().')', "Error de sincronización");
                    }
                }
            }
        }

        // Actualización de sucursales asignadas a la grúa
        if( !is_null($params["branchOfficesSelected"]) ) { 
            foreach($params["branchOfficesSelected"] as $branchOfficeId) {
                $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById($branchOfficeId);
                $branchOfficeCrane = $this->em->getRepository('App:BranchOfficeCrane')->findOneBy(array("branchOffice" => $branchOffice,
                                                                                                        "crane" => $crane));
                if($branchOfficeCrane) {
                    if( !is_null($branchOfficeCrane->getDateTo()) && ($branchOfficeCrane->getDateTo() <= $currentDate) ) {
                        $syncResult = $this->updateRequestService->assignCraneToBranchOffice($crane, $branchOffice, null, $branchOfficeCrane);
                        if(!$syncResult["status"]) {
                            $this->logService->log('Error al asignar la grúa con ID: '.$crane->getId().' a la sucursal con ID: '.$branchOffice->getId().')', "Error de sincronización");
                        }
                    }
                // Añadir relación Sucursal - Grúa
                } else {
                    $syncResult = $this->updateRequestService->assignCraneToBranchOffice($crane, $branchOffice);
                    if(!$syncResult["status"]) {
                        $this->logService->log('Error al asignar la grúa con ID: '.$crane->getId().' a la sucursal con ID: '.$branchOffice->getId().')', "Error de sincronización");
                    }
                }
            }
        }

        // Borrar sucursales desactivadas
        $branchOfficeCraneByCrane = $this->em->getRepository('App:BranchOfficeCrane')->findBy(array("crane" => $crane));

        if( !is_null($branchOfficeCraneByCrane) ) { 
            foreach($branchOfficeCraneByCrane as $branchOfficeCrane) {
                if( !in_array($branchOfficeCrane->getBranchOffice()->getId(), $params["branchOfficesSelected"]) ) {
                    // Sincronización del borrado de la relación sucursal y grúa
                    $syncResult = $this->updateRequestService->removeCraneFromBranchOffice($branchOfficeCrane);
                    if(!$syncResult["status"]) {
                        $this->logService->log('Error al eliminar la relación entre sucursal y grúa (BranchOfficeCrane) con ID: '.$branchOfficeCrane->getId(), "Error de sincronización");
                    }
                }
            }
        }

        // Adición de los ficheros adjuntos nuevos 
        if( !is_null($params["attachmentsToAdd"]) ) { 
            foreach($params["attachmentsToAdd"] as $fileDataToAdd) {
                $response = $this->attachmentService->uploadAttachment($fileDataToAdd, "fichero_adjunto_grua", null, $crane, null);
    
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
        
        return $this->utilsService->sendResponse(true, 200);
    }

    /**
     * Función para modificar el tipo de asignación de una o varias grúas
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param array     $arrayChecked    Array con las IDs de las grúas que hay que modificar
     * @param string    $typeId          ID del tipo de asignación que se va a establecer a dichas grúas seleccionadas
     * @param string    $collaboratorId  ID de la entidad colaboradora
     * 
     * @return $response
     */
    public function setManagementTypeInSelectedCranes($arrayChecked, $typeId, $collaboratorId){

        $selectedCranes = [];

        // Comprobación del array de grúas seleccionadas
        if( empty($arrayChecked) ) {
            $errorMessage = $this->translator->trans("modal.cranes.not_selected");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        $managementTypeId = $this->em->getRepository('App:CraneManagementType')->findOneBy( array('id' => $typeId) );

        // Creación array de objetos Grúa
        foreach($arrayChecked as $item) {
            $selectedCranes[] = $this->em->getRepository('App:Crane')->findOneBy(array('id' => $item, 'collaborator' => $collaboratorId));
        }

        // Actualización de los datos
        foreach($selectedCranes as $crane) {
            $crane->setManagementType($managementTypeId);
            $this->em->persist($crane);
        }
        $this->em->flush();

        // Sincronización
        $errorsCounter = 0;
        foreach($selectedCranes as $crane) {
            $confirmation = $this->syncService->updateCrane($crane);

            if(!$confirmation["status"]) {
                $errorsCounter++;
                $this->logService->log("Error al sincronizar el tipo de asignación de la grúa con ID ".$crane->getId(), "Error de sincronización");
            }
        }
        
        if($errorsCounter) {
            $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError").": ". $errorsCounter ." errors";
            return $this->utilsService->sendResponse(false, 500, $errorMessage);
        }
        
        return $this->utilsService->sendResponse(true, 200);
    }

    /**
     * Función del botón que da de baja a las grúas seleccinadas
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param array     $arrayChecked    Array con las IDs de las grúas que hay que modificar
     * @param string    $collaboratorId  ID de la entidad colaboradora
     * 
     * @return $response
     */
    public function deleteSelectedCranes($arrayChecked, $collaboratorId) {

        $selectedCranes = [];

        // Comprobación del array de grúas seleccionadas
        if( empty($arrayChecked) ) {
            $errorMessage = $this->translator->trans("modal.cranes.not_selected");
            return $this->utilsService->sendResponse(false, 400, $errorMessage);
        }

        // Creación array de objetos Grúa
        foreach($arrayChecked as $item) {
            $selectedCranes[] = $this->em->getRepository('App:Crane')->findOneBy(array('id' => $item, 'collaborator' => $collaboratorId));
        }

        $retiredStatus = $this->em->getRepository('App:CraneStatus')->findOneBy( array('id' => 3) );
        if(!$retiredStatus) {
            return $this->utilsService->sendResponse(false, 500, "Internal error: Status retired not found");
        }

        $notAvailable = $this->em->getRepository('App:AvailabilityStatus')->findOneBy( array('description' => 'Fuera de servicio') );
        if(!$notAvailable) {
            return $this->utilsService->sendResponse(false, 500, 'Internal error: Availability Status "Out of service" not found');
        }

        // Actualización de los datos
        foreach($selectedCranes as $crane) {
            $crane->setDeletionDate(new \DateTime());
            $crane->setCraneStatus($retiredStatus);
            $crane->setAvailabilityStatus($notAvailable);
            $this->em->persist($crane);
            $this->logService->log("Se ha dado de baja a la grúa con ID ".$crane->getId(), "Baja de grúa");
        }
        $this->em->flush();

        // Sincronización
        $errorsCounter = 0;
        foreach($selectedCranes as $crane) {
            $confirmation = $this->syncService->updateCrane($crane);

            if(!$confirmation["status"]) {
                $errorsCounter++;
                $this->logService->log("Error al dar de baja a la grúa con ID ".$crane->getId(), "Error de sincronización");
            }
        }
        
        if($errorsCounter) {
            $errorMessage = $this->translator->trans("modal.general.operation.synchronizationError").": ". $errorsCounter ." errors";
            return $this->utilsService->sendResponse(false, 500, $errorMessage);
        }
        
        return $this->utilsService->sendResponse(true, 200);
    }

    /**
     * Función para recoger los datos que se van a exportar de una grúa
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param integer $collaboratorId           ID de la entidad colaboradora
     * @param string  $craneId                  ID de la grúa
     * 
     * @return $response
     */
    public function getCraneDataToExport($collaboratorId, $craneId){

        $resultData = array();

        // Datos de grúa
        array_push($resultData, array('Datos de grúa:'));
        array_push($resultData, array('Matrícula', 
                                      'Identificador', 
                                      'Marca', 
                                      'Modelo', 
                                      'Tipo de asignación', 
                                      'Estado', 
                                      'Rotulado', 
                                      'Disponibilidad', 
                                      'Tipo'
                                    ));

        $crane = $this->em->getRepository('App:Crane')->findOneById($craneId);
        $preferentialServices = $this->em->getRepository('App:CollaboratorService')->getServicesByCrane($craneId, 1);
        $availableServices = $this->em->getRepository('App:CollaboratorService')->getServicesByCrane($craneId, 2);                              

        if ($crane) {
            array_push($resultData, array($crane->getPlate(), 
                                          $crane->getReference(), 
                                          $crane->getBrand()->getDescription(), 
                                          $crane->getModel()->getDescription(), 
                                          $crane->getManagementType()->getDescription(), 
                                          $crane->getCraneStatus()->getDescription(), 
                                          $crane->getLabeledType()->getDescription(), 
                                          $crane->getAvailabilityStatus()->getDescription(), 
                                          $crane->getCraneType()->getDescription()
                                        ));

            // Línea Vacía para separar
            array_push($resultData, array());
            
            if( !empty($preferentialServices) && !is_null($preferentialServices) ) {

                array_push($resultData, array('Servicios preferentes:'));

                $preferentialServicesLine = array();

                foreach($preferentialServices as $pService) {
                    array_push($preferentialServicesLine, $pService["description"]);
                }

                array_push($resultData, $preferentialServicesLine);
            }

            // Línea Vacía para separar
            array_push($resultData, array());
            
            if( !empty($availableServices) && !is_null($availableServices) ) {

                array_push($resultData, array('Servicios disponibles:'));
                
                $availableServicesLine = array();

                foreach($availableServices as $avService) {
                    array_push($availableServicesLine, $avService["description"]);
                }

                array_push($resultData, $availableServicesLine);
            }
            

        } else {
            array_push($resultData, array());
        }

        // Línea Vacía para separar
        array_push($resultData, array());

        // Sucursales atendidas
        array_push($resultData, array('Sucursales atendidas:'));
        
        $craneBranchOffices = $this->em->getRepository('App:BranchOffice')->getBranchOfficesByCrane($craneId, true);

        $attendedBranchOffices = array();

        foreach($craneBranchOffices as $boName) {
            array_push($attendedBranchOffices, $boName);
        }

        array_push($resultData, $attendedBranchOffices);

        $craneData = array($resultData);
        
        return $craneData;
    }

}

?>