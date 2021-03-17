<?php

namespace App\Repository;

use App\Entity\PhaseLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method PhaseLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhaseLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhaseLog[]    findAll()
 * @method PhaseLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhaseLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, PhaseLog::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    /**
     * Obtenemos el listado de fases de una intervencion
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param int $intervention_id - Id de la intervencion
     * @return array
     */
    public function getGetLogForMap($intervention_id){
        $sql = "SELECT  ph.id AS phase_id,
                        ph.description AS description, 
                        phl.creation_date AS creation_date, 
                        op.name AS operator_name,
                        phl.latitude AS latitude,
                        phl.longitude AS longitude
                FROM phase_log AS phl 
                LEFT JOIN phase AS ph ON ph.id = phl.phase_id 
                LEFT JOIN operator AS op ON op.id = phl.operator_id
                WHERE phl.intervention_id = :intervention_id
                ORDER BY phl.creation_date ASC";
        
        $parameters = [];
        $parameters['intervention_id'] = $intervention_id;
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
        return $queryRecords;
    }
}
