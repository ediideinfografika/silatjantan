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

/* themes/silatjantan/templates/content/node--43660.html.twig */
class __TwigTemplate_f9729020671ed09fe5010378583879278a97998f10cb7712c5c5ac68f7eb5782 extends \Twig\Template
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

<iframe id=\"myFrame\" src=\"https://arsippumadiunkab.site/drive\"  referrerpolicy=\"no-referrer\" data-tf-redirect-target=\"_self\" width=\"100%\" height=\"700px\" frameborder=\"0\"></iframe>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
<script>
 \$(document).ready(function() {
        // Call your function when the document is ready
        sendMessageToChild();
    });


 // Define a variable to track whether the reload has occurred
var reloadDone = false;

// Add an event listener for the 'message' event
function handleMessage(event) {
    // Check if the origin is valid and the reload hasn't been done
    if (event.origin === 'https://arsippumadiunkab.site' && !reloadDone) {
        // Do something with the received message
        console.log('dari client', event.data);

        // Set the flag to true to indicate that the reload has been done
        reloadDone = true;

        // Reload the page
       // location.reload();
    }
}

// Add the event listener only once
if (window.addEventListener) {
    window.addEventListener('message', handleMessage, false);
} else {
    // For IE 8 and earlier versions
    window.attachEvent('onmessage', handleMessage);
}


    // Mengirim pesan ke child frame
    function sendMessageToChild() {
      // Dapatkan referensi ke iframe
      var childFrame = document.getElementById('myFrame').contentWindow;
      
      // Kirim pesan ke child frame dengan asal yang ditentukan
      childFrame.postMessage('Hello from the parent frame!', 'https://arsippumadiunkab.site/');
    }
  </script>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/content/node--43660.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/content/node--43660.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/content/node--43660.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 71);
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
