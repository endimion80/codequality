<?php 

namespace App\Service\Backend;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\UtilsBase\UtilsService;
use App\Service\EventsAndSync\SyncService;
use App\Service\Utils\MapsService;
use App\Service\Utils\FirebaseService;
use App\Service\Utils\LogService;
use App\Entity\Crane;
use App\Entity\Operator;
use App\Entity\BranchOffice;
use App\Entity\BranchOfficeCrane;
use App\Entity\BranchOfficeOperator;
use App\Entity\Intervention;
use App\Entity\CancellationType;
use App\Entity\PhaseLog;
use App\Entity\InterventionLog;
//use App\Entity\RISCause;
use App\Entity\RISCauseOperator;
use App\Entity\Attachment;
use App\Entity\IncidenceType;
use App\Entity\InterventionFails;
use App\Entity\interventionFailureType;
use App\Entity\OperatorAvailableCranes;
use App\Entity\RequestCrane;
use App\Entity\RequestCraneCollaboratorService;
use App\Entity\RequestCraneCraneType;

use PDO;


#use Psr\Log\LoggerInterface;

class InterventionService
{
    private $name = "InterventionService";

    public function __construct(EntityManagerInterface $em,
                                ContainerInterface $container, 
                                TranslatorInterface $translator,
                                UtilsService $utilsService,
                                SyncService $syncService,
                                MapsService $mapsService,
                                FirebaseService $firebaseService,
                                LogService $logService,
                                BackendService $backendService)
    {
        $this->em = $em;
        $this->conn = $em->getConnection();
        $this->translator = $translator;
        $this->container = $container;
        $this->utilsService = $utilsService;
        $this->syncService = $syncService;
        $this->mapsService = $mapsService;
        $this->firebaseService = $firebaseService;
        $this->backendService = $backendService;
        $this->logService = $logService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Creación o modificacion de una grua
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Crane $crane (en caso de ser null lo crea, sino lo edita)
     * @param array $formData 
     *                  asiturCode              String  50
     *                  reference               String  50
     *                  plate                   String	15
     *                  brand_id                String	8	0
     *                  model_id                String	8	0
     *                  craneType_id            String	8	0
     *                  management_type_id      String  8   0
     *                  craneStatus_id          String	8   0
     *                  availabilityStatus_id   String	8	0
     *                  labeled_type_id         String  8   0
     *                  creationDate            String	8	AAAAMMDD
     *                  deletionDate            String	8	AAAAMMDD
     *                  branch_office_code      String	8	0
     */
    public function createOrUpdateCrane($crane, $formData){
        
        try {
            // si no hay un objeto lo creamos 
            if(is_null($crane))
                $crane = new Crane();

            // obtenemos las entidades de las relaciones
            $brand = $this->em->getRepository('App:Brand')->findOneById($formData['brand_id']);
            $model = $this->em->getRepository('App:Model')->findOneById($formData['model_id']);
            $type = $this->em->getRepository('App:CraneType')->findOneById($formData['craneType_id']);
            $managementType = $this->em->getRepository('App:CraneManagementType')->findOneById($formData['management_type_id']);
            $status = $this->em->getRepository('App:CraneStatus')->findOneById($formData['craneStatus_id']);
            $availability = $this->em->getRepository('App:AvailabilityStatus')->findOneById($formData['availabilityStatus_id']);
            $labeledType = $this->em->getRepository('App:labeledType')->findOneById($formData['labeled_type_id']);
            $creationDate = null;
            $deletionDate = null;

            if (!is_null($formData['creationDate']) && $formData['creationDate'] != ''){
                $creationDate = \DateTime::createFromFormat('Ymd', $formData['creationDate']);
            }
                
            if (!is_null($formData['deletionDate']) && $formData['deletionDate'] != '') {
                $deletionDate = \DateTime::createFromFormat('Ymd', $formData['deletionDate']);
            }

            $crane->setCode($formData['asiturCode']);
            $crane->setReference($formData['reference']);
            $crane->setPlate($formData['plate']);
            $crane->setBrand($brand);
            $crane->setModel($model);
            $crane->setCraneType($type);
            $crane->setManagementType($managementType);
            $crane->setCraneStatus($status);
            $crane->setAvailabilityStatus($availability);
            $crane->setLabeledType($labeledType);
            if (!is_null($creationDate))
                $crane->setCreationDate($creationDate);
            if (!is_null($deletionDate))
                $crane->setDeletionDate($deletionDate);
            $crane->setRegistrationDate(new \DateTime());
            
            //? Se hace después en RequestNewCrane (UpdateRequestService) 
            // $this->em->persist($crane);
            // $this->em->flush();

            $responseResult = $this->utilsService->sendResponse(true, 200, $this->translator->trans("general.modal.success"), array('crane'=>$crane));
            return $responseResult;

        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }
     

    }

    /**
     * Asignación de una Grúa a una Sucursal
     * En las peticiones que hagamos a sus sistemas debemos usar sus codigos
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Crane $crane - Objeto grua
     * @param BranchOffice $branchOffice - Sucursal
     * @param String $asiturCode - Codigo identificativo de Asitur
     * @param Datetime $dateFrom - Fecha desde (o null para escoger la fecha actual)
     * @param BranchOfficeCrane $existingBranchOfficeCrane - Relación entre grúa y sucursal ya existente (null si no existe)
     * @return array Sera la respuesta estandar y en el data meteremos el objeto BranchOfficeCrane creado
     */

    function assignCraneToBranchOffice($crane, $branchOffice, $asiturCode, $dateFrom = null, $existingBranchOfficeCrane = null){
        try {
            // El primer caso ocurriría en el caso de que exista esa relación pero esta haya expirado (Se procederá a actualizarla)
            if($existingBranchOfficeCrane) {
                $branchOfficeCrane = $existingBranchOfficeCrane;
            } else {
                $branchOfficeCrane = new BranchOfficeCrane();
            }
            
            $branchOfficeCrane->setCrane($crane);
            $branchOfficeCrane->setBranchOffice($branchOffice);
            if (is_null($dateFrom))
                $dateFrom =  new \DateTime();
            
            $branchOfficeCrane->setDateFrom($dateFrom);
            $branchOfficeCrane->setDateTo(null);
            
            $branchOfficeCrane->setCode($asiturCode);
            $this->em->persist($branchOfficeCrane);
            $this->em->flush();
            
            $responseResult = $this->utilsService->sendResponse(true, 200, '', array('branchOfficeCrane'=>$branchOfficeCrane));
            return $responseResult;

        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }    
    }



    /**
     * Quitar grúas de una sucursal
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param BranchOfficeCrane $branchOfficeCrane - Relacion de grua / sucursal
     * @param Datetime $dateTo - Fecha hasta (o null)
     * @return respuesta estandar
     */
    function removeCraneFromBranchOffice($branchOfficeCrane, $dateTo = null){
        try {
            if (is_null($dateTo))
                $dateTo =  new \DateTime();
            
            $branchOfficeCrane->setDateTo($dateTo);
            
            $this->em->persist($branchOfficeCrane);
            $this->em->flush();
            
            $responseResult = $this->utilsService->sendResponse(true, 200, '', array('branchOfficeCrane'=>$branchOfficeCrane));
            return $responseResult;

        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }    
    }


    /**
     * Petición de creación de un nuevo operario o modificación de uno existente
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $formData 
     *                  asiturCode          String  50
     *                  name                String	20
     *                  lastName            String	40
     *                  dni                 String	15
     *                  reference           String  50
     *                  mobile              String	15
     *                  crane_id            String	15 (o null si no tiene)
     *                  operatorStatus_id   String	8
     *                  creationDate        String	8	AAAAMMDD
     *                  deletionDate        String  8
     *                  branchOffice_id     String  8
     * @return array estandar y devolvemos al operador
     */
    function createOrUpdateOperator($operator, $formData){
        try {
            $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneBy(array('code' => $formData['branchOffice_id']));
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneById($branchOffice->getCollaborator());

            // La disponibilidad del operario se establecerá, por defecto, a "No disponible" en la creación de este 
            $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneByCode("not_available");

            if(is_null($operator))
                $operator = new Operator();
            
            $crane = null; 
            if (!is_null($formData['crane_id'])){
                $crane = $this->em->getRepository('App:Crane')->findOneBy(array('code' => $formData['crane_id']));    
            }

            $creationDate = null;
            if (!is_null($formData['creationDate']) && $formData['creationDate'] != '') {
                $creationDate = \DateTime::createFromFormat('Ymd', $formData['creationDate']);
            }

            $deletionDate = null;
            if (!is_null($formData['deletionDate']) && $formData['deletionDate'] != '') {
                $deletionDate = \DateTime::createFromFormat('Ymd', $formData['deletionDate']);
            }
        
            $operatorStatus = $this->em->getRepository('App:OperatorStatus')->findOneById($formData['operatorStatus_id']);

            $operator->setCollaborator($collaborator);
            $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);

            $operator->setCode($formData['asiturCode']);
            $operator->setName($formData['name']);
            $operator->setLastName($formData['lastName']);
            $operator->setDni($formData['dni']);
            $operator->setReference($formData['reference']);
            $operator->setMobile($formData['mobile']);
            $operator->setCrane($crane);
            $operator->setOperatorStatus($operatorStatus);
            
            if (!is_null($creationDate))
                $operator->setCreationDate($creationDate);

            if (!is_null($deletionDate))
                $operator->setCreationDate($deletionDate);
       
                
            //? Se hace después en RequestNewOperator (UpdateRequestService)
            // $operator->setLastSyncDate(new \DateTime());
            // $this->em->persist($operator);
            // $this->em->flush();
            
            $responseResult = $this->utilsService->sendResponse(true, 200, '', array('operator'=>$operator));
            return $responseResult;

        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }
    }


    /**
     * Asignación de un Operador a una Sucursal
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - Operador
     * @param BranchOffice $branchOffice - Sucursal
     * @param String $asiturCode - Codigo identificativo de Asitur
     * @param Datetime $dateFrom - Fecha desde (o null)
     * @param BranchOfficeOperator $existingBranchOfficeOperator - Relación entre operario y sucursal ya existente (null si no existe)
     * @return array Sera la respuesta estandar y en el data meteremos el objeto BranchOfficeOperator creado
     */
    function assignOperatorToBranchOffice($operator, $branchOffice, $asiturCode, $dateFrom = null, $existingBranchOfficeOperator = null){
        try {
            // El primer caso ocurriría en el caso de que exista esa relación pero esta haya expirado (Se procederá a actualizarla)
            if($existingBranchOfficeOperator) {
                $branchOfficeOperator = $existingBranchOfficeOperator;
            } else {
                $branchOfficeOperator = new BranchOfficeOperator();
            }
            
            $branchOfficeOperator->setOperator($operator);
            $branchOfficeOperator->setBranchOffice($branchOffice);
            if (is_null($dateFrom))
                $dateFrom =  new \DateTime();
            
            $branchOfficeOperator->setDateFrom($dateFrom);
            $branchOfficeOperator->setDateTo(null);
            
            $branchOfficeOperator->setCode($asiturCode);
            $this->em->persist($branchOfficeOperator);
            $this->em->flush();
            
            $responseResult = $this->utilsService->sendResponse(true, 200, '', array('branchOfficeOperator'=>$branchOfficeOperator));
            return $responseResult;

        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }    
    }


    /**
     * Quitar un operario de una sucursal
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param BranchOfficeOperator $branchOfficeOperator - Relacion de Operador y Sucursal
     * @param Datetime $dateTo - Fecha hasta (o null)
     * @return respuesta estandar
     */
    function removeOperatorFromBranchOffice($branchOfficeOperator, $dateTo = null){
        try {
            if (is_null($dateTo)) 
                $dateTo =  new \DateTime();
            
            $branchOfficeOperator->setDateTo($dateTo);

            $this->em->persist($branchOfficeOperator);
            $this->em->flush();

            $responseResult = $this->utilsService->sendResponse(true, 200, '', array('branchOfficeOperator'=>$branchOfficeOperator));
            return $responseResult;

        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }
    }


    /**
     * Notificar de la actualización de la grúa de un operario
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Crane $crane - Grua
     * @param Operator $operator - Sucursal
     * @return array estandar
     */
    function assignCraneToOperator($crane, $operator){
        try {
            $operator->setCrane($crane);
            
            $this->em->persist($operator);
            $this->em->flush();

            $responseResult = $this->utilsService->sendResponse(true, 200, '', array('operator'=>$operator));
            return $responseResult;

        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }
    }


    /**
     * Creación de una Intervención desde la API
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $formData 
     * 
     * Entrada	CodigoExpediente	String
     * Entrada	CodigoIntervencion	String
     * Entrada	CodigoColaboradorAsitur	String
     * Entrada	CodigoSucursal	String
     * Entrada	CodigoGruaAsitur	String
     * Entrada	CodigoOperadorAsitur	String
     * Entrada	CodigoEntidad	String
     * Entrada	SolicitudTipo	String
     * Entrada	SolicitudServicio	String
     * Entrada	SolicitudFecha	DateTime
     * Entrada	NombreComunicante	String
     * Entrada	ApellidosComunicante	String
     * Entrada	TelefonoComunicante	String
     * Entrada	TipoVehiculo	String
     * Entrada	MarcaVechiculo	String
     * Entrada	ModeloVehiculo	String
     * Entrada	MatriculaVehiculo	String
     * Entrada	DireccionCompletaVehiculo	String
     * Entrada	DireccionVehiculo	String
     * Entrada	CPVehiculo	String
     * Entrada	LocalidadVehiculo	String
     * Entrada	ProvinciaVehiculo	String
     * Entrada	PosicionXVehiculo	Float
     * Entrada	PosicionYVehiculo	Float
     * Entrada	Parking	Boolean
     * Entrada	OservacionesLocalizacionVehiculo	String
     * Entrada	TipoSiniestro	String
     * Entrada	AmpliacionTipoSinientro	String
     * Entrada	TipoAveria	String
     * Entrada	CausaAveria	String
     * Entrada	MotivoRis	String
     * Entrada	DescripcionAveria	String
     * Entrada	PRIS	Boolean
     * Entrada	VehiculoUbicacion	String
     * Entrada	VehiculoSituacion	String
     * Entrada	VehiculoBloqueado	Boolean
     * @return array estandar con el objeto Intervencion
     * 
    */
    public function createInterventionFromAPI($formData){
        try {
            $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'pte_asignar'));
            $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'P'));
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneBy(array('code' => $formData['CodigoColaboradorAsitur']));
            $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneBy(array('code' => $formData['CodigoSucursal']));
            $crane = $this->em->getRepository('App:Crane')->findOneBy(array('code' => $formData['CodigoGruaAsitur']));
            $operator = $this->em->getRepository('App:Operator')->findOneBy(array('code' => $formData['CodigoOperadorAsitur']));
            $insuranceEntity = $this->em->getRepository('App:InsuranceEntity')->findOneBy(array('id' => $formData['CodigoEntidad']));
            $collaboratorService = $this->em->getRepository('App:CollaboratorService')->findOneBy(array('code' => $formData['SolicitudServicio']));
            $vhType = $this->em->getRepository('App:VhType')->findOneBy(array('code' => $formData['TipoVehiculo']));
            $vhBrand = $this->em->getRepository('App:VhBrand')->findOneBy(array('id' => $formData['MarcaVehiculo']));
            $vhModel = $this->em->getRepository('App:VhModel')->findOneBy(array('id' => $formData['ModeloVehiculo']));
            $town = $this->em->getRepository('App:Town')->findOneBy(array('id' => $formData['LocalidadVehiculo']));
            $province = $this->em->getRepository('App:Province')->findOneBy(array('id' => $formData['ProvinciaVehiculo']));
            $sinisterType = $this->em->getRepository('App:SinisterType')->findOneBy(array('id' => $formData['TipoSiniestro']));
            $sinisterTypeExtension = $this->em->getRepository('App:SinisterTypeExtension')->findOneBy(array('id' => $formData['AmpliacionTipoSinientro']));
            $failureType = $this->em->getRepository('App:FailureType')->findOneBy(array('id' => $formData['TipoAveria']));
            $failureCauseType = $this->em->getRepository('App:FailureCauseType')->findOneBy(array('id' => $formData['CausaAveria']));
            $RISCause = $this->em->getRepository('App:RISCause')->findOneBy(array('id' => $formData['MotivoRis']));

            $requestDate = \DateTime::createFromFormat('Y-m-d H:i:s', $formData['SolicitudFecha']);
            
            $intervention = new Intervention();
            $intervention->setInterventionStatus($interventionStatus);
            $intervention->setPhase($interventionPhase);
            $intervention->setReference($formData['CodigoExpediente']);
            $intervention->setCode($formData['CodigoIntervencion']);
            $intervention->setCollaborator($collaborator);
            $intervention->setBranchOffice($branchOffice);
            $intervention->setCrane($crane);
            $intervention->setOperator($operator);
            $intervention->setInsuranceEntity($insuranceEntity);
            $intervention->setRequestType($formData['SolicitudTipo']);
            $intervention->setCollaboratorService($collaboratorService);
            $intervention->setRequestDate($requestDate);
            $intervention->setCallerName($formData['NombreComunicante']);
            $intervention->setCallerLastname($formData['ApellidosComunicante']);
            $intervention->setCallerPhone($formData['TelefonoComunicante']);
            $intervention->setVhType($vhType);
            $intervention->setVhBrand($vhBrand);
            $intervention->setVhModel($vhModel);
            $intervention->setVhPlate($formData['MatriculaVehiculo']);
            $intervention->setVhFullAddress($formData['DireccionCompletaVehiculo']);
            $intervention->setVhAddress($formData['DireccionVehiculo']);
            $intervention->setVhZipcode($formData['CPVehiculo']);
            $intervention->setVhTown($town);
            $intervention->setVhProvince($province);
            $intervention->setVhLatitude($formData['PosicionXVehiculo']);
            $intervention->setVhLongitude($formData['PosicionYVehiculo']);
            $intervention->setVhParking(filter_var($formData['Parking'], FILTER_VALIDATE_BOOLEAN));
            $intervention->setVhComments($formData['ObservacionesLocalizacionVehiculo']);
            $intervention->setSinisterType($sinisterType);
            $intervention->setSinisterTypeExtension($sinisterTypeExtension);
            $intervention->setFailureType($failureType);
            $intervention->setFailureCauseType($failureCauseType);
            $intervention->setRisCause($RISCause);
            $intervention->setFailureDescription($formData['DescripcionAveria']);
            $intervention->setPossibleRIS(filter_var($formData['PRIS'], FILTER_VALIDATE_BOOLEAN));
            $intervention->setVhUbication($formData['VehiculoUbicacion']);
            $intervention->setVhSituation($formData['VehiculoSituacion']);
            $intervention->setVhLock($formData['VehiculoBloqueado']);
            $intervention->setNCompanyPolicy($formData['NumeroPoliza']);
            
            $intervention->setReceptionDate(new \DateTime());
            $intervention->setLastSyncDate(new \DateTime());

            $notificationResult = $this->backendService->sendNewInterventionNotification($operator, $intervention);

            $responseResult = $this->utilsService->sendResponse(true, 200, '', array('intervention'=>$intervention, 
                                                                                    'notificationSend' => $notificationResult['status']));
            return $responseResult;
        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }
    }


    /**
     * Petición de búsqueda de grúas cercanas a un punto
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Crane $crane (en caso de ser null lo crea, sino lo edita)
     * @param array $formData 
     *                  Entrada	PosicionXIntervencion	Float		
     *                  Entrada	PosicionYIntervencion	Float		
     *                  Entrada	LimiteTiempo	Int		
     *                  Entrada	IncrementoPredisponible	Int		
     *                  Entrada	CodigoServicio	String	8	00000000
     *                  Entrada CodigoTipoGrua	String	8	00000000
     *                  Entrada	CodigoIntervencion	String	8	00000000
     *                  Salida	Resultado	Int		
     *                  Salida	Respuesta	String	255	
     * @return array estandar con el objeto Intervencion
     * 
    */
    public function requestCraneFromAPI($formData){
        try {
            $latitude = $formData['PosicionXIntervencion'];
            $longitude = $formData['PosicionYIntervencion'];
            $timeLimit = $formData['LimiteTiempo'];
            $incrementNotReady = $formData['IncrementoPredisponible'];
            $interventionCode = $formData['CodigoIntervencion'];
            
            $requestCrane = new RequestCrane();
            $requestCrane->setLatitude($latitude);
            $requestCrane->setLongitude($longitude);
            $requestCrane->setTimeLimit($timeLimit);
            $requestCrane->setIncrementNotReady($incrementNotReady);
            $requestCrane->setInterventionCode($interventionCode);

            if (isset($formData['CodigoSucursal']) && $formData['CodigoSucursal'] != ''){  
                $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneBy(array('code' => $formData['CodigoSucursal'] ));
                if (!is_null($branchOffice)){
                    $requestCrane->setBranchOffice($branchOffice);
                }                
            }
            
            foreach ($formData['CodigoServicio'] as $codigoServicio){
                $collaboratorService = $this->em->getRepository('App:CollaboratorService')->findOneBy(array('code' => $codigoServicio));

                $requestCraneCollaboratorService = new RequestCraneCollaboratorService();
                $requestCraneCollaboratorService->setCollaboratorService($collaboratorService);
                $requestCraneCollaboratorService->setRequestCrane($requestCrane);
                $requestCrane->addRequestCraneCollaboratorService($requestCraneCollaboratorService);
                $this->em->persist($requestCraneCollaboratorService);
                $this->em->persist($requestCrane);
            }

            foreach ($formData['CodigoTipoGrua'] as $codigoTipoGrua){
                $craneType = $this->em->getRepository('App:CraneType')->findOneBy(array('id' => $codigoTipoGrua));

                $requestCraneCraneType = new RequestCraneCraneType();
                $requestCraneCraneType->setCraneType($craneType);
                $requestCraneCraneType->setRequestCrane($requestCrane);
                $requestCrane->addRequestCraneCraneType($requestCraneCraneType);
                $this->em->persist($requestCraneCraneType);
                $this->em->persist($requestCrane);
            }

            $this->em->persist($requestCrane);
            $this->em->flush();
            
            if (isset($formData['Instantaneo']) && $formData['Instantaneo']){
                // buscamos posibles gruas cercanas
                $requestCrane->setProcessingDate(new \DateTime()); // para que no salga en el cron
                $this->em->persist($requestCrane);
                $this->em->flush();

                $findCranesResult = $this->findCranesForRequest($requestCrane);
                
                if ($findCranesResult['status']){
                    $resultSendApi = $this->syncService->sendCranesRequested($requestCrane, $findCranesResult['data'], false);
                    $responseResult = $this->utilsService->sendResponse(true, 200, 'Listado encontrado', $resultSendApi);
                    return $responseResult;
                }
                else{
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error buscando grúas');
                    return $responseResult;
                }
            }
            else{
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Petición creada', array('requestCrane_id'=>$requestCrane->getId()));
                return $responseResult;
            }
        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }
    }



    /**
     * Rechazo de un servicio ofrecido a un operador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param CancellationType $cancellationType
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function refuseIntervention(Intervention $intervention, Operator $operator, $cancellationType, $description, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para su rechazo. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'pte_asignar'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'C')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'R')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setCancellationType($cancellationType);
                // lo guardamos también aquí
                $intervention->setRefuseDescription($description); 

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription($description);
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'refuse');
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Rechazado con éxito');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder rechazarse.' );
            return $responseResult;
        }
    }

    /**
     * Rechazo de un servicio ofrecido a un operador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function acceptIntervention(Intervention $intervention, Operator $operator, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // lo segundo a comprobar,es que esté dentro del tiempo permitido para la aceptación
        // del servicio
        $now = new \Datetime();
        if ($now > $intervention->getEndConfirmDate()){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Lo sentimos. Ese servicio ya no está disponible, se ha excedido el tiempo límite para su aceptación.' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para su aceptación. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'pte_asignar'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'C')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'pte_iniciar')); 
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); // Finalizada
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                
                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription('Aceptado con éxito');
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->refuseIntervention($intervention); // notificará que esta en estado aceptado
                                                                                    // podriamos cambiar el nombre a la función
                
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Aceptado con éxito');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder aceptarse.' );
            return $responseResult;
        }
    }


    /**
     * Rechazo de un servicio ofrecido a un operador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function startIntervention(Intervention $intervention, Operator $operator, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Obtenemos la intervencion activa si la tuviera
        $activeIntervention = $this->em->getRepository('App:Intervention')->getActiveInterventionForOperator($operator,true);

        // respondemos un error para que finalice antes la que tiene colgada
        if (!is_null($activeIntervention)){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', array('msg' => 'Es necesario finalizar el servicio en curso para poder iniciar un nuevo servicio',
                                                                                            'intervention_id' => $activeIntervention->getId()) );
            return $responseResult;    
        }

        // Comprobamos que esté en los estados correctos para su inicio. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'pte_iniciar'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); // Finalizada
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        $operatorStatus = $this->em->getRepository('App:OperatorStatus')->findOneBy(array('code' => 'active'));
        $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'available'));
        $availabilityOperatorStatus_new = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'not_available'));
        
        if ($operator->getOperatorStatus()->getId() != $operatorStatus->getId()){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', array('msg' => 'El usuario no está activo'));
            return $responseResult;
        }

        if ($operator->getAvailabilityOperatorStatus()->getId() != $availabilityOperatorStatus->getId()){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', array('msg' => "Es necesario estar 'disponible' para poder iniciar un servicio"));
            return $responseResult;
        }

        $crane = $operator->getCrane();
        $craneStatus = $this->em->getRepository('App:CraneStatus')->findOneBy(array('id' => '1'));
        $availabilityStatus = $this->em->getRepository('App:AvailabilityStatus')->findOneBy(array('id' => '1')); // disponible
        $availabilityStatus_new = $this->em->getRepository('App:AvailabilityStatus')->findOneBy(array('id' => '2')); // ocupada

        if (is_null($crane) OR $crane->getCraneStatus()->getId() != $craneStatus->getId() ){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', array('msg' => "No tiene asignada una grúa 'Activa'"));
            return $responseResult;
        }
        
        if ($crane->getAvailabilityStatus()->getId() != $availabilityStatus->getId() ){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', array('msg' => "La grúa no se encuentra en estado 'disponible'"));
            return $responseResult;
        }
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){
            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_iniciado')); 
            $new_interventionPhase_2 = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'en_transito_recogida')); 
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); // sería el mismo
                
            try {
                $operator = $intervention->getOperator(); 

                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setCrane($crane);
                
                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription('Iniciado con éxito');
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Estado del operador 
                $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus_new); 
                // Estado de la grua
                $crane->setAvailabilityStatus($availabilityStatus_new);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->persist($operator);
                $this->em->persist($crane);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                // Nueva fase casi a la par.. 

                $intervention->setPhase($new_interventionPhase_2);
                
                // Creamos el log de las fases
                $phaseLog_2 = new PhaseLog();
                $phaseLog_2->setIntervention($intervention);
                $phaseLog_2->setPhase($new_interventionPhase_2);
                $phaseLog_2->setOperator($operator);
                $phaseLog_2->setLatitude($latitude);
                $phaseLog_2->setLongitude($longitude);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog_2);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog_2));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Iniciado con éxito', array('msg' => 'Iniciado con éxito',
                                                                                                           'intervention_id' => $intervention->getId()) );
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder iniciarse.' );
            return $responseResult;
        }
    }


    /**
     * Configuramos la intervención como un servicio fallido.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param CancellationType $cancellationType
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function failServiceIntervention(Intervention $intervention, Operator $operator, $cancellationType, $description, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_iniciado'));
        $interventionPhase_2 = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'en_transito_recogida'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId() || 
             $intervention->getPhase()->getId() == $interventionPhase_2->getId() )){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'A')); // lo mismo hay que cambiarlo
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setCancellationType($cancellationType);

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription($description);
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio marcado como fallido');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder marcar un servicio fallido.' );
            return $responseResult;
        }
    }


    /**
     * Primer paso en el proceso de la intervención, el marcar
     * el vehículo / cliente como encontrado
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function foundClientAndVehicle(Intervention $intervention, Operator $operator, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_iniciado'));
        $interventionPhase_2 = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'en_transito_recogida'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ( $intervention->getPhase()->getId() == $interventionPhase->getId() || 
              $intervention->getPhase()->getId() == $interventionPhase_2->getId() )){
            
            // vamos a realizaar un pequeño control de distancia para asegurar
            // que el conductor está cerca del destino
            $APP_KM_ENABLE_VHLOCATED = $this->utilsService->getParameter('APP_KM_ENABLE_VHLOCATED');
            if(!is_null($APP_KM_ENABLE_VHLOCATED) &&
                $APP_KM_ENABLE_VHLOCATED != '' &&
                $APP_KM_ENABLE_VHLOCATED > 0){
                
                $distance = $this->mapsService->calculateDistance($latitude,
                                                                $longitude, 
                                                                $intervention->getVhLatitude(),
                                                                $intervention->getVhLongitude());

                if($distance > $APP_KM_ENABLE_VHLOCATED){
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Estas demasiado lejos para indicar que has localizado al cliente. Te encuentras a ' . ROUND($distance,2). "km del lugar esperado.");
                    return $responseResult;
                }
            }
            
            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'vh_localizado'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                
                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Cliente y vehículo encontrados");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio marcado cliente/vehículo encontrados');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para marcar como cliente/vehículo encontrados.' );
            return $responseResult;
        }
    }


    /**
     * Marcación de si es RIS o no y actualización de estado
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @param bool $isRIS Indica si es RIS
     * @param String $repairDescription notas sobre la reparación. (sea RIS o no)
     * @param RISCauseOperator $RISCauseOperator En caso de ser ris, debemos especificar el tipo, sino será NULL
     * 
     * @param string $description - Descripción de porqué cancela el servicio
     * @return array estandar
     * 
    */
    public function startDeliveryNote(Intervention $intervention, Operator $operator, $latitude, $longitude, bool $isRIS, String $repairDescription, $RISCauseOperator){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }
        
        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'vh_localizado'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            if ($isRIS)
                $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'inicio_albaran_ris'));
            else
                $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'inicio_albaran_no_ris'));
            
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setIsRIS($isRIS);
                $intervention->setRisCauseOperator($RISCauseOperator);
                $intervention->setRepairDescription($repairDescription);
                
                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Selección del tipo de reparación");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();
                
                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                if($isRIS){
                    $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'risCause');
                }
                //*********************/
                
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Guardado el tipo de reparación que necesita el vehículo');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para seleccionar el tipo de reparación.');
            return $responseResult;
        }
    }


    /**
     * Marcación del vehiculo recogido en el no ris
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @param array $params
     * @return array estandar
     * 
    */
    public function pickupVhNoRis(Intervention $intervention, Operator $operator, $latitude, $longitude, $params){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'inicio_albaran_no_ris'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                switch($params['destinationType']){
                    case 'base': $destinationType = "00000001"; break;
                    case 'taller': $destinationType = "00000002"; break;
                    case 'domicilio': $destinationType = "00000003"; break;
                    default: $destinationType = $params['destinationType']; break;
                }

                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setSignerName($params['signerName']);
                $intervention->setSignerPhone($params['signerPhone']);
                $intervention->setSignerEmail($params['signerEmail']);
                $intervention->setKm($params['km']);
                $intervention->setFuel($params['fuel']);
                $intervention->setEquipmentAndObjects($params['equipmentAndObjects']);
                $intervention->setDirtyVh($params['dirtyVh']);
                $intervention->setScratchesOnVh($params['scratchesOnVh']);
                $intervention->setSignerAcknowledgesScratches($params['signerAcknowledgesScratches']);
                $intervention->setSignerIsCompanion($params['signerIsCompanion']);
                $intervention->setDestinationType($destinationType);
                $intervention->setDeliveryName($params['deliveryName']);
                $intervention->setDeliveryAddress($params['deliveryAddress']);
                $intervention->setDeliveryPhone($params['deliveryPhone']);
                $intervention->setDeliveryLatitude($params['deliveryLatitude']);
                $intervention->setDeliveryLongitude($params['deliveryLongitude']);
                $intervention->setDeliveryTown($params['deliveryTown']);
                $intervention->setDeliveryProvince($params['deliveryProvince']);
                $intervention->setDeliveryZipcode($params['deliveryZipcode']);
                $intervention->setSignerDni($params['signerDni']);
                $signature = str_replace(array('-', '_'), array('+', '/'), $params['clientSignature']);
                $intervention->setClientSignature($signature);
                
                // Guardamos las fotos
                foreach ($params['photos'] as $photo) {

                    // Establecemos el tipo de fichero adjunto
                    $sectionPart = $this->em->getRepository('App:VhSectionPart')->findOneById($photo['sectionPartId']);
                    $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneById($sectionPart->getAttachmentType());

                    // Si hay algún fallo se pondrá como tipo Albarán por defecto
                    if(!$attachmentType) {
                        $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneById(1);
                    }

                    $attachment = new Attachment();
                    $attachment->setIntervention($intervention);
                    $attachment->setAttachmentType($attachmentType);
                    $attachment->setOperator($operator);
                    if (isset($photo['description']))
                        $attachment->setDescription($photo['description']);
                    if (isset($photo['descriptionExtra']))
                        $attachment->setDescriptionExtra($photo['descriptionExtra']);
                    if (isset($photo['image'])){
                        $fileContent = str_replace(array('-', '_'), array('+', '/'), $photo['image']);
                        $attachment->setFileData($fileContent);
                    }
                    $attachment->setLongitude($longitude);
                    $attachment->setLatitude($latitude);
                    $attachment->setPhotoType("creacion_albaran");
                    $this->em->persist($attachment);
                }

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Creación albarán");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updateDestination');
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Creado el albarán');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para editar el albarán');
            return $responseResult;
        }
    }


    /**
     * Finalización de albarán de de un servicio RIS
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @param array $params
     * @return array estandar
     * 
    */
    public function finishDeliveryNoteRIS(Intervention $intervention, Operator $operator, $latitude, $longitude, $params){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'inicio_albaran_ris'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran_revision'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                
                $intervention->setSignerName($params['signerName']);
                $intervention->setSignerPhone($params['signerPhone']);
                $intervention->setSignerEmail($params['signerEmail']);
                $intervention->setKm($params['km']);
                $intervention->setFuel($params['fuel']);
                $intervention->setEquipmentAndObjects($params['equipmentAndObjects']);
                $intervention->setDirtyVh($params['dirtyVh']);
                $intervention->setScratchesOnVh($params['scratchesOnVh']);
                $intervention->setSignerAcknowledgesScratches($params['signerAcknowledgesScratches']);
                $intervention->setSignerDni($params['signerDni']);
                $signature = str_replace(array('-', '_'), array('+', '/'), $params['clientSignature']);
                $intervention->setClientSignature($signature);

                // Guardamos las fotos
                foreach ($params['photos'] as $photo) {

                    // Establecemos el tipo de fichero adjunto
                    $sectionPart = $this->em->getRepository('App:VhSectionPart')->findOneById($photo['sectionPartId']);
                    $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneById($sectionPart->getAttachmentType());
                    
                    // Si hay algún fallo se pondrá como tipo Albarán por defecto
                    if(!$attachmentType) {
                        $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneById(1);
                    }

                    $attachment = new Attachment();
                    $attachment->setIntervention($intervention);
                    $attachment->setAttachmentType($attachmentType);
                    $attachment->setOperator($operator);
                    if (isset($photo['description']))
                        $attachment->setDescription($photo['description']);
                    if (isset($photo['descriptionExtra']))
                        $attachment->setDescriptionExtra($photo['descriptionExtra']);
                    if (isset($photo['image'])){
                        $fileContent = str_replace(array('-', '_'), array('+', '/'), $photo['image']);
                        $attachment->setFileData($fileContent);
                    }
                    $attachment->setLongitude($longitude);
                    $attachment->setLatitude($latitude);
                    $attachment->setPhotoType("creacion_albaran");
                    $this->em->persist($attachment);
                }

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Finalización Albarán RIS");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Finalizado el albarán RIS');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para finalizar el albarán RIS');
            return $responseResult;
        }
    }



    /**
     * Configuramos la intervención como un servicio fallido en la recogida no ris.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param IncidenceType $incidenceType
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function failServiceInterventionLoadVhNoRIS(Intervention $intervention, Operator $operator, IncidenceType $incidenceType, $description, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        $interventionProblemType = $this->em->getRepository('App:InterventionProblemType')->findOneBy(array('description' => 'Incidencia')); 

        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'vh_no_cargado')); // ?? servicio_finalizado
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'R')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setHasIncidence(true);

                // Marcamos el check de avería en destino, por tenerlo en una variable..
                if( $incidenceType->getCode() == '00000003' || 
                    $incidenceType->getDescription() == 'Avería de vehículo'){
                    $intervention->setHasDestinationFailure(true);
                }

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription($description);
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos el fallo
                $interventionFails = new InterventionFails();
                $interventionFails->setIntervention($intervention);
                $interventionFails->setInterventionProblemType($interventionProblemType);
                $interventionFails->setIncidenceType($incidenceType);
                $interventionFails->setDescription($description);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->persist($interventionFails);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio marcado como fallido en la recogida del vehículo');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder marcar un servicio fallido en la recogida del vehículo.' );
            return $responseResult;
        }
    }


    /**
     * Configuramos la intervención como un servicio fallido en la recogida no ris.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param CancellationType $cancellationType
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function loadVhNoRIS(Intervention $intervention, Operator $operator, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'vh_cargado'));
            $new_interventionPhase_2 = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'en_transito_entrega'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription('Vehículo cargado en la grúa');
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                // nuevo estado a la "par"..
                $intervention->setPhase($new_interventionPhase_2);

                // Creamos el log de las fases
                $phaseLog_2 = new PhaseLog();
                $phaseLog_2->setIntervention($intervention);
                $phaseLog_2->setPhase($new_interventionPhase_2);
                $phaseLog_2->setOperator($operator);
                $phaseLog_2->setLatitude($latitude);
                $phaseLog_2->setLongitude($longitude);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog_2);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog_2));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio marcado como vehículo cargado en la grúa');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder marcar un servicio como vehículo recogido.' );
            return $responseResult;
        }
    }


    /**
     * Entrega exitosa del Vh RIS
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @param array $params
     * @return array estandar
     * 
    */
    public function deliveryVhNoRIS(Intervention $intervention, Operator $operator, $latitude, $longitude, $params){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'vh_cargado'));
        $interventionPhase_2 = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'en_transito_entrega'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId() || 
             $intervention->getPhase()->getId() == $interventionPhase_2->getId() )){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'entrega_destino'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);

                $intervention->setDeliveryName($params['deliveryName']);
                $intervention->setDeliveryAddress($params['deliveryAddress']);
                $intervention->setDeliveryPhone($params['deliveryPhone']);
                $intervention->setDeliveryLatitude($params['deliveryLatitude']);
                $intervention->setDeliveryLongitude($params['deliveryLongitude']);
                $intervention->setDeliveryTown($params['deliveryTown']);
                $intervention->setDeliveryProvince($params['deliveryProvince']);
                $intervention->setDeliveryZipcode($params['deliveryZipcode']);
                $intervention->setReceiverIsLocated($params['receiverIsLocated']);
                $intervention->setReceiverName($params['receiverName']);
                $intervention->setReceiverEmail($params['receiverEmail']);

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Vehículo entregado");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updateDestination');
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Vehículo entregado');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para entregar el vehículo');
            return $responseResult;
        }
    }


    /**
     * Revisión del albarán
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @param array $params
     * @return array estandar
     * 
    */
    public function revisionDeliveryNote(Intervention $intervention, Operator $operator, $latitude, $longitude, $params){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'entrega_destino'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran_revision'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                
                if($params['editDeliveryNote']){
                    $intervention->setKmCheck($params['kmCheck']);
                    $intervention->setFuelCheck($params['fuelCheck']);
                    $intervention->setEquipmentAndObjectsCheck($params['equipmentAndObjectsCheck']);
                    $intervention->setDirtyVhCheck($params['dirtyVhCheck']);
                    $intervention->setScratchesOnVhCheck($params['scratchesOnVhCheck']);
                }

                $intervention->setReceiverDni($params['receiverDni']);
                $signature = str_replace(array('-', '_'), array('+', '/'), $params['receiverSignature']);
                $intervention->setReceiverSignature($signature);

                // Guardamos las fotos
                foreach ($params['photos'] as $photo) {

                    // Establecemos el tipo de fichero adjunto
                    $sectionPart = $this->em->getRepository('App:VhSectionPart')->findOneById($photo['sectionPartId']);
                    $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneById($sectionPart->getAttachmentType());
                    
                    // Si hay algún fallo se pondrá como tipo Albarán por defecto
                    if(!$attachmentType) {
                        $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneById(1);
                    }

                    $attachment = new Attachment();
                    $attachment->setIntervention($intervention);
                    $attachment->setAttachmentType($attachmentType);
                    $attachment->setOperator($operator);
                    if (isset($photo['description']))
                        $attachment->setDescription($photo['description']);
                    if (isset($photo['descriptionExtra']))
                        $attachment->setDescriptionExtra($photo['descriptionExtra']);
                    if (isset($photo['image'])){
                        $fileContent = str_replace(array('-', '_'), array('+', '/'), $photo['image']);
                        $attachment->setFileData($fileContent);
                    }

                    $attachment->setLongitude($longitude);
                    $attachment->setLatitude($latitude);
                    $attachment->setPhotoType("modificacion_albaran");
                    $this->em->persist($attachment);
                }

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Revisión de albarán finalizada");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Revisión de albarán finalizado');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder revisar el albarán');
            return $responseResult;
        }
    }

    /**
     * Finalización del servicio
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function finishService(Intervention $intervention, Operator $operator, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        $crane = $intervention->getCrane();
        if (is_null($crane)){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', array('msg' => "No tiene asignada una grúa"));
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran_revision'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){
                
            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
            
            // nuevos estados de disponibilidad
            $availabilityStatus_new = $this->em->getRepository('App:AvailabilityStatus')->findOneBy(array('id' => '1')); // Disponible
            $availabilityOperatorStatus_new = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'available'));
            
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                
                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Servicio finalizado");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Estado del operador 
                $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus_new); 
                // Estado de la grua
                $crane->setAvailabilityStatus($availabilityStatus_new);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->persist($operator);
                $this->em->persist($crane);
                $this->em->flush();

                // llamamos al servicio de cálculo de distancia por la api
                $this->setCalcDistanceAPI($intervention);
                $intervention = $this->em->getRepository('App:Intervention')->findOneBy(array('id' => $intervention->getId()));

                // lo cogemos de nuevo por si no detecta los cámbios dentro del servicio
                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio finalizado');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder finalizar el servicio');
            return $responseResult;
        }
    }


    /**
     * Cierre final del servicio (pasaría al histórico)
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @param array $tickets (Campos "image", "description", "total")
     * @return array estandar
     * 
    */
    public function closeService(Intervention $intervention, Operator $operator, $latitude, $longitude, array $tickets){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        
        if ( ($intervention->getInterventionStatus()->getId() == $interventionStatus->getId()) &&
            ($intervention->getPhase()->getId() == $interventionPhase->getId())){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_cerrado'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                // TODO completar datos
                
                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription("Servicio cerrado");
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos los tickets
                foreach ($tickets as $ticket) {
                    $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneById(3);

                    $attachment = new Attachment();
                    $attachment->setIntervention($intervention);
                    $attachment->setAttachmentType($attachmentType);
                    $attachment->setOperator($operator);
                    if (isset($ticket['description']))
                        $attachment->setDescription($ticket['description']);
                    if (isset($ticket['total']))
                        $attachment->setTotal($ticket['total']);
                    if (isset($photo['image'])){
                        $fileContent = str_replace(array('-', '_'), array('+', '/'), $ticket['image']);
                        $attachment->setFileData($fileContent);
                    }
                    $attachment->setLongitude($longitude);
                    $attachment->setLatitude($latitude);
                    $this->em->persist($attachment);
                }

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio cerrado');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder cerrar el servicio');
            return $responseResult;
        }
    }
    

    /**
     * Comprueba si tiene que hacer una actualización en el registro de fases,
     * debido a la cercania del conductor al origen o al destino
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function checkInterventionForAutoPhase(Intervention $intervention, Operator $operator, $latitude, $longitude){
        $msg_response = 'Sin actualización de estados. ';

        if(!is_null($intervention) && !is_null($intervention->getPhase()) && 
            (   $intervention->getPhase()->getCode() == 'en_transito_recogida' ||
                $intervention->getPhase()->getCode() == 'vh_cargado') ){
            
            $APP_KM_PROXIMITY_AUTO_STATUS = $this->em->getRepository('App:Parameters')->getParameter('APP_KM_PROXIMITY_AUTO_STATUS');

            if ($intervention->getPhase()->getCode() == 'en_transito_recogida'){
                $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'grua_cerca_asegurado'));

                // Calculamos distacia 
                $distance = $this->mapsService->calculateDistance($latitude,
                                                                $longitude, 
                                                                $intervention->getVhLatitude(),
                                                                $intervention->getVhLongitude());
                
                if($distance <= $APP_KM_PROXIMITY_AUTO_STATUS){
                     // Busco si no hay en el log
                    $findInLog = $this->em->getRepository('App:Intervention')->getNPhasesInHistoryLog($intervention, $new_interventionPhase);
                    
                    if ($findInLog == 0){
                        // Creamos el log de las fases
                        $phaseLog = new PhaseLog();
                        $phaseLog->setIntervention($intervention);
                        $phaseLog->setPhase($new_interventionPhase);
                        $phaseLog->setOperator($operator);
                        $phaseLog->setLatitude($latitude);
                        $phaseLog->setLongitude($longitude);

                        $this->em->persist($phaseLog);
                        $this->em->flush();

                        $responseResult = $this->utilsService->sendResponse(true, 200, "Actualizado histórico de fase: " . $new_interventionPhase->getCode().".");
                        return $responseResult;
                    }
                }
            }

            if ($intervention->getPhase()->getCode() == 'vh_cargado'){
                $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'grua_cerca_destino'));

                // Calculamos distacia 
                $distance = $this->mapsService->calculateDistance($latitude,
                                                                $longitude, 
                                                                $intervention->getDeliveryLatitude(),
                                                                $intervention->getDeliveryLongitude());
                
                if($distance <= $APP_KM_PROXIMITY_AUTO_STATUS){
                     // Busco si no hay en el log
                    $findInLog = $this->em->getRepository('App:Intervention')->getNPhasesInHistoryLog($intervention, $new_interventionPhase);
                    
                    if ($findInLog == 0){
                        // Creamos el log de las fases
                        $phaseLog = new PhaseLog();
                        $phaseLog->setIntervention($intervention);
                        $phaseLog->setPhase($new_interventionPhase);
                        $phaseLog->setOperator($operator);
                        $phaseLog->setLatitude($latitude);
                        $phaseLog->setLongitude($longitude);

                        $this->em->persist($phaseLog);
                        $this->em->flush();

                        $responseResult = $this->utilsService->sendResponse(true, 200, "Actualizado histórico de fase: " . $new_interventionPhase->getCode().".");
                        return $responseResult;
                    }
                }
            }
        }

        $responseResult = $this->utilsService->sendResponse(false, 400, $msg_response);
        return $responseResult;
    }


    /**
     * Comprueba si una intervención tiene activo el botón de cancelación en la 
     * app
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @return bool Con el resultado
     * 
    */
    public function getAvailableCancellation(Intervention $intervention){
        if (!is_null($intervention->getPhase())){
            $phases = array('servicio_iniciado',
                            'vh_localizado',
                            'inicio_albaran_no_ris',
                            'inicio_albaran_ris',
                            'firma_albaran',
                            'vh_cargado',
                            'entrega_destino',
                            'grua_cerca_asegurado',
                            'grua_cerca_destino',
                            'en_transito_recogida',
                            'en_transito_entrega');

            // Quedan fuera: 
            /* $phasesNo = array(  'servicio_fallido',
                                'vh_no_cargado',
                                'firma_albaran_revision',
                                'servicio_finalizado',
                                'pte_iniciar',
                                'servicio_cerrado',
                                'pte_asignar');*/

            if (in_array($intervention->getPhase()->getCode(), $phases)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Esta  opción  se mostraráen  el  menú una  vez  que  haya  iniciado  
     * un  servicio  y desaparecerá al finalizar éste.
     * Es el simulador de "predisponible"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @return bool Con el resultado
     * 
    */
    public function getAvailableCraneReady(Intervention $intervention){
        if (!is_null($intervention->getPhase())){
            $phases = array('servicio_iniciado',
                            'vh_localizado',
                            'inicio_albaran_no_ris',
                            'inicio_albaran_ris',
                            'firma_albaran',
                            'vh_cargado',
                            'entrega_destino',
                            'grua_cerca_asegurado',
                            'grua_cerca_destino',
                            'en_transito_recogida',
                            'en_transito_entrega',
                            'servicio_fallido',
                            'vh_no_cargado',
                            'firma_albaran_revision');

            // Quedan fuera: 
            /* $phasesNo = array('pte_asignar',
                                'pte_iniciar',
                                'servicio_finalizado',
                                'servicio_cerrado',
                                );*/
            
            // en caso de tener un servicio activo y la grúa estar "Ocupada", id = 2
            if (in_array($intervention->getPhase()->getCode(), $phases) && 
                !is_null($intervention->getCrane()) && 
                $intervention->getCrane()->getAvailabilityStatus()->getId() == 2
                ) {
                return true;
            }
        }
        return false;
    }

    //------------------------------------

    /**
     * Configuramos la intervención como un servicio fallido como incidencia.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param IncidenceType $incidenceType
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function setInterventionFails(Intervention $intervention, Operator $operator, IncidenceType $incidenceType, $description, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        //$interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran')); // puede ser varias fases..
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        $interventionProblemType = $this->em->getRepository('App:InterventionProblemType')->findOneBy(array('description' => 'Incidencia')); 

        if ( $intervention->getInterventionStatus()->getId() == $interventionStatus->getId() ){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'R')); // Rechazo - lo mismo hay que cambiarlo
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setHasIncidence(true);

                // Marcamos el check de avería en destino, por tenerlo en una variable..
                if( $incidenceType->getCode() == '00000003' || 
                    $incidenceType->getDescription() == 'Avería de vehículo'){
                    $intervention->setHasDestinationFailure(true);
                }
                
                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription($description);
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos el fallo
                $interventionFails = new InterventionFails();
                $interventionFails->setIntervention($intervention);
                $interventionFails->setInterventionProblemType($interventionProblemType);
                $interventionFails->setIncidenceType($incidenceType);
                $interventionFails->setDescription($description);

                // Marcamos a la grúa como disponible de nuevo
                $availableStatus = $this->em->getRepository('App:AvailabilityStatus')->findOneById(1);  // Disponibilidad -> disponible
                $crane = $operator->getCrane();
                $crane->setAvailabilityStatus($availableStatus);

                // Restablecemos la disponibilidad del operario
                $availableOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneByCode("available");  // Disponibilidad -> disponible
                $operator->setAvailabilityOperatorStatus($availableOperatorStatus);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->persist($interventionFails);
                $this->em->persist($crane);
                $this->em->persist($operator);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'interventionFails', array('interventionFails' => $interventionFails));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio marcado como rechazado por incidencia');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder marcar una incidencia en el servicio.' );
            return $responseResult;
        }
    }


    /**
     * Configuramos la intervención como un servicio fallido en la recogida no ris.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param InterventionFailureType $interventionFailureType
     * @param string $description - Descripción de porqué cancela el servicio
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function setInterventionFailureType(Intervention $intervention, Operator $operator, InterventionFailureType $interventionFailureType, $description, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        // Comprobamos que esté en los estados correctos para ponerlo como fallido. Los cuales son:
        //$interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'firma_albaran'));
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_iniciado')); 
        $interventionPhase_2 = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'en_transito_recogida')); 
            
        
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'F')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 
        $interventionProblemType = $this->em->getRepository('App:InterventionProblemType')->findOneBy(array('description' => 'Fallido')); 

        if ( $intervention->getInterventionStatus()->getId() == $interventionStatus->getId() && 
            (($intervention->getPhase()->getId() == $interventionPhase->getId()) ||
                ($intervention->getPhase()->getId() == $interventionPhase_2->getId()))
        ){

            // El nuevo estado será
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
            $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'R')); // Rechazo - lo mismo hay que cambiarlo
                
            try {
                // Guardamos estados
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setHasIncidence(true);

                // Creamos el log de las fases
                $phaseLog = new PhaseLog();
                $phaseLog->setIntervention($intervention);
                $phaseLog->setPhase($new_interventionPhase);
                $phaseLog->setOperator($operator);
                $phaseLog->setLatitude($latitude);
                $phaseLog->setLongitude($longitude);
                
                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator($operator);
                $interventionLog->setDescription($description);
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                // Guardamos el fallo
                $interventionFails = new InterventionFails();
                $interventionFails->setIntervention($intervention);
                $interventionFails->setInterventionProblemType($interventionProblemType);
                $interventionFails->setInterventionFailureType($interventionFailureType);
                $interventionFails->setDescription($description);

                // Marcamos a la grúa como disponible de nuevo
                $availableStatus = $this->em->getRepository('App:AvailabilityStatus')->findOneById(1);  // Disponibilidad -> disponible
                $crane = $operator->getCrane();
                $crane->setAvailabilityStatus($availableStatus);

                // Restablecemos la disponibilidad del operario
                $availableOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneByCode("available");  // Disponibilidad -> disponible
                $operator->setAvailabilityOperatorStatus($availableOperatorStatus);

                // Guardamos en BD
                $this->em->persist($intervention);  
                $this->em->persist($phaseLog);
                $this->em->persist($interventionLog);
                $this->em->persist($interventionFails);
                $this->em->persist($crane);
                $this->em->persist($operator);
                $this->em->flush();

                //*********************/
                $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'interventionFailure', array('interventionFails' => $interventionFails));
                //*********************/

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Servicio marcado como rechazado por fallido');
                return $responseResult;
            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no está en el estado necesario para poder marcar un fallido en el servicio.' );
            return $responseResult;
        }
    }


    /**
     * Va a la fase anterior. La idea es que cuando se quiera
     * ir a una fase anterior, se llame a esta función, deshara 
     * el estado, y posteriormente llamas a la función de 
     * "obtener detalles" y renderizas la pantalla que toque.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param Operator $operator
     * @param float $latitude
     * @param float $longitude
     * @return array estandar
     * 
    */
    public function goBackPhase(Intervention $intervention, Operator $operator, $latitude, $longitude){
        
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a su cuenta' );
            return $responseResult;
        }

        if (is_null($intervention->getPhase()) || is_null($intervention->getPhase()->getPreviousPhase())){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', "La fase '" . $intervention->getPhase()->getCode() . "' no se puede poner a un estado previo.");
            return $responseResult;
        }

        $oldPhase = $intervention->getPhase();

        // caso especial porque pueden ser 2
        if ($intervention->getPhase()->getCode() == 'firma_albaran_revision' && $intervention->getIsRIS())
            $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'inicio_albaran_ris'));
        else
            $new_interventionPhase = $intervention->getPhase()->getPreviousPhase();
        
        try {
            // Guardamos estados
            $intervention->setPhase($new_interventionPhase);
            
            // Creamos el log de las fases
            $phaseLog = new PhaseLog();
            $phaseLog->setIntervention($intervention);
            $phaseLog->setPhase($new_interventionPhase);
            $phaseLog->setOperator($operator);
            $phaseLog->setLatitude($latitude);
            $phaseLog->setLongitude($longitude);
            
            // Guardamos en BD
            $this->em->persist($intervention);  
            $this->em->persist($phaseLog);
            $this->em->flush();

            //*********************/
            $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase', array('phaseLog' => $phaseLog));
            //*********************/

            $responseResult = $this->utilsService->sendResponse(true, 200, "Actualizado de fase '" . $oldPhase->getCode() . "' a fase '" . $new_interventionPhase->getCode() . "'.");
            return $responseResult;
        } catch (\Exception $e) {
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
            return $responseResult;
        }
    }

    /**
     * Guarda en el atributo 'distance' la distancia vía api maps de las localizaciones
     * entre los 3 últimos estados marcados. 
     * - servicio_iniciado 
     * - vh_localizado 
     * - servicio_finalizado
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @return array estandar
     */
    public function setCalcDistanceAPI(Intervention $intervention){

        $repoInter = $this->em->getRepository('App:Intervention');

        $phase_servicio_iniciado = $repoInter->getLastPhaseLogOfIntervention($intervention, 'servicio_iniciado');
        $phase_vh_localizado = $repoInter->getLastPhaseLogOfIntervention($intervention, 'vh_localizado');
        $phase_servicio_finalizado = $repoInter->getLastPhaseLogOfIntervention($intervention, 'servicio_finalizado');

        // Controlamos los estados
        if (is_null($phase_servicio_iniciado) ||
            is_null($phase_servicio_iniciado->getLatitude()) || $phase_servicio_iniciado->getLatitude() == '' ||
            is_null($phase_servicio_iniciado->getLongitude()) || $phase_servicio_iniciado->getLongitude() == ''){
            $responseResult = $this->utilsService->sendResponse(false, 400, "No se ha encontrado ningún estado válido 'servicio_iniciado' en el histórico");
            return $responseResult;
        }

        if (is_null($phase_vh_localizado) ||
            is_null($phase_vh_localizado->getLatitude()) || $phase_vh_localizado->getLatitude() == '' ||
            is_null($phase_vh_localizado->getLongitude()) || $phase_vh_localizado->getLongitude() == ''){
            $responseResult = $this->utilsService->sendResponse(false, 400, "No se ha encontrado ningún estado válido 'vh_localizado' en el histórico");
            return $responseResult;
        }

        if (is_null($phase_servicio_finalizado) ||
            is_null($phase_servicio_finalizado->getLatitude()) || $phase_servicio_finalizado->getLatitude() == '' ||
            is_null($phase_servicio_finalizado->getLongitude()) || $phase_servicio_finalizado->getLongitude() == ''){
            $responseResult = $this->utilsService->sendResponse(false, 400, "No se ha encontrado ningún estado válido 'servicio_finalizado' en el histórico");
            return $responseResult;
        }

        $section_1_result = $this->mapsService->calculateDistanceAPI($phase_servicio_iniciado->getLatitude(),
                                                                    $phase_servicio_iniciado->getLongitude(),
                                                                    $phase_vh_localizado->getLatitude(),
                                                                    $phase_vh_localizado->getLongitude()); 

        if ($section_1_result['status']){
            $section_1 = $section_1_result['data']['distance_value'];
        }
        else{
            // Plan B, lo hacemos por distancia geométrica
            $section_1 = $this->mapsService->calculateDistance($phase_servicio_iniciado->getLatitude(),
                                                                $phase_servicio_iniciado->getLongitude(),
                                                                $phase_vh_localizado->getLatitude(),
                                                                $phase_vh_localizado->getLongitude()); 
        }

        $section_2_result = $this->mapsService->calculateDistanceAPI($phase_vh_localizado->getLatitude(),
                                                                    $phase_vh_localizado->getLongitude(),
                                                                    $phase_servicio_finalizado->getLatitude(),
                                                                    $phase_servicio_finalizado->getLongitude()); 
        if ($section_2_result['status']){
            $section_2 = $section_2_result['data']['distance_value'];
        }
        else{
            // Plan B, lo hacemos por distancia geométrica
            $section_2 = $this->mapsService->calculateDistance($phase_vh_localizado->getLatitude(),
                                                                $phase_vh_localizado->getLongitude(),
                                                                $phase_servicio_finalizado->getLatitude(),
                                                                $phase_servicio_finalizado->getLongitude()); 
        }

        $full_km = round($section_1 + $section_2,2);

        $intervention->setDistance($full_km);
        $this->em->persist($intervention);  
        $this->em->flush();
        
        $responseResult = $this->utilsService->sendResponse(true, 200, "Km calculados: " . $full_km);
        return $responseResult;
    }


    // TODO
     /**
     * Busca los operadores (con gruas) disponibles par aun servicio
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param RequestCrane $requestCrane
     * @return array estandar y en el data va la siguiente estructura:
     * 
     *  $element = [];
     *  $element['operator_id']
     *  $element['operator_code']
     *  $element['crane_code']
     *  $element['collaborator_code']
     *  $element['collaborator_service_code']
     *  $element['branchoffice_code']
     *  $element['interventionActive']
     *  $element['latitude']
     *  $element['longitude']
     *  $element['distanceKmNoAPI'] 
     *  $element['distanceKm']
     *  $element['timeMinutes']
     */
    public function findCranesForRequest(RequestCrane $requestCrane){
        $now = new \DateTime();
        $now_str = $now->format('Y-m-d H:i:s');
        
        $array_id_collaborator_service = [];
        $cacheGoogleDistance = [];

        foreach ($requestCrane->getRequestCraneCollaboratorServices() as $collaboratorService){
            array_push($array_id_collaborator_service, $collaboratorService->getCollaboratorService()->getId());
        }
        $array_id_crane_type = [];
        foreach ($requestCrane->getRequestCraneCraneTypes() as $craneType){
            array_push($array_id_crane_type, $craneType->getCraneType()->getId());
        }

        //? en un futuro lo pondrán
        $listCollaboratorServiceImplode = "'".implode("','", $array_id_collaborator_service)."'"; 
        $listCraneTypeImplode = "'".implode("','", $array_id_crane_type)."'"; 
               
        $lat = $requestCrane->getLatitude();
        $lng = $requestCrane->getLongitude();
        $sf = 3.14159 / 180; // scaling factor
        // Rango de KM
        $limitRange = $this->utilsService->getParameter('SEARCH_CRANES_MAX_KM_STRAIGHT');
        $minutes_last_position_check = $this->utilsService->getParameter('SEARCH_CRANES_MINUTES_LAST_POSITION_CHECK');
        /*
        //Original en esta primera versión eran los 15 primeros, pero como puede estar en muchas sucursales
        //podia darse el caso de enviar siempre el mismo proveedor
        $sql = "SELECT o.id AS operator_id,
                        o.code AS operator_code,
                        o.latitude AS latitude, 
                        o.longitude AS longitude,
                        coll.id AS collaborator_id,
                        coll.code AS collaborator_code,
                        c.id AS crane_id,
                        c.code AS crane_code,
                        bo.code AS branchoffice_code,
                        collser.code AS collaborator_service_code,
                        6371 * ACOS(SIN(o.latitude * $sf) * SIN( $lat * $sf ) +
                                COS( o.latitude * $sf) * COS($lat * $sf) * COS((o.longitude - $lng) * $sf)) AS DistanceKm
                FROM operator AS o 
                LEFT JOIN crane AS c ON o.crane_id = c.id
                LEFT JOIN operator_status AS os ON o.operator_status_id = os.id 
                LEFT JOIN availability_operator_status AS aos ON o.availability_operator_status_id = aos.id 
                LEFT JOIN crane_status AS cs ON c.crane_status_id = cs.id 
                LEFT JOIN availability_status AS cas ON c.availability_status_id = cas.id 
                LEFT JOIN crane_service AS crs ON crs.crane_id = c.id
                LEFT JOIN collaborator AS coll ON coll.id = c.collaborator_id
                LEFT JOIN branch_office_crane AS boc ON boc.crane_id = c.id
                LEFT JOIN collaborator_service AS collser ON collser.id = crs.collaborator_service_id
                LEFT JOIN branch_office AS bo ON boc.branch_office_id = bo.id
                WHERE   os.code = 'active' AND 
                        aos.code = 'available' AND
                        cs.code = '00000001' AND 
                        cas.code = '00000001' AND
                        o.latitude IS NOT NULL AND 
                        o.longitude IS NOT NULL AND 
                        c.crane_type_id IN (".$listCraneTypeImplode.") AND 
                        collser.id IN (".$listCollaboratorServiceImplode.") AND
                        crs.date_from <= :now AND 
                        (crs.date_to >= :now OR crs.date_to IS NULL) ";
                        
        if (!is_null($requestCrane->getBranchOffice())){
            $sql .= " AND boc.branch_office_id = '" . $requestCrane->getBranchOffice()->getId() . "' ";
        }

        $sql .=         "AND
                        boc.date_from <= :now AND 
                        (boc.date_to >= :now OR boc.date_to IS NULL) AND
                        
                        TIMESTAMPDIFF(MINUTE,o.last_position_date,NOW()) < $minutes_last_position_check AND
                        6371 * ACOS(SIN(o.latitude * $sf) * SIN( $lat * $sf ) + COS( o.latitude * $sf) * COS($lat * $sf) * COS((o.longitude - $lng) * $sf)) <= $limitRange      
                        ORDER BY DistanceKm LIMIT 15";
                        //GROUP BY o.id 
        */



        $sql = "SELECT o2.id AS operator_id ,
                        6371 * ACOS(SIN(o2.latitude * $sf) * SIN( $lat * $sf ) +
                                COS( o2.latitude * $sf) * COS($lat * $sf) * COS((o2.longitude - $lng) * $sf)) AS DistanceKm
                FROM operator AS o2 
                LEFT JOIN crane AS c2 ON o2.crane_id = c2.id
                LEFT JOIN operator_status AS os2 ON o2.operator_status_id = os2.id 
                LEFT JOIN availability_operator_status AS aos2 ON o2.availability_operator_status_id = aos2.id 
                LEFT JOIN crane_status AS cs2 ON c2.crane_status_id = cs2.id 
                LEFT JOIN availability_status AS cas2 ON c2.availability_status_id = cas2.id 
                LEFT JOIN crane_service AS crs2 ON crs2.crane_id = c2.id
                LEFT JOIN collaborator AS coll2 ON coll2.id = c2.collaborator_id
                LEFT JOIN branch_office_crane AS boc2 ON boc2.crane_id = c2.id
                LEFT JOIN collaborator_service AS collser2 ON collser2.id = crs2.collaborator_service_id
                LEFT JOIN branch_office AS bo2 ON boc2.branch_office_id = bo2.id
                WHERE   os2.code = 'active' AND 
                        aos2.code = 'available' AND
                        cs2.code = '00000001' AND 
                        cas2.code = '00000001' AND
                        o2.latitude IS NOT NULL AND 
                        o2.longitude IS NOT NULL AND 
                        c2.crane_type_id IN (".$listCraneTypeImplode.") AND 
                        collser2.id IN (".$listCollaboratorServiceImplode.") AND
                        crs2.date_from <= '".$now_str."' AND 
                        (crs2.date_to >= '".$now_str."' OR crs2.date_to IS NULL) ";
                        
        if (!is_null($requestCrane->getBranchOffice())){
            $sql .= " AND boc2.branch_office_id = '" . $requestCrane->getBranchOffice()->getId() . "' ";
        }

        $sql .=         "AND
                        boc2.date_from <= '".$now_str."' AND 
                        (boc2.date_to >= '".$now_str."' OR boc2.date_to IS NULL) AND
                        
                        TIMESTAMPDIFF(MINUTE,o2.last_position_date,NOW()) < $minutes_last_position_check AND
                        6371 * ACOS(SIN(o2.latitude * $sf) * SIN( $lat * $sf ) + COS( o2.latitude * $sf) * COS($lat * $sf) * COS((o2.longitude - $lng) * $sf)) <= $limitRange      
                        GROUP BY o2.id
                        ORDER BY DistanceKm LIMIT 15
                       ";

        $parameters = [];
        $now = new \DateTime();
        //$parameters['now'] = $now->format('Y-m-d H:i:s');
        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
        //return  $queryRecords;
        // Si no hay resultados terminamos el algoritmo
        if (!count($queryRecords)){
            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', []);
            return $responseResult;
        }

        $operator_list = '';
        foreach ($queryRecords as $row){
            if ($operator_list != '')
                $operator_list .= ',';
            $operator_list .= "'".$row['operator_id']."'";
        }

        // ahora hacemos la query principal filtrando unicamente por el operador
        $sql = "SELECT o.id AS operator_id,
                o.code AS operator_code,
                o.latitude AS latitude, 
                o.longitude AS longitude,
                coll.id AS collaborator_id,
                coll.code AS collaborator_code,
                c.id AS crane_id,
                c.code AS crane_code,
                bo.code AS branchoffice_code,
                collser.code AS collaborator_service_code,
                6371 * ACOS(SIN(o.latitude * $sf) * SIN( $lat * $sf ) +
                        COS( o.latitude * $sf) * COS($lat * $sf) * COS((o.longitude - $lng) * $sf)) AS DistanceKm
        FROM operator AS o 
        LEFT JOIN crane AS c ON o.crane_id = c.id
        LEFT JOIN operator_status AS os ON o.operator_status_id = os.id 
        LEFT JOIN availability_operator_status AS aos ON o.availability_operator_status_id = aos.id 
        LEFT JOIN crane_status AS cs ON c.crane_status_id = cs.id 
        LEFT JOIN availability_status AS cas ON c.availability_status_id = cas.id 
        LEFT JOIN crane_service AS crs ON crs.crane_id = c.id
        LEFT JOIN collaborator AS coll ON coll.id = c.collaborator_id
        LEFT JOIN branch_office_crane AS boc ON boc.crane_id = c.id
        LEFT JOIN collaborator_service AS collser ON collser.id = crs.collaborator_service_id
        LEFT JOIN branch_office AS bo ON boc.branch_office_id = bo.id
        WHERE   o.id IN (".$operator_list.") AND 
                cs.code = '00000001' AND 
                c.crane_type_id IN (".$listCraneTypeImplode.") AND 
                collser.id IN (".$listCollaboratorServiceImplode.") AND
                crs.date_from <= '".$now_str."' AND 
                (crs.date_to >= '".$now_str."' OR crs.date_to IS NULL) ";
                
        if (!is_null($requestCrane->getBranchOffice())){
        $sql .= " AND boc.branch_office_id = '" . $requestCrane->getBranchOffice()->getId() . "' ";
        }

        $sql .= "AND
                boc.date_from <= '".$now_str."' AND 
                (boc.date_to >= '".$now_str."' OR boc.date_to IS NULL) AND
                
                TIMESTAMPDIFF(MINUTE,o.last_position_date,NOW()) < $minutes_last_position_check AND
                6371 * ACOS(SIN(o.latitude * $sf) * SIN( $lat * $sf ) + COS( o.latitude * $sf) * COS($lat * $sf) * COS((o.longitude - $lng) * $sf)) <= $limitRange      
                ORDER BY DistanceKm"; // quitamos el limite de 15, ya viene filtrado con la query anterior


        $parameters = [];
        //$parameters['now'] = $now->format('Y-m-d H:i:s');
        //return var_dump($sql);   
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);
        
        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($queryRecords as $row){
            $operator = $this->em->getRepository('App:Operator')->findOneById($row['operator_id']);
            $interventionActive = $this->em->getRepository('App:Intervention')->getActiveInterventionForOperator($operator,false);
           
            // hacemos la petición a google primero intentaremos hacer una especie de caché
            if (isset($cacheGoogleDistance[$row['latitude']][$row['longitude']][$lat][$lng])){
                $apiResult = $cacheGoogleDistance[$row['latitude']][$row['longitude']][$lat][$lng];
            }
            else{
                $apiResult = $this->mapsService->calculateDistanceAPI($row['latitude'], $row['longitude'], $lat, $lng);
                $cacheGoogleDistance[$row['latitude']][$row['longitude']][$lat][$lng] = $apiResult;
            }
            // fin de la obtención del calculo de distancia usando la caché
            
            if ($apiResult['status']){
                // filtramos los que están demasiado lejos
                $minutes = $apiResult['data']['duration_value'] / 60;
                
                if (!is_null($interventionActive)){
                    $minutes += $requestCrane->getIncrementNotReady();
                }
                
                if ($minutes <= $requestCrane->getTimeLimit()){
                    $element = [];
                    $element['operator_id'] = $row['operator_id'];
                    $element['crane_id'] = $row['crane_id'];
                    $element['collaborator_id'] = $row['collaborator_id'];
                    $element['operator_code'] = $row['operator_code'];
                    $element['crane_code'] = $row['crane_code'];
                    $element['collaborator_code'] = $row['collaborator_code'];
                    $element['collaborator_service_code'] = $row['collaborator_service_code'];
                    $element['branchoffice_code'] = $row['branchoffice_code'];
                    $element['interventionActive'] = $interventionActive;
                    $element['latitude'] = $row['latitude'];
                    $element['longitude'] = $row['longitude'];
                    $element['distanceKmNoAPI'] = round($row['DistanceKm'],2);
                    $element['distanceKm'] = round($apiResult['data']['distance_value'],2);
                    $element['timeMinutes'] = $minutes;
                    array_push($result,$element);
                }
            }
        }

        $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', $result);
        return $responseResult;
    }


    /**
     * Le notifica a un operador que se le ha cancelado el servicio y realiza 
     * los procesos pertinentes
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention - Intervencion cancelada
     * @param Operator $operator - Operador a notificar
     * @param Crane $crane - Grua de la intervención ¿?
     * @return array estandar
     */
    public function sendCancellationToOperator(Intervention $intervention, Operator $operator, Crane $crane){
        // primero vamos a comprobar que esa intervención está asignado a ese usuario
        if (is_null($intervention->getOperator()) || 
            $intervention->getOperator()->getId() != $operator->getId() ){
            
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Esa Intervención no pertenece a ese proveedor' );
            return $responseResult;
        }
        // realizamos los cámbios de estado.
        $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
        $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'A')); 
        $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 

        $intervention->setInterventionStatus($new_interventionStatus);
        $intervention->setPhase($new_interventionPhase);
        
        // Creamos el log de las fases
        $phaseLog = new PhaseLog();
        $phaseLog->setIntervention($intervention);
        $phaseLog->setPhase($new_interventionPhase);
        $phaseLog->setOperator($operator);
        $phaseLog->setLatitude(null);
        $phaseLog->setLongitude(null);

        // Creamos el log de la intervencion
        $interventionLog = new InterventionLog();
        $interventionLog->setIntervention($intervention);
        $interventionLog->setOperator($operator);
        $interventionLog->setDescription("Anulado por Asitur");
        $interventionLog->setInterventionStatus($new_interventionStatus);
        $interventionLog->setInterventionLogType($interventionLogType);

        $this->em->persist($intervention);  
        $this->em->persist($phaseLog);
        $this->em->persist($interventionLog);
        $this->em->flush();

        // Notificamos al proveedor por la aplicación 
        $now = new \Datetime();       
        $msg = 'Se ha anulado el siguiente servicio:<br><br>'.
                '<b>Referencia:</b> '. $intervention->getReference() . '<br>'.
                '<b>Grúa Asignada:</b> '. $crane->getPlate()  . '<br>'.
                '<b>Fecha cancelación:</b> '. $now->format('Y-m-d H:i:s')  . '<br>';
        
        $params = [
            'type' => 'alert',
            'title' => 'Cancelación del servicio: ' . $intervention->getReference(),
            'message' => $msg,
            'payload' => null,
        ];
        
        $firebase_result = $this->firebaseService->sendFirebaseNotification($operator->getFirebaseGcm(), 
                                                                            $params['type'], 
                                                                            $params['title'], 
                                                                            $params['message'], 
                                                                            $params['payload']); 
        
        if ($firebase_result['status']){
            $response = $this->utilsService->sendResponse(true, 200, 'Notificado con éxito al operador');
        }
        else{
            $msgExtra = '';

            if (!is_null($operator->getTelephone()) && $operator->getTelephone() != '')
                $msgExtra = ' Tlf de contacto: ' . $operator->getTelephone();

            $response = $this->utilsService->sendResponse(false, 400, "Ha ocurrido un error en la notificación. Avíse al operador de forma manual." . $msgExtra);
        }
        return $response;
    }
}

?>