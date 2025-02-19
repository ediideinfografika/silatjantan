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

/* themes/silatjantan/templates/form/input.html.twig */
class __TwigTemplate_aff306dd9b8db1f9972c581b7c752dc911f66d10e0695d1c508f63d1fcb0f83f extends \Twig\Template
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
        // line 17
        $context["classes"] = [0 => (((((((twig_get_attribute($this->env, $this->source,         // line 18
($context["attributes"] ?? null), "type", [], "any", false, false, true, 18) == "email") || (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 18) == "password")) || (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 18) == "search")) || (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 18) == "text")) || (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 18) == "number"))) ? ("form-control") : ("")), 1 => ((((((twig_get_attribute($this->env, $this->source,         // line 19
($context["attributes"] ?? null), "type", [], "any", false, false, true, 19) == "email") || (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 19) == "password")) || (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 19) == "search")) || (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 19) == "text"))) ? ("form-control") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 20
($context["attributes"] ?? null), "type", [], "any", false, false, true, 20) == "submit")) ? ("btn btn-primary") : ("")), 3 => (((twig_get_attribute($this->env, $this->source,         // line 21
($context["attributes"] ?? null), "type", [], "any", false, false, true, 21) == "checkbox")) ? ("form-check-input") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,         // line 22
($context["attributes"] ?? null), "type", [], "any", false, false, true, 22) == "radio")) ? ("form-check-input") : ("")), 5 => (((twig_get_attribute($this->env, $this->source,         // line 23
($context["attributes"] ?? null), "type", [], "any", false, false, true, 23) == "hidden")) ? ("uk-margin") : ("")), 6 => ((        // line 24
($context["errors"] ?? null)) ? ("uk-form-danger") : (""))];
        // line 27
        echo "<input";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        echo " />";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 27, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 27,  46 => 24,  45 => 23,  44 => 22,  43 => 21,  42 => 20,  41 => 19,  40 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/form/input.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17);
        static $filters = array("escape" => 27);
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
