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

/* backend/app_testing.html.twig */
class __TwigTemplate_4182a3cd2899f6fac800d468f37bb709d75d0f5972289fcd9a6d464324c9dda3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/app_testing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/app_testing.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/app_testing.html.twig", 1);
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


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.test_app"), "html", null, true);
        echo "</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        ";
        // line 26
        echo "        <div class=\"panel\">
            <div class=\"panel-body\">
                <h3 style=\"margin-bottom: 20px; margin-top: 0;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.app_testing.prepare_intervention.title"), "html", null, true);
        echo "</h3>
                <div class=\"row\" style=\"display: flex; align-items: flex-end; flex-wrap: wrap; margin-bottom: 20px;\">
                    ";
        // line 31
        echo "                    <div class=\"input_filter_div col-xs-12 col-sm-4 col-md-4 col-lg-2\" >
                        <label for=\"restart_intervention_input\" class=\"filter_labels\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.intervention"), "html", null, true);
        echo ":</label>
                        <select id=\"restart_intervention_input\" name=\"reset_intervention\" class=\"form-control filter_inputs select_inputs chosen-select\">
                        <option value=\"\">----</option>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 36
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </select>
                    </div>
                    ";
        // line 41
        echo "                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-2\" style=\"padding-left: 15px; padding-right: 15px; margin-bottom: 15px;\">
                        <button id=\"reset_button\" class=\"btn btn-warning\" style=\"height: 36px;\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.app_testing.reset_intervention"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 49
        echo "        <div class=\"panel\">
            <div class=\"panel-body\">
                <h3 style=\"margin-bottom: 20px;\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.app_testing.test_notification.title"), "html", null, true);
        echo "</h3>
                <div class=\"row\" style=\"display: flex; align-items: flex-end; flex-wrap: wrap; margin-bottom: 20px;\">
                    ";
        // line 54
        echo "                    <div class=\"input_filter_div col-xs-12 col-sm-4 col-md-4 col-lg-2\" >
                        <label for=\"operator-input\" class=\"filter_labels\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.operator"), "html", null, true);
        echo ":</label>
                        <select id=\"operator-input\" name=\"operator\" class=\"form-control filter_inputs select_inputs chosen-select\">
                        <option value=\"\">----</option>
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
            // line 59
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operator"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operator"], "reference", [], "any", false, false, false, 59), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </select>
                    </div>
                    ";
        // line 64
        echo "                    <div class=\"input_filter_div col-xs-12 col-sm-4 col-md-4 col-lg-2\" >
                        <label for=\"intervention-input\" class=\"filter_labels\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.intervention"), "html", null, true);
        echo ":</label>
                        <select id=\"intervention-input\" name=\"intervention\" class=\"form-control filter_inputs select_inputs chosen-select\">
                        <option value=\"\">----</option>
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 69
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </select>
                    </div>
                    ";
        // line 74
        echo "                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-2\" style=\"padding-left: 15px; padding-right: 15px; margin-bottom: 15px;\">
                        <button id=\"test_button\" class=\"btn btn-primary\" style=\"height: 36px;\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.send_notification"), "html", null, true);
        echo "</button>
                    </div>
                </div>

                ";
        // line 80
        echo "                <div class=\"row\" style=\"padding-left: 15px; padding-right: 15px;\">
                    <p><b>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.response"), "html", null, true);
        echo ":</b></p>
                    <pre id=\"test_panel\" style=\"background-color: var(--main-black); color: white;\"></pre>
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

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
    \$(document).ready(function(){

        \$(\"#appTest_li\").addClass(\"active-link\");

        \$(\".chosen-select\").chosen({ width:'100%' });

        \$(\"#test_button\").click(function(){

            if(\$(\"#operator-input\").val() == \"\" || \$(\"#intervention-input\").val() == \"\" ) {
                swal.fire({
                            title: '";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.allfields.mandatory"), "html", null, true);
        echo "',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
            } else {
                \$.ajax({
                    url:'";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_app_testing_notification");
        echo "',
                    data: {
                        'operator': \$(\"#operator-input\").val(),
                        'intervention': \$(\"#intervention-input\").val()
                    },
                    type:\"POST\",
                    success: function(data){

                        let html = JSON.stringify(data, null, 4);    // stringify with 4 spaces at each level
                        \$(\"#test_panel\").html( html );
                    },
                    error:function(err){
                        swal.fire({
                            title: '";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.modal.error"), "html", null, true);
        echo "',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            }
        });

        \$(\"#reset_button\").click(function(){

            if(\$(\"#restart_intervention_input\").val() == \"\" ) {
                swal.fire({
                    title: '";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.mandatory_field.empty"), "html", null, true);
        echo "',
                    html: '',
                    icon: 'error',
                    showConfirmButton: true
                });
            } else {
                swal.fire({
                    title: '";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.app_testing.reset_intervention.warning"), "html", null, true);
        echo "',
                    html: '',
                    icon: 'warning',
                    confirmButtonText: '";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
        echo "',
                    cancelButtonText: '";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "',
                    showConfirmButton: true,
                    showCancelButton: true
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_app_testing_reset_intervention");
        echo "',
                            data: {
                                'intervention': \$(\"#restart_intervention_input\").val()
                            },
                            type:\"POST\",
                            success: function(data){
                                swal.fire({
                                    title: '";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.modal.success"), "html", null, true);
        echo "',
                                    html: '',
                                    icon: 'success',
                                    showConfirmButton: true
                                });
                            },
                            error:function(err){
                                swal.fire({
                                    title: '";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.modal.error"), "html", null, true);
        echo "',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                    }
                });

                
            }
        });

    });
    
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/app_testing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 176,  392 => 168,  382 => 161,  373 => 155,  369 => 154,  363 => 151,  353 => 144,  336 => 130,  320 => 117,  310 => 110,  293 => 97,  283 => 96,  259 => 81,  256 => 80,  249 => 75,  246 => 74,  242 => 71,  231 => 69,  227 => 68,  221 => 65,  218 => 64,  214 => 61,  203 => 59,  199 => 58,  193 => 55,  190 => 54,  185 => 51,  181 => 49,  172 => 42,  169 => 41,  165 => 38,  154 => 36,  150 => 35,  144 => 32,  141 => 31,  136 => 28,  132 => 26,  120 => 16,  114 => 12,  104 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/backend_sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
{{parent()}}


{% endblock %}

{% block content %}

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">{{\"sidebar.test_app\"|trans}}</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        {# Panel para preparar intervención #}
        <div class=\"panel\">
            <div class=\"panel-body\">
                <h3 style=\"margin-bottom: 20px; margin-top: 0;\">{{\"backend.app_testing.prepare_intervention.title\"|trans}}</h3>
                <div class=\"row\" style=\"display: flex; align-items: flex-end; flex-wrap: wrap; margin-bottom: 20px;\">
                    {# Select Intervención #}
                    <div class=\"input_filter_div col-xs-12 col-sm-4 col-md-4 col-lg-2\" >
                        <label for=\"restart_intervention_input\" class=\"filter_labels\">{{\"general.intervention\"|trans}}:</label>
                        <select id=\"restart_intervention_input\" name=\"reset_intervention\" class=\"form-control filter_inputs select_inputs chosen-select\">
                        <option value=\"\">----</option>
                        {% for intervention in interventions %}
                            <option value=\"{{intervention.id}}\">{{intervention.id}}</option>
                        {% endfor %}
                        </select>
                    </div>
                    {# Restablecer valores intervención #}
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-2\" style=\"padding-left: 15px; padding-right: 15px; margin-bottom: 15px;\">
                        <button id=\"reset_button\" class=\"btn btn-warning\" style=\"height: 36px;\">{{\"backend.app_testing.reset_intervention\"|trans}}</button>
                    </div>
                </div>
            </div>
        </div>

        {# Panel de test de la notificación #}
        <div class=\"panel\">
            <div class=\"panel-body\">
                <h3 style=\"margin-bottom: 20px;\">{{\"backend.app_testing.test_notification.title\"|trans}}</h3>
                <div class=\"row\" style=\"display: flex; align-items: flex-end; flex-wrap: wrap; margin-bottom: 20px;\">
                    {# Select Operario #}
                    <div class=\"input_filter_div col-xs-12 col-sm-4 col-md-4 col-lg-2\" >
                        <label for=\"operator-input\" class=\"filter_labels\">{{\"general.operator\"|trans}}:</label>
                        <select id=\"operator-input\" name=\"operator\" class=\"form-control filter_inputs select_inputs chosen-select\">
                        <option value=\"\">----</option>
                        {% for operator in operators %}
                            <option value=\"{{operator.id}}\">{{operator.reference}}</option>
                        {% endfor %}
                        </select>
                    </div>
                    {# Select Intervención #}
                    <div class=\"input_filter_div col-xs-12 col-sm-4 col-md-4 col-lg-2\" >
                        <label for=\"intervention-input\" class=\"filter_labels\">{{\"general.intervention\"|trans}}:</label>
                        <select id=\"intervention-input\" name=\"intervention\" class=\"form-control filter_inputs select_inputs chosen-select\">
                        <option value=\"\">----</option>
                        {% for intervention in interventions %}
                            <option value=\"{{intervention.id}}\">{{intervention.id}}</option>
                        {% endfor %}
                        </select>
                    </div>
                    {# Enviar notificación #}
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-2\" style=\"padding-left: 15px; padding-right: 15px; margin-bottom: 15px;\">
                        <button id=\"test_button\" class=\"btn btn-primary\" style=\"height: 36px;\">{{\"general.send_notification\"|trans}}</button>
                    </div>
                </div>

                {# Respuesta de la API #}
                <div class=\"row\" style=\"padding-left: 15px; padding-right: 15px;\">
                    <p><b>{{\"general.response\"|trans}}:</b></p>
                    <pre id=\"test_panel\" style=\"background-color: var(--main-black); color: white;\"></pre>
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

        \$(\"#appTest_li\").addClass(\"active-link\");

        \$(\".chosen-select\").chosen({ width:'100%' });

        \$(\"#test_button\").click(function(){

            if(\$(\"#operator-input\").val() == \"\" || \$(\"#intervention-input\").val() == \"\" ) {
                swal.fire({
                            title: '{{ (\"general.form.allfields.mandatory\")|trans }}',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
            } else {
                \$.ajax({
                    url:'{{ path('backend_app_testing_notification') }}',
                    data: {
                        'operator': \$(\"#operator-input\").val(),
                        'intervention': \$(\"#intervention-input\").val()
                    },
                    type:\"POST\",
                    success: function(data){

                        let html = JSON.stringify(data, null, 4);    // stringify with 4 spaces at each level
                        \$(\"#test_panel\").html( html );
                    },
                    error:function(err){
                        swal.fire({
                            title: '{{ (\"general.modal.error\")|trans }}',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            }
        });

        \$(\"#reset_button\").click(function(){

            if(\$(\"#restart_intervention_input\").val() == \"\" ) {
                swal.fire({
                    title: '{{ (\"general.form.mandatory_field.empty\")|trans }}',
                    html: '',
                    icon: 'error',
                    showConfirmButton: true
                });
            } else {
                swal.fire({
                    title: '{{ (\"backend.app_testing.reset_intervention.warning\")|trans }}',
                    html: '',
                    icon: 'warning',
                    confirmButtonText: '{{\"general.accept\"|trans}}',
                    cancelButtonText: '{{\"general.cancel\"|trans}}',
                    showConfirmButton: true,
                    showCancelButton: true
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'{{ path('backend_app_testing_reset_intervention') }}',
                            data: {
                                'intervention': \$(\"#restart_intervention_input\").val()
                            },
                            type:\"POST\",
                            success: function(data){
                                swal.fire({
                                    title: '{{ (\"general.modal.success\")|trans }}',
                                    html: '',
                                    icon: 'success',
                                    showConfirmButton: true
                                });
                            },
                            error:function(err){
                                swal.fire({
                                    title: '{{ (\"general.modal.error\")|trans }}',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                    }
                });

                
            }
        });

    });
    
    </script>

{% endblock %}", "backend/app_testing.html.twig", "/var/www/rira_web/templates/backend/app_testing.html.twig");
    }
}
