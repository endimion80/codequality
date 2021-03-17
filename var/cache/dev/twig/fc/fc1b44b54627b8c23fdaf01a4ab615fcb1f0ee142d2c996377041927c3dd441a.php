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

/* frontend/collaborator/branchOfficesRates.html.twig */
class __TwigTemplate_3defcce34d11df6a4e40e94ef22fc70967a970e5604fc7bc93dfc6cad89f6c11 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/branchOfficesRates.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/branchOfficesRates.html.twig"));

        // line 1
        echo "<div style=\"display: block;
            margin-bottom: 10px;
            margin-right: 24px;
            margin-top: 20px;
            float: right;\">
    <label class=\"control-label\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo ":</label>
    <input id=\"search-input-rates\" class='input' type=\"text\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\">
</div>

<!-- Tabla Traducciones -->
<!--===================================================-->
<div class=\"panel\">
    <div class=\"panel-body\">
        <table id=\"table_rates\" class=\"table table-striped table-bordered\">
            <thead>
                <tr>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.type"), "html", null, true);
        echo "</th>
                    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.value"), "html", null, true);
        echo "</th>
                    <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.description"), "html", null, true);
        echo "</th>
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.parameters.description"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
    
    var time = null;
    createTableRates();

    \$('#search-input-rates').keyup(function() {
        clearInterval(time);
        time = setTimeout(function() {
            reloadDataTableRates();
        }, 1500);
    });

    
    function createTableRates() {
        \$('#table_rates').DataTable({
            order: [0, 'ASC'],
            searching: false,
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100,
                    \"";
        // line 48
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
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLengthMenu"), "html", null, true);
        echo "\",
                \"sZeroRecords\": \"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sEmptyTable\": \"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sInfo\": \"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                \"sInfoEmpty\": \"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                \"sInfoFiltered\": \"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                \"sUrl\": \"\",
                \"sInfoThousands\": \",\",
                \"sLoadingRecords\": \"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\",
                \"oPaginate\": {
                    \"sFirst\": \"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sFirst"), "html", null, true);
        echo "\",
                    \"sLast\": \"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sLast"), "html", null, true);
        echo "\",
                    \"sNext\": \"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sNext"), "html", null, true);
        echo "\",
                    \"sPrevious\": \"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sPrevious"), "html", null, true);
        echo "\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                    \"sSortDescending\": \": ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                },
            },
            ajax: {
                url: \"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices_rates_data");
        echo "\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_rates').serialize(),
                    'search_filter': \$('#search-input-rates').val(),
                    'branchOffice': '";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["branchOfficeId"]) || array_key_exists("branchOfficeId", $context) ? $context["branchOfficeId"] : (function () { throw new RuntimeError('Variable "branchOfficeId" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "'
                }
            },
            initComplete: function() {
                let blockRows = \$('#table_rates_wrapper .dataTables_info').parent()
                if (blockRows.hasClass('col-sm-6')){
                    blockRows.removeClass('col-sm-6');
                    blockRows.addClass('col-sm-12');
                }
                if (blockRows.next().hasClass('col-sm-6')){
                    blockRows.next().removeClass('col-sm-6');
                    blockRows.next().addClass('col-sm-12');
                }
            },
            drawCallback: function() {               
            },
            columns: [
                {data: {}, render: function(data, row) {
                        return data['service_name'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_name'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_unit'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_night'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_holliday'];
                    }
                }
            ]
        });
    }

    ";
        // line 129
        echo "    let reloadDataTableRates = function() {
        \$(\"#table_rates\").DataTable().destroy();
        createTableRates();
    }
    ";
        // line 134
        echo "
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/branchOfficesRates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 134,  247 => 129,  203 => 87,  195 => 82,  188 => 78,  184 => 77,  178 => 74,  174 => 73,  170 => 72,  166 => 71,  161 => 69,  155 => 66,  150 => 64,  146 => 63,  142 => 62,  138 => 61,  134 => 60,  130 => 59,  126 => 58,  113 => 48,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"display: block;
            margin-bottom: 10px;
            margin-right: 24px;
            margin-top: 20px;
            float: right;\">
    <label class=\"control-label\">{{\"general.search\"|trans}}:</label>
    <input id=\"search-input-rates\" class='input' type=\"text\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\">
</div>

<!-- Tabla Traducciones -->
<!--===================================================-->
<div class=\"panel\">
    <div class=\"panel-body\">
        <table id=\"table_rates\" class=\"table table-striped table-bordered\">
            <thead>
                <tr>
                    <th>{{\"dataTable.parameters.name\"|trans}}</th>
                    <th>{{\"dataTable.parameters.type\"|trans}}</th>
                    <th>{{\"dataTable.parameters.value\"|trans}}</th>
                    <th>{{\"dataTable.parameters.description\"|trans}}</th>
                    <th>{{\"dataTable.parameters.description\"|trans}}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
    
    var time = null;
    createTableRates();

    \$('#search-input-rates').keyup(function() {
        clearInterval(time);
        time = setTimeout(function() {
            reloadDataTableRates();
        }, 1500);
    });

    
    function createTableRates() {
        \$('#table_rates').DataTable({
            order: [0, 'ASC'],
            searching: false,
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100,
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
                url: \"{{ path('branch_offices_rates_data') }}\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_rates').serialize(),
                    'search_filter': \$('#search-input-rates').val(),
                    'branchOffice': '{{ branchOfficeId }}'
                }
            },
            initComplete: function() {
                let blockRows = \$('#table_rates_wrapper .dataTables_info').parent()
                if (blockRows.hasClass('col-sm-6')){
                    blockRows.removeClass('col-sm-6');
                    blockRows.addClass('col-sm-12');
                }
                if (blockRows.next().hasClass('col-sm-6')){
                    blockRows.next().removeClass('col-sm-6');
                    blockRows.next().addClass('col-sm-12');
                }
            },
            drawCallback: function() {               
            },
            columns: [
                {data: {}, render: function(data, row) {
                        return data['service_name'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_name'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_unit'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_night'];
                    }
                },
                {data: {}, render: function(data, row) {
                        return data['activity_holliday'];
                    }
                }
            ]
        });
    }

    {# Función encargada de recargar el ajax del datatable #}
    let reloadDataTableRates = function() {
        \$(\"#table_rates\").DataTable().destroy();
        createTableRates();
    }
    {# ################################################### #}

</script>
", "frontend/collaborator/branchOfficesRates.html.twig", "/var/www/rira_web/templates/frontend/collaborator/branchOfficesRates.html.twig");
    }
}
