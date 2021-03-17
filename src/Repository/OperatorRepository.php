<?php

namespace App\Repository;

use App\Entity\Operator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method Operator|null find($id, $lockMode = null, $lockVersion = null)
 * @method Operator|null findOneBy(array $criteria, array $orderBy = null)
 * @method Operator[]    findAll()
 * @method Operator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperatorRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Operator::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    // /**
    //  * @return Operator[] Returns an array of Operator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Operator
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof Operator) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    
    /**
     * Función que filtra y rellena la tabla de operarios (operators)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchOperatorsTable($collaboratorId, $params, $branchOfficeId = null)
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
            2 => "mobile_phone",
            3 => "availability_status",
            4 => "assigned_crane",
            5 => "id"
            ];

        $having = $sqlTot = $sqlRec = $sqlRecTot = "";

        // Los operarios activos son las que están entre las fechas creation_date y deletion_date

        //$where = " WHERE (o.creation_date IS NOT NULL AND o.creation_date <=NOW()) AND (o.deletion_date > NOW() OR o.deletion_date IS NULL) ";
        $where = " WHERE o.deletion_date IS NULL ";
        $having = " HAVING TRUE ";

        $groupBy = " GROUP BY o.code ";

        //* Procesamos los filtros

        // Comprobamos en caso de filtar por collaborator
        if( !is_null($collaboratorId) && $collaboratorId != '') {
            $where .= " AND o.collaborator_id = ".$collaboratorId." ";
        }

        // En caso de que $branchOfficeId sea diferente a null
        if( !is_null($branchOfficeId) && $branchOfficeId != '') {
            $where .= " AND branch_office.id = ".$branchOfficeId." ";
        }

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND (o.reference                           LIKE '%".$search_filter."%' 
                       OR o.mobile                                 LIKE '%".$search_filter."%'  
                       OR availability_operator_status.description LIKE '%".$search_filter."%' 
                       OR crane.code                               LIKE '%".$search_filter."%')                
                       ";
        }

        // Filtros específicos
        if (!is_null($form_filters)){
            if (isset($form_filters['reference']) && $form_filters['reference'] != '' ){
                $having .= " AND `reference` LIKE '%".$form_filters["reference"]."%' ";     
            }

            if (isset($form_filters['mobile_phone']) && $form_filters['mobile_phone'] != '' ){
                $having .= " AND `mobile_phone` LIKE '%".$form_filters["mobile_phone"]."%' ";     
            }

            if (isset($form_filters['availability_status']) && $form_filters['availability_status'] != '' ){
                $having .= " AND `availability_status` = ".$form_filters["availability_status"]." ";     
            }

            if (isset($form_filters['assigned_crane']) && $form_filters['assigned_crane'] != '' ){
                $having .= " AND `assigned_crane` LIKE '%".$form_filters["assigned_crane"]."%' ";     
            }
        }
       
        //Montamos la consulta
        $sql = "SELECT                   
                    o.id                                                         AS `id`,
                    o.reference                                                  AS `reference`,
                    o.mobile                                                     AS `mobile_phone`,
                    o.availability_operator_status_id                            AS `availability_status`,
                    crane.reference                                              AS `assigned_crane`
        
                FROM operator AS o
   
                LEFT JOIN crane ON o.crane_id = crane.id
                LEFT JOIN availability_operator_status ON o.availability_operator_status_id = availability_operator_status.id
                LEFT JOIN branch_office_operator ON branch_office_operator.operator_id = o.id AND branch_office_operator.date_from <=NOW() AND (branch_office_operator.date_to > NOW() OR branch_office_operator.date_to IS NULL )
                LEFT JOIN branch_office ON branch_office_operator.branch_office_id = branch_office.id
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
                $sqlRec .= " ORDER BY `reference` ASC";
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
     * Función que devuelve una lista filtrada de operarios (operators)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param integer $collaboratorId   Id de la entidad collaborator del collaboratorUser logueado
     * @param Array   $form_filters     Array de filtros específicos aplicados al listado (Filtros individuales)
     * @param string  $search_filter    Filtro genérico (El de "buscar")
     * @param boolean $toExport         Indica si se va a preparar el resultado para exportar en excel o no
     * @param boolean $addHeader        Indica si se va a mostrar la cabecera de las columnas
     * 
     */
    public function searchOperators($collaboratorId, $form_filters, $search_filter, $toExport = false, $addHeader = true, $branchOfficeId = null)
    {
        $having = $sqlRec = "";

        // Los operarios activos son las que están entre las fechas creation_date y deletion_date
        //$where = " WHERE (o.creation_date IS NOT NULL AND o.creation_date <=NOW()) AND (o.deletion_date > NOW() OR o.deletion_date IS NULL) ";
        $where = " WHERE o.deletion_date IS NULL ";

        $having = "HAVING TRUE ";

        $groupBy = " GROUP BY o.code ";

        //* Procesamos los filtros

        // Comprobamos en caso de filtar por collaborator
        if( !is_null($collaboratorId) && $collaboratorId != '') {
            $where .= " AND o.collaborator_id = ".$collaboratorId." ";
        }

        // En caso de que $branchOfficeId sea diferente a null
        if( !is_null($branchOfficeId) && $branchOfficeId != '') {
            $where .= " AND branch_office.id = ".$branchOfficeId." ";
        }

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND (o.reference                           LIKE '%".$search_filter."%' 
                       OR o.mobile                                 LIKE '%".$search_filter."%'  
                       OR availability_operator_status.description LIKE '%".$search_filter."%' 
                       OR crane.code                               LIKE '%".$search_filter."%')                
                       ";
        }

        // Filtros específicos
        if( !is_null($form_filters) && $form_filters != '') {
            foreach ($form_filters as $filter) {
                if( !is_null($filter['value']) && trim($filter['value']) != '') {
                    if( $filter['name'] == "availability_status") {
                        // where
                        $where .= " AND o.availability_operator_status_id LIKE '%".$filter['value']."%' ";
                    } else {
                        // having
                        $having .= " AND ".$filter['name']." LIKE '%".$filter['value']."%' ";
                    }
                }
            }
        }
       
        //Montamos la consulta
        $sql = "SELECT                   
                    o.reference                                                  AS `reference`,
                    o.mobile                                                     AS `mobile_phone`,
                    availability_operator_status.description                     AS `availability_status`,
                    crane.code                                                   AS `assigned_crane`
        
                FROM operator AS o
   
                LEFT JOIN crane ON o.crane_id = crane.id
                LEFT JOIN availability_operator_status ON o.availability_operator_status_id = availability_operator_status.id
                LEFT JOIN branch_office_operator ON branch_office_operator.operator_id = o.id AND branch_office_operator.date_from <=NOW() AND (branch_office_operator.date_to > NOW() OR branch_office_operator.date_to IS NULL )
                LEFT JOIN branch_office ON branch_office_operator.branch_office_id = branch_office.id
                ";

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
            $sqlRec .= " ORDER BY `reference` ASC";
            
            //Ejecutamos las consultas
            $queryRecords = $this->conn->executeQuery($sqlRec)->fetchAll(\PDO::FETCH_ASSOC);
            $data = $queryRecords;

            //Montamos la respuesta
            if($toExport) {
                $fixedData = array();
                foreach($data as $line) {
                    array_push($fixedData, array_values($line));
                }
                
                if($addHeader) {
                    $header = array('Identificador', 'Móvil', 'Disponibilidad', 'Grúa asignada');
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
     * Obtiene los operarios de un colaborador (entidad colaboradora)
     * 
     * @param string    $collaboratorId        String con la ID del colaborador
     * @param boolean   $onlyActiveOperators   True para solo seleccionar los operarios activos
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getArrayOperatorsByCollaborator($collaboratorId, $onlyActiveOperators = false){
        $sql = "SELECT o.id AS `id`,
                       o.reference AS `reference`
                
                FROM operator AS o
                ";

        $where = " WHERE o.collaborator_id = :collaborator_id ";
        
        // Operarios que no han sido dados de baja
        $where .= " AND (o.creation_date IS NOT NULL AND o.creation_date <= NOW()) AND (o.deletion_date > NOW() OR o.deletion_date IS NULL) ";
        
        $orderBy = " ORDER BY o.reference ASC ";
        
        // Solo operarios activos
        if($onlyActiveOperators) {
            $where .= " AND o.operator_status_id = 1 ";
        }

        $sql = $sql . $where . $orderBy;

        $parameters = [];

        $parameters['collaborator_id'] = $collaboratorId;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_ASSOC);
        return $queryRecords;
    }

    /**
     * Obtiene los operarios por sucursal
     * 
     * @param string    $branchOfficeId        String con la ID de la sucursal
     * @param boolean   $onlyActiveOperators   True para solo seleccionar los operarios activos
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getArrayOperatorsByBranchOffice($branchOfficeId, $onlyActiveOperators = false){
        $sql = "SELECT o.id AS `id`,
                       o.reference AS `reference`
                
                FROM operator AS o
                LEFT JOIN branch_office_operator AS boo ON boo.operator_id = o.id
                ";

        $where = " WHERE boo.branch_office_id = :branch_office_id ";
        
        // Operarios que no han sido dados de baja
        $where .= " AND (o.creation_date IS NOT NULL AND o.creation_date <= NOW()) AND (o.deletion_date > NOW() OR o.deletion_date IS NULL) ";
        
        // Operarios cuya asignación con la sucursal de ID "branchOfficeId" no haya expirado
        $where .= " AND (boo.date_from IS NOT NULL AND boo.date_from <= NOW()) AND (boo.date_to > NOW() OR boo.date_to IS NULL) ";

        $orderBy = " ORDER BY o.reference ASC ";
        
        // Solo operarios activos
        if($onlyActiveOperators) {
            $where .= " AND o.operator_status_id = 1 ";
        }

        $sql = $sql . $where . $orderBy;

        $parameters = [];

        $parameters['branch_office_id'] = $branchOfficeId;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_ASSOC);
        return $queryRecords;
    }


    /**
     * Busca otros operadores en estado activo que compartan la misma grua
     * 
     * @param Operator    $operator    Operador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function findOtherActiveOperatorSameCrane(Operator $operator){
        $sql = "SELECT o.id AS `id`,
                       o.reference AS `reference`
                FROM operator AS o
                LEFT JOIN availability_operator_status AS aos ON o.availability_operator_status_id = aos.id 
                WHERE o.id <> :operator_id AND 
                      o.deletion_date IS NULL AND 
                      o.crane_id = :crane_id AND 
                      aos.code = 'available' ";
        
       
        
        $parameters = [];
        $parameters['operator_id'] = $operator->getId();
        $parameters['crane_id'] = $operator->getCrane()->getId();

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_ASSOC);
        return $queryRecords;
    }

}
