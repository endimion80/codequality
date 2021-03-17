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

/* backend/collaborators.html.twig */
class __TwigTemplate_e3e9ec5e4f2f94663498e7a77ee121c6c4a93ed23a60ae17dce7c0edd6498445 extends \Twig\Template
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
        return "includes/backend_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/collaborators.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/collaborators.html.twig"));

        $this->parent = $this->loadTemplate("includes/backend_sidebar.html.twig", "backend/collaborators.html.twig", 1);
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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/backend/style-backend_general.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

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
    <!--Modal add collaboratorUser-->
    <div class=\"modal fade\" id=\"add_colUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 id=\"myModalLabel\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.title.new_collaboratorUser"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <form id=\"modal_add_collaboratorUsers_form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.collaboratorUser.username"), "html", null, true);
        echo "</label>
                                    <input id=\"username_input\" type=\"text\" name=\"c_username\" class=\"form-control collaborators_modal_inputs\" maxlength=\"180\">
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"control-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.collaboratorUser.collaborator"), "html", null, true);
        echo "</label>
                                <select id=\"collaborator-chosen-select\" name=\"c_collaborator\" class=\"collaborators_modal_inputs\" tabindex=\"2\">
                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.collaboratorUser.email"), "html", null, true);
        echo "</label>
                                    <input id=\"email_input\" type=\"email\" name=\"c_email\" class=\"form-control collaborators_modal_inputs\" maxlength=\"100\">
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.collaboratorUser.password"), "html", null, true);
        echo "</label>
                                    <input id=\"password_input\" type=\"password\" name=\"c_password\" class=\"form-control collaborators_modal_inputs\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.collaboratorUser.name"), "html", null, true);
        echo "</label>
                                    <input id=\"name_input\" type=\"text\" name=\"c_name\" class=\"form-control collaborators_modal_inputs\" maxlength=\"100\">
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.input.collaboratorUser.cif"), "html", null, true);
        echo "</label>
                                    <input id=\"cif_input\" type=\"text\" name=\"c_cif\" class=\"form-control collaborators_modal_inputs\" maxlength=\"20\">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"addColUser_submit\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accept"), "html", null, true);
        echo "</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add collaboratorUser-->

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.collaborators.header"), "html", null, true);
        echo "</h1>
        <br/>
        <div style=\"margin-right: 25px; display: flex; justify-content: space-between;\">
            ";
        // line 84
        echo "            ";
        // line 87
        echo "        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        
        <div style=\"display: block;
                    margin-bottom: 10px;
                    margin-right: 24px;
                    margin-top: 20px;
                    float: right;\">
            <label class=\"control-label\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo ":</label>
            <input id=\"search-input\" class='search-input' type=\"text\" placeholder=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.search"), "html", null, true);
        echo "...\" spellcheck=\"false\">
        </div>

        <!-- Tabla Usuarios colaboradores -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_collaborators\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.collaborators.username"), "html", null, true);
        echo "</th>
                            <th>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.collaborators.email"), "html", null, true);
        echo "</th>
                            <th>";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.collaborators.name"), "html", null, true);
        echo "</th>
                            <th>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.collaborators.collaborator"), "html", null, true);
        echo "</th>
                            <th>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.collaborators.actions"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--===================================================-->
    

    </div>
    <!--===================================================-->
    <!--End page content-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
    \$(document).ready(function(){
        \$(\"#collaboratorUsers_li\").addClass(\"active-link\");

        \$.getJSON(\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_collaborator_chosen_list");
        echo "\", function(json) {
            \$(\"#collaborator-chosen-select\").empty();
            \$(\"#collaborator-chosen-select\").append('<option value=\"\"> ---- </option>');
            \$.each(json, function (idx, obj) {
                \$(\"#collaborator-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.name + '</option>');
            });
            \$(\"#collaborator-chosen-select\").chosen({ width:'100%' });
        });

        var time = null;
        createTable();

        \$('#search-input').keyup(function() {
            clearInterval(time);
            time = setTimeout(function() {
                reloadDataTable();
            }, 1500);
        });

        ";
        // line 158
        echo "        ";
        // line 161
        echo "
        \$('#addColUser_submit').click(function(){

            \$(\"#modal_add_collaboratorUsers_form\").submit(function( event ) {
                event.preventDefault();
            });

            if( \$.trim(\$(\"#username_input\").val()) == \"\"             ||
                \$.trim(\$(\"#collaborator-chosen-select\").val()) == \"\" ||
                \$.trim(\$(\"#email_input\").val()) == \"\"                ||
                \$.trim(\$(\"#password_input\").val()) == \"\"             ||
                \$.trim(\$(\"#name_input\").val()) == \"\"                 ||
                \$.trim(\$(\"#cif_input\").val()) == \"\"
            ) {  
                swal.fire({
                    title: '";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.form.allfields.mandatory"), "html", null, true);
        echo "',
                    html: '',
                    icon: 'error',
                    showConfirmButton: true
                });
            } else {
                \$.ajax({
                    url:'";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_collaborator_create");
        echo "',
                    data: {
                        'inputs': \$('#modal_add_collaboratorUsers_form').serializeArray()
                    },
                    type:\"POST\",
                    success: function(data){
                        swal.fire({
                            title: data[\"message\"],
                            html: \"\",
                            icon: 'success',
                            showConfirmButton: true
                        });
                        reloadDataTable();
                        \$('#modal_add_collaboratorUsers_form').modal('hide');
                        \$(\".collaborators_modal_inputs\").val('');
                        \$(\"#collaborator-chosen-select\").trigger(\"chosen:updated\");
                    },
                    error:function(err){
                        swal.fire({
                            title: err[\"responseJSON\"][\"message\"],
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            }

        });

    });

    function createTable() {

        \$('#table_collaborators').DataTable({
            order: [0, 'ASC'],
            searching: false,
            rowReorder: true,
            columnDefs: [
                { orderable: true, className: 'reorder', targets: [0,1,2,3] },
                { orderable: false, targets: 4 }
            ],
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100,
                    \"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.lengthMenu.all"), "html", null, true);
        echo "\"
                ]
            ],
            responsive: false,
            autoWidth: false,
            scrollX: true,
            processing: false,
            serverSide: true,
            pagingType: \"full_numbers\",
            language: {
                \"sProcessing\": \"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sProcessing"), "html", null, true);
        echo "\",
                \"sLengthMenu\": \"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLengthMenu"), "html", null, true);
        echo "\",
                \"sZeroRecords\": \"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sEmptyTable\": \"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sZeroRecords"), "html", null, true);
        echo "\",
                \"sInfo\": \"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfo"), "html", null, true);
        echo "\",
                \"sInfoEmpty\": \"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoEmpty"), "html", null, true);
        echo "\",
                \"sInfoFiltered\": \"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sInfoFiltered"), "html", null, true);
        echo "\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sSearch"), "html", null, true);
        echo ":\",
                \"sUrl\": \"\",
                \"sInfoThousands\": \",\",
                \"sLoadingRecords\": \"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.sLoadingRecords"), "html", null, true);
        echo "\",
                \"oPaginate\": {
                    \"sFirst\": \"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sFirst"), "html", null, true);
        echo "\",
                    \"sLast\": \"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sLast"), "html", null, true);
        echo "\",
                    \"sNext\": \"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sNext"), "html", null, true);
        echo "\",
                    \"sPrevious\": \"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oPaginate.sPrevious"), "html", null, true);
        echo "\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": ";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortAscending"), "html", null, true);
        echo "\",
                    \"sSortDescending\": \": ";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.general.language.oAria.sSortDescending"), "html", null, true);
        echo "\"
                },
            },
            ajax: {
                url: \"";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collaborators_table");
        echo "\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_collaborators').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {

            },
            columns: [
                {data: 'username'},
                {data: 'email'},
                {data: 'name'},
                {data: 'collaborator'},
                {data: {}, render: function(data, row) {
                        html = '<div style=\"display: flex; justify-content: center;\"><a class=\"btn btn-primary\" style href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_as_user", ["userId" => "toReplace"]);
        echo "\"  >";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dataTable.collaborators.login"), "html", null, true);
        echo "</a></div>';
                        html = html.replace(\"toReplace\", data['id']);

                        return html;
                    }
                }
            ]
        });
    }

    ";
        // line 290
        echo "    let reloadDataTable = function() {
        \$(\"#table_collaborators\").DataTable().destroy();
        createTable();
    }
    ";
        // line 295
        echo "
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/collaborators.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 295,  528 => 290,  513 => 279,  493 => 262,  486 => 258,  482 => 257,  476 => 254,  472 => 253,  468 => 252,  464 => 251,  459 => 249,  453 => 246,  448 => 244,  444 => 243,  440 => 242,  436 => 241,  432 => 240,  428 => 239,  424 => 238,  411 => 228,  363 => 183,  353 => 176,  336 => 161,  334 => 158,  312 => 138,  302 => 132,  292 => 131,  268 => 116,  264 => 115,  260 => 114,  256 => 113,  252 => 112,  239 => 102,  235 => 101,  219 => 87,  217 => 84,  211 => 80,  196 => 68,  185 => 60,  176 => 54,  165 => 46,  156 => 40,  145 => 32,  137 => 27,  127 => 20,  118 => 13,  108 => 12,  95 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'includes/backend_sidebar.html.twig' %}

{% block title %}Asitur{% endblock %}

{% block stylesheets %}
{{parent()}}

    <link href=\"{{ asset('css/backend/style-backend_general.css') }}\" rel=\"stylesheet\">

{% endblock %}

{% block content %}

    <!--Modal add collaboratorUser-->
    <div class=\"modal fade\" id=\"add_colUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"display: flex; flex-direction: column; align-items: center;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 id=\"myModalLabel\">{{ (\"modal.title.new_collaboratorUser\")|trans }}</h4>
                </div>
                <div class=\"modal-body\" style=\"padding: 15px 25px;\">
                    <form id=\"modal_add_collaboratorUsers_form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.collaboratorUser.username\"|trans}}</label>
                                    <input id=\"username_input\" type=\"text\" name=\"c_username\" class=\"form-control collaborators_modal_inputs\" maxlength=\"180\">
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"control-label\">{{\"modal.input.collaboratorUser.collaborator\"|trans}}</label>
                                <select id=\"collaborator-chosen-select\" name=\"c_collaborator\" class=\"collaborators_modal_inputs\" tabindex=\"2\">
                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.collaboratorUser.email\"|trans}}</label>
                                    <input id=\"email_input\" type=\"email\" name=\"c_email\" class=\"form-control collaborators_modal_inputs\" maxlength=\"100\">
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.collaboratorUser.password\"|trans}}</label>
                                    <input id=\"password_input\" type=\"password\" name=\"c_password\" class=\"form-control collaborators_modal_inputs\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.collaboratorUser.name\"|trans}}</label>
                                    <input id=\"name_input\" type=\"text\" name=\"c_name\" class=\"form-control collaborators_modal_inputs\" maxlength=\"100\">
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{\"modal.input.collaboratorUser.cif\"|trans}}</label>
                                    <input id=\"cif_input\" type=\"text\" name=\"c_cif\" class=\"form-control collaborators_modal_inputs\" maxlength=\"20\">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"addColUser_submit\" class=\"btn btn-primary\">{{ (\"general.accept\")|trans }}</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--End modal add collaboratorUser-->

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id=\"page-title\">
        <h1 class=\"page-header text-overflow\">{{\"backend.collaborators.header\"|trans}}</h1>
        <br/>
        <div style=\"margin-right: 25px; display: flex; justify-content: space-between;\">
            {# <button id=\"add_button\" class=\"btn btn-success btn-labeled fa fa-plus\" data-toggle='modal' data-target='#add_colUser'>{{\"general.add\"|trans}}</button> #}
            {# <form id=\"sync_form\" action=\"{{ path('sync_collaboratorUsers') }}\">
                <button id=\"sync_button\" class=\"btn btn-info btn-labeled fa fa-refresh\">{{\"general.sync\"|trans}}</button>
            </form> #}
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id=\"page-content\">
        
        <div style=\"display: block;
                    margin-bottom: 10px;
                    margin-right: 24px;
                    margin-top: 20px;
                    float: right;\">
            <label class=\"control-label\">{{\"general.search\"|trans}}:</label>
            <input id=\"search-input\" class='search-input' type=\"text\" placeholder=\"{{\"general.search\"|trans}}...\" spellcheck=\"false\">
        </div>

        <!-- Tabla Usuarios colaboradores -->
        <!--===================================================-->
        <div class=\"panel\">
            <div class=\"panel-body\">
                <table id=\"table_collaborators\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>{{\"dataTable.collaborators.username\"|trans}}</th>
                            <th>{{\"dataTable.collaborators.email\"|trans}}</th>
                            <th>{{\"dataTable.collaborators.name\"|trans}}</th>
                            <th>{{\"dataTable.collaborators.collaborator\"|trans}}</th>
                            <th>{{\"dataTable.collaborators.actions\"|trans}}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--===================================================-->
    

    </div>
    <!--===================================================-->
    <!--End page content-->

{% endblock %}

{% block javascripts %}
    {{parent()}}

<script>
    \$(document).ready(function(){
        \$(\"#collaboratorUsers_li\").addClass(\"active-link\");

        \$.getJSON(\"{{ path('add_collaborator_chosen_list') }}\", function(json) {
            \$(\"#collaborator-chosen-select\").empty();
            \$(\"#collaborator-chosen-select\").append('<option value=\"\"> ---- </option>');
            \$.each(json, function (idx, obj) {
                \$(\"#collaborator-chosen-select\").append('<option value=\"' + obj.id + '\">' + obj.name + '</option>');
            });
            \$(\"#collaborator-chosen-select\").chosen({ width:'100%' });
        });

        var time = null;
        createTable();

        \$('#search-input').keyup(function() {
            clearInterval(time);
            time = setTimeout(function() {
                reloadDataTable();
            }, 1500);
        });

        {#* Comentada porque no se utiliza ahora mismo #}
        {# \$('#sync_button').click(function(){
            \$(\"#sync_form\").submit();
        }); #}

        \$('#addColUser_submit').click(function(){

            \$(\"#modal_add_collaboratorUsers_form\").submit(function( event ) {
                event.preventDefault();
            });

            if( \$.trim(\$(\"#username_input\").val()) == \"\"             ||
                \$.trim(\$(\"#collaborator-chosen-select\").val()) == \"\" ||
                \$.trim(\$(\"#email_input\").val()) == \"\"                ||
                \$.trim(\$(\"#password_input\").val()) == \"\"             ||
                \$.trim(\$(\"#name_input\").val()) == \"\"                 ||
                \$.trim(\$(\"#cif_input\").val()) == \"\"
            ) {  
                swal.fire({
                    title: '{{\"general.form.allfields.mandatory\"|trans}}',
                    html: '',
                    icon: 'error',
                    showConfirmButton: true
                });
            } else {
                \$.ajax({
                    url:'{{ path(\"list_collaborator_create\") }}',
                    data: {
                        'inputs': \$('#modal_add_collaboratorUsers_form').serializeArray()
                    },
                    type:\"POST\",
                    success: function(data){
                        swal.fire({
                            title: data[\"message\"],
                            html: \"\",
                            icon: 'success',
                            showConfirmButton: true
                        });
                        reloadDataTable();
                        \$('#modal_add_collaboratorUsers_form').modal('hide');
                        \$(\".collaborators_modal_inputs\").val('');
                        \$(\"#collaborator-chosen-select\").trigger(\"chosen:updated\");
                    },
                    error:function(err){
                        swal.fire({
                            title: err[\"responseJSON\"][\"message\"],
                            html: '',
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            }

        });

    });

    function createTable() {

        \$('#table_collaborators').DataTable({
            order: [0, 'ASC'],
            searching: false,
            rowReorder: true,
            columnDefs: [
                { orderable: true, className: 'reorder', targets: [0,1,2,3] },
                { orderable: false, targets: 4 }
            ],
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100,
                    \"{{('dataTable.general.lengthMenu.all')|trans}}\"
                ]
            ],
            responsive: false,
            autoWidth: false,
            scrollX: true,
            processing: false,
            serverSide: true,
            pagingType: \"full_numbers\",
            language: {
                \"sProcessing\": \"{{ 'dataTable.general.language.sProcessing' | trans }}\",
                \"sLengthMenu\": \"{{ ('dataTable.general.language.sLengthMenu') | trans}}\",
                \"sZeroRecords\": \"{{ ('dataTable.general.language.sZeroRecords') | trans }}\",
                \"sEmptyTable\": \"{{ ('dataTable.general.language.sZeroRecords') | trans }}\",
                \"sInfo\": \"{{ ('dataTable.general.language.sInfo') | trans }}\",
                \"sInfoEmpty\": \"{{ ('dataTable.general.language.sInfoEmpty') | trans }}\",
                \"sInfoFiltered\": \"{{ ('dataTable.general.language.sInfoFiltered') | trans }}\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"{{ ('dataTable.general.language.sSearch') | trans }}:\",
                \"sUrl\": \"\",
                \"sInfoThousands\": \",\",
                \"sLoadingRecords\": \"{{ ('dataTable.general.language.sLoadingRecords') | trans }}\",
                \"oPaginate\": {
                    \"sFirst\": \"{{ ('dataTable.general.language.oPaginate.sFirst') | trans }}\",
                    \"sLast\": \"{{ ('dataTable.general.language.oPaginate.sLast') | trans }}\",
                    \"sNext\": \"{{ ('dataTable.general.language.oPaginate.sNext') | trans }}\",
                    \"sPrevious\": \"{{ ('dataTable.general.language.oPaginate.sPrevious') | trans }}\",
                },
                \"oAria\": {
                    \"sSortAscending\": \": {{ ('dataTable.general.language.oAria.sSortAscending') | trans }}\",
                    \"sSortDescending\": \": {{ ('dataTable.general.language.oAria.sSortDescending') | trans }}\"
                },
            },
            ajax: {
                url: \"{{ path('collaborators_table') }}\",
                method: 'POST',
                data: {
                    'form_filters': \$('#table_collaborators').serialize(),
                    'search_filter': \$('#search-input').val(),
                }
            },
            initComplete: function() {},
            drawCallback: function() {

            },
            columns: [
                {data: 'username'},
                {data: 'email'},
                {data: 'name'},
                {data: 'collaborator'},
                {data: {}, render: function(data, row) {
                        html = '<div style=\"display: flex; justify-content: center;\"><a class=\"btn btn-primary\" style href=\"{{ path(\"login_as_user\", {userId: \"toReplace\"}) }}\"  >{{\"dataTable.collaborators.login\"|trans}}</a></div>';
                        html = html.replace(\"toReplace\", data['id']);

                        return html;
                    }
                }
            ]
        });
    }

    {# Función encargada de recargar el ajax del datatable #}
    let reloadDataTable = function() {
        \$(\"#table_collaborators\").DataTable().destroy();
        createTable();
    }
    {# ################################################### #}

</script>


{% endblock %}", "backend/collaborators.html.twig", "/var/www/rira_web/templates/backend/collaborators.html.twig");
    }
}
