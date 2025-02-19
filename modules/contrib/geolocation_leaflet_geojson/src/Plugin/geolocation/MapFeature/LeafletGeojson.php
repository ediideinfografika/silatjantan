<?php

namespace Drupal\geolocation_leaflet_geojson\Plugin\geolocation\MapFeature;

use Drupal\geolocation\MapFeatureBase;
use Drupal\Core\Render\BubbleableMetadata;

/**
 * Provides geojson layer.
 *
 * @MapFeature(
 *   id = "leaflet_geojson",
 *   name = @Translation("Add geojson"),
 *   description = @Translation("Add an geojson layer"),
 *   type = "leaflet",
 * )
 */
class LeafletGeojson extends MapFeatureBase {

  /**
   * {@inheritdoc}
   */
  public static function getDefaultSettings() {
    return [
      'url' => '',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getSettingsForm(array $settings, array $parents) {
    $settings = $this->getSettings($settings);
    $baseurl = \Drupal::request()->getSchemeAndHttpHost();

    $form['url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Geojson URL'),
      '#default_value' => $settings['url'],
      '#attributes' => array('placeholder' => t('/sites/... or @baseurl/...',array('@baseurl' => $baseurl)),),
      '#description' => t('URL of the Geojson file that you want to display.'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function alterMap(array $render_array, array $feature_settings, array $context = []) {
    $render_array = parent::alterMap($render_array, $feature_settings, $context);

    $feature_settings = $this->getSettings($feature_settings);

    $render_array['#attached'] = BubbleableMetadata::mergeAttachments(
      empty($render_array['#attached']) ? [] : $render_array['#attached'],
      [
        'library' => [
          'geolocation_leaflet_geojson/mapfeature.' . $this->getPluginId(),
        ],
        'drupalSettings' => [
          'geolocation' => [
            'maps' => [
              $render_array['#id'] => [
                $this->getPluginId() => [
                  'enable' => TRUE,
                  'url' => $feature_settings['url'],
                ],
              ],
            ],
          ],
        ],
      ]
    );

    return $render_array;
  }

}
