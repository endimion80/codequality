<?php

namespace App\Repository;

use App\Entity\BranchOffice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;
use PDO;
/**
 * @method BranchOffice|null find($id, $lockMode = null, $lockVersion = null)
 * @method BranchOffice|null findOneBy(array $criteria, array $orderBy = null)
 * @method BranchOffice[]    findAll()
 * @method BranchOffice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BranchOfficeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BranchOffice::class);
        $this->conn = $this->getEntityManager()->getConnection();
    }

    // /**
    //  * @return BranchOffice[] Returns an array of BranchOffice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BranchOffice
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que filtra y rellena la tabla de sucursales (branch offices)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchBranchOfficesTable($collaboratorId, $params)
    {
        $form_filters = null;
        $search_filter = null;
        $parameters = [];

        if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $form_filters = $search['form_filters'];
            $search_filter = $search['search_filter'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "town",
            1 => "province",
            2 => "telephone",
            3 => "sinisterEmail",
            4 => "invoicingEmail",
            5 => "contactPerson",
            6 => "id"
            ];

        $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " HAVING TRUE ";

        //* Procesamos los filtros

        // Comprobamos en caso de filtar por collaborator
        if( !is_null($collaboratorId) && $collaboratorId != '') {
            $where .= " AND b.collaborator_id = ".$collaboratorId." ";
        }

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $having .= " AND (`town` LIKE '%" .$search_filter. "%'
                       OR `province` LIKE '%".$search_filter."%' 
                       OR `telephone` LIKE '%".$search_filter."%'  
                       OR `sinisterEmail` LIKE '%".$search_filter."%' 
                       OR `invoicingEmail` LIKE '%".$search_filter."%' 
                       OR `contactPerson` LIKE '%".$search_filter."%')                    
                       ";
        }

        // Filtros específicos
        if (!is_null($form_filters)){
            if (isset($form_filters['town']) && $form_filters['town'] != '' ){
                $where .= " AND b.town_id = ".$form_filters["town"]." ";     
            }

            if (isset($form_filters['province']) && $form_filters['province'] != '' ){
                $where .= " AND b.province_id = ".$form_filters["province"]." ";     
            }

            if (isset($form_filters['telephone']) && $form_filters['telephone'] != '' ){
                $having .= " AND `telephone` LIKE '%".$form_filters["telephone"]."%' ";     
            }

            if (isset($form_filters['sinister_email']) && $form_filters['sinister_email'] != '' ){
                $where .= " AND b.sinister_email LIKE '%".$form_filters["sinister_email"]."%' ";     
            }

            if (isset($form_filters['invoicing_email']) && $form_filters['invoicing_email'] != '' ){
                $where .= " AND b.invoicing_email LIKE '%".$form_filters["invoicing_email"]."%' ";     
            }

            if (isset($form_filters['contact_person']) && $form_filters['contact_person'] != '' ){
                $where .= " AND c.name LIKE '%".$form_filters["contact_person"]."%' ";     
            }
        }
       
        //Montamos la consulta
        $sql = "SELECT  b.id                                                                                              AS `id`,
                        b.name                                                                                            AS `name`,
                        town.name                                                                                         AS `town`,
                        province.name                                                                                     AS `province`,
                        GROUP_CONCAT(DISTINCT p.number ORDER BY p.number ASC)                                             AS `telephone`,
                        b.sinister_email                                                                                  AS `sinisterEmail`,
                        b.invoicing_email                                                                                 AS `invoicingEmail`,
                        GROUP_CONCAT(DISTINCT c.name ORDER BY c.name ASC)                                                 AS `contactPerson`

                FROM branch_office AS b

                LEFT JOIN town ON town.id = b.town_id
                LEFT JOIN province ON province.id = b.province_id
                LEFT JOIN contact AS c ON c.branch_office_id = b.id
                LEFT JOIN phone AS p ON p.branch_office_id = b.id
                ";

        $groupBy = " GROUP BY b.id ";

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
            //return var_dump($sqlRec);
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

    /**
     * Función que devuelve una lista filtrada de sucursales (branch offices)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param Array   $form_filters   Array de filtros específicos aplicados al listado (Filtros individuales)
     * @param string  $search_filter  Filtro genérico (El de "buscar")
     * @param boolean $toExport       Indica si se va a preparar el resultado para exportar en excel o no
     * @param boolean $addHeader      Indica si se va a mostrar la cabecera de las columnas
     * 
     */
    public function searchBranchOffices($collaboratorId, $form_filters, $search_filter, $toExport = false, $addHeader = true)
    {
        $sqlRec = "";
        $where = "WHERE TRUE ";
        $having = " HAVING TRUE ";

        //* Procesamos los filtros

        // Comprobamos en caso de filtar por collaborator
        if( !is_null($collaboratorId) && $collaboratorId != '') {
            $where .= " AND b.collaborator_id = ".$collaboratorId." ";
        }

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $having .= " AND (`town` LIKE '%" .$search_filter. "%'
                       OR `province` LIKE '%".$search_filter."%' 
                       OR `telephone` LIKE '%".$search_filter."%'  
                       OR `sinisterEmail` LIKE '%".$search_filter."%' 
                       OR `invoicingEmail` LIKE '%".$search_filter."%' 
                       OR `contactPerson` LIKE '%".$search_filter."%')                    
                       ";
        }

        // Filtros específicos
        if( !is_null($form_filters) && $form_filters != '') {
            foreach ($form_filters as $filter) {
                if( !is_null($filter['value']) && trim($filter['value']) != '') {
                    switch ($filter['name']) {
                        case 'town':
                            // En este caso se utiliza where
                            $where .= " AND b.town_id = ".$filter["value"]." ";
                            break;
                        case 'province':
                            // En este caso se utiliza where
                            $where .= " AND b.province_id = ".$filter["value"]." ";
                            break;
                        default:
                            $having .= " AND ".$filter['name']." LIKE '%".$filter['value']."%' ";
                            break;
                    }
                }
            }
        }
       
        //Montamos la consulta
        $sql = "SELECT  town.name                                                                                         AS `town`,
                        province.name                                                                                     AS `province`,
                        GROUP_CONCAT(DISTINCT p.number ORDER BY p.number ASC)                                             AS `telephone`,
                        b.sinister_email                                                                                  AS `sinisterEmail`,
                        b.invoicing_email                                                                                 AS `invoicingEmail`,
                        GROUP_CONCAT(DISTINCT c.name ORDER BY c.name ASC)                                                 AS `contactPerson`

                FROM branch_office AS b

                LEFT JOIN town ON town.id = b.town_id
                LEFT JOIN province ON province.id = b.province_id
                LEFT JOIN contact AS c ON c.branch_office_id = b.id
                LEFT JOIN phone AS p ON p.branch_office_id = b.id
                ";

        $groupBy = " GROUP BY b.id ";

        try {
            $sqlRec .= $sql;

            //Concatenamos los filtros
            if (isset($where) && $where != '') {
                $sqlRec .= $where;
            }
            if (isset($groupBy) && $groupBy != '') {
                $sqlRec .= $groupBy;
            }
            if (isset($having) && $having != '') {
                $sqlRec .= $having;
            }
            
            //Procesamos la ordenación
            $sqlRec .= " ORDER BY town ASC";
            
            //Ejecutamos las consultas
            $conn = $this->getEntityManager()->getConnection();
                
            $queryRecords = $conn->executeQuery($sqlRec)->fetchAll(\PDO::FETCH_ASSOC);
            $data = $queryRecords;

            //Montamos la respuesta
            if($toExport) {
                $fixedData = array();
                foreach($data as $line) {
                    array_push($fixedData, array_values($line));
                }
                
                if($addHeader) {
                    $header = array('Localidad', 'Provincia', 'Teléfono/s', 'Email de siniestro', 'Email de facturación', 'Persona de contacto');
                    array_unshift($fixedData , $header);   // Añadimos la cabecera
                }
                
                $result = array($fixedData); 

            } else {
                $result = $data;
            }

        } 
        catch (DBALException $e) 
        {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * Función que obtiene las sucursales de una grúa
     * 
     * @param string    $craneId  String con la ID de la grúa
     * @param boolean   $toExport Indica si se devuelven los nombres de las sucursales para exportar
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getBranchOfficesByCrane($craneId, $toExport = false) {
        //Montamos la consulta
        $query = "SELECT
                    b.id   AS `id`,
                    b.name AS `name`
                FROM branch_office AS b
                LEFT JOIN branch_office_crane ON b.id = branch_office_crane.branch_office_id
                    AND (branch_office_crane.date_from IS NOT NULL AND branch_office_crane.date_from <=NOW()) 
                    AND (branch_office_crane.date_to > NOW() OR branch_office_crane.date_to IS NULL)
                ";

        $where = " WHERE TRUE ";
        $orderBy = " GROUP BY b.id ORDER BY b.name ASC ";

        if(!is_null($craneId) && $craneId != "") {
            $where .= " AND branch_office_crane.crane_id = $craneId ";
        }
        
        $query = $query . $where . $orderBy;
                
        try {
            //Ejecutamos la consulta
            $conn = $this->getEntityManager()->getConnection();
            $queryRecords = $conn->executeQuery($query)->fetchAll(\PDO::FETCH_ASSOC);
        } 
        catch (DBALException $e) 
        {
            $resultRecords = $e->getMessage();
        }

        $resultRecords = array();

        if($toExport) {
            // Se devuelve por nombre
            foreach($queryRecords as $item) {
                array_push($resultRecords, $item["name"]);
            }
        } else {
            // Se devuelve por id
            foreach($queryRecords as $item) {
                array_push($resultRecords, $item["id"]);
            }
        }

        return $resultRecords;
    }

    /**
     * Función que obtiene las sucursales de un operario
     * 
     * @param string    $operatorId  String con la ID del operario
     * @param boolean   $toExport Indica si se devuelven los nombres de las sucursales para exportar
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getBranchOfficesByOperator($operatorId, $toExport = false) {
        //Montamos la consulta
        $query = "SELECT
                    b.id   AS `id`,
                    b.name AS `name`
                FROM branch_office AS b
                LEFT JOIN branch_office_operator ON b.id = branch_office_operator.branch_office_id
                    AND (branch_office_operator.date_from IS NOT NULL AND branch_office_operator.date_from <= NOW()) 
                    AND (branch_office_operator.date_to > NOW() OR branch_office_operator.date_to IS NULL)
                ";

        $where = " WHERE TRUE ";
        $orderBy = " GROUP BY b.id ORDER BY b.name ASC ";

        if(!is_null($operatorId) && $operatorId != "") {
            $where .= " AND branch_office_operator.operator_id = $operatorId ";
        }
        
        $query = $query . $where . $orderBy;
                
        try {
            //Ejecutamos la consulta
            $conn = $this->getEntityManager()->getConnection();
            $queryRecords = $conn->executeQuery($query)->fetchAll(\PDO::FETCH_ASSOC);
        } 
        catch (DBALException $e) 
        {
            $resultRecords = $e->getMessage();
        }

        $resultRecords = array();

        if($toExport) {
            // Se devuelve por nombre
            foreach($queryRecords as $item) {
                array_push($resultRecords, $item["name"]);
            }
        } else {
            // Se devuelve por id
            foreach($queryRecords as $item) {
                array_push($resultRecords, $item["id"]);
            }
        }

        return $resultRecords;
    }

    /**
     * Función que obtiene las sucursales de un operario
     * 
     * @param string    $operatorId  String con la ID del operario
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getArrayBranchOfficesByOperator($operatorId) {
        //Montamos la consulta
        $query = "SELECT
                    b.id   AS `id`,
                    b.name AS `name`
                FROM branch_office AS b
                LEFT JOIN branch_office_operator ON b.id = branch_office_operator.branch_office_id
                    AND (branch_office_operator.date_from IS NOT NULL AND branch_office_operator.date_from <=NOW()) 
                    AND (branch_office_operator.date_to > NOW() OR branch_office_operator.date_to IS NULL)
                ";

        $where = " WHERE TRUE ";
        $orderBy = " GROUP BY b.id ORDER BY b.name ASC ";

        if(!is_null($operatorId) && $operatorId != "") {
            $where .= " AND branch_office_operator.operator_id = $operatorId ";
        }
        
        $query = $query . $where . $orderBy;
                
        try {
            //Ejecutamos la consulta
            $conn = $this->getEntityManager()->getConnection();
            $queryRecords = $conn->executeQuery($query)->fetchAll(\PDO::FETCH_ASSOC);
        } 
        catch (DBALException $e) 
        {
            $queryRecords = $e->getMessage();
        }

        return $queryRecords;
    }

    /**
     * Obtiene las sucursales por colaborador
     * 
     * @param string    $collaboratorId  String con la ID del colaborador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    function getArrayBranchOfficesByCollaborator($collaboratorId){
        $sql = "SELECT bo.id AS id, 
                        bo.name AS name,
                        province.name AS province 
                FROM branch_office AS bo
                LEFT JOIN province on province.id = bo.province_id
                WHERE bo.collaborator_id = :collaborator_id 
                ORDER BY bo.name";

        $parameters = [];

        $parameters['collaborator_id'] = $collaboratorId;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
        return $queryRecords;
    }


}
