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

/* security/recover_password.html.twig */
class __TwigTemplate_9b571bcc13102a649e604c6e45b13a6fd276ea998d933b5f2fedafa9eca598af extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/recover_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/recover_password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/recover_password.html.twig", 1);
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
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-base.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur-blanco.png"), "html", null, true);
        echo "' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel recover_password_full_panel\">
                
\t\t\t\t<div class=\"panel-body recover_password_panel\">

                    <h3>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.title"), "html", null, true);
        echo "</h3>
                    <br>
\t\t\t\t\t<form id='passwordRecovery_form' class=\"form-horizontal\" method=\"post\">
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <label for=\"inputPassword\" style=\"float: left;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.new_password"), "html", null, true);
        echo ":</label>
                            <input id=\"inputPassword\" type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" spellcheck=\"false\" maxlength=\"255\" style='width: 100%' required autofocus>
                        </div>
                        <br>
                        <div class=\"input-group mar-btm\" style=\"width: 100%; margin-bottom: 40px;\">
                            <label for=\"inputPassword_2\" style=\"float: left;\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.new_password_check"), "html", null, true);
        echo ":</label>
                            <input id=\"inputPassword_2\" type=\"password\" name=\"password_2\"  class=\"form-control\" placeholder=\"Password\" spellcheck=\"false\" maxlength=\"255\" required>
                        </div>
                        <div>
                            <button id=\"form_submit\" class=\"btn btn-lg btn-block btn-primary\" type=\"submit\">
                                ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
        echo "
                            </button>
                        </div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===================================================-->
\t\t
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            
            \$(\"#form_submit\").click(function(e){
                e.preventDefault();
                var password  = \$('#inputPassword').val();
                var password2 = \$('#inputPassword_2').val();
                var recovery_token  = \"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["recovery_token"]) || array_key_exists("recovery_token", $context) ? $context["recovery_token"] : (function () { throw new RuntimeError('Variable "recovery_token" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "\";

                if(password !== password2) {
                    swal.fire('";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.form.passwords_not_matching", [], "messages");
        echo "','','error');
                } else {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_password");
        echo "',
                        data: {'password': password,
                            'password2': password2,
                            'recovery_token': recovery_token  
                            },
                        success: function(data){
                            if (data['status']) {
                                swal.fire({
                                    text: data['message'],
                                    title: '',
                                    icon: 'success',
                                    onClose: () => {
                                        location.href = \"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\";
                                    }
                                });
                            } else {
                                swal.fire({
                                    text: data['message'],
                                    title: '',
                                    icon: 'error',
                                    onClose: () => {
                                        location.href = \"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\";
                                    }
                                });
                            }
                        }
                    });
                }

            });
            
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/recover_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 91,  235 => 82,  220 => 70,  213 => 66,  207 => 63,  195 => 55,  185 => 54,  163 => 40,  155 => 35,  147 => 30,  140 => 26,  131 => 20,  122 => 13,  112 => 12,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-login.css') }}\">
{% endblock %}

{% block body %}

    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='{{asset(\"media/logo-asitur-blanco.png\")}}' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel recover_password_full_panel\">
                
\t\t\t\t<div class=\"panel-body recover_password_panel\">

                    <h3>{{\"change_password.form.title\"|trans}}</h3>
                    <br>
\t\t\t\t\t<form id='passwordRecovery_form' class=\"form-horizontal\" method=\"post\">
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <label for=\"inputPassword\" style=\"float: left;\">{{\"change_password.form.new_password\"|trans}}:</label>
                            <input id=\"inputPassword\" type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" spellcheck=\"false\" maxlength=\"255\" style='width: 100%' required autofocus>
                        </div>
                        <br>
                        <div class=\"input-group mar-btm\" style=\"width: 100%; margin-bottom: 40px;\">
                            <label for=\"inputPassword_2\" style=\"float: left;\">{{\"change_password.form.new_password_check\"|trans}}:</label>
                            <input id=\"inputPassword_2\" type=\"password\" name=\"password_2\"  class=\"form-control\" placeholder=\"Password\" spellcheck=\"false\" maxlength=\"255\" required>
                        </div>
                        <div>
                            <button id=\"form_submit\" class=\"btn btn-lg btn-block btn-primary\" type=\"submit\">
                                {{\"general.accept\"|trans}}
                            </button>
                        </div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===================================================-->
\t\t
\t</div>

{% endblock %}


{% block javascripts %}
    {{parent()}}
    <script>
        \$(document).ready(function(){
            
            \$(\"#form_submit\").click(function(e){
                e.preventDefault();
                var password  = \$('#inputPassword').val();
                var password2 = \$('#inputPassword_2').val();
                var recovery_token  = \"{{ recovery_token }}\";

                if(password !== password2) {
                    swal.fire('{% trans %}change_password.form.passwords_not_matching{% endtrans %}','','error');
                } else {
                    \$.ajax({
                        type: 'POST',
                        url: '{{ path('change_password') }}',
                        data: {'password': password,
                            'password2': password2,
                            'recovery_token': recovery_token  
                            },
                        success: function(data){
                            if (data['status']) {
                                swal.fire({
                                    text: data['message'],
                                    title: '',
                                    icon: 'success',
                                    onClose: () => {
                                        location.href = \"{{ path( 'app_login' ) }}\";
                                    }
                                });
                            } else {
                                swal.fire({
                                    text: data['message'],
                                    title: '',
                                    icon: 'error',
                                    onClose: () => {
                                        location.href = \"{{ path( 'app_login' ) }}\";
                                    }
                                });
                            }
                        }
                    });
                }

            });
            
        });
    </script>
{% endblock %}
", "security/recover_password.html.twig", "/var/www/rira_web/templates/security/recover_password.html.twig");
    }
}
