<?php

namespace App\Repository;

use App\Entity\InterventionFailureType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method InterventionFailureType|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterventionFailureType|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterventionFailureType[]    findAll()
 * @method InterventionFailureType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterventionFailureTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, InterventionFailureType::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }


    /**
     * Obtención del listado
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array Array de parametros obtenidos
     */
    public function getArrayList(){

        $sql = "SELECT ift.id AS intervention_failure_type_id, ift.description
                 FROM intervention_failure_type AS ift
                 ORDER BY ift.id
                 ";
        $parameters = [];
        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
     
        return $queryRecords;
    }

    // /**
    //  * @return InterventionFailureType[] Returns an array of InterventionFailureType objects
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
    public function findOneBySomeField($value): ?InterventionFailureType
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
