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

/* frontend/policy/privacy.html.twig */
class __TwigTemplate_0637d6ed3c17e199c2c56325b391855d6c21c542413e80c3354ecdbe467bdad4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/policy/privacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/policy/privacy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/policy/privacy.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Asitur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-base.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-login.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-policy.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur-blanco.png"), "html", null, true);
        echo "' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel policy_full_panel\">
                <div class=\"panel-title policy_title_panel\">
                    <h4>POLÍTICA DE PRIVACIDAD</h4>
                </div>
\t\t\t\t<div class=\"panel-body policy_panel\">

                    ";
        // line 28
        echo "                    <h5 style=\"text-align: left; font-weight: bold;\"><u>1. DEFINICIONES:</u></h5>
                    <ul>
                        ";
        // line 30
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 30, $this->source); })()) == "web")) {
            // line 31
            echo "                            <li><b><u>WEB RIRA:</u></b> Funcionalidad en la que se podrá logar el <b>PROVEEDOR</b> de Asitur con el objeto de gestionar la relación contractual con ASITUR por el servicio de – Asistencia en Carretera -. Asimismo, esta funcionalidad incluye la posibilidad de alojar información y/o documentación requerida por <b>Asitur</b>. A título de ejemplo: documentación de los vehículos, certificados con la AEAT y TGSS, Pólizas de seguros, escrituras, poderes, etc.
                            <br/><br/>
                            <b>EL PROVEEDOR</b> procederá a alojar la documentación que le sea requerida para el alta y mantenimiento en la red de proveedores a través de la <b>Web RIRA</b>, la cual pasará a estar disponible para su revisión y consulta por parte de <b>ASITUR</b> y que será almacenada mediante los medios y procedimientos que <b>ASITUR</b> estime oportunos en cada momento conforme a su política de seguridad.
                            </li>
                            <br/>
                        ";
        }
        // line 37
        echo "                        <li><b><u>APP RIRA:</u></b> Funcionalidad en la que se gestionará todo lo relativo a la prestación de los servicios por parte de los vehículos del <b>PROVEEDOR</b>. Asignaciones de servicios, aceptación de los servicios, geoposicionamiento de los vehículos que se encuentren operativos para dar servicio, etc.
                        </li>
                        <br/>
                        <li><b><u>PROVEEDOR:</u></b> Empresa o empresario individual que mantiene suscrito un contrato de prestación de servicios con <b>ASITUR</b> en virtud del cual se obliga frente a <b>ASITUR</b> a la prestación de servicios de ayuda técnica en carretera, remolque de vehículos y su rescate (en adelante, <b>ASISTENCIA EN CARRETERA</b>) para los asegurados de las compañías aseguradoras clientes de <b>ASITUR</b>.
                        </li>
                        <br/>
                        <li><b><u>OPERARIOS DE GRÚA (USUARIO):</u></b> Choferes del proveedor (personas físicas) que prestan los servicios para el proveedor de <b>ASITUR</b> que no tiene vínculo alguno laboral o mercantil con <b>ASITUR</b> y que se enmarcan dentro de la relación existente entre dichas partes.
                        </li>
                    </ul>

                    ";
        // line 48
        echo "                    ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 48, $this->source); })()) == "web")) {
            // line 49
            echo "                        <h5 style=\"text-align: left; font-weight: bold;\"><u>2. CONDICIONES DE USO WEB RIRA Y APP RIRA</u></h5>
                        <p><b>ASITUR</b> procederá a la asignación de servicios de asistencia en carretera al <b>PROVEEDOR</b> y al seguimiento de los servicios ya asignados a través de <b>RIRA</b> mediante los procedimientos que estime oportunos en cada momento. No obstante, para el cumplimiento de las políticas de seguridad de <b>ASITUR, EL PROVEEDOR</b> obtendrá tras su registro un usuario y una contraseña que deberá conservar en la más estricta confidencialidad.</p>

                        <p>Asimismo, para el acceso y uso por parte de los operarios de grúa (Choferes) del <b>PROVEEDOR</b>, éste se compromete a que sus operarios tengan un usuario y una contraseña nominal e individualizada. Será responsabilidad única del <b>PROVEEDOR</b> el adecuado uso de los usuarios que le sean facilitados tanto al <b>PROVEEDOR</b> como a sus operarios de grúa.</p>

                        <p>Asimismo, se informa al <b>PROVEEDOR</b> de que <b>ASITUR</b> en ningún caso tendrá acceso a la identificación de los usuarios que EL <b>PROVEEDOR</b> asigne a sus operarios, de modo que a cada uno de ellos se le asignará un nombre de usuario mediante identificador numérico o disociado (ejemplo: chofer 1). No obstante, es obligación exclusiva del <b>PROVEEDOR</b> informar a sus operarios de las condiciones de uso de <b>RIRA</b> y de sus responsabilidades y obligaciones como usuarios de acuerdo con lo previsto en el presente documento.</p>
                        
                        <p>Finalmente, se informa al <b>PROVEEDOR</b> de que <b>ASITUR</b>, como consecuencia del servicio prestado, con la finalidad de controlar, gestionar y mejorar la asignación de los servicios y sobre la base de su interés legítimo, podrá acceder a datos relativos al posicionamiento / localización GPS de los vehículos utilizados por los operarios de grúa que presten los servicios de asistencia en carretera, mientras presten los mismos y a través de la herramienta que <b>ASITUR</b> determine en cada momento.</p>

                        <p>En cualquier caso, <b>ASITUR</b> respetará el derecho a la intimidad y a la protección de los datos personales de los usuarios y garantizará que los datos obtenidos a través del sistema de geolocalización sean adecuados, pertinentes y no excesivos en relación con el ámbito y las finalidades determinadas, explícitas y legítimas para las que se obtienen. Asimismo, se le informa de que, al no estar identificados en <b>RIRA</b> los operarios de grúa del <b>PROVEEDOR</b> que prestan los servicios, no es posible para <b>ASITUR</b> identificar a los usuarios de <b>RIRA</b> que se geolocalicen y que, por tanto, no se produce un tratamiento de datos personales mediante la geolocalización de las grúas que prestan los servicios de asistencia en carretera, salvo que se crucen esos datos con los datos disponibles en otras bases de datos.</p>

                        <p>El posicionamiento / localización GPS de los vehículos del proveedor estará operativo EXCLUSIVAMENTE cuando el operario de grúa del proveedor <b>MARQUE COMO DISPONIBLE / OPERATIVO PARA ASITUR</b>.</p>

                        <p><b>ASITUR</b> no podrá proceder al posicionamiento / localización GPS del vehículo cuando el operario de grúa desactive su disponibilidad en <b>RIRA</b>. No obstante, para ello resulta imprescindible que <b>EL PROVEEDOR</b> o sus empleados desactiven en <b>RIRA</b> su disponibilidad para que la función de geolocalización sobre la que está siendo informada se deshabilite.</p>

                        <p>Los datos proporcionados, incluidos los obtenidos durante la prestación del servicio a través de la geolocalización del vehículo, se conservarán mientras se mantenga la relación contractual y en su caso, durante el plazo legal necesario para atender las obligaciones y responsabilidades que se deriven de la relación contractual y del tratamiento realizado.</p>
                    ";
        } else {
            // line 66
            echo "                        <h5 style=\"text-align: left; font-weight: bold;\"><u>2. CONDICIONES DE USO WEB RIRA Y APP RIRA</u></h5>
                        <p>El operario de grúa obtendrá tras su registro un usuario y una contraseña individual y personal que deberá conservar en la más estricta confidencialidad.</p>

                        <p><b>ASITUR</b> en ningún caso tendrá acceso a la identificación de los operarios de grúa, de modo que a cada uno de ellos se le asignará un nombre de usuario mediante identificador numérico o disociado haciendo imposible su identificación personal por parte de <b>ASITUR</b> (ejemplo: chofer 1).</p>

                        <p>Se informa que <b>ASITUR</b>, como consecuencia del servicio prestado, con la finalidad de controlar, gestionar y mejorar la asignación de los servicios y sobre la base de la ejecución del contrato entre <b>ASITUR</b> y <b>EL PROVEEDOR</b>, podrá acceder a datos relativos al posicionamiento / localización GPS de los vehículos conducidos por los operarios de grúa que presten los servicios de asistencia en carretera para <b>EL PROVEEDOR</b> mientras se presten los mismos y a través de la herramienta que <b>ASITUR</b> determine en cada momento.</p>

                        <p>En cualquier caso, <b>ASITUR</b> respetará el derecho a la intimidad y a la protección de los datos personales de los operarios de grúa y garantizará que los datos obtenidos a través del sistema de geolocalización sean adecuados, pertinentes y no excesivos en relación con el ámbito y las finalidades determinadas, explícitas y legítimas para las que se obtienen. Asimismo, se le informa de que, al no estar identificados en <b>RIRA</b> los operarios de grúa del <b>PROVEEDOR</b> que prestan los servicios al haberse disociado sus datos identificativos mediante la asignación de identificadores numéricos, no es posible para <b>ASITUR</b> identificar a los usuarios de <b>RIRA</b> que se geolocalicen salvo que se produzca un cruce de datos con datos disponibles en otras bases de datos.</p>

                        <p>El posicionamiento / localización GPS de los vehículos del proveedor estará operativo <b>EXCLUSIVAMENTE</b> cuando el operario de grúa del proveedor <b>MARQUE COMO DISPONIBLE / OPERATIVO PARA ASITUR</b> en el apartado de la APP RIRA.</p>

                        <p><b>ASITUR</b> no podrá proceder al posicionamiento / localización GPS cuando el operario de grúa desactive su disponibilidad en <b>RIRA</b>. No obstante, para ello resulta IMPRESCINDIBLE que <b>el operario de grúa</b> desactive en la APP <b>RIRA</b> su disponibilidad para que la función de geolocalización sobre la que está siendo informada se deshabilite.</p>
                    ";
        }
        // line 79
        echo "\t\t\t\t\t
                    ";
        // line 81
        echo "                    <h5 style=\"text-align: left; font-weight: bold;\"><u>3. PROTECCIÓN DE DATOS PERSONALES</u></h5>
                    ";
        // line 82
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 82, $this->source); })()) == "web")) {
            // line 83
            echo "                        <p>A los efectos de lo dispuesto en la normativa vigente sobre la protección de datos de carácter personal, se informa de que <b>ASITUR</b> procederá al tratamiento de los datos personales que se puedan encontrar disponibles en la documentación que EL PROVEEDOR facilite a ASITUR a través de la funcionalidad <b>RIRA</b> con el fin de mantener las relaciones entre ellas para la prestación de los servicios objeto de contratación y cumplir con todos los aspectos que de ello se deriven (formalización y archivo de los contratos, gestión de la contabilidad, cumplimiento de obligaciones impositivas y de facturación).</p>

                        <p>La base legal para el tratamiento de los datos es la ejecución de un contrato entre <b>LAS PARTES</b>. Estos datos no se cederán a terceros ni serán objeto de transferencias internacionales salvo que contemos con su consentimiento o se precise el cumplimiento de obligaciones legales. Los datos se conservarán mientras se mantenga la relación contractual entre las partes y en todo caso, durante el plazo necesario para atender las obligaciones y responsabilidades legales que pudieran derivarse de la prestación del servicio y del tratamiento de los datos realizados.</p>

                        <p>Los datos personales necesarios para el tratamiento expuesto serán tratados exclusivamente para los fines expuestos y no serán tratados ulteriormente de manera incompatible con dichos fines.</p>

                        <p>Mientras no nos comunique lo contrario, se entenderá que los datos de los firmantes y las personas de contacto de cada entidad no han sido modificados y que usted se compromete a notificarnos cualquier variación sobre los mismos.</p>
                    
                        <p>Se informa que <b>ASITUR</b> ha designado a un Delegado de Protección de Datos, con quien podrá contactar a través de la siguiente dirección de correo electrónico: <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>
                    
                        <p>Asimismo, se informa sobre la posibilidad de ejercitar en cualquier momento el derecho a obtener confirmación sobre si se están tratando o no sus datos personales, así como a ejercer los derechos de acceso, rectificación, limitación de tratamiento, supresión, portabilidad y oposición, dirigiendo su solicitud por escrito a la atención del Delegado de Protección de datos de Asitur Asistencia, junto con una fotocopia de su DNI, al domicilio establecido en el presente anexo o en el contrato al que se adiciona el mismo, o bien enviando un correo electrónico, adjuntando fotocopia de su DNI a <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>
                    
                        <p>Las partes intervinientes tienen derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (AEPD).</p>
                    ";
        } else {
            // line 97
            echo "                        <p>Le informamos de que, para la gestión de la APP RIRA, <b>ASITUR</b> le asignará un identificador numérico al que no va asociado ningún dato personal que permita su identificación, es decir, se le asignará un identificador disociado de su identidad, por lo que <b>ASITUR</b> en ningún momento procederá al tratamiento de sus datos personales.</p>

                        <p>No obstante, para el caso de que se produjese la identificación de los usuarios asignados mediante el cruce con datos disponibles en otras bases de datos, le informamos de que <b>ASITUR ASISTENCIA, S.A.</b>, como Responsable del Tratamiento, con NIF A28749976 y dirección en Avenida de los Encuartes, 21, 28760, Tres Cantos (Madrid), va a proceder al tratamiento de sus datos personales con la finalidad controlar, gestionar y mejorar la asignación de los servicios mediante la geolocalización de los vehículos del <b>PROVEEDOR</b> en tiempo real. La base jurídica para el tratamiento de los datos personales la ejecución de un contrato entre <b>ASITUR</b> y <b>EL PROVEEDOR</b> respecto de la cual usted es empleado o presta servicios.</p>

                        <p>Estos datos no se cederán a terceros ni serán objeto de transferencias internacionales salvo que contemos con su consentimiento o se precise el cumplimiento de obligaciones legales. Sus datos personales, incluidos los obtenidos durante la prestación del servicio a través de la geolocalización del vehículo, se conservarán mientras se mantenga la relación contractual entre las partes y en todo caso, durante el plazo necesario para atender las obligaciones y responsabilidades legales que pudieran derivarse de la prestación del servicio y del tratamiento de los datos realizados.</p>

                        <p>Los datos personales necesarios para el tratamiento expuesto serán tratados exclusivamente para los fines expuestos y no serán tratados ulteriormente de manera incompatible con dichos fines.</p>

                        <p>Se informa que <b>ASITUR</b> ha designado a un Delegado de Protección de Datos, con quien podrá contactar a través de la siguiente dirección de correo electrónico: <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>

                        <p>Asimismo, se informa sobre la posibilidad de ejercitar en cualquier momento el derecho a obtener confirmación sobre si se están tratando o no sus datos personales, así como a ejercer los derechos de acceso, rectificación, limitación de tratamiento, supresión, portabilidad y oposición, dirigiendo su solicitud por escrito a la atención del Delegado de Protección de datos de <b>ASITUR</b>, junto con una fotocopia de su DNI, al domicilio establecido en el presente anexo o en el contrato al que se adiciona el mismo, o bien enviando un correo electrónico, adjuntando fotocopia de su DNI a <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>

                        <p>Finalmente le informamos de que tiene derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (AEPD).</p>
                    ";
        }
        // line 111
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
   
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/policy/privacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 123,  265 => 122,  247 => 111,  231 => 97,  215 => 83,  213 => 82,  210 => 81,  207 => 79,  192 => 66,  173 => 49,  170 => 48,  158 => 37,  150 => 31,  148 => 30,  144 => 28,  133 => 19,  126 => 14,  116 => 13,  104 => 10,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-login.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-policy.css') }}\">
{% endblock %}

{% block body %}

    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='{{asset(\"media/logo-asitur-blanco.png\")}}' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel policy_full_panel\">
                <div class=\"panel-title policy_title_panel\">
                    <h4>POLÍTICA DE PRIVACIDAD</h4>
                </div>
\t\t\t\t<div class=\"panel-body policy_panel\">

                    {# 1. DEFINICIONES #}
                    <h5 style=\"text-align: left; font-weight: bold;\"><u>1. DEFINICIONES:</u></h5>
                    <ul>
                        {% if mode == \"web\" %}
                            <li><b><u>WEB RIRA:</u></b> Funcionalidad en la que se podrá logar el <b>PROVEEDOR</b> de Asitur con el objeto de gestionar la relación contractual con ASITUR por el servicio de – Asistencia en Carretera -. Asimismo, esta funcionalidad incluye la posibilidad de alojar información y/o documentación requerida por <b>Asitur</b>. A título de ejemplo: documentación de los vehículos, certificados con la AEAT y TGSS, Pólizas de seguros, escrituras, poderes, etc.
                            <br/><br/>
                            <b>EL PROVEEDOR</b> procederá a alojar la documentación que le sea requerida para el alta y mantenimiento en la red de proveedores a través de la <b>Web RIRA</b>, la cual pasará a estar disponible para su revisión y consulta por parte de <b>ASITUR</b> y que será almacenada mediante los medios y procedimientos que <b>ASITUR</b> estime oportunos en cada momento conforme a su política de seguridad.
                            </li>
                            <br/>
                        {% endif %}
                        <li><b><u>APP RIRA:</u></b> Funcionalidad en la que se gestionará todo lo relativo a la prestación de los servicios por parte de los vehículos del <b>PROVEEDOR</b>. Asignaciones de servicios, aceptación de los servicios, geoposicionamiento de los vehículos que se encuentren operativos para dar servicio, etc.
                        </li>
                        <br/>
                        <li><b><u>PROVEEDOR:</u></b> Empresa o empresario individual que mantiene suscrito un contrato de prestación de servicios con <b>ASITUR</b> en virtud del cual se obliga frente a <b>ASITUR</b> a la prestación de servicios de ayuda técnica en carretera, remolque de vehículos y su rescate (en adelante, <b>ASISTENCIA EN CARRETERA</b>) para los asegurados de las compañías aseguradoras clientes de <b>ASITUR</b>.
                        </li>
                        <br/>
                        <li><b><u>OPERARIOS DE GRÚA (USUARIO):</u></b> Choferes del proveedor (personas físicas) que prestan los servicios para el proveedor de <b>ASITUR</b> que no tiene vínculo alguno laboral o mercantil con <b>ASITUR</b> y que se enmarcan dentro de la relación existente entre dichas partes.
                        </li>
                    </ul>

                    {# 2. CONDICIONES DE USO WEB RIRA Y APP RIRA #}
                    {% if mode == \"web\" %}
                        <h5 style=\"text-align: left; font-weight: bold;\"><u>2. CONDICIONES DE USO WEB RIRA Y APP RIRA</u></h5>
                        <p><b>ASITUR</b> procederá a la asignación de servicios de asistencia en carretera al <b>PROVEEDOR</b> y al seguimiento de los servicios ya asignados a través de <b>RIRA</b> mediante los procedimientos que estime oportunos en cada momento. No obstante, para el cumplimiento de las políticas de seguridad de <b>ASITUR, EL PROVEEDOR</b> obtendrá tras su registro un usuario y una contraseña que deberá conservar en la más estricta confidencialidad.</p>

                        <p>Asimismo, para el acceso y uso por parte de los operarios de grúa (Choferes) del <b>PROVEEDOR</b>, éste se compromete a que sus operarios tengan un usuario y una contraseña nominal e individualizada. Será responsabilidad única del <b>PROVEEDOR</b> el adecuado uso de los usuarios que le sean facilitados tanto al <b>PROVEEDOR</b> como a sus operarios de grúa.</p>

                        <p>Asimismo, se informa al <b>PROVEEDOR</b> de que <b>ASITUR</b> en ningún caso tendrá acceso a la identificación de los usuarios que EL <b>PROVEEDOR</b> asigne a sus operarios, de modo que a cada uno de ellos se le asignará un nombre de usuario mediante identificador numérico o disociado (ejemplo: chofer 1). No obstante, es obligación exclusiva del <b>PROVEEDOR</b> informar a sus operarios de las condiciones de uso de <b>RIRA</b> y de sus responsabilidades y obligaciones como usuarios de acuerdo con lo previsto en el presente documento.</p>
                        
                        <p>Finalmente, se informa al <b>PROVEEDOR</b> de que <b>ASITUR</b>, como consecuencia del servicio prestado, con la finalidad de controlar, gestionar y mejorar la asignación de los servicios y sobre la base de su interés legítimo, podrá acceder a datos relativos al posicionamiento / localización GPS de los vehículos utilizados por los operarios de grúa que presten los servicios de asistencia en carretera, mientras presten los mismos y a través de la herramienta que <b>ASITUR</b> determine en cada momento.</p>

                        <p>En cualquier caso, <b>ASITUR</b> respetará el derecho a la intimidad y a la protección de los datos personales de los usuarios y garantizará que los datos obtenidos a través del sistema de geolocalización sean adecuados, pertinentes y no excesivos en relación con el ámbito y las finalidades determinadas, explícitas y legítimas para las que se obtienen. Asimismo, se le informa de que, al no estar identificados en <b>RIRA</b> los operarios de grúa del <b>PROVEEDOR</b> que prestan los servicios, no es posible para <b>ASITUR</b> identificar a los usuarios de <b>RIRA</b> que se geolocalicen y que, por tanto, no se produce un tratamiento de datos personales mediante la geolocalización de las grúas que prestan los servicios de asistencia en carretera, salvo que se crucen esos datos con los datos disponibles en otras bases de datos.</p>

                        <p>El posicionamiento / localización GPS de los vehículos del proveedor estará operativo EXCLUSIVAMENTE cuando el operario de grúa del proveedor <b>MARQUE COMO DISPONIBLE / OPERATIVO PARA ASITUR</b>.</p>

                        <p><b>ASITUR</b> no podrá proceder al posicionamiento / localización GPS del vehículo cuando el operario de grúa desactive su disponibilidad en <b>RIRA</b>. No obstante, para ello resulta imprescindible que <b>EL PROVEEDOR</b> o sus empleados desactiven en <b>RIRA</b> su disponibilidad para que la función de geolocalización sobre la que está siendo informada se deshabilite.</p>

                        <p>Los datos proporcionados, incluidos los obtenidos durante la prestación del servicio a través de la geolocalización del vehículo, se conservarán mientras se mantenga la relación contractual y en su caso, durante el plazo legal necesario para atender las obligaciones y responsabilidades que se deriven de la relación contractual y del tratamiento realizado.</p>
                    {% else %}
                        <h5 style=\"text-align: left; font-weight: bold;\"><u>2. CONDICIONES DE USO WEB RIRA Y APP RIRA</u></h5>
                        <p>El operario de grúa obtendrá tras su registro un usuario y una contraseña individual y personal que deberá conservar en la más estricta confidencialidad.</p>

                        <p><b>ASITUR</b> en ningún caso tendrá acceso a la identificación de los operarios de grúa, de modo que a cada uno de ellos se le asignará un nombre de usuario mediante identificador numérico o disociado haciendo imposible su identificación personal por parte de <b>ASITUR</b> (ejemplo: chofer 1).</p>

                        <p>Se informa que <b>ASITUR</b>, como consecuencia del servicio prestado, con la finalidad de controlar, gestionar y mejorar la asignación de los servicios y sobre la base de la ejecución del contrato entre <b>ASITUR</b> y <b>EL PROVEEDOR</b>, podrá acceder a datos relativos al posicionamiento / localización GPS de los vehículos conducidos por los operarios de grúa que presten los servicios de asistencia en carretera para <b>EL PROVEEDOR</b> mientras se presten los mismos y a través de la herramienta que <b>ASITUR</b> determine en cada momento.</p>

                        <p>En cualquier caso, <b>ASITUR</b> respetará el derecho a la intimidad y a la protección de los datos personales de los operarios de grúa y garantizará que los datos obtenidos a través del sistema de geolocalización sean adecuados, pertinentes y no excesivos en relación con el ámbito y las finalidades determinadas, explícitas y legítimas para las que se obtienen. Asimismo, se le informa de que, al no estar identificados en <b>RIRA</b> los operarios de grúa del <b>PROVEEDOR</b> que prestan los servicios al haberse disociado sus datos identificativos mediante la asignación de identificadores numéricos, no es posible para <b>ASITUR</b> identificar a los usuarios de <b>RIRA</b> que se geolocalicen salvo que se produzca un cruce de datos con datos disponibles en otras bases de datos.</p>

                        <p>El posicionamiento / localización GPS de los vehículos del proveedor estará operativo <b>EXCLUSIVAMENTE</b> cuando el operario de grúa del proveedor <b>MARQUE COMO DISPONIBLE / OPERATIVO PARA ASITUR</b> en el apartado de la APP RIRA.</p>

                        <p><b>ASITUR</b> no podrá proceder al posicionamiento / localización GPS cuando el operario de grúa desactive su disponibilidad en <b>RIRA</b>. No obstante, para ello resulta IMPRESCINDIBLE que <b>el operario de grúa</b> desactive en la APP <b>RIRA</b> su disponibilidad para que la función de geolocalización sobre la que está siendo informada se deshabilite.</p>
                    {% endif %}
\t\t\t\t\t
                    {# 3. PROTECCIÓN DE DATOS PERSONALES #}
                    <h5 style=\"text-align: left; font-weight: bold;\"><u>3. PROTECCIÓN DE DATOS PERSONALES</u></h5>
                    {% if mode == \"web\" %}
                        <p>A los efectos de lo dispuesto en la normativa vigente sobre la protección de datos de carácter personal, se informa de que <b>ASITUR</b> procederá al tratamiento de los datos personales que se puedan encontrar disponibles en la documentación que EL PROVEEDOR facilite a ASITUR a través de la funcionalidad <b>RIRA</b> con el fin de mantener las relaciones entre ellas para la prestación de los servicios objeto de contratación y cumplir con todos los aspectos que de ello se deriven (formalización y archivo de los contratos, gestión de la contabilidad, cumplimiento de obligaciones impositivas y de facturación).</p>

                        <p>La base legal para el tratamiento de los datos es la ejecución de un contrato entre <b>LAS PARTES</b>. Estos datos no se cederán a terceros ni serán objeto de transferencias internacionales salvo que contemos con su consentimiento o se precise el cumplimiento de obligaciones legales. Los datos se conservarán mientras se mantenga la relación contractual entre las partes y en todo caso, durante el plazo necesario para atender las obligaciones y responsabilidades legales que pudieran derivarse de la prestación del servicio y del tratamiento de los datos realizados.</p>

                        <p>Los datos personales necesarios para el tratamiento expuesto serán tratados exclusivamente para los fines expuestos y no serán tratados ulteriormente de manera incompatible con dichos fines.</p>

                        <p>Mientras no nos comunique lo contrario, se entenderá que los datos de los firmantes y las personas de contacto de cada entidad no han sido modificados y que usted se compromete a notificarnos cualquier variación sobre los mismos.</p>
                    
                        <p>Se informa que <b>ASITUR</b> ha designado a un Delegado de Protección de Datos, con quien podrá contactar a través de la siguiente dirección de correo electrónico: <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>
                    
                        <p>Asimismo, se informa sobre la posibilidad de ejercitar en cualquier momento el derecho a obtener confirmación sobre si se están tratando o no sus datos personales, así como a ejercer los derechos de acceso, rectificación, limitación de tratamiento, supresión, portabilidad y oposición, dirigiendo su solicitud por escrito a la atención del Delegado de Protección de datos de Asitur Asistencia, junto con una fotocopia de su DNI, al domicilio establecido en el presente anexo o en el contrato al que se adiciona el mismo, o bien enviando un correo electrónico, adjuntando fotocopia de su DNI a <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>
                    
                        <p>Las partes intervinientes tienen derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (AEPD).</p>
                    {% else %}
                        <p>Le informamos de que, para la gestión de la APP RIRA, <b>ASITUR</b> le asignará un identificador numérico al que no va asociado ningún dato personal que permita su identificación, es decir, se le asignará un identificador disociado de su identidad, por lo que <b>ASITUR</b> en ningún momento procederá al tratamiento de sus datos personales.</p>

                        <p>No obstante, para el caso de que se produjese la identificación de los usuarios asignados mediante el cruce con datos disponibles en otras bases de datos, le informamos de que <b>ASITUR ASISTENCIA, S.A.</b>, como Responsable del Tratamiento, con NIF A28749976 y dirección en Avenida de los Encuartes, 21, 28760, Tres Cantos (Madrid), va a proceder al tratamiento de sus datos personales con la finalidad controlar, gestionar y mejorar la asignación de los servicios mediante la geolocalización de los vehículos del <b>PROVEEDOR</b> en tiempo real. La base jurídica para el tratamiento de los datos personales la ejecución de un contrato entre <b>ASITUR</b> y <b>EL PROVEEDOR</b> respecto de la cual usted es empleado o presta servicios.</p>

                        <p>Estos datos no se cederán a terceros ni serán objeto de transferencias internacionales salvo que contemos con su consentimiento o se precise el cumplimiento de obligaciones legales. Sus datos personales, incluidos los obtenidos durante la prestación del servicio a través de la geolocalización del vehículo, se conservarán mientras se mantenga la relación contractual entre las partes y en todo caso, durante el plazo necesario para atender las obligaciones y responsabilidades legales que pudieran derivarse de la prestación del servicio y del tratamiento de los datos realizados.</p>

                        <p>Los datos personales necesarios para el tratamiento expuesto serán tratados exclusivamente para los fines expuestos y no serán tratados ulteriormente de manera incompatible con dichos fines.</p>

                        <p>Se informa que <b>ASITUR</b> ha designado a un Delegado de Protección de Datos, con quien podrá contactar a través de la siguiente dirección de correo electrónico: <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>

                        <p>Asimismo, se informa sobre la posibilidad de ejercitar en cualquier momento el derecho a obtener confirmación sobre si se están tratando o no sus datos personales, así como a ejercer los derechos de acceso, rectificación, limitación de tratamiento, supresión, portabilidad y oposición, dirigiendo su solicitud por escrito a la atención del Delegado de Protección de datos de <b>ASITUR</b>, junto con una fotocopia de su DNI, al domicilio establecido en el presente anexo o en el contrato al que se adiciona el mismo, o bien enviando un correo electrónico, adjuntando fotocopia de su DNI a <span style=\"color: #337ab7;\">protecciondedatos@asitur.es</span></p>

                        <p>Finalmente le informamos de que tiene derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (AEPD).</p>
                    {% endif %}

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</div>

{% endblock %}


{% block javascripts %}
    {{parent()}}
    <script>
   
    </script>
{% endblock %}", "frontend/policy/privacy.html.twig", "/var/www/rira_web/templates/frontend/policy/privacy.html.twig");
    }
}
