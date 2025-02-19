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

/* themes/silatjantan/templates/views/views-view-table--pelaporan--page-1.html.twig */
class __TwigTemplate_8c1243bde3ea0a5b3fc91105e529107ba777d5cfa11bf39c2f9bfe21862e33f1 extends \Twig\Template
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
        // line 34
        $context["classes"] = [0 => "views-table", 1 => "views-view-table", 2 => ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 37
($context["header"] ?? null), 37, $this->source))), 3 => ((        // line 38
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 4 => ((        // line 39
($context["sticky"] ?? null)) ? ("sticky-enabled") : ("")), 5 => "uk-table", 6 => "uk-table-striped", 7 => "uk-table-small"];
        // line 45
        echo "
";
        // line 46
        $context["gejson"] = $this->extensions['Drupal\altar\customTwigExtension']->getlapor();
        // line 47
        echo "<style>

.marker {
background-image: url('/sites/default/files/map-marker.png');
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


";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("import_data", "mkj_block"), "html", null, true);
        echo "

<script>
const geojson = ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["gejson"] ?? null), 71, $this->source));
        echo ";

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
`<h3>\${feature.properties.field_nama_lengkap}</h3><p>Laporan: \${feature.properties.description}</p><p>Petunjuk Lokasi: \${feature.properties.field_petunjuk_lokasi}</p> <p>Pelapor: \${feature.properties.field_nama_lengkap}</p><p>No Wa: \${feature.properties.field_nomor_whatsapp}</p><p><a class=\"uk-button uk-button-primary\" href=\"/node/\${feature.properties.nid}\">Detail</a>`
)
)
.addTo(map);
}

</script>

<div class=\"card w-100 position-relative overflow-hidden mt-6\">
            <div class=\"px-4 py-3 border-bottom\">
              <h5 class=\"card-title fw-semibold mb-0 lh-sm\">Data Laporan</h5>
            </div>
            <div class=\"card-body p-4\">
              <div class=\"table-responsive rounded-2 mb-4\">
<table class=\"table border text-nowrap customize-table mb-0 align-middle\" style=\"   font-size: smaller;\">
  ";
        // line 101
        if (($context["caption_needed"] ?? null)) {
            // line 102
            echo "    <caption>
    ";
            // line 103
            if (($context["caption"] ?? null)) {
                // line 104
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 104, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 106
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 106, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 108
            echo "    ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 109
                echo "      <details>
        ";
                // line 110
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 111
                    echo "          <summary>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 111, $this->source), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 113
                echo "        ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 114
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 114, $this->source), "html", null, true);
                    echo "
        ";
                }
                // line 116
                echo "      </details>
    ";
            }
            // line 118
            echo "    </caption>
  ";
        }
        // line 120
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 121
            echo "    <thead>
      <tr>
        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 124
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 124)) {
                    // line 125
                    echo "            ";
                    // line 126
                    $context["column_classes"] = [0 => "views-field", 1 => ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 128
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 128, $this->source))];
                    // line 131
                    echo "          ";
                }
                // line 132
                echo "          <th";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 132), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 132), "setAttribute", [0 => "scope", 1 => "col"], "method", false, false, true, 132), 132, $this->source), "html", null, true);
                echo ">";
                // line 133
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 133)) {
                    // line 134
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                    echo ">";
                    // line 135
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 135)) {
                        // line 136
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 138
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                    }
                    // line 140
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 142
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 142)) {
                        // line 143
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 145
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                    }
                }
                // line 148
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "      </tr>
    </thead>
  ";
        }
        // line 153
        echo "  <tbody>
    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 155
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo ">
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 156));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 157
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 157)) {
                    // line 158
                    echo "            ";
                    // line 159
                    $context["column_classes"] = [0 => "views-field"];
                    // line 163
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 163));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 164
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 164, $this->source), [0 => ("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 164, $this->source))]);
                        // line 165
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "          ";
                }
                // line 167
                echo "          <td";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 167), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 167), 167, $this->source), "html", null, true);
                echo ">";
                // line 168
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 168)) {
                    // line 169
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 170));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 171
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "              </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 175
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 175));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 176
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 179
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "  </tbody>
</table>

</div></div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/silatjantan/templates/views/views-view-table--pelaporan--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 183,  332 => 181,  325 => 179,  317 => 176,  313 => 175,  308 => 173,  298 => 171,  294 => 170,  289 => 169,  287 => 168,  283 => 167,  280 => 166,  274 => 165,  271 => 164,  266 => 163,  264 => 159,  262 => 158,  259 => 157,  255 => 156,  250 => 155,  246 => 154,  243 => 153,  238 => 150,  231 => 148,  226 => 145,  216 => 143,  214 => 142,  209 => 140,  205 => 138,  195 => 136,  193 => 135,  189 => 134,  187 => 133,  183 => 132,  180 => 131,  178 => 128,  177 => 126,  175 => 125,  172 => 124,  168 => 123,  164 => 121,  161 => 120,  157 => 118,  153 => 116,  147 => 114,  144 => 113,  138 => 111,  136 => 110,  133 => 109,  130 => 108,  124 => 106,  118 => 104,  116 => 103,  113 => 102,  111 => 101,  78 => 71,  72 => 68,  49 => 47,  47 => 46,  44 => 45,  42 => 39,  41 => 38,  40 => 37,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/silatjantan/templates/views/views-view-table--pelaporan--page-1.html.twig", "/home/asew3698/public_html/silatjantan/themes/silatjantan/templates/views/views-view-table--pelaporan--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 101, "for" => 123);
        static $filters = array("length" => 37, "escape" => 68, "raw" => 71, "merge" => 164);
        static $functions = array("getlapor" => 46, "drupal_view" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'raw', 'merge'],
                ['getlapor', 'drupal_view']
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
