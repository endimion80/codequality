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

/* includes/sidebar.html.twig */
class __TwigTemplate_b91da378b09021cd4f8918ba51f91ddc51cbd0b89d909248718773ea4c8db4aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "includes/sidebar.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-base.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-sidebar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/frontend/style-base_asitur.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div id=\"container\" class=\"effect mainnav-sm navbar-fixed mainnav-fixed\">
\t\t
\t\t<!--NAVBAR-->
\t\t<!--===================================================-->
\t\t<header id=\"navbar\">

\t\t\t<img id=\"asitur_logo\" src='";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur.png"), "html", null, true);
        echo "' width=\"130px\" height=\"39px\">

\t\t\t<div id=\"navbar-container\" class=\"boxed\">

\t\t\t\t<!--Navigation toogle button-->
\t\t\t\t<!--================================-->
\t\t\t\t<div id=\"frontend_sidebar_navbar-header\" class=\"navbar-header\">
                
\t\t\t\t\t<a id=\"frontend_sidebar_navbar-brand\" class=\"mainnav-toggle navbar-brand\" href=\"#\">
\t\t\t\t\t\t<img id=\"menu-icon\" class=\"section-icon\" src='";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/menu.png"), "html", null, true);
        echo "' width=\"42px\" height=\"42px\">
\t\t\t\t\t</a>
                    
\t\t\t\t\t<img id=\"asitur_logo_responsive\" src='";
        // line 31
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
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\">
\t\t\t\t\t\t\t\t<img class=\"top-icons\" src='";
        // line 50
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
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_settings");
        echo "\">
\t\t\t\t\t\t\t\t<img src='";
        // line 60
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
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t<img src='";
        // line 70
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
        // line 92
        $this->displayBlock('content', $context, $blocks);
        // line 93
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
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_home");
        echo "\">
                                            <img class=\"section-icon\" 
                                                src='";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/inicio.png"), "html", null, true);
        echo "' 
                                                srcset=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/inicio@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/inicio@3x.png"), "html", null, true);
        echo " 3x\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.home"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Ficha -->
\t\t\t\t\t\t\t\t\t<li id=\"data_management_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_management");
        echo "\">
                                            <img id=\"data_management_icon\" class=\"section-icon\" 
                                                src='";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/ico-recogida.png"), "html", null, true);
        echo "' 
                                                srcset=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/ico-recogida@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/ico-recogida@3x.png"), "html", null, true);
        echo " 3x\"
                                                style=\"padding: 1px 6.5px;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.file_card"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Reporting -->
\t\t\t\t\t\t\t\t\t<li id=\"reporting_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting");
        echo "\">
                                            <img class=\"section-icon\" 
                                                src='";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/reporting.png"), "html", null, true);
        echo "' 
                                                srcset=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/reporting@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/reporting@3x.png"), "html", null, true);
        echo " 3x\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.reporting"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Finalización y facturación -->
\t\t\t\t\t\t\t\t\t<li id=\"intervention_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_list");
        echo "\">
                                            <img class=\"section-icon\" 
                                                src='";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/mis-servicios.png"), "html", null, true);
        echo "' 
                                                srcset=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/mis-servicios@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/mis-servicios@3x.png"), "html", null, true);
        echo " 3x\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.completion_and_invoicing"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Cabecera de la parte responsive del menú -->
\t\t\t\t\t\t\t\t\t<li class=\"list-header menu_responsive_zone\">";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.responsive_zone"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Perfil -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/user-icon.png"), "html", null, true);
        echo "' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.profile"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Configuración -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_settings");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/settings.png"), "html", null, true);
        echo "' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.settings"), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Cerrar sesión -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/home/logout.png"), "html", null, true);
        echo "' width=\"28px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 189
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

    // line 92
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

    // line 216
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 217
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
        return "includes/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 217,  453 => 216,  435 => 92,  399 => 189,  394 => 187,  390 => 186,  380 => 179,  375 => 177,  371 => 176,  361 => 169,  356 => 167,  352 => 166,  345 => 162,  336 => 156,  329 => 154,  325 => 153,  320 => 151,  310 => 144,  303 => 142,  299 => 141,  294 => 139,  284 => 132,  276 => 129,  272 => 128,  267 => 126,  257 => 119,  250 => 117,  246 => 116,  241 => 114,  218 => 93,  216 => 92,  191 => 70,  187 => 69,  175 => 60,  171 => 59,  159 => 50,  155 => 49,  134 => 31,  128 => 28,  116 => 19,  107 => 12,  97 => 11,  85 => 8,  81 => 7,  77 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{parent()}}

    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-sidebar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/frontend/style-base_asitur.css') }}\">
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
\t\t\t\t<div id=\"frontend_sidebar_navbar-header\" class=\"navbar-header\">
                
\t\t\t\t\t<a id=\"frontend_sidebar_navbar-brand\" class=\"mainnav-toggle navbar-brand\" href=\"#\">
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
\t\t\t\t\t\t\t<a id=\"top-profile\" class=\"top-right-buttons\" href=\"{{ path('user_profile') }}\">
\t\t\t\t\t\t\t\t<img class=\"top-icons\" src='{{asset(\"media/user-icon.png\")}}' width=\"42x\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Profile -->

\t\t\t\t\t\t<!-- Settings -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-settings\" class=\"top-right-buttons\" href=\"{{ path('user_settings') }}\">
\t\t\t\t\t\t\t\t<img src='{{asset(\"media/home/settings.png\")}}' width=\"42x\" height=\"42px\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<!-- End Settings -->

\t\t\t\t\t\t<!-- Logout -->
\t\t\t\t\t\t<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"top-logout\" class=\"top-right-buttons\" href=\"{{ path('app_logout') }}\">
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
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('user_home') }}\">
                                            <img class=\"section-icon\" 
                                                src='{{asset(\"media/home/inicio.png\")}}' 
                                                srcset=\"{{asset('media/home/inicio@2x.png')}} 2x, {{asset('media/home/inicio@3x.png')}} 3x\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t{{\"sidebar.home\"|trans}}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Ficha -->
\t\t\t\t\t\t\t\t\t<li id=\"data_management_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('data_management') }}\">
                                            <img id=\"data_management_icon\" class=\"section-icon\" 
                                                src='{{asset(\"media/home/ico-recogida.png\")}}' 
                                                srcset=\"{{asset('media/home/ico-recogida@2x.png')}} 2x, {{asset('media/home/ico-recogida@3x.png')}} 3x\"
                                                style=\"padding: 1px 6.5px;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t{{\"sidebar.file_card\"|trans}}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Reporting -->
\t\t\t\t\t\t\t\t\t<li id=\"reporting_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('reporting') }}\">
                                            <img class=\"section-icon\" 
                                                src='{{asset(\"media/home/reporting.png\")}}' 
                                                srcset=\"{{asset('media/home/reporting@2x.png')}} 2x, {{asset('media/home/reporting@3x.png')}} 3x\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t{{\"sidebar.reporting\"|trans}}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Finalización y facturación -->
\t\t\t\t\t\t\t\t\t<li id=\"intervention_li\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('intervention_list') }}\">
                                            <img class=\"section-icon\" 
                                                src='{{asset(\"media/home/mis-servicios.png\")}}' 
                                                srcset=\"{{asset('media/home/mis-servicios@2x.png')}} 2x, {{asset('media/home/mis-servicios@3x.png')}} 3x\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t\t{{\"sidebar.completion_and_invoicing\"|trans}}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Cabecera de la parte responsive del menú -->
\t\t\t\t\t\t\t\t\t<li class=\"list-header menu_responsive_zone\">{{\"sidebar.responsive_zone\"|trans}}</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Perfil -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('user_profile') }}\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='{{asset(\"media/user-icon.png\")}}' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.profile\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Configuración -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('user_settings') }}\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive_zone_icons\" src='{{asset(\"media/home/settings.png\")}}' width=\"30px\" height=\"30px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title responsive_zone_text\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{\"sidebar.settings\"|trans}}</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<!-- Cerrar sesión -->
\t\t\t\t\t\t\t\t\t<li class=\"menu_responsive_zone\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">
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
{% endblock %}", "includes/sidebar.html.twig", "/var/www/rira_web/templates/includes/sidebar.html.twig");
    }
}
