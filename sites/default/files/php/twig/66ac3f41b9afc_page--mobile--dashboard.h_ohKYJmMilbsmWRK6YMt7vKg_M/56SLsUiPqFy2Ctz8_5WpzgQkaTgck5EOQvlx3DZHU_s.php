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

/* themes/silatmobile/templates/layout/page--mobile--dashboard.html.twig */
class __TwigTemplate_4bdb4768bb519b601c0776a98cc083c6 extends \Twig\Template
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
        echo "

";
        // line 62
        $context["rolex"] = Drupal\twig_tweak\TwigTweakExtension::drupalToken("current-user:roles:last");
        // line 63
        echo "<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js\"></script>
<style>
strong, b {
    font-weight: 700;
    color: #ff0000;
}
</style>

    <!-- loader -->
    <div id=\"loader\">
        <img src=\"/sites/default/files/icon/logo.png\" alt=\"icon\" class=\"loading-icon\">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader  text-light\" style=\"height: 79px;padding-bottom: 26px;position: relative;background: none;border: 0;\">
        <div class=\"left\">
           
        </div>
        <div class=\"pageTitle\"> 
            <img src=\"/sites/default/files/newputih.png\" alt=\"silatjantan\" style=\"padding-top: 26px;margin-top: 72px;width: 100px;\" >
        </div>
        
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\" style=\"padding-top: 0;\">

    



        <!-- Wallet Card -->
        <div class=\"section wallet-card-section pt-1\" style=\"margin-top: 23px;\">
            <div class=\"wallet-card\">
               <p style=\"text-align: center;line-height: 16px;background: #ffde00;font-size: 12px;padding: 13px;margin: -16px -18px 0;color: #000;border-radius: 20px;\">
               Sistem Informasi dan Pelaporan Terpadu Jalan & Jembatan Kabupaten Madiun
               </p>
               <div class=\"wallet-footer\">
                   
                   <div class=\"section mt-1 mb-1\">
";
        // line 106
        if ((($context["rolex"] ?? null) == "umum")) {
            // line 107
            echo "          <a href=\"/node/add/pelaporan?destination=/mobile/laporan-saya\">
          <img src=\"/sites/default/files/lapor.png\" alt=\"image\" class=\"imaged img-fluid\">
            </a>
";
        } else {
            // line 111
            echo "
";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("pelaporan", "block_ver"), "html", null, true);
            echo "
";
        }
        // line 114
        echo "
 </div> 
 
 
                ";
        // line 119
        echo "                ";
        // line 120
        echo "                ";
        // line 121
        echo "                ";
        // line 122
        echo "                ";
        // line 123
        echo "                ";
        // line 124
        echo "                ";
        // line 125
        echo "                ";
        // line 126
        echo "                ";
        // line 127
        echo "                ";
        // line 128
        echo "                ";
        // line 129
        echo "                ";
        // line 130
        echo "                ";
        // line 131
        echo "                ";
        // line 132
        echo "                ";
        // line 133
        echo "                ";
        // line 134
        echo "                              

                ";
        // line 137
        echo "
                ";
        // line 139
        echo "                ";
        // line 140
        echo "                ";
        // line 141
        echo "                ";
        // line 142
        echo "                ";
        // line 143
        echo "                ";
        // line 144
        echo "                ";
        // line 145
        echo "                ";
        // line 146
        echo "                ";
        // line 147
        echo "                ";
        // line 148
        echo "                ";
        // line 149
        echo "                ";
        // line 150
        echo "                ";
        // line 151
        echo "                ";
        // line 152
        echo "                ";
        // line 153
        echo "                ";
        // line 154
        echo "                ";
        // line 155
        echo "
                    
                ";
        // line 158
        echo "                ";
        // line 159
        echo "                ";
        // line 160
        echo "                ";
        // line 161
        echo "                ";
        // line 162
        echo "                ";
        // line 163
        echo "                ";
        // line 164
        echo "                ";
        // line 165
        echo "
                    

                </div>
               
            </div>
        </div>
        
        
   



<div class=\"section mt-4 mb-4\">
";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("penutupan_jalan", "block_1"), "html", null, true);
        echo "
</div>




        <div class=\"section\" >
          <div class=\"row mt-2\" id=\"stat\">
           </div>
     
        </div>    



  <!-- Modal -->
  <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\" id=\"exampleModalLabel\">Login</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <form>
                <div class=\"form-group\">
                    <label>uname</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"User Name\">
                    <label>upwd</label>
                    <input type=\"password\" class=\"form-control\" placeholder=\"password\">
                </div>
            </form>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-success\">Login</button>
          <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
    </div>
  </div>
    




        <!-- Stats -->
        <div class=\"section\">
        ";
        // line 228
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("dashboard", "page_2"), "html", null, true);
        echo "
       
        </div>



    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
       ";
        // line 239
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_menu", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
        echo "

    
    <!-- * App Bottom Menu -->



 <script   src=\"https://code.jquery.com/jquery-3.6.0.min.js\"   integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"   crossorigin=\"anonymous\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/linq.js/2.2.0.2/linq.min.js\"></script>
<script src=\"https://code.highcharts.com/highcharts.js\"></script>
<script src=\"https://code.highcharts.com/highcharts-3d.js\"></script>


<script>

/* This script supports IE9+ */



window.onload = function() {
  ";
        // line 259
        if (($context["logged_in"] ?? null)) {
            // line 260
            echo "  
";
        } else {
            // line 262
            echo "Swal.fire({
  allowOutsideClick: false,
  allowEscapeKey: false,
  title: 'Selamat Datang di Silatjantan',
  type: 'info',
  html:
    'Untuk Bisa mengakses data atau pelaporan Kondisi Jalan pada aplikasi ini, Silahkan <b>Login</b>. Jika Anda belum memiliki akun silahkan tekan tombol <b>daftar</b> di bawah ini. Untuk Pendaftaran, Pastikan anda memiliki nomer Whatsapp yang aktif  ',
  focusConfirm: false,
  showCancelButton: true,
  confirmButtonText:
    '<i class=\"fa-solid fa-user-check\"></i> Daftar',
  cancelButtonText:
  '<ion-icon name=\"log-in-outline\"></ion-icon> Login',
  
}).then((result) => {
        if (result.isConfirmed) {
            window.location = \"/user/register\";
          
        }
        else{
          window.location = \"/user/login\";
        }
    });
";
        }
        // line 286
        echo "



var dataPoints = [];



function addDatakon() {
//console.log(data.features);
   ";
        // line 305
        echo "


var arr=[];

arr[0]={jenis: 'Baik', total:  156.825 };
arr[1]={jenis: 'Sedang', total:  393.962 };
arr[2]={jenis: 'Rusak Ringan', total:  180.297 };
arr[3]={jenis: 'Rusak Berat', total:  11.936 };
console.log(arr);
drawChartkond(arr[0].total, arr[0].jenis,\"red\",'Grafik Kondisi Jalan','chartKond');
drawChartkond(arr[1].total, arr[1].jenis,\"red\",'Grafik Kondisi Jalan','chartKond');
drawChartkond(arr[2].total, arr[2].jenis,\"red\",'Grafik Kondisi Jalan','chartKond');
drawChartkond(arr[3].total, arr[3].jenis,\"red\",'Grafik Kondisi Jalan','chartKond');

\$( \"#stat\" ).append('<div class=\"col-6\" style=\"margin-bottom:10px;\"><div class=\"stat-box\"><span class=\"badge badge-success mb-1\">'+arr[0].jenis+'</span> <div class=\"value text-primary\">'+arr[0].total+'</div></div> </div>' );
\$( \"#stat\" ).append('<div class=\"col-6\" style=\"margin-bottom:10px;\"><div class=\"stat-box\"><span class=\"badge badge-warning mb-1\" style=\"background:#ff0 !important; color:#000 !important\">'+arr[1].jenis+'</span><div class=\"value text-primary\">'+arr[1].total+'</div></div> </div>' );
\$( \"#stat\" ).append('<div class=\"col-6\" style=\"margin-bottom:10px;\"><div class=\"stat-box\"><span class=\"badge badge-warning mb-1\">'+arr[2].jenis+'</span><div class=\"value text-primary\">'+arr[2].total+'</div></div> </div>' );
\$( \"#stat\" ).append('<div class=\"col-6\" style=\"margin-bottom:10px;\"><div class=\"stat-box\"><span class=\"badge badge-danger mb-1\">'+arr[3].jenis+'</span><div class=\"value text-primary\">'+arr[3].total+'</div></div> </div>' );






}



function addData(data) {
//console.log(data.features);
  var aggregatedObject = Enumerable.From(data.features)
        .GroupBy(\"\$.properties.Perkerasan\", null,
                 function (key, g) {
                     return {
                       jenis: key,
                       total: g.Sum(function (s) { return parseInt(s.properties.PnjangRuas) }) 
                     }
        })
        .ToArray();

//console.log(aggregatedObject);



  for (var i = 0; i < aggregatedObject.length; i++) {
\t\t\t\t\tvar color = setColor();
\t\t\t\t\t var newarr=[];
\t\t\t\t\t var kat=[];
        //   console.log(aggregatedObject[i].jenis);
\t\t\t\t//\t newarr.push(parseInt(aggregatedObject[key]));
\t\t\t\t\t\t
\t\t\t\t\t  drawChart(aggregatedObject[i].total, aggregatedObject[i].jenis,color,'Grafik Perkerasan','chartContainer');
\t\t\t\t\t  }
\t\t\t\t\t  

}


function addData2(data) {
//console.log(data.features);
var jemb = Enumerable.From(data.features)
    .GroupBy(\"\$.properties.Knd_Jembat\", null, \"{ Name: \$, Count: \$\$.Count() }\")
    .ToArray();


//console.log(aggregatedObject);



  for (var i = 0; i < jemb.length; i++) {
\t\t\t\t\tvar color = setColor();
\t\t\t\t\t var newarr=[];
\t\t\t\t\t var kat=[];
\t\t\t\t//\t newarr.push(parseInt(aggregatedObject[key]));
\t\t\t\t\t\t
\t\t\t\t\t  drawChart2(jemb[i].Count, jemb[i].Name,color,'Grafik Jembatan','jembatan');
\t\t\t\t\t  }
\t\t\t\t\t  

}


addDatakon();
\$.getJSON(\"https://silatjantan.dpupr.madiunkab.go.id/sites/default/files/Perkerasan_Jalan.geojson\", addData);

\$.getJSON(\"https://silatjantan.dpupr.madiunkab.go.id/sites/default/files/Revisi_Jembatan.geojson\", addData2);


}

              function setColor() {
        //random Colors
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.round(Math.random() * 15)];
        }
        //console.log(color);
        return color;
    }

    var options1 = {
         legend: {
   layout: 'vertical',
   align: 'right',
   verticalAlign: 'middle',
   itemMarginTop: 10,
   itemMarginBottom: 10
 },
    chart: {
        renderTo: '',
\t\ttype: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },\t
\ttitle: {
    text: 'ddd'
  },
  xAxis: {
\tcategories:[]
  },
  plotOptions: {
      column: {
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#000',
            align: 'right',
            style: {
                fontSize: '10px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
      }
    },

    series: []
};

    var options2 = {
         legend: {
   layout: 'vertical',
   align: 'right',
   verticalAlign: 'middle',
   itemMarginTop: 10,
   itemMarginBottom: 10
 },
    chart: {
        renderTo: '',
\t\ttype: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },\t
\ttitle: {
    text: 'ddd'
  },
  xAxis: {
\tcategories:[]
  },
  plotOptions: {
      column: {
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#000',
            align: 'right',
            style: {
                fontSize: '9px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
      }
    },
    series: []
};



    var options3 = {
         legend: {
   layout: 'vertical',
   align: 'right',
   verticalAlign: 'middle',
   itemMarginTop: 10,
   itemMarginBottom: 10
 },
    chart: {
        renderTo: '',
\t\ttype: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },\t
\ttitle: {
    text: 'ddd'
  },
  xAxis: {
\tcategories:[]
  },
  plotOptions: {
      column: {
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#000',
            align: 'right',
            style: {
                fontSize: '10px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
      }
    },
    series: []
};



var drawChartkond = function (data, name, color, judul, idnya) {
    // 'series' is an array of objects with keys: 'name' (string) and 'data' (array)
  var aaa='';
 

           if (name ==='Baik'){aaa=\"green\";}
          else if (name ==='Rusak Ringan'){aaa=\"orange\";}
          else if (name ==='Sedang'){aaa=\"Yellow\";}
          else if (name ==='Rusak Berat'){aaa=\"red\";}
          else {aaa=\"red\";}
 



      
  \tvar arr=[];
    arr[0]=data;
    var newSeriesData = {
        name: name,
        data: arr,
\t\tcolor:aaa
    };


    \t

    options3.series.push(newSeriesData);
\t
     options3.title.text=judul;
\t options3.chart.renderTo=idnya;
\t options3.xAxis.categories.push(name);
\t 
var chart = new Highcharts.Chart(options3);
\t

\t
};



var drawChart = function (data, name, color, judul, idnya) {
    // 'series' is an array of objects with keys: 'name' (string) and 'data' (array)
  var aaa='';
 

           if (name ==='Aspal'){aaa=\"#2f5597\";}
          else if (name ==='Beton'){aaa=\"#9dc3e6\";}
          else if (name ==='Lapen'){aaa=\"#c55a11\";}
          else if (name ==='makadam'){aaa=\"#ffff00\";}
          else {aaa=\"red\";}
 



      
  \tvar arr=[];
    arr[0]=data;
    var newSeriesData = {
        name: name,
        data: arr,
\t\tcolor:aaa
    };


    \t

    options1.series.push(newSeriesData);
\t
     options1.title.text=judul;
\t options1.chart.renderTo=idnya;
\t options1.xAxis.categories.push(name);
\t 
var chart = new Highcharts.Chart(options1);
\t

\t
};


var drawChart2 = function (data, name, color, judul, idnya) {
  var aaa='';
           if (name ==='Rusak Ringan'){aaa=\"green\";}
          else if (name ==='Rusak Sedang'){aaa=\"yellow\";}
          else if (name ==='Rusak Berat'){aaa=\"orange\";}
          else {aaa=\"red\";}

  \tvar arr=[];
    arr[0]=data;
    var newSeriesData = {
        name: name,
        data: arr,
\t\tcolor:aaa
    };


    \t

    options2.series.push(newSeriesData);
\t
     options2.title.text=judul;
\t options2.chart.renderTo=idnya;
\t options2.xAxis.categories.push(name);
\t 
var chart = new Highcharts.Chart(options2);
\t


\t
};


</script>


<script>
 jQuery(function(\$) {
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
     \$('.item').each(function() {
      if (this.href === path) {
       \$(this).addClass('active');
      }
     });
    });

</script>";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/layout/page--mobile--dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 305,  336 => 286,  310 => 262,  306 => 260,  304 => 259,  281 => 239,  266 => 228,  215 => 179,  199 => 165,  197 => 164,  195 => 163,  193 => 162,  191 => 161,  189 => 160,  187 => 159,  185 => 158,  181 => 155,  179 => 154,  177 => 153,  175 => 152,  173 => 151,  171 => 150,  169 => 149,  167 => 148,  165 => 147,  163 => 146,  161 => 145,  159 => 144,  157 => 143,  155 => 142,  153 => 141,  151 => 140,  149 => 139,  146 => 137,  142 => 134,  140 => 133,  138 => 132,  136 => 131,  134 => 130,  132 => 129,  130 => 128,  128 => 127,  126 => 126,  124 => 125,  122 => 124,  120 => 123,  118 => 122,  116 => 121,  114 => 120,  112 => 119,  106 => 114,  101 => 112,  98 => 111,  92 => 107,  90 => 106,  45 => 63,  43 => 62,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/layout/page--mobile--dashboard.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/layout/page--mobile--dashboard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 62, "if" => 106);
        static $filters = array("escape" => 112);
        static $functions = array("drupal_token" => 62, "drupal_view" => 112);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['drupal_token', 'drupal_view']
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
