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

/* frontend/collaborator/detailOperator.html.twig */
class __TwigTemplate_29b466593b587df7f1e9c895e8ec98e604d2f7fcecd2b82437166ac9c5fa4ba6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailOperator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailOperator.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/detailOperator.html.twig", 1);
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

    <style>
        @media (max-width: 767px) {
            #operator_data_body_inner_row_div {
                display: flex;
                flex-direction: column-reverse;
                margin-top: 0;
            }

            #profile_img_div {
                right: 0;
                position: absolute;
            }
        }

        #changePasswordContent{
            display: none;
        }

        .new-button:hover {
            color: var(--main-blue);
        }

        .new-button:active {
            background-color: var(--main-blue);
            color: white;
        }

        .new-button:active img {
            filter: grayscale(100%) brightness(200%);
        }

        .new-button:disabled {
            border-color: var(--main-lightgrey) !important;
        }

        @media (max-width: 500px) {
            #profile_img_div {
                float: unset !important;
                position: relative;
            }
        }
    </style>
}

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.branch_offices"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.cranes"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.operators"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        ";
        // line 82
        echo "        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                ";
        // line 85
        echo "                <a class=\"go_back_link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators");
        echo "\"><i class=\"fa fa-2x fa-chevron-left\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.go_back_to_list"), "html", null, true);
        echo "</a>
                ";
        // line 87
        echo "                ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 87, $this->source); })()) == "read_only")) {
            // line 88
            echo "                    <form id=\"edit_form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_operator");
            echo "\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"operatorId\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                    </form>
                    <button type=\"button\" class=\"btn top_left-buttons edit-button\"> <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        } else {
            // line 94
            echo "                    <button disabled type=\"button\" class=\"btn top_left-buttons edit-button\" style=\"font-weight: bold; color: var(--main-blue); opacity: 1; filter: var(--filter-main-blue);\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
            echo "</button>
                ";
        }
        // line 96
        echo "                ";
        // line 97
        echo "                <button type=\"button\" class=\"btn top_left-buttons remove-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/basura-icono.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.remove"), "html", null, true);
        echo "</button>
                ";
        // line 99
        echo "                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 101
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 101, $this->source); })()) == "edit_allowed")) {
            // line 102
            echo "            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                ";
            // line 104
            echo "                <button id=\"save-button\" type=\"button\" class=\"btn filtering-buttons\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/save.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save")), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 107
        echo "        </div>
        ";
        // line 109
        echo "
        <hr id=\"datatable_hr\" class=\"datatable_hr\" style=\"margin-bottom: 20px;\">

        <!--Panel Datos de Operario-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"operator_data_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#operator_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.operator_data"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"operator_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div id=\"operator_data_body_inner_row_div\" class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-8 col-md-8 col-lg-6\">
                            ";
        // line 127
        echo "                            <div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"margin-bottom: 20px; margin-top: 20px;\">
                                <label for=\"reference-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.input.label.reference"), "html", null, true);
        echo "</label>
                                ";
        // line 129
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 129, $this->source); })()) == "read_only")) {
            // line 130
            echo "                                    <br/>
                                    <p class=\"labelGrey_16\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 131, $this->source); })()), "reference", [], "any", false, false, false, 131), "html", null, true);
            echo "</p>
                                ";
        } else {
            // line 133
            echo "                                    <input id=\"reference-input\" name=\"reference\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 133, $this->source); })()), "reference", [], "any", false, false, false, 133), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\">
                                ";
        }
        // line 135
        echo "                            </div>
                            ";
        // line 137
        echo "                            <div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"margin-bottom: 20px; margin-top: 20px;\">
                                <label for=\"mobile-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.input.label.mobile_phone"), "html", null, true);
        echo "</label>
                                ";
        // line 139
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 139, $this->source); })()) == "read_only")) {
            // line 140
            echo "                                    <div style=\"display: flex;\">
                                        <br/>
                                        <p class=\"labelGrey_16\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 142, $this->source); })()), "mobile", [], "any", false, false, false, 142), "html", null, true);
            echo "</p>

                                        <div style=\"margin-left: 20px;\">
                                            <div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
                                                ";
            // line 146
            if (((isset($context["smsDelivered"]) || array_key_exists("smsDelivered", $context) ? $context["smsDelivered"] : (function () { throw new RuntimeError('Variable "smsDelivered" does not exist.', 146, $this->source); })()) == true)) {
                // line 147
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check_revert.png"), "html", null, true);
                echo "\" width=\"24px\" height=\"24px\">
                                                    <span style=\"color: var(--main-green); margin-left: 15px;\">";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.sms.sent"), "html", null, true);
                echo "</span>
                                                ";
            } else {
                // line 150
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
                echo "\" width=\"24px\" height=\"24px\" style=\"filter: invert(20%) sepia(100%) saturate(6640%) hue-rotate(359deg) brightness(94%) contrast(118%);\">
                                                    <span style=\"color: red; margin-left: 15px;\">";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.sms.not_sent"), "html", null, true);
                echo "</span>
                                                ";
            }
            // line 153
            echo "                                            </div>
                                            <div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
                                                ";
            // line 155
            if (((isset($context["loginAfterModification"]) || array_key_exists("loginAfterModification", $context) ? $context["loginAfterModification"] : (function () { throw new RuntimeError('Variable "loginAfterModification" does not exist.', 155, $this->source); })()) == true)) {
                // line 156
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check_revert.png"), "html", null, true);
                echo "\" width=\"24px\" height=\"24px\">
                                                    <span style=\"color: var(--main-green); margin-left: 15px;\">";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.login.check"), "html", null, true);
                echo "</span>
                                                ";
            } else {
                // line 159
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
                echo "\" width=\"24px\" height=\"24px\" style=\"filter: invert(20%) sepia(100%) saturate(6640%) hue-rotate(359deg) brightness(94%) contrast(118%);\">
                                                    <span style=\"color: red; margin-left: 15px;\">";
                // line 160
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.login.check"), "html", null, true);
                echo "</span>
                                                ";
            }
            // line 162
            echo "                                            </div>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 166
            echo "                                        <input id=\"mobile-input\" name=\"mobile\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 166, $this->source); })()), "mobile", [], "any", false, false, false, 166), "html", null, true);
            echo "\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"20\">
                                ";
        }
        // line 168
        echo "                            </div>
                        </div>
                        ";
        // line 171
        echo "                        <div class=\"col-sm-4 col-md-4 col-lg-6\">
                            <input type=\"file\" id=\"profilePicToImport\" name=\"profilePic[]\" class=\"hidden\">
                            <div id=\"profile_img_div\" class=\"col-sm-6 col-md-2 col-lg-2 attachment_icon_img ";
        // line 173
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 173, $this->source); })()) == "edit_allowed")) {
            echo "profile_icon";
        }
        echo "\" style=\"float: right; margin: 10px 12px 5px 12px; cursor: default; padding: 0 !important;\">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Grúa asignada-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"assigned_crane_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#assigned_crane_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.assigned_crane"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"assigned_crane_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    ";
        // line 194
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 194, $this->source); })()) == "read_only")) {
            // line 195
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6 col-lg-6\" style=\"display: flex; flex-wrap: no-wrap;\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px; font-weight: normal;\">";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.available_cranes"), "html", null, true);
            echo ":</div>
                                <div style=\"display: flex; flex-direction: column; font-size: 16px; margin-left: 10px; font-weight: bold;\">
                                ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["operatorAvailableCranes"]) || array_key_exists("operatorAvailableCranes", $context) ? $context["operatorAvailableCranes"] : (function () { throw new RuntimeError('Variable "operatorAvailableCranes" does not exist.', 199, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["opAvCrane"]) {
                // line 200
                echo "                                    <li class=\"labelGrey_16\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 200), "reference", [], "any", false, false, false, 200), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opAvCrane'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md-6 col-lg-6\" style=\"display: flex; flex-wrap: no-wrap;\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px; font-weight: normal;\">";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.assigned_crane"), "html", null, true);
            echo ":</div>
                                <div style=\"display: flex; font-size: 16px; margin-left: 10px; font-weight: bold;\">
                                    ";
            // line 207
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 207, $this->source); })()), "crane", [], "any", false, false, false, 207))) {
                // line 208
                echo "                                        <span class=\"labelGrey_16\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.assigned_crane.placeholder"), "html", null, true);
                echo "</span>
                                    ";
            } else {
                // line 210
                echo "                                        <span class=\"labelGrey_16\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 210, $this->source); })()), "crane", [], "any", false, false, false, 210), "reference", [], "any", false, false, false, 210), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 212
            echo "                                </div>
                            </div>
                        </div>
                    ";
        } else {
            // line 216
            echo "                        <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                            <div class=\"row\" style=\"padding: 0; display: flex; align-items: baseline; flex-wrap: wrap;\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px;\">";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.assigned_crane.subtext"), "html", null, true);
            echo ":</div>
                                <div style=\"display: flex; align-items: center;\">
                                    <div style=\"display: flex; align-items: center; margin-left: 20px; margin-bottom: 20px;\">
                                        <label for=\"branchOffice-input\" class=\"filter_labels\" style=\"font-weight: bold; margin-right: 10px; margin-bottom: 0px; height: 35px;\">";
            // line 221
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.branch_office")), "html", null, true);
            echo ":</label>
                                        <select id=\"branchOffice-input\" name=\"branchOffice\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value=\"\"> ";
            // line 223
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.branch_office.placeholder"), "html", null, true);
            echo " </option>
                                            ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["branchOfficesList"]) || array_key_exists("branchOfficesList", $context) ? $context["branchOfficesList"] : (function () { throw new RuntimeError('Variable "branchOfficesList" does not exist.', 224, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
                // line 225
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 225), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 225), "html", null, true);
                echo " </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                                        </select>
                                    </div>
                                    <div style=\"display: flex; align-items: center; margin-left: 20px; margin-bottom: 20px;\">
                                        <label for=\"craneType-input\" class=\"filter_labels\" style=\"font-weight: bold; margin-right: 10px; margin-bottom: 0px; height: 35px;\">";
            // line 230
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.crane.type")), "html", null, true);
            echo ":</label>
                                        <select id=\"craneType-input\" name=\"craneType\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value=\"\"> ";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.crane_type.placeholder"), "html", null, true);
            echo " </option>
                                            ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["availableCraneTypesByBranchOffice"]) || array_key_exists("availableCraneTypesByBranchOffice", $context) ? $context["availableCraneTypesByBranchOffice"] : (function () { throw new RuntimeError('Variable "availableCraneTypesByBranchOffice" does not exist.', 233, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["craneType"]) {
                // line 234
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "id", [], "any", false, false, false, 234), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "description", [], "any", false, false, false, 234), "html", null, true);
                echo " </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            // line 242
            echo "                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <button disabled type=\"button\" class=\"btn top_left-buttons new-button\" style=\"border: 1px solid var(--main-blue); border-width: 2px !important;\"> <img src=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/icon-add.png"), "html", null, true);
            echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add"), "html", null, true);
            echo "</button>
                        </div>
                        ";
            // line 246
            echo "                        <div class=\"row\">
                            <table id=\"table_cranes\" class=\"table\">
                                <thead>
                                    <tr>
                                        <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                                        <th>";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.reference"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 252
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.plate"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.brand"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.model"), "html", null, true);
            echo "</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6 col-lg-6\">
                                <div class=\"labelGrey row\" style=\"margin-bottom: 20px; margin-top: 20px;\">";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.available_cranes"), "html", null, true);
            echo ":</div>
                                <div id=\"avCranesDivToAppend\" class=\"col-sm-12 col-md-6 col-lg-6\">

                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md-6 col-lg-6\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px; margin-top: 20px;\">";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.assigned_crane"), "html", null, true);
            echo ":</div>
                                <select id=\"assignedCrane-input\" name=\"assignedCrane\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.assigned_crane.placeholder"), "html", null, true);
            echo " </option>
                                    
                                </select>
                            </div>
                        </div>
                    ";
        }
        // line 275
        echo "                </div>
            </div>
        </div>

        <!--Panel Disponibilidad-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"operator_availability_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#operator_availability_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.operator_availability"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"operator_availability_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        ";
        // line 292
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 292, $this->source); })()), "operatorStatus", [], "any", false, false, false, 292), "id", [], "any", false, false, false, 292) == 1)) {
            // line 293
            echo "                            <div>
                                <span class=\"switch_span_off\" style=\"margin-right: 5px; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                <input class=\"check_operator_status switchery\" type=\"checkbox\" checked>
                                <span class=\"switch_span_on\" style=\"margin-left: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">ON</span>
                            </div>
                        ";
        } else {
            // line 299
            echo "                            <div>
                                <span class=\"switch_span_off\" style=\"margin-right: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                <input class=\"check_operator_status switchery\" type=\"checkbox\">
                                <span class=\"switch_span_on\" style=\"margin-left: 5px; vertical-align: middle; color: var(--main-grey);\">ON</span>
                            </div>
                        ";
        }
        // line 305
        echo "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 310
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 310, $this->source); })()) == "edit_allowed")) {
            // line 311
            echo "            <!--Panel Cambiar contraseña-->
            <div class=\"panel\">
                <!--Panel heading-->
                <div id=\"operator_password_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#operator_password_body\" data-toggle=\"collapse\">
                    <div class=\"panel-control\">
                        <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                    </div>
                    <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
            // line 318
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.operator_password"), "html", null, true);
            echo "</h3>
                </div>
                <!--Panel body-->
                <div id=\"operator_password_body\" class=\"collapse in\">
                    <div class=\"panel-body\">
                        <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                            <div class=\"col-sm-6 col-md-5 col-lg-3\">
                                <button id='btnChangePassword' class='btnDefaultMini' style='margin-bottom: 15px;'>";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.new_password"), "html", null, true);
            echo "</button>
                                <div id='changePasswordContent'>
                                    <div style='margin-bottom: 15px;'>
                                        <input id='password' type='password' name=\"password\" class='form-control filter_inputs data_input' style=\"width: 100%;\" placeholder='";
            // line 328
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.change_password"), "html", null, true);
            echo "' value=''/>
                                    </div>
                                    <div>
                                        <input id='password2' type='password' name=\"password2\" class='form-control filter_inputs data_input' style=\"width: 100%;\" placeholder='";
            // line 331
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.change_password_check"), "html", null, true);
            echo "' value=''/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 340
        echo "
        <!--Panel Anexo de documentos-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"attachments_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#attachments_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.attachments"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"attachments_body\" class=\"collapse in\">
                <input type=\"file\" id=\"fileToImport\" name=\"attachment[]\" class=\"hidden\">
                <div id=\"attachments_panel_body\" class=\"panel-body row\" style=\"display: flex; justify-content: flex-start; flex-wrap: wrap;\">
                    ";
        // line 354
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 354, $this->source); })()) == "edit_allowed")) {
            // line 355
            echo "                    <div id=\"import_file\" class=\"attachment_icon_img attachment_icon_import\">
                        <img src=\"";
            // line 356
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/import_file.png"), "html", null, true);
            echo "\">
                    </div>
                    ";
        }
        // line 359
        echo "                </div>
            </div>
        </div>

        <form id=\"save_redirect_form\" action=\"";
        // line 363
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_operator");
        echo "\" method=\"POST\" style=\"display: none;\">
            <input type=\"hidden\" name=\"operatorId\" value=\"";
        // line 364
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 364, $this->source); })()), "id", [], "any", false, false, false, 364), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"mode\" value=\"read_only\">
        </form>

    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 374
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 375
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var arrayChecked = [];
        var arrayCheckedReferences = [];
        var availableCranes = [];
        var assignedCrane = null;

        ";
        // line 383
        echo "        var attachmentsToAdd = [];
        var attachmentsToRemove = [];
        var modifiedProfileImage = null;

        \$(document).ready(function(){
            var time = null;
            var html2 = \"\";

            let newAvAuxHtml = \"\";
            ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operatorAvailableCranes"]) || array_key_exists("operatorAvailableCranes", $context) ? $context["operatorAvailableCranes"] : (function () { throw new RuntimeError('Variable "operatorAvailableCranes" does not exist.', 392, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opAvCrane"]) {
            // line 393
            echo "                availableCranes.push(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 393), "id", [], "any", false, false, false, 393), "html", null, true);
            echo "); 

                newAvAuxHtml = '<div class=\"avCrane\" style=\"margin-bottom: 17px; display: flex;\">';
                newAvAuxHtml += '<div id=\"";
            // line 396
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 396), "id", [], "any", false, false, false, 396), "html", null, true);
            echo "\" class=\"form-control asitur_input_to_delete\" style=\"font-size: 16px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 396), "reference", [], "any", false, false, false, 396), "html", null, true);
            echo "</div>';
                newAvAuxHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                newAvAuxHtml += '<img class=\"asitur_input_to_delete-img av_crane_to_delete\" data-id=\"";
            // line 398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 398), "id", [], "any", false, false, false, 398), "html", null, true);
            echo "\" data-reference=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 398), "reference", [], "any", false, false, false, 398), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
            echo "\" width=\"24px\" height=\"24px\">';
                newAvAuxHtml += '</div></div>';
                \$(\"#avCranesDivToAppend\").append(newAvAuxHtml);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opAvCrane'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "
            ";
        // line 403
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 403, $this->source); })()), "crane", [], "any", false, false, false, 403))) {
            // line 404
            echo "                assignedCrane = null;
            ";
        } else {
            // line 406
            echo "                assignedCrane = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 406, $this->source); })()), "crane", [], "any", false, false, false, 406), "id", [], "any", false, false, false, 406), "html", null, true);
            echo ";
            ";
        }
        // line 408
        echo "
            reloadAssignedCraneChosen();

            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_operator_status'));

            if( \"";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 418, $this->source); })()), "html", null, true);
        echo "\" == \"read_only\" ) {
                switch_elems.forEach(function(html){
                    new Switchery(html, {disabled: true, 
                                         disabledOpacity: 1,
                                         color: \"var(--main-blue)\",
                                         secondaryColor: '#cdd3db'
                                        });
                });
            } else {
                switch_elems.forEach(function(html){
                    new Switchery(html, {disabled: false,
                                         color: \"var(--main-blue)\",
                                         secondaryColor: '#cdd3db'
                                        });
                });
            }

            \$(\".check_operator_status\").change(\"checked\", function() {
                if( \$(this).prop(\"checked\") ) {
                    \$(\".switch_span_on\").css({\"font-weight\": \"bold\"});
                    \$(\".switch_span_off\").css({\"font-weight\": \"normal\"});
                } else {
                    \$(\".switch_span_on\").css({\"font-weight\": \"normal\"});
                    \$(\".switch_span_off\").css({\"font-weight\": \"bold\"});
                }
            });

            \$('#btnChangePassword').click(function(){
                \$('#btnChangePassword').fadeOut(function(){
                    \$('#changePasswordContent').fadeIn();
                });
            });

            \$(\"#branchOffice-input\").chosen({width: \"220px !important\"});
            \$(\"#craneType-input\").chosen({width: \"220px !important\"});
            \$(\"#assignedCrane-input\").chosen({width: \"220px !important\"});

            \$('#branchOffice-input').on('change', function(){
                \$.ajax({
                    url:'";
        // line 457
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operator_crane_types_chosen_list");
        echo "',
                    data: {
                        'branchOfficeId': \$(this).val()
                    },
                    type:\"POST\",
                    success: function(json){
                        if (json.status){
                            \$(\"#craneType-input\").empty();
                            \$(\"#craneType-input\").append('<option value=\"\"> ";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.crane_type.placeholder"), "html", null, true);
        echo " </option>');
                            \$.each(json.data, function (idx, obj) {
                                \$(\"#craneType-input\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                            });
                            \$(\"#craneType-input\").trigger(\"chosen:updated\");
                            reloadDataTable();
                        } else {
                            swal.fire({
                                title: '";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.crane_type.error"), "html", null, true);
        echo "',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    },
                    error: function(err){
                        swal.fire({
                            title: '";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.crane_type.error"), "html", null, true);
        echo "',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            });

            \$('#craneType-input').on('change', function(){
                reloadDataTable();
            });

            createTable();

            ";
        // line 498
        echo "            let htmlProfilePicture = '<img class=\"profile_img_common\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/empty_profile_picture.png"), "html", null, true);
        echo "\">';

            ";
        // line 500
        if (((isset($context["operatorProfileImage"]) || array_key_exists("operatorProfileImage", $context) ? $context["operatorProfileImage"] : (function () { throw new RuntimeError('Variable "operatorProfileImage" does not exist.', 500, $this->source); })()) != null)) {
            // line 501
            echo "                let fileName = '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operatorProfileImage"]) || array_key_exists("operatorProfileImage", $context) ? $context["operatorProfileImage"] : (function () { throw new RuntimeError('Variable "operatorProfileImage" does not exist.', 501, $this->source); })()), "fileName", [], "any", false, false, false, 501), "html", null, true);
            echo "';
                let fileExtension = fileName.split('.').pop();
                let imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];

                if( imageExtensions.includes(fileExtension) ) {

                    htmlProfilePicture = '<img class=\"profile_img profile_img_common\" src=\"data:image/'+ fileExtension +';base64, '+ '";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operatorProfileImage"]) || array_key_exists("operatorProfileImage", $context) ? $context["operatorProfileImage"] : (function () { throw new RuntimeError('Variable "operatorProfileImage" does not exist.', 507, $this->source); })()), "fileData", [], "any", false, false, false, 507), "html", null, true);
            echo "' +'\" style=\"cursor: pointer; margin-bottom: 0 !important;\" data-id=\"'+ '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operatorProfileImage"]) || array_key_exists("operatorProfileImage", $context) ? $context["operatorProfileImage"] : (function () { throw new RuntimeError('Variable "operatorProfileImage" does not exist.', 507, $this->source); })()), "id", [], "any", false, false, false, 507), "html", null, true);
            echo "' +'\">';
                }
            ";
        }
        // line 510
        echo "                htmlProfilePicture += '<div class=\"profile_img_camera_div\" style=\"width: 120px; height: 120px; display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; margin: 0px 15px; background-color: lightgrey; opacity: 0.75; border-radius: 5px; visibility: hidden; cursor: pointer;\"><img class=\"profile_img_camera\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/camara.png"), "html", null, true);
        echo "\" style=\"width: 40px; height: 40px; margin-bottom: 0;\"></div>';

            \$(\"#profile_img_div\").append(htmlProfilePicture);
            ";
        // line 514
        echo "
            ";
        // line 516
        echo "            \$(\"#data_management_li\").addClass(\"active\");
            ";
        // line 518
        echo "
            ";
        // line 520
        echo "            \$(\".edit-button\").click(function() {
                \$(\"#edit_form\").submit();
            });
            ";
        // line 524
        echo "
            ";
        // line 526
        echo "            \$(\".remove-button\").click(function() {
                swal.fire({
                    title: '',
                    html: '";
        // line 529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.remove.individual"), "html", null, true);
        echo "',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"";
        // line 532
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove.confirm"), "html", null, true);
        echo "\",
                    confirmButtonColor: \"red\",
                    focusConfirm: false,
                    allowEnterKey: false,
                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'";
        // line 541
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_delete");
        echo "',
                            data: {
                                'arrayChecked': ['";
        // line 543
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 543, $this->source); })()), "id", [], "any", false, false, false, 543), "html", null, true);
        echo "']
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.success"), "html", null, true);
        echo "',
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: false
                                    });
                                    setTimeout(function() {
                                        window.location.replace(\"";
        // line 555
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators");
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
        // line 568
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
        // line 579
        echo "
            ";
        // line 581
        echo "            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'";
        // line 583
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_operator_export_excel");
        echo "',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'operatorId': \"";
        // line 587
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 587, $this->source); })()), "id", [], "any", false, false, false, 587), "html", null, true);
        echo "\",
                    },
                    type:\"POST\",
                    success: function(data){
                        if (data.status){
                            swal.fire({
                                title: '";
        // line 593
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
        // line 603
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
        // line 615
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
        // line 624
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
        // line 633
        echo "
            ";
        // line 635
        echo "            \$(\"#save-button\").click(function() {

                if( \$.trim(\$(\"#reference-input\").val()) == \"\" ||
                    \$.trim(\$(\"#mobile-input\").val())    == \"\"
                ) {  
                    swal.fire({
                        title: '";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.allfields.mandatory"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else if( (\$(\"#password\").val() != \"\" || \$(\"#password2\").val() != \"\") && 
                            \$(\"#password\").val() != \$(\"#password2\").val() ) {
                    swal.fire({
                        title: '";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.not_same"), "html", null, true);
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
        // line 662
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_operator_edit_save");
        echo "',
                        data: {
                            'operatorId': \"";
        // line 664
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 664, $this->source); })()), "id", [], "any", false, false, false, 664), "html", null, true);
        echo "\",
                            'dataArray': dataArray,
                            'availabilityStatus': \$(\".check_operator_status\").prop(\"checked\"),
                            'assignedCraneId': assignedCrane,
                            'availableCranes': availableCranes,
                            'attachmentsToAdd': attachmentsToAdd,
                            'attachmentsToRemove': attachmentsToRemove,
                            'modifiedProfileImage': modifiedProfileImage
                        },
                        type:\"POST\",
                        success: function(data){
                            if(data['status']) {
                                swal.fire({
                                    title: \"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_crane.save.success"), "html", null, true);
        echo "\",
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        \$(\"#save_redirect_form\").submit();
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
        // line 697
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
        // line 707
        echo "
            ";
        // line 709
        echo "            \$(\".new-button\").click(function() {
                let newAvCraneHtml = \"\";

                \$.each(arrayChecked, function (key, value) {
                    const index = availableCranes.indexOf(value);
                    if(index == -1) {
                        availableCranes.push(value);

                        newAvCraneHtml = '<div class=\"avCrane\" style=\"margin-bottom: 17px; display: flex;\">';
                        newAvCraneHtml += '<div id=\"'+ value +'\" class=\"form-control asitur_input_to_delete\" style=\"font-size: 16px;\">'+ arrayCheckedReferences[key] +'</div>';
                        newAvCraneHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                        newAvCraneHtml += '<img class=\"asitur_input_to_delete-img av_crane_to_delete\" data-id=\"'+ value +'\" data-reference=\"'+ arrayCheckedReferences[key] +'\" src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
        echo "\" width=\"24px\" height=\"24px\">';
                        newAvCraneHtml += '</div></div>';
                        \$(\"#avCranesDivToAppend\").append(newAvCraneHtml);
                    }  
                });

                \$(\".av_crane_to_delete\").click(function(){
                    \$(this).closest(\".avCrane\").remove();

                    const index = availableCranes.indexOf(\$(this).data(\"id\"));
                    if(index > -1) {
                        availableCranes.splice(index, 1);
                    }
                    reloadAssignedCraneChosen();
                });
                reloadAssignedCraneChosen();
            });
            ";
        // line 738
        echo "
            ";
        // line 740
        echo "            \$(\".av_crane_to_delete\").click(function(){
                \$(this).closest(\".avCrane\").remove();

                const index = availableCranes.indexOf(\$(this).data(\"id\"));
                if(index > -1) {
                    availableCranes.splice(index, 1);
                }
                reloadAssignedCraneChosen();
            });
            ";
        // line 750
        echo "
            ";
        // line 752
        echo "            \$(\"#assignedCrane-input\").change(function(){
                assignedCrane = Number(\$(this).val());
            });
            ";
        // line 756
        echo "
            ";
        // line 757
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 757, $this->source); })()) == "read_only")) {
            // line 758
            echo "                ";
            // line 759
            echo "                \$(\".attachment_icon, .profile_img\").click(function() {
                    var attachmentId = \$(this).data(\"id\");
                    \$.ajax({
                        url:'";
            // line 762
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
            // line 773
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
            // line 785
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
            // line 794
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
            // line 803
            echo "                ";
            // line 804
            echo "                \$(\".attachment_icon\").click(function() {
                    swal.fire({
                        title: '',
                        html: '";
            // line 807
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attachment.remove"), "html", null, true);
            echo "',
                        icon: 'warning',
                        showConfirmButton: true,
                        confirmButtonText: \"";
            // line 810
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove"), "html", null, true);
            echo "\",
                        confirmButtonColor: \"red\",
                        focusConfirm: false,
                        allowEnterKey: false,
                        showCancelButton: true,
                        cancelButtonText: \"";
            // line 815
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
            // line 825
            echo "                \$(\"#profile_img_div\").mouseenter(function(){
                    \$(\".profile_img_camera_div\").css({\"visibility\": \"visible\"});
                });
                \$(\"#profile_img_div\").mouseleave(function(){
                    \$(\".profile_img_camera_div\").css({\"visibility\": \"hidden\"});
                });

            ";
        }
        // line 833
        echo "
            ";
        // line 835
        echo "            \$.ajax({
                url:'";
        // line 836
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operator_attachments");
        echo "',
                data: {
                    'operatorId': \"";
        // line 838
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 838, $this->source); })()), "id", [], "any", false, false, false, 838), "html", null, true);
        echo "\"
                },
                type:\"POST\",
                success: function(data){
                    if(data.length) {
                        let html = \"\", fileExtension = \"\";
                        let imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                        ";
        // line 845
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 845, $this->source); })()) == "read_only")) {
            // line 846
            echo "                            \$.each(data, function (key, value) {
                                fileExtension = value[\"file_name\"].split('.').pop();
                                if(value[\"file_name\"].includes(\".pdf\")) {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"";
            // line 849
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else if( imageExtensions.includes(fileExtension) ) {
                                    html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"";
            // line 855
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file_general.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                }
                            }); 
                        ";
        } else {
            // line 860
            echo "                            \$.each(data, function (key, value) {
                                fileExtension = value[\"file_name\"].split('.').pop();
                                if(value[\"file_name\"].includes(\".pdf\")) {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -20px;\"> <img src=\"";
            // line 863
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
            echo "\" class=\"delete_img_x\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else if( imageExtensions.includes(fileExtension) ) {
                                    html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -37px;\"> <img src=\"";
            // line 866
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
            echo "\" class=\"delete_img_x\" style=\"top: 14px; left: 60px;\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                } else {
                                    html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\" style=\"margin-top: -20px;\"> <img src=\"";
            // line 869
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
            echo "\" class=\"delete_img_x\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file_general.png"), "html", null, true);
            echo "\">';
                                    html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div></div>';
                                }
                            }); 
                        ";
        }
        // line 874
        echo "
                        \$(\"#attachments_panel_body\").prepend(html);

                        ";
        // line 877
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 877, $this->source); })()) == "read_only")) {
            // line 878
            echo "                            ";
            // line 879
            echo "                            \$(\".attachment_icon\").click(function() {
                                var attachmentId = \$(this).data(\"id\");
                                \$.ajax({
                                    url:'";
            // line 882
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
            // line 893
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
            // line 905
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
            // line 914
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
            // line 923
            echo "                            ";
            // line 924
            echo "                            \$(\".attachment_icon\").click(function() {
                                swal.fire({
                                    title: '',
                                    html: '";
            // line 927
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attachment.remove"), "html", null, true);
            echo "',
                                    icon: 'warning',
                                    showConfirmButton: true,
                                    confirmButtonText: \"";
            // line 930
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove"), "html", null, true);
            echo "\",
                                    confirmButtonColor: \"red\",
                                    focusConfirm: false,
                                    allowEnterKey: false,
                                    showCancelButton: true,
                                    cancelButtonText: \"";
            // line 935
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
        // line 944
        echo "                    }
                },
                error:function(err){
                    swal.fire({
                        title: '";
        // line 948
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attachment.list.error"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
            ";
        // line 956
        echo "
            ";
        // line 958
        echo "            ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 958, $this->source); })()) == "edit_allowed")) {
            // line 959
            echo "                \$(\"#fileToImport\").dropzone({
                    url: \"";
            // line 960
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
                    clickable: '.attachment_icon_import',
                    init: function(){
                        // config
                        this.options.dictRemoveFile = \"Delete\";

                        this.on(\"success\", function(file, responseText) {

                            auxHtml = '<div class=\"attachment_imported attachment_icon_general\" data-filename=\"'+ responseText.data[\"fileName\"] +'\" data-path=\"'+ responseText.data[\"filePath\"] +'\" style=\"margin-top: -20px;\"> <img src=\"";
            // line 976
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis-azul.png"), "html", null, true);
            echo "\" class=\"delete_img_x\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file_imported.png"), "html", null, true);
            echo "\">';
                            auxHtml += '<div class=\"attachment_icon_text\"> <span>'+ responseText.data[\"fileName\"] +'</span> </div></div>';
                            \$(\"#attachments_panel_body\").prepend(auxHtml);

                            attachmentsToAdd.push({ \"fileName\": responseText.data[\"fileName\"], \"filePath\": responseText.data[\"filePath\"] });
                            
                            ";
            // line 983
            echo "                            \$(\".attachment_imported\").click(function() {
                                swal.fire({
                                    title: '',
                                    html: '";
            // line 986
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.attachment.remove"), "html", null, true);
            echo "',
                                    icon: 'warning',
                                    showConfirmButton: true,
                                    confirmButtonText: \"";
            // line 989
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove"), "html", null, true);
            echo "\",
                                    confirmButtonColor: \"red\",
                                    focusConfirm: false,
                                    allowEnterKey: false,
                                    showCancelButton: true,
                                    cancelButtonText: \"";
            // line 994
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
        }
        // line 1014
        echo "            ";
        // line 1015
        echo "
            ";
        // line 1017
        echo "            ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 1017, $this->source); })()) == "edit_allowed")) {
            // line 1018
            echo "                \$(\"#profilePicToImport\").dropzone({
                    url: \"";
            // line 1019
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preupload_operator_profile_picture");
            echo "\",
                    addRemoveLinks: false,
                    maxFilesize: 150, //MB
                    autoProcessQueue: true, // ajuste cola
                    timeout: 180000, /*milliseconds*/
                    acceptedFiles: \".jpg, .png, .jpeg, .JPG, .PNG, .JPEG\",
                    maxFiles: 1,
                    parallelUploads: 5,
                    paramName: \"opProfileImage\", // The name that will be used to transfer the file
                    clickable: '.profile_img_camera_div',
                    init: function(){
                        // config
                        this.options.dictRemoveFile = \"Delete\";

                        this.on(\"success\", function(opProfileImg, responseText) {
                            \$(\".profile_img_common\").attr('src', \"data:\"+ responseText.data[\"type\"] +\";base64, \"+ responseText.data[\"content\"]);
                            modifiedProfileImage = {\"fileName\": responseText.data[\"fileName\"], \"filePath\": responseText.data[\"filePath\"] };
                            if(!\$(\".profile_img_common\").hasClass(\"profile_img\")) {
                                \$(\".profile_img_common\").addClass(\"profile_img\");
                            }
                        });
                        this.on('complete',function(file){
                            this.removeAllFiles();
                        });
                    }
                });
            ";
        }
        // line 1046
        echo "            ";
        // line 1047
        echo "
            \$('.checkboxFullList').change(function(){
                var active = false;
                if (\$(this).is(\":checked\")) {
                    active = true;
                }
                
                \$('.checkboxCranes').each(function(){
                    \$(this).prop('checked', active);
                    \$(this).trigger('update');
                    \$(this).trigger('change');
                });// change

                if(arrayChecked.length > 0) {
                    \$(\".new-button\").removeAttr(\"disabled\");
                } else {
                    \$(\".new-button\").attr(\"disabled\",\"disabled\");
                }
            });

        }); // document ready

        ";
        // line 1070
        echo "        function createTable() {
            tableClients = \$('#table_cranes').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4] },
                    { orderable: false, targets: [0] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 1082
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.lengthMenu.all"), "html", null, true);
        echo "\"]
                ],
                responsive: false,
                autoWidth: false,
                scrollX: true,
                processing: false,
                serverSide: true,
                pagingType: \"full_numbers\",
                language: {
                    \"sProcessing\": \"";
        // line 1091
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 1092
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 1093
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 1094
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 1095
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 1096
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 1097
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 1099
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 1102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\",
                    \"oPaginate\": {
                        \"sFirst\": \"<<\",
                        \"sLast\": \">>\",
                        \"sNext\": \">\",
                        \"sPrevious\": \"<\",
                    },
                    \"oAria\": {
                        \"sSortAscending\": \": ";
        // line 1110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 1111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 1115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_available_cranes_table");
        echo "\",
                    method: 'POST',
                    data: {

                    }
                },
                initComplete: function() {
                    // Enable THEAD scroll bars
                    \$('.dataTables_scrollHead').css('overflow', 'auto');

                    // Sync THEAD scrolling with TBODY
                    \$('.dataTables_scrollHead').on('scroll', function () {
                        \$('.dataTables_scrollBody').scrollLeft(\$(this).scrollLeft());
                    });
                },
                drawCallback: function() {
                    // check checked
                    \$('.checkboxCranes').each(function(){
                        var crane_id = \$(this).data('crane');
                        var index = arrayChecked.indexOf(crane_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxCranes').change(function(){
                        var crane_id = \$(this).data('crane');
                        var crane_reference = \$(this).data('reference');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(crane_id)) {
                                arrayChecked.push(crane_id);
                                arrayCheckedReferences.push(crane_reference);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        } else {
                            var index = arrayChecked.indexOf(crane_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                                arrayCheckedReferences.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        if(arrayChecked.length > 0) {
                            \$(\".new-button\").removeAttr(\"disabled\");
                        } else {
                            \$(\".new-button\").attr(\"disabled\",\"disabled\");
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxCranes imgCheckbox' data-crane='\"+data.id+\"' data-reference='\"+data.reference+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'plate'},
                    {data: 'brand'},
                    {data: 'model'}
                ]
            });
        }
        ";
        // line 1183
        echo "
        ";
        // line 1185
        echo "        let reloadDataTable = function() {
            var fullFilters = {
                'branchOfficeId': \$(\"#branchOffice-input\").val(),
                'craneTypeId': \$(\"#craneType-input\").val()
            }

            \$(\"#table_cranes\").DataTable().search(JSON.stringify(fullFilters)).draw();

            ";
        // line 1194
        echo "            arrayChecked = [];
            arrayCheckedReferences = [];
            \$(\".new-button\").attr('disabled', 'disabled');

        }
        ";
        // line 1200
        echo "
        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 1203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 1204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"";
        // line 1208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 1209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });
        }

        function reloadAssignedCraneChosen() {
            html2 = '<option value=\"\">";
        // line 1214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.assigned_crane.placeholder"), "html", null, true);
        echo "</option>';

            \$(\".asitur_input_to_delete-img\").each(function() {
                html2 += '<option class=\"option_crane\" data-id=\"'+ \$(this).data(\"id\") +'\" value=\"'+ \$(this).data(\"id\") +'\">'+ \$(this).data(\"reference\") +'</option>';
            });

            \$(\"#assignedCrane-input\").empty();
            \$(\"#assignedCrane-input\").append(html2);

            if(assignedCrane != null) {
                if(availableCranes.includes(assignedCrane)) { 
                    \$(\"#assignedCrane-input\").val(assignedCrane);
                }
            } else {
                \$(\"#assignedCrane-input\").val(\"\");
            }

            \$(\"#assignedCrane-input\").trigger(\"chosen:updated\");
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/detailOperator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1972 => 1214,  1964 => 1209,  1960 => 1208,  1953 => 1204,  1949 => 1203,  1944 => 1200,  1937 => 1194,  1927 => 1185,  1924 => 1183,  1854 => 1115,  1847 => 1111,  1843 => 1110,  1832 => 1102,  1826 => 1099,  1821 => 1097,  1817 => 1096,  1813 => 1095,  1809 => 1094,  1805 => 1093,  1801 => 1092,  1797 => 1091,  1785 => 1082,  1771 => 1070,  1747 => 1047,  1745 => 1046,  1715 => 1019,  1712 => 1018,  1709 => 1017,  1706 => 1015,  1704 => 1014,  1681 => 994,  1673 => 989,  1667 => 986,  1662 => 983,  1651 => 976,  1632 => 960,  1629 => 959,  1626 => 958,  1623 => 956,  1613 => 948,  1607 => 944,  1595 => 935,  1587 => 930,  1581 => 927,  1576 => 924,  1574 => 923,  1562 => 914,  1550 => 905,  1535 => 893,  1521 => 882,  1516 => 879,  1514 => 878,  1512 => 877,  1507 => 874,  1497 => 869,  1491 => 866,  1483 => 863,  1478 => 860,  1470 => 855,  1461 => 849,  1456 => 846,  1454 => 845,  1444 => 838,  1439 => 836,  1436 => 835,  1433 => 833,  1423 => 825,  1411 => 815,  1403 => 810,  1397 => 807,  1392 => 804,  1390 => 803,  1378 => 794,  1366 => 785,  1351 => 773,  1337 => 762,  1332 => 759,  1330 => 758,  1328 => 757,  1325 => 756,  1320 => 752,  1317 => 750,  1306 => 740,  1303 => 738,  1283 => 720,  1270 => 709,  1267 => 707,  1255 => 697,  1232 => 677,  1216 => 664,  1211 => 662,  1195 => 649,  1184 => 641,  1176 => 635,  1173 => 633,  1162 => 624,  1150 => 615,  1135 => 603,  1122 => 593,  1113 => 587,  1106 => 583,  1102 => 581,  1099 => 579,  1086 => 568,  1070 => 555,  1061 => 549,  1052 => 543,  1047 => 541,  1040 => 537,  1032 => 532,  1026 => 529,  1021 => 526,  1018 => 524,  1013 => 520,  1010 => 518,  1007 => 516,  1004 => 514,  997 => 510,  989 => 507,  979 => 501,  977 => 500,  971 => 498,  953 => 482,  941 => 473,  930 => 465,  919 => 457,  877 => 418,  869 => 413,  865 => 412,  859 => 408,  853 => 406,  849 => 404,  847 => 403,  844 => 402,  830 => 398,  823 => 396,  816 => 393,  812 => 392,  801 => 383,  790 => 375,  780 => 374,  761 => 364,  757 => 363,  751 => 359,  745 => 356,  742 => 355,  740 => 354,  731 => 348,  721 => 340,  709 => 331,  703 => 328,  697 => 325,  687 => 318,  678 => 311,  676 => 310,  669 => 305,  661 => 299,  653 => 293,  651 => 292,  642 => 286,  629 => 275,  620 => 269,  615 => 267,  606 => 261,  596 => 254,  592 => 253,  588 => 252,  584 => 251,  577 => 246,  570 => 243,  567 => 242,  560 => 236,  549 => 234,  545 => 233,  541 => 232,  536 => 230,  531 => 227,  520 => 225,  516 => 224,  512 => 223,  507 => 221,  501 => 218,  497 => 216,  491 => 212,  485 => 210,  479 => 208,  477 => 207,  472 => 205,  467 => 202,  458 => 200,  454 => 199,  449 => 197,  445 => 195,  443 => 194,  435 => 189,  414 => 173,  410 => 171,  406 => 168,  400 => 166,  394 => 162,  389 => 160,  384 => 159,  379 => 157,  374 => 156,  372 => 155,  368 => 153,  363 => 151,  358 => 150,  353 => 148,  348 => 147,  346 => 146,  339 => 142,  335 => 140,  333 => 139,  329 => 138,  326 => 137,  323 => 135,  317 => 133,  312 => 131,  309 => 130,  307 => 129,  303 => 128,  300 => 127,  290 => 119,  278 => 109,  275 => 107,  266 => 104,  263 => 102,  261 => 101,  253 => 99,  246 => 97,  244 => 96,  236 => 94,  229 => 92,  223 => 89,  218 => 88,  215 => 87,  208 => 85,  204 => 82,  189 => 69,  181 => 66,  173 => 63,  165 => 57,  155 => 56,  98 => 8,  94 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
{{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-data_management.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-asitur_datatable.css') }}\">

    <style>
        @media (max-width: 767px) {
            #operator_data_body_inner_row_div {
                display: flex;
                flex-direction: column-reverse;
                margin-top: 0;
            }

            #profile_img_div {
                right: 0;
                position: absolute;
            }
        }

        #changePasswordContent{
            display: none;
        }

        .new-button:hover {
            color: var(--main-blue);
        }

        .new-button:active {
            background-color: var(--main-blue);
            color: white;
        }

        .new-button:active img {
            filter: grayscale(100%) brightness(200%);
        }

        .new-button:disabled {
            border-color: var(--main-lightgrey) !important;
        }

        @media (max-width: 500px) {
            #profile_img_div {
                float: unset !important;
                position: relative;
            }
        }
    </style>
}

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
                <a class=\"nav-link\" href=\"{{ path('cranes') }}\">{{\"data_management.tab.cranes\"|trans}}</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">{{\"data_management.tab.operators\"|trans}}</a>
                <hr class=\"tab-active-hr\">
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
                <a class=\"go_back_link\" href=\"{{ path('operators') }}\"><i class=\"fa fa-2x fa-chevron-left\"></i>{{\"general.go_back_to_list\"|trans}}</a>
                {# Editar #}
                {% if mode == \"read_only\" %}
                    <form id=\"edit_form\" action=\"{{ path('detail_operator') }}\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"operatorId\" value=\"{{ operator.id }}\">
                        <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                    </form>
                    <button type=\"button\" class=\"btn top_left-buttons edit-button\"> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {% else %}
                    <button disabled type=\"button\" class=\"btn top_left-buttons edit-button\" style=\"font-weight: bold; color: var(--main-blue); opacity: 1; filter: var(--filter-main-blue);\"> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {% endif %}
                {# Eliminar #}
                <button type=\"button\" class=\"btn top_left-buttons remove-button\"> <img src=\"{{asset(\"media/datatables/basura-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.remove')|trans}}</button>
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

        <!--Panel Datos de Operario-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"operator_data_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#operator_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_operator.operator_data'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"operator_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div id=\"operator_data_body_inner_row_div\" class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-8 col-md-8 col-lg-6\">
                            {# Identificador #}
                            <div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"margin-bottom: 20px; margin-top: 20px;\">
                                <label for=\"reference-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_operator.input.label.reference\"|trans}}</label>
                                {% if mode == \"read_only\" %}
                                    <br/>
                                    <p class=\"labelGrey_16\">{{ operator.reference }}</p>
                                {% else %}
                                    <input id=\"reference-input\" name=\"reference\" value=\"{{ operator.reference }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"50\">
                                {% endif %}
                            </div>
                            {# Móvil #}
                            <div class=\"col-sm-6 col-md-6 col-lg-6\" style=\"margin-bottom: 20px; margin-top: 20px;\">
                                <label for=\"mobile-input\" class=\"asitur_label regular_label\" style=\"margin-bottom: 17px;\">{{\"detail_operator.input.label.mobile_phone\"|trans}}</label>
                                {% if mode == \"read_only\" %}
                                    <div style=\"display: flex;\">
                                        <br/>
                                        <p class=\"labelGrey_16\">{{ operator.mobile }}</p>

                                        <div style=\"margin-left: 20px;\">
                                            <div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
                                                {% if smsDelivered == true %}
                                                    <img src=\"{{asset(\"media/check_revert.png\")}}\" width=\"24px\" height=\"24px\">
                                                    <span style=\"color: var(--main-green); margin-left: 15px;\">{{\"detail_operator.sms.sent\"|trans}}</span>
                                                {% else %}
                                                    <img src=\"{{asset(\"media/equis.png\")}}\" width=\"24px\" height=\"24px\" style=\"filter: invert(20%) sepia(100%) saturate(6640%) hue-rotate(359deg) brightness(94%) contrast(118%);\">
                                                    <span style=\"color: red; margin-left: 15px;\">{{\"detail_operator.sms.not_sent\"|trans}}</span>
                                                {% endif %}
                                            </div>
                                            <div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
                                                {% if loginAfterModification == true %}
                                                    <img src=\"{{asset(\"media/check_revert.png\")}}\" width=\"24px\" height=\"24px\">
                                                    <span style=\"color: var(--main-green); margin-left: 15px;\">{{\"detail_operator.login.check\"|trans}}</span>
                                                {% else %}
                                                    <img src=\"{{asset(\"media/equis.png\")}}\" width=\"24px\" height=\"24px\" style=\"filter: invert(20%) sepia(100%) saturate(6640%) hue-rotate(359deg) brightness(94%) contrast(118%);\">
                                                    <span style=\"color: red; margin-left: 15px;\">{{\"detail_operator.login.check\"|trans}}</span>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                {% else %}
                                        <input id=\"mobile-input\" name=\"mobile\" value=\"{{ operator.mobile }}\" type=\"text\" class=\"form-control asitur_input data_input\" spellcheck=\"false\" maxlength=\"20\">
                                {% endif %}
                            </div>
                        </div>
                        {# Foto perfil #}
                        <div class=\"col-sm-4 col-md-4 col-lg-6\">
                            <input type=\"file\" id=\"profilePicToImport\" name=\"profilePic[]\" class=\"hidden\">
                            <div id=\"profile_img_div\" class=\"col-sm-6 col-md-2 col-lg-2 attachment_icon_img {% if mode == \"edit_allowed\" %}profile_icon{% endif %}\" style=\"float: right; margin: 10px 12px 5px 12px; cursor: default; padding: 0 !important;\">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Grúa asignada-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"assigned_crane_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#assigned_crane_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_operator.assigned_crane'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"assigned_crane_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    {% if mode == \"read_only\" %}
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6 col-lg-6\" style=\"display: flex; flex-wrap: no-wrap;\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px; font-weight: normal;\">{{\"detail_operator.available_cranes\"|trans}}:</div>
                                <div style=\"display: flex; flex-direction: column; font-size: 16px; margin-left: 10px; font-weight: bold;\">
                                {% for opAvCrane in operatorAvailableCranes %}
                                    <li class=\"labelGrey_16\">{{opAvCrane.crane.reference}}</li>
                                {% endfor %}
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md-6 col-lg-6\" style=\"display: flex; flex-wrap: no-wrap;\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px; font-weight: normal;\">{{\"detail_operator.assigned_crane\"|trans}}:</div>
                                <div style=\"display: flex; font-size: 16px; margin-left: 10px; font-weight: bold;\">
                                    {% if operator.crane is null %}
                                        <span class=\"labelGrey_16\">{{\"detail_operator.select.assigned_crane.placeholder\"|trans}}</span>
                                    {% else %}
                                        <span class=\"labelGrey_16\">{{operator.crane.reference}}</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                            <div class=\"row\" style=\"padding: 0; display: flex; align-items: baseline; flex-wrap: wrap;\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px;\">{{\"detail_operator.assigned_crane.subtext\"|trans}}:</div>
                                <div style=\"display: flex; align-items: center;\">
                                    <div style=\"display: flex; align-items: center; margin-left: 20px; margin-bottom: 20px;\">
                                        <label for=\"branchOffice-input\" class=\"filter_labels\" style=\"font-weight: bold; margin-right: 10px; margin-bottom: 0px; height: 35px;\">{{\"modal.operator.label.branch_office\"|trans|upper}}:</label>
                                        <select id=\"branchOffice-input\" name=\"branchOffice\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value=\"\"> {{\"detail_operator.select.branch_office.placeholder\"|trans}} </option>
                                            {% for branchOffice in branchOfficesList %}
                                                <option value=\"{{ branchOffice.id }}\"> {{ branchOffice.name }} </option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div style=\"display: flex; align-items: center; margin-left: 20px; margin-bottom: 20px;\">
                                        <label for=\"craneType-input\" class=\"filter_labels\" style=\"font-weight: bold; margin-right: 10px; margin-bottom: 0px; height: 35px;\">{{\"modal.input.crane.type\"|trans|upper}}:</label>
                                        <select id=\"craneType-input\" name=\"craneType\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value=\"\"> {{\"detail_operator.select.crane_type.placeholder\"|trans}} </option>
                                            {% for craneType in availableCraneTypesByBranchOffice %}
                                                <option value=\"{{ craneType.id }}\"> {{ craneType.description }} </option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# Añadir grúa disponible #}
                        <div class=\"row\" style=\"margin-bottom: 10px;\">
                            <button disabled type=\"button\" class=\"btn top_left-buttons new-button\" style=\"border: 1px solid var(--main-blue); border-width: 2px !important;\"> <img src=\"{{asset(\"media/datatables/icon-add.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('general.add')|trans}}</button>
                        </div>
                        {# DataTable #}
                        <div class=\"row\">
                            <table id=\"table_cranes\" class=\"table\">
                                <thead>
                                    <tr>
                                        <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                                        <th>{{\"dataTable.cranes.reference\"|trans}}</th>
                                        <th>{{\"dataTable.cranes.plate\"|trans}}</th>
                                        <th>{{\"dataTable.cranes.brand\"|trans}}</th>
                                        <th>{{\"dataTable.cranes.model\"|trans}}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-6 col-lg-6\">
                                <div class=\"labelGrey row\" style=\"margin-bottom: 20px; margin-top: 20px;\">{{\"detail_operator.available_cranes\"|trans}}:</div>
                                <div id=\"avCranesDivToAppend\" class=\"col-sm-12 col-md-6 col-lg-6\">

                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md-6 col-lg-6\">
                                <div class=\"labelGrey\" style=\"margin-bottom: 20px; margin-top: 20px;\">{{\"detail_operator.assigned_crane\"|trans}}:</div>
                                <select id=\"assignedCrane-input\" name=\"assignedCrane\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> {{\"detail_operator.select.assigned_crane.placeholder\"|trans}} </option>
                                    
                                </select>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!--Panel Disponibilidad-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"operator_availability_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#operator_availability_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_operator.operator_availability'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"operator_availability_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        {% if operator.operatorStatus.id == 1 %}
                            <div>
                                <span class=\"switch_span_off\" style=\"margin-right: 5px; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                <input class=\"check_operator_status switchery\" type=\"checkbox\" checked>
                                <span class=\"switch_span_on\" style=\"margin-left: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">ON</span>
                            </div>
                        {% else %}
                            <div>
                                <span class=\"switch_span_off\" style=\"margin-right: 5px; font-weight: bold; vertical-align: middle; color: var(--main-grey);\">OFF</span>
                                <input class=\"check_operator_status switchery\" type=\"checkbox\">
                                <span class=\"switch_span_on\" style=\"margin-left: 5px; vertical-align: middle; color: var(--main-grey);\">ON</span>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if mode == \"edit_allowed\" %}
            <!--Panel Cambiar contraseña-->
            <div class=\"panel\">
                <!--Panel heading-->
                <div id=\"operator_password_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#operator_password_body\" data-toggle=\"collapse\">
                    <div class=\"panel-control\">
                        <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                    </div>
                    <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_operator.operator_password'|trans}}</h3>
                </div>
                <!--Panel body-->
                <div id=\"operator_password_body\" class=\"collapse in\">
                    <div class=\"panel-body\">
                        <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                            <div class=\"col-sm-6 col-md-5 col-lg-3\">
                                <button id='btnChangePassword' class='btnDefaultMini' style='margin-bottom: 15px;'>{{\"change_password.form.new_password\"|trans}}</button>
                                <div id='changePasswordContent'>
                                    <div style='margin-bottom: 15px;'>
                                        <input id='password' type='password' name=\"password\" class='form-control filter_inputs data_input' style=\"width: 100%;\" placeholder='{{\"detail_operator.change_password\"|trans}}' value=''/>
                                    </div>
                                    <div>
                                        <input id='password2' type='password' name=\"password2\" class='form-control filter_inputs data_input' style=\"width: 100%;\" placeholder='{{\"detail_operator.change_password_check\"|trans}}' value=''/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

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

        <form id=\"save_redirect_form\" action=\"{{ path('detail_operator') }}\" method=\"POST\" style=\"display: none;\">
            <input type=\"hidden\" name=\"operatorId\" value=\"{{ operator.id }}\">
            <input type=\"hidden\" name=\"mode\" value=\"read_only\">
        </form>

    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script>
        var arrayChecked = [];
        var arrayCheckedReferences = [];
        var availableCranes = [];
        var assignedCrane = null;

        {# Arrays que se utilizarán al guardar  #}
        var attachmentsToAdd = [];
        var attachmentsToRemove = [];
        var modifiedProfileImage = null;

        \$(document).ready(function(){
            var time = null;
            var html2 = \"\";

            let newAvAuxHtml = \"\";
            {% for opAvCrane in operatorAvailableCranes %}
                availableCranes.push({{ opAvCrane.crane.id }}); 

                newAvAuxHtml = '<div class=\"avCrane\" style=\"margin-bottom: 17px; display: flex;\">';
                newAvAuxHtml += '<div id=\"{{opAvCrane.crane.id}}\" class=\"form-control asitur_input_to_delete\" style=\"font-size: 16px;\">{{opAvCrane.crane.reference}}</div>';
                newAvAuxHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                newAvAuxHtml += '<img class=\"asitur_input_to_delete-img av_crane_to_delete\" data-id=\"{{opAvCrane.crane.id}}\" data-reference=\"{{opAvCrane.crane.reference}}\" src=\"{{asset(\"media/equis.png\")}}\" width=\"24px\" height=\"24px\">';
                newAvAuxHtml += '</div></div>';
                \$(\"#avCranesDivToAppend\").append(newAvAuxHtml);
            {% endfor %}

            {% if operator.crane is null %}
                assignedCrane = null;
            {% else %}
                assignedCrane = {{operator.crane.id}};
            {% endif %}

            reloadAssignedCraneChosen();

            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"{{ asset('media/uncheck_empty.png') }}\",
                checkPath: \"{{ asset('media/check.png') }}\"
            });

            var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_operator_status'));

            if( \"{{ mode }}\" == \"read_only\" ) {
                switch_elems.forEach(function(html){
                    new Switchery(html, {disabled: true, 
                                         disabledOpacity: 1,
                                         color: \"var(--main-blue)\",
                                         secondaryColor: '#cdd3db'
                                        });
                });
            } else {
                switch_elems.forEach(function(html){
                    new Switchery(html, {disabled: false,
                                         color: \"var(--main-blue)\",
                                         secondaryColor: '#cdd3db'
                                        });
                });
            }

            \$(\".check_operator_status\").change(\"checked\", function() {
                if( \$(this).prop(\"checked\") ) {
                    \$(\".switch_span_on\").css({\"font-weight\": \"bold\"});
                    \$(\".switch_span_off\").css({\"font-weight\": \"normal\"});
                } else {
                    \$(\".switch_span_on\").css({\"font-weight\": \"normal\"});
                    \$(\".switch_span_off\").css({\"font-weight\": \"bold\"});
                }
            });

            \$('#btnChangePassword').click(function(){
                \$('#btnChangePassword').fadeOut(function(){
                    \$('#changePasswordContent').fadeIn();
                });
            });

            \$(\"#branchOffice-input\").chosen({width: \"220px !important\"});
            \$(\"#craneType-input\").chosen({width: \"220px !important\"});
            \$(\"#assignedCrane-input\").chosen({width: \"220px !important\"});

            \$('#branchOffice-input').on('change', function(){
                \$.ajax({
                    url:'{{ path(\"operator_crane_types_chosen_list\") }}',
                    data: {
                        'branchOfficeId': \$(this).val()
                    },
                    type:\"POST\",
                    success: function(json){
                        if (json.status){
                            \$(\"#craneType-input\").empty();
                            \$(\"#craneType-input\").append('<option value=\"\"> {{\"detail_operator.select.crane_type.placeholder\"|trans}} </option>');
                            \$.each(json.data, function (idx, obj) {
                                \$(\"#craneType-input\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                            });
                            \$(\"#craneType-input\").trigger(\"chosen:updated\");
                            reloadDataTable();
                        } else {
                            swal.fire({
                                title: '{{ (\"detail_operator.select.crane_type.error\")|trans }}',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    },
                    error: function(err){
                        swal.fire({
                            title: '{{ (\"detail_operator.select.crane_type.error\")|trans }}',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            });

            \$('#craneType-input').on('change', function(){
                reloadDataTable();
            });

            createTable();

            {#* Carga de la imagen de perfil #}
            let htmlProfilePicture = '<img class=\"profile_img_common\" src=\"{{asset(\"media/empty_profile_picture.png\")}}\">';

            {% if operatorProfileImage != null %}
                let fileName = '{{ operatorProfileImage.fileName }}';
                let fileExtension = fileName.split('.').pop();
                let imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];

                if( imageExtensions.includes(fileExtension) ) {

                    htmlProfilePicture = '<img class=\"profile_img profile_img_common\" src=\"data:image/'+ fileExtension +';base64, '+ '{{ operatorProfileImage.fileData }}' +'\" style=\"cursor: pointer; margin-bottom: 0 !important;\" data-id=\"'+ '{{ operatorProfileImage.id }}' +'\">';
                }
            {% endif %}
                htmlProfilePicture += '<div class=\"profile_img_camera_div\" style=\"width: 120px; height: 120px; display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; margin: 0px 15px; background-color: lightgrey; opacity: 0.75; border-radius: 5px; visibility: hidden; cursor: pointer;\"><img class=\"profile_img_camera\" src=\"{{asset(\"media/camara.png\")}}\" style=\"width: 40px; height: 40px; margin-bottom: 0;\"></div>';

            \$(\"#profile_img_div\").append(htmlProfilePicture);
            {#* ############################ #}

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
                    html: '{{\"modal.operator.remove.individual\"|trans}}',
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
                            url:'{{ path('operators_delete') }}',
                            data: {
                                'arrayChecked': ['{{ operator.id }}']
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
                                        window.location.replace(\"{{ path('operators') }}\");
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

            {#* Exportación de un operario #}
            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'{{ path('detail_operator_export_excel') }}',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'operatorId': \"{{ operator.id }}\",
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

                if( \$.trim(\$(\"#reference-input\").val()) == \"\" ||
                    \$.trim(\$(\"#mobile-input\").val())    == \"\"
                ) {  
                    swal.fire({
                        title: '{{\"general.form.allfields.mandatory\"|trans}}',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else if( (\$(\"#password\").val() != \"\" || \$(\"#password2\").val() != \"\") && 
                            \$(\"#password\").val() != \$(\"#password2\").val() ) {
                    swal.fire({
                        title: '{{\"change_password.form.not_same\"|trans}}',
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
                        url:'{{ path(\"detail_operator_edit_save\") }}',
                        data: {
                            'operatorId': \"{{ operator.id }}\",
                            'dataArray': dataArray,
                            'availabilityStatus': \$(\".check_operator_status\").prop(\"checked\"),
                            'assignedCraneId': assignedCrane,
                            'availableCranes': availableCranes,
                            'attachmentsToAdd': attachmentsToAdd,
                            'attachmentsToRemove': attachmentsToRemove,
                            'modifiedProfileImage': modifiedProfileImage
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
                                        \$(\"#save_redirect_form\").submit();
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

            {#* Botón añadir grúa disponible #}
            \$(\".new-button\").click(function() {
                let newAvCraneHtml = \"\";

                \$.each(arrayChecked, function (key, value) {
                    const index = availableCranes.indexOf(value);
                    if(index == -1) {
                        availableCranes.push(value);

                        newAvCraneHtml = '<div class=\"avCrane\" style=\"margin-bottom: 17px; display: flex;\">';
                        newAvCraneHtml += '<div id=\"'+ value +'\" class=\"form-control asitur_input_to_delete\" style=\"font-size: 16px;\">'+ arrayCheckedReferences[key] +'</div>';
                        newAvCraneHtml += '<div style=\"height: 35px; border-bottom: 1px solid lightgrey\">';
                        newAvCraneHtml += '<img class=\"asitur_input_to_delete-img av_crane_to_delete\" data-id=\"'+ value +'\" data-reference=\"'+ arrayCheckedReferences[key] +'\" src=\"{{asset(\"media/equis.png\")}}\" width=\"24px\" height=\"24px\">';
                        newAvCraneHtml += '</div></div>';
                        \$(\"#avCranesDivToAppend\").append(newAvCraneHtml);
                    }  
                });

                \$(\".av_crane_to_delete\").click(function(){
                    \$(this).closest(\".avCrane\").remove();

                    const index = availableCranes.indexOf(\$(this).data(\"id\"));
                    if(index > -1) {
                        availableCranes.splice(index, 1);
                    }
                    reloadAssignedCraneChosen();
                });
                reloadAssignedCraneChosen();
            });
            {#* ############# #}

            {#* Eliminar grúa disponible #}
            \$(\".av_crane_to_delete\").click(function(){
                \$(this).closest(\".avCrane\").remove();

                const index = availableCranes.indexOf(\$(this).data(\"id\"));
                if(index > -1) {
                    availableCranes.splice(index, 1);
                }
                reloadAssignedCraneChosen();
            });
            {#* ######################## #}

            {#* Cambiar grúa asignada #}
            \$(\"#assignedCrane-input\").change(function(){
                assignedCrane = Number(\$(this).val());
            });
            {#* ######################## #}

            {% if mode == \"read_only\" %}
                {#* Descarga de un fichero adjunto #}
                \$(\".attachment_icon, .profile_img\").click(function() {
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

                {#* Modifica foto de perfil #}
                \$(\"#profile_img_div\").mouseenter(function(){
                    \$(\".profile_img_camera_div\").css({\"visibility\": \"visible\"});
                });
                \$(\"#profile_img_div\").mouseleave(function(){
                    \$(\".profile_img_camera_div\").css({\"visibility\": \"hidden\"});
                });

            {% endif %}

            {#* Ajax que obtiene la lista de ficheros adjuntos del operario #}
            \$.ajax({
                url:'{{ path('operator_attachments') }}',
                data: {
                    'operatorId': \"{{ operator.id }}\"
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
            {% if mode == \"edit_allowed\" %}
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
                    clickable: '.attachment_icon_import',
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
            {% endif %}
            {#* ################ #}

            {#* Importar foto perfil #}
            {% if mode == \"edit_allowed\" %}
                \$(\"#profilePicToImport\").dropzone({
                    url: \"{{ path('preupload_operator_profile_picture') }}\",
                    addRemoveLinks: false,
                    maxFilesize: 150, //MB
                    autoProcessQueue: true, // ajuste cola
                    timeout: 180000, /*milliseconds*/
                    acceptedFiles: \".jpg, .png, .jpeg, .JPG, .PNG, .JPEG\",
                    maxFiles: 1,
                    parallelUploads: 5,
                    paramName: \"opProfileImage\", // The name that will be used to transfer the file
                    clickable: '.profile_img_camera_div',
                    init: function(){
                        // config
                        this.options.dictRemoveFile = \"Delete\";

                        this.on(\"success\", function(opProfileImg, responseText) {
                            \$(\".profile_img_common\").attr('src', \"data:\"+ responseText.data[\"type\"] +\";base64, \"+ responseText.data[\"content\"]);
                            modifiedProfileImage = {\"fileName\": responseText.data[\"fileName\"], \"filePath\": responseText.data[\"filePath\"] };
                            if(!\$(\".profile_img_common\").hasClass(\"profile_img\")) {
                                \$(\".profile_img_common\").addClass(\"profile_img\");
                            }
                        });
                        this.on('complete',function(file){
                            this.removeAllFiles();
                        });
                    }
                });
            {% endif %}
            {#* ################ #}

            \$('.checkboxFullList').change(function(){
                var active = false;
                if (\$(this).is(\":checked\")) {
                    active = true;
                }
                
                \$('.checkboxCranes').each(function(){
                    \$(this).prop('checked', active);
                    \$(this).trigger('update');
                    \$(this).trigger('change');
                });// change

                if(arrayChecked.length > 0) {
                    \$(\".new-button\").removeAttr(\"disabled\");
                } else {
                    \$(\".new-button\").attr(\"disabled\",\"disabled\");
                }
            });

        }); // document ready

        {# Creación Datatable #}
        function createTable() {
            tableClients = \$('#table_cranes').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4] },
                    { orderable: false, targets: [0] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"{{('dataTable.general.lengthMenu.all')|trans}}\"]
                ],
                responsive: false,
                autoWidth: false,
                scrollX: true,
                processing: false,
                serverSide: true,
                pagingType: \"full_numbers\",
                language: {
                    \"sProcessing\": \"{{ ('dataTable.general.language.sProcessing ') | trans }}\",
                    \"sLengthMenu\": \"{{ ('dataTable.asitur.language.sLengthMenu') | trans}}: _MENU_\",
                    \"sZeroRecords\": \"{{ ('dataTable.general.language.sZeroRecords') | trans }}\",
                    \"sEmptyTable\": \"{{ ('dataTable.general.language.sZeroRecords') | trans }}\",
                    \"sInfo\": \"{{ ('dataTable.general.language.sInfo') | trans }}\",
                    \"sInfoEmpty\": \"{{ ('dataTable.general.language.sInfoEmpty') | trans }}\",
                    \"sInfoFiltered\": \"{{ ('dataTable.general.language.sInfoFiltered') | trans }}\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"{{ ('dataTable.general.language.sSearch') | trans }}:\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"{{ ('dataTable.general.language.sLoadingRecords') | trans }}\",
                    \"oPaginate\": {
                        \"sFirst\": \"<<\",
                        \"sLast\": \">>\",
                        \"sNext\": \">\",
                        \"sPrevious\": \"<\",
                    },
                    \"oAria\": {
                        \"sSortAscending\": \": {{ ('dataTable.general.language.oAria.sSortAscending') | trans }}\",
                        \"sSortDescending\": \": {{ ('dataTable.general.language.oAria.sSortDescending') | trans }}\"
                    },
                },
                ajax: {
                    url: \"{{ path('operators_available_cranes_table') }}\",
                    method: 'POST',
                    data: {

                    }
                },
                initComplete: function() {
                    // Enable THEAD scroll bars
                    \$('.dataTables_scrollHead').css('overflow', 'auto');

                    // Sync THEAD scrolling with TBODY
                    \$('.dataTables_scrollHead').on('scroll', function () {
                        \$('.dataTables_scrollBody').scrollLeft(\$(this).scrollLeft());
                    });
                },
                drawCallback: function() {
                    // check checked
                    \$('.checkboxCranes').each(function(){
                        var crane_id = \$(this).data('crane');
                        var index = arrayChecked.indexOf(crane_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxCranes').change(function(){
                        var crane_id = \$(this).data('crane');
                        var crane_reference = \$(this).data('reference');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(crane_id)) {
                                arrayChecked.push(crane_id);
                                arrayCheckedReferences.push(crane_reference);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        } else {
                            var index = arrayChecked.indexOf(crane_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                                arrayCheckedReferences.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        if(arrayChecked.length > 0) {
                            \$(\".new-button\").removeAttr(\"disabled\");
                        } else {
                            \$(\".new-button\").attr(\"disabled\",\"disabled\");
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxCranes imgCheckbox' data-crane='\"+data.id+\"' data-reference='\"+data.reference+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'plate'},
                    {data: 'brand'},
                    {data: 'model'}
                ]
            });
        }
        {# #### Datatable #### #}

        {# Función encargada de recargar el ajax del datatable #}
        let reloadDataTable = function() {
            var fullFilters = {
                'branchOfficeId': \$(\"#branchOffice-input\").val(),
                'craneTypeId': \$(\"#craneType-input\").val()
            }

            \$(\"#table_cranes\").DataTable().search(JSON.stringify(fullFilters)).draw();

            {#* Descomentar para que los checkboxes se reinicien al recargar el dataTable #}
            arrayChecked = [];
            arrayCheckedReferences = [];
            \$(\".new-button\").attr('disabled', 'disabled');

        }
        {# ################################################### #}

        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"{{ asset('media/uncheck_empty.png') }}\",
                checkPath: \"{{ asset('media/check.png') }}\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"{{ asset('media/uncheck_empty.png') }}\",
                checkPath: \"{{ asset('media/check.png') }}\"
            });
        }

        function reloadAssignedCraneChosen() {
            html2 = '<option value=\"\">{{\"detail_operator.select.assigned_crane.placeholder\"|trans}}</option>';

            \$(\".asitur_input_to_delete-img\").each(function() {
                html2 += '<option class=\"option_crane\" data-id=\"'+ \$(this).data(\"id\") +'\" value=\"'+ \$(this).data(\"id\") +'\">'+ \$(this).data(\"reference\") +'</option>';
            });

            \$(\"#assignedCrane-input\").empty();
            \$(\"#assignedCrane-input\").append(html2);

            if(assignedCrane != null) {
                if(availableCranes.includes(assignedCrane)) { 
                    \$(\"#assignedCrane-input\").val(assignedCrane);
                }
            } else {
                \$(\"#assignedCrane-input\").val(\"\");
            }

            \$(\"#assignedCrane-input\").trigger(\"chosen:updated\");
        }

    </script>
{% endblock %}", "frontend/collaborator/detailOperator.html.twig", "/var/www/rira_web/templates/frontend/collaborator/detailOperator.html.twig");
    }
}
