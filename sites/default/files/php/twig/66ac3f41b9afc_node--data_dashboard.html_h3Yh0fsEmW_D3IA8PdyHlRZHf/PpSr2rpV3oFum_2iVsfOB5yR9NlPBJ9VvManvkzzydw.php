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

/* themes/silatjantan/templates/content/node--data_dashboard.html.twig */
class __TwigTemplate_ab44eec5de27ee9a80e107730fa4461f extends \Twig\Template
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
 <div class=\"row\">
       
            <div class=\"col-sm-6 col-lg-4 col-xl-4\">
              <a href=\"javascript:void(0)\" class=\"p-4 text-center bg-warning-subtle card  rounded-2\">
                <img src=\"/sites/default/files/jalan.png\" width=\"80\" height=\"80\" class=\"mb-6 mx-auto\" alt=\"\">
                <p class=\"fw-semibold text-warning mb-1\">Total Panjang Jalan</p>
                <h4 class=\"fw-semibold text-warning mb-0\" id=\"t_jalan\"></h4>
              </a>
            </div>
         
            <div class=\"col-sm-6 col-lg-4 col-xl-4\">
              <a href=\"./app-email.html\" class=\"p-4 text-center bg-danger-subtle card  rounded-2\">
                <img src=\"/sites/default/files/ruas.png\" width=\"80\" height=\"80\" class=\"mb-6 mx-auto\" alt=\"\">
                <p class=\"fw-semibold text-danger mb-1\">Total Ruas Jalan</p>
                <h4 class=\"fw-semibold text-danger mb-0\" id=\"t_ruas\"></h4>
              </a>
            </div>
            <div class=\"col-sm-6 col-lg-4 col-xl-4\">
              <a href=\"./app-chat.html\" class=\"p-4 text-center bg-success-subtle card  rounded-2\">
                <img src=\"/sites/default/files/jemb.png\" width=\"80\" height=\"80\" class=\"mb-6 mx-auto\" alt=\"\">
                <p class=\"fw-semibold text-success mb-1\">Total Jumlah Jembatan</p>
                <h4 class=\"fw-semibold text-success mb-0\" id=\"t_jemb\"></h4>
              </a>
            </div>
    
          </div>
 
 <div class=\"row\">
     
     
     <div class=\"card bg-info-subtle  position-relative overflow-hidden mb-4\">
     <div class=\"card-body px-4 py-3\">
    <div class=\"row align-items-center\">
      <div class=\"col-9\">
        <h3 class=\"fw-semibold mb-8 text-white\">Data Kondisi Jalan</h3>
     
      </div>
      <div class=\"col-3\">
        <div class=\"text-center \" style=\" margin-top: -30px;\">
          <img src=\"/sites/default/files/jalan.png\" alt=\"\" class=\"img-fluid\" style=\"width: 37%;\">
        </div>
      </div>
    </div>
  </div>
    </div>
    </div>
    
    <div class=\"row\">
            <!-- Column -->
            <div class=\"col-sm-12 col-md-3\">
              <div class=\"card text-bg-success\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Kondisi Baik</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjb\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                 <!-- Column -->
            <div class=\"col-sm-12 col-md-3\">
              <div class=\"card text-bg-secondary\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Kondisi Sedang</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjs\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                 <!-- Column -->
            <div class=\"col-sm-12 col-md-3\">
              <div class=\"card text-bg-warning\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Kondisi Rusak Ringan</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjrr\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
           
           
                  <!-- Column -->
            <div class=\"col-sm-12 col-md-3\">
              <div class=\"card text-bg-danger\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Kondisi Rusak Berat</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjrb\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
           
          </div>
    
  <div class=\"row\">
     <div class=\"col-lg-8 d-flex align-items-strech\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"myBarChart\" width=\"400\" height=\"200\"></canvas>
              </div>
               </div>
     </div>
     
     <div class=\"col-lg-4 d-flex align-items-strech\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"myPieChart\" width=\"400\" height=\"200\"></canvas>
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
        
        
         var piex = document.getElementById('myPieChart').getContext('2d');

        // Buat objek chart
        var myPieChart = new Chart(piex, {
            type: 'pie',
            data: {
                labels: categories,
                datasets: [{
                    data: seriesData,
                   backgroundColor: [
                        'rgba(0, 128, 0, 0.8)',    // green with opacity 0.8
                        'rgba(255, 255, 0, 0.8)',  // yellow with opacity 0.8
                        'rgba(255, 0, 0, 0.8)',    // red with opacity 0.8
                        'rgba(99, 6, 6, 0.8)'      // RGB(99, 6, 6) with opacity 0.8
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
        
        
    </script>

<div class=\"container\">
            <div class=\"row justify-content-center\">
              <div class=\"col-lg-8\">
                <div class=\"card c2a-box aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"1600\" data-aos-duration=\"1000\">
                  <div class=\"card-body text-center p-4 pt-7\">
                    <h3 class=\"fs-7 fw-semibold pt-6\">
                      Lihat data Kondisi jalan dalam bentuk Peta?
                    </h3>
                  
                    <div class=\"d-sm-flex align-items-center justify-content-center gap-3 mb-4\">
                      <a href=\"/new-kondisi-jalan\" target=\"_blank\" class=\"btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow px-7 py-6\" type=\"button\">Peta Kondisi Jalan</a>
                      <a href=\"/import-data-bulanan\" target=\"_blank\" class=\"btn btn-outline-secondary d-block px-7 py-6\" type=\"button\">Import Data</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

";
        }
        // line 352
        echo "


";
        // line 355
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_tipe_perkerasan", [], "any", false, false, true, 355), "value", [], "any", false, false, true, 355)) {
            // line 356
            echo "  ";
            // line 357
            echo "  ";
            $context["jsonPerkerasan"] = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_tipe_perkerasan", [], "any", false, false, true, 357), "value", [], "any", false, false, true, 357), 357, $this->source);
            // line 358
            echo "

 <script>
 // Data yang Anda berikan
            var datax2 = JSON.parse('";
            // line 362
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["jsonPerkerasan"] ?? null), 362, $this->source));
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
     
     
     <div class=\"card bg-info-subtle  position-relative overflow-hidden mb-4 mt-4\">
     <div class=\"card-body px-4 py-3\">
    <div class=\"row align-items-center\">
      <div class=\"col-9\">
       <h3 class=\"fw-semibold mb-8 text-white\">Data Perkerasan Jalan</h3>
     
      </div>
      <div class=\"col-3\">
        <div class=\"text-center \" style=\" margin-top: -30px;\">
          <img src=\"/sites/default/files/ruas.png\" alt=\"\" class=\"img-fluid\" style=\"width: 37%;\">
        </div>
      </div>
    </div>
  </div>
    </div>
    </div>
    
    <div class=\"row\">
            <!-- Column -->
            <div class=\"col\">
              <div class=\"card aspal\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Aspal</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"aspal\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                 <!-- Column -->
            <div class=\"col\">
              <div class=\"card lapen\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Lapen</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"lapen\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                 <!-- Column -->
            <div class=\"col\">
              <div class=\"card beton\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Beton</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"beton\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
           
           
                  <!-- Column -->
            <div class=\"col\">
              <div class=\"card makadam\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Makadam</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"makadam\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                     <!-- Column -->
            <div class=\"col\">
              <div class=\"card tanah\">
                <div class=\"card-body text-white\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-credit-card fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Tanah</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"tanah\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
           
          </div>
    
  <div class=\"row\">
    <div class=\"col-lg-4 d-flex align-items-strech\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"kerasPieChart\" width=\"400\" height=\"200\"></canvas>
              </div>
               </div>
     </div>
     
   
     <div class=\"col-lg-8 d-flex align-items-strech\">
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
        
        
         var piex = document.getElementById('kerasPieChart').getContext('2d');

        // Buat objek chart
        var myPieChart = new Chart(piex, {
            type: 'pie',
            data: {
                labels: categories2,
                datasets: [{
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
                responsive: true,
                maintainAspectRatio: false
            }
        });
        
        
    </script>



";
        }
        // line 604
        echo "

<div class=\"container\">
            <div class=\"row justify-content-center\">
              <div class=\"col-lg-8\">
                <div class=\"card c2a-box aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"1600\" data-aos-duration=\"1000\">
                  <div class=\"card-body text-center p-4 pt-7\">
                    <h3 class=\"fs-7 fw-semibold pt-6\">
                      Lihat data Perkerasan jalan dalam bentuk Peta?
                    </h3>
                  
                    <div class=\"d-sm-flex align-items-center justify-content-center gap-3 mb-4\">
                      <a href=\"/new-perkerasan-jalan\" target=\"_blank\" class=\"btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow px-7 py-6\" type=\"button\">Peta Perkerasan Jalan</a>
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


";
        // line 626
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_jembatan", [], "any", false, false, true, 626), "value", [], "any", false, false, true, 626)) {
            // line 627
            echo "  ";
            // line 628
            echo "  ";
            $context["jemData"] = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_grafik_jembatan", [], "any", false, false, true, 628), "value", [], "any", false, false, true, 628), 628, $this->source);
            // line 629
            echo "
 <script>
 // Data yang Anda berikan
            var dataJem = JSON.parse('";
            // line 632
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["jemData"] ?? null), 632, $this->source));
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
     
     
     <div class=\"card bg-info-subtle  position-relative overflow-hidden mb-4 mt-4\">
     <div class=\"card-body px-4 py-3\">
    <div class=\"row align-items-center\">
      <div class=\"col-9\">
        <h3 class=\"fw-semibold mb-8 text-white\">Data Kondisi Jembatan</h3>
     
      </div>
      <div class=\"col-3\">
        <div class=\"text-center \" style=\" margin-top: -30px;\">
          <img src=\"/sites/default/files/jemb.png\" alt=\"\" class=\"img-fluid \" style=\"width: 37%;\">
        </div>
      </div>
    </div>
  </div>
    </div>
    </div>
    
    <div class=\"row\">
            <!-- Column -->
            <div class=\"col\">
              <div class=\"card jb\">
                <div class=\"card-body text-white p-2\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-building-bridge-2 fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Baik</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjbj\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                 <!-- Column -->
            <div class=\"col\">
              <div class=\"card jrr\">
                <div class=\"card-body text-white p-2\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-building-bridge-2 fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Rusak Ringan</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjrrj\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                 <!-- Column -->
            <div class=\"col\">
              <div class=\"card jrs\">
                <div class=\"card-body text-white p-2\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-building-bridge-2 fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Kondisi Rusak Sedang</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjrsj\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
           
           
                  <!-- Column -->
            <div class=\"col\">
              <div class=\"card jrb\">
                <div class=\"card-body text-white p-2\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-building-bridge-2 fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Kondisi Rusak Berat</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjrbj\">
                       
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                <!-- Column -->
            <div class=\"col\">
              <div class=\"card jk\">
                <div class=\"card-body text-white p-2\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-building-bridge-2 fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 fs-3\">Kondisi Kritis</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3 ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjkj\">
                       0
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
                   <!-- Column -->
            <div class=\"col\">
              <div class=\"card jr\">
                <div class=\"card-body text-white p-2\">
                  <div class=\"d-flex flex-row align-items-center\">
                    <div class=\"round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success p-2\">
                      <i class=\"ti ti-building-bridge-2 fs-6\"></i>
                    </div>
                    <div class=\"ms-3\">
                      <h4 class=\"mb-0 text-white fs-3\">Kondisi Runtuh</h4>
                    </div>
                  
                  </div>
                 <div class=\"mt-3   ms-4\">
                      <h2 class=\"fs-7 mb-0 text-white\" id=\"kjrj\">
                       0
                      </h2>
                    </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            
           
          </div>
    
  <div class=\"row\">
     <div class=\"col-lg-8 d-flex align-items-strech\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"jemBarChart\" width=\"400\" height=\"200\"></canvas>
              </div>
               </div>
     </div>
     
     <div class=\"col-lg-4 d-flex align-items-strech\">
         <div class=\"card w-100\">
           <div class=\"card-body\">
             <canvas id=\"jemPieChart\" width=\"400\" height=\"200\"></canvas>
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

        // Buat objek chart
        var myPieChart = new Chart(piex, {
            type: 'pie',
            data: {
                labels: categories3,
                datasets: [{
                    data: seriesData3,
                   backgroundColor: [
                          '#8ce205',
                        '#068fff',
                        '#cac800',
                        '#f4a800',
                        '#f20063',
                        '#770505'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
        
        
    </script>



";
        }
        // line 902
        echo "
<div class=\"container\">
            <div class=\"row justify-content-center\">
              <div class=\"col-lg-8\">
                <div class=\"card c2a-box aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"1600\" data-aos-duration=\"1000\">
                  <div class=\"card-body text-center p-4 pt-7\">
                    <h3 class=\"fs-7 fw-semibold pt-6\">
                      Lihat data Kondisi Jembatan dalam bentuk Peta?
                    </h3>
                  
                    <div class=\"d-sm-flex align-items-center justify-content-center gap-3 mb-4\">
                      <a href=\"/new-kondisi-jembatan\" target=\"_blank\" class=\"btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow px-7 py-6\" type=\"button\">Peta Kondisi Jembatan</a>
                      <a href=\"/import-data-jembatan\" target=\"_blank\" class=\"btn btn-outline-secondary d-block px-7 py-6\" type=\"button\">Import Data Jembatan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>











";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/content/node--data_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  903 => 902,  630 => 632,  625 => 629,  622 => 628,  620 => 627,  618 => 626,  594 => 604,  349 => 362,  343 => 358,  340 => 357,  338 => 356,  336 => 355,  331 => 352,  59 => 83,  49 => 75,  46 => 74,  44 => 73,  42 => 72,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/content/node--data_dashboard.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/content/node--data_dashboard.html.twig");
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
