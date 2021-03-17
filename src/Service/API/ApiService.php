<?php 

namespace App\Service\API;
use App\Service\UtilsBase\UtilsService;
use App\Service\Backend\SecurityService;
use App\Service\Backend\ValidatorService;
use App\Service\Backend\InterventionService;
use App\Service\Utils\MailerService;
use App\Service\Utils\FirebaseService;
use App\Entity\InterventionLog;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Operator;
use App\Entity\Geoposition;
use App\Service\Utils\LogService;

class ApiService
{
    private $name = "ApiService";

    public function __construct(EntityManagerInterface $em, 
                                UtilsService $utilsService,
                                ValidatorService $validatorService,
                                SecurityService $securityService,
                                UserPasswordEncoderInterface $userPasswordEncoderInterface,
                                MailerService $mailerService,
                                FirebaseService $firebaseService,
                                InterventionService $interventionService,
                                LogService $logService)
    {
        $this->em = $em;
        $this->utilsService = $utilsService;
        $this->validatorService = $validatorService;
        $this->securityService = $securityService;
        $this->userPasswordEncoderInterface = $userPasswordEncoderInterface;
        $this->mailerService = $mailerService;
        $this->firebaseService = $firebaseService;
        $this->interventionService = $interventionService;
        $this->logService = $logService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Obtiene los parámetros de una llamada ya sea hecha por un texto escrito en formato
     * json como variables enviadas tipo "POST"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Request $request - Request de peticion
     * @return array Array de parametros obtenidos
     */
    public function getParameters(Request $request)
    {
        $params = [];
        $content = $request->getContent();
        
        if (!empty($content))
            $params = json_decode($content, true);
        else
            $params = $request->request->all();
        
        return $params;
    }


     /**
     * Retorna el Json Response de la API movil, y le
     * añade algunos campos extras necesarios para la 
     * aplicación, como el número mínimo de versión, 
     * o si está activo el tracking
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - El usuario en cuestion
     * @param array $response - Array de respuesta standart
     * @return array Array de parametros obtenidos
     */
    public function formatMobileResult ($operator, $response){

        $actualVersionAndroid = $this->utilsService->getParameter('APP_VERSION_ANDROID'); 
        $actualVersionIOS = $this->utilsService->getParameter('APP_VERSION_IOS'); 
        $phone = $this->utilsService->getParameter('APP_PHONE');
        $secondsToGetGeolocation = 0; 
        $trackingEnabled = false; 
        $activeInterventionId = null;
        $availableCancellation = false;
        $availableCraneReadyBtn = false;
        $activeInterventionToAccept = [];

        if (!is_null($operator)){
            
            // Obtenemos la intervencion activa si la tuviera
            $activeIntervention = $this->em->getRepository('App:Intervention')->getActiveInterventionForOperator($operator,true);
            $activeInterventionToAccept = $this->em->getRepository('App:Intervention')->getInterventionToAcceptForOperator($operator);

            if (!is_null($activeIntervention)){
                $secondsToGetGeolocation = $this->utilsService->getParameter('APP_SECOND_GEOLOCATION_ACTIVE'); 

                $activeInterventionId = $activeIntervention->getId();
                $availableCancellation = $this->interventionService->getAvailableCancellation($activeIntervention); 
                $availableCraneReadyBtn = $this->interventionService->getAvailableCraneReady($activeIntervention); 

                $trackingEnabled = true; // tendríamos que mirar si está activo para ese usuario
                                          // por defecto vamos a poner que haga tracking en 
                                          // servicios activos
            }
            else{
                $secondsToGetGeolocation = $this->utilsService->getParameter('APP_SECOND_GEOLOCATION'); 
                
                if ($operator->getAvailabilityOperatorStatus()->getCode() == 'available' )    
                    $trackingEnabled = true; 
                else 
                    $trackingEnabled = false; 
            }
        }

        // Para que la respuesta de cara a la API de android sea siempre con la
        // misma estructura
        if (isset($response['errors']) && is_string($response['errors'])){
            $response['errors'] = array($response['errors']);
        }

        // msg availabilityStatus
        $availabilityOperatorStatus =  $operator->getAvailabilityOperatorStatus();
        $msgAvailabilityOperatorStatus = "Su estado es No Disponible y no recibirá servicios de Asitur";
        if ($availabilityOperatorStatus->getCode() == 'available'){
            if (is_null($operator->getCrane())){
                $msgAvailabilityOperatorStatus = "No tiene grúa asignada, contacte con su oficina para una nueva asignación.";
            }
            else{
                // Comprobamos si hay más operadores con la misma grua y están activos
                $otherActiveOperatorSameCrane = $this->em->getRepository('App:Operator')->findOtherActiveOperatorSameCrane($operator);

                if (count($otherActiveOperatorSameCrane) == 0)
                    $msgAvailabilityOperatorStatus = "Su vehículo actualmente es '".$operator->getCrane()->getPlate()."' (si no es así,comuníquese con su oficina)";
                else
                    $msgAvailabilityOperatorStatus = "Su vehículo ".$operator->getCrane()->getPlate()." está asignado a ".$otherActiveOperatorSameCrane[0]['reference'].". Comuníquese con su oficina.";
            }
        }
        //t

        $response['config'] =  array('trackingEnabled' => $trackingEnabled,
                                    'actualVersionAndroid' => $actualVersionAndroid,
                                    'actualVersionIOS' => $actualVersionIOS,
                                    'phone' => $phone,
                                    'secondsToGetGeolocation' => $secondsToGetGeolocation,
                                    'activeInterventionId' => $activeInterventionId,
                                    'availableCancellation' => $availableCancellation,
                                    'availableCraneReadyBtn' => $availableCraneReadyBtn,
                                    'activeInterventionToAccept' => $activeInterventionToAccept,
                                    'msgAvailabilityOperatorStatus' =>  $msgAvailabilityOperatorStatus
                                );

        return new JsonResponse($response);
    }


    /**
     * Login del usuario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array de respuesta standart
     * @return array Array de parametros obtenidos
     */
    public function appLogin($params){

        $required = [ 
            ['name' => 'user', 'type' => 'string'],
            ['name' => 'password', 'type' => 'string'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
     
        //$operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['']));
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('email' => $params['user']));
        if (is_null($operator))
            $operator = $this->em->getRepository('App:Operator')->findOneBy(array('mobile' => $params['user']));

            
        if (is_null($operator)){
            $response = $this->utilsService->sendResponse(false, 400, 'Error', 'Usuario o contraseñas incorrectos');
            return $this->formatMobileResult (null, $response);
        }
        
        if ($operator->getOperatorStatus()->getCode() != 'active'){
            $response = $this->utilsService->sendResponse(false, 400, 'Error', "Usuario no activo");
            return $this->formatMobileResult ($operator, $response);
        }
            
        // Manual: https://symfony.com/doc/4.4/components/security/authentication.html
        $isValidPassword =  $this->userPasswordEncoderInterface->isPasswordValid($operator, $params['password']);
        
        if ($isValidPassword) {
            $apiKey = $operator->getApiKey();
            if (is_null($apiKey) || $apiKey == ''){
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randstring = '';
                for ($i = 0; $i < 60; $i++) {
                    $index = rand(0, strlen($characters) - 1); 
                    $randstring .= $characters[$index]; 
                }
                
                $apiKey = $randstring;
                $operator->setApiKey($apiKey);
                $this->em->persist($operator);
                $this->em->flush();
            }

            // lo ponemos como disponible
            $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'available'));
            $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);

            // Guardamos el último acceso
            $operator->setLastAccess(new \Datetime);            
            
            $this->em->persist($operator);
            $this->em->flush();

            //? Descomentar para guardar el registro en el log
            // $this->logService->logUser("El operario con ID ".$operator->getId()." ha iniciado sesión.", $operator->getId(), "operator_login");

            $response = $this->utilsService->sendResponse(true, 200, 'Obtenido con éxito', array('apiKey' => $apiKey));
            return $this->formatMobileResult ($operator, $response);
        }
        else{
            
            $response = $this->utilsService->sendResponse(false, 400, 'Error', 'Usuario o contraseñas incorrectos');
            return $this->formatMobileResult (null, $response);
        }
    }

    /**
     * Login del usuario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array
     * @return array Array de parametros obtenidos
     */
    public function appLogout($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
     
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'not_available'));

        $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);

        // Eliminamos los token de Firebase para que no le
        // lleguen notificaciones indeseadas
        $operator->setFirebaseDatetime(null);
        $operator->setFirebaseDevice(null);
        $operator->setFirebaseGcm(null);
        $operator->setFirebasePlatform(null);
        //$operator->setApiKey(null);

        $this->em->persist($operator);
        $this->em->flush();

        $response = $this->utilsService->sendResponse(true, 200, 'Correcto', '');
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Login del usuario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array  
     * @return array Array de parametros obtenidos
     */
    public function appVerifyApiKey($params){

        $required = [ 
            ['name' => 'user', 'type' => 'string'],
            ['name' => 'apiKey', 'type' => 'string'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
     
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('email' => $params['user']));
        if (is_null($operator))
            $operator = $this->em->getRepository('App:Operator')->findOneBy(array('mobile' => $params['user']));

        if (is_null($operator)){
            $response = $this->utilsService->sendResponse(false, 400, 'Error', 'Usuario o contraseñas incorrectos');
            return $this->formatMobileResult (null, $response);
        }

        if ($operator->getApiKey() == $params['apiKey']){
            $response = $this->utilsService->sendResponse(true, 200, 'Correcto', '');
            return $this->formatMobileResult ($operator, $response);
        }
        else{
            $response = $this->utilsService->sendResponse(false, 400, 'Error', 'ApiKey Inválida');
            return $this->formatMobileResult (null, $response);
        }


    }


    /**
     * Actualiza la geoposicioni del usuario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array  
     * @return array Array de parametros obtenidos
     */
    public function appUpdateDeviceAction($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        try {
            $geoposition = new Geoposition();
            $geoposition->setOperator($operator);
            $geoposition->setLatitude($params['latitude']);
            $geoposition->setLongitude($params['longitude']);

            $operator->setLatitude($params['latitude']);
            $operator->setLongitude($params['longitude']);
            $operator->setLongitude($params['longitude']);
            $operator->setLastPositionDate(new \DateTime());

            $this->em->persist($geoposition);
            $this->em->persist($operator);
            $this->em->flush();
            $msg_response = 'Guardado con éxito.';

            // vamos a intentar actualizar automáticamente los estados
            // de proximidad en las intervenciones ( en caso de tener un activa )
            $activeIntervention = $this->em->getRepository('App:Intervention')->getActiveInterventionForOperator($operator,true);

            if(!is_null($activeIntervention)){
                $responseAutoPhaseLog = $this->interventionService->checkInterventionForAutoPhase($activeIntervention,$operator, $params['latitude'], $params['longitude']);

                if ($responseAutoPhaseLog['status']){
                    $msg_response .= " " . $responseAutoPhaseLog['message'];
                }
            } 
            
            $response = $this->utilsService->sendResponse(true, 200, $msg_response, null);
            return $this->formatMobileResult ($operator, $response);
        }
        catch (\Exception $e) {
            $response = $this->utilsService->sendResponse(false, 400, 'Ha ocurrido un error', $e->getMessage());
            return $this->formatMobileResult ($operator, $response);
        }
    }

    /**
     * Función para guardar los campos de firebase
     * para poder emitir notificaciones
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array  
     * @return array Array de parametros obtenidos
     */
    public function appUpdateFirebaseDeviceAction($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'device', 'type' => 'string'],
            ['name' => 'gcm', 'type' => 'string'],
            ['name' => 'platform', 'type' => 'string'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        try {
            
            $operator->setFirebaseDatetime(new \DateTime());
            $operator->setFirebaseDevice($params['device']);
            $operator->setFirebaseGcm($params['gcm']);
            $operator->setFirebasePlatform($params['platform']);

            $this->em->persist($operator);
            $this->em->flush();
            $msg_response = 'Guardado con éxito.';

            $response = $this->utilsService->sendResponse(true, 200, $msg_response, null);
            return $this->formatMobileResult ($operator, $response);
        }
        catch (\Exception $e) {
            $response = $this->utilsService->sendResponse(false, 400, 'Ha ocurrido un error', $e->getMessage());
            return $this->formatMobileResult ($operator, $response);
        }
    }

    /**
     * Función de test para probar firebase
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array  
     * @return array Array de parametros obtenidos
     */
    public function appTestFirebaseAction($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'type', 'type' => 'string'],
            ['name' => 'title', 'type' => 'string'],
            ['name' => 'message', 'type' => 'string'],
            ['name' => 'payload', 'type' => 'array'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        try {
            $gmc = $operator->getFirebaseGcm();
            //$device = $operator->getFirebaseDevice();
            //$platform = $operator->getFirebasePlatform();

            if(!is_null($gmc)){
                $firebase_result = $this->firebaseService->sendFirebaseNotification($operator->getFirebaseGcm(), 
                                                                                    $params['type'], 
                                                                                    $params['title'], 
                                                                                    $params['message'], 
                                                                                    $params['payload']); 
                return $this->formatMobileResult ($operator, $firebase_result);
            }
            else{
                $response = $this->utilsService->sendResponse(false, 400, 'El usuario no tiene registros de firebase');
                return $this->formatMobileResult ($operator, $response);
            }
        }
        catch (\Exception $e) {
            $response = $this->utilsService->sendResponse(false, 400, 'Ha ocurrido un error', $e->getMessage());
            return $this->formatMobileResult ($operator, $response);
        }
    }




    /**
     * Funcionalidad para poner la grua en modo predisponible
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array  
     * @return array Array de parametros obtenidos
     */
    public function appCraneReadyAction($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $interventionActive = $this->em->getRepository('App:Intervention')->getActiveInterventionForOperator($operator,true);
        
        if (is_null($interventionActive)){
            $response = $this->utilsService->sendResponse(false, 400, 'No hay servicios activos');
            return $this->formatMobileResult ($operator, $response);
        }
        
        $crane = $interventionActive->getCrane();

        if (is_null($crane)){
            $response = $this->utilsService->sendResponse(false, 400, 'No hay grua asignada al servicio');
            return $this->formatMobileResult ($operator, $response);
        }

        if ($crane->getAvailabilityStatus()->getId() == 1){
            $response = $this->utilsService->sendResponse(false, 400, 'La grua ya está disponible');
            return $this->formatMobileResult ($operator, $response);
        }

        try {
            $availabilityStatus = $this->em->getRepository('App:AvailabilityStatus')->findOneBy(array('id' => '1')); // disponible
            $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'default')); 
            // Estado de la grua
            $crane->setAvailabilityStatus($availabilityStatus);

            // Creamos el log de la intervencion
            $interventionLog = new InterventionLog();
            $interventionLog->setIntervention($interventionActive);
            $interventionLog->setOperator($operator);
            $interventionLog->setDescription('Marcando como predisponible');
            //$interventionLog->setInterventionStatus($new_interventionStatus);
            $interventionLog->setInterventionLogType($interventionLogType);
            $interventionLog->setLatitude($params['latitude']);
            $interventionLog->setLongitude($params['longitude']);

            // Guardamos en BD
            $this->em->persist($crane);
            $this->em->persist($interventionLog);
            $this->em->flush();

            $response = $this->utilsService->sendResponse(true, 200, "Estado predisponible activo", null);
            return $this->formatMobileResult ($operator, $response);
        }
        catch (\Exception $e) {
            $response = $this->utilsService->sendResponse(false, 400, 'Ha ocurrido un error', $e->getMessage());
            return $this->formatMobileResult ($operator, $response);
        }
    }


    /**
     * Obtiene el log de geoposición del último mes
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetHistoryLog($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        // Sólo ultimo mes
        $historyLog = $this->em->getRepository('App:Geoposition')->getGeopositionHistoryLog($operator, 1);
     
        $response = $this->utilsService->sendResponse(true, 200, 'OK', $historyLog);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Obtiene el listado de estados posibles en el operador, y 
     * le devuelve el estado actual
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetOperatorStatusList($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $list = $this->em->getRepository('App:AvailabilityOperatorStatus')->getArrayList();
        $code_selected = '';
        if (!is_null($operator->getAvailabilityOperatorStatus()))
            $code_selected = $operator->getAvailabilityOperatorStatus()->getCode();

        $responseData = array('list' => $list, 'selected' => $code_selected);

        $response = $this->utilsService->sendResponse(true, 200, 'OK', $responseData);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Actualiza el nuevo estado del operario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appUpdateOperatorStatus($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'code', 'type' => 'table', 'tableName' => 'availability_operator_status', 'tableCol' => 'code'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => $params['code']));
        
        try {
            $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);
            $this->em->persist($operator);
            $this->em->flush();

            $msg = "Su estado es No Disponible y no recibirá servicios de Asitur";
            if ($availabilityOperatorStatus->getCode() == 'available'){
                if (is_null($operator->getCrane())){
                    $msg = "No tiene grúa asignada, contacte con su oficina para una nueva asignación.";
                }
                else{
                    // Comprobamos si hay más operadores con la misma grua y están activos
                    $otherActiveOperatorSameCrane = $this->em->getRepository('App:Operator')->findOtherActiveOperatorSameCrane($operator);

                    if (count($otherActiveOperatorSameCrane) == 0){
                        $msg = "Su vehículo actualmente es '".$operator->getCrane()->getPlate()."' (si no es así,comuníquese con su oficina)";
                    }
                    else{
                        $msg = "Su vehículo ".$operator->getCrane()->getPlate()." está asignado a ".$otherActiveOperatorSameCrane[0]['reference'].". Comuníquese con su oficina.";
                        $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'not_available'));
                        $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);
                        $this->em->persist($operator);
                        $this->em->flush();
                    }
                }
            }


            $response = $this->utilsService->sendResponse(true, 200, 'Guardado con éxito', ['msg' => $msg]);
            return $this->formatMobileResult ($operator, $response);
        }
        catch (\Exception $e) {
            $response = $this->utilsService->sendResponse(false, 400, 'Ha ocurrido un error', $e->getMessage());
            return $this->formatMobileResult ($operator, $response);
        }
    }

    /**
     * Acción de recuperación de contraseña
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appForgotPassword($params){
        $required = [ 
            ['name' => 'user', 'type' => 'string'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('email' => $params['user']));
        if (is_null($operator))
            $operator = $this->em->getRepository('App:Operator')->findOneBy(array('mobile' => $params['user']));

        if (is_null($operator)){
            $response = $this->utilsService->sendResponse(false, 400, 'Error', 'Usuario incorrectos');
            return $this->formatMobileResult (null, $response);
        }


        $message = array('subject'               => "Petición de recuperación de contraseña del operador",
                        'to'                    => $operator->getCollaborator()->getEmail(), 
                        'template'              => "mails/passwordRecoveryOperator.html.twig", 
                        'parametersTemplate'    => array( 'operator'         => $operator)
                );

        $response = $this->mailerService->send($message);

        // Guardamos el token del usuario colaborador en bd y la fecha en la que el enlace del correo caduca
        if($response['data']['mailSent']) {
            $response = $this->utilsService->sendResponse(true, 200, 'OK', ['msg' => 'Se ha notificado a su superior para el cámbio de contraseña.']);
            return $this->formatMobileResult ($operator, $response);
        }
        else{
            $response = $this->utilsService->sendResponse(false, 400, 'Error', 'No se ha podido notificar a su superior. Contácte con él directamente.');
            return $this->formatMobileResult ($operator, $response);        
        }
    }


    /**
     * Obtener el teléfono de central
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetNumberCallCentral($params){

        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $APP_PHONE_CENTRAL = $this->utilsService->getParameter('APP_PHONE_CENTRAL');

        $response = $this->utilsService->sendResponse(true, 200, 'Obtenido con éxito', ['phone'=>$APP_PHONE_CENTRAL]);
        return $this->formatMobileResult ($operator, $response);
    }

    /**
     * Obtener el teléfono del cliente del servicio activo
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetNumberCallClient($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        // Obtenemos la intervención activa
        $activeIntervention = $this->em->getRepository('App:Intervention')->getActiveInterventionForOperator($operator,true);
        
        if (!is_null($activeIntervention)){
            $msg = 'Teléfono del cliente: ' . $activeIntervention->getCallerName()
            . " " .  $activeIntervention->getCallerLastName();
            $phone_client = $activeIntervention->getCallerPhone();
        }else{
            $msg = 'No tiene ningún servicio activo o el cliente no ha especificado un número. Para más información llame a central.';
            $phone_client = '';
        }
        
        $response = $this->utilsService->sendResponse(true, 200, 'Obtenido con éxito', 
                [   'phone'=>$phone_client,
                    'msg'=>$msg]);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Obtiene el listado de motivos de rechazo de un servicio
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetRefuseInterventionList($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $list = $this->em->getRepository('App:CancellationType')->getArrayListByStatusCode('R'); // puede ser A...
       
        $response = $this->utilsService->sendResponse(true, 200, 'OK', $list);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Obtiene el listado de motivos de rechazo de un servicio
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appRefuseIntervention($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'description', 'type' => 'string'],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $cancellationType = null;
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        // comprobamos si viene el campo 'cancellation_type_id' y que exista en BD
        if (isset($params['cancellation_type_id']) && $params['cancellation_type_id'] != ''){
            $requiredExtra = [ 
                ['name' => 'cancellation_type_id', 'type' => 'table', 'tableName' => 'cancellation_type', 'tableCol' => 'id'],
            ];

            $resultValidationExtra =  $this->validatorService->validatorBase ($params,$requiredExtra);
            if ($resultValidationExtra["status"]){
                $cancellationType = $this->em->getRepository('App:CancellationType')->findOneBy(array('id' => $params['cancellation_type_id']));        
            }
            else{
                return $this->formatMobileResult (null, $resultValidationExtra);
            }
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->refuseIntervention($intervention, 
                                                                    $operator,
                                                                    $cancellationType,
                                                                    $params['description'],
                                                                    $params['latitude'],
                                                                    $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Descargar listado de intervenciones de un usuario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * 
     * Fases puede ser un array conlos siguientes estados
     *                  'servicio_iniciado',
     *                  'vh_localizado',
     *                  'en_transito_recogida',
     *                  'en_transito_entrega',
     *                  'servicio_fallido',
     *                  'inicio_albaran_no_ris',
     *                  'inicio_albaran_ris',
     *                  'firma_albaran',
     *                  'vh_no_cargado',
     *                  'vh_cargado',
     *                  'entrega_destino',
     *                  'firma_albaran_revision',
     *                  'servicio_finalizado',
     *                  'pte_iniciar',
     * 
     * @return array Array de parametros obtenidos
     */
    public function appGetInterventionList($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'init_date', 'type' => 'dateFromString', 'format' => 'Y-m'],
            ['name' => 'end_date', 'type' => 'dateFromString', 'format' => 'Y-m'],
            ['name' => 'phases', 'type' => 'array'], // string con el código de la phase
            ['name' => 'search', 'type' => 'string'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
        
        // Para tener más versatilidad en la app, podemos definir una "categoría de estados"
        if (isset($params['phase_type'])){
            switch($params['phase_type']){
                case "servicios_iniciados": 
                    $params['phases'] = ["servicio_iniciado", 
                                        "vh_localizado", 
                                        "servicio_fallido", 
                                        "inicio_albaran_no_ris", 
                                        "inicio_albaran_ris", 
                                        "firma_albaran", 
                                        "vh_no_cargado", 
                                        "vh_cargado", 
                                        "entrega_destino", 
                                        "firma_albaran_revision",
                                        "en_transito_recogida",
                                        "en_transito_entrega" ];
                    break;
                case "servicios_aceptados":
                    $params['phases'] = ["pte_iniciar"];
                    break;
                case "pendientes_cierre": 
                    $params['phases'] = ["servicio_finalizado"];
                    break;
            }
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $initDate = \DateTime::createFromFormat('Y-m-d H:i:s', $params['init_date'] . '-1 00:00:00');
        $endDate = \DateTime::createFromFormat('Y-m-d H:i:s', $params['end_date'] . '-1 00:00:00');
                    
        $interventionList = $this->em->getRepository('App:Intervention')->getInterventionList($operator,
                                                                                            $initDate,
                                                                                            $endDate,
                                                                                            $params['phases'],
                                                                                            $params['search']);        
        
        $response = $this->utilsService->sendResponse(true, 200, 'OK', $interventionList);
        return $this->formatMobileResult ($operator, $response);
    }

    
    /**
     * Aceptación de una intervencion por parte de un usuario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * 
     * @return array Array de parametros obtenidos
     */
    public function appAcceptIntervention($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
      
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->acceptIntervention($intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Inicio de una intervención
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * 
     * @return array Array de parametros obtenidos
     */
    public function appStartIntervention($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
      
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->startIntervention($intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


     /**
     * Obtener detalles de una intervención
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * 
     * @return array Array de parametros obtenidos
     */
    public function appGetDetails($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
      
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        if(is_null($intervention->getOperator()) || $operator->getId() != $intervention->getOperator()->getId()){
            $response = $this->utilsService->sendResponse(false, 400, 'Error', 'No tienes asignada esa intervención.');
            return $this->formatMobileResult ($operator, $response);
        }

        $interventionDetails = $this->em->getRepository('App:Intervention')->getInterventionDetails($intervention);

        if ($intervention->getPhase()->getCode() == 'vh_localizado'){
            //$riskCauses = $this->em->getRepository('App:RISCause')->getPossibleRISCause($intervention);
            $riskCauses = $this->em->getRepository('App:RISCauseOperator')->getRISCauseList();
            $interventionDetails['possibleRiskCauses'] = $riskCauses;
        }

        if ( $intervention->getPhase()->getCode() == 'entrega_destino' || $intervention->getPhase()->getCode() == 'servicio_finalizado' ) {
            $images = $this->em->getRepository('App:Attachment')->getAttachedImagesByIntervention($intervention->getId());
            $interventionDetails['photos'] = $images;
        }

        if ( $intervention->getPhase()->getCode() == 'inicio_albaran_no_ris' ||
             $intervention->getPhase()->getCode() == 'inicio_albaran_ris'    ||
             $intervention->getPhase()->getCode() == 'entrega_destino'       ||
             $intervention->getPhase()->getCode() == 'en_transito_entrega'   
        ) {
            $vhType = $this->em->getRepository('App:VhType')->findOneById($interventionDetails['vh_type_id']);
            $interventionDetails['vehicle_type_img'] = $vhType->getVehicleType();
            $interventionDetails['vehicle_sections_parts'] = $this->em->getRepository('App:VhSectionPart')->getAppFormatSectionPartByVhType(2);
        }

        if ( $intervention->getPhase()->getCode() == 'servicio_finalizado' ) {
            $interventionDetails['clientSignature'] = $intervention->getClientSignature();
            $interventionDetails['receiverSignature'] = $intervention->getClientSignature();
        }

        if ( $intervention->getPhase()->getCode() == 'firma_albaran_revision' ) {
            $interventionDetails['mapPointer'] = $this->em->getRepository('App:Intervention')->getMainGeolocationInterventionRoute($intervention);
            
        }

        $response = $this->utilsService->sendResponse(true, 200, 'OK', $interventionDetails);
        
        return $this->formatMobileResult ($operator, $response);
    }


     /**
     * Obtiene el listado de motivos de servicio fallido
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appFailServiceNotificationList($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        //$list = $this->em->getRepository('App:CancellationType')->getArrayListByStatusCode('A'); // puede ser R...
        $list = $this->em->getRepository('App:InterventionFailureType')->getArrayList(); 
        
        $response = $this->utilsService->sendResponse(true, 200, 'OK', $list);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Notificación del error a central 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appFailServiceNotification($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'description', 'type' => 'string'],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'intervention_failure_type_id', 'type' => 'table', 'tableName' => 'intervention_failure_type', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $interventionFailureType = $this->em->getRepository('App:InterventionFailureType')->findOneById($params['intervention_failure_type_id']);


        $response = $this->interventionService->setInterventionFailureType($intervention, 
                                                                        $operator,
                                                                        $interventionFailureType,
                                                                        $params['description'],
                                                                        $params['latitude'],
                                                                        $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Primer paso en el proceso de la intervención, el marcar
     * el vehículo / cliente como encontrado
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appFoundClientAndVehicle($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->foundClientAndVehicle(  $intervention, 
                                                                        $operator,
                                                                        $params['latitude'],
                                                                        $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Marcación de si es RIS o no y actualización de estado
     * el vehículo / cliente como encontrado
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appStartDeliveryNote($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
            ['name' => 'is_ris', 'type' => 'bool'],
            ['name' => 'repair_description', 'type' => 'string'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        // en caso de que sea RIS, debería tener un motivo que haya seleccionado
        // en el desplegable
        $RISCauseOperator = null; 
        if ($params['is_ris']){
            $requiredExtra = [ 
                ['name' => 'riscause_id', 'type' => 'table', 'tableName' => 'riscause_operator', 'tableCol' => 'id'],
            ];
        
            $resultValidationExtra =  $this->validatorService->validatorBase ($params,$requiredExtra);
            if ($resultValidationExtra["status"]){
                $RISCauseOperator = $this->em->getRepository('App:RISCauseOperator')->findOneBy(array('id' => $params['riscause_id']));        
            }
            else{
                return $this->formatMobileResult (null, $resultValidationExtra);
            }
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->startDeliveryNote(  $intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude'],
                                                                    $params['is_ris'],
                                                                    $params['repair_description'],
                                                                    $RISCauseOperator    
                                                                );
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Marcación del vehiculo recogido en el no ris
     * el vehículo / cliente como encontrado
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appPickupVhNoRis($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
            ['name' => 'signerName', 'type' => 'string'],
            ['name' => 'signerPhone', 'type' => 'number'],
            ['name' => 'signerEmail', 'type' => 'email'],
            ['name' => 'km', 'type' => 'number'],
            ['name' => 'fuel', 'type' => 'number'],
            ['name' => 'equipmentAndObjects', 'type' => 'string'],
            ['name' => 'dirtyVh', 'type' => 'bool'],
            ['name' => 'scratchesOnVh', 'type' => 'bool'],
            ['name' => 'signerAcknowledgesScratches', 'type' => 'bool'],
            ['name' => 'signerIsCompanion', 'type' => 'bool'],
            ['name' => 'destinationType', 'type' => 'string'],
            ['name' => 'deliveryName', 'type' => 'string'],
            ['name' => 'deliveryAddress', 'type' => 'string'],
            ['name' => 'deliveryPhone', 'type' => 'string'],
            ['name' => 'deliveryLatitude', 'type' => 'number'],
            ['name' => 'deliveryLongitude', 'type' => 'number'],
            ['name' => 'deliveryTown', 'type' => 'string'],
            ['name' => 'deliveryProvince', 'type' => 'string'],
            ['name' => 'deliveryZipcode', 'type' => 'string'],
            ['name' => 'signerDni', 'type' => 'string'],
            ['name' => 'clientSignature', 'type' => 'string'],
            ['name' => 'photos', 'type' => 'array'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
        
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));
        
        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->pickupVhNoRis   (   $intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude'],
                                                                    $params
                                                                );
        return $this->formatMobileResult ($operator, $response);
    }


     /**
     * Descarga del listado de motivos de recogida fallida. 
     * Es prácticamente igual a "appGetIncidenceList", pero 
     * lo separamos por si acaso.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetListPickupFailVhNoRIS($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $list = $this->em->getRepository('App:IncidenceType')->getArrayListByPhaseCode($intervention->getPhase()->getCode()); 

        $response = $this->utilsService->sendResponse(true, 200, 'OK', $list);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Notificación del error a central en la recogida no ris
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appPickupFailVhNoRIS($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'description', 'type' => 'string'],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'incidence_type_id', 'type' => 'table', 'tableName' => 'incidence_type', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $incidenceType = $this->em->getRepository('App:IncidenceType')->findOneById($params['incidence_type_id']);
        
        $response = $this->interventionService->failServiceInterventionLoadVhNoRIS($intervention, 
                                                                                    $operator,
                                                                                    $incidenceType,
                                                                                    $params['description'],
                                                                                    $params['latitude'],
                                                                                    $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Carga exitosa del Vh RIS
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appLoadVhNoRIS($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->loadVhNoRIS($intervention, 
                                                            $operator,
                                                            $params['latitude'],
                                                            $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Entrega exitosa del Vh RIS
     * 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appDeliveryVhNoRIS($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
            ['name' => 'deliveryName', 'type' => 'string'],
            ['name' => 'deliveryAddress', 'type' => 'string'],
            ['name' => 'deliveryPhone', 'type' => 'string'],
            ['name' => 'deliveryLatitude', 'type' => 'number'],
            ['name' => 'deliveryLongitude', 'type' => 'number'],
            ['name' => 'deliveryTown', 'type' => 'string'],
            ['name' => 'deliveryProvince', 'type' => 'string'],
            ['name' => 'deliveryZipcode', 'type' => 'string'],
            ['name' => 'receiverIsLocated', 'type' => 'bool'],
            ['name' => 'receiverName', 'type' => 'string'],
            ['name' => 'receiverEmail', 'type' => 'string'],
        ];
        
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->deliveryVhNoRIS   (   $intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude'],
                                                                    $params
                                                                );
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Entrega exitosa del Vh RIS
     * 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appRevisionDeliveryNote($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],

            ['name' => 'receiverDni', 'type' => 'string'],
            ['name' => 'receiverSignature', 'type' => 'string'],

            ['name' => 'editDeliveryNote', 'type' => 'bool'],
            ['name' => 'kmCheck', 'type' => 'number'],
            ['name' => 'fuelCheck', 'type' => 'number'],
            ['name' => 'equipmentAndObjectsCheck', 'type' => 'string'],
            ['name' => 'dirtyVhCheck', 'type' => 'bool'],
            ['name' => 'scratchesOnVhCheck', 'type' => 'bool'],

            ['name' => 'photos', 'type' => 'array'],
        ];
        
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->revisionDeliveryNote   (   $intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude'],
                                                                    $params
                                                                );
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Finalización del servicio
     * 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appFinishService($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->finishService   (   $intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude']
                                                                );
        return $this->formatMobileResult ($operator, $response);
    }

    /**
     * Finalización de albarán de de un servicio RIS
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appFinishDeliveryNoteRIS($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
            ['name' => 'signerName', 'type' => 'string'],
            ['name' => 'signerPhone', 'type' => 'number'],
            ['name' => 'signerEmail', 'type' => 'string'],
            ['name' => 'km', 'type' => 'number'],
            ['name' => 'fuel', 'type' => 'number'],
            ['name' => 'equipmentAndObjects', 'type' => 'string'],
            ['name' => 'dirtyVh', 'type' => 'bool'],
            ['name' => 'scratchesOnVh', 'type' => 'bool'],
            ['name' => 'signerAcknowledgesScratches', 'type' => 'bool'],
            ['name' => 'signerDni', 'type' => 'string'],
            ['name' => 'clientSignature', 'type' => 'string'],
            ['name' => 'photos', 'type' => 'array'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
        
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->finishDeliveryNoteRIS($intervention, 
                                                                        $operator,
                                                                        $params['latitude'],
                                                                        $params['longitude'],
                                                                        $params
                                                                    );
        return $this->formatMobileResult ($operator, $response);
    }


    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    /**
     * Obtener el teléfono para llamar a la central. 
     * Imaginamos que será igual a "getNumberCallCentralAction" 
     * pero lo separamos por si acaso 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appRevisionCallCentral($params){

        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $APP_PHONE_CENTRAL = $this->utilsService->getParameter('APP_PHONE_CENTRAL');

        $response = $this->utilsService->sendResponse(true, 200, 'Obtenido con éxito', ['phone'=>$APP_PHONE_CENTRAL]);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Cierre final del servicio (pasaría al histórico)
     * 
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appCloseService($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
            ['name' => 'tickets', 'type' => 'array'],
        ];
        
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->closeService    (   $intervention, 
                                                                    $operator,
                                                                    $params['latitude'],
                                                                    $params['longitude'],
                                                                    $params['tickets']
                                                                );
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Descargar listado de intervenciones (histórico) de un usuario
     * Se parece a "getInterventionListAction" pero lo separamos en
     * otra función por si acaso
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * 
     * $phase_type puede tener dos valores permitidos:
     *      ->servicios_cerrados
     *      ->servicios_rechazados
     * 
     * @return array Array de parametros obtenidos
     */
    public function appGetInterventionHistoryList($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'init_date', 'type' => 'dateFromString', 'format' => 'Y-m'],
            ['name' => 'end_date', 'type' => 'dateFromString', 'format' => 'Y-m'],
            ['name' => 'phase_type', 'type' => 'string'],
            ['name' => 'search', 'type' => 'string'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }
        
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $initDate = \DateTime::createFromFormat('Y-m-d H:i:s', $params['init_date'] . '-1 00:00:00');
        $endDate = \DateTime::createFromFormat('Y-m-d H:i:s', $params['end_date'] . '-1 00:00:00');
        $endDate->modify('+1 month');

        if ($params['phase_type'] == 'servicios_cerrados'){
            $interventionList = $this->em->getRepository('App:Intervention')->getInterventionList($operator,
                                                                                                $initDate,
                                                                                                $endDate,
                                                                                                ["servicio_cerrado"],
                                                                                                $params['search']);
        }
        else if ($params['phase_type'] == 'servicios_rechazados'){
            $interventionList = $this->em->getRepository('App:Intervention')->getInterventionRefuseList($operator,
                                                                                                $initDate,
                                                                                                $endDate,
                                                                                                $params['search']);        
        }
        else{
            $response = $this->utilsService->sendResponse(false, 400, 'Error', "Los valores válidos para 'phase_type' son 'servicios_cerrados' y 'servicios_rechazados'.");
            return $this->formatMobileResult ($operator, $response);
        }
        
        $response = $this->utilsService->sendResponse(true, 200, 'OK', $interventionList);
        return $this->formatMobileResult ($operator, $response);
    }


     /**
     * Descargar listado de posibles incidencias. Dependerá del estado en el que se 
     * encuentre en ese momento
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetIncidenceList($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);

        $list = $this->em->getRepository('App:IncidenceType')->getArrayListByPhaseCode($intervention->getPhase()->getCode()); 
        
        $response = $this->utilsService->sendResponse(true, 200, 'OK', $list);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Marcar una intervención como incidencia
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appSetInterventionFails($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'description', 'type' => 'string'],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'incidence_type_id', 'type' => 'table', 'tableName' => 'incidence_type', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number'],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);

        $incidenceType = $this->em->getRepository('App:IncidenceType')->findOneById($params['incidence_type_id']);
        
        // cambiar a otro tipo de funcion 
        $response = $this->interventionService->setInterventionFails($intervention, 
                                                                    $operator,
                                                                    $incidenceType,
                                                                    $params['description'],
                                                                    $params['latitude'],
                                                                    $params['longitude']);
        return $this->formatMobileResult ($operator, $response);
    }


    /**
     * Obtener información básica para mostrar en el perfil de la app
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGetProfileInfo($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $craneList = $this->em->getRepository('App:Crane')->getAvailableCranesOperator($operator);

        $info = array("reference" => $operator->getReference(), 
                        "mobile" => $operator->getMobile(),
                        "crane_selected" => ( !is_null($operator->getCrane()) ? $operator->getCrane()->getPlate() : null),
                        "crane_list" => $craneList);
        
        $response = $this->utilsService->sendResponse(true, 200, 'OK', $info);
        return $this->formatMobileResult ($operator, $response);
    }

     /**
     * Va a la fase anterior. La idea es que cuando se quiera
     * ir a una fase anterior, se llame a esta función, deshara 
     * el estado, y posteriormente llamas a la función de 
     * "obtener detalles" y renderizas la pantalla que toque.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $params - Array 
     * @return array Array de parametros obtenidos
     */
    public function appGoBackPhase($params){
        $required = [ 
            ['name' => 'apiKey', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'api_key', 'msg' => "Introduzca una 'apiKey' válida." ],
            ['name' => 'intervention_id', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'id'],
            ['name' => 'latitude', 'type' => 'number'],
            ['name' => 'longitude', 'type' => 'number']
        ];
        
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if (!$resultValidation["status"]){
            return $this->formatMobileResult (null, $resultValidation);
        }

        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('apiKey' => $params['apiKey']));

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);
        
        $response = $this->interventionService->goBackPhase($intervention, 
                                                            $operator,
                                                            $params['latitude'],
                                                            $params['longitude'] );
        return $this->formatMobileResult ($operator, $response);
    }
}

?>
