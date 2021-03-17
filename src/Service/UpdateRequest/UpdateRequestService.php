<?php 

namespace App\Service\UpdateRequest;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Service\Backend\InterventionService;
use App\Service\UtilsBase\UtilsService;
use App\Entity\Collaborator;
use App\Entity\Crane;
use App\Entity\Operator;
use App\Entity\BranchOffice;
use App\Entity\BranchOfficeCrane;
use App\Entity\BranchOfficeOperator;
use App\Entity\CollaboratorUser;
use App\Entity\OperatorAvailableCranes;
use App\Service\Utils\LogService;
use App\Service\Utils\SmsService;
use PDO;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface as EncoderUserPasswordEncoderInterface;

class UpdateRequestService
{
    private $name = "UpdateRequestService";

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator, 
                                UtilsService $utilsService,
                                InterventionService $interventionService,
                                EncoderUserPasswordEncoderInterface $userPasswordEncoder,
                                LogService $logService,
                                SmsService $smsService)
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->interventionService = $interventionService;
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->asiturBaseUrl = $this->utilsService->getParameter('API_ASITUR_URL_BASE');
        $this->logService = $logService;
        $this->smsService = $smsService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }


    /******************************************************/
    /*     Función que se inventa los códigos de Asitur   */
    /******************************************************/

    /**
     * Se le pasa una tabla y una columna y genera un id aleatorio
     * (numerico en principio de 6 dígitos) y si no existe previamente
     * en BD lo devuelve.
     * Para tener seguridad de que no se queda colgado el sistema lo
     * intenta un máximo de 10 veces (esta función se usará 
     * mientras asitur termina su parte)
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return string string con un id
     */
    function randomizeAsiturIdFromTable($table, $columnCode){
        $sqlConnection = $this->em->getConnection();
        $parameters = [];

        $validValue = false;
        $loopIndex = 10;

        do{
            $randomize = rand(1, 999999);
            $randomize_id = str_pad($randomize, 6, "0", STR_PAD_LEFT);  
            
            // Creamos la consulta
            $sql = "SELECT COUNT(*) AS Result 
                    FROM ".$table ."  
                    WHERE ".$columnCode ." = :randomize_id";
            
            $parameters['randomize_id'] = $randomize_id;
            $query = $sqlConnection->prepare($sql);
            $query->execute($parameters);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if ($result[0]['Result'] == 0)
                $validValue = true;
            $loopIndex--; // control de bucles infinitos
        }while($loopIndex > 0 && !$validValue);

        return $randomize_id;
    }

    /******************************************************/
    /*           Peticiones de actualización              */
    /******************************************************/

     /**
     * Petición de creación de nueva grua
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Collaborator $collaborator
     * @param array $requestCraneData 
     *                  MatriculaGrua       String	15
     *                  IdentificadorGrua   String  50
     *                  MarcaGrua           String	8	0
     *                  ModeloGrua          String	8	0
     *                  TipoGrua            String	8	0
     *                  TipoGestionGrua     String	8	0
     *                  EstadoGrua          String	8   0
     *                  DisponibilidadGrua  String	8	0
     *                  RotuladoGRua        String	8	0
     *                  FechaAltaGrua       String	8	AAAAMMDD
     *                  FechaBajaGrua       String	8	AAAAMMDD
     *                  CodigoSucursal      String	8	0
     * @return array Sera la respuesta estandar y en el data meteremos el objeto Crane creado
     */
    function requestNewCrane(Collaborator $collaborator, $requestCraneData){
        
        if(is_null($collaborator)){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Falta el colaborador');
            return $responseResult;
        }
        
        $requestCraneDataAsitur = $requestCraneData;

        // realizamos la conversión de campos
        $brand = $this->em->getRepository('App:Brand')->findOneById($requestCraneData['MarcaGrua']);
        if (!is_null($brand))
            $requestCraneDataAsitur['MarcaGrua'] = $brand->getCode();

        $model = $this->em->getRepository('App:Model')->findOneById($requestCraneData['ModeloGrua']);
        if (!is_null($model))
            $requestCraneDataAsitur['ModeloGrua'] = $model->getCode();

        $craneType = $this->em->getRepository('App:CraneType')->findOneById($requestCraneData['TipoGrua']);
        if (!is_null($craneType))
            $requestCraneDataAsitur['TipoGrua'] = $craneType->getCode();

        $management_type = $this->em->getRepository('App:CraneManagementType')->findOneById($requestCraneData['TipoGestionGrua']);
        if (!is_null($management_type))
            $requestCraneDataAsitur['TipoGestionGrua'] = $management_type->getCode();

        $craneStatus = $this->em->getRepository('App:CraneStatus')->findOneById($requestCraneData['EstadoGrua']);
        if (!is_null($craneStatus))
            $requestCraneDataAsitur['EstadoGrua'] = $craneStatus->getCode();

        $availabilityStatus = $this->em->getRepository('App:AvailabilityStatus')->findOneById($requestCraneData['DisponibilidadGrua']);
        if (!is_null($availabilityStatus))
            $requestCraneDataAsitur['DisponibilidadGrua'] = $availabilityStatus->getCode();

        $labeled_type = $this->em->getRepository('App:LabeledType')->findOneById($requestCraneData['RotuladoGrua']);
        if (!is_null($labeled_type))
            $requestCraneDataAsitur['RotuladoGrua'] = $labeled_type->getCode();

        $url = $this->asiturBaseUrl . "/api/grua/WSAltaGrua/";
        $url .= $requestCraneData['CodigoSucursal'];
        
        $responseCurl = $this->utilsService->makeCURL($url, $requestCraneDataAsitur);
       
        if ($responseCurl['status']){ //
            
            $responseContent = $responseCurl['data']['content'];
            //$this->logService->log(json_encode($responseContent));
            if ($responseContent['resultado'] != '1'){
                $msg = '';
                if (isset($responseContent['respuesta']))
                    $msg = ': ' . $responseContent['respuesta'];
                $responseResult = $this->utilsService->sendResponse(false, 400, '', 'Error' .  $msg);
                return $responseResult; 
            }
            $return_id = $responseContent['salida']['codigo'];
            $return_boc_code = $responseContent['salida']['asignacion'];
            
            //$return_id = $this->randomizeAsiturIdFromTable('crane', 'code'); // FAKE
            //$return_boc_code = $this->randomizeAsiturIdFromTable('crane', 'code'); // FAKE code para la asignación BranchOffice-Operator

            $requestData = array(   "asiturCode"            => $return_id,
                                    "reference"             => $requestCraneData['IdentificadorGrua'],
                                    "plate"                 => $requestCraneData['MatriculaGrua'],
                                    "brand_id"              => $requestCraneData['MarcaGrua'],
                                    "model_id"              => $requestCraneData['ModeloGrua'],
                                    "craneType_id"          => $requestCraneData['TipoGrua'],
                                    "management_type_id"    => $requestCraneData['TipoGestionGrua'],
                                    "craneStatus_id"        => $requestCraneData['EstadoGrua'],
                                    "availabilityStatus_id" => $requestCraneData['DisponibilidadGrua'],
                                    "labeled_type_id"       => $requestCraneData['RotuladoGrua'],
                                    "creationDate"          => $requestCraneData['FechaAltaGrua'],
                                    "deletionDate"          => $requestCraneData['FechaBajaGrua'],
                                    "branch_office_code"    => $requestCraneData['CodigoSucursal']
                        );

            $resultRequest = $this->interventionService->createOrUpdateCrane(null,$requestData);
            $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneByCode($requestCraneData['CodigoSucursal']);

            if(is_null($branchOffice)){
                $responseResult = $this->utilsService->sendResponse(false, 400, 'Falta la sucursal');
                return $responseResult;
            }
            
            if($resultRequest['status']){
                $crane = $resultRequest['data']['crane']; // entidad
                $crane->setCollaborator($collaborator);
                $crane->setLastSyncDate(new \DateTime());
            
                $this->em->persist($crane);
                $this->em->flush();
                
                // Asignación de sucursal
                $branchOfficeCrane = new branchOfficeCrane();
                $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneByCode($requestCraneData['CodigoSucursal']);
                $branchOfficeCrane->setBranchOffice($branchOffice);
                $branchOfficeCrane->setCrane($crane);
                $branchOfficeCrane->setDateFrom(new \DateTime());
                $branchOfficeCrane->setCode($return_boc_code);

                $this->em->persist($branchOfficeCrane);
                $this->em->flush();
            }
            
            return $resultRequest;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Asignación de una Grúa a una Sucursal
     * En las peticiones que hagamos a sus sistemas debemos usar sus codigos
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Crane $crane - Objeto grua
     * @param BranchOffice $branchOffice - Sucursal
     * @param Datetime $dateFrom - Fecha desde (o null)
     * @param BranchOfficeCrane $branchOfficeCrane - Relación entre grúa y sucursal (o null)
     * @return array Sera la respuesta estandar y en el data meteremos el objeto BranchOfficeCrane creado
     */
    function assignCraneToBranchOffice($crane, $branchOffice, $dateFrom = null, $branchOfficeCrane = null){
        $AsiturService = 'WSAsignarGruaSucursal';

        $url = $this->asiturBaseUrl . "/api/grua/WSAsignarGruaSucursal/";
        $url .= $crane->getCode() . "/". $branchOffice->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] != '1'){
                $responseResult = $this->utilsService->sendResponse(false, 400, 'Ocurrio un error en Asitur');
                return $responseResult;
            }
            //$return_id = $this->randomizeAsiturIdFromTable('branch_office_crane', 'code'); // FAKE
            $return_id = $responseContent['salida'][0]['codigoAsignacion'];
            $resultRequest = $this->interventionService->assignCraneToBranchOffice($crane, $branchOffice, $return_id, $dateFrom, $branchOfficeCrane);

            if($resultRequest['status']){
                $crane->setLastSyncDate(new \DateTime());
                $branchOffice->setLastSyncDate(new \DateTime());
                $this->em->persist($crane);
                $this->em->persist($branchOffice);
                $this->em->flush();
            }

            return $resultRequest;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Quitar grúas de una sucursal
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param BranchOfficeCrane $branchOfficeCrane - Relacion de grua / sucursal
     * @param Datetime $dateTo - Fecha hasta (o null)
     * @return respuesta estandar
     */
    function removeCraneFromBranchOffice($branchOfficeCrane, $dateTo = null){
        //$AsiturService = 'WSEliminarGruaSucursal';
        $url = $this->asiturBaseUrl . "/api/grua/WSEliminarGruaSucursal/";
        $url .= $branchOfficeCrane->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] != '1'){
                $responseResult = $this->utilsService->sendResponse(false, 400, 'Ocurrio un error en Asitur');
                return $responseResult;
            }

            $resultRequest = $this->interventionService->removeCraneFromBranchOffice($branchOfficeCrane, $dateTo);

            if($resultRequest['status']){
                $branchOfficeCrane->getCrane()->setLastSyncDate(new \DateTime());
                $branchOfficeCrane->getBranchOffice()->setLastSyncDate(new \DateTime());
                $this->em->persist($branchOfficeCrane);
                $this->em->flush();
            }

            return $resultRequest;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

     
    /**
     * Petición de creación de un nuevo operario
     * EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param CollaboratorUser $user
     * @param Collaborator     $collaborator
     * @param array            $requestOperatorData 
     *                              NombreOperario          String	20
     *                              ApellidosOperario       String	40
     *                              DNIOperario             String	15
     *                              IdentificadorOperario   String  50
     *                              MovilOperario           String	15
     *                              GruaAsignadaOperario    String	8 (o null si no tiene)
     *                              EstadoOperario          String	8
     *                              FechaAltaOperario       String	8	AAAAMMDD
     *                              FechaBajaOperario       String	8	AAAAMMDD
     *                              CodigoSucursal          String	8
     * @param array            $credentials 
     *                              username    String  Nombre de usuario
     *                              password    String  Contraseña                
     * @return array estandar y devolvemos al operador
     */
    function requestNewOperator(CollaboratorUser $user, Collaborator $collaborator, $requestOperatorData, $credentials){
        //$AsiturService = 'WSAltaOperario';
        $url = $this->asiturBaseUrl . "/api/operario/WSAltaOperario/";
        $url .=  $requestOperatorData['CodigoSucursal'];


        // realizamos una pequeña conversión de datos para los sistemas de Asitur
        $requestOperatorDataAsitur = $requestOperatorData;

        $crane = $this->em->getRepository('App:Crane')->findOneById($requestOperatorData['GruaAsignadaOperario']);
        if (!is_null($crane))
            $requestOperatorDataAsitur['GruaAsignadaOperario'] = $crane->getCode();

        $operatorStatus = $this->em->getRepository('App:OperatorStatus')->findOneById($requestOperatorData['EstadoOperario']);
        if (!is_null($operatorStatus))
            $requestOperatorDataAsitur['EstadoOperario'] = $operatorStatus->getCodeAsitur();

        $responseCurl = $this->utilsService->makeCURL($url, $requestOperatorDataAsitur);
        
        $responseCurl['status'] = true; // Fake
        
        if(is_null($collaborator)){
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Falta el colaborador');
            return $responseResult;
        }

        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            try {

                if ($responseContent['resultado'] != '1'){
                    $msg = '';
                    if (isset($responseContent['respuesta']))
                        $msg = ': ' . $responseContent['respuesta'];
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error' .  $msg);
                    return $responseResult;
                }
                
                //$return_id = $this->randomizeAsiturIdFromTable('operator', 'code'); // FAKE ID de asitur
                //$return_boo_code = $this->randomizeAsiturIdFromTable('operator', 'code'); // FAKE code para la asignación BranchOffice-Operator
                $return_id  = $responseContent['salida']['codigo'];
                $return_boo_code = $responseContent['salida']['asignacion'];

                $requestData = array(   "asiturCode" => $return_id,
                                        "name" => $requestOperatorData['NombreOperario'],
                                        "lastName" => $requestOperatorData['ApellidosOperario'],
                                        "dni" => $requestOperatorData['DNIOperario'],
                                        "reference" => $requestOperatorData['IdentificadorOperario'],
                                        "mobile" => $requestOperatorData['MovilOperario'],
                                        "crane_id" => $requestOperatorData['GruaAsignadaOperario'],
                                        "operatorStatus_id" => $requestOperatorData['EstadoOperario'],
                                        "creationDate" => $requestOperatorData['FechaAltaOperario'],
                                        "deletionDate" => $requestOperatorData['FechaBajaOperario'],
                                        "branchOffice_id" => $requestOperatorData['CodigoSucursal']
                                    );
                
                $resultRequest = $this->interventionService->createOrUpdateOperator(null,$requestData);

                if($resultRequest['status']){
                    $operator = $resultRequest['data']['operator']; // entidad
                    $operator->setLastSyncDate(new \DateTime());
                    
                    $operator->setUsername($credentials["username"]);

                    // Encriptamos y seteamos la contraseña
                    $encodedPassword = $this->userPasswordEncoder->encodePassword($operator, $credentials["password"]);
                    $operator->setPassword($encodedPassword);

                    $this->em->persist($operator);
                    $this->em->flush();

                    // Asignación de sucursal
                    $branchOfficeOperator = new BranchOfficeOperator();
                    $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneByCode($requestOperatorData['CodigoSucursal']);
                    $branchOfficeOperator->setBranchOffice($branchOffice);
                    $branchOfficeOperator->setOperator($operator);
                    $branchOfficeOperator->setDateFrom(new \DateTime());
                    $branchOfficeOperator->setCode($return_boo_code);
                    $this->em->persist($branchOfficeOperator);

                    // Creamos la instancia en la tabla OperatorAvailableCranes
                    if($operator->getCrane()) {
                        $operatorAvailableCrane = new OperatorAvailableCranes();
                        $operatorAvailableCrane->setOperator($operator);
                        $operatorAvailableCrane->setCrane($operator->getCrane());
                        $this->em->persist($operatorAvailableCrane);
                    }

                    $this->em->flush();

                    // Se mandan los SMS pertinentes y se guardan las operaciones en el log
                    $this->logService->logUser("(ALTA DE OPERARIO) Se ha creado el número de teléfono móvil del operario con ID ".$operator->getId(), $operator->getId(), "operator_new_mobile");
        
                    $smsTo = '+34'.$operator->getMobile();
                    $appName = $this->utilsService->getParameter("APP_NAME");
                    $smsContent = 'Su número de móvil '.$operator->getMobile().' está habilitado para usar con la aplicación '.$appName;
        
                    $sms = array(
                    'to'                    => $smsTo,
                    'content' 				=> $smsContent          
                    );
                    $smsResult = $this->smsService->sendSms($sms);
        
                    if($smsResult["status"]) {
                        $this->logService->logUser("Se enviado un SMS al operario con ID ".$operator->getId()." para notificarle la modificación de su número de teléfono móvil", $operator->getId(), "operator_new_mobile_notification");
                    }

                    $this->logService->logUser("(ALTA DE OPERARIO) Se ha creado la contraseña del operario con ID ".$operator->getId(), $operator->getId(), "operator_new_password");
        
                    $smsContent = 'El usuario '.$user->getName().' de la empresa '.$user->getCollaborator()->getName().' ha generado la siguiente contraseña para ingresar a la aplicación '.$appName.': "'.$credentials["password"].'"';

                    $sms = array(
                    'to'                    => $smsTo,
                    'content' 				=> $smsContent          
                    );
                    $smsResult = $this->smsService->sendSms($sms);
        
                    if($smsResult["status"]) {
                        $this->logService->logUser("Se enviado un SMS al operario con ID ".$operator->getId()." para notificarle la modificación de su contraseña", $operator->getId(), "operator_new_password_notification");
                    }

                }
                return $resultRequest;

            } catch (\Exception $e) {
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
                return $responseResult;
            }
            
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Asignación de un Operador a una Sucursal
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - Operador
     * @param BranchOffice $branchOffice - Sucursal
     * @param Datetime $dateFrom - Fecha desde (o null)
     * @return array Sera la respuesta estandar y en el data meteremos el objeto BranchOfficeOperator creado
     */
    function assignOperatorToBranchOffice($operator, $branchOffice, $dateFrom = null){
        
        //$AsiturService = 'WSAsignarOperarioSucursal';
        $url = $this->asiturBaseUrl . "/api/operario/WSAsignarOperarioSucursal/";
        $url .=  $operator->getCode() . '/' . $branchOffice->getCode() ;
        
        $responseCurl = $this->utilsService->makeCURL($url);

        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){
                //$return_id = $this->randomizeAsiturIdFromTable('operator', 'code'); // FAKE
                $return_id = $responseContent['salida'][0]['codigoAsignacion'];
            
                $resultRequest = $this->interventionService->assignOperatorToBranchOffice($operator, $branchOffice, $return_id, $dateFrom);

                if($resultRequest['status']){
                    $operator->setLastSyncDate(new \DateTime());
                    $branchOffice->setLastSyncDate(new \DateTime());
                    $this->em->persist($operator);
                    $this->em->persist($branchOffice);
                    $this->em->flush();
                }
                return $resultRequest;
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                'Ha ocurrido un error con la actualización en Asitur');
                return $responseResult;
            }  
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
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
        //$AsiturService = 'WSEliminarOperarioSucursal';
        $removeDate = $dateTo;
        if(is_null($removeDate))
            $removeDate = new \DateTime();

        $url = $this->asiturBaseUrl . "/api/operario/WSEliminarOperarioSucursal/";
        $url .=  $branchOfficeOperator->getCode() . '/' . $removeDate->format('Ymd') ;
        
        $responseCurl = $this->utilsService->makeCURL($url);

        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1'){
                $resultRequest = $this->interventionService->removeOperatorFromBranchOffice($branchOfficeOperator, $dateTo);
    
                if($resultRequest['status']){
                    $branchOfficeOperator->getOperator()->setLastSyncDate(new \DateTime());
                    $branchOfficeOperator->getBranchOffice()->setLastSyncDate(new \DateTime());
                    $this->em->persist($branchOfficeOperator);
                    $this->em->flush();
                }
                return $resultRequest;
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                        'Ha ocurrido un error con la actualización en Asitur');
                return $responseResult;
            }  
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Notificar de la actualización de la grúa de un operario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Crane $crane - Grua
     * @param Operator $operator - Sucursal
     * @return array estandar
     */
    function assignCraneToOperator($crane, $operator){
        
        //$AsiturService = 'WSActualizarGruaOperario';
        $url = $this->asiturBaseUrl . "/api/operario/WSActualizarGruaOperario/";
        $url .= $operator->getCode() . '/' . $crane->getCode() ;

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] == '1'){
                $resultRequest = $this->interventionService->assignCraneToOperator($crane, $operator);
                if($resultRequest['status']){
                    $operator->setLastSyncDate(new \DateTime());
                    $crane->setLastSyncDate(new \DateTime());
                    $this->em->persist($operator);
                    $this->em->persist($crane);
                    $this->em->flush();
                }
                return $resultRequest;
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                'Ha ocurrido un error con la actualización en Asitur');
                return $responseResult;
            }  
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /**
     * Llamada que obtiene el código (code) para asignar al CraneService correspondiente
     *
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * @param Crane               $crane                Objeto Grúa
     * @param CollaboratorService $collaboratorService  Objeto del servicio a asignar
     * @param CraneServiceType    $craneServiceType     Objeto Tipo de servicio [Preferente o Adicional (Disponible)]
     * @return array estandar   Devuelve una respuesta estándar con el código del servicio en "data"
     */
    function getCodeToAssignServiceToCrane($crane, $collaboratorService, $craneServiceType) {       
        //$AsiturService = 'WSActivarServicioGruas';
        $url = $this->asiturBaseUrl . "/api/grua/WSActivarServicioGruas/";
        $url .=  $crane->getCode() . '/' . $collaboratorService->getCode() . '/' . $craneServiceType->getCode() ;
        $responseCurl = $this->utilsService->makeCURL($url);
    
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] == '1'){
                //$serviceCode = $this->randomizeAsiturIdFromTable('operator', 'code'); 
                $serviceCode = $responseContent['salida'];
                $responseResult = $this->utilsService->sendResponse(true, 200, '', $serviceCode);
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /**
     * Llamada para notificar la eliminación de un servicio de grúa
     *
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * @param CraneService  $craneService   Objeto Servicio de grúa (CraneService) del que se va a notificar el borrado
     
     * @return array estandar
     */
    function notifyRemoveCraneService($craneService) {
        //$AsiturService = 'WSEliminarServicioGruas';
        $url = $this->asiturBaseUrl . "/api/grua/WSEliminarServicioGruas/";
        $url .=  $craneService->getCode() ;
        $responseCurl = $this->utilsService->makeCURL($url);
    
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] == '1'){
                $responseResult = $this->utilsService->sendResponse(true, 200, '');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

}

?>
