<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leaflet TimeDimension with METAR Data</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-timedimension/dist/leaflet.timedimension.control.min.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-timedimension/dist/leaflet.timedimension.min.js"></script>
</head>
<body>

<div id="map" style="height: 500px;"></div>

<script>
  var map = L.map('map').setView([10.92, 79.72], 6);

  // Add a base map layer (you can change this to any other tile provider)
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
  }).addTo(map);

  // Create a TimeDimension layer
  var timeDimensionLayer = L.timeDimension.layer.wms({
    updateTimeDimension: true,
    requestTimeFromCapabilities: true,
    updateTimeDimensionMode: 'replace',
    updateTimeDimensionMode: 'replace',
    wmsVersion: '1.3.0',
    getCapabilitiesUrl: 'METAR_CAPABILITIES_URL', // Replace with the URL of your METAR WMS server capabilities
    getCapabilitiesParams: { 'SERVICE': 'WMS', 'VERSION': '1.3.0', 'REQUEST': 'GetCapabilities' },
    layer: 'METAR_LAYER_NAME', // Replace with the name of your METAR layer
    name: 'METAR Data',
  });

  // Add the TimeDimension layer to the map
  var player = new L.TimeDimension.Player({
    loop: false,
    startOver: true,
  }, timeDimensionLayer);

  // Add TimeDimension controls to the map
  var timeDimensionControl = new L.Control.TimeDimension({
    player: player,
    position: 'bottomleft',
    autoPlay: true,
    timeSteps: 23, // Number of METAR intervals (METAR 001 UTC to METAR 023 UTC)
  });
  map.addControl(timeDimensionControl);

  // Add a timeDimensionControl to the map
  map.timeDimension = player;
  map.addLayer(timeDimensionLayer);
</script>

</body>
</html>