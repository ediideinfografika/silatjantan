/**
 * @file
 * Geojson.
 */

/**
 * @typedef {Object} Geojson Settings
 *
 * @extends {GeolocationMapFeatureSettings}
 *
 * @property {String} url
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Add an geojson layer.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Add an geojson layer.
   */
  Drupal.behaviors.leafletGeojson = {
    attach: function (context, drupalSettings) {
      Drupal.geolocation.executeFeatureOnAllMaps(
        'leaflet_geojson',

        /**
         * @param {GeolocationLeafletMap} map - Current map.
         * @param {WMSSettings} featureSettings - Settings for current feature.
         */
        function (map, featureSettings) {
 
          $.getJSON(featureSettings.url, function(data) {
            var geojsondata = L.geoJson(data, {
              style: function (feature) {
                //console.log(feature)
                return feature.properties;
              },
            });
            geojsondata.addTo(map.leafletMap);
          });

          return true;
        },
        drupalSettings
      );
    },
    detach: function (context, drupalSettings) {}
  };

})(jQuery, Drupal);
