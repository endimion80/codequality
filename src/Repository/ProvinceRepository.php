<?php

namespace App\Repository;

use App\Entity\Province;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Province|null find($id, $lockMode = null, $lockVersion = null)
 * @method Province|null findOneBy(array $criteria, array $orderBy = null)
 * @method Province[]    findAll()
 * @method Province[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProvinceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Province::class);
    }

    // /**
    //  * @return Province[] Returns an array of Province objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Province
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que recoge todas las provincias
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getProvinces()
    {
        //Montamos la consulta
        $sql = "SELECT
                    p.id AS `id`,
                    p.name AS `name`
                FROM province AS p
                WHERE p.name != \"INDETERMINADA\"
                ORDER BY p.name ASC
                ";
                
        //Ejecutamos la consulta
        $conn = $this->getEntityManager()->getConnection();
                
        $queryRecords = $conn->executeQuery($sql)->fetchAll(\PDO::FETCH_ASSOC);
        
        return $queryRecords;
    }
}
