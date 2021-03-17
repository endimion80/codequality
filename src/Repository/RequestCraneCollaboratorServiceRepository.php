<?php

namespace App\Repository;

use App\Entity\RequestCraneCollaboratorService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RequestCraneCollaboratorService|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestCraneCollaboratorService|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestCraneCollaboratorService[]    findAll()
 * @method RequestCraneCollaboratorService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestCraneCollaboratorServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestCraneCollaboratorService::class);
    }

    // /**
    //  * @return RequestCraneCollaboratorService[] Returns an array of RequestCraneCollaboratorService objects
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
    public function findOneBySomeField($value): ?RequestCraneCollaboratorService
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
