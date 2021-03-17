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

/* base.html.twig */
class __TwigTemplate_2b43b88eccae5b1c0c48fae049f747f2a37a684a0bd08860ae27172628441956 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"google\" content=\"notranslate\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/asitur_favicon.ico"), "html", null, true);
        echo "\" sizes=\"16x16\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "    </head>
    <body>
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 131
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "                        
            <!--Open Sans Font -->
 \t        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin\" rel=\"stylesheet\">

            <!--Bootstrap Stylesheet -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Nifty Stylesheet -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nifty.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Font Awesome -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Animate.css -->
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/animate-css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Morris.js -->
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris-js/morris.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Switchery -->
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/switchery/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Bootstrap Select -->
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Chosen -->
\t        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chosen/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Bootstrap Table -->
            <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/media/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/extensions/Responsive/css/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Sweetalert2 -->
            <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\">
            
            <!--X-editable -->
            <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/x-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Custom checkbox -->
            <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/imgcheckbox/animation.imgcheckbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!--Bootstrap Datepicker -->
\t        <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
            
            <style>
                @font-face {
                    font-family: \"Flama\";
                    src: url(\"fonts/FlamaRegular.otf\");                  
                }
                body{
                    ";
        // line 63
        echo "                }
            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "
            <!--jQuery -->
            <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>

            <!--BootstrapJS -->
            <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!--Sweetalert2 -->
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>

            <!--Fast Click -->
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fast-click/fastclick.min.js"), "html", null, true);
        echo "\"></script>

            <!--Nifty Admin -->
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nifty.min.js"), "html", null, true);
        echo "\"></script>

            <!--Morris.js -->
            <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris-js/morris.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris-js/raphael-js/raphael.min.js"), "html", null, true);
        echo "\"></script>

            <!--Sparkline -->
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

            <!--Skycons -->
            <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/skycons/skycons.min.js"), "html", null, true);
        echo "\"></script>

            <!--Switchery -->
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>

            <!--Bootstrap Select -->
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>

            <!--Chosen -->
\t        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>

            <!--Bootstrap Table -->
            <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/media/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>

            <!--X-editable -->
            <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/x-editable/js/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>

            <!--Custom checkbox -->
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/imgcheckbox/jquery.imgcheckbox.min.js"), "html", null, true);
        echo "\"></script>

            <!--Bootstrap Datepicker -->
\t        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>

            <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment-with-locales.min.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
           
            <!--Dropzone -->
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dropzone-5.7.0/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

            <!--Dropzone -->
            ";
        // line 128
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/highcharts/series-label.js"), "html", null, true);
        echo "\"></script>            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 129,  370 => 128,  364 => 124,  355 => 118,  351 => 117,  345 => 114,  339 => 111,  333 => 108,  329 => 107,  325 => 106,  319 => 103,  313 => 100,  307 => 97,  301 => 94,  295 => 91,  289 => 88,  285 => 87,  279 => 84,  273 => 81,  267 => 78,  261 => 75,  255 => 72,  251 => 70,  241 => 69,  223 => 68,  211 => 63,  198 => 52,  192 => 49,  186 => 46,  180 => 43,  174 => 40,  170 => 39,  164 => 36,  158 => 33,  152 => 30,  146 => 27,  140 => 24,  134 => 21,  128 => 18,  122 => 15,  115 => 10,  105 => 9,  86 => 6,  74 => 131,  71 => 69,  69 => 68,  65 => 66,  63 => 9,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"google\" content=\"notranslate\" />
        <title>{% block title %}Asitur{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('media/asitur_favicon.ico') }}\" sizes=\"16x16\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {% block stylesheets %}
                        
            <!--Open Sans Font -->
 \t        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin\" rel=\"stylesheet\">

            <!--Bootstrap Stylesheet -->
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

            <!--Nifty Stylesheet -->
            <link href=\"{{ asset('css/nifty.min.css') }}\" rel=\"stylesheet\">

            <!--Font Awesome -->
            <link href=\"{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

            <!--Animate.css -->
            <link href=\"{{ asset('plugins/animate-css/animate.min.css') }}\" rel=\"stylesheet\">

            <!--Morris.js -->
            <link href=\"{{ asset('plugins/morris-js/morris.min.css') }}\" rel=\"stylesheet\">

            <!--Switchery -->
            <link href=\"{{ asset('plugins/switchery/switchery.min.css') }}\" rel=\"stylesheet\">

            <!--Bootstrap Select -->
            <link href=\"{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}\" rel=\"stylesheet\">

            <!--Chosen -->
\t        <link href=\"{{ asset('plugins/chosen/chosen.min.css') }}\" rel=\"stylesheet\">

            <!--Bootstrap Table -->
            <link href=\"{{ asset('plugins/datatables/media/css/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}\" rel=\"stylesheet\">

            <!--Sweetalert2 -->
            <link rel=\"stylesheet\" href=\"{{ asset('css/sweetalert2/sweetalert2.min.css') }}\">
            
            <!--X-editable -->
            <link href=\"{{ asset('plugins/x-editable/css/bootstrap-editable.css') }}\" rel=\"stylesheet\">

            <!--Custom checkbox -->
            <link href=\"{{ asset('plugins/imgcheckbox/animation.imgcheckbox.min.css') }}\" rel=\"stylesheet\">

            <!--Bootstrap Datepicker -->
\t        <link href=\"{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
            
            <style>
                @font-face {
                    font-family: \"Flama\";
                    src: url(\"fonts/FlamaRegular.otf\");                  
                }
                body{
                    {# font-family: \"Flama\"; #}
                }
            </style>
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}

            <!--jQuery -->
            <script src=\"{{ asset('js/jquery-2.1.1.min.js') }}\"></script>

            <!--BootstrapJS -->
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

            <!--Sweetalert2 -->
            <script src=\"{{ asset('js/sweetalert2/sweetalert2.min.js') }}\"></script>

            <!--Fast Click -->
            <script src=\"{{ asset('plugins/fast-click/fastclick.min.js') }}\"></script>

            <!--Nifty Admin -->
            <script src=\"{{ asset('js/nifty.min.js') }}\"></script>

            <!--Morris.js -->
            <script src=\"{{ asset('plugins/morris-js/morris.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/morris-js/raphael-js/raphael.min.js') }}\"></script>

            <!--Sparkline -->
            <script src=\"{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}\"></script>

            <!--Skycons -->
            <script src=\"{{ asset('plugins/skycons/skycons.min.js') }}\"></script>

            <!--Switchery -->
            <script src=\"{{ asset('plugins/switchery/switchery.min.js') }}\"></script>

            <!--Bootstrap Select -->
            <script src=\"{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}\"></script>

            <!--Chosen -->
\t        <script src=\"{{ asset('plugins/chosen/chosen.jquery.min.js') }}\"></script>

            <!--Bootstrap Table -->
            <script src=\"{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}\"></script>
            <script src=\"{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}\"></script>
            <script src=\"{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}\"></script>

            <!--X-editable -->
            <script src=\"{{ asset('plugins/x-editable/js/bootstrap-editable.min.js') }}\"></script>

            <!--Custom checkbox -->
            <script src=\"{{ asset('plugins/imgcheckbox/jquery.imgcheckbox.min.js') }}\"></script>

            <!--Bootstrap Datepicker -->
\t        <script src=\"{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}\"></script>
            <script src=\"{{ asset('plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.js') }}\" charset=\"UTF-8\"></script>

            <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/momentjs/latest/moment-with-locales.min.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
           
            <!--Dropzone -->
            <script src=\"{{ asset('js/dropzone-5.7.0/dist/dropzone.js') }}\"></script>

            <!--Dropzone -->
            {# <script src=\"{{ asset('plugins/highcharts/exporting.js') }}\"></script> #}
            <script src=\"{{ asset('plugins/highcharts/highcharts.js') }}\"></script>
            <script src=\"{{ asset('plugins/highcharts/series-label.js') }}\"></script>            
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/rira_web/templates/base.html.twig");
    }
}
