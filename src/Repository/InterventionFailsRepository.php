<?php

namespace App\Repository;

use App\Entity\InterventionFails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InterventionFails|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterventionFails|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterventionFails[]    findAll()
 * @method InterventionFails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterventionFailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InterventionFails::class);
    }

    // /**
    //  * @return InterventionFails[] Returns an array of InterventionFails objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InterventionFails
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
