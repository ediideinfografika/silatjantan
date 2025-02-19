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

/* modules/contrib/simplelogin/templates/page--simplelogin.html.twig */
class __TwigTemplate_c5bc22bc95c54f42c764fe70adb83767b857aa177d56670ed63b210018f7209d extends \Twig\Template
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
        // line 10
        ob_start(function () { return ''; });
        // line 11
        echo "  <div class=\"simplelogin-wrapper ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_class"] ?? null), 11, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_opacity"] ?? null), 11, $this->source), "html", null, true);
        echo "\">
    <div class=\"simplelogin-form\" style=\"width: ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_width"] ?? null), 12, $this->source), "html", null, true);
        echo "px\">
     

      <div class=\"simplelogin-bg\">
        <div class=\"simplelogin-logo ok\">
          <a href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 17, $this->source), "html", null, true);
        echo "\" alt=\"Home\"/></a>
        </div>
<br>
<br>
        ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
        ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
 
         ";
        // line 24
        if ((($context["path"] ?? null) == "/user/login")) {
            // line 25
            echo "          <div class=\"forgot-password\">
            Lupa Password? <a href=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source), "html", null, true);
            echo "user/password\">Klik disini</a>
          </div>
        ";
        }
        // line 29
        echo "

         <div class=\"simplelogin-link\">
        ";
        // line 32
        if ((($context["path"] ?? null) == "/user/password")) {
            // line 33
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source), "html", null, true);
            echo "user/login\" class=\"signreg\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a>
        ";
        } elseif ((        // line 34
($context["path"] ?? null) == "/user/register")) {
            // line 35
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source), "html", null, true);
            echo "user/login\" class=\"signreg\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a>
        ";
        } else {
            // line 37
            echo "          ";
            if ((($context["site_register"] ?? null) != "admin_only")) {
                // line 38
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 38, $this->source), "html", null, true);
                echo "user/register\" class=\"signreg\">Daftar</a>
          ";
            }
            // line 40
            echo "        ";
        }
        // line 41
        echo "      </div>
      </div>
    </div>
  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 46
        echo " <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<style>
#edit-mail{
    display:none;
}
</style>
<script>
 function generateRandomEmail() {
        var randomText = Math.random().toString(36).substring(7);
        return randomEmail = \"usergenerate-\" + randomText + \"@gmail.com\";

        return randomEmail;
    }
    
    
//when the webpage is loaded
\$(document).ready(function() {
  //show an alert message
  //alert(\"Hello, this is Bing!\");
    \$('#edit-mail').val(generateRandomEmail());
    \$(\".js-password-confirm\").attr(\"placeholder\", \"Ulangi password\"); 
    \$(\"#edit-name\").attr(\"placeholder\", \"Masukkan Username anda\"); 
    
    \$(\".password-confirm-message\").text(\"Kecocokan password\");
     \$(\"#edit-submit\").val(\"Login\");
     
     var \$registerForm = \$('#user-register-form');

  if (\$registerForm.length) {
    // Cari tombol submit dalam form pendaftaran pengguna.
    var \$submitButton = \$registerForm.find('input[type=\"submit\"]');

    if (\$submitButton.length) {
      // Ganti teks tombol submit.
      \$submitButton.val('Daftar');
    }
  }
  
   
});



</script>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/simplelogin/templates/page--simplelogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  121 => 41,  118 => 40,  112 => 38,  109 => 37,  101 => 35,  99 => 34,  92 => 33,  90 => 32,  85 => 29,  79 => 26,  76 => 25,  74 => 24,  69 => 22,  65 => 21,  56 => 17,  48 => 12,  41 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/simplelogin/templates/page--simplelogin.html.twig", "/home/asew3698/public_html/silatjantan/modules/contrib/simplelogin/templates/page--simplelogin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 10, "if" => 24);
        static $filters = array("escape" => 11, "t" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if'],
                ['escape', 't'],
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
