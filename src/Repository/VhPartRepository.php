<?php

namespace App\Repository;

use App\Entity\VhPart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VhPart|null find($id, $lockMode = null, $lockVersion = null)
 * @method VhPart|null findOneBy(array $criteria, array $orderBy = null)
 * @method VhPart[]    findAll()
 * @method VhPart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VhPartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VhPart::class);
    }

    // /**
    //  * @return VhPart[] Returns an array of VhPart objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VhPart
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
