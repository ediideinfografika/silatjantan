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

/* themes/silatjantan/templates/views/views-view.html.twig */
class __TwigTemplate_111a06cf5f2d207aff8f0fe8d8c93dbf8653ab20917aa8f4096d9d2fda8fbf76 extends \Twig\Template
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
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null), 38, $this->source)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : (""))];
        // line 42
        echo "<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
<script>
  \$(document).ready(function() {
    // Saat halaman dimuat, atur posisi elemen dengan ID \"menud\"
    \$('#menu').css('right', '40px');
  });
</script>


<div";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
  ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 52, $this->source), "html", null, true);
        echo "
  ";
        // line 53
        if (($context["title"] ?? null)) {
            // line 54
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 54, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 56
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 56, $this->source), "html", null, true);
        echo "
  ";
        // line 57
        if (($context["header"] ?? null)) {
            // line 58
            echo "    <div class=\"view-header uk-margin\">
      ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 59, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 62
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 63
            echo "    <div class=\"view-filters uk-card uk-card-default uk-card-body uk-margin\">
      ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 64, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 67
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 68
            echo "    <div class=\"attachment attachment-before uk-margin\">
      ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 69, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if (($context["rows"] ?? null)) {
            // line 74
            echo "    <div class=\"view-content uk-margin\">
      ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 75, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 77
($context["empty"] ?? null)) {
            // line 78
            echo "    <div class=\"view-emptyuk-margin\">
      ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 79, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        if (($context["pager"] ?? null)) {
            // line 84
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 84, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 86
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 87
            echo "    <div class=\"attachment attachment-after uk-margin\">
      ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 88, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 91
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 92
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 92, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 94
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 95
            echo "    <div class=\"view-footer uk-margin\">
      ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 96, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 99
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 100
            echo "    <div class=\"feed-icons uk-margin\">
      ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 101, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 104
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 104,  186 => 101,  183 => 100,  180 => 99,  174 => 96,  171 => 95,  168 => 94,  162 => 92,  159 => 91,  153 => 88,  150 => 87,  147 => 86,  141 => 84,  139 => 83,  136 => 82,  130 => 79,  127 => 78,  125 => 77,  120 => 75,  117 => 74,  115 => 73,  112 => 72,  106 => 69,  103 => 68,  100 => 67,  94 => 64,  91 => 63,  88 => 62,  82 => 59,  79 => 58,  77 => 57,  72 => 56,  66 => 54,  64 => 53,  60 => 52,  56 => 51,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/views/views-view.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 53);
        static $filters = array("clean_class" => 36, "escape" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
