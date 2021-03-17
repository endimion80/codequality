<?php

namespace App\Repository;

use App\Entity\OperatorStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OperatorStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method OperatorStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method OperatorStatus[]    findAll()
 * @method OperatorStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperatorStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OperatorStatus::class);
    }

    // /**
    //  * @return OperatorStatus[] Returns an array of OperatorStatus objects
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
    public function findOneBySomeField($value): ?OperatorStatus
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
     * Función que rellena el chosen de estados de operarios (operators)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listOperatorStatus() 
    {
        //Montamos la consulta
        $query = "SELECT 
                    os.id            AS `id`,
                    os.description   AS `description`
                FROM operator_status AS os
                ORDER BY os.id ASC
                ";

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

}
