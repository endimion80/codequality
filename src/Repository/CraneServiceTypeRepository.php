<?php

namespace App\Repository;

use App\Entity\CraneServiceType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CraneServiceType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CraneServiceType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CraneServiceType[]    findAll()
 * @method CraneServiceType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CraneServiceTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CraneServiceType::class);
    }

    // /**
    //  * @return CraneServiceType[] Returns an array of CraneServiceType objects
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
    public function findOneBySomeField($value): ?CraneServiceType
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
