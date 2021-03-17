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

/* includes/backend_sidebar.html.twig */
class __TwigTemplate_53644ba9bddf187780cc9ef493af5a6759cb3435e26229cbcb207eb7f9829e1e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/backend_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/backend_sidebar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "includes/backend_sidebar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_base.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_sidebar.css"), "html", null, true);
        echo "\">

\t<style>
\t\t.mainnav-lg .fa-mobile {
\t\t\tmargin-right: 8px;
\t\t}

\t\t.mainnav-sm .fa-mobile {
\t\t\tmargin-left: 8px;
\t\t}
\t</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
    <div id=\"container\" class=\"effect mainnav-sm navbar-fixed mainnav-fixed\">
\t\t
\t\t<!--NAVBAR-->
\t\t<!--===================================================-->
\t\t<header id=\"navbar\">

\t\t\t<img id=\"asitur_logo\" src='";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur.png"), "html", null, true);
        echo "' width=\"130px\" height=\"39px\">

\t\t\t<div id=\"navbar-container\" class=\"boxed\">

\t\t\t\t<!--Navigation toogle button-->
\t\t\t\t<!--================================-->
\t\t\t\t<div id=\"backend_sidebar_navbar-header\" class=\"navbar-header\">
                
\t\t\t\t\t<a id=\"backend_sidebar_navbar-brand\" class=\"mainnav-toggle navbar-brand\" href=\"#\">
\t\t\t\t\t\t<img id=\"menu-icon\" class=\"section-icon\" src='";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/menu.png"), "html", null, true);
        echo "' width=\"42px\" height=\"42px\">
\t\t\t\t\t</a>
                    
\t\t\t\t\t<img id=\"asitur_logo_responsive\" src='";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur.png"), "html", null, true);
        echo "' width=\"130px\" height=\"39px\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--================================-->
\t\t\t\t<!--End Navigation toogle button-->


\t\t\t\t<!--Navbar Top from content-->
\t\t\t\t<!--================================-->
\t\t\t\t<div class=\"navbar-content clearfix\">
\t\t\t\t\t<ul class=\"nav navbar-top-links pull-left\">
\t\t\t\t\t</ul>

\t\t\t\t\t<ul class=\"nav navbar-top-links pull-right\">

\t\t\t\t\t\t<!-- Profile -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-profile\" class=\"top-right-buttons\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_profile");
        echo "\">
\t\t\t\t\t\t\t\t<img class=\"top-icons\" src='";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/user-icon.png"), "html", null, true);
        echo "' width=\"42x\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Profile -->

\t\t\t\t\t\t<!-- Settings -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-settings\" class=\"top-right-buttons\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_settings");
        echo "\">
\t\t\t\t\t\t\t\t<img src='";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/settings.png"), "html", null, true);
        echo "' width=\"42x\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Settings -->

\t\t\t\t\t\t<!-- Logout -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-logout\" class=\"top-right-buttons\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_logout");
        echo "\">
\t\t\t\t\t\t\t\t<img src='";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/logout.png"), "html", null, true);
        echo "' width=\"38px\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Logout -->

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!--================================-->
\t\t\t\t<!--End Navbar Top from content-->

\t\t\t</div>
\t\t</header>
\t\t<!--===================================================-->
\t\t<!--END NAVBAR-->

\t\t<div class=\"boxed\">

\t\t\t<!--CONTENT CONTAINER-->
\t\t\t<!--===================================================-->
\t\t\t<div id=\"content-container\">
\t\t\t
            ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "
\t\t\t</div>
\t\t\t<!--===================================================-->
\t\t\t<!--END CONTENT CONTAINER-->


\t\t\t
\t\t\t<!--MAIN NAVIGATION-->
\t\t\t<!--===================================================-->
\t\t\t<nav id=\"mainnav-container\">
\t\t\t\t<div id=\"mainnav\">

\t\t\t\t\t<!--Menu-->
\t\t\t\t\t<!--================================-->
\t\t\t\t\t<div id=\"mainnav-menu-wrap\">
\t\t\t\t\t\t<div class=\"nano\">
\t\t\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t\t\t<ul id=\"mainnav-menu\" class=\"list-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Inicio -->
\t\t\t\t\t\t\t\t\t<li id=\"home_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_home");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home fa-2x\" style=\"margin-left: 2px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.home"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Colaboradores -->
\t\t\t\t\t\t\t\t\t<li id=\"collaboratorUsers_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_collaborators");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.collaborators"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Logs -->
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-archive fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.logs"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"arrow\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--Submenu-->
\t\t\t\t\t\t\t\t\t\t<ul class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_log");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.tab.log"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_emails_log");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.tab.emails"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_sms_log");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.tab.sms"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Traducciones -->
\t\t\t\t\t\t\t\t\t<li id=\"translations_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_translations");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.translations"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Depurador -->
\t\t\t\t\t\t\t\t\t<li id=\"routes_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_debug_maps_route_list");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-2x\" style=\"margin-left: 6px; margin-right: 5px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.routes"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Test APP -->
\t\t\t\t\t\t\t\t\t<li id=\"appTest_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_app_testing");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.test_app"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Parámetros -->
\t\t\t\t\t\t\t\t\t<li id=\"parameters_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_parameters");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs fa-2x\" style=\"margin-right: -3px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.parameters"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Depurador -->
\t\t\t\t\t\t\t\t\t<li id=\"debug_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_debug_panel");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bug fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.debug"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- PARTE RESPONSIVE DEL MENU -->
\t\t\t\t\t\t\t\t\t<li class=\"list-divider menu_responsive_zone\"></li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Cabecera de la parte responsive del menú -->
\t\t\t\t\t\t\t\t\t<li class=\"list-header menu_responsive_zone\">";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.responsive_zone"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Perfil -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_profile");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/user-icon.png"), "html", null, true);
        echo "' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.profile"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Configuración -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_settings");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/settings.png"), "html", null, true);
        echo "' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.settings"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Cerrar sesión -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/logout.png"), "html", null, true);
        echo "' width=\"28px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.logout"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--================================-->
\t\t\t\t\t<!--End menu-->

\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!--===================================================-->
\t\t\t<!--END MAIN NAVIGATION-->

\t\t</div>

\t</div>
\t<!--===================================================-->
\t<!-- END OF CONTAINER -->
\t\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 268
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 269
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script>



    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "includes/backend_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 269,  506 => 268,  488 => 102,  452 => 241,  447 => 239,  443 => 238,  433 => 231,  428 => 229,  424 => 228,  414 => 221,  409 => 219,  405 => 218,  398 => 214,  386 => 205,  380 => 202,  370 => 195,  364 => 192,  354 => 185,  348 => 182,  338 => 175,  332 => 172,  322 => 165,  316 => 162,  305 => 156,  299 => 155,  293 => 154,  283 => 147,  270 => 137,  264 => 134,  254 => 127,  248 => 124,  225 => 103,  223 => 102,  198 => 80,  194 => 79,  182 => 70,  178 => 69,  166 => 60,  162 => 59,  141 => 41,  135 => 38,  123 => 29,  114 => 22,  104 => 21,  81 => 7,  77 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_sidebar.css') }}\">

\t<style>
\t\t.mainnav-lg .fa-mobile {
\t\t\tmargin-right: 8px;
\t\t}

\t\t.mainnav-sm .fa-mobile {
\t\t\tmargin-left: 8px;
\t\t}
\t</style>

{% endblock %}

{% block body %}

    <div id=\"container\" class=\"effect mainnav-sm navbar-fixed mainnav-fixed\">
\t\t
\t\t<!--NAVBAR-->
\t\t<!--===================================================-->
\t\t<header id=\"navbar\">

\t\t\t<img id=\"asitur_logo\" src='{{asset(\"media/logo-asitur.png\")}}' width=\"130px\" height=\"39px\">

\t\t\t<div id=\"navbar-container\" class=\"boxed\">

\t\t\t\t<!--Navigation toogle button-->
\t\t\t\t<!--================================-->
\t\t\t\t<div id=\"backend_sidebar_navbar-header\" class=\"navbar-header\">
                
\t\t\t\t\t<a id=\"backend_sidebar_navbar-brand\" class=\"mainnav-toggle navbar-brand\" href=\"#\">
\t\t\t\t\t\t<img id=\"menu-icon\" class=\"section-icon\" src='{{asset(\"media/home/menu.png\")}}' width=\"42px\" height=\"42px\">
\t\t\t\t\t</a>
                    
\t\t\t\t\t<img id=\"asitur_logo_responsive\" src='{{asset(\"media/logo-asitur.png\")}}' width=\"130px\" height=\"39px\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--================================-->
\t\t\t\t<!--End Navigation toogle button-->


\t\t\t\t<!--Navbar Top from content-->
\t\t\t\t<!--================================-->
\t\t\t\t<div class=\"navbar-content clearfix\">
\t\t\t\t\t<ul class=\"nav navbar-top-links pull-left\">
\t\t\t\t\t</ul>

\t\t\t\t\t<ul class=\"nav navbar-top-links pull-right\">

\t\t\t\t\t\t<!-- Profile -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-profile\" class=\"top-right-buttons\" href=\"{{ path('backend_profile') }}\">
\t\t\t\t\t\t\t\t<img class=\"top-icons\" src='{{asset(\"media/user-icon.png\")}}' width=\"42x\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Profile -->

\t\t\t\t\t\t<!-- Settings -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-settings\" class=\"top-right-buttons\" href=\"{{ path('backend_settings') }}\">
\t\t\t\t\t\t\t\t<img src='{{asset(\"media/home/settings.png\")}}' width=\"42x\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Settings -->

\t\t\t\t\t\t<!-- Logout -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-logout\" class=\"top-right-buttons\" href=\"{{ path('backend_logout') }}\">
\t\t\t\t\t\t\t\t<img src='{{asset(\"media/home/logout.png\")}}' width=\"38px\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Logout -->

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!--================================-->
\t\t\t\t<!--End Navbar Top from content-->

\t\t\t</div>
\t\t</header>
\t\t<!--===================================================-->
\t\t<!--END NAVBAR-->

\t\t<div class=\"boxed\">

\t\t\t<!--CONTENT CONTAINER-->
\t\t\t<!--===================================================-->
\t\t\t<div id=\"content-container\">
\t\t\t
            {% block content %}{% endblock %}

\t\t\t</div>
\t\t\t<!--===================================================-->
\t\t\t<!--END CONTENT CONTAINER-->


\t\t\t
\t\t\t<!--MAIN NAVIGATION-->
\t\t\t<!--===================================================-->
\t\t\t<nav id=\"mainnav-container\">
\t\t\t\t<div id=\"mainnav\">

\t\t\t\t\t<!--Menu-->
\t\t\t\t\t<!--================================-->
\t\t\t\t\t<div id=\"mainnav-menu-wrap\">
\t\t\t\t\t\t<div class=\"nano\">
\t\t\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t\t\t<ul id=\"mainnav-menu\" class=\"list-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Inicio -->
\t\t\t\t\t\t\t\t\t<li id=\"home_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_home') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home fa-2x\" style=\"margin-left: 2px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.home\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Colaboradores -->
\t\t\t\t\t\t\t\t\t<li id=\"collaboratorUsers_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_collaborators') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.collaborators\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Logs -->
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-archive fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.logs\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"arrow\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--Submenu-->
\t\t\t\t\t\t\t\t\t\t<ul class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('backend_log') }}\">{{\"dataTable.tab.log\"|trans}}</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('backend_emails_log') }}\">{{\"dataTable.tab.emails\"|trans}}</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('backend_sms_log') }}\">{{\"dataTable.tab.sms\"|trans}}</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Traducciones -->
\t\t\t\t\t\t\t\t\t<li id=\"translations_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_translations') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.translations\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Depurador -->
\t\t\t\t\t\t\t\t\t<li id=\"routes_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_debug_maps_route_list') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-2x\" style=\"margin-left: 6px; margin-right: 5px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.routes\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Test APP -->
\t\t\t\t\t\t\t\t\t<li id=\"appTest_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_app_testing') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.test_app\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Parámetros -->
\t\t\t\t\t\t\t\t\t<li id=\"parameters_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_parameters') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs fa-2x\" style=\"margin-right: -3px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.parameters\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Depurador -->
\t\t\t\t\t\t\t\t\t<li id=\"debug_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_debug_panel') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bug fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.debug\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- PARTE RESPONSIVE DEL MENU -->
\t\t\t\t\t\t\t\t\t<li class=\"list-divider menu_responsive_zone\"></li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Cabecera de la parte responsive del menú -->
\t\t\t\t\t\t\t\t\t<li class=\"list-header menu_responsive_zone\">{{\"sidebar.responsive_zone\"|trans}}</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Perfil -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_profile') }}\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='{{asset(\"media/user-icon.png\")}}' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.profile\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Configuración -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_settings') }}\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='{{asset(\"media/home/settings.png\")}}' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.settings\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Cerrar sesión -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='{{asset(\"media/home/logout.png\")}}' width=\"28px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.logout\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--================================-->
\t\t\t\t\t<!--End menu-->

\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<!--===================================================-->
\t\t\t<!--END MAIN NAVIGATION-->

\t\t</div>

\t</div>
\t<!--===================================================-->
\t<!-- END OF CONTAINER -->
\t\t

{% endblock %}

{% block javascripts %}
    {{parent()}}
    
    <script>



    </script>
{% endblock %}", "includes/backend_sidebar.html.twig", "/var/www/rira_web/templates/includes/backend_sidebar.html.twig");
    }
}
