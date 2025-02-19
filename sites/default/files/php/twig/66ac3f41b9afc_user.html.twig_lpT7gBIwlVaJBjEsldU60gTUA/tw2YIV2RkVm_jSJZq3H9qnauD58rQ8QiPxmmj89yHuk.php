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

/* themes/silatmobile/templates/user/user.html.twig */
class __TwigTemplate_718975a0d695b7b3d9bb0b98da6245b797002a477be1b7eb4106eb589e955eb3 extends \Twig\Template
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
        // line 19
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "profile"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">

</article>

<div id=\"appCapsule\" style=\"  padding-top: 10px;\">

        <div class=\"section mt-3 text-center\">
            <div class=\"avatar-section\">
                <a href=\"#\">
                    <img src=\"https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png\" alt=\"avatar\" class=\"imaged w100 rounded\">
                    <span class=\"button\">
                        <ion-icon name=\"camera-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"camera outline\"></ion-icon>
                    </span>
                </a>
            </div>
<br>
<br>
";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalToken("current-user:name"), "html", null, true);
        echo "<br>
";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalToken("current-user:roles:last"), "html", null, true);
        echo "
   ";
        // line 38
        if (($context["content"] ?? null)) {
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 39, $this->source), "html", null, true);
        }
        // line 41
        echo "

        </div>


       

        <div class=\"listview-title mt-1\">Profile Settings</div>
        <ul class=\"listview image-listview text inset\">
            <li>
                <a href=\"/user/edit\" class=\"item\">
                    <div class=\"in\">
                        <div>Ubah No Whatsapp</div>
                    </div>
                </a>
            </li>
            
            <li>
                <a href=\"/user/edit\" class=\"item\">
                    <div class=\"in\">
                        <div>Ubah Username</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"/user/edit\" class=\"item\">
                    <div class=\"in\">
                        <div>Ubah E-mail</div>
                    </div>
                </a>
            </li>
            
          
        </ul>

        <div class=\"listview-title mt-1\">Security</div>
        <ul class=\"listview image-listview text mb-2 inset\">
            <li>
                <a href=\"/user/edit\" class=\"item\">
                    <div class=\"in\">
                        <div>Ubah Password</div>
                    </div>
                </a>
            </li>
            
             <li>
                <a href=\"/user/logout\" class=\"item\">
                    <div class=\"in\" style=\" color: #ff0000;\">
                        <div>logout</div>
                    </div>
                </a>
            </li>
            

        </ul>


    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 41,  70 => 39,  68 => 38,  64 => 37,  60 => 36,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/user/user.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/user/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 19);
        static $functions = array("drupal_token" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['drupal_token']
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
