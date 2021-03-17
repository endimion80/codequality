<?php 

namespace App\Service\Backend;

use App\Service\UtilsBase\UtilsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;


class BranchOfficeService
{

    public function __construct(
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        UtilsService $utilsService,
        SecurityService $securityService
    ) {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
        $this->securityService = $securityService;
    }

    /**
     * Función para recoger los datos que se van a exportar de una sucursal
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param integer $collaboratorId  ID de la entidad colaboradora
     * @param integer $branchOfficeId  ID de la sucursal
     * 
     * @return $response
     */
    public function getBranchOfficeDataToExport($collaboratorId, $branchOfficeId){

        $resultData = array();

        // Datos Sucursal
        array_push($resultData, array('Datos de sucursal:'));
        array_push($resultData, array('Dirección', 'Teléfono/s', 'Email siniestro', 'Email facturación', 'Persona/s de contacto'));
        $branchOffice = $this->em->getRepository('App:BranchOffice')->findOneById($branchOfficeId);

        if ($branchOffice) {
            $phonesList = $this->em->getRepository('App:Phone')->findBy(array("branchOffice" => $branchOfficeId));
            $contactsList = $this->em->getRepository('App:Contact')->findBy(array("branchOffice" => $branchOfficeId));
            // $telephones = $branchOffice->getTelephone().",".$branchOffice->getTelephone2().",".$branchOffice->getTelephone3();
            $telephones = "";
            $contacts = "";

            foreach($contactsList as $contact) {
                $contacts .= $contact->getName() . ",";
            }

            foreach($phonesList as $phone) {
                $telephones .= $phone->getNumber() . ",";
            }        
    
            $telephones = str_replace(",,", "", $telephones);
            $telephones = preg_replace("/,$/", "", $telephones);
            $contacts = str_replace(",,", "", $contacts);
            $contacts = preg_replace("/,$/", "", $contacts);

            array_push($resultData, array($branchOffice->getAddress(), $telephones, $branchOffice->getSinisterEmail(), $branchOffice->getInvoicingEmail(), $contacts));
        } else {
            array_push($resultData, array());
        }

        // Línea Vacía para separar
        array_push($resultData, array());

        // Grúas de esa sucursal
        array_push($resultData, array('Grúas:'));
        array_push($resultData, array('Identificador', 'Matrícula', 'Marca', 'Tipo', 'Servicios asociados', 'Zonas de servicio', 'Tipo de asignación', 'Estado', 'Rotulado'));
        $cranesList = $this->em->getRepository('App:Crane')->searchCranes($collaboratorId, null, null, false, false, $branchOffice);
        if($cranesList) {
            foreach($cranesList as $line) {
                array_push($resultData, $line);
            }
        } else {
            array_push($resultData, array());
        }

        // Línea Vacía para separar
        array_push($resultData, array());

        // Operarios de esa sucursal
        array_push($resultData, array('Operarios:'));
        array_push($resultData, array('Identificador', 'Móvil', 'Disponibilidad', 'Grúa asignada'));
        $operatorsList = $this->em->getRepository('App:Operator')->searchOperators($collaboratorId, null, null, false, false, $branchOfficeId);
        if($operatorsList) {
            foreach($operatorsList as $line) {
                array_push($resultData, $line);
            }
        } else {
            array_push($resultData, array());
        }

        // Línea Vacía para separar
        array_push($resultData, array());

        // Zonas en las que atiende
        array_push($resultData, array('Zonas en las que atiende:'));
        array_push($resultData, array('Localidad', 'Provincia'));
        if ($branchOffice) {
            array_push($resultData, array($branchOffice->getTown()->getName(), $branchOffice->getProvince()->getName()));
        }

        $branchOfficeData = array($resultData);
        
        return $branchOfficeData;
    }

}

?>