<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\NullOutput;

/**
 * Comando auxiliar que añade las traducciones no existentes con translator:update
 * @author Antonio Romero <antonio.romero@kosaas.com>
 * 
 */
class functAddMissingTranslationsCommand extends Command
{
    protected static $defaultName = 'functAddMissingTranslations';

    protected function configure()
    {
        $this
            ->setDescription('Comando auxiliar que añade las traducciones no existentes con translator:update')
            ->addArgument('language', InputArgument::REQUIRED, 'language?')
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
        $language = $input->getArgument('language');

        // Comando que nos actualiza los YAML con el texto que no tiene una clave en las plantillas
        $command = $this->getApplication()->find('translation:update');

        $arguments = [
            "locale" => $language,
            "--prefix" => 'missing_',   // Se añade el prefijo 'missing_' para saber que han sido generados por este comando
            "--output-format" => 'yaml',
            "--force" => true,
            "--domain" => 'messages',
            "-q" => true
        ];

        $argumentsArray = new ArrayInput($arguments);
        $command->run($argumentsArray, new NullOutput);

        return 0;
    }

}
