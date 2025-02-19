jQuery(document).bind('Leaflet.map', function(event, map, lMap) {
	console.log(url);
// If you want to set this settings only on specific pages, I checked if url contains some string
  if (url.indexOf('perbaikan_jalan') >= 0) {
	  console.log('ok');
  var minimapLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
  var miniMap = new L.Control.MiniMap(minimapLayer, { toggleDisplay: true, position: 'topleft', minimized: true }).addTo(lMap);
  }
});