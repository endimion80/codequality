<?php

namespace App\Controller;

use App\Service\Backend\BackendService;
use App\Service\Backend\CollaboratorUserService;
use App\Service\Backend\ValidatorService;
use App\Service\Utils\MailerService;
use App\Service\Utils\TranslationService;
use App\Service\UtilsBase\UtilsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Contracts\Translation\TranslatorInterface;

class BackendController extends AbstractController
{

    public function __construct(UtilsService $utilsService,
                                ValidatorService $validatorService,
                                TranslationService $translationService,
                                TranslatorInterface $translator,
                                CollaboratorUserService $collaboratorUserService,
                                EntityManagerInterface $em,
                                BackendService $backendService)
    {
        $this->utilsService = $utilsService;
        $this->translationService = $translationService;
        $this->validatorService = $validatorService;
        $this->translator = $translator;
        $this->collaboratorUserService = $collaboratorUserService;
        $this->em = $em;
        $this->backendService = $backendService;
    }

    /**
     * @Route("/backend", name="backend")
     */
    public function backendLanding()
    {
        return $this->redirectToRoute("backend_login");
    }

    /**
     * 
     * Función que renderiza la vista de principal
     * 
     * @Route("/backend/home", name="backend_home")
     */
    public function home()
    {
        return $this->render('backend/home.html.twig');
    }

    /**
     * Renderiza la vista de dashboard
     * 
     * @Route("/backend/dashboard", name="backend_dashboard")
     */
    public function backendDashboardAction()
    {
        // TODO
        //! Revisar
        return $this->render('backend/home.html.twig');
    }

    /**
     * 
     * Función que renderiza la vista de la tabla de traducciones
     * 
     * @Route("/backend/translations", name="backend_translations")
     */
    public function translationsAction()
    {
        return $this->render('backend/translations.html.twig');
    }

    /**
     * 
     * Función que renderiza la vista log
     * 
     * @Route("/backend/log", name="backend_log")
     */
    public function logsAction()
    {
        return $this->render('backend/logs/log.html.twig');
    }

    /**
     * 
     * Función que renderiza la vista de log de emails
     * 
     * @Route("/backend/mailerList", name="backend_emails_log")
     */
    public function emailsLogAction()
    {
        return $this->render('backend/logs/emails_log.html.twig');
    }

    /**
     * 
     * Función que renderiza la vista de sms log
     * 
     * @Route("/backend/smsList", name="backend_sms_log")
     */
    public function smsLogAction()
    {
        return $this->render('backend/logs/sms_log.html.twig');
    }

    /**
     * 
     * Función que renderiza la vista de parámetros
     * 
     * @Route("/backend/parameters", name="backend_parameters")
     */
    public function parametersAction()
    {
        return $this->render('backend/parameters.html.twig');
    }

    /**
     * 
     * Función que renderiza la vista de colaboradores en backend
     * 
     * @Route("/backend/collaboratorList", name="backend_collaborators")
     */
    public function collaboratorsAction()
    {
        return $this->render('backend/collaborators.html.twig');
    }

    /**
     * Función que rellena el chosen del modal de añadir usuarios colaboradores
     * 
     * @Route("/backend/collaboratorList/collaborator/chosen", name="add_collaborator_chosen_list")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function chosenListAddCollaboratorAction(Request $request) {

        $collaboratorRepository = $this->em->getRepository('App:Collaborator');
        $collaboratorList = $collaboratorRepository->listCollaborator();
        
        return new JsonResponse($collaboratorList);
    }

    /**
     * Función que crea un CollaboratorUser
     * 
     * @Route("/backend/collaboratorList/collaborator/create", name="list_collaborator_create")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function collaboratorCreateAction(Request $request) {

        $inputs = $request->request->get('inputs');
        $result = $this->collaboratorUserService->createCollaboratorUser($inputs);

        return $result;
    }

    //? Está aquí en caso de necesitarlo más tarde
    // /**
    //  * 
    //  * Función que sincroniza los usuarios colaboradores 
    //  * 
    //  * @Route("/backend/sync_collaborators", name="sync_collaboratorUsers")
    //  */
    // public function syncCollaboratorsAction()
    // {
    //     // TODO
    //     // Está de prueba
    //     return $this->render('backend/home.html.twig');
    // }

    /**
     * Renderiza la vista del perfil del top menu
     * 
     * @Route("/backend/profile", name="backend_profile")
     */
    public function backendProfileAction()
    {
  
        return $this->render('backend/profile.html.twig');
    }

    /**
     * Renderiza la vista de Ajustes del top menu
     * 
     * @Route("/backend/settings", name="backend_settings")
     */
    public function backendSettingsAction()
    {
  
        return $this->render('backend/settings.html.twig');
    }

    /**
     * Función que filtra y rellena la tabla de colaboradores
     * 
     * @Route("/backend/collaborators/table", name="collaborators_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableCollaboratorsAction(Request $request) {
        $params = $request->request->all();

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $collaboratorsRepository = $this->em->getRepository('App:CollaboratorUser');
        $collaboratorsList = $collaboratorsRepository->searchCollaboratorUsersTable($params, $form_filters, $search_filter);
        
        return new JsonResponse($collaboratorsList);
    }

    /**
     * Función que filtra y rellena la tabla de traducciones
     * 
     * @Route("/backend/translations/table", name="translations_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableTranslationsAction(Request $request) {
        $params = $request->request->all();

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $translationsRepository = $this->em->getRepository('App:Translations');
        $translationsList = $translationsRepository->searchTranslationsTable($params, $form_filters, $search_filter);
        
        return new JsonResponse($translationsList);
    }

    /**
     * Función que filtra y rellena la tabla de logs
     * 
     * @Route("/backend/logs/log/table", name="logs_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableLogsAction(Request $request) {

        $params = $request->request->all();

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $logRepository = $this->em->getRepository('App:Log');
        $logList = $logRepository->searchLogTable($params, $form_filters, $search_filter);
        
        return new JsonResponse($logList);
    }

    /**
     * Función que filtra y rellena la tabla de log de emails
     * 
     * @Route("/backend/logs/emails/table", name="email_logs_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableEmailLogsAction(Request $request) {

        $params = $request->request->all();

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $emailLogRepository = $this->em->getRepository('App:MailerLog');
        $logList = $emailLogRepository->searchEmailLogTable($params, $form_filters, $search_filter);
        
        return new JsonResponse($logList);
    }

    /**
     * Función que filtra y rellena la tabla de log de SMS
     * 
     * @Route("/backend/logs/sms/table", name="sms_logs_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableSmsLogsAction(Request $request) {

        $params = $request->request->all();

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $smsLogRepository = $this->em->getRepository('App:SmsLog');
        $smsList = $smsLogRepository->searchSmsLogTable($params, $form_filters, $search_filter);
        
        return new JsonResponse($smsList);
    }

    /**
     * Función que filtra y rellena la tabla de parámetros
     * 
     * @Route("/backend/parameters/table", name="parameters_table")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function tableParametersAction(Request $request) {

        $params = $request->request->all();

        // Recogemos los filtros
        $form_filters = $request->request->get('form_filters');
        $search_filter = $request->request->get('search_filter');

        $parametersRepository = $this->em->getRepository('App:Parameters');
        $parametersList = $parametersRepository->searchParametersTable($params, $form_filters, $search_filter);
        
        return new JsonResponse($parametersList);
    }


    /**
     * Función para obtener el contenido de un email
     * 
     * @Route("/backend/mail/ajax", name="mail_text_ajax")
     * 
     */
    public function mailText2AjaxAction(Request $request, MailerService $mailerService) {
        $data = $request->request->all();

        $result = $mailerService->getEmailContent($data['id']);

        return new Response($result);
    }

    /**
     * Función para mostrar el contenido de un email
     * 
     * @Route("/backend/mail/show", name="mail_show")
     * 
     */
    public function showMailContentAction(Request $request) {

        $data = $request->request->all();
        $mailId = $data['mailId'];

        $mailerLog = $this->em->getRepository('App:MailerLog')->findOneById($mailId);
        $content = $mailerLog->getTemplateContent();

        return $this->render('backend/showMail.html.twig', [
            'content' => $content,
        ]);
    }


    /**
     * Función para modificar el texto de las traducciones con el dataTable editable
     * 
     * @Route("/backend/translations/edit", name="edit_translation")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function editTranslationAction(Request $request, BackendService $backendService) {

        $input = $request->request->all();

        $instanceId = $input['pk'];
        $field = $input['name'];
        $content = $input['value'];

        $result = $backendService->editTranslation($instanceId, $field, $content);

        return new JsonResponse($result);
    }

    /**
     * Función para modificar los parámetros desde la tabla de backend
     * 
     * @Route("/backend/parameters/edit", name="edit_parameter")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function editParameterAction(Request $request, BackendService $backendService) {

        $input = $request->request->all();

        $instanceId = $input['pk'];
        $field = $input['name'];
        $content = $input['value'];

        $result = $backendService->editParameter($instanceId, $field, $content);

        return new JsonResponse($result);
    }

    /**
     * Función para iniciar como un usuario colaborador desde el backend
     * 
     * @Route("/backend/login_as_user/{userId}", name="login_as_user")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function loginAsUserAction($userId) {

        $collaborator = $this->em->getRepository('App:CollaboratorUser')->findOneBy(array('id' => $userId));

        if($collaborator) {
            
            // Si el usuario no tuviera idioma, ponemos por defecto el español
            if (!$collaborator->getLocale()) {
                $language = "es";
            } else {
                $language = $collaborator->getLocale();
            }
    
            //$url = $this->generateUrl('user_home',["_locale" => $language]);
            $url = $this->generateUrl('user_home');

            $token = new UsernamePasswordToken($collaborator, null, "frontend", $collaborator->getRoles());

            $this->get('security.token_storage')->setToken($token);
            
            $this->get('session')->set('_security_' . 'frontend', serialize($token));

            return $this->redirect($url);
        }
    }

    /**
     * Pantalla para iniciar el depurador de errores
     * 
     * @Route("/backend/debugPanel/", name="backend_debug_panel")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function debugPanelAction(UtilsService $utilsService) {
        
        $isTestingIP = $utilsService->isTestingMode();
        return $this->render('backend/debug.html.twig', array('isTestingIP' => $isTestingIP));
    }

    /**
     * Acceso al depurador de errores
     * 
     * @Route("/backend/debugPanelLogin/", name="backend_debug_panel_login")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function debugPanelLoginAction(Request $request) {
        $password = $request->get('password');
        $password_compare = '5BGPy2epnLr9i3EHgCbSvA==';
        $password_enc = $this->utilsService->encrypt($password);
        $password_re_enc = $this->utilsService->encrypt($password_compare);
        
        if ($password_enc  == $password_compare){
            $filePath = '../src/Command/TestDebugCommand.php';
            $pathDetail =  pathinfo($filePath);
            
            $contentText = file_get_contents('../src/Command/TestDebugCommand.php', FILE_USE_INCLUDE_PATH);

            switch($pathDetail['extension']){
                case 'php': $editor_mode = 'php'; break;
                default: $editor_mode = 'html';
            }
            
            

            return $this->render('backend/debug_editor.html.twig', array(   'contentText' => $contentText,
                                                                            'editor_mode' => $editor_mode,
                                                                            'password_enc' => $password_re_enc));
        }
        else 
            return $this->render('backend/debug_fail.html.twig');
    }

    /**
     * Acceso al depurador de errores
     * 
     * @Route("/backend/debugSaveAndRun/", name="backend_debug_save_and_run")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function debugSaveAndRunAction(Request $request, KernelInterface $kernel) {
        $password_enc = $request->get('password');
        $password_to_compare = $this->utilsService->decrypt($password_enc);
        $password_compare = '5BGPy2epnLr9i3EHgCbSvA==';

        if ($password_compare == $password_to_compare){
            $mode = $request->get('mode');

            if ($mode == 'run'){
                $application = new Application($kernel);
                $application->setAutoExit(false);
        
                $input = new ArrayInput([
                    'command' => 'testDebug'
                ]);
        
                // You can use NullOutput() if you don't need the output
                $output = new BufferedOutput();
                $application->run($input, $output);
        
                // return the output, don't use if you used NullOutput()
                $content = $output->fetch();
        
                // return new Response(""), if you used NullOutput()
                return new Response($content);
            }
            else if($mode == 'save'){
                $fileContent = $request->get('fileContent');
                file_put_contents('../src/Command/TestDebugCommand.php', $fileContent);
                return new Response('DONE');
            }
            else 
                return new Response('ERROR');
        }
        else{
            return new Response("ERROR");
        }
    }

    /******************************************************/

    /**
     * Pantalla para iniciar el depurador de errores
     * 
     * @Route("/backend/debugMapsRouteList/", name="backend_debug_maps_route_list")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function debugMapsRouteListAction(Request $request) {
        $operators = $this->em->getRepository('App:Operator')->findBy([], ['username' => 'ASC']);
        return $this->render('backend/debugMapRouteList.html.twig', ['operators' => $operators,
                                                                    'msgFail' => '']);
    }
    
    /**
     * Mostramos la pantalla del mapa
     * 
     * @Route("/backend/debugMapsRoute/{intervention_id}", name="backend_debug_maps_route")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function debugMapsRouteAction(Request $request, $intervention_id) {
        $intervention = $this->em->getRepository('App:Intervention')->findOneBy(array('id' => $intervention_id));

        if (is_null($intervention)){
            return $this->render('backend/debugMapRouteList.html.twig', ['msgFail' => 'Esa intervención no exíste']);
        }
        else{
            $MAPS_API_KEY = $this->em->getRepository('App:Parameters')->getParameter('MAPS_API_KEY');
            $phaseLogArray = $this->em->getRepository('App:PhaseLog')->getGetLogForMap($intervention_id);
            $geopositionArray = $this->em->getRepository('App:Geoposition')->getInterventionGeopositionHistoryForMap($intervention);


            //return new Response(var_dump($geopositionArray));

            return $this->render('backend/debugMapRoute.html.twig',['intervention' => $intervention,
                                                                    'MAPS_API_KEY' => $MAPS_API_KEY, 
                                                                    'phaseLogArray' => $phaseLogArray,
                                                                    'geopositionArray' => $geopositionArray]);
        }
    }


    /**
     * Mostramos la pantalla del mapa filtrando por el conductor
     * 
     * @Route("/backend/debugMapsRoute/{operator_id}/{init_date}/{end_date}", name="backend_debug_maps_route_operator")
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function debugMapsRouteOperatorAction(Request $request, $operator_id, $init_date, $end_date) {
        
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('id' => $operator_id));

        if (is_null($operator)){
            return $this->render('backend/debugMapRouteList.html.twig', ['msgFail' => 'Elige un operador']);
        }
        else{
            $MAPS_API_KEY = $this->em->getRepository('App:Parameters')->getParameter('MAPS_API_KEY');
            $geopositionArray = $this->em->getRepository('App:Geoposition')->getInterventionGeopositionHistoryOperatorForMap($operator, $init_date, $end_date);

            return $this->render('backend/debugMapRoute.html.twig',['intervention' => null,
                                                                    'MAPS_API_KEY' => $MAPS_API_KEY, 
                                                                    'phaseLogArray' => [],
                                                                    'geopositionArray' => $geopositionArray]);
        }
    }



    /*******************************************************/

    /**
     * Función para mostrar la vista de APP Testing
     * 
     * @Route("/backend/app_testing", name="backend_app_testing")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     */
    public function appTestingAction(Request $request) {

        $operators = $this->em->getRepository('App:Operator')->findBy(array("operatorStatus" => 1));
        $interventions = $this->em->getRepository('App:Intervention')->findAll();

        return $this->render('backend/app_testing.html.twig', [
            "operators" => $operators,
            "interventions" => $interventions,
        ]);
    }

    /**
     * Función para probar las notificaciones de nueva intervención
     * 
     * @Route("/backend/app_testing/notification", name="backend_app_testing_notification")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     */
    public function appTestingNotificationAction(Request $request) {
        $operatorId = $request->request->get("operator");
        $interventionId = $request->request->get("intervention");
        $result = $this->backendService->testAppNotification($operatorId, $interventionId);

        return new JsonResponse($result);
    }

    /**
     * Función para restablecer los valores de una intervención
     * 
     * @Route("/backend/app_testing/reset_intervention", name="backend_app_testing_reset_intervention")
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     */
    public function appTestingResetInterventionAction(Request $request) {

        $interventionId = $request->request->get("intervention");
        $result = $this->backendService->testAppResetIntervention($interventionId);

        return new JsonResponse($result);
    }

}
