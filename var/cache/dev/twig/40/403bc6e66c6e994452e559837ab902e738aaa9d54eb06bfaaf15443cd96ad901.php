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

/* backend/parameters.html.twig */
class __TwigTemplate_ef8cb0506df865aae377412877d799e6e05237e49eca4fc4913a926c58c26b73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/parameters.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/parameters.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/parameters.html.twig", 1);
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
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_general.css"), "html", null, true);
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
        <h1 class=\"page-header text-overflow\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.parameters.header"), "html", null, true);
        echo "</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div>
            <p><b><a class=\"text-danger animated infinite flash\" style=\"animation-duration: 5s;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.important"), "html", null, true);
        echo "</a></b> <span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.parameters.warning"), "html", null, true);
        echo ": <b><i>fixParametersCommand.php</i></b></span></p>
        </div>

        <div style=\"display: block;
                    margin-bottom: 10px;
                    margin-right: 24px;
                    margin-top: 20px;
                    float: right;\">
            <label class=\"control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo ":</label>
            <input id=\"search-input\" class='search-input' type=\"text\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\">
        </div>

        <!-- Tabla Traducciones -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_parameters\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.name"), "html", null, true);
        echo "</th>
                            <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.type"), "html", null, true);
        echo "</th>
                            <th>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.value"), "html", null, true);
        echo "</th>
                            <th>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.description"), "html", null, true);
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

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
    \$(document).ready(function(){
        \$(\"#parameters_li\").addClass(\"active-link\");

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

        \$('#table_parameters').DataTable({
            order: [0, 'ASC'],
            searching: false,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100,
                    \"";
        // line 91
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
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLengthMenu"), "html", null, true);
        echo "\",
                \"sZeroRecords\": \"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sEmptyTable\": \"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sInfo\": \"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                \"sInfoEmpty\": \"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                \"sInfoFiltered\": \"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                \"sUrl\": \"\",
                \"sInfoThousands\": \",\",
                \"sLoadingRecords\": \"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\",
                \"oPaginate\": {
                    \"sFirst\": \"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sFirst"), "html", null, true);
        echo "\",
                    \"sLast\": \"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sLast"), "html", null, true);
        echo "\",
                    \"sNext\": \"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sNext"), "html", null, true);
        echo "\",
                    \"sPrevious\": \"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sPrevious"), "html", null, true);
        echo "\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": ";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                    \"sSortDescending\": \": ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                },
            },
            ajax: {
                url: \"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parameters_table");
        echo "\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_parameters').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {
                \$.fn.editable.defaults.mode = 'inline';

                \$('.edit_name, .edit_type, .edit_value, .edit_description').editable({
                    type: \$(this).data('type'),
                    pk: \$(this).data('pk'),
                    name: \$(this).data('name'),
                    url: \$(this).data('url'),
                    title: \$(this).data('value')
                });
            },
            columns: [
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_name\" data-type=\"text\" data-pk=\"'+ data['id'] +'\" data-name=\"name\" data-url=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_parameter");
        echo "\">'+ data['name'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_type\" data-type=\"text\" data-pk=\"'+ data['id'] +'\" data-name=\"type\" data-url=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_parameter");
        echo "\">'+ data['type'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_value\" data-type=\"text\" data-pk=\"'+ data['id'] +'\" data-name=\"value\" data-url=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_parameter");
        echo "\">'+ data['value'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_description\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"description\" data-url=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_parameter");
        echo "\">'+ data['description'] +'</a>';
                        return html;
                    }
                }
            ]
        });
    }

    ";
        // line 170
        echo "    let reloadDataTable = function() {
        \$(\"#table_parameters\").DataTable().destroy();
        createTable();
    }
    ";
        // line 175
        echo "
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/parameters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 175,  384 => 170,  373 => 161,  365 => 156,  357 => 151,  349 => 146,  325 => 125,  318 => 121,  314 => 120,  308 => 117,  304 => 116,  300 => 115,  296 => 114,  291 => 112,  285 => 109,  280 => 107,  276 => 106,  272 => 105,  268 => 104,  264 => 103,  260 => 102,  256 => 101,  243 => 91,  213 => 65,  203 => 64,  179 => 49,  175 => 48,  171 => 47,  167 => 46,  154 => 36,  150 => 35,  137 => 27,  124 => 17,  118 => 13,  108 => 12,  95 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/backend_sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
{{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_general.css') }}\">

{% endblock %}

{% block content %}

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">{{\"backend.parameters.header\"|trans}}</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div>
            <p><b><a class=\"text-danger animated infinite flash\" style=\"animation-duration: 5s;\">{{'general.important'|trans}}</a></b> <span>{{'backend.parameters.warning'|trans}}: <b><i>fixParametersCommand.php</i></b></span></p>
        </div>

        <div style=\"display: block;
                    margin-bottom: 10px;
                    margin-right: 24px;
                    margin-top: 20px;
                    float: right;\">
            <label class=\"control-label\">{{\"general.search\"|trans}}:</label>
            <input id=\"search-input\" class='search-input' type=\"text\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\">
        </div>

        <!-- Tabla Traducciones -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_parameters\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>{{\"dataTable.parameters.name\"|trans}}</th>
                            <th>{{\"dataTable.parameters.type\"|trans}}</th>
                            <th>{{\"dataTable.parameters.value\"|trans}}</th>
                            <th>{{\"dataTable.parameters.description\"|trans}}</th>
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
        \$(\"#parameters_li\").addClass(\"active-link\");

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

        \$('#table_parameters').DataTable({
            order: [0, 'ASC'],
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
                url: \"{{ path('parameters_table') }}\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_parameters').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {
                \$.fn.editable.defaults.mode = 'inline';

                \$('.edit_name, .edit_type, .edit_value, .edit_description').editable({
                    type: \$(this).data('type'),
                    pk: \$(this).data('pk'),
                    name: \$(this).data('name'),
                    url: \$(this).data('url'),
                    title: \$(this).data('value')
                });
            },
            columns: [
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_name\" data-type=\"text\" data-pk=\"'+ data['id'] +'\" data-name=\"name\" data-url=\"{{path('edit_parameter')}}\">'+ data['name'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_type\" data-type=\"text\" data-pk=\"'+ data['id'] +'\" data-name=\"type\" data-url=\"{{path('edit_parameter')}}\">'+ data['type'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_value\" data-type=\"text\" data-pk=\"'+ data['id'] +'\" data-name=\"value\" data-url=\"{{path('edit_parameter')}}\">'+ data['value'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_description\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"description\" data-url=\"{{path('edit_parameter')}}\">'+ data['description'] +'</a>';
                        return html;
                    }
                }
            ]
        });
    }

    {# Función encargada de recargar el ajax del datatable #}
    let reloadDataTable = function() {
        \$(\"#table_parameters\").DataTable().destroy();
        createTable();
    }
    {# ################################################### #}

</script>


{% endblock %}", "backend/parameters.html.twig", "/var/www/rira_web/templates/backend/parameters.html.twig");
    }
}
