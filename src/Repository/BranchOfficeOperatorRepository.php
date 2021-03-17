<?php

namespace App\Repository;

use App\Entity\BranchOfficeOperator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BranchOfficeOperator|null find($id, $lockMode = null, $lockVersion = null)
 * @method BranchOfficeOperator|null findOneBy(array $criteria, array $orderBy = null)
 * @method BranchOfficeOperator[]    findAll()
 * @method BranchOfficeOperator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BranchOfficeOperatorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BranchOfficeOperator::class);
    }

    // /**
    //  * @return BranchOfficeOperator[] Returns an array of BranchOfficeOperator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BranchOfficeOperator
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
