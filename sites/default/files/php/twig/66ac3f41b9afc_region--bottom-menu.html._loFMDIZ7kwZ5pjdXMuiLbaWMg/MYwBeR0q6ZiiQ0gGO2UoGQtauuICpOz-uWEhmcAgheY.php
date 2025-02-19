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

/* themes/silatmobile/templates/layout/region--bottom-menu.html.twig */
class __TwigTemplate_71e13cf0eab9ae2d3f7131ab6345da0c4b56a8f20e269f83ed40fd9c2a252e97 extends \Twig\Template
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
        // line 16
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source)))];
        // line 21
        echo "
 ";
        // line 22
        $context["rolex"] = Drupal\twig_tweak\TwigTweakExtension::drupalToken("current-user:roles:last");
        // line 23
        echo "
 <div class=\"appBottomMenu bg-primary text-light\">
        <a href=\"/mobile/dashboard\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"home-outline\"></ion-icon>
                <strong>Beranda</strong>
            </div>
        </a>
         <a href=\"#\" class=\"item\" onclick=\"submitResult(event)\">
            <div class=\"col\">
                <ion-icon name=\"map-outline\"></ion-icon>
                <strong>Data & Peta</strong>
            </div>
        </a>

        ";
        // line 38
        if ((($context["rolex"] ?? null) == "umum")) {
            // line 39
            echo "            <a href=\"/mobile/laporan-saya\" class=\"item\">
                    <div class=\"col\">
                        <div class=\"action-button large\">
                            <ion-icon name=\"megaphone-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"arrow up outline\" style=\"color: #051174 !important;\"></ion-icon>
                        </div>
                    </div>
                </a>

             ";
        } elseif ((        // line 47
($context["rolex"] ?? null) == "pejabat")) {
            // line 48
            echo "            <a href=\"/mobile/list-pelaporan\" class=\"item\">
                    <div class=\"col\">
                        <div class=\"action-button large\" style=\"    background: #8ad315;\">
                            <ion-icon name=\"layers-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"arrow up outline\" style=\"color: #051174 !important;\"></ion-icon>
                        </div>
                    </div>
                </a>
";
        } else {
            // line 56
            echo "      <a href=\"/mobile/verifikasi-pelaporan\" class=\"item\">
                    <div class=\"col\">
                        <div class=\"action-button large\" style=\"   background: #ff0707;\">
                            <ion-icon name=\"file-tray-full-outline\" role=\"img\" class=\"md hydrated\" aria-label=\"arrow up outline\" style=\"color: #fff !important;\"></ion-icon>
                        </div>
                    </div>
                </a>
";
        }
        // line 64
        echo "

 


        <a href=\"/mobile/panduan\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"help-circle-outline\"></ion-icon>
                <strong>Panduan</strong>
            </div>
        </a>
  ";
        // line 75
        if (($context["logged_in"] ?? null)) {
            // line 76
            echo "     <a href=\"/user\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"person-circle-outline\"></ion-icon>
                <strong>User</strong>
            </div>
        </a>
";
        } else {
            // line 83
            echo "         <a href=\"/user\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"log-in-outline\"></ion-icon>
                <strong>Login</strong>
            </div>
        </a>
\t
     ";
        }
        // line 90
        echo "  

       


    </div>


    <script>
    function submitResult(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Menu Peta',
         html:
    '<div class=\"wallet-card\" style=\"margin: -22px -37px 0;padding: 20px 34px;\">'+          
              '<div class=\"wallet-footer\">'+
                   '<div class=\"item\">'+
                       '<a href=\"/mobile/new-karakteristik\">'+
                           '<div class=\"icon-wrapper\">'+
                             '<img src=\"/sites/default/files/icon/destination.png\">'+
                           '</div>'+
                           '<strong>Karakteristik Jalan</strong>'+
                       '</a>'+
                   '</div>'+
                   '<div class=\"item\">'+
                       '<a href=\"/mobile/new-kondisi-jalan\">'+
                            '<div class=\"icon-wrapper\">'+
                             '<img src=\"/sites/default/files/icon/road.png\">'+
                           '</div>'+
                           '<strong>Kondisi Jalan</strong>'+
                       '</a>'+
                   '</div>'+                                     

               '</div>'+

               '<div class=\"wallet-footer\">'+
                   '<div class=\"item\">'+
                       '<a href=\"/mobile/new-perkerasan-jalan\">'+
                           '<div class=\"icon-wrapper\">'+
                             '<img src=\"/sites/default/files/icon/sepur.png\">'+
                           '</div>'+
                           '<strong>Perkerasan Jalan</strong>'+
                       '</a>'+
                   '</div>'+
                      '<div class=\"item\">'+
                       '<a href=\"/mobile/new-kondisi-jembatan\">'+
                            '<div class=\"icon-wrapper\">'+
                             '<img src=\"/sites/default/files/icon/bridge.png\">'+
                           '</div>'+
                           '<strong>Kondisi Jembatan</strong>'+
                       '</a>'+
                   '</div>'+

                    
                   '<div class=\"item\">'+
                       '<a href=\"/mobile/tentang\">'+
                            '<div class=\"icon-wrapper\">'+
                             '<img src=\"/sites/default/files/icon/booking.png\">'+
                           '</div>'+
                           '<strong>Tentang</strong>'+
                       '</a>'+
                   '</div>'+

                    

               '</div>'+
               
           '</div>',
    })
}
    </script>
";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/layout/region--bottom-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 90,  122 => 83,  113 => 76,  111 => 75,  98 => 64,  88 => 56,  78 => 48,  76 => 47,  66 => 39,  64 => 38,  47 => 23,  45 => 22,  42 => 21,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/layout/region--bottom-menu.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/layout/region--bottom-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 38);
        static $filters = array("clean_class" => 18);
        static $functions = array("drupal_token" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class'],
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
