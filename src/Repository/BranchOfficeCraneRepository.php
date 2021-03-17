<?php

namespace App\Repository;

use App\Entity\BranchOfficeCrane;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BranchOfficeCrane|null find($id, $lockMode = null, $lockVersion = null)
 * @method BranchOfficeCrane|null findOneBy(array $criteria, array $orderBy = null)
 * @method BranchOfficeCrane[]    findAll()
 * @method BranchOfficeCrane[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BranchOfficeCraneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, BranchOfficeCrane::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    /**
     * Obtiene un array con los códigos (code) de las sucursales de una grúa
     * 
     * @param string    $craneId     String con la ID de la grúa
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getArrayBranchOfficesCodeByCrane($craneId) {
        
        $parameters = [];
        
        $sql = "SELECT DISTINCT
                    bo.code     AS `code`
                FROM branch_office_crane AS boc
                LEFT JOIN branch_office AS bo ON boc.branch_office_id = bo.id
                ";

        // Filtramos por la grúa
        $where = " WHERE boc.crane_id = :crane_id ";
        $parameters['crane_id'] = $craneId;

        // Obtenemos solo las sucursales que no hayan expirado para esa grúa
        $where .= " AND (boc.date_from IS NOT NULL AND boc.date_from <= NOW()) AND (boc.date_to > NOW() OR boc.date_to IS NULL) ";

        $sql = $sql . $where;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_COLUMN);
        return $queryRecords;
    }

    // /**
    //  * @return BranchOfficeCrane[] Returns an array of BranchOfficeCrane objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BranchOfficeCrane
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
