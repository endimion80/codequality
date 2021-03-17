<?php 

namespace App\Service\Utils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Service\UtilsBase\UtilsService;

class FirebaseService
{
    private $name = "FirebaseService";

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator, 
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->firebaseApiKey = $this->utilsService->getParameter("FIREBASE_API_KEY");
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para enviar una notificación
     * @author Javier Lago <javier.lago@eurotransportcar.com>
     *
     * @param String $gcm_token         ID de Firebase
     * @param String $type              Tipo de notificación
     * @param String $title             Título de la notificación
     * @param String $message           Contenido de la notificación
     * @param String $data              Dato extra para la notificación
     *
     * @return Boolean
     *
     */
    function sendFirebaseNotification($gcm_token, $type, $title, $message, $data = []){
        // lo primero vamos a buscar el gcm en la tabla de operadores
        if (is_null($gcm_token)){
            $responseResult = $this->utilsService->sendResponse(false, 400, "No se ha proporcionado GCM");
            return $responseResult;
        }
        
        $operator = $this->em->getRepository('App:Operator')->findOneBy(array('firebaseGcm' => $gcm_token));
        if (is_null($operator)){
            $responseResult = $this->utilsService->sendResponse(false, 400, "No encontrado el GCM en la tabla Operador");
            return $responseResult;
        }

        $array_data = array('type' => $type);
        
        if (count($data) > 0)
            $array_data = array_merge($array_data, $data);

        $fields = array (
            "registration_ids" => [$gcm_token],
            "data" => array(
                "title" => $title,
                "text" => $message,
                "data" => $array_data
            )
        );
        
        // Cabeceras
        $headers = array(
            'Authorization: key=' . $this->firebaseApiKey,
            'Content-Type: application/json'
        );
        // Llamada CURL
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec( $ch );
        curl_close( $ch );
           
        // Ejemplo de respuesta
        // {"multicast_id":6493752781457624139,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1530023780414590%a0a6f595f9fd7ecd"}]}

        // Decodificamos el JSON para ver la respuesta
        $result_decoded = json_decode($result,true);
        //var_dump($result_decoded); die();
        //return $result_decoded['success'];
       
        if($result_decoded['success'])
            $responseResult = $this->utilsService->sendResponse(true, 200, "DONE", $result_decoded);
        else
            $responseResult = $this->utilsService->sendResponse(false, 400, "ERROR", $result_decoded);
        
        return $responseResult;
    }
}


?>