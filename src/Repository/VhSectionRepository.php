<?php

namespace App\Repository;

use App\Entity\VhSection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VhSection|null find($id, $lockMode = null, $lockVersion = null)
 * @method VhSection|null findOneBy(array $criteria, array $orderBy = null)
 * @method VhSection[]    findAll()
 * @method VhSection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VhSectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, VhSection::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    // /**
    //  * @return VhSection[] Returns an array of VhSection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VhSection
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función para obtener las secciones de un tipo de vehículo
     *
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $vhTypeId  ID del tipo de vehículo
     * @return Array $result
     */
    public function getSectionsByVhType($vhTypeId) {
        
        $sql = "SELECT DISTINCT
                    vh_section.id AS `id`,
                    vh_section.description AS `description`
                
                FROM vh_section_part AS vsp
                LEFT JOIN vh_section On vh_section.id = vsp.vh_section_id
            ";

        if(!is_null($vhTypeId) && $vhTypeId != "") {
            $where = " WHERE vsp.vh_type_id = :vh_type_id ";
        }

        $sql = $sql . $where;

        $parameters = [];
        $parameters['vh_type_id'] = $vhTypeId;

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_ASSOC);

        return $queryRecords;
    }

}
