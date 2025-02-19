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

/* themes/silatmobile/templates/content/node--penutupan_jalan.html.twig */
class __TwigTemplate_4033c1cc14741f4319fe764453b78093 extends \Twig\Template
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

.marker {
background-image: url('/sites/default/files/stop-sign.png');
background-size: cover;
width: 50px;
height: 50px;
border-radius: 50%;
cursor: pointer;
margin-top: -21px;
}
.mapboxgl-popup {
max-width: 200px;
}
.mapboxgl-popup-content {
text-align: center;
font-family: 'Open Sans', sans-serif;
}
</style>


<script>
const geojson = {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["akhirlon"] ?? null), 102, $this->source), "html", null, true);
        echo ",";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["akhirlat"] ?? null), 102, $this->source), "html", null, true);
        echo "]
},
'properties': {
'title': '";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["jenispenutupan"] ?? null), 105, $this->source), "html", null, true);
        echo "',
'description': '";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_keterangan"] ?? null), 106, $this->source), "html", null, true);
        echo "- ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_rentang_waktu"] ?? null), 106, $this->source), "html", null, true);
        echo "'
}
},
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["awallon"] ?? null), 113, $this->source), "html", null, true);
        echo ",";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["awallat"] ?? null), 113, $this->source), "html", null, true);
        echo "]
},
'properties': {
'title': '";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["jenispenutupan"] ?? null), 116, $this->source), "html", null, true);
        echo "',
'description': '";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_keterangan"] ?? null), 117, $this->source), "html", null, true);
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_rentang_waktu"] ?? null), 117, $this->source), "html", null, true);
        echo "'
}
}
]
};

// add markers to map
for (const feature of geojson.features) {
// create a HTML element for each feature
console.log(feature);
const el = document.createElement('div');
el.className = 'marker';
 
// make a marker for each feature and add it to the map
new mapboxgl.Marker(el)
.setLngLat(feature.geometry.coordinates)
.setPopup(
new mapboxgl.Popup({ offset: 25 }) // add popups
.setHTML(
`<h3>\${feature.properties.title}</h3><p>\${feature.properties.description}</p>`
)
)
.addTo(map);
}

</script>




";
    }

    public function getTemplateName()
    {
        return "themes/silatmobile/templates/content/node--penutupan_jalan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 117,  104 => 116,  96 => 113,  84 => 106,  80 => 105,  72 => 102,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatmobile/templates/content/node--penutupan_jalan.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatmobile/templates/content/node--penutupan_jalan.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 102);
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
