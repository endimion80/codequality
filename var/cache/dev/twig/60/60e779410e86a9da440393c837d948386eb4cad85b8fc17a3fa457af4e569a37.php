<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* testing/testExcel.html.twig */
class __TwigTemplate_a75e16108a98ec4cf357e1aeff80e3afb736d02036df2a023d38df81a1a7600c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "testing/testExcel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "testing/testExcel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Test Excel</title>

        <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
                integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
                crossorigin=\"anonymous\"></script>
        <style>
        .contentResult{
            margin-top: 20px;
            border: 1px solid black;
            padding: 14px;
        }
        </style>
    </head>
    <body>
        Test Excel<br><br>

        <input type=\"file\" id=\"fileToUpload\" name=\"fileToUpload\" accept=\"application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\" style='margin-right:10px;'/>
         
        <input type='button' class ='btnUpload' data-type = 'FullFile' value='Subir y mostrar fichero' />
        <input type='button' class ='btnUpload' data-type = 'getByColCode' value='Subir y mostrar dato' />
        
        <div id='contentResult' class='contentResult'></div>

        <hr style='margin: 20px 0px;' />

        Nombre del fichero: <input type='text' id='fileName' value='MiFichero.xlsx' placeholder='introducir nombre' style='margin-right:10px;'/>

        <input type='button' class ='btnCreate' data-type = 'createExcel' value='Crear Excel' />
        <input type='button' class ='btnCreate' data-type = 'downloadExcel' value='Descargar Excel' />

        <div id='contentResultCreate' class='contentResult'></div>

    <script>
        \$(document).ready(function(){
            
            /*
                Ajax para las funciones de lectura
            */
            \$('.btnUpload').click(function(){
                var file_data = \$('#fileToUpload').prop('files')[0];
                var form_data = new FormData();
                form_data.append('fileToUpload', file_data);
                form_data.append('type', \$(this).data('type'));

                \$.ajax({
                        url:'";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_excel_import");
        echo "',
                        data: form_data,
                        type:\"POST\",
                        dataType:\"html\",
                        contentType:false,
                        processData:false,
                        cache:false,
                        success: function(data){
                            console.log('success');
                            console.log(data);
                            \$('#contentResult').html(data);
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                            \$('#contentResult').html(\"ERROR: \" + err['responseText']);
                        }
                });
            });


            /*
                Ajax para las funciones de creación
            */
            \$('.btnCreate').click(function(){
                var type = \$(this).data('type');
                var fileName = \$('#fileName').val();

                \$.ajax({
                        url:'";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_excel_export");
        echo "',
                        data: {
                            type: type,
                            fileName: \$('#fileName').val()      
                        },
                        type:\"POST\",
                        dataType:\"json\",
                        cache:false,
                        success: function(data){
                            console.log('success');
                            \$('#contentResultCreate').html(JSON.stringify(data));

                            if (type == 'downloadExcel' && data.status){
                                var fileName = data.data.fileName;
                                var filePath = data.data.filePath;
                                
                                var formTmp = document.createElement('form');
                                \$(formTmp).attr('action',\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_file");
        echo "\");
                                \$(formTmp).attr('name','formTmp');
                                \$(formTmp).attr('target','_blank');
                                \$(formTmp).attr('enctype','multipart/form-data');
                                \$(formTmp).attr('method','post');
                                \$(formTmp).append(\"<input type='hidden' name='fileName' value='\" + fileName + \"'/>\");
                                \$(formTmp).append(\"<input type='hidden' name='filePath' value='\" + filePath + \"'/>\");
                                document.body.appendChild(formTmp);
                                document.formTmp.submit();
                                document.body.removeChild(formTmp);
                            }
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                            \$('#contentResultCreate').html(\"ERROR: \" + err['responseText']);
                        }
                });
                
            });


             
        });
    </script>

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "testing/testExcel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 96,  126 => 79,  94 => 50,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Test Excel</title>

        <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
                integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
                crossorigin=\"anonymous\"></script>
        <style>
        .contentResult{
            margin-top: 20px;
            border: 1px solid black;
            padding: 14px;
        }
        </style>
    </head>
    <body>
        Test Excel<br><br>

        <input type=\"file\" id=\"fileToUpload\" name=\"fileToUpload\" accept=\"application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\" style='margin-right:10px;'/>
         
        <input type='button' class ='btnUpload' data-type = 'FullFile' value='Subir y mostrar fichero' />
        <input type='button' class ='btnUpload' data-type = 'getByColCode' value='Subir y mostrar dato' />
        
        <div id='contentResult' class='contentResult'></div>

        <hr style='margin: 20px 0px;' />

        Nombre del fichero: <input type='text' id='fileName' value='MiFichero.xlsx' placeholder='introducir nombre' style='margin-right:10px;'/>

        <input type='button' class ='btnCreate' data-type = 'createExcel' value='Crear Excel' />
        <input type='button' class ='btnCreate' data-type = 'downloadExcel' value='Descargar Excel' />

        <div id='contentResultCreate' class='contentResult'></div>

    <script>
        \$(document).ready(function(){
            
            /*
                Ajax para las funciones de lectura
            */
            \$('.btnUpload').click(function(){
                var file_data = \$('#fileToUpload').prop('files')[0];
                var form_data = new FormData();
                form_data.append('fileToUpload', file_data);
                form_data.append('type', \$(this).data('type'));

                \$.ajax({
                        url:'{{ path('test_excel_import') }}',
                        data: form_data,
                        type:\"POST\",
                        dataType:\"html\",
                        contentType:false,
                        processData:false,
                        cache:false,
                        success: function(data){
                            console.log('success');
                            console.log(data);
                            \$('#contentResult').html(data);
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                            \$('#contentResult').html(\"ERROR: \" + err['responseText']);
                        }
                });
            });


            /*
                Ajax para las funciones de creación
            */
            \$('.btnCreate').click(function(){
                var type = \$(this).data('type');
                var fileName = \$('#fileName').val();

                \$.ajax({
                        url:'{{ path('test_excel_export') }}',
                        data: {
                            type: type,
                            fileName: \$('#fileName').val()      
                        },
                        type:\"POST\",
                        dataType:\"json\",
                        cache:false,
                        success: function(data){
                            console.log('success');
                            \$('#contentResultCreate').html(JSON.stringify(data));

                            if (type == 'downloadExcel' && data.status){
                                var fileName = data.data.fileName;
                                var filePath = data.data.filePath;
                                
                                var formTmp = document.createElement('form');
                                \$(formTmp).attr('action',\"{{ path('download_file') }}\");
                                \$(formTmp).attr('name','formTmp');
                                \$(formTmp).attr('target','_blank');
                                \$(formTmp).attr('enctype','multipart/form-data');
                                \$(formTmp).attr('method','post');
                                \$(formTmp).append(\"<input type='hidden' name='fileName' value='\" + fileName + \"'/>\");
                                \$(formTmp).append(\"<input type='hidden' name='filePath' value='\" + filePath + \"'/>\");
                                document.body.appendChild(formTmp);
                                document.formTmp.submit();
                                document.body.removeChild(formTmp);
                            }
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                            \$('#contentResultCreate').html(\"ERROR: \" + err['responseText']);
                        }
                });
                
            });


             
        });
    </script>

    </body>
</html>
", "testing/testExcel.html.twig", "/var/www/rira_web/templates/testing/testExcel.html.twig");
    }
}
