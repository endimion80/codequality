<?php

namespace App\Repository;

use App\Entity\Log;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Log|null find($id, $lockMode = null, $lockVersion = null)
 * @method Log|null findOneBy(array $criteria, array $orderBy = null)
 * @method Log[]    findAll()
 * @method Log[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Log::class);
    }

    /**
     * Función que filtra y rellena la tabla de Log
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchLogTable($params, $form_filters, $search_filter)
    {
        //Array con las columnas para la ordenación
        $columns = [
            0 => "user",
            1 => "type",
            2 => "creation_date",
            3 => "comment"
            ];

        //$qr = $em->getConnection();
        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";

        //* Procesamos los filtros
        
        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND l.user LIKE '%"."$search_filter"."%' 
                    OR l.type          LIKE '%"."$search_filter"."%' 
                    OR l.creation_date LIKE '%"."$search_filter"."%'  
                    OR l.comment       LIKE '%"."$search_filter"."%'               
                    ";
        }

        //Montamos la consulta
        $sql = "SELECT  l.id            AS `id`,
                        l.user          AS `user`,
                        l.type          AS `type`,
                        l.creation_date AS creation_date,
                        l.comment       AS `comment`

                FROM `log` AS l

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
                $sqlRec .= " ORDER BY creation_date DESC";
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
