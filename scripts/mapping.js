function mapRoute(start) {
  dir = MQ.routing.directions().on('success', function(data) {
    var legs = data.route.legs,
    html = '<p>About <strong>' + data.route.formattedTime + '</strong> to go <strong>' +
            data.route.distance + ' miles</strong>, which should be around <strong>' +
            data.route.fuelUsed + ' gallons</strong> of fuel.<br>',
    maneuvers,
    i;

    if (legs && legs.length) {
      maneuvers = legs[0].maneuvers;

      for (i=0; i<maneuvers.length; i++) {
        html += (i+1) + '. ';
        html += maneuvers[i].narrative + '<br />';
      }

      html += '<a target="_blank" href="http://mapq.st/directions?saddr=' +
        start +
        '&daddr=40.678352,-80.947914 (Seven Ranges Scout Reservation)&maptype=map">' +
        'View on MapQuest' +
        '</a></p>';

      try {
        L.DomUtil.get('route-narrative').innerHTML = html;
      } catch (e) {
        console.log('No route-narrative element found to display directions.')
      }
    }
  });

  dir.route({
    locations: [
    start,
    { latLng: { lat: 40.678352, lng: -80.947914 } }
    ]
  });

  window.map.addLayer(MQ.routing.routeLayer({
    directions: dir,
    fitBounds: true
  }));
}

$(document).ready(function(){
  var mapLayer = MQ.mapLayer();

  window.map = L.map('map', {
    layers: mapLayer,
    center: [40.678352, -80.947914],
    zoom: 14
  });

  L.control.layers({
    'Map': mapLayer,
    'Satellite': MQ.satelliteLayer(),
    'Hybrid': MQ.hybridLayer()
  }).addTo(map);

  var conclaveMarker = L.marker([40.678352, -80.947914]).addTo(window.map);

  conclaveMarker.bindPopup("<strong>Get Directions</strong><br>" +
  "<input id='start_address' type='text'>" +
  "<button onclick='mapRoute(document.getElementById(\"start_address\").value)'>Route</button>")
  .openPopup();
});
