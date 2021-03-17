<?php

namespace App\Repository;

use App\Entity\Model;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Model|null find($id, $lockMode = null, $lockVersion = null)
 * @method Model|null findOneBy(array $criteria, array $orderBy = null)
 * @method Model[]    findAll()
 * @method Model[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Model::class);
    }

    // /**
    //  * @return Model[] Returns an array of Model objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Model
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que rellena el chosen de los modelos de grúa (cranes)
     * 
     * @param string $brandId String con la ID de la marca por la que hay que filtrar
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listCraneModel($brandId) 
    {
        //Montamos la consulta
        $query = "SELECT 
                    m.id          AS `id`,
                    m.description AS `description`
                FROM model AS m
                ";

        $where = " WHERE TRUE ";
        $orderBy = " ORDER BY m.id ASC ";

        if(!is_null($brandId) && $brandId != "") {
            $where = " WHERE m.brand_id = $brandId ";
        }
        
        $query = $query . $where . $orderBy;
                
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
