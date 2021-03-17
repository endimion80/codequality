<?php 

namespace App\Service\Utils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use App\Service\UtilsBase\UtilsService;
use Twig\Environment;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    private $name = "PdfService";

    public function __construct(EntityManagerInterface $em,
                                KernelInterface $appKernel,
                                TranslatorInterface $translator,
                                Environment $twig,
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->appKernel = $appKernel;
        $this->translator = $translator;
        $this->twig = $twig;
        $this->utilsService = $utilsService;
    }

    public function getName()
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        return "Retorno: " . $this->name;
    }



    /**
     * Funcion para descargar un pdf
     * 
     * Ejemplo de uso: 
     * 
     * En un controlador la llamaríamos así a la función: 
     * 
     * $result = $this->pdfService->downloadPDF(   $filename,
     *                                              $template, 
     *                                              $templateOptions, // optional
     *                                              $pdfOption // optional
     *                                              );
     * return new Response($result);
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param string filename Nombre del fichero
     * @param string template Url de la plantilla
     * @param array templateOptions Parámetros para la plantilla
     * @param array optionPDF Parámetros extra del pdf (ver funcion 'baseGeneratePDF')
     * 
     */
    public function downloadPDF($filename, $template, $templateOptions = [], $optionPDF = []){
        return $this->baseGeneratePDF('download', 
                        $optionPDF, 
                        $template, 
                        $templateOptions,
                        $filename);
    }

    /**
     * Funcion para visualizar un pdf
     * 
     * Ejemplo de uso: 
     * 
     * En un controlador la llamaríamos así a la función: 
     * 
     * $result = $this->pdfService->visualizePDF(   $filename,
     *                                              $template, 
     *                                              $templateOptions, // optional
     *                                              $pdfOption // optional
     *                                              );
     * return new Response($result);
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param string filename Nombre del fichero
     * @param string template Url de la plantilla
     * @param array templateOptions Parámetros para la plantilla
     * @param array optionPDF Parámetros extra del pdf (ver funcion 'baseGeneratePDF')
     * 
     */
    public function visualizePDF($filename, $template, $templateOptions = [], $optionPDF = []){
        return $this->baseGeneratePDF('visualize', 
                        $optionPDF, 
                        $template, 
                        $templateOptions,
                        $filename);
    }


    /**
     * Funcion para guardar un pdf en un directorio
     * 
     * Ejemplo de uso: 
     * 
     * En un controlador la llamaríamos así a la función: 
     * 
     * $result = $this->pdfService->savePDF(   $filename,
     *                                              $filepath,                                                               
     *                                              $template, 
     *                                              $templateOptions, // optional
     *                                              $pdfOption // optional
     *                                              );
     * return new Response($result);
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param string filename Nombre del fichero
     * @param string template Url de la plantilla
     * @param array templateOptions Parámetros para la plantilla
     * @param array optionPDF Parámetros extra del pdf (ver funcion 'baseGeneratePDF')
     * 
     */
    public function savePDF($filename,$filepath, $template, $templateOptions = [], $optionPDF = []){
        return $this->baseGeneratePDF('save', 
                        $optionPDF, 
                        $template, 
                        $templateOptions,
                        $filename,
                        $filepath);
    }


    /**
     * Funcion para guardar un pdf en un directorio temporal
     * 
     * Ejemplo de uso: 
     * 
     * En un controlador la llamaríamos así a la función: 
     * 
     * $result = $this->pdfService->tmpPDF(   $filename,
*                                              $template, 
*                                              $templateOptions, // optional
*                                              $pdfOption // optional
*                                              );
     * return new Response($result);
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param string filename Nombre del fichero
     * @param string template Url de la plantilla
     * @param array templateOptions Parámetros para la plantilla
     * @param array optionPDF Parámetros extra del pdf (ver funcion 'baseGeneratePDF')
     * 
     */
    public function tmpPDF($filename, $template, $templateOptions = [], $optionPDF = []){
        return $this->baseGeneratePDF('temporal', 
                        $optionPDF, 
                        $template, 
                        $templateOptions,
                        $filename);
    }

    /**
     * Funcion genérica para generar PDF
     * 
     * @author Javier Lago <javier.lago@kosaas.com>
     * @param string filename Nombre del fichero
     * @param string template Url de la plantilla
     * @param array templateOptions Parámetros para la plantilla
     * @param array optionPDF 
     *  Puede ser un array clave valor con las posibles opciones.
     *      "defaultFont" -> "Arial", ...
     *      "paperSize" -> "A4", "A3", "letter", ...
     *      "paperOrientation" -> "portrait", "landscape" ...    
     *      Iremos añadiendo más opciones si hiciese falta
     * 
     */
    public function baseGeneratePDF($type, $optionPDF,  $template, $templateOptions, $filename, $pathToSave = ''){
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();

        $defaultFont = 'Arial';

        if (isset($optionPDF['defaultFont']))
            $defaultFont = $optionPDF['defaultFont'];

        $pdfOptions->set('defaultFont', $defaultFont);
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isRemoteEnabled', true);
        
        $web_domain = $this->em->getRepository('App:Parameters')->getParameter("WEB_DOMAIN");
        $templateOptions['web_domain'] = $web_domain;

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->twig->render($template, $templateOptions);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
    
        $paperSize = 'A4';
        $paperOrientation = 'portrait';

        if (isset($optionPDF['paperSize']))
            $paperSize = $optionPDF['paperSize'];
        
        if (isset($optionPDF['paperOrientation']))
            $paperOrientation = $optionPDF['paperOrientation'];

        $dompdf->setPaper($paperSize, $paperOrientation);

        // Render the HTML as PDF
        $dompdf->render();

        if ($type == 'download'){
            // Store PDF Binary Data
            $output = $dompdf->output();

            $pdfFilepath = tempnam(sys_get_temp_dir(), $filename);
            file_put_contents($pdfFilepath, $output);

            $response = new Response();

            // Seteamos las cabeceras
            $response->headers->set('Cache-Control', 'private');
            $response->headers->set('Content-type', mime_content_type($pdfFilepath));
            $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($filename) . '";');
            $response->headers->set('Content-length', filesize($pdfFilepath));

            // Send headers before outputting anything
            $response->sendHeaders();
            $response->setContent(file_get_contents($pdfFilepath));

            return $response;
        }
        else if  ($type == 'visualize'){
            // Store PDF Binary Data
            $output = $dompdf->output();

            $pdfFilepath = tempnam(sys_get_temp_dir(), $filename);
            file_put_contents($pdfFilepath, $output);

            $response = new BinaryFileResponse($pdfFilepath);
            $response->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_INLINE,
                basename($pdfFilepath)
            );
            return $response;
        }
        else if ($type == 'save'){
            // Store PDF Binary Data
            $output = $dompdf->output();

            $pdfFilepath = $this->appKernel->getProjectDir() . "/public" . $pathToSave;
            $pdfFilepath .= $filename;
            // Write file to the desired path
            file_put_contents($pdfFilepath, $output);

            $pdfFilePathEncrypt = $this->utilsService->encrypt($pdfFilepath);

            return $this->utilsService->sendResponse(true, 200, "Success", array('fileName' => $filename, 
                                                                                'filePath' => $pdfFilePathEncrypt));
        }
        else if ($type == 'temporal'){
            // Store PDF Binary Data
            $output = $dompdf->output();

            $pdfFilepath = tempnam(sys_get_temp_dir(), $filename);
            
            // Write file to the desired path
            file_put_contents($pdfFilepath, $output);

            $pdfFilePathEncrypt = $this->utilsService->encrypt($pdfFilepath);

            return $this->utilsService->sendResponse(true, 200, "Success", array('fileName' => $filename, 
                                                                                'filePath' => $pdfFilePathEncrypt));
        }
  
        return $this->utilsService->sendResponse(false, 400, "ERROR");
    }


}

?>