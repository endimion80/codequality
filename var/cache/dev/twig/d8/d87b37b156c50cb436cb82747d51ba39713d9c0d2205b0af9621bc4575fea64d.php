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
class __TwigTemplate_d8229463f98dda055fee51cc0f16c4f17db4aab107da9e9ad204d2ce21665859 extends \Twig\Template
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

<div id='tableRisFilter' style='margin-top:40px; display: flex; justify-content: flex-end;'>
    ";
        // line 20
        echo "    <div>
        <div class=\"filter_inputs_div\">
            <label for=\"filterRisGroupBy\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ris.filter.groupBy.label"), "html", null, true);
        echo ":</label>
            <select id=\"filterRisGroupBy\" name=\"risGroupBy\" class=\"filter_inputs form-control select_inputs\">
                <option value ='1'>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office"), "html", null, true);
        echo "</option>
                <option value ='2'>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.province"), "html", null, true);
        echo "</option>
                <option value ='3'>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_province"), "html", null, true);
        echo "</option>
                <option value ='4'>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_town"), "html", null, true);
        echo "</option>
            </select>
        </div>
    </div>
</div>

<div class=\"row\" style=\"\">
    <div class=\"col-md-12\">
        <table id=\"tableRis\" class=\"table\">
            <thead>
                 <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office")), "html", null, true);
        echo "</th>
                    <th>";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.province")), "html", null, true);
        echo "</th>
                    <th>";
        // line 40
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.province_branchoffice")), "html", null, true);
        echo "</th>
                    <th>";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.town_branchoffice")), "html", null, true);
        echo "</th>
                    <th>";
        // line 42
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.ris_percentage")), "html", null, true);
        echo "</th>
                </tr>
            </thead>
        </table>
    </div>
</div>


<script>
    var tableRis = null;

    var fullFilters = [];
    var risSubTablePercentageThreshold = 40;

    \$(\"#filterRisGroupBy\").chosen({disable_search: true});


    \$(\"#filterRisGroupBy\").change(function() {
        reloadRisDataTable();
    });

    getFilters();
    tableRis = \$('#tableRis').DataTable({
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
        // line 75
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
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
            \"sLengthMenu\": \"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
            \"sZeroRecords\": \"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sEmptyTable\": \"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
            \"sInfo\": \"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
            \"sInfoEmpty\": \"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
            \"sInfoFiltered\": \"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
            \"sInfoPostFix\": \"\",
            \"sSearch\": \"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
            \"sUrl\": \"\",
            \"sInfoThousands\": \",\",
            \"sLoadingRecords\": \"";
        // line 95
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
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                \"sSortDescending\": \": ";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
            },
        },
        ajax: {
            url: \"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tab_ris_table");
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
        // line 127
        echo "            \$(row).addClass(\"details\");

            let groupByValue = \$(\"#filterRisGroupBy\").val();

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
        // line 150
        echo "            }
        }, 
        columns: [
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRisGroupBy\").val() == \"1\") ? data.br_name : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRisGroupBy\").val() == \"2\") ? data.vh_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRisGroupBy\").val() == \"3\") ? data.br_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRisGroupBy\").val() == \"4\") ? data.br_town : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                var html = \"\";
                var label = '';
                var ris_percentage = (data.RIS_count / data.total_count) * 100;
                if (ris_percentage < risSubTablePercentageThreshold){
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
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.figure.assistance_type"), "html", null, true);
        echo "'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '";
        // line 212
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
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["risFigureData"]) || array_key_exists("risFigureData", $context) ? $context["risFigureData"] : (function () { throw new RuntimeError('Variable "risFigureData" does not exist.', 231, $this->source); })()), "countRis", [], "any", false, false, false, 231), "html", null, true);
        echo "]

        }, {
            name: 'No RIS',
            data: [";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["risFigureData"]) || array_key_exists("risFigureData", $context) ? $context["risFigureData"] : (function () { throw new RuntimeError('Variable "risFigureData" does not exist.', 235, $this->source); })()), "countNoRis", [], "any", false, false, false, 235), "html", null, true);
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
        // line 248
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
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.percentage"), "html", null, true);
        echo "',
            data: JSON.parse(\"";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["risCauseFigureData"]) || array_key_exists("risCauseFigureData", $context) ? $context["risCauseFigureData"] : (function () { throw new RuntimeError('Variable "risCauseFigureData" does not exist.', 274, $this->source); })()), "html", null, true);
        echo "\".replaceAll('&quot;', '\"')),            
        }]
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
        // line 295
        echo "        \$(\".selectedLine\").removeClass(\"selectedLine\");
        \$(\".dataOf\").addClass(\"dataOfToRemove\");
        \$('#data-of-' + groupbyData).removeClass(\"dataOfToRemove\");
        \$(\".dataOfToRemove\").remove();
        \$('#data-of-' + groupbyData).addClass(\"selectedLine\");

        ";
        // line 302
        echo "        let line = \$(\"tr[data-groupby='\" + groupbyData + \"']\");

        ";
        // line 305
        echo "        if (force){
            \$('#data-of-' + groupbyData).remove();
        } else{
            ";
        // line 309
        echo "            if (!\$('#data-of-' + groupbyData).length) {

                ";
        // line 312
        echo "                let numColumn = 20;
                let newTr = \$('<tr></tr>').html('<td colspan=\"'+numColumn+'\"><center><div class=\"loader\"></div></center></td>');

                ";
        // line 316
        echo "                line.addClass(\"selectedLine\");
                newTr.attr(\"id\",'data-of-' + groupbyData);
                newTr.addClass(\"dataOf\");
                newTr.insertAfter(line);

                ";
        // line 322
        echo "                \$.ajax({
                    type: 'POST',
                    url: \"";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_ris_detail");
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
            'groupByFilter': \$(\"#filterRisGroupBy\").val()
        };
    }

    function reloadRisDataTable() {
        getFilters();
        \$(\"#tableRis\").DataTable().search(JSON.stringify(fullFilters)).draw();
    }

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
        return array (  468 => 324,  464 => 322,  457 => 316,  452 => 312,  448 => 309,  443 => 305,  439 => 302,  431 => 295,  408 => 274,  404 => 273,  376 => 248,  360 => 235,  353 => 231,  331 => 212,  321 => 205,  264 => 150,  240 => 127,  219 => 108,  212 => 104,  208 => 103,  197 => 95,  191 => 92,  186 => 90,  182 => 89,  178 => 88,  174 => 87,  170 => 86,  166 => 85,  162 => 84,  150 => 75,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  67 => 22,  63 => 20,  43 => 1,);
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

<div id='tableRisFilter' style='margin-top:40px; display: flex; justify-content: flex-end;'>
    {# Filtro de agrupación (group by) #}
    <div>
        <div class=\"filter_inputs_div\">
            <label for=\"filterRisGroupBy\">{{\"dashboard.ris.filter.groupBy.label\"|trans}}:</label>
            <select id=\"filterRisGroupBy\" name=\"risGroupBy\" class=\"filter_inputs form-control select_inputs\">
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
        <table id=\"tableRis\" class=\"table\">
            <thead>
                 <tr>
                    <th>{{\"general.branch_office\"|trans|upper}}</th>
                    <th>{{\"data_management.input.label.province\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.province_branchoffice\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.town_branchoffice\"|trans|upper}}</th>
                    <th>{{\"dataTable.dashboard.ris_percentage\"|trans|upper}}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>


<script>
    var tableRis = null;

    var fullFilters = [];
    var risSubTablePercentageThreshold = 40;

    \$(\"#filterRisGroupBy\").chosen({disable_search: true});


    \$(\"#filterRisGroupBy\").change(function() {
        reloadRisDataTable();
    });

    getFilters();
    tableRis = \$('#tableRis').DataTable({
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
            url: \"{{ path('dashboard_tab_ris_table') }}\",
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

            let groupByValue = \$(\"#filterRisGroupBy\").val();

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
                    let html = (\$(\"#filterRisGroupBy\").val() == \"1\") ? data.br_name : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRisGroupBy\").val() == \"2\") ? data.vh_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRisGroupBy\").val() == \"3\") ? data.br_province : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                    let html = (\$(\"#filterRisGroupBy\").val() == \"4\") ? data.br_town : \"\";
                    return html;
                }
            },
            {data: {}, render: function(data, row) {
                var html = \"\";
                var label = '';
                var ris_percentage = (data.RIS_count / data.total_count) * 100;
                if (ris_percentage < risSubTablePercentageThreshold){
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
                    url: \"{{ path('dashboard_ris_detail') }}\",
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
            'groupByFilter': \$(\"#filterRisGroupBy\").val()
        };
    }

    function reloadRisDataTable() {
        getFilters();
        \$(\"#tableRis\").DataTable().search(JSON.stringify(fullFilters)).draw();
    }

</script>", "frontend/collaborator/dashboard_tab_ris.html.twig", "/var/www/rira_web/templates/frontend/collaborator/dashboard_tab_ris.html.twig");
    }
}
