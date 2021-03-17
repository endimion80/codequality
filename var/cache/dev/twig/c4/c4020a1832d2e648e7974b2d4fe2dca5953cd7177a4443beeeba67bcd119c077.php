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
class __TwigTemplate_55dd6f2872715c4136194d7f5490b9b537dbe977d4f5a94057595239715b2fa4 extends \Twig\Template
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
        // line 29
        echo "                ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 29, $this->source); })()) == "read_only")) {
            // line 30
            echo "                    <form id=\"edit_form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_details");
            echo "\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"intervention_id\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                    </form>
                    <button type=\"button\" class=\"btn top_left-buttons edit-button\"> <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        } else {
            // line 36
            echo "                    <button disabled type=\"button\" class=\"btn top_left-buttons edit-button\" style=\"font-weight: bold; color: var(--main-blue); opacity: 1; filter: var(--filter-main-blue);\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        }
        // line 38
        echo "                
                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
            </div>

            ";
        // line 42
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 42, $this->source); })()) == "edit_allowed")) {
            // line 43
            echo "            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                ";
            // line 45
            echo "                <button id=\"save-button\" type=\"button\" class=\"btn filtering-buttons\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/save.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save")), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 48
        echo "
        </div>
        ";
        // line 51
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
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.intervention_data"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"intervention_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.code"), "html", null, true);
        echo "</label>
                            ";
        // line 70
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 70, $this->source); })()) == "read_only") || true)) {
            // line 71
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 72, $this->source); })()), "code", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 74
            echo "                                <input name=\"code\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 74, $this->source); })()), "code", [], "any", false, false, false, 74), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            ";
        }
        // line 76
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.reference"), "html", null, true);
        echo "</label>
                            ";
        // line 80
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 80, $this->source); })()) == "read_only") || true)) {
            // line 81
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 81, $this->source); })()), "reference", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 83
            echo "                                <input name=\"reference\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 83, $this->source); })()), "reference", [], "any", false, false, false, 83), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            ";
        }
        // line 85
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.insurance_entity"), "html", null, true);
        echo "</label>
                            ";
        // line 89
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 89, $this->source); })()) == "read_only") || true)) {
            // line 90
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 90, $this->source); })()), "insuranceEntity", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 92
            echo "                                <select name=\"insuranceEntity\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    <option value=\"\"> ---- </option>
                                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["insuranceEntityList"]) || array_key_exists("insuranceEntityList", $context) ? $context["insuranceEntityList"] : (function () { throw new RuntimeError('Variable "insuranceEntityList" does not exist.', 94, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["insuranceEntity"]) {
                // line 95
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["insuranceEntity"], "id", [], "any", false, false, false, 95), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["insuranceEntity"], "id", [], "any", false, false, false, 95) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 95, $this->source); })()), "insuranceEntity", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95))) {
                    echo "selected";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["insuranceEntity"], "name", [], "any", false, false, false, 95), "html", null, true);
                echo " </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insuranceEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                </select>
                            ";
        }
        // line 99
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.reference_cia"), "html", null, true);
        echo "</label>
                            ";
        // line 103
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 103, $this->source); })()) == "read_only") || true)) {
            // line 104
            echo "                                <br/><p class=\"labelGrey_16\">(?)</p>
                                ";
            // line 106
            echo "                            ";
        } else {
            // line 107
            echo "                                <br/><p class=\"labelGrey_16\">(?)</p>
                                ";
            // line 109
            echo "                            ";
        }
        // line 110
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.date"), "html", null, true);
        echo "</label>
                            ";
        // line 114
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 114, $this->source); })()) == "read_only") || true)) {
            // line 115
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 115, $this->source); })()), "receptionDate", [], "any", false, false, false, 115), twig_get_attribute($this->env, $this->source, (isset($context["collaborator"]) || array_key_exists("collaborator", $context) ? $context["collaborator"] : (function () { throw new RuntimeError('Variable "collaborator" does not exist.', 115, $this->source); })()), "getFullDateFormat", [], "method", false, false, false, 115)), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 117
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 117, $this->source); })()), "receptionDate", [], "any", false, false, false, 117), twig_get_attribute($this->env, $this->source, (isset($context["collaborator"]) || array_key_exists("collaborator", $context) ? $context["collaborator"] : (function () { throw new RuntimeError('Variable "collaborator" does not exist.', 117, $this->source); })()), "getFullDateFormat", [], "method", false, false, false, 117)), "html", null, true);
            echo "</p>
                                ";
            // line 119
            echo "                            ";
        }
        // line 120
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.status"), "html", null, true);
        echo "</label>
                            ";
        // line 124
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 124, $this->source); })()) == "read_only") || true)) {
            // line 125
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 125, $this->source); })()), "interventionStatus", [], "any", false, false, false, 125), "description", [], "any", false, false, false, 125), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 127
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 127, $this->source); })()), "interventionStatus", [], "any", false, false, false, 127), "description", [], "any", false, false, false, 127), "html", null, true);
            echo "</p>
                                ";
            // line 129
            echo "                            ";
        }
        // line 130
        echo "                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.origin"), "html", null, true);
        echo "</label>
                            ";
        // line 136
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 136, $this->source); })()) == "read_only") || true)) {
            // line 137
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 137, $this->source); })()), "vhTown", [], "any", false, false, false, 137), "name", [], "any", false, false, false, 137), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 137, $this->source); })()), "vhProvince", [], "any", false, false, false, 137), "name", [], "any", false, false, false, 137), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 139
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 139, $this->source); })()), "vhTown", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 139, $this->source); })()), "vhProvince", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
            echo "</p>
                                ";
            // line 141
            echo "                            ";
        }
        // line 142
        echo "                        </div>
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.destination"), "html", null, true);
        echo "</label>
                            ";
        // line 145
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 145, $this->source); })()) == "read_only") || true)) {
            // line 146
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 146, $this->source); })()), "destinationTown", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 146, $this->source); })()), "destinationProvince", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 148
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 148, $this->source); })()), "destinationTown", [], "any", false, false, false, 148), "name", [], "any", false, false, false, 148), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 148, $this->source); })()), "destinationProvince", [], "any", false, false, false, 148), "name", [], "any", false, false, false, 148), "html", null, true);
            echo "</p>
                                ";
            // line 150
            echo "                            ";
        }
        // line 151
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.whats_happend"), "html", null, true);
        echo "</label>
                            ";
        // line 155
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 155, $this->source); })()) == "read_only") || true)) {
            // line 156
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 156, $this->source); })()), "vhComments", [], "any", false, false, false, 156), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 158
            echo "                                <textarea name=\"vhComments\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"255\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 158, $this->source); })()), "vhComments", [], "any", false, false, false, 158), "html", null, true);
            echo "</textarea>
                            ";
        }
        // line 160
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.where_is"), "html", null, true);
        echo "</label>
                            ";
        // line 164
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 164, $this->source); })()) == "read_only") || true)) {
            // line 165
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 165, $this->source); })()), "vhUbication", [], "any", false, false, false, 165), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 165, $this->source); })()), "vhSituation", [], "any", false, false, false, 165), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 167
            echo "                                <input name=\"vhUbication\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 167, $this->source); })()), "vhUbication", [], "any", false, false, false, 167), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\"><br>
                                <input name=\"vhSituation\" value=\"";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 168, $this->source); })()), "vhSituation", [], "any", false, false, false, 168), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\">
                            ";
        }
        // line 170
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.sinister"), "html", null, true);
        echo "</label>
                            ";
        // line 174
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 174, $this->source); })()) == "read_only") || true)) {
            // line 175
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 175, $this->source); })()), "sinisterType", [], "any", false, false, false, 175), "description", [], "any", false, false, false, 175), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 177
            echo "
                                <select name=\"sinisterType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sinisterTypeList"]) || array_key_exists("sinisterTypeList", $context) ? $context["sinisterTypeList"] : (function () { throw new RuntimeError('Variable "sinisterTypeList" does not exist.', 179, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sinisterType"]) {
                // line 180
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sinisterType"], "id", [], "any", false, false, false, 180), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["sinisterType"], "id", [], "any", false, false, false, 180) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 180, $this->source); })()), "sinisterType", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180))) {
                    echo "selected";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sinisterType"], "description", [], "any", false, false, false, 180), "html", null, true);
                echo " </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sinisterType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                                </select>
                            ";
        }
        // line 184
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.failure_type"), "html", null, true);
        echo "</label>
                            ";
        // line 188
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 188, $this->source); })()) == "read_only") || true)) {
            // line 189
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 189, $this->source); })()), "failureType", [], "any", false, false, false, 189), "description", [], "any", false, false, false, 189), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 191
            echo "
                                <select id='failureType' name=\"failureType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["failureTypeList"]) || array_key_exists("failureTypeList", $context) ? $context["failureTypeList"] : (function () { throw new RuntimeError('Variable "failureTypeList" does not exist.', 193, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["failureType"]) {
                // line 194
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureType"], "id", [], "any", false, false, false, 194), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["failureType"], "id", [], "any", false, false, false, 194) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 194, $this->source); })()), "failureType", [], "any", false, false, false, 194), "id", [], "any", false, false, false, 194))) {
                    echo "selected";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureType"], "description", [], "any", false, false, false, 194), "html", null, true);
                echo " </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failureType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                                </select>
                            ";
        }
        // line 198
        echo "                        </div>
                    </div>



                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.failure_cause_type"), "html", null, true);
        echo "</label>
                            ";
        // line 206
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 206, $this->source); })()) == "read_only") || true)) {
            // line 207
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 207, $this->source); })()), "failureCauseType", [], "any", false, false, false, 207), "description", [], "any", false, false, false, 207), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 209
            echo "
                                <select id=\"failureCauseType\" name=\"failureCauseType\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["failureCauseTypeList"]) || array_key_exists("failureCauseTypeList", $context) ? $context["failureCauseTypeList"] : (function () { throw new RuntimeError('Variable "failureCauseTypeList" does not exist.', 211, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["failureCauseType"]) {
                // line 212
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "getFailureTypeId", [], "method", false, false, false, 212), "getId", [], "method", false, false, false, 212) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 212, $this->source); })()), "failureType", [], "any", false, false, false, 212), "id", [], "any", false, false, false, 212))) {
                    // line 213
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "id", [], "any", false, false, false, 213), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "id", [], "any", false, false, false, 213) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 213, $this->source); })()), "failureCauseType", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213))) {
                        echo "selected";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "description", [], "any", false, false, false, 213), "html", null, true);
                    echo " </option>
                                        ";
                }
                // line 215
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failureCauseType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                                </select>
                            ";
        }
        // line 218
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.ris_cause"), "html", null, true);
        echo "</label>
                            ";
        // line 222
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 222, $this->source); })()) == "read_only") || true)) {
            // line 223
            echo "                                <br/><p class=\"labelGrey_16\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 223, $this->source); })()), "risCause", [], "any", false, false, false, 223), "description", [], "any", false, false, false, 223), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 225
            echo "
                                <select id=\"RISCause\" name=\"RISCause\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RISCauseList"]) || array_key_exists("RISCauseList", $context) ? $context["RISCauseList"] : (function () { throw new RuntimeError('Variable "RISCauseList" does not exist.', 227, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["RISCause"]) {
                // line 228
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RISCause"], "getFailureCauseTypeId", [], "method", false, false, false, 228), "getId", [], "method", false, false, false, 228) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 228, $this->source); })()), "failureCauseType", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228))) {
                    // line 229
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["RISCause"], "id", [], "any", false, false, false, 229), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["RISCause"], "id", [], "any", false, false, false, 229) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 229, $this->source); })()), "RISCause", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229))) {
                        echo "selected";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["RISCause"], "description", [], "any", false, false, false, 229), "html", null, true);
                    echo " </option>
                                        ";
                }
                // line 231
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RISCause'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "                                </select>
                            ";
        }
        // line 234
        echo "                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.caller_name"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 238, $this->source); })()), "callerName", [], "any", false, false, false, 238), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.signer_dni"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 243, $this->source); })()), "signerDni", [], "any", false, false, false, 243), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.caller_phone"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 248, $this->source); })()), "callerPhone", [], "any", false, false, false, 248), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.service"), "html", null, true);
        echo "</label>
                            <img style='position: relative; top: -1px; left: 5px;' 
                                    src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/info@2x.png"), "html", null, true);
        echo "\"
                                    width=\"17px\" class=\" add-tooltip\" data-placement=\"bottom\" data-toggle=\"tooltip\" data-original-title=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.service_tooltip"), "html", null, true);
        echo "\">                                   
                            <br/><p class=\"labelGrey_16\">";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 256, $this->source); })()), "getCollaboratorService", [], "method", false, false, false, 256), "description", [], "method", false, false, false, 256), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.plate"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 263, $this->source); })()), "vhPlate", [], "any", false, false, false, 263), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.brand"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 268, $this->source); })()), "vhBrand", [], "any", false, false, false, 268), "name", [], "any", false, false, false, 268), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.model"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 273, $this->source); })()), "vhModel", [], "any", false, false, false, 273), "name", [], "any", false, false, false, 273), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.description"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 278, $this->source); })()), "vhComments", [], "any", false, false, false, 278), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.is_ris"), "html", null, true);
        echo "</label>
                            <br/>
                            <input id='isRIS' class=\"check\" type=\"checkbox\" ";
        // line 286
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 286, $this->source); })()), "isRIS", [], "any", false, false, false, 286)) {
            echo " checked ";
        }
        echo ">
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.riscause_operator"), "html", null, true);
        echo "</label>
                            <br/><p class=\"labelGrey_16\">
                                ";
        // line 292
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 292, $this->source); })()), "getRisCauseOperator", [], "method", false, false, false, 292)) {
            // line 293
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 293, $this->source); })()), "getRisCauseOperator", [], "method", false, false, false, 293), "description", [], "any", false, false, false, 293), "html", null, true);
            echo "
                                ";
        }
        // line 295
        echo "                            </p>
                        </div>

                        <div class=\"col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\">";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.is_failure"), "html", null, true);
        echo "</label>
                            <br/>
                            <input id='hasDestinationFailure' class=\"check\" type=\"checkbox\" ";
        // line 301
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 301, $this->source); })()), "hasDestinationFailure", [], "any", false, false, false, 301)) {
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
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.budget_asitur"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"budget_asitur_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    Por definir
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
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.budget_crane"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"budget_crane_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    Por definir
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

    // line 351
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 352
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    \$(document).ready(function(){
        \$(\".chosen\").chosen({ width:'180px !important' });

        ";
        // line 358
        echo "        \$(\".edit-button\").click(function() {
            \$(\"#edit_form\").submit();
        });

        ";
        // line 363
        echo "        \$(\".export-button\").click(function() {
            swal.fire({
                title: 'Por definir',
                html: \"\",
                icon: 'info',
                showConfirmButton: true
            });
        });
        ";
        // line 372
        echo "
        ";
        // line 374
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
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_intervention.null"), "html", null, true);
        echo "\");
        failureCauseTypeList.push(newOption);
        
        ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["failureCauseTypeList"]) || array_key_exists("failureCauseTypeList", $context) ? $context["failureCauseTypeList"] : (function () { throw new RuntimeError('Variable "failureCauseTypeList" does not exist.', 406, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["failureCauseType"]) {
            // line 407
            echo "            var newOption = \$('<option>');
            newOption.val('";
            // line 408
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "id", [], "any", false, false, false, 408), "html", null, true);
            echo "');
            newOption.data('failuretypeid','";
            // line 409
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "getFailureTypeId", [], "method", false, false, false, 409), "getId", [], "method", false, false, false, 409), "html", null, true);
            echo "');
            newOption.html('";
            // line 410
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failureCauseType"], "description", [], "any", false, false, false, 410), "html", null, true);
            echo "');
            failureCauseTypeList.push(newOption);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failureCauseType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
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
        return array (  998 => 413,  989 => 410,  985 => 409,  981 => 408,  978 => 407,  974 => 406,  968 => 403,  937 => 374,  934 => 372,  924 => 363,  918 => 358,  909 => 352,  899 => 351,  873 => 334,  852 => 316,  832 => 301,  827 => 299,  821 => 295,  815 => 293,  813 => 292,  808 => 290,  799 => 286,  794 => 284,  785 => 278,  781 => 277,  774 => 273,  770 => 272,  763 => 268,  759 => 267,  752 => 263,  748 => 262,  739 => 256,  735 => 255,  731 => 254,  726 => 252,  719 => 248,  715 => 247,  708 => 243,  704 => 242,  697 => 238,  693 => 237,  688 => 234,  684 => 232,  678 => 231,  666 => 229,  663 => 228,  659 => 227,  655 => 225,  649 => 223,  647 => 222,  643 => 221,  638 => 218,  634 => 216,  628 => 215,  616 => 213,  613 => 212,  609 => 211,  605 => 209,  599 => 207,  597 => 206,  593 => 205,  584 => 198,  580 => 196,  565 => 194,  561 => 193,  557 => 191,  551 => 189,  549 => 188,  545 => 187,  540 => 184,  536 => 182,  521 => 180,  517 => 179,  513 => 177,  507 => 175,  505 => 174,  501 => 173,  496 => 170,  491 => 168,  486 => 167,  478 => 165,  476 => 164,  472 => 163,  467 => 160,  461 => 158,  455 => 156,  453 => 155,  449 => 154,  444 => 151,  441 => 150,  434 => 148,  426 => 146,  424 => 145,  420 => 144,  416 => 142,  413 => 141,  406 => 139,  398 => 137,  396 => 136,  392 => 135,  385 => 130,  382 => 129,  377 => 127,  371 => 125,  369 => 124,  365 => 123,  360 => 120,  357 => 119,  352 => 117,  346 => 115,  344 => 114,  340 => 113,  335 => 110,  332 => 109,  329 => 107,  326 => 106,  323 => 104,  321 => 103,  317 => 102,  312 => 99,  308 => 97,  293 => 95,  289 => 94,  285 => 92,  279 => 90,  277 => 89,  273 => 88,  268 => 85,  262 => 83,  256 => 81,  254 => 80,  250 => 79,  245 => 76,  239 => 74,  234 => 72,  231 => 71,  229 => 70,  225 => 69,  214 => 61,  202 => 51,  198 => 48,  189 => 45,  186 => 43,  184 => 42,  176 => 39,  173 => 38,  165 => 36,  158 => 34,  152 => 31,  147 => 30,  144 => 29,  136 => 25,  132 => 23,  120 => 12,  110 => 11,  98 => 8,  94 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

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
                    
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
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

                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
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
                                <br/><p class=\"labelGrey_16\">{{ intervention.destinationTown.name}}<br>{{ intervention.destinationProvince.name}}</p>
                            {% else %}
                                <br/><p class=\"labelGrey_16\">{{ intervention.destinationTown.name}}<br>{{ intervention.destinationProvince.name}}</p>
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



                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
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
                                <br/><p class=\"labelGrey_16\">{{ intervention.risCause.description}}</p>
                            {% else %}

                                <select id=\"RISCause\" name=\"RISCause\" class=\"select_inputs detailSelect data_input chosen\" tabindex=\"-1\">
                                    {% for RISCause in RISCauseList %}
                                        {% if RISCause.getFailureCauseTypeId().getId() == intervention.failureCauseType.id %}
                                            <option value=\"{{ RISCause.id}}\" {% if RISCause.id == intervention.RISCause.id %}selected{% endif %}> {{ RISCause.description }} </option>
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

                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
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

                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
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
                    Por definir
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
                    Por definir
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


    });//ready


    </script>

{% endblock %}", "frontend/collaborator/detailIntervention.html.twig", "/var/www/rira_web/templates/frontend/collaborator/detailIntervention.html.twig");
    }
}
