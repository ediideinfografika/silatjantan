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

/* themes/silatjantan/templates/content/node--halaman.html.twig */
class __TwigTemplate_3a420b74ac2d5ebb9f0ee8f20f311ad6413f84006db0667814c17aba4c56a5df extends \Twig\Template
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
        // line 71
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "uk-article"], "method", false, false, true, 71), 71, $this->source), "html", null, true);
        echo ">

  ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 73, $this->source), "html", null, true);
        echo "
  ";
        // line 74
        if ( !($context["page"] ?? null)) {
            // line 75
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "uk-article-title"], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 76, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 79
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 79, $this->source), "html", null, true);
        echo "

  ";
        // line 81
        if (($context["display_submitted"] ?? null)) {
            // line 82
            echo "    <footer>
      ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 83, $this->source), "html", null, true);
            echo "
      <div";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "uk-article-meta"], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            echo ">
        ";
            // line 85
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 86
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 86, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 90
        echo "


  <div uk-grid>
    <div   class=\"uk-width-1-3@m\">
        <div class=\"uk-card uk-card-default uk-card-body\"> ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_photo", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "</div>
    </div>
     <div   class=\"uk-width-2-3@m\">
        <div class=\"uk-card uk-card-default uk-card-body\">";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98), 98, $this->source));
        echo "</div>
    </div>
   
</div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/content/node--halaman.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 98,  100 => 95,  93 => 90,  85 => 86,  83 => 85,  79 => 84,  75 => 83,  72 => 82,  70 => 81,  64 => 79,  56 => 76,  51 => 75,  49 => 74,  45 => 73,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/content/node--halaman.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/content/node--halaman.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 74, "trans" => 85);
        static $filters = array("escape" => 71, "raw" => 98);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'raw'],
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
