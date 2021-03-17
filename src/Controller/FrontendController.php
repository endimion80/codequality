<?php

namespace App\Controller;

use App\Service\Backend\AttachmentService;
use App\Service\Backend\BranchOfficeService;
use App\Service\Backend\CraneService;
use App\Service\Backend\OperatorService;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\Utils\ExcelService;
use App\Service\Utils\MapsService;
use App\Service\UtilsBase\UtilsService;
use App\Service\Backend\UsersService;
use App\Service\EventsAndSync\SyncService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Service\Utils\PdfService;

class FrontendController extends AbstractController
{

    public function __construct(Security $security,
                                EntityManagerInterface $em,
                                UtilsService $utilsService,
                                BranchOfficeService $branchOfficeService,
                                UsersService $usersService,
                                ExcelService $excelService,
                                AttachmentService $attachmentService,
                                CraneService $craneService,
                                OperatorService $operatorService,
                                PdfService $pdfService,
                                SyncService $syncService,
                                MapsService $mapsService)
    {
        $this->em = $em;
        $this->security = $security;
        $this->utilsService = $utilsService;
        $this->branchOfficeService = $branchOfficeService;
        $this->usersService = $usersService;
        $this->excelService = $excelService;
        $this->attachmentService = $attachmentService;
        $this->craneService = $craneService;
        $this->operatorService = $operatorService;
        $this->pdfService = $pdfService;
        $this->syncService = $syncService;
        $this->mapsService = $mapsService;
    }

    /**
     * Renderiza la vista de landing
     * 
     * @Route("/", name="landing")
     */
    public function landing()
    {
        return $this->redirectToRoute("app_login");
    }

   
    /**
    * @Route("/user/home", name="user_home") 
    * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function home(Request $request)
    {
        // pequeñas pruebas
        //$user = $this->security->getUser(); // no hace falta
        //return new Response("jaj -> " .$user->getUserName() . " " . $user->getEmail());
        //return new Response("jaj -> " .$user->getLocale());
        //$locale = $request->getLocale();
        // new Response($request->attributes->get('_locale'));

        //? si quisieramos 
        //return $this->render('frontend/collaborator/home.html.twig');
        return $this->redirectToRoute("dashboard"); //? hacemos un redirect al dashboard
    }

    /**
     * Renderiza la vista de dashboard
     * 
     * @Route("/user/dashboard", name="dashboard")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardAction()
    {
        $collaboratorUser = $this->getUser();
        $collaborator = $this->getUser()->getCollaborator();
        $collaboratorList = $this->em->getRepository('App:Collaborator')->findBy(array(), array('name' => 'ASC'));
        $interventionStatusList = $this->em->getRepository('App:InterventionStatus')->getArrayInterventionStatus(true);
        
        // Para cuando exista el rol superusuario
        // TODO: Modificar esto
        $isMaster = false;
       
        return $this->render('frontend/collaborator/dashboard.html.twig', 
            ['collaboratorUser' => $collaboratorUser,
             'isMaster' => $isMaster,
             'collaborator' => $collaborator,
             'collaboratorList' => $collaboratorList,
             'interventionStatusList' => $interventionStatusList,
            ]);
    }

    /**
     * Descarga las sucursales de un colaborador
     * 
     * @Route("/user/dashboard/getBranchOffice", name="dashboard_get_branch_offices")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardBranchOfficeAction(Request $request)
    {
        $collaboratorId = $request->get('collaboratorId');
        $branchOfficeList = $this->em->getRepository('App:BranchOffice')->getArrayBranchOfficesByCollaborator($collaboratorId);
        return new JsonResponse($branchOfficeList);
    }

    /**
     * Descarga las gruas de una sucursal
     * 
     * @Route("/user/dashboard/getCranes", name="get_dashboard_cranes")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardCranesAction(Request $request)
    {
        $branchOfficeId = $request->get('branchOfficeId');
        $craneList = $this->em->getRepository('App:Crane')->getArrayCranesByBranchOffice($branchOfficeId);
        return new JsonResponse($craneList);
    }

    /**
     * Descarga los operarios de una sucursal
     * 
     * @Route("/user/dashboard/getOperators", name="get_dashboard_operators")
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function dashboardOperatorsAction(Request $request)
    {
        $branchOfficeId = $request->get('branchOfficeId');
        $operatorList = $this->em->getRepository('App:Operator')->getArrayOperatorsByBranchOffice($branchOfficeId);
        return new JsonResponse($operatorList);
    }

    /**
     * TODO 
     * Creo que tienen aun que definir unos contadores
     * Renderiza la vista de dashboard
     * 
     * @Route("/user/dashboard/counters", name="dashboard_counters")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardCountersAction(Request $request)
    {
        $collaboratorId = $request->request->get('collaborator');
        $branchOfficeId = $request->request->get('branchOffice');
        $craneId = $request->request->get('crane');
        $operatorId = $request->request->get('operator');
        $dateRange = $request->request->get('dateRange');
        list($initDate, $endDate) = explode("-", $dateRange);
        $initDate = trim($initDate);
        $endDate = trim($endDate);
        $interventionStatusId = $request->request->get('status');
       
        $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
        $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);

        $ris_percentage = $this->em->getRepository('App:Intervention')->getDashboardRisPercentage($collaboratorId,
                                                                                                  $branchOfficeId,
                                                                                                  $craneId,
                                                                                                  $operatorId,
                                                                                                  $initDate,
                                                                                                  $endDate,
                                                                                                  $interventionStatusId);

        $costAvg = '-'; //?
        $refuse = $this->em->getRepository('App:Intervention')->getDashboardRefusePercentage($collaboratorId,
                                                                                             $branchOfficeId,
                                                                                             $craneId,
                                                                                             $operatorId,
                                                                                             $initDate,
                                                                                             $endDate,
                                                                                             $interventionStatusId);
        $satisfied = '-';  //?
        $nc = '-'; //?
        $arrivalTime = '-'; //?

        
        $counters = array(  'ris'         => $ris_percentage,
                            'costAvg'     => $costAvg,
                            'refuse'      => $refuse,
                            'satisfied'   => $satisfied,
                            'nc'          => $nc,
                            'arrivalTime' => $arrivalTime
                        );

        return new JsonResponse($counters);                
    }


    /**
     * Renderiza la vista de dashboard de la Pestaña RIS
     * 
     * @Route("/user/dashboard/tab/ris", name="dashboard_tab_ris")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardTabRisAction(Request $request) { 
        $params = array();
        parse_str($request->request->get("filterForm"), $params);

        $risFigureData = $this->em->getRepository('App:Intervention')->getAssistanceTypeFigureData($params);
        $risCauseFigureData = $this->em->getRepository('App:Intervention')->getRisCauseFigureData($params);
        
        return $this->render('frontend/collaborator/dashboard_tab_ris.html.twig', [
            'risFigureData'   => $risFigureData,
            'risCauseFigureData' => $risCauseFigureData
        ]);
    }   

    /**
     * Función que filtra y rellena la tabla de dashboard RIS
     * 
     * @Route("/user/dashboard/tab/ris/datatable", name="dashboard_tab_ris_table")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardTabRisDatatableAction(Request $request) {
        // $collaborator = $this->getUser()->getCollaborator();

        //? Para cuando haya supersusuario
        $collaboratorId = $request->request->get("form_filters")["collaborator"];
        if( is_null($collaboratorId) || empty($collaboratorId) ) {
            $collaborator = null;
        } else {
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneById($collaboratorId);
        }

        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $params = $request->request->all(); 
        
        $list = $this->em->getRepository('App:Intervention')->getDashboardDataTableRIS($collaboratorUser, 
                                                                                        $collaborator,
                                                                                        $params);
        return new JsonResponse($list);
    }

    /**
     * Renderiza la vista de detalle del dashboard (Pestaña RIS) 
     * 
     * @Route("/user/dashboard/tab/ris/detail", name="dashboard_ris_detail")
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function dashboardRisDetailAction(Request $request) { 

        $collaborator = $this->getUser()->getCollaborator();
        $groupByData = $request->request->get("groupby");
        $typeData = $request->request->get("type");
        $provinces = $this->em->getRepository('App:Province')->getProvinces();
        $operators = $this->em->getRepository('App:Operator')->getArrayOperatorsByCollaborator($collaborator->getId());

        return $this->render('frontend/collaborator/dashboard_ris_detail.html.twig', [
            "collaborator" => $collaborator,
            "groupByData" => $groupByData,
            "typeData" => $typeData,
            "provinces" => $provinces,
            "operators" => $operators,
        ]);
    }   


    /**
     * Renderiza la vista de detalle del dashboard (Pestaña Rechazos) 
     * 
     * @Route("/user/dashboard/tab/refuse/detail", name="dashboard_refuse_detail")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardRefuseDetailAction(Request $request) { 

        $collaborator = $this->getUser()->getCollaborator();
        $groupByData = $request->request->get("groupby");
        $typeData = $request->request->get("type");
        $provinces = $this->em->getRepository('App:Province')->getProvinces();
        $operators = $this->em->getRepository('App:Operator')->getArrayOperatorsByCollaborator($collaborator->getId());

        $cancellationType = $this->em->getRepository('App:CancellationType')->findAll();

        return $this->render('frontend/collaborator/dashboard_refuse_detail.html.twig', [
            "collaborator" => $collaborator,
            "groupByData" => $groupByData,
            "typeData" => $typeData,
            "provinces" => $provinces,
            "operators" => $operators,
            "cancellationType" => $cancellationType
        ]);
    }


    /**
     * Función que filtra y rellena la tabla de detalle del dashboard (RIS)
     * 
     * @Route("/user/dashboard/tab/ris/detail/datatable", name="dashboard_tab_ris_table_detail")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function dashboardTabRisDetailDatatableAction(Request $request) {

        $fullSubFilters = $request->request->get("fullSubFilters");

        // Dependiendo del tipo de usuario
        $collaboratorId = $fullSubFilters["collaboratorId"];
        if( is_null($collaboratorId) || empty($collaboratorId) ) {
            $collaborator = null;
        } else {
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneById($collaboratorId);
        }

        $collaboratorUser = $this->getUser();

        // Parámetros
        $params = $request->request->all(); 
        
        $list = $this->em->getRepository('App:Intervention')->getDashboardDataTableRisDetail($collaborator, $collaboratorUser, $params);
        return new JsonResponse($list);
    }

    /**
     * Renderiza la vista de dashboard de la Pestaña Rechazados
     * 
     * @Route("/user/dashboard/tab/refuse", name="dashboard_tab_refuse")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardTabRefuseAction(Request $request)
    {
        $params = array();
        parse_str($request->request->get("filterForm"), $params);

        $refuseFigureData = $this->em->getRepository('App:Intervention')->getIsRefuseFigureData($params);
        $failureCauseFigureData = $this->em->getRepository('App:Intervention')->getFailureCauseFigureData($params);
        

        return $this->render('frontend/collaborator/dashboard_tab_refuse.html.twig', [
            'refuseFigureData'   => $refuseFigureData,
            'failureCauseFigureData' => $failureCauseFigureData
        ]);
    }


    /**
     * Datatable principal del dashboar de rechazados, el que agrupa por sucursal, provincia...
     * 
     * @Route("/user/dashboard/tab/refuse/datatable_general", name="dashboard_tab_refuse_table_general")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardTabRefuseDatatableGeneralAction(Request $request) {
        // $collaborator = $this->getUser()->getCollaborator();

        //? Para cuando haya supersusuario
        $collaboratorId = $request->request->get("form_filters")["collaborator"];
        if( is_null($collaboratorId) || empty($collaboratorId) ) {
            $collaborator = null;
        } else {
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneById($collaboratorId);
        }

        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $params = $request->request->all(); 
        
        $list = $this->em->getRepository('App:Intervention')->getDashboardDataTableRefuseGeneral($collaboratorUser, 
                                                                                                $collaborator,
                                                                                                $params);
        return new JsonResponse($list);
    }

    /**
     * Función que filtra y rellena la tabla de detalle del dashboard (Rechazo)
     * 
     * @Route("/user/dashboard/tab/refuse/detail/datatable", name="dashboard_tab_refuse_table_detail")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardTabRefuseDetailDatatableAction(Request $request) {

        $fullSubFilters = $request->request->get("fullSubFilters");

        // Dependiendo del tipo de usuario
        $collaboratorId = $fullSubFilters["collaboratorId"];
        if( is_null($collaboratorId) || empty($collaboratorId) ) {
            $collaborator = null;
        } else {
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneById($collaboratorId);
        }

        $collaboratorUser = $this->getUser();

        // Parámetros
        $params = $request->request->all(); 
        
        $list = $this->em->getRepository('App:Intervention')->getDashboardDataTableRefuseDetail($collaborator, $collaboratorUser, $params);
        return new JsonResponse($list);
    }

    //TODO tabla original!
    /**
     * Función que filtra y rellena la tabla de dashboard Rechazos
     * 
     * @Route("/user/dashboard/tab/refuse/datatable", name="dashboard_tab_refuse_table")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function dashboardTabRefuseDatatableAction(Request $request) {

        // $collaborator = $this->getUser()->getCollaborator();

        //? Para cuando haya supersusuario
        $collaboratorId = $request->request->get("form_filters")["collaborator"];
        if( is_null($collaboratorId) || empty($collaboratorId) ) {
            $collaborator = null;
        } else {
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneById($collaboratorId);
        }

        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $params = $request->request->all(); 
        
        $list = $this->em->getRepository('App:Intervention')->getDashboardDataTableRefuse($collaboratorUser, 
                                                                                        $collaborator,
                                                                                        $params);
        return new JsonResponse($list);
    }
    /**
     * Renderiza la vista de "Ficha"
     * 
     * @Route("/user/dataManagement", name="data_management")
     */
    public function dataManagementAction()
    {
        return $this->redirectToRoute("branch_offices");
    }


    /**
     * Función que descarga un fichero adjunto
     * 
     * @Route("/user/download/file", name="download_attachment")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function downloadAttachmentAction(Request $request) {

        $attachmentId = $request->request->get('attachmentId');

        $result = $this->attachmentService->downloadAttachment($attachmentId);
            
        return new JsonResponse($result);
    }

    /**
     * Función que prepara un fichero para subirlo en base64
     * 
     * @Route("/user/preUpload/file", name="preupload_attachment")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function preUploadAttachmentAction(Request $request) {

        if($_FILES) {
            $fileContent = file_get_contents($_FILES["file"]["tmp_name"]);
            $fileName = $_FILES["file"]["name"];
            $filePath = tempnam(sys_get_temp_dir(), $fileName);

            $attFile = fopen($filePath, 'w+');
            fputs($attFile, $fileContent);
            fclose($attFile);

            $response = $this->utilsService->sendResponse(true, 200, '', array('filePath' => $filePath, 'fileName' => $fileName));
        } else {
            $response = $this->utilsService->sendResponse(false, 500);
        }
            
        return new JsonResponse($response);
    }

    /**
     * Renderiza la vista de "Sucursales"
     * 
     * @Route("/user/dataManagement/branchOffices", name="branch_offices")
     */
    public function branchOfficesAction()
    {
        $provinces = $this->em->getRepository('App:Province')->getProvinces();
        
        return $this->render('frontend/collaborator/branchOffices.html.twig', [
            "provinces" =>  $provinces,
        ]);
    }

    /**
     * Renderiza las tarifas de una sucursal
     * 
     * @Route("/user/dataManagement/branchOffices/rates", name="branch_offices_rates")
     */
    public function branchOfficesRatesAction(Request $request)
    {
        $branchOfficeId = $request->request->get("branchOfficeId");
        
        // return new Response("holi " . $branchOfficeId); 
        return $this->render('frontend/collaborator/branchOfficesRates.html.twig', [
            "branchOfficeId" =>  $branchOfficeId,
        ]);
    }

    /**
     * Descarga de las tarifas de una sucursal
     * 
     * @Route("/user/dataManagement/branchOffices/rates/data", name="branch_offices_rates_data")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function tableBranchOfficesRatesAction(Request $request) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $params = $request->request->all();

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $branchOfficeId = $request->request->get('branchOffice');


        // Sincronizamos desde los sistemas asitur
        $collaborator = $this->em->getRepository('App:Collaborator')->findOneById($collaboratorId);
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById($branchOfficeId);
        $resultRequest = $this->syncService->syncActivities($collaborator, $branchOffice);

        $activityRepository = $this->em->getRepository('App:Activity');
        $activityList = $activityRepository->searchActivityTable($params,
                                                                $form_filters, 
                                                                $search_filter, 
                                                                $collaboratorId,
                                                                $branchOfficeId
                                                            );
        
        return new JsonResponse($activityList);
    }





    /**
     * Función que filtra y rellena la tabla de sucursales (branch Offices)
     * 
     * @Route("/user/dataManagement/branchOffices/table", name="branch_offices_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableBranchOfficesAction(Request $request) {
        // Recogemos los filtros
        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $params = $request->request->all();

        $branchOfficesRepository = $this->em->getRepository('App:BranchOffice');
        $branchOfficesList = $branchOfficesRepository->searchBranchOfficesTable($collaboratorId, $params);
        
        return new JsonResponse($branchOfficesList);
    }

    /**
     * Función que rellena el chosen de las localidades (towns)
     * 
     * @Route("/user/dataManagement/BranchOffices/town_list", name="town_chosen_list")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function chosenListBranchOfficeTownsAction(Request $request) {

        $provinceId = $request->request->get('province');
        $townList = $this->em->getRepository('App:Town')->getTowns($provinceId);

        return new JsonResponse($townList);
    }

    /**
     * Función que exporta la tabla filtrada de sucursales (branch Offices)
     * 
     * @Route("/user/dataManagement/branchOffices/export", name="branch_offices_export_excel")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function exportBranchOfficesAction(Request $request, ExcelService $excelService) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $dateNow = date("d-m-Y");
        $fileName = "Exportación_Sucursales_". $dateNow .".xlsx";

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $branchOfficesRepository = $this->em->getRepository('App:BranchOffice');
        $branchOfficesList = $branchOfficesRepository->searchBranchOffices($collaboratorId, $form_filters, $search_filter, true, true);
        
        // Para la creación del excel
        $nameSheets = ['Sucursales'];
            
        $result = $excelService->generateExcel($fileName, $nameSheets, $branchOfficesList);
        return new JsonResponse($result);
    }

    /**
     * Renderiza la vista de detalle de una sucursal
     * 
     * @Route("/user/dataManagement/branchOffice/detail", name="detail_branch_office")
     */
    public function detailBranchOfficeAction(Request $request)
    {
        $branchOfficeId = $request->request->get('branchOfficeId');
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById($branchOfficeId);
        $contacts =  $this->em->getRepository('App:Contact')->findBy(array("branchOffice" => $branchOfficeId));
        $phones =  $this->em->getRepository('App:Phone')->findBy(array("branchOffice" => $branchOfficeId));

        if (!$branchOffice) {
            return $this->redirectToRoute("branch_offices");
        }

        return $this->render('frontend/collaborator/detailBranchOffice.html.twig', [
            'branchOffice' => $branchOffice,
            'contacts' => $contacts,
            'phones' => $phones,
        ]);
    }

    /**
     * Función que exporta los datos de una sucursal
     * 
     * @Route("/user/dataManagement/branchOffice/detail/export", name="detail_branch_office_export_excel")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function exportDetailBranchOfficeAction(Request $request, ExcelService $excelService) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $fileName = "Exportación_Sucursal.xlsx";

        // Id de la sucursal de la que se va a exportar la información
        $branchOfficeId = $request->request->get('branchOfficeId');

        $resultData = $this->branchOfficeService->getBranchOfficeDataToExport($collaboratorId, $branchOfficeId);
        
        // Para la creación del excel
        $nameSheets = ['Sucursal'];
            
        $result = $excelService->generateExcel($fileName, $nameSheets, $resultData);
        return new JsonResponse($result);
    }

    /**
     * Función que obtiene los ficheros adjuntos de una sucursal
     * 
     * @Route("/user/dataManagement/branchOffice/detail/attachment_list", name="branchOffice_attachments")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listBranchOfficeAttachmentsAction(Request $request) {

        // Id de la sucursal de la que se va a obtener la lista de ficheros adjuntos
        $branchOfficeId = $request->request->get('branchOfficeId');

        $branchOfficeAttachmentsList = $this->em->getRepository('App:Attachment')->listAttachments($branchOfficeId, "fichero_adjunto_sucursal");
            
        return new JsonResponse($branchOfficeAttachmentsList);
    }

    /**
     * Renderiza la vista de "Grúas"
     * 
     * @Route("/user/dataManagement/cranes", name="cranes")
     */
    public function cranesAction(Request $request)
    {
        $collaboratorUser = $this->getUser();
        $collaborator = $collaboratorUser->getCollaborator()->getId();

        $brands = $this->em->getRepository('App:Brand')->findBy(array(), array('description' => 'ASC'));
        $craneTypes = $this->em->getRepository('App:CraneType')->findBy(array(), array('description' => 'ASC'));
        $craneManagementTypes = $this->em->getRepository('App:CraneManagementType')->findBy(array(), array('id' => 'ASC'));
        $craneStatusList = $this->em->getRepository('App:CraneStatus')->findBy(array(), array('id' => 'ASC'));
        $craneAvailabilityStatusList = $this->em->getRepository('App:AvailabilityStatus')->findBy(array(), array('id' => 'ASC'));
        $branchOfficesList = $this->em->getRepository('App:BranchOffice')->findBy(array('collaborator' => $collaborator), array('name' => 'ASC'));
        $labels = $this->em->getRepository('App:LabeledType')->findBy(array(), array('description' => 'ASC'));

        return $this->render('frontend/collaborator/cranes.html.twig', [
            'collaboratorUser'              => $collaboratorUser,
            'brands'                        => $brands,
            'craneTypes'                    => $craneTypes,
            'craneManagementTypes'          => $craneManagementTypes,
            'craneStatusList'               => $craneStatusList,
            'craneAvailabilityStatusList'   => $craneAvailabilityStatusList,
            'branchOfficesList'             => $branchOfficesList,
            'labels'                        => $labels,
        ]);
    }

    /**
     * Función que filtra y rellena la tabla de grúas (cranes)
     * 
     * @Route("/user/dataManagement/cranes/table", name="cranes_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableCranesAction(Request $request) {

        // Recogemos los filtros
        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $params = $request->request->all();
        $branchOfficeId = $request->request->get('branchOfficeId');
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById($branchOfficeId);

        $craneRepository = $this->em->getRepository('App:Crane');
        $cranesList = $craneRepository->searchCranesTable($collaboratorId, $params, $branchOffice);
        
        return new JsonResponse($cranesList);
    }

    /**
     * Función que exporta la tabla filtrada de grúas (cranes)
     * 
     * @Route("/user/dataManagement/cranes/export", name="cranes_export_excel")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function exportCranesAction(Request $request) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $dateNow = date("d-m-Y");
        $fileName = "Exportación_Grúas_". $dateNow .".xlsx";

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $cranesRepository = $this->em->getRepository('App:Crane');
        $cranesList = $cranesRepository->searchCranes($collaboratorId, $form_filters, $search_filter, true, true);
        
        // Para la creación del excel
        $nameSheets = ['Grúas'];
            
        $result = $this->excelService->generateExcel($fileName, $nameSheets, $cranesList);
        return new JsonResponse($result);
    }

    /**
     * Función del botón de dar de alta a una grúa
     * 
     * @Route("/user/dataManagement/cranes/add_crane", name="create_new_crane")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function createNewCraneAction(Request $request) {

        $collaborator = $this->getUser()->getCollaborator();

        // Recogemos los parámetros
        $preFormatInputs = $request->request->get('inputs');
        $inputs = array();

        foreach($preFormatInputs as $item) {
            $inputs[$item["name"]] = $item["value"];
        }

        $result = $this->craneService->createNewCrane($inputs, $collaborator);

        return new JsonResponse($result);
    }

    /**
     * Función de modificación de grúa
     * 
     * @Route("/user/dataManagement/crane/edit", name="detail_crane_edit_save")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function modifyCraneAction(Request $request) {

        $collaborator = $this->getUser()->getCollaborator();

        // Recogemos los parámetros
        $craneId = $request->request->get('craneId');
        $dataArray = $request->request->get('dataArray');
        $prefServicesToAdd = $request->request->get('prefServicesToAdd');
        $avServicesToAdd = $request->request->get('avServicesToAdd');
        $branchOfficesSelected = $request->request->get('branchOfficesSelected');
        $attachmentsToAdd = $request->request->get('attachmentsToAdd');
        $attachmentsToRemove = $request->request->get('attachmentsToRemove');
       
        $params = array("craneId" => $craneId, 
                        "dataArray" => $dataArray, 
                        "prefServicesToAdd" => $prefServicesToAdd, 
                        "avServicesToAdd" => $avServicesToAdd, 
                        "branchOfficesSelected" => $branchOfficesSelected, 
                        "attachmentsToAdd" => $attachmentsToAdd,
                        "attachmentsToRemove" => $attachmentsToRemove);

        $result = $this->craneService->modifyCrane($params);

        return new JsonResponse($result);
    }

    /**
     * Función del botón que modifica el tipo de asignación de una grúa
     * 
     * @Route("/user/dataManagement/cranes/modify_management_type", name="cranes_modify_management_type")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function modifyCranesManagementTypeAction(Request $request) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();

        // Recogemos los parámetros
        $arrayChecked = $request->request->get('arrayChecked');
        $typeId = $request->request->get('typeId');

        $result = $this->craneService->setManagementTypeInSelectedCranes($arrayChecked, $typeId, $collaboratorId);

        return new JsonResponse($result);
    }

    /**
     * Función del botón que da de baja a las grúas seleccinadas
     * 
     * @Route("/user/dataManagement/cranes/delete", name="cranes_delete")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function deleteCranesAction(Request $request) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();

        // Recogemos los parámetros
        $arrayChecked = $request->request->get('arrayChecked');

        $result = $this->craneService->deleteSelectedCranes($arrayChecked, $collaboratorId);

        return new JsonResponse($result);
    }

    /**
     * Renderiza la vista de detalle de una grúa
     * 
     * @Route("/user/dataManagement/crane/detail", name="detail_crane")
     */
    public function detailCraneAction(Request $request)
    {
        $collaboratorId = $this->getUser()->getCollaborator()->getId();

        $craneId = $request->request->get('craneId');
        $mode = $request->request->get('mode');
        
        // Grúa y sus campos
        $crane = $this->em->getRepository('App:Crane')->findOneById($craneId);
        $brands = $this->em->getRepository('App:Brand')->findBy(array(), array('description' => 'ASC'));
        $labels = $this->em->getRepository('App:LabeledType')->findBy(array(), array('description' => 'ASC'));
        $craneManagementTypes = $this->em->getRepository('App:CraneManagementType')->findBy(array(), array('id' => 'ASC'));
        $craneStatusList = $this->em->getRepository('App:CraneStatus')->findBy(array(), array('id' => 'ASC'));
        $craneAvailabilityStatusList = $this->em->getRepository('App:AvailabilityStatus')->findBy(array(), array('id' => 'ASC'));
        $craneTypes = $this->em->getRepository('App:CraneType')->findBy(array(), array('description' => 'ASC'));

        // Servicios
        
        // * $collaboratorServices deberán ser los que devuelva el nuevo WS
        // $collaboratorServices = $this->em->getRepository('App:CollaboratorService')->findAll();
        $collaboratorServicesResult = $this->syncService->getCraneAvailableServices($crane);
        $collaboratorServices = $collaboratorServicesResult['data']['collaboratorServices'];

        $preferentialServices = $this->em->getRepository('App:CollaboratorService')->getServicesByCrane($craneId, 1);
        $availableServices = $this->em->getRepository('App:CollaboratorService')->getServicesByCrane($craneId, 2);

        // Sucursales
        $collaboratorBranchOffices = $this->em->getRepository('App:BranchOffice')->findBy(array("collaborator" => $collaboratorId), array("name" => "ASC"));
        $craneBranchOffices = $this->em->getRepository('App:BranchOffice')->getBranchOfficesByCrane($craneId);

        if (!$crane) {
            return $this->redirectToRoute("cranes");
        }

        return $this->render('frontend/collaborator/detailCrane.html.twig', [
            'mode'  => $mode,
            'crane' => $crane,
            'brands' => $brands,
            'labels' => $labels,
            'craneManagementTypes' => $craneManagementTypes,
            'craneStatusList' => $craneStatusList,
            'craneAvailabilityStatusList' => $craneAvailabilityStatusList,
            'craneTypes' => $craneTypes,
            'collaboratorServices' => $collaboratorServices,
            'preferentialServices' => $preferentialServices,
            'availableServices' => $availableServices,
            'collaboratorBranchOffices' => $collaboratorBranchOffices,
            'craneBranchOffices' => $craneBranchOffices,
        ]);
    }

    /**
     * Función que exporta los datos de una grúa
     * 
     * @Route("/user/dataManagement/crane/detail/export", name="detail_crane_export_excel")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function exportDetailCraneAction(Request $request, ExcelService $excelService) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $fileName = "Exportación_Grúa.xlsx";

        // Parámetros de la grúa de la que se va a exportar la información
        $craneId = $request->request->get('craneId');

        $resultData = $this->craneService->getCraneDataToExport($collaboratorId, $craneId);
        
        // Para la creación del excel
        $nameSheets = ['Grúa'];
            
        $result = $excelService->generateExcel($fileName, $nameSheets, $resultData);
        return new JsonResponse($result);
    }

    /**
     * Función que rellena el chosen de los modelos (cranes)
     * 
     * @Route("/user/dataManagement/cranes/model_list", name="model_chosen_list")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function chosenListCraneModelAction(Request $request) {

        $brandId = $request->query->get('brand');
        $modelList = $this->em->getRepository('App:Model')->listCraneModel($brandId);

        return new JsonResponse($modelList);
    }

    /**
     * Función que obtiene los ficheros adjuntos de una grúa
     * 
     * @Route("/user/dataManagement/crane/detail/attachment_list", name="crane_attachments")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listCraneAttachmentsAction(Request $request) {

        // Id de la grúa de la que se va a obtener la lista de ficheros adjuntos
        $craneId = $request->request->get('craneId');

        $craneAttachmentsList = $this->em->getRepository('App:Attachment')->listAttachments($craneId, "fichero_adjunto_grua");
            
        return new JsonResponse($craneAttachmentsList);
    }

    /**
     * Renderiza la vista de "Operadores"
     * 
     * @Route("/user/dataManagement/operators", name="operators")
     */
    public function operatorsAction()
    {
        $collaborator = $this->getUser()->getCollaborator();

        $branchOfficesList = $this->em->getRepository('App:BranchOffice')->findBy(array('collaborator' => $collaborator), array('name' => 'ASC'));
        $operatorStatusList = $this->em->getRepository('App:OperatorStatus')->listOperatorStatus();

        return $this->render('frontend/collaborator/operators.html.twig', [
            "branchOffices" => $branchOfficesList,
            "statusList" => $operatorStatusList,
        ]);
    }

    /**
     * Cámbia la disponibilidad del operador
     * 
     * @Route("/user/dataManagement/operators/changeAvailability", name="operators_change_availability")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function operatorsChangeAvailabilityAction(Request $request)
    {
        $operatorId = $request->request->get('operatorId');
        $status = $request->request->get('newStatus');

        $operator = $this->em->getRepository('App:Operator')->findOneById($operatorId);

        if (is_null($operator)){
            $response = $this->utilsService->sendResponse(false, 400, 'Error', ['msg' => 'No existe el operador']);
            return new JsonResponse($response);
        }
        
        if ($status == 'on')
            $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'available'));
        else 
            $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'not_available'));

        try {
            $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);
            $this->em->persist($operator);
            $this->em->flush();

            $success = true;
            $msg = "Su estado es No Disponible y no recibirá servicios de Asitur";
            if ($availabilityOperatorStatus->getCode() == 'available'){
                if (is_null($operator->getCrane())){
                    $msg = "Está activo, pero no tiene grúa asignada";
                }
                else{
                    // Comprobamos si hay más operadores con la misma grua y están activos
                    $otherActiveOperatorSameCrane = $this->em->getRepository('App:Operator')->findOtherActiveOperatorSameCrane($operator);

                    if (count($otherActiveOperatorSameCrane) == 0){
                        $msg = "Su vehículo actualmente es '".$operator->getCrane()->getPlate()."'";
                    }
                    else{
                        $success = false;
                        $msg = "Su vehículo ".$operator->getCrane()->getPlate()." está asignado a ".$otherActiveOperatorSameCrane[0]['reference'].". No se puede activar.";
                        $availabilityOperatorStatus = $this->em->getRepository('App:AvailabilityOperatorStatus')->findOneBy(array('code' => 'not_available'));
                        $operator->setAvailabilityOperatorStatus($availabilityOperatorStatus);
                        $this->em->persist($operator);
                        $this->em->flush();
                    }
                }
            }

            $response = $this->utilsService->sendResponse($success, 200, 'Guardado con éxito', ['msg' => $msg]);
            return new JsonResponse($response);
        }
        catch (\Exception $e) {
            $response = $this->utilsService->sendResponse(false, 400, 'Ha ocurrido un error', ['msg' => $e->getMessage()]);
            return new JsonResponse($response);
        }        
    }

    /**
     * Cámbia la disponibilidad del operador
     * 
     * @Route("/user/dataManagement/operators/changeCraneModal", name="operators_change_crane_modal")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function modalChangeOperatorCrane(Request $request)
    {
        $operatorId = $request->request->get('operatorId');
        
        $operator = $this->em->getRepository('App:Operator')->findOneById($operatorId);
        // Grúas disponibles para asignar
        $operatorAvailableCranes = $this->em->getRepository('App:operatorAvailableCranes')->findBy(array('operator' => $operatorId));

        return $this->render('frontend/collaborator/operator_crane_modal.html.twig', [
            "operator" => $operator,
            'operatorAvailableCranes' => $operatorAvailableCranes,
        ]);
    }


    /**
     * Cámbia la grua de un operador
     * 
     * @Route("/user/dataManagement/operators/changeCrane", name="operators_change_crane")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function operatorsChangeCraneAction(Request $request)
    {
        $operatorId = $request->request->get('operatorId');
        $craneId = $request->request->get('craneId');

        $crane = null;

        $operator = $this->em->getRepository('App:Operator')->findOneById($operatorId);
        $crane = $this->em->getRepository('App:Crane')->findOneById($craneId);

        $operator->setCrane($crane);

        $this->em->persist($operator);
        $this->em->flush();

        $response = $this->utilsService->sendResponse(true, 200, 'Guardado con éxito');
        return new JsonResponse($response);
    }


    /**
     * Función que filtra y rellena la tabla de operarios (operators)
     * 
     * @Route("/user/dataManagement/operators/table", name="operators_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableOperatorsAction(Request $request) {

        // Recogemos los filtros
        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $params = $request->request->all();
        $branchOfficeId = $request->request->get('branchOfficeId');

        $operatorRepository = $this->em->getRepository('App:Operator');
        $operatorsList = $operatorRepository->searchOperatorsTable($collaboratorId, $params, $branchOfficeId);
        
        return new JsonResponse($operatorsList);
    }

    /**
     * Función que exporta la tabla filtrada de operarios (operators)
     * 
     * @Route("/user/dataManagement/operators/export", name="operators_export_excel")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function exportOperatorsAction(Request $request) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $dateNow = date("d-m-Y");
        $fileName = "Exportación_Operarios_". $dateNow .".xlsx";

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $operatorsRepository = $this->em->getRepository('App:Operator');
        $operatorsList = $operatorsRepository->searchOperators($collaboratorId, $form_filters, $search_filter, true, true);
        
        // Para la creación del excel
        $nameSheets = ['Operarios'];
            
        $result = $this->excelService->generateExcel($fileName, $nameSheets, $operatorsList);
        return new JsonResponse($result);
    }

    /**
     * Función del botón de dar de alta a un operario
     * 
     * @Route("/user/dataManagement/operators/add_operator", name="create_new_operator")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function createNewOperatorAction(Request $request) {

        $collaborator = $this->getUser()->getCollaborator();
        $user = $this->getUser();

        // Recogemos los parámetros
        $preFormatInputs = $request->request->get('inputs');
        $inputs = array();

        foreach($preFormatInputs as $item) {
            $inputs[$item["name"]] = $item["value"];
        }

        $result = $this->operatorService->createNewOperator($user, $inputs, $collaborator);

        return new JsonResponse($result);
    }

    /**
     * Función de modificación de operario
     * 
     * @Route("/user/dataManagement/operator/edit", name="detail_operator_edit_save")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function modifyOperatorAction(Request $request) {

        $collaborator = $this->getUser()->getCollaborator();
        $user = $this->getUser();

        // Recogemos los parámetros
        $operatorId = $request->request->get('operatorId');
        $dataArray = $request->request->get('dataArray');
        $availabilityStatus = $request->request->get('availabilityStatus');
        $assignedCraneId = $request->request->get('assignedCraneId');
        $availableCranes = $request->request->get('availableCranes');
        $branchOfficesSelected = $request->request->get('branchOfficesSelected');
        $attachmentsToAdd = $request->request->get('attachmentsToAdd');
        $attachmentsToRemove = $request->request->get('attachmentsToRemove');
        $modifiedProfileImage = $request->request->get('modifiedProfileImage');

        $params = array("operatorId"            => $operatorId, 
                        "dataArray"             => $dataArray, 
                        "availabilityStatus"    => $availabilityStatus, 
                        "assignedCraneId"       => $assignedCraneId, 
                        "availableCranes"       => $availableCranes,
                        "branchOfficesSelected" => $branchOfficesSelected, 
                        "attachmentsToAdd"      => $attachmentsToAdd,
                        "attachmentsToRemove"   => $attachmentsToRemove,
                        "modifiedProfileImage"  => $modifiedProfileImage);

        $result = $this->operatorService->modifyOperator($user, $params);

        return new JsonResponse($result);
    }

    /**
     * Función del botón que da de baja a los operarios seleccionados
     * 
     * @Route("/user/dataManagement/operators/delete", name="operators_delete")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function deleteOperatorsAction(Request $request) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();

        // Recogemos los parámetros
        $arrayChecked = $request->request->get('arrayChecked');

        $result = $this->operatorService->deleteSelectedOperators($arrayChecked, $collaboratorId);

        return new JsonResponse($result);
    }

    /**
     * Renderiza la vista de detalle de un operario
     * 
     * @Route("/user/dataManagement/operator/detail", name="detail_operator")
     */
    public function detailOperatorAction(Request $request)
    {
        $collaboratorId = $this->getUser()->getCollaborator()->getId();

        $operatorId = $request->request->get('operatorId');
        $mode = $request->request->get('mode');
        $smsDelivered = false;
        $loginAfterModification = false;
        
        // Operario y sus campos
        $operator = $this->em->getRepository('App:Operator')->findOneById($operatorId);

        if (!$operator) {
            return $this->redirectToRoute("operators");
        }

        $attachmentTypeOperatorProfileImage = $this->em->getRepository('App:AttachmentType')->findOneByCode("foto_perfil_operario");
        $operatorProfileImage = $this->em->getRepository('App:Attachment')->findOneBy(array('operator' => $operatorId,
                                                                                            'attachmentType' => $attachmentTypeOperatorProfileImage
                                                                                           ));
        $branchOfficesList = $this->em->getRepository('App:BranchOffice')->getArrayBranchOfficesByOperator($operatorId);
        $availableCraneTypesByBranchOffice = $this->em->getRepository('App:CraneType')->getCraneTypesByBranchOffice($collaboratorId, null);

        // Grúas disponibles para asignar
        $operatorAvailableCranes = $this->em->getRepository('App:operatorAvailableCranes')->findBy(array('operator' => $operatorId));

        // Sucursales
        $collaboratorBranchOffices = $this->em->getRepository('App:BranchOffice')->findBy(array("collaborator" => $collaboratorId), array("name" => "ASC"));
        $operatorBranchOffices = $this->em->getRepository('App:BranchOffice')->getBranchOfficesByOperator($operatorId);

        // Comprobación "SMS ENVIADO"
        $resultCheckingSmsDelivery = $this->em->getRepository('App:Log')->findBy(array(
                                                        'type' => ["operator_new_mobile","operator_new_mobile_notification"],
                                                        'user' => $operatorId
                                                    ),
                                                    array(
                                                        'creationDate' => 'DESC'    
                                                    ), 2);
        
        $editSms = $notificationSms = null;
        if($resultCheckingSmsDelivery) {
            foreach($resultCheckingSmsDelivery as $instance) {
                if($instance->getType() == "operator_new_mobile") {
                    $editSms = $instance;
                } else {
                    $notificationSms = $instance;
                }
            }
        }

        if( count($resultCheckingSmsDelivery) == 2 && $editSms != null && $notificationSms != null ) {
            if( $notificationSms->getCreationDate() >= $editSms->getCreationDate() ) {
                $smsDelivered = true;
            }
        }
        
        // Comprobación "LOGIN APP"
        if( $operator->getLastAccess()  ) {
            $loginAfterModification = true;
        }

        $resultCheckingLogin = $this->em->getRepository('App:Log')->findBy(array(
            'type' => ["operator_new_mobile","operator_new_password"],
            'user' => $operatorId
        ),
        array(
            'creationDate' => 'DESC'    
        ), 2);

        if($resultCheckingLogin){
            foreach($resultCheckingLogin as $instance) {
                if($instance->getCreationDate() > $operator->getLastAccess()) {
                    $loginAfterModification = false;
                }
            }
        }

        return $this->render('frontend/collaborator/detailOperator.html.twig', [
            'mode'  => $mode,
            'operator' => $operator,
            'operatorProfileImage' => $operatorProfileImage,
            'operatorAvailableCranes' => $operatorAvailableCranes,
            'branchOfficesList' => $branchOfficesList,
            'availableCraneTypesByBranchOffice' => $availableCraneTypesByBranchOffice,
            'smsDelivered' => $smsDelivered,
            'loginAfterModification' => $loginAfterModification,
            'collaboratorBranchOffices' => $collaboratorBranchOffices,
            'operatorBranchOffices' => $operatorBranchOffices
        ]);
    }

    /**
     * Función que exporta los datos de un operario
     * 
     * @Route("/user/dataManagement/operator/detail/export", name="detail_operator_export_excel")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function exportDetailOperatorAction(Request $request, ExcelService $excelService) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $fileName = "Exportación_Operario.xlsx";

        // Parámetros del operario del que se va a exportar la información
        $operatorId = $request->request->get('operatorId');

        $resultData = $this->operatorService->getOperatorDataToExport($collaboratorId, $operatorId);
        
        // Para la creación del excel
        $nameSheets = ['Operario'];
            
        $result = $excelService->generateExcel($fileName, $nameSheets, $resultData);
        return new JsonResponse($result);
    }

    /**
     * Función que rellena el chosen de los tipos de grúas disponibles para una sucursal
     * 
     * @Route("/user/dataManagement/operators/availableCraneTypesByBranchOffices_chosen_list", name="operator_crane_types_chosen_list")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function chosenListAvailableCraneTypesByBranchOfficeAction(Request $request) {

        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $branchOfficeId = $request->request->get("branchOfficeId");
        
        $availableCraneTypesByBranchOffice = $this->em->getRepository('App:CraneType')->getCraneTypesByBranchOffice($collaboratorId, $branchOfficeId);

        $response = $this->utilsService->sendResponse(true, 200, '', $availableCraneTypesByBranchOffice);

        return new JsonResponse($response);
    }

    /**
     * Función que rellena el chosen de la disponibilidad de operarios (operators)
     * 
     * @Route("/user/dataManagement/operators/availabilityStatus_chosen_list", name="operator_availabilityStatus_chosen_list")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function chosenListAvailabilityOperatorStatusAction(Request $request) {

        $availabilityOperatorStatusRepository = $this->em->getRepository('App:AvailabilityOperatorStatus');
        $availabilityOperatorStatusList = $availabilityOperatorStatusRepository->listOperatorAvailabilityStatus();
        
        return new JsonResponse($availabilityOperatorStatusList);
    }
    
    /**
     * Función que rellena el chosen para seleccionar la grúa asignada
     * 
     * @Route("/user/dataManagement/operators/modal_cranes", name="assigned_crane_chosen_list")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listBranchOfficesCraneAction(Request $request) {
        
        // Recogemos el parámetro
        $branchOfficeId = $request->request->get('branchOfficeId');

        $cranesByBranchOffice = $this->em->getRepository('App:Crane')->getArrayCranesByBranchOffice($branchOfficeId, true);
        
        return new JsonResponse($cranesByBranchOffice);
    }

    /**
     * Función que filtra y rellena la tabla grúas para poner como disponible para un operario
     * 
     * @Route("/user/dataManagement/operators/available_cranes_table", name="operators_available_cranes_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableAvailableCranesAction(Request $request) {

        // Recogemos los filtros
        $collaboratorId = $this->getUser()->getCollaborator()->getId();
        $params = $request->request->all();

        $cranesList = $this->em->getRepository('App:Crane')->getOperatorsAvailableCranesTable($collaboratorId, $params);
        
        return new JsonResponse($cranesList);
    }

    /**
     * Función que obtiene los ficheros adjuntos de un operario
     * 
     * @Route("/user/dataManagement/operator/detail/attachment_list", name="operator_attachments")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listOperatorAttachmentsAction(Request $request) {

        // Id del operario del que se va a obtener la lista de ficheros adjuntos
        $operatorId = $request->request->get('operatorId');

        $operatorAttachmentsList = $this->em->getRepository('App:Attachment')->listAttachments($operatorId, "fichero_adjunto_operario");
            
        return new JsonResponse($operatorAttachmentsList);
    }

    /**
     * Función que prepara la imagen de perfil de un operario para subirlo en base64
     * 
     * @Route("/user/preUpload/operator/profilePicture", name="preupload_operator_profile_picture")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function preUploadOperatorProfilePictureAction(Request $request) {

        if($_FILES) {
            $fileContent = file_get_contents($_FILES["opProfileImage"]["tmp_name"]);
            $fileName = $_FILES["opProfileImage"]["name"];
            $filePath = tempnam(sys_get_temp_dir(), $fileName);
            $type =  $_FILES["opProfileImage"]["type"];
            $encodedContent = base64_encode($fileContent);

            $attFile = fopen($filePath, 'w+');
            fputs($attFile, $fileContent);
            fclose($attFile);

            $response = $this->utilsService->sendResponse(true, 200, '', array('filePath' => $filePath, 'fileName' => $fileName, 'type' => $type, 'content' => $encodedContent));
        } else {
            $response = $this->utilsService->sendResponse(false, 500);
        }
            
        return new JsonResponse($response);
    }

   
    /**
     * Renderiza la vista de "Reporting"
     * 
     * @Route("/user/reporting", name="reporting")
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     */
    public function reportingAction()
    {
        $crane_management_type = $this->em->getRepository('App:CraneManagementType')->findAll();
        $intervention_status = $this->em->getRepository('App:InterventionStatus')->findAll();
        return $this->render('frontend/collaborator/reporting.html.twig', [
            'crane_management_type' => $crane_management_type,
            'intervention_status' => $intervention_status
        ]);
    }

    /**
     * Descarga los documentos de los albaranes pendientes
     * 
     * @Route("/user/downloadDeliveryNote", name="download_delivery_note")
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     */
    public function downloadDeliveryNote(Request $request){
        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $dateNow = date("d-m-Y");
        $params = $request->request->all(); 
        $smartPreview = $params['smartPreview'];
       
        // Sí es solo uno lo mostramos por pantalla, sino vamos a sacar un zip
        if (count($params['interventionList']) == 1){
            $intervention_id = $params['interventionList'][0];
            $intervention = $this->em->getRepository('App:Intervention')->findOneById($intervention_id); 

            if (is_null($intervention) || 
                $intervention->getCollaborator()->getId() != $collaboratorUser->getCollaborator()->getId()){
                $response = $this->utilsService->sendResponse(false, 400, "No se puede descargar ese documento", null);
                return $response;
            }

            $mapUrl =  $this->mapsService->getUrlStaticMap($intervention->getVhLatitude(), 
                                                            $intervention->getVhLongitude(),
                                                            $intervention->getDeliveryLatitude(),
                                                            $intervention->getDeliveryLongitude(),
                                                            130,155,true,true); 

            $filename = "Albaran_".$intervention_id.".pdf";
            $template = "pdf/delivery_note_pdf.html.twig";
            $templateOptions = ['intervention' => $intervention, 
                                'map' => $mapUrl];
            
            $result = $this->pdfService->tmpPDF($filename, $template, $templateOptions);
            $response = $this->utilsService->sendResponse(true, 200, "DONE",
                        array(  'isZip' => 'false',
                                'type' => ( $smartPreview == 'true' ? 'visualize' : 'download' ),
                                'fileName' => $result['data']['fileName'],
                                'filePath' => $result['data']['filePath'])
                        );
            return new JsonResponse($response);       
        }
        else{

            $filesArray = array();
            foreach($params['interventionList'] as $intervention_id) {
                $intervention = $this->em->getRepository('App:Intervention')->findOneById($intervention_id); 

                if (is_null($intervention) || 
                    $intervention->getCollaborator()->getId() != $collaboratorUser->getCollaborator()->getId()){
                    $response = $this->utilsService->sendResponse(false, 400, "No se puede descargar ese documento", null);
                    return $response;
                }
                
                $mapUrl =  $this->mapsService->getUrlStaticMap($intervention->getVhLatitude(), 
                                                            $intervention->getVhLongitude(),
                                                            $intervention->getDeliveryLatitude(),
                                                            $intervention->getDeliveryLongitude(),
                                                            130,155,true,true); 
                $filename = "Albaran_".$intervention_id.".pdf";
                $template = "pdf/delivery_note_pdf.html.twig";
                $templateOptions = ['intervention' => $intervention, 
                                    'map' => $mapUrl];
                
                $result = $this->pdfService->tmpPDF($filename, $template, $templateOptions);
                
                array_push($filesArray, ['fileName' => $result['data']['fileName'],
                                        'filePath' => $result['data']['filePath']]);
            }

            $response = $this->utilsService->sendResponse(true, 200, "DONE", array(  'isZip' => 'true',
                                                                                    'type' => 'download',
                                                                                    'files' => $filesArray));
            return new JsonResponse($response);       
        }
    }

    /**
     * Función que filtra y rellena la tabla de intervenciones
     * 
     * @Route("/user/dataManagement/reporting/table", name="reporting_table")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function tableReportingAction(Request $request) {
        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $params = $request->request->all(); 
      
        $list = $this->em->getRepository('App:Intervention')->getDataTableReporting($collaboratorUser, 
                                                                                    $params);
        return new JsonResponse($list);
    }


    /**
     * Exportación de la tabla de "intervenciones"
     * 
     * @Route("/user/dataManagement/reporting/table/export", name="reporting_table_export_excel")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function tableReportingExportAction(Request $request) {

        //$collaborator = $this->getUser()->getCollaborator();
        
        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $dateNow = date("d-m-Y");
        $fileName = "Reporting_". $dateNow .".xlsx";

        $params = $request->request->all(); 

        $list = $this->em->getRepository('App:Intervention')->getDataTableReportingExcelExport($collaboratorUser, 
                                                                                                $params['interventionList']);
        $nameSheets = ['Intervenciones'];
        $dataForSheets = array($list);
        
        $result = $this->excelService->generateExcel($fileName, $nameSheets, $dataForSheets);
        return new JsonResponse($result);
    }


    /**
     * Renderiza la vista de Intervenciones (Finalización y facturación)"
     * 
     * @Route("/user/interventionList", name="intervention_list")
     *
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function interventionListAction()
    {
        $failure_types = $this->em->getRepository('App:FailureType')->findAll();
        return $this->render('frontend/collaborator/interventionList.html.twig', [
            'failure_types' => $failure_types
        ]);
    }

    /**
     * Función que filtra y rellena la tabla de intervenciones
     * 
     * @Route("/user/dataManagement/intervention/table", name="interventions_table")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function tableInterventionsAction(Request $request) {

        $collaborator = $this->getUser()->getCollaborator();
        
        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $params = $request->request->all(); 
      
        $list = $this->em->getRepository('App:Intervention')->getDataTable($collaboratorUser, 
                                                                            $collaborator,
                                                                            $params);
        
        return new JsonResponse($list);
    }


    /**
     * Exportación de la tabla de "intervenciones"
     * 
     * @Route("/user/dataManagement/intervention/table/export", name="interventions_table_export_excel")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function tableInterventionsExportAction(Request $request) {

        //$collaborator = $this->getUser()->getCollaborator();
        
        $user = $this->security->getUser();
        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $dateNow = date("d-m-Y");
        $fileName = "Intervenciones_". $dateNow .".xlsx";

        $params = $request->request->all(); 

        $list = $this->em->getRepository('App:Intervention')->getDataTableExcelExport($collaboratorUser, 
                                                                                        $params['interventionList']);
        $nameSheets = ['Intervenciones'];
        $dataForSheets = array($list);
        
        $result = $this->excelService->generateExcel($fileName, $nameSheets, $dataForSheets);
        return new JsonResponse($result);
    }




    /**
     * Renderiza el detalle de la vista de Intervenciones
     * 
     * @Route("/user/interventionDetails", name="intervention_details")
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function interventionDetailAction(Request $request)
    {
        $collaborator = $this->getUser();
        $params = $request->request->all();

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($params['intervention_id']);

        if (is_null($intervention)) {
            return $this->redirectToRoute("intervention_list");
        }

        $mode = $request->request->get('mode');

        $insuranceEntity = $this->em->getRepository('App:InsuranceEntity')->findAll();
        $sinisterType = $this->em->getRepository('App:SinisterType')->findAll();
        $failureType = $this->em->getRepository('App:FailureType')->findAll();
        $failureCauseType = $this->em->getRepository('App:FailureCauseType')->findAll();
        $RISCause = $this->em->getRepository('App:RISCause')->findAll();
        
        $asiturBudget = $this->em->getRepository('App:Budget')->findBy(array('intervention' => $intervention, 'isAsiturBudget' => true));
        $collaboratorBudget = $this->em->getRepository('App:Budget')->findBy(array('intervention' => $intervention, 'isAsiturBudget' => false));

        return $this->render('frontend/collaborator/detailIntervention.html.twig', [
            'collaborator' => $collaborator,
            'intervention' => $intervention,
            'asiturBudget' => $asiturBudget,
            'collaboratorBudget' => $collaboratorBudget,
            'mode'  => $mode,
            'insuranceEntityList' => $insuranceEntity,
            'sinisterTypeList' => $sinisterType,
            'failureTypeList' => $failureType,
            'failureCauseTypeList' => $failureCauseType,
            'RISCauseList' => $RISCause
        ]);
    }

    /**
     * Renderiza la vista del perfil del top menu
     * 
     * @Route("/user/profile", name="user_profile")
     */
    public function userProfileAction()
    {
        $user = $this->security->getUser();
        $collaborator = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        return $this->render('frontend/collaborator/userProfile.html.twig', [
            'user' => $collaborator,
        ]);
    }

    /**
     * Guarda los cámbios de la configuracion
     * 
     * @author Javier Lago<javier.lago@kosaas.com>
     * @Route("/user/profile_save", 
     *          name="user_profile_save",
     *          condition="context.getMethod() in ['POST']")
     */
    public function userProfileSaveAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $request->request->all();

        $user = $this->security->getUser();
        $collaborator = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $result = $this->usersService->saveProfile($collaborator, $params);
        
        return new JsonResponse($result);
    }

    /**
     * Renderiza la vista de Ajustes del top menu
     * 
     * @author Javier Lago<javier.lago@kosaas.com>
     * @Route("/user/settings", name="user_settings")
     */
    public function userSettingsAction(Request $request)
    {
        $user = $this->security->getUser();
        $collaborator = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        return $this->render('frontend/collaborator/userSettings.html.twig', [
            'user' => $collaborator,
        ]);
    }


    /**
     * Guarda los cámbios de la configuracion
     * 
     * @author Javier Lago<javier.lago@kosaas.com>
     * @Route("/user/settings_save", 
     *          name="user_settings_save",
     *          condition="context.getMethod() in ['POST']")
     */
    public function userSettingsSaveAction(Request $request)
    {
        // Obtenemos los parámetros de la llamada
        $params = $request->request->all();

        $user = $this->security->getUser();
        $collaborator = $this->em->getRepository('App:CollaboratorUser')->findOneById($user->getId());

        $result = $this->usersService->saveSettings($collaborator, $params);
        
        return new JsonResponse($result);
    }

    
    //? POLÍTICA DE PRIVACIDAD Y COOKIES
    /**
     * Renderiza la vista de políticas de privacidad de la WEB
     * 
     * @Route("/policy/privacy", name="policy_privacy")
     */
    public function privacyAction()
    {
        return $this->render('frontend/policy/privacy.html.twig');
    }

    /**
     * Renderiza la vista de políticas de privacidad de la APP
     * 
     * @Route("/policy/privacy_app", name="policy_privacy_app")
     */
    public function privacyAppAction()
    {
        return $this->render('frontend/policy/privacy_app.html.twig');
    }

    /**
     * Renderiza la vista de política de cookies
     * 
     * @Route("/policy/cookies", name="policy_cookies")
     */
    public function cookiesAction()
    {
  
        return $this->render('frontend/policy/cookies.html.twig');
    }

    /**
     * Renderiza la vista de legal warning
     * 
     * @Route("/policy/legalWarning", name="policy_legal_warning")
     */
    public function legalWarningAction()
    {
  
        return $this->render('frontend/policy/legalWarning.html.twig');
    }
    //? -----------------------------------------------------------------------------------



    // //? (APP Asegurado)
    // /**
    //  * Gestiona las vistas de "APP Asegurado" dependiendo del estado
    //  * 
    //  * @Route("/client/{token}", name="client")
    //  */
    // public function clientAction()
    // {
    //     //* Aquí irían diferentes redirects dependiendo del estado en el que se encuentre

    //     return null;
    // }

    // /**
    //  * Renderiza la vista de la encuesta final al cliente
    //  * 
    //  * @Route("/client/survey/{token}", name="client_survery")
    //  */
    // public function clientSurveyAction()
    // {
    //     return $this->render('frontend/client/survey.html.twig');
    // }

    // /**
    //  * Renderiza la vista de Reparación In Situ
    //  * 
    //  * @Route("/client/RIS/{token}", name="client_RIS")
    //  */
    // public function clientRISAction()
    // {
    //     return $this->render('frontend/client/RIS.html.twig');
    // }

    // /**
    //  * Renderiza la vista sin Reparación In Situ
    //  * 
    //  * @Route("/client/noRIS/{token}", name="client_noRIS")
    //  */
    // public function clientNoRISAction()
    // {
    //     return $this->render('frontend/client/noRIS.html.twig');
    // }

    // /**
    //  * Renderiza la vista de búsqueda de grúa
    //  * 
    //  * @Route("/client/search/{token}", name="client_search")
    //  */
    // public function clientSearchAction()
    // {
    //     return $this->render('frontend/client/search.html.twig');
    // }

    // /**
    //  * Renderiza la vista de espera hasta que llegue la grúa
    //  * 
    //  * @Route("/client/waiting/{token}", name="client_waiting")
    //  */
    // public function clientWaitingAction()
    // {
    //     return $this->render('frontend/client/waiting.html.twig');
    // }

    

}
