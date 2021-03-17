<?php

namespace App\Repository;

use App\Entity\RequestCraneCraneType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RequestCraneCraneType|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestCraneCraneType|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestCraneCraneType[]    findAll()
 * @method RequestCraneCraneType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestCraneCraneTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestCraneCraneType::class);
    }

    // /**
    //  * @return RequestCraneCraneType[] Returns an array of RequestCraneCraneType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RequestCraneCraneType
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
