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

/* themes/silatjantan/templates/views/views-view-unformatted--import-data--perkerasan.html.twig */
class __TwigTemplate_d4762c68e88beec218f41ed741c09a672732c3068e36148c2061d565afb0076e extends \Twig\Template
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

    #menu1 {
        background: #fff;
        position: absolute;
        z-index: 99;
        top: 10px;
        left: 10px;
        border-radius: 3px;
        width: auto;
        border: 1px solid rgba(0, 0, 0, 0.4);
        font-family: 'Open Sans', sans-serif;
        
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
           position: relative;
        top: 0;
        bottom: 0;
        height:700px;
        width: 100%;
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
    bottom: 40px;
    right: 2px;
    background: #fff;
    margin-right: 20px;
    font-family: Arial, sans-serif;
    overflow: auto;
    border-radius: 3px;
    padding: 13px;
}
#legend {
    padding: 10px;
    box-shadow: 0 1px 2px rgb(0 0 0 / 10%);
    line-height: 22px;
    height: 137px;
    width: 144px;
    font-size: 14px;
}
.legend-key {
display: inline-block;
border-radius: 20%;
width: 10px;
height: 10px;
margin-right: 5px;
}

  #menu {
      position: absolute;
    /* background: #fff; */
    border-radius: 20px;
    top: 10px;
    right: 40px;
    padding: 10px;
    font-family: \"Open Sans\", sans-serif;
        z-index: 99;
      }


      

#sidebarx {
 position: absolute;
    top: 0px;
    left: -260px;
    width: 260px;
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
}
#wadahfeat li  {
    list-style:none;
   
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
    


</style>
";
        // line 247
        if (($context["title"] ?? null)) {
            // line 248
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 248, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 250
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
      <input id=\"streets-v11\" type=\"radio\" name=\"rtoggle\" value=\"streets\"/>
      <label for=\"streets\">streets</label>
      <input id=\"light-v10\" type=\"radio\" name=\"rtoggle\" value=\"light\" />
      <label for=\"light\">light</label>
      <input id=\"dark-v10\" type=\"radio\" name=\"rtoggle\" value=\"dark\" />
      <label for=\"dark\">dark</label>
      <input id=\"outdoors-v11\" type=\"radio\" name=\"rtoggle\" value=\"outdoors\" />
      <label for=\"outdoors\">outdoors</label>
      <button class=\"btcari\" onclick=\"toggleSidebar(this)\"> Cari</button>  
    </div>

  <div class=\"map-overlay\" id=\"legend\"></div>

<nav id=\"menu\">
   ";
        // line 278
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
            echo "  
   
";
            // line 280
            $context["filex"] = (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 280)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 280), "render_tokens", [], "any", false, false, true, 280)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 280)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ field_file_impo }}"] ?? null) : null);
            // line 281
            $context["jenisx"] = (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 281)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 281), "render_tokens", [], "any", false, false, true, 281)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 281)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_jenis_newimport }}"] ?? null) : null);
            // line 282
            $context["idx"] = (($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 282)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 282), "render_tokens", [], "any", false, false, true, 282)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 282)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["{{ nid }}"] ?? null) : null);
            // line 283
            echo "

\t\t";
            // line 285
            if ((($context["jenisx"] ?? null) == "jalan_kabupaten")) {
                // line 286
                echo "\t\t
\t\t\t";
                // line 287
                $context["tilex"] = "Kon_Karakteristik_Jalan_100m-78vgvr";
                // line 288
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.9lfabi0d";
                // line 289
                echo "\t\t\t";
                $context["jenis"] = "kab";
                // line 290
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 291
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 292
                echo "\t\t
\t\t";
            } elseif ((            // line 293
($context["jenisx"] ?? null) == "jalan_perkotaan")) {
                // line 294
                echo "\t\t\t";
                $context["tilex"] = "Kon_Jl_Perkotaan_Kab_Madiun-dz0rgm";
                // line 295
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.b03ezrdx";
                // line 296
                echo "\t\t\t";
                $context["jenis"] = "kota";
                // line 297
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 298
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 299
                echo "\t\t
\t\t";
            } elseif ((            // line 300
($context["jenisx"] ?? null) == "jalan_kelurahan")) {
                echo " 
\t\t\t";
                // line 301
                $context["tilex"] = "Kon_Jalan_Kelurahan_2-cv7czs";
                // line 302
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.5ngx9rrq";
                // line 303
                echo "\t\t\t";
                $context["jenis"] = "kel";
                // line 304
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 305
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 306
                echo "\t\t
\t\t";
            } else {
                // line 308
                echo "\t\t\t";
                $context["tilex"] = "Kon_Jalan_Poros_Sesuai_SK-8lejoj";
                // line 309
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.6xbcv45x";
                // line 310
                echo "\t\t\t";
                $context["jenis"] = "kel";
                // line 311
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 312
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                echo "\t\t
\t\t\t
\t\t";
            }
            // line 315
            echo "
          <a id=\"";
            // line 316
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 316, $this->source), "html", null, true);
            echo "\" href=\"#\"  data-tile=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 316, $this->source), "html", null, true);
            echo "_tile\" data-source=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tilex"] ?? null), 316, $this->source), "html", null, true);
            echo "\" data-file=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filex"] ?? null), 316, $this->source), "html", null, true);
            echo "\" >";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["jenisx"] ?? null), 316, $this->source), "html", null, true);
            echo "</a>  
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
        // line 318
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
document.getElementById('filter').addEventListener('click', () => {
map.fitBounds([
[111.45,-7.8], // southwestern corner of the bounds
[111.83,-7.43] // northeastern corner of the bounds
]);
});


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
    map.addControl(new mapboxgl.GeolocateControl({
positionOptions: {
enableHighAccuracy: true
},
trackUserLocation: true,
showUserHeading: true
}));
    
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
          '#2f5597',
          '#9dc3e6',
          '#c55a11',
          '#ffff00',
          '#red',
          '#000',
          '#ccc'
          ];
          
             const layers = [
          'Aspal',
          'Beton',
          'Lapen',
          'Makadam',
          'Tanah',
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
              'line-color': 'gray',
              'line-width': 2,
              'line-dasharray': [1, 1],
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
        // line 553
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
            // line 554
            echo "
";
            // line 555
            $context["filex"] = (($__internal_compile_9 = (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 555)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 555), "render_tokens", [], "any", false, false, true, 555)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 555)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["{{ field_file_impo }}"] ?? null) : null);
            // line 556
            $context["jenis"] = (($__internal_compile_12 = (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 556)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 556), "render_tokens", [], "any", false, false, true, 556)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 556)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["{{ field_jenis_newimport }}"] ?? null) : null);
            // line 557
            $context["idx"] = (($__internal_compile_15 = (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 557)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 557), "render_tokens", [], "any", false, false, true, 557)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 557)] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["{{ nid }}"] ?? null) : null);
            // line 558
            echo "

\t\t";
            // line 560
            if ((($context["jenis"] ?? null) == "jalan_kabupaten")) {
                // line 561
                echo "\t\t
\t\t\t";
                // line 562
                $context["tilex"] = "Kon_Karakteristik_Jalan_100m-78vgvr";
                // line 563
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.9lfabi0d";
                // line 564
                echo "\t\t\t";
                $context["jenis"] = "kab";
                // line 565
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 566
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 567
                echo "\t\t
\t\t";
            } elseif ((            // line 568
($context["jenis"] ?? null) == "jalan_perkotaan")) {
                // line 569
                echo "\t\t\t";
                $context["tilex"] = "Kon_Jl_Perkotaan_Kab_Madiun-dz0rgm";
                // line 570
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.b03ezrdx";
                // line 571
                echo "\t\t\t";
                $context["jenis"] = "kota";
                // line 572
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 573
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 574
                echo "\t\t
\t\t";
            } elseif ((            // line 575
($context["jenis"] ?? null) == "jalan_kelurahan")) {
                echo " 
\t\t\t";
                // line 576
                $context["tilex"] = "Kon_Jalan_Kelurahan_2-cv7czs";
                // line 577
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.5ngx9rrq";
                // line 578
                echo "\t\t\t";
                $context["jenis"] = "kel";
                // line 579
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 580
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                // line 581
                echo "\t\t
\t\t";
            } else {
                // line 583
                echo "\t\t\t";
                $context["tilex"] = "Kon_Jalan_Poros_Sesuai_SK-8lejoj";
                // line 584
                echo "\t\t\t";
                $context["mapboxid"] = "robaitusman.6xbcv45x";
                // line 585
                echo "\t\t\t";
                $context["jenis"] = "kel";
                // line 586
                echo "\t\t\t";
                $context["promoteid"] = "No";
                // line 587
                echo "\t\t\t";
                $context["idnya"] = "row.No";
                echo "\t\t
\t\t\t
\t\t";
            }
            // line 590
            echo "
const csvUrl";
            // line 591
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 591, $this->source), "html", null, true);
            echo " = '";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filex"] ?? null), 591, $this->source), "html", null, true);
            echo "';
const csvPromise";
            // line 592
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 592, $this->source), "html", null, true);
            echo " = papaPromise(csvUrl";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 592, $this->source), "html", null, true);
            echo ");

          csvPromise";
            // line 594
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 594, $this->source), "html", null, true);
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
            // line 611
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 611, $this->source), "html", null, true);
            echo "_tile\",
                sourceLayer: \"";
            // line 612
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tilex"] ?? null), 612, $this->source), "html", null, true);
            echo "\",
                //YOUR TURN: Replace with unqiue ID row name
                id: ";
            // line 614
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idnya"] ?? null), 614, $this->source), "html", null, true);
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
            // line 631
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 631, $this->source), "html", null, true);
            echo "_tile\", {
          type: \"vector\",
          url: \"mapbox://";
            // line 633
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mapboxid"] ?? null), 633, $this->source), "html", null, true);
            echo "\",
          promoteId: \"";
            // line 634
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["promoteid"] ?? null), 634, $this->source), "html", null, true);
            echo "\",
        });

  

  addLayerBefore(
  addLayer,
   {
          id: \"";
            // line 642
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 642, $this->source), "html", null, true);
            echo "\",
          type: \"line\",
          source: \"";
            // line 644
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 644, $this->source), "html", null, true);
            echo "_tile\",
          \"source-layer\": \"";
            // line 645
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tilex"] ?? null), 645, $this->source), "html", null, true);
            echo "\",
          layout: {'visibility': 'none'},
          paint: {
            'line-color': [
            'match',
            ['feature-state', 'Tipe_Perke'],
            'aspal','#2f5597',
            'beton','#9dc3e6',
            'lapen','#c55a11',
            'makadam','#ffff00',
            'tanah','red',
            /* other */ '#ccc'
            ],
            'line-width': 4
            },
        },
    \"";
            // line 661
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 661, $this->source), "html", null, true);
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
        // line 666
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
        // line 697
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
            // line 698
            echo "  ";
            $context["idx"] = (($__internal_compile_18 = (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 698)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 698), "render_tokens", [], "any", false, false, true, 698)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 698)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["{{ nid }}"] ?? null) : null);
            // line 699
            echo "  ";
            $context["jenis"] = (($__internal_compile_21 = (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 699)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 699), "render_tokens", [], "any", false, false, true, 699)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 699)] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["{{ field_jenis_import }}"] ?? null) : null);
            // line 700
            echo "

   
      map.on(\"mousemove\", \"";
            // line 703
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 703, $this->source), "html", null, true);
            echo "\", function (e) {
        map.getCanvas().style.cursor = \"pointer\";

        var district = map.queryRenderedFeatures(e.point, {
          layers: [\"";
            // line 707
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 707, $this->source), "html", null, true);
            echo "\"],
        });

        var props = district[0].properties;

        var state = district[0].state;

        var content = \"<b>\" + \"Detail Jalan\" + \"</b>\" + \"<br>\";
        ";
            // line 715
            if ((($context["jenis"] ?? null) == "Status Jalan Kabupaten")) {
                // line 716
                echo "        content += \"<b>\" + props.Nm_Ruas + \"</b><br>\";
          content += \"No Ruas: \" + props.Kd_Inf + \"<br>\";
        ";
            } else {
                // line 719
                echo "         content += \"<b>\" + props.Nm_Ruas + \"</b><br>\";
       ";
            }
            // line 720
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
            // line 730
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 730, $this->source), "html", null, true);
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
        // line 736
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
\tthreshold: 0.2,
\tmaxPatternLength: 32,
\tminMatchCharLength: 4,
\tkeys: ['properties.Nm_Ruas']
};



var arrfeat=[];
           \$('#menu a').filter('.active').each(function(i) {
        var ida= \$(this).attr('id');
        var tilex= \$(this).attr('data-tile');
        var sourcex= \$(this).attr('data-source');
        const cobax = map.queryRenderedFeatures({layers: [ida]});  

         arrfeat = arrfeat.concat(cobax);
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
            `<h3>\${currentFeature.properties.Nm_Ruas}</h3><h4>\${currentFeature.state.Tipe_Perke}</h4>
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
        return "themes/silatjantan/templates/views/views-view-unformatted--import-data--perkerasan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1050 => 736,  1030 => 730,  1018 => 720,  1014 => 719,  1009 => 716,  1007 => 715,  996 => 707,  989 => 703,  984 => 700,  981 => 699,  978 => 698,  961 => 697,  928 => 666,  909 => 661,  890 => 645,  886 => 644,  881 => 642,  870 => 634,  866 => 633,  861 => 631,  841 => 614,  836 => 612,  832 => 611,  812 => 594,  805 => 592,  799 => 591,  796 => 590,  789 => 587,  786 => 586,  783 => 585,  780 => 584,  777 => 583,  773 => 581,  770 => 580,  767 => 579,  764 => 578,  761 => 577,  759 => 576,  755 => 575,  752 => 574,  749 => 573,  746 => 572,  743 => 571,  740 => 570,  737 => 569,  735 => 568,  732 => 567,  729 => 566,  726 => 565,  723 => 564,  720 => 563,  718 => 562,  715 => 561,  713 => 560,  709 => 558,  707 => 557,  705 => 556,  703 => 555,  700 => 554,  683 => 553,  446 => 318,  422 => 316,  419 => 315,  412 => 312,  409 => 311,  406 => 310,  403 => 309,  400 => 308,  396 => 306,  393 => 305,  390 => 304,  387 => 303,  384 => 302,  382 => 301,  378 => 300,  375 => 299,  372 => 298,  369 => 297,  366 => 296,  363 => 295,  360 => 294,  358 => 293,  355 => 292,  352 => 291,  349 => 290,  346 => 289,  343 => 288,  341 => 287,  338 => 286,  336 => 285,  332 => 283,  330 => 282,  328 => 281,  326 => 280,  306 => 278,  276 => 250,  270 => 248,  268 => 247,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/views/views-view-unformatted--import-data--perkerasan.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/views/views-view-unformatted--import-data--perkerasan.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 247, "for" => 278, "set" => 280);
        static $filters = array("escape" => 248);
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
