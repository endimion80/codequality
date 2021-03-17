<?php

namespace App\Repository;

use App\Entity\WheelLock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WheelLock|null find($id, $lockMode = null, $lockVersion = null)
 * @method WheelLock|null findOneBy(array $criteria, array $orderBy = null)
 * @method WheelLock[]    findAll()
 * @method WheelLock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WheelLockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WheelLock::class);
    }

    // /**
    //  * @return WheelLock[] Returns an array of WheelLock objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WheelLock
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
