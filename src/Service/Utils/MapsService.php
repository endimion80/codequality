<?php 

namespace App\Service\Utils;
use App\Service\UtilsBase\UtilsService;
use Doctrine\ORM\EntityManagerInterface;

#use Psr\Log\LoggerInterface;

class MapsService
{
    private $name = "MapsService";

    public function __construct(EntityManagerInterface $em,
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->utilsService = $utilsService;
        $this->apiKey = $this->em->getRepository('App:Parameters')->getParameter('MAPS_API_KEY');
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Obtiene la distancia en km entre dos coordenadas
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param float $ori_latitude - Latitud origen 
     * @param float $ori_longitude - Longitud origen 
     * @param float $dst_latitude - Latitud destino 
     * @param float $dst_longitude - Longitud destino 
     * @return float Distancia en Km
     */
    public function calculateDistance($ori_latitude, $ori_longitude, $dst_latitude, $dst_longitude){
        if (($ori_latitude == $dst_latitude) && ($ori_longitude == $dst_longitude)) {
            return 0;
        }
        else {
            $theta = $ori_longitude - $dst_longitude;
            $dist = sin(deg2rad($ori_latitude)) * sin(deg2rad($dst_latitude)) +  
                    cos(deg2rad($ori_latitude)) * cos(deg2rad($dst_latitude)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            
            return ($miles * 1.609344); // en Kilometros
        }
    }


    /**
     * Obtiene la distancia en km entre dos coordenadas mediante la API
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param float $ori_latitude - Latitud origen 
     * @param float $ori_longitude - Longitud origen 
     * @param float $dst_latitude - Latitud destino 
     * @param float $dst_longitude - Longitud destino 
     * @return estantar
     */
    public function calculateDistanceAPI($ori_latitude, $ori_longitude, $dst_latitude, $dst_longitude){
        if (($ori_latitude == $dst_latitude) && ($ori_longitude == $dst_longitude)) {
            $result = [
                'distance_text' => '0 km',
                'distance_value' => 0,
                'duration_text' => '0 mins',
                'duration_value' => 0
            ];
            
            return $this->utilsService->sendResponse(true, 200, "OK", $result);
        }
        else {
            $origen = urlencode($ori_latitude.",".$ori_longitude);
            $destino = urlencode($dst_latitude.",".$dst_longitude);
            $apiKey = $this->apiKey;
            
            //Url de la api
            $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins={$origen}&destinations={$destino}&key={$apiKey}";

            //Get json response
            $resp_json = file_get_contents($url);
            //Decode json
            $resp = json_decode($resp_json, true);
            
            if ($resp['status'] == 'OK' && sizeof($resp["rows"]) > 0 && 
                isset($resp['rows'][0]) && isset($resp['rows'][0]['elements'][0])) {
                $data = $resp['rows'][0]['elements'][0];
               
                if (isset($data['distance']) && isset($data['duration'])){
                    $distance_text = $data['distance']['text']; // Ej: 1.0 km
                    $distance_value = $data['distance']['value'] / 1000; // Ej (metros): 964    

                    $duration_text = $data['duration']['text']; // Ej: 4 mins
                    $duration_value = $data['duration']['value']; // Ej (segundos): 266    
                    
                    $result = [
                        'distance_text' => $distance_text,
                        'distance_value' => $distance_value,
                        'duration_text' => $duration_text,
                        'duration_value' => $duration_value
                    ];
                    
                    return $this->utilsService->sendResponse(true, 200, "OK", $result);
                }
            } 
        }
        return $this->utilsService->sendResponse(false, 400, "Error");
    }


    /*
    $mode = "map"
    
    */
    public function getUrlStaticMap($ori_latitude, 
                            $ori_longitude, 
                            $dst_latitude, 
                            $dst_longitude,
                            $height = 300, 
                            $width = 600,
                            $showRoute = true,
                            $showPoint = true,
                            $pointLabelOrigin = 'A',
                            $pointLabelDestination = 'B'){
        if (($ori_latitude == $dst_latitude) && ($ori_longitude == $dst_longitude)) {
            return 0;
        }
        else {
            $origen = urlencode($ori_latitude.",".$ori_longitude);
            $destino = urlencode($dst_latitude.",".$dst_longitude);
            $apiKey = $this->apiKey;

            $routeDecode = null;

            // Paso 1 - Obtenemos la ruta (Si se pide)
            if ($showRoute){
                $url = "https://maps.googleapis.com/maps/api/directions/json?origin=".$origen."&destination=".$destino."&mode=driving&key=".$apiKey;

                $response = $this->file_get_contents_curl($url);
                $respJson = json_decode($response, true);

                if (isset($respJson['routes']) &&
                    isset($respJson['routes'][0]) &&
                    isset($respJson['routes'][0]['overview_polyline']) &&
                    isset($respJson['routes'][0]['overview_polyline']['points']) )
                    $routeDecode = $respJson['routes'][0]['overview_polyline']['points'];
                
                //return $routeDecode;
            }

            // Paso 2 - obtener el mapa estático
            $url = "https://maps.googleapis.com/maps/api/staticmap?size=".$width."x".$height;
            
            if (!is_null($routeDecode))
                $url .= "&path=enc:".$routeDecode;    
            
            if ($showPoint){
                $url .= "&markers=size:mid%7Clabel:".$pointLabelOrigin."%7C".$origen ;
                $url .= "&markers=size:mid%7Clabel:".$pointLabelDestination."%7C".$destino ;
            }
            
            $url .= "&key=".$apiKey;

            return $url;
        }
    }

    private function file_get_contents_curl($url) {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}

?>