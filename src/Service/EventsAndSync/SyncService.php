<?php 

namespace App\Service\EventsAndSync;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Service\Utils\LogService;
use App\Service\UtilsBase\UtilsService;
use App\Entity\Intervention;
use App\Entity\RequestCrane;
use App\Entity\PhaseLog;
use App\Entity\Collaborator;
use App\Entity\BranchOffice;
use App\Entity\Phone;
use App\Entity\Contact;
use App\Entity\BranchOfficeService;
use App\Entity\Activity;
use App\Entity\Brand;
use PDO;

class SyncService
{
    private $name = "SyncService";

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator,
                                LogService $logService, 
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->conn = $em->getConnection();
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->asiturBaseUrl = $this->utilsService->getParameter('API_ASITUR_URL_BASE');
        $this->logService = $logService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /******************************************************/
    /*             Sincronización Maestras                */
    /******************************************************/
    /**
     * Actualización de la tabla maestra "Brand"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterBrand(){
        $url = $this->asiturBaseUrl . "/api/CargasMaestras/WSMarcasGruas";
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];


            if (isset($responseContent['salida'])){
                if(count($responseContent['salida'])){
                    foreach($responseContent['salida'] as $row) {
                        $brand = $this->em->getRepository('App:Brand')->findOneBy(['code'=>$row['codigoMarcaGrua']]);
                        if (is_null($brand))
                            $brand = new Brand();
                        
                        if (!is_null($brand)){
                            $brand->setDescription($row['marcaGrua']);
                            $this->em->persist($brand);
                        }
                    }
    
                    $this->em->flush();
                }
                $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 'Error', 'Sin datos');
            }

            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "Crane"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterCrane(){
        $AsiturService = 'WSModeloGruas';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "CraneType"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterCraneType(){
        $AsiturService = 'WSTipoGruas';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "CraneStatus"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterCraneStatus(){
        $AsiturService = 'WSEstadosGruas';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "AvailabilityStatus"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterAvailabilityStatus(){
        $AsiturService = 'WSDisponibilidadGruas';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "CraneServiceType"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterCraneServiceType(){
        $AsiturService = 'WSTiposServiciosGruas';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "OperatorStatus"
     *
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterOperatorStatus(){
        $AsiturService = 'WSEstadosOperarios';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "VhBrand"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterVhBrand(){
        $AsiturService = 'WSMarcasVehiculos';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "VhModel"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterVhModel(){
        $AsiturService = 'WSModeloVehiculos';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "VhType"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterVhType(){
        $AsiturService = 'WSTipoVehiculos';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "SinisterTypeExtension"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterSinisterTypeExtension(){
        $AsiturService = 'WSAmpliacionTipo';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "FailureType"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterFailureType(){
        $AsiturService = 'WSTipoAveria';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "FailureCauseType"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterFailureCauseType(){
        $AsiturService = 'WSCausaAveria';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Actualización de la tabla maestra "RISCause"
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateMasterRISCause(){
        $AsiturService = 'WSMotivoRIS';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /******************************************************/
    /*        Sincronización Entidades y Web Admin        */
    /******************************************************/
    
    /**
     * Obtención de los detalles de un colaborador via cif
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function getCollaboratorCodeByCif($cif){
        //$AsiturService = 'WSCodigoColaborador';
        $url = $this->asiturBaseUrl . "/api/colaborador/WSCodigoColaborador/";
        $url .= $cif;

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] != '1'){
                $responseResult = $this->utilsService->sendResponse(false, 400, 'ERROR', $responseContent['respuesta']); 
            }

            $collaboratorCode = $responseContent['salida'];
                        
            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', array('code' => $collaboratorCode));
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /**
     * Obtención de los detalles de un colaborador via código
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function getCollaboratorDetailByCode($code){
        $url = $this->asiturBaseUrl . "/api/colaborador/WSDatosColaborador/";
        $url .= $code;

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] != '1'){
                $responseResult = $this->utilsService->sendResponse(false, 400, 'ERROR', $responseContent['respuesta']); 
            }
            
            $formatResult =     [   'collaborator_code' => $responseContent['salida']['codigoColaborador'],
                                    'collaborator_cif' => $responseContent['salida']['cifColaborador'],
                                    'collaborator_name' => $responseContent['salida']['nombreColaborador']
                                ];
                                    
            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', $formatResult);
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Función para sincronizar y guardar en BD da información de un colaborador por cif
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function syncCollaboratorByCif($cif){

        // Primero vamos a obtener la info de los servidores de asitur
        $result = $this->getCollaboratorCodeByCif($cif);
        if ($result['status']){
            // vamos a ver si lo tenemos en BD 
            $collaborator = $this->em->getRepository('App:Collaborator')->findOneBy(array('nif' => $cif));
            if (is_null($collaborator)){
                $collaborator = new Collaborator();
                $collaborator->setNif($cif);
            }
            $collaborator->setCode($result['data']['code']);

            // Ahora obtenemos la otra info
            $resultDetail =  $this->getCollaboratorDetailByCode($collaborator->getCode());

            if (!$resultDetail['status']){
                $responseResult = $this->utilsService->sendResponse(false, 400, '', $resultDetail['errors']);
                return $responseResult;    
            }
            $collaborator->setName($resultDetail['data']['collaborator_name']);
            $collaborator->setLastSyncDate(new \DateTime());


            $this->em->persist($collaborator);
            $this->em->flush();
            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', ['collaborator' => $collaborator->getId()]);
            return $responseResult;
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $result['errors']);
            return $responseResult;
        }
    }



    /**
     * Obtención de las sucursales de un colaborador
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function getBranchOfficesByCollaborator($collaborator){
        $url = $this->asiturBaseUrl . "/api/colaborador/WSSucursalesColaborador/";
        $url .= $collaborator->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] != '1'){
                $responseResult = $this->utilsService->sendResponse(false, 400, 'ERROR', $responseContent['respuesta']); 
            }
            
            $formatResult = $responseContent['salida'];
            
            /*[ 'collaborator_code' => $responseContent['salida']['codigoColaborador'],
                'collaborator_cif' => $responseContent['salida']['cifColaborador'],
                'collaborator_name' => $responseContent['salida']['nombreColaborador']
            ];*/
                                    
            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', $formatResult);
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Función para sincronizar y guardar en BD da información de las sucursales
     * de un colaborador (la parte general, no el detalle)
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function syncCollaboratorBranchOffices($collaborator){
        // Primero vamos a obtener la info de los servidores de asitur
        $result = $this->getBranchOfficesByCollaborator($collaborator);
        if ($result['status']){
            // vamos a recorrer todas las sucursales, si existe la actualizamos,
            // y si no existe lo creamos
            foreach ($result['data'] as $branchOfficeArray) {
                $code = $branchOfficeArray['codigoSucursal'];

                $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneBy(array('code' => $code));
                if (is_null($branchOffice)){
                    $branchOffice = new BranchOffice();
                    $branchOffice->setCode($code);
                }
                $branchOffice->setCollaborator($collaborator);
                $branchOffice->setLastSyncDate(new \DateTime());
                $branchOffice->setName($branchOfficeArray['nombreSucursal']);
                
                $branchOffice->setAddress(is_null($branchOfficeArray['direccionSucursal']) ? '' : $branchOfficeArray['direccionSucursal']);
                $branchOffice->setZipCode(is_null($branchOfficeArray['cpSucursal']) ? '' : $branchOfficeArray['cpSucursal']);
                $branchOffice->setSinisterEmail(is_null($branchOfficeArray['emailSucursalSiniestro']) ? '' : $branchOfficeArray['emailSucursalSiniestro']);
                $branchOffice->setInvoicingEmail(is_null($branchOfficeArray['emailSucursalFacturacion']) ? '' : $branchOfficeArray['emailSucursalFacturacion']);
                
                $province = $this->em->getRepository('App:Province')->findOneBy(array('id' => $branchOfficeArray['codigoProvinciaSucursal']));
                $town = $this->em->getRepository('App:Town')->findOneBy(array('id' => $branchOfficeArray['codigoLocalidadSucursal']));

                $branchOffice->setProvince($province);
                $branchOffice->setTown($town);

                // Tenemos también (aunque veníana  NULL en los ejemplos...)
                /*
                $branchOfficeArray['telefonos']
                $branchOfficeArray['contactos']
                $branchOfficeArray['gruas']
                $branchOfficeArray['operarios']
                $branchOfficeArray['servicios']
                                                   
                */
                $this->em->persist($branchOffice);
                $this->em->flush();
            }

            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', ['collaborator' => $collaborator->getId()]);
            return $responseResult;
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $result['errors']);
            return $responseResult;
        }
    }


    /**
     * Obtención del detalle de una sucursal, gruas, operarios, etc
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function getBranchOfficeDetails($branchOffice){
        $url = $this->asiturBaseUrl . "/api/sucursal/WSDatosSucursal/";
        $url .= $branchOffice->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            
            if ($responseContent['resultado'] != '1'){
                $responseResult = $this->utilsService->sendResponse(false, 400, 'ERROR', $responseContent['respuesta']); 
            }
            
            $formatResult = $responseContent['salida'];
                                    
            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', $formatResult);
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //TODO probar la funcion de los operarios / gruas cuando sincronicemos datos
    /**
     * Función para sincronizar y guardar en BD da información de una sucursales
     * , la parte detalle
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function syncBranchOffice($branchOffice){
        // Primero vamos a obtener la info de los servidores de asitur
        $result = $this->getBranchOfficeDetails($branchOffice);
        if ($result['status']){
            $branchOfficeArray = $result['data']; 
            $branchOffice->setLastSyncDate(new \DateTime());
            $branchOffice->setCode($branchOfficeArray['codigoSucursal']);
            $branchOffice->setName($branchOfficeArray['nombreSucursal']);
            $branchOffice->setAddress(is_null($branchOfficeArray['direccionSucursal']) ? '' : $branchOfficeArray['direccionSucursal']);
            $branchOffice->setZipCode(is_null($branchOfficeArray['cpSucursal']) ? '' : $branchOfficeArray['cpSucursal']);

            $province = $this->em->getRepository('App:Province')->findOneBy(array('id' => $branchOfficeArray['codigoProvinciaSucursal']));
            $town = $this->em->getRepository('App:Town')->findOneBy(array('id' => $branchOfficeArray['codigoLocalidadSucursal']));
            $branchOffice->setProvince($province);
            $branchOffice->setTown($town);
            $branchOffice->setSinisterEmail(is_null($branchOfficeArray['emailSucursalSiniestro']) ? '' : $branchOfficeArray['emailSucursalSiniestro']);
            $branchOffice->setInvoicingEmail(is_null($branchOfficeArray['emailSucursalFacturacion']) ? '' : $branchOfficeArray['emailSucursalFacturacion']);
            
            // Sección teléfonos
            foreach ($branchOffice->getPhones() as $phone) {
                $this->em->remove($phone);
            }
            foreach ($branchOfficeArray['telefonos'] as $phoneArray) {
                $phone = new Phone();
                $phone->setBranchOffice($branchOffice);
                $phone->setType($phoneArray['tipoTelefono']);
                $phone->setNumber($phoneArray['numeroTelefono']);
                $phone->setDescription($phoneArray['observacionesTelefono']);
                $this->em->persist($phone);
            }

            // Sección contactos
            foreach ($branchOffice->getContacts() as $contact) {
                $this->em->remove($contact);
            }
            foreach ($branchOfficeArray['contactos'] as $contactArray) {
                $contact = new Contact();
                $contact->setBranchOffice($branchOffice);
                $contact->setName($contactArray['nombreContacto']);
                $contact->setPosition($contactArray['cargoContacto']);
                $contact->setEmail($contactArray['emailContacto']);
                $contact->setDescription($contactArray['observacionesContacto']);
                $this->em->persist($contact);
            }

            // Sección gruas
            //TODO venía vacío
            foreach ($branchOfficeArray['gruas'] as $craneArray) {
                //$craneArray['CodigoGrua']
                //$craneArray['IdentificadorGrua']
                //$craneArray['MatriculaGrua']
                //$craneArray['MarcaGrua']
                //$craneArray['ModeloGrua']
                //$craneArray['TipoGrua']
                //$craneArray['RotuladoGrua']
                //$craneArray['DisponibilidadGrua']
                //$craneArray['EstadoGrua']
                //$craneArray['TipoGestionGrua']
            }

            // Sección operarios
            //TODO venía vacío
            foreach ($branchOfficeArray['operarios'] as $operatorArray) {
                //$operatorArray['CodigoOperador']
                //$operatorArray['IdentificadorOperador']
                //$operatorArray['NIF']
                //$operatorArray['Nombre']
                //$operatorArray['Apellidos']
                //$operatorArray['Movil']
                //$operatorArray['Estado']
                //$operatorArray['CodigoGrua']
            }

            // Sección servicios
            foreach ($branchOffice->getBranchOfficeServices() as $branchOfficeServices) {
                $this->em->remove($branchOfficeServices);
            }
            foreach ($branchOfficeArray['servicios'] as $serviceName) {
                $collaboratorService = $this->em->getRepository('App:CollaboratorService')->findOneBy(array('description' => $serviceName));

                if (!is_null($collaboratorService)){
                    $branchOfficeService = new BranchOfficeService();
                    $branchOfficeService->setBranchOffice($branchOffice);
                    $branchOfficeService->setCollaboratorService($collaboratorService);
                    $this->em->persist($branchOfficeService);
                }
            }
            
            $this->em->persist($branchOffice);
            $this->em->flush();

            $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE', ['branchOffice' => $branchOffice->getId()]);
            return $responseResult;
        }
        else{
            $responseResult = $this->utilsService->sendResponse(false, 400, '', $result['errors']);
            return $responseResult;
        }
    }

    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Obtención del detalle de una grua
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function getCraneDetails($crane){
        $AsiturService = 'WSDatosGrua';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url, 
                                        array(  'CodigoGrua' => $crane->getId() ));
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /**
     * Obtención de los servicios disponibles de una grúa
     * 
     * @param Crane $crane  Objeto grúa de la que se quiere obtener los servicios disponibles
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * @return respuesta estandar
     */
    function getCraneAvailableServices($crane){
        // obtenemos las sucursales donde está la grúa
        $craneBranchOfficesCodes = $this->em->getRepository('App:BranchOfficeCrane')->getArrayBranchOfficesCodeByCrane($crane->getId());                  
        
        $url = $this->asiturBaseUrl . "/api/grua/WSServiciosDisponiblesColaborador/";
        $responseCurl = $this->utilsService->makeCURL_POST($url, $craneBranchOfficesCodes);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            $listCollaboratorServices = [];
            if ($responseContent['resultado'] == '1' && is_array($responseContent['salida']) && count($responseContent['salida'])){
                $listCollaboratorServices = $responseContent['salida'];
            }
            
            $collaboratorServices = $this->em->getRepository('App:CollaboratorService')->findBy(array('code' => $listCollaboratorServices), array('id' => 'DESC') );
            
            $response = $this->utilsService->sendResponse(true, 200, 'Exito', ['collaboratorServices' => $collaboratorServices]);
            
            return $response;
        }
        else{
            $response = $this->utilsService->sendResponse(true, 400, 'Error', ['collaboratorServices' => []]);
            return $response;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Obtención del detalle de un operador (grua asignada, horario, etc)
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function getOperatorDetails($operator){
        $AsiturService = 'WSDatosOperador';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url, 
                                        array(  'CodigoOperario' => $operator->getId() ));
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Actualización de detalles de una grua
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateCrane($crane){
        //$AsiturService = 'WSActualizarDatosGrua';
        $url = $this->asiturBaseUrl . "/api/grua/WSActualizarDatosGrua/";
        $url .= $crane->getCode();

        $requestCraneData = array(
            'IdentificadorGrua' => $crane->getReference(), //? no se si sera la referencia o el code
            'MatriculaGrua' => $crane->getPlate(),
            'MarcaGrua' => $crane->getBrand()->getCode(), 
            'ModeloGrua' => $crane->getModel()->getCode(), 
            'TipoGrua' => $crane->getCraneType()->getCode(),
            'RotuladoGrua' => $crane->getLabeledType()->getCode(), 
            'FechaAltaGrua' => $crane->getCreationDate()->format('Ymd'), 
        );
        
        $responseCurl = $this->utilsService->makeCURL($url, $requestCraneData);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){

                $crane->setLastSyncDate(new \DateTime());
                $this->em->persist($crane);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Notificar de un cámbio de estado en la grua
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateCraneStatus($crane){
        //$AsiturService = 'WSActualizarEstadoGrua';
        $url = $this->asiturBaseUrl . "/api/grua/WSActualizarEstadoGrua/";
        $url .=  $crane->getCode() . "/". $crane->getCraneStatus()->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);

        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1'){

                $crane->setLastSyncDate(new \DateTime());
                $this->em->persist($crane);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Notificar de un cámbio de estado en la disponibilidadd de la grua
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateCraneAvailabilityStatus($crane){
        //$AsiturService = 'WSActualizarDisponibilidadGrua';
        $url = $this->asiturBaseUrl . "/api/grua/WSActualizarDisponibilidadGrua/";
        $url .=  $crane->getCode() . "/". $crane->getAvailabilityStatus()->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);

        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1'){

                $crane->setLastSyncDate(new \DateTime());
                $this->em->persist($crane);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /**
     * Notificar de un cámbio de estado en el tipo de gestión de la grua
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateCraneManagementTypeStatus($crane){
        //$AsiturService = 'WSActualizarTipoGestionGrua';
        $url = $this->asiturBaseUrl . "/api/grua/WSActualizarTipoGestionGrua/";
        $url .=  $crane->getCode() . "/". $crane->getManagementType()->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);

        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1'){

                $crane->setLastSyncDate(new \DateTime());
                $this->em->persist($crane);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

   
    /**
     * Actualizar datos del operario
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateOperator($operator){
        //$AsiturService = 'WSActualizarDatosOperario';
        $url = $this->asiturBaseUrl . "/api/operario/WSActualizarDatosOperario/";
        $url .=  $operator->getCode();

        $requestData = array(
            'IdentificadorOperario' => $operator->getReference(), //? No se si es reference o code
            'NombreOperario' => $operator->getName(),
            'ApellidosOperario' => $operator->getLastName(),
            'DNIOperario' => $operator->getDni(),
            'MovilOperario' => $operator->getMobile()
        );

        $responseCurl = $this->utilsService->makeCURL($url, $requestData);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1'){
                $operator->setLastSyncDate(new \DateTime());
                $this->em->persist($operator);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Notificar de la actualización del estado de un operario
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function updateOperatorStatus($operator){
        //$AsiturService = 'WSActualizarEstadoOperario';
        $url = $this->asiturBaseUrl . "/api/operario/WSActualizarEstadoOperario/";
        $url .= $operator->getCode() . '/' . $operator->getOperatorStatus()->getCode() ;

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            if ($responseContent['resultado'] == '1'){
                $operator->setLastSyncDate(new \DateTime());
                $this->em->persist($operator);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Deshabilitar las Grúas de un Colaborador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function disableCraneOfCollaborator($collaborator){
        $AsiturService = 'WSApagarGruasColaborador';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url, 
                                                       array(''=>''));
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    
    //!EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Habilitar las Grúas de un Colaborador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function enableCraneOfCollaborator($collaborator){
        $AsiturService = 'WSEncenderGruasColaborador';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url, 
                                                       array(''=>''));
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Deshabilitar las Grúas de un Colaborador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function disableCraneOfBranchOffice($branchOffice){
        $AsiturService = 'WSApagarGruasSucursal';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url, 
                                                       array(''=>''));
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    //! EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
    /**
     * Habilitar las Grúas de un Colaborador
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     * @return respuesta estandar
     */
    function enableCraneOfBranchOffice($branchOffice){
        $AsiturService = 'WSEncenderGruasSucursal';
        $url = 'DEFINIR URL';
        $responseCurl = $this->utilsService->makeCURL($url, 
                                                       array(''=>''));
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            //Usamos el $responseContent para ACTUALIZAR LA BASE DE DATOS
            return $responseContent ;   
            $responseResult = $this->utilsService->sendResponse(true, 200, 'EN PROCESO');
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Notificación de un cámbio en la entidad Intervención
     * EN PROCESO DE RECIBIR LA DOCUMENTACION DE LA API DE ASITUR
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention - Intervención a notificar
     * @param string $type - Indicaremos el motifvo de la notificación
     *              Posibles valores:
     *                  - updatePhase -> se llama porque se ha actualizado una fase
     *                  - refuse -> se llama porque se ha rechazado una asignación
     *                  - updateStatus -> se llama porque se ha rechazado una asignación
     *                  - Ir completando....
     * @param array $params - array extra de parámetros 
     * @return respuesta estandar
     */
    function sendInterventionUpdates(Intervention $intervention, $type = '', $params = []){

        // Tendremos en $type el tipo de llamada que se ha hecho a esta funcion
        // por si en un futuro sirve de algo.
        if( (!is_null($intervention->getPhase()) &&
            !is_null($intervention->getPhase()->getAsiturCode()) &&
            $intervention->getPhase()->getAsiturCode() != '') || $type == 'risCause' ){
            
                switch($type){
                    case 'refuse':
                        return $this->refuseIntervention($intervention);
                        break;

                    case 'interventionFails': // incidencia
                            return $this->failIntervention($intervention, $params['interventionFails']);
                            break;

                    case 'interventionFailure': // fallido
                        return $this->failureIntervention($intervention, $params['interventionFails']);
                        break;

                        
                    case 'updateDestination': // Actualización de destino (no RIS se sobreentiende)
                        return $this->updateDestinationIntervention($intervention);
                        break;
                        

                    case 'risCause': // Se llama cuando se marca un transporte como RIS
                        return $this->RISResolutionIntervention($intervention);
                        break;

                    case 'updatePhase': // Cámbio de fase
                        return $this->updatePhaseIntervention($intervention, $params['phaseLog']);
                        break;
                                            
                    default: 
                        $responseResult = $this->utilsService->sendResponse(false, 400, 'Falta por definir el tipo');
                        return $responseResult;
                        break;
                }
        }
        
        $responseResult = $this->utilsService->sendResponse(true, 200, 'No es necesario sincronizar');
        return $responseResult;   
    }

    /******************************************************/
    /*          Envíos de información pedida              */
    /******************************************************/

    /**
     * Envio de opciones de grúa para un servicio
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param RequestCrane $requestCrane
     * @param array $findCranesResult -> salida del servicio findCranesForRequest (intervention Service)
     * @return respuesta estandar
     */
    function sendCranesRequested(RequestCrane $requestCrane, $findCranesResult, $sendToAsitur = true){
        
        // preparamos el array de envio.
        $nearbyCranes = array();

        foreach ($findCranesResult as $row){
            array_push($nearbyCranes, array("CodigoColaborador" => $row['collaborator_code'],
                                            "CodigoSucursal" => $row['branchoffice_code'],
                                            "CodigoGrua" => $row['crane_code'],
                                            "CodigoOperario" => $row['operator_code'],
                                            "CodigoServicio" => $row['collaborator_service_code'],
                                            "PosicionXGrua" => $row['latitude'],
                                            "PosicionYGrua" => $row['longitude'],
                                            "TiempoEstimado" => intval($row['timeMinutes']),
                                            "Predisponible" => (is_null($row['interventionActive']) ? 0 : 1) ));
        }

        // si no encuentra ninguna mandamos esto
        if (count($nearbyCranes) == 0){
            array_push($nearbyCranes, array("CodigoColaborador" => '00000000',
                                            "CodigoSucursal" => '00000000',
                                            "CodigoGrua" => '00000000',
                                            "CodigoOperario" => '00000000',
                                            "CodigoServicio" => '00000000',
                                            "PosicionXGrua" => '00000000',
                                            "PosicionYGrua" => '00000000',
                                            "TiempoEstimado" => '-1',
                                            "Predisponible" => 0));
        }

        // vamos a guardar un json con la respuesta, para poder depurarlo más adelante
        $requestCrane->setDebugResponse(json_encode($nearbyCranes));
        $this->em->persist($requestCrane);
        $this->em->flush();

        if (!$sendToAsitur){
            $requestCrane->setSendResponseDate(new \DateTime());
            $requestCrane->setSuccess(true);
            $this->em->persist($requestCrane);
            $this->em->flush();
            return $nearbyCranes;
        }

        $requestCrane->setSendResponseDate(new \DateTime());
        //return var_dump($nearbyCranes);        
        //$AsiturService = 'WSGruasDisponibles';
        $url = $this->asiturBaseUrl . '/api/app/WSGruasDisponibles/' . $requestCrane->getInterventionCode();
        
        $responseCurl = $this->utilsService->makeCURL($url, $nearbyCranes);
        $requestCrane->setResponseDate(new \DateTime());
        //return var_dump($responseCurl);
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){
                $requestCrane->setSuccess(true);
                $this->em->persist($requestCrane);
                $this->em->flush();
                
                //return $responseContent ;   
                $responseResult = $this->utilsService->sendResponse(true, 200, 'DONE');
                return $responseResult;    
            }
            else{
                $msgError = "Error";
                if (isset($responseContent['respuesta']))
                    $msgError .= $responseContent['respuesta'];
                $responseResult = $this->utilsService->sendResponse(false, 400, $msgError);
                return $responseResult;    
            }
        }
        else{ 
            $requestCrane->setSuccess(false);
            $this->em->persist($requestCrane);
            $this->em->flush();
            
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
        
    }
 

    /**
     * Servicio disponible desde ASITUR para recibir la Aceptacion o Rechazo 
     * a una intervecnión previamente remitido a una grua
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * 
     * @return respuesta estandar
     */
    function refuseIntervention(Intervention $intervention){
        //$AsiturService = 'WSRespuestaSolicitudIntervencion';
        $url = $this->asiturBaseUrl . "/api/app/WSRespuestaSolicitudIntervencion";
    
        $requestData = array(
            'CodigoIntervencion'    => $intervention->getCode(),
            'CodigoEstado'          => $intervention->getInterventionStatus()->getCodeAsitur(),
            'CodigoRechazo'         => ( is_null ($intervention->getCancellationType()) ? '' : $intervention->getCancellationType()->getCodeAsitur()) , 
            'ObservacionesRechazo'  => ( is_null ($intervention->getRefuseDescription()) ? '' : $intervention->getRefuseDescription()) 
        );
        
        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){
                $intervention->setLastSyncDate(new \DateTime());
                $this->em->persist($intervention);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Servicio disponible desde ASITUR para recibir la incidencia 
     * producida durante una intervención
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * 
     * @return respuesta estandar
     */
    function failIntervention(Intervention $intervention, $interventionFails){
        //$AsiturService = 'WSIncidenciaIntervencion';
        $url = $this->asiturBaseUrl . "/api/app/WSIncidenciaIntervencion";
    
        $requestData = array(
            'CodigoIntervencion'        => $intervention->getCode(),
            'CodigoIncidencia'          => $interventionFails->getInterventionProblemType()->getCode(),
            'ObservacionesIncidencia'   => $interventionFails->getDescription()
        );

        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){
                $intervention->setLastSyncDate(new \DateTime());
                $this->em->persist($intervention);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Servicio disponible desde ASITUR para recibir un fallido producido durante una intervención
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * 
     * @return respuesta estandar
     */
    function failureIntervention(Intervention $intervention, $interventionFails){
        //$AsiturService = 'WSFallidoIntervencion';
        $url = $this->asiturBaseUrl . "/api/app/WSFallidoIntervencion";
    
        $requestData = array(
            'CodigoIntervencion' => $intervention->getCode(),
            'CodigoFallido' => $interventionFails->getInterventionProblemType()->getCode(),
            'ObservacionesFallido' => $interventionFails->getDescription()
        );

        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);       
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){
                $intervention->setLastSyncDate(new \DateTime());
                $this->em->persist($intervention);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /**
     * Servicio disponible desde ASITUR con la que actualizar el destino de la intervención
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @return respuesta estandar
     */
    function updateDestinationIntervention(Intervention $intervention){
        //$AsiturService = 'WSActualizarDestinoServicio';
        $url = $this->asiturBaseUrl . "/api/app/WSActualizarDestinoServicio";

        switch($intervention->getDestinationType()){
            case 'base':
            case 'Entrega en base':
                $destinationType = "00000001"; break;
            case 'taller':
            case 'Entrega en taller': 
                $destinationType = "00000002"; break;
            case 'domicilio':
            case 'Entrega en domicilio': 
                $destinationType = "00000003"; break;
            default: $destinationType = $intervention->getDestinationType(); break;
        }
        //? no tienen valores para geoposición...
        $requestData = array(
            'CodigoIntervencion' => $intervention->getCode(),
            'CodigoTipoDestino' => $destinationType,
            'NombreDestino' => (IS_NULL($intervention->getDeliveryName()) ? '' : $intervention->getDeliveryName()  ),
            'DireccionDestino' => (IS_NULL($intervention->getDeliveryAddress()) ? '' : $intervention->getDeliveryAddress()  ),
            'CPDestino' => (IS_NULL($intervention->getDeliveryZipcode()) ? '' : $intervention->getDeliveryZipcode()  ),
            'LocalidadDestino' => (IS_NULL($intervention->getDeliveryTown()) ? '' : $intervention->getDeliveryTown()  ),
            'ProvinciaDestino' => (IS_NULL($intervention->getDeliveryProvince()) ? '' : $intervention->getDeliveryProvince()  ),
        );
       
        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
       
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){
                $intervention->setLastSyncDate(new \DateTime());
                $this->em->persist($intervention);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }



    /**
     * Servicio disponible desde ASITUR para recibir de una intervención su resolución por RIS
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * 
     * @return respuesta estandar
     */
    function RISResolutionIntervention(Intervention $intervention){
        //$AsiturService = 'WSResolucionRIS';
        $url = $this->asiturBaseUrl . "/api/app/WSResolucionRIS";

        $requestData = array(
            'CodigoIntervencion'        => $intervention->getCode(),
            'CodigoMotivoRisProveedor'  => $intervention->getRisCauseOperator()->getCodeAsitur(),
            'ObservacionesRisProveedor' => $intervention->getRepairDescription()
        );

        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
        //$this->logService->log(json_encode($responseCurl));
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            if ($responseContent['resultado'] == '1'){
                $intervention->setLastSyncDate(new \DateTime());
                $this->em->persist($intervention);
                $this->em->flush();
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 
                                'Ha ocurrido un error con la actualización en Asitur');
            }
            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

    /**
     * Servicio disponible desde ASITUR para recibir los cambios de fase producidos durante una intervención
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * @param PhaseLog $phaseLog
     * 
     * @return respuesta estandar
     */
    function updatePhaseIntervention(Intervention $intervention, PhaseLog $phaseLog){
        //$AsiturService = 'WSActualizarFaseIntervencion';
        $url = $this->asiturBaseUrl . "/api/app/WSActualizarFaseInternvencion";
    
        $requestData = array(
            'CodigoIntervencion' => $intervention->getCode(),
            'CodigoFase' => $phaseLog->getPhase()->getAsiturCode(),
            'PosicionXGrua' => $phaseLog->getLatitude(),
            'PosicionYGrua' => $phaseLog->getLongitude()
        );

        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];

            $intervention->setLastSyncDate(new \DateTime());
            $this->em->persist($intervention);
            $this->em->flush();

            if ($responseContent['resultado'] == '1')
                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho');
            else
                $responseResult = $this->utilsService->sendResponse(false, 400, 'Error en Asitur (interno)');

            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Reinicio de la "intervencion" para poder seguir haciendo pruebas
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Intervention $intervention
     * 
     * @return respuesta estandar
     */
    function resetIntervention(Intervention $intervention){
        //$AsiturService = 'WSResetearIntervencion';
        $url = $this->asiturBaseUrl . "/api/comunes/WSResetearIntervencion";
        $requestData = $intervention->getCode();

        $responseCurl = $this->utilsService->makeCURL_POST($url, $requestData);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];
            return $responseContent;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }


    /**
     * Servicio para sincronizar las actividades disponibles de una sucursal
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param Collaborator $collaborator
     * @param BranchOffice $branchOffice
     * 
     * @return respuesta estandar
     */
    function syncActivities(Collaborator $collaborator, BranchOffice $branchOffice){
        //$AsiturService = 'WSTarifasSucursal';
        $url = $this->asiturBaseUrl . "/api/sucursal/WSTarifasSucursal/";
        $url .= $branchOffice->getCode() . "/" . $collaborator->getCode();

        $responseCurl = $this->utilsService->makeCURL($url);
        
        if ($responseCurl['status']){
            $responseContent = $responseCurl['data']['content'];


            if ($responseContent['resultado']  == '1' && is_array($responseContent['salida'])){
                $listActivities = $responseContent['salida'];
                
                // 1º limpiamos los antiguos
                $sql = "DELETE FROM activity WHERE 
                        branch_office_id = :branchOfficeId AND 
                        collaborator_id = :collaborator";
                $parameters = [];
                $parameters['branchOfficeId'] = $branchOffice->getId();
                $parameters['collaborator'] = $collaborator->getId();

                $qr = $this->conn->prepare($sql);
                $qr->execute($parameters);

                //2º Incorporamos los nuevos
                foreach ($listActivities as $activity){
                    $collaboratorService = $this->em->getRepository('App:CollaboratorService')->findOneBy(['description'=> $activity['nombre_Servicio']]);
                    $newActivity = new Activity();
                    $newActivity->setLastSyncDate(new \DateTime());
                    $newActivity->setName($activity['nombre_Actividad']);
                    $newActivity->setType($activity['baremo']);
                    $newActivity->setTax(floatval (str_replace(",", ".", $activity['impuesto'])));
                    $newActivity->setUnit(floatval (str_replace(",", ".",$activity['unidad'])));
                    $newActivity->setNight(floatval (str_replace(",", ".",$activity['nocturno'])));
                    $newActivity->setHolliday(floatval (str_replace(",", ".",$activity['festivo'])));
                    $newActivity->setBranchOffice($branchOffice);
                    $newActivity->setCollaboratorService($collaboratorService);
                    $newActivity->setCollaborator($collaborator);
                    $this->em->persist($newActivity);
                }
                $this->em->flush();

                $responseResult = $this->utilsService->sendResponse(true, 200, 'Hecho. Actualizados ' . count($listActivities) . ' registros.');    
            }
            else{
                $responseResult = $this->utilsService->sendResponse(false, 400, 'Error en Asitur (interno)');
            }

            return $responseResult;
        }
        else{ 
            $responseResult = $this->utilsService->sendResponse(false, 400, '',
                (isset($responseCurl['errors']) ? $responseCurl['errors'] : $responseCurl['message'] ));
            return $responseResult;
        }
    }

}

?>