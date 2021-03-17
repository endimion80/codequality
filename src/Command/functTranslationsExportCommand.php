<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Translations;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Filesystem\Filesystem;


/**
 * Exporta las traducciones desde la base de datos a los ficheros YAML 
 * @author Antonio Romero <antonio.romero@kosaas.com>
 * 
 */
class functTranslationsExportCommand extends Command
{
    protected static $defaultName = 'functTranslationsExport';

    protected function configure()
    {
        $this
            ->setDescription('Se exportan las traducciones desde la base de datos a los ficheros YAML')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                ContainerInterface $container, 
                                TranslatorInterface $translator
                                )
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->container = $container;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info>Inicio del proceso</info>");
        $output->writeln("----------------------");

        $filesystem = new Filesystem();
        $languages = array('en','es','fr','it','pt');

        // Obtenemos todas las instancias de la tabla translations
        $sql = "SELECT * FROM translations";
        $sqlConnection = $this->em->getConnection();
        $qr = $sqlConnection->prepare($sql);
        $qr->execute();
        $instances = $qr->fetchAll();

        $numInstances = count($instances);

        // Crea la barra de progreso con el número de instancias
        $progressBar = new ProgressBar($output, $numInstances);
        $progressBar->setBarCharacter('<info>'. '=' .'</info>');    // Parte completada
        $progressBar->setEmptyBarCharacter('-');    // Parte pendiente
        $progressBar->setProgressCharacter('<info>'. '>' .'</info>');    // Parte pendiente

        $output->writeln("<comment>==> Renombrando los ficheros de traducciones antiguos y creando los nuevos...</comment>");

        foreach ($languages as $l) {

            // Comprobamos si existen los ficheros de traducciones .old (copias de seguridad) para borrarlos y dejar espacio libre para los nuevos .old
            if( $filesystem->exists('translations/messages.'. $l .'.old.yaml') ) {
                $filesystem->remove('translations/messages.'. $l .'.old.yaml');
            }

            // Comprobamos si existen ficheros YAML de traducciones para realizar una copia de seguridad
            if($filesystem->exists('translations/messages.'. $l .'.yaml')) {
               $filesystem->rename('translations/messages.'. $l .'.yaml', 'translations/messages.'. $l .'.old.yaml'); 
            }

            // Creamos los ficheros de traducciones
            $filesystem->touch('translations/messages.'. $l .'.yaml');
        }

        $output->writeln("<comment>==> Completando los ficheros de traducciones...</comment>");

        $progressBar->start();

        foreach ($instances as $i) {
            foreach ($languages as $l) {

                $filesystem->appendToFile('translations/messages.'. $l .'.yaml', $i['source'] .': '. $i[$l] .PHP_EOL);
            }
            $progressBar->advance();
        }

        $progressBar->finish();
        $progressBar->clear();
        $output->writeln("<comment>==> Ficheros completados</comment>");

        $output->writeln("----------------------");
        $output->writeln("<info>Fin del proceso</info>");

        return 0;
    }

}