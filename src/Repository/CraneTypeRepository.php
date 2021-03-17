<?php

namespace App\Repository;

use App\Entity\CraneType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CraneType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CraneType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CraneType[]    findAll()
 * @method CraneType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CraneTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, CraneType::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    // /**
    //  * @return CraneType[] Returns an array of CraneType objects
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
    public function findOneBySomeField($value): ?CraneType
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
     * Función para obtener el tipo de grúas disponibles para una sucursal
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $collaboratorId   ID de la entidad colaboradora
     * @param string $branchOfficeId   ID de la sucursal
     * 
     * @return $queryRecords
     */
    public function getCraneTypesByBranchOffice($collaboratorId, $branchOfficeId){
        
        $parameters = [];

        $sql = "SELECT
                    c.crane_type_id AS `id`,
                    ct.description as `description`

                FROM branch_office_crane AS boc
                LEFT JOIN crane AS c ON c.id = boc.crane_id
                LEFT JOIN crane_type AS ct ON ct.id = c.crane_type_id
            ";

        $where = "WHERE boc.date_from <= NOW() AND (boc.date_to > NOW() OR boc.date_to IS NULL ) 
                    AND c.creation_date <= NOW() AND (c.deletion_date > NOW() OR c.deletion_date IS NULL)
                    AND c.collaborator_id = :collaborator_id 
                 ";

        $parameters['collaborator_id'] = $collaboratorId;

        if( !is_null($branchOfficeId) && $branchOfficeId != "" ) {
            $where .= "AND boc.branch_office_id = :branch_office_id" ;
            $parameters['branch_office_id'] = $branchOfficeId;
        }

        $groupBy = " GROUP BY ct.id ";
        $orderBy = " ORDER BY ct.description ASC ";

        $sql = $sql . $where . $groupBy . $orderBy;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_ASSOC);

        return $queryRecords;
    }

}
