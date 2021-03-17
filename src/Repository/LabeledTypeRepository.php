<?php

namespace App\Repository;

use App\Entity\LabeledType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LabeledType|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabeledType|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabeledType[]    findAll()
 * @method LabeledType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabeledTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LabeledType::class);
    }

    // /**
    //  * @return LabeledType[] Returns an array of LabeledType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LabeledType
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que rellena el chosen de rotulado de grúas (cranes)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listCraneLabel() 
    {
        //Montamos la consulta
        $query = "SELECT 
                    l.id          AS `id`,
                    l.description AS `description`
                FROM labeled_type AS l
                ORDER BY l.description ASC
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
