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

/* frontend/collaborator/detailBranchOffice.html.twig */
class __TwigTemplate_3cc5f8f2b6d275f22016403d69583ac6e155bf3816d0b7452d5d3c875b522531 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailBranchOffice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/detailBranchOffice.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/detailBranchOffice.html.twig", 1);
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
                <a class=\"nav-link active\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.branch_offices"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.cranes"), "html", null, true);
        echo "</a>
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
                <a class=\"go_back_link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices");
        echo "\"><i class=\"fa fa-2x fa-chevron-left\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.go_back_to_list"), "html", null, true);
        echo "</a>
                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
            </div>
        </div>
        ";
        // line 45
        echo "        
        <hr id=\"datatable_hr\" class=\"datatable_hr\" style=\"margin-bottom: 20px;\">

        <!--Panel Datos de sucursal-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_data_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.branch_office_data"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"address-input\" class=\"asitur_label regular_label\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.input.label.address"), "html", null, true);
        echo "</label>
                            <textarea name=\"address\" id=\"address-input\" class=\"form-control\" readonly spellcheck=\"false\" style=\"resize: vertical; font-size: 16px; cursor: text;\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 63, $this->source); })()), "address", [], "any", false, false, false, 63), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"phone-input\" class=\"asitur_label regular_label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.input.label.phone"), "html", null, true);
        echo "</label>
                            <textarea name=\"phone\" id=\"phone-input\" class=\"form-control\"  readonly spellcheck=\"false\" style=\"resize: vertical; font-size: 16px; cursor: text;\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 67, $this->source); })()), "telephone", [], "any", false, false, false, 67), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 67, $this->source); })()), "telephone2", [], "any", false, false, false, 67), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 67, $this->source); })()), "telephone3", [], "any", false, false, false, 67), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"col-sm-6 col-md-4 col-lg-3\" style=\"margin-bottom: 20px;\">
                            <label for=\"sinister_email-input\" class=\"asitur_label regular_label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.input.label.sinister_email"), "html", null, true);
        echo "</label>
                            <input disabled id=\"sinister_email-input\" name=\"sinister_email\" type=\"text\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 71, $this->source); })()), "sinisterEmail", [], "any", false, false, false, 71), "html", null, true);
        echo "\" class=\"form-control asitur_input regular_input\" style=\"width: auto; cursor: text;\" spellcheck=\"false\">
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-3\" style=\"margin-bottom: 20px;\">
                            <label for=\"invoicing_email-input\" class=\"asitur_label regular_label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.input.label.invoicing_email"), "html", null, true);
        echo "</label>
                            <input disabled id=\"invoicing_email-input\" name=\"invoicing_email\" type=\"text\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 75, $this->source); })()), "invoicingEmail", [], "any", false, false, false, 75), "html", null, true);
        echo "\" class=\"form-control asitur_input regular_input\" style=\"width: auto; cursor: text;\" spellcheck=\"false\">
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"contact_person-input\" class=\"asitur_label regular_label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.input.label.contact_person"), "html", null, true);
        echo "</label>
                            <input disabled id=\"contact_person-input\" name=\"contact_person\" type=\"text\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 79, $this->source); })()), "contactPerson", [], "any", false, false, false, 79), "html", null, true);
        echo "\" class=\"form-control asitur_input regular_input\" style=\"width: 180px; cursor: text;\" spellcheck=\"false\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Grúas-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_cranes_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_cranes_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.branch_office_cranes"), "html", null, true);
        echo " (<span id=\"cranes_count\"> - </span>)</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_cranes_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <table id=\"table_cranes\" class=\"table\">
                        <thead>
                            <tr>
                                <th style=\"display: none;\"></th>
                                <th>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.reference"), "html", null, true);
        echo "</th>
                                <th>";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.plate"), "html", null, true);
        echo "</th>
                                <th>";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.brand"), "html", null, true);
        echo "</th>
                                <th>";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.crane_type"), "html", null, true);
        echo "</th>
                                <th>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.services"), "html", null, true);
        echo "</th>
                                <th>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.zones"), "html", null, true);
        echo "</th>
                                <th>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.management_type"), "html", null, true);
        echo "</th>
                                <th>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.status"), "html", null, true);
        echo "</th>
                                <th>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.label"), "html", null, true);
        echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--Panel Operarios-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_operators_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_operators_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.branch_office_operators"), "html", null, true);
        echo " (<span id=\"operators_count\"> - </span>)</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_operators_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <table id=\"table_operators\" class=\"table\">
                        <thead>
                            <tr>
                                <th style=\"display: none;\"></th>
                                <th>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.identifier"), "html", null, true);
        echo "</th>
                                <th>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.mobile_phone"), "html", null, true);
        echo "</th>
                                <th>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.availability_status"), "html", null, true);
        echo "</th>
                                <th>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.assigned_crane"), "html", null, true);
        echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--Panel Zonas en las que atiende-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_zones_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_zones_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_branch_office.branch_office_zones"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_zones_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\" style=\"margin-bottom: 15px; color: #6b7c93;\">";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.town"), "html", null, true);
        echo "</label>
                            <br/>
                            <b>";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 163, $this->source); })()), "town", [], "any", false, false, false, 163), "name", [], "any", false, false, false, 163), "html", null, true);
        echo "</b>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\" style=\"margin-bottom: 15px; color: #6b7c93;\">";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.province"), "html", null, true);
        echo "</label>
                            <br/>
                            <b>";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 168, $this->source); })()), "province", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168), "html", null, true);
        echo "</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Anexo de documentos-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_documents_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_documents_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.attachments"), "html", null, true);
        echo "</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_documents_body\" class=\"collapse in\">
                <div id=\"attachments_panel_body\" class=\"panel-body row\" style=\"display: flex; justify-content: flex-start; flex-wrap: wrap;\">
                    
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

    // line 199
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 200
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        \$(document).ready(function(){
            var time = null;

            ";
        // line 207
        echo "            \$(\"#data_management_li\").addClass(\"active\");
            ";
        // line 209
        echo "
            \$(\"#phone-input\").html( \$(\"#phone-input\").html().replace(\",,\", \"\") );
            \$(\"#phone-input\").html( \$(\"#phone-input\").html().replace(/,\$/, '') );
            \$(\"#phone-input\").html( \$(\"#phone-input\").html().replaceAll(\",\", '&#10;') );

            ";
        // line 215
        echo "            createTableCranes();
            createTableOperators();
            ";
        // line 218
        echo "
            ";
        // line 220
        echo "            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_branch_office_export_excel");
        echo "',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'branchOfficeId': ";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 226, $this->source); })()), "id", [], "any", false, false, false, 226), "html", null, true);
        echo "
                    },
                    type:\"POST\",
                    success: function(data){
                        if (data.status){
                            swal.fire({
                                title: '";
        // line 232
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
        // line 242
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
        // line 254
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
        // line 263
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
        // line 272
        echo "
            ";
        // line 274
        echo "            \$.ajax({
                url:'";
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branchOffice_attachments");
        echo "',
                data: {
                    'branchOfficeId': ";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 277, $this->source); })()), "id", [], "any", false, false, false, 277), "html", null, true);
        echo "
                },
                type:\"POST\",
                success: function(data){
                    if(data.length) {
                        let html = fileExtension = \"\";
                        let imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                        \$.each(data, function (key, value) {
                            fileExtension = value[\"file_name\"].split('.').pop();
                            if(value[\"file_name\"].includes(\".pdf\")) {
                                html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file.png"), "html", null, true);
        echo "\">';
                                html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div>';
                            } else if( imageExtensions.includes(fileExtension) ) {
                                html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div>';
                            } else {
                                html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/file_general.png"), "html", null, true);
        echo "\">';
                                html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div>';
                            }

                            html += ' </div>';
                        }) 

                        \$(\"#attachments_panel_body\").append(html);

                        ";
        // line 303
        echo "                        \$(\".attachment_icon\").click(function() {
                            var attachmentId = \$(this).data(\"id\");
                            \$.ajax({
                                url:'";
        // line 306
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
        // line 317
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
        // line 329
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
        // line 338
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
        // line 347
        echo "                    }
                },
                error:function(err){
                    swal.fire({
                        title: '";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attachment.list.error"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
            ";
        // line 359
        echo "
        });

        ";
        // line 363
        echo "        function createTableCranes() {
            tableClients = \$('#table_cranes').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4,5,7,8,9] },
                    { orderable: false, targets: [0,6,10] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 375
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
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 395
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
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 408
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes_table");
        echo "\",
                    method: 'POST',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'branchOfficeId': ";
        // line 413
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 413, $this->source); })()), "id", [], "any", false, false, false, 413), "html", null, true);
        echo "
                    }
                },
                initComplete: function(data) {
                    \$(\"#cranes_count\").html(data.json.recordsFiltered);
                },
                drawCallback: function() {

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status_crane'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });
                },
                columns: [
                    {data: {}, 'visible': false},
                    {data: 'reference'},
                    {data: 'plate'},
                    {data: 'brand'},
                    {data: 'crane_type'},
                    {data: {}, render: function(data, row) {

                            if( data['services'] != null ) {
                                let text = data['services'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: {}, render: function(data, row) {

                            if( data['zones'] != null ) {
                                let text = data['zones'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'management_type'},
                    {data: {}, render: function(data, row) {

                            if( data['status'] == 1 ) {
                                let html= '<div title=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.active"), "html", null, true);
        echo "\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_crane\" type=\"checkbox\" checked> </div>';

                                return html;
                            } else if( data['status'] == 2 || data['status'] == 3 ) {
                                let html= '<div title=\"REPLACE_TITLE\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_crane\" type=\"checkbox\"> </div>';
                                
                                if (data['status'] == 2) {
                                    html = html.replace(\"REPLACE_TITLE\", \"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.damaged"), "html", null, true);
        echo "\") 
                                } else {
                                    html = html.replace(\"REPLACE_TITLE\", \"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.retired"), "html", null, true);
        echo "\");
                                }
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'label'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"";
        // line 486
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_crane");
        echo "\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"craneId\" value=\"' + data[\"id\"] + '\">';
                            html += '<input type=\"hidden\" name=\"mode\" value=\"read_only\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        ";
        // line 499
        echo "
        ";
        // line 501
        echo "        function createTableOperators() {
            tableClients = \$('#table_operators').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: false,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [0,1,2,3,4] },
                    { orderable: false, targets: 5 }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 513
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
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 533
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
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 542
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 546
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_table");
        echo "\",
                    method: 'POST',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'branchOfficeId': ";
        // line 551
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 551, $this->source); })()), "id", [], "any", false, false, false, 551), "html", null, true);
        echo "
                    }
                },
                initComplete: function(data) {
                    \$(\"#operators_count\").html(data.json.recordsFiltered);
                },
                drawCallback: function() {

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status_operator'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });

                },
                columns: [
                    {data: {}, 'visible': false},
                    {data: 'reference'},
                    {data: 'mobile_phone'},
                    {data: {}, render: function(data, row) {

                            if( data['availability_status'] == 1 ) {
                                let html= '<div title=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.availability_status.available"), "html", null, true);
        echo "\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_operator\" type=\"checkbox\" checked> </div>';

                                return html;
                            } else if( data['availability_status'] == 2 ) {
                                let html= '<div title=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.availability_status.not_available"), "html", null, true);
        echo "\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_operator\" type=\"checkbox\"> </div>';
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'assigned_crane'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"";
        // line 594
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_operator");
        echo "\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"\" value=\"\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        ";
        // line 606
        echo "
        ";
        // line 608
        echo "        let reloadDataTables = function() {
            \$(\"#table_cranes\").DataTable().destroy();
            createTableCranes();
            \$(\"#table_operators\").DataTable().destroy();
            createTableOperators();
        }
        ";
        // line 615
        echo "    
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/detailBranchOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1033 => 615,  1025 => 608,  1022 => 606,  1008 => 594,  993 => 582,  985 => 577,  956 => 551,  948 => 546,  941 => 542,  937 => 541,  926 => 533,  920 => 530,  915 => 528,  911 => 527,  907 => 526,  903 => 525,  899 => 524,  895 => 523,  891 => 522,  879 => 513,  865 => 501,  862 => 499,  847 => 486,  832 => 474,  827 => 472,  815 => 463,  762 => 413,  754 => 408,  747 => 404,  743 => 403,  732 => 395,  726 => 392,  721 => 390,  717 => 389,  713 => 388,  709 => 387,  705 => 386,  701 => 385,  697 => 384,  685 => 375,  671 => 363,  666 => 359,  656 => 351,  650 => 347,  639 => 338,  627 => 329,  612 => 317,  598 => 306,  593 => 303,  581 => 293,  572 => 287,  559 => 277,  554 => 275,  551 => 274,  548 => 272,  537 => 263,  525 => 254,  510 => 242,  497 => 232,  488 => 226,  481 => 222,  477 => 220,  474 => 218,  470 => 215,  463 => 209,  460 => 207,  450 => 200,  440 => 199,  414 => 182,  397 => 168,  392 => 166,  386 => 163,  381 => 161,  371 => 154,  352 => 138,  348 => 137,  344 => 136,  340 => 135,  328 => 126,  309 => 110,  305 => 109,  301 => 108,  297 => 107,  293 => 106,  289 => 105,  285 => 104,  281 => 103,  277 => 102,  265 => 93,  248 => 79,  244 => 78,  238 => 75,  234 => 74,  228 => 71,  224 => 70,  214 => 67,  210 => 66,  204 => 63,  200 => 62,  190 => 55,  178 => 45,  170 => 41,  164 => 40,  160 => 38,  144 => 26,  136 => 23,  129 => 19,  121 => 13,  111 => 12,  98 => 8,  94 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
                <a class=\"nav-link active\">{{\"data_management.tab.branch_offices\"|trans}}</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"{{ path('cranes') }}\">{{\"data_management.tab.cranes\"|trans}}</a>
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
                <a class=\"go_back_link\" href=\"{{ path('branch_offices') }}\"><i class=\"fa fa-2x fa-chevron-left\"></i>{{\"general.go_back_to_list\"|trans}}</a>
                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
            </div>
        </div>
        {# ################################################## #}
        
        <hr id=\"datatable_hr\" class=\"datatable_hr\" style=\"margin-bottom: 20px;\">

        <!--Panel Datos de sucursal-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_data_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_data_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_branch_office.branch_office_data'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_data_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\" style=\"margin: 0; font-size: 16px;\">
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"address-input\" class=\"asitur_label regular_label\">{{\"detail_branch_office.input.label.address\"|trans}}</label>
                            <textarea name=\"address\" id=\"address-input\" class=\"form-control\" readonly spellcheck=\"false\" style=\"resize: vertical; font-size: 16px; cursor: text;\">{{ branchOffice.address }}</textarea>
                        </div>
                        <div class=\"col-sm-6 col-md-4 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"phone-input\" class=\"asitur_label regular_label\">{{\"detail_branch_office.input.label.phone\"|trans}}</label>
                            <textarea name=\"phone\" id=\"phone-input\" class=\"form-control\"  readonly spellcheck=\"false\" style=\"resize: vertical; font-size: 16px; cursor: text;\">{{ branchOffice.telephone }},{{ branchOffice.telephone2 }},{{ branchOffice.telephone3 }}</textarea>
                        </div>
                        <div class=\"col-sm-6 col-md-4 col-lg-3\" style=\"margin-bottom: 20px;\">
                            <label for=\"sinister_email-input\" class=\"asitur_label regular_label\">{{\"detail_branch_office.input.label.sinister_email\"|trans}}</label>
                            <input disabled id=\"sinister_email-input\" name=\"sinister_email\" type=\"text\" value=\"{{ branchOffice.sinisterEmail }}\" class=\"form-control asitur_input regular_input\" style=\"width: auto; cursor: text;\" spellcheck=\"false\">
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-3\" style=\"margin-bottom: 20px;\">
                            <label for=\"invoicing_email-input\" class=\"asitur_label regular_label\">{{\"detail_branch_office.input.label.invoicing_email\"|trans}}</label>
                            <input disabled id=\"invoicing_email-input\" name=\"invoicing_email\" type=\"text\" value=\"{{ branchOffice.invoicingEmail }}\" class=\"form-control asitur_input regular_input\" style=\"width: auto; cursor: text;\" spellcheck=\"false\">
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-2\" style=\"margin-bottom: 20px;\">
                            <label for=\"contact_person-input\" class=\"asitur_label regular_label\">{{\"detail_branch_office.input.label.contact_person\"|trans}}</label>
                            <input disabled id=\"contact_person-input\" name=\"contact_person\" type=\"text\" value=\"{{ branchOffice.contactPerson }}\" class=\"form-control asitur_input regular_input\" style=\"width: 180px; cursor: text;\" spellcheck=\"false\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Grúas-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_cranes_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_cranes_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_branch_office.branch_office_cranes'|trans}} (<span id=\"cranes_count\"> - </span>)</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_cranes_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <table id=\"table_cranes\" class=\"table\">
                        <thead>
                            <tr>
                                <th style=\"display: none;\"></th>
                                <th>{{\"dataTable.cranes.reference\"|trans}}</th>
                                <th>{{\"dataTable.cranes.plate\"|trans}}</th>
                                <th>{{\"dataTable.cranes.brand\"|trans}}</th>
                                <th>{{\"dataTable.cranes.crane_type\"|trans}}</th>
                                <th>{{\"dataTable.cranes.services\"|trans}}</th>
                                <th>{{\"dataTable.cranes.zones\"|trans}}</th>
                                <th>{{\"dataTable.cranes.management_type\"|trans}}</th>
                                <th>{{\"dataTable.cranes.status\"|trans}}</th>
                                <th>{{\"dataTable.cranes.label\"|trans}}</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--Panel Operarios-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_operators_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_operators_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_branch_office.branch_office_operators'|trans}} (<span id=\"operators_count\"> - </span>)</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_operators_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <table id=\"table_operators\" class=\"table\">
                        <thead>
                            <tr>
                                <th style=\"display: none;\"></th>
                                <th>{{\"dataTable.operators.identifier\"|trans}}</th>
                                <th>{{\"dataTable.operators.mobile_phone\"|trans}}</th>
                                <th>{{\"dataTable.operators.availability_status\"|trans}}</th>
                                <th>{{\"dataTable.operators.assigned_crane\"|trans}}</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--Panel Zonas en las que atiende-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_zones_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_zones_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail_branch_office.branch_office_zones'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_zones_body\" class=\"collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\" style=\"margin-bottom: 15px; color: #6b7c93;\">{{\"data_management.input.label.town\"|trans}}</label>
                            <br/>
                            <b>{{ branchOffice.town.name }}</b>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-2\">
                            <label class=\"asitur_label regular_label\" style=\"margin-bottom: 15px; color: #6b7c93;\">{{\"data_management.input.label.province\"|trans}}</label>
                            <br/>
                            <b>{{ branchOffice.province.name }}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Panel Anexo de documentos-->
        <div class=\"panel\">
            <!--Panel heading-->
            <div id=\"branchOffice_documents_heading\" class=\"panel-heading custom_collapse_panel_heading\" data-target=\"#branchOffice_documents_body\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\" style=\"font-weight: 600;\">{{'detail.attachments'|trans}}</h3>
            </div>
            <!--Panel body-->
            <div id=\"branchOffice_documents_body\" class=\"collapse in\">
                <div id=\"attachments_panel_body\" class=\"panel-body row\" style=\"display: flex; justify-content: flex-start; flex-wrap: wrap;\">
                    
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

            {#* Para que el apartado correspondiente en la barra lateral esté activo #}
            \$(\"#data_management_li\").addClass(\"active\");
            {#* #################################################################### #}

            \$(\"#phone-input\").html( \$(\"#phone-input\").html().replace(\",,\", \"\") );
            \$(\"#phone-input\").html( \$(\"#phone-input\").html().replace(/,\$/, '') );
            \$(\"#phone-input\").html( \$(\"#phone-input\").html().replaceAll(\",\", '&#10;') );

            {#* Llamada a las DataTables #}
            createTableCranes();
            createTableOperators();
            {#* ######################## #}

            {#* Exportación de una sucursal #}
            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'{{ path('detail_branch_office_export_excel') }}',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'branchOfficeId': {{ branchOffice.id }}
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
            {#* ########################### #}

            {#* Ajax que obtiene la lista de ficheros adjuntos de la sucursal #}
            \$.ajax({
                url:'{{ path('branchOffice_attachments') }}',
                data: {
                    'branchOfficeId': {{ branchOffice.id }}
                },
                type:\"POST\",
                success: function(data){
                    if(data.length) {
                        let html = fileExtension = \"\";
                        let imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                        \$.each(data, function (key, value) {
                            fileExtension = value[\"file_name\"].split('.').pop();
                            if(value[\"file_name\"].includes(\".pdf\")) {
                                html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"{{asset(\"media/file.png\")}}\">';
                                html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div>';
                            } else if( imageExtensions.includes(fileExtension) ) {
                                html += '<div class=\"attachment_icon attachment_icon_img\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"data:image/'+ fileExtension +';base64, '+ value[\"file_data\"] +'\">';
                                html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div>';
                            } else {
                                html += '<div class=\"attachment_icon attachment_icon_general\" data-id=\"'+ value[\"id\"] +'\"> <img src=\"{{asset(\"media/file_general.png\")}}\">';
                                html += '<div class=\"attachment_icon_text\"> <span>'+ value[\"file_name\"] +'</span> </div>';
                            }

                            html += ' </div>';
                        }) 

                        \$(\"#attachments_panel_body\").append(html);

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
                        {#* ############################## #}
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

        });

        {# Creación Datatable Cranes #}
        function createTableCranes() {
            tableClients = \$('#table_cranes').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4,5,7,8,9] },
                    { orderable: false, targets: [0,6,10] }
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
                    url: \"{{ path('cranes_table') }}\",
                    method: 'POST',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'branchOfficeId': {{ branchOffice.id }}
                    }
                },
                initComplete: function(data) {
                    \$(\"#cranes_count\").html(data.json.recordsFiltered);
                },
                drawCallback: function() {

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status_crane'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });
                },
                columns: [
                    {data: {}, 'visible': false},
                    {data: 'reference'},
                    {data: 'plate'},
                    {data: 'brand'},
                    {data: 'crane_type'},
                    {data: {}, render: function(data, row) {

                            if( data['services'] != null ) {
                                let text = data['services'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: {}, render: function(data, row) {

                            if( data['zones'] != null ) {
                                let text = data['zones'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'management_type'},
                    {data: {}, render: function(data, row) {

                            if( data['status'] == 1 ) {
                                let html= '<div title=\"{{\"data_management.crane_status.select.option.active\"|trans}}\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_crane\" type=\"checkbox\" checked> </div>';

                                return html;
                            } else if( data['status'] == 2 || data['status'] == 3 ) {
                                let html= '<div title=\"REPLACE_TITLE\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_crane\" type=\"checkbox\"> </div>';
                                
                                if (data['status'] == 2) {
                                    html = html.replace(\"REPLACE_TITLE\", \"{{'data_management.crane_status.select.option.damaged'|trans}}\") 
                                } else {
                                    html = html.replace(\"REPLACE_TITLE\", \"{{'data_management.crane_status.select.option.retired'|trans}}\");
                                }
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'label'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"{{ path(\"detail_crane\") }}\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"craneId\" value=\"' + data[\"id\"] + '\">';
                            html += '<input type=\"hidden\" name=\"mode\" value=\"read_only\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        {# #### Datatable Cranes #### #}

        {# Creación Datatable Operators #}
        function createTableOperators() {
            tableClients = \$('#table_operators').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: false,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [0,1,2,3,4] },
                    { orderable: false, targets: 5 }
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
                    url: \"{{ path('operators_table') }}\",
                    method: 'POST',
                    data: {
                        'form_filters': null,
                        'search_filter': null,
                        'branchOfficeId': {{ branchOffice.id }}
                    }
                },
                initComplete: function(data) {
                    \$(\"#operators_count\").html(data.json.recordsFiltered);
                },
                drawCallback: function() {

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status_operator'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });

                },
                columns: [
                    {data: {}, 'visible': false},
                    {data: 'reference'},
                    {data: 'mobile_phone'},
                    {data: {}, render: function(data, row) {

                            if( data['availability_status'] == 1 ) {
                                let html= '<div title=\"{{\"data_management.operator.availability_status.available\"|trans}}\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_operator\" type=\"checkbox\" checked> </div>';

                                return html;
                            } else if( data['availability_status'] == 2 ) {
                                let html= '<div title=\"{{\"data_management.operator.availability_status.not_available\"|trans}}\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status_operator\" type=\"checkbox\"> </div>';
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'assigned_crane'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"{{ path(\"detail_operator\") }}\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"\" value=\"\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        {# #### Datatable Operators #### #}

        {# Función encargada de recargar el ajax del datatable #}
        let reloadDataTables = function() {
            \$(\"#table_cranes\").DataTable().destroy();
            createTableCranes();
            \$(\"#table_operators\").DataTable().destroy();
            createTableOperators();
        }
        {# ################################################### #}
    
    </script>

{% endblock %}", "frontend/collaborator/detailBranchOffice.html.twig", "/var/www/rira_web/templates/frontend/collaborator/detailBranchOffice.html.twig");
    }
}
