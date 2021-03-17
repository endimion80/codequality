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

/* backend/logs/emails_log.html.twig */
class __TwigTemplate_f849f4180f4f300246aba56b8881d496cfa1477f22b3c070785ba99e5081c785 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/logs/emails_log.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/logs/emails_log.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/logs/emails_log.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.email_log.header"), "html", null, true);
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

        <!-- Tabla Log de emails -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_emails_log\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.intervention_id"), "html", null, true);
        echo "</th>
                            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.subject"), "html", null, true);
        echo "</th>
                            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.creation_date"), "html", null, true);
        echo "</th>
                            <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.email_to"), "html", null, true);
        echo "</th>
                            <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.email_cc"), "html", null, true);
        echo "</th>
                            <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.email_bcc"), "html", null, true);
        echo "</th>
                            <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.is_delivered"), "html", null, true);
        echo "</th>
                            <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.template"), "html", null, true);
        echo "</th>
                            <th>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.template_content"), "html", null, true);
        echo "</th>
                            <th>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.locale"), "html", null, true);
        echo "</th>
                            <th>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.backup"), "html", null, true);
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

        var time = null;
        createTable();

        \$('#search-input').keyup(function() {
            clearInterval(time);
            time = setTimeout(function() {
                reloadDataTable();
            }, 1500);
        });

    });

    function bindTableEvents() {

        \$('.visualize').click(function(){
            var id = \$(this).data(\"id\");
            
            var formTmp = document.createElement('form');
            \$(formTmp).attr('action',\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail_show");
        echo "\");
            \$(formTmp).attr('name','formTmp');
            \$(formTmp).attr('target','_blank');
            \$(formTmp).attr('method','post');
            \$(formTmp).append(\"<input type='hidden' name='mailId' value='\" + id + \"'/>\");
            document.body.appendChild(formTmp);
            document.formTmp.submit();

            document.body.removeChild(formTmp);

            /*
            \$.ajax({
                url:\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail_text_ajax");
        echo "\",
                type: 'post',
                data: {'id': id}
            })
            .done(function( data ) {
                
                swal.fire({
                    title: '',
                    html: '<h1>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.loading"), "html", null, true);
        echo "...</h1>',
                    showConfirmButton: false,
                    timer: 300
                });

                var formTmp = document.createElement('form');
                \$(formTmp).attr('action',\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail_show");
        echo "\");
                \$(formTmp).attr('name','formTmp');
                \$(formTmp).attr('target','_blank');
                \$(formTmp).attr('method','post');
                \$(formTmp).append(\"<input type='hidden' name='content' value='\" + data + \"'/>\");
                document.body.appendChild(formTmp);
                document.formTmp.submit();

                document.body.removeChild(formTmp);

            });
            */
        });
    }

    function createTable() {

        \$('#table_emails_log').DataTable({
            order: [2, 'DESC'],
            searching: false,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100,
                    \"";
        // line 137
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
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLengthMenu"), "html", null, true);
        echo "\",
                \"sZeroRecords\": \"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sEmptyTable\": \"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sInfo\": \"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                \"sInfoEmpty\": \"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                \"sInfoFiltered\": \"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                \"sUrl\": \"\",
                \"sInfoThousands\": \",\",
                \"sLoadingRecords\": \"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\",
                \"oPaginate\": {
                    \"sFirst\": \"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sFirst"), "html", null, true);
        echo "\",
                    \"sLast\": \"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sLast"), "html", null, true);
        echo "\",
                    \"sNext\": \"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sNext"), "html", null, true);
        echo "\",
                    \"sPrevious\": \"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sPrevious"), "html", null, true);
        echo "\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": ";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                    \"sSortDescending\": \": ";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                },
            },
            ajax: {
                url: \"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email_logs_table");
        echo "\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_emails_log').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {
                bindTableEvents();
            },
            columns: [
                {data: 'intervention_id'},
                {data: 'subject'},
                {data: 'creation_date'},
                {data: 'email_to'},
                {data: {}, render: function(data, row) {
                        if (data['email_cc'] == \"[]\") {
                            return \"\";
                        }
                        return data['email_cc'];
                    }
                },
                {data: {}, render: function(data, row) {
                        if (data['email_bcc'] == \"[]\") {
                            return \"\";
                        }
                        return data['email_bcc'];
                    }
                },
                {data: {}, render: function(data, row) {
                        let text;
                        if (data['is_delivered'] == 1) {
                            text = \"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
        echo "\";
                        }
                        else {
                            text = \"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
        echo "\";
                        }
                        return text;
                    }
                },
                {data: 'template'},
                {data: {}, render: function(data, row) {
                        let html = \"<div class='table-element' style='display:flex; justify-content:center;'>\";
                        html += '<button class=\"btn visualize btn-info btn-icon icon-lg fa fa-search\" data-id=\"' + data['id'] + '\" style=\"width: 75%;\"></button></div>'
                    
                        return html;
                    }
                },
                {data: 'locale'},
                {data: 'backup'}
            ]
        });
    }

    ";
        // line 227
        echo "    let reloadDataTable = function() {
        \$(\"#table_emails_log\").DataTable().destroy();
        createTable();
    }
    ";
        // line 232
        echo "
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/logs/emails_log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 232,  460 => 227,  438 => 207,  432 => 204,  396 => 171,  389 => 167,  385 => 166,  379 => 163,  375 => 162,  371 => 161,  367 => 160,  362 => 158,  356 => 155,  351 => 153,  347 => 152,  343 => 151,  339 => 150,  335 => 149,  331 => 148,  327 => 147,  314 => 137,  288 => 114,  279 => 108,  268 => 100,  253 => 88,  226 => 65,  216 => 64,  193 => 50,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  140 => 30,  136 => 29,  119 => 15,  113 => 11,  103 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <h1 class=\"page-header text-overflow\">{{\"backend.email_log.header\"|trans}}</h1>
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

        <!-- Tabla Log de emails -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_emails_log\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>{{\"dataTable.email.log.intervention_id\"|trans}}</th>
                            <th>{{\"dataTable.email.log.subject\"|trans}}</th>
                            <th>{{\"dataTable.email.log.creation_date\"|trans}}</th>
                            <th>{{\"dataTable.email.log.email_to\"|trans}}</th>
                            <th>{{\"dataTable.email.log.email_cc\"|trans}}</th>
                            <th>{{\"dataTable.email.log.email_bcc\"|trans}}</th>
                            <th>{{\"dataTable.email.log.is_delivered\"|trans}}</th>
                            <th>{{\"dataTable.email.log.template\"|trans}}</th>
                            <th>{{\"dataTable.email.log.template_content\"|trans}}</th>
                            <th>{{\"dataTable.email.log.locale\"|trans}}</th>
                            <th>{{\"dataTable.email.log.backup\"|trans}}</th>
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

    function bindTableEvents() {

        \$('.visualize').click(function(){
            var id = \$(this).data(\"id\");
            
            var formTmp = document.createElement('form');
            \$(formTmp).attr('action',\"{{ path('mail_show') }}\");
            \$(formTmp).attr('name','formTmp');
            \$(formTmp).attr('target','_blank');
            \$(formTmp).attr('method','post');
            \$(formTmp).append(\"<input type='hidden' name='mailId' value='\" + id + \"'/>\");
            document.body.appendChild(formTmp);
            document.formTmp.submit();

            document.body.removeChild(formTmp);

            /*
            \$.ajax({
                url:\"{{ path('mail_text_ajax') }}\",
                type: 'post',
                data: {'id': id}
            })
            .done(function( data ) {
                
                swal.fire({
                    title: '',
                    html: '<h1>{{ (\"general.loading\")|trans }}...</h1>',
                    showConfirmButton: false,
                    timer: 300
                });

                var formTmp = document.createElement('form');
                \$(formTmp).attr('action',\"{{ path('mail_show') }}\");
                \$(formTmp).attr('name','formTmp');
                \$(formTmp).attr('target','_blank');
                \$(formTmp).attr('method','post');
                \$(formTmp).append(\"<input type='hidden' name='content' value='\" + data + \"'/>\");
                document.body.appendChild(formTmp);
                document.formTmp.submit();

                document.body.removeChild(formTmp);

            });
            */
        });
    }

    function createTable() {

        \$('#table_emails_log').DataTable({
            order: [2, 'DESC'],
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
                url: \"{{ path('email_logs_table') }}\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_emails_log').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {
                bindTableEvents();
            },
            columns: [
                {data: 'intervention_id'},
                {data: 'subject'},
                {data: 'creation_date'},
                {data: 'email_to'},
                {data: {}, render: function(data, row) {
                        if (data['email_cc'] == \"[]\") {
                            return \"\";
                        }
                        return data['email_cc'];
                    }
                },
                {data: {}, render: function(data, row) {
                        if (data['email_bcc'] == \"[]\") {
                            return \"\";
                        }
                        return data['email_bcc'];
                    }
                },
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
                {data: 'template'},
                {data: {}, render: function(data, row) {
                        let html = \"<div class='table-element' style='display:flex; justify-content:center;'>\";
                        html += '<button class=\"btn visualize btn-info btn-icon icon-lg fa fa-search\" data-id=\"' + data['id'] + '\" style=\"width: 75%;\"></button></div>'
                    
                        return html;
                    }
                },
                {data: 'locale'},
                {data: 'backup'}
            ]
        });
    }

    {# Función encargada de recargar el ajax del datatable #}
    let reloadDataTable = function() {
        \$(\"#table_emails_log\").DataTable().destroy();
        createTable();
    }
    {# ################################################### #}

</script>


{% endblock %}", "backend/logs/emails_log.html.twig", "/var/www/rira_web/templates/backend/logs/emails_log.html.twig");
    }
}
