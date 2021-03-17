<?php 

namespace App\Service\Backend;

use App\Service\Utils\FirebaseService;
use App\Service\UtilsBase\UtilsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Security;
use Symfony\Contracts\Translation\TranslatorInterface;

#use Psr\Log\LoggerInterface;

class BackendService
{
    private $name = "BackendService";

    public function __construct(
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        UtilsService $utilsService,
        SecurityService $securityService,
        UrlGeneratorInterface $router,
        Security $security,
        SessionInterface $session,
        FirebaseService $firebaseService
    ) {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->securityService = $securityService;
        $this->router = $router;
        $this->security = $security;
        $this->session = $session;
        $this->firebaseService = $firebaseService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función para actualizar el texto de una traducción mediante el dataTable editable
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $instanceId  ID de la traducción a modificar
     * @param string $field       Campo de las traducciones que se va a modificar
     * @param string $content     Contenido de la traducción
     * 
     * @return $response
     */
    public function editTranslation($instanceId, $field, $content){

        // Se comprueba que los parámetros no sean nulos o vacíos
        if($instanceId == null || $instanceId == '' ||
           $field      == null || $field      == '' ||
           $content    == null || $content    == '') {
            
            $response = $this->utilsService->sendResponse(false, 400, 'Empty or null values');
        
        // Se actualiza la traducción
        } else {

            $instance = $this->em->getRepository('App:Translations')->findOneById($instanceId);

            if(!$instanceId) {
                $response = $this->utilsService->sendResponse(false, 501, 'Translation not found in DB');
            } else {
                
                switch ($field) {
                    case 'en':
                        $instance->setEn($content);
                        break;
                    case 'es':
                        $instance->setEs($content);
                        $instance->setFirstTranslation(true);
                        break;
                    case 'fr':
                        $instance->setFr($content);
                        break;
                    case 'it':
                        $instance->setIt($content);
                        break;
                    case 'pt':
                        $instance->setPt($content);
                        break;
                    case 'check':
                        if($content == "1") {
                            $instance->setNeedCheck(true);
                        } else {
                            $instance->setNeedCheck(false);
                        }
                        break;
                    default:
                        break;
                }

                $this->em->persist($instance);
                $this->em->flush();

                $response = $this->utilsService->sendResponse(true, 200);
            }
        }

        return $response;
    }

    /**
     * Función para actualizar la tabla de parámetros desde el dataTable editable
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $instanceId  ID del parámetro a modificar
     * @param string $field       Campo del parámetro que se va a modificar
     * @param string $content     Nuevo contenido para ese campo 
     * 
     * @return $response
     */
    public function editParameter($instanceId, $field, $content){

        // Se comprueba que los parámetros no sean nulos o vacíos
        if($instanceId == null || $instanceId == '' ||
           $field      == null || $field      == '' ||
           $content    == null || $content    == '') {
            
            $response = $this->utilsService->sendResponse(false, 400, 'Empty or null values');
        
        // Se actualiza la traducción
        } else {

            $instance = $this->em->getRepository('App:Parameters')->findOneById($instanceId);

            if(!$instanceId) {
                $response = $this->utilsService->sendResponse(false, 501, 'Parameter not found in DB');
            } else {
                
                switch ($field) {
                    case 'name':
                        $instance->setName($content);
                        break;
                    case 'type':
                        $instance->setType($content);
                        break;
                    case 'value':
                        $instance->setValue($content);
                        break;
                    case 'description':
                        $instance->setDescription($content);
                        break;
                    default:
                        break;
                }

                $this->em->persist($instance);
                $this->em->flush();

                $response = $this->utilsService->sendResponse(true, 200);
            }
        }

        return $response;
    }

    /**
     * Función para notificar a un operario de una nueva intervención
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param Operator     $operator      Objeto Operario
     * @param Intervention $intervention  Objeto Intervención
     * 
     * @return $response
     */
    public function sendNewInterventionNotification($operator, $intervention){  
        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'pte_asignar'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'C'));
        
        $APP_INTERVAL_TO_ACCEPT = $this->utilsService->getParameter('APP_INTERVAL_TO_ACCEPT');
        $initDate = new \DateTime();
        $endDate = new \DateTime();
        $endDate = date("Y/m/d H:i:s", strtotime( $endDate->format('Y/m/d H:i:s')." +". $APP_INTERVAL_TO_ACCEPT ." seconds"));
        $endDate = \DateTime::createFromFormat('Y/m/d H:i:s', $endDate);
        
        $intervention->setInitConfirmDate($initDate);
        $intervention->setEndConfirmDate($endDate);
        $intervention->setInterventionStatus($interventionStatus);
        $intervention->setPhase($interventionPhase);
        $intervention->setOperator($operator);

        $this->em->persist($intervention);
        $this->em->flush();

        $type_notification = 'new_intervention';
        $title = 'Nueva intervencion disponible';
        $message = 'Intervencion #' .  $intervention->getCode();
        $data = array('intervention_id' => $intervention->getId(),
                        'init_confirm_date' => $intervention->getInitConfirmDate()->format('Y/m/d H:i:s'),
                        'end_confirm_date' => $intervention->getEndConfirmDate()->format('Y/m/d H:i:s') );
        
        $firebase_result = $this->firebaseService->sendFirebaseNotification($operator->getFirebaseGcm(), 
                                                                            $type_notification, 
                                                                            $title, 
                                                                            $message, 
                                                                            $data);
        
        return $firebase_result;
    }

    /**
     * Función debug para probar las notificaciones de nueva intervención
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $operatorId        ID del operario
     * @param string $interventionId    ID de la intervención
     * 
     * @return $response
     */
    public function testAppNotification($operatorId, $interventionId){

        if(is_null($operatorId) || empty($operatorId)) {
            return $this->utilsService->sendResponse(false, 400, 'Missing operator ID');
        }

        if(is_null($interventionId) || empty($interventionId)) {
            return $this->utilsService->sendResponse(false, 400, 'Missing intervention ID');
        }

        $operator = $this->em->getRepository('App:Operator')->findOneById($operatorId);
        $intervention = $this->em->getRepository('App:Intervention')->findOneById($interventionId);

        if(!$operator || !$intervention) {
            return $this->utilsService->sendResponse(false, 400);
        }
        
        $notificationResult = $this->sendNewInterventionNotification($operator, $intervention);
        
        return $notificationResult;
    }

    /**
     * Función debug que restablece los valores de una intervención y limpia el histórico para comenzar el ciclo de nuevo 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $interventionId    ID de la intervención
     * 
     * @return $response
     */
    public function testAppResetIntervention($interventionId){

        // Latitud y longitud de test (Las del parque joyero)
        $testVhLatitude = 37.874728;
        $testVhLongitude = -4.818328;

        if(is_null($interventionId) || empty($interventionId)) {
            return $this->utilsService->sendResponse(false, 400, 'Missing intervention ID');
        }

        $intervention = $this->em->getRepository('App:Intervention')->findOneById($interventionId);

        if(!$intervention) {
            return $this->utilsService->sendResponse(false, 400, 'Intervention not found');
        }

        $interventionPhase = $this->em->getRepository('App:Phase')->findOneBy(array('code' => 'pte_asignar'));
        $interventionStatus = $this->em->getRepository('App:InterventionStatus')->findOneBy(array('code' => 'P'));

        // Se modifican varios campos de la intervención
        try {
            $intervention->setPhase($interventionPhase);
            $intervention->setInterventionStatus($interventionStatus);
            $intervention->setCrane(null);
            $intervention->setOperator(null);
            $intervention->setVhLatitude($testVhLatitude);
            $intervention->setVhLongitude($testVhLongitude);

            $this->em->persist($intervention);
            $this->em->flush();

        } catch (\Exception $e) {
            return $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
        }
        
        $phaseLogs = $this->em->getRepository('App:PhaseLog')->findBy(array('intervention' => $intervention->getId()));
        
        // Se borran las instancias antiguas para esa intervención en PhaseLog
        try {
            if($phaseLogs) {
                foreach($phaseLogs as $instance) {
                    $this->em->remove($instance);
                }
                $this->em->flush();
            }
        } catch (\Exception $e) {
            return $this->utilsService->sendResponse(false, 400, '', $e->getMessage() );
        }

        return $this->utilsService->sendResponse(true, 200);
    }

}

?>