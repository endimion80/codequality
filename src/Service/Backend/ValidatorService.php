<?php 

namespace App\Service\Backend;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Service\UtilsBase\UtilsService;
use PDO;

class ValidatorService
{
    private $name = "ValidatorService";

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator, 
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función base para todas las validaciones, podría usarse tanto en formularios
     * web, comprobaciones internas o API.. 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $data - Array de los valores que queremos analizar
     * @param array $required - Valores obligatorios que tenemos que tener en el array
     * @param boolean $stopOnError - Para indicar si debe detenerse la función en caso de encontrar un error
     * 
     * Formato del array de required/optional: 
     * 
     *  [name] => "nombreDelCampo";
     *  [nullable] => true/false; Por defecto 'false'; Opcional
     *  [type] = 'string';
     *                  -> Opcional:
     *                      ['notEmpty'] => true/false
     *          'bool';
     *           'email'; 
     *           'integer'; 
     *           'numeric'; 
     *           'float';
     *           'object';
     *                   -> Requiere: 
     *                       ['class'] => String Ej: 'App\Entity\Crane'
     *           'table';
     *                   -> Requiere: 
     *                       ['tableName'] => String con la tabla en BD Ej: 'operator'
     *                       ['tableCol'] => String con el nombre de la columna de BD Ej: 'id'
     *            'notInTable';
     *                   -> Requiere: 
     *                       ['tableName'] => String con la tabla en BD Ej: 'operator'
     *                       ['tableCol'] => String con el nombre de la columna de BD Ej: 'id'
     * 
     *           'dateFromString';
     *                   -> Requiere: 
     *                       ['format'] => String con el formato de la fehca Ej: 'Y-m-d H:i:s'
     *
     * @return array Sera la respuesta estandar y en el data meteremos el objeto Crane creado
     */
    /* EJEMPLO */
    /*
            $data = [ 'prueba0' => 123.4,
                      'prueba1' => 'valor 1',
                      'prueba2' => 123, 
                      'prueba3' => true,
                      'prueba4' => $crane,
                      'prueba5' => 'javier.lago@kosaas.com',
                      'prueba6' => 4,
                      'prueba7' => "asdf",
                ];

        $required = [ ['name' => 'prueba-'],
                      ['name' => 'prueba_', 'type' => 'string'],
                      ['name' => 'prueba_', 'type' => 'string', 'notEmpty' => 'true'],
                      ['name' => 'FechaSolicitud', 'type' => 'dateFromString', 'format' => 'Y-m-d H:i:s'],
                      ['name' => 'prueba', 'type' => 'string', 'msg' => 'falta un campooo'],
                      ['name' => 'prueba0', 'type' => 'float'],
                      ['name' => 'prueba1', 'type' => 'string'],
                      ['name' => 'prueba2', 'type' => 'integer'],
                      ['name' => 'prueba2', 'type' => 'numeric'], // texto o numero
                      ['name' => 'prueba3', 'type' => 'bool'],
                      ['name' => 'prueba5', 'type' => 'email'],
                      ['name' => 'prueba4', 'type' => 'object', 'class' => 'App\Entity\Crane', 'nullable' => true],
                      ['name' => 'prueba4', 'type' => 'object', 'class' => 'App\Entity\Crane'],
                      ['name' => 'prueba6', 'type' => 'table', 'tableName' => 'operator', 'tableCol' => 'id'],
                    ];
        $resultValidation =  $this->validatorService->validatorBase ($data,$required, false);
    */
    public function validatorBase (array $data, array $required, $stopOnError = true){
        
        $errorArray = []; // array donde guardamos los errores
       
        // Primero hacemos los campos requeridos
        foreach($required as $requiredField){

            if (!isset($requiredField['name'])){
                array_push($errorArray, "Falta descripción del campo");
                if($stopOnError)
                return $this->utilsService->sendResponse(false, 400, 'Error', $errorArray);
            }

            if (!isset($data[$requiredField['name']])){
                $checkValue = true; // para excluir los posibles nulos
                
                // comprobamos si puede ser null
                if (isset($requiredField['nullable']) && 
                    $requiredField['nullable'] == true && 
                    isset($data[$requiredField['name']]) &&
                    is_null($data[$requiredField['name']])){
                    $checkValue = false;
                }
                
                if ($checkValue){
                    $msgError = "Campo obligatorio no encontrado: ". $requiredField['name'];
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];
                    
                    array_push($errorArray, $msgError); // guardamos el error

                    if($stopOnError)
                        return $this->utilsService->sendResponse(false, 400, 'Error', $errorArray);
                }
            }
            else{
                $checkValue = true;

                // Bloque para permitir nulos o cadena vacia en "table"
                if(isset($requiredField['type']) &&
                    $requiredField['type'] == 'table' && 
                    isset($requiredField['nullable']) && 
                    $requiredField['nullable'] == true && 
                    ( $data[$requiredField['name']] == '' || 
                        is_null( $data[$requiredField['name']]))){
                        $checkValue = false;
                }  

                // Si tiene tipo definido lo validamos, sino comprobamos únicamente que existe
                // en el array 
                if ($checkValue && isset($requiredField['type'])){
                    $checkTypeValidation = $this->auxValidateType($data, $requiredField);
                    if (!$checkTypeValidation['status']){
                        array_push($errorArray, $checkTypeValidation['errors']); // guardamos el error
                    
                        if($stopOnError)
                            return $this->utilsService->sendResponse(false, 400, 'Error', $errorArray);
                    }
                }
            }
        }

        if(count($errorArray)) 
            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $errorArray);
        else 
            $responseResult = $this->utilsService->sendResponse(true, 200, '');
        
        return $responseResult;
    }


    /**
     * Esta función valida el tipo de dato (mail, string , etc)
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param array $data - Array de los valores que queremos analizar
     * @param array $required - Valores obligatorios que tenemos que tener en el array
     * @param boolean $stopOnError - Para indicar si debe detenerse la función en caso de encontrar un error
     * 
     * Formato del array de required: 
     * 
     *  [name] => "nombreDelCampo";
     *  [nullable] => true/false; Por defecto 'false'; Opcional
     *  [type] = 'string';
     *                  -> Opcional:
     *                      ['notEmpty'] => true/false
     *           'array';
     *           'bool';
     *           'email'; 
     *           'integer'; 
     *           'numeric'; 
     *           'float';
     *           'object';
     *                   -> Requiere: 
     *                       ['class'] => String Ej: 'App\Entity\Crane'
     *           'table';
     *                   -> Requiere: 
     *                       ['tableName'] => String con la tabla en BD Ej: 'operator'
     *                       ['tableCol'] => String con el nombre de la columna de BD Ej: 'id'
     *           'notInTable';
     *                   -> Requiere: 
     *                       ['tableName'] => String con la tabla en BD Ej: 'operator'
     *                       ['tableCol'] => String con el nombre de la columna de BD Ej: 'id'
     *           'dateFromString';
     *                   -> Requiere: 
     *                       ['format'] => String con el formato de la fehca Ej: 'Y-m-d H:i:s'
     * 
     * @return array Sera la respuesta estandar y en el errors metemos el texto de error (si lo hay)
     */
    public function auxValidateType ($data, $requiredField){
        $responseResult = $this->utilsService->sendResponse(true, 200, '');

        switch($requiredField['type']){
            case 'string': 
                if (!is_string($data[$requiredField['name']])){
                    $msgError = "El campo '". $requiredField['name'] . "' no es tipo 'string': (". $data[$requiredField['name']] .")";
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];

                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                if( isset($requiredField['notEmpty'])     &&
                  $requiredField['notEmpty']              && 
                  (is_null($data[$requiredField['name']]) || 
                  empty($data[$requiredField['name']]))
                  ) {
                    $msgError = "El campo '". $requiredField['name'] . "' es nulo o es una cadena vacía";
                    
                    if(isset($requiredField['msg'])) {
                        $msgError = $requiredField['msg'];
                    }

                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                    
                }
                break;
            case 'array': 
                    if (!is_array($data[$requiredField['name']])){
                        $msgError = "El campo '". $requiredField['name'] . "' no es tipo 'array': (". $data[$requiredField['name']] .")";
                        if(isset($requiredField['msg']))
                            $msgError = $requiredField['msg'];
                        
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                    }
                    break;
            case 'bool': 
                if (!filter_var($data[$requiredField['name']], FILTER_VALIDATE_BOOLEAN) 
                    && $data[$requiredField['name']] != 'false' && $data[$requiredField['name']] != false ){
                    $msgError = "El campo '". $requiredField['name'] . "' no es tipo 'bool': (". $data[$requiredField['name']] .")";
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];
                    
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                break;
            case 'email':
                if (!filter_var($data[$requiredField['name']], FILTER_VALIDATE_EMAIL) ){
                    $msgError = "El campo '". $requiredField['name'] . "' no es tipo 'email': (". $data[$requiredField['name']] .")";
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];
                    
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                break;
            case 'integer': 
                if (!is_int($data[$requiredField['name']])){
                    $msgError = "El campo '". $requiredField['name'] . "' no es tipo 'integer': (". $data[$requiredField['name']] .")";
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];
                    
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                break;
            case 'numeric': 
                if (!is_numeric($data[$requiredField['name']])){
                    $msgError = "El campo '". $requiredField['name'] . "' no es tipo 'numeric': (". $data[$requiredField['name']] .")";
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];
                    
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                break;
            case 'float':
                if (!is_float($data[$requiredField['name']])){
                    $msgError = "El campo '". $requiredField['name'] . "' no es tipo 'float': (". $data[$requiredField['name']] .")";
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];
                    
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                break;
            case 'object': 
                if (!is_object($data[$requiredField['name']]) || 
                    !is_a($data[$requiredField['name']], $requiredField['class'])
                    ){
                    
                    $msgError = "El campo '". $requiredField['name'] . "' no pertenece a la clase '". $requiredField['class'] ."'";
                    if(isset($requiredField['msg']))
                        $msgError = $requiredField['msg'];
                    
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                break;
            case 'dateFromString': 
                if( !isset($requiredField['format'])){
                    $msgError = "Falta por definir el campo 'format' ej: 'Y-m-d H:i:s'";
                    $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);  
                }
                else{
                    $d = \DateTime::createFromFormat($requiredField['format'] , $data[$requiredField['name']]);
                    if (false == ($d && $d->format($requiredField['format']) == $data[$requiredField['name']])){
                        $msgError = "El campo '". $requiredField['name'] . "' no tiene el formato '". $requiredField['format'] ."'";
                        if(isset($requiredField['msg']))
                            $msgError = $requiredField['msg'];
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                    }
                }
                break;
            case 'table': 
                if( !isset($requiredField['tableName']) || 
                    !isset($requiredField['tableCol'])){
                        $msgError = "Falta por definir los campos 'tableName' y 'tableCol'";
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                // si tenemos definidos los campos comprobamos que exista
                else{
                    try {
                        $em = $this->em;
                        $sqlConnection = $em->getConnection();

                        $str_query = "SELECT COUNT(".$requiredField['tableCol'].") AS Result
                                    FROM ".$requiredField['tableName']."
                                    WHERE ".$requiredField['tableCol']." = :value
                                    LIMIT 0,1";

                        // Creamos la consulta
                        $query = $sqlConnection->prepare($str_query);
                        $parameters['value'] = $data[$requiredField['name']];
                        // Seteamos los parámetros. Por defecto metemos la fecha.
                        $query->execute($parameters);

                        // Retornamos el resultado
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);

                        if (!$result[0]['Result']){
                            $msgError = "El valor del campo '". $requiredField['name'] . "' no encontrado en '". $requiredField['tableName'] ."'";
                            if(isset($requiredField['msg']))
                                $msgError = $requiredField['msg'];

                            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                        }
                    } catch (\Exception $e) {
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $e->getMessage());
                    }
                }
                break;
            case 'notInTable': 
                if( !isset($requiredField['tableName']) || 
                    !isset($requiredField['tableCol'])){
                        $msgError = "Falta por definir los campos 'tableName' y 'tableCol'";
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                }
                // si tenemos definidos los campos comprobamos que no exista
                else{
                    try {
                        $em = $this->em;
                        $sqlConnection = $em->getConnection();

                        $str_query = "SELECT COUNT(".$requiredField['tableCol'].") AS Result
                                    FROM ".$requiredField['tableName']."
                                    WHERE ".$requiredField['tableCol']." = :value
                                    LIMIT 0,1"
                                    ;

                        // Creamos la consulta
                        $query = $sqlConnection->prepare($str_query);
                        $parameters['value'] = $data[$requiredField['name']];
                        // Seteamos los parámetros. Por defecto metemos la fecha.
                        $query->execute($parameters);

                        // Retornamos el resultado
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);

                        if ($result[0]['Result']){
                            $msgError = "El valor del campo '". $requiredField['name'] . "' encontrado en '". $requiredField['tableName'] ."' ya existe.";
                            if(isset($requiredField['msg']))
                                $msgError = $requiredField['msg'];

                            $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $msgError);
                        }
                    } catch (\Exception $e) {
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', $e->getMessage());
                    }
                }
                break;
        }
        return $responseResult;
    }   

}

?>