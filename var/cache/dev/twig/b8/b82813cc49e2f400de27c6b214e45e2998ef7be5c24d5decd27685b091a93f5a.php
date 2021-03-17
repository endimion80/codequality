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

/* frontend/collaborator/operators.html.twig */
class __TwigTemplate_839383ff92d01e1271f0ab9def62e932f8e13acfcbb90244975b5437e7c350c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/operators.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/operators.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/operators.html.twig", 1);
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
    <!--Modal add operator-->
    <div class=\"modal fade\" id=\"add_operator\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" tabindex=\"-1\" style=\"font-size: 21px !important;\">×</button>
                    <h4 id=\"myModalLabel\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.title.new_operator"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <form id=\"modal_add_operator_form\" autocomplete=\"off\">
                        <div class=\"row\">
                            ";
        // line 26
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.username"), "html", null, true);
        echo "</label>
                                    <input id=\"username_input\" type=\"text\" name=\"username\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 33
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.mobile_phone"), "html", null, true);
        echo "</label>
                                    <input id=\"mobile_input\" type=\"text\" name=\"mobile\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 42
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.password"), "html", null, true);
        echo "</label>
                                    <input id=\"password_input\" type=\"password\" name=\"password\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 49
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.password_again"), "html", null, true);
        echo "</label>
                                    <input id=\"password_2_input\" type=\"password\" name=\"password_2\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 58
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.name"), "html", null, true);
        echo "</label>
                                    <input id=\"name_input\" type=\"text\" name=\"name\" class=\"form-control operators_modal_inputs\" maxlength=\"20\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 65
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.last_name"), "html", null, true);
        echo "</label>
                                    <input id=\"last_name_input\" type=\"text\" name=\"last_name\" class=\"form-control operators_modal_inputs\" maxlength=\"40\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 74
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.reference"), "html", null, true);
        echo "</label>
                                    <input id=\"reference_input\" type=\"text\" name=\"reference\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 81
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.dni"), "html", null, true);
        echo "</label>
                                    <input id=\"dni_input\" type=\"text\" name=\"dni\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 90
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.branch_office"), "html", null, true);
        echo "</label>
                                    <select id=\"branch_office-chosen-select\" name=\"branch_office\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchOffices"]) || array_key_exists("branchOffices", $context) ? $context["branchOffices"] : (function () { throw new RuntimeError('Variable "branchOffices" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 96
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 96), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                    </select>
                                </div>
                            </div>
                            ";
        // line 102
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.crane"), "html", null, true);
        echo "</label>
                                    <select disabled id=\"crane-chosen-select\" name=\"crane\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.assigned_crane.none"), "html", null, true);
        echo " </option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 114
        echo "                            <!--<div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.creation_date"), "html", null, true);
        echo "</label>
                                    <input  id=\"creationDate-datetimepicker\" type=\"text\" name=\"creation_date\" class=\"form-control operators_modal_inputs\" placeholder=\"dd/mm/yyyy\" maxlength=\"10\" spellcheck=\"false\"/>
                                </div>
                            </div>-->
                            ";
        // line 121
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.status"), "html", null, true);
        echo "</label>
                                    <select id=\"status-chosen-select\" name=\"status\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 127
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 127), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 127), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"addOperator_submit\" class=\"btn btn-primary\">";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
        echo "</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add operator-->

    <!--Modal add operator-->
    <div class=\"modal fade\" id=\"crane_operator_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" tabindex=\"-1\" style=\"font-size: 21px !important;\">×</button>
                    <h4 id=\"myModalCraneLabel\">";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.title.assign_crane_operator"), "html", null, true);
        echo "</h4>
                </div>
                <div id=\"crane_operator_modal_body\"  class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <!--
                    <form id=\"modal_add_operator_form\" autocomplete=\"off\">
                        <div class=\"row\">
                            ";
        // line 158
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.username"), "html", null, true);
        echo "</label>
                                    <input id=\"username_input\" type=\"text\" name=\"username\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 165
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.mobile_phone"), "html", null, true);
        echo "</label>
                                    <input id=\"mobile_input\" type=\"text\" name=\"mobile\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 174
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.password"), "html", null, true);
        echo "</label>
                                    <input id=\"password_input\" type=\"password\" name=\"password\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 181
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.password_again"), "html", null, true);
        echo "</label>
                                    <input id=\"password_2_input\" type=\"password\" name=\"password_2\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 190
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.name"), "html", null, true);
        echo "</label>
                                    <input id=\"name_input\" type=\"text\" name=\"name\" class=\"form-control operators_modal_inputs\" maxlength=\"20\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 197
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.last_name"), "html", null, true);
        echo "</label>
                                    <input id=\"last_name_input\" type=\"text\" name=\"last_name\" class=\"form-control operators_modal_inputs\" maxlength=\"40\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 206
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.reference"), "html", null, true);
        echo "</label>
                                    <input id=\"reference_input\" type=\"text\" name=\"reference\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            ";
        // line 213
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.dni"), "html", null, true);
        echo "</label>
                                    <input id=\"dni_input\" type=\"text\" name=\"dni\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 222
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.branch_office"), "html", null, true);
        echo "</label>
                                    <select id=\"branch_office-chosen-select\" name=\"branch_office\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchOffices"]) || array_key_exists("branchOffices", $context) ? $context["branchOffices"] : (function () { throw new RuntimeError('Variable "branchOffices" does not exist.', 227, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 228
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 228), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 228), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "                                    </select>
                                </div>
                            </div>
                            ";
        // line 234
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.crane"), "html", null, true);
        echo "</label>
                                    <select disabled id=\"crane-chosen-select\" name=\"crane\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.assigned_crane.none"), "html", null, true);
        echo " </option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
        // line 246
        echo "                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.label.status"), "html", null, true);
        echo "</label>
                                    <select id=\"status-chosen-select\" name=\"status\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 251, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 252
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 252), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 252), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>-->
                </div>
                <div class=\"modal-footer\">
                    <!--<button type=\"button\" id=\"addOperator_submit\" class=\"btn btn-primary\">";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
        echo "</button>-->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add operator-->


    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("branch_offices");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.branch_offices"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cranes");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.cranes"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.tab.operators"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
        </ul>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        ";
        // line 295
        echo "        <div class=\"filters_and_buttons\" style=\"padding: 0; display: flex; justify-content: space-between; margin-bottom: 25px;\">
            <div id=\"top_left_div\" style=\"padding: 0;\">
                ";
        // line 298
        echo "                <button type=\"button\" class=\"btn top_left-buttons new-button\" data-toggle='modal' data-target='#add_operator'> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/icon-add.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.new"), "html", null, true);
        echo "</button>
                ";
        // line 300
        echo "                <form id=\"edit_form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_operator");
        echo "\" method=\"POST\" style=\"display: none;\">
                    <input id=\"operatorId_input\" type=\"hidden\" name=\"operatorId\" value=\"\">
                    <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                </form>
                <button type=\"button\" class=\"btn top_left-buttons edit-button\" disabled> <img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/lapiz-icono.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.edit"), "html", null, true);
        echo "</button>
                ";
        // line 306
        echo "                <button type=\"button\" class=\"btn top_left-buttons remove-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/basura-icono.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.remove"), "html", null, true);
        echo "</button>
                ";
        // line 308
        echo "                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/export.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.export"), "html", null, true);
        echo "</button>

                ";
        // line 311
        echo "                <button type=\"button\" class=\"btn top_left-buttons crane-button\" disabled> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/crane.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.change_crane"), "html", null, true);
        echo "</button>

            </div>
            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel\" data-toggle=\"collapse\"> <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/filter.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.filter"), "html", null, true);
        echo "</button>
                <button id=\"search-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#search_panel\" data-toggle=\"collapse\"> <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/search.png"), "html", null, true);
        echo "\" width=\"17px\" height=\"18px\"> &nbsp; ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.search"), "html", null, true);
        echo "</button>
            </div>
        </div>
        ";
        // line 320
        echo "        
        ";
        // line 322
        echo "        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"filter_panel\" class=\"filter_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"panel-custom-heading\">
                        <div class=\"panel-control\">
                            <img id=\"delete_filters_value\" class=\"delete_filters_value\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\">
                        </div>
                        <h3 class=\"panel-title\" style=\"font-style: italic;\">";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.filter"), "html", null, true);
        echo "</h3>
                    </div>
                    <form id=\"form_filters\" autocomplete=\"off\">
                        <div class=\"row\" style=\"margin: 0;\">
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"name-input\" class=\"filter_labels\">";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.identifier"), "html", null, true);
        echo "</label>
                                <input id=\"name-input\" name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.identifier"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"mobile_phone-input\" class=\"filter_labels\">";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.mobile_phone"), "html", null, true);
        echo "</label>
                                <input id=\"mobile_phone-input\" name=\"mobile_phone\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.mobile_phone"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"status-input\" class=\"filter_labels\">";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.availability_status"), "html", null, true);
        echo "</label>
                                <select id=\"status-input\" name=\"availability_status\" class=\"form-control filter_inputs select_inputs chosen-select\"></select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"dni-input\" class=\"filter_labels\">";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.label.assigned_crane"), "html", null, true);
        echo "</label>
                                <input id=\"dni-input\" name=\"assigned_crane\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.input.placeholder.assigned_crane"), "html", null, true);
        echo "\" spellcheck=\"false\">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        ";
        // line 355
        echo "
        ";
        // line 357
        echo "        <div class=\"panel\" style=\"box-shadow: none; -webkit-box-shadow: none; margin-bottom: 0;\">
            <div id=\"search_panel\" class=\"search_panel collapse\">
                <div class=\"panel-body\">
                    <div class=\"input-group\">
                        <input id=\"search-input\" class='search-input' type=\"text\" class=\"form-control\" placeholder=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\" autocomplete=\"false\">
                        <span id=\"delete_search_value\" class=\"delete_search_value input-group-addon\"><img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/datatables/equis.png"), "html", null, true);
        echo "\" width=\"32px\" height=\"32px\"></span>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 368
        echo "
        <hr id=\"datatable_hr\" class=\"datatable_hr\">

        <table id=\"table_operators\" class=\"table\">
            <thead>
                <tr>
                    <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                    <th>";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.identifier"), "html", null, true);
        echo "</th>
                    <th>";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.mobile_phone"), "html", null, true);
        echo "</th>
                    <th>";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.availability_status"), "html", null, true);
        echo "</th>
                    <th>";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.operators.assigned_crane"), "html", null, true);
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

    // line 390
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 391
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var arrayChecked = [];

        \$(document).ready(function(){

            \$(window).on('shown.bs.modal', function() { 
                \$('#modal_add_operator_form input').val('');
                \$('#modal_add_operator_form select').val('');
                \$(\".modalSelect\").trigger(\"chosen:updated\");
            });

            var time = null;

            ";
        // line 406
        echo "            \$(\"#data_management_li\").addClass(\"active\");
            ";
        // line 408
        echo "
            ";
        // line 410
        echo "            \$(\".modalSelect\").chosen({ width:'100%' });

            /*
            var nowDate = new Date();
            var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
            var tomorrow = today
            tomorrow.setDate(tomorrow.getDate() + 1);
            \$('#creationDate-datetimepicker').datepicker({format: \"dd/mm/yyyy\",
                                                          autoclose: true,
                                                          language: 'es',
                                                          weekStart: 1,
                                                          todayHighlight: true,
                                                          //startDate: today,
                                                          endDate:tomorrow
                                                         });
            \$(\"#creationDate-datetimepicker\").datepicker().datepicker(\"setDate\", today); */

            \$('#branch_office-chosen-select').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#crane-chosen-select\").empty();
                    \$(\"#crane-chosen-select\").append('<option value=\"\"> ";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.assigned_crane.none"), "html", null, true);
        echo " </option>');
                    \$(\"#crane-chosen-select\").attr('disabled', 'disabled');
                    \$(\"#crane-chosen-select\").trigger(\"chosen:updated\");
                } else {
                    \$.ajax({
                        url:'";
        // line 435
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("assigned_crane_chosen_list");
        echo "',
                        data: {
                            branchOfficeId: \$(this).val(),
                        },
                        type:\"POST\",
                        success: function(data){
                            \$(\"#crane-chosen-select\").empty();
                            \$(\"#crane-chosen-select\").append('<option value=\"\"> ";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.assigned_crane.none"), "html", null, true);
        echo " </option>');
                            \$.each(data, function (idx, obj) {
                                \$(\"#crane-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.reference + '</option>');
                            });
                            \$(\"#crane-chosen-select\").removeAttr('disabled');
                            \$(\"#crane-chosen-select\").trigger(\"chosen:updated\");
                        },
                        error:function(err){
                            swal.fire({
                                title: '";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.error.loading.data"), "html", null, true);
        echo "',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });                                             
            ";
        // line 461
        echo "
            ";
        // line 463
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
        // line 474
        echo "
            ";
        // line 476
        echo "            \$(\"#filter-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
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

            \$(\"#search-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
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
        // line 513
        echo "
            createTable();

            let auxObjId;

            \$.getJSON(\"";
        // line 518
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operator_availabilityStatus_chosen_list");
        echo "\", function(json){
                \$(\"#status-input\").empty();
                \$(\"#status-input\").append('<option value=\"\"> ---- </option>');
                \$.each(json, function (idx, obj) {
                    \$(\"#status-input\").append('<option value=\"' + obj.id + '\">' + obj.status + '</option>');
                    auxObjId = parseInt(obj.id);
                });
                \$(\"#status-input\").chosen({disable_search: true});
            });

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
        // line 548
        echo "            \$('#addOperator_submit').click(function(){

                \$(\"#modal_add_operator_form\").submit(function( event ) {
                    event.preventDefault();
                });

                if( \$.trim(\$(\"#username_input\").val())              == \"\"  ||
                    \$.trim(\$(\"#mobile_input\").val())                == \"\"  ||
                    \$.trim(\$(\"#password_input\").val())              == \"\"  ||
                    \$.trim(\$(\"#password_2_input\").val())            == \"\"  ||
                    //\$.trim(\$(\"#name_input\").val())                  == \"\"  ||
                    //\$.trim(\$(\"#last_name_input\").val())             == \"\"  ||
                    \$.trim(\$(\"#reference_input\").val())             == \"\"  ||
                    //\$.trim(\$(\"#dni_input\").val())                   == \"\"  ||
                    \$(\"#branch_office-chosen-select\").val()         == \"\"  ||
                    //\$.trim(\$(\"#creationDate-datetimepicker\").val()) == \"\"  ||
                    \$(\"#status-chosen-select\").val()                == \"\"
                ) {  
                    swal.fire({
                        title: '";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.allfields.mandatory"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else if( \$(\"#password_input\").val() != \$(\"#password_2_input\").val() ) {
                    swal.fire({
                        title: '";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.password.both_same"), "html", null, true);
        echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else {
                    \$.ajax({
                        url:'";
        // line 581
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_new_operator");
        echo "',
                        data: {
                            'inputs': \$('#modal_add_operator_form').serializeArray()
                        },
                        type:\"POST\",
                        success: function(data){
                            if(data['status']) {
                                swal.fire({
                                    title: \"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.modal.success"), "html", null, true);
        echo "\",
                                    html: \"\",
                                    icon: 'success',
                                    showConfirmButton: true
                                });
                                reloadDataTable();
                                \$('#add_operator').modal('hide');
                                \$(\".operators_modal_inputs\").val('');
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
        // line 619
        echo "
            ";
        // line 621
        echo "            \$(\".edit-button\").click(function() {
                \$(\"#operatorId_input\").val(arrayChecked[0]);
                \$(\"#edit_form\").submit();
            });
            ";
        // line 626
        echo "

            ";
        // line 629
        echo "
            ";
        // line 631
        echo "            \$(\".crane-button\").click(function() {
                \$.ajax({
                    url:'";
        // line 633
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_change_crane_modal");
        echo "',
                    data: {
                        'operatorId': arrayChecked[0]
                    },
                    type:\"POST\",
                    success: function(data){
                        \$('#crane_operator_modal_body').html(data);
                        \$('#crane_operator_modal').modal('show');
                    },
                    error: function(err){
                        swal.fire({
                            title: '";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.error"), "html", null, true);
        echo "',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            });
            ";
        // line 653
        echo "

            ";
        // line 656
        echo "            \$(\".remove-button\").click(function() {
                swal.fire({
                    title: '',
                    html: '";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.operator.remove"), "html", null, true);
        echo "',
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: \"";
        // line 662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.remove.confirm"), "html", null, true);
        echo "\",
                    confirmButtonColor: \"red\",
                    focusConfirm: false,
                    allowEnterKey: false,
                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 667
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\"
                }).then((result) => {
                    if(result.isConfirmed) {
                        \$.ajax({
                            url:'";
        // line 671
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_delete");
        echo "',
                            data: {
                                'arrayChecked': arrayChecked
                            },
                            type:\"POST\",
                            success: function(data){
                                if (data.status){
                                    swal.fire({
                                        title: '";
        // line 679
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
        // line 695
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
        // line 707
        echo "
            ";
        // line 709
        echo "            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'";
        // line 711
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_export_excel");
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
        // line 720
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
        // line 730
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
        // line 742
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
        // line 751
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
        // line 760
        echo "
        });

        ";
        // line 764
        echo "        function createTable() {
            tableClients = \$('#table_operators').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4] },
                    { orderable: false, targets: [0,5] }
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, \"";
        // line 776
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
        // line 785
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing "), "html", null, true);
        echo "\",
                    \"sLengthMenu\": \"";
        // line 786
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.asitur.language.sLengthMenu"), "html", null, true);
        echo ": _MENU_\",
                    \"sZeroRecords\": \"";
        // line 787
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sEmptyTable\": \"";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                    \"sInfo\": \"";
        // line 789
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 790
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                    \"sInfoFiltered\": \"";
        // line 791
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                    \"sInfoPostFix\": \"\",
                    \"sSearch\": \"";
        // line 793
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                    \"sUrl\": \"\",
                    \"sInfoThousands\": \",\",
                    \"sLoadingRecords\": \"";
        // line 796
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
        // line 804
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 805
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                    },
                },
                ajax: {
                    url: \"";
        // line 809
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_table");
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
                    \$('.checkboxOperators').each(function(){
                        var operator_id = \$(this).data('operator');
                        var index = arrayChecked.indexOf(operator_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxOperators').change(function(){
                        var operator_id = \$(this).data('operator');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(operator_id)) {
                                arrayChecked.push(operator_id);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked.indexOf(operator_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        ";
        // line 856
        echo "                        if(arrayChecked.length) {
                            if(arrayChecked.length > 1) {
                                \$(\".edit-button\").prop('disabled', true);
                                \$(\".crane-button\").prop('disabled', true);
                            } else {
                                \$(\".edit-button\").prop('disabled', false);
                                \$(\".crane-button\").prop('disabled', false);
                            }

                            \$(\".remove-button\").prop('disabled', false);
                        } else {
                            \$(\".edit-button\").prop('disabled', true);
                            \$(\".crane-button\").prop('disabled', true);
                            \$(\".remove-button\").prop('disabled', true);
                        }

                    });// change

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: false, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });

                    \$('.availabilityOperatorCheck').change(function(){
                        let operator_id = \$(this).data('operator');
                        let new_status =  \$(this).is(':checked')
                        let reference = this;
                        \$.ajax({
                            url:'";
        // line 889
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_change_availability");
        echo "',
                            data: {
                                'operatorId': operator_id,
                                'newStatus': (new_status ? 'on' : 'off')
                            },
                            type:\"POST\",
                            success: function(data){
                                if(data['status']) {
                                    swal.fire({
                                        title: data.data.msg,
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: true
                                    });
                                } else {
                                    swal.fire({
                                        title: data.errors.msg,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                    reloadDataTable();
                                }
                            },
                            error:function(err){
                                swal.fire({
                                    title: err,
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                    });
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxOperators imgCheckbox' data-operator='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'mobile_phone'},
                    {data: {}, render: function(data, row) {
                            if( data['availability_status'] == 1 ) {
                                let html= '<div title=\"";
        // line 934
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.availability_status.available"), "html", null, true);
        echo "\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"availabilityOperatorCheck check_status switchery\" type=\"checkbox\" data-operator=\"' + data['id'] + '\" checked> </div>';

                                return html;
                            } else if( data['availability_status'] == 2 ) {
                                let html= '<div title=\"";
        // line 939
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("data_management.operator.availability_status.not_available"), "html", null, true);
        echo "\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"availabilityOperatorCheck check_status\" type=\"checkbox\" data-operator=\"' + data['id'] + '\"> </div>';
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'assigned_crane'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"";
        // line 951
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_operator");
        echo "\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"operatorId\" value=\"'+ data[\"id\"] +'\">';
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
        // line 964
        echo "
        ";
        // line 966
        echo "        let reloadDataTable = function() {
            var form_filters = new Object();
            \$('.filter_inputs').each(function () {
                form_filters[\$(this).attr('name')] = \$(this).val();
            });

            var fullFilters = {
                'form_filters': form_filters,
                'search_filter': \$('#search-input').val()
            }

            \$(\"#table_operators\").DataTable().search(JSON.stringify(fullFilters)).draw();

            ";
        // line 980
        echo "            arrayChecked = [];

            ";
        // line 983
        echo "            if(!arrayChecked.length) {
                \$(\".edit-button\").prop('disabled', true);
                \$(\".remove-button\").prop('disabled', true);
            }
        }
        ";
        // line 989
        echo "    
        function reloadCheckbox(){
            \$('.imgCheckbox').imgCheckbox({
                uncheckPath: \"";
        // line 992
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 993
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });

            \$('.checkboxFullList').imgCheckbox({
                uncheckPath: \"";
        // line 997
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck_empty.png"), "html", null, true);
        echo "\",
                checkPath: \"";
        // line 998
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
            });
        }

        \$('.checkboxFullList').change(function(){
            var active = false;
            if (\$(this).is(\":checked\")) {
                active = true;
            }
            
            \$('.checkboxOperators').each(function(){
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
        return "frontend/collaborator/operators.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1548 => 998,  1544 => 997,  1537 => 993,  1533 => 992,  1528 => 989,  1521 => 983,  1517 => 980,  1502 => 966,  1499 => 964,  1484 => 951,  1469 => 939,  1461 => 934,  1413 => 889,  1378 => 856,  1329 => 809,  1322 => 805,  1318 => 804,  1307 => 796,  1301 => 793,  1296 => 791,  1292 => 790,  1288 => 789,  1284 => 788,  1280 => 787,  1276 => 786,  1272 => 785,  1260 => 776,  1246 => 764,  1241 => 760,  1230 => 751,  1218 => 742,  1203 => 730,  1190 => 720,  1178 => 711,  1174 => 709,  1171 => 707,  1157 => 695,  1138 => 679,  1127 => 671,  1120 => 667,  1112 => 662,  1106 => 659,  1101 => 656,  1097 => 653,  1086 => 644,  1072 => 633,  1068 => 631,  1065 => 629,  1061 => 626,  1055 => 621,  1052 => 619,  1020 => 589,  1009 => 581,  999 => 574,  989 => 567,  968 => 548,  936 => 518,  929 => 513,  891 => 476,  888 => 474,  876 => 463,  873 => 461,  861 => 451,  849 => 442,  839 => 435,  831 => 430,  809 => 410,  806 => 408,  803 => 406,  785 => 391,  775 => 390,  754 => 378,  750 => 377,  746 => 376,  742 => 375,  733 => 368,  725 => 362,  721 => 361,  715 => 357,  712 => 355,  702 => 347,  698 => 346,  691 => 342,  685 => 339,  681 => 338,  675 => 335,  671 => 334,  663 => 329,  658 => 327,  651 => 322,  648 => 320,  640 => 316,  634 => 315,  624 => 311,  616 => 308,  609 => 306,  603 => 304,  595 => 300,  588 => 298,  584 => 295,  569 => 282,  561 => 279,  553 => 276,  535 => 261,  526 => 254,  515 => 252,  511 => 251,  505 => 248,  501 => 246,  491 => 238,  486 => 236,  482 => 234,  477 => 230,  466 => 228,  462 => 227,  456 => 224,  452 => 222,  443 => 215,  439 => 213,  432 => 208,  428 => 206,  419 => 199,  415 => 197,  408 => 192,  404 => 190,  395 => 183,  391 => 181,  384 => 176,  380 => 174,  371 => 167,  367 => 165,  360 => 160,  356 => 158,  347 => 151,  329 => 136,  320 => 129,  309 => 127,  305 => 126,  299 => 123,  295 => 121,  288 => 116,  284 => 114,  274 => 106,  269 => 104,  265 => 102,  260 => 98,  249 => 96,  245 => 95,  239 => 92,  235 => 90,  226 => 83,  222 => 81,  215 => 76,  211 => 74,  202 => 67,  198 => 65,  191 => 60,  187 => 58,  178 => 51,  174 => 49,  167 => 44,  163 => 42,  154 => 35,  150 => 33,  143 => 28,  139 => 26,  131 => 20,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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

    <!--Modal add operator-->
    <div class=\"modal fade\" id=\"add_operator\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" tabindex=\"-1\" style=\"font-size: 21px !important;\">×</button>
                    <h4 id=\"myModalLabel\">{{ (\"modal.title.new_operator\")|trans }}</h4>
                </div>
                <div class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <form id=\"modal_add_operator_form\" autocomplete=\"off\">
                        <div class=\"row\">
                            {# Nombre de usuario #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.username\"|trans}}</label>
                                    <input id=\"username_input\" type=\"text\" name=\"username\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# Móvil #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.mobile_phone\"|trans}}</label>
                                    <input id=\"mobile_input\" type=\"text\" name=\"mobile\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Contraseña #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.password\"|trans}}</label>
                                    <input id=\"password_input\" type=\"password\" name=\"password\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# Contraseña 2 #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.password_again\"|trans}}</label>
                                    <input id=\"password_2_input\" type=\"password\" name=\"password_2\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Nombre #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.name\"|trans}}</label>
                                    <input id=\"name_input\" type=\"text\" name=\"name\" class=\"form-control operators_modal_inputs\" maxlength=\"20\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# Apellidos #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.last_name\"|trans}}</label>
                                    <input id=\"last_name_input\" type=\"text\" name=\"last_name\" class=\"form-control operators_modal_inputs\" maxlength=\"40\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Identificador #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.reference\"|trans}}</label>
                                    <input id=\"reference_input\" type=\"text\" name=\"reference\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# DNI #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.dni\"|trans}}</label>
                                    <input id=\"dni_input\" type=\"text\" name=\"dni\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Sucursal #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.branch_office\"|trans}}</label>
                                    <select id=\"branch_office-chosen-select\" name=\"branch_office\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for branchOffice in branchOffices %}
                                            <option value=\"{{ branchOffice.id}}\"> {{ branchOffice.name }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {# Grúa #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.crane\"|trans}}</label>
                                    <select disabled id=\"crane-chosen-select\" name=\"crane\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> {{\"data_management.operator.assigned_crane.none\"|trans }} </option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Fecha de alta #}
                            <!--<div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.creation_date\"|trans}}</label>
                                    <input  id=\"creationDate-datetimepicker\" type=\"text\" name=\"creation_date\" class=\"form-control operators_modal_inputs\" placeholder=\"dd/mm/yyyy\" maxlength=\"10\" spellcheck=\"false\"/>
                                </div>
                            </div>-->
                            {# Estado #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.status\"|trans}}</label>
                                    <select id=\"status-chosen-select\" name=\"status\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for status in statusList %}
                                            <option value=\"{{ status.id}}\"> {{ status.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"addOperator_submit\" class=\"btn btn-primary\">{{ (\"general.accept\")|trans }}</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add operator-->

    <!--Modal add operator-->
    <div class=\"modal fade\" id=\"crane_operator_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" tabindex=\"-1\" style=\"font-size: 21px !important;\">×</button>
                    <h4 id=\"myModalCraneLabel\">{{ (\"modal.title.assign_crane_operator\")|trans }}</h4>
                </div>
                <div id=\"crane_operator_modal_body\"  class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <!--
                    <form id=\"modal_add_operator_form\" autocomplete=\"off\">
                        <div class=\"row\">
                            {# Nombre de usuario #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.username\"|trans}}</label>
                                    <input id=\"username_input\" type=\"text\" name=\"username\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# Móvil #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.mobile_phone\"|trans}}</label>
                                    <input id=\"mobile_input\" type=\"text\" name=\"mobile\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Contraseña #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.password\"|trans}}</label>
                                    <input id=\"password_input\" type=\"password\" name=\"password\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# Contraseña 2 #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.password_again\"|trans}}</label>
                                    <input id=\"password_2_input\" type=\"password\" name=\"password_2\" class=\"form-control operators_modal_inputs\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Nombre #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.name\"|trans}}</label>
                                    <input id=\"name_input\" type=\"text\" name=\"name\" class=\"form-control operators_modal_inputs\" maxlength=\"20\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# Apellidos #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.last_name\"|trans}}</label>
                                    <input id=\"last_name_input\" type=\"text\" name=\"last_name\" class=\"form-control operators_modal_inputs\" maxlength=\"40\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Identificador #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.reference\"|trans}}</label>
                                    <input id=\"reference_input\" type=\"text\" name=\"reference\" class=\"form-control operators_modal_inputs\" maxlength=\"50\" spellcheck=\"false\">
                                </div>
                            </div>
                            {# DNI #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.dni\"|trans}}</label>
                                    <input id=\"dni_input\" type=\"text\" name=\"dni\" class=\"form-control operators_modal_inputs\" maxlength=\"15\" spellcheck=\"false\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Sucursal #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.branch_office\"|trans}}</label>
                                    <select id=\"branch_office-chosen-select\" name=\"branch_office\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for branchOffice in branchOffices %}
                                            <option value=\"{{ branchOffice.id}}\"> {{ branchOffice.name }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {# Grúa #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.crane\"|trans}}</label>
                                    <select disabled id=\"crane-chosen-select\" name=\"crane\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> {{\"data_management.operator.assigned_crane.none\"|trans }} </option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {# Estado #}
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.operator.label.status\"|trans}}</label>
                                    <select id=\"status-chosen-select\" name=\"status\" class=\"operators_modal_inputs modalSelect\" tabindex=\"-1\">
                                        <option value=\"\"> ---- </option>
                                        {% for status in statusList %}
                                            <option value=\"{{ status.id}}\"> {{ status.description }} </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>-->
                </div>
                <div class=\"modal-footer\">
                    <!--<button type=\"button\" id=\"addOperator_submit\" class=\"btn btn-primary\">{{ (\"general.accept\")|trans }}</button>-->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add operator-->


    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"{{ path('branch_offices') }}\">{{\"data_management.tab.branch_offices\"|trans}}</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" href=\"{{ path('cranes') }}\">{{\"data_management.tab.cranes\"|trans}}</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\">{{\"data_management.tab.operators\"|trans}}</a>
                <hr class=\"tab-active-hr\">
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
                {# Nuevo operario #}
                <button type=\"button\" class=\"btn top_left-buttons new-button\" data-toggle='modal' data-target='#add_operator'> <img src=\"{{asset(\"media/datatables/icon-add.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.new')|trans}}</button>
                {# Editar #}
                <form id=\"edit_form\" action=\"{{ path('detail_operator') }}\" method=\"POST\" style=\"display: none;\">
                    <input id=\"operatorId_input\" type=\"hidden\" name=\"operatorId\" value=\"\">
                    <input type=\"hidden\" name=\"mode\" value=\"edit_allowed\">
                </form>
                <button type=\"button\" class=\"btn top_left-buttons edit-button\" disabled> <img src=\"{{asset(\"media/datatables/lapiz-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.edit')|trans}}</button>
                {# Eliminar #}
                <button type=\"button\" class=\"btn top_left-buttons remove-button\"> <img src=\"{{asset(\"media/datatables/basura-icono.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.remove')|trans}}</button>
                {# Exportar #}
                <button type=\"button\" class=\"btn top_left-buttons export-button\"> <img src=\"{{asset(\"media/datatables/export.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.export')|trans}}</button>

                {# cámbio de grua #}
                <button type=\"button\" class=\"btn top_left-buttons crane-button\" disabled> <img src=\"{{asset(\"media/datatables/crane.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.change_crane')|trans}}</button>

            </div>
            <div id=\"top_right_div\" style=\"padding: 0; border-left: 2px #dbdbdb solid;\">
                <button id=\"filter-button\" type=\"button\" class=\"btn filtering-buttons\" data-target=\"#filter_panel\" data-toggle=\"collapse\"> <img src=\"{{asset(\"media/datatables/filter.png\")}}\" width=\"17px\" height=\"18px\"> &nbsp; {{('dataTable.asitur.filter')|trans}}</button>
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
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"name-input\" class=\"filter_labels\">{{\"data_management.input.label.identifier\"|trans}}</label>
                                <input id=\"name-input\" name=\"reference\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.identifier\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"mobile_phone-input\" class=\"filter_labels\">{{\"data_management.input.label.mobile_phone\"|trans}}</label>
                                <input id=\"mobile_phone-input\" name=\"mobile_phone\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.mobile_phone\"|trans}}\" spellcheck=\"false\">
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"status-input\" class=\"filter_labels\">{{\"data_management.input.label.availability_status\"|trans}}</label>
                                <select id=\"status-input\" name=\"availability_status\" class=\"form-control filter_inputs select_inputs chosen-select\"></select>
                            </div>
                            <div class=\"input_filter_div col-sm-6 col-md-3 col-lg-2\">
                                <label for=\"dni-input\" class=\"filter_labels\">{{\"data_management.input.label.assigned_crane\"|trans}}</label>
                                <input id=\"dni-input\" name=\"assigned_crane\" type=\"text\" class=\"form-control filter_inputs\" placeholder=\"{{\"data_management.input.placeholder.assigned_crane\"|trans}}\" spellcheck=\"false\">
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

        <table id=\"table_operators\" class=\"table\">
            <thead>
                <tr>
                    <th><input type='checkbox' class='checkboxFullList imgCheckbox'/></th>
                    <th>{{\"dataTable.operators.identifier\"|trans}}</th>
                    <th>{{\"dataTable.operators.mobile_phone\"|trans}}</th>
                    <th>{{\"dataTable.operators.availability_status\"|trans}}</th>
                    <th>{{\"dataTable.operators.assigned_crane\"|trans}}</th>
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

            \$(window).on('shown.bs.modal', function() { 
                \$('#modal_add_operator_form input').val('');
                \$('#modal_add_operator_form select').val('');
                \$(\".modalSelect\").trigger(\"chosen:updated\");
            });

            var time = null;

            {#* Para que el apartado correspondiente en la barra lateral esté activo #}
            \$(\"#data_management_li\").addClass(\"active\");
            {#* #################################################################### #}

            {#* Inputs y Selects del modal #}
            \$(\".modalSelect\").chosen({ width:'100%' });

            /*
            var nowDate = new Date();
            var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
            var tomorrow = today
            tomorrow.setDate(tomorrow.getDate() + 1);
            \$('#creationDate-datetimepicker').datepicker({format: \"dd/mm/yyyy\",
                                                          autoclose: true,
                                                          language: 'es',
                                                          weekStart: 1,
                                                          todayHighlight: true,
                                                          //startDate: today,
                                                          endDate:tomorrow
                                                         });
            \$(\"#creationDate-datetimepicker\").datepicker().datepicker(\"setDate\", today); */

            \$('#branch_office-chosen-select').on('change', function(){
                if(\$(this).val() == \"\") {
                    \$(\"#crane-chosen-select\").empty();
                    \$(\"#crane-chosen-select\").append('<option value=\"\"> {{\"data_management.operator.assigned_crane.none\"|trans}} </option>');
                    \$(\"#crane-chosen-select\").attr('disabled', 'disabled');
                    \$(\"#crane-chosen-select\").trigger(\"chosen:updated\");
                } else {
                    \$.ajax({
                        url:'{{ path(\"assigned_crane_chosen_list\") }}',
                        data: {
                            branchOfficeId: \$(this).val(),
                        },
                        type:\"POST\",
                        success: function(data){
                            \$(\"#crane-chosen-select\").empty();
                            \$(\"#crane-chosen-select\").append('<option value=\"\"> {{\"data_management.operator.assigned_crane.none\"|trans}} </option>');
                            \$.each(data, function (idx, obj) {
                                \$(\"#crane-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.reference + '</option>');
                            });
                            \$(\"#crane-chosen-select\").removeAttr('disabled');
                            \$(\"#crane-chosen-select\").trigger(\"chosen:updated\");
                        },
                        error:function(err){
                            swal.fire({
                                title: '{{ (\"general.error.loading.data\")|trans }}',
                                html: '',
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
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
            \$(\"#filter-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
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

            \$(\"#search-button\").click(function() {
                if(\$(this).hasClass(\"active\")) {
                    \$(this).removeClass(\"active\");
                    \$(\"#datatable_hr\").css({\"display\": \"\"});
                } else {
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

            \$.getJSON(\"{{ path('operator_availabilityStatus_chosen_list') }}\", function(json){
                \$(\"#status-input\").empty();
                \$(\"#status-input\").append('<option value=\"\"> ---- </option>');
                \$.each(json, function (idx, obj) {
                    \$(\"#status-input\").append('<option value=\"' + obj.id + '\">' + obj.status + '</option>');
                    auxObjId = parseInt(obj.id);
                });
                \$(\"#status-input\").chosen({disable_search: true});
            });

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
            \$('#addOperator_submit').click(function(){

                \$(\"#modal_add_operator_form\").submit(function( event ) {
                    event.preventDefault();
                });

                if( \$.trim(\$(\"#username_input\").val())              == \"\"  ||
                    \$.trim(\$(\"#mobile_input\").val())                == \"\"  ||
                    \$.trim(\$(\"#password_input\").val())              == \"\"  ||
                    \$.trim(\$(\"#password_2_input\").val())            == \"\"  ||
                    //\$.trim(\$(\"#name_input\").val())                  == \"\"  ||
                    //\$.trim(\$(\"#last_name_input\").val())             == \"\"  ||
                    \$.trim(\$(\"#reference_input\").val())             == \"\"  ||
                    //\$.trim(\$(\"#dni_input\").val())                   == \"\"  ||
                    \$(\"#branch_office-chosen-select\").val()         == \"\"  ||
                    //\$.trim(\$(\"#creationDate-datetimepicker\").val()) == \"\"  ||
                    \$(\"#status-chosen-select\").val()                == \"\"
                ) {  
                    swal.fire({
                        title: '{{\"general.form.allfields.mandatory\"|trans}}',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else if( \$(\"#password_input\").val() != \$(\"#password_2_input\").val() ) {
                    swal.fire({
                        title: '{{\"general.password.both_same\"|trans}}',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                } else {
                    \$.ajax({
                        url:'{{ path(\"create_new_operator\") }}',
                        data: {
                            'inputs': \$('#modal_add_operator_form').serializeArray()
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
                                \$('#add_operator').modal('hide');
                                \$(\".operators_modal_inputs\").val('');
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
                \$(\"#operatorId_input\").val(arrayChecked[0]);
                \$(\"#edit_form\").submit();
            });
            {#* ############################################## #}


            {#* ############################################# #}

            {#* Funcionalidad al hacer clic en el botón cambio de grua #}
            \$(\".crane-button\").click(function() {
                \$.ajax({
                    url:'{{ path('operators_change_crane_modal') }}',
                    data: {
                        'operatorId': arrayChecked[0]
                    },
                    type:\"POST\",
                    success: function(data){
                        \$('#crane_operator_modal_body').html(data);
                        \$('#crane_operator_modal').modal('show');
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
            });
            {#* ############################################## #}


            {#* Funcionalidad al hacer clic en el botón ELIMINAR #}
            \$(\".remove-button\").click(function() {
                swal.fire({
                    title: '',
                    html: '{{\"modal.operator.remove\"|trans}}',
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
                            url:'{{ path('operators_delete') }}',
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

            {#* Funcionalidad al hacer clic en el botón EXPORTAR #}
            \$(\".export-button\").click(function() {
                \$.ajax({
                    url:'{{ path('operators_export_excel') }}',
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
            tableClients = \$('#table_operators').DataTable({
                dom: \"<'row'<'col-sm-12't>><'row'<'col-sm-5'l><'col-sm-7'p>>\",
                order: [1, 'ASC'],
                searching: true,
                rowReorder: true,
                columnDefs: [
                    { orderable: true, className: 'reorder', targets: [1,2,3,4] },
                    { orderable: false, targets: [0,5] }
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
                    url: \"{{ path('operators_table') }}\",
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
                    \$('.checkboxOperators').each(function(){
                        var operator_id = \$(this).data('operator');
                        var index = arrayChecked.indexOf(operator_id);
                        if (index > -1) {
                            \$(this).prop('checked', true);
                        }
                    });

                    // recarga visual
                    reloadCheckbox();

                    // Acción de actualización
                    \$('.checkboxOperators').change(function(){
                        var operator_id = \$(this).data('operator');
                        if (\$(this).is(\":checked\")){
                            if(!arrayChecked.includes(operator_id)) {
                                arrayChecked.push(operator_id);
                            }
                            \$(this).closest(\"tr\").addClass(\"rowSelected\");
                        }
                        else{
                            var index = arrayChecked.indexOf(operator_id);
                            if (index > -1) {
                                arrayChecked.splice(index, 1);
                            }
                            \$(this).closest(\"tr\").removeClass(\"rowSelected\");
                        }

                        {#* Se comprueba que haya checkboxes activos para activar o desactivar botones de modificación #}
                        if(arrayChecked.length) {
                            if(arrayChecked.length > 1) {
                                \$(\".edit-button\").prop('disabled', true);
                                \$(\".crane-button\").prop('disabled', true);
                            } else {
                                \$(\".edit-button\").prop('disabled', false);
                                \$(\".crane-button\").prop('disabled', false);
                            }

                            \$(\".remove-button\").prop('disabled', false);
                        } else {
                            \$(\".edit-button\").prop('disabled', true);
                            \$(\".crane-button\").prop('disabled', true);
                            \$(\".remove-button\").prop('disabled', true);
                        }

                    });// change

                    var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.check_status'));
                    
                    switch_elems.forEach(function(html){
                        new Switchery(html, {disabled: false, 
                                             disabledOpacity: 1,
                                             color: \"var(--main-blue)\",
                                             secondaryColor: '#cdd3db'
                                            });
                    });

                    \$('.availabilityOperatorCheck').change(function(){
                        let operator_id = \$(this).data('operator');
                        let new_status =  \$(this).is(':checked')
                        let reference = this;
                        \$.ajax({
                            url:'{{ path(\"operators_change_availability\") }}',
                            data: {
                                'operatorId': operator_id,
                                'newStatus': (new_status ? 'on' : 'off')
                            },
                            type:\"POST\",
                            success: function(data){
                                if(data['status']) {
                                    swal.fire({
                                        title: data.data.msg,
                                        html: \"\",
                                        icon: 'success',
                                        showConfirmButton: true
                                    });
                                } else {
                                    swal.fire({
                                        title: data.errors.msg,
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                    reloadDataTable();
                                }
                            },
                            error:function(err){
                                swal.fire({
                                    title: err,
                                    html: '',
                                    icon: 'error',
                                    showConfirmButton: true
                                });
                            }
                        });
                    });
                },
                columns: [
                    {data: {}, render: function(data, row) {
                        var html = \"<input type='checkbox' class='checkboxOperators imgCheckbox' data-operator='\"+data.id+\"'/>\";
                        return html;
                        }
                    },
                    {data: 'reference'},
                    {data: 'mobile_phone'},
                    {data: {}, render: function(data, row) {
                            if( data['availability_status'] == 1 ) {
                                let html= '<div title=\"{{\"data_management.operator.availability_status.available\"|trans}}\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"availabilityOperatorCheck check_status switchery\" type=\"checkbox\" data-operator=\"' + data['id'] + '\" checked> </div>';

                                return html;
                            } else if( data['availability_status'] == 2 ) {
                                let html= '<div title=\"{{\"data_management.operator.availability_status.not_available\"|trans}}\" style=\"display: flex; align-items: center;\">';
                                html += '<input class=\"availabilityOperatorCheck check_status\" type=\"checkbox\" data-operator=\"' + data['id'] + '\"> </div>';
                                
                                return html;
                            } else {
                                return \"\";
                            }
                        }
                    },
                    {data: 'assigned_crane'},
                    {data: {}, render: function(data, row) {

                            html = '<form action=\"{{ path(\"detail_operator\") }}\" method=\"POST\" target=\"_blank\" style=\"margin: 0; display: flex; justify-content: center; align-items: center;\">';
                            html += '<input type=\"hidden\" name=\"operatorId\" value=\"'+ data[\"id\"] +'\">';
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
            \$('.filter_inputs').each(function () {
                form_filters[\$(this).attr('name')] = \$(this).val();
            });

            var fullFilters = {
                'form_filters': form_filters,
                'search_filter': \$('#search-input').val()
            }

            \$(\"#table_operators\").DataTable().search(JSON.stringify(fullFilters)).draw();

            {#* Descomentar para que los checkboxes se reinicien recargar el dataTable #}
            arrayChecked = [];

            {#* Desactivamos los botones de modificación en caso de estar arrayChecked vacío #}
            if(!arrayChecked.length) {
                \$(\".edit-button\").prop('disabled', true);
                \$(\".remove-button\").prop('disabled', true);
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
            
            \$('.checkboxOperators').each(function(){
                \$(this).prop('checked', active);
                \$(this).trigger('update');
                \$(this).trigger('change');
            });// change
        });

    </script>

{% endblock %}", "frontend/collaborator/operators.html.twig", "/var/www/rira_web/templates/frontend/collaborator/operators.html.twig");
    }
}
