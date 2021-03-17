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

/* security/login_backend.html.twig */
class __TwigTemplate_12c64ed19130c667e2801891bddf3a39503b93bc1513544f0c0e0a36ad837a32 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login_backend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login_backend.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login_backend.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_base.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_login.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "

\t<div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur-blanco.png"), "html", null, true);
        echo "' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel backend_login_full_panel\">
                
                ";
        // line 28
        echo "                ";
        if ((isset($context["isTestingIP"]) || array_key_exists("isTestingIP", $context) ? $context["isTestingIP"] : (function () { throw new RuntimeError('Variable "isTestingIP" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                <!--XXXXXXXXXX-->
                <!-- Testing -->
                    <div style=\"display: flex;\">
                        <button id='log1Test' class='btn btn-lg btn-primary' style='    margin: 10px;
                                                                                        font-size: 15px;
                                                                                        padding: 2px 10px;'>Backend1 </button>
                    </div>
                ";
        }
        // line 37
        echo "                <!--XXXXXXXXXX-->
                ";
        // line 39
        echo "                
\t\t\t\t<div class=\"panel-body backend_login_panel\">
                    ";
        // line 41
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageKey", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageData", [], "any", false, false, false, 42), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 44
        echo "
                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                        <div id=\"already_connected\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.already.connected"), "html", null, true);
            echo " <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_home");
            echo "\" style=\"color:darkslategrey\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), "html", null, true);
            echo "</b></a>, <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_logout");
            echo "\" style=\"color:#0094d9\"><b>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.exit"), "html", null, true);
            echo "</b></a>
                        </div>
                        <br>
                    ";
        }
        // line 51
        echo "
                    <img src='";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/user-icon.png"), "html", null, true);
        echo "' width=\"55px\" height=\"55px\" style='margin-bottom: 33px;'>
                    <h3>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.title"), "html", null, true);
        echo "</h3>
                    <br>
\t\t\t\t\t<form id='login_form' class=\"form-horizontal\" method=\"post\">
                        <label for=\"inputEmail\" class=\"login_label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.email"), "html", null, true);
        echo "</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputEmail\" type=\"email\" name=\"backend_email\" class=\"form-control asitur_input login_input\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.input.placeholder.email"), "html", null, true);
        echo "\" spellcheck=\"false\" required autofocus>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"email_remove_btn\" src='";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
        echo "' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <br>
                        <label for=\"inputPassword\" class=\"login_label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.password"), "html", null, true);
        echo "</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputPassword\" type=\"password\" name=\"backend_password\" class=\"form-control asitur_input login_input\" placeholder=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.input.placeholder.password"), "html", null, true);
        echo "\" spellcheck=\"false\" required>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"show_password_btn\" src='";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/blue_eye.png"), "html", null, true);
        echo "' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 text-left checkbox\">
\t\t\t\t\t\t\t\t<label id=\"remember_me_label\"class=\"form-checkbox form-normal form-primary form-text\">
\t\t\t\t\t\t\t\t<input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" checked> ";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.remember_me"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            >
\t\t\t\t\t\t</div>
                        <br><br>
\t\t\t\t\t\t<button id='btnSubmit' class=\"btn btn-lg btn-block btn-dark\" type=\"submit\">
\t\t\t\t\t\t\t ";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.submit"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"pad-ver bottom_links\">
\t\t\t\t<a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("policy_privacy");
        echo "\" class=\"btn-link mar-rgt\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.use_conditions_and_confidentiality"), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("policy_cookies");
        echo "\" class=\"btn-link mar-lft\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cookies_policy"), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t\t<!--===================================================-->
\t\t
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        /*<!--XXXXXXXXXX Testing -->*/
        ";
        // line 110
        if ((isset($context["isTestingIP"]) || array_key_exists("isTestingIP", $context) ? $context["isTestingIP"] : (function () { throw new RuntimeError('Variable "isTestingIP" does not exist.', 110, $this->source); })())) {
            // line 111
            echo "        \$('#log1Test').click(function(){
            \$('#inputEmail').val('backend@gmail.com').keyup();
            \$('#inputPassword').val('1234').keyup();
        });
        ";
        }
        // line 116
        echo "        /*<!--XXXXXXXXXX-->*/

        \$(document).ready(function(){
            
            ";
        // line 121
        echo "            \$(\"#inputEmail\").keyup(function(){
                if(\$(\"#inputEmail\").val() != \"\") {
                    \$(\"#email_remove_btn\").css({\"display\": \"\"});
                } else {
                    \$(\"#email_remove_btn\").css({\"display\": \"none\"});
                }
            });

            \$(\"#email_remove_btn\").click(function(){
                \$(\"#inputEmail\").val(\"\").keyup();
            });
            ";
        // line 133
        echo "
            ";
        // line 135
        echo "            \$(\"#inputPassword\").keyup(function(){
                if(\$(\"#inputPassword\").val() != \"\") {
                    \$(\"#show_password_btn\").css({\"display\": \"\"});
                } else {
                    \$(\"#show_password_btn\").css({\"display\": \"none\"});
                }
            });

            \$(\"#show_password_btn\").click(function(){
                if( \$(\"#inputPassword\").attr(\"type\") == \"password\") {
                    \$(\"#inputPassword\").attr(\"type\", \"text\");
                } else {
                    \$(\"#inputPassword\").attr(\"type\", \"password\");
                }
            });
            ";
        // line 151
        echo "
        });


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login_backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 151,  344 => 135,  341 => 133,  328 => 121,  322 => 116,  315 => 111,  313 => 110,  305 => 106,  295 => 105,  275 => 95,  269 => 94,  260 => 88,  252 => 83,  245 => 79,  234 => 71,  228 => 68,  223 => 66,  215 => 61,  209 => 58,  204 => 56,  198 => 53,  194 => 52,  191 => 51,  176 => 47,  173 => 46,  171 => 45,  168 => 44,  162 => 42,  160 => 41,  156 => 39,  153 => 37,  143 => 29,  140 => 28,  133 => 23,  123 => 15,  113 => 14,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_login.css') }}\">

{% endblock %}


{% block body %}


\t<div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='{{asset(\"media/logo-asitur-blanco.png\")}}' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel backend_login_full_panel\">
                
                {# TODO: ELIMINAR #}
                {% if isTestingIP %}
                <!--XXXXXXXXXX-->
                <!-- Testing -->
                    <div style=\"display: flex;\">
                        <button id='log1Test' class='btn btn-lg btn-primary' style='    margin: 10px;
                                                                                        font-size: 15px;
                                                                                        padding: 2px 10px;'>Backend1 </button>
                    </div>
                {% endif %}
                <!--XXXXXXXXXX-->
                {# TODO FIN #}
                
\t\t\t\t<div class=\"panel-body backend_login_panel\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% if app.user %}
                        <div id=\"already_connected\">
                            {{\"login.form.already.connected\"|trans}} <a href=\"{{ path('backend_home') }}\" style=\"color:darkslategrey\"><b>{{ app.user.username }}</b></a>, <a href=\"{{ path('backend_logout') }}\" style=\"color:#0094d9\"><b>{{\"general.exit\"|trans}}</b></a>
                        </div>
                        <br>
                    {% endif %}

                    <img src='{{asset(\"media/user-icon.png\")}}' width=\"55px\" height=\"55px\" style='margin-bottom: 33px;'>
                    <h3>{{\"login.form.title\"|trans}}</h3>
                    <br>
\t\t\t\t\t<form id='login_form' class=\"form-horizontal\" method=\"post\">
                        <label for=\"inputEmail\" class=\"login_label\">{{\"login.form.email\"|trans}}</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputEmail\" type=\"email\" name=\"backend_email\" class=\"form-control asitur_input login_input\" placeholder=\"{{'general.input.placeholder.email'|trans}}\" spellcheck=\"false\" required autofocus>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"email_remove_btn\" src='{{asset(\"media/equis.png\")}}' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <br>
                        <label for=\"inputPassword\" class=\"login_label\">{{\"login.form.password\"|trans}}</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputPassword\" type=\"password\" name=\"backend_password\" class=\"form-control asitur_input login_input\" placeholder=\"{{'general.input.placeholder.password'|trans}}\" spellcheck=\"false\" required>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"show_password_btn\" src='{{asset(\"media/blue_eye.png\")}}' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 text-left checkbox\">
\t\t\t\t\t\t\t\t<label id=\"remember_me_label\"class=\"form-checkbox form-normal form-primary form-text\">
\t\t\t\t\t\t\t\t<input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" checked> {{\"login.form.remember_me\"|trans}}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"{{ csrf_token('authenticate') }}\"
                            >
\t\t\t\t\t\t</div>
                        <br><br>
\t\t\t\t\t\t<button id='btnSubmit' class=\"btn btn-lg btn-block btn-dark\" type=\"submit\">
\t\t\t\t\t\t\t {{\"login.form.submit\"|trans}}
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"pad-ver bottom_links\">
\t\t\t\t<a href=\"{{ path('policy_privacy') }}\" class=\"btn-link mar-rgt\">{{\"general.use_conditions_and_confidentiality\"|trans}}</a>
\t\t\t\t<a href=\"{{ path('policy_cookies') }}\" class=\"btn-link mar-lft\">{{\"general.cookies_policy\"|trans}}</a>
\t\t\t</div>
\t\t</div>
\t\t<!--===================================================-->
\t\t
\t</div>

{% endblock %}


{% block javascripts %}
    {{parent()}}
    <script>

        /*<!--XXXXXXXXXX Testing -->*/
        {% if isTestingIP %}
        \$('#log1Test').click(function(){
            \$('#inputEmail').val('backend@gmail.com').keyup();
            \$('#inputPassword').val('1234').keyup();
        });
        {% endif %}
        /*<!--XXXXXXXXXX-->*/

        \$(document).ready(function(){
            
            {#* Email input  #}
            \$(\"#inputEmail\").keyup(function(){
                if(\$(\"#inputEmail\").val() != \"\") {
                    \$(\"#email_remove_btn\").css({\"display\": \"\"});
                } else {
                    \$(\"#email_remove_btn\").css({\"display\": \"none\"});
                }
            });

            \$(\"#email_remove_btn\").click(function(){
                \$(\"#inputEmail\").val(\"\").keyup();
            });
            {#* ************ #}

            {#* Password input  #}
            \$(\"#inputPassword\").keyup(function(){
                if(\$(\"#inputPassword\").val() != \"\") {
                    \$(\"#show_password_btn\").css({\"display\": \"\"});
                } else {
                    \$(\"#show_password_btn\").css({\"display\": \"none\"});
                }
            });

            \$(\"#show_password_btn\").click(function(){
                if( \$(\"#inputPassword\").attr(\"type\") == \"password\") {
                    \$(\"#inputPassword\").attr(\"type\", \"text\");
                } else {
                    \$(\"#inputPassword\").attr(\"type\", \"password\");
                }
            });
            {#* ***********  #}

        });


    </script>
{% endblock %}
", "security/login_backend.html.twig", "/var/www/rira_web/templates/security/login_backend.html.twig");
    }
}
