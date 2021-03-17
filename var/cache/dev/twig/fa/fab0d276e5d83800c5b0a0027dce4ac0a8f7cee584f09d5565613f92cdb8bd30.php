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

/* backend/debug_editor.html.twig */
class __TwigTemplate_6c1d07fe6ebd9fc46ba9a7a971348454c903b1cba6d6914ad19d98ea08edf76f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/debug_editor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/debug_editor.html.twig"));

        // line 1
        echo "<style>
    #editor1{
        height: 650px;
    }
    #editor_response{
        background-color: #2d2d2d;
        padding: 5px;
        height: 575px;
        box-shadow: 0 2px 0 rgba(0,0,0,0.05);
        color: #7cff7c;
        overflow-y: scroll;
    }

    #editor_response_content{
        padding: 5px;
    }

    .borderSeparator{
        border-color: #7cff7c;
        margin: 20px 0px;
    }
</style>

<div class='row'>
    <div class='col-md-8'>
        <pre id=\"editor1\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["contentText"]) || array_key_exists("contentText", $context) ? $context["contentText"] : (function () { throw new RuntimeError('Variable "contentText" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</pre>
    </div>
    <div class='col-md-4'>

        <div id='editor_controls' class='row'>
            <input id='token' type='hidden' value='";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["password_enc"]) || array_key_exists("password_enc", $context) ? $context["password_enc"] : (function () { throw new RuntimeError('Variable "password_enc" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "'/>
            <div class='col-md-5'>
                <button id=\"btnSave\" class=\"form-control btn btn-block btn-primary btn-labeled fa fa-save\">
                        ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save"), "html", null, true);
        echo "
                </button>      
            </div>

            <div class='col-md-5'>
                <button id=\"btnRun\" class=\"form-control btn btn-block btn-success btn-labeled fa fa-play\">
                        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.execute"), "html", null, true);
        echo "
                </button>      
            </div>

            <div class='col-md-2'>
                <button id=\"btnClear\" class=\"form-control btn btn-icon btn-danger fa fa-trash\" style='height: 30px;'>
                </button>      
            </div>
        </div>

        <hr>

        <div class='row'>
            <div id='editor_response'class='col-md-12'>
                <div id='editor_response_content'>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editor/kitchen-sink/require.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('#container_login').fadeOut();
    \$(\"#btnSave\").prop(\"disabled\",true);
    var editor = null;
    // setup paths
    require.config({paths: { \"ace\" : \"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editor/lib/ace"), "html", null, true);
        echo "\"}});
    // load ace and extensions
    require([\"ace/ace\"], function(ace) {
        editor = ace.edit(\"editor1\");
        editor.setTheme(\"ace/theme/tomorrow_night_eighties\");
        editor.session.setMode(\"ace/mode/";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["editor_mode"]) || array_key_exists("editor_mode", $context) ? $context["editor_mode"] : (function () { throw new RuntimeError('Variable "editor_mode" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\");
        editor.getSession().setTabSize(2);
        editor.setAutoScrollEditorIntoView(false);  


        editor.session.on('change', function(delta) {
            // delta.start, delta.end, delta.lines, delta.action
            \$(\"#btnSave\").prop(\"disabled\",false);
        });
    });
    setTimeout(function(){
        \$('#container_debug').fadeIn();
    },500);

    function sendToServer(mode){
        if (mode == 'save')
            \$(\"#btnSave\").html(\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.saving"), "html", null, true);
        echo "\");

        \$.ajax({
            url:'";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_debug_save_and_run");
        echo "',
            data: {
                'fileContent': editor.getValue(),
                'password': \$('#token').val(),
                'mode': mode
            },
            type:\"POST\",
            success: function(data){
                if (mode == 'save'){
                    \$(\"#btnSave\").html(\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.save"), "html", null, true);
        echo "\");
                    \$(\"#btnSave\").prop(\"disabled\",true);
                    \$(\"#btnRun\").prop(\"disabled\",true);
                    
                    \$(\"#btnRun\").html(\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.updating"), "html", null, true);
        echo "\");
                    setTimeout(function(){
                        \$(\"#btnRun\").html(\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.execute"), "html", null, true);
        echo "\");
                        \$(\"#btnRun\").prop(\"disabled\",false);
                    }, 4000);
                }
                else{
                    \$('#editor_response_content').append(\"<hr class='borderSeparator'>\");
                    \$('#editor_response_content').append(data);
                    \$('#editor_response').scrollTop(\$('#editor_response')[0].scrollHeight);
                }
            },
            error:function(err){
                swal.fire({
                    title: err,
                    html: '',
                    icon: 'error',
                    showConfirmButton: true
                });
            }
        });
    }

    \$('#btnRun').click(function(){
        \$(\"#btnRun\").html(\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.loading"), "html", null, true);
        echo "\");
         \$(\"#btnRun\").prop(\"disabled\",true);
        setTimeout(function(){
            \$(\"#btnRun\").html(\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.execute"), "html", null, true);
        echo "\");
            \$(\"#btnRun\").prop(\"disabled\",false);
        }, 2000);
        sendToServer('run');
    });// run



    \$(window).bind('keydown', function(event) {
        if (event.ctrlKey || event.metaKey) {
            switch (String.fromCharCode(event.which).toLowerCase()) {
            case 's':
            case 'g':
                event.preventDefault();
                if(!\$(\"#btnSave\").prop(\"disabled\"))
                    sendToServer('save');
                break;
            }
        }
    });


    \$('#btnSave').click(function(){
        sendToServer('save');
    });// run

    \$('#btnClear').click(function(){
        \$('#editor_response_content').empty();
    });// run
</script>

<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editor/show_own_source.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend/debug_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 162,  214 => 131,  208 => 128,  183 => 106,  178 => 104,  171 => 100,  159 => 91,  153 => 88,  134 => 72,  126 => 67,  117 => 61,  93 => 40,  84 => 34,  78 => 31,  70 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    #editor1{
        height: 650px;
    }
    #editor_response{
        background-color: #2d2d2d;
        padding: 5px;
        height: 575px;
        box-shadow: 0 2px 0 rgba(0,0,0,0.05);
        color: #7cff7c;
        overflow-y: scroll;
    }

    #editor_response_content{
        padding: 5px;
    }

    .borderSeparator{
        border-color: #7cff7c;
        margin: 20px 0px;
    }
</style>

<div class='row'>
    <div class='col-md-8'>
        <pre id=\"editor1\">{{contentText}}</pre>
    </div>
    <div class='col-md-4'>

        <div id='editor_controls' class='row'>
            <input id='token' type='hidden' value='{{password_enc}}'/>
            <div class='col-md-5'>
                <button id=\"btnSave\" class=\"form-control btn btn-block btn-primary btn-labeled fa fa-save\">
                        {{\"general.save\"|trans}}
                </button>      
            </div>

            <div class='col-md-5'>
                <button id=\"btnRun\" class=\"form-control btn btn-block btn-success btn-labeled fa fa-play\">
                        {{\"general.execute\"|trans}}
                </button>      
            </div>

            <div class='col-md-2'>
                <button id=\"btnClear\" class=\"form-control btn btn-icon btn-danger fa fa-trash\" style='height: 30px;'>
                </button>      
            </div>
        </div>

        <hr>

        <div class='row'>
            <div id='editor_response'class='col-md-12'>
                <div id='editor_response_content'>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"{{ asset('js/editor/kitchen-sink/require.js') }}\"></script>
<script>
    \$('#container_login').fadeOut();
    \$(\"#btnSave\").prop(\"disabled\",true);
    var editor = null;
    // setup paths
    require.config({paths: { \"ace\" : \"{{ asset('js/editor/lib/ace') }}\"}});
    // load ace and extensions
    require([\"ace/ace\"], function(ace) {
        editor = ace.edit(\"editor1\");
        editor.setTheme(\"ace/theme/tomorrow_night_eighties\");
        editor.session.setMode(\"ace/mode/{{editor_mode}}\");
        editor.getSession().setTabSize(2);
        editor.setAutoScrollEditorIntoView(false);  


        editor.session.on('change', function(delta) {
            // delta.start, delta.end, delta.lines, delta.action
            \$(\"#btnSave\").prop(\"disabled\",false);
        });
    });
    setTimeout(function(){
        \$('#container_debug').fadeIn();
    },500);

    function sendToServer(mode){
        if (mode == 'save')
            \$(\"#btnSave\").html(\"{{'general.saving'|trans}}\");

        \$.ajax({
            url:'{{ path(\"backend_debug_save_and_run\") }}',
            data: {
                'fileContent': editor.getValue(),
                'password': \$('#token').val(),
                'mode': mode
            },
            type:\"POST\",
            success: function(data){
                if (mode == 'save'){
                    \$(\"#btnSave\").html(\"{{'general.save'|trans}}\");
                    \$(\"#btnSave\").prop(\"disabled\",true);
                    \$(\"#btnRun\").prop(\"disabled\",true);
                    
                    \$(\"#btnRun\").html(\"{{'general.updating'|trans}}\");
                    setTimeout(function(){
                        \$(\"#btnRun\").html(\"{{'general.execute'|trans}}\");
                        \$(\"#btnRun\").prop(\"disabled\",false);
                    }, 4000);
                }
                else{
                    \$('#editor_response_content').append(\"<hr class='borderSeparator'>\");
                    \$('#editor_response_content').append(data);
                    \$('#editor_response').scrollTop(\$('#editor_response')[0].scrollHeight);
                }
            },
            error:function(err){
                swal.fire({
                    title: err,
                    html: '',
                    icon: 'error',
                    showConfirmButton: true
                });
            }
        });
    }

    \$('#btnRun').click(function(){
        \$(\"#btnRun\").html(\"{{'general.loading'|trans}}\");
         \$(\"#btnRun\").prop(\"disabled\",true);
        setTimeout(function(){
            \$(\"#btnRun\").html(\"{{'general.execute'|trans}}\");
            \$(\"#btnRun\").prop(\"disabled\",false);
        }, 2000);
        sendToServer('run');
    });// run



    \$(window).bind('keydown', function(event) {
        if (event.ctrlKey || event.metaKey) {
            switch (String.fromCharCode(event.which).toLowerCase()) {
            case 's':
            case 'g':
                event.preventDefault();
                if(!\$(\"#btnSave\").prop(\"disabled\"))
                    sendToServer('save');
                break;
            }
        }
    });


    \$('#btnSave').click(function(){
        sendToServer('save');
    });// run

    \$('#btnClear').click(function(){
        \$('#editor_response_content').empty();
    });// run
</script>

<script src=\"{{ asset('js/editor/show_own_source.js') }}\"></script>

</body>
</html>
", "backend/debug_editor.html.twig", "/var/www/rira_web/templates/backend/debug_editor.html.twig");
    }
}
