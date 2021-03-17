<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

use App\Service\UtilsBase\UtilsService;
use App\Service\Utils\MailerService;
use App\Service\Utils\ExcelService;
use App\Service\Utils\LogService;
use App\Service\Utils\MapsService;
use App\Service\Utils\PdfService;
use App\Service\Utils\SmsService;
use App\Service\Utils\TranslationService;
use App\Service\Utils\FirebaseService;
use App\Service\EventsAndSync\SyncService;
use App\Service\EventsAndSync\WebhookCustomService;
use App\Service\EventsAndSync\WebhookService;
use App\Service\UpdateRequest\UpdateRequestService;
use App\Service\Backend\ValidatorService;
use App\Service\Backend\InterventionService;
use App\Service\Backend\DataTableService;
use App\Service\Backend\BackendService;
use App\Service\Backend\UsersService;
use App\Service\API\ApiService;
use App\Entity\Brand;
use PDO;

Class TestDebugCommand extends Command
{
    protected static $defaultName = 'testDebug';

    protected function configure()
    {
        $this
            ->setDescription('Comando de testing Debug')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                ContainerInterface $container, 
                                TranslatorInterface $translator,
                                Environment $twig, 
                                UtilsService $utilsService,
                                MailerService $mailerService,
                                ExcelService $excelService,
                                LogService $logService,
                                MapsService $mapsService,
                                PdfService $pdfService,
                                SmsService $smsService,
                                FirebaseService $firebaseService,
                                TranslationService $translationService,
                                SyncService $syncService,
                                WebhookCustomService $webhookCustomService,
                                WebhookService $webhookService,
                                ValidatorService $validatorService,
                                InterventionService $interventionService,
                                DataTableService $dataTableService,
                                BackendService $backendService,
                                UsersService $usersService,
                                UpdateRequestService $updateRequestService,
                                APIService $apiService
                                )
    {
        $this->em = $em;
        $this->conn = $em->getConnection();
        $this->translator = $translator;
        $this->container = $container;
        $this->utilsService = $utilsService;
        $this->mailerService = $mailerService;
        $this->excelService = $excelService;
        $this->logService = $logService;
        $this->mapsService = $mapsService;
        $this->pdfService = $pdfService;
        $this->smsService = $smsService;
        $this->firebaseService = $firebaseService;
        $this->translationService = $translationService;
        $this->syncService = $syncService;
        $this->webhookCustomService = $webhookCustomService;
        $this->webhookService = $webhookService;
        $this->validatorService = $validatorService;
        $this->interventionService = $interventionService;
        $this->dataTableService = $dataTableService;
        $this->backendService = $backendService;
        $this->usersService = $usersService;
        $this->updateRequestService = $updateRequestService;
        $this->apiService = $apiService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }

        //$io->success('Comando Testing Debug<br>');
        $output->writeln("----------------------<br>");
        
        $baseUrl = $this->utilsService->getParameter('API_ASITUR_URL_BASE');
        $collaboratorCode = "AAWVUOAD";
        $collaboratorCif = "A83178749";
        $branchOfficeCode = "CBAYETAB";

        $collaboratorUser = $this->em->getRepository('App:CollaboratorUser')->findOneById(1);
        $collaborator = $this->em->getRepository('App:Collaborator')->findOneById(14);
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneBy(['code'=>$branchOfficeCode]);
        $crane =  $this->em->getRepository('App:Crane')->findOneBy(['id' => 24]);
        $craneStatus =  $this->em->getRepository('App:CraneStatus')->findOneBy(['id' => 1]);
        $operator =  $this->em->getRepository('App:Operator')->findOneBy(['id' => 20]);
        $operatorStatus =  $this->em->getRepository('App:OperatorStatus')->findOneBy(['id' => 1]);
        $branchOfficeCrane = $this->em->getRepository('App:branchOfficeCrane')->findOneBy(['id'=>10]);
        $craneServiceType = $this->em->getRepository('App:CraneServiceType')->findOneBy(['id'=>1]);
        $collaboratorService = $this->em->getRepository('App:CollaboratorService')->findOneBy(['id'=>1]);
        $craneService = $this->em->getRepository('App:CraneService')->findOneBy(['id'=>1]);
        $branchOfficeOperator = $this->em->getRepository('App:BranchOfficeOperator')->findOneBy(['id'=>12]);
        $intervention = $this->em->getRepository('App:Intervention')->findOneBy(['id'=>28]);
        //$phase = $intervention->getPhase();
        $phaseLog = $this->em->getRepository('App:PhaseLog')->findOneBy(['id'=>9]);
        $interventionFails =  $this->em->getRepository('App:InterventionFails')->findOneBy(['id'=>1]);
        
        
        
        //$requestCrane = $this->em->getRepository('App:RequestCrane')->findOneById(63);
        //$findCranesResult = $this->interventionService->findCranesForRequest($requestCrane);
        //$output->writeln(var_dump($findCranesResult)); 
        
        
        
        /*
        $params = [
          'type' => 'alert',
          'title' => 'mi titulo',
          'message' => 'hola <b>MUNDO</b><br>entero\nJavi',
          'payload' => null,
        ];
        
        
        $firebase_result = $this->firebaseService->sendFirebaseNotification($operator->getFirebaseGcm(), 
                                                                                    $params['type'], 
                                                                                    $params['title'], 
                                                                                    $params['message'], 
                                                                                    $params['payload']); 
                
        $output->writeln(var_dump($firebase_result)); 
        */
        /*
        $crane =  $this->em->getRepository('App:Crane')->findOneBy(['id' => 24]); 

        $requestCraneData = array(
            'IdentificadorGrua' => $crane->getReference(),
            'MatriculaGrua' => $crane->getPlate(),
            'MarcaGrua' => $crane->getBrand()->getId(), // Nissan
            'ModeloGrua' => $crane->getModel()->getId(), //NT 500
            'TipoGrua' => $crane->getCraneType()->getId(), // Camiones 8T
            'RotuladoGrua' => $crane->getLabeledType()->getCode(), // code de labeled_type
            'FechaAltaGrua' => $crane->getCreationDate()->format('Ymd'), // fecha alta 
        );
        
        $url = $baseUrl . "/api/grua/WSActualizarDatosGrua/";
        $url .= $crane->getCode();
        
        $responseCurl = $this->utilsService->makeCURL($url, $requestCraneData);
        $content = $responseCurl['data']['content'];

        if ($content['resultado']){
            $output->writeln("Ok");
        }
        else{
            $output->writeln("Hay un problema"); 
        }
        $output->writeln(var_dump($content)); 
        */      
        
        //PRUEBASS 
        
        //$craneBranchOffices = $this->em->getRepository('App:BranchOffice')->getBranchOfficesByCrane($crane->getId());
        /*
        $craneBranchOfficesCodes = $this->em->getRepository('App:BranchOfficeCrane')->getArrayBranchOfficesCodeByCrane($crane->getId());
        
        $listCollaboratorServices = [];
        
        foreach($craneBranchOfficesCodes as $code) {
          $url = $baseUrl . "/api/grua/WSServiciosDisponiblesColaborador/";
          $url .=  $code;
          $responseCurl = $this->utilsService->makeCURL($url);
          
          if ($responseCurl['status']){
            
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] == '1' && is_array($responseContent['salida']) && count($responseContent['salida']))
              $listCollaboratorServices = array_merge($listCollaboratorServices, $responseContent['salida']);
              
          }
        }
        
        //$output->writeln(var_dump($listCollaboratorServices)); 
        $collaboratorServices = $this->em->getRepository('App:CollaboratorService')->findBy(array('code' => $listCollaboratorServices), array('id' => 'DESC') );
        $output->writeln(count($collaboratorServices)); 
        */
        
        
        //$intervention 
        /*
        $requestCrane = $this->em->getRepository('App:RequestCrane')->findOneById(18);
        $findCranesResult = $this->interventionService->findCranesForRequest($requestCrane);
        //$output->writeln(var_dump($findCranesResult));
       
        $output->writeln("Intervencion: " . $requestCrane->getInterventionCode() );
        if ($findCranesResult['status']){
            //$output->writeln(var_dump($findCranesResult['data']));
            // Mandamos vía API
            $resultSendApi = $this->syncService->sendCranesRequested($requestCrane, $findCranesResult['data']);
            $output->writeln(var_dump($resultSendApi));
        }
        else{
            $output->writeln("ERROR!!!");
        }*/
        
        //$codigoIntervencion = "CESDPEPV";
        //$codigoIntervencion = "CERHDRCZ"; // esta es la intervencion 28
        
        /*
        $url = $baseUrl . "/api/sucursal/WSTarifasSucursal/";
        $url .= $branchOffice->getCode() . "/" . $collaborator->getCode();
          
        $requestData = array(
            'CodigoIntervencion' => $intervention->getCode(),
            'CodigoMotivoRisProveedor' => $intervention->getRisCauseOperator()->getCodeAsitur(),
            'ObservacionesRisProveedor' => $intervention->getRisCauseOperator()->getRepairDescription()
        );
        //$output->writeln(var_dump($requestData)); 
        
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] == '1' && is_array($responseContent['salida']) && count($responseContent['salida'])){
              $listActivities = $responseContent['salida'];
              
              $output->writeln(var_dump($listActivities));       
            }
              
        }
        */
        
        //$output->writeln(var_dump($responseCurl)); 
      

        //$responseCurl = $this->smsService->sendSmsAsitur('646311077','testing funcion');
        //$output->writeln(var_dump($responseCurl)); 
        
        

        $now = new \DateTime();
        $url = $baseUrl . "/api/CargasMaestras/WSModelosGrua";

        $responseCurl = $this->utilsService->makeCURL($url);
        
        // $output->writeln(var_dump($responseCurl)); 
        $responseContent = $responseCurl['data']['content'];
        $output->writeln(var_dump($responseContent)); 

       

        if (isset($responseContent['salida'])){
            if(count($responseContent['salida'])){
                /*
                foreach($responseContent['salida'] as $row) {
                    $brand = $this->em->getRepository('App:Brand')->findOneBy(['code'=>$row['codigoMarcaGrua']]);
                    if (is_null($brand))
                        $brand = new Brand();
                    
                    if (!is_null($brand)){
                        $brand->setDescription($row['marcaGrua']);
                        $this->em->persist($brand);
                    }
                }

                $this->em->flush();
                */
            }
        }
        else{
            $output->writeln("Sin datos");     
        }
        
        
        
        
        
        /** FUNCIONANDO **/
        //$resultRequest = $this->syncService->updateMasterBrand();
        //$output->writeln(var_dump($resultRequest)); 

        //$resultRequest = $this->syncService->syncActivities($collaborator, $branchOffice);
        //$output->writeln(var_dump($resultRequest)); 

        //$resultRequest = $this->syncService->RISResolutionIntervention($intervention);
        //$output->writeln(var_dump($resultRequest)); 

        //$resultRequest = $this->syncService->failureIntervention($intervention, $interventionFails);
        //$output->writeln(var_dump($resultRequest)); 

        //$resultRequest = $this->syncService->failIntervention($intervention, $interventionFails);
        //$output->writeln(var_dump($resultRequest)); 

        //$resultRequest = $this->syncService->refuseIntervention($intervention);
        //$output->writeln(var_dump($resultRequest)); 

        //$resultRequest = $this->syncService->updatePhaseIntervention($intervention, $phaseLog);
        //$output->writeln(var_dump($resultRequest)); 

        //$resultRequest = $this->syncService->resetIntervention($intervention);
        //$output->writeln(var_dump($resultRequest)); 

        //$url = $baseUrl . "/api/comunes/WSEnvioMail";
        //$requestData = array(
            //'direccionEnvio' => 'hola@hola.es',
            //'direccionReceptor' => 'javier.lago@kosaas.com',
            //'asunto' => 'Mi asunto',
            //'mensaje' => '<b>HOLA</b> mundo',
        //);
        //$responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
        //$output->writeln(var_dump($responseCurl))

        //$responseCurl = $this->smsService->sendSmsAsitur('646311077','testing funcion');
        //$output->writeln(var_dump($responseCurl)); 

        //$resultRequest = $this->syncService->updateDestinationIntervention($intervention);
        //$output->writeln(var_dump($resultRequest)); 
        //$output->writeln($resultRequest['status']); 

        //$resultRequest = $this->updateRequestService->removeOperatorFromBranchOffice($branchOfficeOperator);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad... no usar
        //$output->writeln($resultRequest['status']); 

        //$resultRequest = $this->updateRequestService->assignOperatorToBranchOffice($operator, $branchOffice);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad... no usar
        //$output->writeln($resultRequest['status']); 
        
        //$resultRequest = $this->updateRequestService->assignCraneToOperator($crane, $operator);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad... no usar
        //$output->writeln($resultRequest['status']); 
        
        //$resultRequest = $this->syncService->updateOperatorStatus($operator);
        //$output->writeln(var_dump($resultRequest));
        //$output->writeln($resultRequest['status']); 
        
        //$resultRequest = $this->syncService->updateOperator($operator);
        //$output->writeln(var_dump($resultRequest));
        //$output->writeln($resultRequest['status']); 
        
        /*
        // Creación del operario
        $requestOperatorData = array("NombreOperario" =>  "javi",
        "ApellidosOperario"     =>  "lag",
                                    "DNIOperario"           =>  "30256525", 
                                    "IdentificadorOperario" =>  "refec",
                                    "MovilOperario"         =>  "56555555",
                                    "GruaAsignadaOperario"  =>  $crane->getCode(),
                                    "EstadoOperario"        =>  $operatorStatus->getId(),
                                    "FechaAltaOperario"     =>  NULL,
                                    "FechaBajaOperario"     =>  NULL,
                                    "CodigoSucursal"        =>  $branchOffice->getCode() 
                                );

        $credentials = array("username" => "usuario1234", "password" => "asdf");

        $resultRequest = $this->updateRequestService->requestNewOperator($collaboratorUser,
                                                                         $collaborator, 
                                                                         $requestOperatorData, 
                                                                         $credentials);
        $output->writeln($resultRequest['status']); 
        */
                
        //$resultRequest = $this->updateRequestService->notifyRemoveCraneService($craneService);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad...

        //$resultRequest = $this->updateRequestService->getCodeToAssignServiceToCrane($crane, $collaboratorService, $craneServiceType);
        //$output->writeln($resultRequest['status']); 

        //$resultRequest = $this->syncService->getCraneAvailableServices($crane);
        //$output->writeln(count($resultRequest['data']['collaboratorServices'])); //va con la entidad...
        //$output->writeln($resultRequest['status']); 

        //$resultRequest = $this->syncService->updateCraneManagementTypeStatus($crane);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad...
        //$output->writeln($resultRequest['status']); 

        //$resultRequest = $this->syncService->updateCraneAvailabilityStatus($crane);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad...
        //$output->writeln($resultRequest['status']); 

        //$resultRequest = $this->syncService->updateCraneStatus($crane);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad...
        //$output->writeln($resultRequest['status']); 
        
        //$resultRequest = $this->updateRequestService->removeCraneFromBranchOffice($branchOfficeCrane);
        //$output->writeln(var_dump($resultRequest)); //va con la entidad...
        //$output->writeln($resultRequest['status']); 
        
        //$resultRequest = $this->updateRequestService->assignCraneToBranchOffice($crane, $branchOffice);
        //$output->writeln(var_dump($resultRequest)); 
        //$output->writeln($resultRequest['status']); 

        //$result = $this->syncService->updateCrane($crane);
        //$output->writeln(var_dump($result));

/*        
        $requestCraneData = array(
            'IdentificadorGrua' => '123456',
            'MatriculaGrua' => "5234ABC",
            'MarcaGrua' => 7, // Nissan
            'ModeloGrua' => 31, //NT 500
            'TipoGrua' => 8, // Camiones 8T
            'TipoGestionGrua' => 1, // manual
            'RotuladoGrua' => "00000001", // code de labeled_type
            'EstadoGrua' => 1, // activa
            'DisponibilidadGrua' => 1, // disponible
            'FechaAltaGrua' => '20200911', // fecha alta 
            'FechaBajaGrua' => null,
            'CodigoSucursal' => $branchOffice->getCode()
        );
         

        $resultRequest = $this->updateRequestService->requestNewCrane($collaborator, $requestCraneData);
        $output->writeln($resultRequest['status']); */

        //TODO REVISAR CUANDO TENGAMOS GRUAS Y OPERARIOS
        //$result = $this->syncService->syncBranchOffice($branchOffice);
        //$output->writeln(var_dump($result));

        //$result = $this->syncService->getBranchOfficeDetails($branchOffice);
        //$output->writeln(var_dump($result));

        //$result = $this->syncService->syncCollaboratorBranchOffices($collaborator);
        //$output->writeln(var_dump($result));

        //$result = $this->syncService->getBranchOfficesByCollaborator($collaborator);
        //$output->writeln(var_dump($result));

        //$result = $this->syncService->syncCollaboratorByCif($collaboratorCif);
        //$output->writeln(var_dump($result));
        
        //$result = $this->syncService->getCollaboratorDetailByCode('AAWVUOAD');
        //$output->writeln(var_dump($result));

        //$result = $this->syncService->getCollaboratorCodeByCif('A83178749');
        //$output->writeln(var_dump($result));
        
        
        // fin Funcionando 


        // TEST MAPS

        /*


        /* // PROBAR MAS ADELANTE... 

        
        $url = $baseUrl . "/api/comunes/WSEnvioMail";

        $requestData = array(
            'direccionEnvio' => 'hola@hola.es',
            'direccionReceptor' => 'javier.lago@kosaas.com',
            'asunto' => 'Mi asunto',
            'mensaje' => '<b>HOLA</b> mundo',
        );

        $responseCurl = $this->utilsService->makeCURL($url, $requestData, true, true, true );
        
         $output->writeln(var_dump($responseCurl)); 
        
        $responseContent = $responseCurl['data']['content'];
        $output->writeln(var_dump($responseContent)); 
        
        
        if ($responseContent['resultado'] == '1'){
          //$codigo = $responseContent['salida']['codigo'];
          //$asignacion = $responseContent['salida']['asignacion'];
          $output->writeln("ok");
        }
        else{
          $output->writeln("Hay un problema"); 
        } 
        */

        /*
        $result = $this->mapsService->calculateDistanceAPI('37.892215','-4.7640907', '37.874653','-4.8207377');
        $output->writeln(var_dump($result));


        $origen = urlencode('37.892215,-4.7640907');
        $destino = urlencode('37.874653,-4.8207377');
        $apiKey = $this->em->getRepository('App:Parameters')->getParameter('MAPS_API_KEY');
        
        //Url de la api
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins={$origen}&destinations={$destino}&key={$apiKey}";

        //Get json response
        $resp_json = file_get_contents($url);
        //Decode json
        $resp = json_decode($resp_json, true);
        $output->writeln(var_dump($resp));
        */

        // FIN TEST MAPS

        //$output->writeln($this->utilsService->getName());
        //$output->writeln(var_dump($this->utilsService->sendResponse(true, 200, "holi", array("uno"=>1, "dos"=>2))));
        //$output->writeln($this->logService->log("asd"));
        //$output->writeln($this->logService->logUser("asd","javi"));

        // Servicio de mails
        
        //$language = $this->em->getRepository('App:Operator')->findOneBy(array('email' => $emailAddress));
        //$output->writeln($language->getLocale());
        //$output->writeln(var_dump($this->mailerService->getIsInBlackListForThisEmail($emailAddress, true)));
        
        /*
        $emailAddress = 'javier.lago@eurotransportcar.com';
        $parametersTemplate = array(
            'number'	=> random_int(0, 100)
        );

        $email = array(
            'intervention_id'		=> 1, // opcional
            'subject_id'			=> 1234,
            'subject'				=> 'Mi asunto',
            //'from'				=> 'pepito@pepito.com',//(opcional)
            'to'					=> $emailAddress,
            'template' 				=> 'mails/mailBaseExample.html.twig',
            'parametersTemplate'	=> $parametersTemplate,
        );

        $output->writeln(var_dump($this->mailerService->send($email)));*/





        // parametros
        /*$params = $this->em->getRepository('App:Parameters')->getParameter('test');
        $output->writeln(var_dump($params));

        $params = $this->utilsService->getParameter('test');
        $output->writeln(var_dump($params));*/

        // servicio para sms
        /*$sms = array(
            //'intervention_id'		=> 1, // opcional
            //'from'			    wip=> 'Javi', // opcional
            'type'			        => 'tipo', // opcional
            'to'                    => '+34646311078', // javi
            'content' 				=> 'Testing rira Javi'           
        );
        $result = $this->smsService->sendSms($sms);
        $output->writeln(var_dump($result));
        */

        
        // Encriptar una cadena
        /*$string_to_encrypt="Hola mundo";
        
        $encrypted_string = $this->utilsService->encrypt($string_to_encrypt);
        $decrypted_string = $this->utilsService->decrypt($encrypted_string);
        
        $output->writeln(var_dump($encrypted_string));
        $output->writeln(var_dump($decrypted_string));*/

        // CURL
        //$resultCurl = $this->utilsService->makeCURL('asdf');
        //$resultCurl = $this->utilsService->makeCURL('https://test.eurotransportcar.com/api/etc/v2/login/', null, true, false);
        //$output->writeln(var_dump($resultCurl));
        //$output->writeln(var_dump($resultCurl['data']['content']));

        //$resultCurl = $this->syncService->updateMasterBrand();
        //$output->writeln(var_dump($resultCurl));

        // Testing de validaciones
        /*
        $crane = $this->em->getRepository('App:Crane')->findOneById(17);
        $crane = $this->em->getRepository('App:Operator')->findOneById(4);
        //$crane = null;

        $data = [     'prueba0' => 123.4,
                      'prueba1' => 'valor 1',
                      'prueba2' => 123, 
                      'prueba3' => true,
                      'prueba4' => $crane,
                      'prueba5' => 'javier.lago@kosaas.com',
                      'prueba6' => 4,
                      'prueba7' => "asdf",
                ];

        $required = [ //['name' => 'prueba-'],
                      //['name' => 'prueba_', 'type' => 'string'],
                      //['name' => 'prueba', 'type' => 'string', 'msg' => 'falta un campooo'],
                      ['name' => 'prueba0', 'type' => 'float'],
                      //['name' => 'prueba1', 'type' => 'string'],
                      //['name' => 'prueba2', 'type' => 'integer'],
                      ['name' => 'prueba2', 'type' => 'numeric'], // texto o numero
                      ['name' => 'prueba3', 'type' => 'bool'],
                      ['name' => 'prueba5', 'type' => 'email'],
                      ['name' => 'prueba4', 'type' => 'object', 'class' => 'App\Entity\Crane', 'nullable' => true],
                      //['name' => 'prueba4', 'type' => 'object', 'class' => 'App\Entity\Crane'],
                      ['name' => 'prueba6', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'id'],
                    ];
        $required = [   ['name' => 'prueba6', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'id'] ];
      
        $resultValidation =  $this->validatorService->validatorBase ($data,$required);
        //$resultValidation =  $this->validatorService->validatorBase ($data,$required, false);
        $output->writeln(var_dump($resultValidation));
        */

        /*
        $intervention = $this->em->getRepository('App:Intervention')->findOneById(26);
        $resultSync = $this->syncService->sendInterventionUpdates($intervention, 'updatePhase');

        $output->writeln(var_dump($resultSync));
        */
        
        /*
        $ori_latitude = '37.892215'; // casa javi
        $ori_longitude = '-4.7640907';
        $dst_latitude = '37.874653'; // parque joyero
        $dst_longitude = '-4.8207377';
        $dst_latitude = '37.89113'; // teletubbies
        $dst_longitude = '-4.76455';
        $result = $this->mapsService->calculateDistance($ori_latitude, $ori_longitude, $dst_latitude, $dst_longitude);
        $output->writeln(var_dump($result));
        */

        // Ejemplo de control de distancias
        /*$intervention = $this->em->getRepository('App:Intervention')->findOneById(28);
        $result = $this->interventionService->setCalcDistanceAPI($intervention);
        $output->writeln(var_dump($result)); */
        
        /*
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById(1);
        $operator = $this->em->getRepository('App:Operator')->findOneById(1);
        $this->updateRequestService->assignOperatorToBranchOffice($operator, $branchOffice);

        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById(1);
        $operator = $this->em->getRepository('App:Operator')->findOneById(3);
        $this->updateRequestService->assignOperatorToBranchOffice($operator, $branchOffice);

        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById(1);
        $operator = $this->em->getRepository('App:Operator')->findOneById(4);
        $this->updateRequestService->assignOperatorToBranchOffice($operator, $branchOffice);
        */

        // Ejemplos firebase
        /*
        $operator = $this->em->getRepository('App:Operator')->findOneById(1);
        $type = 'new_intervention';
        $title = 'Nueva intervencion disponible';
        $message = 'Intervencion #1234 de Córdoba a Sevilla';
        $data = array('intervention_id' => "1234");
        $output->writeln(var_dump($operator->getFirebaseGcm()));

        $firebase_result = $this->firebaseService->sendFirebaseNotification($operator->getFirebaseGcm(), 
                                                            $type, 
                                                            $title, 
                                                            $message, 
                                                            $data);
       
        $output->writeln(var_dump($firebase_result));
        */
        return 0;
    }
}
