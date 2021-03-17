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

/* frontend/collaborator/detailCrane.html.twig */
class __TwigTemplate_166cefb00aa70072a11cc880f1e14208a047709efb02dae9e68bbdb0f6cd6115 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailCrane.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailCrane.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/detailCrane.html.twig", 1);
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

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.branch_offices"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.cranes"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.operators"), "html", null, true);
        echo "</a>
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        ";
        // line 38
        echo "        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                ";
        // line 41
        echo "                <a class=\"go_back_link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes");
        echo "\"><i class=\"fa fa-2x fa-chevron-left\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.go_back_to_list"), "html", null, true);
        echo "</a>
                ";
        // line 43
        echo "                ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 43, $this->source); })()) == "read_only")) {
            // line 44
            echo "                    <form id=\"edit_form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_crane");
            echo "\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"craneId\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                    </form>
                    <button type=\"button\" class=\"btn top_left-buttons edit-button\"> <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        } else {
            // line 50
            echo "                    <button disabled type=\"button\" class=\"btn top_left-buttons edit-button\" style=\"font-weight: bold; color: var(--main-blue); opacity: 1; filter: var(--filter-main-blue);\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        }
        // line 52
        echo "                ";
        // line 53
        echo "                <button type=\"button\" class=\"btn top_left-buttons remove-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/basura-icono.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.remove"), "html", null, true);
        echo "</button>
                ";
        // line 55
        echo "                <button type=\"button\" class=\"btn top_left-buttons rates-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/euro.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.rates"), "html", null, true);
        echo "</button>
                ";
        // line 57
        echo "                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 59
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 59, $this->source); })()) == "edit_allowed")) {
            // line 60
            echo "            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                ";
            // line 62
            echo "                <button id=\"save-button\" type=\"button\" class=\"btn filtering-buttons\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/save.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save")), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 65
        echo "        </div>
        ";
        // line 67
        echo "
        <hr id=\"datatable_hr\" class=\"datatable_hr\" style=\"margin-bottom: 20px;\">

        <!--Panel Datos de grúa-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"crane_data_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#crane_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.crane_data"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"crane_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        ";
        // line 84
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"plate-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.plate"), "html", null, true);
        echo "</label>
                            ";
        // line 86
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 86, $this->source); })()) == "read_only")) {
            // line 87
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 88, $this->source); })()), "plate", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 90
            echo "                                <input id=\"plate-input\" name=\"c_plate\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 90, $this->source); })()), "plate", [], "any", false, false, false, 90), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            ";
        }
        // line 92
        echo "                        </div>
                        ";
        // line 94
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"reference-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.reference"), "html", null, true);
        echo "</label>
                            ";
        // line 96
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 96, $this->source); })()) == "read_only")) {
            // line 97
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 98, $this->source); })()), "reference", [], "any", false, false, false, 98), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 100
            echo "                                <input id=\"reference-input\" name=\"c_reference\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 100, $this->source); })()), "reference", [], "any", false, false, false, 100), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\">
                            ";
        }
        // line 102
        echo "                        </div>
                        ";
        // line 104
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"brand-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.brand"), "html", null, true);
        echo "</label>
                            ";
        // line 106
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 106, $this->source); })()) == "read_only")) {
            // line 107
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 108, $this->source); })()), "brand", [], "any", false, false, false, 108), "description", [], "any", false, false, false, 108), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 110
            echo "                                <div style=\"display: block;\">
                                    <select id=\"brand-chosen-select\" name=\"c_brand\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 113, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 114
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 114), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "description", [], "any", false, false, false, 114), "html", null, true);
                echo " </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                                    </select>
                                </div>
                            ";
        }
        // line 119
        echo "                        </div>
                        ";
        // line 121
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"model-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.model"), "html", null, true);
        echo "</label>
                            ";
        // line 123
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 123, $this->source); })()) == "read_only")) {
            // line 124
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 125, $this->source); })()), "model", [], "any", false, false, false, 125), "description", [], "any", false, false, false, 125), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 127
            echo "                                <div style=\"display: block;\">
                                    <select disabled id=\"model-chosen-select\" name=\"c_model\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                    </select>
                                </div>
                            ";
        }
        // line 133
        echo "                        </div>
                        ";
        // line 135
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"managementType-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.managementType"), "html", null, true);
        echo "</label>
                            ";
        // line 137
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 137, $this->source); })()) == "read_only")) {
            // line 138
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 139, $this->source); })()), "managementType", [], "any", false, false, false, 139), "description", [], "any", false, false, false, 139), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 141
            echo "                                <div style=\"display: block;\">
                                    <select id=\"managementType-chosen-select\" name=\"c_managementType\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["craneManagementTypes"]) || array_key_exists("craneManagementTypes", $context) ? $context["craneManagementTypes"] : (function () { throw new RuntimeError('Variable "craneManagementTypes" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["craneManagementType"]) {
                // line 145
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneManagementType"], "id", [], "any", false, false, false, 145), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneManagementType"], "description", [], "any", false, false, false, 145), "html", null, true);
                echo " </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneManagementType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                                    </select>
                                </div>
                            ";
        }
        // line 150
        echo "                        </div>
                        ";
        // line 152
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"status-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.status"), "html", null, true);
        echo "</label>
                            <br/>
                            ";
        // line 155
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 155, $this->source); })()) == "read_only")) {
            // line 156
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 156, $this->source); })()), "craneStatus", [], "any", false, false, false, 156), "id", [], "any", false, false, false, 156) == 1)) {
                // line 157
                echo "                                    <div title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.active"), "html", null, true);
                echo "\">
                                        <span style=\"margin-right: 5px; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                        <input class=\"check_status switchery\" type=\"checkbox\" checked>
                                        <span style=\"margin-left: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">ON</span>
                                    </div>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 162
(isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 162, $this->source); })()), "craneStatus", [], "any", false, false, false, 162), "id", [], "any", false, false, false, 162) == 2)) {
                // line 163
                echo "                                    <div title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.damaged"), "html", null, true);
                echo "\">
                                        <span style=\"margin-right: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                        <input class=\"check_status switchery\" type=\"checkbox\">
                                        <span style=\"margin-left: 5px; vertical-align: middle; color: var(--main-grey);\">ON</span>
                                    </div>
                                ";
            } else {
                // line 169
                echo "                                    <div title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.retired"), "html", null, true);
                echo "\">
                                        <span style=\"margin-right: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                        <input class=\"check_status switchery\" type=\"checkbox\">
                                        <span style=\"margin-left: 5px; vertical-align: middle; color: var(--main-grey);\">ON</span>
                                    </div>
                                ";
            }
            // line 175
            echo "                            ";
        } else {
            // line 176
            echo "                                <div style=\"display: block;\">
                                    <select id=\"craneStatus-chosen-select\" name=\"c_craneStatus\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["craneStatusList"]) || array_key_exists("craneStatusList", $context) ? $context["craneStatusList"] : (function () { throw new RuntimeError('Variable "craneStatusList" does not exist.', 179, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["craneStatus"]) {
                // line 180
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneStatus"], "id", [], "any", false, false, false, 180), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneStatus"], "description", [], "any", false, false, false, 180), "html", null, true);
                echo " </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneStatus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                                    </select>
                                </div>
                            ";
        }
        // line 185
        echo "                        </div>
                    </div>
                    <div class=\"row\" style=\"margin: 0; margin-top: 42px; font-size: 16px;\">
                        ";
        // line 189
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"label-chosen-select\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.label"), "html", null, true);
        echo "</label>
                            ";
        // line 191
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 191, $this->source); })()) == "read_only")) {
            // line 192
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 193, $this->source); })()), "labeledType", [], "any", false, false, false, 193), "description", [], "any", false, false, false, 193), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 195
            echo "                                <div style=\"display: block;\">
                                    <select id=\"label-chosen-select\" name=\"c_label\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 198, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 199
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 199), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "description", [], "any", false, false, false, 199), "html", null, true);
                echo " </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                                    </select>
                                </div>
                            ";
        }
        // line 204
        echo "                        </div>
                        ";
        // line 206
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"label-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.availabilityStatus"), "html", null, true);
        echo "</label>
                            ";
        // line 208
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 208, $this->source); })()) == "read_only")) {
            // line 209
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 210, $this->source); })()), "labeledType", [], "any", false, false, false, 210), "description", [], "any", false, false, false, 210), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 212
            echo "                                <div style=\"display: block;\">
                                    <select id=\"availabilityStatus-chosen-select\" name=\"c_availabilityStatus\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["craneAvailabilityStatusList"]) || array_key_exists("craneAvailabilityStatusList", $context) ? $context["craneAvailabilityStatusList"] : (function () { throw new RuntimeError('Variable "craneAvailabilityStatusList" does not exist.', 215, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["craneAvailabilityStatus"]) {
                // line 216
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneAvailabilityStatus"], "id", [], "any", false, false, false, 216), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneAvailabilityStatus"], "description", [], "any", false, false, false, 216), "html", null, true);
                echo " </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneAvailabilityStatus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                                    </select>
                                </div>
                            ";
        }
        // line 221
        echo "                        </div>
                        ";
        // line 223
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"craneType-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.craneType"), "html", null, true);
        echo "</label>
                            ";
        // line 225
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 225, $this->source); })()) == "read_only")) {
            // line 226
            echo "                                <br/>
                                <p class=\"labelGrey_16\">";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 227, $this->source); })()), "craneType", [], "any", false, false, false, 227), "description", [], "any", false, false, false, 227), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 229
            echo "                                <div style=\"display: block;\">
                                    <select id=\"type-chosen-select\" name=\"c_type\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["craneTypes"]) || array_key_exists("craneTypes", $context) ? $context["craneTypes"] : (function () { throw new RuntimeError('Variable "craneTypes" does not exist.', 232, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["craneType"]) {
                // line 233
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "id", [], "any", false, false, false, 233), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "description", [], "any", false, false, false, 233), "html", null, true);
                echo " </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                                    </select>
                                </div>
                            ";
        }
        // line 238
        echo "                        </div>
                        ";
        // line 240
        echo "                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"preferentialServices-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px; display: block;\">";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.preferentialServices"), "html", null, true);
        echo "</label>
                            ";
        // line 242
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 242, $this->source); })()) == "read_only")) {
            // line 243
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["preferentialServices"]) || array_key_exists("preferentialServices", $context) ? $context["preferentialServices"] : (function () { throw new RuntimeError('Variable "preferentialServices" does not exist.', 243, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pService"]) {
                // line 244
                echo "                                    <p class=\"labelGrey_16\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pService"], "description", [], "any", false, false, false, 244), "html", null, true);
                echo "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pService'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                            ";
        } else {
            // line 247
            echo "                                <div id=\"prefServicesToAppend\">
                                    ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["preferentialServices"]) || array_key_exists("preferentialServices", $context) ? $context["preferentialServices"] : (function () { throw new RuntimeError('Variable "preferentialServices" does not exist.', 248, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pService"]) {
                // line 249
                echo "                                        <div class=\"pService\" style=\"margin-bottom: 17px; display: flex;\">
                                            <div id=\"";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pService"], "id", [], "any", false, false, false, 250), "html", null, true);
                echo "\" class=\"form-control asitur_input_to_delete\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pService"], "description", [], "any", false, false, false, 250), "html", null, true);
                echo "</div>
                                            <div style=\"height: 35px; border-bottom: 1px solid lightgrey\">
                                                <img class=\"asitur_input_to_delete-img pref_service_to_delete\" data-id=\"";
                // line 252
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pService"], "id", [], "any", false, false, false, 252), "html", null, true);
                echo "\" src='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
                echo "' width=\"24px\" height=\"24px\">
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pService'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                                    <div style=\"display: block;\">
                                        <select id=\"new_prefService-chosen-select\" class=\"select_inputs\" tabindex=\"-1\"></select>
                                    </div>
                                </div>
                            ";
        }
        // line 261
        echo "                        </div>
                        ";
        // line 263
        echo "                        <div class=\"col-sm-6 col-md-6 col-lg-4\" style=\"margin-bottom: 20px;\">
                            <label for=\"availableServices-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px; display: block;\">";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.label.availableServices"), "html", null, true);
        echo "</label>
                            ";
        // line 265
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 265, $this->source); })()) == "read_only")) {
            // line 266
            echo "                                ";
            if ((twig_length_filter($this->env, (isset($context["availableServices"]) || array_key_exists("availableServices", $context) ? $context["availableServices"] : (function () { throw new RuntimeError('Variable "availableServices" does not exist.', 266, $this->source); })())) > 3)) {
                // line 267
                echo "                                    ";
                $context["availableServiceslength"] = ((twig_length_filter($this->env, (isset($context["availableServices"]) || array_key_exists("availableServices", $context) ? $context["availableServices"] : (function () { throw new RuntimeError('Variable "availableServices" does not exist.', 267, $this->source); })())) / 2) + 1);
                // line 268
                echo "                                ";
            } else {
                // line 269
                echo "                                    ";
                $context["availableServiceslength"] = (twig_length_filter($this->env, (isset($context["availableServices"]) || array_key_exists("availableServices", $context) ? $context["availableServices"] : (function () { throw new RuntimeError('Variable "availableServices" does not exist.', 269, $this->source); })())) + 1);
                // line 270
                echo "                                ";
            }
            // line 271
            echo "                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 20px;\">
                                    ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["availableServices"]) || array_key_exists("availableServices", $context) ? $context["availableServices"] : (function () { throw new RuntimeError('Variable "availableServices" does not exist.', 272, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aService"]) {
                // line 273
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 273) < (isset($context["availableServiceslength"]) || array_key_exists("availableServiceslength", $context) ? $context["availableServiceslength"] : (function () { throw new RuntimeError('Variable "availableServiceslength" does not exist.', 273, $this->source); })()))) {
                    // line 274
                    echo "                                            <p class=\"labelGrey_16\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aService"], "description", [], "any", false, false, false, 274), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 276
                echo "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aService'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "                                </div>
                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 20px;\">
                                    ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["availableServices"]) || array_key_exists("availableServices", $context) ? $context["availableServices"] : (function () { throw new RuntimeError('Variable "availableServices" does not exist.', 279, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aService"]) {
                // line 280
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 280) >= (isset($context["availableServiceslength"]) || array_key_exists("availableServiceslength", $context) ? $context["availableServiceslength"] : (function () { throw new RuntimeError('Variable "availableServiceslength" does not exist.', 280, $this->source); })()))) {
                    // line 281
                    echo "                                            <p class=\"labelGrey_16\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aService"], "description", [], "any", false, false, false, 281), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 283
                echo "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aService'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "                                </div>
                            ";
        } else {
            // line 286
            echo "                                <div id=\"avServicesToAppend\">
                                    ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["availableServices"]) || array_key_exists("availableServices", $context) ? $context["availableServices"] : (function () { throw new RuntimeError('Variable "availableServices" does not exist.', 287, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["aService"]) {
                // line 288
                echo "                                        <div class=\"aService col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 17px; display: flex;\">
                                            <div id=\"";
                // line 289
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aService"], "id", [], "any", false, false, false, 289), "html", null, true);
                echo "\" class=\"form-control asitur_input_to_delete\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aService"], "description", [], "any", false, false, false, 289), "html", null, true);
                echo "</div>
                                            <div style=\"height: 35px; border-bottom: 1px solid lightgrey\">
                                                <img class=\"asitur_input_to_delete-img av_service_to_delete\" data-id=\"";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aService"], "id", [], "any", false, false, false, 291), "html", null, true);
                echo "\" src='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
                echo "' width=\"24px\" height=\"24px\">
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aService'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <select id=\"new_avService-chosen-select\" class=\"select_inputs\" tabindex=\"-1\"></select>
                                    </div>
                                </div>
                            ";
        }
        // line 300
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Sucursales atendidas-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"attended_branch_offices_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#attended_branch_offices_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.attended_branch_offices"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"attended_branch_offices_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-6\" style=\"margin-bottom: 20px;\">
                            <p class=\"labelGrey\">";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.attended_branch_offices.subtext"), "html", null, true);
        echo ":</p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        ";
        // line 324
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 324, $this->source); })()) == "read_only")) {
            // line 325
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collaboratorBranchOffices"]) || array_key_exists("collaboratorBranchOffices", $context) ? $context["collaboratorBranchOffices"] : (function () { throw new RuntimeError('Variable "collaboratorBranchOffices" does not exist.', 325, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
                // line 326
                echo "                            <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                                ";
                // line 327
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 327), (isset($context["craneBranchOffices"]) || array_key_exists("craneBranchOffices", $context) ? $context["craneBranchOffices"] : (function () { throw new RuntimeError('Variable "craneBranchOffices" does not exist.', 327, $this->source); })()))) {
                    // line 328
                    echo "                                    <img style=\"margin-right: 5px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
                    echo "\">
                                    <span class=\"labelGrey\">";
                    // line 329
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 329), "html", null, true);
                    echo "</span>
                                ";
                } else {
                    // line 331
                    echo "                                    <img style=\"margin-right: 5px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck.png"), "html", null, true);
                    echo "\">
                                    <span class=\"labelGrey\">";
                    // line 332
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 332), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 334
                echo "                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            echo "                        ";
        } else {
            // line 337
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collaboratorBranchOffices"]) || array_key_exists("collaboratorBranchOffices", $context) ? $context["collaboratorBranchOffices"] : (function () { throw new RuntimeError('Variable "collaboratorBranchOffices" does not exist.', 337, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
                // line 338
                echo "                            <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px; display: flex; align-items: center;\">
                                ";
                // line 339
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 339), (isset($context["craneBranchOffices"]) || array_key_exists("craneBranchOffices", $context) ? $context["craneBranchOffices"] : (function () { throw new RuntimeError('Variable "craneBranchOffices" does not exist.', 339, $this->source); })()))) {
                    // line 340
                    echo "                                    <input type='checkbox' class='checkboxBranchOffice imgCheckbox' data-branchoffice='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 340), "html", null, true);
                    echo "' checked/>
                                    <span class=\"labelGrey\" style=\"margin-left: 10px;\">";
                    // line 341
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 341), "html", null, true);
                    echo "</span>
                                ";
                } else {
                    // line 343
                    echo "                                    <input type='checkbox' class='checkboxBranchOffice imgCheckbox' data-branchoffice='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 343), "html", null, true);
                    echo "'/>
                                    <span class=\"labelGrey\" style=\"margin-left: 10px;\">";
                    // line 344
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 344), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 346
                echo "                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "                        ";
        }
        // line 349
        echo "                    </div>
                </div>
            </div>
        </div>

        <!--Panel Anexo de documentos-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"attachments_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#attachments_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.attachments"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"attachments_body\" class=\"collapse in\">
                <input type=\"file\" id=\"fileToImport\" name=\"attachment[]\" class=\"hidden\">
                <div id=\"attachments_panel_body\" class=\"panel-body row\" style=\"display: flex; justify-content: flex-start; flex-wrap: wrap;\">
                    ";
        // line 367
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 367, $this->source); })()) == "edit_allowed")) {
            // line 368
            echo "                    <div id=\"import_file\" class=\"attachment_icon_img attachment_icon_import\">
                        <img src=\"";
            // line 369
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/import_file.png"), "html", null, true);
            echo "\">
                    </div>
                    ";
        }
        // line 372
        echo "                </div>
            </div>
        </div>

    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 382
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 383
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        \$(document).ready(function(){
            var time = null;
            var html2 = \"\";
            
            ";
        // line 391
        echo "            var prefServicesToAdd = [], avServicesToAdd = []; ";
        // line 392
        echo "            var branchOfficesSelected = [];
            var attachmentsToAdd = [];
            var attachmentsToRemove = [];

            ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preferentialServices"]) || array_key_exists("preferentialServices", $context) ? $context["preferentialServices"] : (function () { throw new RuntimeError('Variable "preferentialServices" does not exist.', 396, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pServ"]) {
            // line 397
            echo "                prefServicesToAdd.push(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pServ"], "id", [], "any", false, false, false, 397), "html", null, true);
            echo "); 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pServ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "            
            ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableServices"]) || array_key_exists("availableServices", $context) ? $context["availableServices"] : (function () { throw new RuntimeError('Variable "availableServices" does not exist.', 400, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avServ"]) {
            // line 401
            echo "                avServicesToAdd.push(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avServ"], "id", [], "any", false, false, false, 401), "html", null, true);
            echo "); 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avServ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "
            ";
        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneBranchOffices"]) || array_key_exists("craneBranchOffices", $context) ? $context["craneBranchOffices"] : (function () { throw new RuntimeError('Variable "craneBranchOffices" does not exist.', 404, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 405
            echo "                branchOfficesSelected.push(";
            echo twig_escape_filter($this->env, $context["branchOffice"], "html", null, true);
            echo ");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "
            ";
        // line 409
        echo "
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));

            if( \"";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 417, $this->source); })()), "html", null, true);
        echo "\" == \"read_only\" ) {
                switch_elems.forEach(function(html){
                    new Switchery(html, {disabled: true, 
                                         disabledOpacity: 1,
                                         color: \"var(--main-blue)\",
                                         secondaryColor: '#cdd3db'
                                        });
                });
            }

            ";
        // line 428
        echo "            \$(\".detailSelect\").chosen({ width:'180px !important' });
            \$(\"#new_prefService-chosen-select\").chosen({ width:'auto !important' });
            \$(\"#new_avService-chosen-select\").chosen({ width:'auto !important' });
            reloadNewServiceChosen();
            ";
        // line 433
        echo "
            ";
        // line 435
        echo "            \$('#new_prefService-chosen-select').on('change', function(){
                let newPrefHtml = \"\";

                if(\$(this).val() != \"\") {
                    ";
        // line 439
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaboratorServices"]) || array_key_exists("collaboratorServices", $context) ? $context["collaboratorServices"] : (function () { throw new RuntimeError('Variable "collaboratorServices" does not exist.', 439, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auxService"]) {
            // line 440
            echo "                        if (\$(this).val() == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 440), "html", null, true);
            echo ") {
                            newPrefHtml += '<div class=\"pService\" style=\"margin-bottom: 17px; display: flex;\">';
                            newPrefHtml += '<div id=\"";
            // line 442
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 442), "html", null, true);
            echo "\" class=\"form-control asitur_input_to_delete\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "description", [], "any", false, false, false, 442), "html", null, true);
            echo "</div>';
                            newPrefHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                            newPrefHtml += '<img class=\"asitur_input_to_delete-img pref_service_to_delete\" data-id=\"";
            // line 444
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 444), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
            echo "\" width=\"24px\" height=\"24px\">';
                            newPrefHtml += '</div></div>';
                            \$(\"#prefServicesToAppend\").prepend(newPrefHtml);
                            prefServicesToAdd.push(";
            // line 447
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 447), "html", null, true);
            echo ");
                        }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auxService'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        echo "                }
                \$(\".pref_service_to_delete\").click(function(){
                    \$(this).closest(\".pService\").remove();

                    const index = prefServicesToAdd.indexOf(\$(this).data(\"id\"));
                    if(index > -1) {
                        prefServicesToAdd.splice(index, 1);
                    }
                    reloadNewServiceChosen();
                });
                reloadNewServiceChosen();
            });

            \$('#new_avService-chosen-select').on('change', function(){
                let newAvHtml = \"\";

                if(\$(this).val() != \"\") {
                    ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaboratorServices"]) || array_key_exists("collaboratorServices", $context) ? $context["collaboratorServices"] : (function () { throw new RuntimeError('Variable "collaboratorServices" does not exist.', 467, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auxService"]) {
            // line 468
            echo "                        if (\$(this).val() == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 468), "html", null, true);
            echo ") {
                            newAvHtml += '<div class=\"aService col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 17px; display: flex;\">';
                            newAvHtml += '<div id=\"";
            // line 470
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 470), "html", null, true);
            echo "\" class=\"form-control asitur_input_to_delete\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "description", [], "any", false, false, false, 470), "html", null, true);
            echo "</div>';
                            newAvHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                            newAvHtml += '<img class=\"asitur_input_to_delete-img av_service_to_delete\" data-id=\"";
            // line 472
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 472), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
            echo "\" width=\"24px\" height=\"24px\">';
                            newAvHtml += '</div></div>';
                            \$(\"#avServicesToAppend\").prepend(newAvHtml);
                            avServicesToAdd.push(";
            // line 475
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auxService"], "id", [], "any", false, false, false, 475), "html", null, true);
            echo ");
                        }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auxService'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        echo "                }
                \$(\".av_service_to_delete\").click(function(){
                    \$(this).closest(\".aService\").remove();

                    const index = avServicesToAdd.indexOf(\$(this).data(\"id\"));
                    if(index > -1) {
                        avServicesToAdd.splice(index, 1);
                    }
                    reloadNewServiceChosen();
                });
                reloadNewServiceChosen();
            });
            ";
        // line 491
        echo "
            ";
        // line 493
        echo "            \$('.checkboxBranchOffice').change(function(){
                var branch_office_id = \$(this).data('branchoffice');
                if (\$(this).is(\":checked\")){
                    if(!branchOfficesSelected.includes(branch_office_id)) {
                        branchOfficesSelected.push(branch_office_id);
                    }
                }
                else{
                    var index = branchOfficesSelected.indexOf(branch_office_id);
                    if (index > -1) {
                        branchOfficesSelected.splice(index, 1);
                    }
                }
            });
            ";
        // line 508
        echo "
            \$('#brand-chosen-select').val(\"";
        // line 509
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 509, $this->source); })()), "brand", [], "any", false, false, false, 509), "id", [], "any", false, false, false, 509), "html", null, true);
        echo "\");
            \$(\"#brand-chosen-select\").trigger(\"chosen:updated\");

            \$.getJSON(\"";
        // line 512
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_chosen_list");
        echo "\",{
                brand: \$(this).val()
            }, function(json){
                \$(\"#model-chosen-select\").empty();
                \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                \$.each(json, function (idx, obj) {
                    \$(\"#model-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                });
                \$(\"#model-chosen-select\").removeAttr('disabled');
                \$(\"#model-chosen-select\").val(\"";
        // line 521
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 521, $this->source); })()), "model", [], "any", false, false, false, 521), "id", [], "any", false, false, false, 521), "html", null, true);
        echo "\");
                \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
            });

            \$('#managementType-chosen-select').val(\"";
        // line 525
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 525, $this->source); })()), "managementType", [], "any", false, false, false, 525), "id", [], "any", false, false, false, 525), "html", null, true);
        echo "\");
            \$(\"#managementType-chosen-select\").trigger(\"chosen:updated\");

            \$('#craneStatus-chosen-select').val(\"";
        // line 528
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 528, $this->source); })()), "craneStatus", [], "any", false, false, false, 528), "id", [], "any", false, false, false, 528), "html", null, true);
        echo "\");
            \$(\"#craneStatus-chosen-select\").trigger(\"chosen:updated\");

            \$('#label-chosen-select').val(\"";
        // line 531
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 531, $this->source); })()), "labeledType", [], "any", false, false, false, 531), "id", [], "any", false, false, false, 531), "html", null, true);
        echo "\");
            \$(\"#label-chosen-select\").trigger(\"chosen:updated\");

            \$('#availabilityStatus-chosen-select').val(\"";
        // line 534
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 534, $this->source); })()), "availabilityStatus", [], "any", false, false, false, 534), "id", [], "any", false, false, false, 534), "html", null, true);
        echo "\");
            \$(\"#availabilityStatus-chosen-select\").trigger(\"chosen:updated\");

            \$('#type-chosen-select').val(\"";
        // line 537
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 537, $this->source); })()), "craneType", [], "any", false, false, false, 537), "id", [], "any", false, false, false, 537), "html", null, true);
        echo "\");
            \$(\"#type-chosen-select\").trigger(\"chosen:updated\");

            \$('#brand-chosen-select').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#model-chosen-select\").empty();
                    \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                    \$(\"#model-chosen-select\").attr('disabled', 'disabled');
                    \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                } else {
                    \$.getJSON(\"";
        // line 547
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_chosen_list");
        echo "\",{
                        brand: \$(this).val()
                    }, function(json){
                        \$(\"#model-chosen-select\").empty();
                        \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                        \$.each(json, function (idx, obj) {
                            \$(\"#model-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                        });
                        \$(\"#model-chosen-select\").removeAttr('disabled');
                        \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                    });
                }
            });                                             
            ";
        // line 561
        echo "            ";
        // line 562
        echo "            \$(\".pref_service_to_delete\").click(function(){
                \$(this).closest(\".pService\").remove();

                const index = prefServicesToAdd.indexOf(\$(this).data(\"id\"));
                if(index > -1) {
                    prefServicesToAdd.splice(index, 1);
                }
                reloadNewServiceChosen();
            });

            \$(\".av_service_to_delete\").click(function(){
                \$(this).closest(\".aService\").remove();

                const index = avServicesToAdd.indexOf(\$(this).data(\"id\"));
                if(index > -1) {
                    avServicesToAdd.splice(index, 1);
                }
                reloadNewServiceChosen();
            });
            ";
        // line 582
        echo "
            ";
        // line 584
        echo "            \$(\"#data_management_li\").addClass(\"active\");
            ";
        // line 586
        echo "
            ";
        // line 588
        echo "            \$(\".edit-button\").click(function() {
                \$(\"#edit_form\").submit();
            });
            ";
        // line 592
        echo "
            ";
        // line 594
        echo "            \$(\".remove-button\").click(function() {
                swal.fire({
                    title: '',
                    html: '";
        // line 597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.crane.remove.individual"), "html", null, true);
        echo "',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove.confirm"), "html", null, true);
        echo "\",
                    confirmButtonColor: \"red\",
                    focusConfirm: false,
                    allowEnterKey: false,
                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'";
        // line 609
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes_delete");
        echo "',
                            data: {
                                'arrayChecked': ['";
        // line 611
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 611, $this->source); })()), "id", [], "any", false, false, false, 611), "html", null, true);
        echo "']
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.success"), "html", null, true);
        echo "',
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: false
                                    });
                                    setTimeout(function() {
                                        window.location.replace(\"";
        // line 623
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes");
        echo "\");
                                    }, 1500);
                                } else {
                                    swal.fire({
                                        title: data.message,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            },
                            error: function(err){
                                swal.fire({
                                    title: '";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.error"), "html", null, true);
        echo "',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                    }
                });
            });
            ";
        // line 647
        echo "
            ";
        // line 649
        echo "            \$(\".rates-button\").click(function() {
                swal.fire({
                    title: 'Por definir',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            });
            ";
        // line 658
        echo "
            ";
        // line 660
        echo "            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'";
        // line 662
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_crane_export_excel");
        echo "',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'craneId': \"";
        // line 666
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 666, $this->source); })()), "id", [], "any", false, false, false, 666), "html", null, true);
        echo "\",
                    },
                    type:\"POST\",
                    success: function(data){
                        if (data.status){
                            swal.fire({
                                title: '";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.success"), "html", null, true);
        echo "',
                                html: \"\",
                                icon: 'success',
                                showConfirmButton: true
                            });

                            var fileName = data.data.fileName;
                            var filePath = data.data.filePath;
                            
                            var formTmp = document.createElement('form');
                            \$(formTmp).attr('action',\"";
        // line 682
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
                        } else {
                            swal.fire({
                                title: '";
        // line 694
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    },
                    error:function(err){
                        swal.fire({
                            title: '";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            });
            ";
        // line 712
        echo "
            ";
        // line 714
        echo "            \$(\"#save-button\").click(function() {

                if( \$.trim(\$(\"#plate-input\").val())                 == \"\"     ||
                    \$.trim(\$(\"#reference-input\").val())             == \"\"     ||
                    \$(\"#brand-chosen-select\").val()                 == \"\"     ||
                    \$(\"#model-chosen-select\").val()                 == \"\"     ||
                    \$(\"#managementType-chosen-select\").val()        == \"\"     ||
                    \$(\"#craneStatus-chosen-select\").val()           == \"\"     ||
                    \$(\"#label-chosen-select\").val()                 == \"\"     ||
                    \$(\"#availabilityStatus-chosen-select\").val()    == \"\"     ||
                    \$(\"#type-chosen-select\").val()                  == \"\"     
                ) {  
                    swal.fire({
                        title: '";
        // line 727
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.allfields.mandatory"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else {

                    var dataArray = {};

                    \$(\".data_input\").each(function() {
                        dataArray[\$(this).attr(\"name\")] = \$(this).val();
                    });

                    \$.ajax({
                        url:'";
        // line 741
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_crane_edit_save");
        echo "',
                        data: {
                            'craneId': \"";
        // line 743
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 743, $this->source); })()), "id", [], "any", false, false, false, 743), "html", null, true);
        echo "\",
                            'dataArray': dataArray,
                            'prefServicesToAdd': prefServicesToAdd,
                            'avServicesToAdd': avServicesToAdd,
                            'branchOfficesSelected': branchOfficesSelected,
                            'attachmentsToAdd': attachmentsToAdd,
                            'attachmentsToRemove': attachmentsToRemove,
                        },
                        type:\"POST\",
                        success: function(data){
                            if(data['status']) {
                                swal.fire({
                                    title: \"";
        // line 755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.save.success"), "html", null, true);
        echo "\",
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            } else {
                                swal.fire({
                                    title: data.message,
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        },
                        error:function(err){
                            swal.fire({
                                title: '";
        // line 775
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.error"), "html", null, true);
        echo "',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
            ";
        // line 785
        echo "
            ";
        // line 787
        echo "            \$.ajax({
                url:'";
        // line 788
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crane_attachments");
        echo "',
                data: {
                    'craneId': \"";
        // line 790
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crane"]) || array_key_exists("crane", $context) ? $context["crane"] : (function () { throw new RuntimeError('Variable "crane" does not exist.', 790, $this->source); })()), "id", [], "any", false, false, false, 790), "html", null, true);
        echo "\"
                },
                type:\"POST\",
                success: function(data){
                    if(data.length) {
                        let html = \"\", fileExtension = \"\";
                        let imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                        ";
        // line 797
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 797, $this->source); })()) == "read_only")) {
            // line 798
            echo "                            \$.each(data, function (key, value) {
                                fileExtension = value[\"file_name\"].split('.').pop();
                                if(value[\"file_name\"].includes(\".pdf\")) {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"";
            // line 801
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else if( imageExtensions.includes(fileExtension) ) {
                                    html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"";
            // line 807
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file_general.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                }
                            }); 
                        ";
        } else {
            // line 812
            echo "                            \$.each(data, function (key, value) {
                                fileExtension = value[\"file_name\"].split('.').pop();
                                if(value[\"file_name\"].includes(\".pdf\")) {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -20px;\"> <img src=\"";
            // line 815
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
            echo "\" class=\"delete_img_x\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else if( imageExtensions.includes(fileExtension) ) {
                                    html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -37px;\"> <img src=\"";
            // line 818
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
            echo "\" class=\"delete_img_x\" style=\"top: 14px; left: 60px;\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -20px;\"> <img src=\"";
            // line 821
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
            echo "\" class=\"delete_img_x\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file_general.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                }
                            }); 
                        ";
        }
        // line 826
        echo "
                        \$(\"#attachments_panel_body\").prepend(html);

                        ";
        // line 829
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 829, $this->source); })()) == "read_only")) {
            // line 830
            echo "                            ";
            // line 831
            echo "                            \$(\".attachment_icon\").click(function() {
                                var attachmentId = \$(this).data(\"id\");
                                \$.ajax({
                                    url:'";
            // line 834
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_attachment");
            echo "',
                                    data: {
                                        'attachmentId': attachmentId
                                    },
                                    type:\"POST\",
                                    success: function(data){
                                        if (data.status){
                                            var fileName = data.data.fileName;
                                            var filePath = data.data.filePath;
                                            
                                            var formTmp = document.createElement('form');
                                            \$(formTmp).attr('action',\"";
            // line 845
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
                                        } else {
                                            swal.fire({
                                                title: '";
            // line 857
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.download.error"), "html", null, true);
            echo "',
                                                html: '',
                                                icon: 'error',
                                                showConfirmButton: true
                                            });
                                        }
                                    },
                                    error:function(err){
                                        swal.fire({
                                            title: '";
            // line 866
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.download.error"), "html", null, true);
            echo "',
                                            html: '',
                                            icon: 'error',
                                            showConfirmButton: true
                                        });
                                    }
                                });
                            });
                        ";
        } else {
            // line 875
            echo "                            ";
            // line 876
            echo "                            \$(\".attachment_icon\").click(function() {
                                swal.fire({
                                    title: '',
                                    html: '";
            // line 879
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attachment.remove"), "html", null, true);
            echo "',
                                    icon: 'warning',
                                    showConfirmButton: true,
                                    confirmButtonText: \"";
            // line 882
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove"), "html", null, true);
            echo "\",
                                    confirmButtonColor: \"red\",
                                    focusConfirm: false,
                                    allowEnterKey: false,
                                    showCancelButton: true,
                                    cancelButtonText: \"";
            // line 887
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
            echo "\"
                                }).then((result) => {
                                    if(result.isConfirmed) {
                                        attachmentsToRemove.push(\$(this).data(\"id\"));
                                        \$(this).remove();
                                    }
                                });
                            });
                        ";
        }
        // line 896
        echo "                    }
                },
                error:function(err){
                    swal.fire({
                        title: '";
        // line 900
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attachment.list.error"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
            ";
        // line 908
        echo "
            ";
        // line 910
        echo "            \$(\"#fileToImport\").dropzone({
                url: \"";
        // line 911
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preupload_attachment");
        echo "\",
                addRemoveLinks: false,
                maxFilesize: 150, //MB
                autoProcessQueue: true, // ajuste cola
                timeout: 180000, /*milliseconds*/
                acceptedFiles: \".pdf, .jpg, .png, .jpeg, .txt, .PDF, .JPG, .PNG, .JPEG, .TXT\",
                maxFiles: 1,
                parallelUploads: 5,
                paramName: \"file\", // The name that will be used to transfer the file
                clickable: '.attachment_icon_import img',
                init: function(){
                    // config
                    this.options.dictRemoveFile = \"Delete\";

                    this.on(\"success\", function(file, responseText) {

                        auxHtml = '<div class=\"attachment_imported attachment_icon_general\" data-filename=\"'+ responseText.data[\"fileName\"] +'\" data-path=\"'+ responseText.data[\"filePath\"] +'\" style=\"margin-top: -20px;\"> <img src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
        echo "\" class=\"delete_img_x\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file_imported.png"), "html", null, true);
        echo "\">';
                        auxHtml += '<div class=\"attachment_icon_text\"> <span>'+ responseText.data[\"fileName\"] +'</span> </div></div>';
                        \$(\"#attachments_panel_body\").prepend(auxHtml);

                        attachmentsToAdd.push({ \"fileName\": responseText.data[\"fileName\"], \"filePath\": responseText.data[\"filePath\"] });
                        
                        ";
        // line 934
        echo "                        \$(\".attachment_imported\").click(function() {
                            swal.fire({
                                title: '',
                                html: '";
        // line 937
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attachment.remove"), "html", null, true);
        echo "',
                                icon: 'warning',
                                showConfirmButton: true,
                                confirmButtonText: \"";
        // line 940
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove"), "html", null, true);
        echo "\",
                                confirmButtonColor: \"red\",
                                focusConfirm: false,
                                allowEnterKey: false,
                                showCancelButton: true,
                                cancelButtonText: \"";
        // line 945
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\"
                            }).then((result) => {
                                if(result.isConfirmed) {
                                    for(const [index, elem] of attachmentsToAdd.entries()) {
                                        if (elem[\"fileName\"] == \$(this).data(\"filename\")) {
                                            attachmentsToAdd.splice(index, 1);
                                            \$(this).remove();
                                            break;
                                        }
                                    }
                                }
                            });
                        });
                    });
                    this.on('complete',function(file){
                        this.removeAllFiles();
                    });
                }
            });
            ";
        // line 965
        echo "

            function reloadNewServiceChosen() {
                html2 = \"\";
                ";
        // line 969
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaboratorServices"]) || array_key_exists("collaboratorServices", $context) ? $context["collaboratorServices"] : (function () { throw new RuntimeError('Variable "collaboratorServices" does not exist.', 969, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 970
            echo "                    html2 += '<option class=\"option_service\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 970), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 970), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 970), "html", null, true);
            echo "</option>';
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 972
        echo "                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").empty();
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").append('<option value=\"\"> ";
        // line 973
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.input.placeholder.services"), "html", null, true);
        echo " </option>');
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").append(html2);
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").trigger(\"chosen:updated\");
                \$(\".asitur_input_to_delete-img\").each(function() {
                    \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").find('option[data-id=\"'+\$(this).data(\"id\")+'\"]').remove();
                    \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").trigger(\"chosen:updated\");
                });
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").trigger(\"chosen:updated\");
            }
        
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/detailCrane.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1936 => 973,  1933 => 972,  1920 => 970,  1916 => 969,  1910 => 965,  1888 => 945,  1880 => 940,  1874 => 937,  1869 => 934,  1858 => 927,  1839 => 911,  1836 => 910,  1833 => 908,  1823 => 900,  1817 => 896,  1805 => 887,  1797 => 882,  1791 => 879,  1786 => 876,  1784 => 875,  1772 => 866,  1760 => 857,  1745 => 845,  1731 => 834,  1726 => 831,  1724 => 830,  1722 => 829,  1717 => 826,  1707 => 821,  1701 => 818,  1693 => 815,  1688 => 812,  1680 => 807,  1671 => 801,  1666 => 798,  1664 => 797,  1654 => 790,  1649 => 788,  1646 => 787,  1643 => 785,  1631 => 775,  1608 => 755,  1593 => 743,  1588 => 741,  1571 => 727,  1556 => 714,  1553 => 712,  1542 => 703,  1530 => 694,  1515 => 682,  1502 => 672,  1493 => 666,  1486 => 662,  1482 => 660,  1479 => 658,  1469 => 649,  1466 => 647,  1453 => 636,  1437 => 623,  1428 => 617,  1419 => 611,  1414 => 609,  1407 => 605,  1399 => 600,  1393 => 597,  1388 => 594,  1385 => 592,  1380 => 588,  1377 => 586,  1374 => 584,  1371 => 582,  1350 => 562,  1348 => 561,  1332 => 547,  1319 => 537,  1313 => 534,  1307 => 531,  1301 => 528,  1295 => 525,  1288 => 521,  1276 => 512,  1270 => 509,  1267 => 508,  1251 => 493,  1248 => 491,  1234 => 478,  1225 => 475,  1217 => 472,  1210 => 470,  1204 => 468,  1200 => 467,  1181 => 450,  1172 => 447,  1164 => 444,  1157 => 442,  1151 => 440,  1147 => 439,  1141 => 435,  1138 => 433,  1132 => 428,  1119 => 417,  1111 => 412,  1107 => 411,  1103 => 409,  1100 => 407,  1091 => 405,  1087 => 404,  1084 => 403,  1075 => 401,  1071 => 400,  1068 => 399,  1059 => 397,  1055 => 396,  1049 => 392,  1047 => 391,  1036 => 383,  1026 => 382,  1008 => 372,  1002 => 369,  999 => 368,  997 => 367,  988 => 361,  974 => 349,  971 => 348,  964 => 346,  959 => 344,  954 => 343,  949 => 341,  944 => 340,  942 => 339,  939 => 338,  934 => 337,  931 => 336,  924 => 334,  919 => 332,  914 => 331,  909 => 329,  904 => 328,  902 => 327,  899 => 326,  894 => 325,  892 => 324,  885 => 320,  875 => 313,  860 => 300,  853 => 295,  841 => 291,  834 => 289,  831 => 288,  827 => 287,  824 => 286,  820 => 284,  806 => 283,  800 => 281,  797 => 280,  780 => 279,  776 => 277,  762 => 276,  756 => 274,  753 => 273,  736 => 272,  733 => 271,  730 => 270,  727 => 269,  724 => 268,  721 => 267,  718 => 266,  716 => 265,  712 => 264,  709 => 263,  706 => 261,  699 => 256,  687 => 252,  680 => 250,  677 => 249,  673 => 248,  670 => 247,  667 => 246,  658 => 244,  653 => 243,  651 => 242,  647 => 241,  644 => 240,  641 => 238,  636 => 235,  625 => 233,  621 => 232,  616 => 229,  611 => 227,  608 => 226,  606 => 225,  602 => 224,  599 => 223,  596 => 221,  591 => 218,  580 => 216,  576 => 215,  571 => 212,  566 => 210,  563 => 209,  561 => 208,  557 => 207,  554 => 206,  551 => 204,  546 => 201,  535 => 199,  531 => 198,  526 => 195,  521 => 193,  518 => 192,  516 => 191,  512 => 190,  509 => 189,  504 => 185,  499 => 182,  488 => 180,  484 => 179,  479 => 176,  476 => 175,  466 => 169,  456 => 163,  454 => 162,  445 => 157,  442 => 156,  440 => 155,  435 => 153,  432 => 152,  429 => 150,  424 => 147,  413 => 145,  409 => 144,  404 => 141,  399 => 139,  396 => 138,  394 => 137,  390 => 136,  387 => 135,  384 => 133,  376 => 127,  371 => 125,  368 => 124,  366 => 123,  362 => 122,  359 => 121,  356 => 119,  351 => 116,  340 => 114,  336 => 113,  331 => 110,  326 => 108,  323 => 107,  321 => 106,  317 => 105,  314 => 104,  311 => 102,  305 => 100,  300 => 98,  297 => 97,  295 => 96,  291 => 95,  288 => 94,  285 => 92,  279 => 90,  274 => 88,  271 => 87,  269 => 86,  265 => 85,  262 => 84,  253 => 77,  241 => 67,  238 => 65,  229 => 62,  226 => 60,  224 => 59,  216 => 57,  209 => 55,  202 => 53,  200 => 52,  192 => 50,  185 => 48,  179 => 45,  174 => 44,  171 => 43,  164 => 41,  160 => 38,  144 => 26,  137 => 22,  129 => 19,  121 => 13,  111 => 12,  98 => 8,  94 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"{{ path('branch_offices') }}\">{{\"data_management.tab.branch_offices\"|trans}}</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">{{\"data_management.tab.cranes\"|trans}}</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"{{ path('operators') }}\">{{\"data_management.tab.operators\"|trans}}</a>
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        {# Bloque de botones de la parte superior de la tabla #}
        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                {# Volver #}
                <a class=\"go_back_link\" href=\"{{ path('cranes') }}\"><i class=\"fa fa-2x fa-chevron-left\"></i>{{\"general.go_back_to_list\"|trans}}</a>
                {# Editar #}
                {% if mode == \"read_only\" %}
                    <form id=\"edit_form\" action=\"{{ path('detail_crane') }}\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"craneId\" value=\"{{ crane.id }}\">
                        <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                    </form>
                    <button type=\"button\" class=\"btn top_left-buttons edit-button\"> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {% else %}
                    <button disabled type=\"button\" class=\"btn top_left-buttons edit-button\" style=\"font-weight: bold; color: var(--main-blue); opacity: 1; filter: var(--filter-main-blue);\"> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {% endif %}
                {# Eliminar #}
                <button type=\"button\" class=\"btn top_left-buttons remove-button\"> <img src=\"{{asset(\"media/datatables/basura-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.remove')|trans}}</button>
                {# Tarifas #}
                <button type=\"button\" class=\"btn top_left-buttons rates-button\"> <img src=\"{{asset(\"media/datatables/euro.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.rates')|trans}}</button>
                {# Exportar #}
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

        <!--Panel Datos de grúa-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"crane_data_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#crane_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_crane.crane_data'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"crane_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        {# Matrícula #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"plate-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.plate\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.plate }}</p>
                            {% else %}
                                <input id=\"plate-input\" name=\"c_plate\" value=\"{{ crane.plate }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"15\">
                            {% endif %}
                        </div>
                        {# Identificador #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"reference-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.reference\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.reference }}</p>
                            {% else %}
                                <input id=\"reference-input\" name=\"c_reference\" value=\"{{ crane.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\">
                            {% endif %}
                        </div>
                        {# Marca #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"brand-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.brand\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.brand.description }}</p>
                            {% else %}
                                <div style=\"display: block;\">
                                    <select id=\"brand-chosen-select\" name=\"c_brand\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for brand in brands %}
                                            <option value=\"{{ brand.id}}\"> {{ brand.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            {% endif %}
                        </div>
                        {# Modelo #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"model-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.model\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.model.description }}</p>
                            {% else %}
                                <div style=\"display: block;\">
                                    <select disabled id=\"model-chosen-select\" name=\"c_model\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                    </select>
                                </div>
                            {% endif %}
                        </div>
                        {# Tipo de asignación #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"managementType-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.managementType\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.managementType.description }}</p>
                            {% else %}
                                <div style=\"display: block;\">
                                    <select id=\"managementType-chosen-select\" name=\"c_managementType\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneManagementType in craneManagementTypes %}
                                            <option value=\"{{ craneManagementType.id}}\"> {{ craneManagementType.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            {% endif %}
                        </div>
                        {# Estado #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"status-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.status\"|trans}}</label>
                            <br/>
                            {% if mode == \"read_only\" %}
                                {% if crane.craneStatus.id == 1 %}
                                    <div title=\"{{'data_management.crane_status.select.option.active'|trans}}\">
                                        <span style=\"margin-right: 5px; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                        <input class=\"check_status switchery\" type=\"checkbox\" checked>
                                        <span style=\"margin-left: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">ON</span>
                                    </div>
                                {% elseif crane.craneStatus.id == 2 %}
                                    <div title=\"{{'data_management.crane_status.select.option.damaged'|trans}}\">
                                        <span style=\"margin-right: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                        <input class=\"check_status switchery\" type=\"checkbox\">
                                        <span style=\"margin-left: 5px; vertical-align: middle; color: var(--main-grey);\">ON</span>
                                    </div>
                                {% else %}
                                    <div title=\"{{'data_management.crane_status.select.option.retired'|trans}}\">
                                        <span style=\"margin-right: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                        <input class=\"check_status switchery\" type=\"checkbox\">
                                        <span style=\"margin-left: 5px; vertical-align: middle; color: var(--main-grey);\">ON</span>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div style=\"display: block;\">
                                    <select id=\"craneStatus-chosen-select\" name=\"c_craneStatus\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneStatus in craneStatusList %}
                                            <option value=\"{{ craneStatus.id}}\"> {{ craneStatus.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"row\" style=\"margin: 0; margin-top: 42px; font-size: 16px;\">
                        {# Rótulo #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"label-chosen-select\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.label\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.labeledType.description }}</p>
                            {% else %}
                                <div style=\"display: block;\">
                                    <select id=\"label-chosen-select\" name=\"c_label\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for label in labels %}
                                            <option value=\"{{ label.id}}\"> {{ label.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            {% endif %}
                        </div>
                        {# Disponibilidad #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"label-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.availabilityStatus\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.labeledType.description }}</p>
                            {% else %}
                                <div style=\"display: block;\">
                                    <select id=\"availabilityStatus-chosen-select\" name=\"c_availabilityStatus\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneAvailabilityStatus in craneAvailabilityStatusList %}
                                            <option value=\"{{ craneAvailabilityStatus.id}}\"> {{ craneAvailabilityStatus.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            {% endif %}
                        </div>
                        {# Tipo #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"craneType-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_crane.input.label.craneType\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                <br/>
                                <p class=\"labelGrey_16\">{{ crane.craneType.description }}</p>
                            {% else %}
                                <div style=\"display: block;\">
                                    <select id=\"type-chosen-select\" name=\"c_type\" class=\"select_inputs detailSelect data_input\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneType in craneTypes %}
                                            <option value=\"{{ craneType.id}}\"> {{ craneType.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            {% endif %}
                        </div>
                        {# Servicios preferentes #}
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"preferentialServices-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px; display: block;\">{{\"detail_crane.input.label.preferentialServices\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                {% for pService in preferentialServices %}
                                    <p class=\"labelGrey_16\">{{ pService.description }}</p>
                                {% endfor %}
                            {% else %}
                                <div id=\"prefServicesToAppend\">
                                    {% for pService in preferentialServices %}
                                        <div class=\"pService\" style=\"margin-bottom: 17px; display: flex;\">
                                            <div id=\"{{ pService.id }}\" class=\"form-control asitur_input_to_delete\">{{ pService.description }}</div>
                                            <div style=\"height: 35px; border-bottom: 1px solid lightgrey\">
                                                <img class=\"asitur_input_to_delete-img pref_service_to_delete\" data-id=\"{{ pService.id }}\" src='{{asset(\"media/equis.png\")}}' width=\"24px\" height=\"24px\">
                                            </div>
                                        </div>
                                    {% endfor %}
                                    <div style=\"display: block;\">
                                        <select id=\"new_prefService-chosen-select\" class=\"select_inputs\" tabindex=\"-1\"></select>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                        {# Servicios disponibles #}
                        <div class=\"col-sm-6 col-md-6 col-lg-4\" style=\"margin-bottom: 20px;\">
                            <label for=\"availableServices-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px; display: block;\">{{\"detail_crane.input.label.availableServices\"|trans}}</label>
                            {% if mode == \"read_only\" %}
                                {% if availableServices|length > 3 %}
                                    {% set availableServiceslength = ((availableServices|length / 2) + 1) %}
                                {% else %}
                                    {% set availableServiceslength = availableServices|length + 1 %}
                                {% endif %}
                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 20px;\">
                                    {% for aService in availableServices %}
                                        {% if loop.index < availableServiceslength %}
                                            <p class=\"labelGrey_16\">{{ aService.description }}</p>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 20px;\">
                                    {% for aService in availableServices %}
                                        {% if loop.index >= availableServiceslength %}
                                            <p class=\"labelGrey_16\">{{ aService.description }}</p>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            {% else %}
                                <div id=\"avServicesToAppend\">
                                    {% for aService in availableServices %}
                                        <div class=\"aService col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 17px; display: flex;\">
                                            <div id=\"{{ aService.id }}\" class=\"form-control asitur_input_to_delete\">{{ aService.description }}</div>
                                            <div style=\"height: 35px; border-bottom: 1px solid lightgrey\">
                                                <img class=\"asitur_input_to_delete-img av_service_to_delete\" data-id=\"{{ aService.id }}\" src='{{asset(\"media/equis.png\")}}' width=\"24px\" height=\"24px\">
                                            </div>
                                        </div>
                                    {% endfor %}
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <select id=\"new_avService-chosen-select\" class=\"select_inputs\" tabindex=\"-1\"></select>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Sucursales atendidas-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"attended_branch_offices_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#attended_branch_offices_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_crane.attended_branch_offices'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"attended_branch_offices_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-6\" style=\"margin-bottom: 20px;\">
                            <p class=\"labelGrey\">{{\"detail_crane.attended_branch_offices.subtext\"|trans}}:</p>
                        </div>
                    </div>
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        {% if mode == \"read_only\" %}
                            {% for branchOffice in collaboratorBranchOffices %}
                            <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                                {% if branchOffice.id in craneBranchOffices %}
                                    <img style=\"margin-right: 5px;\" src=\"{{asset(\"media/check.png\")}}\">
                                    <span class=\"labelGrey\">{{branchOffice.name}}</span>
                                {% else %}
                                    <img style=\"margin-right: 5px;\" src=\"{{asset(\"media/uncheck.png\")}}\">
                                    <span class=\"labelGrey\">{{branchOffice.name}}</span>
                                {% endif %}
                            </div>
                            {% endfor %}
                        {% else %}
                            {% for branchOffice in collaboratorBranchOffices %}
                            <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px; display: flex; align-items: center;\">
                                {% if branchOffice.id in craneBranchOffices %}
                                    <input type='checkbox' class='checkboxBranchOffice imgCheckbox' data-branchoffice='{{branchOffice.id}}' checked/>
                                    <span class=\"labelGrey\" style=\"margin-left: 10px;\">{{branchOffice.name}}</span>
                                {% else %}
                                    <input type='checkbox' class='checkboxBranchOffice imgCheckbox' data-branchoffice='{{branchOffice.id}}'/>
                                    <span class=\"labelGrey\" style=\"margin-left: 10px;\">{{branchOffice.name}}</span>
                                {% endif %}
                            </div>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Anexo de documentos-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"attachments_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#attachments_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail.attachments'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"attachments_body\" class=\"collapse in\">
                <input type=\"file\" id=\"fileToImport\" name=\"attachment[]\" class=\"hidden\">
                <div id=\"attachments_panel_body\" class=\"panel-body row\" style=\"display: flex; justify-content: flex-start; flex-wrap: wrap;\">
                    {% if mode == \"edit_allowed\" %}
                    <div id=\"import_file\" class=\"attachment_icon_img attachment_icon_import\">
                        <img src=\"{{asset(\"media/import_file.png\")}}\">
                    </div>
                    {% endif %}
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
            var time = null;
            var html2 = \"\";
            
            {#* Arrays que se utilizarán al guardar  #}
            var prefServicesToAdd = [], avServicesToAdd = []; {#* Ids de los collaboratorServices a añadir #}
            var branchOfficesSelected = [];
            var attachmentsToAdd = [];
            var attachmentsToRemove = [];

            {% for pServ in preferentialServices %}
                prefServicesToAdd.push({{ pServ.id }}); 
            {% endfor %}
            
            {% for avServ in availableServices %}
                avServicesToAdd.push({{ avServ.id }}); 
            {% endfor %}

            {% for branchOffice in craneBranchOffices %}
                branchOfficesSelected.push({{ branchOffice }});
            {% endfor %}

            {#* ###################################  #}

            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"{{ asset('media/uncheck_empty.png') }}\",
                checkPath: \"{{ asset('media/check.png') }}\"
            });

            var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));

            if( \"{{ mode }}\" == \"read_only\" ) {
                switch_elems.forEach(function(html){
                    new Switchery(html, {disabled: true, 
                                         disabledOpacity: 1,
                                         color: \"var(--main-blue)\",
                                         secondaryColor: '#cdd3db'
                                        });
                });
            }

            {#* Inicialización de Inputs y Selects #}
            \$(\".detailSelect\").chosen({ width:'180px !important' });
            \$(\"#new_prefService-chosen-select\").chosen({ width:'auto !important' });
            \$(\"#new_avService-chosen-select\").chosen({ width:'auto !important' });
            reloadNewServiceChosen();
            {#* ################################### #}

            {#* Select añadir servicio preferente y disponible #}
            \$('#new_prefService-chosen-select').on('change', function(){
                let newPrefHtml = \"\";

                if(\$(this).val() != \"\") {
                    {% for auxService in collaboratorServices %}
                        if (\$(this).val() == {{ auxService.id }}) {
                            newPrefHtml += '<div class=\"pService\" style=\"margin-bottom: 17px; display: flex;\">';
                            newPrefHtml += '<div id=\"{{ auxService.id }}\" class=\"form-control asitur_input_to_delete\">{{ auxService.description }}</div>';
                            newPrefHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                            newPrefHtml += '<img class=\"asitur_input_to_delete-img pref_service_to_delete\" data-id=\"{{ auxService.id }}\" src=\"{{asset(\"media/equis.png\")}}\" width=\"24px\" height=\"24px\">';
                            newPrefHtml += '</div></div>';
                            \$(\"#prefServicesToAppend\").prepend(newPrefHtml);
                            prefServicesToAdd.push({{ auxService.id }});
                        }
                    {% endfor %}
                }
                \$(\".pref_service_to_delete\").click(function(){
                    \$(this).closest(\".pService\").remove();

                    const index = prefServicesToAdd.indexOf(\$(this).data(\"id\"));
                    if(index > -1) {
                        prefServicesToAdd.splice(index, 1);
                    }
                    reloadNewServiceChosen();
                });
                reloadNewServiceChosen();
            });

            \$('#new_avService-chosen-select').on('change', function(){
                let newAvHtml = \"\";

                if(\$(this).val() != \"\") {
                    {% for auxService in collaboratorServices %}
                        if (\$(this).val() == {{ auxService.id }}) {
                            newAvHtml += '<div class=\"aService col-xs-12 col-sm-12 col-md-6 col-lg-6\" style=\"margin-bottom: 17px; display: flex;\">';
                            newAvHtml += '<div id=\"{{ auxService.id }}\" class=\"form-control asitur_input_to_delete\">{{ auxService.description }}</div>';
                            newAvHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                            newAvHtml += '<img class=\"asitur_input_to_delete-img av_service_to_delete\" data-id=\"{{ auxService.id }}\" src=\"{{asset(\"media/equis.png\")}}\" width=\"24px\" height=\"24px\">';
                            newAvHtml += '</div></div>';
                            \$(\"#avServicesToAppend\").prepend(newAvHtml);
                            avServicesToAdd.push({{ auxService.id }});
                        }
                    {% endfor %}
                }
                \$(\".av_service_to_delete\").click(function(){
                    \$(this).closest(\".aService\").remove();

                    const index = avServicesToAdd.indexOf(\$(this).data(\"id\"));
                    if(index > -1) {
                        avServicesToAdd.splice(index, 1);
                    }
                    reloadNewServiceChosen();
                });
                reloadNewServiceChosen();
            });
            {#* ############################################## #}

            {#* Acción de actualización de checkboxes #}
            \$('.checkboxBranchOffice').change(function(){
                var branch_office_id = \$(this).data('branchoffice');
                if (\$(this).is(\":checked\")){
                    if(!branchOfficesSelected.includes(branch_office_id)) {
                        branchOfficesSelected.push(branch_office_id);
                    }
                }
                else{
                    var index = branchOfficesSelected.indexOf(branch_office_id);
                    if (index > -1) {
                        branchOfficesSelected.splice(index, 1);
                    }
                }
            });
            {#* ####################### #}

            \$('#brand-chosen-select').val(\"{{ crane.brand.id }}\");
            \$(\"#brand-chosen-select\").trigger(\"chosen:updated\");

            \$.getJSON(\"{{ path('model_chosen_list') }}\",{
                brand: \$(this).val()
            }, function(json){
                \$(\"#model-chosen-select\").empty();
                \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                \$.each(json, function (idx, obj) {
                    \$(\"#model-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                });
                \$(\"#model-chosen-select\").removeAttr('disabled');
                \$(\"#model-chosen-select\").val(\"{{ crane.model.id }}\");
                \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
            });

            \$('#managementType-chosen-select').val(\"{{ crane.managementType.id }}\");
            \$(\"#managementType-chosen-select\").trigger(\"chosen:updated\");

            \$('#craneStatus-chosen-select').val(\"{{ crane.craneStatus.id }}\");
            \$(\"#craneStatus-chosen-select\").trigger(\"chosen:updated\");

            \$('#label-chosen-select').val(\"{{ crane.labeledType.id }}\");
            \$(\"#label-chosen-select\").trigger(\"chosen:updated\");

            \$('#availabilityStatus-chosen-select').val(\"{{ crane.availabilityStatus.id }}\");
            \$(\"#availabilityStatus-chosen-select\").trigger(\"chosen:updated\");

            \$('#type-chosen-select').val(\"{{ crane.craneType.id }}\");
            \$(\"#type-chosen-select\").trigger(\"chosen:updated\");

            \$('#brand-chosen-select').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#model-chosen-select\").empty();
                    \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                    \$(\"#model-chosen-select\").attr('disabled', 'disabled');
                    \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                } else {
                    \$.getJSON(\"{{ path('model_chosen_list') }}\",{
                        brand: \$(this).val()
                    }, function(json){
                        \$(\"#model-chosen-select\").empty();
                        \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                        \$.each(json, function (idx, obj) {
                            \$(\"#model-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                        });
                        \$(\"#model-chosen-select\").removeAttr('disabled');
                        \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                    });
                }
            });                                             
            {#* ################################## #}
            {#* Eliminar servicios #}
            \$(\".pref_service_to_delete\").click(function(){
                \$(this).closest(\".pService\").remove();

                const index = prefServicesToAdd.indexOf(\$(this).data(\"id\"));
                if(index > -1) {
                    prefServicesToAdd.splice(index, 1);
                }
                reloadNewServiceChosen();
            });

            \$(\".av_service_to_delete\").click(function(){
                \$(this).closest(\".aService\").remove();

                const index = avServicesToAdd.indexOf(\$(this).data(\"id\"));
                if(index > -1) {
                    avServicesToAdd.splice(index, 1);
                }
                reloadNewServiceChosen();
            });
            {#* ################## #}

            {#* Para que el apartado correspondiente en la barra lateral esté activo #}
            \$(\"#data_management_li\").addClass(\"active\");
            {#* #################################################################### #}

            {#* Botón Editar #}
            \$(\".edit-button\").click(function() {
                \$(\"#edit_form\").submit();
            });
            {#* ############ #}

            {#* Botón Eliminar #}
            \$(\".remove-button\").click(function() {
                swal.fire({
                    title: '',
                    html: '{{\"modal.crane.remove.individual\"|trans}}',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"{{'modal.general.remove.confirm'|trans}}\",
                    confirmButtonColor: \"red\",
                    focusConfirm: false,
                    allowEnterKey: false,
                    showCancelButton: true,
                    cancelButtonText: \"{{'general.cancel'|trans}}\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'{{ path('cranes_delete') }}',
                            data: {
                                'arrayChecked': ['{{ crane.id }}']
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '{{ (\"modal.general.operation.success\")|trans }}',
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: false
                                    });
                                    setTimeout(function() {
                                        window.location.replace(\"{{ path('cranes') }}\");
                                    }, 1500);
                                } else {
                                    swal.fire({
                                        title: data.message,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            },
                            error: function(err){
                                swal.fire({
                                    title: '{{ (\"modal.general.operation.error\")|trans }}',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                    }
                });
            });
            {#* ############ #}

            {#* Botón Tarifas #}
            \$(\".rates-button\").click(function() {
                swal.fire({
                    title: 'Por definir',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            });
            {#* ############################################## #}

            {#* Exportación de una grúa #}
            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'{{ path('detail_crane_export_excel') }}',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'craneId': \"{{ crane.id }}\",
                    },
                    type:\"POST\",
                    success: function(data){
                        if (data.status){
                            swal.fire({
                                title: '{{ (\"general.export.success\")|trans }}',
                                html: \"\",
                                icon: 'success',
                                showConfirmButton: true
                            });

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
                        } else {
                            swal.fire({
                                title: '{{ (\"general.export.error\")|trans }}',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
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
            {#* ####################### #}

            {#* Botón guardar #}
            \$(\"#save-button\").click(function() {

                if( \$.trim(\$(\"#plate-input\").val())                 == \"\"     ||
                    \$.trim(\$(\"#reference-input\").val())             == \"\"     ||
                    \$(\"#brand-chosen-select\").val()                 == \"\"     ||
                    \$(\"#model-chosen-select\").val()                 == \"\"     ||
                    \$(\"#managementType-chosen-select\").val()        == \"\"     ||
                    \$(\"#craneStatus-chosen-select\").val()           == \"\"     ||
                    \$(\"#label-chosen-select\").val()                 == \"\"     ||
                    \$(\"#availabilityStatus-chosen-select\").val()    == \"\"     ||
                    \$(\"#type-chosen-select\").val()                  == \"\"     
                ) {  
                    swal.fire({
                        title: '{{\"general.form.allfields.mandatory\"|trans}}',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else {

                    var dataArray = {};

                    \$(\".data_input\").each(function() {
                        dataArray[\$(this).attr(\"name\")] = \$(this).val();
                    });

                    \$.ajax({
                        url:'{{ path(\"detail_crane_edit_save\") }}',
                        data: {
                            'craneId': \"{{ crane.id }}\",
                            'dataArray': dataArray,
                            'prefServicesToAdd': prefServicesToAdd,
                            'avServicesToAdd': avServicesToAdd,
                            'branchOfficesSelected': branchOfficesSelected,
                            'attachmentsToAdd': attachmentsToAdd,
                            'attachmentsToRemove': attachmentsToRemove,
                        },
                        type:\"POST\",
                        success: function(data){
                            if(data['status']) {
                                swal.fire({
                                    title: \"{{'detail_crane.save.success'|trans}}\",
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            } else {
                                swal.fire({
                                    title: data.message,
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        },
                        error:function(err){
                            swal.fire({
                                title: '{{ (\"modal.general.operation.error\")|trans }}',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
            {#* ############# #}

            {#* Ajax que obtiene la lista de ficheros adjuntos de la grúa #}
            \$.ajax({
                url:'{{ path('crane_attachments') }}',
                data: {
                    'craneId': \"{{ crane.id }}\"
                },
                type:\"POST\",
                success: function(data){
                    if(data.length) {
                        let html = \"\", fileExtension = \"\";
                        let imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                        {% if mode == \"read_only\" %}
                            \$.each(data, function (key, value) {
                                fileExtension = value[\"file_name\"].split('.').pop();
                                if(value[\"file_name\"].includes(\".pdf\")) {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"{{asset(\"media/file.png\")}}\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else if( imageExtensions.includes(fileExtension) ) {
                                    html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"{{asset(\"media/file_general.png\")}}\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                }
                            }); 
                        {% else %}
                            \$.each(data, function (key, value) {
                                fileExtension = value[\"file_name\"].split('.').pop();
                                if(value[\"file_name\"].includes(\".pdf\")) {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -20px;\"> <img src=\"{{asset(\"media/equis-azul.png\")}}\" class=\"delete_img_x\"> <img src=\"{{asset(\"media/file.png\")}}\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else if( imageExtensions.includes(fileExtension) ) {
                                    html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -37px;\"> <img src=\"{{asset(\"media/equis-azul.png\")}}\" class=\"delete_img_x\" style=\"top: 14px; left: 60px;\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -20px;\"> <img src=\"{{asset(\"media/equis-azul.png\")}}\" class=\"delete_img_x\"> <img src=\"{{asset(\"media/file_general.png\")}}\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                }
                            }); 
                        {% endif %}

                        \$(\"#attachments_panel_body\").prepend(html);

                        {% if mode == \"read_only\" %}
                            {#* Descarga de un fichero adjunto #}
                            \$(\".attachment_icon\").click(function() {
                                var attachmentId = \$(this).data(\"id\");
                                \$.ajax({
                                    url:'{{ path('download_attachment') }}',
                                    data: {
                                        'attachmentId': attachmentId
                                    },
                                    type:\"POST\",
                                    success: function(data){
                                        if (data.status){
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
                                        } else {
                                            swal.fire({
                                                title: '{{ (\"general.download.error\")|trans }}',
                                                html: '',
                                                icon: 'error',
                                                showConfirmButton: true
                                            });
                                        }
                                    },
                                    error:function(err){
                                        swal.fire({
                                            title: '{{ (\"general.download.error\")|trans }}',
                                            html: '',
                                            icon: 'error',
                                            showConfirmButton: true
                                        });
                                    }
                                });
                            });
                        {% else %}
                            {#* Borra fichero adjunto (Lo añade a \"attachmentsToRemove\") #}
                            \$(\".attachment_icon\").click(function() {
                                swal.fire({
                                    title: '',
                                    html: '{{\"modal.attachment.remove\"|trans}}',
                                    icon: 'warning',
                                    showConfirmButton: true,
                                    confirmButtonText: \"{{'modal.general.remove'|trans}}\",
                                    confirmButtonColor: \"red\",
                                    focusConfirm: false,
                                    allowEnterKey: false,
                                    showCancelButton: true,
                                    cancelButtonText: \"{{'general.cancel'|trans}}\"
                                }).then((result) => {
                                    if(result.isConfirmed) {
                                        attachmentsToRemove.push(\$(this).data(\"id\"));
                                        \$(this).remove();
                                    }
                                });
                            });
                        {% endif %}
                    }
                },
                error:function(err){
                    swal.fire({
                        title: '{{ (\"attachment.list.error\")|trans }}',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
            {#* ############################################################# #}

            {#* Importar fichero #}
            \$(\"#fileToImport\").dropzone({
                url: \"{{ path('preupload_attachment') }}\",
                addRemoveLinks: false,
                maxFilesize: 150, //MB
                autoProcessQueue: true, // ajuste cola
                timeout: 180000, /*milliseconds*/
                acceptedFiles: \".pdf, .jpg, .png, .jpeg, .txt, .PDF, .JPG, .PNG, .JPEG, .TXT\",
                maxFiles: 1,
                parallelUploads: 5,
                paramName: \"file\", // The name that will be used to transfer the file
                clickable: '.attachment_icon_import img',
                init: function(){
                    // config
                    this.options.dictRemoveFile = \"Delete\";

                    this.on(\"success\", function(file, responseText) {

                        auxHtml = '<div class=\"attachment_imported attachment_icon_general\" data-filename=\"'+ responseText.data[\"fileName\"] +'\" data-path=\"'+ responseText.data[\"filePath\"] +'\" style=\"margin-top: -20px;\"> <img src=\"{{asset(\"media/equis-azul.png\")}}\" class=\"delete_img_x\"> <img src=\"{{asset(\"media/file_imported.png\")}}\">';
                        auxHtml += '<div class=\"attachment_icon_text\"> <span>'+ responseText.data[\"fileName\"] +'</span> </div></div>';
                        \$(\"#attachments_panel_body\").prepend(auxHtml);

                        attachmentsToAdd.push({ \"fileName\": responseText.data[\"fileName\"], \"filePath\": responseText.data[\"filePath\"] });
                        
                        {#* Borra fichero adjunto (Lo borra de \"attachmentsToAdd\") #}
                        \$(\".attachment_imported\").click(function() {
                            swal.fire({
                                title: '',
                                html: '{{\"modal.attachment.remove\"|trans}}',
                                icon: 'warning',
                                showConfirmButton: true,
                                confirmButtonText: \"{{'modal.general.remove'|trans}}\",
                                confirmButtonColor: \"red\",
                                focusConfirm: false,
                                allowEnterKey: false,
                                showCancelButton: true,
                                cancelButtonText: \"{{'general.cancel'|trans}}\"
                            }).then((result) => {
                                if(result.isConfirmed) {
                                    for(const [index, elem] of attachmentsToAdd.entries()) {
                                        if (elem[\"fileName\"] == \$(this).data(\"filename\")) {
                                            attachmentsToAdd.splice(index, 1);
                                            \$(this).remove();
                                            break;
                                        }
                                    }
                                }
                            });
                        });
                    });
                    this.on('complete',function(file){
                        this.removeAllFiles();
                    });
                }
            });
            {#* ################ #}


            function reloadNewServiceChosen() {
                html2 = \"\";
                {% for service in collaboratorServices %}
                    html2 += '<option class=\"option_service\" data-id=\"{{ service.id }}\" value=\"{{ service.id }}\">{{ service.description }}</option>';
                {% endfor %}
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").empty();
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").append('<option value=\"\"> {{ \"detail_crane.input.placeholder.services\"|trans }} </option>');
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").append(html2);
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").trigger(\"chosen:updated\");
                \$(\".asitur_input_to_delete-img\").each(function() {
                    \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").find('option[data-id=\"'+\$(this).data(\"id\")+'\"]').remove();
                    \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").trigger(\"chosen:updated\");
                });
                \$(\"#new_prefService-chosen-select, #new_avService-chosen-select\").trigger(\"chosen:updated\");
            }
        
        });

    </script>
{% endblock %}", "frontend/collaborator/detailCrane.html.twig", "/var/www/rira_web/templates/frontend/collaborator/detailCrane.html.twig");
    }
}
