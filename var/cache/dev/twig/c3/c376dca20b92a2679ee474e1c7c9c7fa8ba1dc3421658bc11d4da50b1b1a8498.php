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

/* security/forgot_pass_modal.html.twig */
class __TwigTemplate_82516cacbbf2d6384c03b45edce89da62a9ff8568e4251dd8a69223ed2637a76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgot_pass_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgot_pass_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modalNewPassword\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center; padding: 15px 25px; text-align: justify;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 id=\"myModalLabel\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgot_password.title"), "html", null, true);
        echo "</h4>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgot_password.subtitle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-body\" style=\"padding: 15px 25px; min-height: auto;\">
                <div class=\"row form-row\">
                    <div class=\"col-md-12\">
                        <input id=\"forgot-password-mail\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgot_password.email.placeholder"), "html", null, true);
        echo "\" maxlength=\"100\">
                    </div>
                </div>
            </div>
            <hr id=\"infomessage_hr\" style=\"width: 100%; display: none;\">
            <div id=\"infomessage\" style=\"text-align: center; margin: 0px 10px;\"></div>
            <br id=\"infomessage_br\" style=\"display: none;\">
            <div class=\"modal-footer\" style=\"padding: 15px 25px;\">
                <button type=\"button\" id=\"retrievePassword\" class=\"btn btn-primary\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.send"), "html", null, true);
        echo "</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/forgot_pass_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  62 => 12,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"modalNewPassword\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center; padding: 15px 25px; text-align: justify;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 id=\"myModalLabel\">{{ (\"forgot_password.title\")|trans }}</h4>
                <p>{{ (\"forgot_password.subtitle\")|trans }}</p>
            </div>
            <div class=\"modal-body\" style=\"padding: 15px 25px; min-height: auto;\">
                <div class=\"row form-row\">
                    <div class=\"col-md-12\">
                        <input id=\"forgot-password-mail\" type=\"text\" class=\"form-control\" placeholder=\"{{ ('forgot_password.email.placeholder')|trans }}\" maxlength=\"100\">
                    </div>
                </div>
            </div>
            <hr id=\"infomessage_hr\" style=\"width: 100%; display: none;\">
            <div id=\"infomessage\" style=\"text-align: center; margin: 0px 10px;\"></div>
            <br id=\"infomessage_br\" style=\"display: none;\">
            <div class=\"modal-footer\" style=\"padding: 15px 25px;\">
                <button type=\"button\" id=\"retrievePassword\" class=\"btn btn-primary\">{{ (\"general.send\")|trans }}</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>", "security/forgot_pass_modal.html.twig", "/var/www/rira_web/templates/security/forgot_pass_modal.html.twig");
    }
}
