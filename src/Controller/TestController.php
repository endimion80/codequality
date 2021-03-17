<?php 
// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Utils\ExcelService;
use App\Service\Utils\PdfService;
use App\Service\UtilsBase\UtilsService;
use App\Service\Utils\MapsService;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
// para renderizar plantillas
use Twig\Environment;

class TestController
{

    private $twig;

    public function __construct(Environment $twig,
                                ExcelService $excelService,
                                PdfService $pdfService,
                                UtilsService $utilsService,
                                MapsService $mapsService)
    {
        $this->twig = $twig;
        $this->excelService = $excelService;
        $this->pdfService = $pdfService;
        $this->utilsService = $utilsService;
        $this->mapsService = $mapsService;
    }

    /**
     * @author Javier Lago
     * @Route("/test", name="test_route")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @author Javier Lago
     * @Route({"/test2/lucky","/test3/lucky"} , name="test_route")
     */
    public function number2Routes()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number 2: '.$number.'</body></html>'
        );
    }

    /**
     * @author Javier Lago
     * Pruebas de renderizado de plantillas 
     * 
     * @Route("/test_template", name="test_template")
     */
    public function testTemplate()
    {
        return new Response("test");
        $number = random_int(0, 100);
        return new Response($this->twig->render('mails/mailBase.html.twig', array('number' => $number)));
    }

    /**
     * @author Javier Lago 
     * Pruebas de importacion de excel
     * 
     * @Route("/test_excel_import", name="test_excel_import")
     */
    public function testImportExcel(Request $request)
    {
        return new Response("test");
        if ($request->getMethod() == 'POST') {
            // Obtenemos los paramétros que recibe la llamada.
		    $fileUpload = $request->files->get('fileToUpload');

            // Distintas formas de especificar qué queremos cargar
            $result = $this->excelService->loadExcel($fileUpload);
            //$result = $this->excelService->loadExcel($fileUpload,0,0,true,"Hoja2");
            //$result = $this->excelService->loadExcel($fileUpload,0,0,true,["Hoja1","Hoja2"]);
            
            $type = $request->get('type');

            if ($type == 'FullFile'){
                return new Response(var_dump($result['data']));
            }
            else if ($type == 'getByColCode'){
                $aux = $result['data'][0][0]; // primera pagina, y primera fila

                //$indexCol = $this->excelService->excelNumberToLetter(3);
                $indexCol = $this->excelService->excelLetterToNumber('C');

                $data = $aux[$indexCol];

                return new Response(var_dump($data));
            }
            else if ($type == 'saveExcel'){
                $this->excelService->generateExcel([],[]);
            } 
            else{
                return new Response("Error");
            }
            
            return new Response(var_dump($result['data']));//Defecto
        }
        else{
            return new Response($this->twig->render('testing/testExcel.html.twig',
                                                    array()));
        }
    }

    /**
     * @author Javier Lago 
     * Pruebas de importacion de excel
     * 
     * @Route("/test_excel_export", name="test_excel_export")
     */
    public function testExportSaveExcel(Request $request)
    {
        return new Response("test");
        if ($request->getMethod() == 'POST') {
            $type = $request->get('type'); // tipo de accion a realizar
            $fileName = $request->get('fileName'); // nombre del fichero
                        
            // imaginamos que queremos pasar el siguiente 
            // array a un excel 
            $nameSheets = ['Datos1', 'Datos2'];

            $dataForSheets = array(
                        array(
                            array("uno", "dos", "tres"),
                            array("cuatro", "cinco", "seis")
                        ),
                        array(
                            array("siete", "ocho", "nueve"),
                            array("diez", "once", "doce")
                        )
                    );
            
            if ($type == 'createExcel'){
                $result = $this->excelService->saveExcel($fileName, $nameSheets, $dataForSheets,"/files/");
                return new JsonResponse($result);
            }
            else if ($type == 'downloadExcel'){
                $result = $this->excelService->generateExcel($fileName, $nameSheets, $dataForSheets);
                return new JsonResponse($result);
            }
            else{
                return new Response("Error");
            }
        }
        return new Response("ERROR");
    }

    // EJEMPLOS PDF

    /**
     * @Route("/test_pdf/{type}", name="testPDF")
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     */
    public function testPdfAction($type)
    {
        return new Response("test");
        $filename = "my_pdf.pdf";
        $filepath = "/files/";
        $template = "pdf/example_pdf.html.twig";
        $templateOptions = ['title' => "hola Javi"];
        $pdfOption = [];
        /*$pdfOption = ['defaultFont' => 'Helvetica',
                        'paperSize' => 'A3',
                        'paperOrientation' => 'landscape',
                        ];*/

        $option = $type; //?cambiar para las pruebas (1,2,3)
        
        // Ejemplo 1 - descarga de pdf
        if ($option == 1){
            $result = $this->pdfService->downloadPDF(   $filename,
                                                        $template, 
                                                        $templateOptions, // optional
                                                        $pdfOption // optional
                                                        );
            return $result;
        }
        // Ejemplo 2 - visualizar pdf
        else if ($option == 2){
            $result = $this->pdfService->visualizePDF(  $filename,
                                                        $template, 
                                                        $templateOptions, // optional
                                                        $pdfOption // optional
                                                        );
            return $result;
        }
        // Ejemplo 3 - guardar pdf
        else if ($option == 3){
            $result = $this->pdfService->savePDF(  $filename,
                                                    $filepath,
                                                    $template, 
                                                    $templateOptions, // optional
                                                    $pdfOption // optional
                                                    );

            

            return new Response(var_dump($result));
        }

        // Ejemplo 4 - guardar pdf en un lugar temporal
        else if ($option == 4){
            $result = $this->pdfService->tmpPDF(  $filename,
                                                    $template, 
                                                    $templateOptions, // optional
                                                    $pdfOption // optional
                                                    );

            

            return new Response(var_dump($result));
        }
        else
            return new Response("Valores validos (1,2,3,4). Obtenido: ". $type);
    }

    /**
     * @Route("/test_map/", name="testMap")
     * @author Javier Lago <javier.lago@kosaas.com>
     * 
     */
    public function testMapAction()
    {
        $ori_latitude = '37.892215'; // casa javi
        $ori_longitude = '-4.7640907';
        $dst_latitude = '37.874653'; // parque joyero
        $dst_longitude = '-4.8207377';       
        
        $result = $this->mapsService->getUrlStaticMap($ori_latitude, $ori_longitude,$dst_latitude,$dst_longitude, 300,600,true,true);
        return new Response(var_dump($result));
    }

}
?>