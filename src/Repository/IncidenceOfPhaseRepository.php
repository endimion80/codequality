<?php

namespace App\Repository;

use App\Entity\IncidenceOfPhase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IncidenceOfPhase|null find($id, $lockMode = null, $lockVersion = null)
 * @method IncidenceOfPhase|null findOneBy(array $criteria, array $orderBy = null)
 * @method IncidenceOfPhase[]    findAll()
 * @method IncidenceOfPhase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncidenceOfPhaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IncidenceOfPhase::class);
    }

    // /**
    //  * @return IncidenceOfPhase[] Returns an array of IncidenceOfPhase objects
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
    public function findOneBySomeField($value): ?IncidenceOfPhase
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
