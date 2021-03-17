<?php

namespace App\Repository;

use App\Entity\VhType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VhType|null find($id, $lockMode = null, $lockVersion = null)
 * @method VhType|null findOneBy(array $criteria, array $orderBy = null)
 * @method VhType[]    findAll()
 * @method VhType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VhTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VhType::class);
    }

    // /**
    //  * @return VhType[] Returns an array of VhType objects
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
    public function findOneBySomeField($value): ?VhType
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
