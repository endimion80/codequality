<?php

namespace App\Repository;

use App\Entity\CancellationType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;


/**
 * @method CancellationType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CancellationType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CancellationType[]    findAll()
 * @method CancellationType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CancellationTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, CancellationType::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }


    /**
     * Motivo de cancelación del servicio
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array Array de parametros obtenidos
     */
    public function getArrayListByStatusCode($statusCode){

        $sql = "SELECT ct.id, ct.description
                 FROM cancellation_type AS ct
                 LEFT JOIN intervention_status AS ist ON ist.id = ct.intervention_status_id
                 WHERE ist.code = :statusCode
                 ";
        $parameters = [];
        $parameters['statusCode'] = $statusCode;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
     
        return $queryRecords;
    }

    // /**
    //  * @return CancellationType[] Returns an array of CancellationType objects
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
    public function findOneBySomeField($value): ?CancellationType
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
