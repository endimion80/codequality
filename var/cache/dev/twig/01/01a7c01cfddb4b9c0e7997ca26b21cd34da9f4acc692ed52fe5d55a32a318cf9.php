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

/* frontend/collaborator/userProfile.html.twig */
class __TwigTemplate_43cbc72be877e2344d7c19d3957b10d9b79ae37e1e8056917b2b541dff6a1d91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/userProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/userProfile.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/userProfile.html.twig", 1);
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
    <style>
        .filter_inputs{
            width: 100%;
        }
        #changePasswordContent{
            display: none;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.profile.header"), "html", null, true);
        echo "</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div class=\"row\">
            <div class=\"col-md-3 alignRight\">
                <label class='labelGrey'>
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.email"), "html", null, true);
        echo ":
                </label>
            </div>
            <div class=\"col-md-9\">
                <div>
                    <label class='labelInput'>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "html", null, true);
        echo "</label>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-3 alignRight\">
                <label class='labelGrey'>
                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.logs.user"), "html", null, true);
        echo ":
                </label>
            </div>
            <div class=\"col-md-3\">
                <div>
                    <input id ='name' type='text' class='form-control filter_inputs' placeholder='";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.nameInput"), "html", null, true);
        echo "' value='";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "'/>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-3 alignRight\">
                <label class='labelGrey'>
                    ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.form.password"), "html", null, true);
        echo ":
                </label>
            </div>
            <div class=\"col-md-3\">
                
                <button id='btnChangePassword' class='btnDefaultMini'>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.new_password"), "html", null, true);
        echo "</button>

                <div id='changePasswordContent'>
                    <div style='margin-bottom: 15px;'>
                        <input id ='password' type='password' class='form-control filter_inputs' placeholder='";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.title"), "html", null, true);
        echo "' value=''/>
                    </div>
                    <div>
                        <input id ='password2' type='password' class='form-control filter_inputs' placeholder='";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.new_password_check"), "html", null, true);
        echo "' value=''/>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-12\" style='text-align: right;'>
                <button class='btnSave btnDefault'>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save"), "html", null, true);
        echo "</button>
            </div>
        </div>

        
    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function(){
            \$(\"#top-profile\").css({\"background-color\": \"var(--main-blue)\"});    
            \$(\"#top-profile img\").css({\"filter\": \"grayscale(100%) brightness(200%)\"});    

            \$('#btnChangePassword').click(function(){
                \$('#btnChangePassword').fadeOut(function(){
                    \$('#changePasswordContent').fadeIn();
                });
            });

            \$('.btnSave').click(function(){
                var password = '';
                var error = false;
                if (\$('#password').val() != ''){
                    password = \$('#password').val();
                    if (\$('#password').val() != \$('#password2').val() ){
                        Swal.fire(\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.form.not_same"), "html", null, true);
        echo "\", '', 'error');
                        error = true;
                    }
                }
                
                if (!error){
                    swal.fire({
                        text: \"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.saveChanges"), "html", null, true);
        echo "\",
                        title: '',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: \"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.confirm"), "html", null, true);
        echo "\",
                        cancelButtonText: \"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\",
                        onClose: () => {}
                    }).then((result) => {
                        if (result.isConfirmed) {

                            \$.ajax({
                                url:'";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_save");
        echo "',
                                data: {
                                    'name': \$('#name').val(),
                                    'password': password
                                },
                                type:\"POST\",
                                dataType: \"json\",
                                success: function(data){
                                    //console.log(data);
                                    if (data.status)
                                        Swal.fire(\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.saved"), "html", null, true);
        echo "\", '', 'success');
                                    else
                                        Swal.fire(\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.error"), "html", null, true);
        echo "\", data.errors.join(', '), 'error');
                                },
                                error:function(err){
                                    swal.fire({
                                        title: '";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.error"), "html", null, true);
        echo "',
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            });
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
        return "frontend/collaborator/userProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 147,  323 => 143,  318 => 141,  305 => 131,  296 => 125,  292 => 124,  285 => 120,  275 => 113,  252 => 94,  242 => 93,  222 => 82,  211 => 74,  205 => 71,  198 => 67,  190 => 62,  177 => 54,  169 => 49,  158 => 41,  150 => 36,  135 => 24,  129 => 20,  119 => 19,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-data_management.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-asitur_datatable.css') }}\">
    <style>
        .filter_inputs{
            width: 100%;
        }
        #changePasswordContent{
            display: none;
        }
    </style>
{% endblock %}

{% block content %}

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">{{\"general.profile.header\"|trans}}</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">

        <div class=\"row\">
            <div class=\"col-md-3 alignRight\">
                <label class='labelGrey'>
                    {{\"login.form.email\"|trans}}:
                </label>
            </div>
            <div class=\"col-md-9\">
                <div>
                    <label class='labelInput'>{{user.email}}</label>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-3 alignRight\">
                <label class='labelGrey'>
                    {{\"dataTable.logs.user\"|trans}}:
                </label>
            </div>
            <div class=\"col-md-3\">
                <div>
                    <input id ='name' type='text' class='form-control filter_inputs' placeholder='{{\"profile.nameInput\"|trans}}' value='{{ user.name }}'/>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-3 alignRight\">
                <label class='labelGrey'>
                    {{\"login.form.password\"|trans}}:
                </label>
            </div>
            <div class=\"col-md-3\">
                
                <button id='btnChangePassword' class='btnDefaultMini'>{{\"change_password.form.new_password\"|trans}}</button>

                <div id='changePasswordContent'>
                    <div style='margin-bottom: 15px;'>
                        <input id ='password' type='password' class='form-control filter_inputs' placeholder='{{\"change_password.form.title\"|trans}}' value=''/>
                    </div>
                    <div>
                        <input id ='password2' type='password' class='form-control filter_inputs' placeholder='{{\"change_password.form.new_password_check\"|trans}}' value=''/>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-12\" style='text-align: right;'>
                <button class='btnSave btnDefault'>{{\"general.save\"|trans}}</button>
            </div>
        </div>

        
    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}

    <script>
        \$(document).ready(function(){
            \$(\"#top-profile\").css({\"background-color\": \"var(--main-blue)\"});    
            \$(\"#top-profile img\").css({\"filter\": \"grayscale(100%) brightness(200%)\"});    

            \$('#btnChangePassword').click(function(){
                \$('#btnChangePassword').fadeOut(function(){
                    \$('#changePasswordContent').fadeIn();
                });
            });

            \$('.btnSave').click(function(){
                var password = '';
                var error = false;
                if (\$('#password').val() != ''){
                    password = \$('#password').val();
                    if (\$('#password').val() != \$('#password2').val() ){
                        Swal.fire(\"{{'change_password.form.not_same'|trans}}\", '', 'error');
                        error = true;
                    }
                }
                
                if (!error){
                    swal.fire({
                        text: \"{{'general.saveChanges'|trans}}\",
                        title: '',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: \"{{'general.confirm'|trans}}\",
                        cancelButtonText: \"{{'general.cancel'|trans}}\",
                        onClose: () => {}
                    }).then((result) => {
                        if (result.isConfirmed) {

                            \$.ajax({
                                url:'{{ path('user_profile_save') }}',
                                data: {
                                    'name': \$('#name').val(),
                                    'password': password
                                },
                                type:\"POST\",
                                dataType: \"json\",
                                success: function(data){
                                    //console.log(data);
                                    if (data.status)
                                        Swal.fire(\"{{'general.saved'|trans}}\", '', 'success');
                                    else
                                        Swal.fire(\"{{'general.form.error'|trans}}\", data.errors.join(', '), 'error');
                                },
                                error:function(err){
                                    swal.fire({
                                        title: '{{ (\"general.form.error\")|trans }}',
                                        html: '',
                                        icon: 'error',
                                        showConfirmButton: true
                                    });
                                }
                            });
                        }
                    });
                }

            });
        });
    </script>

{% endblock %}", "frontend/collaborator/userProfile.html.twig", "/var/www/rira_web/templates/frontend/collaborator/userProfile.html.twig");
    }
}
