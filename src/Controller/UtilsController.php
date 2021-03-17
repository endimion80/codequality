<?php 
// src/Controller/UtilsController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Utils\ExcelService;
use App\Service\UtilsBase\UtilsService;
// para renderizar plantillas
use Twig\Environment;

class UtilsController
{

    private $twig;

    public function __construct(Environment $twig,
                                ExcelService $excelService,
                                UtilsService $utilsService)
    {
        $this->twig = $twig;
        $this->excelService = $excelService;
        $this->utilsService = $utilsService;
    }

   
    /**
     * @author Javier Lago 
     * Descarga de un fichero que esté en una ruta concreta
     * 
     * @Route("/download_file", name="download_file")
     */
    public function downloadFile(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            // Obtenemos los paramétros que recibe la llamada.
            $filePath = $request->get('filePath');
            $fileName = $request->get('fileName');

            $result = $this->utilsService->downloadFile($fileName, $filePath);
            return $result;
        }
        
        return $this->utilsService->sendResponse(false, 400, "Ha ocurrido un error", array());
    }


    /**
     * @author Javier Lago 
     * Descarga de un fichero que esté en una ruta concreta (método GET)
     * 
     * @Route("/download_file_get/{fileName}/{filePath}", name="download_file_get")
     */
    public function downloadFileGet(Request $request, $fileName, $filePath)
    {
        if ($fileName != '' &&  $filePath != '') {
            // Obtenemos los paramétros que recibe la llamada.
            $filePath = $request->get('filePath');
            $fileName = $request->get('fileName');

            $result = $this->utilsService->downloadFile($fileName, $filePath);
            return $result;
        }
        
        return $this->utilsService->sendResponse(false, 400, "Ha ocurrido un error", array());
    }





    /**
     * @author Javier Lago 
     * Muestra el contenido de un fichero (ejemplo un pdf) en una url, siempre con 
     * rutas encriptadas
     * 
     * @Route("/visualize_file", name="visualize_file")
     */
    public function visualizeFile(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            // Obtenemos los paramétros que recibe la llamada.
            $filePath = $request->get('filePath');
            $fileName = $request->get('fileName');

            $realFilePath = $this->utilsService->decrypt($filePath);

            $response = new BinaryFileResponse($realFilePath);
            $response->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_INLINE,
                basename($fileName)
            );
            return $response;

            return new Response("asf:" .$realFilePath);

            $result = $this->utilsService->downloadFile($fileName, $filePath);
            return $result;
        }
        
        return $this->utilsService->sendResponse(false, 400, "Ha ocurrido un error", array());
    }

    

}
?>