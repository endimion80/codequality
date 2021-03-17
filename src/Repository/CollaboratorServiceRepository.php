<?php

namespace App\Repository;

use App\Entity\CollaboratorService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CollaboratorService|null find($id, $lockMode = null, $lockVersion = null)
 * @method CollaboratorService|null findOneBy(array $criteria, array $orderBy = null)
 * @method CollaboratorService[]    findAll()
 * @method CollaboratorService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollaboratorServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CollaboratorService::class);
    }

    // /**
    //  * @return CollaboratorService[] Returns an array of CollaboratorService objects
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
    public function findOneBySomeField($value): ?CollaboratorService
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
     * Función que obtiene los servicios preferentes de una grúa
     * 
     * @param string    $craneId     String con la ID de la grúa
     * @param intenger  $serviceType Tipo de servicio (1 -> Preferente, 2 -> Disponible)
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getServicesByCrane($craneId, $serviceType) 
    {
        //Montamos la consulta
        $query = "SELECT 
                    cs.id          AS `id`,
                    cs.description AS `description`,
                    crane_service.id AS `crane_service_id`
                FROM collaborator_service AS cs
                INNER JOIN crane_service ON cs.id = crane_service.collaborator_service_id 
                    AND (crane_service.date_from IS NOT NULL AND crane_service.date_from <=NOW()) 
                    AND (crane_service.date_to > NOW() OR crane_service.date_to IS NULL)
                ";

        $where = " WHERE TRUE ";
        $orderBy = " ORDER BY cs.description ASC ";

        if(!is_null($craneId) && $craneId != "") {
            $where .= " AND crane_service.crane_id = $craneId ";
        }

        if(!is_null($serviceType) && $serviceType != "") {
            $where .= " AND crane_service.crane_service_type_id = $serviceType ";
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

    /**
     * Función que obtiene los servicios no asignados a una grúa (Ni preferentes ni disponibles)
     * 
     * @param string    $craneId     String con la ID de la grúa
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getNotAssignedServicesByCrane($craneId) 
    {
        //Montamos la consulta
        $query = "SELECT
                    cs.id                     AS `id`,
                    cs.description            AS `description`
                FROM collaborator_service AS cs
                LEFT JOIN crane_service ON cs.id = crane_service.collaborator_service_id 
                    AND (crane_service.date_from IS NOT NULL AND crane_service.date_from <=NOW()) 
                    AND (crane_service.date_to > NOW() OR crane_service.date_to IS NULL)
                ";

        $where = " WHERE TRUE ";
        $groupBy = " GROUP BY cs.id ";
        $orderBy = " ORDER BY cs.description ASC ";

        if(!is_null($craneId) && $craneId != "") {
            $where .= " AND crane_service.crane_id != $craneId OR crane_service.crane_id IS NULL ";
        }

        $query = $query . $where . $groupBy . $orderBy;
                
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
