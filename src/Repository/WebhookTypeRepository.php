<?php

namespace App\Repository;

use App\Entity\WebhookType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WebhookType|null find($id, $lockMode = null, $lockVersion = null)
 * @method WebhookType|null findOneBy(array $criteria, array $orderBy = null)
 * @method WebhookType[]    findAll()
 * @method WebhookType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebhookTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WebhookType::class);
    }

    // /**
    //  * @return WebhookType[] Returns an array of WebhookType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WebhookType
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
