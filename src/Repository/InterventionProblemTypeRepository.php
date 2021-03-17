<?php

namespace App\Repository;

use App\Entity\InterventionProblemType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InterventionProblemType|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterventionProblemType|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterventionProblemType[]    findAll()
 * @method InterventionProblemType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterventionProblemTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InterventionProblemType::class);
    }

    // /**
    //  * @return InterventionProblemType[] Returns an array of InterventionProblemType objects
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
    public function findOneBySomeField($value): ?InterventionProblemType
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
