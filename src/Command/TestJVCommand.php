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

class TestJVCommand extends Command
{
    protected static $defaultName = 'testJV';

    protected function configure()
    {
        $this
            ->setDescription('Comando de testing de Javi L.')
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

        $io->success('Comando Testing Javi');
        $output->writeln("----------------------");


        $cacheGoogleDistance = [];

        $cacheGoogleDistance['1']['2']['3']['4'] = 123;

        $output->writeln(var_dump($cacheGoogleDistance));
        $output->writeln("----------------------");

        if (isset($cacheGoogleDistance['1']['2']['3']['4']))
            $output->writeln("existe");
        else
            $output->writeln("no existe");
        
        $output->writeln("----------------------");

        if (isset($cacheGoogleDistance['2']['23']['3']['5']))
            $output->writeln("existe");
        else
            $output->writeln("no existe");


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
        
        $intervention = $this->em->getRepository('App:Intervention')->findOneById(28);

        
        $result = $this->em->getRepository('App:Intervention')->getMainGeolocationInterventionRoute($intervention);
        
        $output->writeln(var_dump($result));
        */
        

        return 0;
    }
}
