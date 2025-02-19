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

/* themes/silatmobile/templates/layout/page--node--edit--statusx.html.twig */
class __TwigTemplate_0b2f57b0fefdd1180701e02ff2a57037494283f17b3dcaa0f8cfee1333e64c8b extends \Twig\Template
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
#map { 
 display:none !important;
    }

    
/*Legend specific*/
.legend {
  padding: 6px 8px;
  font: 14px Arial, Helvetica, sans-serif;
  background: white;
  background: rgba(255, 255, 255, 0.8);
  /*box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);*/
  /*border-radius: 5px;*/
  line-height: 24px;
  color: #555;
}
.legend h4 {
  text-align: center;
  font-size: 16px;
  margin: 2px 12px 8px;
  color: #777;
}

.legend span {
  position: relative;
  bottom: 7px;
font-size: 10px;}

.legend i {
  width: 14px;
  height: 14px;
  float: left;
  margin: -4px 4px 0 0;
  opacity: 1;
}

.legend i.icon {
  background-size: 18px;
  background-color: rgba(255, 255, 255, 1);
}

.form-group.basic {
  padding: 0 !important;
    margin: 0 !important;
}

.mb-2 {
    margin-bottom: 0px !important;
}

.description{
  font-size: 11px;
    line-height: 13px;
}
.js-form-file::before{
  margin: 5px;
}

.form-group.basic .form-control, .form-group.basic .custom-select {
    background: #edededf2;
    border: none;
    border-bottom: 1px solid #DCDCE9;
        padding: 0 30px 0 10px;
    border-radius: 0;
    height: 40px;
        margin: 0 0 10px;
    color: #27173E;
    font-size: 15px;
    border-radius: 18px;
}
.views-exposed-form{
  display:none;
}


</style>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>



<script>

\$( document ).ready(function() {

 
    var ok= \$('#edit-field-status-laporan').val();
    console.log(ok);

  if(ok == '_none')
  {
   \$('.js-form-item-field-catatan-0-value').hide();
   \$('.js-form-item-field-catatan-admin-0-value').hide();
     \$('.form-item-field-photo-penanganan-0').hide();
  \$('#edit-field-tanggal-penanganan-0-value').hide();
  \$('.js-form-item-field-alasan-penolakan-0-value').hide();
  }
    else if(ok == 4)
  {
  \$('.js-form-item-field-catatan-0-value').hide();
  \$('.form-item-field-photo-penanganan-0').show();
  \$('#edit-field-tanggal-penanganan-0-value').show();
   \$('.js-form-item-field-catatan-admin-0-value').show();
   \$('.js-form-item-field-alasan-penolakan-0-value').hide();
  }

  else if(ok == 2)
  {
  \$('.js-form-item-field-catatan-0-value').hide();
  \$('.js-form-item-field-alasan-penolakan-0-value').show();
     \$('.js-form-item-field-catatan-admin-0-value').hide();
     \$('.form-item-field-photo-penanganan-0').hide();
  \$('#edit-field-tanggal-penanganan-0-value').hide();
  }
  else{
     \$('.js-form-item-field-catatan-0-value').show();
      \$('.js-form-item-field-catatan-admin-0-value').hide();
     \$('.form-item-field-photo-penanganan-0').hide();
  \$('#edit-field-tanggal-penanganan-0-value').hide();
  \$('.js-form-item-field-alasan-penolakan-0-value').hide();
  }


});


\$(document).on('change','#edit-field-status-laporan',function(){
 
    var ok=this.value;
     console.log(ok);
     if(ok == '_none')
  {
   \$('.js-form-item-field-catatan-0-value').hide();
   \$('.js-form-item-field-catatan-admin-0-value').hide();
     \$('.form-item-field-photo-penanganan-0').hide();
  \$('#edit-field-tanggal-penanganan-0-value').hide();
  \$('.js-form-item-field-alasan-penolakan-0-value').hide();
  }
    else if(ok == 4)
  {
  \$('.js-form-item-field-catatan-0-value').hide();
  \$('.form-item-field-photo-penanganan-0').show();
  \$('#edit-field-tanggal-penanganan-0-value').show();
  \$('.js-form-item-field-catatan-admin-0-value').show();
  \$('.js-form-item-field-alasan-penolakan-0-value').hide();
  }

  else if(ok == 2)
  {
  \$('.js-form-item-field-catatan-0-value').hide();
     \$('.js-form-item-field-catatan-admin-0-value').hide();
     \$('.form-item-field-photo-penanganan-0').hide();
  \$('#edit-field-tanggal-penanganan-0-value').hide();
  \$('.js-form-item-field-alasan-penolakan-0-value').show();
  }
  else{
     \$('.js-form-item-field-catatan-0-value').show();
      \$('.js-form-item-field-catatan-admin-0-value').hide();
     \$('.form-item-field-photo-penanganan-0').hide();
  \$('#edit-field-tanggal-penanganan-0-value').hide();
  \$('.js-form-item-field-alasan-penolakan-0-value').hide();
  }


});


\$('#edit-field-status-laporan').on('change', function()
{
    alert(this.value); //or alert(\$(this).val());    



if (ok==1){
  \$('.js-form-item-field-catatan-0-value').hide();
}

  \$(\"[id^=edit-field-status-laporan]\").change(function()
 {
 
 });


});
  


</script>


    <!-- loader -->
       <div id=\"loader\">
        <img src=\"/sites/default/files/icon/logo.png\" alt=\"icon\" class=\"loading-icon\">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton goBack\">
                <ion-icon name=\"chevron-back-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"pageTitle\"> 
                ";
        // line 266
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_title", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
        echo "
        </div>
        
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">

    <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"p-1\">
                        <div class=\"text-center\">
                            <h2 class=\"text-primary\">Form Laporan Jalan</h2>
                        </div>
                        ";
        // line 281
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 281), 281, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>




    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
      ";
        // line 294
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_menu", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
        echo "


    <!-- * App Bottom Menu -->

";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/layout/page--node--edit--statusx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 294,  265 => 281,  247 => 266,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/layout/page--node--edit--statusx.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/layout/page--node--edit--statusx.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 266);
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
