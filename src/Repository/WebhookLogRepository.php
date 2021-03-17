<?php

namespace App\Repository;

use App\Entity\WebhookLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WebhookLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method WebhookLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method WebhookLog[]    findAll()
 * @method WebhookLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebhookLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WebhookLog::class);
    }

    // /**
    //  * @return WebhookLog[] Returns an array of WebhookLog objects
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
    public function findOneBySomeField($value): ?WebhookLog
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
