<?php

namespace App\Repository;

use App\Entity\SinisterTypeExtension;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SinisterTypeExtension|null find($id, $lockMode = null, $lockVersion = null)
 * @method SinisterTypeExtension|null findOneBy(array $criteria, array $orderBy = null)
 * @method SinisterTypeExtension[]    findAll()
 * @method SinisterTypeExtension[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SinisterTypeExtensionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SinisterTypeExtension::class);
    }

    // /**
    //  * @return SinisterTypeExtension[] Returns an array of SinisterTypeExtension objects
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
    public function findOneBySomeField($value): ?SinisterTypeExtension
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
