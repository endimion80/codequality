<?php

namespace App\Repository;

use App\Entity\Activity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Activity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activity[]    findAll()
 * @method Activity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activity::class);
    }

    // /**
    //  * @return Activity[] Returns an array of Activity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Activity
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    	/**
     * Función que filtra y rellena la tabla de Parámetros
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function searchActivityTable($params, $form_filters, $search_filter,
                                        $collaboratorId,  $branchOfficeId)
    {
        //Array con las columnas para la ordenación
        $columns = [
            0 => "service_name",
            1 => "activity_name",
            2 => "activity_unit",
            3 => "activity_night",
            4 => "activity_holliday"
            ];

        //$qr = $em->getConnection();
        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";

        //* Procesamos los filtros
        
        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND  cs.description LIKE '%"."$search_filter"."%' 
                    OR ac.name         LIKE '%"."$search_filter"."%' ";
        }

        //Montamos la consulta
        $sql = "SELECT  cs.description AS 'service_name',
                        ac.name AS 'activity_name',
                        ac.unit AS 'activity_unit',
                        ac.night AS 'activity_night',
                        ac.holliday AS 'activity_holliday'
                        FROM activity As ac 
                        LEFT JOIN collaborator_service As cs ON cs.id = ac.collaborator_service_id
                        
                        ";
        
        $where .= " AND ac.branch_office_id = '".$branchOfficeId."' AND 
                        ac.collaborator_id = '".$collaboratorId."' ";

        $where_total = " WHERE ac.branch_office_id = '".$branchOfficeId."' AND 
        ac.collaborator_id = '".$collaboratorId."' ";
        try {
            //Creamos una query para el total y otra para los datos filtrados
            $sqlTot .= $sql . $where_total . $groupBy;
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
                $sqlRec .= " ORDER BY cs.description ASC";
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
