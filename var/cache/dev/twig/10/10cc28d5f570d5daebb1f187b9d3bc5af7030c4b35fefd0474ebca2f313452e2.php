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

/* frontend/collaborator/dashboard_tab_ris.html.twig */
class __TwigTemplate_84ff6a76c5f8f5ed656be69946c3f00f3206114589b4280077409f192cc1c5fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard_tab_ris.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard_tab_ris.html.twig"));

        // line 1
        echo "<div class=\"row\" style=\"\">
    <div class=\"col-md-12 col-lg-6\">
        <div class=\"card\" style=\"height: auto; padding: 10px;\">
            <figure class=\"highcharts-figure\">
                <div id=\"ris_figure\"></div>
            </figure>
        </div>
    </div>
    <div class=\"col-md-12 col-lg-6\">
        <div class=\"card\" style=\"height: auto; padding: 10px;\">
            <figure class=\"highcharts-figure\">
                <div id=\"cause_figure\"></div>
            </figure>
        </div>
    </div>
</div>

<div class=\"row\" style=\"\">
    <div class=\"col-md-12\">
        <table id=\"tableRis\" class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.ris.request_date")), "html", null, true);
        echo "</th>
                    <th>";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.reference")), "html", null, true);
        echo "</th>
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.operator")), "html", null, true);
        echo "</th>
                    <th>";
        // line 26
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.ris")), "html", null, true);
        echo "</th>
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.cause")), "html", null, true);
        echo "</th>
                    <th>";
        // line 28
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.comments")), "html", null, true);
        echo "</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>


<script>
    var tableRis = null;

    ";
        // line 41
        echo "    \$(\"#filterCrane\").val(\"\");
    \$(\"#filterCrane\").trigger(\"chosen:updated\");
    \$(\"#filterStatus\").val(\"\");
    \$(\"#filterStatus\").trigger(\"chosen:updated\");
    \$(\".filter_inputs_div_ris\").css({\"display\": \"block\"});
    \$(\".filter_inputs_div_status\").css({\"display\": \"none\"});

    var form_filters = new Object();
    \$('#filterForm .filter_inputs').each(function () {
        form_filters[\$(this).attr('name')] = \$(this).val();
    });

    var fullFilters = {
        'form_filters': form_filters
    }

    tableRis = \$('#tableRis').DataTable({
        dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
        order: [0, 'DESC'],
        searching: true,
        rowReorder: true,
        columnDefs: [
            { orderable: true, className: 'reorder', targets: [0,1,2,3,4,5] },
            { orderable: false, targets: [6] }
        ],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, \"";
        // line 68
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
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
            \"sLengthMenu\": \"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
            \"sZeroRecords\": \"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sEmptyTable\": \"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sInfo\": \"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
            \"sInfoEmpty\": \"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
            \"sInfoFiltered\": \"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
            \"sInfoPostFix\": \"\",
            \"sSearch\": \"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
            \"sUrl\": \"\",
            \"sInfoThousands\": \",\",
            \"sLoadingRecords\": \"";
        // line 88
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
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                \"sSortDescending\": \": ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
            },
        },
        ajax: {
            url: \"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tab_ris_table");
        echo "\",
            method: 'POST',
            data: fullFilters
        },
        initComplete: function() {
            ";
        // line 107
        echo "
            // Enable THEAD scroll bars
            \$('.dataTables_scrollHead').css('overflow', 'auto');

            // Sync THEAD scrolling with TBODY
            \$('.dataTables_scrollHead').on('scroll', function () {
                \$('.dataTables_scrollBody').scrollLeft(\$(this).scrollLeft());
            });
        },
        drawCallback: function() {
            ";
        // line 118
        echo "        },
        columns: [
            {data: 'requestDate'},
            {data: 'reference'},
            {data: 'operator'},
            {data: {}, render: function(data, row) {
                    if(data[\"isRis\"] == 1) {
                        html = \"<span>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.ris"), "html", null, true);
        echo "</span>\";
                    } else if(data[\"isRis\"] == 0){
                        html = \"<span>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.no_ris"), "html", null, true);
        echo "</span>\";
                    } else {
                        html = \"\";
                    }
                    return html;
                }
            },
            {data: 'risCause'},
            {data: 'comments'},
            {data: {}, render: function(data, row) {
                    html = '<form action=\"";
        // line 137
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

    Highcharts.chart('ris_figure', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'RIS / No RIS'
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.figure.assistance_type"), "html", null, true);
        echo "'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.figure.interventions_quantity"), "html", null, true);
        echo "'
            }
        },
        tooltip: {
            headerFormat: '<span style=\"font-size:10px\">{point.key}</span><table>',
            pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
                '<td style=\"padding:0\"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'RIS',
            data: [";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["risFigureData"]) || array_key_exists("risFigureData", $context) ? $context["risFigureData"] : (function () { throw new RuntimeError('Variable "risFigureData" does not exist.', 188, $this->source); })()), "countRis", [], "any", false, false, false, 188), "html", null, true);
        echo "]

        }, {
            name: 'No RIS',
            data: [";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["risFigureData"]) || array_key_exists("risFigureData", $context) ? $context["risFigureData"] : (function () { throw new RuntimeError('Variable "risFigureData" does not exist.', 192, $this->source); })()), "countNoRis", [], "any", false, false, false, 192), "html", null, true);
        echo "]

        }]
    });

    Highcharts.chart('cause_figure', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.cause"), "html", null, true);
        echo "'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: '";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.percentage"), "html", null, true);
        echo "',
            data: JSON.parse(\"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["risCauseFigureData"]) || array_key_exists("risCauseFigureData", $context) ? $context["risCauseFigureData"] : (function () { throw new RuntimeError('Variable "risCauseFigureData" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "\".replaceAll('&quot;', '\"')),            
        }]
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/dashboard_tab_ris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 231,  358 => 230,  330 => 205,  314 => 192,  307 => 188,  285 => 169,  275 => 162,  247 => 137,  234 => 127,  229 => 125,  220 => 118,  208 => 107,  200 => 101,  193 => 97,  189 => 96,  178 => 88,  172 => 85,  167 => 83,  163 => 82,  159 => 81,  155 => 80,  151 => 79,  147 => 78,  143 => 77,  131 => 68,  102 => 41,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"\">
    <div class=\"col-md-12 col-lg-6\">
        <div class=\"card\" style=\"height: auto; padding: 10px;\">
            <figure class=\"highcharts-figure\">
                <div id=\"ris_figure\"></div>
            </figure>
        </div>
    </div>
    <div class=\"col-md-12 col-lg-6\">
        <div class=\"card\" style=\"height: auto; padding: 10px;\">
            <figure class=\"highcharts-figure\">
                <div id=\"cause_figure\"></div>
            </figure>
        </div>
    </div>
</div>

<div class=\"row\" style=\"\">
    <div class=\"col-md-12\">
        <table id=\"tableRis\" class=\"table\">
            <thead>
                <tr>
                    <th>{{\"dataTable.dashboard.ris.request_date\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.reference\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.operator\"|trans|upper}}</th>
                    <th>{{\"dashboard.select.ris\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.cause\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.comments\"|trans|upper}}</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>


<script>
    var tableRis = null;

    {# Configuración de filtros en el tab RIS #}
    \$(\"#filterCrane\").val(\"\");
    \$(\"#filterCrane\").trigger(\"chosen:updated\");
    \$(\"#filterStatus\").val(\"\");
    \$(\"#filterStatus\").trigger(\"chosen:updated\");
    \$(\".filter_inputs_div_ris\").css({\"display\": \"block\"});
    \$(\".filter_inputs_div_status\").css({\"display\": \"none\"});

    var form_filters = new Object();
    \$('#filterForm .filter_inputs').each(function () {
        form_filters[\$(this).attr('name')] = \$(this).val();
    });

    var fullFilters = {
        'form_filters': form_filters
    }

    tableRis = \$('#tableRis').DataTable({
        dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
        order: [0, 'DESC'],
        searching: true,
        rowReorder: true,
        columnDefs: [
            { orderable: true, className: 'reorder', targets: [0,1,2,3,4,5] },
            { orderable: false, targets: [6] }
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
            url: \"{{ path('dashboard_tab_ris_table') }}\",
            method: 'POST',
            data: fullFilters
        },
        initComplete: function() {
            {# console.log(\"initcomplete\"); #}

            // Enable THEAD scroll bars
            \$('.dataTables_scrollHead').css('overflow', 'auto');

            // Sync THEAD scrolling with TBODY
            \$('.dataTables_scrollHead').on('scroll', function () {
                \$('.dataTables_scrollBody').scrollLeft(\$(this).scrollLeft());
            });
        },
        drawCallback: function() {
            {# console.log(\"drawCallback\"); #}
        },
        columns: [
            {data: 'requestDate'},
            {data: 'reference'},
            {data: 'operator'},
            {data: {}, render: function(data, row) {
                    if(data[\"isRis\"] == 1) {
                        html = \"<span>{{'dashboard.select.ris'|trans}}</span>\";
                    } else if(data[\"isRis\"] == 0){
                        html = \"<span>{{'dashboard.select.no_ris'|trans}}</span>\";
                    } else {
                        html = \"\";
                    }
                    return html;
                }
            },
            {data: 'risCause'},
            {data: 'comments'},
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

    Highcharts.chart('ris_figure', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'RIS / No RIS'
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '{{\"dashboard.figure.assistance_type\"|trans}}'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '{{\"dashboard.figure.interventions_quantity\"|trans}}'
            }
        },
        tooltip: {
            headerFormat: '<span style=\"font-size:10px\">{point.key}</span><table>',
            pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
                '<td style=\"padding:0\"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'RIS',
            data: [{{risFigureData.countRis}}]

        }, {
            name: 'No RIS',
            data: [{{risFigureData.countNoRis}}]

        }]
    });

    Highcharts.chart('cause_figure', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '{{\"dataTable.dashboard.cause\"|trans}}'
        },
        credits: {
            enabled: false
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: '{{\"general.percentage\"|trans}}',
            data: JSON.parse(\"{{risCauseFigureData}}\".replaceAll('&quot;', '\"')),            
        }]
    });

</script>", "frontend/collaborator/dashboard_tab_ris.html.twig", "/var/www/rira_web/templates/frontend/collaborator/dashboard_tab_ris.html.twig");
    }
}
