<?php

namespace App\Repository;

use App\Entity\Parameters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method Parameters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Parameters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Parameters[]    findAll()
 * @method Parameters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParametersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Parameters::class);
        $this->em = $em;
    }

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para obtener el valor de un parámetro
     *
     * @param String $varName nombre del parámetro
     * @return multi Depende del parametro es un formato u otro
     */
    public function getParameter($varName){
		$em = $this->em;
		$sqlConnection = $em->getConnection();

	    $parameters = array();
	    $str_query = "SELECT value, type
	        FROM parameters AS pa
	        WHERE pa.name = :varName";

	    // Creamos la consulta
	    $query = $sqlConnection->prepare($str_query);
	    $parameters['varName'] = $varName;
	    // Seteamos los parámetros. Por defecto metemos la fecha.
	    $query->execute($parameters);

	    // Retornamos el resultado
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);

	    if (count($result) == 0){
	    	return null;
	    }

	    $value = $result[0]['value'];
	    $type = $result[0]['type'];

	    if ($type == 'int')
	    	$value = intval($value);
	    else if ($type == 'float')
            $value = floatval($value);
        else if ($type == 'bool')
	    	$value = filter_var($value, FILTER_VALIDATE_BOOLEAN);    

	    return $value;
		}

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para obtener el nombre del tipo del parámetro
     *
     * @param String $varName nombre del parámetro
     * @return string 
     */
	public function getParameterType($varName){
		$em = $this->em;
		$sqlConnection = $em->getConnection();

        $parameters = array();
        $str_query = "SELECT type
            FROM parameters AS pa
            WHERE pa.name = :varName";

        // Creamos la consulta
        $query = $sqlConnection->prepare($str_query);
        $parameters['varName'] = $varName;
        // Seteamos los parámetros. Por defecto metemos la fecha.
        $query->execute($parameters);

        // Retornamos el resultado
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) == 0)
        	return null;

        return $result[0]['type'];
	}

    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para obtener la descripción del parámetro
     *
     * @param String $varName nombre del parámetro
     * @return string 
     */
	public function getParameterDescription($varName){
		$em = $this->em;
		$sqlConnection = $em->getConnection();

	    $parameters = array();
	    $str_query = "SELECT description
	        FROM parameters AS pa
	        WHERE pa.name = :varName";

	    // Creamos la consulta
	    $query = $sqlConnection->prepare($str_query);
	    $parameters['varName'] = $varName;
	    // Seteamos los parámetros. Por defecto metemos la fecha.
	    $query->execute($parameters);

	    // Retornamos el resultado
	    $result = $query->fetchAll(PDO::FETCH_ASSOC);

	    if (count($result) == 0)
	    	return null;

	    return $result[0]['description'];
	}
    
    /**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para asignar un valor a un parámetro
     *
     * @param String $varName nombre del parámetro
     * @param String $value valor nuevo del parámetro
     * @return string 
     */
	public function setParameter($varName, $value){
		$em = $this->getEntityManager();
		$sqlConnection = $em->getConnection();

	    $parameters = array();
	    $str_query = "UPDATE parameters 
						SET value = :varValue
	        			WHERE name = :varName";

	    // Creamos la consulta
	    $query = $sqlConnection->prepare($str_query);
		$parameters['varName'] = $varName;
        $parameters['varValue'] = $value;
        
	    // Seteamos los parámetros. Por defecto metemos la fecha.
	    $query->execute($parameters);

	    return true;
	}

	/**
     * @author Javier Lago<javier.lago@kosaas.com>
     * Función para crear un nuevo parámetros
     *
     * @param String $varName nombre del parámetro
     * @return string 
     */
	public function createParameter($varName, $varType, $varValue, $varDescription){
		$em = $this->em;
		$sqlConnection = $em->getConnection();

	    $parameters = array();
	    $str_query = "INSERT INTO parameters (name, type,value,description)
						VALUES (:varName,:varType,:varValue,:varDescription)";

	    // Creamos la consulta
	    $query = $sqlConnection->prepare($str_query);
		$parameters['varName'] = $varName;
		$parameters['varType'] = $varType;
		$parameters['varValue'] = $varValue;
		$parameters['varDescription'] = $varDescription;
	    // Seteamos los parámetros. Por defecto metemos la fecha.
	    $query->execute($parameters);

		return true;
	}

	/**
     * Función que filtra y rellena la tabla de Parámetros
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchParametersTable($params, $form_filters, $search_filter)
    {
        //Array con las columnas para la ordenación
        $columns = [
            0 => "name",
            1 => "type",
            2 => "value",
            3 => "description"
            ];

        //$qr = $em->getConnection();
        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";

        //* Procesamos los filtros
        
        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND p.name LIKE '%"."$search_filter"."%' 
                    OR p.type         LIKE '%"."$search_filter"."%' 
                    OR p.value        LIKE '%"."$search_filter"."%'  
                    OR p.description  LIKE '%"."$search_filter"."%'               
                    ";
        }

        //Montamos la consulta
        $sql = "SELECT  p.id               AS `id`,
                        p.name  		   AS `name`,
                        p.type    		   AS `type`,
                        p.value      	   AS `value`,
                        p.description      AS `description`

                FROM parameters AS p

                        ";
        try {
            //Creamos una query para el total y otra para los datos filtrados
            $sqlTot .= $sql . $groupBy;
            $sqlRec .= $sql;

            //Concatenamos los filtros
            if (isset($where) && $where != '') {
                $sqlRec .= $where;
            }
            $sqlRec .= $groupBy;
            if (isset($having) && $having != '') {
                $sqlRec .= $having;
            }
            
            //Procesamos la ordenación
            if(isset($params['order'])){
                $sqlRec .= " ORDER BY " .
                $columns[$params['order'][0]['column']] . " " .
                $params['order'][0]['dir'] ;
            }else{
                $sqlRec .= " ORDER BY name ASC";
            }
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el
            // limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

            //Descomentar abajo para chequear la consulta final
            // ini_set("xdebug.var_display_max_children", -1);
            // ini_set("xdebug.var_display_max_data", -1);
            // ini_set("xdebug.var_display_max_depth", -1);

            //Ejecutamos las consultas
            $conn = $this->getEntityManager()->getConnection();
                
            $queryTot = count($conn->executeQuery($sqlTot)->fetchAll(\PDO::FETCH_ASSOC));
            $queryRecordsTot = count($conn->executeQuery($sqlRecTot)->fetchAll(\PDO::FETCH_ASSOC));
            $queryRecords = $conn->executeQuery($sqlRec)->fetchAll(\PDO::FETCH_ASSOC);
            $data = $queryRecords;

            //Montamos la respuesta
            $json_data = array(
                "draw" => intval($params['draw']),
                "recordsTotal" => intval($queryTot),
                "recordsFiltered" => intval($queryRecordsTot),
                "data" => $data
            );
        } 
        catch (DBALException $e) 
        {
            $json_data = $e->getMessage();
        }

        return $json_data;
    }
}
