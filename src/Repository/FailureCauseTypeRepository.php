<?php

namespace App\Repository;

use App\Entity\FailureCauseType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FailureCauseType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FailureCauseType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FailureCauseType[]    findAll()
 * @method FailureCauseType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FailureCauseTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FailureCauseType::class);
    }

    // /**
    //  * @return FailureCauseType[] Returns an array of FailureCauseType objects
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
    public function findOneBySomeField($value): ?FailureCauseType
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
