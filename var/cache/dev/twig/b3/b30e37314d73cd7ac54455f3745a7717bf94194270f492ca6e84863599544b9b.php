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

/* backend/translations.html.twig */
class __TwigTemplate_ae365de0db6c5a39bcd1a80e34e301fac931bbfdcf8862eb54f4789cdbe75000 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/translations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/translations.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/translations.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.header"), "html", null, true);
        echo "</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        
        <!--Collapsed Panel by default-->
        <!--===================================================-->
        <div class=\"panel\">

            <!--Panel heading-->
            <div id=\"translations_steps_heading\" class=\"panel-heading\" data-target=\"#translations_steps-panel-collapse-default\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.label.steps"), "html", null, true);
        echo "</h3>
            </div>

            <!--Panel body-->
            <div id=\"translations_steps-panel-collapse-default\" class=\"collapse\">
                <div class=\"panel-body\">
                    <p>1) ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.guide.update"), "html", null, true);
        echo ":</p>
                    <p>&emsp;► <b><i>php bin/console functTranslationsUpdateDB</i></b></p>
                    <p>2) ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.guide.complete"), "html", null, true);
        echo "</p>
                    <p>3) ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.guide.fix"), "html", null, true);
        echo ":</p>
                    <p>&emsp;► <b><i>php bin/console fixTranslations</i></b></p>
                    <p>4) ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.guide.export"), "html", null, true);
        echo ":</p>
                    <p>&emsp;► <b><i>php bin/console functTranslationsExport</i></b></p>
                    <p>5) ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.delete_cache"), "html", null, true);
        echo ":</p>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End Collapsed Panel by default-->

        <div>
            <p><b><a class=\"text-danger animated infinite flash\" style=\"animation-duration: 5s;\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.important"), "html", null, true);
        echo "</a></b> <span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.translations.warning"), "html", null, true);
        echo ": <b><i>php bin/console functTranslationsExport</i></b></span></p>
        </div>

        <div style=\"display: block;
                    margin-bottom: 10px;
                    margin-right: 24px;
                    margin-top: 20px;
                    float: right;\">
            <label class=\"control-label\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo ":</label>
            <input id=\"search-input\" class='search-input' type=\"text\" placeholder=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\">
        </div>

        <!-- Tabla Traducciones -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_translations\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.translations.label"), "html", null, true);
        echo "</th>
                            <th>es</th>
                            <th>en</th>
                            <th>fr</th>
                            <th>it</th>
                            <th>pt</th>
                            <th>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.translations.need_check"), "html", null, true);
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

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
    \$(document).ready(function(){
        \$(\"#translations_li\").addClass(\"active-link\");

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

        \$('#table_translations').DataTable({
            order: [0, 'ASC'],
            searching: false,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100,
                    \"";
        // line 123
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
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLengthMenu"), "html", null, true);
        echo "\",
                \"sZeroRecords\": \"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sEmptyTable\": \"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sInfo\": \"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                \"sInfoEmpty\": \"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                \"sInfoFiltered\": \"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                \"sUrl\": \"\",
                \"sInfoThousands\": \",\",
                \"sLoadingRecords\": \"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\",
                \"oPaginate\": {
                    \"sFirst\": \"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sFirst"), "html", null, true);
        echo "\",
                    \"sLast\": \"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sLast"), "html", null, true);
        echo "\",
                    \"sNext\": \"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sNext"), "html", null, true);
        echo "\",
                    \"sPrevious\": \"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sPrevious"), "html", null, true);
        echo "\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": ";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                    \"sSortDescending\": \": ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                },
            },
            ajax: {
                url: \"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("translations_table");
        echo "\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_translations').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {
                \$.fn.editable.defaults.mode = 'inline';

                \$('.edit_es, .edit_en, .edit_fr, .edit_it, .edit_pt').editable({
                    type: \$(this).data('type'),
                    pk: \$(this).data('pk'),
                    name: \$(this).data('name'),
                    url: \$(this).data('url'),
                });

                \$('.edit_need_check').editable({
                    type: \$(this).data('type'),
                    source: [
                        {value: 1, text: '1'},
                        {value: 0, text: '0'}
                    ]
                });
            },
            columns: [
                {data: 'source'},
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_es\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"es\" data-url=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_translation");
        echo "\">'+ data['es'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_en\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"en\" data-url=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_translation");
        echo "\">'+ data['en'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_fr\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"fr\" data-url=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_translation");
        echo "\">'+ data['fr'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_it\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"it\" data-url=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_translation");
        echo "\">'+ data['it'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_pt\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"pt\" data-url=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_translation");
        echo "\">'+ data['pt'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_need_check\" data-type=\"select\" data-pk=\"'+ data['id'] +'\" data-name=\"check\" data-url=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_translation");
        echo "\">'+ data['need_check'] +'</a>';
                        return html;
                    }
                }
            ]
        });
    }

    ";
        // line 220
        echo "    let reloadDataTable = function() {
        \$(\"#table_translations\").DataTable().destroy();
        createTable();
    }
    ";
        // line 225
        echo "
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/translations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 225,  452 => 220,  441 => 211,  433 => 206,  425 => 201,  417 => 196,  409 => 191,  401 => 186,  369 => 157,  362 => 153,  358 => 152,  352 => 149,  348 => 148,  344 => 147,  340 => 146,  335 => 144,  329 => 141,  324 => 139,  320 => 138,  316 => 137,  312 => 136,  308 => 135,  304 => 134,  300 => 133,  287 => 123,  257 => 97,  247 => 96,  223 => 81,  214 => 75,  201 => 65,  197 => 64,  184 => 56,  173 => 48,  168 => 46,  163 => 44,  159 => 43,  154 => 41,  145 => 35,  124 => 17,  118 => 13,  108 => 12,  95 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <h1 class=\"page-header text-overflow\">{{\"backend.translations.header\"|trans}}</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        
        <!--Collapsed Panel by default-->
        <!--===================================================-->
        <div class=\"panel\">

            <!--Panel heading-->
            <div id=\"translations_steps_heading\" class=\"panel-heading\" data-target=\"#translations_steps-panel-collapse-default\" data-toggle=\"collapse\">
                <div class=\"panel-control\">
                    <button class=\"btn btn-default\" ><i class=\"fa fa-chevron-down\"></i></button>
                </div>
                <h3 class=\"panel-title\">{{'backend.translations.label.steps'|trans}}</h3>
            </div>

            <!--Panel body-->
            <div id=\"translations_steps-panel-collapse-default\" class=\"collapse\">
                <div class=\"panel-body\">
                    <p>1) {{'backend.translations.guide.update'|trans}}:</p>
                    <p>&emsp;► <b><i>php bin/console functTranslationsUpdateDB</i></b></p>
                    <p>2) {{'backend.translations.guide.complete'|trans}}</p>
                    <p>3) {{'backend.translations.guide.fix'|trans}}:</p>
                    <p>&emsp;► <b><i>php bin/console fixTranslations</i></b></p>
                    <p>4) {{'backend.translations.guide.export'|trans}}:</p>
                    <p>&emsp;► <b><i>php bin/console functTranslationsExport</i></b></p>
                    <p>5) {{'backend.translations.delete_cache'|trans}}:</p>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End Collapsed Panel by default-->

        <div>
            <p><b><a class=\"text-danger animated infinite flash\" style=\"animation-duration: 5s;\">{{'general.important'|trans}}</a></b> <span>{{'backend.translations.warning'|trans}}: <b><i>php bin/console functTranslationsExport</i></b></span></p>
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
                <table id=\"table_translations\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>{{\"dataTable.translations.label\"|trans}}</th>
                            <th>es</th>
                            <th>en</th>
                            <th>fr</th>
                            <th>it</th>
                            <th>pt</th>
                            <th>{{\"dataTable.translations.need_check\"|trans}}</th>
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
        \$(\"#translations_li\").addClass(\"active-link\");

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

        \$('#table_translations').DataTable({
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
                url: \"{{ path('translations_table') }}\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_translations').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {
                \$.fn.editable.defaults.mode = 'inline';

                \$('.edit_es, .edit_en, .edit_fr, .edit_it, .edit_pt').editable({
                    type: \$(this).data('type'),
                    pk: \$(this).data('pk'),
                    name: \$(this).data('name'),
                    url: \$(this).data('url'),
                });

                \$('.edit_need_check').editable({
                    type: \$(this).data('type'),
                    source: [
                        {value: 1, text: '1'},
                        {value: 0, text: '0'}
                    ]
                });
            },
            columns: [
                {data: 'source'},
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_es\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"es\" data-url=\"{{path('edit_translation')}}\">'+ data['es'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_en\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"en\" data-url=\"{{path('edit_translation')}}\">'+ data['en'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_fr\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"fr\" data-url=\"{{path('edit_translation')}}\">'+ data['fr'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_it\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"it\" data-url=\"{{path('edit_translation')}}\">'+ data['it'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_pt\" data-type=\"textarea\" data-pk=\"'+ data['id'] +'\" data-name=\"pt\" data-url=\"{{path('edit_translation')}}\">'+ data['pt'] +'</a>';
                        return html;
                    }
                },
                {data: {}, render: function(data, row) {
                        html = '<a href=\"#\" class=\"editable editable-click edit_need_check\" data-type=\"select\" data-pk=\"'+ data['id'] +'\" data-name=\"check\" data-url=\"{{path('edit_translation')}}\">'+ data['need_check'] +'</a>';
                        return html;
                    }
                }
            ]
        });
    }

    {# Función encargada de recargar el ajax del datatable #}
    let reloadDataTable = function() {
        \$(\"#table_translations\").DataTable().destroy();
        createTable();
    }
    {# ################################################### #}

</script>


{% endblock %}", "backend/translations.html.twig", "/var/www/rira_web/templates/backend/translations.html.twig");
    }
}
