<?php

namespace App\Repository;

use App\Entity\AvailabilityOperatorStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method AvailabilityOperatorStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvailabilityOperatorStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvailabilityOperatorStatus[]    findAll()
 * @method AvailabilityOperatorStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvailabilityOperatorStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, AvailabilityOperatorStatus::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }


    /**
     * Obtenemos un listado en formato array de los estados
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array Array de parametros obtenidos
     */
    public function getArrayList(){

        $sql = "SELECT code, description, color
                 FROM availability_operator_status";
        $parameters = [];

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

      
        return $queryRecords;
    }

    /**
     * Función que rellena el chosen de la disponibilidad de los operarios (operators)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listOperatorAvailabilityStatus() 
    {
        //Montamos la consulta
        $query = "SELECT 
                      aos.id            AS `id`,
                      aos.description   AS `status`
                  FROM availability_operator_status AS aos
                  ORDER BY aos.id ASC
                ";

        try {
            //Ejecutamos la consulta
            $conn = $this->getEntityManager()->getConnection();
            $queryRecords = $conn->executeQuery($query)->fetchAll(\PDO::FETCH_ASSOC);
        } 
        catch (DBALException $e) 
        {
            $queryRecords = $e->getMessage();
        }

        return $queryRecords;
    }




    // /**
    //  * @return AvailabilityOperatorStatus[] Returns an array of AvailabilityOperatorStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AvailabilityOperatorStatus
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
