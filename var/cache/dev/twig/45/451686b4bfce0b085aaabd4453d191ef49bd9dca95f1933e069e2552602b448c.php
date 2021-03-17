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

/* frontend/collaborator/detailIntervention.html.twig */
class __TwigTemplate_f736ebd381f3a0a2b5256a310fe8d449ed9c9b7e08e604970d739d60b4c1d865 extends \Twig\Template
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
        return "includes/sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailIntervention.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailIntervention.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/detailIntervention.html.twig", 1);
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

        echo "Asitur - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 3, $this->source); })()), "reference", [], "any", false, false, false, 3), "html", null, true);
        
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
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-data_management.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-asitur_datatable.css"), "html", null, true);
        echo "\">
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        ";
        // line 23
        echo "        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                <a class=\"go_back_link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_list");
        echo "\"><i class=\"fa fa-2x fa-chevron-left\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.go_back_to_list"), "html", null, true);
        echo "</a>
                
                ";
        // line 28
        echo "                ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 28, $this->source); })()) == "read_only")) {
            // line 29
            echo "                    <form id=\"edit_form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_details");
            echo "\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"intervention_id\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                    </form>
                    <button type=\"button\" class=\"btn top_left-buttons edit-button\"> <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        } else {
            // line 35
            echo "                    <button disabled type=\"button\" class=\"btn top_left-buttons edit-button\" style=\"font-weight: bold; color: var(--main-blue); opacity: 1; filter: var(--filter-main-blue);\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        }
        // line 37
        echo "                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn top_left-buttons delivery-note-button\"> <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/eye.png"), "html", null, true);
        echo "\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.btn.deliveryNote")), "html", null, true);
        echo "</button>
            </div>

            ";
        // line 41
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 41, $this->source); })()) == "edit_allowed")) {
            // line 42
            echo "            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                ";
            // line 44
            echo "                <button id=\"save-button\" type=\"button\" class=\"btn filtering-buttons\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/save.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save")), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 47
        echo "
        </div>
        ";
        // line 50
        echo "        
        <hr id=\"datatable_hr\" class=\"datatable_hr\" style=\"margin-bottom: 20px;\">

        <!--Panel Datos de sucursal-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#intervention_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.intervention_data"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"intervention_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    
                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.code"), "html", null, true);
        echo "</label>
                            ";
        // line 69
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 69, $this->source); })()) == "read_only") || true)) {
            // line 70
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 71, $this->source); })()), "code", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 73
            echo "                                <input name=\"code\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 73, $this->source); })()), "code", [], "any", false, false, false, 73), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            ";
        }
        // line 75
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.reference"), "html", null, true);
        echo "</label>
                            ";
        // line 79
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 79, $this->source); })()) == "read_only") || true)) {
            // line 80
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 80, $this->source); })()), "reference", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 82
            echo "                                <input name=\"reference\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 82, $this->source); })()), "reference", [], "any", false, false, false, 82), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            ";
        }
        // line 84
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.insurance_entity"), "html", null, true);
        echo "</label>
                            ";
        // line 88
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 88, $this->source); })()) == "read_only") || true)) {
            // line 89
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 89, $this->source); })()), "insuranceEntity", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 91
            echo "                                <select name=\"insuranceEntity\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    <option value=\"\"> ---- </option>
                                    ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["insuranceEntityList"]) || array_key_exists("insuranceEntityList", $context) ? $context["insuranceEntityList"] : (function () { throw new RuntimeError('Variable "insuranceEntityList" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["insuranceEntity"]) {
                // line 94
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["insuranceEntity"], "id", [], "any", false, false, false, 94), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["insuranceEntity"], "id", [], "any", false, false, false, 94) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 94, $this->source); })()), "insuranceEntity", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94))) {
                    echo "selected";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["insuranceEntity"], "name", [], "any", false, false, false, 94), "html", null, true);
                echo " </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insuranceEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                </select>
                            ";
        }
        // line 98
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.reference_cia"), "html", null, true);
        echo "</label>
                            ";
        // line 102
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 102, $this->source); })()) == "read_only") || true)) {
            // line 103
            echo "                                <br/><p class=\"labelGrey_16\">(?)</p>
                                ";
            // line 105
            echo "                            ";
        } else {
            // line 106
            echo "                                <br/><p class=\"labelGrey_16\">(?)</p>
                                ";
            // line 108
            echo "                            ";
        }
        // line 109
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.date"), "html", null, true);
        echo "</label>
                            ";
        // line 113
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 113, $this->source); })()) == "read_only") || true)) {
            // line 114
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 114, $this->source); })()), "receptionDate", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, (isset($context["collaborator"]) || array_key_exists("collaborator", $context) ? $context["collaborator"] : (function () { throw new RuntimeError('Variable "collaborator" does not exist.', 114, $this->source); })()), "getFullDateFormat", [], "method", false, false, false, 114)), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 116
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 116, $this->source); })()), "receptionDate", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, (isset($context["collaborator"]) || array_key_exists("collaborator", $context) ? $context["collaborator"] : (function () { throw new RuntimeError('Variable "collaborator" does not exist.', 116, $this->source); })()), "getFullDateFormat", [], "method", false, false, false, 116)), "html", null, true);
            echo "</p>
                                ";
            // line 118
            echo "                            ";
        }
        // line 119
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.status"), "html", null, true);
        echo "</label>
                            ";
        // line 123
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 123, $this->source); })()) == "read_only") || true)) {
            // line 124
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 124, $this->source); })()), "interventionStatus", [], "any", false, false, false, 124), "description", [], "any", false, false, false, 124), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 126
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 126, $this->source); })()), "interventionStatus", [], "any", false, false, false, 126), "description", [], "any", false, false, false, 126), "html", null, true);
            echo "</p>
                                ";
            // line 128
            echo "                            ";
        }
        // line 129
        echo "                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.origin"), "html", null, true);
        echo "</label>
                            ";
        // line 135
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 135, $this->source); })()) == "read_only") || true)) {
            // line 136
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 136, $this->source); })()), "vhTown", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 136, $this->source); })()), "vhProvince", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 138
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 138, $this->source); })()), "vhTown", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 138, $this->source); })()), "vhProvince", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true);
            echo "</p>
                                ";
            // line 140
            echo "                            ";
        }
        // line 141
        echo "                        </div>
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.destination"), "html", null, true);
        echo "</label>
                            ";
        // line 144
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 144, $this->source); })()) == "read_only") || true)) {
            // line 145
            echo "                                <br/><p class=\"labelGrey_16\">";
            if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 145, $this->source); })()), "destinationTown", [], "any", false, false, false, 145)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 145, $this->source); })()), "destinationTown", [], "any", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
            }
            echo "<br>";
            if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 145, $this->source); })()), "destinationProvince", [], "any", false, false, false, 145)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 145, $this->source); })()), "destinationProvince", [], "any", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
            }
            echo "</p>
                            ";
        } else {
            // line 147
            echo "                                <br/><p class=\"labelGrey_16\">";
            if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 147, $this->source); })()), "destinationTown", [], "any", false, false, false, 147)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 147, $this->source); })()), "destinationTown", [], "any", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
            }
            echo "<br>";
            if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 147, $this->source); })()), "destinationProvince", [], "any", false, false, false, 147)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 147, $this->source); })()), "destinationProvince", [], "any", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
            }
            echo "</p>
                                ";
            // line 149
            echo "                            ";
        }
        // line 150
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.whats_happend"), "html", null, true);
        echo "</label>
                            ";
        // line 154
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 154, $this->source); })()) == "read_only") || true)) {
            // line 155
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 155, $this->source); })()), "vhComments", [], "any", false, false, false, 155), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 157
            echo "                                <textarea name=\"vhComments\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"255\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 157, $this->source); })()), "vhComments", [], "any", false, false, false, 157), "html", null, true);
            echo "</textarea>
                            ";
        }
        // line 159
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.where_is"), "html", null, true);
        echo "</label>
                            ";
        // line 163
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 163, $this->source); })()) == "read_only") || true)) {
            // line 164
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 164, $this->source); })()), "vhUbication", [], "any", false, false, false, 164), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 164, $this->source); })()), "vhSituation", [], "any", false, false, false, 164), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 166
            echo "                                <input name=\"vhUbication\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 166, $this->source); })()), "vhUbication", [], "any", false, false, false, 166), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\"><br>
                                <input name=\"vhSituation\" value=\"";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 167, $this->source); })()), "vhSituation", [], "any", false, false, false, 167), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\">
                            ";
        }
        // line 169
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.sinister"), "html", null, true);
        echo "</label>
                            ";
        // line 173
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 173, $this->source); })()) == "read_only") || true)) {
            // line 174
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 174, $this->source); })()), "sinisterType", [], "any", false, false, false, 174), "description", [], "any", false, false, false, 174), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 176
            echo "
                                <select name=\"sinisterType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sinisterTypeList"]) || array_key_exists("sinisterTypeList", $context) ? $context["sinisterTypeList"] : (function () { throw new RuntimeError('Variable "sinisterTypeList" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sinisterType"]) {
                // line 179
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sinisterType"], "id", [], "any", false, false, false, 179), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["sinisterType"], "id", [], "any", false, false, false, 179) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 179, $this->source); })()), "sinisterType", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179))) {
                    echo "selected";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sinisterType"], "description", [], "any", false, false, false, 179), "html", null, true);
                echo " </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sinisterType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                                </select>
                            ";
        }
        // line 183
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.failure_type"), "html", null, true);
        echo "</label>
                            ";
        // line 187
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 187, $this->source); })()) == "read_only") || true)) {
            // line 188
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 188, $this->source); })()), "failureType", [], "any", false, false, false, 188), "description", [], "any", false, false, false, 188), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 190
            echo "
                                <select id='failureType' name=\"failureType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["failureTypeList"]) || array_key_exists("failureTypeList", $context) ? $context["failureTypeList"] : (function () { throw new RuntimeError('Variable "failureTypeList" does not exist.', 192, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["failureType"]) {
                // line 193
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureType"], "id", [], "any", false, false, false, 193), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["failureType"], "id", [], "any", false, false, false, 193) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 193, $this->source); })()), "failureType", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193))) {
                    echo "selected";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureType"], "description", [], "any", false, false, false, 193), "html", null, true);
                echo " </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failureType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                                </select>
                            ";
        }
        // line 197
        echo "                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.failure_cause_type"), "html", null, true);
        echo "</label>
                            ";
        // line 203
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 203, $this->source); })()) == "read_only") || true)) {
            // line 204
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 204, $this->source); })()), "failureCauseType", [], "any", false, false, false, 204), "description", [], "any", false, false, false, 204), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 206
            echo "
                                <select id=\"failureCauseType\" name=\"failureCauseType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["failureCauseTypeList"]) || array_key_exists("failureCauseTypeList", $context) ? $context["failureCauseTypeList"] : (function () { throw new RuntimeError('Variable "failureCauseTypeList" does not exist.', 208, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["failureCauseType"]) {
                // line 209
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "getFailureTypeId", [], "method", false, false, false, 209), "getId", [], "method", false, false, false, 209) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 209, $this->source); })()), "failureType", [], "any", false, false, false, 209), "id", [], "any", false, false, false, 209))) {
                    // line 210
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "id", [], "any", false, false, false, 210), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "id", [], "any", false, false, false, 210) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 210, $this->source); })()), "failureCauseType", [], "any", false, false, false, 210), "id", [], "any", false, false, false, 210))) {
                        echo "selected";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "description", [], "any", false, false, false, 210), "html", null, true);
                    echo " </option>
                                        ";
                }
                // line 212
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failureCauseType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                                </select>
                            ";
        }
        // line 215
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.ris_cause"), "html", null, true);
        echo "</label>
                            ";
        // line 219
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 219, $this->source); })()) == "read_only") || true)) {
            // line 220
            echo "                                <br/><p class=\"labelGrey_16\">";
            if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 220, $this->source); })()), "risCause", [], "any", false, false, false, 220)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 220, $this->source); })()), "risCause", [], "any", false, false, false, 220), "description", [], "any", false, false, false, 220), "html", null, true);
            }
            echo "</p>
                            ";
        } else {
            // line 222
            echo "
                                <select id=\"RISCause\" name=\"RISCause\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RISCauseList"]) || array_key_exists("RISCauseList", $context) ? $context["RISCauseList"] : (function () { throw new RuntimeError('Variable "RISCauseList" does not exist.', 224, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["RISCause"]) {
                // line 225
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RISCause"], "getFailureCauseTypeId", [], "method", false, false, false, 225), "getId", [], "method", false, false, false, 225) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 225, $this->source); })()), "failureCauseType", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225))) {
                    // line 226
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["RISCause"], "id", [], "any", false, false, false, 226), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 226, $this->source); })()), "risCause", [], "any", false, false, false, 226) && (twig_get_attribute($this->env, $this->source, $context["RISCause"], "id", [], "any", false, false, false, 226) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 226, $this->source); })()), "RISCause", [], "any", false, false, false, 226), "id", [], "any", false, false, false, 226)))) {
                        echo "selected";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["RISCause"], "description", [], "any", false, false, false, 226), "html", null, true);
                    echo " </option>
                                        ";
                }
                // line 228
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RISCause'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                                </select>
                            ";
        }
        // line 231
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.caller_name"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 235, $this->source); })()), "callerName", [], "any", false, false, false, 235), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.signer_dni"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 240, $this->source); })()), "signerDni", [], "any", false, false, false, 240), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.caller_phone"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 245, $this->source); })()), "callerPhone", [], "any", false, false, false, 245), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.service"), "html", null, true);
        echo "</label>
                            <img style='position: relative; top: -1px; left: 5px;' 
                                    src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/info@2x.png"), "html", null, true);
        echo "\"
                                    width=\"17px\" class=\" add-tooltip\" data-placement=\"bottom\" data-toggle=\"tooltip\" data-original-title=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.service_tooltip"), "html", null, true);
        echo "\">                                   
                            <br/><p class=\"labelGrey_16\">";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 253, $this->source); })()), "getCollaboratorService", [], "method", false, false, false, 253), "description", [], "method", false, false, false, 253), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.plate"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 260, $this->source); })()), "vhPlate", [], "any", false, false, false, 260), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.brand"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 265, $this->source); })()), "vhBrand", [], "any", false, false, false, 265), "name", [], "any", false, false, false, 265), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.model"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 270, $this->source); })()), "vhModel", [], "any", false, false, false, 270), "name", [], "any", false, false, false, 270), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.description"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 275, $this->source); })()), "vhComments", [], "any", false, false, false, 275), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.is_ris"), "html", null, true);
        echo "</label>
                            <br/>
                            <input id='isRIS' class=\"check\" type=\"checkbox\" ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 283, $this->source); })()), "isRIS", [], "any", false, false, false, 283)) {
            echo " checked ";
        }
        echo ">
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.riscause_operator"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">
                                ";
        // line 289
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 289, $this->source); })()), "getRisCauseOperator", [], "method", false, false, false, 289)) {
            // line 290
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 290, $this->source); })()), "getRisCauseOperator", [], "method", false, false, false, 290), "description", [], "any", false, false, false, 290), "html", null, true);
            echo "
                                ";
        }
        // line 292
        echo "                            </p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.is_failure"), "html", null, true);
        echo "</label>
                            <br/>
                            <input id='hasDestinationFailure' class=\"check\" type=\"checkbox\" ";
        // line 298
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 298, $this->source); })()), "hasDestinationFailure", [], "any", false, false, false, 298)) {
            echo " checked ";
        }
        echo ">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Panel Presupuesto Asitur-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#budget_asitur_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.budget_asitur"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"budget_asitur_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    

                    <style>

                    .asiturTable{
                        width: 100%;
                    }
                    .asiturTable th {
                        border: 0 !important;
                        color: var(--main-grey);
                        padding: 13px 18px !important;
                        vertical-align: middle !important;
                        text-transform: uppercase;
                    }

                    .asiturTable td {
                        color: var(--main-grey);
                        padding: 13px 18px !important;
                        vertical-align: middle !important;
                        border-top: 1px solid lightgrey;
                        border-bottom: 1px solid lightgrey;
                    }

                    </style>

                    <table class='asiturTable'>
                        <thead>
                            <tr>
                                <th>";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.service"), "html", null, true);
        echo "</th>
                                <th>";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.activity"), "html", null, true);
        echo "</th>
                                <th>";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.night"), "html", null, true);
        echo "</th>
                                <th>";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.holliday"), "html", null, true);
        echo "</th>
                                <th>";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.cant"), "html", null, true);
        echo "</th>
                                <th>";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.amount"), "html", null, true);
        echo "</th>
                                <th>";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.tax"), "html", null, true);
        echo "</th>
                                <th>";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.total"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asiturBudget"]) || array_key_exists("asiturBudget", $context) ? $context["asiturBudget"] : (function () { throw new RuntimeError('Variable "asiturBudget" does not exist.', 357, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
            // line 358
            echo "                                <tr>
                                    <td>";
            // line 359
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["budget"], "collaboratorService", [], "any", false, false, false, 359), "description", [], "any", false, false, false, 359), "html", null, true);
            echo "</td>
                                    <td>";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "activity", [], "any", false, false, false, 360), "html", null, true);
            echo "</td>
                                    <td>";
            // line 361
            if (twig_get_attribute($this->env, $this->source, $context["budget"], "night", [], "any", false, false, false, 361)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 362
            if (twig_get_attribute($this->env, $this->source, $context["budget"], "holliday", [], "any", false, false, false, 362)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "units", [], "any", false, false, false, 363), "html", null, true);
            echo "</td>
                                    <td>";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "amount", [], "any", false, false, false, 364), "html", null, true);
            echo "</td>
                                    <td>";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "tax", [], "any", false, false, false, 365), "html", null, true);
            echo "</td>
                                    <td>";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "total", [], "any", false, false, false, 366), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['budget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!--Panel Presupuesto Asitur-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#budget_crane_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.budget_crane"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"budget_crane_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <table class='asiturTable'>
                        <thead>
                            <tr>
                                <th>";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.service"), "html", null, true);
        echo "</th>
                                <th>";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.activity"), "html", null, true);
        echo "</th>
                                <th>";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.night"), "html", null, true);
        echo "</th>
                                <th>";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.holliday"), "html", null, true);
        echo "</th>
                                <th>";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.cant"), "html", null, true);
        echo "</th>
                                <th>";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.amount"), "html", null, true);
        echo "</th>
                                <th>";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.tax"), "html", null, true);
        echo "</th>
                                <th>";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.budget.total"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaboratorBudget"]) || array_key_exists("collaboratorBudget", $context) ? $context["collaboratorBudget"] : (function () { throw new RuntimeError('Variable "collaboratorBudget" does not exist.', 402, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
            // line 403
            echo "                                <tr>
                                    <td>";
            // line 404
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["budget"], "collaboratorService", [], "any", false, false, false, 404), "description", [], "any", false, false, false, 404), "html", null, true);
            echo "</td>
                                    <td>";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "activity", [], "any", false, false, false, 405), "html", null, true);
            echo "</td>
                                    <td>";
            // line 406
            if (twig_get_attribute($this->env, $this->source, $context["budget"], "night", [], "any", false, false, false, 406)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 407
            if (twig_get_attribute($this->env, $this->source, $context["budget"], "holliday", [], "any", false, false, false, 407)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 408
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "units", [], "any", false, false, false, 408), "html", null, true);
            echo "</td>
                                    <td>";
            // line 409
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "amount", [], "any", false, false, false, 409), "html", null, true);
            echo "</td>
                                    <td>";
            // line 410
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "tax", [], "any", false, false, false, 410), "html", null, true);
            echo "</td>
                                    <td>";
            // line 411
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "total", [], "any", false, false, false, 411), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['budget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "                        </tbody>
                    </table>
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

    // line 427
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 428
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    \$(document).ready(function(){
        \$(\".chosen\").chosen({ width:'180px !important' });

        ";
        // line 434
        echo "        \$(\".edit-button\").click(function() {
            swal.fire({
                title: 'Por definir',
                html: \"\",
                icon: 'info',
                showConfirmButton: true
            });
            \$(\"#edit_form\").submit();
        });

        ";
        // line 445
        echo "        \$(\".export-button\").click(function() {
            swal.fire({
                title: 'Por definir',
                html: \"\",
                icon: 'info',
                showConfirmButton: true
            });
        });
        ";
        // line 454
        echo "
        ";
        // line 456
        echo "        \$(\"#save-button\").click(function() {
            swal.fire({
                title: 'Por definir',
                html: \"\",
                icon: 'info',
                showConfirmButton: true
            });
        });

        var elem = document.querySelector('#isRIS');
        var init = new Switchery(elem, {disabled: true, 
                                    disabledOpacity: 1,
                                    color: \"var(--main-blue)\",
                                    secondaryColor: '#cdd3db'
                                });

        var elem = document.querySelector('#hasDestinationFailure');
        var init = new Switchery(elem, {disabled: true, 
                                    disabledOpacity: 1,
                                    color: \"var(--main-blue)\",
                                    secondaryColor: '#cdd3db'
                                });

        // actualización de los chosen
        /*
        var failureCauseTypeList = [];
        var newOption = \$('<option>');
        newOption.val('');
        newOption.data('failuretypeid','');
        newOption.html(\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.null"), "html", null, true);
        echo "\");
        failureCauseTypeList.push(newOption);
        
        ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["failureCauseTypeList"]) || array_key_exists("failureCauseTypeList", $context) ? $context["failureCauseTypeList"] : (function () { throw new RuntimeError('Variable "failureCauseTypeList" does not exist.', 488, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["failureCauseType"]) {
            // line 489
            echo "            var newOption = \$('<option>');
            newOption.val('";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "id", [], "any", false, false, false, 490), "html", null, true);
            echo "');
            newOption.data('failuretypeid','";
            // line 491
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "getFailureTypeId", [], "method", false, false, false, 491), "getId", [], "method", false, false, false, 491), "html", null, true);
            echo "');
            newOption.html('";
            // line 492
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "description", [], "any", false, false, false, 492), "html", null, true);
            echo "');
            failureCauseTypeList.push(newOption);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failureCauseType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "
        \$('#failureType').change(function(){
            // 1 vaciamos el selector
            \$('#failureCauseType').empty();
            
            // 2 - rellenamos
            for(var i = 1 ; i < failureCauseTypeList.length; i++){
                if (\$(this).val() == failureCauseTypeList[i].data('failuretypeid')){
                    \$('#failureCauseType').append(failureCauseTypeList[i].clone());
                }
            }

            if (\$('#failureCauseType').html() == ''){
                \$('#failureCauseType').append(failureCauseTypeList[0].clone());
            }

            // 3 - Actualizamos el chosen
            \$('#failureCauseType').trigger(\"chosen:updated\");
        });
        */
        
        \$('.delivery-note-button').click(function(){
            \$.ajax({
                url:'";
        // line 518
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_delivery_note");
        echo "',
                data: {
                    'interventionList': [";
        // line 520
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 520, $this->source); })()), "id", [], "any", false, false, false, 520), "html", null, true);
        echo "],
                    'smartPreview': true
                },
                type:\"POST\",
                success: function(data){
                    if (!data.status){
                        swal.fire({
                            title: '";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                            html: data.message,
                            icon: 'error',
                            showConfirmButton: true
                        });    
                    }else{
                        if(data.data.isZip == 'false'){
                            var fileName = data.data.fileName;
                            var filePath = data.data.filePath;
                            var formTmp = document.createElement('form');
                            
                            if (data.data.type == 'visualize')
                                \$(formTmp).attr('action',\"";
        // line 539
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visualize_file");
        echo "\");
                            else if (data.data.type == 'download')
                                \$(formTmp).attr('action',\"";
        // line 541
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
                            swal.fire({
                                title: '";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.success"), "html", null, true);
        echo "',
                                html: '',
                                icon: 'success',
                                showConfirmButton: true
                            });         
                        }
                        else{
                            var zip = new JSZip();
                            var baseUrlDownload = \"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_file_get", ["fileName" => "XXXXX", "filePath" => "YYYYY"]), "html", null, true);
        echo "\";

                            function urlToPromise(url) {
                                return new Promise(function(resolve, reject) {
                                    JSZipUtils.getBinaryContent(url, function (err, data) {
                                        if(err) {
                                            reject(err);
                                            swal.fire({
                                                title: '";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                                                html: '',
                                                icon: 'error',
                                                showConfirmButton: true
                                            });                                                       
                                        } else {
                                            resolve(data);
                                        }
                                    });
                                });
                            }
                            
                            for(var i = 0; i < data.data.files.length; i++){
                                var finalUrl = baseUrlDownload.replace(\"XXXXX\", data.data.files[i].fileName);
                                finalUrl = finalUrl.replace(\"YYYYY\", data.data.files[i].filePath);
                                //console.log(finalUrl);
                                zip.file(data.data.files[i].fileName, urlToPromise(finalUrl), {binary:true});
                            }

                            // when everything has been downloaded, we can trigger the dl
                            zip.generateAsync({type:\"blob\"}, function updateCallback(metadata) {
                                //\$(\".sweet-alert\").find('p').html(metadata.percent.toFixed(2) + \" %\");
                                if(metadata.percent.toFixed(2) == 100){
                                    
                                    swal.fire({
                                        title: '";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.success"), "html", null, true);
        echo "',
                                        html: '',
                                        icon: 'success',
                                        showConfirmButton: true
                                    });          
                                }
                            })
                            .then(function callback(blob) {
                                saveAs(blob, \"Albaranes.zip\"); // see FileSaver.js
                            });
                        }
                    }
                },
                error:function(err){
                    swal.fire({
                        title: '";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
        });        

    });//ready


    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/detailIntervention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1370 => 609,  1352 => 594,  1324 => 569,  1313 => 561,  1302 => 553,  1287 => 541,  1282 => 539,  1267 => 527,  1257 => 520,  1252 => 518,  1227 => 495,  1218 => 492,  1214 => 491,  1210 => 490,  1207 => 489,  1203 => 488,  1197 => 485,  1166 => 456,  1163 => 454,  1153 => 445,  1141 => 434,  1132 => 428,  1122 => 427,  1101 => 414,  1092 => 411,  1088 => 410,  1084 => 409,  1080 => 408,  1072 => 407,  1064 => 406,  1060 => 405,  1056 => 404,  1053 => 403,  1049 => 402,  1042 => 398,  1038 => 397,  1034 => 396,  1030 => 395,  1026 => 394,  1022 => 393,  1018 => 392,  1014 => 391,  1003 => 383,  987 => 369,  978 => 366,  974 => 365,  970 => 364,  966 => 363,  958 => 362,  950 => 361,  946 => 360,  942 => 359,  939 => 358,  935 => 357,  928 => 353,  924 => 352,  920 => 351,  916 => 350,  912 => 349,  908 => 348,  904 => 347,  900 => 346,  864 => 313,  844 => 298,  839 => 296,  833 => 292,  827 => 290,  825 => 289,  820 => 287,  811 => 283,  806 => 281,  797 => 275,  793 => 274,  786 => 270,  782 => 269,  775 => 265,  771 => 264,  764 => 260,  760 => 259,  751 => 253,  747 => 252,  743 => 251,  738 => 249,  731 => 245,  727 => 244,  720 => 240,  716 => 239,  709 => 235,  705 => 234,  700 => 231,  696 => 229,  690 => 228,  678 => 226,  675 => 225,  671 => 224,  667 => 222,  659 => 220,  657 => 219,  653 => 218,  648 => 215,  644 => 213,  638 => 212,  626 => 210,  623 => 209,  619 => 208,  615 => 206,  609 => 204,  607 => 203,  603 => 202,  596 => 197,  592 => 195,  577 => 193,  573 => 192,  569 => 190,  563 => 188,  561 => 187,  557 => 186,  552 => 183,  548 => 181,  533 => 179,  529 => 178,  525 => 176,  519 => 174,  517 => 173,  513 => 172,  508 => 169,  503 => 167,  498 => 166,  490 => 164,  488 => 163,  484 => 162,  479 => 159,  473 => 157,  467 => 155,  465 => 154,  461 => 153,  456 => 150,  453 => 149,  442 => 147,  430 => 145,  428 => 144,  424 => 143,  420 => 141,  417 => 140,  410 => 138,  402 => 136,  400 => 135,  396 => 134,  389 => 129,  386 => 128,  381 => 126,  375 => 124,  373 => 123,  369 => 122,  364 => 119,  361 => 118,  356 => 116,  350 => 114,  348 => 113,  344 => 112,  339 => 109,  336 => 108,  333 => 106,  330 => 105,  327 => 103,  325 => 102,  321 => 101,  316 => 98,  312 => 96,  297 => 94,  293 => 93,  289 => 91,  283 => 89,  281 => 88,  277 => 87,  272 => 84,  266 => 82,  260 => 80,  258 => 79,  254 => 78,  249 => 75,  243 => 73,  238 => 71,  235 => 70,  233 => 69,  229 => 68,  218 => 60,  206 => 50,  202 => 47,  193 => 44,  190 => 42,  188 => 41,  180 => 38,  173 => 37,  165 => 35,  158 => 33,  152 => 30,  147 => 29,  144 => 28,  137 => 25,  133 => 23,  121 => 12,  111 => 11,  99 => 8,  95 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/sidebar.html.twig' %}

{% block title %}Asitur - {{ intervention.reference }}{% endblock %}

{% block stylesheets %}
{{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-data_management.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-asitur_datatable.css') }}\">
{% endblock %}

{% block content %}

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        {# Bloque de botones de la parte superior de la tabla #}
        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                <a class=\"go_back_link\" href=\"{{ path('intervention_list') }}\"><i class=\"fa fa-2x fa-chevron-left\"></i>{{\"general.go_back_to_list\"|trans}}</a>
                
                {# Editar #}
                {% if mode == \"read_only\" %}
                    <form id=\"edit_form\" action=\"{{ path('intervention_details') }}\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"intervention_id\" value=\"{{ intervention.id }}\">
                        <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                    </form>
                    <button type=\"button\" class=\"btn top_left-buttons edit-button\"> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {% else %}
                    <button disabled type=\"button\" class=\"btn top_left-buttons edit-button\" style=\"font-weight: bold; color: var(--main-blue); opacity: 1; filter: var(--filter-main-blue);\"> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {% endif %}
                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
                <button type=\"button\" class=\"btn top_left-buttons delivery-note-button\"> <img src=\"{{asset(\"media/datatables/eye.png\")}}\" height=\"18px\"> &nbsp; {{('datatable.btn.deliveryNote')|trans|upper}}</button>
            </div>

            {% if mode == \"edit_allowed\" %}
            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                {# Guardar #}
                <button id=\"save-button\" type=\"button\" class=\"btn filtering-buttons\"> <img src=\"{{asset(\"media/save.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('general.save')|trans|upper}}</button>
            </div>
            {% endif %}

        </div>
        {# ################################################## #}
        
        <hr id=\"datatable_hr\" class=\"datatable_hr\" style=\"margin-bottom: 20px;\">

        <!--Panel Datos de sucursal-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#intervention_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_intervention.intervention_data'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"intervention_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    
                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.code\"|trans}}</label>
                            {% if mode == \"read_only\" or TRUE %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ intervention.code }}</p>
                            {% else %}
                                <input name=\"code\" value=\"{{ intervention.code }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.reference\"|trans}}</label>
                            {% if mode == \"read_only\" or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.reference }}</p>
                            {% else %}
                                <input name=\"reference\" value=\"{{ intervention.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.insurance_entity\"|trans}}</label>
                            {% if mode == \"read_only\" or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.insuranceEntity.name }}</p>
                            {% else %}
                                <select name=\"insuranceEntity\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    <option value=\"\"> ---- </option>
                                    {% for insuranceEntity in insuranceEntityList %}
                                        <option value=\"{{ insuranceEntity.id}}\" {% if insuranceEntity.id == intervention.insuranceEntity.id %}selected{% endif %}> {{ insuranceEntity.name }} </option>
                                    {% endfor %}
                                </select>
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.reference_cia\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">(?)</p>
                                {#<br/><p class=\"labelGrey_16\">{{ intervention.reference }}</p>#}
                            {% else %}
                                <br/><p class=\"labelGrey_16\">(?)</p>
                                {#<input name=\"reference\" value=\"{{ intervention.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">#}
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.date\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.receptionDate|date(collaborator.getFullDateFormat()) }}</p>
                            {% else %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.receptionDate|date(collaborator.getFullDateFormat()) }}</p>
                                {#<input name=\"reference\" value=\"{{ intervention.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">#}
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.status\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.interventionStatus.description }}</p>
                            {% else %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.interventionStatus.description }}</p>
                                {#<input name=\"reference\" value=\"{{ intervention.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">#}
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.origin\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.vhTown.name}}<br>{{ intervention.vhProvince.name}}</p>
                            {% else %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.vhTown.name}}<br>{{ intervention.vhProvince.name}}</p>
                                {#<input name=\"reference\" value=\"{{ intervention.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">#}
                            {% endif %}
                        </div>
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.destination\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{% if intervention.destinationTown %}{{ intervention.destinationTown.name}}{% endif %}<br>{% if intervention.destinationProvince %}{{ intervention.destinationProvince.name}}{% endif %}</p>
                            {% else %}
                                <br/><p class=\"labelGrey_16\">{% if intervention.destinationTown %}{{ intervention.destinationTown.name}}{% endif %}<br>{% if intervention.destinationProvince %}{{ intervention.destinationProvince.name}}{% endif %}</p>
                                {#<input name=\"reference\" value=\"{{ intervention.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">#}
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.whats_happend\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.vhComments}}</p>
                            {% else %}
                                <textarea name=\"vhComments\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"255\">{{ intervention.vhComments }}</textarea>
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.where_is\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.vhUbication}}<br>{{ intervention.vhSituation}}</p>
                            {% else %}
                                <input name=\"vhUbication\" value=\"{{ intervention.vhUbication }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\"><br>
                                <input name=\"vhSituation\" value=\"{{ intervention.vhSituation }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\">
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.sinister\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.sinisterType.description}}</p>
                            {% else %}

                                <select name=\"sinisterType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    {% for sinisterType in sinisterTypeList %}
                                        <option value=\"{{ sinisterType.id}}\" {% if sinisterType.id == intervention.sinisterType.id %}selected{% endif %}> {{ sinisterType.description }} </option>
                                    {% endfor %}
                                </select>
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.failure_type\"|trans}}</label>
                            {% if mode == \"read_only\"  or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.failureType.description}}</p>
                            {% else %}

                                <select id='failureType' name=\"failureType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    {% for failureType in failureTypeList %}
                                        <option value=\"{{ failureType.id}}\" {% if failureType.id == intervention.failureType.id %}selected{% endif %}> {{ failureType.description }} </option>
                                    {% endfor %}
                                </select>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.failure_cause_type\"|trans}}</label>
                            {% if mode == \"read_only\" or TRUE %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.failureCauseType.description}}</p>
                            {% else %}

                                <select id=\"failureCauseType\" name=\"failureCauseType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    {% for failureCauseType in failureCauseTypeList %}
                                        {% if failureCauseType.getFailureTypeId().getId() == intervention.failureType.id %}
                                            <option value=\"{{ failureCauseType.id}}\" {% if failureCauseType.id == intervention.failureCauseType.id %}selected{% endif %}> {{ failureCauseType.description }} </option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.ris_cause\"|trans}}</label>
                            {% if mode == \"read_only\" or TRUE %}
                                <br/><p class=\"labelGrey_16\">{% if intervention.risCause %}{{ intervention.risCause.description}}{% endif %}</p>
                            {% else %}

                                <select id=\"RISCause\" name=\"RISCause\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    {% for RISCause in RISCauseList %}
                                        {% if RISCause.getFailureCauseTypeId().getId() == intervention.failureCauseType.id %}
                                            <option value=\"{{ RISCause.id}}\" {% if intervention.risCause and RISCause.id == intervention.RISCause.id %}selected{% endif %}> {{ RISCause.description }} </option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            {% endif %}
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.caller_name\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">{{ intervention.callerName}}</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.signer_dni\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">{{ intervention.signerDni}}</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.caller_phone\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">{{ intervention.callerPhone}}</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.service\"|trans}}</label>
                            <img style='position: relative; top: -1px; left: 5px;' 
                                    src=\"{{asset(\"media/info@2x.png\")}}\"
                                    width=\"17px\" class=\" add-tooltip\" data-placement=\"bottom\" data-toggle=\"tooltip\" data-original-title=\"{{\"detail_intervention.service_tooltip\"|trans}}\">                                   
                            <br/><p class=\"labelGrey_16\">{{ intervention.getCollaboratorService().description() }}</p>
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.plate\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">{{ intervention.vhPlate}}</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.brand\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">{{ intervention.vhBrand.name}}</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.model\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">{{ intervention.vhModel.name}}</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.description\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">{{ intervention.vhComments}}</p>
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0px 0px 10px 0px; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.is_ris\"|trans}}</label>
                            <br/>
                            <input id='isRIS' class=\"check\" type=\"checkbox\" {% if intervention.isRIS %} checked {% endif %}>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.riscause_operator\"|trans}}</label>
                            <br/><p class=\"labelGrey_16\">
                                {% if intervention.getRisCauseOperator() %}
                                    {{ intervention.getRisCauseOperator().description}}
                                {% endif %}
                            </p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">{{\"detail_intervention.is_failure\"|trans}}</label>
                            <br/>
                            <input id='hasDestinationFailure' class=\"check\" type=\"checkbox\" {% if intervention.hasDestinationFailure %} checked {% endif %}>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Panel Presupuesto Asitur-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#budget_asitur_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_intervention.budget_asitur'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"budget_asitur_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    

                    <style>

                    .asiturTable{
                        width: 100%;
                    }
                    .asiturTable th {
                        border: 0 !important;
                        color: var(--main-grey);
                        padding: 13px 18px !important;
                        vertical-align: middle !important;
                        text-transform: uppercase;
                    }

                    .asiturTable td {
                        color: var(--main-grey);
                        padding: 13px 18px !important;
                        vertical-align: middle !important;
                        border-top: 1px solid lightgrey;
                        border-bottom: 1px solid lightgrey;
                    }

                    </style>

                    <table class='asiturTable'>
                        <thead>
                            <tr>
                                <th>{{\"intervention.budget.service\"|trans}}</th>
                                <th>{{\"intervention.budget.activity\"|trans}}</th>
                                <th>{{\"intervention.budget.night\"|trans}}</th>
                                <th>{{\"intervention.budget.holliday\"|trans}}</th>
                                <th>{{\"intervention.budget.cant\"|trans}}</th>
                                <th>{{\"intervention.budget.amount\"|trans}}</th>
                                <th>{{\"intervention.budget.tax\"|trans}}</th>
                                <th>{{\"intervention.budget.total\"|trans}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for budget in asiturBudget %}
                                <tr>
                                    <td>{{ budget.collaboratorService.description }}</td>
                                    <td>{{ budget.activity }}</td>
                                    <td>{% if budget.night %}{{'general.yes'|trans}}{% else %}{{'general.no'|trans}}{% endif %}</td>
                                    <td>{% if budget.holliday %}{{'general.yes'|trans}}{% else %}{{'general.no'|trans}}{% endif %}</td>
                                    <td>{{ budget.units }}</td>
                                    <td>{{ budget.amount }}</td>
                                    <td>{{ budget.tax }}</td>
                                    <td>{{ budget.total }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!--Panel Presupuesto Asitur-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#budget_crane_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_intervention.budget_crane'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"budget_crane_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <table class='asiturTable'>
                        <thead>
                            <tr>
                                <th>{{\"intervention.budget.service\"|trans}}</th>
                                <th>{{\"intervention.budget.activity\"|trans}}</th>
                                <th>{{\"intervention.budget.night\"|trans}}</th>
                                <th>{{\"intervention.budget.holliday\"|trans}}</th>
                                <th>{{\"intervention.budget.cant\"|trans}}</th>
                                <th>{{\"intervention.budget.amount\"|trans}}</th>
                                <th>{{\"intervention.budget.tax\"|trans}}</th>
                                <th>{{\"intervention.budget.total\"|trans}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for budget in collaboratorBudget %}
                                <tr>
                                    <td>{{ budget.collaboratorService.description }}</td>
                                    <td>{{ budget.activity }}</td>
                                    <td>{% if budget.night %}{{'general.yes'|trans}}{% else %}{{'general.no'|trans}}{% endif %}</td>
                                    <td>{% if budget.holliday %}{{'general.yes'|trans}}{% else %}{{'general.no'|trans}}{% endif %}</td>
                                    <td>{{ budget.units }}</td>
                                    <td>{{ budget.amount }}</td>
                                    <td>{{ budget.tax }}</td>
                                    <td>{{ budget.total }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
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
        \$(\".chosen\").chosen({ width:'180px !important' });

        {#* Botón Editar #}
        \$(\".edit-button\").click(function() {
            swal.fire({
                title: 'Por definir',
                html: \"\",
                icon: 'info',
                showConfirmButton: true
            });
            \$(\"#edit_form\").submit();
        });

        {#* Exportación de una sucursal #}
        \$(\".export-button\").click(function() {
            swal.fire({
                title: 'Por definir',
                html: \"\",
                icon: 'info',
                showConfirmButton: true
            });
        });
        {#* ########################### #}

        {#* Botón guardar #}
        \$(\"#save-button\").click(function() {
            swal.fire({
                title: 'Por definir',
                html: \"\",
                icon: 'info',
                showConfirmButton: true
            });
        });

        var elem = document.querySelector('#isRIS');
        var init = new Switchery(elem, {disabled: true, 
                                    disabledOpacity: 1,
                                    color: \"var(--main-blue)\",
                                    secondaryColor: '#cdd3db'
                                });

        var elem = document.querySelector('#hasDestinationFailure');
        var init = new Switchery(elem, {disabled: true, 
                                    disabledOpacity: 1,
                                    color: \"var(--main-blue)\",
                                    secondaryColor: '#cdd3db'
                                });

        // actualización de los chosen
        /*
        var failureCauseTypeList = [];
        var newOption = \$('<option>');
        newOption.val('');
        newOption.data('failuretypeid','');
        newOption.html(\"{{'detail_intervention.null'|trans}}\");
        failureCauseTypeList.push(newOption);
        
        {% for failureCauseType in failureCauseTypeList %}
            var newOption = \$('<option>');
            newOption.val('{{ failureCauseType.id}}');
            newOption.data('failuretypeid','{{ failureCauseType.getFailureTypeId().getId()}}');
            newOption.html('{{ failureCauseType.description}}');
            failureCauseTypeList.push(newOption);
        {% endfor %}

        \$('#failureType').change(function(){
            // 1 vaciamos el selector
            \$('#failureCauseType').empty();
            
            // 2 - rellenamos
            for(var i = 1 ; i < failureCauseTypeList.length; i++){
                if (\$(this).val() == failureCauseTypeList[i].data('failuretypeid')){
                    \$('#failureCauseType').append(failureCauseTypeList[i].clone());
                }
            }

            if (\$('#failureCauseType').html() == ''){
                \$('#failureCauseType').append(failureCauseTypeList[0].clone());
            }

            // 3 - Actualizamos el chosen
            \$('#failureCauseType').trigger(\"chosen:updated\");
        });
        */
        
        \$('.delivery-note-button').click(function(){
            \$.ajax({
                url:'{{ path('download_delivery_note') }}',
                data: {
                    'interventionList': [{{intervention.id}}],
                    'smartPreview': true
                },
                type:\"POST\",
                success: function(data){
                    if (!data.status){
                        swal.fire({
                            title: '{{ (\"general.export.error\")|trans }}',
                            html: data.message,
                            icon: 'error',
                            showConfirmButton: true
                        });    
                    }else{
                        if(data.data.isZip == 'false'){
                            var fileName = data.data.fileName;
                            var filePath = data.data.filePath;
                            var formTmp = document.createElement('form');
                            
                            if (data.data.type == 'visualize')
                                \$(formTmp).attr('action',\"{{ path('visualize_file') }}\");
                            else if (data.data.type == 'download')
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
                            swal.fire({
                                title: '{{ (\"general.export.success\")|trans }}',
                                html: '',
                                icon: 'success',
                                showConfirmButton: true
                            });         
                        }
                        else{
                            var zip = new JSZip();
                            var baseUrlDownload = \"{{ path('download_file_get',{ 'fileName': 'XXXXX' ,'filePath': 'YYYYY' }) }}\";

                            function urlToPromise(url) {
                                return new Promise(function(resolve, reject) {
                                    JSZipUtils.getBinaryContent(url, function (err, data) {
                                        if(err) {
                                            reject(err);
                                            swal.fire({
                                                title: '{{ (\"general.export.error\")|trans }}',
                                                html: '',
                                                icon: 'error',
                                                showConfirmButton: true
                                            });                                                       
                                        } else {
                                            resolve(data);
                                        }
                                    });
                                });
                            }
                            
                            for(var i = 0; i < data.data.files.length; i++){
                                var finalUrl = baseUrlDownload.replace(\"XXXXX\", data.data.files[i].fileName);
                                finalUrl = finalUrl.replace(\"YYYYY\", data.data.files[i].filePath);
                                //console.log(finalUrl);
                                zip.file(data.data.files[i].fileName, urlToPromise(finalUrl), {binary:true});
                            }

                            // when everything has been downloaded, we can trigger the dl
                            zip.generateAsync({type:\"blob\"}, function updateCallback(metadata) {
                                //\$(\".sweet-alert\").find('p').html(metadata.percent.toFixed(2) + \" %\");
                                if(metadata.percent.toFixed(2) == 100){
                                    
                                    swal.fire({
                                        title: '{{ (\"general.export.success\")|trans }}',
                                        html: '',
                                        icon: 'success',
                                        showConfirmButton: true
                                    });          
                                }
                            })
                            .then(function callback(blob) {
                                saveAs(blob, \"Albaranes.zip\"); // see FileSaver.js
                            });
                        }
                    }
                },
                error:function(err){
                    swal.fire({
                        title: '{{ (\"general.export.error\")|trans }}',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
        });        

    });//ready


    </script>

{% endblock %}", "frontend/collaborator/detailIntervention.html.twig", "/var/www/rira_web/templates/frontend/collaborator/detailIntervention.html.twig");
    }
}
