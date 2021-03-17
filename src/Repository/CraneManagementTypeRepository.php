<?php

namespace App\Repository;

use App\Entity\CraneManagementType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CraneManagementType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CraneManagementType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CraneManagementType[]    findAll()
 * @method CraneManagementType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CraneManagementTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CraneManagementType::class);
    }

    // /**
    //  * @return CraneManagementType[] Returns an array of CraneManagementType objects
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
    public function findOneBySomeField($value): ?CraneManagementType
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que rellena el chosen de tipo de gestión de grúas (cranes)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listCraneManagementType() 
    {
        //Montamos la consulta
        $query = "SELECT 
                    cmt.id          AS `id`,
                    cmt.description AS `description`
                FROM crane_management_type AS cmt
                ORDER BY cmt.id ASC
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

}
