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

/* __string_template__e020b7590c9f1ec8b518ead58a35c63192834109ff9eeeb226b3eb8632d0278f */
class __TwigTemplate_802aa7aec2c801eb6e26d2f18fe459bf942b3949f786a264c84cb88792349b1e extends \Twig\Template
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
        echo "?destination=/import-data-master\" class=\"d-inline-flex align-items-center justify-content-center btn btn-secondary btn-circle btn-lg\">
                      <i class=\"fs-5 ti ti-pencil\"></i>
                    </a>
<a href=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["edit_node"] ?? null), 4, $this->source), "html", null, true);
        echo "?destination=/import-data-master\" class=\"d-inline-flex align-items-center justify-content-center btn btn-danger btn-circle btn-lg\">
                      <i class=\"fs-5 ti ti-trash\"></i>
                    </a>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e020b7590c9f1ec8b518ead58a35c63192834109ff9eeeb226b3eb8632d0278f";
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
        return new Source("", "__string_template__e020b7590c9f1ec8b518ead58a35c63192834109ff9eeeb226b3eb8632d0278f", "");
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
