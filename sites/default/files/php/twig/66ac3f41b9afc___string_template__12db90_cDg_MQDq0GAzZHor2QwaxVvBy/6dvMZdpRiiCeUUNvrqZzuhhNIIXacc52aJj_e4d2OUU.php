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

/* __string_template__12db90ab29678115116d16a75d20d5da95961af0170808dd0b95fae8bee67d26 */
class __TwigTemplate_0e58e660529884c05762ade70e75d7e46d40cbe47a749fd013204f6d99fa816c extends \Twig\Template
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
        echo "<div class=\"card-block mb-2\">
                <div class=\"card-main\">
                    <div class=\"card-button dropdown\">
                        <button type=\"button\" class=\"btn btn-link btn-icon\" data-bs-toggle=\"dropdown\">
                            <ion-icon name=\"ellipsis-horizontal\" role=\"img\" class=\"md hydrated\" aria-label=\"ellipsis horizontal\"></ion-icon>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <a class=\"dropdown-item\" href=\"/node/";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid_1"] ?? null), 8, $this->source), "html", null, true);
        echo "/edit\">
                                <ion-icon name=\"pencil-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"pencil outline\"></ion-icon>Edit
                            </a>
                         
                           
                        </div>
                    </div>
                    <div class=\"balance\">
                        <span class=\"label\">Status</span>
                        <h1 class=\"title\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_status_laporan"] ?? null), 17, $this->source), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"in\">
                        <div class=\"card-number\">
                            <span class=\"label\">tgl Posting</span>
                            ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 22, $this->source), "html", null, true);
        echo "
                        </div>
                        <div class=\"bottom\">
                            <div class=\"card-expiry\">
                                <span class=\"label\">Nama Ruas</span>
                                ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_nama_ruas"] ?? null), 27, $this->source), "html", null, true);
        echo "
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__12db90ab29678115116d16a75d20d5da95961af0170808dd0b95fae8bee67d26";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  68 => 22,  60 => 17,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__12db90ab29678115116d16a75d20d5da95961af0170808dd0b95fae8bee67d26", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8);
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
