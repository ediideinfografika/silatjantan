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

/* themes/silatjantan/templates/form/container.html.twig */
class __TwigTemplate_9fda161081d9608a9061400008b5a0da extends \Twig\Template
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
        // line 25
        $context["classes"] = [0 => ((        // line 26
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 27
($context["has_parent"] ?? null)) ? ("form-wrapper") : ("")), 2 => ((        // line 28
($context["form_row"] ?? null)) ? ("uk-form-row") : ("")), 3 => ((        // line 29
($context["form_margin"] ?? null)) ? ("uk-margin") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 30
($context["attributes"] ?? null), "hasClass", [0 => "messages"], "method", false, false, true, 30)) ? ("uk-alert") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 31
($context["attributes"] ?? null), "hasClass", [0 => "messages--warning"], "method", false, false, true, 31)) ? ("uk-alert-warning") : (""))];
        // line 34
        echo "
<div";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 35, $this->source), "html", null, true);
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/form/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 35,  47 => 34,  45 => 31,  44 => 30,  43 => 29,  42 => 28,  41 => 27,  40 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/form/container.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/form/container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25);
        static $filters = array("escape" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
