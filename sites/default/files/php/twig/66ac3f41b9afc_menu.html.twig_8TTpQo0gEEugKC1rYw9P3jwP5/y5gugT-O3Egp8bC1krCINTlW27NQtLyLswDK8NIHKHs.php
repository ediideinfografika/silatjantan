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

/* themes/silatjantan/templates/navigation/menu.html.twig */
class __TwigTemplate_cda18bc8b6d787f3a99796d5b3260ec8 extends \Twig\Template
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
        // line 28
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            // line 34
            $context["classes"] = [0 => "sidebarnav", 1 => "in"];
            // line 39
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 40
                echo "  ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "    <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo " id=\"sidebarnav\">
   ";
                } else {
                    // line 43
                    echo "   <ul aria-expanded=\"false\" class=\"collapse first-level\">
  ";
                }
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "        ";
                    // line 47
                    $context["classes"] = [0 => "sidebar-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "in_active_trail", [], "any", false, false, true, 49)) ? ("selected") : (""))];
                    // line 52
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 52), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 54
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54)) {
                        // line 55
                        echo "            ";
                        // line 56
                        $context["link_classes"] = [0 => "sidebar-link", 1 => ((twig_get_attribute($this->env, $this->source,                         // line 58
$context["item"], "in_active_trail", [], "any", false, false, true, 58)) ? ("active") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                         // line 59
$context["item"], "below", [], "any", false, false, true, 59)) ? ("has-arrow") : (""))];
                        // line 62
                        echo "            <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                        echo " >
              ";
                        // line 64
                        echo "              ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "localized_options", [], "any", false, false, true, 64), "icon_class", [], "any", false, false, true, 64)) {
                            // line 65
                            echo "                <span class=\"d-flex\">
                  <i class=\"";
                            // line 66
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "localized_options", [], "any", false, false, true, 66), "icon_class", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                            echo "\"></i>
                </span>
              ";
                        }
                        // line 69
                        echo "                ";
                        if ((($context["menu_level"] ?? null) != 0)) {
                            // line 70
                            echo "                <div class=\"round-16 d-flex align-items-center justify-content-center\">
              <i class=\"ti ti-circle\"></i>
            </div>
                  ";
                        }
                        // line 74
                        echo "              <span class=\"hide-menu\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                        echo "</span>
            </a>
            ";
                        // line 77
                        echo "            ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 77)) {
                            echo "              
                ";
                            // line 78
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 78, $context, $this->getSourceContext()));
                            echo "
          
            ";
                        }
                        // line 81
                        echo "          ";
                    }
                    // line 82
                    echo "        </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 84,  154 => 82,  151 => 81,  145 => 78,  140 => 77,  134 => 74,  128 => 70,  125 => 69,  119 => 66,  116 => 65,  113 => 64,  106 => 62,  104 => 59,  103 => 58,  102 => 56,  100 => 55,  97 => 54,  92 => 52,  90 => 49,  89 => 47,  87 => 46,  83 => 45,  79 => 43,  73 => 41,  70 => 40,  67 => 39,  65 => 34,  63 => 33,  60 => 32,  45 => 31,  41 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/navigation/menu.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 28, "macro" => 31, "set" => 34, "if" => 39, "for" => 45);
        static $filters = array("escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
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
