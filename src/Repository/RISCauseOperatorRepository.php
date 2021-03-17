<?php

namespace App\Repository;

use App\Entity\RISCauseOperator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method RISCauseOperator|null find($id, $lockMode = null, $lockVersion = null)
 * @method RISCauseOperator|null findOneBy(array $criteria, array $orderBy = null)
 * @method RISCauseOperator[]    findAll()
 * @method RISCauseOperator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RISCauseOperatorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, RISCauseOperator::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    /**
     * Obtiene los posibles motivos risk de cara al operador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @return array Array con los detalles
     */
    public function getRISCauseList(){
        $sql = "SELECT  rc.id AS riscause_id,
                        rc.description AS riscause_description
                FROM riscause_operator AS rc ";
        
        $parameters = [];

        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        // Obtenemos el resultado
        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

        return $queryRecords;
    }

}
