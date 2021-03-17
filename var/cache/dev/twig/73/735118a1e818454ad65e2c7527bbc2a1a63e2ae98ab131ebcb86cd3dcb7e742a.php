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

/* backend/debugMapRoute.html.twig */
class __TwigTemplate_8e7d7de6e646093c98d6265290cf24ae47b41070c123b65965c7a2a78f7645c2 extends \Twig\Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "includes/backend_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/debugMapRoute.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/debugMapRoute.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/debugMapRoute.html.twig", 1);
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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_general.css"), "html", null, true);
        echo "\">
    <style>
        #page-content{
            
        }
        #map {
            height: 650px;
        }

        .table_phase{
            background-color: white;
            border-radius: 3px;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.route_stored"), "html", null, true);
        echo "</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div class='row'>
            <div class='col-md-9'>
                <div id=\"map\"></div>
            </div>
            <div class='col-md-3'>
                <table class=\"table table-striped table_phase\">
                    <thead>
                        <tr>
                        <th scope=\"col\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.date"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.phase"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phaseLogArray"]) || array_key_exists("phaseLogArray", $context) ? $context["phaseLogArray"] : (function () { throw new RuntimeError('Variable "phaseLogArray" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phaseLog"]) {
            // line 53
            echo "                            <tr>
                                <td>
                                    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phaseLog"], "creation_date", [], "any", false, false, false, 55), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phaseLog"], "description", [], "any", false, false, false, 58), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phaseLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 76
        echo "    <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["MAPS_API_KEY"]) || array_key_exists("MAPS_API_KEY", $context) ? $context["MAPS_API_KEY"] : (function () { throw new RuntimeError('Variable "MAPS_API_KEY" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "&callback=initMap&libraries=&v=weekly\" defer ></script>

<script>
    var map;

    function initMap() {
        var startLatitude = 40.4167;
        var startLongitude = -3.70325;
        
        ";
        // line 86
        if ((((isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 86, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 86, $this->source); })()), "getVhLatitude", [], "method", false, false, false, 86)) && twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 86, $this->source); })()), "getVhLongitude", [], "method", false, false, false, 86))) {
            // line 87
            echo "            startLatitude = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 87, $this->source); })()), "getVhLatitude", [], "method", false, false, false, 87), "html", null, true);
            echo "\";
            startLongitude = \"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 88, $this->source); })()), "getVhLongitude", [], "method", false, false, false, 88), "html", null, true);
            echo "\";
        ";
        }
        // line 90
        echo "
        map = new google.maps.Map(document.getElementById(\"map\"), {
            center: { lat: parseFloat(startLatitude), lng: parseFloat(startLongitude) },
            zoom: 12,
        });
    

        function addMarker(title, creationdate, author, lat, lng){
            var marker = new google.maps.Marker({
                position: { lat: parseFloat(lat), lng: parseFloat(lng) },
                map,
                title: title,
            });

            var contentHtml = \"<h4 class='markerHeading'>\"+title+\"</h4>\"+
                            \"<div class='markerContent'>\"+
                            \"Fecha: \" + creationdate + \"<br>\" +
                            \"Por: \" + author+\"</div>\";

            var infowindow = new google.maps.InfoWindow({content: contentHtml});

            marker.addListener(\"click\", () => {
                infowindow.open(map, marker);
            });

        }

        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phaseLogArray"]) || array_key_exists("phaseLogArray", $context) ? $context["phaseLogArray"] : (function () { throw new RuntimeError('Variable "phaseLogArray" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phaseLog"]) {
            // line 118
            echo "            addMarker(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phaseLog"], "description", [], "any", false, false, false, 118), "html", null, true);
            echo "\",
                        \"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phaseLog"], "creation_date", [], "any", false, false, false, 119), "html", null, true);
            echo "\",
                        \"";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phaseLog"], "operator_name", [], "any", false, false, false, 120), "html", null, true);
            echo "\", 
                        \"";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phaseLog"], "latitude", [], "any", false, false, false, 121), "html", null, true);
            echo "\",
                        \"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phaseLog"], "longitude", [], "any", false, false, false, 122), "html", null, true);
            echo "\");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phaseLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "

        var flightPlanCoordinates = [
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geopositionArray"]) || array_key_exists("geopositionArray", $context) ? $context["geopositionArray"] : (function () { throw new RuntimeError('Variable "geopositionArray" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["geoposition"]) {
            // line 128
            echo "                { lat: parseFloat(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geoposition"], "latitude", [], "any", false, false, false, 128), "html", null, true);
            echo "\"), lng: parseFloat(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geoposition"], "longitude", [], "any", false, false, false, 128), "html", null, true);
            echo "\") },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geoposition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        ];

        //flightPlanCoordinates = flightPlanCoordinates.slice(0, 10);
        //console.log(flightPlanCoordinates);

         flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: \"#FF0000\",
            strokeOpacity: 1.0,
            strokeWeight: 2,
        });
        flightPath.setMap(map);
        
    }

    \$(document).ready(function(){
    });// ready
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/debugMapRoute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 130,  320 => 128,  316 => 127,  311 => 124,  303 => 122,  299 => 121,  295 => 120,  291 => 119,  286 => 118,  282 => 117,  253 => 90,  248 => 88,  243 => 87,  241 => 86,  229 => 77,  226 => 76,  221 => 74,  211 => 73,  192 => 62,  182 => 58,  176 => 55,  172 => 53,  168 => 52,  161 => 48,  157 => 47,  137 => 30,  131 => 26,  121 => 25,  95 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/backend_sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
{{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_general.css') }}\">
    <style>
        #page-content{
            
        }
        #map {
            height: 650px;
        }

        .table_phase{
            background-color: white;
            border-radius: 3px;
        }

    </style>
{% endblock %}

{% block content %}

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">{{\"backend.map.route_stored\"|trans}}</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div class='row'>
            <div class='col-md-9'>
                <div id=\"map\"></div>
            </div>
            <div class='col-md-3'>
                <table class=\"table table-striped table_phase\">
                    <thead>
                        <tr>
                        <th scope=\"col\">{{\"backend.map.date\"|trans}}</th>
                        <th scope=\"col\">{{\"backend.map.phase\"|trans}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for phaseLog in phaseLogArray %}
                            <tr>
                                <td>
                                    {{ phaseLog.creation_date }}
                                </td>
                                <td>
                                    {{ phaseLog.description }}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}
    {# Mapas #}
    <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key={{MAPS_API_KEY}}&callback=initMap&libraries=&v=weekly\" defer ></script>

<script>
    var map;

    function initMap() {
        var startLatitude = 40.4167;
        var startLongitude = -3.70325;
        
        {% if intervention and intervention.getVhLatitude() and intervention.getVhLongitude() %}
            startLatitude = \"{{ intervention.getVhLatitude() }}\";
            startLongitude = \"{{ intervention.getVhLongitude() }}\";
        {% endif %}

        map = new google.maps.Map(document.getElementById(\"map\"), {
            center: { lat: parseFloat(startLatitude), lng: parseFloat(startLongitude) },
            zoom: 12,
        });
    

        function addMarker(title, creationdate, author, lat, lng){
            var marker = new google.maps.Marker({
                position: { lat: parseFloat(lat), lng: parseFloat(lng) },
                map,
                title: title,
            });

            var contentHtml = \"<h4 class='markerHeading'>\"+title+\"</h4>\"+
                            \"<div class='markerContent'>\"+
                            \"Fecha: \" + creationdate + \"<br>\" +
                            \"Por: \" + author+\"</div>\";

            var infowindow = new google.maps.InfoWindow({content: contentHtml});

            marker.addListener(\"click\", () => {
                infowindow.open(map, marker);
            });

        }

        {% for phaseLog in phaseLogArray %}
            addMarker(\"{{ phaseLog.description }}\",
                        \"{{ phaseLog.creation_date }}\",
                        \"{{ phaseLog.operator_name }}\", 
                        \"{{ phaseLog.latitude }}\",
                        \"{{ phaseLog.longitude }}\");
        {% endfor %}


        var flightPlanCoordinates = [
            {% for geoposition in geopositionArray %}
                { lat: parseFloat(\"{{ geoposition.latitude }}\"), lng: parseFloat(\"{{ geoposition.longitude }}\") },
            {% endfor %}
        ];

        //flightPlanCoordinates = flightPlanCoordinates.slice(0, 10);
        //console.log(flightPlanCoordinates);

         flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: \"#FF0000\",
            strokeOpacity: 1.0,
            strokeWeight: 2,
        });
        flightPath.setMap(map);
        
    }

    \$(document).ready(function(){
    });// ready
</script>


{% endblock %}", "backend/debugMapRoute.html.twig", "/var/www/rira_web/templates/backend/debugMapRoute.html.twig");
    }
}
