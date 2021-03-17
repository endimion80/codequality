<?php

namespace App\Repository;

use App\Entity\VhBrand;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VhBrand|null find($id, $lockMode = null, $lockVersion = null)
 * @method VhBrand|null findOneBy(array $criteria, array $orderBy = null)
 * @method VhBrand[]    findAll()
 * @method VhBrand[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VhBrandRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VhBrand::class);
    }

    // /**
    //  * @return VhBrand[] Returns an array of VhBrand objects
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
    public function findOneBySomeField($value): ?VhBrand
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
