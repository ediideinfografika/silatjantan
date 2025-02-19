<?php

namespace Drupal\leaflet_geojson\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Leaflet\LeafletService;

/**
 * Provides a 'Leaflet Geojson' Block.
 *
 * @Block(
 *   id = "leaflet_geojson",
 *   admin_label = @Translation("Leaflet Geojson Map Block"),
 *   category = @Translation("Mapping"),
 * )
 */
class LeafletGeojson extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * The Leaflet service.
   *
   * @var Drupal\Leaflet\LeafletService
   */
  protected $leafletService;

  /**
   * Constructs a LeafletGeojson object.
   */
  public function __construct($configuration, $plugin_id, $plugin_definition, ModuleHandlerInterface $module_handler, LeafletService $leaflet_service) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->moduleHandler = $module_handler;
    $this->leafletService = $leaflet_service;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('module_handler'),
      $container->get('leaflet.service')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = $this->leafletGeojsonMapPaneRenderLayeredMap();

    /* Adding geojson specificities*/
    $build['#theme'] = 'leafletgeojson_map';
    $geojsonBuildArray = [
      '#attached' => [
        'library' => $this->leafletGeojsonMapPaneRenderJavascriptLibrary(),
        'drupalSettings' => [
          'leafletBBox' => $this->leafletGeojsonMapPaneRenderJavascriptSettings(),
        ],
      ],
    ];
    $build = array_merge_recursive ($build, $geojsonBuildArray);

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {

    $conf = $this->configuration;
    // Build base layer selector.
    $base_options = [];
    foreach (leaflet_map_get_info() as $key => $map) {
      $base_options[$key] = $this->t('@label', ['@label' => $map['label']]);
    }
    // The default selection is the first one, or the previously selected one.
    $default_base = key($base_options);
    if (isset($conf['map_settings']['base'])) {
      $default_base = $conf['map_settings']['base'];
    }
    $form['map_settings']['base'] = [
      '#title' => $this->t('Leaflet base layer'),
      '#type' => 'select',
      '#options' => $base_options,
      '#default_value' => $default_base,
      '#required' => TRUE,
      '#description' => $this->t(
          'Select the Leaflet base layer (map style) that will display the data.'
      ),
    ];

    // Provide some UI help for setting up multi-layer maps.
    $data_layers_description
      = $this->t('Choose one or more GeoJSON sources that will provide the map data.') . ' ';
    $data_layers_description
      .= $this->t('If more than one source  is selected, a layer control will appear on the map.') . ' ';
    $data_layers_description
      .= $this->t('Views GeoJSON page displays are automatically exposed here.');

    // Build the data layers selector.
    $form['map_settings']['info'] = [
      '#type' => 'fieldset',
      '#tree' => TRUE,
      '#title' => 'Views GeoJSON Data Layers',
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
      '#description' => $data_layers_description,
    ];

    // Grab the available layers.
    $sources = leaflet_geojson_source_get_info(NULL, TRUE);
    $source_options = [];
    foreach ($sources as $id => $source) {
      $source_options[$id] = $source['title'];
    }

    // Figure out if we have any data layers yet, and set the layer count.
    if (empty($form_state->get('layer_count'))) {
      // During creation, we wont have any data yet, so only one layer.
      if (!isset($conf['map_settings']['info']['data'])) {
        $form_state->set('layer_count', 1);
      }
      else {
        // During edit, we'll have one or more layers, so count.
        $form_state->set('layer_count', count($conf['map_settings']['info']['data']));
      }
    }

    // Build the number of layer selections indicated by layer_count.
    for ($layer_index = 1; $layer_index <= $form_state->get('layer_count'); $layer_index++) {
      $default_layer_source = key($source_options);
      if (isset($conf['map_settings']['info']['data']['leaflet_' . $layer_index])) {
        $default_layer_source
          = $conf['map_settings']['info']['data']['leaflet_' . $layer_index];
      }
      $form['map_settings']['info']['data']['leaflet_' . $layer_index] = [
        '#type' => 'select',
        '#title' => $this->t('GeoJSON layer source'),
        '#options' => $source_options,
        '#default_value' => $default_layer_source,
        '#required' => ($layer_index == 1),
      ];
    }

    // Provide an "Add another layer" button.
    $form['map_settings']['info']['add_layer'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add another layer'),
      '#submit' => ['leaflet_geojson_map_pane_add_layer'],
    ];

    // Provide a "Remove" button for latest selected layer.
    if ($form_state->get('layer_count') > 1) {
      $form['map_settings']['info']['remove_layer'] = [
        '#type' => 'submit',
        '#value' => $this->t('Remove last layer'),
        '#submit' => ['leaflet_geojson_map_pane_remove_last_layer'],
      ];
    }

    // Leaflet wants a height in the call to the render function.
    $default_height = isset($conf['map_settings']['height']) ? $conf['map_settings']['height'] : 400;
    $form['map_settings']['height'] = [
      '#title' => $this->t('Map height'),
      '#type' => 'textfield',
      '#size' => 4,
      '#default_value' => $default_height,
      '#required' => FALSE,
      '#description' => $this->t("Set the map height"),
    ];

    // Added to have 100% in height.
    $form['map_settings']['height_unit'] = [
      '#title' => $this->t('Map height unit'),
      '#type' => 'select',
      '#options' => [
        'px' => $this->t('px'),
        '%' => $this->t('%'),
      ],
      '#default_value' => isset($conf['map_settings']['height_unit']) ? $conf['map_settings']['height_unit'] : 'px',
      '#description' => $this->t('Wether height is absolute (pixels) or relative (percent).'),
    ];

    // Optionally override natural center and zoom.
    $default_override_zoom_center = isset($conf['map_settings']['override_zoom_center']) && $conf['map_settings']['override_zoom_center'];
    $form['map_settings']['override_zoom_center'] = [
      '#type' => 'checkbox',
      '#title' => 'Override natural center and zoom placement',
      '#default_value' => $default_override_zoom_center,
      '#description' => $this->t("Map will auto zoom and center based on the data. Check this box to customize the zooom and center"),
    ];
    $form['map_settings']['custom_zoom_center'] = [
      '#type' => 'fieldset',
      '#title' => 'Zoom and Center',
      '#tree' => TRUE,
      '#states' => [
        'visible' => [
          ':input[name="override_zoom_center"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $default_zoom = isset($conf['map_settings']['custom_zoom_center']['zoom']) ? $conf['map_settings']['custom_zoom_center']['zoom'] : 1;
    $form['map_settings']['custom_zoom_center']['zoom'] = [
      '#title' => $this->t('Zoom'),
      '#type' => 'textfield',
      '#size' => 20,
      '#default_value' => $default_zoom,
      '#required' => FALSE,
    ];
    $form['map_settings']['custom_zoom_center']['center'] = [
      '#type' => 'fieldset',
      '#title' => 'Map center',
      '#tree' => TRUE,
      '#description' => $this->t("Provide a default map center especially when using the bounding box strategy."),
    ];
    $default_center = isset($conf['map_settings']['custom_zoom_center']['center']) ? $conf['map_settings']['custom_zoom_center']['center'] : ['lon' => 0, 'lat' => 0];
    $form['map_settings']['custom_zoom_center']['center']['lon'] = [
      '#title' => $this->t('Center longitude'),
      '#type' => 'textfield',
      '#size' => 20,
      '#default_value' => $default_center['lon'],
      '#required' => FALSE,
    ];
    $form['map_settings']['custom_zoom_center']['center']['lat'] = [
      '#title' => $this->t('Center latitude'),
      '#type' => 'textfield',
      '#size' => 20,
      '#default_value' => $default_center['lat'],
      '#required' => FALSE,
    ];

    return $form;
  }

  /**
   * Submit handler just puts non-empty values into configuration.
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    foreach ($form['settings']['map_settings'] as $key => $content) {
      // The override_zoom_center property could be empty, we want to track it.
      if (!empty($form_state->getValue(['map_settings', $key])) || $key == 'override_zoom_center') {
        $this->configuration['map_settings'][$key] = $form_state->getValue(['map_settings', $key]);
      }
    }
  }

  /**
   * Helper function to generate the javascript settings.
   */
  private function leafletGeojsonMapPaneRenderJavascriptLibrary() {
    // Attaching Ajax in case we have node description loaded by ajax.
    $libraries = ['leaflet_geojson/leaflet_geojson_bbox', 'core/drupal.ajax'];

    // Allow other modules to alter the map data.
    $this->moduleHandler->alter('leaflet_geojson_map_pane_render_javascript_library', $libraries);

    return $libraries;
  }

  /**
   * Helper function to generate the javascript settings.
   */
  private function leafletGeojsonMapPaneRenderJavascriptSettings() {

    $conf = $this->configuration;

    // Gather information about the leaflet base and data layers.
    $data_layers_info = [];
    foreach ($conf['map_settings']['info']['data'] as $layer_idx => $layer_machine_name) {
      $data_layers_info[$layer_idx]
        = leaflet_geojson_source_get_info($layer_machine_name);
    }

    return $data_layers_info;
  }

  /**
   * Helper function to generate the map markup based on the pane config.
   */
  private function leafletGeojsonMapPaneRenderLayeredMap() {

    $conf = $this->configuration;

    // Gather information about the leaflet base and data layers.
    $map_base_info = leaflet_map_get_info($conf['map_settings']['base']);
    $data_layers_info = [];
    foreach ($conf['map_settings']['info']['data'] as $layer_idx => $layer_machine_name) {
      $data_layers_info[$layer_idx]
        = leaflet_geojson_source_get_info($layer_machine_name);
    }

    // We are not currently supporting mixed bounding, i.e. if any one layer
    // is not bounded, then all layers will be fetched non-bounded. This will
    // have serious performance impact at large scale.
    $all_bounded = TRUE;
    foreach ($data_layers_info as $layer_idx => $layer_info) {
      if (!isset($layer_info['bbox'])) {
        $all_bounded = FALSE;
        break;
      }
    }

    $feature_layers = [];
    if ($all_bounded) {

      // Ensure the map center is non-empty for bbox.
      if (empty($map_base_info['center'])) {
        $map_base_info['center'] = ['lon' => 0, 'lat' => 0];
      }
    }
    else {
      /* @TODO: non-bounded data fetch */
    }

    // Apply any overrides of natural center and zoom.
    if (!empty($conf['map_settings']['override_zoom_center'])) {
      if (!empty($conf['map_settings']['custom_zoom_center']['zoom'])) {
        $map_base_info['settings']['zoom']
          = $conf['map_settings']['custom_zoom_center']['zoom'];
        $map_base_info['settings']['map_position_force'] = TRUE;
      }
      if (!empty($conf['map_settings']['custom_zoom_center']['center']['lat']) && !empty($conf['map_settings']['custom_zoom_center']['center']['lon'])) {
        $map_base_info['settings']['center'] = [
          'lat' => $conf['map_settings']['custom_zoom_center']['center']['lat'],
          'lon' => $conf['map_settings']['custom_zoom_center']['center']['lon'],
        ];
      }
    }

    // Allow other modules to alter the map data.
    $this->moduleHandler->alter('leaflet_geojson_map_pane', $map_base_info, $feature_layers);

    $map_build = $this->leafletService->leafletRenderMap(
      $map_base_info, $feature_layers, $conf['map_settings']['height'] . $conf['map_settings']['height_unit']
    );

    return $map_build;
  }

}
