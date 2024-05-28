<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">

    <!-- Bootstrap starts here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JavaScript files -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Bootstrap ends here -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- html2canvas / canvas2image -->
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/html2canvas/html2canvas.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/canvas2image/canvas2image.js">
    </script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- leaflet Js -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Leaflet AJAX Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>

    <!-- Leaflet.draw CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
    <!-- Leaflet.draw JavaScript -->
    <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>



    <style>
    body {
        width: 100%;
        height: 100vh;
        /* zoom: 80%; */
        overflow: hidden;
        font-family: "Lato", sans-serif;
    }

    #map {
        margin-top: 1%;
        height: 78vh;
        width: 50%;
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <div style="height: 100%;">
        <div class="fixedHead">
            <!-- Landing_page title logo> -->
            <?php $this->load->view('Menu/Landing_page_top'); ?>
        </div>


        <div class="row">
            <!-- Landing_page sidebar> -->
            <?php $this->load->view('Menu/Landing_page_side'); ?>


            <!-- editing content starts here -->
            <div class="col-9" style="width: 85%; display: flex;">
                <div id="map"></div>
                <!--  -->
                <div style="display: flex;">
                    <!-- Days and met division btn-->
                    <div style="width: 50%; margin-left: 1%; margin-top: 1%;">
                        <div class="dropdown">
                            <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DAYS
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Day 1</a></li>
                                <li><a class="dropdown-item" href="#">Day 2</a></li>
                                <li><a class="dropdown-item" href="#">Day 3</a></li>
                                <li><a class="dropdown-item" href="#">Day 4</a></li>
                                <li><a class="dropdown-item" href="#">Day 5</a></li>
                                <li><a class="dropdown-item" href="#">Day 6</a></li>
                                <li><a class="dropdown-item" href="#">Day 7</a></li>
                                <li><a class="dropdown-item" href="#">Day 8</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--  -->
                    <div class="dropdown" style="margin-top: 1%;">
                        <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Met Divisions
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Met Divisions 1</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 2</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 3</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 4</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 5</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 6</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 7</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 8</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 9</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 10</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 11</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 12</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 13</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 14</a></li>
                            <li><a class="dropdown-item" href="#">Met Divisions 15</a></li>
                        </ul>
                    </div>
                </div>
                <!--  -->
                <!-- <div>
                    <button type="button" class="btn btn-primary btn-sm">Max Temp</button>
                    <button type="button" class="btn btn-secondary btn-sm">Min Temp</button>
                </div> -->
                <!--  -->
            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    var map = L.map('map').setView([22.79459, 80.06406], 4);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Add the GeoJSON data to the map
    _dist_geojson = "DATA/INDIA_STATE.json";
    var geojson = new L.GeoJSON.AJAX(_dist_geojson, {
        style: function(feature) {
            return {
                color: 'black',
                fillColor: '#399fe3',
                opacity: 1,
                fillOpacity: 0.5,
                weight: 1
            };
        }
    });

    geojson.on('data:loaded', function() {
        geojson.addTo(map);
    });
    // 


    // drawControl starts here
    var drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);

    var drawControl = new L.Control.Draw({
        draw: {
            polygon: true,
            polyline: false,
            circle: false,
            marker: false,
            circlemarker: false,
            rectangle: false
        },
        edit: {
            featureGroup: drawnItems
        }
    });
    map.addControl(drawControl);

    map.on('draw:created', function(e) {
        var type = e.layerType,
            layer = e.layer;

        if (type === 'polygon') {
            drawnItems.addLayer(layer);
        }
    });
    // 
    </script>
</body>

</html>