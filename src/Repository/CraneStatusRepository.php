<?php

namespace App\Repository;

use App\Entity\CraneStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CraneStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method CraneStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method CraneStatus[]    findAll()
 * @method CraneStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CraneStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CraneStatus::class);
    }

    // /**
    //  * @return CraneStatus[] Returns an array of CraneStatus objects
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
    public function findOneBySomeField($value): ?CraneStatus
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
     * Función que rellena el chosen de estado de grúas (cranes)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listCraneStatus() 
    {
        //Montamos la consulta
        $query = "SELECT 
                    cs.id          AS `id`,
                    cs.description AS `status`
                  FROM crane_status AS cs
                  ORDER BY cs.id ASC
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
