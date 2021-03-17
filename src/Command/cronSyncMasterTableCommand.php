<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;

use  App\Service\EventsAndSync\SyncService;

class cronSyncMasterTableCommand extends Command
{
    protected static $defaultName = 'cronSyncMasterTable';

    protected function configure()
    {
        $this
            ->setDescription('Este comando llamaría a la sincronización de las tablas maestras')
            //->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            //->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                SyncService $syncService
                                )
    {
        $this->em = $em;
        $this->syncService = $syncService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        date_default_timezone_set( 'Europe/Paris' );
        
        $io = new SymfonyStyle($input, $output);
        /*
        $arg1 = $input->getArgument('arg1');
        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }
        */

        $io->success('Sincronizando tablas maestras');
        $output->writeln("----------------------");

        function makeTableUpdate($syncService, $functionName){
            $result = $syncService->$functionName();
            $result_code = "ERROR";
            if($result['status'])
                $result_code = "OK";
            $response_text = '';
            if (isset($result['message']))
                $response_text .= $result['message'];
            if (isset($result['errors'])){
                if ($response_text != '')
                    $response_text .= ' ';
                $response_text .= $result['errors'];
            }
                
            return "[".$result_code."] - ". $functionName ." - " . $response_text;
        }

        $arrayFunctionsUpdate = ["updateMasterBrand",
                                "updateMasterCraneServiceType",
                                "updateMasterCraneType",
                                "updateMasterCraneStatus",
                                "updateMasterAvailabilityStatus",
                                "updateMasterCraneServiceType",
                                "updateMasterOperatorStatus",
                                "updateMasterVhBrand",
                                "updateMasterVhModel",
                                "updateMasterVhType",
                                "updateMasterSinisterTypeExtension",
                                "updateMasterFailureType",
                                "updateMasterFailureCauseType",
                                "updateMasterRISCause"];

        foreach ($arrayFunctionsUpdate as $functionsUpdate) {
            $output->writeln(makeTableUpdate($this->syncService, $functionsUpdate));    
        }

        $io->success('Finalizado');
       

        return 0;
    }
}
