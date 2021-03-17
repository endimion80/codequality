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

/* frontend/collaborator/operator_crane_modal.html.twig */
class __TwigTemplate_6189f213c0f29d66701d77bb8404f69a0e0b55a8a1c15ec2e72837e705a84039 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/operator_crane_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/operator_crane_modal.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 2, $this->source); })()), "getAvailabilityOperatorStatus", [], "method", false, false, false, 2), "getCode", [], "method", false, false, false, 2) == "available")) {
            // line 3
            echo "
    <div class=\"row\">
        <div class=\"col-12\">
            <h4>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.title.assign_crane_operator_denied"), "html", null, true);
            echo "</h4>
        </div>
    </div>

    <div class=\"row\" style='margin-top: 25px;'>
        <div class=\"col-12\" style='text-align:center;'>
            <button type=\"button\" id=\"close_modal\" class=\"btn btn-primary\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
            echo "</button>       
        </div>
    </div>

    <script>
        \$('#close_modal').click(function(){
            \$('#crane_operator_modal').modal('hide');
        });
    </script>

";
        } else {
            // line 23
            echo "
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6\">
            <div class=\"labelGrey\" style=\"margin-bottom: 20px; margin-top: 20px;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.assigned_crane"), "html", null, true);
            echo ":</div>
            <select id=\"assignedCrane-input\" name=\"assignedCrane\" class=\"form-control filter_inputs select_inputs chosen-select\">
                <option value=\"\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail_operator.select.assigned_crane.placeholder"), "html", null, true);
            echo " </option>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["operatorAvailableCranes"]) || array_key_exists("operatorAvailableCranes", $context) ? $context["operatorAvailableCranes"] : (function () { throw new RuntimeError('Variable "operatorAvailableCranes" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["opAvCrane"]) {
                // line 30
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 30, $this->source); })()), "crane", [], "any", false, false, false, 30) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 30, $this->source); })()), "crane", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opAvCrane"], "crane", [], "any", false, false, false, 30), "reference", [], "any", false, false, false, 30), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opAvCrane'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </select>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-12\" style='text-align:right;'>
            <button type=\"button\" id=\"modal_assign_crane\" class=\"btn btn-primary\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save"), "html", null, true);
            echo "</button>       
        </div>
    </div>

    <script>
        \$('#assignedCrane-input').chosen();
        \$('#modal_assign_crane').click(function(){
            \$.ajax({
                url:'";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operators_change_crane");
            echo "',
                data: {
                    'operatorId': '";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operator"]) || array_key_exists("operator", $context) ? $context["operator"] : (function () { throw new RuntimeError('Variable "operator" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "',
                    'craneId': \$('#assignedCrane-input').val()
                },
                type:\"POST\",
                success: function(data){
                    if (data.status){
                        swal.fire({
                            title: '";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.saved"), "html", null, true);
            echo "',
                            html: '',
                            icon: 'success',
                            showConfirmButton: true
                        });
                    }
                    else{
                        swal.fire({
                            title: '";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.error"), "html", null, true);
            echo "',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }

                    \$('#crane_operator_modal_body').empty();
                    \$('#crane_operator_modal').modal('hide');
                    arrayChecked = []; // vaciamos el listado
                    // para que no se pueda volver a usar el boton
                    // hasta que no se seleccione otro operador
                    \$(\".crane-button\").prop('disabled', true); 
                    reloadDataTable();
                },
                error: function(err){
                    swal.fire({
                        title: '";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.general.operation.error"), "html", null, true);
            echo "',
                        html: '',
                        icon: 'error',
                        showConfirmButton: true
                    });
                }
            });
        });
    </script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/operator_crane_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 80,  154 => 63,  143 => 55,  133 => 48,  128 => 46,  117 => 38,  109 => 32,  94 => 30,  90 => 29,  86 => 28,  81 => 26,  76 => 23,  62 => 12,  53 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if operator.getAvailabilityOperatorStatus().getCode() == 'available' %}

    <div class=\"row\">
        <div class=\"col-12\">
            <h4>{{\"modal.title.assign_crane_operator_denied\"|trans}}</h4>
        </div>
    </div>

    <div class=\"row\" style='margin-top: 25px;'>
        <div class=\"col-12\" style='text-align:center;'>
            <button type=\"button\" id=\"close_modal\" class=\"btn btn-primary\">{{ (\"general.accept\")|trans }}</button>       
        </div>
    </div>

    <script>
        \$('#close_modal').click(function(){
            \$('#crane_operator_modal').modal('hide');
        });
    </script>

{% else %}

    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6\">
            <div class=\"labelGrey\" style=\"margin-bottom: 20px; margin-top: 20px;\">{{\"detail_operator.assigned_crane\"|trans}}:</div>
            <select id=\"assignedCrane-input\" name=\"assignedCrane\" class=\"form-control filter_inputs select_inputs chosen-select\">
                <option value=\"\"> {{\"detail_operator.select.assigned_crane.placeholder\"|trans}} </option>
                {% for opAvCrane in operatorAvailableCranes %}
                    <option value=\"{{opAvCrane.crane.id}}\" {% if operator.crane and (operator.crane.id == opAvCrane.crane.id)%}selected{% endif %}>{{opAvCrane.crane.reference}}</option>
                {% endfor %}
            </select>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-12\" style='text-align:right;'>
            <button type=\"button\" id=\"modal_assign_crane\" class=\"btn btn-primary\">{{ (\"general.save\")|trans }}</button>       
        </div>
    </div>

    <script>
        \$('#assignedCrane-input').chosen();
        \$('#modal_assign_crane').click(function(){
            \$.ajax({
                url:'{{ path('operators_change_crane') }}',
                data: {
                    'operatorId': '{{ operator.id }}',
                    'craneId': \$('#assignedCrane-input').val()
                },
                type:\"POST\",
                success: function(data){
                    if (data.status){
                        swal.fire({
                            title: '{{ (\"general.saved\")|trans }}',
                            html: '',
                            icon: 'success',
                            showConfirmButton: true
                        });
                    }
                    else{
                        swal.fire({
                            title: '{{ (\"modal.general.operation.error\")|trans }}',
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }

                    \$('#crane_operator_modal_body').empty();
                    \$('#crane_operator_modal').modal('hide');
                    arrayChecked = []; // vaciamos el listado
                    // para que no se pueda volver a usar el boton
                    // hasta que no se seleccione otro operador
                    \$(\".crane-button\").prop('disabled', true); 
                    reloadDataTable();
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
    </script>
{% endif %}", "frontend/collaborator/operator_crane_modal.html.twig", "/var/www/rira_web/templates/frontend/collaborator/operator_crane_modal.html.twig");
    }
}
