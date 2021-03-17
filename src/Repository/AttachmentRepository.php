<?php

namespace App\Repository;

use App\Entity\Attachment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Attachment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Attachment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Attachment[]    findAll()
 * @method Attachment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttachmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Attachment::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    // /**
    //  * @return Attachment[] Returns an array of Attachment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Attachment
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Función que devuelve una lista de ficheros adjuntos
     * 
     * @param string $targetId  ID de la sucursal, grúa, operario, etc. del que se quiere obtener la lista de ficheros adjuntos
     * @param string $code      Código del tipo de fichero
     * 
     * @return Array $queryRecords
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function listAttachments($targetId, $code) 
    {
        //Montamos la consulta
        $params = array();
        
        $str_query = "SELECT  a.id                          AS `id`,
                              a.file_name                   AS `file_name`,
                              a.file_data                   AS `file_data`,
                              attachment_type.description   AS `attachment_type`,
                              a.branch_office_id            AS `branch_office_id`

                      FROM attachment AS a
                      LEFT JOIN attachment_type ON a.attachment_type_id = attachment_type.id
                    ";

        $where = " WHERE attachment_type.code = '$code' ";

        if($code == "fichero_adjunto_sucursal") {
            $where .= " AND a.branch_office_id = $targetId ";
        }

        if($code == "fichero_adjunto_grua") {
            $where .= " AND a.crane_id = $targetId ";
        }

        $str_query = $str_query . $where;

        // Ejecutamos la consulta
        $sqlConnection = $this->getEntityManager()->getConnection();
        $queryRecords = $sqlConnection->executeQuery($str_query)->fetchAll(\PDO::FETCH_ASSOC);

        return $queryRecords;
    }

    /**
     * Función que devuelve las imágenes adjuntas de una intervención
     * 
     * @param string $interventionId  ID de la intervención
     * 
     * @return Array $queryRecords
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function getAttachedImagesByIntervention($interventionId) 
    {
        //Montamos la consulta                
        $str_query = 'SELECT
                        -- a.id                    AS `id`,
                        a.file_data             AS `image`,
                        a.description           AS `description`,
                        a.description_extra     AS `descriptionExtra`,
                        attachment_type.code    AS `type`,
                        NULL                    AS `sectionPartId`,
                        a.photo_type            AS `photoType`

                    FROM attachment AS a
                    LEFT JOIN attachment_type ON attachment_type.id = a.attachment_type_id
                    ';

        $where = " WHERE a.intervention_id = :intervention_id ";

        $parameters = [];
        $parameters['intervention_id'] = $interventionId;

        $str_query = $str_query . $where;

        $qr = $this->conn->prepare($str_query);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(\PDO::FETCH_ASSOC);

        foreach($queryRecords as $instance) {
            $instance["sectionPartId"] = "";
        }

        return $queryRecords;
    }

}
