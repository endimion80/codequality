<?php

namespace App\Repository;

use App\Entity\MailerLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method MailerLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailerLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailerLog[]    findAll()
 * @method MailerLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailerLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, MailerLog::class);
        $this->em = $em;
    }

    /**
     * Función para guardar el log de los mails 
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param array   $message
     * array['subject']
     *  [intervention_id]       String Identificador de la intervencion (es opcional..)
     *  [subject_id]            String Identificador del titulo de correo
     *  [subject]               String titulo del correo
     *  [from]                  String siempre es -@-.com
     *  [to]                    Array  array de correos a quien va dirigido
     *  [cc]                    Array  array de correos en copia
     *  [bcc]                   Array  array de correos en copia oculta
     *  [attachment]            Array  array de ficheros que a su vez tienen campos adiciones
     *  [type]                  Array  string para indicar el tipo de transporte
     *      [filename]          String nombre del fichero
     *      [contentType]       String tipo de contenido
     *      [body]              View   fichero renderizado
     *  [template]              Array  nombre de la plantilla de Twig
     *  [parametersTemplate]    Array  paramétros que necesita la plantilla para renderizar
     *
   
     * @param string    $templateRender Renderización de la plantilla
     * @param integer   $delivered Indica si fue enviado con éxito o no
     * @return mixed    $response 
     */
    public function setMailLog($message, $templateRender, $delivered){

        $em = $this->em;

        $mailerLog = new MailerLog();
        $currentDate = new \DateTime();

        // Inicializamos las variables
        $to = json_encode(array());
        $cc = json_encode(array());
        $bcc = json_encode(array());

        // Vamos a comprobar que el array tiene los índices
        if (array_key_exists('to', $message))
            $to = json_encode($message['to']);
        
        if(array_key_exists('cc', $message))
            $cc = json_encode($message['cc']);
        
        if (array_key_exists('bcc', $message))
            $bcc = json_encode($message['bcc']);

        $parametersTemplate = json_encode($message['parametersTemplate']);

        if (isset($message['intervention_id'])){
            $intervention = $this->em->getRepository('App:Intervention')->findOneById($message['intervention_id']);
            if(!is_null($intervention)){
                $mailerLog->setIntervention($intervention);
            }
        }
        $mailerLog->setSubject($message['subject']);
        $mailerLog->setEmailTo($to);
        $mailerLog->setEmailCc($cc);
        $mailerLog->setEmailBcc($bcc);
        $mailerLog->setTemplate($message['template']);
        $mailerLog->setTemplateContent($templateRender);
        $mailerLog->setLocale($message['locale']);
        $mailerLog->getIsDelivered($delivered);

        $em->persist($mailerLog);
        $em->flush();

    }

    /**
     * Función que filtra y rellena la tabla de log de emails
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchEmailLogTable($params, $form_filters, $search_filter)
    {
        //Array con las columnas para la ordenación
        $columns = [
            0 => "intervention_id",
            1 => "subject",
            2 => "creation_date",
            3 => "email_to",
            4 => "email_cc",
            5 => "email_bcc",
            6 => "is_delivered",
            7 => "template",
            8 => "template_content",
            9 => "locale",
           10 => "backup"
            ];

        //$qr = $em->getConnection();
        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = " WHERE TRUE ";

        //* Procesamos los filtros

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND ml.intervention_id LIKE '%"."$search_filter"."%' 
                    OR ml.subject          LIKE '%"."$search_filter"."%' 
                    OR ml.creation_date LIKE '%"."$search_filter"."%'  
                    OR ml.email_to       LIKE '%"."$search_filter"."%'               
                    OR ml.email_cc       LIKE '%"."$search_filter"."%'               
                    OR ml.email_bcc       LIKE '%"."$search_filter"."%'               
                    OR ml.template       LIKE '%"."$search_filter"."%'               
                    OR ml.locale       LIKE '%"."$search_filter"."%'               
                    OR ml.backup       LIKE '%"."$search_filter"."%'               
                    ";
        }

        //Montamos la consulta
        $sql = "SELECT  ml.id                   AS `id`,
                        ml.intervention_id      AS intervention_id,
                        ml.subject              AS `subject`,
                        ml.creation_date        AS creation_date,
                        ml.email_to             AS email_to,
                        ml.email_cc             AS email_cc,
                        ml.email_bcc            AS email_bcc,
                        ml.is_delivered         AS is_delivered,
                        ml.template             AS template,
                        ml.template_content     AS template_content,
                        ml.locale               AS locale,
                        ml.backup               AS backup

                FROM mailer_log AS ml

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
