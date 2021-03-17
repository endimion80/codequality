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

/* frontend/collaborator/dashboard_ris_detail.html.twig */
class __TwigTemplate_6fb2eac57d9c1bf654763da3156e1ff9949960a281772972b93063f00102638d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard_ris_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard_ris_detail.html.twig"));

        // line 1
        echo "<div id='subFilterRisRow' style='display: flex; justify-content: flex-end;'>
    ";
        // line 3
        echo "    ";
        if (((isset($context["typeData"]) || array_key_exists("typeData", $context) ? $context["typeData"] : (function () { throw new RuntimeError('Variable "typeData" does not exist.', 3, $this->source); })()) != "br_id")) {
            // line 4
            echo "    <div class=\"filter_inputs_div\">
        <select id=\"subFilterBranchOffice\" name=\"branchOffice\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office"), "html", null, true);
            echo "</option>
        </select>
    </div>
    ";
        }
        // line 10
        echo "
    ";
        // line 12
        echo "    <div class=\"filter_inputs_div\">
        <select id=\"subFilterOperator\" name=\"operator\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.operator"), "html", null, true);
        echo "</option>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
            // line 16
            echo "                <option value ='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operator"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operator"], "reference", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </select>
    </div>

    ";
        // line 22
        echo "    ";
        if (((isset($context["typeData"]) || array_key_exists("typeData", $context) ? $context["typeData"] : (function () { throw new RuntimeError('Variable "typeData" does not exist.', 22, $this->source); })()) != "vh_province_id")) {
            // line 23
            echo "    <div class=\"filter_inputs_div\">
        <select id=\"subFilterProvince\" name=\"vh_province\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.vehicle_province"), "html", null, true);
            echo "</option>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["provinces"]) || array_key_exists("provinces", $context) ? $context["provinces"] : (function () { throw new RuntimeError('Variable "provinces" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
                // line 27
                echo "                <option value ='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </select>
    </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        if (((isset($context["typeData"]) || array_key_exists("typeData", $context) ? $context["typeData"] : (function () { throw new RuntimeError('Variable "typeData" does not exist.', 34, $this->source); })()) != "br_province_id")) {
            // line 35
            echo "    <div class=\"filter_inputs_div\">
        <select id=\"subFilterBranchOfficeProvince\" name=\"br_province\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_province"), "html", null, true);
            echo "</option>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["provinces"]) || array_key_exists("provinces", $context) ? $context["provinces"] : (function () { throw new RuntimeError('Variable "provinces" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
                // line 39
                echo "                <option value ='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </select>
    </div>
    ";
        }
        // line 44
        echo "
    ";
        // line 46
        echo "    ";
        if (((isset($context["typeData"]) || array_key_exists("typeData", $context) ? $context["typeData"] : (function () { throw new RuntimeError('Variable "typeData" does not exist.', 46, $this->source); })()) != "br_town_id")) {
            // line 47
            echo "    <div class=\"filter_inputs_div\">
        <select disabled id=\"subFilterBranchOfficeTown\" name=\"br_town\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_town"), "html", null, true);
            echo "</option>
        </select>
    </div>
    ";
        }
        // line 53
        echo "
    ";
        // line 55
        echo "    <div class=\"filter_inputs_div\">
        <input id=\"subFilterDateRange\" name='dateRange' class=\"sub_filter_inputs asitur_input datepicker\" value='01/01/";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - 31/12/";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "' 
            style='width: 100%;'/>
    </div>

    ";
        // line 61
        echo "    <div class=\"filter_inputs_div\">
        <select id=\"subFilterIsRis\" name=\"isRis\" class=\"sub_filter_inputs form-control select_inputs chosen updateDataInfo\">
            <option value =''>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_ris_noRis"), "html", null, true);
        echo "</option>
            <option value ='1'>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.ris"), "html", null, true);
        echo "</option>
            <option value ='0'>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.no_ris"), "html", null, true);
        echo "</option>
        </select>
    </div>
</div>

<div class=\"row\" style=\"margin-top: 20px;\">
    <div class=\"col-md-12\">
        <table id=\"tableRisDetail\" class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 75
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.ris.request_date")), "html", null, true);
        echo "</th>
                    <th>";
        // line 76
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.reference")), "html", null, true);
        echo "</th>
                    <th>";
        // line 77
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.operator")), "html", null, true);
        echo "</th>
                    <th>";
        // line 78
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.ris")), "html", null, true);
        echo "</th>
                    <th>";
        // line 79
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.cause")), "html", null, true);
        echo "</th>
                    <th>";
        // line 80
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.dashboard.comments")), "html", null, true);
        echo "</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>



<script>

    var fullSubFilters = [];
    var tableRisDetail = null;
   
    \$(\"#filterIsRis\").chosen();
    \$(\".sub_filter_inputs.select_inputs\").chosen();

    \$('#subFilterDateRange').daterangepicker();

    ";
        // line 101
        echo "    \$.ajax({
        url:'";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_get_branch_offices");
        echo "',
        data: {collaboratorId: \"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collaborator"]) || array_key_exists("collaborator", $context) ? $context["collaborator"] : (function () { throw new RuntimeError('Variable "collaborator" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "html", null, true);
        echo "\" },
        type:\"POST\",
        dataType: \"json\",
        cache:false,
        success: function(data){
            \$('#subFilterBranchOffice').html(\"<option value =''>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_branchoffice"), "html", null, true);
        echo "</option>\");
            for(var i = 0 ; i < data.length; i++){
                var newOption = \$('<option>');
                newOption.val(data[i].id);
                newOption.html(data[i].name + ' (' + data[i].province + ')');
                \$('#subFilterBranchOffice').append(newOption.clone());
            }
            \$('#subFilterBranchOffice').trigger(\"chosen:updated\");
        },
        error:function(err){
            console.log('error');
            console.log(err);
        }
    });

    ";
        // line 124
        echo "    \$('#subFilterBranchOfficeProvince').on('change', function(){
        if(\$(this).val() == \"\") {
            \$(\"#subFilterBranchOfficeTown\").empty();
            \$(\"#subFilterBranchOfficeTown\").append('<option value=\"\"> ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_town"), "html", null, true);
        echo " </option>');
            \$(\"#subFilterBranchOfficeTown\").attr('disabled', 'disabled');
            \$(\"#subFilterBranchOfficeTown\").trigger(\"chosen:updated\");
        } else {
            \$.ajax({
                url:'";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("town_chosen_list");
        echo "',
                data: {\"province\": \$(this).val() },
                type:\"POST\",
                dataType: \"json\",
                cache:false,
                success: function(data){
                    \$('#subFilterBranchOfficeTown').html(\"<option value =''>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.branch_office_town"), "html", null, true);
        echo "</option>\");
                    for(var i = 0 ; i < data.length; i++){
                        var newOption = \$('<option>');
                        newOption.val(data[i].id);
                        newOption.html(data[i].name);
                        \$('#subFilterBranchOfficeTown').append(newOption.clone());
                    }
                    \$(\"#subFilterBranchOfficeTown\").removeAttr('disabled');
                    \$('#subFilterBranchOfficeTown').trigger(\"chosen:updated\");
                },
                error:function(err){
                    console.log('error');
                    console.log(err);
                }
            });
        }
    });

    getSubFilters();
    createRisDetailDataTable();

    function createRisDetailDataTable() {
        if(tableRisDetail == null) {

            tableRisDetail = \$('#tableRisDetail').DataTable({
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
        // line 173
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
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 193
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
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tab_ris_table_detail");
        echo "\",
                    method: 'POST',
                    data: {
                        fullSubFilters
                    }
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
                    
                },
                columns: [
                    {data: 'requestDate'},
                    {data: 'reference'},
                    {data: 'operator'},
                    {data: {}, render: function(data, row) {
                            if(data[\"isRis\"] == 1) {
                                html = \"<span>";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.ris"), "html", null, true);
        echo "</span>\";
                            } else if(data[\"isRis\"] == 0){
                                html = \"<span>";
        // line 232
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
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_details");
        echo "\" target=\"_blank\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }
    }

    function getSubFilters() {
        let sub_filters = new Object();
        \$('.sub_filter_inputs').each(function() {
            sub_filters[\$(this).attr('name')] = \$(this).val();
        });

        fullSubFilters = {
            'collaboratorId': \$(\"#filterCollaborator\").val(),
            'subFilters': sub_filters,
            'groupByFilter': {
                'groupByData': \"";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["groupByData"]) || array_key_exists("groupByData", $context) ? $context["groupByData"] : (function () { throw new RuntimeError('Variable "groupByData" does not exist.', 264, $this->source); })()), "html", null, true);
        echo "\",
                'typeData': \"";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["typeData"]) || array_key_exists("typeData", $context) ? $context["typeData"] : (function () { throw new RuntimeError('Variable "typeData" does not exist.', 265, $this->source); })()), "html", null, true);
        echo "\",
            }
        };
    }

    function reloadRisDetailDataTable() {
        getSubFilters();
        \$(\"#tableRisDetail\").DataTable().search(JSON.stringify(fullSubFilters)).draw();
    }

    \$(\".sub_filter_inputs\").change(function() {
        reloadRisDetailDataTable();
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/dashboard_ris_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 265,  488 => 264,  463 => 242,  450 => 232,  445 => 230,  418 => 206,  411 => 202,  407 => 201,  396 => 193,  390 => 190,  385 => 188,  381 => 187,  377 => 186,  373 => 185,  369 => 184,  365 => 183,  361 => 182,  349 => 173,  311 => 138,  302 => 132,  294 => 127,  289 => 124,  271 => 108,  263 => 103,  259 => 102,  256 => 101,  233 => 80,  229 => 79,  225 => 78,  221 => 77,  217 => 76,  213 => 75,  200 => 65,  196 => 64,  192 => 63,  188 => 61,  179 => 56,  176 => 55,  173 => 53,  166 => 49,  162 => 47,  159 => 46,  156 => 44,  151 => 41,  140 => 39,  136 => 38,  132 => 37,  128 => 35,  125 => 34,  122 => 32,  117 => 29,  106 => 27,  102 => 26,  98 => 25,  94 => 23,  91 => 22,  86 => 18,  75 => 16,  71 => 15,  67 => 14,  63 => 12,  60 => 10,  53 => 6,  49 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id='subFilterRisRow' style='display: flex; justify-content: flex-end;'>
    {# Filtro Sucursal #}
    {% if typeData != \"br_id\" %}
    <div class=\"filter_inputs_div\">
        <select id=\"subFilterBranchOffice\" name=\"branchOffice\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>{{\"general.branch_office\"|trans}}</option>
        </select>
    </div>
    {% endif %}

    {# Filtro Operario #}
    <div class=\"filter_inputs_div\">
        <select id=\"subFilterOperator\" name=\"operator\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>{{\"general.operator\"|trans}}</option>
            {% for operator in operators %}
                <option value ='{{operator.id}}'>{{operator.reference}}</option>
            {% endfor %}
        </select>
    </div>

    {# Filtro Provincia vehículo #}
    {% if typeData != \"vh_province_id\" %}
    <div class=\"filter_inputs_div\">
        <select id=\"subFilterProvince\" name=\"vh_province\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>{{\"general.vehicle_province\"|trans}}</option>
            {% for province in provinces %}
                <option value ='{{province.id}}'>{{province.name}}</option>
            {% endfor %}
        </select>
    </div>
    {% endif %}

    {# Filtro Provincia sucursal #}
    {% if typeData != \"br_province_id\" %}
    <div class=\"filter_inputs_div\">
        <select id=\"subFilterBranchOfficeProvince\" name=\"br_province\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>{{\"general.branch_office_province\"|trans}}</option>
            {% for province in provinces %}
                <option value ='{{province.id}}'>{{province.name}}</option>
            {% endfor %}
        </select>
    </div>
    {% endif %}

    {# Filtro Localidad sucursal #}
    {% if typeData != \"br_town_id\" %}
    <div class=\"filter_inputs_div\">
        <select disabled id=\"subFilterBranchOfficeTown\" name=\"br_town\" class=\"sub_filter_inputs form-control select_inputs chosen\">
            <option value =''>{{\"general.branch_office_town\"|trans}}</option>
        </select>
    </div>
    {% endif %}

    {# Filtro Fecha #}
    <div class=\"filter_inputs_div\">
        <input id=\"subFilterDateRange\" name='dateRange' class=\"sub_filter_inputs asitur_input datepicker\" value='01/01/{{ \"now\"|date(\"Y\") }} - 31/12/{{ \"now\"|date(\"Y\") }}' 
            style='width: 100%;'/>
    </div>

    {# Filtro RIS/No RIS #}
    <div class=\"filter_inputs_div\">
        <select id=\"subFilterIsRis\" name=\"isRis\" class=\"sub_filter_inputs form-control select_inputs chosen updateDataInfo\">
            <option value =''>{{\"dashboard.no_filter_ris_noRis\"|trans}}</option>
            <option value ='1'>{{\"dashboard.select.ris\"|trans}}</option>
            <option value ='0'>{{\"dashboard.select.no_ris\"|trans}}</option>
        </select>
    </div>
</div>

<div class=\"row\" style=\"margin-top: 20px;\">
    <div class=\"col-md-12\">
        <table id=\"tableRisDetail\" class=\"table\">
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

    var fullSubFilters = [];
    var tableRisDetail = null;
   
    \$(\"#filterIsRis\").chosen();
    \$(\".sub_filter_inputs.select_inputs\").chosen();

    \$('#subFilterDateRange').daterangepicker();

    {# Sucursales chosen #}
    \$.ajax({
        url:'{{ path('dashboard_get_branch_offices') }}',
        data: {collaboratorId: \"{{collaborator.id}}\" },
        type:\"POST\",
        dataType: \"json\",
        cache:false,
        success: function(data){
            \$('#subFilterBranchOffice').html(\"<option value =''>{{'dashboard.no_filter_branchoffice'|trans}}</option>\");
            for(var i = 0 ; i < data.length; i++){
                var newOption = \$('<option>');
                newOption.val(data[i].id);
                newOption.html(data[i].name + ' (' + data[i].province + ')');
                \$('#subFilterBranchOffice').append(newOption.clone());
            }
            \$('#subFilterBranchOffice').trigger(\"chosen:updated\");
        },
        error:function(err){
            console.log('error');
            console.log(err);
        }
    });

    {# Localidades chosen #}
    \$('#subFilterBranchOfficeProvince').on('change', function(){
        if(\$(this).val() == \"\") {
            \$(\"#subFilterBranchOfficeTown\").empty();
            \$(\"#subFilterBranchOfficeTown\").append('<option value=\"\"> {{\"general.branch_office_town\"|trans}} </option>');
            \$(\"#subFilterBranchOfficeTown\").attr('disabled', 'disabled');
            \$(\"#subFilterBranchOfficeTown\").trigger(\"chosen:updated\");
        } else {
            \$.ajax({
                url:'{{ path('town_chosen_list') }}',
                data: {\"province\": \$(this).val() },
                type:\"POST\",
                dataType: \"json\",
                cache:false,
                success: function(data){
                    \$('#subFilterBranchOfficeTown').html(\"<option value =''>{{'general.branch_office_town'|trans}}</option>\");
                    for(var i = 0 ; i < data.length; i++){
                        var newOption = \$('<option>');
                        newOption.val(data[i].id);
                        newOption.html(data[i].name);
                        \$('#subFilterBranchOfficeTown').append(newOption.clone());
                    }
                    \$(\"#subFilterBranchOfficeTown\").removeAttr('disabled');
                    \$('#subFilterBranchOfficeTown').trigger(\"chosen:updated\");
                },
                error:function(err){
                    console.log('error');
                    console.log(err);
                }
            });
        }
    });

    getSubFilters();
    createRisDetailDataTable();

    function createRisDetailDataTable() {
        if(tableRisDetail == null) {

            tableRisDetail = \$('#tableRisDetail').DataTable({
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
                    url: \"{{ path('dashboard_tab_ris_table_detail') }}\",
                    method: 'POST',
                    data: {
                        fullSubFilters
                    }
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
                            html = '<form action=\"{{ path(\"intervention_details\") }}\" target=\"_blank\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"intervention_id\" value=\"'+data.id+'\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'
                            return html;
                        }
                    }
                ]
            });
        }
    }

    function getSubFilters() {
        let sub_filters = new Object();
        \$('.sub_filter_inputs').each(function() {
            sub_filters[\$(this).attr('name')] = \$(this).val();
        });

        fullSubFilters = {
            'collaboratorId': \$(\"#filterCollaborator\").val(),
            'subFilters': sub_filters,
            'groupByFilter': {
                'groupByData': \"{{groupByData}}\",
                'typeData': \"{{typeData}}\",
            }
        };
    }

    function reloadRisDetailDataTable() {
        getSubFilters();
        \$(\"#tableRisDetail\").DataTable().search(JSON.stringify(fullSubFilters)).draw();
    }

    \$(\".sub_filter_inputs\").change(function() {
        reloadRisDetailDataTable();
    });

</script>", "frontend/collaborator/dashboard_ris_detail.html.twig", "/var/www/rira_web/templates/frontend/collaborator/dashboard_ris_detail.html.twig");
    }
}
