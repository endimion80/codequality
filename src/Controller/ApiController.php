<?php 
// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\API\ApiService;
use App\Service\Utils\LogService;
use App\Service\UtilsBase\UtilsService;
use App\Service\Backend\ValidatorService;
use App\Service\Backend\InterventionService;


class ApiController
{
    public function __construct(EntityManagerInterface $em,
                                UtilsService $utilsService,
                                LogService $logService,
                                ApiService $apiService,
                                ValidatorService $validatorService,
                                InterventionService $interventionService)
    {
        $this->em = $em;
        $this->conn = $em->getConnection();
        $this->utilsService = $utilsService;
        $this->apiService = $apiService;
        $this->validatorService = $validatorService;
        $this->interventionService = $interventionService;
        $this->logService = $logService;
    }


    /******************************************************************/
    /*                        API WEB                                 */
    /******************************************************************/

    /**
     * Funcion para crear la intervencion desde la API
     * @author Javier Lago
     * @Route("/api_asitur/create/intervention", 
     *          name="newIntervention",
     *          condition="context.getMethod() in ['POST']")
     */
    public function createInterventionAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        if (isset($params['PosicionXVehiculo']))
            $params['PosicionXVehiculo'] = str_replace(",",".", $params['PosicionXVehiculo']);
        if (isset($params['PosicionYVehiculo']))
            $params['PosicionYVehiculo'] = str_replace(",",".", $params['PosicionYVehiculo']);
        
        $required = [ 
            ['name' => 'apiKey', 'type' => 'string'],
            ['name' => 'CodigoExpediente', 'type' => 'string'],
            ['name' => 'CodigoIntervencion', 'type' => 'string'],
            ['name' => 'NumeroPoliza', 'type' => 'string'],
            ['name' => 'ReferenciaCompania', 'type' => 'string'],
            ['name' => 'CodigoColaboradorAsitur', 'type' => 'table', 'tableName' => 'collaborator', 'tableCol' => 'code'],
            ['name' => 'CodigoSucursal', 'type' => 'table', 'tableName' => 'branch_office', 'tableCol' => 'code'],
            ['name' => 'CodigoGruaAsitur', 'type' => 'table', 'tableName' => 'crane', 'tableCol' => 'code'],
            ['name' => 'CodigoOperadorAsitur', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'code'],
            ['name' => 'CodigoEntidad', 'type' => 'table', 'tableName' => 'insurance_entity', 'tableCol' => 'id'],
            ['name' => 'SolicitudTipo', 'type' => 'string'],
            ['name' => 'SolicitudServicio', 'type' => 'table', 'tableName' => 'collaborator_service', 'tableCol' => 'code'],
            ['name' => 'SolicitudFecha', 'type' => 'dateFromString', 'format' => 'Y-m-d H:i:s'],
            ['name' => 'NombreComunicante', 'type' => 'string'],
            ['name' => 'ApellidosComunicante', 'type' => 'string'],
            ['name' => 'TelefonoComunicante', 'type' => 'string'],
            ['name' => 'TipoVehiculo', 'type' => 'table', 'tableName' => 'vh_type', 'tableCol' => 'code'],
            ['name' => 'MarcaVehiculo', 'type' => 'table', 'tableName' => 'vh_brand', 'tableCol' => 'id'],
            ['name' => 'ModeloVehiculo', 'type' => 'table', 'tableName' => 'vh_model', 'tableCol' => 'id'],
            ['name' => 'MatriculaVehiculo', 'type' => 'string'],
            ['name' => 'DireccionCompletaVehiculo', 'type' => 'string'],
            ['name' => 'DireccionVehiculo', 'type' => 'string'],
            ['name' => 'CPVehiculo', 'type' => 'string'],
            ['name' => 'LocalidadVehiculo', 'type' => 'table', 'tableName' => 'town', 'tableCol' => 'id'],
            ['name' => 'ProvinciaVehiculo', 'type' => 'table', 'tableName' => 'province', 'tableCol' => 'id'],
            ['name' => 'PosicionXVehiculo', 'type' => 'numeric'],
            ['name' => 'PosicionYVehiculo', 'type' => 'numeric'],
            ['name' => 'Parking', 'type' => 'bool'],
            ['name' => 'ObservacionesLocalizacionVehiculo', 'type' => 'string'],
            ['name' => 'TipoSiniestro', 'type' => 'table', 'tableName' => 'sinister_type', 'tableCol' => 'id'],
            ['name' => 'AmpliacionTipoSinientro', 'type' => 'table', 'tableName' => 'sinister_type_extension', 'tableCol' => 'id'],
            ['name' => 'TipoAveria', 'type' => 'table', 'tableName' => 'failure_type', 'tableCol' => 'id'],
            ['name' => 'CausaAveria', 'type' => 'table', 'tableName' => 'failure_cause_type', 'tableCol' => 'id', 'nullable' => true],
            ['name' => 'MotivoRis', 'type' => 'table', 'tableName' => 'riscause', 'tableCol' => 'id', 'nullable' => true],
            ['name' => 'DescripcionAveria', 'type' => 'string'],
            ['name' => 'PRIS', 'type' => 'bool'],
            ['name' => 'VehiculoUbicacion', 'type' => 'string'],// Ej:  Ciudad o Poligono/Carretera
            ['name' => 'VehiculoSituacion', 'type' => 'string'],// Ej: Dentro o fuera de la via
            ['name' => 'VehiculoBloqueado', 'type' => 'numeric']
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if ($resultValidation["status"]){
            // Control de seguridad
            if($params['apiKey'] != $this->utilsService->getParameter('APP_API_KEY')){
                $response = $this->utilsService->sendResponse(false, 403, 'apiKey no válida');
                return new JsonResponse($response);
            }
            
            // Hacemos el proceso
            $resultCreation = $this->interventionService->createInterventionFromAPI($params);
            
            if ($resultCreation["status"]){
                $response = $this->utilsService->sendResponse(true, 200, 'Creado con éxito', array('codigo' => $resultCreation["data"]['intervention']->getId()));
                return new JsonResponse($response);
            }
            else 
                return new JsonResponse($resultCreation);
        }
        else 
            return new JsonResponse($resultValidation);
    }

    /**
     * Funcion para solicitar gruas para un servicio nuevo, 
     * no vamos a guardar la entidad "intervention", esa la creamos
     * cuando sea una llamada de creación / asignación 
     * 
     * @author Javier Lago
     * @Route("/api_asitur/request/cranes", 
     *          name="requestCranes",
     *          condition="context.getMethod() in ['POST']")
     */
    public function requestCraneAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        
        if (isset($params['PosicionXIntervencion']))
            $params['PosicionXIntervencion'] = str_replace(",",".", $params['PosicionXIntervencion']);
        if (isset($params['PosicionYIntervencion']))
            $params['PosicionYIntervencion'] = str_replace(",",".", $params['PosicionYIntervencion']);

        $required = [ 
            ['name' => 'apiKey', 'type' => 'string'],
            ['name' => 'PosicionXIntervencion', 'type' => 'numeric'],
            ['name' => 'PosicionYIntervencion', 'type' => 'numeric'],
            ['name' => 'LimiteTiempo', 'type' => 'numeric'],
            ['name' => 'IncrementoPredisponible', 'type' => 'integer'],
            //['name' => 'CodigoServicio', 'type' => 'table', 'tableName' => 'collaborator_service', 'tableCol' => 'code'],
            //['name' => 'CodigoTipoGrua', 'type' => 'table', 'tableName' => 'crane_type', 'tableCol' => 'id'],
            ['name' => 'CodigoServicio', 'type' => 'array'],
            ['name' => 'CodigoTipoGrua', 'type' => 'array'],
            ['name' => 'CodigoIntervencion', 'type' => 'string'],           
            // Filtro extra
            ['name' => 'CodigoSucursal', 'type' => 'table', 'tableName' => 'branch_office', 'tableCol' => 'code', 'nullable' => true],
            ['name' => 'Instantaneo', 'type' => 'bool', 'nullable' => true],
        ];
        
        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if ($resultValidation["status"]){
            // Control de seguridad
            if($params['apiKey'] != $this->utilsService->getParameter('APP_API_KEY')){
                $response = $this->utilsService->sendResponse(false, 403, 'apiKey no válida');
                return new JsonResponse($response);
            }

            $resultRequest = $this->interventionService->requestCraneFromAPI($params);
            return new JsonResponse($resultRequest);
        }
        else 
            return new JsonResponse($resultValidation);
    }


    /**
     * Funcion para solicitar una anulación de servicio
     * 
     * @author Javier Lago
     * @Route("/api_asitur/cancel/intervention",  
     *          name="cancelIntervention",
     *          condition="context.getMethod() in ['POST']")
     */
    public function cancelInterventionAction(Request $request)
    {     
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        
        $required = [ 
            ['name' => 'apiKey', 'type' => 'string'],
            ['name' => 'CodigoIntervencion', 'type' => 'table', 'tableName' => 'intervention', 'tableCol' => 'code'],
            ['name' => 'CodigoGrua', 'type' => 'table', 'tableName' => 'crane', 'tableCol' => 'code'],
            ['name' => 'CodigoOperario', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'code'],
        ];

        $resultValidation =  $this->validatorService->validatorBase ($params,$required);
        
        if ($resultValidation["status"]){
            // Control de seguridad
            if($params['apiKey'] != $this->utilsService->getParameter('APP_API_KEY')){
                $response = $this->utilsService->sendResponse(false, 403, 'apiKey no válida');
                return new JsonResponse($response);
            }
        
            $intervention = $this->em->getRepository('App:Intervention')->findOneBy(array('code' => $params['CodigoIntervencion']));
            $crane = $this->em->getRepository('App:Crane')->findOneBy(array('code' => $params['CodigoGrua']));
            $operator = $this->em->getRepository('App:Operator')->findOneBy(array('code' => $params['CodigoOperario']));
        

            return new JsonResponse($this->interventionService->sendCancellationToOperator($intervention, $operator, $crane));
        }
        else 
            return new JsonResponse($resultValidation);
    }




    /**
     * Función básica para comprobar la conexión desde Asitur a RIRA
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * @route("/api_asitur/conection_test", 
     *          name="conectionTest",
     *          condition="context.getMethod() in ['POST']")
     */
    public function conectionTestAction(Request $request)
    {
        $response = $this->utilsService->sendResponse(true, 200, 'Conexión establecida');
        return new JsonResponse($response);
    }


    /******************************************************************/
    /*                       API MOBILE                               */
    /******************************************************************/

    /**
     * Función de login. Obtiene la API key del usuario para futuras llamadas
     * @author Javier Lago
     * @Route("/api/login", 
     *          name="appLogin",
     *          condition="context.getMethod() in ['POST']")
     */
    public function loginAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appLogin($params);
    }


    /**
     * Función de cierre de sesión, no sabemos si tendría algún
     * tipo de lógica interna, lo ponemos por si acaso 
     * @author Javier Lago
     * @Route("/api/logout", 
     *          name="appLogout",
     *          condition="context.getMethod() in ['POST']")
     */
    public function logoutAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appLogout($params);
    }


    /**
     * Función de cierre de sesión, no sabemos si tendría algún
     * tipo de lógica interna, lo ponemos por si acaso 
     * @author Javier Lago
     * @Route("/api/verifyApiKey", 
     *          name="appVerifyApiKey",
     *          condition="context.getMethod() in ['POST']")
     */
    public function verifyApiKeyAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appVerifyApiKey($params);
    }
     
    /**
     * Función que guarda la geoposicion de un operador
     * @author Javier Lago
     * @Route("/api/updateDevice", 
     *          name="updateDevice",
     *          condition="context.getMethod() in ['POST']")
     */
    public function updateDeviceAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appUpdateDeviceAction($params);
    }

    
    /**
     * Función para guardar los campos de firebase
     * para poder emitir notificaciones
     * @author Javier Lago
     * @Route("/api/updateFirebaseDevice", 
     *          name="updateFirebaseDevice",
     *          condition="context.getMethod() in ['POST']")
     */
    public function updateFirebaseDeviceAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appUpdateFirebaseDeviceAction($params);
    }


    /**
     * Función para emitir un ejemplo de notificación con
     * firebase
     * 
     * @author Javier Lago
     * @Route("/api/testFirebase", 
     *          name="testFirebase",
     *          condition="context.getMethod() in ['POST']")
     */
    public function testFirebaseAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appTestFirebaseAction($params);
    }

    
    /**
     * Funcionalidad para poner la grua en modo predisponible
     * @author Javier Lago
     * @Route("/api/craneReady", 
     *          name="craneReady",
     *          condition="context.getMethod() in ['POST']")
     */
    public function craneReadyAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appCraneReadyAction($params);
    }





    /**
     * Obtiene el log del último mes
     * @author Javier Lago
     * @Route("/api/getHistoryLog", 
     *          name="appGetGeopositionHistoryLog",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getGeopositionHistoryLogAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetHistoryLog($params);
    }


    /**
     * Obtiene el listado de estados posibles en el operador, y 
     * le devuelve el estado actual
     * @author Javier Lago
     * @Route("/api/getOperatorStatusList", 
     *          name="appGetOperatorStatusList",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getOperatorStatusListAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetOperatorStatusList($params);
    }


    /**
     * Actualiza el estado de disponibilidad del operador
     * @author Javier Lago
     * @Route("/api/updateOperatorStatus", 
     *          name="appUpdateOperatorStatus",
     *          condition="context.getMethod() in ['POST']")
     */
    public function updateOperatorStatusAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appUpdateOperatorStatus($params);
    }


    /**
     * Acción de recuperación de contraseña
     * @author Javier Lago
     * @Route("/api/forgotPassword", 
     *          name="appForgotPassword",
     *          condition="context.getMethod() in ['POST']")
     */
    public function forgotPasswordAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appForgotPassword($params);
    }


    /**
     * Obtener el teléfono de central
     * @author Javier Lago
     * @Route("/api/getNumberCallCentral", 
     *          name="appGetNumberCallCentral",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getNumberCallCentralAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetNumberCallCentral($params);
    }


    /**
     * Obtiene el número del asegurado para realizar una acción de llamada
     * @author Javier Lago
     * @Route("/api/getNumberCallClient", 
     *          name="appGetNumberCallClient",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getNumberCallClientAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetNumberCallClient($params);
    }


    /**
     * Obtiene el listado de motivos de rechazo de un servicio
     * @author Javier Lago
     * @Route("/api/getRefuseInterventionList", 
     *          name="appGetRefuseInterventionList",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getRefuseInterventionListAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetRefuseInterventionList($params);
    }


    /**
     * Rechazo de un servicio
     * @author Javier Lago
     * @Route("/api/refuseIntervention", 
     *          name="appRefuseIntervention",
     *          condition="context.getMethod() in ['POST']")
     */
    public function refuseInterventionAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appRefuseIntervention($params);
    }


    /**
     * Descargar listado de intervenciones de un usuario
     * @author Javier Lago
     * @Route("/api/getInterventionList", 
     *          name="appGetInterventionList",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getInterventionListAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetInterventionList($params);
    }


    /**
     * Aceptación de una intervención por parte de un operario
     * @author Javier Lago
     * @Route("/api/acceptIntervention", 
     *          name="appAcceptIntervention",
     *          condition="context.getMethod() in ['POST']")
     */
    public function acceptInterventionAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appAcceptIntervention($params);
    }


    /**
     * Inicio de una intervención
     * @author Javier Lago
     * @Route("/api/startIntervention", 
     *          name="appStartIntervention",
     *          condition="context.getMethod() in ['POST']")
     */
    public function startInterventionAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appStartIntervention($params);
    }

    // TODO - Completar con más info. Estará prácticamente todo, pero habrá que 
    /**
     * Descarga de los detalles de un aintervención.
     * @author Javier Lago
     * @Route("/api/getDetails", 
     *          name="appGetDetails",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getDetailsAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetDetails($params);
    }


    /**
     * Obtiene el listado de motivos de servicio fallido
     * @author Javier Lago
     * @Route("/api/getFailServiceNotificationList", 
     *          name="appGetFailServiceNotificationList",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getFailServiceNotificationAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appFailServiceNotificationList($params);
    }


    /**
     * Notificación del error a central 
     * @author Javier Lago
     * @Route("/api/failServiceNotification", 
     *          name="appFailServiceNotification",
     *          condition="context.getMethod() in ['POST']")
     */
    public function failServiceNotificationAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appFailServiceNotification($params);
    }


    /**
     * Primer paso en el proceso de la intervención, el marcar
     * el vehículo / cliente como encontrado
     * @author Javier Lago
     * @Route("/api/foundClientAndVehicle", 
     *          name="appFoundClientAndVehicle",
     *          condition="context.getMethod() in ['POST']")
     */
    public function foundClientAndVehicleAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appFoundClientAndVehicle($params);
    }

    /**
     * Marcación de si es RIS o no
     * @author Javier Lago
     * @Route("/api/startDeliveryNote", 
     *          name="appStartDeliveryNote",
     *          condition="context.getMethod() in ['POST']")
     */
    public function startDeliveryNoteAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appStartDeliveryNote($params);
    }


    /**
     * Marcación del vehiculo recogido en el no ris
     * @author Javier Lago
     * @Route("/api/pickupVhNoRis", 
     *          name="appPickupVhNoRis",
     *          condition="context.getMethod() in ['POST']")
     */
    public function pickupVhNoRISAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appPickupVhNoRis($params);
    }


    /**
     * Descarga del listado de motivos de recogida fallida
     * @author Javier Lago
     * @Route("/api/getListPickupFailVhNoRIS", 
     *          name="appGetListPickupFailVhNoRIS",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getListPickupFailVhNoRISAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetListPickupFailVhNoRIS($params);
    }

    /**
     * Descarga del listado de motivos de recogida fallida
     * @author Javier Lago
     * @Route("/api/pickupFailVhNoRIS", 
     *          name="appPickupFailVhNoRIS",
     *          condition="context.getMethod() in ['POST']")
     */
    public function pickupFailVhNoRISAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appPickupFailVhNoRIS($params);
    }


    /**
     * Carga exitosa del Vh RIS
     * @author Javier Lago
     * @Route("/api/loadVhNoRIS", 
     *          name="appLoadVhNoRIS",
     *          condition="context.getMethod() in ['POST']")
     */
    public function loadVhNoRISAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appLoadVhNoRIS($params);
    }


    /**
     * Entrega exitosa del Vh RIS
     * @author Javier Lago
     * @Route("/api/deliveryVhNoRIS", 
     *          name="appDeliveryVhNoRIS",
     *          condition="context.getMethod() in ['POST']")
     */
    public function deliveryVhNoRISAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appDeliveryVhNoRIS($params);
    }

    // TODO - Completar....
    /**
     * Revisión del albarán
     * @author Javier Lago
     * @Route("/api/revisionDeliveryNote", 
     *          name="appRevisionDeliveryNote",
     *          condition="context.getMethod() in ['POST']")
     */
    public function revisionDeliveryNoteAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appRevisionDeliveryNote($params);
    }

    /**
     * Finalización del servicio
     * @author Javier Lago
     * @Route("/api/finishService", 
     *          name="appFinishService",
     *          condition="context.getMethod() in ['POST']")
     */
    public function finishServiceAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appFinishService($params);
    }

    // TODO - Completar
    /**
     * Finalización de albarán de de un servicio RIS
     * @author Javier Lago
     * @Route("/api/finishDeliveryNoteRIS", 
     *          name="appFinishDeliveryNoteRIS",
     *          condition="context.getMethod() in ['POST']")
     */
    public function finishDeliveryNoteRISAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appFinishDeliveryNoteRIS($params);
    }


    /**
     * Obtener el teléfono para llamar a la central. 
     * Imaginamos que será igual a "getNumberCallCentralAction" 
     * pero lo separamos por si acaso 
     * 
     * @author Javier Lago
     * @Route("/api/revisionCallCentral", 
     *          name="appRevisionCallCentral",
     *          condition="context.getMethod() in ['POST']")
     */
    public function revisionCallCentralAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appRevisionCallCentral($params);
    }


    /**
     * Cierre final del servicio (pasaría al histórico)
     * 
     * @author Javier Lago
     * @Route("/api/closeService", 
     *          name="appCloseService",
     *          condition="context.getMethod() in ['POST']")
     */
    public function closeServiceAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appCloseService($params);
    }


    /**
     * Descargar listado de intervenciones (histórico) de un usuario
     * Se parece a "getInterventionListAction" pero lo separamos en
     * otra función por si acaso
     * @author Javier Lago
     * @Route("/api/getInterventionHistoryList", 
     *          name="appGetInterventionHistoryList",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getInterventionHistoryListAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetInterventionHistoryList($params);
    }


    /**
     * Descargar listado de posibles incidencias. Dependerá del estado en el que se 
     * encuentre en ese momento
     * 
     * @author Javier Lago
     * @Route("/api/getIncidenceList", 
     *          name="appGetIncidenceList",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getIncidenceListAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetIncidenceList($params);
    }


    /**
     * Marcar una intervención como incidencia
     * 
     * @author Javier Lago
     * @Route("/api/setInterventionFails", 
     *          name="appSetInterventionFails",
     *          condition="context.getMethod() in ['POST']")
     */
    public function setInterventionFailsAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appSetInterventionFails($params);
    }

    /**
     * Obtener información básica para mostrar en el perfil de la app
     * 
     * @author Javier Lago
     * @Route("/api/getProfileInfo", 
     *          name="appGetProfileInfo",
     *          condition="context.getMethod() in ['POST']")
     */
    public function getProfileInfoAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGetProfileInfo($params);
    }

    /**
     * Va a la fase anterior. La idea es que cuando se quiera
     * ir a una fase anterior, se llame a esta función, deshara 
     * el estado, y posteriormente llamas a la función de 
     * "obtener detalles" y renderizas la pantalla que toque.
     * 
     * @author Javier Lago
     * @Route("/api/goBackPhase", 
     *          name="appGoBackPhase",
     *          condition="context.getMethod() in ['POST']")
     */
    public function goBackPhaseAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $this->apiService->getParameters($request);
        return $this->apiService->appGoBackPhase($params);
    }
}
?>