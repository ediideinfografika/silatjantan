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

/* themes/silatmobile/templates/layout/page--mobile--laporan-saya.html.twig */
class __TwigTemplate_89d499e1b553878e7e38cd43e2867a3170d1439efe6307b7d0a176c2162c0f0b extends \Twig\Template
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
            <a href=\"/node/add/pelaporan?destination=/mobile/laporan-saya\" class=\"headerButton\" >
                <ion-icon name=\"add-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"add outline\"></ion-icon>
            </a>
        </div>
        
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">
    <div  class=\"section mt-2\">
";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "

    </div>
    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
   ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_menu", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
    <!-- * App Bottom Menu -->

    <!-- * App Bottom Menu -->


<script   src=\"https://code.jquery.com/jquery-3.6.0.min.js\"   integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"   crossorigin=\"anonymous\"></script>
<script>
 jQuery(function(\$) {
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
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
        return "themes/silatmobile/templates/layout/page--mobile--laporan-saya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 99,  75 => 91,  57 => 76,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/layout/page--mobile--laporan-saya.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/layout/page--mobile--laporan-saya.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
