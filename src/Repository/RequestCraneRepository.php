<?php

namespace App\Repository;

use App\Entity\RequestCrane;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use PDO;

/**
 * @method RequestCrane|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestCrane|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestCrane[]    findAll()
 * @method RequestCrane[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestCraneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, RequestCrane::class);
        $this->em = $em;
        $this->conn = $em->getConnection();
    }
    /**
     * Busca un array de ID de peticiones que procesar
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param bool $markAsProcess Si está a TRUE marcará esas peticiones como 'procesando'
     * @return array estandar
     */
    public function nextRequestToProcess(bool $markAsProcess){
        $sql = "SELECT rc.id AS id
            FROM request_crane AS rc
            WHERE rc.processing_date IS NULL";
        $parameters = [];
        
        $qr = $this->conn->prepare($sql);
        $qr->execute($parameters);

        $queryRecords = $qr->fetchAll(PDO::FETCH_ASSOC);

        if ($markAsProcess){
            $array_in = '';
            foreach ($queryRecords as $request){
                if($array_in != '')
                    $array_in .= ',';
                $array_in .= $request['id'];
            } 

            if($array_in != ''){
                $sql = "UPDATE request_crane 
                        SET processing_date = :processingDate
                        WHERE id IN (".$array_in.")";
                
                $now = new \DateTime();
                $parameters['processingDate'] = $now->format('Y-m-d H:i:s');
               
                $qr = $this->conn->prepare($sql);
                $qr->execute($parameters);
            }
        }

        return $queryRecords;
    }
    
}
