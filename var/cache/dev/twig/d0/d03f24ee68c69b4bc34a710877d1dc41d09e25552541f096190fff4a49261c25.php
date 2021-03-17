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

/* backend/logs/sms_log.html.twig */
class __TwigTemplate_4f00634365548fba95946eaf0b63439295ecbdbfd5aa1b5a52fd3167767ad0ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/logs/sms_log.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/logs/sms_log.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/logs/sms_log.html.twig", 1);
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

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.sms_log.header"), "html", null, true);
        echo "</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        
        <div style=\"display: block;
                    margin-bottom: 10px;
                    margin-right: 24px;
                    margin-top: 20px;
                    float: right;\">
            <label class=\"control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo ":</label>
            <input id=\"search-input\" class='search-input' type=\"text\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\">
        </div>

        <!-- Tabla Log de SMS -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_sms_log\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.intervention_id"), "html", null, true);
        echo "</th>
                            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.creation_date"), "html", null, true);
        echo "</th>
                            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.sms_content"), "html", null, true);
        echo "</th>
                            <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.sms_name"), "html", null, true);
        echo "</th>
                            <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.sms_type"), "html", null, true);
        echo "</th>
                            <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.sms_phone"), "html", null, true);
        echo "</th>
                            <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.is_delivered"), "html", null, true);
        echo "</th>
                            <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.sms.logs.debug"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--===================================================-->
    
    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
    \$(document).ready(function(){

        var time = null;
        createTable();

        \$('#search-input').keyup(function() {
            clearInterval(time);
            time = setTimeout(function() {
                reloadDataTable();
            }, 1500);
        });

    });

    function createTable() {

        \$('#table_sms_log').DataTable({
            order: [1, 'DESC'],
            searching: false,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100,
                    \"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.lengthMenu.all"), "html", null, true);
        echo "\"
                ]
            ],
            responsive: false,
            autoWidth: false,
            scrollX: true,
            processing: false,
            serverSide: true,
            pagingType: \"full_numbers\",
            language: {
                \"sProcessing\": \"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLengthMenu"), "html", null, true);
        echo "\",
                \"sZeroRecords\": \"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sEmptyTable\": \"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sInfo\": \"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                \"sInfoEmpty\": \"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                \"sInfoFiltered\": \"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                \"sUrl\": \"\",
                \"sInfoThousands\": \",\",
                \"sLoadingRecords\": \"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\",
                \"oPaginate\": {
                    \"sFirst\": \"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sFirst"), "html", null, true);
        echo "\",
                    \"sLast\": \"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sLast"), "html", null, true);
        echo "\",
                    \"sNext\": \"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sNext"), "html", null, true);
        echo "\",
                    \"sPrevious\": \"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sPrevious"), "html", null, true);
        echo "\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": ";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                    \"sSortDescending\": \": ";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                },
            },
            ajax: {
                url: \"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sms_logs_table");
        echo "\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_sms_log').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {

            },
            columns: [
                {data: 'intervention_id'},
                {data: 'creation_date'},
                {data: 'sms_content'},
                {data: 'sms_name'},
                {data: 'sms_type'},
                {data: 'sms_phone'},
                {data: {}, render: function(data, row) {
                        let text;
                        if (data['is_delivered'] == 1) {
                            text = \"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
        echo "\";
                        }
                        else {
                            text = \"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
        echo "\";
                        }
                        return text;
                    }
                },
                {data: 'debug'}
            ]
        });
    }

    ";
        // line 156
        echo "    let reloadDataTable = function() {
        \$(\"#table_sms_log\").DataTable().destroy();
        createTable();
    }
    ";
        // line 161
        echo "
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/logs/sms_log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 161,  368 => 156,  355 => 145,  349 => 142,  325 => 121,  318 => 117,  314 => 116,  308 => 113,  304 => 112,  300 => 111,  296 => 110,  291 => 108,  285 => 105,  280 => 103,  276 => 102,  272 => 101,  268 => 100,  264 => 99,  260 => 98,  256 => 97,  243 => 87,  214 => 62,  204 => 61,  181 => 47,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  140 => 30,  136 => 29,  119 => 15,  113 => 11,  103 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <h1 class=\"page-header text-overflow\">{{\"backend.sms_log.header\"|trans}}</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        
        <div style=\"display: block;
                    margin-bottom: 10px;
                    margin-right: 24px;
                    margin-top: 20px;
                    float: right;\">
            <label class=\"control-label\">{{\"general.search\"|trans}}:</label>
            <input id=\"search-input\" class='search-input' type=\"text\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\">
        </div>

        <!-- Tabla Log de SMS -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_sms_log\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>{{\"dataTable.sms.logs.intervention_id\"|trans}}</th>
                            <th>{{\"dataTable.sms.logs.creation_date\"|trans}}</th>
                            <th>{{\"dataTable.sms.logs.sms_content\"|trans}}</th>
                            <th>{{\"dataTable.sms.logs.sms_name\"|trans}}</th>
                            <th>{{\"dataTable.sms.logs.sms_type\"|trans}}</th>
                            <th>{{\"dataTable.sms.logs.sms_phone\"|trans}}</th>
                            <th>{{\"dataTable.sms.logs.is_delivered\"|trans}}</th>
                            <th>{{\"dataTable.sms.logs.debug\"|trans}}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--===================================================-->
    
    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}

<script>
    \$(document).ready(function(){

        var time = null;
        createTable();

        \$('#search-input').keyup(function() {
            clearInterval(time);
            time = setTimeout(function() {
                reloadDataTable();
            }, 1500);
        });

    });

    function createTable() {

        \$('#table_sms_log').DataTable({
            order: [1, 'DESC'],
            searching: false,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100,
                    \"{{('dataTable.general.lengthMenu.all')|trans}}\"
                ]
            ],
            responsive: false,
            autoWidth: false,
            scrollX: true,
            processing: false,
            serverSide: true,
            pagingType: \"full_numbers\",
            language: {
                \"sProcessing\": \"{{ 'dataTable.general.language.sProcessing' | trans }}\",
                \"sLengthMenu\": \"{{ ('dataTable.general.language.sLengthMenu') | trans}}\",
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
                    \"sFirst\": \"{{ ('dataTable.general.language.oPaginate.sFirst') | trans }}\",
                    \"sLast\": \"{{ ('dataTable.general.language.oPaginate.sLast') | trans }}\",
                    \"sNext\": \"{{ ('dataTable.general.language.oPaginate.sNext') | trans }}\",
                    \"sPrevious\": \"{{ ('dataTable.general.language.oPaginate.sPrevious') | trans }}\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": {{ ('dataTable.general.language.oAria.sSortAscending') | trans }}\",
                    \"sSortDescending\": \": {{ ('dataTable.general.language.oAria.sSortDescending') | trans }}\"
                },
            },
            ajax: {
                url: \"{{ path('sms_logs_table') }}\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_sms_log').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {

            },
            columns: [
                {data: 'intervention_id'},
                {data: 'creation_date'},
                {data: 'sms_content'},
                {data: 'sms_name'},
                {data: 'sms_type'},
                {data: 'sms_phone'},
                {data: {}, render: function(data, row) {
                        let text;
                        if (data['is_delivered'] == 1) {
                            text = \"{{\"general.yes\"|trans}}\";
                        }
                        else {
                            text = \"{{\"general.no\"|trans}}\";
                        }
                        return text;
                    }
                },
                {data: 'debug'}
            ]
        });
    }

    {# Función encargada de recargar el ajax del datatable #}
    let reloadDataTable = function() {
        \$(\"#table_sms_log\").DataTable().destroy();
        createTable();
    }
    {# ################################################### #}

</script>


{% endblock %}", "backend/logs/sms_log.html.twig", "/var/www/rira_web/templates/backend/logs/sms_log.html.twig");
    }
}
