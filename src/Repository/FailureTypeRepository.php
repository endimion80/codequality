<?php

namespace App\Repository;

use App\Entity\FailureType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FailureType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FailureType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FailureType[]    findAll()
 * @method FailureType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FailureTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FailureType::class);
    }

    // /**
    //  * @return FailureType[] Returns an array of FailureType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FailureType
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
