<?php

namespace App\Repository;

use App\Entity\VhModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VhModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method VhModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method VhModel[]    findAll()
 * @method VhModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VhModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VhModel::class);
    }

    // /**
    //  * @return VhModel[] Returns an array of VhModel objects
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
    public function findOneBySomeField($value): ?VhModel
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
