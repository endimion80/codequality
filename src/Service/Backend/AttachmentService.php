<?php 

namespace App\Service\Backend;

use App\Entity\Attachment;
use App\Entity\Crane;
use App\Entity\Intervention;
use App\Entity\Operator;
use App\Service\UtilsBase\UtilsService;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Contracts\Translation\TranslatorInterface;

class AttachmentService
{
    private $name = "AttachmentService";

    public function __construct(
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        UtilsService $utilsService
    ) {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }

    /**
     * Función que descarga un fichero adjunto
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $attachmentId  ID del fichero adjunto
     * 
     * @return $response
     */
    public function downloadAttachment($attachmentId){

        // Se comprueba que los parámetros no sean nulos o vacíos
        if($attachmentId == null || $attachmentId == '') {
            $response = $this->utilsService->sendResponse(false, 400, 'Empty or null values');
        } else {

            $attachment = $this->em->getRepository('App:Attachment')->findOneById($attachmentId);

            // Comprobamos que exista
            if(!$attachment) {
                return $this->utilsService->sendResponse(false, 400, 'Attachment not found');
            }
            
            $attachmentFileName = $attachment->getFileName();

            // Creamos el fichero temporal
            $attachmentFilepath = tempnam(sys_get_temp_dir(), $attachmentFileName);

            // Decodificamos el contenido de base64 y lo añadimos al fichero temporal
            $fileContent = base64_decode($attachment->getFileData());
            file_put_contents($attachmentFilepath, $fileContent);

            // Encriptamos la ruta del fichero
            $attachmentFileEncryptedPath = $this->utilsService->encrypt($attachmentFilepath);

            $response = $this->utilsService->sendResponse(true, 200, '', array('filePath' => $attachmentFileEncryptedPath, 'fileName' => $attachmentFileName));
        }

        return $response;
    }

    /**
     * Función para subir un fichero adjunto para guardarlo en la tabla Attachment
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param Array         $file           Array con el nombre y ruta del fichero a importar
     *                          $file["fileName"]   Nombre del fichero
     *                          $file["filePath"]   Ruta del fichero
     * 
     * @param String        $fileType       Campo "Code" del tipo de fichero adjunto (en la tabla AttachmentType)
     * @param Intervention  $intervention   Objeto intervención al que se le va a adjuntar el fichero
     * @param Crane         $crane          Objeto grúa a la que se le va a adjuntar el fichero
     * @param Operator      $operator       Objeto operario a la que se le va a adjuntar el fichero
     * 
     * @return $response
     */
    public function uploadAttachment($file, $fileType, $intervention = null, $crane = null, $operator = null){

        $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneByCode($fileType);

        $response = $this->utilsService->sendResponse(true, 200);

        if(!$attachmentType) {
            return $this->utilsService->sendResponse(false, 500, 'AttachmentType "'. $fileType .'" not found');
        }

        if(!$intervention && !$crane && !$operator) {
            return $this->utilsService->sendResponse(false, 500, 'No target for the attachment');
        }

        $fileContent = file_get_contents($file["filePath"]);
        $fileContentInBase64 = base64_encode($fileContent);

        $newAttachment = new Attachment;
        $newAttachment->setAttachmentType($attachmentType);
        $newAttachment->setFilename($file["fileName"]);
        $newAttachment->setCreationDate(new \DateTime());
        $newAttachment->setFileData($fileContentInBase64);

        if($intervention) {
            $newAttachment->setIntervention($intervention);

            //? Posiblemente se añadan algunos otros datos
            // -------------------------------------------
        }

        if($crane) {
            $newAttachment->setCrane($crane);
        }
        
        if($operator) {
            $newAttachment->setOperator($operator);
        }

        try {
            $this->em->persist($newAttachment);
            $this->em->flush();
        } catch (DBALException $e) {
            $response = $e->getMessage();
        }

        return $response;
    }

    /**
     * Función para crear o modificar la foto de perfil de un operario
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param Array         $file           Array con el nombre y ruta del fichero a importar
     *                          $file["fileName"]   Nombre del fichero
     *                          $file["filePath"]   Ruta del fichero
     * 
     * @param Operator      $operator       Objeto operario a la que se le va a adjuntar el fichero
     * 
     * @return $response
     */
    public function createOrModifyProfileImage($file, $operator){

        $attachmentType = $this->em->getRepository('App:AttachmentType')->findOneByCode("foto_perfil_operario");
        $currentProfileImg = $this->em->getRepository('App:Attachment')->findOneBy(array("operator" => $operator,
                                                                                         "attachmentType" => $attachmentType
                                                                                        ));
        $newProfileImg = new Attachment;

        $response = $this->utilsService->sendResponse(true, 200);

        if(!$attachmentType) {
            return $this->utilsService->sendResponse(false, 500, 'AttachmentType "foto_perfil_operario" not found');
        }

        if(!$operator) {
            return $this->utilsService->sendResponse(false, 500, 'No target for the attachment');
        }

        $fileContent = file_get_contents($file["filePath"]);
        $fileContentInBase64 = base64_encode($fileContent);

        if($currentProfileImg) {
            $newProfileImg = $currentProfileImg;
        } else {
            $newProfileImg->setAttachmentType($attachmentType);
            
            if($operator) {
                $newProfileImg->setOperator($operator);
            }
        }

        $newProfileImg->setFilename($file["fileName"]);
        $newProfileImg->setFileData($fileContentInBase64);
        $newProfileImg->setCreationDate(new \DateTime());

        try {
            $this->em->persist($newProfileImg);
            $this->em->flush();
        } catch (DBALException $e) {
            $response = $e->getMessage();
        }

        return $response;
    }

}

?>