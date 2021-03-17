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
use App\Entity\Translations;
use App\Service\Utils\TranslationService;
use App\Service\UtilsBase\UtilsService;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Filesystem\Filesystem;


/**
 * Comprueba y corrige tanto el formato de las traducciones como las traducciones no encontradas
 * @author Antonio Romero <antonio.romero@kosaas.com>
 * 
 */
class fixTranslationsCommand extends Command
{
    protected static $defaultName = 'fixTranslations';

    protected function configure()
    {
        $this
            ->setDescription('Se comprueba y corrige el formato de las traducciones y se completan las traducciones incompletas con la API de Google')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                ContainerInterface $container, 
                                TranslatorInterface $translator,
                                TranslationService $translationService
                                )
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->container = $container;
        $this->translationService = $translationService;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $translationsRepository = $this->em->getRepository(Translations::class);
        $instances = $translationsRepository->missingLanguagesInstances();

        $numInstances = count($instances);

        // Crea la barra de progreso con el número de instancias
        $progressBar = new ProgressBar($output, $numInstances);
        $progressBar->setBarCharacter('<info>'. '=' .'</info>');        // Parte completada
        $progressBar->setEmptyBarCharacter('-');                        // Parte pendiente
        $progressBar->setProgressCharacter('<info>'. '>' .'</info>');   // Parte pendiente
        
        $io->section('Traduciendo y dando formato...');
        $progressBar->start();

        foreach ($instances as $i) {
            $this->translationService->checkTranslation($i["source"]);
            $progressBar->advance();
        }

        $progressBar->finish();
        $progressBar->clear();

        $io->success('Completed!');

        return 0;
    }

}