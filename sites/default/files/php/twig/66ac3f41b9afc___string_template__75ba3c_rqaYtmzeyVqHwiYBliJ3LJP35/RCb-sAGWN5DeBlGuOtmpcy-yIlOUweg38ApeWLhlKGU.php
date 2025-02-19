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

/* __string_template__75ba3c03c011ca97a7966a83da636480785d48b9d8040458ad0711a963e38fca */
class __TwigTemplate_a9b8ae2838995d815229576c8d023ea2b9c059a741e35a30554f1f7867fbfa07 extends \Twig\Template
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
        // line 1
        echo "<a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["edit_node"] ?? null), 1, $this->source), "html", null, true);
        echo "?destination=/dashboard-manajemen\" class=\"d-inline-flex align-items-center justify-content-center btn btn-secondary btn-circle btn-lg\">
                      <i class=\"fs-5 ti ti-pencil\"></i>
                    </a>
<a href=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["delete_node"] ?? null), 4, $this->source), "html", null, true);
        echo "?destination=/dashboard-manajemen\" class=\"d-inline-flex align-items-center justify-content-center btn btn-danger btn-circle btn-lg\">
                      <i class=\"fs-5 ti ti-trash\"></i>
                    </a>
 
";
    }

    public function getTemplateName()
    {
        return "__string_template__75ba3c03c011ca97a7966a83da636480785d48b9d8040458ad0711a963e38fca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__75ba3c03c011ca97a7966a83da636480785d48b9d8040458ad0711a963e38fca", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
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
