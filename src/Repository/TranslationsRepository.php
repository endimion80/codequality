<?php

namespace App\Repository;

use App\Entity\Translations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use PDO;

/**
 * @method Translations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Translations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Translations[]    findAll()
 * @method Translations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TranslationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry,
                                EntityManagerInterface $em)
    {
        parent::__construct($registry, Translations::class);
        $this->em = $em;
    }

    public function missingLanguagesInstances(){
        
        // $qb = $this->em->createQueryBuilder();

        // $qb->select('t')
        //     ->from(Translations::class, 't')
        //     ->where($qb->expr()->orX(
        //         $qb->expr()->isNull('t.en'),
        //         $qb->expr()->isNull('t.fr'),
        //         $qb->expr()->isNull('t.it'),
        //         $qb->expr()->isNull('t.pt')
        //     ));

        // $query = $qb->getQuery();

        // $queryResult = $query->getResult();

        $query = 'SELECT    t.id                AS `id`,
                            t.source            AS source,
                            t.es                AS es,
                            t.en                AS en,
                            t.fr                AS fr,
                            t.it                AS it,
                            t.pt                AS pt,
                            t.need_check        AS need_check,
                            t.first_translation AS first_translation
                  FROM translations t
                  WHERE ( t.en IS NULL OR t.en = "" OR
                          t.fr IS NULL OR t.fr = "" OR
                          t.it IS NULL OR t.it = "" OR
                          t.pt IS NULL OR t.pt = "")';

        $conn = $this->getEntityManager()->getConnection();
        $queryResult = $conn->executeQuery($query)->fetchAll(\PDO::FETCH_ASSOC);

        return $queryResult;
       }

       /**
         * Función que filtra y rellena la tabla de traducciones
         * 
         * @author Antonio Romero <antonio.romero@kosaas.com>
         */
       public function searchTranslationsTable($params, $form_filters, $search_filter)
       {
           //Array con las columnas para la ordenación
           $columns = [
               0 => "source",
               1 => "es",
               2 => "en",
               3 => "fr",
               4 => "it",
               5 => "pt",
               6 => "need_check"
            ];
   
           $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
           $where = " WHERE TRUE ";
   
           //* Procesamos los filtros

           // Filtro de búsqueda general
            if( !is_null($search_filter) && $search_filter != '') {
                $where .= " AND t.source LIKE '%"."$search_filter"."%' 
                        OR t.es          LIKE '%"."$search_filter"."%' 
                        OR t.en          LIKE '%"."$search_filter"."%'  
                        OR t.fr          LIKE '%"."$search_filter"."%'               
                        OR t.it          LIKE '%"."$search_filter"."%'               
                        OR t.pt          LIKE '%"."$search_filter"."%'               
                        OR t.need_check  LIKE '%"."$search_filter"."%'                             
                        ";
            }
   
           //Montamos la consulta
           $sql = "SELECT   t.id         AS `id`,
                            t.source     AS source,
                            t.es         AS es,
                            t.en         AS en,
                            t.fr         AS fr,
                            t.it         AS it,
                            t.pt         AS pt,
                            t.need_check AS need_check
   
                   FROM translations AS t
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
                   $sqlRec .= " ORDER BY source ASC";
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
