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
class __TwigTemplate_38f9d1e216fd58faf6483b404d25a6117f2f40a1953f84a7661fce29a2e396b8 extends \Twig\Template
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div id=\"container\" class=\"effect mainnav-sm navbar-fixed mainnav-fixed\">
\t\t
\t\t<!--NAVBAR-->
\t\t<!--===================================================-->
\t\t<header id=\"navbar\">

\t\t\t<img id=\"asitur_logo\" src='";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur.png"), "html", null, true);
        echo "' width=\"130px\" height=\"39px\">

\t\t\t<div id=\"navbar-container\" class=\"boxed\">

\t\t\t\t<!--Navigation toogle button-->
\t\t\t\t<!--================================-->
\t\t\t\t<div id=\"backend_sidebar_navbar-header\" class=\"navbar-header\">
                
\t\t\t\t\t<a id=\"backend_sidebar_navbar-brand\" class=\"mainnav-toggle navbar-brand\" href=\"#\">
\t\t\t\t\t\t<img id=\"menu-icon\" class=\"section-icon\" src='";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/menu.png"), "html", null, true);
        echo "' width=\"42px\" height=\"42px\">
\t\t\t\t\t</a>
                    
\t\t\t\t\t<img id=\"asitur_logo_responsive\" src='";
        // line 30
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
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_profile");
        echo "\">
\t\t\t\t\t\t\t\t<img class=\"top-icons\" src='";
        // line 49
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
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_settings");
        echo "\">
\t\t\t\t\t\t\t\t<img src='";
        // line 59
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
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_logout");
        echo "\">
\t\t\t\t\t\t\t\t<img src='";
        // line 69
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
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 92
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
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_home");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.home"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Colaboradores -->
\t\t\t\t\t\t\t\t\t<li id=\"collaboratorUsers_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_collaborators");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 126
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
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.logs"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"arrow\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--Submenu-->
\t\t\t\t\t\t\t\t\t\t<ul class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_log");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.tab.log"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_emails_log");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.tab.emails"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_sms_log");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.tab.sms"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Traducciones -->
\t\t\t\t\t\t\t\t\t<li id=\"translations_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_translations");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.translations"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Parámetros -->
\t\t\t\t\t\t\t\t\t<li id=\"parameters_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_parameters");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.parameters"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Depurador -->
\t\t\t\t\t\t\t\t\t<li id=\"debug_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_debug_panel");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bug fa-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 174
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
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.responsive_zone"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Perfil -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_profile");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/user-icon.png"), "html", null, true);
        echo "' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.profile"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Configuración -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_settings");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/settings.png"), "html", null, true);
        echo "' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.settings"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Cerrar sesión -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/logout.png"), "html", null, true);
        echo "' width=\"28px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 211
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

    // line 91
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

    // line 238
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
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
        return array (  474 => 239,  464 => 238,  446 => 91,  410 => 211,  405 => 209,  401 => 208,  391 => 201,  386 => 199,  382 => 198,  372 => 191,  367 => 189,  363 => 188,  356 => 184,  343 => 174,  337 => 171,  327 => 164,  321 => 161,  311 => 154,  305 => 151,  294 => 145,  288 => 144,  282 => 143,  272 => 136,  259 => 126,  253 => 123,  243 => 116,  237 => 113,  214 => 92,  212 => 91,  187 => 69,  183 => 68,  171 => 59,  167 => 58,  155 => 49,  151 => 48,  130 => 30,  124 => 27,  112 => 18,  103 => 11,  93 => 10,  81 => 7,  77 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/backend/style-backend_sidebar.css') }}\">
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
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home fa-2x\"></i>
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

\t\t\t\t\t\t\t\t\t<!-- Parámetros -->
\t\t\t\t\t\t\t\t\t<li id=\"parameters_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('backend_parameters') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs fa-2x\"></i>
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
