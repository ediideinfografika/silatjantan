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

/* themes/silatmobile/templates/content/node--data_dashboard.html.twig */
class __TwigTemplate_c5b778625b007b5c512792b7d7cc75bf298faeaef154180a18b53979bdc0d34d extends \Twig\Template
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
        echo "
";
        // line 72
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_kondisi_jalan", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72)) {
            // line 73
            echo "  ";
            // line 74
            echo "  ";
            $context["jsonData"] = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_kondisi_jalan", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source);
            // line 75
            echo "
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
 <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
 <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0\"></script>
 
 
 <script>
 // Data yang Anda berikan
            var datax = JSON.parse('";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["jsonData"] ?? null), 83, $this->source));
            echo "');
            var seriesData = Object.values(datax);
            var categories = Object.keys(datax);
        
           
             
              seriesData.splice(0, 2);
             categories.splice(0, 2);
 \$(document).ready(function() {
          
             \$('#t_jalan').text(datax.t_jalan.toLocaleString()+\" Km\");
             \$('#t_ruas').text(datax.t_ruas.toLocaleString()+\" Ruas\");
            

            // Set nilai elemen dengan ID 'kjb' menggunakan data dari seriesData
              
            \$('#kjb').text(seriesData[0].toLocaleString()+\" Km\");
            \$('#kjs').text(seriesData[1].toLocaleString()+\" Km\");
            \$('#kjrr').text(seriesData[2].toLocaleString()+\" Km\");
            \$('#kjrb').text(seriesData[3].toLocaleString()+\" Km\");
        });

        
 </script>
 <style>
 .tiga{
     font-size:10px !important;
 }
 .tiga h4
 {    font-size: 18px;}
 .listview-title{
     font-size: 17px;
 }
 </style>
 <div class=\"row tiga\">
       
            <div class=\"col-4\">
              <a href=\"javascript:void(0)\" class=\"p-1 text-center bg-warning-subtle card  rounded-4\">
                <img src=\"/sites/default/files/jalan.png\" width=\"60\" height=\"60\" class=\"mb-6 mx-auto\" alt=\"\">
                <p class=\"fw-semibold text-warning mb-1\">Panjang Ruas</p>
                <h4 class=\"fw-semibold text-warning mb-0\" id=\"t_jalan\"></h4>
              </a>
            </div>
         
            <div class=\"col-4\">
              <a href=\"#\" class=\"p-1 text-center bg-danger-subtle card  rounded-4\">
                <img src=\"/sites/default/files/ruas.png\" width=\"60\" height=\"60\" class=\"mb-6 mx-auto\" alt=\"\">
                <p class=\"fw-semibold text-danger mb-1\">Total Ruas</p>
                <h4 class=\"fw-semibold text-danger mb-0\" id=\"t_ruas\"></h4>
              </a>
            </div>
            <div class=\"col-4\">
              <a href=\"#\" class=\"p-1 text-center bg-success-subtle card  rounded-4\">
                <img src=\"/sites/default/files/jemb.png\" width=\"60\" height=\"60\" class=\"mb-6 mx-auto\" alt=\"\">
                <p class=\"fw-semibold text-success mb-1\">Jml Jembatan</p>
                <h4 class=\"fw-semibold text-success mb-0\" id=\"t_jemb\"></h4>
              </a>
            </div>
    
          </div>
 

    
   
    
  <div class=\"row\">
       <div class=\"listview-title  mt-4\">Grafik Kondisi Jalan</div> 
       <div class=\"col-lg-4 d-flex align-items-strech mt-1\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"myBarChart\" width=\"400\" height=\"200\"></canvas>
              </div>
               </div>
     </div>

 </div>
  <script>
        // Data yang Anda berikan
    
        Chart.register(ChartDataLabels);
        // Ambil elemen canvas
        var ctx = document.getElementById('myBarChart').getContext('2d');

        // Buat objek chart
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categories,
                datasets: [{
                    label: 'Data Series',
                    data: seriesData,
                    backgroundColor: [
                        'green',
                        'yellow',
                        'red',
                        'rgb(99, 6, 6)'
                    ],
                     datalabels: {
                        align: 'start',
                        anchor: 'end',
                        offset:-20
                      }
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        

        
        
    </script>



";
        }
        // line 204
        echo "


";
        // line 207
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_tipe_perkerasan", [], "any", false, false, true, 207), "value", [], "any", false, false, true, 207)) {
            // line 208
            echo "  ";
            // line 209
            echo "  ";
            $context["jsonPerkerasan"] = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_tipe_perkerasan", [], "any", false, false, true, 209), "value", [], "any", false, false, true, 209), 209, $this->source);
            // line 210
            echo "

 <script>
 // Data yang Anda berikan
            var datax2 = JSON.parse('";
            // line 214
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["jsonPerkerasan"] ?? null), 214, $this->source));
            echo "');
            var seriesData2 = Object.values(datax2);
            var categories2 = Object.keys(datax2);
 \$(document).ready(function() {
            

            // Set nilai elemen dengan ID 'kjb' menggunakan data dari seriesData
            \$('#aspal').text(seriesData2[0].toLocaleString()+\" Km\");
            \$('#lapen').text(seriesData2[1].toLocaleString()+\" Km\");
            \$('#beton').text(seriesData2[2].toLocaleString()+\" Km\");
            \$('#makadam').text(seriesData2[3].toLocaleString()+\" Km\");
             \$('#tanah').text(seriesData2[4].toLocaleString()+\" Km\");
        });

        
 </script>
 

    
    
    
  <div class=\"row\">
  <div class=\"listview-title  mt-4\">Grafik Perkerasan Jalan</div> 
       <div class=\"col-lg-4 d-flex align-items-strech mt-1\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"kerasBarChart\" width=\"400\" height=\"200\"></canvas>
              </div>
               </div>
     </div>
     
    
 </div>
  <script>
        // Data yang Anda berikan
    

        // Ambil elemen canvas
        var ctx = document.getElementById('kerasBarChart').getContext('2d');

        // Buat objek chart
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categories2,
                datasets: [{
                    label: 'Data Series',
                    data: seriesData2,
                    backgroundColor: [
                        '#2caffe',
                        '#544fc5',
                        '#00e272',
                        '#fe6a35',
                        '#6b8abc'
                    ],
                     borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
    

        
        
    </script>



";
        }
        // line 290
        echo "




";
        // line 295
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_jembatan", [], "any", false, false, true, 295), "value", [], "any", false, false, true, 295)) {
            // line 296
            echo "  ";
            // line 297
            echo "  ";
            $context["jemData"] = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_jembatan", [], "any", false, false, true, 297), "value", [], "any", false, false, true, 297), 297, $this->source);
            // line 298
            echo "
 <script>
 // Data yang Anda berikan
            var dataJem = JSON.parse('";
            // line 301
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["jemData"] ?? null), 301, $this->source));
            echo "');
            var seriesData3 = Object.values(dataJem);
            var categories3 = Object.keys(dataJem);
            
         seriesData3.splice(0, 1);
         categories3.splice(0,1);
 \$(document).ready(function() {
   
            
              \$('#t_jemb').text(dataJem.t_jembatan.toLocaleString()+\" Unit\");

            // Set nilai elemen dengan ID 'kjb' menggunakan data dari seriesData
            \$('#kjbj').text(seriesData3[0].toLocaleString() +\" Unit\");
            \$('#kjrrj').text(seriesData3[1].toLocaleString()+\" Unit\");
            \$('#kjrsj').text(seriesData3[2].toLocaleString()+\" Unit\");
            \$('#kjrbj').text(seriesData3[3].toLocaleString()+\" Unit\");
            \$('#kjkj').text(seriesData3[4].toLocaleString()+\" Unit\");
            \$('#kjrj').text(seriesData3[5].toLocaleString()+\" Unit\");
        });

        
 </script>
 
 
    
  <div class=\"row\">
<div class=\"listview-title  mt-4\">Grafik Jembatan</div> 
       <div class=\"col-lg-4 d-flex align-items-strech mt-1\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"jemBarChart\" width=\"400\" height=\"200\"></canvas>
              </div>
               </div>
     </div>
     

 </div>
  <script>
        // Data yang Anda berikan
    

        // Ambil elemen canvas
        var ctx = document.getElementById('jemBarChart').getContext('2d');

        // Buat objek chart
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categories3,
                datasets: [{
                    label: 'Data Series',
                    data: seriesData3,
                    backgroundColor: [
                        '#8ce205',
                        '#068fff',
                        '#cac800',
                        '#f4a800',
                        '#f20063',
                        '#770505'
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        
         var piex = document.getElementById('jemPieChart').getContext('2d');


        
    </script>



";
        }
        // line 382
        echo "












";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/content/node--data_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 382,  299 => 301,  294 => 298,  291 => 297,  289 => 296,  287 => 295,  280 => 290,  201 => 214,  195 => 210,  192 => 209,  190 => 208,  188 => 207,  183 => 204,  59 => 83,  49 => 75,  46 => 74,  44 => 73,  42 => 72,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/content/node--data_dashboard.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/content/node--data_dashboard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 72, "set" => 74);
        static $filters = array("raw" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['raw'],
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
