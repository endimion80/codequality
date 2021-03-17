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
use  App\Service\UpdateRequest\UpdateRequestService;
use  App\Service\Backend\ValidatorService;
use  App\Service\Backend\InterventionService;
use  App\Service\Backend\DataTableService;
use  App\Service\Backend\BackendService;
use  App\Service\Backend\UsersService;
use  App\Service\API\ApiService;

class TestJVSyncCommand extends Command
{
    protected static $defaultName = 'testJVSync';

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

        $io->success('Comando Testing Sync (Integraciones) Javi');
        $output->writeln("----------------------");


        // requestNewCrane 
        // Petición de creación de una nueva grua
      /*
        $collaborator = $this->em->getRepository('App:Collaborator')->findOneById(1);
        $requestCraneData = array(
            'MatriculaGrua' => "5234ABC",
            'MarcaGrua' => 7, // Nissan
            'ModeloGrua' => 31, //NT 500
            'TipoGrua' => 8, // Camiones 8T
            'HorarioDesdeGrua' => "Desde las 8:00", // esto se cambiará para que funcione con la nueva entidad
            'HorarioHastaGrua' => "Hasta las 15:00", // esto se cambiará para que funcione con la nueva entidad
            'DiasTrabajoGrua' => "De lunes a sabado",
            'ZonasTrabajoGrua' => "", // ?
            'EstadoGrua' => 1, // activa
            'DisponibilidadGrua' => 1, // disponible
            'FechaAltaGrua' => '20200911', // fecha alta 
            'FechaBajaGrua' => null
        );

        $resultRequest = $this->updateRequestService->requestNewCrane($collaborator, $requestCraneData);

        if($resultRequest['status']){
            $crane = $resultRequest['data']['crane']; // entidad
            $output->writeln( $crane->getId()); 
        }
        else     
            $output->writeln( $resultRequest['errors']);      
        */
       
/*
        // assignCraneToBranchOffice
        // asignación de una grua a una sucursal
        $crane = $this->em->getRepository('App:Crane')->findOneById(20);
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById(1);
        $resultRequest = $this->updateRequestService->assignCraneToBranchOffice($crane, 
                                                                        $branchOffice);

        if($resultRequest['status']){
            $branchOfficeCrane = $resultRequest['data']['branchOfficeCrane']; // entidad
            $output->writeln( $branchOfficeCrane->getId()); 
        }
        else     
            $output->writeln( $resultRequest['errors']);
*/

    /*
        // removeCraneFromBranchOffice
        // Quitar una grua de una sucursal
        $branchOfficeCrane = $this->em->getRepository('App:BranchOfficeCrane')->findOneById(9);
        $resultRequest = $this->updateRequestService->removeCraneFromBranchOffice($branchOfficeCrane);

        if($resultRequest['status']){
            $branchOfficeCrane = $resultRequest['data']['branchOfficeCrane']; // entidad
            $output->writeln( $branchOfficeCrane->getId()); 
        }
        else     
            $output->writeln( $resultRequest['errors']);
    */      

    /*
        // Ejemplo de actualización de estado en la grua
        $crane = $this->em->getRepository('App:Crane')->findOneById(18);
        $resultRequest = $this->syncService->updateCraneStatus($crane);
        $output->writeln(var_dump($resultRequest));
    */

     
        // requestNewOperator 
        // Petición de creación de un nuevo operario
        
        $collaborator = $this->em->getRepository('App:Collaborator')->findOneById(1);
        
        $requestOperatorData = array(
            'NombreOperario' => "Javier",
            'ApellidosOperario' => "Lago 2",
            'DNIOperario' => "b14925028", 
            'MovilOperario' => "646311078", 
            'GruaAsignadaOperario' => "028002", // id asitur 
            'EstadoOperario' => 1, // Activo
            'FechaAltaOperario' => '20200911', // fecha alta 
            'FechaBajaOperario' => null,
            'DisponibilidadOperario' => 1, // disponible
        );

        $resultRequest = $this->updateRequestService->requestNewOperator($collaborator, $requestOperatorData);
       
        if($resultRequest['status']){
            $operator = $resultRequest['data']['operator']; // entidad
            $output->writeln( $operator->getId()); 
        }
        else     
            $output->writeln( $resultRequest['errors']); 

    
        // assignOperatorToBranchOffice 
        // Ejemplo de asignación de un operario a una sucursal
/*
        $operator = $this->em->getRepository('App:Operator')->findOneById(4);
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById(1);
      
        $resultRequest = $this->updateRequestService->assignOperatorToBranchOffice($operator, $branchOffice);
        
        if($resultRequest['status']){
            $branchOfficeOperator = $resultRequest['data']['branchOfficeOperator']; // entidad
            $output->writeln( $branchOfficeOperator->getId()); 
        }
        else     
            $output->writeln( $resultRequest['errors']); 
*/  
    
     
        // removeOperatorFromBranchOffice 
        // Ejemplo de eliminación de un operario a una sucursal
/*
        $branchOfficeOperator = $this->em->getRepository('App:BranchOfficeOperator')->findOneById(7);
      
        $resultRequest = $this->updateRequestService->removeOperatorFromBranchOffice($branchOfficeOperator);
        
        if($resultRequest['status']){
            $branchOfficeOperator = $resultRequest['data']['branchOfficeOperator']; // entidad
            $output->writeln( $branchOfficeOperator->getId()); 
        }
        else     
            $output->writeln( $resultRequest['errors']); 
*/    

    
        // assignCraneToOperator($crane, $operator)
        // Ejemplo de asignación de una grua a un operador 

        /*
        $operator = $this->em->getRepository('App:Operator')->findOneById(4);
        $crane = $this->em->getRepository('App:Crane')->findOneById(17);

        $resultRequest = $this->updateRequestService->assignCraneToOperator($crane, $operator);

        if($resultRequest['status']){
            $operator = $resultRequest['data']['operator']; // entidad
            $output->writeln( $operator->getId()); 
        }
        else     
            $output->writeln( $resultRequest['errors']); 
        */

        //$output->writeln(var_dump($resultRequest));

        return 0;
    }
}
