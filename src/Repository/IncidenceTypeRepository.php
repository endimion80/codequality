<?php

namespace App\Repository;

use App\Entity\IncidenceType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO; 

/**
 * @method IncidenceType|null find($id, $lockMode = null, $lockVersion = null)
 * @method IncidenceType|null findOneBy(array $criteria, array $orderBy = null)
 * @method IncidenceType[]    findAll()
 * @method IncidenceType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncidenceTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, IncidenceType::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }


    /**
     * Tipo de incidencia por fase
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array Array de parametros obtenidos
     */
    public function getArrayListByPhaseCode($phaseCode){

        $sql = "SELECT it.id AS incidence_type_id, it.description
                 FROM incidence_type AS it
                 LEFT JOIN incidence_of_phase AS iof ON iof.incidence_type_id = it.id
                 LEFT JOIN phase AS p ON p.id = iof.phase_id 
                 WHERE p.code = :phaseCode
                 ";
        $parameters = [];
        $parameters['phaseCode'] = $phaseCode;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);
     
        return $queryRecords;
    }



    // /**
    //  * @return IncidenceType[] Returns an array of IncidenceType objects
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
    public function findOneBySomeField($value): ?IncidenceType
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
