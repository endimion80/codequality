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

/* frontend/collaborator/dashboard.html.twig */
class __TwigTemplate_871b41419ecd91f0b7b15b75d70f35d74959ddb213f49d602e3ee6062b0428ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/dashboard.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-asitur_datatable.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-highcharts.css"), "html", null, true);
        echo "\">
    <style>

        .bigButtonSquareSelected{
            font-weight: bold !important;
            background-color: rgba(0, 148, 217, 0.06) !important;
        }
        .bigButtonSquareClick{
            cursor: pointer; 
        }

        .bigButtonSquare{
            width: 100%;
            height: 117px;
            padding: 27px 5px 20px 15px;
            object-fit: contain;
            border-radius: 3px;
            box-shadow: -10px 10px 20px 0 rgba(0, 0, 0, 0.08);
            background-color: white;
        }

        .iconContainer{
            width: 28%;
            float: left;
            display: inline-block;
        }

        .dataContainer{
            width: 70%;
            display: inline-block;
        }

        .iconContainer img {
            width: 40px;
            margin-top: 7px;

        }

        .dataNumberContainer{
            height: 32px;
            margin: 0 0 14px 0px;
            font-size: 36px;
            font-stretch: normal;
            font-style: normal;
            line-height: 0.67;
            letter-spacing: normal;
            color: var(--main-blue);
            text-align: center;
        }

        .dataLabelContainer{
            height: 24px;
            margin: 15px 0 0 4px;
            font-size: 18px;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: center;
            color: var(--main-blue);
            text-align: center;
        }

        .label_success{
            text-align: center;
            width: 90px;
            height: 29px;
            padding: 3px 16px 4px;
            border-radius: 3px;
            background-color: #cdf0b2;
            font-size: 16px;
            color: #3d7411;
        }

        .label_warning{
            text-align: center;
            width: 90px;
            height: 29px;
            padding: 3px 16px 4px;
            border-radius: 3px;
            background-color: #ffcbcb;
            font-size: 16px;
            color: #863d28;
        }

        .card {
            width: 100%;
            height: 356px;
            padding: 29px 34px 33px 59px;
            box-shadow: -10px 10px 20px 0 rgba(30, 30, 30, 0.05);
            background-color: var(--solid-white-ffffff);
        }

        .filter_inputs_div {
            margin-right: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
        }

    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 112
        echo "
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\" style=\"display: none;\">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
    
        <div class=\"row\">

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnRis' data-type='ris' class='bigButtonSquare bigButtonSquareClick'
                    data-url = '";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tab_ris");
        echo "' >
                    <div class='iconContainer'>
                        <img src='";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigSuccess.png"), "html", null, true);
        echo "'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            ";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.labelRis"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnCostAvg'  data-type='costAvg' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigClock.png"), "html", null, true);
        echo "'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            ";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.labelCostAvg"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnRefuse' data-type='refuse' class='bigButtonSquare bigButtonSquareClick'
                    data-url = '";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tab_refuse");
        echo "' >
                    <div class='iconContainer'>
                        <img src='";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigWarning.png"), "html", null, true);
        echo "'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            ";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.labelRefuse"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnSatisfied' data-type='satisfied' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigSuccess.png"), "html", null, true);
        echo "'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            ";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.labelSatisfied"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnNC'  data-type='nc' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigSuccess.png"), "html", null, true);
        echo "'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            ";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.labelNC"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnArrivalTime'  data-type='arrivalTime' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigClock.png"), "html", null, true);
        echo "'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            ";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.labelArrivalTime"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id='filterRow' style='margin-top:40px; visibility: hidden;'>

            <div class=\"row\" style=\"\">
                <div class=\"col-sm-2 col-md-2 col-lg-2\">
                    ";
        // line 219
        echo "                    <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
                </div>
                <div class=\"col-sm-10 col-md-10 col-lg-10\">
                    <form id='filterForm' action='#'>
                        <div style=\"display: flex; flex-wrap: wrap; justify-content: flex-start;\">
                            ";
        // line 225
        echo "                            <div class=\"filter_inputs_div\">
                                ";
        // line 226
        if (((isset($context["isMaster"]) || array_key_exists("isMaster", $context) ? $context["isMaster"] : (function () { throw new RuntimeError('Variable "isMaster" does not exist.', 226, $this->source); })()) == true)) {
            // line 227
            echo "                                    <select id=\"filterCollaborator\" name=\"collaborator\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                        <option value =''>";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_collaborator"), "html", null, true);
            echo "</option>
                                        ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collaboratorList"]) || array_key_exists("collaboratorList", $context) ? $context["collaboratorList"] : (function () { throw new RuntimeError('Variable "collaboratorList" does not exist.', 229, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["collaborator"]) {
                // line 230
                echo "                                            <option value ='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collaborator"], "id", [], "any", false, false, false, 230), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collaborator"], "name", [], "any", false, false, false, 230), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "                                    </select>
                                ";
        } else {
            // line 234
            echo "                                    <input id=\"filterCollaborator\" type=\"hidden\" name=\"collaborator\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collaborator"]) || array_key_exists("collaborator", $context) ? $context["collaborator"] : (function () { throw new RuntimeError('Variable "collaborator" does not exist.', 234, $this->source); })()), "id", [], "any", false, false, false, 234), "html", null, true);
            echo "\" class=\"filter_inputs updateDataInfo\">
                                ";
        }
        // line 236
        echo "                            </div>

                            ";
        // line 239
        echo "                            <div class=\"filter_inputs_div\">
                                <select id=\"filterBranchOffice\" name=\"branchOffice\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_branchoffice"), "html", null, true);
        echo "</option>
                                </select>
                            </div>

                            ";
        // line 246
        echo "                            <div class=\"filter_inputs_div filter_inputs_div_crane\" style=\"display: none;\">
                                <select id=\"filterCrane\" name=\"crane\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_crane"), "html", null, true);
        echo "</option>
                                </select>
                            </div>

                            ";
        // line 253
        echo "                            <div class=\"filter_inputs_div\">
                                <select id=\"filterOperator\" name=\"operator\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_operator"), "html", null, true);
        echo "</option>
                                </select>
                            </div>

                            ";
        // line 260
        echo "                            <div class=\"filter_inputs_div\">
                                <select id=\"filterProvince\" name=\"province\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_province"), "html", null, true);
        echo "</option>
                                    ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provinces"]) || array_key_exists("provinces", $context) ? $context["provinces"] : (function () { throw new RuntimeError('Variable "provinces" does not exist.', 263, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 264
            echo "                                        <option value ='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "id", [], "any", false, false, false, 264), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["province"], "name", [], "any", false, false, false, 264), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                                </select>
                            </div>

                            ";
        // line 270
        echo "                            <div class=\"filter_inputs_div\">
                                <select id=\"filterTown\" name=\"town\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_town"), "html", null, true);
        echo "</option>
                                </select>
                            </div>

                            ";
        // line 277
        echo "                            <div class=\"filter_inputs_div\">
                                <input name ='dateRange' class=\"filter_inputs datepicker updateDataInfo\" value='01/01/";
        // line 278
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - 31/12/";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "' 
                                    style='width: 100%;'/>
                            </div>

                            ";
        // line 283
        echo "                            <div class=\"filter_inputs_div filter_inputs_div_ris\" style=\"display: none;\">
                                <select id=\"filterIsRis\" name=\"isRis\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_ris_noRis"), "html", null, true);
        echo "</option>
                                    <option value ='1'>";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.ris"), "html", null, true);
        echo "</option>
                                    <option value ='0'>";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.select.no_ris"), "html", null, true);
        echo "</option>
                                </select>
                            </div>

                            ";
        // line 292
        echo "                            <div class=\"filter_inputs_div filter_inputs_div_status\" style=\"display: none;\">
                                <select id=\"filterStatus\" name=\"status\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_status"), "html", null, true);
        echo "</option>
                                    ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interventionStatusList"]) || array_key_exists("interventionStatusList", $context) ? $context["interventionStatusList"] : (function () { throw new RuntimeError('Variable "interventionStatusList" does not exist.', 295, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["interventionStatus"]) {
            // line 296
            echo "                                        <option value ='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interventionStatus"], "id", [], "any", false, false, false, 296), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interventionStatus"], "description", [], "any", false, false, false, 296), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interventionStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                                </select>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr id=\"datatable_hr\" class=\"datatable_hr\" style='margin-top: 10px; visibility: hidden;'/>
        
        <div id='mainDataContainer'>

        </div>

    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 319
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 320
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            
            var risThreshold = 40;
            var satisfactionThreshold = 96.5; 
            var arrivalTimeThreshold = 45; 

            \$(\"#home_li\").addClass(\"active\");
            
            moment.locale('es');
            \$('.datepicker').daterangepicker();

            \$('.chosen').chosen();

            \$('.updateDataInfo').change(function(){
                updateDataInfo();
            });
            
            \$('.bigButtonSquareClick').click(function(){
                \$('.bigButtonSquare').removeClass('bigButtonSquareSelected');
                \$(this).addClass('bigButtonSquareSelected');
                updateDataInfo();
            });

            ";
        // line 346
        echo "            if( \$(\"#filterCollaborator\").is(\"input\") == true ) {
                if( \$(\"#filterCollaborator\").prop(\"type\") == \"hidden\" ) {
                    \$.ajax({
                        url:'";
        // line 349
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_get_branch_offices");
        echo "',
                        data: {collaboratorId: \"";
        // line 350
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collaborator"]) || array_key_exists("collaborator", $context) ? $context["collaborator"] : (function () { throw new RuntimeError('Variable "collaborator" does not exist.', 350, $this->source); })()), "id", [], "any", false, false, false, 350), "html", null, true);
        echo "\" },
                        type:\"POST\",
                        dataType: \"json\",
                        cache:false,
                        success: function(data){
                            \$('#filterBranchOffice').html(\"<option value =''>";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_branchoffice"), "html", null, true);
        echo "</option>\");
                            for(var i = 0 ; i < data.length; i++){
                                var newOption = \$('<option>');
                                newOption.val(data[i].id);
                                newOption.html(data[i].name + ' (' + data[i].province + ')');
                                \$('#filterBranchOffice').append(newOption.clone());
                            }
                            \$('#filterBranchOffice').trigger(\"chosen:updated\");

                            \$('#filterCrane').html(\"<option value =''>";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_crane"), "html", null, true);
        echo "</option>\");
                            \$('#filterCrane').trigger(\"chosen:updated\");
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                        }
                    });
                }
            }

            updateCounters();
            //\$('.bigButtonSquareClick').first().trigger('click');
            ";
        // line 378
        echo "
            \$('#filterCollaborator').change(function(){
                updateCounters();
                \$.ajax({
                    url:'";
        // line 382
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_get_branch_offices");
        echo "',
                    data: {collaboratorId: \$(this).val()},
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){
                        \$('#filterBranchOffice').html(\"<option value =''>";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_branchoffice"), "html", null, true);
        echo "</option>\");
                        for(var i = 0 ; i < data.length; i++){
                            var newOption = \$('<option>');
                            newOption.val(data[i].id);
                            newOption.html(data[i].name + ' (' + data[i].province + ')');
                            \$('#filterBranchOffice').append(newOption.clone());
                        }
                        \$('#filterBranchOffice').trigger(\"chosen:updated\");

                        \$('#filterCrane').html(\"<option value =''>";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_crane"), "html", null, true);
        echo "</option>\");
                        \$('#filterCrane').trigger(\"chosen:updated\");
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });
            });

            \$('#filterBranchOffice').change(function(){
                \$.ajax({
                    url:'";
        // line 409
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_dashboard_cranes");
        echo "',
                    data: {branchOfficeId: \$(this).val()},
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){
                        \$('#filterCrane').html(\"<option value =''>";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_crane"), "html", null, true);
        echo "</option>\");
                        for(var i = 0 ; i < data.length; i++){
                            var newOption = \$('<option>');
                            if (data[i].reference === null) 
                                var label = data[i].plate; 
                            else 
                                var label = data[i].reference + ' (' + data[i].plate + ')'; 
                            newOption.val(data[i].id);
                            newOption.html(label);
                            \$('#filterCrane').append(newOption.clone());
                        }
                        \$('#filterCrane').trigger(\"chosen:updated\");                        
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });

                \$.ajax({
                    url:'";
        // line 435
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_dashboard_operators");
        echo "',
                    data: {branchOfficeId: \$(this).val()},
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){
                        \$('#filterOperator').html(\"<option value =''>";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_operator"), "html", null, true);
        echo "</option>\");
                        for(var i = 0 ; i < data.length; i++){
                            var newOption = \$('<option>');
                            newOption.val(data[i].id);
                            newOption.html(data[i].reference);
                            \$('#filterOperator').append(newOption.clone());
                        }
                        \$('#filterOperator').trigger(\"chosen:updated\");                        
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });
            });

            \$('#filterProvince').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#filterTown\").empty();
                    \$(\"#filterTown\").append('<option value=\"\">";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_town"), "html", null, true);
        echo "</option>');
                    \$(\"#filterTown\").trigger(\"chosen:updated\");
                } else {
                    \$.getJSON(\"";
        // line 463
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("town_chosen_list");
        echo "\",{
                        province: \$(this).val()
                    }, function(json){
                        \$(\"#filterTown\").empty();
                        \$(\"#filterTown\").append('<option value=\"\">";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.no_filter_town"), "html", null, true);
        echo "</option>');
                        \$.each(json, function (idx, obj) {
                            \$(\"#filterTown\").append('<option value=\"' + obj.id + '\">' + obj.name + '</option>');
                        });
                        \$(\"#filterTown\").trigger(\"chosen:updated\");
                    });
                }
            });

            function updateDataInfo(){

                \$(\"#filterRow\").css({\"visibility\": \"visible\"});
                \$(\"#datatable_hr\").css({\"visibility\": \"visible\"});

                \$('#mainDataContainer').html(\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\");
                updateCounters();

                var urlContent = \$('.bigButtonSquareSelected').data('url');
                
                // Cargamos los datatables y gráficas
                if (urlContent != ''){
                    \$.ajax({
                        url: urlContent,
                        data: { \"filterForm\": \$('#filterForm').serialize(), // por si los usamos
                        },
                        type:\"POST\",
                        dataType: \"html\",
                        cache:false,
                        success: function(data){
                            \$('#mainDataContainer').html(data);
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                        }
                    });
                }
                else{
                    // Sin contenido que cargar
                    \$('#mainDataContainer').empty();
                }
            }

            function updateCounters(){
                \$.ajax({
                    url:'";
        // line 512
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_counters");
        echo "',
                    data: \$('#filterForm').serialize(),
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){

                        ";
        // line 520
        echo "                        if( Number(data.ris.split(\"%\",1)) <= risThreshold ) {
                            \$('#btnRis .iconContainer img').attr(\"src\", \"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigWarning.png"), "html", null, true);
        echo "\");
                        } else {
                            \$('#btnRis .iconContainer img').attr(\"src\", \"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigSuccess.png"), "html", null, true);
        echo "\");
                        }

                        ";
        // line 527
        echo "                        if( Number(data.satisfied.split(\"%\",1)) <= satisfactionThreshold ) {
                            \$('#btnSatisfied .iconContainer img').attr(\"src\", \"";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigWarning.png"), "html", null, true);
        echo "\");
                        } else {
                            \$('#btnSatisfied .iconContainer img').attr(\"src\", \"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigSuccess.png"), "html", null, true);
        echo "\");
                        }

                        ";
        // line 534
        echo "                        if( Number(data.arrivalTime.split(\"%\",1)) >= arrivalTimeThreshold ) {
                            \$('#btnArrivalTime .iconContainer img').attr(\"src\", \"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigWarning.png"), "html", null, true);
        echo "\");
                        } else {
                            \$('#btnArrivalTime .iconContainer img').attr(\"src\", \"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/btnIconBigSuccess.png"), "html", null, true);
        echo "\");
                        }

                        \$('#btnRis .dataNumberContainer').html(data.ris);
                        \$('#btnCostAvg .dataNumberContainer').html(data.costAvg);
                        \$('#btnRefuse .dataNumberContainer').html(data.refuse);
                        \$('#btnSatisfied .dataNumberContainer').html(data.satisfied);
                        \$('#btnNC .dataNumberContainer').html(data.nc);
                        \$('#btnArrivalTime .dataNumberContainer').html(data.arrivalTime);
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });
            }

            \$(\".export-button\").click(function() {
                swal.fire({
                    title: 'Por definir',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            });
        });
   
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  877 => 537,  872 => 535,  869 => 534,  863 => 530,  858 => 528,  855 => 527,  849 => 523,  844 => 521,  841 => 520,  831 => 512,  797 => 481,  780 => 467,  773 => 463,  767 => 460,  745 => 441,  736 => 435,  713 => 415,  704 => 409,  689 => 397,  677 => 388,  668 => 382,  662 => 378,  646 => 364,  634 => 355,  626 => 350,  622 => 349,  617 => 346,  588 => 320,  578 => 319,  549 => 298,  538 => 296,  534 => 295,  530 => 294,  526 => 292,  519 => 287,  515 => 286,  511 => 285,  507 => 283,  498 => 278,  495 => 277,  488 => 272,  484 => 270,  479 => 266,  468 => 264,  464 => 263,  460 => 262,  456 => 260,  449 => 255,  445 => 253,  438 => 248,  434 => 246,  427 => 241,  423 => 239,  419 => 236,  413 => 234,  409 => 232,  398 => 230,  394 => 229,  390 => 228,  387 => 227,  385 => 226,  382 => 225,  371 => 219,  356 => 206,  348 => 201,  336 => 192,  328 => 187,  316 => 178,  308 => 173,  296 => 164,  288 => 159,  283 => 157,  272 => 149,  264 => 144,  252 => 135,  244 => 130,  239 => 128,  221 => 112,  211 => 111,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-asitur_datatable.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-highcharts.css') }}\">
    <style>

        .bigButtonSquareSelected{
            font-weight: bold !important;
            background-color: rgba(0, 148, 217, 0.06) !important;
        }
        .bigButtonSquareClick{
            cursor: pointer; 
        }

        .bigButtonSquare{
            width: 100%;
            height: 117px;
            padding: 27px 5px 20px 15px;
            object-fit: contain;
            border-radius: 3px;
            box-shadow: -10px 10px 20px 0 rgba(0, 0, 0, 0.08);
            background-color: white;
        }

        .iconContainer{
            width: 28%;
            float: left;
            display: inline-block;
        }

        .dataContainer{
            width: 70%;
            display: inline-block;
        }

        .iconContainer img {
            width: 40px;
            margin-top: 7px;

        }

        .dataNumberContainer{
            height: 32px;
            margin: 0 0 14px 0px;
            font-size: 36px;
            font-stretch: normal;
            font-style: normal;
            line-height: 0.67;
            letter-spacing: normal;
            color: var(--main-blue);
            text-align: center;
        }

        .dataLabelContainer{
            height: 24px;
            margin: 15px 0 0 4px;
            font-size: 18px;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: center;
            color: var(--main-blue);
            text-align: center;
        }

        .label_success{
            text-align: center;
            width: 90px;
            height: 29px;
            padding: 3px 16px 4px;
            border-radius: 3px;
            background-color: #cdf0b2;
            font-size: 16px;
            color: #3d7411;
        }

        .label_warning{
            text-align: center;
            width: 90px;
            height: 29px;
            padding: 3px 16px 4px;
            border-radius: 3px;
            background-color: #ffcbcb;
            font-size: 16px;
            color: #863d28;
        }

        .card {
            width: 100%;
            height: 356px;
            padding: 29px 34px 33px 59px;
            box-shadow: -10px 10px 20px 0 rgba(30, 30, 30, 0.05);
            background-color: var(--solid-white-ffffff);
        }

        .filter_inputs_div {
            margin-right: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
        }

    </style>

{% endblock %}

{% block content %}

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\" style=\"display: none;\">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
    
        <div class=\"row\">

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnRis' data-type='ris' class='bigButtonSquare bigButtonSquareClick'
                    data-url = '{{ path('dashboard_tab_ris') }}' >
                    <div class='iconContainer'>
                        <img src='{{asset(\"media/btnIconBigSuccess.png\")}}'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            {{\"dashboard.labelRis\"|trans}}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnCostAvg'  data-type='costAvg' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='{{asset(\"media/btnIconBigClock.png\")}}'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            {{\"dashboard.labelCostAvg\"|trans}}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnRefuse' data-type='refuse' class='bigButtonSquare bigButtonSquareClick'
                    data-url = '{{ path('dashboard_tab_refuse') }}' >
                    <div class='iconContainer'>
                        <img src='{{asset(\"media/btnIconBigWarning.png\")}}'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            {{\"dashboard.labelRefuse\"|trans}}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnSatisfied' data-type='satisfied' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='{{asset(\"media/btnIconBigSuccess.png\")}}'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            {{\"dashboard.labelSatisfied\"|trans}}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnNC'  data-type='nc' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='{{asset(\"media/btnIconBigSuccess.png\")}}'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            {{\"dashboard.labelNC\"|trans}}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div id = 'btnArrivalTime'  data-type='arrivalTime' class='bigButtonSquare'>
                    <div class='iconContainer'>
                        <img src='{{asset(\"media/btnIconBigClock.png\")}}'/>
                    </div>
                    <div class='dataContainer'>
                        <div class='dataNumberContainer'></div>
                        <div class='dataLabelContainer'>
                            {{\"dashboard.labelArrivalTime\"|trans}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id='filterRow' style='margin-top:40px; visibility: hidden;'>

            <div class=\"row\" style=\"\">
                <div class=\"col-sm-2 col-md-2 col-lg-2\">
                    {# Exportar #}
                    <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
                </div>
                <div class=\"col-sm-10 col-md-10 col-lg-10\">
                    <form id='filterForm' action='#'>
                        <div style=\"display: flex; flex-wrap: wrap; justify-content: flex-start;\">
                            {# Filtro Colaborador #}
                            <div class=\"filter_inputs_div\">
                                {% if isMaster == true %}
                                    <select id=\"filterCollaborator\" name=\"collaborator\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                        <option value =''>{{\"dashboard.no_filter_collaborator\"|trans}}</option>
                                        {% for collaborator in collaboratorList %}
                                            <option value ='{{ collaborator.id }}'>{{collaborator.name}}</option>
                                        {% endfor %}
                                    </select>
                                {% else %}
                                    <input id=\"filterCollaborator\" type=\"hidden\" name=\"collaborator\" value=\"{{collaborator.id}}\" class=\"filter_inputs updateDataInfo\">
                                {% endif %}
                            </div>

                            {# Filtro Sucursal #}
                            <div class=\"filter_inputs_div\">
                                <select id=\"filterBranchOffice\" name=\"branchOffice\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>{{\"dashboard.no_filter_branchoffice\"|trans}}</option>
                                </select>
                            </div>

                            {# Filtro Grúa #}
                            <div class=\"filter_inputs_div filter_inputs_div_crane\" style=\"display: none;\">
                                <select id=\"filterCrane\" name=\"crane\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>{{\"dashboard.no_filter_crane\"|trans}}</option>
                                </select>
                            </div>

                            {# Filtro Operario #}
                            <div class=\"filter_inputs_div\">
                                <select id=\"filterOperator\" name=\"operator\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>{{\"dashboard.no_filter_operator\"|trans}}</option>
                                </select>
                            </div>

                            {# Filtro Provincia #}
                            <div class=\"filter_inputs_div\">
                                <select id=\"filterProvince\" name=\"province\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>{{\"dashboard.no_filter_province\"|trans}}</option>
                                    {% for province in provinces %}
                                        <option value ='{{ province.id }}'>{{ province.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>

                            {# Filtro Localidad #}
                            <div class=\"filter_inputs_div\">
                                <select id=\"filterTown\" name=\"town\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>{{\"dashboard.no_filter_town\"|trans}}</option>
                                </select>
                            </div>

                            {# Filtro Fecha #}
                            <div class=\"filter_inputs_div\">
                                <input name ='dateRange' class=\"filter_inputs datepicker updateDataInfo\" value='01/01/{{ \"now\"|date(\"Y\") }} - 31/12/{{ \"now\"|date(\"Y\") }}' 
                                    style='width: 100%;'/>
                            </div>

                            {# Filtro RIS/No RIS #}
                            <div class=\"filter_inputs_div filter_inputs_div_ris\" style=\"display: none;\">
                                <select id=\"filterIsRis\" name=\"isRis\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>{{\"dashboard.no_filter_ris_noRis\"|trans}}</option>
                                    <option value ='1'>{{\"dashboard.select.ris\"|trans}}</option>
                                    <option value ='0'>{{\"dashboard.select.no_ris\"|trans}}</option>
                                </select>
                            </div>

                            {# Filtro Estado #}
                            <div class=\"filter_inputs_div filter_inputs_div_status\" style=\"display: none;\">
                                <select id=\"filterStatus\" name=\"status\" class=\"filter_inputs form-control select_inputs chosen updateDataInfo\">
                                    <option value =''>{{\"dashboard.no_filter_status\"|trans}}</option>
                                    {% for interventionStatus in interventionStatusList %}
                                        <option value ='{{ interventionStatus.id }}'>{{ interventionStatus.description }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr id=\"datatable_hr\" class=\"datatable_hr\" style='margin-top: 10px; visibility: hidden;'/>
        
        <div id='mainDataContainer'>

        </div>

    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script>
        \$(document).ready(function(){
            
            var risThreshold = 40;
            var satisfactionThreshold = 96.5; 
            var arrivalTimeThreshold = 45; 

            \$(\"#home_li\").addClass(\"active\");
            
            moment.locale('es');
            \$('.datepicker').daterangepicker();

            \$('.chosen').chosen();

            \$('.updateDataInfo').change(function(){
                updateDataInfo();
            });
            
            \$('.bigButtonSquareClick').click(function(){
                \$('.bigButtonSquare').removeClass('bigButtonSquareSelected');
                \$(this).addClass('bigButtonSquareSelected');
                updateDataInfo();
            });

            {#* Filtramos por la entidad colaboradora (colaborator) del usuario en caso de ser un NO superusuario #}
            if( \$(\"#filterCollaborator\").is(\"input\") == true ) {
                if( \$(\"#filterCollaborator\").prop(\"type\") == \"hidden\" ) {
                    \$.ajax({
                        url:'{{ path('dashboard_get_branch_offices') }}',
                        data: {collaboratorId: \"{{collaborator.id}}\" },
                        type:\"POST\",
                        dataType: \"json\",
                        cache:false,
                        success: function(data){
                            \$('#filterBranchOffice').html(\"<option value =''>{{'dashboard.no_filter_branchoffice'|trans}}</option>\");
                            for(var i = 0 ; i < data.length; i++){
                                var newOption = \$('<option>');
                                newOption.val(data[i].id);
                                newOption.html(data[i].name + ' (' + data[i].province + ')');
                                \$('#filterBranchOffice').append(newOption.clone());
                            }
                            \$('#filterBranchOffice').trigger(\"chosen:updated\");

                            \$('#filterCrane').html(\"<option value =''>{{'dashboard.no_filter_crane'|trans}}</option>\");
                            \$('#filterCrane').trigger(\"chosen:updated\");
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                        }
                    });
                }
            }

            updateCounters();
            //\$('.bigButtonSquareClick').first().trigger('click');
            {#? \$('.bigButtonSquareClick').eq(1).trigger('click'); #}

            \$('#filterCollaborator').change(function(){
                updateCounters();
                \$.ajax({
                    url:'{{ path('dashboard_get_branch_offices') }}',
                    data: {collaboratorId: \$(this).val()},
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){
                        \$('#filterBranchOffice').html(\"<option value =''>{{'dashboard.no_filter_branchoffice'|trans}}</option>\");
                        for(var i = 0 ; i < data.length; i++){
                            var newOption = \$('<option>');
                            newOption.val(data[i].id);
                            newOption.html(data[i].name + ' (' + data[i].province + ')');
                            \$('#filterBranchOffice').append(newOption.clone());
                        }
                        \$('#filterBranchOffice').trigger(\"chosen:updated\");

                        \$('#filterCrane').html(\"<option value =''>{{'dashboard.no_filter_crane'|trans}}</option>\");
                        \$('#filterCrane').trigger(\"chosen:updated\");
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });
            });

            \$('#filterBranchOffice').change(function(){
                \$.ajax({
                    url:'{{ path('get_dashboard_cranes') }}',
                    data: {branchOfficeId: \$(this).val()},
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){
                        \$('#filterCrane').html(\"<option value =''>{{'dashboard.no_filter_crane'|trans}}</option>\");
                        for(var i = 0 ; i < data.length; i++){
                            var newOption = \$('<option>');
                            if (data[i].reference === null) 
                                var label = data[i].plate; 
                            else 
                                var label = data[i].reference + ' (' + data[i].plate + ')'; 
                            newOption.val(data[i].id);
                            newOption.html(label);
                            \$('#filterCrane').append(newOption.clone());
                        }
                        \$('#filterCrane').trigger(\"chosen:updated\");                        
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });

                \$.ajax({
                    url:'{{ path('get_dashboard_operators') }}',
                    data: {branchOfficeId: \$(this).val()},
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){
                        \$('#filterOperator').html(\"<option value =''>{{'dashboard.no_filter_operator'|trans}}</option>\");
                        for(var i = 0 ; i < data.length; i++){
                            var newOption = \$('<option>');
                            newOption.val(data[i].id);
                            newOption.html(data[i].reference);
                            \$('#filterOperator').append(newOption.clone());
                        }
                        \$('#filterOperator').trigger(\"chosen:updated\");                        
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });
            });

            \$('#filterProvince').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#filterTown\").empty();
                    \$(\"#filterTown\").append('<option value=\"\">{{\"dashboard.no_filter_town\"|trans}}</option>');
                    \$(\"#filterTown\").trigger(\"chosen:updated\");
                } else {
                    \$.getJSON(\"{{ path('town_chosen_list') }}\",{
                        province: \$(this).val()
                    }, function(json){
                        \$(\"#filterTown\").empty();
                        \$(\"#filterTown\").append('<option value=\"\">{{\"dashboard.no_filter_town\"|trans}}</option>');
                        \$.each(json, function (idx, obj) {
                            \$(\"#filterTown\").append('<option value=\"' + obj.id + '\">' + obj.name + '</option>');
                        });
                        \$(\"#filterTown\").trigger(\"chosen:updated\");
                    });
                }
            });

            function updateDataInfo(){

                \$(\"#filterRow\").css({\"visibility\": \"visible\"});
                \$(\"#datatable_hr\").css({\"visibility\": \"visible\"});

                \$('#mainDataContainer').html(\"{{'dataTable.general.language.sLoadingRecords'|trans}}\");
                updateCounters();

                var urlContent = \$('.bigButtonSquareSelected').data('url');
                
                // Cargamos los datatables y gráficas
                if (urlContent != ''){
                    \$.ajax({
                        url: urlContent,
                        data: { \"filterForm\": \$('#filterForm').serialize(), // por si los usamos
                        },
                        type:\"POST\",
                        dataType: \"html\",
                        cache:false,
                        success: function(data){
                            \$('#mainDataContainer').html(data);
                        },
                        error:function(err){
                            console.log('error');
                            console.log(err);
                        }
                    });
                }
                else{
                    // Sin contenido que cargar
                    \$('#mainDataContainer').empty();
                }
            }

            function updateCounters(){
                \$.ajax({
                    url:'{{ path('dashboard_counters') }}',
                    data: \$('#filterForm').serialize(),
                    type:\"POST\",
                    dataType: \"json\",
                    cache:false,
                    success: function(data){

                        {#? Debe ser mayor a \"risThreshold\" (actualmente con valor 40)  #}
                        if( Number(data.ris.split(\"%\",1)) <= risThreshold ) {
                            \$('#btnRis .iconContainer img').attr(\"src\", \"{{asset('media/btnIconBigWarning.png')}}\");
                        } else {
                            \$('#btnRis .iconContainer img').attr(\"src\", \"{{asset('media/btnIconBigSuccess.png')}}\");
                        }

                        {#? Porcentaje de satisfacción de los asegurados. Debe ser mayor a 96,5% #}
                        if( Number(data.satisfied.split(\"%\",1)) <= satisfactionThreshold ) {
                            \$('#btnSatisfied .iconContainer img').attr(\"src\", \"{{asset('media/btnIconBigWarning.png')}}\");
                        } else {
                            \$('#btnSatisfied .iconContainer img').attr(\"src\", \"{{asset('media/btnIconBigSuccess.png')}}\");
                        }

                        {#? Tiempo de llegada promedio. Debe ser menor a 45 minutos #}
                        if( Number(data.arrivalTime.split(\"%\",1)) >= arrivalTimeThreshold ) {
                            \$('#btnArrivalTime .iconContainer img').attr(\"src\", \"{{asset('media/btnIconBigWarning.png')}}\");
                        } else {
                            \$('#btnArrivalTime .iconContainer img').attr(\"src\", \"{{asset('media/btnIconBigSuccess.png')}}\");
                        }

                        \$('#btnRis .dataNumberContainer').html(data.ris);
                        \$('#btnCostAvg .dataNumberContainer').html(data.costAvg);
                        \$('#btnRefuse .dataNumberContainer').html(data.refuse);
                        \$('#btnSatisfied .dataNumberContainer').html(data.satisfied);
                        \$('#btnNC .dataNumberContainer').html(data.nc);
                        \$('#btnArrivalTime .dataNumberContainer').html(data.arrivalTime);
                    },
                    error:function(err){
                        console.log('error');
                        console.log(err);
                    }
                });
            }

            \$(\".export-button\").click(function() {
                swal.fire({
                    title: 'Por definir',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            });
        });
   
    </script>

{% endblock %}", "frontend/collaborator/dashboard.html.twig", "/var/www/rira_web/templates/frontend/collaborator/dashboard.html.twig");
    }
}
