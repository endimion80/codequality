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

/* frontend/collaborator/reporting.html.twig */
class __TwigTemplate_7535b7afd69e14d5b5f38cbef0ddff74022192e4955d5c26e8e45e7e7c0f54be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/reporting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/reporting.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/reporting.html.twig", 1);
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
        <ul id='menuDataTable' class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-2\">
                <a class=\"nav-link active\" data-toggle=\"tab\" data-table='Interventions' href=\"#tabInterventions\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reporting.intervention"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-2\">
                <a class=\"nav-link\" data-toggle=\"tab\" data-table='Invoices' href=\"#tabInvoices\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reporting.invoices"), "html", null, true);
        echo "</a>
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabInterventions\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                ";
        // line 37
        echo "                <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
                    <div id=\"top_left_div\" style=\"padding: 0;\">
                        <button type=\"button\" class=\"btn top_left-buttons delivery-note-button\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/eye.png"), "html", null, true);
        echo "\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.btn.deliveryNote")), "html", null, true);
        echo "</button>
                        ";
        // line 41
        echo "                        <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
                    </div>
                    <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                        <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel_tabInterventions\" data-toggle=\"collapse\"> <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/filter.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.filter"), "html", null, true);
        echo "</button>
                        <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel_tabInterventions\" data-toggle=\"collapse\"> <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/search.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.search"), "html", null, true);
        echo "</button>
                    </div>
                </div>

                 ";
        // line 50
        echo "                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"filter_panel_tabInterventions\" class=\"filter_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"panel-custom-heading\">
                                <div class=\"panel-control\">
                                    <img class=\"delete_filters_value\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\">
                                </div>
                                <h3 class=\"panel-title\" style=\"font-style: italic;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter"), "html", null, true);
        echo "</h3>
                            </div>
                            <form id='filter_Interventions'>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.code"), "html", null, true);
        echo "</label>
                                        <input name=\"id\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.code"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.reference"), "html", null, true);
        echo "</label>
                                        <input name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.reference"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.dateCreation"), "html", null, true);
        echo "</label>
                                        <input name=\"reception_date\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.dateCreation"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>
                                    
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.town"), "html", null, true);
        echo "</label>
                                        <input name=\"town\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.town"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                </div>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.isRis"), "html", null, true);
        echo "</label>
                                        <select name=\"is_ris\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            <option value ='0'>";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no_ris"), "html", null, true);
        echo "</option>
                                            <option value ='1'>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.ris"), "html", null, true);
        echo "</option>
                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.risType"), "html", null, true);
        echo "</label>
                                        <select name=\"management_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crane_management_type"]) || array_key_exists("crane_management_type", $context) ? $context["crane_management_type"] : (function () { throw new RuntimeError('Variable "crane_management_type" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["management_type"]) {
            // line 97
            echo "                                                <option value ='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["management_type"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["management_type"], "description", [], "any", false, false, false, 97)), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['management_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.status"), "html", null, true);
        echo "</label>
                                        <select name=\"intervention_status\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervention_status"]) || array_key_exists("intervention_status", $context) ? $context["intervention_status"] : (function () { throw new RuntimeError('Variable "intervention_status" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 107
            echo "                                                <option value ='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 107), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 107)), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                        </select>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                ";
        // line 119
        echo "
                ";
        // line 121
        echo "                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"search_panel_tabInterventions\" class=\"search_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"input-group\">
                                <input id=\"search-input-Interventions\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\" autocomplete=\"false\">
                                <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 132
        echo "
                <hr class=\"datatable_hr\">

                <table id=\"tableInterventions\" class=\"table\">
                    <thead>
                        <tr>
                            <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                            <th>";
        // line 139
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.reference")), "html", null, true);
        echo "</th>
                            <th>";
        // line 140
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.dateFrom")), "html", null, true);
        echo "</th>
                            <th>";
        // line 141
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.dateTo")), "html", null, true);
        echo "</th>
                            <th>";
        // line 142
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.town")), "html", null, true);
        echo "</th>
                            <th>";
        // line 143
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.km")), "html", null, true);
        echo "</th>
                            <th>";
        // line 144
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.ris")), "html", null, true);
        echo "</th>
                            <th>";
        // line 145
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.risType")), "html", null, true);
        echo "</th>
                            <th>";
        // line 146
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datatable.reporting.status")), "html", null, true);
        echo "</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>

            </div>    
            <div class=\"tab-pane\" id=\"tabInvoices\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                
                <h1>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.toDefine"), "html", null, true);
        echo "</h1>

                ";
        // line 158
        echo "                ";
        // line 168
        echo "
                ";
        // line 170
        echo "                ";
        // line 233
        echo "
                ";
        // line 235
        echo "                ";
        // line 246
        echo "                ";
        // line 265
        echo "            </div>    
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 273
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 274
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jszip/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jszip/jszip-utils.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jszip/filesaver.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        var table = [];
        table['Interventions'] = null;
        table['Invoices'] = null;

        var arrayChecked = [];
        arrayChecked['Interventions'] = [];
        arrayChecked['Invoices'] = [];

        \$(document).ready(function(){
            var time = null;

            \$(\"#reporting_li\").addClass(\"active\");
            \$(\".chosen-select\").chosen({disable_search: false});

            // efecto tabs
            \$('.nav-link').click(function(){
                \$('.nav-link').removeClass('active');
                \$('.tab-active-hr').remove();
                \$(this).addClass('active');
                \$(this).append(\"<hr class='tab-active-hr'>\");

                var tableSelected = getActiveTable();

                if (table[tableSelected] != null){
                    \$('#table' + tableSelected).DataTable().destroy();
                    table[tableSelected] = null;
                }

                switch(tableSelected){
                    case 'Interventions':  
                        createTableInterventions(); break;
                    case 'Invoices':
                        createTableInvoices();  break;
                }
            });

            \$('.nav-link').first().trigger('click'); // accionamos el primero por defecto

            \$('.delivery-note-button').click(function(){
                var tableActive = getActiveTable(); 
                
                if (!arrayChecked[tableActive].length){
                    swal.fire({
                        title: '";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.needSelectRow"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'warning',
                        showConfirmButton: true
                    });
                }
                else{
                    swal.fire({
                        title: '";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.loading"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'warning',
                        showConfirmButton: false
                    });
                    console.log(arrayChecked[tableActive]);
                    \$.ajax({
                        url:'";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_delivery_note");
        echo "',
                        data: {
                            'interventionList': arrayChecked[tableActive],
                            'smartPreview': true
                        },
                        type:\"POST\",
                        success: function(data){
                            if (!data.status){
                                swal.fire({
                                    title: '";
        // line 348
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
        // line 360
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visualize_file");
        echo "\");
                                    else if (data.data.type == 'download')
                                        \$(formTmp).attr('action',\"";
        // line 362
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
        // line 374
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
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_file_get", ["fileName" => "XXXXX", "filePath" => "YYYYY"]), "html", null, true);
        echo "\";

                                    function urlToPromise(url) {
                                        return new Promise(function(resolve, reject) {
                                            JSZipUtils.getBinaryContent(url, function (err, data) {
                                                if(err) {
                                                    reject(err);
                                                    swal.fire({
                                                        title: '";
        // line 390
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
        // line 415
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
        // line 430
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

            // visualización / descarga fotos ¿?
            \$('.photos-button').click(function(){
                swal.fire({
                    title: '";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.toDefine"), "html", null, true);
        echo " Fotos',
                    html: '',
                    icon: 'warning',
                    showConfirmButton: true
                });
            });

            ";
        // line 452
        echo "            \$(\".delete_filters_value\").click(function() {
                \$(\".filter_inputs\").val('');
                \$(\".select_inputs\").trigger(\"chosen:updated\");
                reloadDataTable();
            });  

            \$(\".delete_search_value\").click(function() {
                \$(\".search-input\").val('');
                reloadDataTable();
            });

            /* TODOOO */
            function reloadDataTable(){
                var tableActive = getActiveTable(); 
                var form_filters = new Object();
                \$('#filter_' + tableActive+ ' .filter_inputs').each(function () {
                    form_filters[\$(this).attr('name')] = \$(this).val();
                });

                var fullFilters = {
                    'form_filters': form_filters,
                    'search_filter': \$('#search-input-' + tableActive).val(),
                    'type': tableActive
                }
                
                \$(\"#table\" + tableActive).DataTable().search(JSON.stringify(fullFilters)).draw();
                
                // Si lo activamos, cada vez que se realice una búsqueda con el filtros
                //arrayChecked[tableActive] = []; //? duda de si hacerlo
            }

            \$('.search-input').keyup(function() {
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
                var tableActive = getActiveTable(); 

                if (!arrayChecked[tableActive].length){
                    swal.fire({
                        title: '";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.needSelectRow"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'warning',
                        showConfirmButton: true
                    });
                }
                else{
                    \$.ajax({
                        url:'";
        // line 515
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting_table_export_excel");
        echo "',
                        data: {
                            'interventionList': arrayChecked[tableActive]
                        },
                        type:\"POST\",
                        success: function(data){
                            //console.log(data);
                            
                            swal.fire({
                                title: '";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.success"), "html", null, true);
        echo "',
                                html: \"\",
                                icon: 'success',
                                showConfirmButton: true
                            });
                            if (data.status){
                                var fileName = data.data.fileName;
                                var filePath = data.data.filePath;
                                
                                var formTmp = document.createElement('form');
                                \$(formTmp).attr('action',\"";
        // line 534
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
                            }
                        },
                        error:function(err){
                            swal.fire({
                                title: '";
        // line 548
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
        });// document ready

        ";
        // line 560
        echo "        function createTableInterventions() {
            table['Interventions'] = \$('#tableInterventions').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [0, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,4,5,7,8] },
                    { orderable: false, targets: [0,3,6,9] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.lengthMenu.all"), "html", null, true);
        echo "\"]
                ],
                responsive: false,
                autoWidth: true,
                scrollX: true,
                processing: false,
                serverSide: true,
                pagingType: \"full_numbers\",
                language: {
                    \"sProcessing\": \"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 592
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
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 605
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting_table");
        echo "\",
                    method: 'POST',
                    data: {
                        'type': 'Interventions'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxInterventions').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['Interventions'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxInterventions').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['Interventions'].includes(intervention_id))
                                arrayChecked['Interventions'].push(intervention_id);

                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked['Interventions'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['Interventions'].splice(index, 1);

                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }
                    });// change
                   
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxInterventions imgCheckbox' data-intervention='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'reception_date'},
                    {data: 'date_last_update'},
                    {data: 'town'},
                    {data: 'distance'},
                    {data: 'is_ris'},
                    {data: 'crane_management_type'},
                    {data: 'intervention_status'},
                    {data: {}, render: function(data, row) {
                            html = '<form action=\"";
        // line 658
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_details");
        echo "\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }

        function createTableInvoices(){
            swal.fire({
                title: '";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.toDefine"), "html", null, true);
        echo " - Facturacion',
                html: '',
                icon: 'warning',
                showConfirmButton: true
            });
        }
/*
        function createTableInvoices() {
            table['Invoices'] = \$('#tableInvoices').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [0, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,4,5,7] },
                    { orderable: false, targets: [0,3,6,8] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.lengthMenu.all"), "html", null, true);
        echo "\"]
                ],
                responsive: false,
                autoWidth: true,
                scrollX: true,
                processing: false,
                serverSide: true,
                pagingType: \"full_numbers\",
                language: {
                    \"sProcessing\": \"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 710
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
        // line 718
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 719
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 723
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interventions_table");
        echo "\",
                    method: 'POST',
                    data: {
                        'type': 'Invoices'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxInvoices').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['Invoices'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxInvoices').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['Invoices'].includes(intervention_id))
                                arrayChecked['Invoices'].push(intervention_id);
                        }
                        else{
                            var index = arrayChecked['Invoices'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['Invoices'].splice(index, 1);
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxInvoices imgCheckbox' data-intervention='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'reception_date'},
                    {data: 'located_Vh_Date'},
                    
                    {data: {}, render: function(data, row) {
                        var html = data.vh_address;
                        if (data.zip_code != '' && data.zip_code !== undefined)
                            html += ' ' +  data.zip_code;
                        return html;
                        }
                    },

                    {data: 'failure_type'},
                    {data: 'is_ris'},
                    {data: 'request_type'},
                    {data: {}, render: function(data, row) {
                            html = '<form action=\"";
        // line 778
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_details");
        echo "\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }
*/
        ";
        // line 790
        echo "
        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 793
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"";
        // line 798
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 799
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });
        }

        \$('.checkboxFullList').change(function(){
            var tableActive = getActiveTable(); 
            
            var active = false;
            if (\$(this).is(\":checked\"))
                active = true;
            
            \$('.checkbox' + tableActive).each(function(){
                \$(this).prop('checked', active);
                \$(this).trigger('update');
                \$(this).trigger('change');
            });// change
        });

        function getActiveTable(){
            var tableActive = '';                 
            \$('#menuDataTable li a').each(function(){
                if (\$(this).hasClass('active'))
                    tableActive = \$(this).data('table');
            });
            return tableActive;
        }

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/reporting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1133 => 799,  1129 => 798,  1122 => 794,  1118 => 793,  1113 => 790,  1099 => 778,  1041 => 723,  1034 => 719,  1030 => 718,  1019 => 710,  1013 => 707,  1008 => 705,  1004 => 704,  1000 => 703,  996 => 702,  992 => 701,  988 => 700,  984 => 699,  972 => 690,  950 => 671,  934 => 658,  878 => 605,  871 => 601,  867 => 600,  856 => 592,  850 => 589,  845 => 587,  841 => 586,  837 => 585,  833 => 584,  829 => 583,  825 => 582,  821 => 581,  809 => 572,  795 => 560,  781 => 548,  764 => 534,  751 => 524,  739 => 515,  728 => 507,  671 => 452,  661 => 444,  644 => 430,  626 => 415,  598 => 390,  587 => 382,  576 => 374,  561 => 362,  556 => 360,  541 => 348,  529 => 339,  519 => 332,  508 => 324,  459 => 278,  455 => 277,  451 => 276,  445 => 274,  435 => 273,  419 => 265,  417 => 246,  415 => 235,  412 => 233,  410 => 170,  407 => 168,  405 => 158,  400 => 155,  388 => 146,  384 => 145,  380 => 144,  376 => 143,  372 => 142,  368 => 141,  364 => 140,  360 => 139,  351 => 132,  343 => 126,  339 => 125,  333 => 121,  330 => 119,  319 => 109,  308 => 107,  304 => 106,  298 => 103,  292 => 99,  281 => 97,  277 => 96,  271 => 93,  263 => 88,  259 => 87,  253 => 84,  244 => 78,  240 => 77,  233 => 73,  229 => 72,  222 => 68,  218 => 67,  211 => 63,  207 => 62,  199 => 57,  194 => 55,  187 => 50,  178 => 45,  172 => 44,  163 => 41,  157 => 39,  153 => 37,  137 => 23,  130 => 19,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <ul id='menuDataTable' class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-2\">
                <a class=\"nav-link active\" data-toggle=\"tab\" data-table='Interventions' href=\"#tabInterventions\">{{\"reporting.intervention\"|trans}}</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-2\">
                <a class=\"nav-link\" data-toggle=\"tab\" data-table='Invoices' href=\"#tabInvoices\">{{\"reporting.invoices\"|trans}}</a>
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabInterventions\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                {# Bloque de botones de la parte superior de la tabla #}
                <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
                    <div id=\"top_left_div\" style=\"padding: 0;\">
                        <button type=\"button\" class=\"btn top_left-buttons delivery-note-button\"> <img src=\"{{asset(\"media/datatables/eye.png\")}}\" height=\"18px\"> &nbsp; {{('datatable.btn.deliveryNote')|trans|upper}}</button>
                        {#<button type=\"button\" class=\"btn top_left-buttons photos-button\"> <img src=\"{{asset(\"media/datatables/eye.png\")}}\" height=\"18px\"> &nbsp; {{('datatable.btn.photos')|trans|upper}}</button>#}
                        <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
                    </div>
                    <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                        <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel_tabInterventions\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/filter.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.filter')|trans}}</button>
                        <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel_tabInterventions\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/search.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.search')|trans}}</button>
                    </div>
                </div>

                 {# Bloque de filtros en datatable #}
                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"filter_panel_tabInterventions\" class=\"filter_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"panel-custom-heading\">
                                <div class=\"panel-control\">
                                    <img class=\"delete_filters_value\" src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\">
                                </div>
                                <h3 class=\"panel-title\" style=\"font-style: italic;\">{{\"general.filter\"|trans}}</h3>
                            </div>
                            <form id='filter_Interventions'>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"data_management.input.label.code\"|trans}}</label>
                                        <input name=\"id\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.code\"|trans}}\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.reference\"|trans}}</label>
                                        <input name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"dataTable.intervention.placeholder.reference\"|trans}}\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.dateCreation\"|trans}}</label>
                                        <input name=\"reception_date\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"dataTable.intervention.placeholder.dateCreation\"|trans}}\" spellcheck=\"false\">
                                    </div>
                                    
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.town\"|trans}}</label>
                                        <input name=\"town\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"dataTable.intervention.placeholder.town\"|trans}}\" spellcheck=\"false\">
                                    </div>

                                </div>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.isRis\"|trans}}</label>
                                        <select name=\"is_ris\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            <option value ='0'>{{\"general.no_ris\"|trans}}</option>
                                            <option value ='1'>{{\"general.ris\"|trans}}</option>
                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"datatable.reporting.risType\"|trans}}</label>
                                        <select name=\"management_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            {% for management_type in crane_management_type %}
                                                <option value ='{{ management_type.id }}'>{{management_type.description|trans}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"datatable.reporting.status\"|trans}}</label>
                                        <select name=\"intervention_status\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            {% for status in intervention_status %}
                                                <option value ='{{ status.id }}'>{{status.description|trans}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {# ############################## #}

                {# Bloque de búsqueda en datatable #}
                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"search_panel_tabInterventions\" class=\"search_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"input-group\">
                                <input id=\"search-input-Interventions\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\" autocomplete=\"false\">
                                <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                {# ############################### #}

                <hr class=\"datatable_hr\">

                <table id=\"tableInterventions\" class=\"table\">
                    <thead>
                        <tr>
                            <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                            <th>{{\"datatable.reporting.reference\"|trans|upper}}</th>
                            <th>{{\"datatable.reporting.dateFrom\"|trans|upper}}</th>
                            <th>{{\"datatable.reporting.dateTo\"|trans|upper}}</th>
                            <th>{{\"datatable.reporting.town\"|trans|upper}}</th>
                            <th>{{\"datatable.reporting.km\"|trans|upper}}</th>
                            <th>{{\"datatable.reporting.ris\"|trans|upper}}</th>
                            <th>{{\"datatable.reporting.risType\"|trans|upper}}</th>
                            <th>{{\"datatable.reporting.status\"|trans|upper}}</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>

            </div>    
            <div class=\"tab-pane\" id=\"tabInvoices\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                
                <h1>{{ (\"general.toDefine\")|trans }}</h1>

                {# Bloque de botones de la parte superior de la tabla #}
                {#
                <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
                    <div id=\"top_left_div\" style=\"padding: 0;\">
                        <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
                    </div>
                    <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                        <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel_tabInvoices\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/filter.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.filter')|trans}}</button>
                        <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel_tabInvoices\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/search.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.search')|trans}}</button>
                    </div>
                </div>#}

                {# Bloque de filtros en datatable #}
                {#
                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"filter_panel_tabInvoices\" class=\"filter_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"panel-custom-heading\">
                                <div class=\"panel-control\">
                                    <img class=\"delete_filters_value\" src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\">
                                </div>
                                <h3 class=\"panel-title\" style=\"font-style: italic;\">{{\"general.filter\"|trans}}</h3>
                            </div>
                            <form id='filter_Invoices'>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"data_management.input.label.code\"|trans}}</label>
                                        <input name=\"id\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.code\"|trans}}\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.reference\"|trans}}</label>
                                        <input name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"dataTable.intervention.placeholder.reference\"|trans}}\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.dateCreation\"|trans}}</label>
                                        <input name=\"reception_date\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"dataTable.intervention.placeholder.dateCreation\"|trans}}\" spellcheck=\"false\">
                                    </div>
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.address\"|trans}}</label>
                                        <input name=\"vh_address\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"dataTable.intervention.placeholder.address\"|trans}}\" spellcheck=\"false\">
                                    </div>
                                </div>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.fails\"|trans}}</label>
                                        <select name=\"failure_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            {% for failure_type in failure_types %}
                                                <option value ='{{ failure_type.id }}'>{{failure_type.description|trans}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.isRis\"|trans}}</label>
                                        <select name=\"is_ris\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            <option value ='0'>{{\"general.no_ris\"|trans}}</option>
                                            <option value ='1'>{{\"general.ris\"|trans}}</option>
                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">{{\"dataTable.intervention.request\"|trans}}</label>
                                        <input name=\"request_type\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"dataTable.intervention.placeholder.request\"|trans}}\" spellcheck=\"false\">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {# ############################## #}

                {# Bloque de búsqueda en datatable #}
                {#<div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"search_panel_tabInvoices\" class=\"search_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"input-group\">
                                <input id=\"search-input-Invoices\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\" autocomplete=\"false\">
                                <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                {# ############################### #}
                {#
                <hr class=\"datatable_hr\">

                <table id=\"tableInvoices\" class=\"table\">
                    <thead>
                        <tr>
                            <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                            <th>{{\"dataTable.intervention.reference\"|trans|upper}}</th>
                            <th>{{\"dataTable.intervention.dateCreation\"|trans|upper}}</th>
                            <th>{{\"dataTable.intervention.datePickup\"|trans|upper}}</th>
                            <th>{{\"dataTable.intervention.address\"|trans|upper}}</th>
                            <th>{{\"dataTable.intervention.fails\"|trans|upper}}</th>
                            <th>{{\"dataTable.intervention.isRis\"|trans|upper}}</th>
                            <th>{{\"dataTable.intervention.request\"|trans|upper}}</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
                #}
            </div>    
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}

    <script src=\"{{ asset('plugins/jszip/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/jszip/jszip-utils.js') }}\"></script>
    <script src=\"{{ asset('plugins/jszip/filesaver.min.js')}}\"></script>

    <script>
        var table = [];
        table['Interventions'] = null;
        table['Invoices'] = null;

        var arrayChecked = [];
        arrayChecked['Interventions'] = [];
        arrayChecked['Invoices'] = [];

        \$(document).ready(function(){
            var time = null;

            \$(\"#reporting_li\").addClass(\"active\");
            \$(\".chosen-select\").chosen({disable_search: false});

            // efecto tabs
            \$('.nav-link').click(function(){
                \$('.nav-link').removeClass('active');
                \$('.tab-active-hr').remove();
                \$(this).addClass('active');
                \$(this).append(\"<hr class='tab-active-hr'>\");

                var tableSelected = getActiveTable();

                if (table[tableSelected] != null){
                    \$('#table' + tableSelected).DataTable().destroy();
                    table[tableSelected] = null;
                }

                switch(tableSelected){
                    case 'Interventions':  
                        createTableInterventions(); break;
                    case 'Invoices':
                        createTableInvoices();  break;
                }
            });

            \$('.nav-link').first().trigger('click'); // accionamos el primero por defecto

            \$('.delivery-note-button').click(function(){
                var tableActive = getActiveTable(); 
                
                if (!arrayChecked[tableActive].length){
                    swal.fire({
                        title: '{{ (\"general.needSelectRow\")|trans }}',
                        html: '',
                        icon: 'warning',
                        showConfirmButton: true
                    });
                }
                else{
                    swal.fire({
                        title: '{{ (\"general.loading\")|trans }}',
                        html: '',
                        icon: 'warning',
                        showConfirmButton: false
                    });
                    console.log(arrayChecked[tableActive]);
                    \$.ajax({
                        url:'{{ path('download_delivery_note') }}',
                        data: {
                            'interventionList': arrayChecked[tableActive],
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
                   
                }
            });

            // visualización / descarga fotos ¿?
            \$('.photos-button').click(function(){
                swal.fire({
                    title: '{{ (\"general.toDefine\")|trans }} Fotos',
                    html: '',
                    icon: 'warning',
                    showConfirmButton: true
                });
            });

            {#* Borra el contenido de los inputs en el datatable #}
            \$(\".delete_filters_value\").click(function() {
                \$(\".filter_inputs\").val('');
                \$(\".select_inputs\").trigger(\"chosen:updated\");
                reloadDataTable();
            });  

            \$(\".delete_search_value\").click(function() {
                \$(\".search-input\").val('');
                reloadDataTable();
            });

            /* TODOOO */
            function reloadDataTable(){
                var tableActive = getActiveTable(); 
                var form_filters = new Object();
                \$('#filter_' + tableActive+ ' .filter_inputs').each(function () {
                    form_filters[\$(this).attr('name')] = \$(this).val();
                });

                var fullFilters = {
                    'form_filters': form_filters,
                    'search_filter': \$('#search-input-' + tableActive).val(),
                    'type': tableActive
                }
                
                \$(\"#table\" + tableActive).DataTable().search(JSON.stringify(fullFilters)).draw();
                
                // Si lo activamos, cada vez que se realice una búsqueda con el filtros
                //arrayChecked[tableActive] = []; //? duda de si hacerlo
            }

            \$('.search-input').keyup(function() {
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
                var tableActive = getActiveTable(); 

                if (!arrayChecked[tableActive].length){
                    swal.fire({
                        title: '{{ (\"general.needSelectRow\")|trans }}',
                        html: '',
                        icon: 'warning',
                        showConfirmButton: true
                    });
                }
                else{
                    \$.ajax({
                        url:'{{ path('reporting_table_export_excel') }}',
                        data: {
                            'interventionList': arrayChecked[tableActive]
                        },
                        type:\"POST\",
                        success: function(data){
                            //console.log(data);
                            
                            swal.fire({
                                title: '{{ (\"general.export.success\")|trans }}',
                                html: \"\",
                                icon: 'success',
                                showConfirmButton: true
                            });
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
                }
            });
        });// document ready

        {# Creación Datatable #}
        function createTableInterventions() {
            table['Interventions'] = \$('#tableInterventions').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [0, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,4,5,7,8] },
                    { orderable: false, targets: [0,3,6,9] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"{{('dataTable.general.lengthMenu.all')|trans}}\"]
                ],
                responsive: false,
                autoWidth: true,
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
                    url: \"{{ path('reporting_table') }}\",
                    method: 'POST',
                    data: {
                        'type': 'Interventions'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxInterventions').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['Interventions'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxInterventions').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['Interventions'].includes(intervention_id))
                                arrayChecked['Interventions'].push(intervention_id);

                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked['Interventions'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['Interventions'].splice(index, 1);

                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }
                    });// change
                   
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxInterventions imgCheckbox' data-intervention='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'reception_date'},
                    {data: 'date_last_update'},
                    {data: 'town'},
                    {data: 'distance'},
                    {data: 'is_ris'},
                    {data: 'crane_management_type'},
                    {data: 'intervention_status'},
                    {data: {}, render: function(data, row) {
                            html = '<form action=\"{{ path(\"intervention_details\") }}\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }

        function createTableInvoices(){
            swal.fire({
                title: '{{ (\"general.toDefine\")|trans }} - Facturacion',
                html: '',
                icon: 'warning',
                showConfirmButton: true
            });
        }
/*
        function createTableInvoices() {
            table['Invoices'] = \$('#tableInvoices').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [0, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,4,5,7] },
                    { orderable: false, targets: [0,3,6,8] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"{{('dataTable.general.lengthMenu.all')|trans}}\"]
                ],
                responsive: false,
                autoWidth: true,
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
                    url: \"{{ path('interventions_table') }}\",
                    method: 'POST',
                    data: {
                        'type': 'Invoices'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxInvoices').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['Invoices'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxInvoices').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['Invoices'].includes(intervention_id))
                                arrayChecked['Invoices'].push(intervention_id);
                        }
                        else{
                            var index = arrayChecked['Invoices'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['Invoices'].splice(index, 1);
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxInvoices imgCheckbox' data-intervention='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'reception_date'},
                    {data: 'located_Vh_Date'},
                    
                    {data: {}, render: function(data, row) {
                        var html = data.vh_address;
                        if (data.zip_code != '' && data.zip_code !== undefined)
                            html += ' ' +  data.zip_code;
                        return html;
                        }
                    },

                    {data: 'failure_type'},
                    {data: 'is_ris'},
                    {data: 'request_type'},
                    {data: {}, render: function(data, row) {
                            html = '<form action=\"{{ path(\"intervention_details\") }}\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }
*/
        {# #### Datatable #### #}

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
            var tableActive = getActiveTable(); 
            
            var active = false;
            if (\$(this).is(\":checked\"))
                active = true;
            
            \$('.checkbox' + tableActive).each(function(){
                \$(this).prop('checked', active);
                \$(this).trigger('update');
                \$(this).trigger('change');
            });// change
        });

        function getActiveTable(){
            var tableActive = '';                 
            \$('#menuDataTable li a').each(function(){
                if (\$(this).hasClass('active'))
                    tableActive = \$(this).data('table');
            });
            return tableActive;
        }

    </script>

{% endblock %}", "frontend/collaborator/reporting.html.twig", "/var/www/rira_web/templates/frontend/collaborator/reporting.html.twig");
    }
}
