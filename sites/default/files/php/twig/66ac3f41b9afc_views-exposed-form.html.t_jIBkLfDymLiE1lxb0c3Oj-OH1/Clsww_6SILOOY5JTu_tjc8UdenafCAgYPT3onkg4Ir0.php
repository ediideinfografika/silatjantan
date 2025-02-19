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

/* themes/silatjantan/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_9268aa01d788dcaeccf531da8a6c937de7e40ed51ce0ea7538ebe80017e8b9f8 extends \Twig\Template
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
        // line 12
        if ( !twig_test_empty(($context["q"] ?? null))) {
            // line 13
            echo "  ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["q"] ?? null), 17, $this->source), "html", null, true);
            echo "
";
        }
        // line 19
        echo "

       <div class=\"row\">
    <form";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "uk-form-stacked"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">
      ";
        // line 24
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["element"]) {
            // line 25
            echo "     
     ";
            // line 26
            if (twig_in_filter((($__internal_compile_0 = $context["element"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#type"] ?? null) : null), [0 => "textfield", 1 => "select", 2 => "checkbox", 3 => "radios"])) {
                // line 27
                echo "             <div class=\"col-5\">       ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"], 27, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 29
            echo "        
         ";
            // line 30
            if (twig_in_filter((($__internal_compile_1 = $context["element"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#type"] ?? null) : null), [0 => "actions"])) {
                // line 31
                echo "             <div class=\"col\">       ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"], 31, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 33
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      
    </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/views/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  84 => 33,  78 => 31,  76 => 30,  73 => 29,  67 => 27,  65 => 26,  62 => 25,  57 => 24,  53 => 22,  48 => 19,  43 => 17,  41 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/views/views-exposed-form.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/views/views-exposed-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "for" => 24);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
