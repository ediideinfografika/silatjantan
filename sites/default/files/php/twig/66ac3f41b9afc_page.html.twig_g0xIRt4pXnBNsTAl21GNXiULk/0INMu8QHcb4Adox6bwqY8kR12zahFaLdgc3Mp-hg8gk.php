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

/* themes/silatmobile/templates/layout/page.html.twig */
class __TwigTemplate_2837c6f7afe5c9287ebb045d71fb18de extends \Twig\Template
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
        // line 60
        echo "

    <!-- loader -->
       <div id=\"loader\">
        <img src=\"/sites/default/files/icon/logo.png\" alt=\"icon\" class=\"loading-icon\">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton goBack\">
                <ion-icon name=\"chevron-back-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"pageTitle\"> 
                ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"right\">
        ";
        // line 80
        if (twig_in_filter("/mobile/list-kondisi-jalan", ($context["curpath"] ?? null))) {
            // line 81
            echo "            <a href=\"/mobile/kondisi-jalan-mobile\" class=\"headerButton\" >
                <ion-icon name=\"map-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"add outline\"></ion-icon>
            </a>
        ";
        } elseif (twig_in_filter("/node/36875",         // line 84
($context["curpath"] ?? null))) {
            // line 85
            echo "            <a href=\"/mobile/list-kondisi-jalan\" class=\"headerButton\" >
                <ion-icon name=\"list-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"add outline\"></ion-icon>
            </a>
        ";
        } elseif (twig_in_filter("/mobile/kondisi-jalan-per-ruas",         // line 88
($context["curpath"] ?? null))) {
            // line 89
            echo "            <a href=\"/mobile/list-kondisi-jalan\" class=\"headerButton\" >
                <ion-icon name=\"list-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"add outline\"></ion-icon>
            </a>
        ";
        }
        // line 93
        echo "        </div>


        
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">
    <div  class=\"section mt-2\">

";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "

    </div>
    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
      ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_menu", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
    <!-- *
    
     App Bottom Menu -->

    <!-- * App Bottom Menu -->

<script   src=\"https://code.jquery.com/jquery-3.6.0.min.js\"   integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"   crossorigin=\"anonymous\"></script>
<script>
 jQuery(function(\$) {
     \$(\"input[name='field_status_laporanx']\").on('change', function() {
  alert( this.value );
});
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
     console.log('asolole');
     \$('.item').each(function() {
      if (this.href === path) {
       \$(this).addClass('active');
      }
     });
    });

</script>";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 112,  99 => 104,  86 => 93,  80 => 89,  78 => 88,  73 => 85,  71 => 84,  66 => 81,  64 => 80,  57 => 76,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/layout/page.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 80);
        static $filters = array("escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
