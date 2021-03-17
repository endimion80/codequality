<?php

namespace App\Repository;

use App\Entity\Town;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Town|null find($id, $lockMode = null, $lockVersion = null)
 * @method Town|null findOneBy(array $criteria, array $orderBy = null)
 * @method Town[]    findAll()
 * @method Town[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TownRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Town::class);
    }

    // /**
    //  * @return Town[] Returns an array of Town objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Town
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que recoge todas las localidades
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getTowns($provinceId, $selectFormat = false)
    {
        $where = " WHERE TRUE ";

        //Montamos la consulta
        if($selectFormat) {
            $sql = "SELECT
                        GROUP_CONCAT('<option value=\"',t.id,'\">', t.name, '</option>' SEPARATOR '') AS html
                    FROM town AS t
                    GROUP BY NULL
                    ";
        } else {
            $sql = "SELECT
                        t.id AS `id`,
                        t.name AS `name`
                    FROM town AS t
                    ";
        }
        if($provinceId) {
            $where .= ' AND t.province_id = '.$provinceId.' ';
        }

        $where .= ' AND t.name != "INDETERMINADA" ';

        $orderBy = " ORDER BY t.name ASC ";

        $sql = $sql . $where . $orderBy;

        //Ejecutamos la consulta
        $conn = $this->getEntityManager()->getConnection();
                
        $queryRecords = $conn->executeQuery($sql)->fetchAll(\PDO::FETCH_ASSOC);

        return $queryRecords;
    }
}
