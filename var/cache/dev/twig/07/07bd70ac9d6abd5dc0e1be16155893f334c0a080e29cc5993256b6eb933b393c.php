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

/* frontend/collaborator/dashboard_tab_refuse.html.twig */
class __TwigTemplate_d51c547826e748df896079b6b79868f9479c499c9362333bfd3d7ff6930a0ca1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard_tab_refuse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard_tab_refuse.html.twig"));

        // line 1
        echo "
<div class=\"row\" style=\"\">
    <div class=\"col-md-12 col-lg-6\">
        <div class=\"card\" style=\"height: auto; padding: 10px;\">
            <figure class=\"highcharts-figure\">
                <div id=\"refuse_figure\"></div>
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

<!--
<div class=\"row\" style=\"\">
    <div class=\"col-md-12\">
        <table id=\"tableRefuse\" class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.request_date")), "html", null, true);
        echo "</th>
                    <th>";
        // line 26
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.reference")), "html", null, true);
        echo "</th>
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.operator")), "html", null, true);
        echo "</th>
                    <th>";
        // line 28
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.service")), "html", null, true);
        echo "</th>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.status")), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.refuse_cause")), "html", null, true);
        echo "</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
-->

<div id='tableRefuseFilter' style='margin-top:40px; display: flex; justify-content: flex-end;'>
    ";
        // line 41
        echo "    <div>
        <div class=\"filter_inputs_div\">
            <label for=\"filterRefuseGroupBy\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ris.filter.groupBy.label"), "html", null, true);
        echo ":</label>
            <select id=\"filterRefuseGroupBy\" name=\"risGroupBy\" class=\"filter_inputs form-control select_inputs\">
                <option value ='1'>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office"), "html", null, true);
        echo "</option>
                <option value ='2'>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.province"), "html", null, true);
        echo "</option>
                <option value ='3'>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_province"), "html", null, true);
        echo "</option>
                <option value ='4'>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_town"), "html", null, true);
        echo "</option>
            </select>
        </div>
    </div>
</div>

<div class=\"row\" style=\"\">
    <div class=\"col-md-12\">
        <table id=\"tableRefuse\" class=\"table\">
            <thead>
                 <tr>
                    <th>";
        // line 59
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office")), "html", null, true);
        echo "</th>
                    <th>";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.province")), "html", null, true);
        echo "</th>
                    <th>";
        // line 61
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.province_branchoffice")), "html", null, true);
        echo "</th>
                    <th>";
        // line 62
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.town_branchoffice")), "html", null, true);
        echo "</th>
                    <th>% ";
        // line 63
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.refuse")), "html", null, true);
        echo "</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
/*
    var tableRefuse = null;

    var form_filters = new Object();
    \$('#filterForm .filter_inputs').each(function () {
        form_filters[\$(this).attr('name')] = \$(this).val();
    });

    var fullFilters = {
        'form_filters': form_filters
    }

    tableRefuse = \$('#tableRefuse').DataTable({
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
        // line 94
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
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
            \"sLengthMenu\": \"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
            \"sZeroRecords\": \"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sEmptyTable\": \"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sInfo\": \"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
            \"sInfoEmpty\": \"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
            \"sInfoFiltered\": \"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
            \"sInfoPostFix\": \"\",
            \"sSearch\": \"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
            \"sUrl\": \"\",
            \"sInfoThousands\": \",\",
            \"sLoadingRecords\": \"";
        // line 114
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
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                \"sSortDescending\": \": ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
            },
        },
        ajax: {
            url: \"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tab_refuse_table");
        echo "\",
            method: 'POST',
            data: fullFilters
        },
        initComplete: function() {
            ";
        // line 133
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
        // line 144
        echo "        },
        columns: [
            {data: 'requestDate'},
            {data: 'reference'},
            {data: 'operator'},
            {data: 'service'},
            {data: 'status'},
            {data: 'cause'},
            {data: {}, render: function(data, row) {
                    html = '<form action=\"";
        // line 153
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

    Highcharts.chart('refuse_figure', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Rechazados / No Rechazados'
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
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.figure.assistance_type"), "html", null, true);
        echo "'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '";
        // line 185
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
            name: 'Rechazados',
            data: [";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refuseFigureData"]) || array_key_exists("refuseFigureData", $context) ? $context["refuseFigureData"] : (function () { throw new RuntimeError('Variable "refuseFigureData" does not exist.', 204, $this->source); })()), "countRefuse", [], "any", false, false, false, 204), "html", null, true);
        echo "]

        }, {
            name: 'No Rechazados',
            data: [";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refuseFigureData"]) || array_key_exists("refuseFigureData", $context) ? $context["refuseFigureData"] : (function () { throw new RuntimeError('Variable "refuseFigureData" does not exist.', 208, $this->source); })()), "countNoRefuse", [], "any", false, false, false, 208), "html", null, true);
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
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.refuse_cause"), "html", null, true);
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
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.percentage"), "html", null, true);
        echo "',
            data: JSON.parse(\"";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["failureCauseFigureData"]) || array_key_exists("failureCauseFigureData", $context) ? $context["failureCauseFigureData"] : (function () { throw new RuntimeError('Variable "failureCauseFigureData" does not exist.', 247, $this->source); })()), "html", null, true);
        echo "\".replaceAll('&quot;', '\"')),            
        }]
    });
    */

    var tableRefuse = null;

    var fullFilters = [];
    var refuseSubTablePercentageThreshold = 3.5;

    \$(\"#filterRefuseGroupBy\").chosen({disable_search: true});

    \$(\"#filterRefuseGroupBy\").change(function() {
        reloadRefuseDataTable();
    });

    getFilters();

    getFilters();
    tableRefuse = \$('#tableRefuse').DataTable({
        dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
        order: [0, 'ASC'],
        searching: true,
        rowReorder: true,
        columnDefs: [
            { orderable: true, className: 'reorder', targets: [0,1,2,3] },
            { orderable: false, targets: [4] }
        ],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, \"";
        // line 277
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
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
            \"sLengthMenu\": \"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
            \"sZeroRecords\": \"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sEmptyTable\": \"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sInfo\": \"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
            \"sInfoEmpty\": \"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
            \"sInfoFiltered\": \"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
            \"sInfoPostFix\": \"\",
            \"sSearch\": \"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
            \"sUrl\": \"\",
            \"sInfoThousands\": \",\",
            \"sLoadingRecords\": \"";
        // line 297
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
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                \"sSortDescending\": \": ";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
            },
        },
        ajax: {
            url: \"";
        // line 310
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tab_refuse_table_general");
        echo "\",
            method: 'POST',
            data: fullFilters
        },
        initComplete: function() {
            // Enable THEAD scroll bars
            \$('.dataTables_scrollHead').css('overflow', 'auto');

            // Sync THEAD scrolling with TBODY
            \$('.dataTables_scrollHead').on('scroll', function () {
                \$('.dataTables_scrollBody').scrollLeft(\$(this).scrollLeft());
            });
        },
        drawCallback: function() {
            loadFunctionDatatable();
        },                   
        createdRow: function(row, data, index) {

            ";
        // line 329
        echo "            \$(row).addClass(\"details\");

            let groupByValue = \$(\"#filterRefuseGroupBy\").val();

            switch(groupByValue) {
                case \"1\":
                    \$(row).attr(\"data-groupby\", data.br_id );
                    \$(row).attr(\"data-type\", \"br_id\" );
                    break;
                case \"2\":
                    \$(row).attr(\"data-groupby\", data.vh_province_id );
                    \$(row).attr(\"data-type\", \"vh_province_id\" );
                    break;
                case \"3\":
                    \$(row).attr(\"data-groupby\", data.br_province_id );
                    \$(row).attr(\"data-type\", \"br_province_id\" );
                    break;
                case \"4\":
                    \$(row).attr(\"data-groupby\", data.br_town_id );
                    \$(row).attr(\"data-type\", \"br_town_id\" );
                    break;
                default:
                    ";
        // line 352
        echo "            }
        }, 
        columns: [
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"1\") ? data.br_name : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"2\") ? data.vh_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"3\") ? data.br_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"4\") ? data.br_town : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                var html = \"\";
                var label = '';
                var ris_percentage = (data.RIS_count / data.total_count) * 100;
                if (ris_percentage > refuseSubTablePercentageThreshold){
                    label = \"label_warning\";
                }
                else{
                    label = \"label_success\";
                }
                html += \"<div class='\"+label+\"'>\" + ris_percentage.toFixed(2) + \"%</div>\";
                return html;
                }
            }
        ]
    });


     function loadFunctionDatatable(){

        \$('.details').click(function(){
            
            let params = {
               \"groupby\": \$(this).data(\"groupby\"),
            };

            loadInterventionDetail(params);
        });
    }

    function loadInterventionDetail(params, force = false){
        
        let groupbyData = params[\"groupby\"].toString();

        ";
        // line 410
        echo "        \$(\".selectedLine\").removeClass(\"selectedLine\");
        \$(\".dataOf\").addClass(\"dataOfToRemove\");
        \$('#data-of-' + groupbyData).removeClass(\"dataOfToRemove\");
        \$(\".dataOfToRemove\").remove();
        \$('#data-of-' + groupbyData).addClass(\"selectedLine\");

        ";
        // line 417
        echo "        let line = \$(\"tr[data-groupby='\" + groupbyData + \"']\");

        ";
        // line 420
        echo "        if (force){
            \$('#data-of-' + groupbyData).remove();
        } else{
            ";
        // line 424
        echo "            if (!\$('#data-of-' + groupbyData).length) {

                ";
        // line 427
        echo "                let numColumn = 20;
                let newTr = \$('<tr></tr>').html('<td colspan=\"'+numColumn+'\"><center><div class=\"loader\"></div></center></td>');

                ";
        // line 431
        echo "                line.addClass(\"selectedLine\");
                newTr.attr(\"id\",'data-of-' + groupbyData);
                newTr.addClass(\"dataOf\");
                newTr.insertAfter(line);

                ";
        // line 437
        echo "                \$.ajax({
                    type: 'POST',
                    url: \"";
        // line 439
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_refuse_detail");
        echo "\",
                    data: {                            
                        groupby: line.data(\"groupby\"),
                        type: line.data(\"type\"),
                    },
                    beforeSend: function(){},
                    success: function (data) {
                        newTr.css({\"opacity\": \"0%\"});
                        newTr.html('<td colspan=\"'+numColumn+'\">'+ data + '</td>');
                        setTimeout(function() {
                            newTr.css({\"opacity\": \"100%\"});
                        }, 200);
                    },
                    error: function (data) {
                        swal({ title: \"Error!\", icon: \"error\", button: \"Ok\", });
                    },
                });

            } else {
                \$('#data-of-' + groupbyData).remove();
            }
        }
    }

    function getFilters() {
        let form_filters = new Object();
        \$('.filter_inputs').each(function() {
            form_filters[\$(this).attr('name')] = \$(this).val();
        });

        fullFilters = {
            'form_filters': form_filters,
            'groupByFilter': \$(\"#filterRefuseGroupBy\").val()
        };
    }

    function reloadRefuseDataTable() {
        getFilters();
        \$(\"#tableRefuse\").DataTable().search(JSON.stringify(fullFilters)).draw();
    }


    Highcharts.chart('refuse_figure', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Rechazados / No Rechazados'
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
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.figure.assistance_type"), "html", null, true);
        echo "'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '";
        // line 503
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
            name: 'Rechazados',
            data: [";
        // line 522
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refuseFigureData"]) || array_key_exists("refuseFigureData", $context) ? $context["refuseFigureData"] : (function () { throw new RuntimeError('Variable "refuseFigureData" does not exist.', 522, $this->source); })()), "countRefuse", [], "any", false, false, false, 522), "html", null, true);
        echo "]

        }, {
            name: 'No Rechazados',
            data: [";
        // line 526
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refuseFigureData"]) || array_key_exists("refuseFigureData", $context) ? $context["refuseFigureData"] : (function () { throw new RuntimeError('Variable "refuseFigureData" does not exist.', 526, $this->source); })()), "countNoRefuse", [], "any", false, false, false, 526), "html", null, true);
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
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.refuse_cause"), "html", null, true);
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
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.percentage"), "html", null, true);
        echo "',
            data: JSON.parse(\"";
        // line 565
        echo twig_escape_filter($this->env, (isset($context["failureCauseFigureData"]) || array_key_exists("failureCauseFigureData", $context) ? $context["failureCauseFigureData"] : (function () { throw new RuntimeError('Variable "failureCauseFigureData" does not exist.', 565, $this->source); })()), "html", null, true);
        echo "\".replaceAll('&quot;', '\"')),            
        }]
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/dashboard_tab_refuse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 565,  788 => 564,  760 => 539,  744 => 526,  737 => 522,  715 => 503,  705 => 496,  645 => 439,  641 => 437,  634 => 431,  629 => 427,  625 => 424,  620 => 420,  616 => 417,  608 => 410,  549 => 352,  525 => 329,  504 => 310,  497 => 306,  493 => 305,  482 => 297,  476 => 294,  471 => 292,  467 => 291,  463 => 290,  459 => 289,  455 => 288,  451 => 287,  447 => 286,  435 => 277,  402 => 247,  398 => 246,  370 => 221,  354 => 208,  347 => 204,  325 => 185,  315 => 178,  287 => 153,  276 => 144,  264 => 133,  256 => 127,  249 => 123,  245 => 122,  234 => 114,  228 => 111,  223 => 109,  219 => 108,  215 => 107,  211 => 106,  207 => 105,  203 => 104,  199 => 103,  187 => 94,  153 => 63,  149 => 62,  145 => 61,  141 => 60,  137 => 59,  123 => 48,  119 => 47,  115 => 46,  111 => 45,  106 => 43,  102 => 41,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"row\" style=\"\">
    <div class=\"col-md-12 col-lg-6\">
        <div class=\"card\" style=\"height: auto; padding: 10px;\">
            <figure class=\"highcharts-figure\">
                <div id=\"refuse_figure\"></div>
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

<!--
<div class=\"row\" style=\"\">
    <div class=\"col-md-12\">
        <table id=\"tableRefuse\" class=\"table\">
            <thead>
                <tr>
                    <th>{{\"dataTable.dashboard.request_date\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.reference\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.operator\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.service\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.status\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.refuse_cause\"|trans|upper}}</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
-->

<div id='tableRefuseFilter' style='margin-top:40px; display: flex; justify-content: flex-end;'>
    {# Filtro de agrupación (group by) #}
    <div>
        <div class=\"filter_inputs_div\">
            <label for=\"filterRefuseGroupBy\">{{\"dashboard.ris.filter.groupBy.label\"|trans}}:</label>
            <select id=\"filterRefuseGroupBy\" name=\"risGroupBy\" class=\"filter_inputs form-control select_inputs\">
                <option value ='1'>{{\"general.branch_office\"|trans}}</option>
                <option value ='2'>{{\"general.province\"|trans}}</option>
                <option value ='3'>{{\"general.branch_office_province\"|trans}}</option>
                <option value ='4'>{{\"general.branch_office_town\"|trans}}</option>
            </select>
        </div>
    </div>
</div>

<div class=\"row\" style=\"\">
    <div class=\"col-md-12\">
        <table id=\"tableRefuse\" class=\"table\">
            <thead>
                 <tr>
                    <th>{{\"general.branch_office\"|trans|upper}}</th>
                    <th>{{\"data_management.input.label.province\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.province_branchoffice\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.town_branchoffice\"|trans|upper}}</th>
                    <th>% {{\"dataTable.dashboard.refuse\"|trans|upper}}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
/*
    var tableRefuse = null;

    var form_filters = new Object();
    \$('#filterForm .filter_inputs').each(function () {
        form_filters[\$(this).attr('name')] = \$(this).val();
    });

    var fullFilters = {
        'form_filters': form_filters
    }

    tableRefuse = \$('#tableRefuse').DataTable({
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
            url: \"{{ path('dashboard_tab_refuse_table') }}\",
            method: 'POST',
            data: fullFilters
        },
        initComplete: function() {
            {# console.log(\"initcomplete refuse\"); #}

            // Enable THEAD scroll bars
            \$('.dataTables_scrollHead').css('overflow', 'auto');

            // Sync THEAD scrolling with TBODY
            \$('.dataTables_scrollHead').on('scroll', function () {
                \$('.dataTables_scrollBody').scrollLeft(\$(this).scrollLeft());
            });
        },
        drawCallback: function() {
            {# console.log(\"drawCallback refuse\"); #}
        },
        columns: [
            {data: 'requestDate'},
            {data: 'reference'},
            {data: 'operator'},
            {data: 'service'},
            {data: 'status'},
            {data: 'cause'},
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

    Highcharts.chart('refuse_figure', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Rechazados / No Rechazados'
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
            name: 'Rechazados',
            data: [{{refuseFigureData.countRefuse}}]

        }, {
            name: 'No Rechazados',
            data: [{{refuseFigureData.countNoRefuse}}]

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
            text: '{{\"dataTable.dashboard.refuse_cause\"|trans}}'
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
            data: JSON.parse(\"{{failureCauseFigureData}}\".replaceAll('&quot;', '\"')),            
        }]
    });
    */

    var tableRefuse = null;

    var fullFilters = [];
    var refuseSubTablePercentageThreshold = 3.5;

    \$(\"#filterRefuseGroupBy\").chosen({disable_search: true});

    \$(\"#filterRefuseGroupBy\").change(function() {
        reloadRefuseDataTable();
    });

    getFilters();

    getFilters();
    tableRefuse = \$('#tableRefuse').DataTable({
        dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
        order: [0, 'ASC'],
        searching: true,
        rowReorder: true,
        columnDefs: [
            { orderable: true, className: 'reorder', targets: [0,1,2,3] },
            { orderable: false, targets: [4] }
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
            url: \"{{ path('dashboard_tab_refuse_table_general') }}\",
            method: 'POST',
            data: fullFilters
        },
        initComplete: function() {
            // Enable THEAD scroll bars
            \$('.dataTables_scrollHead').css('overflow', 'auto');

            // Sync THEAD scrolling with TBODY
            \$('.dataTables_scrollHead').on('scroll', function () {
                \$('.dataTables_scrollBody').scrollLeft(\$(this).scrollLeft());
            });
        },
        drawCallback: function() {
            loadFunctionDatatable();
        },                   
        createdRow: function(row, data, index) {

            {#* Creamos la fila con los metadatos #}
            \$(row).addClass(\"details\");

            let groupByValue = \$(\"#filterRefuseGroupBy\").val();

            switch(groupByValue) {
                case \"1\":
                    \$(row).attr(\"data-groupby\", data.br_id );
                    \$(row).attr(\"data-type\", \"br_id\" );
                    break;
                case \"2\":
                    \$(row).attr(\"data-groupby\", data.vh_province_id );
                    \$(row).attr(\"data-type\", \"vh_province_id\" );
                    break;
                case \"3\":
                    \$(row).attr(\"data-groupby\", data.br_province_id );
                    \$(row).attr(\"data-type\", \"br_province_id\" );
                    break;
                case \"4\":
                    \$(row).attr(\"data-groupby\", data.br_town_id );
                    \$(row).attr(\"data-type\", \"br_town_id\" );
                    break;
                default:
                    {#* console.log(\"error\"); #}
            }
        }, 
        columns: [
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"1\") ? data.br_name : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"2\") ? data.vh_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"3\") ? data.br_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRefuseGroupBy\").val() == \"4\") ? data.br_town : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                var html = \"\";
                var label = '';
                var ris_percentage = (data.RIS_count / data.total_count) * 100;
                if (ris_percentage > refuseSubTablePercentageThreshold){
                    label = \"label_warning\";
                }
                else{
                    label = \"label_success\";
                }
                html += \"<div class='\"+label+\"'>\" + ris_percentage.toFixed(2) + \"%</div>\";
                return html;
                }
            }
        ]
    });


     function loadFunctionDatatable(){

        \$('.details').click(function(){
            
            let params = {
               \"groupby\": \$(this).data(\"groupby\"),
            };

            loadInterventionDetail(params);
        });
    }

    function loadInterventionDetail(params, force = false){
        
        let groupbyData = params[\"groupby\"].toString();

        {#* Borramos las subtablas ya abiertas #}
        \$(\".selectedLine\").removeClass(\"selectedLine\");
        \$(\".dataOf\").addClass(\"dataOfToRemove\");
        \$('#data-of-' + groupbyData).removeClass(\"dataOfToRemove\");
        \$(\".dataOfToRemove\").remove();
        \$('#data-of-' + groupbyData).addClass(\"selectedLine\");

        {#* Obtenemos la línea de la tabla #}
        let line = \$(\"tr[data-groupby='\" + groupbyData + \"']\");

        {#* Si lo forzamos #}
        if (force){
            \$('#data-of-' + groupbyData).remove();
        } else{
            {#* Si no existe, lo creamos #}
            if (!\$('#data-of-' + groupbyData).length) {

                {#* Variables auxiliares para crear el tr #}
                let numColumn = 20;
                let newTr = \$('<tr></tr>').html('<td colspan=\"'+numColumn+'\"><center><div class=\"loader\"></div></center></td>');

                {#* Insertamos #}
                line.addClass(\"selectedLine\");
                newTr.attr(\"id\",'data-of-' + groupbyData);
                newTr.addClass(\"dataOf\");
                newTr.insertAfter(line);

                {#* Realizamos el ajax para traernos el HTML #}
                \$.ajax({
                    type: 'POST',
                    url: \"{{ path('dashboard_refuse_detail') }}\",
                    data: {                            
                        groupby: line.data(\"groupby\"),
                        type: line.data(\"type\"),
                    },
                    beforeSend: function(){},
                    success: function (data) {
                        newTr.css({\"opacity\": \"0%\"});
                        newTr.html('<td colspan=\"'+numColumn+'\">'+ data + '</td>');
                        setTimeout(function() {
                            newTr.css({\"opacity\": \"100%\"});
                        }, 200);
                    },
                    error: function (data) {
                        swal({ title: \"Error!\", icon: \"error\", button: \"Ok\", });
                    },
                });

            } else {
                \$('#data-of-' + groupbyData).remove();
            }
        }
    }

    function getFilters() {
        let form_filters = new Object();
        \$('.filter_inputs').each(function() {
            form_filters[\$(this).attr('name')] = \$(this).val();
        });

        fullFilters = {
            'form_filters': form_filters,
            'groupByFilter': \$(\"#filterRefuseGroupBy\").val()
        };
    }

    function reloadRefuseDataTable() {
        getFilters();
        \$(\"#tableRefuse\").DataTable().search(JSON.stringify(fullFilters)).draw();
    }


    Highcharts.chart('refuse_figure', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Rechazados / No Rechazados'
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
            name: 'Rechazados',
            data: [{{refuseFigureData.countRefuse}}]

        }, {
            name: 'No Rechazados',
            data: [{{refuseFigureData.countNoRefuse}}]

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
            text: '{{\"dataTable.dashboard.refuse_cause\"|trans}}'
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
            data: JSON.parse(\"{{failureCauseFigureData}}\".replaceAll('&quot;', '\"')),            
        }]
    });
</script>", "frontend/collaborator/dashboard_tab_refuse.html.twig", "/var/www/rira_web/templates/frontend/collaborator/dashboard_tab_refuse.html.twig");
    }
}
