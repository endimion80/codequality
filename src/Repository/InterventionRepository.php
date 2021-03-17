<?php

namespace App\Repository;

use App\Entity\Intervention;
use App\Entity\Operator;
use App\Entity\Phase;
use Doctrine\DBAL\DBALException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\Utils\LogService;
use PDO;

/**
 * @method Intervention|null find($id, $lockMode = null, $lockVersion = null)
 * @method Intervention|null findOneBy(array $criteria, array $orderBy = null)
 * @method Intervention[]    findAll()
 * @method Intervention[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterventionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em,LogService $logService)
    {
        parent::__construct($registry, Intervention::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
        $this->logService = $logService;
    }

    /**
     * Obtenemos un el servicio Activo
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - Operador
     * @param boolean $getEntity - Si está a true devuelve la entidad
     * @return int Devuelve el id de la intervención, o nulo si no tiene ninguna
     */
    public function getActiveInterventionForOperator(Operator $operator, $getEntity = false){

        $sql = "SELECT i.*
                FROM intervention AS i 
                LEFT JOIN phase AS p ON i.phase_id = p.id
                LEFT JOIN intervention_status AS st ON i.intervention_status_id = st.id
                WHERE   i.operator_id = :operator AND
                        st.code = 'F' AND 
                        p.code IN (
                            'servicio_iniciado',
                            'en_transito_recogida',
                            'en_transito_entrega',
                            'vh_localizado',
                            'servicio_fallido',
                            'inicio_albaran_no_ris',
                            'inicio_albaran_ris',
                            'firma_albaran',
                            'vh_no_cargado',
                            'vh_cargado',
                            'entrega_destino',
                            'firma_albaran_revision')
                LIMIT 0,1
                ";
              
        $parameters = [];
        $parameters['operator'] = $operator->getId();
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
                 
        if (count($queryRecords)){
            if (!$getEntity)
                return $queryRecords[0]['id'];
            else 
                return $this->em->getRepository('App:Intervention')->findOneById($queryRecords[0]['id']);
        }
        return null;
    }

    /**
     * Obtiene si tiene un servicio activo pendiente de aceptación
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - Operador
     * @return array Devuelve la misma estructura que la notificación y es para 
     * que se le muestre en la app la ventana de aceptación
     */
    public function getInterventionToAcceptForOperator(Operator $operator){
        $now = new \DateTime();
        $sql = "SELECT i.*
                FROM intervention AS i 
                LEFT JOIN phase AS p ON i.phase_id = p.id
                LEFT JOIN intervention_status AS st ON i.intervention_status_id = st.id
                WHERE   i.operator_id = :operator AND
                        st.code = 'C' AND 
                        p.code = 'pte_asignar' AND
                        i.end_confirm_date > :dateNow
                LIMIT 0,1";

              
        $parameters = [];
        $parameters['operator'] = $operator->getId();
        $parameters['dateNow'] = $now->format('Y-m-d H:i:s');
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
               
        if (count($queryRecords)){
            $intervention = $this->em->getRepository('App:Intervention')->findOneById($queryRecords[0]['id']);

            $title = 'Nueva intervencion disponible';
            $message = 'Intervencion #' .  $intervention->getCode();
            $data = array('intervention_id' => $intervention->getId(),
                            'init_confirm_date' => $intervention->getInitConfirmDate()->format('Y/m/d H:i:s'),
                            'end_confirm_date' => $intervention->getEndConfirmDate()->format('Y/m/d H:i:s') );
            
            $result = array('title'=>$title, 
                            'message'=>$message, 
                            'data'=>$data);
        }
        else{
            $result = array();
        }
        return $result;
    }


    /**
     * Obtiene el listado de intervenciones que no se han aceptado dentro del tiempo límite
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array intervenciones id
     * que se le muestre en la app la ventana de aceptación
     */
    public function getInterventionExpiredToAcceptForOperator(){
        $now = new \DateTime();
        $sql = "SELECT i.*
                FROM intervention AS i 
                LEFT JOIN phase AS p ON i.phase_id = p.id
                LEFT JOIN intervention_status AS st ON i.intervention_status_id = st.id
                WHERE   st.code = 'C' AND 
                        p.code = 'pte_asignar' AND
                        i.end_confirm_date < '".$now->format('Y-m-d H:i:s')."'
                ";
              
        $parameters = [];
        //$this->logService->log( $sql);
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
        return $queryRecords;
        /*
        if (count($queryRecords)){
            $intervention = $this->em->getRepository('App:Intervention')->findOneById($queryRecords[0]['id']);

            $title = 'Nueva intervencion disponible';
            $message = 'Intervencion #' .  $intervention->getCode();
            $data = array('intervention_id' => $intervention->getId(),
                            'init_confirm_date' => $intervention->getInitConfirmDate()->format('Y/m/d H:i:s'),
                            'end_confirm_date' => $intervention->getEndConfirmDate()->format('Y/m/d H:i:s') );
            
            $result = array('title'=>$title, 
                            'message'=>$message, 
                            'data'=>$data);
        }
        else{
            $result = array();
        }
        return $result;*/
    }

     /**
     * Descargar listado de intervenciones de un usuario
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - Operador
     * @param \DateTime $initDate - Fecha inicio creación
     * @param \DateTime $endDate - Fecha fin creación
     * @param string $phases - Codigo de la fase a filtrar (puede estar a '' y no filtramos), puede estar separado por comas
     * @param string $search - Campo de texto a filtrar (puede estar a '' y no filtramos), aun por definir qué vamos a filtrar
     * @return array Array con el listado filtrado
     */
    public function getInterventionList(Operator $operator,
                                        \DateTime $initDate,
                                        \DateTime $endDate,
                                        $phases = [], 
                                        $search = ''){

        $sql = "SELECT  i.id AS intervention_id,
                        CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                        DATE_FORMAT(i.request_date, '%d/%m %H:%i') AS request_date_string,
                        i.request_date AS request_date,
                        c.name AS company,
                        p.code AS 'phase'
                FROM intervention AS i 
                LEFT JOIN collaborator AS c ON c.id = i.collaborator_id
                LEFT JOIN phase AS p ON i.phase_id = p.id
                LEFT JOIN intervention_status AS st ON i.intervention_status_id = st.id
                WHERE   i.operator_id = :operator AND
                        i.request_date BETWEEN :initDate AND :endDate ";
        
        $parameters = [];

        if (count($phases)){
            $phases_string = "'".implode ("','", $phases)."'";   
            $sql .= "AND p.code IN ( ".$phases_string." ) ";
        }

        if (!is_null($search) && $search != ''){
            $sql .= "AND i.reference LIKE '%".$search."%' ";
        }
        $parameters['operator'] = $operator->getId();
        $parameters['initDate'] = $initDate->format('Y-m-d');
        $parameters['endDate'] = $endDate->format('Y-m-d');
        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
        return $queryRecords;
    }

     /**
     * Descargar listado de intervenciones rechazadas de un usuario
     * Realmente a dia de hoy no sé si cuando se rechace una intervención
     * se reasiganará esa misma, o crearán una nueva.
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - Operador
     * @param \DateTime $initDate - Fecha inicio creación
     * @param \DateTime $endDate - Fecha fin creación
     * @param string $search - Campo de texto a filtrar (puede estar a '' y no filtramos), aun por definir qué vamos a filtrar
     * @return array Array con el listado filtrado
     */
    public function getInterventionRefuseList(Operator $operator,
                                                \DateTime $initDate,
                                                \DateTime $endDate,
                                                $search = ''){

        $sql = "SELECT  i.id AS intervention_id,
                        CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                        DATE_FORMAT(i.request_date, '%d/%m %H:%i') AS request_date_string,
                        i.request_date AS request_date,
                        c.name AS company,
                        p.code AS 'phase'
                FROM intervention AS i 
                LEFT JOIN collaborator AS c ON c.id = i.collaborator_id
                LEFT JOIN phase AS p ON i.phase_id = p.id
                LEFT JOIN intervention_status AS st ON i.intervention_status_id = st.id
                WHERE   i.operator_id = :operator AND
                        i.request_date BETWEEN :initDate AND :endDate AND 
                        st.code = 'R' AND
                        p.code IN ( 'servicio_finalizado','servicio_cerrado' )  ";
        
        $parameters = [];

        if (!is_null($search) && $search != ''){
            $sql .= "AND i.reference LIKE '%".$search."%' ";
        }
         
        $parameters['operator'] = $operator->getId();
        $parameters['initDate'] = $initDate->format('Y-m-d');
        $parameters['endDate'] = $endDate->format('Y-m-d');
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
        return $queryRecords;
    }

    /**
     * Obtiene los detalles de la intervención para la app
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention) - Intervencion
     * @return array Array con los detalles
     */
    public function getInterventionDetails(Intervention $intervention){
        #i.reference AS reference,
        $sql = "SELECT  i.id AS intervention_id,
                        p.code AS 'phase',
                        CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                        i.request_date AS request_date,
                        c.name AS company,
                        i.crane_id AS 'crane_id',
	                    i.collaborator_id AS 'collaborator_id',
	                    i.operator_id AS 'operator_id',
	                    i.is_ris AS 'is_ris',
	                    i.sinister_type_id AS 'sinister_type_id',
                        sit.description AS 'sinister_type_description',
	                    i.sinister_type_extension_id AS 'sinister_type_extension_id',
                        sitex.description AS sinister_type_extension_description,
	                    i.failure_type_id AS 'failure_type_id',
                        ft.description AS  'failure_type_description',
	                    i.failure_cause_type_id AS 'failure_cause_type_id',
                        fct.description AS 'failure_cause_type_description',
	                    i.ris_cause_id AS 'ris_cause_id',
                        rc.description AS 'ris_cause_description',
	                    i.vh_type_id AS 'vh_type_id',
                        vht.name AS 'vh_type_description',
                        i.vh_brand_id AS 'vh_brand_id',
                        vhb.name AS 'vh_brand_description',
                        i.vh_model_id AS 'vh_model_id',
                        vhm.name AS 'vh_model_description', 
	                    i.collaborator_service_id AS 'collaborator_service_id',
                        cs.description AS 'collaborator_service_description',
                        i.insurance_entity_id AS 'insurance_entity_id',
                        ie.name AS 'insurance_entity_description',
	                    i.vh_province_id AS 'vh_province_id',
                        pr_ori.name  AS 'vh_province_description',
    	                i.vh_town_id AS 'vh_town_id',
                        tw_ori.name AS 'vh_town_name',
	                    i.destination_province_id AS 'destination_province_id',
                        pr_des.name  AS 'destination_province_description',
	                    i.destination_town_id AS 'destination_town_id',
                        tw_des.name AS 'destination_town_description',
	                    i.reception_date AS 'reception_date',
	                    i.request_type AS 'request_type',
	                    i.caller_name AS 'caller_name',
	                    i.caller_lastname AS 'caller_lastname',
	                    i.caller_phone AS 'caller_phone',
	                    i.vh_plate AS 'vh_plate',
	                    i.vh_address AS 'vh_address',
	                    i.vh_zipcode AS 'vh_zipcode',
	                    i.vh_latitude AS 'vh_latitude',
	                    i.vh_longitude AS 'vh_longitude',
	                    i.vh_parking AS 'vh_parking',
                        if (i.vh_parking, 'Parking Subterráneo','') AS 'vh_parking_description',
	                    i.vh_comments AS 'vh_comments',
	                    i.failure_description AS 'failure_description',
	                    i.possible_ris AS 'possible_ris',
	                    i.destination_name AS 'destination_name',
	                    i.destination_address AS 'destination_address',
	                    i.destination_zipcode AS 'destination_zipcode',
	                    i.km AS 'km',
	                    i.fuel AS 'fuel',
	                    i.companion AS 'companion',
	                    i.phase_id AS 'phase_id',
	                    i.init_confirm_date AS 'init_confirm_date',
	                    i.end_confirm_date AS 'end_confirm_date',
                        i.destination_incidence AS 'destination_incidence',
                        i.repair_description AS 'repair_description',
                        i.destination_type AS 'destination_type',
                        i.signer_name AS 'signer_name',
                        i.signer_phone AS 'signer_phone',
                        i.signer_email AS 'signer_email',
                        i.equipment_and_objects AS 'equipment_and_objects',
                        i.dirty_vh AS 'dirty_vh',
                        i.scratches_on_vh AS 'scratches_on_vh',
                        i.signer_acknowledges_scratches AS 'signer_acknowledges_scratches',
                        i.signer_is_companion AS 'signer_is_companion',
                        i.delivery_name AS 'delivery_name',
                        i.delivery_address AS 'delivery_address',
                        i.delivery_phone AS 'delivery_phone',
                        i.delivery_latitude AS 'delivery_latitude',
                        i.delivery_longitude AS 'delivery_longitude',
                        i.signer_dni AS 'signer_dni',
                        i.receiver_is_located AS 'receiver_is_located',
                        i.receiver_name AS 'receiver_name',
                        i.receiver_email AS 'receiver_email',
                        i.km_check AS 'km_check',
                        i.fuel_check AS 'fuel_check',
                        i.equipment_and_objects_check AS 'equipment_and_objects_check',
                        i.dirty_vh_check AS 'dirty_vh_check',
                        i.scratches_on_vh_check AS 'scratches_on_vh_check',
                        i.receiver_dni AS 'receiver_dni',
                        IF(wl.id IS NOT NULL,wl.description , IF(i.vh_lock,'Vehículo bloqueado','Vehículo NO bloqueado') ) AS 'wheel_lock_description',
                        i.vh_color AS 'vh_color',
                        'nAlbarán' AS 'deliveryNote_label',
                        cr.reference AS 'crane_label',
                        op.reference AS 'operator_label',
                        i.vh_situation AS 'vh_situation'
                FROM intervention AS i 
                LEFT JOIN collaborator AS c ON c.id = i.collaborator_id
                LEFT JOIN phase AS p ON i.phase_id = p.id
                LEFT JOIN intervention_status AS st ON i.intervention_status_id = st.id
                LEFT JOIN sinister_type AS sit ON sit.id = i.sinister_type_id 
                LEFT JOIN sinister_type_extension AS sitex ON sitex.id = i.sinister_type_extension_id 
                LEFT JOIN failure_type AS ft ON ft.id = i.failure_type_id
                LEFT JOIN failure_cause_type AS fct ON fct.id = i.failure_cause_type_id
                LEFT JOIN riscause AS rc ON rc.id = i.ris_cause_id
                LEFT JOIN vh_type AS vht ON vht.id = vh_type_id
                LEFT JOIN vh_brand AS vhb ON vhb.id = vh_brand_id
                LEFT JOIN vh_model AS vhm ON vhm.id = vh_model_id
                LEFT JOIN collaborator_service AS cs ON cs.id = i.collaborator_service_id
                LEFT JOIN insurance_entity AS ie ON ie.id = i.insurance_entity_id
                LEFT JOIN province AS pr_ori ON pr_ori.id = i.vh_province_id
                LEFT JOIN town AS tw_ori ON tw_ori.id = i.vh_town_id
                LEFT JOIN province AS pr_des ON pr_des.id = i.destination_province_id
                LEFT JOIN town AS tw_des ON tw_des.id = i.destination_town_id
                LEFT JOIN wheel_lock AS wl ON wl.id = i.wheel_lock_id
                LEFT JOIN crane AS cr ON cr.id = i.crane_id
                LEFT JOIN operator AS op ON op.id = i.operator_id
                WHERE   i.id = :intervention  ";
        
        $parameters = [];

        $parameters['intervention'] = $intervention->getId();
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

        $result = $queryRecords[0];

        // hacemos el cambio para el control de la app: 
        switch($result['destination_type']){
            case '00000001': $$result['destination_type'] = "base"; break;
            case '00000002': $$result['destination_type'] = "taller"; break;
            case '00000003': $$result['destination_type'] = "domicilio"; break;
        }

        return $result;
    }


    /**
     * Obtenemos el número de fases en el log de una intervencion
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention - Intervencion
     * @param Phase $phase - Fase
     * @return int nº de ocurrencias
     */
    public function getNPhasesInHistoryLog(Intervention $intervention, Phase $phase){

        $sql = "SELECT COUNT(id) AS result
                FROM phase_log AS pl 
                WHERE   pl.phase_id = :phase_id AND 
                        pl.intervention_id = :intervention_id ";
              
        $parameters = [];
        $parameters['phase_id'] = $phase->getId();
        $parameters['intervention_id'] = $intervention->getId();
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
                 
        if (!is_null($queryRecords)){
            return $queryRecords[0]['result'];
        }
        return 0;
    }

   /**
     * Obtiene el ultimo registro de log de una fase por su código
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention - Intervencion
     * @param string $phaseCode - Código de la Fase
     * @return PhaseLog o null
     */
    public function getLastPhaseLogOfIntervention(Intervention $intervention, string $phaseCode){

        $sql = "SELECT pl.id AS id
                FROM phase_log AS pl 
                LEFT JOIN phase AS ph ON ph.id = pl.phase_id 
                WHERE   ph.code = :phase_code  AND 
                        pl.intervention_id = :intervention_id 
                ORDER BY pl.creation_date DESC
                LIMIT 0,1";
              
        $parameters = [];
        $parameters['phase_code'] = $phaseCode;
        $parameters['intervention_id'] = $intervention->getId();
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
                 
        if (count($queryRecords)){
            $id_phase_log = $queryRecords[0]['id'];
            return $this->em->getRepository('App:PhaseLog')->findOneById($id_phase_log);
        }
        return null;
    }


    /**
     * Función que filtra y rellena la tabla de intervenciones
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDataTable($collaboratorUser, $collaborator, $params)
    {
        $form_filters = null;
        $search_filter = null; 
        $parameters = [];

        if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $form_filters = $search['form_filters'];
            $search_filter = $search['search_filter'];
            $type = $search['type'];
        }
        else{
             $type = $params['type'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "i.id",
            1 => "i.reference",
            2 => "i.reception_date",
            3 => "pl.creation_date",
            4 => "i.vh_address",
            5 => "ft.failure_type",
            6 => "i.is_ris",
            7 => "i.request_type ",
            ];

        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " HAVING TRUE ";
        $groupBy = " GROUP BY i.id ";
        
        $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
       
        //Montamos la consulta
        $sql = "SELECT
                    i.id AS 'id',
                    CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                    DATE_FORMAT(i.reception_date, '".$dateFormatSql."') AS 'reception_date',
                    ft.description AS 'failure_type',
                    IF (i.is_ris, 'RIS', 'No RIS') AS 'is_ris',
                    i.request_type AS 'request_type',
                    (   SELECT DATE_FORMAT(pl2.creation_date, '".$dateFormatSql."')
                        FROM phase_log AS pl2 
                        LEFT JOIN phase AS ph2 ON pl2.phase_id = ph2.id
                        WHERE i.id  = pl2.intervention_id AND ph2.code = 'vh_localizado'
                        LIMIT 0,1 ) AS 'located_Vh_Date',
                    i.vh_address AS 'vh_address',
                    i.vh_zipcode AS 'vh_zipcode'
                FROM intervention AS i 
                LEFT JOIN intervention_status AS ist ON i.intervention_status_id = ist.id
                LEFT JOIN failure_type AS ft ON i.failure_type_id  = ft.id
                LEFT JOIN phase AS ph ON i.phase_id = ph.id
                ";
                // GROUP BY i.id

        // filtramso por las de ese colaborador
        if( !is_null($collaborator)) {
            $where .= " AND i.collaborator_id = ".$collaborator->getId()." ";
        }
        

        // Filtrado por tipo de tabla: 
        switch($type){
            case 'PendingClose':
                // pte de comunicar o finalizada la asignacion
                $where .= " AND ist.code IN ('C','F') ";    
                // Que no estén finalizados
                $where .= " AND ph.code NOT IN ('servicio_finalizado') ";    
                // Que no hayan sido fallidos
                $where .= " AND i.id NOT IN (SELECT i3.id AS 'id'
                                            FROM intervention AS i3 
                                            LEFT JOIN phase_log AS phl3 ON i3.id = phl3.intervention_id
                                            LEFT JOIN phase AS ph3 ON phl3.phase_id = ph3.id
                                            WHERE ph3.code IN ('servicio_fallido') ) "; 
                break;
            case 'PendingFinish':
                // pte de comunicar o finalizada la asignacion
                $where .= " AND ist.code IN ('F') ";    
                // Que no estén finalizados
                $where .= " AND ph.code IN ('servicio_finalizado') ";    
            
            case '': break;// TODO tienen que validarlo a fecha 20/10/2020
        }

        if (!is_null($form_filters)){
            if (isset($form_filters['id']) && $form_filters['id'] != '' ){
                $where .= " AND i.id = :id ";    
                $parameters['id'] = $form_filters['id'];
            }

            if (isset($form_filters['reference']) && $form_filters['reference'] != '' ){
                $where .= " AND i.reference = :reference ";     
                $parameters['reference'] =  str_replace("/", "", $form_filters['reference']);
            }

            if (isset($form_filters['reception_date']) && $form_filters['reception_date'] != '' ){
                $where .= " AND i.reception_date LIKE '%" . $form_filters['reception_date'] . "%' ";     
            }

            if (isset($form_filters['vh_address']) && $form_filters['vh_address'] != '' ){
                $where .= " AND i.vh_address = :vh_address ";     
                $parameters['vh_address'] = $form_filters['vh_address'];
            }

            if (isset($form_filters['failure_type']) && $form_filters['failure_type'] != '' ){
                $where .= " AND ft.id = :failure_type ";     
                $parameters['failure_type'] = $form_filters['failure_type'];
            }

            if (isset($form_filters['is_ris']) && $form_filters['is_ris'] != '' ){
                $where .= " AND i.is_ris = :is_ris ";     
                $parameters['is_ris'] = $form_filters['is_ris'];
            }

            if (isset($form_filters['request_type']) && $form_filters['request_type'] != '' ){
                $where .= " AND i.request_type = :request_type ";     
                $parameters['request_type'] = $form_filters['request_type'];
            }
        }

        if (!is_null($search_filter) && $search_filter != ''){
            $where .= " AND ( i.id LIKE '%". $search_filter ."%' OR 
                            i.reference LIKE '%". $search_filter ."%' OR 
                            i.reception_date LIKE '%". $search_filter ."%' OR 
                            i.vh_address LIKE '%". $search_filter ."%' OR 
                            i.request_type LIKE '%". $search_filter ."%' 
                            )";  
        }

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
                $sqlRec .= " ORDER BY 'reference' ASC";
            }
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

        //return var_dump($sqlRec);

            //Ejecutamos las consultas  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sqlTot);
            $qr->execute();
            $queryTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRecTot);
            $qr->execute($parameters);
            $queryRecordsTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRec);
            $qr->execute($parameters);
            $data = $qr->fetchAll(PDO::FETCH_ASSOC);
          
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
     * Función que extrae la información para la exportación en excel
     * @param CollaboratorUser $collaboratorUser  Usuario logueado
     * @param array $interventionList  Listado de intervenciones a exportar
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDataTableExcelExport($collaboratorUser, $interventionList){
        $listInterventionImplode = "'".implode("','", $interventionList)."'"; 
        $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
       
        //Montamos la consulta
        $sql = "SELECT  i.id AS 'id',
                        CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                        DATE_FORMAT(i.reception_date, '".$dateFormatSql."') AS 'reception_date',
                        (   SELECT DATE_FORMAT(pl2.creation_date, '".$dateFormatSql."')
                            FROM phase_log AS pl2 
                            LEFT JOIN phase AS ph2 ON pl2.phase_id = ph2.id
                            WHERE i.id  = pl2.intervention_id AND ph2.code = 'vh_localizado'
                            LIMIT 0,1 ) AS 'located_Vh_Date',
                        i.vh_address AS 'vh_address',
                        ft.description AS 'failure_type',
                        IF (i.is_ris, 'RIS', 'No RIS') AS 'is_ris',
                        i.request_type AS 'request_type' 
                FROM intervention AS i 
                LEFT JOIN intervention_status AS ist ON i.intervention_status_id = ist.id
                LEFT JOIN failure_type AS ft ON i.failure_type_id  = ft.id
                LEFT JOIN phase AS ph ON i.phase_id = ph.id
                WHERE i.collaborator_id = :collaborator_id AND 
                        i.id IN (".$listInterventionImplode.")
                GROUP BY i.id  
                ORDER BY 'reference' ASC
                ";
                
        $parameters['collaborator_id'] = $collaboratorUser->getCollaborator()->getId();
 
        try {            
            //Ejecutamos la consulta  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sql);
            $qr->execute($parameters);
            $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
            
            $headers = array(array('id',
                                    'Expediente',
                                    'Fecha y hora de solicitud',
                                    'Fecha y hora de localización',
                                    'Dirección de localización',
                                    'Avería',
                                    'Tipos de Asistencia',
                                    'Solicitud'));
            return array_merge($headers, $queryRecords);
        } 
        catch (DBALException $e) 
        {
            return array($json_data = $e->getMessage());
        }

        return array();
    }


    /**
     * Función que filtra y rellena la tabla de intervenciones en la seccion
     * de reporting
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDataTableReporting($collaboratorUser, $params)
    {
        $form_filters = null;
        $search_filter = null; 
        $parameters = [];

        $collaborator = $collaboratorUser->getCollaborator();

        if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $form_filters = $search['form_filters'];
            $search_filter = $search['search_filter'];
            $type = $search['type'];
        }
        else{
             $type = $params['type'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "i.id",
            1 => "i.reference",
            2 => "i.reception_date",
            3 => "date_last_update",
            4 => "tw.name",
            5 => "i.distance",
            6 => "i.is_ris",
            7 => "ist.description",
            8 => "cmt.description",
            ];

        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " HAVING TRUE ";
        $groupBy = " GROUP BY i.id ";
        
        $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
       
        //Montamos la consulta
        $sql = "SELECT
                    i.id AS 'id',
                    CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                    DATE_FORMAT(i.reception_date, '".$dateFormatSql."') AS 'reception_date',

                    (   SELECT DATE_FORMAT(pl2.creation_date, '".$dateFormatSql."')
                        FROM phase_log AS pl2 
                        LEFT JOIN phase AS ph2 ON pl2.phase_id = ph2.id
                        WHERE i.id  = pl2.intervention_id
                        ORDER BY pl2.creation_date DESC
                        LIMIT 0,1 ) AS 'date_last_update',
                    tw.name AS 'town',
                    i.distance AS 'distance',
                    IF (i.is_ris, 'RIS', 'No RIS') AS 'is_ris',
                    cmt.description AS 'crane_management_type',
                    ist.description AS 'intervention_status',
                    ph.description AS 'phase'
                FROM intervention AS i 
                LEFT JOIN intervention_status AS ist ON i.intervention_status_id = ist.id
                LEFT JOIN phase AS ph ON i.phase_id = ph.id
                LEFT JOIN town AS tw ON i.vh_town_id = tw.id 
                LEFT JOIN crane AS cr ON cr.id = i.crane_id
                LEFT JOIN crane_management_type AS cmt ON cmt.id = cr.management_type_id
                ";
                // GROUP BY i.id

        // filtramso por las de ese colaborador
        if( !is_null($collaborator)) {
            $where .= " AND i.collaborator_id = ".$collaborator->getId()." ";
        }
        
        /*

        // Filtrado por tipo de tabla: 
        switch($type){
            case 'PendingClose':
                // pte de comunicar o finalizada la asignacion
                $where .= " AND ist.code IN ('C','F') ";    
                // Que no estén finalizados
                $where .= " AND ph.code NOT IN ('servicio_finalizado') ";    
                // Que no hayan sido fallidos
                $where .= " AND i.id NOT IN (SELECT i3.id AS 'id'
                                            FROM intervention AS i3 
                                            LEFT JOIN phase_log AS phl3 ON i3.id = phl3.intervention_id
                                            LEFT JOIN phase AS ph3 ON phl3.phase_id = ph3.id
                                            WHERE ph3.code IN ('servicio_fallido') ) "; 
                break;
            case 'PendingFinish':
                // pte de comunicar o finalizada la asignacion
                $where .= " AND ist.code IN ('F') ";    
                // Que no estén finalizados
                $where .= " AND ph.code IN ('servicio_finalizado') ";    
            
            case '': break;// TODO tienen que validarlo a fecha 20/10/2020
        }
        */
        if (!is_null($form_filters)){
            if (isset($form_filters['id']) && $form_filters['id'] != '' ){
                $where .= " AND i.id = :id ";    
                $parameters['id'] = $form_filters['id'];
            }

            if (isset($form_filters['reference']) && $form_filters['reference'] != '' ){
                $where .= " AND i.reference = :reference ";     
                $parameters['reference'] = str_replace("/", "", $form_filters['reference']);
            }

            if (isset($form_filters['reception_date']) && $form_filters['reception_date'] != '' ){
                $where .= " AND i.reception_date LIKE '%" . $form_filters['reception_date'] . "%' ";     
            }

            if (isset($form_filters['town']) && $form_filters['town'] != '' ){
                $where .= " AND tw.name = :town ";     
                $parameters['town'] = $form_filters['town'];
            }

            if (isset($form_filters['management_type']) && $form_filters['management_type'] != '' ){
                $where .= " AND cmt.id = :management_type ";     
                $parameters['management_type'] = $form_filters['management_type'];
            } 

            if (isset($form_filters['is_ris']) && $form_filters['is_ris'] != '' ){
                $where .= " AND i.is_ris = :is_ris ";     
                $parameters['is_ris'] = $form_filters['is_ris'];
            }

            if (isset($form_filters['intervention_status']) && $form_filters['intervention_status'] != '' ){
                $where .= " AND ist.id = :intervention_status ";     
                $parameters['intervention_status'] = $form_filters['intervention_status'];
            } 

            
        }
        
        if (!is_null($search_filter) && $search_filter != ''){
            $where .= " AND ( i.id LIKE '%". $search_filter ."%' OR 
                            i.reference LIKE '%". $search_filter ."%' OR 
                            i.reception_date LIKE '%". $search_filter ."%' OR 
                            i.vh_address LIKE '%". $search_filter ."%' OR 
                            i.request_type LIKE '%". $search_filter ."%' OR 
                            tw.name LIKE '%". $search_filter ."%' OR 
                            ist.description LIKE '%". $search_filter ."%' 
                            )";  
        }
        
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
                $sqlRec .= " ORDER BY 'i.id' DESC";
            }
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

        //return var_dump($sqlRec);

            //Ejecutamos las consultas  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sqlTot);
            $qr->execute();
            $queryTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRecTot);
            $qr->execute($parameters);
            $queryRecordsTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRec);
            $qr->execute($parameters);
            $data = $qr->fetchAll(PDO::FETCH_ASSOC);
          
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
     * Función que extrae la información para la exportación en excel
     * @param CollaboratorUser $collaboratorUser  Usuario logueado
     * @param array $interventionList  Listado de intervenciones a exportar
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDataTableReportingExcelExport($collaboratorUser, $interventionList){
        $listInterventionImplode = "'".implode("','", $interventionList)."'"; 
        $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
       
        //Montamos la consulta
        $sql = "SELECT
                    i.id AS 'id',
                    CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                    DATE_FORMAT(i.reception_date, '".$dateFormatSql."') AS 'reception_date',

                    (   SELECT DATE_FORMAT(pl2.creation_date, '".$dateFormatSql."')
                        FROM phase_log AS pl2 
                        LEFT JOIN phase AS ph2 ON pl2.phase_id = ph2.id
                        WHERE i.id  = pl2.intervention_id
                        ORDER BY pl2.creation_date DESC
                        LIMIT 0,1 ) AS 'date_last_update',
                    tw.name AS 'town',
                    i.distance AS 'distance',
                    IF (i.is_ris, 'RIS', 'No RIS') AS 'is_ris',
                    cmt.description AS 'crane_management_type',
                    ist.description AS 'intervention_status'
                FROM intervention AS i 
                LEFT JOIN intervention_status AS ist ON i.intervention_status_id = ist.id
                LEFT JOIN phase AS ph ON i.phase_id = ph.id
                LEFT JOIN town AS tw ON i.vh_town_id = tw.id 
                LEFT JOIN crane AS cr ON cr.id = i.crane_id
                LEFT JOIN crane_management_type AS cmt ON cmt.id = cr.management_type_id
                WHERE i.collaborator_id = :collaborator_id AND 
                        i.id IN (".$listInterventionImplode.")
                GROUP BY i.id";
                
        $parameters['collaborator_id'] = $collaboratorUser->getCollaborator()->getId();
 
        try {            
            //Ejecutamos la consulta  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sql);
            $qr->execute($parameters);
            $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
            
            $headers = array(array('id',
                                    'Nº Expediente',
                                    'Fecha desde',
                                    'Fecha hasta',
                                    'Localidad',
                                    'Km Recorridos',
                                    'RIS',
                                    'Tipo RIS',
                                    'Estado'));
            return array_merge($headers, $queryRecords);
        } 
        catch (DBALException $e) 
        {
            return array($json_data = $e->getMessage());
        }

        return array();
    }


    // Funciones para los contadores del backend
    /**
     * % De transportes RIS
     * @param string $collaboratorId  id del colaborador (si tiene el filtro activo)
     * @param string $branchOfficeId - id de la sucursal (si tiene el filtro activo)
     * @param string $craneId - id grua (si tiene el filtro activo)
     * @param string $operatorId - id operario (si tiene el filtro activo)
     * @param \DateTime $initDate - Fecha Inicio
     * @param \DateTime $endDate - Fecha Fin
     * @param string $interventionStatusId - id estado intervención (si tiene el filtro activo)
     *
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDashboardRisPercentage($collaboratorId,
                                            $branchOfficeId,
                                            $craneId,
                                            $operatorId,
                                            \DateTime $initDate,
                                            \DateTime $endDate,
                                            $interventionStatusId){

        //Montamos la consulta
        $sql = "SELECT COUNT(i.id) AS count, 
                        i.is_ris AS is_ris
                FROM intervention AS i 
                WHERE 1 = 1";
        
        $parameters = [];
        
        if (!is_null($collaboratorId) && $collaboratorId != ''){
            $sql .= " AND i.collaborator_id = :collaboratorId ";
            $parameters['collaboratorId'] = $collaboratorId;
        }

        if (!is_null($branchOfficeId) && $branchOfficeId != ''){
            $sql .= " AND i.branch_office_id = :branchOfficeId ";
            $parameters['branchOfficeId'] = $branchOfficeId;
        }

        if (!is_null($craneId) && $craneId != ''){
            $sql .= " AND i.crane_id = :craneId ";
            $parameters['craneId'] = $craneId;
        }

        if (!is_null($operatorId) && $operatorId != ''){
            $sql .= " AND i.operator_id = :operatorId ";
            $parameters['operatorId'] = $operatorId;
        }

        if (!is_null($initDate) && !is_null($endDate)){
            $sql .= " AND i.request_date BETWEEN :initDate AND :endDate";
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }

        if (!is_null($interventionStatusId) && $interventionStatusId != ''){
            $sql .= " AND i.intervention_status_id = :interventionStatusId ";
            $parameters['interventionStatusId'] = $interventionStatusId;
        } else {
            $sql .= " AND i.intervention_status_id IN (3,5,6,7) ";
        }

        $sql .= " GROUP BY i.is_ris";

        try {            
            //Ejecutamos la consulta  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sql);
            $qr->execute($parameters);
            $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
            
            $totalRis = 0;
            $totalNoRis = 0;

            foreach($queryRecords as $record) {
                if ($record['is_ris'])
                    $totalRis += $record['count'];
                else
                    $totalNoRis += $record['count'];
            }

            $total = $totalRis + $totalNoRis;

            if ($total == 0)
                return '-';

            $percentage =  ($totalRis / $total) * 100;
            return round($percentage, 0). "%";
        } 
        catch (DBALException $e) 
        {
            return '-';
            //return array($json_data = $e->getMessage());
        }

        return '-';
    }

    
    /**
     * % De transportes Rechazados
     * @param string $collaboratorId  id del colaborador (si tiene el filtro activo)
     * @param string $branchOfficeId - id de la sucursal (si tiene el filtro activo)
     * @param string $craneId - id grua (si tiene el filtro activo)
     * @param \DateTime $initDate - Fecha Inicio
     * @param \DateTime $endDate - Fecha Fin
     *
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDashboardRefusePercentage($collaboratorId,
                                                 $branchOfficeId,
                                                 $craneId,
                                                 $operatorId,
                                                 \DateTime $initDate,
                                                 \DateTime $endDate,
                                                 $interventionStatusId){
        //Montamos la consulta
        $sql = "SELECT COUNT(i.id) AS count, 
                       if (ist.code = 'R', TRUE, FALSE) As is_refuse 
                       
                FROM intervention AS i 
                LEFT JOIN intervention_status AS ist ON ist.id = i.intervention_status_id
                WHERE 1 = 1";
        
        $parameters = [];
        
        if (!is_null($collaboratorId) && $collaboratorId != ''){
            $sql .= " AND i.collaborator_id = :collaboratorId ";
            $parameters['collaboratorId'] = $collaboratorId;
        }

        if (!is_null($branchOfficeId) && $branchOfficeId != ''){
            $sql .= " AND i.branch_office_id = :branchOfficeId ";
            $parameters['branchOfficeId'] = $branchOfficeId;
        }

        if (!is_null($craneId) && $craneId != ''){
            $sql .= " AND i.crane_id = :craneId ";
            $parameters['craneId'] = $craneId;
        }

        if (!is_null($operatorId) && $operatorId != ''){
            $sql .= " AND i.operator_id = :operatorId ";
            $parameters['operatorId'] = $operatorId;
        }

        if (!is_null($initDate) && !is_null($endDate)){
            $sql .= " AND i.request_date BETWEEN :initDate AND :endDate";
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }

        if (!is_null($interventionStatusId) && $interventionStatusId != ''){
            $sql .= " AND i.intervention_status_id = :interventionStatusId ";
            $parameters['interventionStatusId'] = $interventionStatusId;
        } else {
            $sql .= " AND i.intervention_status_id IN (3,5,6,7) ";
        }

        $sql .= " GROUP BY is_refuse";

        try {            
            //Ejecutamos la consulta  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sql);
            $qr->execute($parameters);
            $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
            
            $totalRefuse = 0;
            $totalNoRefuse = 0;

            foreach($queryRecords as $record) {
                if ($record['is_refuse'])
                    $totalRefuse += $record['count'];
                else
                    $totalNoRefuse += $record['count'];
            }

            $total = $totalRefuse + $totalNoRefuse;

            if ($total == 0)
                return '-';

            $percentage =  ($totalRefuse / $total) * 100;
            return round($percentage, 0). "%";
        } 
        catch (DBALException $e) 
        {
            return '-';
            //return array($json_data = $e->getMessage());
        }

        return '-';
    }

    // DATATABLES DASHBOARD
    
    /**
     * Función que filtra y rellena la tabla de RIS del dashboard
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDashboardDataTableRIS($collaboratorUser, $collaborator, $params)
    {
        $form_filters = null;
        $search_filter = null;
        $parameters = [];
        $parametersTot = [];
        $groupByFilter = "";

        if(isset($params['form_filters'])){
            $form_filters = $params['form_filters'];
        }
        else if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $form_filters = $search['form_filters'];
            //$search_filter = $search['search_filter'];
            //$type = $search['type'];
        }
        else{
             //$type = $params['type'];
        }

        if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $groupByFilter = $search['groupByFilter'];

        } else if(isset($params['groupByFilter'])){
            $groupByFilter = $params['groupByFilter'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "br_name",
            1 => "vh_province",
            2 => "br_province",
            3 => "br_town"
        ];

        $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " ";
        $groupBy = " ";
        
        // $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
        $where_count_ris = '';
        $where_count_total = '';
        
        $where .= " AND i.intervention_status_id IN (3,5,6,7) ";
        // filtramos por las de ese colaborador
        if( !is_null($collaborator)) {
            $where .= " AND i.collaborator_id = ".$collaborator->getId()." ";
            $where_count_ris .= " AND i_t_ris.collaborator_id = ".$collaborator->getId()." ";
            $where_count_total .= " AND i_t.collaborator_id = ".$collaborator->getId()." ";  
        }

        // Filtro Agrupación (group by)
        if(isset($groupByFilter) && $groupByFilter != '') {
            switch ($groupByFilter) {
                // Sucursal
                case "1":
                    $groupBy = " GROUP BY br_name ";
                    $orderBy = " ORDER BY br_name ASC ";
                    $where_count_ris .= " AND i_t_ris.branch_office_id = i.branch_office_id ";
                    $where_count_total .= " AND i_t.branch_office_id = i.branch_office_id ";  
                    break;
                // Provincia (intervención/vehículo)
                case "2":
                    $groupBy = " GROUP BY vh_province ";
                    $orderBy = " ORDER BY vh_province ASC ";
                    $where_count_ris .= " AND i_t_ris.vh_province_id = i.vh_province_id ";
                    $where_count_total .= " AND i_t.vh_province_id = i.vh_province_id ";  
                    break;
                // Provincia sucursal
                case "3":
                    $groupBy = " GROUP BY br_province ";
                    $orderBy = " ORDER BY br_province ASC ";
                    $where_count_ris .= " AND br_ris.province_id = br_p.id ";
                    $where_count_total .= " AND br_total.province_id = br_p.id ";  
                    break;
                // Localidad sucursal
                case "4":
                    $groupBy = " GROUP BY br_town ";
                    $orderBy = " ORDER BY br_town ASC ";
                    $where_count_ris .= " AND br_ris.town_id = br_t.id ";
                    $where_count_total .= " AND br_total.town_id = br_t.id ";
                    break;
                // Por defecto: Sucursal
                default:
                    $groupBy = " GROUP BY br_name ";
                    $orderBy = " ORDER BY br_name ASC ";
                    $where_count_ris .= " AND i_t_ris.branch_office_id = i.branch_office_id ";
                    $where_count_total .= " AND i_t.branch_office_id = i.branch_office_id ";
            }
        }

        // Filtro fecha
        if (isset($form_filters['dateRange'])){
            $dateRange = $form_filters['dateRange'];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
            
            $where_count_ris .= " AND i_t_ris.request_date BETWEEN '".$initDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."' ";
            $where_count_total .= " AND i_t.request_date BETWEEN '".$initDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."' ";
            $where .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        
        // Filtro operario
        if (isset($form_filters['operator']) && $form_filters['operator'] != ''){ 
            $where_count_ris .= " AND i_t_ris.operator_id = ".$form_filters['operator']." ";
            $where_count_total .= " AND i_t.operator_id = ".$form_filters['operator']." ";
            $where .= " AND i.operator_id = :operator";

            $parameters['operator'] = $form_filters['operator'];
        }
        
        // Filtro sucursal
        if (isset($form_filters['branchOffice']) && $form_filters['branchOffice'] != ''){
            $where_count_ris .= " AND i_t_ris.branch_office_id = ".$form_filters['branchOffice']." ";
            $where_count_total .= " AND i_t.branch_office_id = ".$form_filters['branchOffice']." ";
            $where .= " AND i.branch_office_id = :branchOffice";

            $parameters['branchOffice'] = $form_filters['branchOffice'];
        }

        // Filtro grúa
        if (isset($form_filters['crane']) && $form_filters['crane'] != ''){
            $where_count_ris .= " AND i_t_ris.crane_id = ".$form_filters['crane']." ";
            $where_count_total .= " AND i_t.crane_id = ".$form_filters['crane']." ";
            $where .= " AND i.crane_id = :crane";

            $parameters['crane'] = $form_filters['crane'];
        }

        // Filtro provincia
        if (isset($form_filters['province']) && $form_filters['province'] != ''){
            $where_count_ris .= " AND i_t_ris.vh_province_id = ".$form_filters['province']." ";
            $where_count_total .= " AND i_t.vh_province_id = ".$form_filters['province']." ";  
            $where .= " AND i.vh_province_id = :province";

            $parameters['province'] = $form_filters['province'];
        }

        // Filtro localidad
        if (isset($form_filters['town']) && $form_filters['town'] != ''){
            $where_count_ris .= " AND i_t_ris.vh_town_id = ".$form_filters['town']." ";
            $where_count_total .= " AND i_t.vh_town_id = ".$form_filters['town']." "; 
            $where .= " AND i.vh_town_id = :town";

            $parameters['town'] = $form_filters['town'];
        }

        // Filtro Estado Intervención
        if (isset($form_filters['status']) && $form_filters['status'] != ''){ 
            $where_count_ris .= " AND i_t_ris.intervention_status_id = ".$form_filters['status']." ";
            $where_count_total .= " AND i_t.intervention_status_id = ".$form_filters['status']." "; 
            $where .= " AND i.intervention_status_id = :intervention_status";

            $parameters['intervention_status'] = $form_filters['status'];
        }

        //Montamos la consulta
        $sql = "SELECT
                br.name   AS br_name,
                vh_p.name AS vh_province, 
                br_p.name AS br_province,
                br_t.name AS br_town,
                br.id     AS br_id,
                vh_p.id   AS vh_province_id, 
                br_p.id   AS br_province_id,
                br_t.id   AS br_town_id,
                (SELECT COUNT(*) 
                    FROM intervention AS i_t_ris 
                    LEFT JOIN branch_office AS br_ris ON i_t_ris.branch_office_id = br_ris.id
                    WHERE i_t_ris.is_ris = true 
                        AND i_t_ris.intervention_status_id IN (3,5,6,7) ".$where_count_ris." ) AS RIS_count,
                (SELECT COUNT(*) 
                    FROM intervention AS i_t 
                    LEFT JOIN branch_office AS br_total ON i_t.branch_office_id = br_total.id
                    WHERE i_t.intervention_status_id IN (3,5,6,7) ".$where_count_total." ) AS total_count
                FROM intervention AS i 
                LEFT JOIN branch_office AS br ON i.branch_office_id = br.id
                LEFT JOIN operator AS o ON i.operator_id = o.id
                LEFT JOIN province AS vh_p ON vh_p.id = i.vh_province_id
                LEFT JOIN province AS br_p ON br_p.id = br.province_id
                LEFT JOIN town AS br_t ON br_t.id = br.town_id
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
            if(isset($orderBy)) {
                $sqlRec .= $orderBy;
            } else if(isset($params['order'])){
                $sqlRec .= " ORDER BY " .
                $columns[$params['order'][0]['column']] . " " .
                $params['order'][0]['dir'] ;
            }
            else{
                $sqlRec .= " ORDER BY br_name ASC ";
            }
            
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

            //Ejecutamos las consultas  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sqlTot);
            $qr->execute($parametersTot);
            $queryTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRecTot);
            $qr->execute($parameters);
            $queryRecordsTot = count($qr->fetchAll(PDO::FETCH_ASSOC));

            $qr = $conn->prepare($sqlRec);
            $qr->execute($parameters);
            $data = $qr->fetchAll(PDO::FETCH_ASSOC);

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
     * Función que filtra y rellena la tabla de detalle de RIS del dashboard
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getDashboardDataTableRisDetail($collaborator, $collaboratorUser, $params)
    {
        $fullSubFilters = null;
        $parameters = [];

        if(isset($params['search']) && $params['search']['value'] != '' ) {
            $search = $params ['search']['value'];
            $fullSubFilters = json_decode ($search, true);
        } else if(isset($params['fullSubFilters'])){
            $fullSubFilters = $params['fullSubFilters'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "requestDate",
            1 => "reference",
            2 => "operator",
            3 => "isRis",
            4 => "risCause",
            5 => "comments",
            6 => "id"
        ];

        $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " ";
        $groupBy = " ";
        
        $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
       
        // Consulta
        $sql = "SELECT
                    i.id                                              AS `id`,
                    DATE_FORMAT(i.request_date, '".$dateFormatSql."') AS `requestDate`,
                    CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                    o.reference                                       AS `operator`,
                    i.is_ris                                          AS `isRis`,
                    rc.description                                    AS `risCause`,
                    i.vh_comments                                     AS `comments`
                FROM intervention AS i
                LEFT JOIN operator AS o ON o.id = i.operator_id
                LEFT JOIN riscause AS rc ON rc.id = i.ris_cause_id 
                LEFT JOIN branch_office AS bo ON bo.id = i.branch_office_id             
                ";
        
        $where .= " AND i.intervention_status_id IN (3,5,6,7) ";

        // Filtramos por colaborador
        if( !is_null($collaborator)) {
            $where .= " AND i.collaborator_id = :collaboratorId ";

            $parameters['collaboratorId'] = $collaborator->getId();
        }

        // Filtro por el dato con el que se ha agrupado
        if(isset($fullSubFilters["groupByFilter"]) && $fullSubFilters["groupByFilter"] != '') {
            switch ($fullSubFilters["groupByFilter"]["typeData"]) {
                // Sucursal
                case "br_id":
                    $where .= " AND i.branch_office_id = :groupByData ";
                    break;
                // Provincia (intervención/vehículo)
                case "vh_province_id":
                    $where .= " AND i.vh_province_id = :groupByData ";
                    break;
                // Provincia sucursal
                case "br_province_id":
                    $where .= " AND bo.province_id = :groupByData ";
                    break;
                // Localidad sucursal
                case "br_town_id":
                    $where .= " AND bo.town_id = :groupByData ";
                    break;
                // Por defecto: Sucursal
                default:
                    $where .= " AND i.branch_office_id = :groupByData ";
            }
            $parameters['groupByData'] = $fullSubFilters["groupByFilter"]["groupByData"];
        }

        // Filtro Sucursal
        if(isset($fullSubFilters["subFilters"]["branchOffice"]) && $fullSubFilters["subFilters"]["branchOffice"] != '') {

            $where .= " AND i.branch_office_id = :branchOffice ";
            
            $parameters['groupByData'] = $fullSubFilters["subFilters"]["branchOffice"];
        }

        // Filtro Operario
        if (isset($fullSubFilters["subFilters"]["operator"]) && $fullSubFilters["subFilters"]["operator"] != ''){ 
            
            $where .= " AND i.operator_id = :operator ";

            $parameters['operator'] = $fullSubFilters["subFilters"]["operator"];
        }

        // Filtro Provincia Vehículo
        if (isset($fullSubFilters["subFilters"]["vh_province"]) && $fullSubFilters["subFilters"]["vh_province"] != ''){ 
            
            $where .= " AND i.vh_province_id = :vhProvince ";

            $parameters['vhProvince'] = $fullSubFilters["subFilters"]["vh_province"];
        }

        // Filtro Provincia Sucursal
        if (isset($fullSubFilters["subFilters"]["br_province"]) && $fullSubFilters["subFilters"]["br_province"] != ''){ 
            
            $where .= " AND bo.province_id = :boProvince ";

            $parameters['boProvince'] = $fullSubFilters["subFilters"]["br_province"];
        }

        // Filtro Localidad Sucursal
        if (isset($fullSubFilters["subFilters"]["br_town"]) && $fullSubFilters["subFilters"]["br_town"] != ''){ 
            
            $where .= " AND bo.town_id = :boTown ";

            $parameters['boTown'] = $fullSubFilters["subFilters"]["br_town"];
        }

        // Filtro Fecha
        if (isset($fullSubFilters["subFilters"]["dateRange"])) {
            $dateRange = $fullSubFilters["subFilters"]["dateRange"];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
        
            $where .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }

        // Filtro Tipo de asistencia (RIS o No RIS)
        if (isset($fullSubFilters["subFilters"]["isRis"]) && $fullSubFilters["subFilters"]["isRis"] != ''){ 
            $where .= " AND i.is_ris = :isRis";
            $parameters['isRis'] = $fullSubFilters["subFilters"]["isRis"];
        }

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
            if(isset($orderBy)) {
                $sqlRec .= $orderBy;
            } else if(isset($params['order'])){
                $sqlRec .= " ORDER BY " .
                $columns[$params['order'][0]['column']] . " " .
                $params['order'][0]['dir'] ;
            }
            else{
                $sqlRec .= " ORDER BY requestDate DESC ";
            }
            
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

            //Ejecutamos las consultas  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sqlTot);
            $qr->execute();
            $queryTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRecTot);
            $qr->execute($parameters);
            $queryRecordsTot = count($qr->fetchAll(PDO::FETCH_ASSOC));

            $qr = $conn->prepare($sqlRec);
            $qr->execute($parameters);
            $data = $qr->fetchAll(PDO::FETCH_ASSOC);

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
     * Función que filtra y rellena la tabla de Rechazados (general)
     * del dashboard
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDashboardDataTableRefuseGeneral($collaboratorUser, $collaborator, $params)
    {
        $form_filters = null;
        $search_filter = null;
        $parameters = [];
        $parametersTot = [];
        $groupByFilter = "";

        if(isset($params['form_filters'])){
            $form_filters = $params['form_filters'];
        }
        else if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $form_filters = $search['form_filters'];
            //$search_filter = $search['search_filter'];
            //$type = $search['type'];
        }
        else{
             //$type = $params['type'];
        }

        if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $groupByFilter = $search['groupByFilter'];

        } else if(isset($params['groupByFilter'])){
            $groupByFilter = $params['groupByFilter'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "br_name",
            1 => "vh_province",
            2 => "br_province",
            3 => "br_town"
        ];

        $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " ";
        $groupBy = " ";
        
        // $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
        $where_count_refuse = '';
        $where_count_total = '';
        
        $where .= " AND i.intervention_status_id IN (3,5,6,7) ";
        // filtramos por las de ese colaborador
        if( !is_null($collaborator)) {
            $where .= " AND i.collaborator_id = ".$collaborator->getId()." ";
            $where_count_refuse .= " AND i.collaborator_id = ".$collaborator->getId()." ";
            $where_count_total .= " AND i_t.collaborator_id = ".$collaborator->getId()." ";  
        }

        // Filtro Agrupación (group by)
        if(isset($groupByFilter) && $groupByFilter != '') {
            switch ($groupByFilter) {
                // Sucursal
                case "1":
                    $groupBy = " GROUP BY br_name ";
                    $orderBy = " ORDER BY br_name ASC ";
                    $where_count_refuse .= " AND i_r.branch_office_id = i.branch_office_id ";
                    $where_count_total .= " AND i_t.branch_office_id = i.branch_office_id ";  
                    break;
                // Provincia (intervención/vehículo)
                case "2":
                    $groupBy = " GROUP BY vh_province ";
                    $orderBy = " ORDER BY vh_province ASC ";
                    $where_count_refuse .= " AND i_r.vh_province_id = i.vh_province_id ";
                    $where_count_total .= " AND i_t.vh_province_id = i.vh_province_id ";  
                    break;
                // Provincia sucursal
                case "3":
                    $groupBy = " GROUP BY br_province ";
                    $orderBy = " ORDER BY br_province ASC ";
                    $where_count_refuse .= " AND bo.province_id = br_p.id ";
                    $where_count_total .= " AND br_total.province_id = br_p.id ";  
                    break;
                // Localidad sucursal
                case "4":
                    $groupBy = " GROUP BY br_town ";
                    $orderBy = " ORDER BY br_town ASC ";
                    $where_count_refuse .= " AND bo.town_id = br_t.id ";
                    $where_count_total .= " AND br_total.town_id = br_t.id ";
                    break;
                // Por defecto: Sucursal
                default:
                    $groupBy = " GROUP BY br_name ";
                    $orderBy = " ORDER BY br_name ASC ";
                    $where_count_refuse .= " AND i_r.branch_office_id = i.branch_office_id ";
                    $where_count_total .= " AND i_t.branch_office_id = i.branch_office_id ";
            }
        }

        // Filtro fecha
        if (isset($form_filters['dateRange'])){
            $dateRange = $form_filters['dateRange'];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
            
            $where_count_refuse .= " AND i.request_date BETWEEN '".$initDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."' ";
            $where_count_total .= " AND i_t.request_date BETWEEN '".$initDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."' ";
            $where .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        
        // Filtro operario
        if (isset($form_filters['operator']) && $form_filters['operator'] != ''){ 
            $where_count_refuse .= " AND i.operator_id = ".$form_filters['operator']." ";
            $where_count_total .= " AND i_t.operator_id = ".$form_filters['operator']." ";
            $where .= " AND i.operator_id = :operator";

            $parameters['operator'] = $form_filters['operator'];
        }
        
        // Filtro sucursal
        if (isset($form_filters['branchOffice']) && $form_filters['branchOffice'] != ''){
            $where_count_refuse .= " AND i.branch_office_id = ".$form_filters['branchOffice']." ";
            $where_count_total .= " AND i_t.branch_office_id = ".$form_filters['branchOffice']." ";
            $where .= " AND i.branch_office_id = :branchOffice";

            $parameters['branchOffice'] = $form_filters['branchOffice'];
        }

        // Filtro grúa
        if (isset($form_filters['crane']) && $form_filters['crane'] != ''){
            $where_count_refuse .= " AND i.crane_id = ".$form_filters['crane']." ";
            $where_count_total .= " AND i_t.crane_id = ".$form_filters['crane']." ";
            $where .= " AND i.crane_id = :crane";

            $parameters['crane'] = $form_filters['crane'];
        }

        // Filtro provincia
        if (isset($form_filters['province']) && $form_filters['province'] != ''){
            $where_count_refuse .= " AND i.vh_province_id = ".$form_filters['province']." ";
            $where_count_total .= " AND i_t.vh_province_id = ".$form_filters['province']." ";  
            $where .= " AND i.vh_province_id = :province";

            $parameters['province'] = $form_filters['province'];
        }

        // Filtro localidad
        if (isset($form_filters['town']) && $form_filters['town'] != ''){
            $where_count_refuse .= " AND i.vh_town_id = ".$form_filters['town']." ";
            $where_count_total .= " AND i_t.vh_town_id = ".$form_filters['town']." "; 
            $where .= " AND i.vh_town_id = :town";

            $parameters['town'] = $form_filters['town'];
        }

        // Filtro Estado Intervención
        if (isset($form_filters['status']) && $form_filters['status'] != ''){ 
            $where_count_refuse .= " AND i_r.intervention_status_id = ".$form_filters['status']." ";
            $where_count_total .= " AND i_t.intervention_status_id = ".$form_filters['status']." "; 
            $where .= " AND i.intervention_status_id = :intervention_status";

            $parameters['intervention_status'] = $form_filters['status'];
        }

        //Montamos la consulta
        $sql = "SELECT
                br.name   AS br_name,
                vh_p.name AS vh_province, 
                br_p.name AS br_province,
                br_t.name AS br_town,
                br.id     AS br_id,
                vh_p.id   AS vh_province_id, 
                br_p.id   AS br_province_id,
                br_t.id   AS br_town_id,
                (SELECT COUNT(*) 
                    FROM intervention AS i_r 
                    LEFT JOIN intervention_status AS ist ON ist.id = i_r.intervention_status_id
                    LEFT JOIN branch_office AS bo ON i_r.branch_office_id = bo.id
                    WHERE ist.code = 'R' 
                        AND i_r.intervention_status_id IN (3,5,6,7) ".$where_count_refuse." ) AS RIS_count,
                (SELECT COUNT(*) 
                    FROM intervention AS i_t 
                    LEFT JOIN branch_office AS br_total ON i_t.branch_office_id = br_total.id
                    WHERE i_t.intervention_status_id IN (3,5,6,7) ".$where_count_total." ) AS total_count
                FROM intervention AS i 
                LEFT JOIN branch_office AS br ON i.branch_office_id = br.id
                LEFT JOIN operator AS o ON i.operator_id = o.id
                LEFT JOIN province AS vh_p ON vh_p.id = i.vh_province_id
                LEFT JOIN province AS br_p ON br_p.id = br.province_id
                LEFT JOIN town AS br_t ON br_t.id = br.town_id
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
            if(isset($orderBy)) {
                $sqlRec .= $orderBy;
            } else if(isset($params['order'])){
                $sqlRec .= " ORDER BY " .
                $columns[$params['order'][0]['column']] . " " .
                $params['order'][0]['dir'] ;
            }
            else{
                $sqlRec .= " ORDER BY br_name ASC ";
            }
            
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

            //Ejecutamos las consultas  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sqlTot);
            $qr->execute($parametersTot);
            $queryTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            //return var_dump($sqlRecTot) . var_dump($parameters);
            $qr = $conn->prepare($sqlRecTot);
            $qr->execute($parameters);
            $queryRecordsTot = count($qr->fetchAll(PDO::FETCH_ASSOC));

            $qr = $conn->prepare($sqlRec);
            $qr->execute($parameters);
            $data = $qr->fetchAll(PDO::FETCH_ASSOC);

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
     * Función que filtra y rellena la tabla de detalle de Rechazo del dashboard
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDashboardDataTableRefuseDetail($collaborator, $collaboratorUser, $params)
    {
        $fullSubFilters = null;
        $parameters = [];

        if(isset($params['search']) && $params['search']['value'] != '' ) {
            $search = $params ['search']['value'];
            $fullSubFilters = json_decode ($search, true);
        } else if(isset($params['fullSubFilters'])){
            $fullSubFilters = $params['fullSubFilters'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "requestDate",
            1 => "reference",
            2 => "operator",
            3 => "isRis",
            4 => "risCause",
            5 => "comments",
            6 => "id"
        ];

        $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " ";
        $groupBy = " ";
        
        $dateFormatSql = $collaboratorUser->getFullDateFormatSql();
       
        // Consulta
        $sql = "SELECT
                    i.id                                              AS `id`,
                    DATE_FORMAT(i.request_date, '".$dateFormatSql."') AS `requestDate`,
                    CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                    o.reference                                       AS `operator`,
                    i.is_ris                                          AS `isRis`,
                    ct.description                                    AS `risCause`,
                    i.vh_comments                                     AS `comments`
                FROM intervention AS i
                LEFT JOIN intervention_status AS ist ON ist.id = i.intervention_status_id
                LEFT JOIN operator AS o ON o.id = i.operator_id
                LEFT JOIN riscause AS rc ON rc.id = i.ris_cause_id 
                LEFT JOIN branch_office AS bo ON bo.id = i.branch_office_id
                LEFT JOIN cancellation_type AS ct ON ct.id = i.cancellation_type_id              
                ";
        
        $where .= " AND i.intervention_status_id IN (3,5,6,7)  AND ist.code = 'R' ";

        // Filtramos por colaborador
        if( !is_null($collaborator)) {
            $where .= " AND i.collaborator_id = :collaboratorId ";

            $parameters['collaboratorId'] = $collaborator->getId();
        }

        // Filtro por el dato con el que se ha agrupado
        if(isset($fullSubFilters["groupByFilter"]) && $fullSubFilters["groupByFilter"] != '') {
            switch ($fullSubFilters["groupByFilter"]["typeData"]) {
                // Sucursal
                case "br_id":
                    $where .= " AND i.branch_office_id = :groupByData ";
                    break;
                // Provincia (intervención/vehículo)
                case "vh_province_id":
                    $where .= " AND i.vh_province_id = :groupByData ";
                    break;
                // Provincia sucursal
                case "br_province_id":
                    $where .= " AND bo.province_id = :groupByData ";
                    break;
                // Localidad sucursal
                case "br_town_id":
                    $where .= " AND bo.town_id = :groupByData ";
                    break;
                // Por defecto: Sucursal
                default:
                    $where .= " AND i.branch_office_id = :groupByData ";
            }
            $parameters['groupByData'] = $fullSubFilters["groupByFilter"]["groupByData"];
        }

        // Filtro Sucursal
        if(isset($fullSubFilters["subFilters"]["branchOffice"]) && $fullSubFilters["subFilters"]["branchOffice"] != '') {

            $where .= " AND i.branch_office_id = :branchOffice ";
            
            $parameters['groupByData'] = $fullSubFilters["subFilters"]["branchOffice"];
        }

        // Filtro Operario
        if (isset($fullSubFilters["subFilters"]["operator"]) && $fullSubFilters["subFilters"]["operator"] != ''){ 
            
            $where .= " AND i.operator_id = :operator ";

            $parameters['operator'] = $fullSubFilters["subFilters"]["operator"];
        }

        // Filtro Provincia Vehículo
        if (isset($fullSubFilters["subFilters"]["vh_province"]) && $fullSubFilters["subFilters"]["vh_province"] != ''){ 
            
            $where .= " AND i.vh_province_id = :vhProvince ";

            $parameters['vhProvince'] = $fullSubFilters["subFilters"]["vh_province"];
        }

        // Filtro Provincia Sucursal
        if (isset($fullSubFilters["subFilters"]["br_province"]) && $fullSubFilters["subFilters"]["br_province"] != ''){ 
            
            $where .= " AND bo.province_id = :boProvince ";

            $parameters['boProvince'] = $fullSubFilters["subFilters"]["br_province"];
        }

        // Filtro Localidad Sucursal
        if (isset($fullSubFilters["subFilters"]["br_town"]) && $fullSubFilters["subFilters"]["br_town"] != ''){ 
            
            $where .= " AND bo.town_id = :boTown ";

            $parameters['boTown'] = $fullSubFilters["subFilters"]["br_town"];
        }

        // Filtro Fecha
        if (isset($fullSubFilters["subFilters"]["dateRange"])) {
            $dateRange = $fullSubFilters["subFilters"]["dateRange"];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
        
            $where .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }

        // Filtro Tipo de asistencia (RIS o No RIS)
        if (isset($fullSubFilters["subFilters"]["isRis"]) && $fullSubFilters["subFilters"]["isRis"] != ''){ 
            $where .= " AND i.is_ris = :isRis";
            $parameters['isRis'] = $fullSubFilters["subFilters"]["isRis"];
        }

        // Filtro Tipo Cancelación
        if (isset($fullSubFilters["subFilters"]["cancellationType"]) && $fullSubFilters["subFilters"]["cancellationType"] != ''){ 
            $where .= " AND ct.id = :cancellationType";
            $parameters['cancellationType'] = $fullSubFilters["subFilters"]["cancellationType"];
        }

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
            if(isset($orderBy)) {
                $sqlRec .= $orderBy;
            } else if(isset($params['order'])){
                $sqlRec .= " ORDER BY " .
                $columns[$params['order'][0]['column']] . " " .
                $params['order'][0]['dir'] ;
            }
            else{
                $sqlRec .= " ORDER BY requestDate DESC ";
            }
            
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

            //Ejecutamos las consultas  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sqlTot);
            $qr->execute();
            $queryTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRecTot);
            $qr->execute($parameters);
            $queryRecordsTot = count($qr->fetchAll(PDO::FETCH_ASSOC));

            $qr = $conn->prepare($sqlRec);
            $qr->execute($parameters);
            $data = $qr->fetchAll(PDO::FETCH_ASSOC);

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
     * Funcion para obtener los puntos de Geolocalización claves en la ruta de un servicio
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention - Intervencion
     */
    public function getMainGeolocationInterventionRoute($intervention){

        // Fase de inicio del trayecto
        $result = array();
        $resultStep = $this->getLastPhaseLogOfIntervention($intervention,"servicio_iniciado");
        if(is_null($resultStep)){
            array_push($result, array ('step' => 1,
                            'name' => 'Inicio Servicio',
                            'latitude' => '',
                            'longitude' => '',
                            'date' => ''
                        ));           
        }
        else{
            array_push($result, array ('step' => 1,
                            'name' => 'Inicio Servicio',
                            'latitude' => $resultStep->getLatitude(),
                            'longitude' => $resultStep->getLongitude(),
                            'date' => $resultStep->getCreationDate()->format('y-m-d H:i:s')
                        ));           
        }
        
        // Fase de vehículo localizado
        $resultStep = $this->getLastPhaseLogOfIntervention($intervention,"vh_localizado");
        if(is_null($resultStep)){
            array_push($result, array ('step' => 2,
                            'name' => 'Vehículo localizado',
                            'latitude' => '',
                            'longitude' => '',
                            'date' => ''
                        ));           
        }
        else{
            array_push($result, array ('step' => 2,
                            'name' => 'Vehículo localizado',
                            'latitude' => $resultStep->getLatitude(),
                            'longitude' => $resultStep->getLongitude(),
                            'date' => $resultStep->getCreationDate()->format('y-m-d H:i:s')
                        ));           
        }
        
        // Fase de entrega en destino
        $resultStep = $this->getLastPhaseLogOfIntervention($intervention,"entrega_destino");
        if(is_null($resultStep)){
            array_push($result, array ('step' => 3,
                            'name' => 'Entrega en destino',
                            'latitude' => '',
                            'longitude' => '',
                            'date' => ''
                        ));           
        }
        else{
            array_push($result, array ('step' => 3,
                            'name' => 'Entrega en destino',
                            'latitude' => $resultStep->getLatitude(),
                            'longitude' => $resultStep->getLongitude(),
                            'date' => $resultStep->getCreationDate()->format('y-m-d H:i:s')
                        ));           
        }

        return $result;
    }

     /**
     * Función que filtra y rellena la tabla de dashboard
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     */
    public function getDashboardDataTableRefuse($collaboratorUser, $collaborator, $params)
    {
        $form_filters = null;
        $search_filter = null; 
        $parameters = [];


        if(isset($params['form_filters'])){
            $form_filters = $params['form_filters'];
        }
        else if(isset($params['search']) && $params['search']['value'] != '' ){
            $search = $params ['search']['value'];
            $search = json_decode ($search, true);
            $form_filters = $search['form_filters'];
            //$search_filter = $search['search_filter'];
            //$type = $search['type'];
        }
        else{
             //$type = $params['type'];
        }

        //Array con las columnas para la ordenación
        $columns = [
            0 => "requestDate",
            1 => "reference",
            2 => "operator",
            3 => "service",
            4 => "status",
            5 => "cause",
            6 => "id"
            ];

        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";
        $having = " ";
        $groupBy = " ";

        $dateFormatSql = $collaboratorUser->getFullDateFormatSql();

        //Montamos la consulta
       $sql = "SELECT 
                i.id                                              AS `id`, 
                DATE_FORMAT(i.request_date, '".$dateFormatSql."') AS `requestDate`,
                CONCAT(substring(i.reference,1,4) , '/', substring(i.reference,5,LENGTH(i.reference)) ) AS reference,
                o.reference                                       AS `operator`,
                cs.description                                    AS `service`,
                it_s.description                                  AS `status`,
                ct.description                                   AS `cause`
            FROM intervention i
            LEFT JOIN operator AS o ON o.id = i.operator_id
            LEFT JOIN collaborator_service AS cs ON cs.id = i.collaborator_service_id
            LEFT JOIN intervention_status AS it_s ON it_s.id = i.intervention_status_id
            LEFT JOIN intervention_failure_type AS ift ON ift.id = i.failure_cause_type_id 
            LEFT JOIN cancellation_type AS ct ON ct.id = i.cancellation_type_id
            ";

        //? Antigua consulta
        // $sql = "SELECT i.reference AS reference, 
        //             DATE_FORMAT(i.request_date, '".$dateFormatSql."') AS request_date,  
        //             o.name AS operator_name,
        //             br.name AS branch_office_name,
        //             ist.description As intervention_status,
        //             vh_p.name AS vh_province,
        //             cs.description AS service_name,
        //             fct.description AS failure_cause_type                
        //         FROM intervention AS i 
        //         LEFT JOIN branch_office AS br ON i.branch_office_id = br.id
        //         LEFT JOIN operator AS o ON i.operator_id = o.id
        //         LEFT JOIN province AS vh_p ON vh_p.id = i.vh_province_id
        //         LEFT JOIN intervention_status AS ist ON i.intervention_status_id = ist.id
        //         LEFT JOIN collaborator_service As cs ON cs.id = i.collaborator_service_id
        //         LEFT JOIN failure_cause_type As fct ON fct.id = i.failure_cause_type_id
        // ";

        $where .= " AND i.intervention_status_id IN (3,5,6,7) ";
        // filtramos por las de ese colaborador
        if( !is_null($collaborator)) {
            $where .= " AND i.collaborator_id = ".$collaborator->getId()." ";
        }

        // Filtro fecha
        if (isset($form_filters['dateRange'])){
            $dateRange = $form_filters['dateRange'];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
            
            $where .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        
        // Filtro operario
        if (isset($form_filters['operator']) && $form_filters['operator'] != ''){ 
            $where .= " AND i.operator_id = :operator";
            $parameters['operator'] = $form_filters['operator'];
        }

        // Filtro sucursal
        if (isset($form_filters['branchOffice']) && $form_filters['branchOffice'] != ''){ 
            $where .= " AND i.branch_office_id = :branchOffice";
            $parameters['branchOffice'] = $form_filters['branchOffice'];
        }

        // Filtro grúa
        if (isset($form_filters['crane']) && $form_filters['crane'] != ''){ 
            $where .= " AND i.crane_id = :crane";
            $parameters['crane'] = $form_filters['crane'];
        }

        // Filtro provincia
        if (isset($form_filters['province']) && $form_filters['province'] != ''){ 
            $where .= " AND i.vh_province_id = :province";
            $parameters['province'] = $form_filters['province'];
        }

        // Filtro localidad
        if (isset($form_filters['town']) && $form_filters['town'] != ''){ 
            $where .= " AND i.vh_town_id = :town";
            $parameters['town'] = $form_filters['town'];
        }

        // Filtro Tipo de asistencia (RIS o No RIS)
        if (isset($form_filters['isRis']) && $form_filters['isRis'] != ''){ 
            $where .= " AND i.is_ris = :isRis";
            $parameters['isRis'] = $form_filters['isRis'];
        }

        // Filtro Estado Intervención
        if (isset($form_filters['status']) && $form_filters['status'] != ''){ 
            $where .= " AND i.intervention_status_id = :intervention_status";
            $parameters['intervention_status'] = $form_filters['status'];
        } else {
            // En caso de no indicar un estado por el que filtrar, el predeterminado será rechazo (Ya que es la tabla de la pestaña de rechazos)
            $where .= " AND i.intervention_status_id = 5 ";
        }

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
                $sqlRec .= " ORDER BY requestDate DESC";
            }
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

            //Ejecutamos las consultas  
            $conn = $this->getEntityManager()->getConnection();
            $qr = $conn->prepare($sqlTot);
            $qr->execute();
            $queryTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRecTot);
            $qr->execute($parameters);
            $queryRecordsTot = count($qr->fetchAll(PDO::FETCH_ASSOC));
            
            $qr = $conn->prepare($sqlRec);
            $qr->execute($parameters);
            $data = $qr->fetchAll(PDO::FETCH_ASSOC);
          
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

    // FIN DATATABLES DASHBOARD

    /**
     * Función que obtiene los datos para el gráfico del tipo de asistencia
     * 
     * @param Array $params
     *                  $params["collaborator"]     ID de la entidad colaboradora a filtar
     *                  $params["branchOffice"]     ID de la sucursal a filtar
     *                  $params["crane"]            ID de la grúa a filtar
     *                  $params["operator"]         ID del operario a filtar
     *                  $params["province"]         ID de la provincia a filtar
     *                  $params["town"]             ID de la localidad a filtar
     *                  $params["town"]             Rango de fechas en la que se encuentra
     *                  $params["isRis"]            Booleano: 1 -> RIS, 0 -> No RIS
     *                  $params["status"]           ID del estado de la intervención a filtrar
     * 
     * @param boolean $onlyRefused  Indicador de si se van a recoger sólo las intervenciones rechazadas
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getAssistanceTypeFigureData($params, $onlyRefused = false) {
        
        $parameters = [];

        //Montamos la consulta
        $sql = "SELECT
                    i.id AS `id`
                FROM intervention AS i     
                ";
        
        $whereRis = " WHERE i.intervention_status_id IN (3,5,6,7) AND i.is_ris = 1 ";
        $whereNoRis = " WHERE i.intervention_status_id IN (3,5,6,7) AND i.is_ris = 0 ";

        // Filtramos por las de ese colaborador
        if( !is_null($params["collaborator"]) && !empty($params["collaborator"]) ) {
            $whereRis .= " AND i.collaborator_id = ".$params["collaborator"]." ";
            $whereNoRis .= " AND i.collaborator_id = ".$params["collaborator"]." ";
        }

        // Filtro fecha
        if (isset($params['dateRange'])){
            $dateRange = $params['dateRange'];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
            
            $whereRis .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            $whereNoRis .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        
        // Filtro operario
        if (isset($params['operator']) && $params['operator'] != ''){ 
            $whereRis .= " AND i.operator_id = :operator";
            $whereNoRis .= " AND i.operator_id = :operator";
            $parameters['operator'] = $params['operator'];
        }
        
        // Filtro sucursal
        if (isset($params['branchOffice']) && $params['branchOffice'] != ''){ 
            $whereRis .= " AND i.branch_office_id = :branchOffice";
            $whereNoRis .= " AND i.branch_office_id = :branchOffice";
            $parameters['branchOffice'] = $params['branchOffice'];
        }

        // Filtro grúa
        if (isset($params['crane']) && $params['crane'] != ''){ 
            $whereRis .= " AND i.crane_id = :crane";
            $whereNoRis .= " AND i.crane_id = :crane";
            $parameters['crane'] = $params['crane'];
        }

        // Filtro provincia
        if (isset($params['province']) && $params['province'] != ''){ 
            $whereRis .= " AND i.vh_province_id = :province";
            $whereNoRis .= " AND i.vh_province_id = :province";
            $parameters['province'] = $params['province'];
        }

        // Filtro localidad
        if (isset($params['town']) && $params['town'] != ''){ 
            $whereRis .= " AND i.vh_town_id = :town";
            $whereNoRis .= " AND i.vh_town_id = :town";
            $parameters['town'] = $params['town'];
        }

        // Filtro Estado Intervención
        if (isset($params['status']) && $params['status'] != ''){ 
            $whereRis .= " AND i.intervention_status_id = :intervention_status";
            $whereNoRis .= " AND i.intervention_status_id = :intervention_status";
            $parameters['intervention_status'] = $params['status'];
        } else {
            // En caso de que sólo se quieran obtener las intervenciones rechazadas
            if($onlyRefused) {
                $whereRis .= " AND i.intervention_status_id = 5 ";
                $whereNoRis .= " AND i.intervention_status_id = 5 ";
            }
        }

        try {
            $sqlRis = $sql . $whereRis;
            $sqlNoRis = $sql . $whereNoRis;

            // Filtro Ris/No Ris
            if (isset($params['isRis']) && $params['isRis'] != ''){ 
                if( $params['isRis'] == 1 ) {
                    $qr = $this->conn->prepare($sqlRis);
                    $qr->execute($parameters);
                    $dataRis = $qr->fetchAll(PDO::FETCH_ASSOC);
                    $dataNoRis = [];
                } else {
                    $qr = $this->conn->prepare($sqlNoRis);
                    $qr->execute($parameters);
                    $dataRis = [];
                    $dataNoRis = $qr->fetchAll(PDO::FETCH_ASSOC);
                }
            } else {
                $qr = $this->conn->prepare($sqlRis);
                $qr->execute($parameters);
                $dataRis = $qr->fetchAll(PDO::FETCH_ASSOC);
    
                $qr = $this->conn->prepare($sqlNoRis);
                $qr->execute($parameters);
                $dataNoRis = $qr->fetchAll(PDO::FETCH_ASSOC);
            }

            $result = array("countRis" => count($dataRis), "countNoRis" => count($dataNoRis));
        } 
        catch (DBALException $e) 
        {
            $result = $e->getMessage();
        }

        return $result;
    }


    /**
     * Función que devuelve si están rechazados o no
     * 
     * @param Array $params
     *                  $params["collaborator"]     ID de la entidad colaboradora a filtar
     *                  $params["branchOffice"]     ID de la sucursal a filtar
     *                  $params["crane"]            ID de la grúa a filtar
     *                  $params["operator"]         ID del operario a filtar
     *                  $params["province"]         ID de la provincia a filtar
     *                  $params["town"]             ID de la localidad a filtar
     *                  $params["town"]             Rango de fechas en la que se encuentra
     *                  $params["isRis"]            Booleano: 1 -> RIS, 0 -> No RIS
     *                  $params["status"]           ID del estado de la intervención a filtrar
     * 
     * @param boolean $onlyRefused  Indicador de si se van a recoger sólo las intervenciones rechazadas
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getIsRefuseFigureData($params) {
        
        $parameters = [];

        //Montamos la consulta
        $sql = "SELECT
                    i.id AS `id`
                FROM intervention AS i     
                LEFT JOIN intervention_status AS ist ON ist.id = i.intervention_status_id
                ";
        
        $whereRefuse = " WHERE ist.code = 'R' ";
        $whereNoRefuse = " WHERE ist.code <> 'R' ";

        // Filtramos por las de ese colaborador
        if( !is_null($params["collaborator"]) && !empty($params["collaborator"]) ) {
            $whereRefuse .= " AND i.collaborator_id = ".$params["collaborator"]." ";
            $whereNoRefuse .= " AND i.collaborator_id = ".$params["collaborator"]." ";
        }

        // Filtro fecha
        if (isset($params['dateRange'])){
            $dateRange = $params['dateRange'];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
            
            $whereRefuse .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            $whereNoRefuse .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        
        // Filtro operario
        if (isset($params['operator']) && $params['operator'] != ''){ 
            $whereRefuse .= " AND i.operator_id = :operator";
            $whereNoRefuse .= " AND i.operator_id = :operator";
            $parameters['operator'] = $params['operator'];
        }
        
        // Filtro sucursal
        if (isset($params['branchOffice']) && $params['branchOffice'] != ''){ 
            $whereRefuse .= " AND i.branch_office_id = :branchOffice";
            $whereNoRefuse .= " AND i.branch_office_id = :branchOffice";
            $parameters['branchOffice'] = $params['branchOffice'];
        }

        // Filtro grúa
        if (isset($params['crane']) && $params['crane'] != ''){ 
            $whereRefuse .= " AND i.crane_id = :crane";
            $whereNoRefuse .= " AND i.crane_id = :crane";
            $parameters['crane'] = $params['crane'];
        }

        // Filtro provincia
        if (isset($params['province']) && $params['province'] != ''){ 
            $whereRefuse .= " AND i.vh_province_id = :province";
            $whereNoRefuse .= " AND i.vh_province_id = :province";
            $parameters['province'] = $params['province'];
        }

        // Filtro localidad
        if (isset($params['town']) && $params['town'] != ''){ 
            $whereRefuse .= " AND i.vh_town_id = :town";
            $whereNoRefuse .= " AND i.vh_town_id = :town";
            $parameters['town'] = $params['town'];
        }

        // Filtro Estado Intervención
        if (isset($params['status']) && $params['status'] != ''){ 
            $whereRefuse .= " AND i.intervention_status_id = :intervention_status";
            $whereNoRefuse .= " AND i.intervention_status_id = :intervention_status";
            $parameters['intervention_status'] = $params['status'];
        } 

        try {
            $sqlRefuse = $sql . $whereRefuse;
            $sqlNoRefuse = $sql . $whereNoRefuse;
        
            $qr = $this->conn->prepare($sqlRefuse);
            $qr->execute($parameters);
            $dataRefuse = $qr->fetchAll(PDO::FETCH_ASSOC);

            $qr = $this->conn->prepare($sqlNoRefuse);
            $qr->execute($parameters);
            $dataNoRefuse = $qr->fetchAll(PDO::FETCH_ASSOC);

            $result = array("countRefuse" => count($dataRefuse), "countNoRefuse" => count($dataNoRefuse));
        } 
        catch (DBALException $e) 
        {
            $result = $e->getMessage();
        }

        return $result;
    }

    /**
     * Función que obtiene los datos para el gráfico de los motivos (motivos RIS)
     * 
     * @param Array $params
     *                  $params["collaborator"]     ID de la entidad colaboradora a filtar
     *                  $params["branchOffice"]     ID de la sucursal a filtar
     *                  $params["crane"]            ID de la grúa a filtar
     *                  $params["operator"]         ID del operario a filtar
     *                  $params["province"]         ID de la provincia a filtar
     *                  $params["town"]             ID de la localidad a filtar
     *                  $params["town"]             Rango de fechas en la que se encuentra
     *                  $params["isRis"]            Booleano: 1 -> RIS, 0 -> No RIS
     *                  $params["status"]           ID del estado de la intervención a filtrar
     * 
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getRisCauseFigureData($params) {
        
        $parameters = [];

        //Montamos la consulta
        $sql = "SELECT
                    IF(rc.description IS NULL, 'Sin definir aún', rc.description) AS `risCause`,
                    COUNT(*) AS `quantity`
                FROM intervention AS i
                LEFT JOIN riscause AS rc ON i.ris_cause_id = rc.id
                ";
        
        $sqlTot = "SELECT COUNT(*) AS `numRecords`
                    FROM intervention AS i
                ";

        $where = " WHERE i.intervention_status_id IN (3,5,6,7) ";

        $groupBy = " GROUP BY rc.description ";

        // Filtramos por las de ese colaborador
        if( !is_null($params["collaborator"]) && !empty($params["collaborator"]) ) {
            $where .= " AND i.collaborator_id = ".$params["collaborator"]." ";
        }

        // Filtro fecha
        if (isset($params['dateRange'])){
            $dateRange = $params['dateRange'];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
            
            $where .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        
        // Filtro operario
        if (isset($params['operator']) && $params['operator'] != ''){ 
            $where .= " AND i.operator_id = :operator";
            $parameters['operator'] = $params['operator'];
        }
        
        // Filtro sucursal
        if (isset($params['branchOffice']) && $params['branchOffice'] != ''){ 
            $where .= " AND i.branch_office_id = :branchOffice";
            $parameters['branchOffice'] = $params['branchOffice'];
        }

        // Filtro grúa
        if (isset($params['crane']) && $params['crane'] != ''){ 
            $where .= " AND i.crane_id = :crane";
            $parameters['crane'] = $params['crane'];
        }

        // Filtro provincia
        if (isset($params['province']) && $params['province'] != ''){ 
            $where .= " AND i.vh_province_id = :province";
            $parameters['province'] = $params['province'];
        }

        // Filtro localidad
        if (isset($params['town']) && $params['town'] != ''){ 
            $where .= " AND i.vh_town_id = :town";
            $parameters['town'] = $params['town'];
        }

        // Filtro Tipo de asistencia (RIS o No RIS)
        if (isset($params['isRis']) && $params['isRis'] != ''){ 
            $where .= " AND i.is_ris = :isRis";
            $parameters['isRis'] = $params['isRis'];
        }

        // Filtro Estado Intervención
        if (isset($params['status']) && $params['status'] != ''){ 
            $where .= " AND i.intervention_status_id = :intervention_status";
            $parameters['intervention_status'] = $params['status'];
        }

        try {
            $sqlRec = $sql . $where . $groupBy;
            $sqlTotRec = $sqlTot . $where;

            $qr = $this->conn->prepare($sqlRec);
            $qr->execute($parameters);
            $sqlRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

            $qr = $this->conn->prepare($sqlTotRec);
            $qr->execute($parameters);
            $sqlTotRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

            $numRecords = intval($sqlTotRecords[0]["numRecords"]);

            $result = array();

            foreach($sqlRecords as $instance) {
                $resultAux = array();
                $resultAux['name'] = $instance['risCause'];
                $resultAux['y'] = round(($instance['quantity'] / $numRecords) * 100, 2);
                array_push($result, $resultAux);
            }
        } 
        catch (DBALException $e) 
        {
            $result = $e->getMessage();
        }

        return json_encode($result);
    }

    /**
     * Función que obtiene los datos para el gráfico de los motivos de rechazo
     * 
     * @param Array $params
     *                  $params["collaborator"]     ID de la entidad colaboradora a filtar
     *                  $params["branchOffice"]     ID de la sucursal a filtar
     *                  $params["crane"]            ID de la grúa a filtar
     *                  $params["operator"]         ID del operario a filtar
     *                  $params["province"]         ID de la provincia a filtar
     *                  $params["town"]             ID de la localidad a filtar
     *                  $params["town"]             Rango de fechas en la que se encuentra
     *                  $params["isRis"]            Booleano: 1 -> RIS, 0 -> No RIS
     *                  $params["status"]           ID del estado de la intervención a filtrar
     * 
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getFailureCauseFigureData($params) {
        
        $parameters = [];

        //Montamos la consulta
        $sql = "SELECT
                    IF(ct.description   IS NULL, 'Sin Rechazo', ct.description) AS `failureCause`,
                    COUNT(*) AS `quantity`
                FROM intervention AS i
                LEFT JOIN intervention_status AS ist ON ist.id = i.intervention_status_id
                LEFT JOIN cancellation_type AS ct ON ct.id = i.cancellation_type_id 
                ";
        
        $sqlTot = "SELECT COUNT(*) AS `numRecords`
                    FROM intervention AS i
                    LEFT JOIN intervention_status AS ist ON ist.id = i.intervention_status_id
                    LEFT JOIN cancellation_type AS ct ON ct.id = i.cancellation_type_id
                ";

        $where = " WHERE i.intervention_status_id IN (3,5,6,7) AND ist.code = 'R'  ";

        $groupBy = " GROUP BY ct.description";

        // Filtramos por las de ese colaborador
        if( !is_null($params["collaborator"]) && !empty($params["collaborator"]) ) {
            $where .= " AND i.collaborator_id = ".$params["collaborator"]." ";
        }

        // Filtro fecha
        if (isset($params['dateRange'])){
            $dateRange = $params['dateRange'];
            list($initDate, $endDate) = explode("-", $dateRange);
            $initDate = trim($initDate);
            $endDate = trim($endDate);
            
            $initDate = \DateTime::createFromFormat('d/m/Y', $initDate);
            $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);
            
            $where .= " AND i.request_date BETWEEN :initDate AND :endDate ";
            
            $parameters['initDate'] = $initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        
        // Filtro operario
        if (isset($params['operator']) && $params['operator'] != ''){ 
            $where .= " AND i.operator_id = :operator";
            $parameters['operator'] = $params['operator'];
        }
        
        // Filtro sucursal
        if (isset($params['branchOffice']) && $params['branchOffice'] != ''){ 
            $where .= " AND i.branch_office_id = :branchOffice";
            $parameters['branchOffice'] = $params['branchOffice'];
        }

        // Filtro grúa
        if (isset($params['crane']) && $params['crane'] != ''){ 
            $where .= " AND i.crane_id = :crane";
            $parameters['crane'] = $params['crane'];
        }

        // Filtro provincia
        if (isset($params['province']) && $params['province'] != ''){ 
            $where .= " AND i.vh_province_id = :province";
            $parameters['province'] = $params['province'];
        }

        // Filtro localidad
        if (isset($params['town']) && $params['town'] != ''){ 
            $where .= " AND i.vh_town_id = :town";
            $parameters['town'] = $params['town'];
        }

        // Filtro Tipo de asistencia (RIS o No RIS)
        if (isset($params['isRis']) && $params['isRis'] != ''){ 
            $where .= " AND i.is_ris = :isRis";
            $parameters['isRis'] = $params['isRis'];
        }

        // Filtro Tipo Cancelación
        if (isset($params['cancellationType']) && $params['cancellationType'] != ''){ 
            $where .= " AND ct.id = :cancellationType";
            $parameters['cancellationType'] = $params['cancellationType'];
        }

        // Filtro Estado Intervención
        if (isset($params['status']) && $params['status'] != ''){ 
            $where .= " AND i.intervention_status_id = :intervention_status";
            $parameters['intervention_status'] = $params['status'];
        } else {
            $where .= " AND i.intervention_status_id = 5 ";
        }

        try {
            $sqlRec = $sql . $where . $groupBy;
            $sqlTotRec = $sqlTot . $where;

            $qr = $this->conn->prepare($sqlRec);
            $qr->execute($parameters);
            $sqlRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

            $qr = $this->conn->prepare($sqlTotRec);
            $qr->execute($parameters);
            $sqlTotRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

            $numRecords = intval($sqlTotRecords[0]["numRecords"]);

            $result = array();

            foreach($sqlRecords as $instance) {
                $resultAux = array();
                $resultAux['name'] = $instance['failureCause'];
                $resultAux['y'] = round(($instance['quantity'] / $numRecords) * 100, 2);
                array_push($result, $resultAux);
            }
        } 
        catch (DBALException $e) 
        {
            $result = $e->getMessage();
        }

        return json_encode($result);
    }


    
    
}
