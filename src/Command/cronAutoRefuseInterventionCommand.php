<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\EventsAndSync\SyncService;
use App\Entity\InterventionLog;
use  App\Service\Backend\InterventionService;

class cronAutoRefuseInterventionCommand extends Command
{
    protected static $defaultName = 'cronAutoRefuseIntervention';

    protected function configure()
    {
        $this
            ->setDescription('Este comando autocancela servicios no aceptados')
            //->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            //->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                InterventionService $interventionService,
                                SyncService $syncService)
    {
        $this->em = $em;
        $this->interventionService = $interventionService;
        $this->syncService = $syncService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        date_default_timezone_set( 'Europe/Paris' );
        
        $io = new SymfonyStyle($input, $output);
       
        $output->writeln("Iniciando búsqueda de intervenciones canceladas");    

        $interventionToRefuse = $this->em->getRepository('App:Intervention')->getInterventionExpiredToAcceptForOperator();
        $cancellationType = $this->em->getRepository('App:CancellationType')->findOneBy(array('codeAsitur' => '00000013'));

        $description = 'SUPERADO LIMITE DE TIEMPO DE RESPUESTA';
        $latitude = '';
        $longitude = '';
        foreach ($interventionToRefuse as $interventionRow){
            $interventionId = $interventionRow['id'];
            $intervention = $this->em->getRepository('App:Intervention')->findOneById($interventionId);
            
            $output->writeln("Cancelando Intervencion: " . $interventionId);

            if (!is_null($intervention->getOperator())){
                $response = $this->interventionService->refuseIntervention($intervention, 
                                                                            $intervention->getOperator(),
                                                                            $cancellationType,
                                                                            $description,
                                                                            $latitude,
                                                                            $longitude);

                $output->writeln(json_encode($response));
            }
            else{
                $output->writeln("Esa intervencion no tiene Operador, no podemos cancelarla.");
                $new_interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'servicio_finalizado'));
                $new_interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'R')); 
                $intervention->setInterventionStatus($new_interventionStatus);
                $intervention->setPhase($new_interventionPhase);
                $intervention->setCancellationType($cancellationType);
                // lo guardamos también aquí
                $intervention->setRefuseDescription($description); 

                $interventionLogType = $this->em->getRepository('App:InterventionLogType')->findOneBy(array('code' => 'change_status')); 

                // Creamos el log de la intervencion
                $interventionLog = new InterventionLog();
                $interventionLog->setIntervention($intervention);
                $interventionLog->setOperator(null);
                $interventionLog->setDescription($description);
                $interventionLog->setInterventionStatus($new_interventionStatus);
                $interventionLog->setInterventionLogType($interventionLogType);

                $this->em->persist($intervention);  
                $this->em->persist($interventionLog);
                $this->em->flush();
            }
        }

        $io->success('Finalizado');
        return 0;
    }
}
