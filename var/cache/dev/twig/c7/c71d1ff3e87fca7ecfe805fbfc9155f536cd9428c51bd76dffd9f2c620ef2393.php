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

/* frontend/collaborator/cranes.html.twig */
class __TwigTemplate_ea7879bb611100afd7c9d06bead73db4d93af25cbc7947ef291dfe95ce9aade1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/cranes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/cranes.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/cranes.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-data_management.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-asitur_datatable.css"), "html", null, true);
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
    <!--Modal add crane-->
    <div class=\"modal fade\" id=\"add_crane\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" tabindex=\"-1\" style=\"font-size: 21px !important;\">×</button>
                    <h4 id=\"myModalLabel\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.title.new_crane"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <form id=\"modal_add_crane_form\" autocomplete=\"off\">
                        <div class=\"row\">
                            ";
        // line 26
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.plate"), "html", null, true);
        echo "</label>
                                    <input id=\"plate_input\" type=\"text\" name=\"c_plate\" class=\"form-control cranes_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 33
        echo "                            <div class=\"col-sm-6\">
                                <label class=\"control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.reference"), "html", null, true);
        echo "</label>
                                <input id=\"reference_input\" type=\"text\" name=\"c_reference\" class=\"form-control cranes_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 40
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.crane.branchOffice"), "html", null, true);
        echo "</label>
                                    <select id=\"branchOffice-chosen-select\" name=\"c_branchOffice\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchOfficesList"]) || array_key_exists("branchOfficesList", $context) ? $context["branchOfficesList"] : (function () { throw new RuntimeError('Variable "branchOfficesList" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 46
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                    </select>
                                </div>
                            </div>
                            ";
        // line 52
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.crane.label"), "html", null, true);
        echo "</label>
                                    <select id=\"label-chosen-select\" name=\"c_label\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 58
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "description", [], "any", false, false, false, 58), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 66
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.brand"), "html", null, true);
        echo "</label>
                                    <select id=\"brand-chosen-select\" name=\"c_brand\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 72
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "description", [], "any", false, false, false, 72), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                    </select>
                                </div>
                            </div>
                            ";
        // line 78
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.crane.model"), "html", null, true);
        echo "</label>
                                    <select disabled id=\"model-chosen-select\" name=\"c_model\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 89
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.crane.type"), "html", null, true);
        echo "</label>
                                    <select id=\"type-chosen-select\" name=\"c_type\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneTypes"]) || array_key_exists("craneTypes", $context) ? $context["craneTypes"] : (function () { throw new RuntimeError('Variable "craneTypes" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["craneType"]) {
            // line 95
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "description", [], "any", false, false, false, 95), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                    </select>
                                </div>
                            </div>
                            ";
        // line 101
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.management_type"), "html", null, true);
        echo "</label>
                                    <select id=\"managementType-chosen-select\" name=\"c_managementType\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneManagementTypes"]) || array_key_exists("craneManagementTypes", $context) ? $context["craneManagementTypes"] : (function () { throw new RuntimeError('Variable "craneManagementTypes" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["craneManagementType"]) {
            // line 107
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneManagementType"], "id", [], "any", false, false, false, 107), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneManagementType"], "description", [], "any", false, false, false, 107), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneManagementType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 115
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.status"), "html", null, true);
        echo "</label>
                                    <select id=\"status-chosen-select\" name=\"c_status\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneStatusList"]) || array_key_exists("craneStatusList", $context) ? $context["craneStatusList"] : (function () { throw new RuntimeError('Variable "craneStatusList" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["craneStatus"]) {
            // line 121
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneStatus"], "id", [], "any", false, false, false, 121), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneStatus"], "description", [], "any", false, false, false, 121), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                    </select>
                                </div>
                            </div>
                            ";
        // line 127
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.crane.availabilityStatus"), "html", null, true);
        echo "</label>
                                    <select id=\"availabilityStatus-chosen-select\" name=\"c_availabilityStatus\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneAvailabilityStatusList"]) || array_key_exists("craneAvailabilityStatusList", $context) ? $context["craneAvailabilityStatusList"] : (function () { throw new RuntimeError('Variable "craneAvailabilityStatusList" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["craneAvailabilityStatus"]) {
            // line 133
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneAvailabilityStatus"], "id", [], "any", false, false, false, 133), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneAvailabilityStatus"], "description", [], "any", false, false, false, 133), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneAvailabilityStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 141
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.crane.creationDate"), "html", null, true);
        echo "</label>
                                    <input  id=\"creationDate-datetimepicker\" type=\"text\" name=\"c_creationDate\" class=\"form-control cranes_modal_inputs\" placeholder=\"dd/mm/yyyy\" maxlength=\"10\" spellcheck=\"false\"/>
                                </div>
                            </div>
                            ";
        // line 148
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 151
        echo "                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"addCrane_submit\" class=\"btn btn-primary\">";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
        echo "</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add crane-->

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.branch_offices"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.cranes"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.operators"), "html", null, true);
        echo "</a>
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        ";
        // line 190
        echo "        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                ";
        // line 193
        echo "                <button type=\"button\" class=\"btn top_left-buttons new-button\" data-toggle='modal' data-target='#add_crane'> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/icon-add.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.new"), "html", null, true);
        echo "</button>
                ";
        // line 195
        echo "                <form id=\"edit_form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_crane");
        echo "\" method=\"POST\" style=\"display: none;\">
                    <input id=\"craneId_input\" type=\"hidden\" name=\"craneId\" value=\"\">
                    <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                </form>
                <button type=\"button\" class=\"btn top_left-buttons edit-button\" disabled> <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
        echo "</button>
                ";
        // line 201
        echo "                <button type=\"button\" class=\"btn top_left-buttons remove-button\" disabled> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/basura-icono.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.remove"), "html", null, true);
        echo "</button>
                ";
        // line 203
        echo "                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn top_left-buttons digital_asign-button dropdown-toggle\" style=\"border: 1px solid transparent; box-shadow: none;\"  data-toggle=\"dropdown\" disabled> <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/power.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.digital_asign"), "html", null, true);
        echo "</button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"management_type_option\" style=\"font-size: 14px; cursor: pointer;\" data-id=\"1\">";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("crane.management_type.manual"), "html", null, true);
        echo "</a></li>
                        <li><a class=\"management_type_option\" style=\"font-size: 14px; cursor: pointer;\" data-id=\"2\">";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("crane.management_type.automatic"), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                ";
        // line 211
        echo "                <button type=\"button\" class=\"btn top_left-buttons rates-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/euro.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.rates"), "html", null, true);
        echo "</button>
                ";
        // line 213
        echo "                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>
            </div>
            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                ";
        // line 217
        echo "                <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel\" data-toggle=\"collapse\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/filter.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.filter"), "html", null, true);
        echo "</button>
                ";
        // line 219
        echo "                <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel\" data-toggle=\"collapse\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/search.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.search"), "html", null, true);
        echo "</button>
            </div>
        </div>
        ";
        // line 223
        echo "        
        ";
        // line 225
        echo "        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"filter_panel\" class=\"filter_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"panel-custom-heading\">
                        <div class=\"panel-control\">
                            <img id=\"delete_filters_value\" class=\"delete_filters_value\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\">
                        </div>
                        <h3 class=\"panel-title\" style=\"font-style: italic;\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter"), "html", null, true);
        echo "</h3>
                    </div>
                    <form id=\"form_filters\" autocomplete=\"off\">
                        <div class=\"row\" style=\"margin: 0;\">
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"reference-input\" class=\"filter_labels\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.reference"), "html", null, true);
        echo "</label>
                                <input id=\"reference-input\" name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.reference"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"plate-input\" class=\"filter_labels\">";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.plate"), "html", null, true);
        echo "</label>
                                <input id=\"plate-input\" name=\"plate\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.plate"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"brand-input\" class=\"filter_labels\">";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.brand"), "html", null, true);
        echo "</label>
                                <select id=\"brand-input\" name=\"brand\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 248, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 249
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 249), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "description", [], "any", false, false, false, 249), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"crane_type-input\" class=\"filter_labels\">";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.crane_type"), "html", null, true);
        echo "</label>
                                <select id=\"crane_type-input\" name=\"crane_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneTypes"]) || array_key_exists("craneTypes", $context) ? $context["craneTypes"] : (function () { throw new RuntimeError('Variable "craneTypes" does not exist.', 257, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["craneType"]) {
            // line 258
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "id", [], "any", false, false, false, 258), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneType"], "description", [], "any", false, false, false, 258), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"services-input\" class=\"filter_labels\">";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.services"), "html", null, true);
        echo "</label>
                                <input id=\"services-input\" name=\"services\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.services"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"zones-input\" class=\"filter_labels\">";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.zones"), "html", null, true);
        echo "</label>
                                <input id=\"zones-input\" name=\"zones\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.zones"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                        </div>
                        <div class=\"row\" style=\"margin: 0;\">
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"management_type-input\" class=\"filter_labels\">";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.management_type"), "html", null, true);
        echo "</label>
                                <select id=\"management_type-input\" name=\"management_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneManagementTypes"]) || array_key_exists("craneManagementTypes", $context) ? $context["craneManagementTypes"] : (function () { throw new RuntimeError('Variable "craneManagementTypes" does not exist.', 276, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["craneManagementType"]) {
            // line 277
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneManagementType"], "id", [], "any", false, false, false, 277), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneManagementType"], "description", [], "any", false, false, false, 277), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneManagementType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"status-input\" class=\"filter_labels\">";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.status"), "html", null, true);
        echo "</label>
                                <select id=\"status-input\" name=\"status\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["craneStatusList"]) || array_key_exists("craneStatusList", $context) ? $context["craneStatusList"] : (function () { throw new RuntimeError('Variable "craneStatusList" does not exist.', 285, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["craneStatus"]) {
            // line 286
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneStatus"], "id", [], "any", false, false, false, 286), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["craneStatus"], "description", [], "any", false, false, false, 286), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['craneStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                    <option value=\"4\"> Averiada o retirada </option>
                                </select>                            
                            </div>

                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"label-input\" class=\"filter_labels\">";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.label"), "html", null, true);
        echo "</label>
                                <select id=\"label-input\" name=\"label\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 296, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 297
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 297), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["label"], "description", [], "any", false, false, false, 297), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        echo "                                </select>                     
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        ";
        // line 307
        echo "
        ";
        // line 309
        echo "        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"search_panel\" class=\"search_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"input-group\">
                        <input id=\"search-input\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\" autocomplete=\"false\">
                        <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"></span>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 320
        echo "
        <hr id=\"datatable_hr\" class=\"datatable_hr\">

        <table id=\"table_cranes\" class=\"table\">
            <thead>
                <tr>
                    <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                    <th>";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.reference"), "html", null, true);
        echo "</th>
                    <th>";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.plate"), "html", null, true);
        echo "</th>
                    <th>";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.brand"), "html", null, true);
        echo "</th>
                    <th>";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.crane_type"), "html", null, true);
        echo "</th>
                    <th>";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.services"), "html", null, true);
        echo "</th>
                    <th>";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.zones"), "html", null, true);
        echo "</th>
                    <th>";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.management_type"), "html", null, true);
        echo "</th>
                    <th>";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.status"), "html", null, true);
        echo "</th>
                    <th>";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.cranes.label"), "html", null, true);
        echo "</th>
                    <th></th>
                </tr>
            </thead>
        </table>

    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 347
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 348
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var arrayChecked = [];

        \$(document).ready(function(){
            var time = null;

            ";
        // line 356
        echo "            \$(\"#data_management_li\").addClass(\"active\");
            ";
        // line 358
        echo "
            ";
        // line 360
        echo "            \$(\".modalSelect\").chosen({ width:'100%' });

            var nowDate = new Date();
            var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
            \$('#creationDate-datetimepicker').datepicker({format: \"dd/mm/yyyy\",
                                                          autoclose: true,
                                                          language: 'es',
                                                          weekStart: 1,
                                                          todayHighlight: true,
                                                          startDate: today,
                                                         });

            \$('#brand-chosen-select').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#model-chosen-select\").empty();
                    \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                    \$(\"#model-chosen-select\").attr('disabled', 'disabled');
                    \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                } else {
                    \$.getJSON(\"";
        // line 379
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("model_chosen_list");
        echo "\",{
                        brand: \$(this).val()
                    }, function(json){
                        \$(\"#model-chosen-select\").empty();
                        \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                        \$.each(json, function (idx, obj) {
                            \$(\"#model-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                        });
                        \$(\"#model-chosen-select\").removeAttr('disabled');
                        \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                    });
                }
            });                                             
            ";
        // line 393
        echo "            
            ";
        // line 395
        echo "            \$(\"#delete_filters_value\").click(function() {
                \$(\".filter_inputs\").val('');
                \$(\".select_inputs\").trigger(\"chosen:updated\");
                reloadDataTable();
            });  

            \$(\"#delete_search_value\").click(function() {
                \$(\"#search-input\").val('');
                reloadDataTable();
            });
            ";
        // line 406
        echo "
            ";
        // line 408
        echo "            \$(\"#filter-button\").unbind('click');
            \$(\"#filter-button\").click(function() {
                if(\$(this).hasClass(\"active\") && \$(\"#filter_panel\").hasClass(\"in\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else if(!\$(\"#filter_panel\").hasClass(\"collapsing\")) {
                    \$(this).addClass(\"active\");
                    \$(\"#search-input\").val('');
                    \$(\"#search-button\").removeClass(\"active\");
                    \$(\"#search_panel\").removeClass(\"in\");
                    \$(\"#filter_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#search_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#search_panel\").removeClass(\"in\");
                    }, 250);
                }
            });

            \$(\"#search-button\").unbind('click');
            \$(\"#search-button\").click(function() {
                if(\$(this).hasClass(\"active\") && \$(\"#search_panel\").hasClass(\"in\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else if(!\$(\"#search_panel\").hasClass(\"collapsing\")) {
                    \$(this).addClass(\"active\");
                    \$(\".filter_inputs\").val('');
                    \$(\"#filter-button\").removeClass(\"active\");
                    \$(\"#search_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#filter_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#filter_panel\").removeClass(\"in\");
                    }, 250);
                }
            });
            ";
        // line 447
        echo "
            createTable();

            let auxObjId;

            ";
        // line 453
        echo "            \$(\"#brand-input\").chosen();
            \$(\"#label-input\").chosen({disable_search: true});
            \$(\"#status-input\").chosen({disable_search: true});
            \$(\"#management_type-input\").chosen({disable_search: true});
            \$(\"#crane_type-input\").chosen({disable_search: false});
            ";
        // line 459
        echo "
            \$('#search-input').keyup(function() {
                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.filter_inputs').keyup(function() {

                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.select_inputs').on('change', function(){
                reloadDataTable();
            });

            ";
        // line 480
        echo "            \$('#addCrane_submit').click(function(){

                \$(\"#modal_add_crane_form\").submit(function( event ) {
                    event.preventDefault();
                });

                if( \$.trim(\$(\"#plate_input\").val())                 == \"\"     ||
                    \$.trim(\$(\"#reference_input\").val())             == \"\"     ||
                    \$(\"#branchOffice-chosen-select\").val()          == \"\"     ||
                    \$(\"#label-chosen-select\").val()                 == \"\"     ||
                    \$(\"#brand-chosen-select\").val()                 == \"\"     ||
                    \$(\"#model-chosen-select\").val()                 == \"\"     ||
                    \$(\"#type-chosen-select\").val()                  == \"\"     ||
                    \$(\"#managementType-chosen-select\").val()        == \"\"     ||
                    \$(\"#status-chosen-select\").val()                == \"\"     ||
                    \$(\"#availabilityStatus-chosen-select\").val()    == \"\"     ||
                    \$.trim(\$(\"#creationDate-datetimepicker\").val()) == \"\"     
                ) {  
                    swal.fire({
                        title: '";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.allfields.mandatory"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else {
                    \$.ajax({
                        url:'";
        // line 506
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_new_crane");
        echo "',
                        data: {
                            'inputs': \$('#modal_add_crane_form').serializeArray()
                        },
                        type:\"POST\",
                        success: function(data){
                            if(data['status']) {
                                swal.fire({
                                    title: \"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.modal.success"), "html", null, true);
        echo "\",
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                });
                                reloadDataTable();
                                \$('#add_crane').modal('hide');
                                \$(\".cranes_modal_inputs\").val('');
                                \$(\".modalSelect\").trigger(\"chosen:updated\");
                            } else {
                                swal.fire({
                                    title: data.message,
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        },
                        error:function(err){
                            swal.fire({
                                title: err[\"responseJSON\"][\"message\"],
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
            ";
        // line 544
        echo "
            ";
        // line 546
        echo "            \$(\".edit-button\").click(function() {
                \$(\"#craneId_input\").val(arrayChecked[0]);
                \$(\"#edit_form\").submit();
            });
            ";
        // line 551
        echo "
            ";
        // line 553
        echo "            \$(\".remove-button\").click(function() {
                swal.fire({
                    title: '',
                    html: '";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.crane.remove"), "html", null, true);
        echo "',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove.confirm"), "html", null, true);
        echo "\",
                    confirmButtonColor: \"red\",
                    focusConfirm: false,
                    allowEnterKey: false,
                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'";
        // line 568
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes_delete");
        echo "',
                            data: {
                                'arrayChecked': arrayChecked
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.success"), "html", null, true);
        echo "',
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: true
                                    });
                                } else {
                                    swal.fire({
                                        title: data.message,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            },
                            error: function(err){
                                swal.fire({
                                    title: '";
        // line 592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.error"), "html", null, true);
        echo "',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                        reloadDataTable();
                    }
                });
            });
            ";
        // line 604
        echo "
            ";
        // line 606
        echo "            \$(\".management_type_option\").click(function() {
                swal.fire({
                    title: '',
                    html: '";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.crane.change_management_type"), "html", null, true);
        echo "',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
        echo "\",
                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'";
        // line 618
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes_modify_management_type");
        echo "',
                            data: {
                                'arrayChecked': arrayChecked,
                                'typeId': \$(this).data('id')
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.success"), "html", null, true);
        echo "',
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: true
                                    });
                                } else {
                                    swal.fire({
                                        title: data.message,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            },
                            error: function(err){
                                swal.fire({
                                    title: '";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.error"), "html", null, true);
        echo "',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                        reloadDataTable();
                    }
                });
            });
            ";
        // line 655
        echo "
            ";
        // line 657
        echo "            \$(\".rates-button\").click(function() {
                swal.fire({
                    title: 'Por definir',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            });
            ";
        // line 666
        echo "
            ";
        // line 668
        echo "            \$(\".export-button\").click(function() {

                \$.ajax({
                        url:'";
        // line 671
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes_export_excel");
        echo "',
                        data: {
                            'form_filters': \$('#form_filters').serializeArray(),
                            'search_filter': \$('#search-input').val(),
                        },
                        type:\"POST\",
                        success: function(data){
                            if (data.status){
                                swal.fire({
                                    title: '";
        // line 680
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.success"), "html", null, true);
        echo "',
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                });
                                
                                var fileName = data.data.fileName;
                                var filePath = data.data.filePath;
                                
                                var formTmp = document.createElement('form');
                                \$(formTmp).attr('action',\"";
        // line 690
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_file");
        echo "\");
                                \$(formTmp).attr('name','formTmp');
                                \$(formTmp).attr('target','_blank');
                                \$(formTmp).attr('enctype','multipart/form-data');
                                \$(formTmp).attr('method','post');
                                \$(formTmp).append(\"<input type='hidden' name='fileName' value='\" + fileName + \"'/>\");
                                \$(formTmp).append(\"<input type='hidden' name='filePath' value='\" + filePath + \"'/>\");
                                document.body.appendChild(formTmp);
                                document.formTmp.submit();
                                document.body.removeChild(formTmp);
                            } else {
                                swal.fire({
                                    title: '";
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        },
                        error:function(err){
                            swal.fire({
                                title: '";
        // line 711
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.export.error"), "html", null, true);
        echo "',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                });
            });
            ";
        // line 720
        echo "
        });

        ";
        // line 724
        echo "        function createTable() {
            tableClients = \$('#table_cranes').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4,5,7,8,9] },
                    { orderable: false, targets: [0,6,10] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 736
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
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 746
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 748
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 756
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
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 769
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes_table");
        echo "\",
                    method: 'POST',
                    data: {
                        
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

                    // check checked
                    \$('.checkboxCranes').each(function(){
                        var crane_id = \$(this).data('crane');
                        var index = arrayChecked.indexOf(crane_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxCranes').change(function(){
                        var crane_id = \$(this).data('crane');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(crane_id)) {
                                arrayChecked.push(crane_id);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked.indexOf(crane_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        ";
        // line 816
        echo "                        if(arrayChecked.length) {
                            if(arrayChecked.length > 1) {
                                \$(\".edit-button\").prop('disabled', true);
                            } else {
                                \$(\".edit-button\").prop('disabled', false);
                            }

                            \$(\".remove-button\").prop('disabled', false);
                            \$(\".digital_asign-button\").prop('disabled', false);
                        } else {
                            \$(\".edit-button\").prop('disabled', true);
                            \$(\".remove-button\").prop('disabled', true);
                            \$(\".digital_asign-button\").prop('disabled', true);
                        }

                    });// change

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxCranes imgCheckbox' data-crane='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'plate'},
                    {data: 'brand'},
                    {data: 'crane_type'},
                    {data: {}, render: function(data, row) {

                            if( data['services'] != null ) {
                                let text = data['services'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: {}, render: function(data, row) {

                            if( data['zones'] != null ) {
                                let text = data['zones'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'management_type'},
                    {data: {}, render: function(data, row) {

                            if( data['status'] == 1 ) {
                                let html= '<div title=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.active"), "html", null, true);
        echo "\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status switchery\" type=\"checkbox\" checked> </div>';

                                return html;
                            } else if( data['status'] == 2 || data['status'] == 3 ) {
                                let html= '<div title=\"REPLACE_TITLE\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status\" type=\"checkbox\"> </div>';
                                
                                if (data['status'] == 2) {
                                    html = html.replace(\"REPLACE_TITLE\", \"";
        // line 888
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.damaged"), "html", null, true);
        echo "\"); 
                                } else {
                                    html = html.replace(\"REPLACE_TITLE\", \"";
        // line 890
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.crane_status.select.option.retired"), "html", null, true);
        echo "\");
                                }
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'label'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"";
        // line 902
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_crane");
        echo "\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"craneId\" value=\"' + data[\"id\"] + '\">';
                            html += '<input type=\"hidden\" name=\"mode\" value=\"read_only\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        ";
        // line 915
        echo "
        ";
        // line 917
        echo "        let reloadDataTable = function() {
            var form_filters = new Object();
            \$('.filter_inputs').each(function() {
                form_filters[\$(this).attr('name')] = \$(this).val();
            });

            var fullFilters = {
                'form_filters': form_filters,
                'search_filter': \$('#search-input').val()
            }

            \$(\"#table_cranes\").DataTable().search(JSON.stringify(fullFilters)).draw();

            ";
        // line 931
        echo "            arrayChecked = [];

            ";
        // line 934
        echo "            if(!arrayChecked.length) {
                \$(\".edit-button\").prop('disabled', true);
                \$(\".remove-button\").prop('disabled', true);
                \$(\".digital_asign-button\").prop('disabled', true);
            }
        }
        ";
        // line 941
        echo "    
        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 944
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 945
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"";
        // line 949
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 950
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });
        }

        \$('.checkboxFullList').change(function(){
            var active = false;
            if (\$(this).is(\":checked\")) {
                active = true;
            }
            
            \$('.checkboxCranes').each(function(){
                \$(this).prop('checked', active);
                \$(this).trigger('update');
                \$(this).trigger('change');
            });// change
        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/cranes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1598 => 950,  1594 => 949,  1587 => 945,  1583 => 944,  1578 => 941,  1570 => 934,  1566 => 931,  1551 => 917,  1548 => 915,  1533 => 902,  1518 => 890,  1513 => 888,  1501 => 879,  1436 => 816,  1387 => 769,  1380 => 765,  1376 => 764,  1365 => 756,  1359 => 753,  1354 => 751,  1350 => 750,  1346 => 749,  1342 => 748,  1338 => 747,  1334 => 746,  1330 => 745,  1318 => 736,  1304 => 724,  1299 => 720,  1288 => 711,  1276 => 702,  1261 => 690,  1248 => 680,  1236 => 671,  1231 => 668,  1228 => 666,  1218 => 657,  1215 => 655,  1201 => 643,  1182 => 627,  1170 => 618,  1163 => 614,  1158 => 612,  1152 => 609,  1147 => 606,  1144 => 604,  1130 => 592,  1111 => 576,  1100 => 568,  1093 => 564,  1085 => 559,  1079 => 556,  1074 => 553,  1071 => 551,  1065 => 546,  1062 => 544,  1030 => 514,  1019 => 506,  1009 => 499,  988 => 480,  966 => 459,  959 => 453,  952 => 447,  912 => 408,  909 => 406,  897 => 395,  894 => 393,  878 => 379,  857 => 360,  854 => 358,  851 => 356,  840 => 348,  830 => 347,  809 => 335,  805 => 334,  801 => 333,  797 => 332,  793 => 331,  789 => 330,  785 => 329,  781 => 328,  777 => 327,  768 => 320,  760 => 314,  756 => 313,  750 => 309,  747 => 307,  738 => 299,  727 => 297,  723 => 296,  717 => 293,  710 => 288,  699 => 286,  695 => 285,  689 => 282,  684 => 279,  673 => 277,  669 => 276,  663 => 273,  655 => 268,  651 => 267,  645 => 264,  641 => 263,  636 => 260,  625 => 258,  621 => 257,  615 => 254,  610 => 251,  599 => 249,  595 => 248,  589 => 245,  583 => 242,  579 => 241,  573 => 238,  569 => 237,  561 => 232,  556 => 230,  549 => 225,  546 => 223,  537 => 219,  530 => 217,  521 => 213,  514 => 211,  508 => 207,  504 => 206,  497 => 204,  494 => 203,  487 => 201,  481 => 199,  473 => 195,  466 => 193,  462 => 190,  446 => 178,  439 => 174,  431 => 171,  414 => 157,  406 => 151,  402 => 148,  395 => 143,  391 => 141,  384 => 135,  373 => 133,  369 => 132,  363 => 129,  359 => 127,  354 => 123,  343 => 121,  339 => 120,  333 => 117,  329 => 115,  322 => 109,  311 => 107,  307 => 106,  301 => 103,  297 => 101,  292 => 97,  281 => 95,  277 => 94,  271 => 91,  267 => 89,  256 => 80,  252 => 78,  247 => 74,  236 => 72,  232 => 71,  226 => 68,  222 => 66,  215 => 60,  204 => 58,  200 => 57,  194 => 54,  190 => 52,  185 => 48,  174 => 46,  170 => 45,  164 => 42,  160 => 40,  152 => 34,  149 => 33,  142 => 28,  138 => 26,  130 => 20,  121 => 13,  111 => 12,  98 => 8,  94 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
{{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-data_management.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-asitur_datatable.css') }}\">

{% endblock %}

{% block content %}

    <!--Modal add crane-->
    <div class=\"modal fade\" id=\"add_crane\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" tabindex=\"-1\" style=\"font-size: 21px !important;\">×</button>
                    <h4 id=\"myModalLabel\">{{ (\"modal.title.new_crane\")|trans }}</h4>
                </div>
                <div class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <form id=\"modal_add_crane_form\" autocomplete=\"off\">
                        <div class=\"row\">
                            {# Matrícula #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"data_management.input.label.plate\"|trans}}</label>
                                    <input id=\"plate_input\" type=\"text\" name=\"c_plate\" class=\"form-control cranes_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# Identificador #}
                            <div class=\"col-sm-6\">
                                <label class=\"control-label\">{{\"data_management.input.label.reference\"|trans}}</label>
                                <input id=\"reference_input\" type=\"text\" name=\"c_reference\" class=\"form-control cranes_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Sucursal #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.crane.branchOffice\"|trans}}</label>
                                    <select id=\"branchOffice-chosen-select\" name=\"c_branchOffice\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for branchOffice in branchOfficesList %}
                                            <option value=\"{{ branchOffice.id}}\"> {{ branchOffice.name }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {# Rótulo #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.crane.label\"|trans}}</label>
                                    <select id=\"label-chosen-select\" name=\"c_label\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for label in labels %}
                                            <option value=\"{{ label.id}}\"> {{ label.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Marca #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"data_management.input.label.brand\"|trans}}</label>
                                    <select id=\"brand-chosen-select\" name=\"c_brand\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for brand in brands %}
                                            <option value=\"{{ brand.id}}\"> {{ brand.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {# Modelo #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.crane.model\"|trans}}</label>
                                    <select disabled id=\"model-chosen-select\" name=\"c_model\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Tipo grúa #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.crane.type\"|trans}}</label>
                                    <select id=\"type-chosen-select\" name=\"c_type\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneType in craneTypes %}
                                            <option value=\"{{ craneType.id}}\"> {{ craneType.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {# Tipo asignación #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"data_management.input.label.management_type\"|trans}}</label>
                                    <select id=\"managementType-chosen-select\" name=\"c_managementType\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneManagementType in craneManagementTypes %}
                                            <option value=\"{{ craneManagementType.id}}\"> {{ craneManagementType.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Estado #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"data_management.input.label.status\"|trans}}</label>
                                    <select id=\"status-chosen-select\" name=\"c_status\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneStatus in craneStatusList %}
                                            <option value=\"{{ craneStatus.id}}\"> {{ craneStatus.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {# Disponibilidad #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.crane.availabilityStatus\"|trans}}</label>
                                    <select id=\"availabilityStatus-chosen-select\" name=\"c_availabilityStatus\" class=\"cranes_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for craneAvailabilityStatus in craneAvailabilityStatusList %}
                                            <option value=\"{{ craneAvailabilityStatus.id}}\"> {{ craneAvailabilityStatus.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Fecha de alta #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.crane.creationDate\"|trans}}</label>
                                    <input  id=\"creationDate-datetimepicker\" type=\"text\" name=\"c_creationDate\" class=\"form-control cranes_modal_inputs\" placeholder=\"dd/mm/yyyy\" maxlength=\"10\" spellcheck=\"false\"/>
                                </div>
                            </div>
                            {#? Posible Fecha de baja #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    {# Posible input de Fecha de baja #}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"addCrane_submit\" class=\"btn btn-primary\">{{ (\"general.accept\")|trans }}</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add crane-->

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"{{ path('branch_offices') }}\">{{\"data_management.tab.branch_offices\"|trans}}</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">{{\"data_management.tab.cranes\"|trans}}</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"{{ path('operators') }}\">{{\"data_management.tab.operators\"|trans}}</a>
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        {# Bloque de botones de la parte superior de la tabla #}
        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                {# Nueva grúa #}
                <button type=\"button\" class=\"btn top_left-buttons new-button\" data-toggle='modal' data-target='#add_crane'> <img src=\"{{asset(\"media/datatables/icon-add.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.new')|trans}}</button>
                {# Editar #}
                <form id=\"edit_form\" action=\"{{ path('detail_crane') }}\" method=\"POST\" style=\"display: none;\">
                    <input id=\"craneId_input\" type=\"hidden\" name=\"craneId\" value=\"\">
                    <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                </form>
                <button type=\"button\" class=\"btn top_left-buttons edit-button\" disabled> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {# Eliminar #}
                <button type=\"button\" class=\"btn top_left-buttons remove-button\" disabled> <img src=\"{{asset(\"media/datatables/basura-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.remove')|trans}}</button>
                {# Asignación #}
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn top_left-buttons digital_asign-button dropdown-toggle\" style=\"border: 1px solid transparent; box-shadow: none;\"  data-toggle=\"dropdown\" disabled> <img src=\"{{asset(\"media/datatables/power.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.digital_asign')|trans}}</button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"management_type_option\" style=\"font-size: 14px; cursor: pointer;\" data-id=\"1\">{{\"crane.management_type.manual\"|trans}}</a></li>
                        <li><a class=\"management_type_option\" style=\"font-size: 14px; cursor: pointer;\" data-id=\"2\">{{\"crane.management_type.automatic\"|trans}}</a></li>
                    </ul>
                </div>
                {# Tarifas #}
                <button type=\"button\" class=\"btn top_left-buttons rates-button\"> <img src=\"{{asset(\"media/datatables/euro.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.rates')|trans}}</button>
                {# Exportar #}
                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>
            </div>
            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                {# Filtrar #}
                <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/filter.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.filter')|trans}}</button>
                {# Buscar #}
                <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/search.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.search')|trans}}</button>
            </div>
        </div>
        {# ################################################## #}
        
        {# Bloque de filtros en datatable #}
        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"filter_panel\" class=\"filter_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"panel-custom-heading\">
                        <div class=\"panel-control\">
                            <img id=\"delete_filters_value\" class=\"delete_filters_value\" src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\">
                        </div>
                        <h3 class=\"panel-title\" style=\"font-style: italic;\">{{\"general.filter\"|trans}}</h3>
                    </div>
                    <form id=\"form_filters\" autocomplete=\"off\">
                        <div class=\"row\" style=\"margin: 0;\">
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"reference-input\" class=\"filter_labels\">{{\"data_management.input.label.reference\"|trans}}</label>
                                <input id=\"reference-input\" name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.reference\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"plate-input\" class=\"filter_labels\">{{\"data_management.input.label.plate\"|trans}}</label>
                                <input id=\"plate-input\" name=\"plate\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.plate\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"brand-input\" class=\"filter_labels\">{{\"data_management.input.label.brand\"|trans}}</label>
                                <select id=\"brand-input\" name=\"brand\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    {% for brand in brands %}
                                        <option value=\"{{ brand.id}}\"> {{ brand.description }} </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"crane_type-input\" class=\"filter_labels\">{{\"data_management.input.label.crane_type\"|trans}}</label>
                                <select id=\"crane_type-input\" name=\"crane_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    {% for craneType in craneTypes %}
                                        <option value=\"{{ craneType.id}}\"> {{ craneType.description }} </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"services-input\" class=\"filter_labels\">{{\"data_management.input.label.services\"|trans}}</label>
                                <input id=\"services-input\" name=\"services\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.services\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"zones-input\" class=\"filter_labels\">{{\"data_management.input.label.zones\"|trans}}</label>
                                <input id=\"zones-input\" name=\"zones\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.zones\"|trans}}\" spellcheck=\"false\">
                            </div>
                        </div>
                        <div class=\"row\" style=\"margin: 0;\">
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"management_type-input\" class=\"filter_labels\">{{\"data_management.input.label.management_type\"|trans}}</label>
                                <select id=\"management_type-input\" name=\"management_type\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    {% for craneManagementType in craneManagementTypes %}
                                        <option value=\"{{ craneManagementType.id}}\"> {{ craneManagementType.description }} </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"status-input\" class=\"filter_labels\">{{\"data_management.input.label.status\"|trans}}</label>
                                <select id=\"status-input\" name=\"status\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    {% for craneStatus in craneStatusList %}
                                        <option value=\"{{ craneStatus.id}}\"> {{ craneStatus.description }} </option>
                                    {% endfor %}
                                    <option value=\"4\"> Averiada o retirada </option>
                                </select>                            
                            </div>

                            <div class=\"input_filter_div col-sm-6 col-md-4 col-lg-2\">
                                <label for=\"label-input\" class=\"filter_labels\">{{\"data_management.input.label.label\"|trans}}</label>
                                <select id=\"label-input\" name=\"label\" class=\"form-control filter_inputs select_inputs chosen-select\">
                                    <option value=\"\"> ---- </option>
                                    {% for label in labels %}
                                        <option value=\"{{ label.id}}\"> {{ label.description }} </option>
                                    {% endfor %}
                                </select>                     
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {# ############################## #}

        {# Bloque de búsqueda en datatable #}
        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"search_panel\" class=\"search_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"input-group\">
                        <input id=\"search-input\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\" autocomplete=\"false\">
                        <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"{{asset(\"media/datatables/equis.png\")}}\" width=\"32px\" height=\"32px\"></span>
                    </div>
                </div>
            </div>
        </div>
        {# ############################### #}

        <hr id=\"datatable_hr\" class=\"datatable_hr\">

        <table id=\"table_cranes\" class=\"table\">
            <thead>
                <tr>
                    <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                    <th>{{\"dataTable.cranes.reference\"|trans}}</th>
                    <th>{{\"dataTable.cranes.plate\"|trans}}</th>
                    <th>{{\"dataTable.cranes.brand\"|trans}}</th>
                    <th>{{\"dataTable.cranes.crane_type\"|trans}}</th>
                    <th>{{\"dataTable.cranes.services\"|trans}}</th>
                    <th>{{\"dataTable.cranes.zones\"|trans}}</th>
                    <th>{{\"dataTable.cranes.management_type\"|trans}}</th>
                    <th>{{\"dataTable.cranes.status\"|trans}}</th>
                    <th>{{\"dataTable.cranes.label\"|trans}}</th>
                    <th></th>
                </tr>
            </thead>
        </table>

    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script>
        var arrayChecked = [];

        \$(document).ready(function(){
            var time = null;

            {#* Para que el apartado correspondiente en la barra lateral esté activo #}
            \$(\"#data_management_li\").addClass(\"active\");
            {#* #################################################################### #}

            {#* Inputs y Selects del modal #}
            \$(\".modalSelect\").chosen({ width:'100%' });

            var nowDate = new Date();
            var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
            \$('#creationDate-datetimepicker').datepicker({format: \"dd/mm/yyyy\",
                                                          autoclose: true,
                                                          language: 'es',
                                                          weekStart: 1,
                                                          todayHighlight: true,
                                                          startDate: today,
                                                         });

            \$('#brand-chosen-select').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#model-chosen-select\").empty();
                    \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                    \$(\"#model-chosen-select\").attr('disabled', 'disabled');
                    \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                } else {
                    \$.getJSON(\"{{ path('model_chosen_list') }}\",{
                        brand: \$(this).val()
                    }, function(json){
                        \$(\"#model-chosen-select\").empty();
                        \$(\"#model-chosen-select\").append('<option value=\"\"> ---- </option>');
                        \$.each(json, function (idx, obj) {
                            \$(\"#model-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.description + '</option>');
                        });
                        \$(\"#model-chosen-select\").removeAttr('disabled');
                        \$(\"#model-chosen-select\").trigger(\"chosen:updated\");
                    });
                }
            });                                             
            {#* ########################## #}
            
            {#* Borra el contenido de los inputs en el datatable #}
            \$(\"#delete_filters_value\").click(function() {
                \$(\".filter_inputs\").val('');
                \$(\".select_inputs\").trigger(\"chosen:updated\");
                reloadDataTable();
            });  

            \$(\"#delete_search_value\").click(function() {
                \$(\"#search-input\").val('');
                reloadDataTable();
            });
            {#* ################################################ #}

            {#* Activa los botones de búsqueda y filtro #}
            \$(\"#filter-button\").unbind('click');
            \$(\"#filter-button\").click(function() {
                if(\$(this).hasClass(\"active\") && \$(\"#filter_panel\").hasClass(\"in\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else if(!\$(\"#filter_panel\").hasClass(\"collapsing\")) {
                    \$(this).addClass(\"active\");
                    \$(\"#search-input\").val('');
                    \$(\"#search-button\").removeClass(\"active\");
                    \$(\"#search_panel\").removeClass(\"in\");
                    \$(\"#filter_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#search_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#search_panel\").removeClass(\"in\");
                    }, 250);
                }
            });

            \$(\"#search-button\").unbind('click');
            \$(\"#search-button\").click(function() {
                if(\$(this).hasClass(\"active\") && \$(\"#search_panel\").hasClass(\"in\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else if(!\$(\"#search_panel\").hasClass(\"collapsing\")) {
                    \$(this).addClass(\"active\");
                    \$(\".filter_inputs\").val('');
                    \$(\"#filter-button\").removeClass(\"active\");
                    \$(\"#search_panel\").css({\"display\": \"\"});
                    \$(\"#datatable_hr\").css({\"display\": \"none\"});
                    \$(\"#filter_panel\").css({\"display\": \"none\"});
                    clearInterval(time);
                    time = setTimeout(function() {
                        \$(\"#filter_panel\").removeClass(\"in\");
                    }, 250);
                }
            });
            {#* ####################################### #}

            createTable();

            let auxObjId;

            {#* Inicialización de chosens del bloque de filtros #}
            \$(\"#brand-input\").chosen();
            \$(\"#label-input\").chosen({disable_search: true});
            \$(\"#status-input\").chosen({disable_search: true});
            \$(\"#management_type-input\").chosen({disable_search: true});
            \$(\"#crane_type-input\").chosen({disable_search: false});
            {#* ############################################### #}

            \$('#search-input').keyup(function() {
                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.filter_inputs').keyup(function() {

                clearInterval(time);
                time = setTimeout(function() {
                    reloadDataTable();
                }, 1500);
            });

            \$('.select_inputs').on('change', function(){
                reloadDataTable();
            });

            {#* Funcionalidad al enviar el formulario del botón NUEVO #}
            \$('#addCrane_submit').click(function(){

                \$(\"#modal_add_crane_form\").submit(function( event ) {
                    event.preventDefault();
                });

                if( \$.trim(\$(\"#plate_input\").val())                 == \"\"     ||
                    \$.trim(\$(\"#reference_input\").val())             == \"\"     ||
                    \$(\"#branchOffice-chosen-select\").val()          == \"\"     ||
                    \$(\"#label-chosen-select\").val()                 == \"\"     ||
                    \$(\"#brand-chosen-select\").val()                 == \"\"     ||
                    \$(\"#model-chosen-select\").val()                 == \"\"     ||
                    \$(\"#type-chosen-select\").val()                  == \"\"     ||
                    \$(\"#managementType-chosen-select\").val()        == \"\"     ||
                    \$(\"#status-chosen-select\").val()                == \"\"     ||
                    \$(\"#availabilityStatus-chosen-select\").val()    == \"\"     ||
                    \$.trim(\$(\"#creationDate-datetimepicker\").val()) == \"\"     
                ) {  
                    swal.fire({
                        title: '{{\"general.form.allfields.mandatory\"|trans}}',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else {
                    \$.ajax({
                        url:'{{ path(\"create_new_crane\") }}',
                        data: {
                            'inputs': \$('#modal_add_crane_form').serializeArray()
                        },
                        type:\"POST\",
                        success: function(data){
                            if(data['status']) {
                                swal.fire({
                                    title: \"{{'general.modal.success'|trans}}\",
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                });
                                reloadDataTable();
                                \$('#add_crane').modal('hide');
                                \$(\".cranes_modal_inputs\").val('');
                                \$(\".modalSelect\").trigger(\"chosen:updated\");
                            } else {
                                swal.fire({
                                    title: data.message,
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        },
                        error:function(err){
                            swal.fire({
                                title: err[\"responseJSON\"][\"message\"],
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
            {#* ############################################# #}

            {#* Funcionalidad al hacer clic en el botón EDITAR #}
            \$(\".edit-button\").click(function() {
                \$(\"#craneId_input\").val(arrayChecked[0]);
                \$(\"#edit_form\").submit();
            });
            {#* ############################################## #}

            {#* Funcionalidad al hacer clic en el botón ELIMINAR #}
            \$(\".remove-button\").click(function() {
                swal.fire({
                    title: '',
                    html: '{{\"modal.crane.remove\"|trans}}',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"{{'modal.general.remove.confirm'|trans}}\",
                    confirmButtonColor: \"red\",
                    focusConfirm: false,
                    allowEnterKey: false,
                    showCancelButton: true,
                    cancelButtonText: \"{{'general.cancel'|trans}}\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'{{ path('cranes_delete') }}',
                            data: {
                                'arrayChecked': arrayChecked
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '{{ (\"modal.general.operation.success\")|trans }}',
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: true
                                    });
                                } else {
                                    swal.fire({
                                        title: data.message,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            },
                            error: function(err){
                                swal.fire({
                                    title: '{{ (\"modal.general.operation.error\")|trans }}',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                        reloadDataTable();
                    }
                });
            });
            {#* ################################################ #}

            {#* Funcionalidad al hacer clic en el botón ASIGNACIÓN #}
            \$(\".management_type_option\").click(function() {
                swal.fire({
                    title: '',
                    html: '{{\"modal.crane.change_management_type\"|trans}}',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"{{'general.accept'|trans}}\",
                    showCancelButton: true,
                    cancelButtonText: \"{{'general.cancel'|trans}}\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'{{ path('cranes_modify_management_type') }}',
                            data: {
                                'arrayChecked': arrayChecked,
                                'typeId': \$(this).data('id')
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '{{ (\"modal.general.operation.success\")|trans }}',
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: true
                                    });
                                } else {
                                    swal.fire({
                                        title: data.message,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            },
                            error: function(err){
                                swal.fire({
                                    title: '{{ (\"modal.general.operation.error\")|trans }}',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                        reloadDataTable();
                    }
                });
            });
            {#* ############################################## #}

            {#* Funcionalidad al hacer clic en el botón TARIFAS #}
            \$(\".rates-button\").click(function() {
                swal.fire({
                    title: 'Por definir',
                    html: \"\",
                    icon: 'info',
                    showConfirmButton: true
                });
            });
            {#* ############################################## #}

            {#* Funcionalidad al hacer clic en el botón EXPORTAR #}
            \$(\".export-button\").click(function() {

                \$.ajax({
                        url:'{{ path('cranes_export_excel') }}',
                        data: {
                            'form_filters': \$('#form_filters').serializeArray(),
                            'search_filter': \$('#search-input').val(),
                        },
                        type:\"POST\",
                        success: function(data){
                            if (data.status){
                                swal.fire({
                                    title: '{{ (\"general.export.success\")|trans }}',
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                });
                                
                                var fileName = data.data.fileName;
                                var filePath = data.data.filePath;
                                
                                var formTmp = document.createElement('form');
                                \$(formTmp).attr('action',\"{{ path('download_file') }}\");
                                \$(formTmp).attr('name','formTmp');
                                \$(formTmp).attr('target','_blank');
                                \$(formTmp).attr('enctype','multipart/form-data');
                                \$(formTmp).attr('method','post');
                                \$(formTmp).append(\"<input type='hidden' name='fileName' value='\" + fileName + \"'/>\");
                                \$(formTmp).append(\"<input type='hidden' name='filePath' value='\" + filePath + \"'/>\");
                                document.body.appendChild(formTmp);
                                document.formTmp.submit();
                                document.body.removeChild(formTmp);
                            } else {
                                swal.fire({
                                    title: '{{ (\"general.export.error\")|trans }}',
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        },
                        error:function(err){
                            swal.fire({
                                title: '{{ (\"general.export.error\")|trans }}',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                });
            });
            {#* ################################################ #}

        });

        {# Creación Datatable #}
        function createTable() {
            tableClients = \$('#table_cranes').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4,5,7,8,9] },
                    { orderable: false, targets: [0,6,10] }
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
                    url: \"{{ path('cranes_table') }}\",
                    method: 'POST',
                    data: {
                        
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

                    // check checked
                    \$('.checkboxCranes').each(function(){
                        var crane_id = \$(this).data('crane');
                        var index = arrayChecked.indexOf(crane_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxCranes').change(function(){
                        var crane_id = \$(this).data('crane');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(crane_id)) {
                                arrayChecked.push(crane_id);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked.indexOf(crane_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        {#* Se comprueba que haya checkboxes activos para activar o desactivar botones de modificación #}
                        if(arrayChecked.length) {
                            if(arrayChecked.length > 1) {
                                \$(\".edit-button\").prop('disabled', true);
                            } else {
                                \$(\".edit-button\").prop('disabled', false);
                            }

                            \$(\".remove-button\").prop('disabled', false);
                            \$(\".digital_asign-button\").prop('disabled', false);
                        } else {
                            \$(\".edit-button\").prop('disabled', true);
                            \$(\".remove-button\").prop('disabled', true);
                            \$(\".digital_asign-button\").prop('disabled', true);
                        }

                    });// change

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: true, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxCranes imgCheckbox' data-crane='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'plate'},
                    {data: 'brand'},
                    {data: 'crane_type'},
                    {data: {}, render: function(data, row) {

                            if( data['services'] != null ) {
                                let text = data['services'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: {}, render: function(data, row) {

                            if( data['zones'] != null ) {
                                let text = data['zones'];
                                let result = text.replaceAll(\",\", \"<br>\");
                                return result;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'management_type'},
                    {data: {}, render: function(data, row) {

                            if( data['status'] == 1 ) {
                                let html= '<div title=\"{{\"data_management.crane_status.select.option.active\"|trans}}\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status switchery\" type=\"checkbox\" checked> </div>';

                                return html;
                            } else if( data['status'] == 2 || data['status'] == 3 ) {
                                let html= '<div title=\"REPLACE_TITLE\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"check_status\" type=\"checkbox\"> </div>';
                                
                                if (data['status'] == 2) {
                                    html = html.replace(\"REPLACE_TITLE\", \"{{'data_management.crane_status.select.option.damaged'|trans}}\"); 
                                } else {
                                    html = html.replace(\"REPLACE_TITLE\", \"{{'data_management.crane_status.select.option.retired'|trans}}\");
                                }
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'label'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"{{ path(\"detail_crane\") }}\" method=\"POST\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"craneId\" value=\"' + data[\"id\"] + '\">';
                            html += '<input type=\"hidden\" name=\"mode\" value=\"read_only\">';
                            html += '<button class=\"btn detail-button\" style=\"color: #a4b0c0; padding: 0; box-shadow: none;\"><i class=\"fa fa-2x fa-chevron-right\"></i></button>';
                            html += '</form>'

                            return html;
                        }
                    }
                ]
            });
        }
        {# #### Datatable #### #}

        {# Función encargada de recargar el ajax del datatable #}
        let reloadDataTable = function() {
            var form_filters = new Object();
            \$('.filter_inputs').each(function() {
                form_filters[\$(this).attr('name')] = \$(this).val();
            });

            var fullFilters = {
                'form_filters': form_filters,
                'search_filter': \$('#search-input').val()
            }

            \$(\"#table_cranes\").DataTable().search(JSON.stringify(fullFilters)).draw();

            {#* Descomentar para que los checkboxes se reinicien recargar el dataTable #}
            arrayChecked = [];

            {#* Desactivamos los botones de modificación en caso de estar arrayChecked vacío #}
            if(!arrayChecked.length) {
                \$(\".edit-button\").prop('disabled', true);
                \$(\".remove-button\").prop('disabled', true);
                \$(\".digital_asign-button\").prop('disabled', true);
            }
        }
        {# ################################################### #}
    
        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"{{ asset('media/uncheck_empty.png') }}\",
                checkPath: \"{{ asset('media/check.png') }}\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"{{ asset('media/uncheck_empty.png') }}\",
                checkPath: \"{{ asset('media/check.png') }}\"
            });
        }

        \$('.checkboxFullList').change(function(){
            var active = false;
            if (\$(this).is(\":checked\")) {
                active = true;
            }
            
            \$('.checkboxCranes').each(function(){
                \$(this).prop('checked', active);
                \$(this).trigger('update');
                \$(this).trigger('change');
            });// change
        });

    </script>

{% endblock %}", "frontend/collaborator/cranes.html.twig", "/var/www/rira_web/templates/frontend/collaborator/cranes.html.twig");
    }
}
