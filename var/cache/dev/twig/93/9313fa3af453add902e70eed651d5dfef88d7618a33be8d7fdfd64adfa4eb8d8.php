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

/* backend/debugMapRouteList.html.twig */
class __TwigTemplate_ad20929f17802c82448e25483e833d87e5a92809964c18554a83172e6e4fa097 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/debugMapRouteList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/debugMapRouteList.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/debugMapRouteList.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_general.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.debug"), "html", null, true);
        echo " Geolocalización</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div id = 'container_login'>
            <div class='row'>
                 <div class='col-md-6 col-md-offset-3'>
                    <div>
                        <div class=\"panel media pad-all\">

                            ";
        // line 29
        if (((isset($context["msgFail"]) || array_key_exists("msgFail", $context) ? $context["msgFail"] : (function () { throw new RuntimeError('Variable "msgFail" does not exist.', 29, $this->source); })()) != "")) {
            // line 30
            echo "                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                        ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["msgFail"]) || array_key_exists("msgFail", $context) ? $context["msgFail"] : (function () { throw new RuntimeError('Variable "msgFail" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 36
        echo "
                            <div class='row' style='margin-top: 13px;'>
                                <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.input_id_intervention"), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"media-left\">
                                <span class=\"icon-wrap icon-wrap-sm icon-circle bg-success\">
                                <i class=\"fa fa-file-o fa-2x\"></i>
                                </span>
                            </div>
                
                            <div class=\"media-body\">
                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-6 col-md-6 col-lg-6'>
                                        <input id=\"intervencion_id\" value=\"\" type=\"text\" class=\"form-control asitur_input data_input\" maxlength=\"8\" placeholder = 'id intervencion'>
                                    </div>
                                    <div class='col-sm-6 col-md-6 col-lg-6'>
                                        <button id = 'btnGo' class=\"form-control btn btn-block btn-primary\">
                                            ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.search"), "html", null, true);
        echo "
                                        </button>                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class=\"panel media pad-all\" style='height: 400px;'>

                            ";
        // line 66
        if (((isset($context["msgFail"]) || array_key_exists("msgFail", $context) ? $context["msgFail"] : (function () { throw new RuntimeError('Variable "msgFail" does not exist.', 66, $this->source); })()) != "")) {
            // line 67
            echo "                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                        ";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["msgFail"]) || array_key_exists("msgFail", $context) ? $context["msgFail"] : (function () { throw new RuntimeError('Variable "msgFail" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 73
        echo "
                            <div class='row' style='margin-top: 13px;'>
                                <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.input_id_operator"), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"media-left\">
                                <span class=\"icon-wrap icon-wrap-sm icon-circle bg-success\">
                                <i class=\"fa fa-user fa-2x\"></i>
                                </span>
                            </div>
                
                            <div class=\"media-body\" style='overflow: initial'>
                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <select id=\"operator_id\" name=\"operator\" class=\"select_inputs chosen-select\">
                                        <option value=\"\">----</option>
                                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
            // line 91
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operator"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operator"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operator"], "username", [], "any", false, false, false, 91), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                        </select>
                                    </div>

                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <input id=\"initDate\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " 00:00:00\" type=\"text\" class=\"form-control asitur_input data_input\" maxlength=\"20\" placeholder = 'Inicio'>
                                    </div>
                                    
                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <input id=\"endDate\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " 23:59:59\" type=\"text\" class=\"form-control asitur_input data_input\" maxlength=\"20\" placeholder = 'Fin'>
                                    </div>

                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <button id = 'btnGoOperator' class=\"form-control btn btn-block btn-primary\">
                                            ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.search"), "html", null, true);
        echo "
                                        </button>                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
    \$(document).ready(function(){
        \$(\".chosen-select\").chosen({ width:'100%' });
        \$(\"#routes_li\").addClass(\"active-link\");

        var routeToGo = \"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_debug_maps_route", ["intervention_id" => "XXXXX"]);
        echo "\";
        \$('#btnGo').click(function(){
            if (\$('#intervencion_id').val() == ''){
                  swal.fire({
                        title: \"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.map.input_value_fail"), "html", null, true);
        echo "\",
                        html: \"\",
                        icon: 'info',
                        showConfirmButton: true
                    });
            }
            else{
                var finalRoute = routeToGo.replace(\"XXXXX\", \$('#intervencion_id').val());
                location.replace(finalRoute);
            }
        });

        var routeToGoOperator = \"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_debug_maps_route_operator", ["operator_id" => "XXXXX", "init_date" => "YYYYY", "end_date" => "ZZZZZ"]), "html", null, true);
        echo "\";
        \$('#btnGoOperator').click(function(){
            var finalRoute = routeToGoOperator.replace(\"XXXXX\", \$('#operator_id').val());
            var finalRoute = finalRoute.replace(\"YYYYY\", \$('#initDate').val());
            var finalRoute = finalRoute.replace(\"ZZZZZ\", \$('#endDate').val());
            location.replace(finalRoute);
        });
    });// ready
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/debugMapRouteList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 147,  318 => 135,  311 => 131,  300 => 124,  290 => 123,  264 => 106,  256 => 101,  249 => 97,  243 => 93,  230 => 91,  226 => 90,  209 => 76,  204 => 73,  197 => 69,  193 => 67,  191 => 66,  177 => 55,  158 => 39,  153 => 36,  146 => 32,  142 => 30,  140 => 29,  122 => 14,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/backend_sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_general.css') }}\">
{% endblock %}

{% block content %}
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">{{\"sidebar.debug\"|trans}} Geolocalización</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div id = 'container_login'>
            <div class='row'>
                 <div class='col-md-6 col-md-offset-3'>
                    <div>
                        <div class=\"panel media pad-all\">

                            {% if msgFail != '' %}
                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                        {{msgFail}}
                                    </div>
                                </div>
                            {% endif %}

                            <div class='row' style='margin-top: 13px;'>
                                <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                    {{'backend.map.input_id_intervention'|trans}}
                                </div>
                            </div>
                            <div class=\"media-left\">
                                <span class=\"icon-wrap icon-wrap-sm icon-circle bg-success\">
                                <i class=\"fa fa-file-o fa-2x\"></i>
                                </span>
                            </div>
                
                            <div class=\"media-body\">
                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-6 col-md-6 col-lg-6'>
                                        <input id=\"intervencion_id\" value=\"\" type=\"text\" class=\"form-control asitur_input data_input\" maxlength=\"8\" placeholder = 'id intervencion'>
                                    </div>
                                    <div class='col-sm-6 col-md-6 col-lg-6'>
                                        <button id = 'btnGo' class=\"form-control btn btn-block btn-primary\">
                                            {{'backend.map.search'|trans}}
                                        </button>                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class=\"panel media pad-all\" style='height: 400px;'>

                            {% if msgFail != '' %}
                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                        {{msgFail}}
                                    </div>
                                </div>
                            {% endif %}

                            <div class='row' style='margin-top: 13px;'>
                                <div class='col-sm-12 col-md-12 col-lg-12' style='text-align:center'>
                                    {{'backend.map.input_id_operator'|trans}}
                                </div>
                            </div>
                            <div class=\"media-left\">
                                <span class=\"icon-wrap icon-wrap-sm icon-circle bg-success\">
                                <i class=\"fa fa-user fa-2x\"></i>
                                </span>
                            </div>
                
                            <div class=\"media-body\" style='overflow: initial'>
                                <div class='row' style='margin-top: 13px;'>
                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <select id=\"operator_id\" name=\"operator\" class=\"select_inputs chosen-select\">
                                        <option value=\"\">----</option>
                                        {% for operator in operators %}
                                            <option value=\"{{operator.id}}\">{{operator.id}} - {{operator.username}}</option>
                                        {% endfor %}
                                        </select>
                                    </div>

                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <input id=\"initDate\" value=\"{{'now'|date('Y-m-d')}} 00:00:00\" type=\"text\" class=\"form-control asitur_input data_input\" maxlength=\"20\" placeholder = 'Inicio'>
                                    </div>
                                    
                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <input id=\"endDate\" value=\"{{'now'|date('Y-m-d')}} 23:59:59\" type=\"text\" class=\"form-control asitur_input data_input\" maxlength=\"20\" placeholder = 'Fin'>
                                    </div>

                                    <div class='col-sm-3 col-md-3 col-lg-3'>
                                        <button id = 'btnGoOperator' class=\"form-control btn btn-block btn-primary\">
                                            {{'backend.map.search'|trans}}
                                        </button>                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}

<script>
    \$(document).ready(function(){
        \$(\".chosen-select\").chosen({ width:'100%' });
        \$(\"#routes_li\").addClass(\"active-link\");

        var routeToGo = \"{{ path('backend_debug_maps_route', {'intervention_id':'XXXXX'}) }}\";
        \$('#btnGo').click(function(){
            if (\$('#intervencion_id').val() == ''){
                  swal.fire({
                        title: \"{{'backend.map.input_value_fail'|trans}}\",
                        html: \"\",
                        icon: 'info',
                        showConfirmButton: true
                    });
            }
            else{
                var finalRoute = routeToGo.replace(\"XXXXX\", \$('#intervencion_id').val());
                location.replace(finalRoute);
            }
        });

        var routeToGoOperator = \"{{ path('backend_debug_maps_route_operator', {'operator_id':'XXXXX', 'init_date':'YYYYY' , 'end_date':'ZZZZZ'}) }}\";
        \$('#btnGoOperator').click(function(){
            var finalRoute = routeToGoOperator.replace(\"XXXXX\", \$('#operator_id').val());
            var finalRoute = finalRoute.replace(\"YYYYY\", \$('#initDate').val());
            var finalRoute = finalRoute.replace(\"ZZZZZ\", \$('#endDate').val());
            location.replace(finalRoute);
        });
    });// ready
</script>


{% endblock %}", "backend/debugMapRouteList.html.twig", "/var/www/rira_web/templates/backend/debugMapRouteList.html.twig");
    }
}
