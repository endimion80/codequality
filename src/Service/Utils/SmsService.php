<?php 

namespace App\Service\Utils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Service\UtilsBase\UtilsService;

class SmsService
{
    private $name = "SmsService";

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator, 
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->defaultOriginator = 'Asitur';// remitente por defecto
        $this->maxOriginatorSms = 11; // maximo message bird
        $this->maxLengthSms = 70; // maximo message bird
        $this->prefixPhone = '+34'; // España
        $this->asiturBaseUrl = $this->utilsService->getParameter('API_ASITUR_URL_BASE');
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para enviar sms
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param array   $sms
     * array
     *  [intervention_id]       String Identificador de la intervencion (es opcional..)
     *  [type]                  String Tipología (opcional)
     *  [from]                  String Remitente (opcional)
     *  [to]                    String telefono movil destino
     *  [content]               String Contenido
     *
     * @param string     $type
     * 
     * @return mixed    $response 
     */
    public function sendSms($sms, $force_locale = null) {
        $smsDisableDelivery = $this->utilsService->getParameter("SMS_DISABLE_DELIVERY");
        $responseResult = $this->utilsService->sendResponse(true, 200);
        $originator = $this->defaultOriginator;

        if (isset($sms['from']) && $sms['from'] != '')
            $originator = $sms['from'];

        // ponemos un limite en el $originator 
        $originator = substr($originator, 0, $this->maxOriginatorSms); 

        if (isset($sms['to']) && $sms['to'] != ''){
            $recipients = $sms['to'];

            // Quitamos los espacios
            $recipients = preg_replace('/\s+/', '', $recipients);

            if (strlen($recipients) < 9){
                $responseResult = $this->utilsService->sendResponse(false, 400, "No (correct) recipients found");
            }
            // Ponemos el prefijo
            else if (strlen($recipients) == 9){
                $recipients = $this->prefixPhone . $recipients;
            }
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, "Params 'to' not found");
        }

        if (isset($sms['content']) && $sms['content'] != ''){
            // Traducimos el contenido
            if(!is_null($force_locale))
                $this->translator->setLocale($force_locale);
            $sms['content'] = $this->translator->trans($sms['content']);

            // Acortamos si fuese muy grande el contenido
            $body = substr($sms['content'], 0, $this->maxLengthSms); 
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, "Params 'content' not found");
        }
        
        // Si no esta deshabilitado el envio y ha pasado todas las validaciones enviamos
        if (!$smsDisableDelivery && $responseResult['status']){
            $resultDelivery =  $this->sendSmsAsitur($recipients, $body); 
            $responseResult = $resultDelivery;
        }
        else{
            $responseResult = $this->utilsService->sendResponse(true, 200);
        }
        
        // Guardamos en el log se haya enviado o no
        $this->em->getRepository('App:SmsLog')->setSmsLog($sms,
                                                        $originator, 
                                                        $recipients, 
                                                        $body, 
                                                        $responseResult['status'], 
                                                        $responseResult['message']);

        return $responseResult;
    }// sendSms

    
    /**
     * Función personalizada para "la api de asitur" para enviar sms
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param string    $to Destinatario
     * @param string    $content Contenido SMS
     * 
     * @return mixed    $response 
     */
    private function sendSmsAsitur($to, $content) {
        $url = $this->asiturBaseUrl . "/api/comunes/WSEnvioSMS";
    
        $requestData = array(
            'Telefono' => $to,
            'Mensaje' => $content
        );

        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1')
                $responseResult = $this->utilsService->sendResponse(true, 200);
            else
                $responseResult = $this->utilsService->sendResponse(false, 400, 'Error en Asitur (interno)');
        }
        else 
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error en Asitur (comunicación)');
        
        return $responseResult;
    }
}

?>