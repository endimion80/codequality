<?php

namespace App\Repository;

use App\Entity\Crane;
use App\Entity\Collaborator;
use App\Entity\Operator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;
/**
 * @method Crane|null find($id, $lockMode = null, $lockVersion = null)
 * @method Crane|null findOneBy(array $criteria, array $orderBy = null)
 * @method Crane[]    findAll()
 * @method Crane[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CraneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Crane::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    /**
     * Motivo de cancelación del servicio
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array Array de parametros obtenidos
     */
    public function getArrayListByCollaborator(Collaborator $collaborator){

        $sql = "SELECT c.id, c.plate
                 FROM crane AS c
                 WHERE c.collaborator_id  = :collaborator
                 ";
        $parameters = [];
        $parameters['collaborator'] = $collaborator->getId();

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
     
        return $queryRecords;
    }

    /**
     * Recoge las grúas asignadas a un operario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array Array de parametros obtenidos
     */
    public function getAvailableCranesOperator(Operator $operator){

        return $this->getArrayListByCollaborator($operator->getCollaborator());
    }

    // /**
    //  * @return Crane[] Returns an array of Crane objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Crane
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que filtra y rellena la tabla de grúas (cranes)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchCranesTable($collaboratorId, $params, $branchOffice = null)
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
            0 => "id",
            1 => "reference",
            2 => "plate",
            3 => "brand",
            4 => "crane_type",
            5 => "services",
            6 => "zones",
            7 => "management_type",
            8 => "status",
            9 => "label",
            10 => "id"
            ];

        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";

        // Las grúas activas son las que están entre las fechas creation_date y deletion_date 
        //$where = " WHERE (c.creation_date IS NOT NULL AND c.creation_date <=NOW()) AND (c.deletion_date > NOW() OR c.deletion_date IS NULL) ";
        $where = " WHERE c.deletion_date IS NULL ";
        
        $having = " HAVING TRUE ";


        //* Procesamos los filtros

        // Comprobamos en caso de filtar por collaborator
        if( !is_null($collaboratorId) && $collaboratorId != '') {
            $where .= " AND c.collaborator_id = ".$collaboratorId." ";
        }

        // En caso de que $branchOffice sea diferente a null
        if( !is_null($branchOffice) && $branchOffice != '') {
            $having .= " AND zones LIKE '%". $branchOffice->getTown()->getName() ."%' ";
        }

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $having .= " AND (`reference`       LIKE '%".$search_filter."%' 
                           OR `brand`           LIKE '%".$search_filter."%' 
                           OR `plate`           LIKE '%".$search_filter."%' 
                           OR `crane_type`      LIKE '%".$search_filter."%' 
                           OR `services`        LIKE '%".$search_filter."%' 
                           OR `management_type` LIKE '%".$search_filter."%' 
                           OR `zones`           LIKE '%".$search_filter."%'                   
                           OR `status`          LIKE '%".$search_filter."%'                    
                           OR `label`           LIKE '%".$search_filter."%')                    
                        ";
        }

        // Filtros específicos
        if (!is_null($form_filters)){
            if (isset($form_filters['reference']) && $form_filters['reference'] != '' ){
                $having .= " AND reference LIKE '%".$form_filters["reference"]."%' ";     
            }

            if (isset($form_filters['plate']) && $form_filters['plate'] != '' ){
                $having .= " AND plate LIKE '%".$form_filters["plate"]."%' ";     
            }

            if (isset($form_filters['brand']) && $form_filters['brand'] != '' ){
                $where .= " AND c.brand_id = ".$form_filters["brand"]." ";     
            }

            if (isset($form_filters['crane_type']) && $form_filters['crane_type'] != '' ){
                $where .= " AND c.crane_type_id = ".$form_filters["crane_type"]." ";     
            }

            if (isset($form_filters['services']) && $form_filters['services'] != '' ){
                $having .= " AND services LIKE '%".$form_filters["services"]."%' ";     
            }

            if (isset($form_filters['zones']) && $form_filters['zones'] != '' ){
                $having .= " AND zones LIKE '%".$form_filters["zones"]."%' ";     
            }

            if (isset($form_filters['management_type']) && $form_filters['management_type'] != '' ){
                $where .= " AND c.management_type_id LIKE '%".$form_filters["management_type"]."%' ";     
            }

            if (isset($form_filters['status']) && $form_filters['status'] != '' ){
                if($form_filters['status'] == 4) {
                    $having .= " AND `status` = 2 OR `status` = 3 ";
                } else {
                    $having .= " AND `status` = ".$form_filters['status']." ";
                }   
            }

            if (isset($form_filters['label']) && $form_filters['label'] != '' ){
                $where .= " AND labeled_type.id = ".$form_filters['label']." ";     
            }
        }
       
        //Montamos la consulta
        $sql = "SELECT                   
                    c.id                                                                                                    AS `id`,
                    c.reference                                                                                             AS `reference`,
                    c.plate                                                                                                 AS `plate`,
                    brand.description                                                                                       AS `brand`,
                    crane_type.description                                                                                  AS `crane_type`,
                    GROUP_CONCAT(DISTINCT collaborator_service.description ORDER BY collaborator_service.description ASC)   AS `services`,
                    GROUP_CONCAT(DISTINCT town.name ORDER BY town.name ASC)                                                 AS `zones`,
                    crane_management_type.description                                                                       AS `management_type`,
                    crane_status.description                                                                                AS `status`,
                    labeled_type.description                                                                                AS `label`,
                    crane_status.id                                                                                AS `status_id`
        
                FROM crane AS c
   
                LEFT JOIN brand ON c.brand_id = brand.id
                LEFT JOIN crane_type ON c.crane_type_id = crane_type.id
                LEFT JOIN crane_service ON c.id = crane_service.crane_id AND crane_service.crane_service_type_id = 1 AND crane_service.date_from <=NOW() AND (crane_service.date_to > NOW() OR crane_service.date_to IS NULL )
                LEFT JOIN collaborator_service ON collaborator_service.id = crane_service.collaborator_service_id
                LEFT JOIN crane_management_type ON c.management_type_id = crane_management_type.id
                LEFT JOIN crane_status ON c.crane_status_id = crane_status.id
                LEFT JOIN branch_office_crane ON branch_office_crane.crane_id = c.id AND branch_office_crane.date_from <=NOW() AND (branch_office_crane.date_to > NOW() OR branch_office_crane.date_to IS NULL )
                LEFT JOIN branch_office ON branch_office_crane.branch_office_id = branch_office.id
                LEFT JOIN labeled_type ON c.labeled_type_id = labeled_type.id
                LEFT JOIN town ON branch_office.town_id = town.id
                ";

            $groupBy = " GROUP BY c.id ";

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
                $sqlRec .= " ORDER BY reference ASC";
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

    /**
     * Función que devuelve una lista filtrada de grúas (cranes)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param Array   $form_filters   Array de filtros específicos aplicados al listado (Filtros individuales)
     * @param string  $search_filter  Filtro genérico (El de "buscar")
     * @param boolean $toExport       Indica si se va a preparar el resultado para exportar en excel o no
     * @param boolean $addHeader      Indica si se va a mostrar la cabecera de las columnas
     * 
     */
    public function searchCranes($collaboratorId, $form_filters, $search_filter, $toExport = false, $addHeader = true, $branchOffice = null)
    {
        $groupBy = $sqlRec = "";

        // Las grúas activas son las que están entre las fechas creation_date y deletion_date
        $where = " WHERE c.creation_date <=NOW() AND (c.deletion_date > NOW() OR c.deletion_date IS NULL) ";
        
        $having = " HAVING TRUE ";

        //* Procesamos los filtros

        // Comprobamos en caso de filtar por collaborator
        if( !is_null($collaboratorId) && $collaboratorId != '') {
            $where .= " AND c.collaborator_id = ".$collaboratorId." ";
        }

        // En caso de que $branchOffice sea diferente a null
        if( !is_null($branchOffice) && $branchOffice != '') {
            $having .= " AND zones LIKE '%". $branchOffice->getTown()->getName() ."%' ";
        }

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $having .= " AND (`reference`                       LIKE '%".$search_filter."%' 
                           OR `brand`                           LIKE '%".$search_filter."%' 
                           OR `plate`                           LIKE '%".$search_filter."%' 
                           OR `crane_type`                      LIKE '%".$search_filter."%' 
                           OR `services`                        LIKE '%".$search_filter."%' 
                           OR GROUP_CONCAT(DISTINCT town.name)  LIKE '%".$search_filter."%'                    
                           OR `management_type`                 LIKE '%".$search_filter."%'                    
                           OR `status`                          LIKE '%".$search_filter."%'
                           OR `label`                           LIKE '%".$search_filter."%')                    
                       ";
        }

        // Filtros específicos
        if( !is_null($form_filters) && $form_filters != '') {
            foreach ($form_filters as $filter) {
                if( !is_null($filter['value']) && trim($filter['value']) != '') {
    
                    switch ($filter['name']) {
                        case 'crane_type':
                            // En este caso se utiliza where
                            $where .= " AND c.crane_type_id = ".$filter['value']." ";
                            break;
                        case 'brand':
                            // En este caso se utiliza where
                            $where .= " AND c.brand_id = ".$filter['value']." ";
                            break;
                        case 'management_type':
                            // En este caso se utiliza where
                            $where .= " AND crane_management_type.id = ".$filter['value']." ";
                            break;
                        case 'status':
                            // En este caso se utiliza where
                            if($filter['value'] == 4) {
                                $where .= " AND crane_status.id = 2 OR crane_status.id = 3 ";
                            } else {
                                $where .= " AND crane_status.id = ".$filter['value']." ";
                            }
                            break;
                        default:
                            $having .= " AND ".$filter['name']." LIKE '%".$filter['value']."%' ";
                            break;
                    }
                }
            }
        }
       
        //Montamos la consulta
        $sql = "SELECT                   
                    c.reference                                                                                             AS `reference`,
                    c.plate                                                                                                 AS `plate`,
                    brand.description                                                                                       AS `brand`,
                    crane_type.description                                                                                  AS `crane_type`,
                    GROUP_CONCAT(DISTINCT collaborator_service.description ORDER BY collaborator_service.description ASC)   AS `services`,
                    GROUP_CONCAT(DISTINCT town.name ORDER BY town.name ASC)                                                 AS `zones`,
                    crane_management_type.description                                                                       AS `management_type`,
                    crane_status.description                                                                                AS `status`,
                    labeled_type.description                                                                                AS `label`
        
                FROM crane AS c
   
                LEFT JOIN brand ON c.brand_id = brand.id
                LEFT JOIN crane_type ON c.crane_type_id = crane_type.id
                LEFT JOIN crane_service ON c.id = crane_service.crane_id AND crane_service.crane_service_type_id = 1 AND crane_service.date_from <=NOW() AND (crane_service.date_to > NOW() OR crane_service.date_to IS NULL )
                LEFT JOIN collaborator_service ON collaborator_service.id = crane_service.collaborator_service_id
                LEFT JOIN crane_management_type ON c.management_type_id = crane_management_type.id
                LEFT JOIN crane_status ON c.crane_status_id = crane_status.id
                LEFT JOIN branch_office_crane ON branch_office_crane.crane_id = c.id AND branch_office_crane.date_from <=NOW() AND (branch_office_crane.date_to > NOW() OR branch_office_crane.date_to IS NULL )
                LEFT JOIN branch_office ON branch_office_crane.branch_office_id = branch_office.id
                LEFT JOIN labeled_type ON c.labeled_type_id = labeled_type.id
                LEFT JOIN town ON branch_office.town_id = town.id
                ";

            $groupBy = " GROUP BY c.id ";

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
            $sqlRec .= " ORDER BY reference ASC ";
            
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
                    $header = array('Identificador', 'Matrícula', 'Marca', 'Tipo', 'Servicios asociados', 'Zonas de servicio', 'Tipo de asignación', 'Estado', 'Rotulado');
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
     * Obtiene las gruas por sucursal
     * 
     * @param string    $branchOfficeId     String con la ID de la sucursal
     * @param boolean   $onlyActiveCranes   True para solo seleccionar las grúas activas
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    function getArrayCranesByBranchOffice($branchOfficeId, $onlyActiveCranes = false){
        $sql = "SELECT c.id AS id, 
                        c.reference AS reference,
                        c.plate AS plate
                FROM crane AS c
                LEFT JOIN branch_office_crane AS boc ON boc.crane_id = c.id
                ";

        $where = " WHERE boc.branch_office_id = :branch_office_id ";

        // Grúas que no han sido dadas de baja
        $where .= " AND (c.creation_date IS NOT NULL AND c.creation_date <= NOW()) AND (c.deletion_date > NOW() OR c.deletion_date IS NULL) ";

        // Grúas cuya asignación con la sucursal de ID "branchOfficeId" no haya expirado
        $where .= " AND (boc.date_from IS NOT NULL AND boc.date_from <= NOW()) AND (boc.date_to > NOW() OR boc.date_to IS NULL) ";
        
        $orderBy = " ORDER BY c.reference ";

        if($onlyActiveCranes) {
            $where .= " AND c.crane_status_id = 1 ";
        }

        $sql = $sql . $where . $orderBy;

        $parameters = [];

        $parameters['branch_office_id'] = $branchOfficeId;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
        return $queryRecords;
    }

    /**
     * Obtiene las grúas para la tabla de la vista de detalle de operario
     * 
     * @param string    $branchOfficeId     String con la ID de la sucursal
     * @param boolean   $onlyActiveCranes   True para solo seleccionar las grúas activas
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    function getOperatorsAvailableCranesTable($collaboratorId, $params){

        if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $branchOfficeId = $search['branchOfficeId'];
            $craneTypeId = $search['craneTypeId'];
        }

        $operatorId = $params["operatorId"];
        
        //Array con las columnas para la ordenación
        $columns = [
            0 => "id",
            1 => "reference",
            2 => "plate",
            3 => "brand",
            4 => "model"
            ];

        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";

        // searchCranesTable

        $sql = "SELECT 
                    c.id                AS `id`,
                    c.reference         AS `reference`,
                    c.plate             AS `plate`,
                    brand.description   AS `brand`,
                    model.description   AS `model`
                    
                FROM branch_office_crane AS boc
                LEFT JOIN crane AS c ON boc.crane_id = c.id
                LEFT JOIN brand ON brand.id = c.brand_id
                LEFT JOIN model ON model.id = c.model_id
                LEFT JOIN branch_office_operator AS boo ON boc.branch_office_id = boo.branch_office_id
                ";

        // Grúas activas
        /*
        $where = " WHERE boc.date_from <= NOW() AND ( boc.date_to > NOW() OR boc.date_to IS NULL ) 
                    AND boo.date_from <= NOW() AND ( boo.date_to > NOW() OR boo.date_to IS NULL )
                    AND c.creation_date <= NOW() AND ( c.deletion_date > NOW() OR c.deletion_date IS NULL ) ";*/
        $where = " WHERE boc.date_to IS NULL  
                        AND boo.date_to IS NULL 
                        AND c.deletion_date IS NULL  ";

        // Filtro por entidad colaboradora
        if($collaboratorId) {
            $where .= " AND c.collaborator_id = ". $collaboratorId ." ";
        }

        // Filtro por operario
        $where .= " AND boo.operator_id = ". $operatorId ." ";

        // No se muestran las grúas que están ya disponibles para asignar a ese operario
        $where .= " AND c.id NOT IN(SELECT oac.crane_id
                                    FROM operator_available_cranes AS oac
                                    WHERE oac.operator_id = ". $operatorId ." )" ;

        // Filtro por sucursal o tipo de grúa
        if(isset($branchOfficeId) && $branchOfficeId != null && $branchOfficeId != "") {
            $where .= " AND boc.branch_office_id = ". $branchOfficeId ." ";
        } else {

        }

        if(isset($craneTypeId) && $craneTypeId != null && $craneTypeId != "") {
            $where .= " AND c.crane_type_id = ". $craneTypeId ." ";
        }

        $groupBy = " GROUP BY c.id ";

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
                $sqlRec .= " ORDER BY c.reference ASC ";
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
            $queryTot = count($this->conn->executeQuery($sqlTot)->fetchAll(\PDO::FETCH_ASSOC));
            $queryRecordsTot = count($this->conn->executeQuery($sqlRecTot)->fetchAll(\PDO::FETCH_ASSOC));
            $queryRecords = $this->conn->executeQuery($sqlRec)->fetchAll(\PDO::FETCH_ASSOC);

            //Montamos la respuesta
            $json_data = array(
                "draw" => intval($params['draw']),
                "recordsTotal" => intval($queryTot),
                "recordsFiltered" => intval($queryRecordsTot),
                "data" => $queryRecords
            );
        } 
        catch (DBALException $e) 
        {
            $json_data = $e->getMessage();
        }

        return $json_data;
    }
}
