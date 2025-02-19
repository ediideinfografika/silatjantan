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

/* themes/silatjantan/templates/layout/page.html.twig */
class __TwigTemplate_29fcacd95d761e2a75c55faff6977d3a extends \Twig\Template
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
        // line 60
        echo "<style>
@media print {
  .sidebar,header, .d-flex,.footer{
    display: none !important;
  }
  .main-content{
    margin: 0;
  }
  .container-fluid,.p-30{
    padding: 0 !important;
  }
  div.F4 .sheet{
    transform: scale(1.25) translate(83px, 122px);
  }
}
</style>

  <!--  Body Wrapper -->
  <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
    data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <!-- Sidebar Start -->
    <aside class=\"left-sidebar\">
      <!-- Sidebar scroll-->
      <div>
        <div class=\"brand-logo d-flex align-items-center justify-content-between\">
          <a href=\"/\" class=\"text-nowrap logo-img\" style=\"padding: 23px;\">
            <img src=\"/sites/default/files/applogo.png\" width=\"180\" alt=\"\" />
          </a>
          <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
            <i class=\"ti ti-x fs-8\"></i>
          </div>
        </div>
          <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar=\"\">
        ";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_sidebar", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo " 
       </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class=\"body-wrapper\">
      <!--  Header Start -->
      <header class=\"app-header\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <ul class=\"navbar-nav\">
             ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
          </ul>
          <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
            <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
             
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\">
                  <img src=\"/sites/default/files/logoprofil.png\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                  <div class=\"message-body\">
                    <a href=\"/user\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-user fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Profile</p>
                    </a>
                   
                 
                    <a href=\"/user/logout\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class=\"container-fluid\">
          
        ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "
        </div>
        
        <div class=\"py-6 px-6 text-center\">
          <p class=\"mb-0 fs-4\">Design and Developed by <a href=\"https://ediide.com/\" target=\"_blank\" class=\"pe-1 text-primary text-decoration-underline\">ediide.com</a></p>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 135,  90 => 106,  74 => 93,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/layout/page.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 93);
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
