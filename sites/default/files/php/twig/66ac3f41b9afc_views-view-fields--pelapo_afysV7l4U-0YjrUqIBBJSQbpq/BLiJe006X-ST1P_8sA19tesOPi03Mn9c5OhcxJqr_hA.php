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

/* themes/silatmobile/templates/views/views-view-fields--pelaporan--page_3.html.twig */
class __TwigTemplate_6ef0d3a013eb0bee38b0fc2290ea4d7492b8852dc5dbb75bf6204381ae35c184 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "
";
        // line 35
        $context["statx"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_status_laporan", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), 35, $this->source)));
        // line 36
        echo "
";
        // line 37
        if (twig_in_filter("Ditolak", ($context["statx"] ?? null))) {
            // line 38
            $context["bg"] = "bg-danger";
        } elseif (twig_in_filter("Ditindaklanjuti",         // line 39
($context["statx"] ?? null))) {
            // line 40
            $context["bg"] = "bg-succes";
        } else {
            // line 42
            $context["bg"] = "bg-primary";
        }
        // line 44
        echo "
<div class=\"card-block mb-2 ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg"] ?? null), 45, $this->source), "html", null, true);
        echo "\">
                <div class=\"card-main\">
                    <div class=\"card-button dropdown\">
                        <button type=\"button\" class=\"btn btn-link btn-icon\" data-bs-toggle=\"dropdown\">
                            <ion-icon name=\"ellipsis-horizontal\" role=\"img\" class=\"md hydrated\" aria-label=\"ellipsis horizontal\"></ion-icon>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"/node/";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid_1", [], "any", false, false, true, 52), "content", [], "any", false, false, true, 52), 52, $this->source));
        echo "/edit?destination=/mobile/laporan-saya\">
                                <ion-icon name=\"pencil-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"pencil outline\"></ion-icon>Edit
                            </a>

                            <a class=\"dropdown-item\" href=\"/node/";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid_1", [], "any", false, false, true, 56), "content", [], "any", false, false, true, 56), 56, $this->source));
        echo "\">
                                <ion-icon name=\"logo-buffer\" role=\"img\" class=\"md hydrated\" aria-label=\"logo-buffer\"></ion-icon>Detail
                            </a>
                         
                           
                        </div>
                    </div>
                    <div class=\"balance\">
                        <span class=\"label\">Status</span>
                        <h1 class=\"title\">";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_status_laporan", [], "any", false, false, true, 65), "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"in\">
                        <div class=\"card-number\">
                            <span class=\"label\">tgl Posting</span>
                            ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created", [], "any", false, false, true, 70), "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
                        </div>
                        <div class=\"bottom\">
                            <div class=\"card-expiry\">
                                <span class=\"label\">Nama Ruas</span>
                                ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_nama_ruas", [], "any", false, false, true, 75), "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
                            </div>

                            <div>
                            <br>
                    ";
        // line 80
        if (twig_in_filter("Ditindaklanjuti", ($context["statx"] ?? null))) {
            // line 81
            echo "                    <a href=\"/node/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid_1", [], "any", false, false, true, 81), "content", [], "any", false, false, true, 81), 81, $this->source));
            echo "\" class=\"btn btn-dark btn-lg btn-block\" >Detail Tindaklanjut</a>
                    ";
        }
        // line 83
        echo "                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>

";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/views/views-view-fields--pelaporan--page_3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 83,  117 => 81,  115 => 80,  107 => 75,  99 => 70,  91 => 65,  79 => 56,  72 => 52,  62 => 45,  59 => 44,  56 => 42,  53 => 40,  51 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/views/views-view-fields--pelaporan--page_3.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/views/views-view-fields--pelaporan--page_3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 37);
        static $filters = array("render" => 35, "escape" => 45, "raw" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
