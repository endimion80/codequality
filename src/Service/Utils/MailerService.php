<?php 

namespace App\Service\Utils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Service\UtilsBase\UtilsService;
use Twig\Environment;

class MailerService
{
    private $twig;
    private $name = "MailerService";
    private $lenguages = ['pt,en,it,es,fr'];

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator, 
                                Environment $twig,
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->twig = $twig;
        $this->utilsService = $utilsService;
        $this->asiturBaseUrl = $this->utilsService->getParameter('API_ASITUR_URL_BASE');
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }


    /**
     * Función para enviar los mails
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param array   $message
     * array['subject']
     *  [intervention_id]       String Identificador de la intervencion (es opcional..)
     *  [subject_id]            String Identificador del titulo de correo
     *  [subject]               String titulo del correo
     *  [from]                  String Por si queremos cambiar el sender (opcional)
     *  [to]                    Array  array de correos a quien va dirigido
     *  [cc]                    Array  array de correos en copia
     *  [bcc]                   Array  array de correos en copia oculta
     *  [attachment]            Array  array de ficheros que a su vez tienen campos adiciones
     *  [type]                  Array  string para indicar el tipo de transporte
     *      [filename]          String nombre del fichero
     *      [contentType]       String tipo de contenido
     *      [body]              View   fichero renderizado
     *  [template]              Array  nombre de la plantilla de Twig
     *  [parametersTemplate]    Array  paramétros que necesita la plantilla para renderizar
     *
   
     * @param string    $force_locale para forzar un idioma en el mensaje
     * @param int       $isCommercial Indica si son acciones comerciales
     * 
     * @return mixed    $response 
     */
    public function send($message, $force_locale = null, $isCommercial = 0){

        $defaultLocale = 'es';

        if (!is_null($force_locale) && in_array($force_locale,  $this->lenguages ) )
             $message['locale'] = $force_locale;
        else{
            // Obtenemos el locale en función de las personas que van a enviar el correo
            $locale = $this->getLocale($message, $defaultLocale);
            $message['locale'] = $locale;
        }

        // Alteramos el locale actual
        $translator = $this->translator;
        $translator->setLocale($message['locale']);

        // template o texto plano renderizada Prioriza texto ante plantilla
        $message['parametersTemplate']['mailTo'] = $message['to'] ;

        // al parámeter template le vamos a poner siempre el web domain
        $web_domain = $this->em->getRepository('App:Parameters')->getParameter("WEB_DOMAIN");
        $message['parametersTemplate']['web_domain'] = $web_domain;

        if(isset($message['content']) && !is_null($message['content'])){
            $templateRender = $message['content'];
        }else{
            $templateRender = $this->twig->render($message['template'],
                                                $message['parametersTemplate']);
        }

        $subject = $translator->trans($message['subject']);

        if (isset($message['subject_id']) && $message['subject_id'] != '')
            $subject = "#".$message['subject_id'] . " - " . $subject;

        $message['subject'] = $subject;

        //Antes de los bucles comprobamos si tenemos arrays
        if(is_string($message['to'])){
            if( filter_var($message['to'], FILTER_VALIDATE_EMAIL) )
                $message['to'] = [$message['to']];
            else
                $message['to'] = array();
        }else{
            $aux = $message['to'];
            $message['to'] = array();

            foreach ($aux  as $keyTo => $valueTo){
                if(filter_var($valueTo, FILTER_VALIDATE_EMAIL))
                    array_push($message['to'], $valueTo);
            }
        }

        if(isset($message['cc']) && is_string($message['cc']) && !empty($message['cc'])){
            if( filter_var($message['cc'], FILTER_VALIDATE_EMAIL) )
                $message['cc'] = [$message['cc']];
            else
                $message['cc'] = array();
        }

        if(isset($message['to'])){
            foreach ($message['to'] as $key => $value) {
                // Obtenemos los en CC de los correos
                $cc_emailsAux = $this->getCCFromEmail($value);
                $cc_emails = array();
                
                foreach ($cc_emailsAux  as $keyCC => $valueCC){
                    if(filter_var($valueCC, FILTER_VALIDATE_EMAIL))
                        array_push($cc_emails, $valueCC);
                }

                // Si existen correos para enviar como copia, se añaden al $message[cc]
                if(!empty($cc_emails) && isset($cc_emails) && is_array($cc_emails)){

                    // Si ya hay un array de en copia se mergea
                    if (isset($message['cc']) && is_array($message['cc'])){
                        $aux = $message['cc'];
                        $message['cc'] = array_merge($aux, $cc_emails);
                    } else {
                        if(filter_var($cc_emails, FILTER_VALIDATE_EMAIL))
                            $message['cc'] = $cc_emails;
                    }
                }
            }
        }

        //Comprobar algún el mail está en blacklist, y si bloquea todos los mails o sólo comerciales. En ese caso lo eliminamos de la lista
        foreach ($message['to'] as $key => $value) {
            if($this->getIsInBlackListForThisEmail($value, $isCommercial)){
                unset($message['to'][$key]);
            }
        }
        if(isset($message['cc']) && !empty($message['cc'])){
            foreach ($message['cc'] as $key => $value) {
                if($this->getIsInBlackListForThisEmail($value, $isCommercial)){
                    unset($message['cc'][$key]);
                }
            }
        }
        if(isset($message['bcc']) && !empty($message['bcc'])){
            foreach ($message['bcc'] as $key => $value) {
                if($this->getIsInBlackListForThisEmail($value, $isCommercial)){
                    unset($message['bcc'][$key]);
                }
            }
        }
        
        $responseResult = array("status" => false, "mailSent" => false);
        //Si hay correos a los que enviar, mandamos el email
        if((isset($message['to']) && count($message['to']) > 0) || (isset($message['cc']) && count($message['cc']) > 0)|| (isset($message['bcc']) && count($message['bcc']) > 0) ){
            // Enviamos el mensaje
            $result = $this->sendMail($message,$templateRender);
            
            // Si el resultado es correcto retornamos el log satisfactorio
            if($result > 0){
                $this->em->getRepository('App:MailerLog')->setMailLog($message,$templateRender,true);
                $responseResult = $this->utilsService->sendResponse(true, 200, '', array("mailSent" => true));
            } else {
                // Si el resultado es correcto retornamos el log fallido
                $this->em->getRepository('App:MailerLog')->setMailLog($message,$templateRender,false);
                $responseResult = $this->utilsService->sendResponse(true, 200, '', array("mailSent" => false));
            }
        }else{
            //Si no quedaban correos a los que enviar después de comprobar la blacklist, guardamos que ha habido fallo al enviar porque realmente no se ha enviado el email pero devolvemos 1 para evitar mensajes de error en el flujo, ya que realmente el proceso ha ido bien (así evitamos gastar un envío, pero mantenemos el log)
            $this->em->getRepository('App:MailerLog')->setMailLog($message,$templateRender,false);
            $responseResult = $this->utilsService->sendResponse(false, 400, '', array("mailSent" => false));
        }

        return $responseResult;
    }


    /**
     * Función para obtener el idioma por defecto en los mensajes
     * 
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param Array   $message
     * array['subject']
     *  [subject]               String titulo del correo
     *  [from]                  String Por si queremos cambiar el sender (opcional)
     *  [to]                    Array  array de correos a quien va dirigido
     *  [cc]                    Array  array de correos en copia
     *  [bcc]                   Array  array de correos en copia oculta
     *  [attachment]            Array  array de ficheros que a su vez tienen campos adiciones
     *      [filename]          String nombre del fichero
     *      [contentType]       String tipo de contenido
     *      [body]              View   fichero renderizado
     *  [template]              Array  nombre de la plantilla de Twig
     *  [parametersTemplate]    Array  paramétros que necesita la plantilla para renderizar
     *
     * @param String $defaultLocale Idioma por defecto
     * @return void
     */
    public function getLocale($message, $defaultLocale){
        // Variables auxiliares
        //Se crea un array para los emails y los posibles idiomas.
        $emailAddresses = array();

        $localeArray = array();

        foreach ($this->lenguages as $lng) {
            $localeArray[$lng] = 0;
        }

        // En primer lugar debemos detectar si tiene copia
        if (!empty($message['cc']) && isset($message['cc'])) {
          if(is_array($message['cc'])){
            foreach ($message['cc'] as $email) {
              array_push($emailAddresses, $email);
            }
          } else {
            array_push($emailAddresses, $message['cc']);
          }
        }

        // En segundo lugar debemos detectar si tiene copia oculta
        if (!empty($message['bcc']) && isset($message['bcc'])) {
          if(is_array($message['bcc'])){
            foreach ($message['bcc'] as $email) {
              array_push($emailAddresses, $email);
            }
          } else {
            array_push($emailAddresses, $message['bcc']);
          }
        }

        // Por último vemos si tiene receptor
        if (!empty($message['to']) && isset($message['to'])) {

          if(is_array($message['to'])){
            foreach ($message['to'] as $email) {
              array_push($emailAddresses, $email);
            }
          } else {
            array_push($emailAddresses, $message['to']);
          }

        }

        // Por cada mail, buscamos su idioma
        foreach ($emailAddresses as $emailAddress){

            $language = '';

            $userFind = $this->em->getRepository('App:Operator')->findOneBy(array('email' => $emailAddress));
            if (is_null($userFind))
                $userFind = $this->em->getRepository('App:CollaboratorUser')->findOneBy(array('email' => $emailAddress));
            
            if (!is_null($userFind) && $userFind->getLocale() != '')
                $language = $userFind->getLocale();

            //Se comprueba que $language no esté vacío y que su contenido esté en el array de idiomas
            if($language != '' && array_key_exists($language,$localeArray)){
                    $localeArray[$language]++;
            }
            else{
                unset($emailAddresses[array_search($emailAddress,$emailAddresses)]);
            }
        }

        //Si los mails que no llegan no están en la bbdd, se devuelve el idioma por defecto
        if(sizeof($emailAddresses)==0)
            return $defaultLocale;

        //Se ordena de mayor a menos y obtenemos el máximo valor en una variable
        arsort($localeArray);
        $max = max($localeArray);
        //Comprobamos si el idioma con máximo valor es igual al tamaño del arrray.
        //Es decir, que todos los idiomas de los mails son los mismo. En ese caso devolvemos dicho idioma, sino, el por defecto.
        if($max == sizeof($emailAddresses))
            return array_search($max,$localeArray);

        return $defaultLocale;
    }


     /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para obtener si es necesario mandar en copia a algunos destinatarios
     * Lo dejamos comentado por que no es necesario esa implementacion aun
     * 
     */
    public function getCCFromEmail($email){
        return array();
        /*
        //Obtenemos los CC del email
        $clientService = $this->serviceContainer->get('client_service');
        $mails = $clientService->getCCEmailsFromClientsProvidersAndAddress($email);
        $cc_emails = array();
        //Comprobamos que existan y realizamos un explode para obtenerlos todos
		foreach ($mails as $key => $value) {
			if(!empty($mails[$key]) && isset($mails[$key]['cc_email']))
				$cc_emails = explode(";",$mails[$key]['cc_email']);
        }
        //Comprobamos que si existe un valor que no es un mail, lo quite del array.
		foreach ($cc_emails as $key=> $email) {
			if(!filter_var($cc_emails[$key], FILTER_VALIDATE_EMAIL))
			 	unset($cc_emails[$key]);
        }
        //Devolvemos el array de las copias a enviar
        return $cc_emails;
        */
    }

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Controla la lista negra de correo
     * @param String $email Correo a buscar
     * @param String $isCommercial Indica si el email es comercial (publi)
     */
    public function getIsInBlackListForThisEmail($email, $isCommercial){
        $emailInBlackList = $this->em->getRepository('App:BlackList')->findOneBy(['email' => $email]);
        if($emailInBlackList){

            if($emailInBlackList->getBlockOnlyCommercialEmails() == 0 ||
                ($isCommercial && $emailInBlackList->getBlockOnlyCommercialEmails())){
                return true;
            }
        }
        return false;
    }

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función final para el envío del correo electrónico
     *  [subject]               String titulo del correo
     *  [from]                  String Por si queremos cambiar el sender (opcional)
     *  [to]                    Array  array de correos a quien va dirigido
     *  [cc]                    Array  array de correos en copia
     *  [bcc]                   Array  array de correos en copia oculta
     *  [attachment]            Array  array de ficheros que a su vez tienen campos adiciones
     *      [filename]          String nombre del fichero
     *      [contentType]       String tipo de contenido
     *      [body]              View   fichero renderizado
     *  [template]              Array  nombre de la plantilla de Twig
     *  [parametersTemplate]    Array  paramétros que necesita la plantilla para renderizar
     *
     * @param String $templateRender plantilla que tiene que renderizar
     */
    public function sendMail($message, $templateRender){
        $filtros=array(
            ' ',
            ';',
            '@a.es',
            '@a.com',
            '[]'
        );

        if(is_array($message['to'])){
            foreach ($message['to'] as $key => $value) {
                if($value == null){
                    unset($message['to'][$key]);
                }
                foreach ($filtros as $k => $val) {
                    if(strpos($value, $val)){
                        return 0;
                    }
                }
            }
        }else{
            foreach ($filtros as $k => $val) {
                if(strpos($message['to'], $val)){
                    return 0;
                }
            }
        }
        $mailDisableDelivery = $this->utilsService->getParameter("MAIL_DISABLE_DELIVERY");

        if ($mailDisableDelivery)
            return 1; // simulamos el envio


        $url = $this->asiturBaseUrl ."/api/comunes/WSEnvioMail";

        $mailSender = 'Asitur'; 
        if(!empty($message['from']) && isset($message['from'])){
            $mailSender = $message['from'];
        }


        $requestData = array(
            'direccionEnvio' => $mailSender,
            'direccionReceptor' => $message['to'],
            'asunto' => $message['subject'],
            'mensaje' => $templateRender,
        );
    

        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);

        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1')
                return 1;
            else
                return 0;
        }

        return 0;
    }

    /*public function sendMail($message, $templateRender){
        $filtros=array(
            ' ',
            ';',
            '@a.es',
            '@a.com',
            '[]'
        );

        if(is_array($message['to'])){
            foreach ($message['to'] as $key => $value) {
                if($value == null){
                    unset($message['to'][$key]);
                }
                foreach ($filtros as $k => $val) {
                    if(strpos($value, $val)){
                        return 0;
                    }
                }
            }
        }else{
            foreach ($filtros as $k => $val) {
                if(strpos($message['to'], $val)){
                    return 0;
                }
            }
        }

        // Obtenemos los parámetros y establecemos la conexión
        $mailHost = $this->utilsService->getParameter("MAIL_HOST");
        $mailPort = $this->utilsService->getParameter("MAIL_PORT");
        $mailUsername = $this->utilsService->getParameter("MAIL_USER");
        $mailPassword = $this->utilsService->getParameter("MAIL_PASSWORD");
        $mailDisableDelivery = $this->utilsService->getParameter("MAIL_DISABLE_DELIVERY");
        
        if($mailHost == '' || $mailPort == '' || $mailUsername == '' || $mailPassword == '')
            return 0; // error
        else if ($mailDisableDelivery)
            return 1; // simulamos el envio

        $transport = (new \Swift_SmtpTransport($mailHost, $mailPort))
        ->setUsername($mailUsername)
        ->setPassword($mailPassword);
        $mailer = new \Swift_Mailer($transport);

        $mailSender = $mailUsername; 
        if(!empty($message['from']) && isset($message['from'])){
            $mailSender = $message['from'];
            
        }
        
        $email = (new \Swift_Message($message['subject']))
                    ->setFrom($mailSender)
                    ->setTo($message['to'])
                    ->setBody($templateRender,'text/html');
                    
        // En primer lugar debemos de detectar si tiene copia
        if(!empty($message['cc']) && isset($message['cc'])){
            $email->setCc($message['cc']);
        }

        // En segundo lugar debemos de detectar si tiene copia oculta
        if(!empty($message['bcc']) && isset($message['bcc'])){
            $email->setBcc($message['bcc']);
        }

        // En tercer lugar debemos de detectar si tiene adjunto
        if(!empty($message['attachment']) && isset($message['attachment'])){

            // Recorremos los adjuntos y lo vamos adjuntando
            foreach($message['attachment'] as $attach){
                $attachment = \Swift_Attachment::newInstance()
                    ->setFilename($attach['filename'])
                    ->setContentType($attach['contentType'])
                    ->setBody($attach['body']);
                $email->attach($attachment);
            }

        }
        // En tercer lugar debemos de detectar si tiene adjunto
        if(!empty($message['attachmentFile']) && isset($message['attachmentFile'])){

            // Recorremos los adjuntos y lo vamos adjuntando
            foreach($message['attachmentFile'] as $attach){
                $attachment = \Swift_Attachment::fromPath($attach);
                $email->attach($attachment);
            }
        }

        // Satisfactorios, si es mayor que cero se ha enviado
        $mailSent = $mailer->send($email);
        return $mailSent ;
    }*/


    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para obtener el contenido del mail 
     * @param mailerLogId id de la tabla mailer log
     * @return null en caso de no tener contenido o un string con el contenido
     */
    public function getEmailContent($mailerLogId){
        $MailerLog = $this->em->getRepository('App:MailerLog')->findOneBy(array('id'    => $mailerLogId));
        
        if (!is_null($MailerLog)){
            if (!is_null($MailerLog->getTemplateContent()) &&
                $MailerLog->getTemplateContent() != ''){
                return $MailerLog->getTemplateContent();
            }
            else if (!is_null($MailerLog->getBackup()) &&
                        $MailerLog->getBackup() != ''){
                          
                $subDir = '/mails_log/';
                $documentPath = realpath(".") . $subDir;
                $fullDocumentPath = $documentPath . $MailerLog->getBackup();

                if (!file_exists($documentPath))
                    mkdir($documentPath, 0777, true);
    
                if (file_exists($fullDocumentPath))
                    $content = file_get_contents($fullDocumentPath);
                
                return $content;
            }
        }
        
        return NULL;
    }
}

?>