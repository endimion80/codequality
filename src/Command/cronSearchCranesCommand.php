<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\EventsAndSync\SyncService;
use App\Service\Utils\LogService;

use  App\Service\Backend\InterventionService;

class cronSearchCranesCommand extends Command
{
    protected static $defaultName = 'cronSearchCranes';

    protected function configure()
    {
        $this
            ->setDescription('Este comando lista las peticiones de grúas pendientes y busca usuarios cercanos para notificar a ASITUR')
            //->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            //->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                InterventionService $interventionService,
                                SyncService $syncService,
                                LogService $logService)
    {
        $this->em = $em;
        $this->interventionService = $interventionService;
        $this->syncService = $syncService;
        $this->logService = $logService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        date_default_timezone_set( 'Europe/Paris' );
        
        $productionMode = true; //? con esto hacemos que puedas ejecutar varias veces el script
                                 //? sin necesidad de crear mas intervenciones

        $io = new SymfonyStyle($input, $output);
       
        $output->writeln("Iniciando búsqueda de peticiones pendientes");    
        $requestToProcess = $this->em->getRepository('App:RequestCrane')->nextRequestToProcess($productionMode);
        
        $output->writeln("Peticiones a procesar: " . json_encode($requestToProcess));

        foreach ($requestToProcess as $request){
            $requestCrane = $this->em->getRepository('App:RequestCrane')->findOneById($request['id']);
            $findCranesResult = $this->interventionService->findCranesForRequest($requestCrane);
            
            $output->writeln("Intervencion: " . $requestCrane->getInterventionCode() );

            $this->logService->log("Procesando Intervencion: " . $requestCrane->getInterventionCode());
            //$this->logService->log(json_encode($findCranesResult));

            if ($findCranesResult['status']){
                $output->writeln(var_dump($findCranesResult['data']));
    
                // Mandamos vía API
                $resultSendApi = $this->syncService->sendCranesRequested($requestCrane, $findCranesResult['data']);
                $output->writeln(var_dump($resultSendApi));
                //$this->logService->log(json_encode($resultSendApi));
            }
            else{
                $output->writeln("ERROR!!!");
            }
        }

        $io->success('Finalizado');
        return 0;
    }
}
