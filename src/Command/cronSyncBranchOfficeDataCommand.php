<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\ArrayInput;
use App\Service\EventsAndSync\SyncService;

use PDO;


class cronSyncBranchOfficeDataCommand extends Command
{
    protected static $defaultName = 'cronSyncBranchOfficeData';

    protected function configure()
    {
        $this
            ->setDescription('Descarga la información de las sucursales')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                ContainerInterface $container,
                                SyncService $syncService
                                )
    {
        $this->em = $em;
        $this->container = $container;
        $this->syncService = $syncService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        date_default_timezone_set( 'Europe/Paris' );
        
        $collaborators = $this->em->getRepository('App:Collaborator')->findAll();

        foreach($collaborators as $collaborator) {
            
            $output->writeln('Sincronizando datos de: ' . $collaborator->getName());

            // Sincronizamos las sucursales del colaborador
            $result = $this->syncService->syncCollaboratorBranchOffices($collaborator);
            
            // Si sincroniza correctamente sincronizamos cada una de sus sucursales
            if ($result['status']){
                $output->writeln('Exito en la general, procediendo por sucursales.');

                $collaboratorForSync = $this->em->getRepository('App:Collaborator')->findOneById($collaborator->getId());
                foreach($collaboratorForSync->getBranchOffices() as $branchOffice) {
                    $output->writeln('Sucursal: ' . $branchOffice->getName());
                    $result = $this->syncService->syncBranchOffice($branchOffice);
                }

                $output->writeln('Finalizada por sucursales.');
            }
            else{
                $output->writeln('Error .');
            }
        }

        $output->writeln('======FINISH======');
    }
}

?>