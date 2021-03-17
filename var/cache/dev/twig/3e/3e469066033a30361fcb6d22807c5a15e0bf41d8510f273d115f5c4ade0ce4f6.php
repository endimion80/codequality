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

/* pdf/delivery_note_pdf.html.twig */
class __TwigTemplate_3bbdee85a0789f691bf9249284856260191458b91566afc5e734f7c8cd4c5dd5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/delivery_note_pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/delivery_note_pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.deliverynote"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>

         <style>
            body {
                font-family: Corbel, \"Lucida Grande\", \"Lucida Sans Unicode\", \"Lucida Sans\", \"DejaVu Sans\", \"Bitstream Vera Sans\", \"Liberation Sans\", Verdana, \"Verdana Ref\", sans-serif;
                font-size: 12px;
            }
            div { margin: -2px; }
            .page_break { page-break-before: always; }
            .page{ display:block; height: 975px; width: 700px; } ";
        // line 15
        echo "            .row{display: block;}
            .w2{width: 2%; display: inline-block; vertical-align:top; }
            .w10{width: 10%; display: inline-block; vertical-align:top; }
            .w20{width: 20%; display: inline-block; vertical-align:top; }
            .w25{width: 25%; display: inline-block; vertical-align:top; }
            .w30{width: 30%; display: inline-block; vertical-align:top; }
            .w38{width: 38%; display: inline-block; vertical-align:top; }
            .w40{width: 40%; display: inline-block; vertical-align:top; }
            .w50{width: 50%; display: inline-block; vertical-align:top; }
            .w60{width: 60%; display: inline-block; vertical-align:top; }
            .w70{width: 70%; display: inline-block; vertical-align:top; }
            .w80{width: 80%; display: inline-block; vertical-align:top; }
            .w90{width: 90%; display: inline-block; vertical-align:top; }
            .w100{width: 100%; display: inline-block; vertical-align:top; }
            .table1 { font-size: 10px; width: 100%; border: none;}
            .table1 td {margin: 0px; padding: 2px 4px;}
            .table1 tr:nth-child(odd) {background: #EDEDED}
            .table1 tr:nth-child(even) {background: white}
            .table1 tr td:nth-child(1)  {border-right: 1px solid black;}
            .tablePhoto { margin-left: 15px; }
            .tablePhoto tr td { width:220px; }
            .blueHeader {background: #0093D9; color: white; font-weight: bold; padding: 1px 3px; font-size: 15px;}
            .blueLabel {color: #0093D9;font-size: 12px;margin-left: 2px;}
            .vehicle{
                margin-top: 15px;
                width: 100%;
            }
            .checkbox { position: relative;
                        top: 1px;
                        height: 8px;
                        width: 8px;
                        border: 2px solid #6d6d6d;
                        display: inline-block;
                        margin: 2px;
                        background-color: white;
            }
            .photo_container{
                width: 100%;
                padding-top: 10px;
                height:230px;
            }
            .photo_element {text-align: center; margin-bottom:10px;}
            .photo_element img{
                max-width: 210px;
                max-height:170px;
            }
        </style>
    </head>
    <body>

        <div class='page'>
            <div class='row'>
                <div class='w50' style='padding-top:20px;'>
                    <img id=\"asitur_logo\" src='";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["web_domain"]) || array_key_exists("web_domain", $context) ? $context["web_domain"] : (function () { throw new RuntimeError('Variable "web_domain" does not exist.', 68, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur.png"), "html", null, true);
        echo "' height=\"50px\">

                    <div style='margin-top:30px; font-size: 12px;'>
                        ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 71, $this->source); })()), "getVhAddress", [], "method", false, false, false, 71), "html", null, true);
        echo "<br>
                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 72, $this->source); })()), "getVhTown", [], "method", false, false, false, 72), "getName", [], "method", false, false, false, 72), "html", null, true);
        echo "<br>
                        ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 73, $this->source); })()), "getVhZipcode", [], "method", false, false, false, 73), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 73, $this->source); })()), "getVhProvince", [], "method", false, false, false, 73), "getName", [], "method", false, false, false, 73), "html", null, true);
        echo "<br>
                        ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 74, $this->source); })()), "getSignerDni", [], "method", false, false, false, 74), "html", null, true);
        echo "
                    </div>
                </div>
                <div class='w50' style='padding-top:20px;'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.deliverynote_number"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 80, $this->source); })()), "getCode", [], "method", false, false, false, 80), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.deliverynote_reference"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 83, $this->source); })()), "getReference", [], "method", false, false, false, 83), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.collaborator_name"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 86, $this->source); })()), "getCollaborator", [], "method", false, false, false, 86), "getName", [], "method", false, false, false, 86), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.date_and_time"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 89, $this->source); })()), "getReceptionDate", [], "method", false, false, false, 89), "Y-m-d H:i"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.crane"), "html", null, true);
        echo "</td><td>";
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 92, $this->source); })()), "getCrane", [], "method", false, false, false, 92)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 92, $this->source); })()), "getCrane", [], "method", false, false, false, 92), "getReference", [], "method", false, false, false, 92), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.operator"), "html", null, true);
        echo "</td><td>";
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 95, $this->source); })()), "getOperator", [], "method", false, false, false, 95)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 95, $this->source); })()), "getOperator", [], "method", false, false, false, 95), "getReference", [], "method", false, false, false, 95), "html", null, true);
        }
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class='row'>
                <div class='w100 blueHeader' style='margin-top:15px;'>
                    ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.owner_data"), "html", null, true);
        echo "
                </div>
            </div>
            <div class='row'>
                <div class='w100 blueLabel' style='margin-top:15px;'>
                    ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 108, $this->source); })()), "getCallerName", [], "method", false, false, false, 108), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 108, $this->source); })()), "getCallerLastName", [], "method", false, false, false, 108), "html", null, true);
        echo "
                </div>
            </div>

            <div class='row'>
                <div class='w100' style='margin-top:5px;'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.phone"), "html", null, true);
        echo "</td>
                            <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 117, $this->source); })()), "getCallerPhone", [], "method", false, false, false, 117), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.dni"), "html", null, true);
        echo "</td>
                            <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 121, $this->source); })()), "getSignerDni", [], "method", false, false, false, 121), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.email"), "html", null, true);
        echo "</td>
                            <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 125, $this->source); })()), "getSignerEmail", [], "method", false, false, false, 125), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.plate"), "html", null, true);
        echo "</td>
                            <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 129, $this->source); })()), "getVhPlate", [], "method", false, false, false, 129), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.brand"), "html", null, true);
        echo "</td>
                            <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 133, $this->source); })()), "getVhBrand", [], "method", false, false, false, 133), "getName", [], "method", false, false, false, 133), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.model"), "html", null, true);
        echo "</td>
                            <td>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 137, $this->source); })()), "getVhModel", [], "method", false, false, false, 137), "getName", [], "method", false, false, false, 137), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.color"), "html", null, true);
        echo "</td>
                            <td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 141, $this->source); })()), "getVhColor", [], "method", false, false, false, 141), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div>

            <br>
            <div class='row'>
                <div class='w100 blueHeader'>
                    ";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.vh_status"), "html", null, true);
        echo "
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w30'>
                    ";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 156, $this->source); })()), "getVhType", [], "method", false, false, false, 156), "getVehicleType", [], "method", false, false, false, 156) == "car")) {
            // line 157
            echo "                        <img class=\"vehicle\" src='";
            echo twig_escape_filter($this->env, (isset($context["web_domain"]) || array_key_exists("web_domain", $context) ? $context["web_domain"] : (function () { throw new RuntimeError('Variable "web_domain" does not exist.', 157, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/coche.png"), "html", null, true);
            echo "' />
                    ";
        } else {
            // line 159
            echo "                        <img class=\"vehicle\" src='";
            echo twig_escape_filter($this->env, (isset($context["web_domain"]) || array_key_exists("web_domain", $context) ? $context["web_domain"] : (function () { throw new RuntimeError('Variable "web_domain" does not exist.', 159, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/moto.png"), "html", null, true);
            echo "' />
                    ";
        }
        // line 161
        echo "                </div>
                <div class='w70'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.km"), "html", null, true);
        echo "</td>
                            <td>";
        // line 166
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 166, $this->source); })()), "getKmCheck", [], "method", false, false, false, 166)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 166, $this->source); })()), "getKmCheck", [], "method", false, false, false, 166), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 166, $this->source); })()), "getKm", [], "method", false, false, false, 166), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.fuel"), "html", null, true);
        echo "</td>
                            <td>";
        // line 170
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 170, $this->source); })()), "getFuelCheck", [], "method", false, false, false, 170)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 170, $this->source); })()), "getFuelCheck", [], "method", false, false, false, 170), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 170, $this->source); })()), "getFuel", [], "method", false, false, false, 170), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.photo"), "html", null, true);
        echo "</td>
                            <td>
                                ";
        // line 175
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 175, $this->source); })()), "getAttachments", [], "method", false, false, false, 175)) > 0)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
        }
        // line 176
        echo "                                ";
        // line 182
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.equipment"), "html", null, true);
        echo "</td>
                            <td>";
        // line 186
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 186, $this->source); })()), "getEquipmentAndObjectsCheck", [], "method", false, false, false, 186)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 186, $this->source); })()), "getEquipmentAndObjectsCheck", [], "method", false, false, false, 186), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 186, $this->source); })()), "getEquipmentAndObjects", [], "method", false, false, false, 186), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.vh_dirty"), "html", null, true);
        echo "</td>
                            <td>";
        // line 190
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 190, $this->source); })()), "getDirtyVh", [], "method", false, false, false, 190)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.vh_scratch_description"), "html", null, true);
        echo "</td>
                            <td>";
        // line 194
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 194, $this->source); })()), "getScratchesOnVh", [], "method", false, false, false, 194)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
        }
        echo "</td>
                        </tr>
                    </table>

                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w38'>
                    
                    <div class='row'>
                        <div class='w100 blueHeader'>
                            ";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.accident_info"), "html", null, true);
        echo "
                        </div>
                    </div>

                    <div class='row'>
                        <div class='w100'>
                            <br>
                            <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td>";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.vh_implicated"), "html", null, true);
        echo "</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.n_passengers"), "html", null, true);
        echo "</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.law_enforcement_intervention"), "html", null, true);
        echo "</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <div class='w2'>
                </div>
                <div class='w60'>
                    <div class='row'>
                        <div class='w100 blueHeader'>
                            ";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.origin"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.destination"), "html", null, true);
        echo "
                        </div>
                    </div>

                    <div class='row'>
                        <div class='w38'>
                            <img class=\"map\" src='";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new RuntimeError('Variable "map" does not exist.', 242, $this->source); })()), "html", null, true);
        echo "' style='margin-top:20px'/>
                        </div>
                        <div class='w2'></div>

                        <div class='w60'>
                            <br>
                            <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td>";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.origin"), "html", null, true);
        echo "</td>
                                    <td>";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 251, $this->source); })()), "getVhAddress", [], "method", false, false, false, 251), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.base_destination"), "html", null, true);
        echo "</td>
                                    <td>
                                        ";
        // line 256
        if ((twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 256, $this->source); })()), "getDestinationType", [], "method", false, false, false, 256) == "Entrega en base")) {
            // line 257
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 257, $this->source); })()), "getDeliveryName", [], "method", false, false, false, 257), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 257, $this->source); })()), "getDeliveryTown", [], "method", false, false, false, 257), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 257, $this->source); })()), "getDeliveryProvince", [], "method", false, false, false, 257), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 257, $this->source); })()), "getDeliveryAddress", [], "method", false, false, false, 257), "html", null, true);
            echo "
                                        ";
        }
        // line 259
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.home_destination"), "html", null, true);
        echo "</td>
                                    <td>
                                        ";
        // line 264
        if ((twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 264, $this->source); })()), "getDestinationType", [], "method", false, false, false, 264) == "Entrega en domicilio")) {
            // line 265
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 265, $this->source); })()), "getDeliveryName", [], "method", false, false, false, 265), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 265, $this->source); })()), "getDeliveryTown", [], "method", false, false, false, 265), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 265, $this->source); })()), "getDeliveryProvince", [], "method", false, false, false, 265), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 265, $this->source); })()), "getDeliveryAddress", [], "method", false, false, false, 265), "html", null, true);
            echo "
                                        ";
        }
        // line 267
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.workshop_destination"), "html", null, true);
        echo "</td>
                                    <td>
                                        ";
        // line 272
        if ((twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 272, $this->source); })()), "getDestinationType", [], "method", false, false, false, 272) == "Entrega en taller")) {
            // line 273
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 273, $this->source); })()), "getDeliveryName", [], "method", false, false, false, 273), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 273, $this->source); })()), "getDeliveryTown", [], "method", false, false, false, 273), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 273, $this->source); })()), "getDeliveryProvince", [], "method", false, false, false, 273), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 273, $this->source); })()), "getDeliveryAddress", [], "method", false, false, false, 273), "html", null, true);
            echo "
                                        ";
        }
        // line 275
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.workshop_delivery_info"), "html", null, true);
        echo "</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w100 blueHeader'>
                    ";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.RIS"), "html", null, true);
        echo "
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w10'>
                    ";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.RIS"), "html", null, true);
        echo ": ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 295, $this->source); })()), "getIsRIS", [], "method", false, false, false, 295)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.yes"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.no"), "html", null, true);
        }
        // line 296
        echo "                </div>

                <div class='w90'>

                    <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.failure_type"), "html", null, true);
        echo "</td>
                            <td>";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 303, $this->source); })()), "getFailureType", [], "method", false, false, false, 303), "getDescription", [], "method", false, false, false, 303), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div>

            <br>
            <div class='row'>
                <div class='w100 blueHeader'>
                    ";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.failure"), "html", null, true);
        echo "
                </div>
            </div>
            
            <br>
            <div class='row'>
                <div class='w100'>
                   <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.observations"), "html", null, true);
        echo "</td>
                            <td>";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 322, $this->source); })()), "getFailureDescription", [], "method", false, false, false, 322), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div>


            <br>
            <div class='row'>
                <div class='w50 blueHeader'>
                    ";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.client_signature"), "html", null, true);
        echo "
                </div>
                <div class='w50'></div>
            </div>
            <br>
            <div class='row'>
                <div class='w25'>
                    ";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.client_signature"), "html", null, true);
        echo "<br>
                    <img class=\"signature\" src='";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 340, $this->source); })()), "getClientSignature", [], "method", false, false, false, 340), "html", null, true);
        echo "' />
                </div>
                <div class='w25'>
                    ";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.delivery_signature"), "html", null, true);
        echo "<br>
                    <img class=\"signature\" src='";
        // line 344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 344, $this->source); })()), "getReceiverSignature", [], "method", false, false, false, 344), "html", null, true);
        echo "' />
                </div>
            </div>


        </div><!--page-->
        
        <div class=\"page_break\"></div>
        
        ";
        // line 354
        echo "        <div class='page'>
            <div class='row'>
                <div class='w50'>
                    ";
        // line 358
        echo "                    <img id=\"asitur_logo\" src='";
        echo twig_escape_filter($this->env, (isset($context["web_domain"]) || array_key_exists("web_domain", $context) ? $context["web_domain"] : (function () { throw new RuntimeError('Variable "web_domain" does not exist.', 358, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo-asitur.png"), "html", null, true);
        echo "' height=\"50px\">

                    <div style='font-size: 12px;'>
                        ";
        // line 361
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 361, $this->source); })()), "getVhAddress", [], "method", false, false, false, 361), "html", null, true);
        echo "<br>
                        ";
        // line 362
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 362, $this->source); })()), "getVhTown", [], "method", false, false, false, 362), "getName", [], "method", false, false, false, 362), "html", null, true);
        echo "<br>
                        ";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 363, $this->source); })()), "getVhZipcode", [], "method", false, false, false, 363), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 363, $this->source); })()), "getVhProvince", [], "method", false, false, false, 363), "getName", [], "method", false, false, false, 363), "html", null, true);
        echo "<br>
                        ";
        // line 364
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 364, $this->source); })()), "getSignerDni", [], "method", false, false, false, 364), "html", null, true);
        echo "
                    </div>
                </div>
                <div class='w50'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.deliverynote_number"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 370, $this->source); })()), "getCode", [], "method", false, false, false, 370), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.deliverynote_reference"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 373, $this->source); })()), "getReference", [], "method", false, false, false, 373), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.collaborator_name"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 376, $this->source); })()), "getCollaborator", [], "method", false, false, false, 376), "getName", [], "method", false, false, false, 376), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.date_and_time"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 379, $this->source); })()), "getReceptionDate", [], "method", false, false, false, 379), "Y-m-d H:i"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.crane"), "html", null, true);
        echo "</td><td>";
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 382, $this->source); })()), "getCrane", [], "method", false, false, false, 382)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 382, $this->source); })()), "getCrane", [], "method", false, false, false, 382), "getReference", [], "method", false, false, false, 382), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td>";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.operator"), "html", null, true);
        echo "</td><td>";
        if (twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 385, $this->source); })()), "getOperator", [], "method", false, false, false, 385)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 385, $this->source); })()), "getOperator", [], "method", false, false, false, 385), "getReference", [], "method", false, false, false, 385), "html", null, true);
        }
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class='row' style='margin-top:10px'>
                <div class='w100 blueHeader'  >
                    ";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.origin_photos"), "html", null, true);
        echo "
                </div>
                <br>
            </div>

            <div class='row' style='margin-top:10px;'>
                ";
        // line 399
        $context["i"] = 0;
        // line 400
        echo "                ";
        $context["j"] = 0;
        // line 401
        echo "
                <table class='tablePhoto'>
                    ";
        // line 403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 403, $this->source); })()), "getAttachments", [], "method", false, false, false, 403));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 404
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["attachment"], "getPhotoType", [], "method", false, false, false, 404) == "creacion_albaran")) {
                // line 405
                echo "                            ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 405, $this->source); })()) + 1);
                // line 406
                echo "                            ";
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 406, $this->source); })()) + 1);
                // line 407
                echo "                            
                            ";
                // line 408
                if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 408, $this->source); })()) == 1)) {
                    // line 409
                    echo "                                <tr>
                            ";
                }
                // line 411
                echo "
                            <td>
                                <div class='photo_container'>
                                    <div class='photo_element'>
                                        <img src='data:image/png;base64, ";
                // line 415
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getFileData", [], "method", false, false, false, 415), "html", null, true);
                echo "'>
                                    </div>
                                    ";
                // line 417
                if (twig_get_attribute($this->env, $this->source, $context["attachment"], "getDescriptionExtra", [], "method", false, false, false, 417)) {
                    // line 418
                    echo "                                        <div class='photo_details'>
                                            ";
                    // line 419
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getDescriptionExtra", [], "method", false, false, false, 419), "html", null, true);
                    echo "
                                        </div>
                                    ";
                }
                // line 422
                echo "                                    <div class='photo_latlng'>
                                        ";
                // line 423
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getLatitude", [], "method", false, false, false, 423), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getLongitude", [], "method", false, false, false, 423), "html", null, true);
                echo "
                                    </div>
                                    <div class='photo_date'>
                                        ";
                // line 426
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getCreationDate", [], "method", false, false, false, 426), "Y-m-d H:i:s"), "html", null, true);
                echo "
                                    </div>
                                </div>
                            </td>

                            ";
                // line 431
                if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 431, $this->source); })()) == 3)) {
                    // line 432
                    echo "                                ";
                    $context["i"] = 0;
                    // line 433
                    echo "                                </tr>
                            ";
                }
                // line 435
                echo "
                        ";
            }
            // line 437
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "                    ";
        if (((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 438, $this->source); })()) == 0)) {
            // line 439
            echo "                        <tr>
                            <td>
                                ";
            // line 441
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.no_documents"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        // line 445
        echo "                </table>
            </div>

            <div><br></div>

            <div class='row'>
                <div class='w100 blueHeader'  >
                    ";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.delivery_photos"), "html", null, true);
        echo "
                </div>
                <br>
            </div>

            <div class='row' style='margin-top:10px;'>
                ";
        // line 458
        $context["i"] = 0;
        // line 459
        echo "                ";
        $context["j"] = 0;
        // line 460
        echo "
                <table class='tablePhoto'>
                    ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 462, $this->source); })()), "getAttachments", [], "method", false, false, false, 462));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 463
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["attachment"], "getPhotoType", [], "method", false, false, false, 463) == "modificacion_albaran")) {
                // line 464
                echo "                            ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 464, $this->source); })()) + 1);
                // line 465
                echo "                            ";
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 465, $this->source); })()) + 1);
                // line 466
                echo "                            
                            ";
                // line 467
                if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 467, $this->source); })()) == 1)) {
                    // line 468
                    echo "                                <tr>
                            ";
                }
                // line 470
                echo "
                            <td>
                                <div class='photo_container'>
                                    <div class='photo_element'>
                                        <img src='data:image/png;base64, ";
                // line 474
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getFileData", [], "method", false, false, false, 474), "html", null, true);
                echo "'>
                                    </div>
                                    ";
                // line 476
                if (twig_get_attribute($this->env, $this->source, $context["attachment"], "getDescriptionExtra", [], "method", false, false, false, 476)) {
                    // line 477
                    echo "                                        <div class='photo_details'>
                                            ";
                    // line 478
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getDescriptionExtra", [], "method", false, false, false, 478), "html", null, true);
                    echo "
                                        </div>
                                    ";
                }
                // line 481
                echo "                                    <div class='photo_latlng'>
                                        ";
                // line 482
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getLatitude", [], "method", false, false, false, 482), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getLongitude", [], "method", false, false, false, 482), "html", null, true);
                echo "
                                    </div>
                                    <div class='photo_date'>
                                        ";
                // line 485
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "getCreationDate", [], "method", false, false, false, 485), "Y-m-d H:i:s"), "html", null, true);
                echo "
                                    </div>
                                </div>
                            </td>

                            ";
                // line 490
                if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 490, $this->source); })()) == 3)) {
                    // line 491
                    echo "                                ";
                    $context["i"] = 0;
                    // line 492
                    echo "                                </tr>
                            ";
                }
                // line 494
                echo "
                        ";
            }
            // line 496
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        echo "                    ";
        if (((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 497, $this->source); })()) == 0)) {
            // line 498
            echo "                        <tr>
                            <td>
                                ";
            // line 500
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pdf.deliverynote.no_documents"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        // line 504
        echo "                </table>
            </div>
        </div><!--page-->
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf/delivery_note_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1026 => 504,  1019 => 500,  1015 => 498,  1012 => 497,  1006 => 496,  1002 => 494,  998 => 492,  995 => 491,  993 => 490,  985 => 485,  977 => 482,  974 => 481,  968 => 478,  965 => 477,  963 => 476,  958 => 474,  952 => 470,  948 => 468,  946 => 467,  943 => 466,  940 => 465,  937 => 464,  934 => 463,  930 => 462,  926 => 460,  923 => 459,  921 => 458,  912 => 452,  903 => 445,  896 => 441,  892 => 439,  889 => 438,  883 => 437,  879 => 435,  875 => 433,  872 => 432,  870 => 431,  862 => 426,  854 => 423,  851 => 422,  845 => 419,  842 => 418,  840 => 417,  835 => 415,  829 => 411,  825 => 409,  823 => 408,  820 => 407,  817 => 406,  814 => 405,  811 => 404,  807 => 403,  803 => 401,  800 => 400,  798 => 399,  789 => 393,  774 => 385,  764 => 382,  756 => 379,  748 => 376,  740 => 373,  732 => 370,  723 => 364,  717 => 363,  713 => 362,  709 => 361,  701 => 358,  696 => 354,  684 => 344,  680 => 343,  674 => 340,  670 => 339,  660 => 332,  647 => 322,  643 => 321,  631 => 312,  619 => 303,  615 => 302,  607 => 296,  599 => 295,  590 => 289,  576 => 278,  571 => 275,  559 => 273,  557 => 272,  552 => 270,  547 => 267,  535 => 265,  533 => 264,  528 => 262,  523 => 259,  511 => 257,  509 => 256,  504 => 254,  498 => 251,  494 => 250,  483 => 242,  472 => 236,  456 => 223,  449 => 219,  442 => 215,  430 => 206,  411 => 194,  407 => 193,  397 => 190,  393 => 189,  383 => 186,  379 => 185,  374 => 182,  372 => 176,  366 => 175,  361 => 173,  351 => 170,  347 => 169,  337 => 166,  333 => 165,  327 => 161,  320 => 159,  313 => 157,  311 => 156,  302 => 150,  290 => 141,  286 => 140,  280 => 137,  276 => 136,  270 => 133,  266 => 132,  260 => 129,  256 => 128,  250 => 125,  246 => 124,  240 => 121,  236 => 120,  230 => 117,  226 => 116,  213 => 108,  205 => 103,  190 => 95,  180 => 92,  172 => 89,  164 => 86,  156 => 83,  148 => 80,  139 => 74,  133 => 73,  129 => 72,  125 => 71,  118 => 68,  63 => 15,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{{ (\"pdf.deliverynote.deliverynote\")|trans }} {{ intervention.id }}</title>

         <style>
            body {
                font-family: Corbel, \"Lucida Grande\", \"Lucida Sans Unicode\", \"Lucida Sans\", \"DejaVu Sans\", \"Bitstream Vera Sans\", \"Liberation Sans\", Verdana, \"Verdana Ref\", sans-serif;
                font-size: 12px;
            }
            div { margin: -2px; }
            .page_break { page-break-before: always; }
            .page{ display:block; height: 975px; width: 700px; } {# A4 #}
            .row{display: block;}
            .w2{width: 2%; display: inline-block; vertical-align:top; }
            .w10{width: 10%; display: inline-block; vertical-align:top; }
            .w20{width: 20%; display: inline-block; vertical-align:top; }
            .w25{width: 25%; display: inline-block; vertical-align:top; }
            .w30{width: 30%; display: inline-block; vertical-align:top; }
            .w38{width: 38%; display: inline-block; vertical-align:top; }
            .w40{width: 40%; display: inline-block; vertical-align:top; }
            .w50{width: 50%; display: inline-block; vertical-align:top; }
            .w60{width: 60%; display: inline-block; vertical-align:top; }
            .w70{width: 70%; display: inline-block; vertical-align:top; }
            .w80{width: 80%; display: inline-block; vertical-align:top; }
            .w90{width: 90%; display: inline-block; vertical-align:top; }
            .w100{width: 100%; display: inline-block; vertical-align:top; }
            .table1 { font-size: 10px; width: 100%; border: none;}
            .table1 td {margin: 0px; padding: 2px 4px;}
            .table1 tr:nth-child(odd) {background: #EDEDED}
            .table1 tr:nth-child(even) {background: white}
            .table1 tr td:nth-child(1)  {border-right: 1px solid black;}
            .tablePhoto { margin-left: 15px; }
            .tablePhoto tr td { width:220px; }
            .blueHeader {background: #0093D9; color: white; font-weight: bold; padding: 1px 3px; font-size: 15px;}
            .blueLabel {color: #0093D9;font-size: 12px;margin-left: 2px;}
            .vehicle{
                margin-top: 15px;
                width: 100%;
            }
            .checkbox { position: relative;
                        top: 1px;
                        height: 8px;
                        width: 8px;
                        border: 2px solid #6d6d6d;
                        display: inline-block;
                        margin: 2px;
                        background-color: white;
            }
            .photo_container{
                width: 100%;
                padding-top: 10px;
                height:230px;
            }
            .photo_element {text-align: center; margin-bottom:10px;}
            .photo_element img{
                max-width: 210px;
                max-height:170px;
            }
        </style>
    </head>
    <body>

        <div class='page'>
            <div class='row'>
                <div class='w50' style='padding-top:20px;'>
                    <img id=\"asitur_logo\" src='{{web_domain}}{{asset(\"media/logo-asitur.png\")}}' height=\"50px\">

                    <div style='margin-top:30px; font-size: 12px;'>
                        {{ intervention.getVhAddress() }}<br>
                        {{ intervention.getVhTown().getName() }}<br>
                        {{ intervention.getVhZipcode() }} {{ intervention.getVhProvince().getName() }}<br>
                        {{ intervention.getSignerDni() }}
                    </div>
                </div>
                <div class='w50' style='padding-top:20px;'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>{{ (\"pdf.deliverynote.deliverynote_number\")|trans }}</td><td>{{ intervention.getCode() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.deliverynote_reference\")|trans }}</td><td>{{ intervention.getReference() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.collaborator_name\")|trans }}</td><td>{{ intervention.getCollaborator().getName() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.date_and_time\")|trans }}</td><td>{{ intervention.getReceptionDate()|date('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.crane\")|trans }}</td><td>{% if intervention.getCrane() %}{{ intervention.getCrane().getReference() }}{% endif %}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.operator\")|trans }}</td><td>{% if intervention.getOperator() %}{{ intervention.getOperator().getReference() }}{% endif %}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class='row'>
                <div class='w100 blueHeader' style='margin-top:15px;'>
                    {{ (\"pdf.deliverynote.owner_data\")|trans }}
                </div>
            </div>
            <div class='row'>
                <div class='w100 blueLabel' style='margin-top:15px;'>
                    {{ intervention.getCallerName() }} {{ intervention.getCallerLastName() }}
                </div>
            </div>

            <div class='row'>
                <div class='w100' style='margin-top:5px;'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>{{ (\"pdf.deliverynote.phone\")|trans }}</td>
                            <td>{{ intervention.getCallerPhone() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.dni\")|trans }}</td>
                            <td>{{ intervention.getSignerDni() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.email\")|trans }}</td>
                            <td>{{ intervention.getSignerEmail() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.plate\")|trans }}</td>
                            <td>{{ intervention.getVhPlate() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.brand\")|trans }}</td>
                            <td>{{ intervention.getVhBrand().getName() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.model\")|trans }}</td>
                            <td>{{ intervention.getVhModel().getName() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.color\")|trans }}</td>
                            <td>{{ intervention.getVhColor() }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <br>
            <div class='row'>
                <div class='w100 blueHeader'>
                    {{ (\"pdf.deliverynote.vh_status\")|trans }}
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w30'>
                    {% if intervention.getVhType().getVehicleType() == 'car' %}
                        <img class=\"vehicle\" src='{{web_domain}}{{asset(\"media/coche.png\")}}' />
                    {% else %}
                        <img class=\"vehicle\" src='{{web_domain}}{{asset(\"media/moto.png\")}}' />
                    {% endif %}
                </div>
                <div class='w70'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>{{ (\"pdf.deliverynote.km\")|trans }}</td>
                            <td>{% if intervention.getKmCheck() %}{{ intervention.getKmCheck() }}{% else %}{{ intervention.getKm() }}{% endif %}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.fuel\")|trans }}</td>
                            <td>{% if intervention.getFuelCheck() %}{{ intervention.getFuelCheck() }}{% else %}{{ intervention.getFuel() }}{% endif %}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.photo\")|trans }}</td>
                            <td>
                                {% if intervention.getAttachments()|length > 0 %}{{ (\"general.yes\")|trans }}{% else %}{{ (\"general.no\")|trans }}{% endif %}
                                {# <!-- Al final no querían eso-->
                                <div style='width:80px;'>
                                Si: <div class='checkbox'>&nbsp;</div>&nbsp;&nbsp;&nbsp;
                                No: <div class='checkbox'>&nbsp;</div>
                                </div>
                                #}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.equipment\")|trans }}</td>
                            <td>{% if intervention.getEquipmentAndObjectsCheck() %}{{ intervention.getEquipmentAndObjectsCheck() }}{% else %}{{ intervention.getEquipmentAndObjects() }}{% endif %}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.vh_dirty\")|trans }}</td>
                            <td>{% if intervention.getDirtyVh() %}{{ (\"general.yes\")|trans }}{% else %}{{ (\"general.no\")|trans }}{% endif %}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.vh_scratch_description\")|trans }}</td>
                            <td>{% if intervention.getScratchesOnVh() %}{{ (\"general.yes\")|trans }}{% else %}{{ (\"general.no\")|trans }}{% endif %}</td>
                        </tr>
                    </table>

                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w38'>
                    
                    <div class='row'>
                        <div class='w100 blueHeader'>
                            {{ (\"pdf.deliverynote.accident_info\")|trans }}
                        </div>
                    </div>

                    <div class='row'>
                        <div class='w100'>
                            <br>
                            <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.vh_implicated\")|trans }}</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.n_passengers\")|trans }}</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.law_enforcement_intervention\")|trans }}</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <div class='w2'>
                </div>
                <div class='w60'>
                    <div class='row'>
                        <div class='w100 blueHeader'>
                            {{ (\"pdf.deliverynote.origin\")|trans }} / {{ (\"pdf.deliverynote.destination\")|trans }}
                        </div>
                    </div>

                    <div class='row'>
                        <div class='w38'>
                            <img class=\"map\" src='{{map}}' style='margin-top:20px'/>
                        </div>
                        <div class='w2'></div>

                        <div class='w60'>
                            <br>
                            <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.origin\")|trans }}</td>
                                    <td>{{ intervention.getVhAddress() }}</td>
                                </tr>
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.base_destination\")|trans }}</td>
                                    <td>
                                        {% if intervention.getDestinationType() == 'Entrega en base' %}
                                            {{ intervention.getDeliveryName() }} {{ intervention.getDeliveryTown() }}  {{ intervention.getDeliveryProvince() }} {{ intervention.getDeliveryAddress() }}
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.home_destination\")|trans }}</td>
                                    <td>
                                        {% if intervention.getDestinationType() == 'Entrega en domicilio' %}
                                                {{ intervention.getDeliveryName() }} {{ intervention.getDeliveryTown() }}  {{ intervention.getDeliveryProvince() }} {{ intervention.getDeliveryAddress() }}
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.workshop_destination\")|trans }}</td>
                                    <td>
                                        {% if intervention.getDestinationType() == 'Entrega en taller' %}
                                            {{ intervention.getDeliveryName() }} {{ intervention.getDeliveryTown() }}  {{ intervention.getDeliveryProvince() }} {{ intervention.getDeliveryAddress() }}
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ (\"pdf.deliverynote.workshop_delivery_info\")|trans }}</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w100 blueHeader'>
                    {{ (\"pdf.deliverynote.RIS\")|trans }}
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='w10'>
                    {{ (\"pdf.deliverynote.RIS\")|trans }}: {% if intervention.getIsRIS() %}{{ (\"general.yes\")|trans }}{% else %}{{ (\"general.no\")|trans }}{% endif %}
                </div>

                <div class='w90'>

                    <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>{{ (\"pdf.deliverynote.failure_type\")|trans }}</td>
                            <td>{{ intervention.getFailureType().getDescription() }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <br>
            <div class='row'>
                <div class='w100 blueHeader'>
                    {{ (\"pdf.deliverynote.failure\")|trans }}
                </div>
            </div>
            
            <br>
            <div class='row'>
                <div class='w100'>
                   <table class='table1' cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>{{ (\"pdf.deliverynote.observations\")|trans }}</td>
                            <td>{{ intervention.getFailureDescription() }}</td>
                        </tr>
                    </table>
                </div>
            </div>


            <br>
            <div class='row'>
                <div class='w50 blueHeader'>
                    {{ (\"pdf.deliverynote.client_signature\")|trans }}
                </div>
                <div class='w50'></div>
            </div>
            <br>
            <div class='row'>
                <div class='w25'>
                    {{ (\"pdf.deliverynote.client_signature\")|trans }}<br>
                    <img class=\"signature\" src='{{ intervention.getClientSignature() }}' />
                </div>
                <div class='w25'>
                    {{ (\"pdf.deliverynote.delivery_signature\")|trans }}<br>
                    <img class=\"signature\" src='{{ intervention.getReceiverSignature() }}' />
                </div>
            </div>


        </div><!--page-->
        
        <div class=\"page_break\"></div>
        
        {# Segunda página #}
        <div class='page'>
            <div class='row'>
                <div class='w50'>
                    {# No sé si hay que poner el PROVEEDOR#}
                    <img id=\"asitur_logo\" src='{{web_domain}}{{asset(\"media/logo-asitur.png\")}}' height=\"50px\">

                    <div style='font-size: 12px;'>
                        {{ intervention.getVhAddress() }}<br>
                        {{ intervention.getVhTown().getName() }}<br>
                        {{ intervention.getVhZipcode() }} {{ intervention.getVhProvince().getName() }}<br>
                        {{ intervention.getSignerDni() }}
                    </div>
                </div>
                <div class='w50'>
                    <table class='table1'  cellspacing=\"0\" cellpadding=\"0\">
                        <tr>
                            <td>{{ (\"pdf.deliverynote.deliverynote_number\")|trans }}</td><td>{{ intervention.getCode() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.deliverynote_reference\")|trans }}</td><td>{{ intervention.getReference() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.collaborator_name\")|trans }}</td><td>{{ intervention.getCollaborator().getName() }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.date_and_time\")|trans }}</td><td>{{ intervention.getReceptionDate()|date('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.crane\")|trans }}</td><td>{% if intervention.getCrane() %}{{ intervention.getCrane().getReference() }}{% endif %}</td>
                        </tr>
                        <tr>
                            <td>{{ (\"pdf.deliverynote.operator\")|trans }}</td><td>{% if intervention.getOperator() %}{{ intervention.getOperator().getReference() }}{% endif %}</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class='row' style='margin-top:10px'>
                <div class='w100 blueHeader'  >
                    {{ (\"pdf.deliverynote.origin_photos\")|trans }}
                </div>
                <br>
            </div>

            <div class='row' style='margin-top:10px;'>
                {% set i = 0 %}
                {% set j = 0 %}

                <table class='tablePhoto'>
                    {% for attachment in intervention.getAttachments() %}
                        {% if attachment.getPhotoType() == 'creacion_albaran' %}
                            {% set i = i + 1 %}
                            {% set j = j + 1 %}
                            
                            {% if i == 1 %}
                                <tr>
                            {% endif %}

                            <td>
                                <div class='photo_container'>
                                    <div class='photo_element'>
                                        <img src='data:image/png;base64, {{ attachment.getFileData() }}'>
                                    </div>
                                    {% if attachment.getDescriptionExtra() %}
                                        <div class='photo_details'>
                                            {{ attachment.getDescriptionExtra() }}
                                        </div>
                                    {% endif %}
                                    <div class='photo_latlng'>
                                        {{ attachment.getLatitude() }},{{ attachment.getLongitude() }}
                                    </div>
                                    <div class='photo_date'>
                                        {{ attachment.getCreationDate()|date('Y-m-d H:i:s') }}
                                    </div>
                                </div>
                            </td>

                            {% if i == 3 %}
                                {% set i = 0 %}
                                </tr>
                            {% endif %}

                        {% endif %}
                    {% endfor %}
                    {% if j == 0 %}
                        <tr>
                            <td>
                                {{ (\"pdf.deliverynote.no_documents\")|trans }}
                            </td>
                        </tr>
                    {% endif %}
                </table>
            </div>

            <div><br></div>

            <div class='row'>
                <div class='w100 blueHeader'  >
                    {{ (\"pdf.deliverynote.delivery_photos\")|trans }}
                </div>
                <br>
            </div>

            <div class='row' style='margin-top:10px;'>
                {% set i = 0 %}
                {% set j = 0 %}

                <table class='tablePhoto'>
                    {% for attachment in intervention.getAttachments() %}
                        {% if attachment.getPhotoType() == 'modificacion_albaran' %}
                            {% set i = i + 1 %}
                            {% set j = j + 1 %}
                            
                            {% if i == 1 %}
                                <tr>
                            {% endif %}

                            <td>
                                <div class='photo_container'>
                                    <div class='photo_element'>
                                        <img src='data:image/png;base64, {{ attachment.getFileData() }}'>
                                    </div>
                                    {% if attachment.getDescriptionExtra() %}
                                        <div class='photo_details'>
                                            {{ attachment.getDescriptionExtra() }}
                                        </div>
                                    {% endif %}
                                    <div class='photo_latlng'>
                                        {{ attachment.getLatitude() }},{{ attachment.getLongitude() }}
                                    </div>
                                    <div class='photo_date'>
                                        {{ attachment.getCreationDate()|date('Y-m-d H:i:s') }}
                                    </div>
                                </div>
                            </td>

                            {% if i == 3 %}
                                {% set i = 0 %}
                                </tr>
                            {% endif %}

                        {% endif %}
                    {% endfor %}
                    {% if j == 0 %}
                        <tr>
                            <td>
                                {{ (\"pdf.deliverynote.no_documents\")|trans }}
                            </td>
                        </tr>
                    {% endif %}
                </table>
            </div>
        </div><!--page-->
    </body>
</html>
", "pdf/delivery_note_pdf.html.twig", "/var/www/rira_web/templates/pdf/delivery_note_pdf.html.twig");
    }
}
