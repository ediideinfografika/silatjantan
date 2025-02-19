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

/* themes/silatmobile/templates/views/views-view-fields--pelaporan--ver_lap_page.html.twig */
class __TwigTemplate_b86c054dd01d3b2ad7c1f3cd7f599c79d81a8322654cf4598cf19398c775f1d4 extends \Twig\Template
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
        $context["statx"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_status_laporan", [], "any", false, false, true, 34), "content", [], "any", false, false, true, 34), 34, $this->source)));
        // line 35
        echo "                    <a href=\"/node/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" class=\"item\">
                    ";
        // line 36
        if (twig_in_filter(($context["statx"] ?? null), "Diterima")) {
            // line 37
            echo "                        <div class=\"icon-box bg-primary\">
                    ";
        } elseif (twig_in_filter(        // line 38
($context["statx"] ?? null), "Ditolak")) {
            // line 39
            echo "                         <div class=\"icon-box bg-danger\">
                    ";
        } else {
            // line 41
            echo "                     <div class=\"icon-box bg-success\">
                    ";
        }
        // line 43
        echo "                            <ion-icon name=\"megaphone-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"key outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>
                                <div class=\"mb-05\"><strong style=\" color: #010f72;\"> ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_nama_lengkap", [], "any", false, false, true, 47), "content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo " </strong></div>
                                  <div class=\"text-small mb-05\"> ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_nomor_whatsapp", [], "any", false, false, true, 48), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</div>
                                <div class=\"text-small mb-05\"> ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_status_laporan", [], "any", false, false, true, 49), "content", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</div>
                                <div class=\"text-xsmall\">";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created", [], "any", false, false, true, 50), "content", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </a>


";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/views/views-view-fields--pelaporan--ver_lap_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 50,  75 => 49,  71 => 48,  67 => 47,  61 => 43,  57 => 41,  53 => 39,  51 => 38,  48 => 37,  46 => 36,  41 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/views/views-view-fields--pelaporan--ver_lap_page.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/views/views-view-fields--pelaporan--ver_lap_page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 36);
        static $filters = array("render" => 34, "escape" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape'],
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
