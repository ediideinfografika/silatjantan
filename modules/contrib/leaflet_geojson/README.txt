INTRODUCTION
------------

Leaflet GeoJSON is a set of modules for creating Leaflet maps backed 
by GeoJSON data and adding a Leaflet bounding box strategy.

REQUIREMENTS
------------

* leaflet
* views_geojson

RECOMMENDED MODULES
-------------------

* panels
* page_manager

INSTALLATION
------------

* Install leaflet_geojson as any regular module
  
CONFIGURATION
------------

* Create a GeoJSON feed using the Views GeoJSON module.
* Add the bounding box argument to the GeoJSON view.
* Use a leaflet map preset defined by the Leaflet module, 
  in code or one of the integration modules.
* Put them all together using  page_manager
