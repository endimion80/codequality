<?php

namespace App\Repository;

use App\Entity\SinisterType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SinisterType|null find($id, $lockMode = null, $lockVersion = null)
 * @method SinisterType|null findOneBy(array $criteria, array $orderBy = null)
 * @method SinisterType[]    findAll()
 * @method SinisterType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SinisterTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SinisterType::class);
    }

    // /**
    //  * @return SinisterType[] Returns an array of SinisterType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SinisterType
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
