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

/* themes/silatmobile/templates/views/views-view-unformatted--import-data--mkj_block.html.twig */
class __TwigTemplate_1d89b190c2855a8d71da112a3b0756d30ff9187058d19371910b8733bb81509b extends \Twig\Template
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
        // line 20
        echo "<style>

.mapboxgl-ctrl-top-right {
    top: 43px !important;
    right: 0;
}


    #menu1 {
        background: #ffffff;
    position: absolute;
    border: none;
    z-index: 99;
    top: -2px;
    padding: 8px 7px;
    left: -2px;
    border-radius: 3px;
    width: 102%;
    border: 1px solid rgba(0, 0, 0, 0.4);
    font-family: 'Open Sans', sans-serif;
        
    }
    .hydrated {
    visibility: inherit;
    font-size: 22px;
}


  #menu {
position: absolute;
    /* background: #fff; */
    border-radius: 20px;
    top: 40px;
    right: -200px;
    padding: 0;
    font-family: \"Open Sans\", sans-serif;
    z-index: 99;
    width:200px;

      }
     #menu.tampil{
      right:0
     }


    #menu a {
             text-transform: uppercase;
    font-size: 10px;
    color: #000000;
    display: block;
    margin: 0;
    background: #c6eff3;
        padding: 0;
        padding: 10px;
        text-decoration: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.25);
        text-align: center;
    }

    #menu a:last-child {
        border: none;
    }

    #menu a:hover {
        background-color: #f8f8f8;
        color: #404040;
    }

    #menu a.active {
        background-color: #3887be;
        color: #ffffff;
    }

    #menu a.active:hover {
        background: #3074a4;
    }
  

        #map {
      margin-top: 30px;
    bottom: 0;
    height: 490px !important;
    width: 100% !important;
      }

      .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px \"Helvetica Neue\", Arial, Helvetica, sans-serif;
      }

      .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px \"Helvetica Neue\", Arial, Helvetica, sans-serif;
      }
      .map-overlay {
       z-index: 99;
    position: absolute;
    bottom: 8px;
     right: -163px;
    background: #fff;
    font-family: Arial, sans-serif;
    overflow: auto;
    border-radius: 3px;
    padding: 13px;
}
 .map-overlay.tampil{
   right: 7px;
 }


#legend {
    
    padding: 10px;
    box-shadow: 0 1px 2px rgb(0 0 0 / 10%);
    line-height: 19px;
    height: 137px;
    width: 144px;
    font-size: 11px;

}
.legend-key {
display: inline-block;
border-radius: 20%;
width: 10px;
height: 10px;
margin-right: 5px;
}



      

#sidebarx {
 position: absolute;
    top: 0px;
    left: -200px;
    width: 200px;
    height: 100%;
    color: #fff;
    z-index: 1;
    background: #151719ad;
    transition: all 300ms linear;
}
#sidebarx.active {
  left:0;
  padding: 47px 0px 47px 13px;
      overflow: scroll;
}
#sidebarx .toggle-btn {
  position:absolute;
  left:220px;
      top: 42px;
}
#sidebarx .toggle-btn span {
  display:block;
  width:30px;
  height:5px;
  background:#151719;
  margin:5px 0px;
  cursor:pointer;
}
#sidebarx div.list div.item {
  padding:15px 10px;
  border-bottom:1px solid #444;
  color:#fcfcfc;
  text-transform:uppercase;
  font-size:12px;
}

#sidebarx div.list div.item a{
  color:#fcfcfc;
  text-decoration: none;
}

#wadahfeat{
  padding:0;
   padding-bottom: 30px;
}
#wadahfeat li a {
      color: #e8f0f7;
    font-size: 9px;
    padding: 0;
    margin: 0;

}
#wadahfeat li  {
   list-style: none;
    padding: 0;
    margin: 0;
    height: 20px;
   
}

.btcari{
      width: 52px;
    padding-right: 10p;
    margin: 4px 13px;
}

      /* Marker tweaks */
      .mapboxgl-popup {
            left: -10px;
      }

      .mapboxgl-popup-close-button {
            position: absolute;
    right: 19px;
    top: 0;
    border: 0;
    border-radius: 0 3px 0 0;
    cursor: pointer;
    background-color: #f70303 !important;
    color: #fff;
    font-size: 15px;
      }
      .mapboxgl-popup-content {
        font: 400 15px/22px 'Source Sans Pro', 'Helvetica Neue', sans-serif;
        padding: 0;
        width: 250px;
      }
      .mapboxgl-popup-content h3 {
           background: #91c949;
    color: #000;
    margin: 0;
    padding: 5px;
    border-radius: 3px 3px 0 0;
    font-weight: 700;
    margin-top: -15px;
    font-size: 1em;
      }

      .mapboxgl-popup-content h4 {
           margin: 0;
    padding: 5px;
    font-weight: bold;
    font-size: 1.2em;
      }

      .mapboxgl-popup-content div {
        padding: 10px;
      }
      .mapboxgl-popup-content p {
      padding: 2px;
    font-size: 0.7em;
    margin: 0;
        
      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
        margin-top: 5px;
      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
        border-bottom-color: #91c949;
      }
    

    .section {
    padding: 0 7px;
}

.fl{
  float:left;
}

.fr{
  float:right;
}


</style>
";
        // line 291
        if (($context["title"] ?? null)) {
            // line 292
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 292, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 294
        echo " <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js\"></script>
    <link
      href=\"https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css\"
      rel=\"stylesheet\"
    />
    <script src=\"https://unpkg.com/papaparse@latest/papaparse.min.js\"></script>



  
<div id=\"map\">
 <div id=\"menu1\">
   <input id=\"satelit\" type=\"radio\" name=\"rtoggle\" value=\"satellite\" checked=\"checked\" />
      <label for=\"satellite\">satellite</label>
      <input id=\"streets-v12\" type=\"radio\" name=\"rtoggle\" value=\"light\" />
      <label for=\"light\">Street</label>
      <input id=\"dark-v10\" type=\"radio\" name=\"rtoggle\" value=\"dark\" />
      <label for=\"dark\">dark</label>
     <div class=\"fr col-6\">
      <a href=\"#\"  onclick=\"toggleSidebar(this)\">
                    <div class=\"col-4 fl\">
                        <div class=\"action-button large\">
                           <ion-icon name=\"search-outline\"></ion-icon>
                        </div>
                    </div>
                </a>
       <a href=\"#\"  onclick=\"toggleLayer(this)\" >
                    <div class=\"col-4 fl\">
                        <div class=\"action-button large\">
                           <ion-icon name=\"layers-outline\"></ion-icon>
                        </div>
                    </div>
                </a>

         <a href=\"#\"  onclick=\"toggleLegend(this)\">
                    <div class=\"col-4 fl\">
                        <div class=\"action-button large\">
                         <ion-icon name=\"information-circle-outline\"></ion-icon>
                        </div>
                    </div>
                </a>
</div>
    </div>

  <div class=\"map-overlay\" id=\"legend\"></div>

<nav id=\"menu\">
   ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            echo "        
       ";
            // line 342
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 342), 342, $this->source), "html", null, true);
            echo "    
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "</nav>


<div id=\"sidebarx\">

 <form>
  <input type=\"text\" id=\"filter\">
  <ul id=\"wadahfeat\">
  
  </ul>
</form>
</div>



</div>










<script src=\"https://cdn.jsdelivr.net/npm/fuse.js@6.6.2\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/jquery-filterlist@1.0.3/lib/jquery.filterList.min.js\"></script>
  <script>

function toggleSidebar(ref){
  document.getElementById(\"sidebarx\").classList.toggle('active');
}

function toggleLayer(ref){
  document.getElementById(\"menu\").classList.toggle('tampil');
}


function toggleLegend(ref){
  document.getElementById(\"legend\").classList.toggle('tampil');
}



      //YOUR TURN: Replace with your Mapbox Token
      const apiKey = \"AAPK79d62b890b694fe6b15a3fa76116acf9ztzOzKN55-fQXqFyPp7KqRlhqm68rJW9Tj4BgViZoVt5GZrnGD7hbcXij58yGz-o\";
      const basemapEnum = \"ArcGIS:Imagery\";
      
      
      mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iYWl0IiwiYSI6ImNqbXEzczh2bjA2bjgzd213azh2ZXE0bTYifQ.H4ObVqAY4KTQk17fpTV1kw';
      var map = new mapboxgl.Map({
        container: \"map\",
       style: `https://basemaps-api.arcgis.com/arcgis/rest/services/styles/\${basemapEnum}?type=style&token=\${apiKey}`,
        zoom: 12, // starting zoom
        center: [111.653,-7.500]
      });
    


    //control
    map.addControl(new mapboxgl.NavigationControl());
    map.addControl(new mapboxgl.FullscreenControl({container: document.querySelector('#map')}));


      map.on(\"load\", function () {


          addBaseLayer();
        addMaineLayer();
     

          const layerList = document.getElementById(\"menu1\");
          const inputs = layerList.getElementsByTagName(\"input\");




function switchLayer(layer) {
    // addMaineLayer fn will be called once on layer switched
    map.once(\"styledata\", addBaseLayer);
    map.once(\"styledata\", addMaineLayer);

    const layerId = layer.target.id;
    if (layerId=='satelit'){
        
         const apiKey = \"AAPK79d62b890b694fe6b15a3fa76116acf9ztzOzKN55-fQXqFyPp7KqRlhqm68rJW9Tj4BgViZoVt5GZrnGD7hbcXij58yGz-o\";
      const basemapEnum = \"ArcGIS:Imagery\";
       map.setStyle(`https://basemaps-api.arcgis.com/arcgis/rest/services/styles/\${basemapEnum}?type=style&token=\${apiKey}`); 
    }
    else{
       map.setStyle(\"mapbox://styles/mapbox/\" + layerId);  
    }
   
    

  }

  // set toggle base style events
  for (let i = 0; i < inputs.length; i++) {
    inputs[i].onclick = switchLayer;
  }

          
          // create legend
          const legend = document.getElementById('legend');
          const colors = [
          '#25ed25',
          'yellow',
          'red',
          '#630606',
          '#000',
          '#ccc'
          ];
          
             const layers = [
          'baik',
          'sedang',
          'RR (Rusak Ringan)',
          'RB (Rusak Berat)',
          'Jalan nasional',
          'Batas Wilayah'
          ];

          layers.forEach((layer, i) => {
          const color = colors[i];
          const item = document.createElement('div');
          const key = document.createElement('span');
          key.className = 'legend-key';
          key.style.backgroundColor = color;
          
          const value = document.createElement('span');
          value.innerHTML = `\${layer}`;
          item.appendChild(key);
          item.appendChild(value);
          legend.appendChild(item);
          });


        
      
      });


map.on('styledata', function () {
    \$('#menu a').filter('.active').each(function(i) {
  var ida= \$(this).attr('id');
  const visibility = map.getLayoutProperty(ida,'visibility');
  //console.log(visibility);
  map.setLayoutProperty(ida, 'visibility', 'visible');  
});

})

function addBaseLayer() {
  
         map.addSource(\"jalannastile\", {
          type: \"vector\",
          url: \"mapbox://robait.9ioa8vf9\"
        });              
                   
         map.addSource(\"bataskabtile\", {
          type: \"vector\",
          url: \"mapbox://robait.1wbh76pk\"
        });
          map.addSource(\"jalankabtile\", {
          type: \"vector\",
          url: \"mapbox://robait.ad73so7a\"
        });  


  const addLayer = (layer, beforeId) => map.addLayer(layer, beforeId);

   addLayerBefore(
    addLayer,
  {
          id: \"bataskab\",
          type: \"line\",
          source: \"bataskabtile\",
          \"source-layer\": \"Kab_Madiun_Polyline-7gpmc2\",
          layout: {},
          paint: {
            'line-color': '#fff',
            'line-width': 2
            },
        },
    \"bataskab\"
  );

   addLayerBefore(
    addLayer,
  {
          id: \"jalannas\",
          type: \"line\",
          source: \"jalannastile\",
          \"source-layer\": \"JALAN_NASIONAL_MADIUN-2mmnhr\",
          layout: {},
          paint: {
            'line-color': '#000',
            'line-width': 4
            },
        },
    \"jalannas\"
  );

  addLayerBefore(
    addLayer,
  {
          id: \"jalankab\",
          type: \"line\",
          source: \"jalankabtile\",
          \"source-layer\": \"Jalan_kabupaten_100m-2lldiz\",
          layout: {},
          paint: {
            'line-color': '#ccc',
            'line-width': 4
            },
        },
    \"jalankab\"
  );


}  



      
function addMaineLayer() {

  const addLayer = (layer, beforeId) => map.addLayer(layer, beforeId);
  ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 576
            echo "
";
            // line 577
            $context["filex"] = (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 577)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 577), "render_tokens", [], "any", false, false, true, 577)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 577)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_file_impo }}"] ?? null) : null);
            // line 578
            $context["jenis"] = (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 578)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 578), "render_tokens", [], "any", false, false, true, 578)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 578)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_jenis_newimport }}"] ?? null) : null);
            // line 579
            $context["idx"] = (($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 579)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 579), "render_tokens", [], "any", false, false, true, 579)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 579)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ nid }}"] ?? null) : null);
            // line 580
            echo "

\t\t";
            // line 582
            if ((($context["jenis"] ?? null) == "jalan_kabupaten")) {
                // line 583
                echo "\t\t
\t\t\t";
                // line 584
                $context["tilex"] = "Kon_Karakteristik_Jalan_100m-78vgvr";
                // line 585
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.9lfabi0d";
                // line 586
                echo "\t\t\t";
                $context["jenis"] = "kab";
                // line 587
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 588
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 589
                echo "\t\t
\t\t";
            } elseif ((            // line 590
($context["jenis"] ?? null) == "jalan_perkotaan")) {
                // line 591
                echo "\t\t\t";
                $context["tilex"] = "Kon_Jl_Perkotaan_Kab_Madiun-dz0rgm";
                // line 592
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.b03ezrdx";
                // line 593
                echo "\t\t\t";
                $context["jenis"] = "kota";
                // line 594
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 595
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 596
                echo "\t\t
\t\t";
            } elseif ((            // line 597
($context["jenis"] ?? null) == "jalan_kelurahan")) {
                echo " 
\t\t\t";
                // line 598
                $context["tilex"] = "Kon_Jalan_Kelurahan_2-cv7czs";
                // line 599
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.5ngx9rrq";
                // line 600
                echo "\t\t\t";
                $context["jenis"] = "kel";
                // line 601
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 602
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 603
                echo "\t\t
\t\t";
            } else {
                // line 605
                echo "\t\t\t";
                $context["tilex"] = "Kon_Jalan_Poros_Sesuai_SK-8lejoj";
                // line 606
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.6xbcv45x";
                // line 607
                echo "\t\t\t";
                $context["jenis"] = "kel";
                // line 608
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 609
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                echo "\t\t
\t\t\t
\t\t";
            }
            // line 612
            echo "
const csvUrl";
            // line 613
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 613, $this->source), "html", null, true);
            echo " = 'https://silatjantan.dpupr.madiunkab.go.id";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filex"] ?? null), 613, $this->source), "html", null, true);
            echo "';
const csvPromise";
            // line 614
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 614, $this->source), "html", null, true);
            echo " = papaPromise(csvUrl";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 614, $this->source), "html", null, true);
            echo ");

          csvPromise";
            // line 616
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 616, $this->source), "html", null, true);
            echo ".then(function (results) {
         // console.log(results.data);
          results.data.forEach((row) => {
            
            if(row.Kondisi_Kini)
            {              
             var kondisix=row.Kondisi_Kini;
             var perke=row.Perke_Kini;
            }
            else{
               var kondisix=row.Kondisi;
               var perke=row.Tipe_Perke;
            }

            map.setFeatureState(
              {
                //YOUR TURN: Replace with your source tileset and source layer
                source: \"";
            // line 633
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 633, $this->source), "html", null, true);
            echo "_tile\",
                sourceLayer: \"";
            // line 634
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tilex"] ?? null), 634, $this->source), "html", null, true);
            echo "\",
                //YOUR TURN: Replace with unqiue ID row name
                id: ";
            // line 636
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idnya"] ?? null), 636, $this->source), "html", null, true);
            echo ",
              },
              //YOUR TURN: Add rows you want to style/interact with
              {
                Kondisi: kondisix,
                Tipe_Perke: perke,
                Lebar_STA: row.Lebar_STA,
                Penanganan: row.Penanganan,
                Panjang: row.Panjang,
              }
            );
          });
        });



      //YOUR TURN: Add source layer
        map.addSource(\"";
            // line 653
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 653, $this->source), "html", null, true);
            echo "_tile\", {
          type: \"vector\",
          url: \"mapbox://";
            // line 655
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mapboxid"] ?? null), 655, $this->source), "html", null, true);
            echo "\",
          promoteId: \"";
            // line 656
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["promoteid"] ?? null), 656, $this->source), "html", null, true);
            echo "\",
        });



  

  addLayerBefore(
  addLayer,
   {
          id: \"";
            // line 666
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 666, $this->source), "html", null, true);
            echo "\",
          type: \"line\",
          source: \"";
            // line 668
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 668, $this->source), "html", null, true);
            echo "_tile\",
          \"source-layer\": \"";
            // line 669
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tilex"] ?? null), 669, $this->source), "html", null, true);
            echo "\",
          layout: {'visibility': 'none'},
          paint: {
            'line-color': [
            'match',
            ['feature-state', 'Kondisi'],
            'baik','#25ed25',
            'baik ','#25ed25',
            'sedang','yellow',
            'RR','red',
            'RB','#630606',
            /* other */ '#ccc'
            ],
            'line-width': 4
            },
        },
    \"";
            // line 685
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 685, $this->source), "html", null, true);
            echo "\"
  );
    

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 690
        echo "



}




function addLayerBefore(addLayerFn, layer, beforeId) {
  // check beforeId defined and exists on the map
  const beforeLayer = Boolean(beforeId) && map.getLayer(beforeId);
  if (beforeLayer && beforeId === beforeLayer.id) addLayerFn(layer, beforeId);
  else {
    console.warn(
      `Not found layer with id '\${beforeId}'.\\nLayer '\${
        layer.id
      }' added without before.`
    );
    addLayerFn(layer);
  }
}




      var popup = new mapboxgl.Popup({
        closeButton: false,
        closeOnClick: false,
      });

  ";
        // line 721
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 722
            echo "  ";
            $context["idx"] = (($__internal_compile_9 = (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 722)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 722), "render_tokens", [], "any", false, false, true, 722)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 722)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ nid }}"] ?? null) : null);
            // line 723
            echo "  ";
            $context["jenis"] = (($__internal_compile_12 = (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 723)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 723), "render_tokens", [], "any", false, false, true, 723)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 723)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_jenis_import }}"] ?? null) : null);
            // line 724
            echo "

   
      map.on(\"mousemove\", \"";
            // line 727
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 727, $this->source), "html", null, true);
            echo "\", function (e) {
        map.getCanvas().style.cursor = \"pointer\";

        var district = map.queryRenderedFeatures(e.point, {
          layers: [\"";
            // line 731
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 731, $this->source), "html", null, true);
            echo "\"],
        });
        console.log(district[0]);
        var props = district[0].properties;

        var state = district[0].state;
      if(props){
         var coordinates = e.lngLat;

          \$('#edit-field-nama-ruas-0-value').val( props.Nm_Ruas);
          \$('#edit-field-sta-awal-0-value').val( props.STA_AWAL);
          \$('#edit-field-sta-akhir-0-value').val( props.STA_AKHIR);
          \$('#edit-field-kode-infrastruktur-0-value').val( props.Kd_Inf);
          \$('#edit-field-lokasi-0-value-lat').val( coordinates.lat);
          \$('#edit-field-lokasi-0-value-lon').val( coordinates.lng);
      }
        var content = \"<b>\" + \"Detail Jalan\" + \"</b>\" + \"<br>\";
        ";
            // line 748
            if ((($context["jenis"] ?? null) == "Status Jalan Kabupaten")) {
                // line 749
                echo "        content += \"<b>\" + props.Nm_Ruas + \"</b><br>\";
          content += \"No Ruas: \" + props.Kd_Inf + \"<br>\";
        ";
            } else {
                // line 752
                echo "         content += \"<b>\" + props.Nm_Ruas + \"</b><br>\";
       ";
            }
            // line 753
            echo "      
        content += \"Panjang Ruas: \" + state.Panjang + \"<br>\";
        content += \"STA_AWAL: \" + props.STA_AWAL + \"<br>\";
        content += \"STA_AKHIR: \" + props.STA_AKHIR + \"<br>\";
        content += \"Kondisi: \" + state.Kondisi + \"<br>\";
        content += \"Perkerasan: \" + state.Tipe_Perke + \"<br>\";
        content += \"Lebar: \" + state.Lebar_STA + \"<br>\";
        popup.setLngLat(e.lngLat).setHTML(content).addTo(map);
      });

      map.on(\"mouseleave\", \"";
            // line 763
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 763, $this->source), "html", null, true);
            echo "\", function () {
        map.getCanvas().style.cursor = \"\";
        popup.remove();
      });

  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 769
        echo "
      function transformRequest(url, resourceType) {
        var isMapboxRequest =
          url.slice(8, 22) === \"api.mapbox.com\" ||
          url.slice(10, 26) === \"tiles.mapbox.com\";
        return {
          url: isMapboxRequest
            ? url.replace(\"?\", \"?pluginName=dataJoins&\")
            : url,
        };
      }
      function papaPromise(url) {
        return new Promise(function (resolve, reject) {
          Papa.parse(url, {
            download: true,
            header: true,
            skipEmptyLines: true,
            complete: resolve,
          });
        });
      }




\$(function() {

  // info button transitions
  \$(\".menu\").on(\"click\", function() {
    \$(\".menu > i\").toggleClass(\"fa-bars fa-close\", 300);
    \$(\".sidebar-wrapper\").toggleClass(\"show-sidebar\", 500);
    \$(\"body\").toggleClass(\"push-body\", 500);
  });
});



      
map.on('idle', () => {



  \$(\"#filter\").keyup(function(){
    var dInput = this.value;
    if(dInput.length>3){

        var options = {
\tshouldSort: true,
\tmatchAllTokens: true,
\tfindAllMatches: true,
\tthreshold: 0.4,
\tlocation: 0,
\tdistance: 100,
\tmaxPatternLength: 32,
\tminMatchCharLength: 1,
\tkeys: ['properties.Nm_Ruas']
};
var arrfeat=[];
           \$('#menu a').filter('.active').each(function(i) {
        var ida= \$(this).attr('id');
   
        const featuresx = map.queryRenderedFeatures({ layers: [ida] });
          arrfeat = arrfeat.concat(featuresx);

      });

      
var fusex = new Fuse(arrfeat, options); 

        if (arrfeat) {
        var resultJSON = fusex.search(dInput);
    //    const uniqueFeatures = getUniqueFeatures(featuresx, 'No');
        renderListings(resultJSON); 
          }
    }  
  });



});

\$('#menu a').click(function (e) {
   e.preventDefault();
   // \$(\"#menu a\").removeClass(\"active\");
    \$(this).toggleClass(\"active\");
     var clickedLayer = \$(this).attr(\"id\");



              const visibility = map.getLayoutProperty(
                    clickedLayer,
                    'visibility'
                );

                // Toggle layer visibility by changing the layout object's visibility property.
                if (visibility === 'visible') {
                    map.setLayoutProperty(clickedLayer, 'visibility', 'none');
                   // this.className = '';
                } else {
                   // this.className = 'active';'
                    map.setLayoutProperty(
                        clickedLayer,
                        'visibility',
                        'visible'
                    );

          

                }




});


   function renderListings(features) {
     const listings = document.getElementById('wadahfeat');
      
  \$('#wadahfeat').empty();  
  let itemNames =features; //features.filter(eachObj => eachObj.properties.Nm_Ruas.includes(dInput));


    
        if (itemNames.length) {
            for (const feature of itemNames) {
            
                 const listing = listings.appendChild(document.createElement('li'));
                 
                  /* Assign the 'item' class to each listing for styling. */
                  listing.className = 'itemx';

          /* Add the link to the individual listing created above. */
          const link = listing.appendChild(document.createElement('a'));
          link.href = '#';
          link.className = 'title';
          link.id = feature.item.properties.No;
          link.innerHTML = feature.item.properties.Nm_Ruas+\" \"+feature.item.properties.STA_AWAL+\" - \"+feature.item.properties.STA_AKHIR; 


            link.addEventListener('click', function () {
            for (const featurex of itemNames) {
              //console.log(featurex);
              if (this.id === featurex.item.properties.No) {
                flyToStore(featurex.item);
                createPopUp(featurex.item);
              } 
            }
           
          });


            }

            // Show the filter input
           // filterEl.parentNode.style.display = 'block';
        } else if (features.length === 0 ) {
         
        } else {
          

       
        } 
    }


      function flyToStore(currentFeature) {
       // console.log(currentFeature);
       map.flyTo({
          center: currentFeature.geometry.coordinates[0],
          zoom: 15
        }); 
      }

      function createPopUp(currentFeature) {
        const popUps = document.getElementsByClassName('mapboxgl-popup');
        if (popUps[0]) popUps[0].remove();
        const popup = new mapboxgl.Popup({ closeOnClick: false })
          .setLngLat(currentFeature.geometry.coordinates[0])
          .setHTML(
            `<h3>\${currentFeature.properties.Nm_Ruas}</h3><h4>\${currentFeature.state.Kondisi}</h4>
            <p>Panjang: \${currentFeature.properties.Panjang}</p>
            <p>STA_AWAL: \${currentFeature.properties.STA_AWAL}</p>
            <p>STA_AKHIR: \${currentFeature.properties.STA_AKHIR}</p>
            <p>Tipe_Perkerasan: \${currentFeature.state.Tipe_Perke}</p>
            <p>Lebar_STA: \${currentFeature.state.Lebar_STA}</p>
            `
          )
          .addTo(map);
      }

      function getUniqueFeatures(features, comparatorProperty) {
      const uniqueIds = new Set();
      const uniqueFeatures = [];
      for (const feature of features) {
      const id = feature.properties.No+'_'+feature.properties.Nm_Ruas;
      if (!uniqueIds.has(id)) {
      uniqueIds.add(id);
      uniqueFeatures.push(feature);
      }
      }
      return uniqueFeatures;
      }



    </script>




";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/views/views-view-unformatted--import-data--mkj_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  994 => 769,  974 => 763,  962 => 753,  958 => 752,  953 => 749,  951 => 748,  931 => 731,  924 => 727,  919 => 724,  916 => 723,  913 => 722,  896 => 721,  863 => 690,  844 => 685,  825 => 669,  821 => 668,  816 => 666,  803 => 656,  799 => 655,  794 => 653,  774 => 636,  769 => 634,  765 => 633,  745 => 616,  738 => 614,  732 => 613,  729 => 612,  722 => 609,  719 => 608,  716 => 607,  713 => 606,  710 => 605,  706 => 603,  703 => 602,  700 => 601,  697 => 600,  694 => 599,  692 => 598,  688 => 597,  685 => 596,  682 => 595,  679 => 594,  676 => 593,  673 => 592,  670 => 591,  668 => 590,  665 => 589,  662 => 588,  659 => 587,  656 => 586,  653 => 585,  651 => 584,  648 => 583,  646 => 582,  642 => 580,  640 => 579,  638 => 578,  636 => 577,  633 => 576,  616 => 575,  383 => 344,  375 => 342,  369 => 341,  320 => 294,  314 => 292,  312 => 291,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/views/views-view-unformatted--import-data--mkj_block.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/views/views-view-unformatted--import-data--mkj_block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 291, "for" => 341, "set" => 577);
        static $filters = array("escape" => 292);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
