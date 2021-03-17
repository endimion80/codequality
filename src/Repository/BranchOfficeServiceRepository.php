<?php

namespace App\Repository;

use App\Entity\BranchOfficeService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BranchOfficeService|null find($id, $lockMode = null, $lockVersion = null)
 * @method BranchOfficeService|null findOneBy(array $criteria, array $orderBy = null)
 * @method BranchOfficeService[]    findAll()
 * @method BranchOfficeService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BranchOfficeServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BranchOfficeService::class);
    }

    // /**
    //  * @return BranchOfficeService[] Returns an array of BranchOfficeService objects
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
    public function findOneBySomeField($value): ?BranchOfficeService
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
