<?php

namespace App\Repository;

use App\Entity\Intervention;
use App\Entity\RISCause;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method RISCause|null find($id, $lockMode = null, $lockVersion = null)
 * @method RISCause|null findOneBy(array $criteria, array $orderBy = null)
 * @method RISCause[]    findAll()
 * @method RISCause[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RISCauseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, RISCause::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    /**
     * ! Originalmente lo usabamos para mostrar los 
     * ! motivos RIS para la app, pero ahora usamos la e
     * ! entidad 'RISCauseOperator'
     * Obtiene los posibles motivos risk de una intervencion
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention) - Intervencion
     * @return array Array con los detalles
     */
    public function getPossibleRISCause(Intervention $intervention){
        $sql = "SELECT  rc.id AS riscause_id,
                        rc.description AS riscause_description
                FROM riscause AS rc 
                LEFT JOIN intervention AS i ON i.failure_cause_type_id  =  rc.failure_cause_type_id 
                WHERE   i.id = :intervention  ";
        
        $parameters = [];

        $parameters['intervention'] = $intervention->getId();
                        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

        return $queryRecords;
    }
}
