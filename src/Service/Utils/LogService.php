<?php 

namespace App\Service\Utils;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Log;
use App\Service\UtilsBase\UtilsService;

class LogService
{
    private $name = "LogService";

    public function __construct(EntityManagerInterface $em, UtilsService $utilsService)
    {
        $this->em = $em;
        $this->utilsService = $utilsService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para guardar logs generales
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param string    $comment
     * @param string     $type
     * 
     * @return mixed    $response 
     */
    public function log($comment, $type = 'general'){
        $user = ''; // deberiamos obtenerlo de forma automática
        return $this->logUser($comment, $user, $type);
    }

    /**
     * Función para guardar logs generales, igual que la anterior pero
     * puedes especificar el user
     * 
     * @author Javier Lago<javier.lago@kosaas.com>
     * 
     * @param string    $comment
     * @param string     $user
     * @param string     $type
     * 
     * @return mixed    $response 
     */
    public function logUser($comment, $user, $type = 'general'){
        $log = new Log();
        $log->setUser($user); 
        $log->setType($type );
        $log->setComment($comment); 
        $this->em->persist($log);
        $this->em->flush();
        return $this->utilsService->sendResponse(true, 200);
    }
}

?>