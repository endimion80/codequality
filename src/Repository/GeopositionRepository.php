<?php

namespace App\Repository;

use App\Entity\Geoposition;
use App\Entity\Operator;
use App\Entity\Intervention;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method Geoposition|null find($id, $lockMode = null, $lockVersion = null)
 * @method Geoposition|null findOneBy(array $criteria, array $orderBy = null)
 * @method Geoposition[]    findAll()
 * @method Geoposition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeopositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Geoposition::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    /**
     * Obtenemos el listado de localizaciones de una intervencion
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Operator $operator - Entidad del operador (gruista)
     * @param int $nMonthsLog - meses de historico que saca la consulta
     * @return array
     */
    public function getGeopositionHistoryLog(Operator $operator, $nMonthsLog = 1){

        $sql = "SELECT creation_date, latitude, longitude
                 FROM geoposition 
                 WHERE operator_id = :operator AND 
                        creation_date > :lastMonth
                 ORDER BY creation_date DESC";
        $now = new \DateTime();
        $now->modify( '-'.intVal($nMonthsLog).' month' );
        
        $parameters = [];
        $parameters['operator'] = $operator->getId();
        $parameters['lastMonth'] = $now->format('Y-m-d H:i:s');

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
      
        return $queryRecords;
    }


    /**
     * Obtenemos el listado de localizaciones de un operador para una intervención determinada
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention - Intervencion
     * @return array
     */
    public function getInterventionGeopositionHistoryForMap(Intervention $intervention){
        $initDate = null;
        $endDate = null;        
        
        $phase_status = " AND phl.phase_id IN (1,2,3,4,5,6,7,8,9,10,11,13,15,16,17,18) "; 

        // Primero obtenemos la fecha de la primera fase marcada por el operador
        $sql = "SELECT DATE_FORMAT(phl.creation_date, '%Y-%m-%d %H:%i:%s') AS creation_date
            FROM phase_log AS phl 
            LEFT JOIN intervention AS i ON i.id = phl.intervention_id 
            WHERE   i.id = :intervention AND
                    i.operator_id = phl.operator_id ".$phase_status."
            ORDER BY creation_date ASC
            LIMIT 0,1;";
        
        $parameters = [];
        $parameters['intervention'] = $intervention->getId();

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

        if (isset($queryRecords[0]) && isset($queryRecords[0]['creation_date']))
            $initDate = $queryRecords[0]['creation_date'];


        // Segundo obtenemos la fecha de la primera fase marcada por el operador
        $sql = "SELECT DATE_FORMAT(phl.creation_date, '%Y-%m-%d %H:%i:%s') AS creation_date
            FROM phase_log AS phl 
            LEFT JOIN intervention AS i ON i.id = phl.intervention_id 
            WHERE   i.id = :intervention AND
                    i.operator_id = phl.operator_id  ".$phase_status."
            ORDER BY creation_date DESC
            LIMIT 0,1;";
        
        $parameters = [];
        $parameters['intervention'] = $intervention->getId();

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

        if (isset($queryRecords[0]) && isset($queryRecords[0]['creation_date']))
            $endDate = $queryRecords[0]['creation_date'];
        
        if(!is_null($initDate) && !is_null($endDate)){
            $sql = "SELECT creation_date, latitude, longitude
                        FROM geoposition 
                        WHERE operator_id = :operator AND 
                            creation_date BETWEEN :initDate AND :endDate
                        GROUP BY latitude, longitude
                        ORDER BY creation_date ASC";
            
            $parameters = [];
            $parameters['operator'] = $intervention->getOperator()->getId();
            $parameters['initDate'] = $initDate;
            $parameters['endDate'] = $endDate;

            $qr = $this->conn->prepare($sql);
            $qr->execute($parameters);

            // Obtenemos el resultado
            $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
            return $queryRecords;
        }
        return [];
    }


    /**
     * Obtenemos el listado de localizaciones de un operador por fechas
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention - Intervencion
     * @return array
     */
    public function getInterventionGeopositionHistoryOperatorForMap(Operator $operator, $initDate, $endDate){
        $real_initDate = \DateTime::createFromFormat('Y-m-d H:i:s', $initDate);
        $real_endDate = \DateTime::createFromFormat('Y-m-d H:i:s', $endDate);

        if(!is_null($real_initDate) && !is_null($real_endDate)){
            $sql = "SELECT creation_date, latitude, longitude
                        FROM geoposition 
                        WHERE operator_id = :operator AND 
                            creation_date BETWEEN :initDate AND :endDate
                        GROUP BY latitude, longitude
                        ORDER BY creation_date ASC";
            
            $parameters = [];
            $parameters['operator'] = $operator->getId();
            $parameters['initDate'] = $real_initDate->format('Y-m-d H:i:s');
            $parameters['endDate'] = $real_endDate->format('Y-m-d H:i:s');
            
            $qr = $this->conn->prepare($sql);
            $qr->execute($parameters);

            // Obtenemos el resultado
            $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
            return $queryRecords;
        }
        return [];
    }


}
