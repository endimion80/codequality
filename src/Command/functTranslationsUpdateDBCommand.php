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
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * Actualiza las traducciones en base de datos a partir de los ficheros YAML
 * @author Antonio Romero <antonio.romero@kosaas.com>
 * 
 */
class functTranslationsUpdateDBCommand extends Command
{
    protected static $defaultName = 'functTranslationsUpdateDB';

    protected function configure()
    {
        $this
            ->setDescription('Se importan las traducciones de los ficheros YAML a la base de datos')
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

        $translationsRepository = $this->em->getRepository(Translations::class);
        $prevLanguages = array('en','es','fr','it','pt');
        $languages = array();

        // Comando que nos actualiza los YAML con el texto que no tiene una clave en las plantillas
        $command = $this->getApplication()->find('functAddMissingTranslations');

        $output->writeln("<comment>==> Comprobando textos no traducidos...</comment>");

        // Crea la barra de progreso con el número de instancias
        $progressBar = new ProgressBar($output, count($prevLanguages));
        $progressBar->setBarCharacter('<info>'. '=' .'</info>');        // Parte completada
        $progressBar->setEmptyBarCharacter('-');                        // Parte pendiente
        $progressBar->setProgressCharacter('<info>'. '>' .'</info>');   // Parte pendiente
        $progressBar->start();

        // Comprobamos que ningún fichero de traducciones esté vacío
        foreach ($prevLanguages as $l) {

            $filename = 'translations/messages.' . $l . '.yaml';

            if(file_exists($filename) && filesize($filename)) {
                $languages[] = $l;

                $arguments = ["language" => $l];
                $argumentsArray = new ArrayInput($arguments);
                $command->run($argumentsArray, new NullOutput);
            } else {
                $output->writeln("<error>No existe fichero de traducciones para '". $l ."' o está vacío.</error>");
            }
            $progressBar->advance();
        }

        $progressBar->finish();
        $progressBar->clear();
        
        // Guardamos el contenido de los YAMLs de cada idioma
        foreach ($languages as $l) {
            $messages[$l] = $this->translator->getCatalogue($l)->all()['messages'];
        }

        $output->writeln("<comment>==> Actualizando traducciones...</comment>");
        
        $loopCounter = 0;
        
        foreach ($languages as $l) {
            foreach ($messages[$l] as $key => $value) {
                
                $loopCounter++;
                
                // Comprobamos si la key (Source) ya existe o no en base de datos
                if( ($translationLine = $translationsRepository->findOneBySource($key)) == null ) {
                    
                    $translationLine = new Translations();
                    $translationLine->setSource($key);
                    $translationLine->setFirstTranslation(true);
                }
                    
                // Comprobamos el prefijo 'missing_' para las claves creadas por el comando translation:update
                if(strpos($value, 'missing_') !== false) {
                    $value = null;
                    
                    // Como seguramente el texto que se haya escrito, en lugar de una etiqueta sea en español, la key será el mismo texto en español
                    if($l == "es") {
                        $translationLine->setEs($key); 
                    }
                }

                switch ($l) {
                    case 'en':
                        $translationLine->setEn($value);
                    break;
                    case 'es':
                        // En caso de que haya ido todo bien (No haya entrado en el if del 'missing_')
                        if(!is_null($value)) {
                            $translationLine->setEs($value);
                        }
                        break;
                    case 'fr':
                        $translationLine->setFr($value);
                        break;
                    case 'it':
                        $translationLine->setIt($value);
                        break;
                    case 'pt':
                        $translationLine->setPt($value);
                        break;
                    default:
                        break;
                }
                
                $this->em->persist($translationLine);

                if($loopCounter % 200 == 0) {
                    $this->em->flush();
                }
            }

            $this->em->flush();
        }

        $output->writeln("----------------------");
        $output->writeln("<info>Fin del proceso</info>");

        return 0;
    }

}
