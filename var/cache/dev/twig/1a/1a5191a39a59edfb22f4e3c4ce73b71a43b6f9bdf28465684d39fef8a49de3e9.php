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

/* frontend/collaborator/userSettings.html.twig */
class __TwigTemplate_7bd4a2a136319456349ac0b3f7cd18ec4113ea1f7ffe4520b37a017d8039cbaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/userSettings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/collaborator/userSettings.html.twig"));

        $this->parent = $this->loadTemplate("includes/sidebar.html.twig", "frontend/collaborator/userSettings.html.twig", 1);
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
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabDates\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.dateAndTime"), "html", null, true);
        echo "</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabNotify\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.notify"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabLenguage\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.lenguage"), "html", null, true);
        echo "</a>
            </li>
        </ul>
    </div>

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabDates\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
            
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.formatDate"), "html", null, true);
        echo "
                        </label>
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelGrey'>
                            ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.chooseFormatDate"), "html", null, true);
        echo ":
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox' data-format='d/m/Y' data-formatsql='%d/%m/%Y' />
                            <label class='labelCheckbox'>22/06/2020 (";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.predeterminado"), "html", null, true);
        echo ")</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox' data-format='W, d M Y' data-formatsql='%W, %d %M %Y'/>
                            <label class='labelCheckbox'>Miércoles, 22 de junio de 2020</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='d/m' data-formatsql='%d/%m'/>
                            <label class='labelCheckbox'>20/06</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='e/c/Y'  data-formatsql='%e/%c/%Y'/>
                            <label class='labelCheckbox'>20/6/2020</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='d/b' data-formatsql='%d/%b'/>
                            <label class='labelCheckbox'>22/jun</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='d/b/Y' data-formatsql='%d/%b/%Y'/>
                            <label class='labelCheckbox'>22/jun/2020</label>
                        </div>
                    </div>
                </div>

                <hr />
                
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.formatHour"), "html", null, true);
        echo "
                        </label>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelGrey'>
                            ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.chooseFormatHour"), "html", null, true);
        echo ":
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox' data-format='H:i' data-formatsql='%H:%i'/>
                            <label class='labelCheckbox'>13:30 (";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.predeterminado"), "html", null, true);
        echo ")</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox' data-format='h:i p' data-formatsql='%h:%i %p'/>
                            <label class='labelCheckbox'>1:30 pm</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox'  data-format='H:i:s' data-formatsql='%H:%i:%s'/>
                            <label class='labelCheckbox'>13:30:55</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox'  data-format='h:i:s p' data-formatsql='%h:%i:%s %p'/>
                            <label class='labelCheckbox'>1:30:55 pm</label>
                        </div>
                        
                    </div>
                </div>


            </div>

            
            <div class=\"tab-pane\" id=\"tabNotify\" role=\"tabpanel\" aria-labelledby=\"tabNotify-tab\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            ";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.receiveNotification"), "html", null, true);
        echo "
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 134
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no")), "html", null, true);
        echo "
                        <input id='emailNotificationActive' class=\"checkSwitch switchery\" type=\"checkbox\"
                        ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "emailNotificationActive", [], "any", false, false, false, 136)) {
            echo " checked ";
        }
        echo "> 
                        ";
        // line 137
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes")), "html", null, true);
        echo "
                    </div>
                </div>

                <br><br>

                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <label class='labelGrey'>
                            ";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.emailNotification"), "html", null, true);
        echo ":
                        </label>
                    </div>
                    <div class=\"col-md-7\">
                        <div>
                            <input id = 'notificationEmailOriginal' type=\"checkbox\" class='notificationTypeCheckbox imgCheckbox' data-notificationtype='original' ";
        // line 151
        if (((null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "emailNotification", [], "any", false, false, false, 151)) || (twig_get_attribute($this->env, $this->source,         // line 152
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "emailNotification", [], "any", false, false, false, 152) == ""))) {
            echo " checked ";
        }
        echo " />
                            <label class='labelCheckbox'>";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "email", [], "any", false, false, false, 153), "html", null, true);
        echo "</label>
                        </div>
                        <div>
                            <input id = 'notificationEmailCopy' type=\"checkbox\" class='notificationTypeCheckbox imgCheckbox' data-notificationtype='otro' ";
        // line 156
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "emailNotification", [], "any", false, false, false, 156)) && (twig_get_attribute($this->env, $this->source,         // line 157
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "emailNotification", [], "any", false, false, false, 157) != ""))) {
            echo " checked ";
        }
        echo "/>
                            <label class='labelCheckbox'>";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.other"), "html", null, true);
        echo "</label>
                            <div style='margin-left: 45px;'>
                                <input id ='mailCCInput' type='text' class='form-control filter_inputs' placeholder='";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.emailInput"), "html", null, true);
        echo "' value='";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 160, $this->source); })()), "emailNotification", [], "any", false, false, false, 160), "html", null, true);
        echo "'/>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <div class=\"tab-pane\" id=\"tabLenguage\" role=\"tabpanel\" aria-labelledby=\"tabLenguage-tab\">

                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            ";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.email.log.locale"), "html", null, true);
        echo "
                        </label>
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelGrey'>
                            ";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.chooseLanguage"), "html", null, true);
        echo ":
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='es' ";
        // line 190
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "getLocale", [], "method", false, false, false, 190) == "es")) {
            echo " checked ";
        }
        echo "/>
                            <label class='labelCheckbox'>";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.spanish"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.predeterminado"), "html", null, true);
        echo ")</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='en' ";
        // line 195
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 195, $this->source); })()), "getLocale", [], "method", false, false, false, 195) == "en")) {
            echo " checked ";
        }
        echo "/>
                            <label class='labelCheckbox'>";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.english"), "html", null, true);
        echo "</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='fr' ";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 200, $this->source); })()), "getLocale", [], "method", false, false, false, 200) == "fr")) {
            echo " checked ";
        }
        echo "/>
                            <label class='labelCheckbox'>";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.french"), "html", null, true);
        echo "</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='it' ";
        // line 205
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "getLocale", [], "method", false, false, false, 205) == "it")) {
            echo " checked ";
        }
        echo "/>
                            <label class='labelCheckbox'>";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.italian"), "html", null, true);
        echo "</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='pt' ";
        // line 210
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 210, $this->source); })()), "getLocale", [], "method", false, false, false, 210) == "pt")) {
            echo " checked ";
        }
        echo "/>
                            <label class='labelCheckbox'>";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.portuguese"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                </div>
            
            
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-12\" style='text-align: right;'>
                <button class='btnSave btnDefault'>";
        // line 222
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

    // line 233
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 234
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    \$(document).ready(function(){
        
        
        \$(\"#top-settings\").css({\"background-color\": \"var(--main-blue)\"});    
        \$(\"#top-settings img\").css({\"filter\": \"grayscale(100%) brightness(200%)\"});
        
        // \$('#test1').is(\":checked\"); // comprobar dato
        // \$('#test1').prop('checked', true);
        // \$('#test1').trigger('update'); // actualizar animacion

        \$('.nav-link').click(function(){
            \$('.nav-link').removeClass('active');
            \$('.tab-active-hr').remove();
            \$(this).addClass('active');
            \$(this).append(\"<hr class='tab-active-hr'>\");
        });

        \$('.imgCheckbox').imgCheckbox({
            uncheckPath: \"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/uncheck.png"), "html", null, true);
        echo "\",
\t\t\tcheckPath: \"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/check.png"), "html", null, true);
        echo "\"
        });
 

        \$('.dateCheckbox').change(function(){
            \$('.dateCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.dateCheckbox').trigger('update');
        });

        \$('.hourCheckbox').change(function(){
            \$('.hourCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.hourCheckbox').trigger('update');
        });

        \$('.notificationTypeCheckbox').change(function(){
            \$('.notificationTypeCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.notificationTypeCheckbox').trigger('update');
        });

        \$('.languageCheckbox').change(function(){
            \$('.languageCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.languageCheckbox').trigger('update');
        });      

        // Inicializamos
        \$('.dateCheckbox').each(function(){
            if (\$(this).data('format') == \"";
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 285, $this->source); })()), "dateFormat", [], "any", false, false, false, 285), "html", null, true);
        echo "\")
                \$(this).prop('checked', true);
        });

        \$('.hourCheckbox').each(function(){
            if (\$(this).data('format') == \"";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 290, $this->source); })()), "hourFormat", [], "any", false, false, false, 290), "html", null, true);
        echo "\")
                \$(this).prop('checked', true);
        });
        \$('.dateCheckbox').trigger('update');
        \$('.hourCheckbox').trigger('update');
        // fin inicializacion

        var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.checkSwitch'));
                    
        switch_elems.forEach(function(html){
            new Switchery(html, {   disabled: false, 
                                    color: \"var(--main-blue)\",
                                    secondaryColor: '#cdd3db'
                                });
        });

        \$('.notificationTypeCheckbox').change(function(){
            if (\$(this).data('notificationtype')=='original')
                \$('#mailCCInput').val('');
        });

        \$('#mailCCInput').change(function(){
            controlEmailNotification();
        });

        function controlEmailNotification(){
            if (\$('#mailCCInput').val()==''){
                \$('#notificationEmailOriginal').prop('checked', true);
                \$('#notificationEmailCopy').prop('checked', false);
            }
            else{
                \$('#notificationEmailOriginal').prop('checked', false);
                \$('#notificationEmailCopy').prop('checked', true);
            }
            \$('.notificationTypeCheckbox').trigger('update');
        }


        \$('.btnSave').click(function(){
            var dateFormat = '';
            var dateFormatSql = '';
            var hourFormat = '';
            var hourFormatSql = '';
            var email_notification_active = \$('#emailNotificationActive').prop('checked');
            var email_notification = \$('#mailCCInput').val();
            var language = '';
            
            controlEmailNotification();

            \$('.dateCheckbox').each(function(){
                if (\$(this).prop('checked')){
                    dateFormat = \$(this).data('format');
                    dateFormatSql = \$(this).data('formatsql');
                }
            });

            \$('.hourCheckbox').each(function(){
                if (\$(this).prop('checked')){
                    hourFormat = \$(this).data('format');
                    hourFormatSql = \$(this).data('formatsql');
                }
            });

            \$('.languageCheckbox').each(function(){
                if (\$(this).prop('checked')){
                    language = \$(this).data('language');
                }
            });

            swal.fire({
                text: \"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.saveChanges"), "html", null, true);
        echo "\",
                title: '',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: \"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.confirm"), "html", null, true);
        echo "\",
                cancelButtonText: \"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel"), "html", null, true);
        echo "\",
                onClose: () => {}
            }).then((result) => {
                if (result.isConfirmed) {

                    \$.ajax({
                        url:'";
        // line 371
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_settings_save");
        echo "',
                        data: {
                            'dateFormat': dateFormat,
                            'dateFormatSql': dateFormatSql,
                            'hourFormat': hourFormat,
                            'hourFormatSql': hourFormatSql,
                            'email_notification_active': email_notification_active,
                            'email_notification': email_notification,
                            'language': language
                        },
                        type:\"POST\",
                        dataType: \"json\",
                        success: function(data){
                            //console.log(data);
                            if (data.status)
                                Swal.fire(\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.saved"), "html", null, true);
        echo "\", '', 'success');
                            else
                                Swal.fire(\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.error"), "html", null, true);
        echo "\", data.errors.join(', '), 'error');
                        },
                        error:function(err){
                            swal.fire({
                                title: '";
        // line 392
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
        });
    });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/collaborator/userSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 392,  661 => 388,  656 => 386,  638 => 371,  629 => 365,  625 => 364,  618 => 360,  545 => 290,  537 => 285,  504 => 255,  500 => 254,  476 => 234,  466 => 233,  446 => 222,  432 => 211,  426 => 210,  419 => 206,  413 => 205,  406 => 201,  400 => 200,  393 => 196,  387 => 195,  378 => 191,  372 => 190,  364 => 185,  352 => 176,  331 => 160,  326 => 158,  320 => 157,  319 => 156,  313 => 153,  307 => 152,  306 => 151,  298 => 146,  286 => 137,  280 => 136,  275 => 134,  268 => 130,  236 => 101,  227 => 95,  216 => 87,  178 => 52,  169 => 46,  158 => 38,  141 => 24,  135 => 21,  128 => 17,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
    
    <div id=\"page-title\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabDates\">{{\"settings.dateAndTime\"|trans}}</a>
                <hr class=\"tab-active-hr\">
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabNotify\">{{\"settings.notify\"|trans}}</a>
            </li>
            <li class=\"nav-item col-md-4\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabLenguage\">{{\"settings.lenguage\"|trans}}</a>
            </li>
        </ul>
    </div>

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabDates\" role=\"tabpanel\" aria-labelledby=\"tabDates-tab\">
            
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            {{\"settings.formatDate\"|trans}}
                        </label>
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelGrey'>
                            {{\"settings.chooseFormatDate\"|trans}}:
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox' data-format='d/m/Y' data-formatsql='%d/%m/%Y' />
                            <label class='labelCheckbox'>22/06/2020 ({{\"settings.predeterminado\"|trans}})</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox' data-format='W, d M Y' data-formatsql='%W, %d %M %Y'/>
                            <label class='labelCheckbox'>Miércoles, 22 de junio de 2020</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='d/m' data-formatsql='%d/%m'/>
                            <label class='labelCheckbox'>20/06</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='e/c/Y'  data-formatsql='%e/%c/%Y'/>
                            <label class='labelCheckbox'>20/6/2020</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='d/b' data-formatsql='%d/%b'/>
                            <label class='labelCheckbox'>22/jun</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='dateCheckbox imgCheckbox'  data-format='d/b/Y' data-formatsql='%d/%b/%Y'/>
                            <label class='labelCheckbox'>22/jun/2020</label>
                        </div>
                    </div>
                </div>

                <hr />
                
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            {{\"settings.formatHour\"|trans}}
                        </label>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelGrey'>
                            {{\"settings.chooseFormatHour\"|trans}}:
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox' data-format='H:i' data-formatsql='%H:%i'/>
                            <label class='labelCheckbox'>13:30 ({{\"settings.predeterminado\"|trans}})</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox' data-format='h:i p' data-formatsql='%h:%i %p'/>
                            <label class='labelCheckbox'>1:30 pm</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox'  data-format='H:i:s' data-formatsql='%H:%i:%s'/>
                            <label class='labelCheckbox'>13:30:55</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='hourCheckbox imgCheckbox'  data-format='h:i:s p' data-formatsql='%h:%i:%s %p'/>
                            <label class='labelCheckbox'>1:30:55 pm</label>
                        </div>
                        
                    </div>
                </div>


            </div>

            
            <div class=\"tab-pane\" id=\"tabNotify\" role=\"tabpanel\" aria-labelledby=\"tabNotify-tab\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            {{\"settings.receiveNotification\"|trans}}
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        {{\"general.no\"|trans|upper}}
                        <input id='emailNotificationActive' class=\"checkSwitch switchery\" type=\"checkbox\"
                        {% if user.emailNotificationActive %} checked {% endif %}> 
                        {{\"general.yes\"|trans|upper}}
                    </div>
                </div>

                <br><br>

                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <label class='labelGrey'>
                            {{\"settings.emailNotification\"|trans}}:
                        </label>
                    </div>
                    <div class=\"col-md-7\">
                        <div>
                            <input id = 'notificationEmailOriginal' type=\"checkbox\" class='notificationTypeCheckbox imgCheckbox' data-notificationtype='original' {% if user.emailNotification is null or 
                                                                                                                                    user.emailNotification == ''%} checked {% endif %} />
                            <label class='labelCheckbox'>{{ user.email }}</label>
                        </div>
                        <div>
                            <input id = 'notificationEmailCopy' type=\"checkbox\" class='notificationTypeCheckbox imgCheckbox' data-notificationtype='otro' {% if user.emailNotification is not null and 
                                                                                                                                    user.emailNotification != ''%} checked {% endif %}/>
                            <label class='labelCheckbox'>{{\"settings.other\"|trans}}</label>
                            <div style='margin-left: 45px;'>
                                <input id ='mailCCInput' type='text' class='form-control filter_inputs' placeholder='{{\"settings.emailInput\"|trans}}' value='{{ user.emailNotification }}'/>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <div class=\"tab-pane\" id=\"tabLenguage\" role=\"tabpanel\" aria-labelledby=\"tabLenguage-tab\">

                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelBlue'>
                            {{\"dataTable.email.log.locale\"|trans}}
                        </label>
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <label class='labelGrey'>
                            {{\"settings.chooseLanguage\"|trans}}:
                        </label>
                    </div>
                    <div class=\"col-md-8\">
                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='es' {% if user.getLocale() == 'es'%} checked {% endif %}/>
                            <label class='labelCheckbox'>{{\"settings.spanish\"|trans}} ({{\"settings.predeterminado\"|trans}})</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='en' {% if user.getLocale() == 'en'%} checked {% endif %}/>
                            <label class='labelCheckbox'>{{\"settings.english\"|trans}}</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='fr' {% if user.getLocale() == 'fr'%} checked {% endif %}/>
                            <label class='labelCheckbox'>{{\"settings.french\"|trans}}</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='it' {% if user.getLocale() == 'it'%} checked {% endif %}/>
                            <label class='labelCheckbox'>{{\"settings.italian\"|trans}}</label>
                        </div>

                        <div>
                            <input type=\"checkbox\" class='languageCheckbox imgCheckbox' data-language='pt' {% if user.getLocale() == 'pt'%} checked {% endif %}/>
                            <label class='labelCheckbox'>{{\"settings.portuguese\"|trans}}</label>
                        </div>
                    </div>
                </div>
            
            
            </div>
        </div>
        
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
        
        
        \$(\"#top-settings\").css({\"background-color\": \"var(--main-blue)\"});    
        \$(\"#top-settings img\").css({\"filter\": \"grayscale(100%) brightness(200%)\"});
        
        // \$('#test1').is(\":checked\"); // comprobar dato
        // \$('#test1').prop('checked', true);
        // \$('#test1').trigger('update'); // actualizar animacion

        \$('.nav-link').click(function(){
            \$('.nav-link').removeClass('active');
            \$('.tab-active-hr').remove();
            \$(this).addClass('active');
            \$(this).append(\"<hr class='tab-active-hr'>\");
        });

        \$('.imgCheckbox').imgCheckbox({
            uncheckPath: \"{{ asset('media/uncheck.png') }}\",
\t\t\tcheckPath: \"{{ asset('media/check.png') }}\"
        });
 

        \$('.dateCheckbox').change(function(){
            \$('.dateCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.dateCheckbox').trigger('update');
        });

        \$('.hourCheckbox').change(function(){
            \$('.hourCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.hourCheckbox').trigger('update');
        });

        \$('.notificationTypeCheckbox').change(function(){
            \$('.notificationTypeCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.notificationTypeCheckbox').trigger('update');
        });

        \$('.languageCheckbox').change(function(){
            \$('.languageCheckbox').prop('checked', false);
            \$(this).prop('checked', true);
            \$('.languageCheckbox').trigger('update');
        });      

        // Inicializamos
        \$('.dateCheckbox').each(function(){
            if (\$(this).data('format') == \"{{ user.dateFormat }}\")
                \$(this).prop('checked', true);
        });

        \$('.hourCheckbox').each(function(){
            if (\$(this).data('format') == \"{{ user.hourFormat }}\")
                \$(this).prop('checked', true);
        });
        \$('.dateCheckbox').trigger('update');
        \$('.hourCheckbox').trigger('update');
        // fin inicializacion

        var switch_elems = Array.prototype.slice.call(document.querySelectorAll('.checkSwitch'));
                    
        switch_elems.forEach(function(html){
            new Switchery(html, {   disabled: false, 
                                    color: \"var(--main-blue)\",
                                    secondaryColor: '#cdd3db'
                                });
        });

        \$('.notificationTypeCheckbox').change(function(){
            if (\$(this).data('notificationtype')=='original')
                \$('#mailCCInput').val('');
        });

        \$('#mailCCInput').change(function(){
            controlEmailNotification();
        });

        function controlEmailNotification(){
            if (\$('#mailCCInput').val()==''){
                \$('#notificationEmailOriginal').prop('checked', true);
                \$('#notificationEmailCopy').prop('checked', false);
            }
            else{
                \$('#notificationEmailOriginal').prop('checked', false);
                \$('#notificationEmailCopy').prop('checked', true);
            }
            \$('.notificationTypeCheckbox').trigger('update');
        }


        \$('.btnSave').click(function(){
            var dateFormat = '';
            var dateFormatSql = '';
            var hourFormat = '';
            var hourFormatSql = '';
            var email_notification_active = \$('#emailNotificationActive').prop('checked');
            var email_notification = \$('#mailCCInput').val();
            var language = '';
            
            controlEmailNotification();

            \$('.dateCheckbox').each(function(){
                if (\$(this).prop('checked')){
                    dateFormat = \$(this).data('format');
                    dateFormatSql = \$(this).data('formatsql');
                }
            });

            \$('.hourCheckbox').each(function(){
                if (\$(this).prop('checked')){
                    hourFormat = \$(this).data('format');
                    hourFormatSql = \$(this).data('formatsql');
                }
            });

            \$('.languageCheckbox').each(function(){
                if (\$(this).prop('checked')){
                    language = \$(this).data('language');
                }
            });

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
                        url:'{{ path('user_settings_save') }}',
                        data: {
                            'dateFormat': dateFormat,
                            'dateFormatSql': dateFormatSql,
                            'hourFormat': hourFormat,
                            'hourFormatSql': hourFormatSql,
                            'email_notification_active': email_notification_active,
                            'email_notification': email_notification,
                            'language': language
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
        });
    });
    </script>

{% endblock %}", "frontend/collaborator/userSettings.html.twig", "/var/www/rira_web/templates/frontend/collaborator/userSettings.html.twig");
    }
}
