<?php

namespace App\Repository;

use App\Entity\InterventionStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InterventionStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterventionStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterventionStatus[]    findAll()
 * @method InterventionStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterventionStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InterventionStatus::class);
    }

    // /**
    //  * @return InterventionStatus[] Returns an array of InterventionStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InterventionStatus
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que recoge los posibles estados de una intervención
     * 
     * @param boolean $dashboardChosenVersion   Solo se devolverán los estados: "Finalizada", "Rechazada" y "Facturada" para el chosen select del dashboard 
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getArrayInterventionStatus($dashboardChosenVersion = false)
    {
        $where = " WHERE TRUE ";

        //Montamos la consulta
        $sql = "SELECT
                    is.id AS `id`,
                    is.description AS `description`
                FROM intervention_status AS `is`
                ";
        
        if($dashboardChosenVersion) {
            $where .= " AND is.code IN ('F','R','T') ";
        }

        $orderBy = " ORDER BY `description` ASC ";

        $sql = $sql . $where . $orderBy;

        //Ejecutamos la consulta
        $conn = $this->getEntityManager()->getConnection();
        $queryRecords = $conn->executeQuery($sql)->fetchAll(\PDO::FETCH_ASSOC);

        return $queryRecords;
    }

}
