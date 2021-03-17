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

/* frontend/test_borrar.html.twig */
class __TwigTemplate_7f47666b3f0684501bdeea60e3f2295665f471116ff451112ed405afbeff7011 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/test_borrar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/test_borrar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/test_borrar.html.twig", 1);
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("security/forgot_pass_modal.html.twig", "frontend/test_borrar.html.twig", 14)->display($context);
        // line 15
        echo "
    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh; text-align: left;\">
\t\t

        <h1>Datos Conex. BD</h1>
        
        <pre>
        conn_env: ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["conn_env"]) || array_key_exists("conn_env", $context) ? $context["conn_env"] : (function () { throw new RuntimeError('Variable "conn_env" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "<br>
        user: ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "<br>
        password: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "<br>
        hostname: ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "<br>
        dbname: ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["dbname"]) || array_key_exists("dbname", $context) ? $context["dbname"] : (function () { throw new RuntimeError('Variable "dbname" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "<br>
        CA_CERT: ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["CA_CERT"]) || array_key_exists("CA_CERT", $context) ? $context["CA_CERT"] : (function () { throw new RuntimeError('Variable "CA_CERT" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "<br>
        resultConection: ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["resultConection"]) || array_key_exists("resultConection", $context) ? $context["resultConection"] : (function () { throw new RuntimeError('Variable "resultConection" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "<br>
        </pre>

        <br>

        <h1>Codigo llamada</h1>
        <div>
            \$url -> url de llamada<br>
            \$arrayPost -> es un array de argumentos en caso de que la url tenga algo
        </div>
        <pre>
         \$ch = curl_init();
            curl_setopt(\$ch, CURLOPT_URL, \$url);
            curl_setopt(\$ch, CURLOPT_HEADER, FALSE);
            curl_setopt(\$ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt(\$ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt(\$ch, CURLOPT_CONNECTTIMEOUT, 20);
            curl_setopt(\$ch, CURLOPT_TIMEOUT, 20);
            
            //curl_setopt(\$ch, CURLOPT_HTTPHEADER, array(\"Content-type: multipart/form-data\"));
            
            //curl_setopt(\$ch, CURLOPT_MAXREDIRS, 3);
            //curl_setopt(\$ch, CURLOPT_FOLLOWLOCATION, TRUE);
            
            if (!is_null(\$arrayPost)){
                curl_setopt(\$ch, CURLOPT_POST, TRUE);
                curl_setopt(\$ch, CURLOPT_POSTFIELDS,  serialize(\$arrayPost));
            }

            \$result_curl= curl_exec(\$ch);
            \$http_code = curl_getinfo( \$ch, CURLINFO_HTTP_CODE );
            \$totalTime = curl_getinfo( \$ch, CURLINFO_TOTAL_TIME );
            
            curl_close(\$ch);

            \$responseCode = strval(\$http_code);
        </pre>

        <h1>Ejemplo URL asitur</h1>
        <h2>URL: <i>";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["urlAsitur"]) || array_key_exists("urlAsitur", $context) ? $context["urlAsitur"] : (function () { throw new RuntimeError('Variable "urlAsitur" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "</i></h2>
        <pre>";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["responseAsitur"]) || array_key_exists("responseAsitur", $context) ? $context["responseAsitur"] : (function () { throw new RuntimeError('Variable "responseAsitur" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</pre>
        <h1>Ejemplo URL ETC</h1>
        <h2>URL: <i>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["urlETC"]) || array_key_exists("urlETC", $context) ? $context["urlETC"] : (function () { throw new RuntimeError('Variable "urlETC" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "</i></h2>
        <pre>";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["responseETC"]) || array_key_exists("responseETC", $context) ? $context["responseETC"] : (function () { throw new RuntimeError('Variable "responseETC" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</pre>



\t\t</div>
\t\t<!--===================================================-->
\t\t
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
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
        return "frontend/test_borrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 89,  240 => 88,  220 => 76,  216 => 75,  211 => 73,  207 => 72,  164 => 32,  160 => 31,  156 => 30,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  127 => 15,  125 => 14,  122 => 13,  112 => 12,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-login.css') }}\">
{% endblock %}

{% block body %}

{% include 'security/forgot_pass_modal.html.twig' %}

    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh; text-align: left;\">
\t\t

        <h1>Datos Conex. BD</h1>
        
        <pre>
        conn_env: {{ conn_env }}<br>
        user: {{ user }}<br>
        password: {{ password }}<br>
        hostname: {{ hostname }}<br>
        dbname: {{ dbname }}<br>
        CA_CERT: {{ CA_CERT }}<br>
        resultConection: {{ resultConection }}<br>
        </pre>

        <br>

        <h1>Codigo llamada</h1>
        <div>
            \$url -> url de llamada<br>
            \$arrayPost -> es un array de argumentos en caso de que la url tenga algo
        </div>
        <pre>
         \$ch = curl_init();
            curl_setopt(\$ch, CURLOPT_URL, \$url);
            curl_setopt(\$ch, CURLOPT_HEADER, FALSE);
            curl_setopt(\$ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt(\$ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt(\$ch, CURLOPT_CONNECTTIMEOUT, 20);
            curl_setopt(\$ch, CURLOPT_TIMEOUT, 20);
            
            //curl_setopt(\$ch, CURLOPT_HTTPHEADER, array(\"Content-type: multipart/form-data\"));
            
            //curl_setopt(\$ch, CURLOPT_MAXREDIRS, 3);
            //curl_setopt(\$ch, CURLOPT_FOLLOWLOCATION, TRUE);
            
            if (!is_null(\$arrayPost)){
                curl_setopt(\$ch, CURLOPT_POST, TRUE);
                curl_setopt(\$ch, CURLOPT_POSTFIELDS,  serialize(\$arrayPost));
            }

            \$result_curl= curl_exec(\$ch);
            \$http_code = curl_getinfo( \$ch, CURLINFO_HTTP_CODE );
            \$totalTime = curl_getinfo( \$ch, CURLINFO_TOTAL_TIME );
            
            curl_close(\$ch);

            \$responseCode = strval(\$http_code);
        </pre>

        <h1>Ejemplo URL asitur</h1>
        <h2>URL: <i>{{urlAsitur}}</i></h2>
        <pre>{{responseAsitur}}</pre>
        <h1>Ejemplo URL ETC</h1>
        <h2>URL: <i>{{urlETC}}</i></h2>
        <pre>{{responseETC}}</pre>



\t\t</div>
\t\t<!--===================================================-->
\t\t
\t</div>

{% endblock %}


{% block javascripts %}
    {{parent()}}
    <script>

   
    </script>
{% endblock %}
", "frontend/test_borrar.html.twig", "/var/www/rira_web/templates/frontend/test_borrar.html.twig");
    }
}
