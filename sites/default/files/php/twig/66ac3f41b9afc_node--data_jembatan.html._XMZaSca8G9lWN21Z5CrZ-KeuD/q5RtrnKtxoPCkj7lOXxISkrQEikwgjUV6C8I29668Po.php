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

/* themes/silatjantan/templates/content/node--data_jembatan.html.twig */
class __TwigTemplate_9286c5e0e5de0d64dda4210446abbe696367376da7e37a05bd56b6f4b975de07 extends \Twig\Template
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

<style>

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
    line-height: 19px;
    height: 137px;
    width: 144px;
    font-size: 10px;
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
    right: 12px;
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
            font: 400 14px/13px 'Source Sans Pro', 'Helvetica Neue', sans-serif;
    padding: 0;
    width: 350px;
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


      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
        margin-top: 5px;
      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
        border-bottom-color: #91c949;
      }
      
      
      .marker {
        background-size: cover;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
      }
      .marker.marker_b
      { background-image: url('/sites/default/files/marker_b.svg');}
      .marker.marker_rr
      { background-image: url('/sites/default/files/marker_rr.svg');}
      .marker.marker_rs
      { background-image: url('/sites/default/files/marker_rs.svg');}
      .marker.marker_rb
      { background-image: url('/sites/default/files/marker_rb.svg');}
      .marker.marker_kritis
      { background-image: url('/sites/default/files/marker_kritis.svg');}
      .marker.marker_runtuh
      { background-image: url('/sites/default/files/marker_runtuh.svg');}
      .marker.marker_d
      { background-image: url('/sites/default/files/marker_d.svg');}
      
      
      .mapboxgl-popup {
        min-width: 400px;
      }
      .mapboxgl-popup-content {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
      }
    
    


</style>
";
        // line 326
        if (($context["title"] ?? null)) {
            // line 327
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 327, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 329
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
    
      


 const geojson = ";
        // line 414
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["geojsonx"] ?? null), 414, $this->source));
        echo ";
 

      // add markers to map
      geojson.features.forEach(function (marker) {
          console.log(marker.properties);
        // create a HTML element for each feature
        var el = document.createElement('div');
        if(marker.properties.k_kondisi==1){
           el.className = 'marker marker_b';  
           var bege='bg-success';
        }
        else if(marker.properties.k_kondisi==2){
           el.className = 'marker marker_rr';
           var bege='bg-secondary';
        }
        else if(marker.properties.k_kondisi==3){
           el.className = 'marker marker_rs'; 
           var bege='bg-primary';
        }
        else if(marker.properties.k_kondisi==4){
           el.className = 'marker marker_rb';  
           var bege='bg-warning';
        }
        else if(marker.properties.k_kondisi==5){
           el.className = 'marker marker_kritis';  
           var bege='bg-danger';
        }
        else if(marker.properties.k_kondisi==6){
           el.className = 'marker marker_runtuh';  
            var bege='bg-danger';
        }
        else{
           el.className = 'marker marker_d';  
           var bege='bg-secondary';
        }
        
       

        // make a marker for each feature and add it to the map
        new mapboxgl.Marker(el)
          .setLngLat(marker.geometry.coordinates)
        .setPopup(
            new mapboxgl.Popup({ offset: 25 }) // add popups
              .setHTML(
                '<div class=\"card\"><div class=\"card-body p-11\"><h5 class=\"card-title fs-5\">'
                  +marker.properties.nama_jem +'</h5> <span class=\"btn '+bege+' text-white px-2 d-flex align-items-center\"><i class=\"ti ti-message-circle fs-6 me-1\"></i> Kondisi : ' +
                  marker.properties.kondisi +
                  '</span> </div> <ul class=\"list-group list-group-flush\">'+
                  '<li class=\"list-group-item\">Jumlah Bentang : '+marker.properties.jml_bentang+'</li>'+
                  '<li class=\"list-group-item\">Panjang        : '+marker.properties.panjang+'</li>'+
                  '<li class=\"list-group-item\">Lebar          : '+marker.properties.lebar+'</li>'+
                  '<li class=\"list-group-item\">Kecamatan      : '+marker.properties.kec+'</li></ul></div>'
              )
          )
          .addTo(map);
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
        //addMaineLayer();
          
    //      console.log();
    //   addMarkersFromGeoJSON(geoJsonData);

     

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
          '#8CE205',
          '#068FFF',
          '#DDC80A',
          '#F4A800',
          '#F20063',
          '#770505'
          ];
          
             const layers = [
          'Baik',
          'RR (rusak ringan)',
          'RS (Rusak Sedang)',
          'RB (Rusak Berat)',
          'Kritis',
          'Runtuh'
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
        
            map.addSource(\"sungaitile\", {
          type: \"vector\",
          url: \"mapbox://robait.0jqpzklx\"
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
            'line-width': 2
            },
        },
    \"jalankab\"
  );
  
//   addLayerBefore(
//     addLayer,
//   {
//           id: \"sungaikab\",
//           type: \"line\",
//           source: \"sungaitile\",
//           \"source-layer\": \"Sungai_KabMadiun-6w7e9i\",
//           layout: {},
//           paint: {
//             'line-color': '#82bdf7',
//             'line-width': 1
//             },
//         },
//     \"sungaikab\"
//   );


}  

function addMarkersFromGeoJSON(geoJsonData) {
  // Ganti dengan path ke file GeoJSON Anda
 const addLayer = (layer, beforeId) => map.addLayer(layer, beforeId);

  map.addSource(\"markers-source\", {
    type: \"geojson\",
    data: geoJsonData
  });

  addLayerBefore(
    addLayer,
    {
      id: \"markersx\",
      type: \"symbol\",
      source: \"markers-source\",
      layout: {
        'icon-image': 'marker-15', // Gunakan ikon yang sesuai dengan kebutuhan Anda
        'icon-size': 1.5
      }
    },
    \"markersx\" // Tambahkan marker setelah base layer lainnya
  );
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
            $context["idx"] = (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 722)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 722), "render_tokens", [], "any", false, false, true, 722)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 722)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["{{ nid }}"] ?? null) : null);
            // line 723
            echo "  ";
            $context["jenis"] = (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 723)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#view"] ?? null) : null), "style_plugin", [], "any", false, false, true, 723), "render_tokens", [], "any", false, false, true, 723)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 723)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["{{ field_jenis_import }}"] ?? null) : null);
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
        ";
            // line 734
            echo "
        var props = district[0].properties;

        var state = district[0].state;

        var content = \"<b>\" + \"Detail Jalan\" + \"</b>\" + \"<br>\";
        ";
            // line 740
            if ((($context["jenis"] ?? null) == "Status Jalan Kabupaten")) {
                // line 741
                echo "        content += \"<b>\" + props.Nm_Ruas + \"</b><br>\";
          content += \"No Ruas: \" + props.Kd_Inf + \"<br>\";
        ";
            } else {
                // line 744
                echo "         content += \"<b>\" + props.Nm_Ruas + \"</b><br>\";
       ";
            }
            // line 745
            echo "      
        content += \"Panjang Ruas: \" + state.Panjang + \"<br>\";
        content += \"STA_AWAL: \" + props.STA_AWAL + \"<br>\";
        content += \"STA_AKHIR: \" + props.STA_AKHIR + \"<br>\";
        content += \"Kondisi: \" + state.Kondisi + \"<br>\";
        content += \"Perkerasan: \" + state.Tipe_Perke + \"<br>\";
        content += \"Penanganan: \" + state.Penanganan + \"<br>\";
        content += \"Lebar: \" + state.Lebar_STA + \"<br>\";
        popup.setLngLat(e.lngLat).setHTML(content).addTo(map);
      });

      map.on(\"mouseleave\", \"";
            // line 756
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["idx"] ?? null), 756, $this->source), "html", null, true);
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
        // line 762
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
          link.setAttribute('attname', 'attvalue');
          link.data = 'coba';
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
        return "themes/silatjantan/templates/content/node--data_jembatan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 762,  773 => 756,  760 => 745,  756 => 744,  751 => 741,  749 => 740,  741 => 734,  736 => 731,  729 => 727,  724 => 724,  721 => 723,  718 => 722,  701 => 721,  391 => 414,  304 => 329,  298 => 327,  296 => 326,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/content/node--data_jembatan.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/content/node--data_jembatan.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 326, "for" => 721, "set" => 722);
        static $filters = array("escape" => 327, "raw" => 414);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'raw'],
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
