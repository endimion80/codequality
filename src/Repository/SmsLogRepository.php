<?php

namespace App\Repository;

use App\Entity\SmsLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method SmsLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method SmsLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method SmsLog[]    findAll()
 * @method SmsLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmsLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, SmsLog::class);
        $this->em = $em;
    }

    /**
     * Función para guardar los Logs de los SMS
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param array   $sms
     * array
     *  [intervention_id]       String Identificador de la intervencion (es opcional..)
     *  [type]                  String Tipología (opcional)
     *  [from]                  String Remitente (opcional)
     *  [to]                    String telefono movil destino
     *  [content]               String Contenido
     * @param string    $originator Remitente (se guarda el definitivo, no el de $sms)
     * @param string    $recipients Destinatario (se guarda el definitivo, no el de $sms)
     * @param string    $body  Cuerpo SMS (se guarda el definitivo, no el de $sms)
     * @param bool      $delivered Indica si se envio con éxito
     * @param string    $debug guardamos logs en los casos de error
     * 
     * @return bool    true
     */
    public function setSmsLog($sms,$originator, $recipients, $body, $delivered, $debug = null){
        $em = $this->em;

        $smsLog = new SmsLog();

        if (isset($sms['intervention_id'])){
            $intervention = $this->em->getRepository('App:Intervention')->findOneById($sms['intervention_id']);
            if(!is_null($intervention)){
                $smsLog->setIntervention($intervention);
            }
        }
        $type = null;
        if (isset($sms['type'])){
            $type = $sms['type'];
        }
        $smsLog->setSmsContent($body);
        $smsLog->setSmsName($originator);
        $smsLog->setSmsType($type);
        $smsLog->setSmsPhone($recipients);
        $smsLog->setIsDelivered($delivered);
        if (!$delivered)
            $smsLog->setDebug($debug);

        $em->persist($smsLog);
        $em->flush();

        return true;
    }

    /**
     * Función que filtra y rellena la tabla de log de SMS
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchSmsLogTable($params, $form_filters, $search_filter)
    {
        //Array con las columnas para la ordenación
        $columns = [
            0 => "intervention_id",
            1 => "creation_date",
            2 => "sms_content",
            3 => "sms_name",
            4 => "sms_type",
            5 => "sms_phone",
            6 => "is_delivered",
            7 => "debug"
            ];

        //$qr = $em->getConnection();
        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";

        //* Procesamos los filtros
        
        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND sl.intervention_id LIKE '%"."$search_filter"."%' 
                    OR sl.creation_date LIKE '%"."$search_filter"."%' 
                    OR sl.sms_content   LIKE '%"."$search_filter"."%'  
                    OR sl.sms_name      LIKE '%"."$search_filter"."%'               
                    OR sl.sms_type      LIKE '%"."$search_filter"."%'               
                    OR sl.sms_phone     LIKE '%"."$search_filter"."%'               
                    OR sl.debug         LIKE '%"."$search_filter"."%'                             
                    ";
        }

        //Montamos la consulta
        $sql = "SELECT  sl.id               AS `id`,
                        sl.intervention_id  AS intervention_id,
                        sl.creation_date    AS `creation_date`,
                        sl.sms_content      AS sms_content,
                        sl.sms_name         AS sms_name,
                        sl.sms_type         AS sms_type,
                        sl.sms_phone        AS sms_phone,
                        sl.is_delivered     AS is_delivered,
                        sl.debug            AS debug

                FROM sms_log AS sl

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
