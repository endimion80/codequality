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

use  App\Service\UtilsBase\UtilsService;
use  App\Service\Utils\MailerService;
use  App\Service\Utils\ExcelService;
use  App\Service\Utils\LogService;
use  App\Service\Utils\MapsService;
use  App\Service\Utils\PdfService;
use  App\Service\Utils\SmsService;
use  App\Service\Utils\TranslationService;
use  App\Service\EventsAndSync\SyncService;
use  App\Service\EventsAndSync\WebhookCustomService;
use  App\Service\EventsAndSync\WebhookService;
use  App\Service\Backend\ValidatorService;
use  App\Service\Backend\InterventionService;
use  App\Service\Backend\DataTableService;
use  App\Service\Backend\BackendService;
use  App\Service\Backend\UsersService;
use  App\Service\API\ApiService;
use App\Service\UpdateRequest\UpdateRequestService;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class TestARCommand extends Command
{
    protected static $defaultName = 'testAR';

    protected function configure()
    {
        $this
            ->setDescription('Comando de testing de Antonio R.')
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
                                TranslationService $translationService,
                                SyncService $syncService,
                                UpdateRequestService $updateRequestService,
                                WebhookCustomService $webhookCustomService,
                                WebhookService $webhookService,
                                ValidatorService $validatorService,
                                InterventionService $interventionService,
                                DataTableService $dataTableService,
                                BackendService $backendService,
                                UsersService $usersService,
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
        $this->translationService = $translationService;
        $this->syncService = $syncService;
        $this->updateRequestService = $updateRequestService;
        $this->webhookCustomService = $webhookCustomService;
        $this->webhookService = $webhookService;
        $this->validatorService = $validatorService;
        $this->interventionService = $interventionService;
        $this->dataTableService = $dataTableService;
        $this->backendService = $backendService;
        $this->usersService = $usersService;
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

        $io->success('Comando Testing Antonio');
        $output->writeln("----------------------");

        $crane = $this->em->getRepository('App:Crane')->findOneById(1);
        $collaboratorService = $this->em->getRepository('App:CollaboratorService')->findOneById(1);
        $craneServiceType = $this->em->getRepository('App:CraneServiceType')->findOneById(1);
        
        $testCode = $this->updateRequestService->getCodeToAssignServiceToCrane($crane, $collaboratorService, $craneServiceType);
        $output->writeln($testCode["data"]);

        // $testServicesByCrane = $this->syncService->getCraneAvailableServices($crane);
        // foreach($testServicesByCrane as $service) {
        //     $output->writeln($service->getDescription());
        // }

        // $testBranchOfficesCodesByCrane = $this->em->getRepository('App:BranchOfficeCrane')->getArrayBranchOfficesCodeByCrane(1);
        // print_r($testBranchOfficesCodesByCrane);

        // $testSectionsParts = $this->em->getRepository('App:VhSectionPart')->getAppFormatSectionPartByVhType(2);
        // print_r($testSectionsParts);

        // $argumentsArray = new ArrayInput($arguments);
        // $returnedCode = $command->run($argumentsArray, $output);


        
        // $auxUser = $this->em->getRepository('App:CollaboratorUser')->findOneBy(array('username' => 'collaborator'));
        // $output->writeln("Email del usuario: " . $auxUser->getEmail());

        // $auxRoles = $auxUser->getRoles();
        // $output->writeln($auxRoles);
        // $auxUser->setRoles($auxRoles);
        // $this->em->persist($auxUser);
        // $this->em->flush();

        

        //$output->writeln($this->utilsService->getName());
        //$output->writeln(var_dump($this->utilsService->sendResponse(true, 200, "holi", array("uno"=>1, "dos"=>2))));
        //$output->writeln($this->logService->log("asd"));
        //$output->writeln($this->logService->logUser("asd","javi"));

        // Servicio de mails
        
        //$language = $this->em->getRepository('App:Operator')->findOneBy(array('email' => $emailAddress));
        //$output->writeln($language->getLocale());
        //$output->writeln(var_dump($this->mailerService->getIsInBlackListForThisEmail($emailAddress, true)));
        
        /*
        $emailAddress = 'antonio.romero@kosaas.com';
        $parametersTemplate = array(
            'email'	=> 'antonio.romero@kosaas.com'
        );

        $email = array(
            // 'intervention_id'		=> 1, // opcional
            'subject_id'			=> 123,
            'subject'				=> 'RIRA - Prueba de recuperar contraseña',
            //'from'				=> 'pepito@pepito.com',//(opcional)
            'to'					=> $emailAddress,
            'template' 				=> 'mails/passwordRecovery.html.twig',
            'parametersTemplate'	=> $parametersTemplate,
        );

        $result = $this->mailerService->send($email);

        $output->writeln("Bool de mensaje enviado:" . $result['data']['mailSent']);

        // $output->writeln(var_dump($this->mailerService->send($email)));

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
            'to'                    => '+34646311077', // javi
            'content' 				=> 'Testing rira Javi'           
        );
        $result = $this->smsService->sendSms($sms);
        $output->writeln(var_dump($result));
        */


        return 0;
    }
}
