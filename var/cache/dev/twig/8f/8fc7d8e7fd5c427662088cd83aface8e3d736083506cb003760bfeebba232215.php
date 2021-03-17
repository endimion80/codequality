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

/* security/login.html.twig */
class __TwigTemplate_a94962e31938ce2b3b2b07e337e7204f3df461cd88ec6481e5e71778c870f78d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
";
        // line 14
        $this->loadTemplate("security/forgot_pass_modal.html.twig", "security/login.html.twig", 14)->display($context);
        // line 15
        echo "
    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur-blanco.png"), "html", null, true);
        echo "' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel frontend_login_full_panel\">
                
                ";
        // line 27
        echo "                <!--XXXXXXXXXX-->
                <!-- Testing -->
                <div style=\"text-align: left;\">
                    <button id='log1Test' class='btn btn-lg btn-primary' style='    margin: 10px;
                                                                                    font-size: 15px;
                                                                                    padding: 2px 10px;'>Colaborator1 </button>
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_login");
        echo "\" style=\"color: black\"> <span>Backend</span> </a>
                </div>
                <!--XXXXXXXXXX-->
                ";
        // line 37
        echo "                
\t\t\t\t<div class=\"panel-body frontend_login_panel\">
                    ";
        // line 39
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })()), "messageKey", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })()), "messageData", [], "any", false, false, false, 40), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 42
        echo "
                    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "                        <div id=\"already_connected\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.already.connected"), "html", null, true);
            echo " <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_home");
            echo "\" style=\"color:darkslategrey; font-weight: bold;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "username", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>, <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color:#0094d9; font-weight: bold;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.exit"), "html", null, true);
            echo "</a>
                        </div>
                        <br>
                    ";
        }
        // line 49
        echo "
                    <img src='";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/user-icon.png"), "html", null, true);
        echo "' width=\"55px\" height=\"55px\" style='margin-bottom: 33px;'>
                    <h3>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.title"), "html", null, true);
        echo "</h3>
                    <br>
\t\t\t\t\t<form id='login_form' class=\"form-horizontal\" method=\"post\">
                        <label for=\"inputEmail\" class=\"login_label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.email"), "html", null, true);
        echo "</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputEmail\" type=\"email\" name=\"email\" class=\"form-control asitur_input login_input\" placeholder=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.input.placeholder.email"), "html", null, true);
        echo "\" spellcheck=\"false\" required autofocus maxlength=\"100\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"email_remove_btn\" src='";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/equis.png"), "html", null, true);
        echo "' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <br>
                        <label for=\"inputPassword\" class=\"login_label\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.password"), "html", null, true);
        echo "</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputPassword\" type=\"password\" name=\"password\" class=\"form-control asitur_input login_input\" placeholder=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.input.placeholder.password"), "html", null, true);
        echo "\" spellcheck=\"false\" required maxlength=\"255\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"show_password_btn\" src='";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/blue_eye.png"), "html", null, true);
        echo "' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <span><a href='#' id='forgot_password' data-toggle='modal' data-target='#modalNewPassword'>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.password_recovery"), "html", null, true);
        echo "</a></span>
                        <br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 text-left checkbox\">
\t\t\t\t\t\t\t\t<label id=\"remember_me_label\"class=\"form-checkbox form-normal form-primary form-text\">
\t\t\t\t\t\t\t\t<input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" checked> ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.remember_me"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            >
\t\t\t\t\t\t</div>
                        <br><br>
\t\t\t\t\t\t<button id='btnSubmit' class=\"btn btn-lg btn-block btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.submit"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"pad-ver bottom_links\">
\t\t\t\t<a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("policy_privacy");
        echo "\" class=\"btn-link mar-rgt\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.use_conditions_and_confidentiality"), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"";
        // line 94
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

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        \$(\"#inputEmail\").focus();

        /*<!--XXXXXXXXXX Testing -->*/
        \$('#log1Test').click(function(){
            \$('#inputEmail').val('collaborator@gmail.com');
            \$('#inputPassword').val('1234');
        });
        /*<!--XXXXXXXXXX-->*/

        \$('#modalNewPassword').on('shown.bs.modal', function () {
            \$('#forgot-password-mail').trigger('focus');
        });

        \$('#modalNewPassword').on('hidden.bs.modal', function () {
            \$('#forgot-password-mail').val('');
            \$('#retrievePassword').css(\"display\", '');
            \$('#infomessage_br').css(\"display\", 'none');
            \$('#infomessage_hr').css(\"display\", 'none');
            \$('#infomessage').children().remove();
        });

        \$(document).ready(function(){
            
            ";
        // line 132
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
        // line 144
        echo "
            ";
        // line 146
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
        // line 162
        echo "
            \$(\"#retrievePassword\").click(function(){
                \$('#infomessage').children().remove();
                var email = \$('#forgot-password-mail').val();

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        echo "',
                    data: {'email': email}
                }).done(function(data){
                    if (data['status']) {
                        \$('#retrievePassword').css(\"display\", 'none');
                        \$('#infomessage_hr').css(\"display\", '');
                        \$('#infomessage').append(\"<span>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgot_password.check_inbox"), "html", null, true);
        echo "</span>\");
                    } else {
                        if (data['statusCode'] == \"500\") {
                            \$('#infomessage_hr').css(\"display\", '');
                            \$('#infomessage_br').css(\"display\", '');
                            \$('#infomessage').append(\"<span style='color: red;'>";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgot_password.write_email"), "html", null, true);
        echo "</span>\");
                        } else {
                            \$('#infomessage_hr').css(\"display\", '');
                            \$('#infomessage_br').css(\"display\", '');
                            \$('#infomessage').append(\"<span style='color: red;'>";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgot_password.email_not_registered"), "html", null, true);
        echo "</span>\");
                        }
                    }
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 184,  399 => 180,  391 => 175,  382 => 169,  373 => 162,  356 => 146,  353 => 144,  340 => 132,  310 => 105,  300 => 104,  280 => 94,  274 => 93,  265 => 87,  257 => 82,  250 => 78,  242 => 73,  235 => 69,  229 => 66,  224 => 64,  216 => 59,  210 => 56,  205 => 54,  199 => 51,  195 => 50,  192 => 49,  177 => 45,  174 => 44,  172 => 43,  169 => 42,  163 => 40,  161 => 39,  157 => 37,  151 => 33,  143 => 27,  136 => 22,  127 => 15,  125 => 14,  122 => 13,  112 => 12,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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

{% include 'security/forgot_pass_modal.html.twig' %}

    <div id=\"container\" class=\"cls-container\">
\t\t
\t\t<!-- LOGIN FORM -->
\t\t<!--===================================================-->
\t\t<div class=\"cls-content\" style=\"padding-top: 6vh;\">
\t\t\t<div>
\t\t\t\t<img id=\"asitur_logo\" src='{{asset(\"media/logo-asitur-blanco.png\")}}' width=\"180px\" height=\"54px\">
\t\t\t</div>
\t\t\t<div class=\"cls-content-sm panel frontend_login_full_panel\">
                
                {# TODO: ELIMINAR #}
                <!--XXXXXXXXXX-->
                <!-- Testing -->
                <div style=\"text-align: left;\">
                    <button id='log1Test' class='btn btn-lg btn-primary' style='    margin: 10px;
                                                                                    font-size: 15px;
                                                                                    padding: 2px 10px;'>Colaborator1 </button>
                    <a href=\"{{ path('backend_login') }}\" style=\"color: black\"> <span>Backend</span> </a>
                </div>
                <!--XXXXXXXXXX-->
                {# TODO FIN #}
                
\t\t\t\t<div class=\"panel-body frontend_login_panel\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% if app.user %}
                        <div id=\"already_connected\">
                            {{\"login.form.already.connected\"|trans}} <a href=\"{{ path('user_home') }}\" style=\"color:darkslategrey; font-weight: bold;\">{{ app.user.username }}</a>, <a href=\"{{ path('app_logout') }}\" style=\"color:#0094d9; font-weight: bold;\">{{\"general.exit\"|trans}}</a>
                        </div>
                        <br>
                    {% endif %}

                    <img src='{{asset(\"media/user-icon.png\")}}' width=\"55px\" height=\"55px\" style='margin-bottom: 33px;'>
                    <h3>{{\"login.form.title\"|trans}}</h3>
                    <br>
\t\t\t\t\t<form id='login_form' class=\"form-horizontal\" method=\"post\">
                        <label for=\"inputEmail\" class=\"login_label\">{{\"login.form.email\"|trans}}</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputEmail\" type=\"email\" name=\"email\" class=\"form-control asitur_input login_input\" placeholder=\"{{'general.input.placeholder.email'|trans}}\" spellcheck=\"false\" required autofocus maxlength=\"100\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"email_remove_btn\" src='{{asset(\"media/equis.png\")}}' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <br>
                        <label for=\"inputPassword\" class=\"login_label\">{{\"login.form.password\"|trans}}</label>
                        <div class=\"input-group mar-btm\" style=\"width: 100%;\">
                            <input id=\"inputPassword\" type=\"password\" name=\"password\" class=\"form-control asitur_input login_input\" placeholder=\"{{'general.input.placeholder.password'|trans}}\" spellcheck=\"false\" required maxlength=\"255\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-labeled login_input_button\" type=\"button\" tabindex=\"-1\">
                                    <img id=\"show_password_btn\" src='{{asset(\"media/blue_eye.png\")}}' width=\"24px\" height=\"24px\" style=\"display: none;\">
                                </button>
                            </span>
                        </div>
                        <span><a href='#' id='forgot_password' data-toggle='modal' data-target='#modalNewPassword'>{{\"login.form.password_recovery\"|trans}}</a></span>
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
\t\t\t\t\t\t<button id='btnSubmit' class=\"btn btn-lg btn-block btn-primary\" type=\"submit\">
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

        \$(\"#inputEmail\").focus();

        /*<!--XXXXXXXXXX Testing -->*/
        \$('#log1Test').click(function(){
            \$('#inputEmail').val('collaborator@gmail.com');
            \$('#inputPassword').val('1234');
        });
        /*<!--XXXXXXXXXX-->*/

        \$('#modalNewPassword').on('shown.bs.modal', function () {
            \$('#forgot-password-mail').trigger('focus');
        });

        \$('#modalNewPassword').on('hidden.bs.modal', function () {
            \$('#forgot-password-mail').val('');
            \$('#retrievePassword').css(\"display\", '');
            \$('#infomessage_br').css(\"display\", 'none');
            \$('#infomessage_hr').css(\"display\", 'none');
            \$('#infomessage').children().remove();
        });

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

            \$(\"#retrievePassword\").click(function(){
                \$('#infomessage').children().remove();
                var email = \$('#forgot-password-mail').val();

                \$.ajax({
                    type: 'POST',
                    url: '{{ path(\"forgot_password\") }}',
                    data: {'email': email}
                }).done(function(data){
                    if (data['status']) {
                        \$('#retrievePassword').css(\"display\", 'none');
                        \$('#infomessage_hr').css(\"display\", '');
                        \$('#infomessage').append(\"<span>{{ (\"forgot_password.check_inbox\")|trans }}</span>\");
                    } else {
                        if (data['statusCode'] == \"500\") {
                            \$('#infomessage_hr').css(\"display\", '');
                            \$('#infomessage_br').css(\"display\", '');
                            \$('#infomessage').append(\"<span style='color: red;'>{{ (\"forgot_password.write_email\")|trans }}</span>\");
                        } else {
                            \$('#infomessage_hr').css(\"display\", '');
                            \$('#infomessage_br').css(\"display\", '');
                            \$('#infomessage').append(\"<span style='color: red;'>{{ (\"forgot_password.email_not_registered\")|trans }}</span>\");
                        }
                    }
                });

            });
            
        });
   
    </script>
{% endblock %}
", "security/login.html.twig", "/var/www/rira_web/templates/security/login.html.twig");
    }
}
