<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;

use  App\Service\UtilsBase\UtilsService;

class fixParametersCommand extends Command
{
    protected static $defaultName = 'fixParameters';

    protected function configure()
    {
        $this
            ->setDescription('Comando para actualizar los parámetros que falten');
    }

    public function __construct(EntityManagerInterface $em,
                                UtilsService $utilsService
                                )
    {
        $this->em = $em;
        $this->utilsService = $utilsService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->success('Check Parameters.....');
        
        $defaultParameters = array(
            ['name'=>'MAIL_HOST', 'type'=>'string', 'value'=>'ssl0.ovh.net', 'description'=>'Servidor de correo'],
            ['name'=>'MAIL_PORT', 'type'=>'int', 'value'=>'25', 'description'=>'Servidor de correo (puerto)'],
            ['name'=>'MAIL_USER', 'type'=>'string', 'value'=>'hola@wootaxi.com', 'description'=>'Servidor de correo (usuario)'],
            ['name'=>'MAIL_PASSWORD', 'type'=>'string', 'value'=>'nRv9jQHIcbF3', 'description'=>'Servidor de correo (password)'],
            ['name'=>'MAIL_DISABLE_DELIVERY', 'type'=>'bool', 'value'=>'1', 'description'=>'Para desactivar o no el envio de Mails'],
            ['name'=>'SMS_API_KEY', 'type'=>'string', 'value'=>'TWsn08mNBnqaOdMO885nZxD93', 'description'=>'Api key de messageBird para el envío de SMS'],
            ['name'=>'SMS_DISABLE_DELIVERY', 'type'=>'bool', 'value'=>'1', 'description'=>'Para desactivar o no el envio de SMS'],
            ['name'=>'MAPS_API_KEY', 'type'=>'string', 'value'=> 'AIzaSyDeSeqkZVbVsgDesocMu7tJsgs6-nQrsw0', 'description'=>'Api Key de google maps, para los cálculos de distancias y tiempos por carretera.'],
            ['name'=>'WEB_DOMAIN', 'type'=>'string', 'value'=>'http://localhost/rira_web/public/', 'description'=>'Ruta del dominio de la web'],
            ['name'=>'TRANSLATIONS_API_KEY', 'type'=>'string', 'value'=>'AIzaSyBJW505nqF-cvpzbC4iFH7biXhd9tKNHSs', 'description'=>'Api key para las traducciones'],
            ['name'=>'APP_API_KEY', 'type'=>'string', 'value'=>'123456', 'description'=>'Api key para la conexión desde Asitur al WebAdmin. No caduca, si se cambia sin realizar cámbios en la integración de asitur, dejará de funcionar.'],
            ['name'=>'APP_VERSION_ANDROID', 'type'=>'string', 'value'=>'0.0', 'description'=>'Número mínimo de versión con la que debe funcionar la App Android. Forzará el dispositivo a la descarga si posee una versión anterior.'],
            ['name'=>'APP_VERSION_IOS', 'type'=>'string', 'value'=>'0.0', 'description'=>'Número mínimo de versión con la que debe funcionar la App iOS. Forzará el dispositivo a la descarga si posee una versión anterior.'],
            ['name'=>'APP_PHONE', 'type'=>'string', 'value'=>'555555555', 'description'=>'Teléfono que se envía en la API de la APP Móvil'],
            ['name'=>'APP_PHONE_CENTRAL', 'type'=>'string', 'value'=>'123456789', 'description'=>'Teléfono que se envía en la API de la APP como número de la central'],
            ['name'=>'APP_SECOND_GEOLOCATION', 'type'=>'int', 'value'=> 300, 'description'=>'Segundos en los que la APP debería actualizar su geoposición, en caso de tener activo ese usuario el tracking. Valores próximos a 0 podrían provocar fallos en el servidor.'],
            ['name'=>'APP_SECOND_GEOLOCATION_ACTIVE', 'type'=>'int', 'value'=> 60, 'description'=>'Segundos en los que la APP debería actualizar su geoposición cuando tiene una intervención activa, en caso de tener activo ese usuario el tracking. Valores próximos a 0 podrían provocar fallos en el servidor.'],
            ['name'=>'APP_INTERVAL_TO_ACCEPT', 'type'=>'int', 'value'=> 45, 'description'=>'Segundos en los que un operador puede aceptar un servicio vía notificación APP'],
            ['name'=>'APP_KM_PROXIMITY_AUTO_STATUS', 'type'=>'float', 'value'=> 0.4, 'description'=>'Radio de Km a partir del cual actualiza automáticamente los estados.'],
            ['name'=>'APP_MINUTES_TO_AUTO_NO_AVAILABILITY', 'type'=>'float', 'value'=> 60, 'description'=>'Minutos en los que pondrá automáticamente como no disponible a los operadores si no dan geoposición.'],
            ['name'=>'SEARCH_CRANES_MAX_KM_STRAIGHT', 'type'=>'int', 'value'=> 50, 'description'=>'Radio de Km en linea recta para filtrar las grúas en el algoritmo de búsqueda.'],
            ['name'=>'SEARCH_CRANES_MINUTES_LAST_POSITION_CHECK', 'type'=>'int', 'value'=> 5, 'description'=>'Filtro de minutos de la última actualización de posición para el algoritmo de búsqueda de grúa.'],
            ['name'=>'APP_KM_ENABLE_VHLOCATED', 'type'=>'float', 'value'=> 0.5, 'description'=>'Radio de Km a partir del cual se puede utilizar la acción de "Vh localizado" en la App.'],
            ['name'=>'FIREBASE_API_KEY', 'type'=>'string', 'value'=> 'AAAA6Fpyw7g:APA91bGNQpIUA9k4i8PTVaeJJUmLHUUY1VtRMJKBypVXELJzQGzT8TV6wSFGb1Wfu78OqYueTSteLpAl0BORUpXSfjm8RLf6j3ZSgkUKdT1GfaIydOYQD-rNAFT8Pcjje7JlUhESOFk3', 'description'=>'Api Key de Firebase para mandar las notificaciones a la APP'],
            ['name'=>'API_ASITUR_URL_BASE', 'type'=>'string', 'value'=> 'http://wsrdesa.asitur.net/RIRA', 'description'=>'Url base para las llamadas a la Api de Asitur.'],
            ['name'=>'API_ASITUR_USERNAME', 'type'=>'string', 'value'=> 'wsintRIRA_desa', 'description'=>'Usuario para la Api de Asitur.'],
            ['name'=>'API_ASITUR_PASSWORD', 'type'=>'string', 'value'=> 'QVAgNIziq1juFyw', 'description'=>'Password para las llamadas a la Api de Asitur.'],
            ['name'=>'APP_NAME', 'type'=>'string', 'value'=> 'RIRA app', 'description'=>'Nombre de la APP móvil.'],
            ['name'=>'DEBUG_MODE', 'type'=>'bool', 'value'=> '1', 'description'=>'Para mostrar los botones de atajos de depuración (autologin por ejemplo)'],
        );

        foreach($defaultParameters as $param){
            if (is_null($this->utilsService->getParameter($param['name']))){
                $this->em->getRepository('App:Parameters')->createParameter($param['name'],
                                                                            $param['type'],
                                                                            $param['value'],
                                                                            $param['description']);
                $output->writeln("[NEW] -> " . $param['name']);
            }
            else{
                $output->writeln("[OK] -> " . $param['name']);
            }
        }

        $output->writeln("");
        $io->success('Completed!');
        return 0;
    }
}
