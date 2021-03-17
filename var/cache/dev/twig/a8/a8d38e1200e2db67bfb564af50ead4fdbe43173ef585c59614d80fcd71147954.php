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

/* frontend/collaborator/branchOffices.html.twig */
class __TwigTemplate_12a6471f00fff2cd76a999ac5b5acebd223856200a9067576f94e6ca969057b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/branchOffices.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/branchOffices.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/branchOffices.html.twig", 1);
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


     <!--Modal Rates-->
    <div class=\"modal fade\" id=\"modal-rates\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 id=\"myModalLabel\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.rates"), "html", null, true);
        echo "</h4>
                </div>
                <div id='modalRatesContent' class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <i class=\"fa fa-spinner fa-pulse\" aria-hidden=\"true\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.close"), "html", null, true);
        echo "</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add collaboratorUser-->




    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        ";
        // line 63
        echo "        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                ";
        // line 66
        echo "                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
                ";
        // line 68
        echo "                <button type=\"button\" class=\"btn top_left-buttons rates-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/euro.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.rates"), "html", null, true);
        echo "</button>
            </div>
            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel\" data-toggle=\"collapse\"> <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/filter.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.filter"), "html", null, true);
        echo "</button>
                <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel\" data-toggle=\"collapse\"> <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/search.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.search"), "html", null, true);
        echo "</button>
            </div>
        </div>
        ";
        // line 76
        echo "        
        ";
        // line 78
        echo "        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"filter_panel\" class=\"filter_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"panel-custom-heading\">
                        <div class=\"panel-control\">
                            <img id=\"delete_filters_value\" class=\"delete_filters_value\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\">
                        </div>
                        <h3 class=\"panel-title\" style=\"font-style: italic;\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter"), "html", null, true);
        echo "</h3>
                    </div>
                    <form id=\"form_filters\" autocomplete=\"off\">
                        <div class=\"row\" style=\"margin: 0;\">
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"province-input\" class=\"filter_labels\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.province"), "html", null, true);
        echo "</label>
                                <select id=\"province-input\" name=\"province\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provinces"]) || array_key_exists("provinces", $context) ? $context["provinces"] : (function () { throw new RuntimeError('Variable "provinces" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 94
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "id", [], "any", false, false, false, 94), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "name", [], "any", false, false, false, 94), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"town-input\" class=\"filter_labels\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.town"), "html", null, true);
        echo "</label>
                                <select disabled id=\"town-input\" name=\"town\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"telephone-input\" class=\"filter_labels\">";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.telephone"), "html", null, true);
        echo "</label>
                                <input id=\"telephone-input\" name=\"telephone\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.telephone"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"sinister_email-input\" class=\"filter_labels\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.sinister_email"), "html", null, true);
        echo "</label>
                                <input id=\"sinister_email-input\" name=\"sinister_email\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.sinister_email"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"invoicing_email-input\" class=\"filter_labels\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.invoicing_email"), "html", null, true);
        echo "</label>
                                <input id=\"invoicing_email-input\" name=\"invoicing_email\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.invoicing_email"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"contact_person-input\" class=\"filter_labels\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.contact_person"), "html", null, true);
        echo "</label>
                                <input id=\"contact_person-input\" name=\"contact_person\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.contact_person"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        ";
        // line 126
        echo "
        ";
        // line 128
        echo "        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"search_panel\" class=\" search_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"input-group\">
                        <input id=\"search-input\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\" autocomplete=\"false\">
                        <span id=\"delete_search_value\" class=\"input-group-addon delete_search_value\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"></span>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 139
        echo "
        <hr id=\"datatable_hr\" class=\"datatable_hr\">

        <table id=\"table_branch_offices\" class=\"table\">
            <thead>
                <tr>
                    <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                    <th>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.branchOffices.town"), "html", null, true);
        echo "</th>
                    <th>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.branchOffices.province"), "html", null, true);
        echo "</th>
                    <th>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.branchOffices.telephone"), "html", null, true);
        echo "</th>
                    <th>";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.branchOffices.sinisterEmail"), "html", null, true);
        echo "</th>
                    <th>";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.branchOffices.invoicingEmail"), "html", null, true);
        echo "</th>
                    <th>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.branchOffices.contactPerson"), "html", null, true);
        echo "</th>
                    <th></th>
                </tr>
            </thead>
        </table>

    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var arrayChecked = [];

        \$(document).ready(function(){
            var time = null;

            ";
        // line 172
        echo "            \$(\"#data_management_li\").addClass(\"active\");
            ";
        // line 174
        echo "
            \$(\"#province-input\").chosen();
            \$(\"#town-input\").chosen();

            \$('#province-input').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#town-input\").empty();
                    \$(\"#town-input\").append('<option value=\"\"> ---- </option>');
                    \$(\"#town-input\").attr('disabled', 'disabled');
                    \$(\"#town-input\").trigger(\"chosen:updated\");
                } else {
                    \$.ajax({
                        url:'";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("town_chosen_list");
        echo "',
                        data: {\"province\": \$(this).val() },
                        type:\"POST\",
                        dataType: \"json\",
                        success: function(data){
                            \$(\"#town-input\").empty();
                            \$(\"#town-input\").append('<option value=\"\"> ---- </option>');
                            for(var i = 0 ; i < data.length; i++){
                                var newOption = \$('<option>');
                                newOption.val(data[i].id);
                                newOption.html(data[i].name);
                                \$('#town-input').append(newOption.clone());
                            }
                            \$(\"#town-input\").removeAttr('disabled');
                            \$(\"#town-input\").trigger(\"chosen:updated\");
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                        }
                    });
                }
            });

            ";
        // line 211
        echo "            \$(\"#delete_filters_value\").click(function() {
                \$(\".filter_inputs\").val('');
                \$(\"#province-input\").val('');
                \$('#province-input').trigger(\"chosen:updated\");
                \$('#province-input').trigger(\"change\");
                reloadDataTable();
            });  

            \$(\"#delete_search_value\").click(function() {
                \$(\"#search-input\").val('');
                reloadDataTable();
            });
            ";
        // line 224
        echo "
            ";
        // line 226
        echo "            \$(\"#filter-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
                    \$(this).addClass(\"active\");
                    \$(\"#search-input\").val('');
                    \$(\"#search-button\").removeClass(\"active\");
                    \$(\"#search_panel\").removeClass(\"in\");
                    \$(\"#filter_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#search_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#search_panel\").removeClass(\"in\");
                    }, 250);
                }
            });

            \$(\"#search-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
                    \$(this).addClass(\"active\");
                    \$(\".filter_inputs\").val('');
                    \$(\"#filter-button\").removeClass(\"active\");
                    \$(\"#search_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#filter_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#filter_panel\").removeClass(\"in\");
                    }, 250);
                }
            });
            ";
        // line 263
        echo "
            createTable();

            \$('#search-input').keyup(function() {
                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.filter_inputs').keyup(function() {

                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.select_inputs').on('change', function(){
                reloadDataTable();
            });

            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices_export_excel");
        echo "',
                    data: {
                        'form_filters': \$('#form_filters').serializeArray(),
                        'search_filter': \$('#search-input').val(),
                    },
                    type:\"POST\",
                    success: function(data){
                        if (data.status){
                            swal.fire({
                                title: '";
        // line 296
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
        // line 306
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
        // line 318
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
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });

            });

        });

        ";
        // line 340
        echo "        function createTable() {
            \$('#table_branch_offices').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [0, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [0,1,2,3,4,5] },
                    { orderable: false, targets: 6 }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 352
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
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 372
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
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 385
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices_table");
        echo "\",
                    method: 'POST',
                    data: {

                    }
                },
                initComplete: function() {
                },
                drawCallback: function() {
                    // check checked
                    \$('.checkboxBranchOffice').each(function(){
                        var crane_id = \$(this).data('crane');
                        var index = arrayChecked.indexOf(crane_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxBranchOffice').change(function(){
                        var crane_id = \$(this).data('crane');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(crane_id)) {
                                arrayChecked.push(crane_id);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked.indexOf(crane_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        ";
        // line 424
        echo "                        if(arrayChecked.length) {
                            if(arrayChecked.length > 1) {
                                \$(\".rates-button\").prop('disabled', true);
                            } else {
                                \$(\".rates-button\").prop('disabled', false);
                            }
                        } else {
                            \$(\".rates-button\").prop('disabled', true);
                        }

                    });// change

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxBranchOffice imgCheckbox' data-crane='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'town'},
                    {data: 'province'},
                    {data: {}, render: function(data, row) {

                            if( data['telephone'] != null ) {
                                let text = data['telephone'];
                                let aux = text.replace(\",,\", \",\");
                                let result = aux.replaceAll(\",\",\"<br/>\")
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'sinisterEmail'},
                    {data: 'invoicingEmail'},
                    {data: {}, render: function(data, row) {

                            if( data['contactPerson'] != null ) {
                                let text = data['contactPerson'];
                                let aux = text.replace(\",,\", \",\");
                                let result = aux.replaceAll(\",\",\"<br/>\")
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: {}, render: function(data, row) {
                            html = '<form action=\"";
        // line 481
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_branch_office");
        echo "\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"branchOfficeId\" value=\"' + data[\"id\"] + '\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        ";
        // line 493
        echo "
        ";
        // line 495
        echo "        let reloadDataTable = function() {
            var form_filters = new Object();
            \$('.filter_inputs').each(function () {
                form_filters[\$(this).attr('name')] = \$(this).val();
            });

            var fullFilters = {
                'form_filters': form_filters,
                'search_filter': \$('#search-input').val()
            }

            \$(\"#table_branch_offices\").DataTable().search(JSON.stringify(fullFilters)).draw();
        }


        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });
        }

        \$('.checkboxFullList').change(function(){
            var active = false;
            if (\$(this).is(\":checked\")) {
                active = true;
            }

            \$('.checkboxBranchOffice').each(function(){
                \$(this).prop('checked', active);
                \$(this).trigger('update');
                \$(this).trigger('change');
            });// change
        });
        ";
        // line 535
        echo "        ";
        // line 536
        echo "        \$(\".rates-button\").click(function() {
            if (!arrayChecked.length){
                swal.fire({
                    title: '";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.needSelectRow"), "html", null, true);
        echo "',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            }
            else{
                \$('#modal-rates').modal();

                \$.ajax({
                    url:'";
        // line 549
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices_rates");
        echo "',
                    data: {
                        'branchOfficeId': arrayChecked[0]
                    },
                    type:\"POST\",
                    success: function(data){
                        \$('#modalRatesContent').html(data);
                    },
                    error:function(err){
                        swal.fire({
                            title: '";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
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
        // line 569
        echo "    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/branchOffices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  912 => 569,  900 => 559,  887 => 549,  874 => 539,  869 => 536,  867 => 535,  848 => 518,  844 => 517,  837 => 513,  833 => 512,  814 => 495,  811 => 493,  797 => 481,  738 => 424,  697 => 385,  690 => 381,  686 => 380,  675 => 372,  669 => 369,  664 => 367,  660 => 366,  656 => 365,  652 => 364,  648 => 363,  644 => 362,  640 => 361,  628 => 352,  614 => 340,  599 => 327,  587 => 318,  572 => 306,  559 => 296,  547 => 287,  521 => 263,  483 => 226,  480 => 224,  466 => 211,  439 => 186,  425 => 174,  422 => 172,  411 => 164,  401 => 163,  380 => 151,  376 => 150,  372 => 149,  368 => 148,  364 => 147,  360 => 146,  351 => 139,  343 => 133,  339 => 132,  333 => 128,  330 => 126,  320 => 118,  316 => 117,  310 => 114,  306 => 113,  300 => 110,  296 => 109,  290 => 106,  286 => 105,  277 => 99,  272 => 96,  261 => 94,  257 => 93,  251 => 90,  243 => 85,  238 => 83,  231 => 78,  228 => 76,  220 => 72,  214 => 71,  205 => 68,  198 => 66,  194 => 63,  175 => 46,  169 => 43,  163 => 40,  144 => 26,  136 => 23,  129 => 19,  121 => 13,  111 => 12,  98 => 8,  94 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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


     <!--Modal Rates-->
    <div class=\"modal fade\" id=\"modal-rates\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 id=\"myModalLabel\">{{ (\"dataTable.asitur.rates\")|trans }}</h4>
                </div>
                <div id='modalRatesContent' class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <i class=\"fa fa-spinner fa-pulse\" aria-hidden=\"true\"></i> {{ (\"dataTable.general.language.sLoadingRecords\")|trans }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">{{ (\"general.close\")|trans }}</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add collaboratorUser-->




    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        {# Bloque de botones de la parte superior de la tabla #}
        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                {# Exportacion #}
                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
                {# Tarifas #}
                <button type=\"button\" class=\"btn top_left-buttons rates-button\"> <img src=\"{{asset(\"media/datatables/euro.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.rates')|trans}}</button>
            </div>
            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/filter.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.filter')|trans}}</button>
                <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/search.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.search')|trans}}</button>
            </div>
        </div>
        {# ################################################## #}
        
        {# Bloque de filtros en datatable #}
        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"filter_panel\" class=\"filter_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"panel-custom-heading\">
                        <div class=\"panel-control\">
                            <img id=\"delete_filters_value\" class=\"delete_filters_value\" src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\">
                        </div>
                        <h3 class=\"panel-title\" style=\"font-style: italic;\">{{\"general.filter\"|trans}}</h3>
                    </div>
                    <form id=\"form_filters\" autocomplete=\"off\">
                        <div class=\"row\" style=\"margin: 0;\">
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"province-input\" class=\"filter_labels\">{{\"data_management.input.label.province\"|trans}}</label>
                                <select id=\"province-input\" name=\"province\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    {% for province in provinces %}
                                        <option value=\"{{ province.id}}\"> {{ province.name }} </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"town-input\" class=\"filter_labels\">{{\"data_management.input.label.town\"|trans}}</label>
                                <select disabled id=\"town-input\" name=\"town\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"telephone-input\" class=\"filter_labels\">{{\"data_management.input.label.telephone\"|trans}}</label>
                                <input id=\"telephone-input\" name=\"telephone\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.telephone\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"sinister_email-input\" class=\"filter_labels\">{{\"data_management.input.label.sinister_email\"|trans}}</label>
                                <input id=\"sinister_email-input\" name=\"sinister_email\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.sinister_email\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"invoicing_email-input\" class=\"filter_labels\">{{\"data_management.input.label.invoicing_email\"|trans}}</label>
                                <input id=\"invoicing_email-input\" name=\"invoicing_email\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.invoicing_email\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"contact_person-input\" class=\"filter_labels\">{{\"data_management.input.label.contact_person\"|trans}}</label>
                                <input id=\"contact_person-input\" name=\"contact_person\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.contact_person\"|trans}}\" spellcheck=\"false\">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {# ############################## #}

        {# Bloque de búsqueda en datatable #}
        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"search_panel\" class=\" search_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"input-group\">
                        <input id=\"search-input\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\" autocomplete=\"false\">
                        <span id=\"delete_search_value\" class=\"input-group-addon delete_search_value\"><img src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\"></span>
                    </div>
                </div>
            </div>
        </div>
        {# ############################### #}

        <hr id=\"datatable_hr\" class=\"datatable_hr\">

        <table id=\"table_branch_offices\" class=\"table\">
            <thead>
                <tr>
                    <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                    <th>{{\"dataTable.branchOffices.town\"|trans}}</th>
                    <th>{{\"dataTable.branchOffices.province\"|trans}}</th>
                    <th>{{\"dataTable.branchOffices.telephone\"|trans}}</th>
                    <th>{{\"dataTable.branchOffices.sinisterEmail\"|trans}}</th>
                    <th>{{\"dataTable.branchOffices.invoicingEmail\"|trans}}</th>
                    <th>{{\"dataTable.branchOffices.contactPerson\"|trans}}</th>
                    <th></th>
                </tr>
            </thead>
        </table>

    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script>
        var arrayChecked = [];

        \$(document).ready(function(){
            var time = null;

            {#* Para que el apartado correspondiente en la barra lateral esté activo #}
            \$(\"#data_management_li\").addClass(\"active\");
            {#* #################################################################### #}

            \$(\"#province-input\").chosen();
            \$(\"#town-input\").chosen();

            \$('#province-input').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#town-input\").empty();
                    \$(\"#town-input\").append('<option value=\"\"> ---- </option>');
                    \$(\"#town-input\").attr('disabled', 'disabled');
                    \$(\"#town-input\").trigger(\"chosen:updated\");
                } else {
                    \$.ajax({
                        url:'{{ path('town_chosen_list') }}',
                        data: {\"province\": \$(this).val() },
                        type:\"POST\",
                        dataType: \"json\",
                        success: function(data){
                            \$(\"#town-input\").empty();
                            \$(\"#town-input\").append('<option value=\"\"> ---- </option>');
                            for(var i = 0 ; i < data.length; i++){
                                var newOption = \$('<option>');
                                newOption.val(data[i].id);
                                newOption.html(data[i].name);
                                \$('#town-input').append(newOption.clone());
                            }
                            \$(\"#town-input\").removeAttr('disabled');
                            \$(\"#town-input\").trigger(\"chosen:updated\");
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                        }
                    });
                }
            });

            {#* Borra el contenido de los inputs en el datatable #}
            \$(\"#delete_filters_value\").click(function() {
                \$(\".filter_inputs\").val('');
                \$(\"#province-input\").val('');
                \$('#province-input').trigger(\"chosen:updated\");
                \$('#province-input').trigger(\"change\");
                reloadDataTable();
            });  

            \$(\"#delete_search_value\").click(function() {
                \$(\"#search-input\").val('');
                reloadDataTable();
            });
            {#* ################################################ #}

            {#* Activa los botones de búsqueda y filtro #}
            \$(\"#filter-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
                    \$(this).addClass(\"active\");
                    \$(\"#search-input\").val('');
                    \$(\"#search-button\").removeClass(\"active\");
                    \$(\"#search_panel\").removeClass(\"in\");
                    \$(\"#filter_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#search_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#search_panel\").removeClass(\"in\");
                    }, 250);
                }
            });

            \$(\"#search-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
                    \$(this).addClass(\"active\");
                    \$(\".filter_inputs\").val('');
                    \$(\"#filter-button\").removeClass(\"active\");
                    \$(\"#search_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#filter_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#filter_panel\").removeClass(\"in\");
                    }, 250);
                }
            });
            {#* ####################################### #}

            createTable();

            \$('#search-input').keyup(function() {
                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.filter_inputs').keyup(function() {

                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.select_inputs').on('change', function(){
                reloadDataTable();
            });

            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'{{ path('branch_offices_export_excel') }}',
                    data: {
                        'form_filters': \$('#form_filters').serializeArray(),
                        'search_filter': \$('#search-input').val(),
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

        });

        {# Creación Datatable #}
        function createTable() {
            \$('#table_branch_offices').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [0, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [0,1,2,3,4,5] },
                    { orderable: false, targets: 6 }
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
                    url: \"{{ path('branch_offices_table') }}\",
                    method: 'POST',
                    data: {

                    }
                },
                initComplete: function() {
                },
                drawCallback: function() {
                    // check checked
                    \$('.checkboxBranchOffice').each(function(){
                        var crane_id = \$(this).data('crane');
                        var index = arrayChecked.indexOf(crane_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxBranchOffice').change(function(){
                        var crane_id = \$(this).data('crane');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(crane_id)) {
                                arrayChecked.push(crane_id);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked.indexOf(crane_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        {#* Se comprueba que haya checkboxes activos para activar o desactivar botones de modificación #}
                        if(arrayChecked.length) {
                            if(arrayChecked.length > 1) {
                                \$(\".rates-button\").prop('disabled', true);
                            } else {
                                \$(\".rates-button\").prop('disabled', false);
                            }
                        } else {
                            \$(\".rates-button\").prop('disabled', true);
                        }

                    });// change

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxBranchOffice imgCheckbox' data-crane='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'town'},
                    {data: 'province'},
                    {data: {}, render: function(data, row) {

                            if( data['telephone'] != null ) {
                                let text = data['telephone'];
                                let aux = text.replace(\",,\", \",\");
                                let result = aux.replaceAll(\",\",\"<br/>\")
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'sinisterEmail'},
                    {data: 'invoicingEmail'},
                    {data: {}, render: function(data, row) {

                            if( data['contactPerson'] != null ) {
                                let text = data['contactPerson'];
                                let aux = text.replace(\",,\", \",\");
                                let result = aux.replaceAll(\",\",\"<br/>\")
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: {}, render: function(data, row) {
                            html = '<form action=\"{{ path(\"detail_branch_office\") }}\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"branchOfficeId\" value=\"' + data[\"id\"] + '\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        {# #### Datatable #### #}

        {# Función encargada de recargar el ajax del datatable #}
        let reloadDataTable = function() {
            var form_filters = new Object();
            \$('.filter_inputs').each(function () {
                form_filters[\$(this).attr('name')] = \$(this).val();
            });

            var fullFilters = {
                'form_filters': form_filters,
                'search_filter': \$('#search-input').val()
            }

            \$(\"#table_branch_offices\").DataTable().search(JSON.stringify(fullFilters)).draw();
        }


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

        \$('.checkboxFullList').change(function(){
            var active = false;
            if (\$(this).is(\":checked\")) {
                active = true;
            }

            \$('.checkboxBranchOffice').each(function(){
                \$(this).prop('checked', active);
                \$(this).trigger('update');
                \$(this).trigger('change');
            });// change
        });
        {# ################################################### #}
        {#* Funcionalidad al hacer clic en el botón TARIFAS #}
        \$(\".rates-button\").click(function() {
            if (!arrayChecked.length){
                swal.fire({
                    title: '{{ (\"general.needSelectRow\")|trans }}',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            }
            else{
                \$('#modal-rates').modal();

                \$.ajax({
                    url:'{{ path('branch_offices_rates') }}',
                    data: {
                        'branchOfficeId': arrayChecked[0]
                    },
                    type:\"POST\",
                    success: function(data){
                        \$('#modalRatesContent').html(data);
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
            }
        });
        {# ################################################### #}
    </script>

{% endblock %}", "frontend/collaborator/branchOffices.html.twig", "/var/www/rira_web/templates/frontend/collaborator/branchOffices.html.twig");
    }
}
