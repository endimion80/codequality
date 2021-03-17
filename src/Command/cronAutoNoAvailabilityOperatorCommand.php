<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;
use  App\Service\Backend\OperatorService;

class cronAutoNoAvailabilityOperatorCommand extends Command
{
    protected static $defaultName = 'cronAutoNoAvailabilityOperator';

    protected function configure()
    {
        $this
            ->setDescription('Pondrá como no disponible a los operarios que lleven X minutos sin aportar geoposición')
            //->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            //->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                    OperatorService $operatorService)
    {
        $this->em = $em;
        $this->operatorService = $operatorService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        date_default_timezone_set( 'Europe/Paris' );
        
        $io = new SymfonyStyle($input, $output);
       
        $output->writeln("Aplicando no disponible...");

        $result = $this->operatorService->autoNoAvailabilityOperator();
        $output->writeln(var_dump($result));
        
        $io->success('Finalizado');
        return 0;
    }
}
