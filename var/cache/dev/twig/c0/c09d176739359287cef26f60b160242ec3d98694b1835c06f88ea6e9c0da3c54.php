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

/* frontend/collaborator/interventionList.html.twig */
class __TwigTemplate_d38afdf25eaf0bbe142afa5b4e64acaee4f1a1a86150d68c01efcf249c9a3eb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/interventionList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/interventionList.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/interventionList.html.twig", 1);
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
                <a class=\"nav-link active\" data-toggle=\"tab\" data-table='PendingClose' href=\"#tabPendingClose\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.pendingToClose"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-2\">
                <a class=\"nav-link\" data-toggle=\"tab\" data-table='PendingFinish' href=\"#tabPendingFinish\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.pentingToFinish"), "html", null, true);
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
            <div class=\"tab-pane active\" id=\"tabPendingClose\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                ";
        // line 37
        echo "                <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
                    <div id=\"top_left_div\" style=\"padding: 0;\">
                        <button type=\"button\" class=\"btn top_left-buttons send-mail-button\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/mail.png"), "html", null, true);
        echo "\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.sendNotification"), "html", null, true);
        echo "</button>
                        <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
                    </div>
                    <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                        <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel_tabPendingClose\" data-toggle=\"collapse\"> <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/filter.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.filter"), "html", null, true);
        echo "</button>
                        <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel_tabPendingClose\" data-toggle=\"collapse\"> <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/search.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.search"), "html", null, true);
        echo "</button>
                    </div>
                </div>

                 ";
        // line 49
        echo "                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"filter_panel_tabPendingClose\" class=\"filter_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"panel-custom-heading\">
                                <div class=\"panel-control\">
                                    <img class=\"delete_filters_value\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\">
                                </div>
                                <h3 class=\"panel-title\" style=\"font-style: italic;\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter"), "html", null, true);
        echo "</h3>
                            </div>
                            <form id='filter_PendingClose'>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.code"), "html", null, true);
        echo "</label>
                                        <input name=\"id\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.code"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.reference"), "html", null, true);
        echo "</label>
                                        <input name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.reference"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.dateCreation"), "html", null, true);
        echo "</label>
                                        <input name=\"reception_date\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.dateCreation"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.address"), "html", null, true);
        echo "</label>
                                        <input name=\"vh_address\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.address"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>
                                </div>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.fails"), "html", null, true);
        echo "</label>
                                        <select name=\"failure_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["failure_types"]) || array_key_exists("failure_types", $context) ? $context["failure_types"] : (function () { throw new RuntimeError('Variable "failure_types" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["failure_type"]) {
            // line 85
            echo "                                                <option value ='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failure_type"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["failure_type"], "description", [], "any", false, false, false, 85)), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failure_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.isRis"), "html", null, true);
        echo "</label>
                                        <select name=\"is_ris\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            <option value ='0'>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no_ris"), "html", null, true);
        echo "</option>
                                            <option value ='1'>";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.ris"), "html", null, true);
        echo "</option>
                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.request"), "html", null, true);
        echo "</label>
                                        <input name=\"request_type\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.request"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                ";
        // line 111
        echo "
                ";
        // line 113
        echo "                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"search_panel_tabPendingClose\" class=\"search_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"input-group\">
                                <input id=\"search-input-PendingClose\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\" autocomplete=\"false\">
                                <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 124
        echo "
                <hr class=\"datatable_hr\">

                <table id=\"tablePendingClose\" class=\"table\">
                    <thead>
                        <tr>
                            <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                            <th>";
        // line 131
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.reference")), "html", null, true);
        echo "</th>
                            <th>";
        // line 132
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.dateCreation")), "html", null, true);
        echo "</th>
                            <th>";
        // line 133
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.datePickup")), "html", null, true);
        echo "</th>
                            <th>";
        // line 134
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.address")), "html", null, true);
        echo "</th>
                            <th>";
        // line 135
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.fails")), "html", null, true);
        echo "</th>
                            <th>";
        // line 136
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.isRis")), "html", null, true);
        echo "</th>
                            <th>";
        // line 137
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.request")), "html", null, true);
        echo "</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>

            </div>    
            <div class=\"tab-pane\" id=\"tabPendingFinish\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                ";
        // line 146
        echo "                <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
                    <div id=\"top_left_div\" style=\"padding: 0;\">
                        <button type=\"button\" class=\"btn top_left-buttons send-mail-button\"> <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/mail.png"), "html", null, true);
        echo "\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.sendNotification"), "html", null, true);
        echo "</button>
                        <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
                    </div>
                    <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                        <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel_tabPendingFinish\" data-toggle=\"collapse\"> <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/filter.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.filter"), "html", null, true);
        echo "</button>
                        <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel_tabPendingFinish\" data-toggle=\"collapse\"> <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/search.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.search"), "html", null, true);
        echo "</button>
                    </div>
                </div>

                 ";
        // line 158
        echo "                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"filter_panel_tabPendingFinish\" class=\"filter_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"panel-custom-heading\">
                                <div class=\"panel-control\">
                                    <img class=\"delete_filters_value\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\">
                                </div>
                                <h3 class=\"panel-title\" style=\"font-style: italic;\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter"), "html", null, true);
        echo "</h3>
                            </div>
                            <form id='filter_PendingFinish'>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.code"), "html", null, true);
        echo "</label>
                                        <input name=\"id\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.code"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.reference"), "html", null, true);
        echo "</label>
                                        <input name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.reference"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.dateCreation"), "html", null, true);
        echo "</label>
                                        <input name=\"reception_date\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.dateCreation"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.address"), "html", null, true);
        echo "</label>
                                        <input name=\"vh_address\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.address"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>
                                </div>
                                <div class=\"row\" style=\"margin: 0;\">
                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.fails"), "html", null, true);
        echo "</label>
                                        <select name=\"failure_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["failure_types"]) || array_key_exists("failure_types", $context) ? $context["failure_types"] : (function () { throw new RuntimeError('Variable "failure_types" does not exist.', 193, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["failure_type"]) {
            // line 194
            echo "                                                <option value ='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["failure_type"], "id", [], "any", false, false, false, 194), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["failure_type"], "description", [], "any", false, false, false, 194)), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failure_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.isRis"), "html", null, true);
        echo "</label>
                                        <select name=\"is_ris\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                            <option value =''>----</option>
                                            <option value ='0'>";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no_ris"), "html", null, true);
        echo "</option>
                                            <option value ='1'>";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.ris"), "html", null, true);
        echo "</option>
                                        </select>
                                    </div>

                                    <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-3\">
                                        <label class=\"filter_labels\">";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.request"), "html", null, true);
        echo "</label>
                                        <input name=\"request_type\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.placeholder.request"), "html", null, true);
        echo "\" spellcheck=\"false\">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                ";
        // line 220
        echo "
                ";
        // line 222
        echo "                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"search_panel_tabPendingFinish\" class=\"search_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"input-group\">
                                <input id=\"search-input-PendingFinish\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\" autocomplete=\"false\">
                                <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 233
        echo "
                <hr class=\"datatable_hr\">

                <table id=\"tablePendingFinish\" class=\"table\">
                    <thead>
                        <tr>
                            <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                            <th>";
        // line 240
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.reference")), "html", null, true);
        echo "</th>
                            <th>";
        // line 241
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.dateCreation")), "html", null, true);
        echo "</th>
                            <th>";
        // line 242
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.datePickup")), "html", null, true);
        echo "</th>
                            <th>";
        // line 243
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.address")), "html", null, true);
        echo "</th>
                            <th>";
        // line 244
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.fails")), "html", null, true);
        echo "</th>
                            <th>";
        // line 245
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.isRis")), "html", null, true);
        echo "</th>
                            <th>";
        // line 246
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.intervention.request")), "html", null, true);
        echo "</th>
                            <th></th>
                        </tr>
                    </thead>
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

    // line 259
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 260
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var table = [];
        table['PendingClose'] = null;
        table['PendingFinish'] = null;

        var arrayChecked = [];
        arrayChecked['PendingClose'] = [];
        arrayChecked['PendingFinish'] = [];

        \$(document).ready(function(){
            var time = null;

            \$(\"#intervention_li\").addClass(\"active\");
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
                    case 'PendingClose':  
                        createTablePendingClose(); break;
                    case 'PendingFinish':
                        createTablePendingFinish();  break;
                }
            });

            \$('.nav-link').first().trigger('click'); // accionamos el primero por defecto

            // envío de mails ¿?
            \$('.send-mail-button').click(function(){
                swal.fire({
                    title: '";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.toDefine"), "html", null, true);
        echo "',
                    html: '',
                    icon: 'warning',
                    showConfirmButton: true
                });
            });

            ";
        // line 311
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
        // line 367
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
        // line 375
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interventions_table_export_excel");
        echo "',
                        data: {
                            'interventionList': arrayChecked[tableActive]
                        },
                        type:\"POST\",
                        success: function(data){
                            //console.log(data);
                            swal.fire({
                                title: '";
        // line 383
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
        // line 393
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
        // line 407
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
        // line 419
        echo "        function createTablePendingClose() {
            table['PendingClose'] = \$('#tablePendingClose').DataTable({
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
        // line 431
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
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 451
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
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 464
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interventions_table");
        echo "\",
                    method: 'POST',
                    data: {
                        'type': 'PendingClose'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxPendingClose').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['PendingClose'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxPendingClose').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['PendingClose'].includes(intervention_id))
                                arrayChecked['PendingClose'].push(intervention_id);

                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked['PendingClose'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['PendingClose'].splice(index, 1);

                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxPendingClose imgCheckbox' data-intervention='\"+data.id+\"'/>\";
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
        // line 523
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_details");
        echo "\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<input type=\"hidden\" name=\"mode\" value=\"read_only\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }

        function createTablePendingFinish() {
            table['PendingFinish'] = \$('#tablePendingFinish').DataTable({
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
        // line 547
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
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 567
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
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 580
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interventions_table");
        echo "\",
                    method: 'POST',
                    data: {
                        'type': 'PendingFinish'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxPendingFinish').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['PendingFinish'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxPendingFinish').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['PendingFinish'].includes(intervention_id))
                                arrayChecked['PendingFinish'].push(intervention_id);

                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked['PendingFinish'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['PendingFinish'].splice(index, 1);

                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxPendingFinish imgCheckbox' data-intervention='\"+data.id+\"'/>\";
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
        // line 639
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_details");
        echo "\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }
        ";
        // line 650
        echo "
        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 659
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
        return "frontend/collaborator/interventionList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1137 => 659,  1133 => 658,  1126 => 654,  1122 => 653,  1117 => 650,  1104 => 639,  1042 => 580,  1035 => 576,  1031 => 575,  1020 => 567,  1014 => 564,  1009 => 562,  1005 => 561,  1001 => 560,  997 => 559,  993 => 558,  989 => 557,  985 => 556,  973 => 547,  946 => 523,  884 => 464,  877 => 460,  873 => 459,  862 => 451,  856 => 448,  851 => 446,  847 => 445,  843 => 444,  839 => 443,  835 => 442,  831 => 441,  827 => 440,  815 => 431,  801 => 419,  787 => 407,  770 => 393,  757 => 383,  746 => 375,  735 => 367,  677 => 311,  667 => 303,  620 => 260,  610 => 259,  588 => 246,  584 => 245,  580 => 244,  576 => 243,  572 => 242,  568 => 241,  564 => 240,  555 => 233,  547 => 227,  543 => 226,  537 => 222,  534 => 220,  522 => 210,  518 => 209,  510 => 204,  506 => 203,  500 => 200,  494 => 196,  483 => 194,  479 => 193,  473 => 190,  465 => 185,  461 => 184,  455 => 181,  451 => 180,  444 => 176,  440 => 175,  433 => 171,  429 => 170,  421 => 165,  416 => 163,  409 => 158,  400 => 153,  394 => 152,  386 => 149,  380 => 148,  376 => 146,  365 => 137,  361 => 136,  357 => 135,  353 => 134,  349 => 133,  345 => 132,  341 => 131,  332 => 124,  324 => 118,  320 => 117,  314 => 113,  311 => 111,  299 => 101,  295 => 100,  287 => 95,  283 => 94,  277 => 91,  271 => 87,  260 => 85,  256 => 84,  250 => 81,  242 => 76,  238 => 75,  232 => 72,  228 => 71,  221 => 67,  217 => 66,  210 => 62,  206 => 61,  198 => 56,  193 => 54,  186 => 49,  177 => 44,  171 => 43,  163 => 40,  157 => 39,  153 => 37,  137 => 23,  130 => 19,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
                <a class=\"nav-link active\" data-toggle=\"tab\" data-table='PendingClose' href=\"#tabPendingClose\">{{\"intervention.pendingToClose\"|trans}}</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-2\">
                <a class=\"nav-link\" data-toggle=\"tab\" data-table='PendingFinish' href=\"#tabPendingFinish\">{{\"intervention.pentingToFinish\"|trans}}</a>
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabPendingClose\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                {# Bloque de botones de la parte superior de la tabla #}
                <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
                    <div id=\"top_left_div\" style=\"padding: 0;\">
                        <button type=\"button\" class=\"btn top_left-buttons send-mail-button\"> <img src=\"{{asset(\"media/datatables/mail.png\")}}\" height=\"18px\"> &nbsp; {{('dataTable.asitur.sendNotification')|trans}}</button>
                        <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
                    </div>
                    <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                        <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel_tabPendingClose\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/filter.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.filter')|trans}}</button>
                        <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel_tabPendingClose\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/search.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.search')|trans}}</button>
                    </div>
                </div>

                 {# Bloque de filtros en datatable #}
                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"filter_panel_tabPendingClose\" class=\"filter_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"panel-custom-heading\">
                                <div class=\"panel-control\">
                                    <img class=\"delete_filters_value\" src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\">
                                </div>
                                <h3 class=\"panel-title\" style=\"font-style: italic;\">{{\"general.filter\"|trans}}</h3>
                            </div>
                            <form id='filter_PendingClose'>
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
                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"search_panel_tabPendingClose\" class=\"search_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"input-group\">
                                <input id=\"search-input-PendingClose\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\" autocomplete=\"false\">
                                <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                {# ############################### #}

                <hr class=\"datatable_hr\">

                <table id=\"tablePendingClose\" class=\"table\">
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

            </div>    
            <div class=\"tab-pane\" id=\"tabPendingFinish\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
                {# Bloque de botones de la parte superior de la tabla #}
                <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
                    <div id=\"top_left_div\" style=\"padding: 0;\">
                        <button type=\"button\" class=\"btn top_left-buttons send-mail-button\"> <img src=\"{{asset(\"media/datatables/mail.png\")}}\" height=\"18px\"> &nbsp; {{('dataTable.asitur.sendNotification')|trans}}</button>
                        <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
                    </div>
                    <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                        <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel_tabPendingFinish\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/filter.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.filter')|trans}}</button>
                        <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel_tabPendingFinish\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/search.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.search')|trans}}</button>
                    </div>
                </div>

                 {# Bloque de filtros en datatable #}
                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"filter_panel_tabPendingFinish\" class=\"filter_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"panel-custom-heading\">
                                <div class=\"panel-control\">
                                    <img class=\"delete_filters_value\" src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\">
                                </div>
                                <h3 class=\"panel-title\" style=\"font-style: italic;\">{{\"general.filter\"|trans}}</h3>
                            </div>
                            <form id='filter_PendingFinish'>
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
                <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
                    <div id=\"search_panel_tabPendingFinish\" class=\"search_panel collapse\">
                        <div class=\"panel-body\">
                            <div class=\"input-group\">
                                <input id=\"search-input-PendingFinish\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\" autocomplete=\"false\">
                                <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                {# ############################### #}

                <hr class=\"datatable_hr\">

                <table id=\"tablePendingFinish\" class=\"table\">
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
            </div>    
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script>
        var table = [];
        table['PendingClose'] = null;
        table['PendingFinish'] = null;

        var arrayChecked = [];
        arrayChecked['PendingClose'] = [];
        arrayChecked['PendingFinish'] = [];

        \$(document).ready(function(){
            var time = null;

            \$(\"#intervention_li\").addClass(\"active\");
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
                    case 'PendingClose':  
                        createTablePendingClose(); break;
                    case 'PendingFinish':
                        createTablePendingFinish();  break;
                }
            });

            \$('.nav-link').first().trigger('click'); // accionamos el primero por defecto

            // envío de mails ¿?
            \$('.send-mail-button').click(function(){
                swal.fire({
                    title: '{{ (\"general.toDefine\")|trans }}',
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
                        url:'{{ path('interventions_table_export_excel') }}',
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
        function createTablePendingClose() {
            table['PendingClose'] = \$('#tablePendingClose').DataTable({
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
                        'type': 'PendingClose'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxPendingClose').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['PendingClose'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxPendingClose').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['PendingClose'].includes(intervention_id))
                                arrayChecked['PendingClose'].push(intervention_id);

                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked['PendingClose'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['PendingClose'].splice(index, 1);

                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxPendingClose imgCheckbox' data-intervention='\"+data.id+\"'/>\";
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
                            html = '<form action=\"{{ path(\"intervention_details\") }}\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<input type=\"hidden\" name=\"mode\" value=\"read_only\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }

        function createTablePendingFinish() {
            table['PendingFinish'] = \$('#tablePendingFinish').DataTable({
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
                        'type': 'PendingFinish'
                    }
                },
                initComplete: function() {},
                drawCallback: function() {
                    // check checked
                    \$('.checkboxPendingFinish').each(function(){
                        var intervention_id = \$(this).data('intervention');
                        var index = arrayChecked['PendingFinish'].indexOf(intervention_id);
                        if (index > -1) 
                            \$(this).prop('checked', true);
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxPendingFinish').change(function(){
                        var intervention_id = \$(this).data('intervention');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked['PendingFinish'].includes(intervention_id))
                                arrayChecked['PendingFinish'].push(intervention_id);

                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked['PendingFinish'].indexOf(intervention_id);
                            if (index > -1) 
                                arrayChecked['PendingFinish'].splice(index, 1);

                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }
                    });// change
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxPendingFinish imgCheckbox' data-intervention='\"+data.id+\"'/>\";
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
                            html = '<form action=\"{{ path(\"intervention_details\") }}\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }
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

{% endblock %}", "frontend/collaborator/interventionList.html.twig", "/var/www/rira_web/templates/frontend/collaborator/interventionList.html.twig");
    }
}
