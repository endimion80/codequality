<?php

namespace App\Repository;

use App\Entity\VhSectionPart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VhSectionPart|null find($id, $lockMode = null, $lockVersion = null)
 * @method VhSectionPart|null findOneBy(array $criteria, array $orderBy = null)
 * @method VhSectionPart[]    findAll()
 * @method VhSectionPart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VhSectionPartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, VhSectionPart::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    // /**
    //  * @return VhSectionPart[] Returns an array of VhSectionPart objects
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
    public function findOneBySomeField($value): ?VhSectionPart
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
     * Función para obtener las secciones, las partes y el tipo de documento para un tipo de vehículo
     *
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $vhTypeId  ID del tipo de vehículo
     * @return Array $result
     *                  => [Sección]
     *                      => [Parte]
     *                      => [Tipo de fichero adjunto]
     */
    public function getAppFormatSectionPartByVhType($vhTypeId) {
        
        $result = [];

        $sql = "SELECT 
                    vsp.id AS `vh_section_part_id`,
                    vh_section.description AS `section_description`,
                    vh_part.description AS `part_description`,
                    attachment_type.id AS `attachment_type_code`
                
                FROM vh_section_part AS vsp
                LEFT JOIN vh_section On vh_section.id = vsp.vh_section_id
                LEFT JOIN vh_part ON vh_part.id = vsp.vh_part_id
                LEFT JOIN attachment_type ON attachment_type.id = vsp.attachment_type_id
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

        $sections = $this->em->getRepository('App:VhSection')->getSectionsByVhType($vhTypeId);

        foreach($sections as $section) {
            $result[$section["description"]] = array();
        }

        foreach($queryRecords as $instance) {
            $auxArray = array("section_part_id" => $instance["vh_section_part_id"],
                              "part_description" => $instance["part_description"],
                             );
            array_push($result[$instance["section_description"]], $auxArray);
        }

        return $result;
    }

}
