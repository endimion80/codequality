<?php

namespace App\Repository;

use App\Entity\InterventionLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InterventionLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterventionLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterventionLog[]    findAll()
 * @method InterventionLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterventionLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InterventionLog::class);
    }

    // /**
    //  * @return InterventionLog[] Returns an array of InterventionLog objects
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
    public function findOneBySomeField($value): ?InterventionLog
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
