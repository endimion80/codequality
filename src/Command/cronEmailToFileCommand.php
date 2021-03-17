<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\ArrayInput;

use PDO;


class cronEmailToFileCommand extends Command
{
    protected static $defaultName = 'cronEmailToFile';

    protected function configure()
    {
        $this
            ->setDescription('Convertir emails a JSON.')
        ;
    }

    public function __construct(EntityManagerInterface $em,
                                ContainerInterface $container
                                )
    {
        $this->em = $em;
        $this->container = $container;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        date_default_timezone_set( 'Europe/Paris' );
        
        $sqlConnection = $this->em->getConnection();

        $publicFilePath = realpath("./public");
        $subDir = '/mails_log/';
        $documentPath = $publicFilePath . $subDir;
        // $fullDocumentPath = $documentPath . $MailerLog->getBackup();

        // Sí no está creado el directorio, lo creamos
        if (!file_exists($documentPath)) {
            mkdir($documentPath, 0777, true);
        }

        // Creamos un deadline de "cache" en base de datos y un limite de conversión por comando
        $deadLine = new \DateTime();
        $deadLine->modify('-7 day');
        $max_file_creation = 100000;

        // Query en MYSQL
        $str_query = "SELECT m.id          AS id
                        FROM mailer_log    AS m
                        WHERE m.creation_date < :deadline 
                        AND (m.backup IS NULL OR m.backup = '')
                        AND (m.template_content IS NOT NULL AND m.template_content <> '')
                        LIMIT 0,".$max_file_creation.";";

        $parameters = array();
        $parameters['deadline'] = $deadLine->format("Y-m-d 00:00:00");

        // Creamos la consulta y ejecutamos
        $qr = $sqlConnection->prepare($str_query);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $mails = $qr->fetchAll(PDO::FETCH_ASSOC);

        foreach ($mails as $mail) {
            $output->writeln("processing " . $mail['id']);

            $MailerLog = $this->em->getRepository('App:MailerLog')->findOneBy(array('id' => $mail['id']));

            // los dividimos en año / mes
            $year = $MailerLog->getCreationDate()->format('Y');
            $month = $MailerLog->getCreationDate()->format('m');

            // primero comprobamos que estén los directorios creados
             // Sí no está creado el directorio lo creamos
            if (!file_exists($documentPath . $year . '/'))
                mkdir($documentPath . $year . '/', 0777, true);
            
            if (!file_exists($documentPath . $year . '/' . $month . '/'))
                mkdir($documentPath . $year . '/' . $month . '/', 0777, true);

            // si todo ha salido correcto creamos el fichero 
            if (file_exists($documentPath . $year . '/' . $month . '/')){
                $nameFile = $year . '/' . $month . '/' . $MailerLog->getId() . ".txt";
                $fullPath = $documentPath . $nameFile;


                file_put_contents($fullPath, $MailerLog->getTemplateContent());

                // volvemos a realizar la comprobación y si todo está ok liberamos la entidad
                if (file_exists($fullPath)){
                    $MailerLog->setTemplateContent(null);
                    $MailerLog->setBackup($nameFile);
                    $this->em->persist($MailerLog);
                    $output->writeln('Export: ' . $fullPath );
                }
                else
                    $output->writeln('Export ERROR');
                
            }
        }
        $this->em->flush();

        $output->writeln('======FINISH======');
    }
}

?>