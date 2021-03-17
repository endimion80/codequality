<?php

namespace App\Repository;

use App\Entity\CraneService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CraneService|null find($id, $lockMode = null, $lockVersion = null)
 * @method CraneService|null findOneBy(array $criteria, array $orderBy = null)
 * @method CraneService[]    findAll()
 * @method CraneService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CraneServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CraneService::class);
    }

    // /**
    //  * @return CraneService[] Returns an array of CraneService objects
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
    public function findOneBySomeField($value): ?CraneService
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
