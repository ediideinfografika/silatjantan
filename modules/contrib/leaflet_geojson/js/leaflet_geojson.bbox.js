(function ($, Drupal, drupalSettings) {
  'use strict';

  var jsonrequest;
  Drupal.leafletBBox = {

    map: null,
    markerGroup: null,
    overlays: {},

    onMapLoad: function (map) {
      Drupal.leafletBBox.map = map;
      Drupal.leafletBBox.markerGroup = [];

      // Intialize empty layers and associated controls.
      var layer_count = 0;
      $.each(drupalSettings.leafletBBox, function (key, value) {
        if (typeof value.url !== 'undefined') {
          // Add empty layers.
          Drupal.leafletBBox.markerGroup[key] = new L.LayerGroup();
          Drupal.leafletBBox.markerGroup[key].addTo(map);

          // Connect layer controls to layer data.
          Drupal.leafletBBox.overlays[value.layer_title]
            = Drupal.leafletBBox.markerGroup[key];

          layer_count++;
        }
      });

      // If we have more than one data layer, add the control.
      // @TODO: figure out how to interact with base map selection.
      if (layer_count > 1) {
        L.control.layers(null, Drupal.leafletBBox.overlays).addTo(map);
      }

      // settings maxbound so that the map remain alwxays centered
      var southWest = new L.LatLng(90, -18000);
      var northEast = new L.LatLng(-90, 180000);
      var bounds = new L.LatLngBounds(southWest, northEast);

      map.setMaxBounds(bounds);

      // Loading a map is the same as moving/zooming.
      map.on('moveend', Drupal.leafletBBox.moveEnd);

      // Initialize the markers.
      Drupal.leafletBBox.moveEnd();
    },

    moveEnd: function (e) {
      var map = Drupal.leafletBBox.map;

      // Rebuild the bounded GeoJSON layers.
      $.each(drupalSettings.leafletBBox, function (layer_key, layer_info) {
        if (typeof layer_info.url !== 'undefined') {
          Drupal.leafletBBox.makeGeoJSONLayer(map, layer_info, layer_key);
        }
      });

    },

    makeGeoJSONLayer: function (map, info, layer_key) {
      // Display the loading throbber.
      $('.block-map-loading-wrapper').show();

      // Cancel previous requests if any.
      // TODO: would probably fail with multiple layers, to improve.
      if (jsonrequest) {
        jsonrequest.abort();
      }

      var url = typeof info.url !== 'undefined' ? info.url : drupalSettings.leafletBBox[layer_key].url;

      var bbox_arg_id = ('bbox_arg_id' in drupalSettings.leafletBBox[layer_key]) ?
        drupalSettings.leafletBBox[layer_key].bbox_arg_id : 'bbox';

      // we want to use a bigger bbox into account so that numbers are not changing for the user
      // adding 1 screensize of bbox in all directions

      var bounds = map.getBounds();

      // case initialisation: not yet any height
      if (bounds.getSouthWest().lat === bounds.getNorthEast().lat) {
        return;
      }
      // longitude calculation if we want to add more to the west & east
      var west = bounds.getSouthWest().lng - 0.4 * (bounds.getNorthEast().lng - bounds.getSouthWest().lng);
      var east = bounds.getNorthEast().lng + 0.4 * (bounds.getNorthEast().lng - bounds.getSouthWest().lng);

      // latitude calculation if we want to add more to the south & north
      var south = bounds.getSouthWest().lat - 0.8 * (bounds.getNorthEast().lat - bounds.getSouthWest().lat);
      var north = bounds.getNorthEast().lat + 0.8 * (bounds.getNorthEast().lat - bounds.getSouthWest().lat);

      // rounding for cache purpose // flooring / ceiling so that zooms are not impacted
      var bbox = Math.floor(west) + ',' + Math.floor(south) + ',' + Math.ceil(east) + ',' + Math.ceil(north);


      url += '?' + bbox_arg_id + '=' + bbox;


      url += '&zoom=' + map.getZoom();

      // to remove, this is used to disable bounding box strategy for testing purpose
      // url += "&cluster_distance=0";

      // Add back any additional URL params from original.
      var query = window.location.search.substring(1);
      if (query !== '') {
        // Split on "&" into array url_params_orig.
        var url_params_orig = query.split('&');
        // Check for "q=" in the first item.
        if (url_params_orig[0].indexOf('q=') === 0) {
          // Remove the first item if found.
          url_params_orig.shift();
        }
        url_params_orig.unshift(url);
        // Re-join the array url_params_orig and append.
        url = url_params_orig.join('&');
      }

      // Make a new GeoJSON layer.
      jsonrequest = $.getJSON(url, function (data) {
        var layerGroup = Drupal.leafletBBox.markerGroup[layer_key];

        // duplicating the data point if needed
        var myFeatures = [];
        var lng_init;
        var lng;
        var key;
        var newObject;
        for (key in data.features) {
          if ({}.hasOwnProperty.call(data.features, key)) {

            // if spanning on multiple maps, then display the marker multiple times
            lng_init = data.features[key].geometry.coordinates[0];

            if (lng_init >= west && lng_init <= east) {
              myFeatures.push(data.features[key]);
            }

            // multiply towards west
            lng = lng_init - 360;
            while (lng >= west) {
              if (lng <= east) {
                newObject = jQuery.extend(true, {}, data.features[key]);
                newObject.geometry.coordinates[0] = lng;
                myFeatures.push(newObject);
              }
              lng -= 360;
            }

            // multiply towards east
            lng = lng_init + 360;
            while (lng <= east) {
              if (lng >= west) {
                newObject = jQuery.extend(true, {}, data.features[key]);
                newObject.geometry.coordinates[0] = lng;
                myFeatures.push(newObject);
              }
              lng += 360;
            }
          }
        }

        layerGroup.eachLayer(function (layer) {

          var markers = layer._layers;
          var key_markers;

          for (key_markers in markers) {
            if ({}.hasOwnProperty.call(markers, key_markers)) {
              var not_found = true;
              var key_data;

              for (key_data in myFeatures) {
                if ({}.hasOwnProperty.call(markers, key_markers)) {
                  // define if a marker is already there (to avoid blinking effect)
                  if (markers[key_markers].feature.geometry.coordinates[0] === myFeatures[key_data].geometry.coordinates[0]
                  && markers[key_markers].feature.geometry.coordinates[1] === myFeatures[key_data].geometry.coordinates[1]
                  && JSON.stringify(markers[key_markers].feature.properties) === JSON.stringify(myFeatures[key_data].properties)) {
                    not_found = false;
                    myFeatures.splice(key_data, 1);
                    break;
                  }
                }
              }
              if (not_found) { // these features should not be displayed anymore
                layerGroup.removeLayer(layer);
              }
            }
          }
        });

        // adding remaining features
        for (key in myFeatures) {
          if ({}.hasOwnProperty.call(myFeatures, key)) {
            var geojsonLayer = new L.GeoJSON(myFeatures[key], Drupal.leafletBBox.geoJSONOptions);
            layerGroup.addLayer(geojsonLayer);
          }
        }

        // TODO: would probably fail with multiple layers, to improve.
        $('.block-map-loading-wrapper').hide();
      });

    }
  };

  Drupal.leafletBBox.geoJSONOptions = {

    pointToLayer: function (featureData, latlng) {
      let title = '';
      if (featureData.properties.label) {
        title = featureData.properties.label;
      }

      return new L.Marker(latlng, {title: title});
    },

    onEachFeature: function (feature, layer) {
      if (feature.properties && feature.properties.popup) {
        layer.bindPopup(feature.properties.popup);
      }
    }

  };

  // Insert map.
  $(document).bind('leaflet.map', function (e, map, lMap) {
    $(window, map).once("leaflet_geojson_bbox_init_map").each( function(){
      Drupal.leafletBBox.onMapLoad(lMap);
    });
  });

})(jQuery, Drupal, drupalSettings);
