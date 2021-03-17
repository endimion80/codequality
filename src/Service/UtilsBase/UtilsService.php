<?php 

namespace App\Service\UtilsBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Doctrine\ORM\EntityManagerInterface;

class UtilsService
{
    private $name = "MailerService";

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator)
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->encript_password = 'ae3t5_9*&PBYTgt=h_Umt4TU?BcHH*93RS#nZjxu';
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /*************************************************************/
    /* Obtención de parametros                                   */
    /*************************************************************/

    /**
     * Obtiene los parámetros de una llamada ya sea hecha por un texto escrito en formato
     * json como variables enviadas tipo "POST"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Request $request - Request de peticion
     * @return array Array de parametros obtenidos
     */
    public function getParameters(Request $request)
    {
        $params = [];
        $content = $request->getContent();
        
        if (!empty($content))
            $params = json_decode($content, true);
        else
            $params = $request->request->all();
        
        return $params;
    }

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para obtener el valor de un parámetro
     * Se puede llamar directamente al repo.. pero asi escribimos menos al llamarlo
     *
     * @param String $varName nombre del parámetro
     * @return multi Depende del parametro es un formato u otro
     */
    public function getParameter($varName){
        return $this->em->getRepository('App:Parameters')->getParameter($varName);
    }

    /*************************************************************/
    /* Respuestas predefinidas                                   */
    /*************************************************************/

    /**
     * Función para enviar una petición JSON
     * @author Alberto Cruz <alberto.cruz@kosaas.com>
     * 
     * @param bool      $status
     * @param integer   $statusCode
     * @param string    $message
     * @param array     $data
     * @param string    $typeResponse   Valores permitidos 
     *                  0. Por defecto. Array: Devuelve un array
     *                  1. Array:              Devuelve un array
     *                  2. JsonResponse:       Devuelve un jsonResponse seteando sus opciones
     *                  3. Json:               Devuelve un string pero codificado en formato JSON 
     * 
     * @return mixed    $response 
     */
    public function sendResponse($status, $statusCode, $message = '', $data = null, $typeResponse = 'array'){

        // Dependiendo del tipo de respuesta se realiza una opción o no.
        switch ($typeResponse) {
            case 'jsonResponse':
                $response   = $this->sendJsonResponse($status, $statusCode, $this->translator->trans($message), $data);
                break;
            case 'json':
                $response   = $this->sendJson($status, $statusCode, $this->translator->trans($message), $data);
                break;
            case 'array':
            default:
                $response   = $this->sendArray($status, $statusCode, $this->translator->trans($message), $data);
                break;
        }        

        return $response; 
    }


    /**
     * Función para enviar una petición en un string con un formato JSON
     * @author Alberto Cruz <alberto.cruz@kosaas.com>
     * 
     * @param bool      $status
     * @param integer   $statusCode
     * @param string    $message
     * @param array     $data
     * 
     * @return string   $response 
     */
    public function sendJson($status, $statusCode, $message, $data = null){

        return json_encode($this->sendArray($status, $statusCode, $this->translator->trans($message), $data));
    }  


    /**
     * Función para enviar una petición en una array
     * @author Alberto Cruz <alberto.cruz@kosaas.com>
     * 
     * @param bool      $status
     * @param integer   $statusCode
     * @param string    $message
     * @param array     $data
     * 
     * @return array    $response 
     */
    public function sendArray($status, $statusCode, $message, $data = null){

        // Inicializamos el contenido de la respuesta
        $response = array(
            'status'        => $status,
            'statusCode'    => $statusCode,
            'message'       => $this->translator->trans($message)
        );

        // Si la respuesta es correcta, retornamos el parámetro errors
        if($status){
            $response['data'] = $data;
        }

        // Si la respuesta es inválida, retornamos el parámetro errors
        else {
            $response['errors'] = $data;
        }

        return $response;
    }

    /**
     * Función para enviar una petición JSON
     * @author Alberto Cruz <alberto.cruz@kosaas.com>
     * 
     * @param bool      $status
     * @param integer   $statusCode
     * @param string    $message
     * @param array     $data
     * 
     * @return JsonResponse $response 
     */
    public function sendJsonResponse($status, $statusCode, $message, $data = null){

        // Declaramos la respuesta
        $response = new JsonResponse();

        // Inicializamos el contenido de la respuesta
        $dataResponse = array(
            'status'        => $status,
            'statusCode'    => $statusCode,
            'message'       => $this->translator->trans($message)
        );

        // Si la respuesta es correcta, retornamos el parámetro errors
        if($status){
            $dataResponse['data'] = $data;
        }

        // Si la respuesta es inválida, retornamos el parámetro errors
        else {
            $dataResponse['errors'] = $data;
        }

        $response->setData($dataResponse);
        $response->setCharset('utf-8');
        $response->setStatusCode($statusCode);

        return $response;
    }

    /*************************************************************/
    /* Descarga de fichero                                       */
    /*************************************************************/

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para descargar un fichero de una ruta
     *
     * @param String $varName Nombre del fichero
     * @param String $filePath Ruta del fichero
     * @param bool  $isFilePathEncrypted indica si tenemos que desencriptar la ruta o no
     * @return File fichero (en caso de que exista)
     */
    public function downloadFile($fileName, $filePath, $isFilePathEncrypted = true){

        if ($isFilePathEncrypted)
            $filePath = $this->decrypt($filePath);

        if (file_exists($filePath)) {
            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                $fileName
            );
            return $response;
        }
        return null;
    }

    /*************************************************************/
    /* Funcion de encriptacion / desencriptacion                 */
    /*************************************************************/

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para encriptar una cadena
     *
     * @param String $string_to_encrypt Variable a encriptar
     * @return String String encriptado
     */
    public function encrypt(string $string_to_encrypt){
        $encrypted_string = openssl_encrypt($string_to_encrypt,"AES-128-ECB",$this->encript_password);    
        return str_replace("/", "_", $encrypted_string); //Cambiamos los caracteres problemáticos
    }

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para desencriptar una cadena
     *
     * @param String $encrypted_string 
     * @return String String desencriptado
     */
    public function decrypt(string $encrypted_string){
        $decrypted_string = openssl_decrypt(str_replace("_", "/", $encrypted_string), "AES-128-ECB", $this->encript_password); //Cambiamos con str_replace los caracteres problemáticos
        return $decrypted_string;
    }
   
    /*************************************************************/
    /* Validadores                                               */
    /*************************************************************/

    /**
     * Función para comprobar si los parámetros recibidos coinciden con los esperados y están rellenos. Devuelve la lista de parámetros faltantes.
     * @author Sara García <sara.garcia@eurotransportcar.com>
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param array   $receivedParams
     * @param array   $expectedParams
     * @param string  $typeResponse   Valores permitidos      *                  
     *                  array:     Devuelve un array
     *                  string:    Devuelve una commaList
     * 
     * @return $missingParams 
     */
    public function getMissingParams($receivedParams, $expectedParams, $typeResponse = 'string'){

        $missingParams = [];

        foreach($expectedParams as $param){
            if(!isset($receivedParams[$param]) || empty($receivedParams[$param])) {
                $missingParams[] = $param;
            } 
        }
        
        switch ($typeResponse) {
            case 'array':
                $response = $missingParams;
                break;
            
            default:
                $response = implode(',', $missingParams);
                break;
        }

        return $response;
    }

    /**
     * Función que realiza una llamada CURL con el método POST (añadido de últimas)
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @param string   $url Dirección a donde se envía
     * @param array   $arrayPost Si está a NULL no envía nada
     * @param boolean $parseJsonResult Para indicar si hay que parsear la respuesta
     * @param boolean $useAsiturCredentials Para indicar si hay que utilizar el usuario / password de Asitur
     * @param boolean $useAsiturCredentials Para indicar si hay que utilizar el usuario / password de Asitur
     * @return respuesta estandart 
     */
    public function makeCURL_POST($url,   
                            $arrayPost = null, 
                            $parseJsonResult = true, 
                            $useAsiturCredentials = true,
                            $forcePost = false){
        return $this->makeCURL($url, $arrayPost, $parseJsonResult, $useAsiturCredentials = true,true);
    }
    
    /**
     * Función que realiza una llamada CURL 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @param string   $url Dirección a donde se envía
     * @param array   $arrayPost Si está a NULL no envía nada
     * @param boolean $parseJsonResult Para indicar si hay que parsear la respuesta
     * @param boolean $useAsiturCredentials Para indicar si hay que utilizar el usuario / password de Asitur
     * @param boolean $useAsiturCredentials Para indicar si hay que utilizar el usuario / password de Asitur
     * @return respuesta estandart 
     */
    public function makeCURL($url, 
                                $arrayPost = null, 
                                $parseJsonResult = true, 
                                $useAsiturCredentials = true,
                                $forcePost = false){

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            
            if ($useAsiturCredentials){
                $username = $this->getParameter('API_ASITUR_USERNAME');
                $password = $this->getParameter('API_ASITUR_PASSWORD');
                curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
                curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, TRUE);
                curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
            }
            
            if (!is_null($arrayPost)){
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
                
                if ($forcePost)
                    curl_setopt($ch, CURLOPT_POST, TRUE);
                else
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPost));
            }

            $result_curl= curl_exec($ch);
            $http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
            $totalTime = curl_getinfo( $ch, CURLINFO_TOTAL_TIME );
            curl_close($ch);
            $responseCode = strval($http_code);
            
            //return $result_curl; 
            if ($responseCode == '0' || $responseCode == '301')
                throw new \Exception('Bad response code in curl: '. $responseCode );
            
            if ($parseJsonResult )
                $resultToSendData = json_decode($result_curl, true);
            else
                $resultToSendData = $result_curl;
            
            $responseResult = $this->sendResponse(true, $responseCode, '',  array('totalTime' => $totalTime,
                                                                                    'content' => $resultToSendData));
            return $responseResult;
            
        }catch(\Exception $e){
            $responseResult = $this->sendResponse(false, 400, '', $e->getMessage());
            return $responseResult;
        }
    }

    /**
     * Retorna un bool que indica si es un equipo de depuración 
     * se llama del tipo:
     * Request $request,  (en la definición del controlador)
     * $isTestingIP = $utilsService->isTestingIP($request->getClientIp());
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @param string   $ip
     * @return respuesta bool
     */
    public function isTestingMode(){
        return $this->em->getRepository('App:Parameters')->getParameter('DEBUG_MODE');
    }
}

?>