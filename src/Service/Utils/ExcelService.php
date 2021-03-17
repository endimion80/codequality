<?php 

namespace App\Service\Utils;
use App\Service\UtilsBase\UtilsService;

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;
//use \PhpOffice\PhpSpreadsheet\Cell\DataValidation;
//use \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Symfony\Component\HttpKernel\KernelInterface;


class ExcelService
{
    private $appKernel;
    private $name = "ExcelService";

    public function __construct(KernelInterface $appKernel, UtilsService $utilsService)
    {
        $this->appKernel = $appKernel;
        $this->utilsService = $utilsService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }


    /**
     * Carga un excel desde un tipo "file" y devuelve una respuesta estandar con el array de datos
     * @author Javier Lago<javier.lago@kosaas.com>

     * @param file    $fileExcel Input tipo "file"
     * @param integer   $initRow Fila a partir de la cual empieza a leer el fichero
     * @param integer   $initCol Columna a partir de la cual empieza a leer el fichero
     * @param boolean   $returnHeaders Si quieres obtener las cabeceras o no del fichero
     * @param array     $loadSheetsOnly Array con el nombre de las hojas que quieres obtener
     * 
     * @return mixed    $response 
     */
    public function loadExcel($fileExcel, $initRow = 0, $initCol = 0, $returnHeaders = true, $loadSheetsOnly = null){

        // Nombre del fichero (hacemos una pequeña comprobación 
        // por si se sube con el método de symfony)
        if(is_a($fileExcel, 'Symfony\Component\HttpFoundation\File\UploadedFile'))
            $filename = $fileExcel->getClientOriginalName();
        else 
            $filename = $fileExcel;
        
        // Extensión del Fichero
        $ext = pathinfo($filename, PATHINFO_EXTENSION);    

        if (!in_array($ext, ['xls','xlsx','xlsm','csv'])) {
            return $this->utilsService->sendResponse(false, 400, "Wrong format: ". $ext);
        }
        
        $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($fileExcel);
        $objReader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
        $objReader->setReadDataOnly(true);
        
        //$loadSheetsOnly = ['Hoja1','Hoja2'];
        if (!is_null($loadSheetsOnly))
            $objReader->setLoadSheetsOnly($loadSheetsOnly);

        // Carga del fichero
        $objPHPExcel = $objReader->load($fileExcel);
        
        $arrayLoads = array(); // Array  de  Cargas

        // Recorremos todas las hojas y cogemos para importar solo las páginas que están visibles
        $sheets = [];
        foreach ($objPHPExcel->getWorksheetIterator() as $key => $value) {
            if($objPHPExcel->getSheet($key)->getSheetState() == 'visible'){
                array_push($sheets,$objPHPExcel->getSheet($key));
            }
        }
        
        foreach ($sheets as $worksheet) {
            $numberColumnToRead = 0;
            $arraySheetLoads = array(); 

            // Inicializamos variables que nos hacen falta para el tratamiento del Excel
            $index_read_row = -1; // indice de la fila leida 

            foreach ($worksheet->getRowIterator() as $row) {
                $index_read_row++;

                // La primera fila NO la tenemos en cuenta ya que tiene el nombre de las columnas
                if ($initRow <= $index_read_row) {
                    // Iteradores de Celda
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(false);
                    
                    $arrayDataRow = array(); // Creamos una array nueva por cada fila para obtener los datos
                    $index_read_cell = -1; // para guardar cuantas celdas debe leer
                    $rowHasData = false; // para indicar si esa fila tiene al menos un dato relleno
                    
                    // leemos todas las celdas (columnas) de esa linea
                    foreach ($cellIterator as $cell) {
                        $index_read_cell++;

                        // si esta dentro del margen que necesitamos leer (obviamos los de la izquierda)
                        if ( $initCol <= $index_read_cell && 
                            ( ($index_read_row ==  $initRow) || 
                              ($index_read_row != $initRow  && $index_read_cell <= ($initCol + $numberColumnToRead - 1)) )
                        ){
                            // obtenemos el dato
                            $val = $cell->getFormattedValue();
                            
                            // llevamos un contador del número de filas que
                            // hay que leer, en caso de que sea la cabecera
                            if ($index_read_row == $initRow){
                                if(trim($val) != '')
                                    $numberColumnToRead++;
                                else
                                    break; // indica que la cabecera llego a una celda 
                                           //vacia y paramos el bucle
                            }
                            
                            // si al menos una celda tiene un dato distinto a vacio lo marcamos como válida
                            // la linea
                            if(trim($val) != '')
                                $rowHasData = true;
                     
                            array_push($arrayDataRow, $val);
                        }
                    }// fin each columnas
                    
                    // en este punto tenemos en $arrayDataRow la fila a guardar, en caso de estar 
                    // completamente vacia paramos el bucle ya que sería el final del fichero
                    if(!$rowHasData)
                        break;
                    else{
                        if((($index_read_row ==  $initRow) && $returnHeaders) || 
                                $index_read_row !=  $initRow){
                            array_push($arraySheetLoads, $arrayDataRow); // guardamos el dato
                        }
                    }
                }
            }
             
            array_push($arrayLoads, $arraySheetLoads);
        } //Fin de Tratamiento del Excel.
        
        return $this->utilsService->sendResponse(true, 200, "Success", $arrayLoads);
    }// loadExcel


    /**
     * Genera un fichero temporal con el excel.
     * @author Javier Lago<javier.lago@kosaas.com>

     * @param string    $fileName Nombre del fichero
     * @param array     $nameSheets Array con los nombres de las hojas
     * @param array     $sheetDataArray Array con los contenidos de cada hoja del excel
     * 
     * @return mixed    $response 
     */
    public function generateExcel(string $fileName, array $nameSheets, array $sheetDataArray){
        return $this->createAndSaveExcel($fileName,$nameSheets,$sheetDataArray,false,'');
    }

    /**
     * Genera un fichero el excel en un path definido.
     * @author Javier Lago<javier.lago@kosaas.com>

     * @param string    $fileName Nombre del fichero
     * @param array     $nameSheets Array con los nombres de las hojas
     * @param array     $sheetDataArray Array con los contenidos de cada hoja del excel
     * @param string    $destinationPath Dónde se guarda el fichero
     * 
     * @return mixed    $response 
     */
    public function saveExcel(string $fileName, array $nameSheets, array $sheetDataArray, string $destinationPath){
        return $this->createAndSaveExcel($fileName,$nameSheets,$sheetDataArray,true,$destinationPath);
    }

    /**
     * Crea fisicamente el fichero excel, en caso de poner el parámetro "destination" a "" lo creará
     * en un directorio temporal
     * @author Javier Lago<javier.lago@kosaas.com>

     * @param string    $fileName Nombre del fichero
     * @param array     $nameSheets Array con los nombres de las hojas
     * @param array     $sheetDataArray Array con los contenidos de cada hoja del excel
     * @param bool      $saveFile Indica si es temporal o no
     * @param string    $destinationPath Dónde se guarda el fichero en caso de no ser temporal
     * 
     * @return mixed    $response 
     */
    private function createAndSaveExcel(string $fileName, array $nameSheets, array $sheetDataArray, bool $saveFile, string $destinationPath){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        $count = 0;
        foreach ($nameSheets as $nameSheet){
            if (isset($sheetDataArray[$count])){
                
                if ($count != 0)
                    $spreadsheet->createSheet();
                                    
                $sheet = $spreadsheet->getSheet($count); // cogemos la hoja
                $sheet->setTitle($nameSheet); // seteamos el nombre de la hoja
                
                $sheetData = $sheetDataArray[$count];
                $rowsIndex = 1;
                foreach ($sheetData as $rows){
                    $colsIndex = 0;
                    foreach ($rows as $cols){ 
                        $cellPosition = $this->excelNumberToLetter($colsIndex) . $rowsIndex;
                        $sheet->setCellValue($cellPosition, $cols);
                        $colsIndex++;
                    }
                    $rowsIndex++;
                }
            }
            $count++;
        }
        // Creamos el writer
        $writer = new Xlsx($spreadsheet);
        
        if (!$saveFile){
            $excelFilepath = tempnam(sys_get_temp_dir(), $fileName);
        }
        else{
            $excelFilepath = $this->appKernel->getProjectDir() . "/public" . $destinationPath;

            if ($destinationPath == '')
                return $this->utilsService->sendResponse(false, 400, "Ruta no válida", array('path' => $excelFilepath));
            
            if (!file_exists ($excelFilepath))
                return $this->utilsService->sendResponse(false, 400, "Ruta no encontrada", array('path' => $excelFilepath));
            
            if (!is_writable ($excelFilepath))
                return $this->utilsService->sendResponse(false, 400, "No hay permisos de escritura en el directorio", array('path' => $excelFilepath));
          
            $excelFilepath .= $fileName;
        }
        
        $writer->save($excelFilepath);

        $excelFilePathEncrypt = $this->utilsService->encrypt($excelFilepath);

        return $this->utilsService->sendResponse(true, 200, "Success", array('fileName' => $fileName, 
                                                                            'filePath' => $excelFilePathEncrypt));
    }

    /********************************************************************/ 
    /*                      FUNCIONES AUXILIARES                        */ 
    /********************************************************************/ 
    
    /**
     * Convierte un numero de "columna" en el formato de "excel", Ej. 2 -> B, 3 -> C ...
     * 
     * @author Javier Lago<javier.lago@kosaas.com>
     * @param integer   $number Numero a convertir
     * @param boolean   $startInZero Si queremos que la primera columna sea 0 en lugar de 1
     * @return string   
     */
    public function excelNumberToLetter($number, $startInZero = true){

        $c = intval($number);
        
        if ($startInZero)
            $c++;

        if ($c <= 0) 
            return '';
        
        $letter = '';
                 
        while($c != 0){
           $p = ($c - 1) % 26;
           $c = intval(($c - $p) / 26);
           $letter = chr(65 + $p) . $letter;
        }
        
        return $letter;
    }

    /**
     * Convierte a numero de "columna" desde el formato de "excel", Ej. B -> 2, C -> 3 ...
     * 
     * @author Javier Lago<javier.lago@kosaas.com>
     * @param string   $letters "codigo" a convertir
     * @param boolean   $startInZero Si queremos que la primera columna sea 0 en lugar de 1
     * @return integer   
     */
    public function excelLetterToNumber($letters, $startInZero = true) {
        $num = 0;
        $arr = array_reverse(str_split($letters));
    
        for ($i = 0; $i < count($arr); $i++) {
            $num += (ord(strtolower($arr[$i])) - 96) * (pow(26,$i));
        }
        if ($startInZero)
            $num--;
        return $num;
    }
}

?>