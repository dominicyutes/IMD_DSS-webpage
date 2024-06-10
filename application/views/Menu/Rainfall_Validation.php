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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <!-- Bootstrap ends here -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .main {
            margin-right: 10px;
            margin-left: 225px;
            margin-bottom: -300px;
            padding: 0px 10px;
            margin-top: -916px;
        }

        .btn {
            /* transform: translate(-50%, -50%); */
            /* -ms-transform: translate(-50%, -50%); */
            background-color: #f1f1f1;
            color: black;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .btn:hover {
            background-color: black;
            color: white;
        }


        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }
    </style>
    <style type="text/css">
        .ui-dialog {
            z-index: 9999999 !important;
        }
    </style>
</head>

<body>


    <div style="height: 100%;">

        <div class="fixedHead">
            <?php $this->load->view('Menu/Landing_page_top'); ?>
        </div>
        <?php $this->load->view('Menu/Landing_page_side.php'); ?>
        <?php $this->load->view('Menu/Landing_page_bottom'); ?>
        <div class="main">
            <!-- <h1 style="margin-top: -8px; margin-left: 450px; margin-bottom: 20px;">Rainfall Validation</h1> -->

            <div class="parent"
                style="width: 100%; max-width: 1300px; background-color: #ffffff; border: 1px solid #ccc; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: width 0.3s ease; margin: 0 auto;height: 753px;margin-top: 70px;">
                <div class="content-wrapper" style="display: inline-block;">
                    <section class="content">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                Click on the station to view the comparison plot. You can even use the date and
                                parameter
                                filters.
                            </div>
                            <!-- <button id="fullscreen-button">Fullscreen</button> -->

                            <div style="display: flex; justify-content: end;">
                                <button id="toggleButton" style="background: none; border: none; cursor: pointer;">
                                <img src="img/anime/swipe-left.gif" id="arrowIcon" style="width: 30px; height: 30px; margin-top: -50px;">
                                </button>
                            </div>
                            <div id="reportrange"
                                style="position: absolute;    margin-left: 182px; transform: translateX(-50%); padding: 5px 10px; background: #fff; cursor: pointer; border: 1px solid #ccc; z-index: 9699;">
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span></span> <i class="fa fa-caret-down"></i>
                            </div>
                            <div class="box-body">
                                <div class="active tab-pane" id="showmap">
                                    <div class="post">
                                        <div id="dialog_temp_graph_extension_chart" style="display: none;">
                                            <div id="temp_graph_extension_chart" class="dialog"></div>
                                        </div>
                                        <div class="box-body">
                                            <div style="border:#333 1px ridge; overflow: hidden; width: 1140px;">
                                                <div id="map_canvas"
                                                    style="width: 1200px; height: 656px; float: left; z-index: 0;"
                                                    align="center"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="toggleDiv"
                    style="display: none; flex-direction: column; padding: 20px; border: 2px solid #000; border-radius: 10px; margin-top: -663px; width: 265px; margin-left: 892px; height: 657px;">
                    <h4 style="text-align: center; font-family: 'Times New Roman';">FILTERS</h4>


                    <div style="display: flex; flex-direction: column; justify-content: space-between;">
                        <div
                            style="width: 100%; padding: 20px; border: 1px solid #ccc; border-radius: 10px; margin-bottom: 5px; height: 217px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div style="display: flex; flex-direction: column;">
                                <label style="margin-bottom: 5px;">Station Name:</label>
                                <div style="display: flex; flex-direction: row; align-items: center;">
                                    <input type="text" id="station-name" list="station-name-list"
                                        placeholder="Station Name"
                                        style="width: 200px; border-radius: 100px; margin-bottom: 10px;">
                                    <datalist id="station-name-list">
                                        <?php foreach ($stationNames as $station): ?>
                                            <option value="<?php echo $station['name']; ?>"></option>
                                        <?php endforeach; ?>
                                    </datalist>
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <label style="margin-bottom: 5px;">Station ID:</label>
                                <div style="display: flex; flex-direction: row; align-items: center;">
                                    <input type="text" id="station-id" list="station-id-list" placeholder="12345678"
                                        style="width: 200px; border-radius: 100px; margin-bottom: 10px;">
                                    <datalist id="station-id-list">
                                        <?php foreach ($stationIds as $station): ?>
                                            <option value="<?php echo $station['id']; ?>"></option>
                                        <?php endforeach; ?>
                                    </datalist>
                                </div>
                            </div>
                            <button type="button" id="submit" class="btn" style="font-size: 10px;">Submit</button>

                        </div>



                        <div
                            style="width: 100%; padding: 20px; border: 1px solid #ccc; border-radius: 10px; height: 370px;">
                            <div
                                style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                                    <label style="margin-bottom: 5px;">Regions:</label>
                                    <div style="display: flex; flex-direction: row; align-items: center;">
                                        <select id="regionSelect" style="width: 180px; border-radius: 100px;">
                                            <option value="">Select a Region</option>
                                            <?php foreach ($regionNames as $region): ?>
                                                <option value="<?php echo $region['region_name']; ?>">
                                                    <?php echo $region['region_name']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                                    <label style="margin-bottom: 5px;">Sub-Division:</label>
                                    <div style="display: flex; flex-direction: row; align-items: center;">
                                        <select id="subdivisionSelect" style="width: 200px; border-radius: 100px;">
                                            <option value="">Select a Sub-Division</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column;">
                                    <label style="margin-bottom: 5px;">MC/RMC:</label>
                                    <div style="display: flex; flex-direction: row; align-items: center;">
                                        <input type="text" style="width: 200px; border-radius: 100px;">
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                                    <label style="margin-bottom: 5px;">State:</label>
                                    <div style="display: flex; flex-direction: row; align-items: center;">
                                        <select id="stateSelect" style="width: 200px; border-radius: 100px;">
                                            <option value="">Select a State</option>
                                        </select>
                                    </div>
                                </div>

                                <div style="display: flex; flex-direction: column;margin-bottom: 10px;">
                                    <label style="margin-bottom: 5px;">District:</label>
                                    <div style="display: flex; flex-direction: row; align-items: center;">
                                        <input type="text" style="width: 200px; border-radius: 100px;">
                                    </div>
                                </div>

                                <button id="submitRegion" type="button" class="btn"
                                    style="font-size: 10px;">Submit</button>
                            </div>

                        </div>

                    </div>






                </div>

            </div>


        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url(); ?>stylesheet/jQuery/jQuery-2.2.0.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url(); ?>stylesheet/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">


        <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/new_js/highcharts.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/new_js/exporting.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/new_js/moment.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/js/daterangepicker.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/air-datepicker/css/datepicker.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheet/dist/css/daterangepicker.css">


        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/ol4/ol-layerswitcher.css" type="text/css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/ol4/ol.css" type="text/css">
        <script src="<?php echo base_url(); ?>stylesheet/ol4/ol.js"></script>

        <!-- OpenLayers LayerSwitcher CSS -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/ol-layerswitcher@3.0.0/src/ol-layerswitcher.css" /> -->
        <script src="https://unpkg.com/ol-layerswitcher@3.0.0"></script>


        <script>

            $(document).ready(function () {
                $('#submit').click(function () {
                    var stationName = $('#station-name').val();
                    var stationId = $('#station-id').val();

                    if (stationName) {
                        // Fetch coordinates based on station name
                        $.ajax({
                            url: "<?php echo site_url('Rainfall_Validation/getStationCoordinates_name'); ?>",
                            type: 'POST',
                            data: { station_name: stationName },
                            dataType: 'json',
                            success: function (response) {
                                console.log(response);
                                var lat = parseFloat(response.lat);
                                var lng = parseFloat(response.lng);
                                map.getView().setCenter(ol.proj.fromLonLat([lng, lat]));
                                map.getView().setZoom(15);
                                // Update station ID based on station name
                                fetch('<?php echo base_url('Rainfall_Validation/getStationId'); ?>/' + encodeURIComponent(stationName))
                                    .then(response => response.text())
                                    .then(stationId => {
                                        $('#station-id').val(stationId);
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                    });
                            },
                            error: function (xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    } else if (stationId) {
                        // Fetch coordinates based on station ID
                        $.ajax({
                            url: "<?php echo site_url('Rainfall_Validation/getStationCoordinates_id'); ?>",
                            type: 'POST',
                            data: { station_id: stationId },
                            dataType: 'json',
                            success: function (response) {
                                var lat = parseFloat(response.lat);
                                var lng = parseFloat(response.lng);
                                map.getView().setCenter(ol.proj.fromLonLat([lng, lat]));
                                map.getView().setZoom(15);
                            },
                            error: function (xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    } else {
                        console.error('Please enter either a station name or station ID.');
                    }
                });
            });



            document.getElementById('regionSelect').addEventListener('change', function () {
                var regionName = this.value;
                if (regionName) {
                    fetchSubdivisions(regionName);
                } else {
                    document.getElementById('subdivisionSelect').innerHTML = '<option value="">Select a Sub-Division</option>';
                    document.getElementById('stateSelect').innerHTML = '<option value="">Select a State</option>';
                }
            });

            document.getElementById('subdivisionSelect').addEventListener('change', function () {
                var subdivisionName = this.value;
                if (subdivisionName) {
                    fetchStates(subdivisionName);
                } else {
                    document.getElementById('stateSelect').innerHTML = '<option value="">Select a State</option>';
                }
            });

            function fetchSubdivisions(regionName) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '<?php echo base_url('Rainfall_Validation/get_subdivisions'); ?>', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        var subdivisions = JSON.parse(xhr.responseText);
                        var subdivisionSelect = document.getElementById('subdivisionSelect');
                        subdivisionSelect.innerHTML = '<option value="">Select a Sub-Division</option>';
                        subdivisions.forEach(function (subdivision) {
                            var option = document.createElement('option');
                            option.value = subdivision.subdiv_name;
                            option.text = subdivision.subdiv_name;
                            subdivisionSelect.appendChild(option);
                        });
                    }
                };
                xhr.send('region_name=' + encodeURIComponent(regionName));
            }

            function fetchStates(subdivisionName) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '<?php echo base_url('Rainfall_Validation/get_states'); ?>', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        var states = JSON.parse(xhr.responseText);
                        var stateSelect = document.getElementById('stateSelect');
                        stateSelect.innerHTML = '<option value="">Select a State</option>';
                        states.forEach(function (state) {
                            var option = document.createElement('option');
                            option.value = state.state_name;
                            option.text = state.state_name;
                            stateSelect.appendChild(option);
                        });
                    }
                };
                xhr.send('subdiv_name=' + encodeURIComponent(subdivisionName));
            }

        </script>


        <script type="text/javascript">
            function showPieChart(data, name, id) {
                // console.log(data);
                $('#temp_graph_extension_chart').html('');
                $('#temp_graph_extension_chart').highcharts({
                    chart: {
                        type: 'spline'
                    },
                    title: {
                        text: $("#param option:selected").text() + ' Comparison for <b>' + name + '</b> station.' + '<br>' +
                            startDateText + ' to ' + endDateText
                    },
                    subtitle: {
                        text: (document.ontouchstart === undefined ? 'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in')
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '<b>{point.y} °C</b>'
                    },
                    xAxis: {
                        type: 'datetime',
                        categories: data.date,
                        crosshair: true,
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '10px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        title: {
                            text: 'Rainfall in mm'
                        }
                    },
                    legend: {
                        enabled: true
                    },
                    tooltip: {
                        shared: true
                    },
                    plotOptions: {
                        spline: {
                            connectNulls: false,
                            marker: {
                                enabled: false
                            }
                        }
                    },
                    series: [
                        {
                            name: 'Model-1',
                            data: data.imd,
                            color: '#009b0c',
                            tooltip: {
                                valueSuffix: ' (mm)'
                            },
                        },
                        {
                            name: 'Model-2',
                            data: data.ecmwf,
                            tooltip: { valueSuffix: ' (mm)' }
                        },


                        {
                            name: 'Observed',
                            data: data.observed,
                            color: '#ca00d8',
                            tooltip: {
                                valueSuffix: ' (mm)'
                            },
                        },

                        {
                            name: 'Value Added',
                            data: data.value_added,
                            color: '#333300',
                            tooltip: {
                                valueSuffix: ' (mm)'
                            },
                        },
                    ],
                    // credits: {
                    //     enabled: true,
                    //     text: 'Top records over past decade', 
                    //     position: {
                    //         align: 'left',
                    //         x: 450, 
                    //         y:  0  
                    //     },
                    //     style: {
                    //         margintop: "100px",
                    //         fontSize: '15px', 
                    //         color: '#666666'
                    //     }
                    // }

                });
                $("#dialog_temp_graph_extension_chart").dialog({
                    open: function (event, ui) {
                        $(".ui-widget-overlay").bind("click", function (event, ui) {
                            $("#dialog_temp_graph_extension_chart").dialog("close");
                        });
                    },
                    closeOnEscape: true,
                    draggable: true,
                    resizable: true,
                    title: 'Observation  station ID:' + id,
                    width: 1000,
                    modal: true,
                });
            }

            var stations = <?php echo json_encode($stations, JSON_NUMERIC_CHECK); ?>;

            var osm = new ol.layer.Tile({
                source: new ol.source.OSM(),
                title: 'OSM',
                type: 'base',
            });

            var water_color = new ol.layer.Tile({
                title: 'Water color',
                type: 'base',
                visible: false,
                source: new ol.source.Stamen({
                    layer: 'watercolor'
                })
            });

            var esri_imagery = new ol.layer.Tile({
                title: "Satellite Image",
                type: "base",
                visible: false,
                source: new ol.source.TileArcGISRest({
                    url: "https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoia2VlcmF0aSIsImEiOiJjanp4djVstNGMwazRmM25wcHh6OTV4Y2JuIn0.ppxbZexPCLQt-f1VFlUXnw",
                    attributions: "Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community"
                })
            })

            var indiastyle = new ol.style.Style({
                fill: new ol.style.Fill({
                    color: 'rgba(255, 255, 255, 0)'
                }),
                stroke: new ol.style.Stroke({
                    color: '#319FD3',
                    width: 4
                })
            });

            var osm = new ol.layer.Tile({
                source: new ol.source.OSM()
            });

            var india_boundary = new ol.layer.Vector({
                source: new ol.source.Vector({
                    url: 'DATA/INDIA_COUNTRY.json',
                    format: new ol.format.GeoJSON()
                }),
                visible: true // Set default visibility
            });

            india_boundary.on('change:visible', function () {
                if (india_boundary.getVisible()) {
                    map.getView().setCenter(ol.proj.transform([78.9629, 20.5937], 'EPSG:4326', 'EPSG:3857'));
                    map.getView().setZoom(4.5);
                }
            });

            var map = new ol.Map({
                target: 'map_canvas',
                layers: [osm, india_boundary],
                view: new ol.View({
                    center: ol.proj.transform([78.9629, 20.5937], 'EPSG:4326', 'EPSG:3857'),
                    zoom: 4.5
                })
            });
            var currentVectorLayer = null;

            function loadGeoJSON(regionName, subdivisionName, stateName) {
                var url;
                if (stateName) {
                    url = 'DATA/GEO JSON/geojson/state/' + stateName.replace(/\s+/g, '_').replace(/\(\s*UT\s*\)/g, 'UT').replace(/[\(\)]/g, '') + '.json';
                } else if (subdivisionName) {
                    url = 'DATA/GEO JSON/geojson/subdivision/' + subdivisionName.replace(/\s+/g, '_') + '.json';
                } else if (regionName) {
                    url = 'DATA/GEO JSON/geojson/regions/' + regionName.replace(/\s+/g, '_') + '.json';
                } else {
                    console.error('Neither region, subdivision, nor state name provided.');
                    return;
                }

                var vectorLayer = new ol.layer.Vector({
                    source: new ol.source.Vector({
                        url: url,
                        format: new ol.format.GeoJSON()
                    })
                });

                vectorLayer.getSource().on('change', function () {
                    if (vectorLayer.getSource().getState() === 'ready') {
                        map.getView().fit(vectorLayer.getSource().getExtent(), { padding: [50, 50, 50, 50] });
                    }
                });

                if (currentVectorLayer) {
                    map.removeLayer(currentVectorLayer);
                }

                currentVectorLayer = vectorLayer;
                map.addLayer(vectorLayer);
            }

            document.getElementById('submitRegion').addEventListener('click', function () {
                var regionSelect = document.getElementById('regionSelect');
                var selectedRegion = regionSelect.options[regionSelect.selectedIndex].value;
                var subdivisionSelect = document.getElementById('subdivisionSelect');
                var selectedSubdivision = subdivisionSelect.options[subdivisionSelect.selectedIndex].value;
                var stateSelect = document.getElementById('stateSelect');
                var selectedState = stateSelect.options[stateSelect.selectedIndex].value;

                if (selectedState) {
                    loadGeoJSON(selectedRegion, selectedSubdivision, selectedState);
                } else if (selectedSubdivision) {
                    loadGeoJSON(selectedRegion, selectedSubdivision, null);
                } else if (selectedRegion) {
                    loadGeoJSON(selectedRegion, null, null);
                } else {
                    console.error('Neither region, subdivision, nor state selected.');
                }
            });

            var feats = [];
            stations.forEach(function (s) {
                feats.push(new ol.Feature({
                    geometry: new ol.geom.Point(ol.proj.transform([parseFloat(s.lng), parseFloat(s.lat)], 'EPSG:4326', 'EPSG:3857')),
                    station: s
                }));
            });


            // function loadGeoJSON(regionName) {
            //     var url = 'DATA/GEO JSON/geojson/regions/' + regionName.replace(/\s+/g, '_') + '.json';

            //     // Add new GeoJSON layer
            //     var vectorLayer = new ol.layer.Vector({
            //         source: new ol.source.Vector({
            //             url: url,
            //             format: new ol.format.GeoJSON()
            //         })
            //     });

            //     // Once the vector layer is loaded, fit the map view to its extent
            //     vectorLayer.getSource().on('change', function () {
            //         if (vectorLayer.getSource().getState() === 'ready') {
            //             map.getView().fit(vectorLayer.getSource().getExtent(), { padding: [50, 50, 50, 50] });
            //         }
            //     });

            //     map.addLayer(vectorLayer);
            // }


            // // Function to handle region selection and map update
            // document.getElementById('submitRegion').addEventListener('click', function () {
            //     var regionSelect = document.getElementById('regionSelect');
            //     var selectedRegion = regionSelect.options[regionSelect.selectedIndex].value;
            //     if (selectedRegion) {
            //         loadGeoJSON(selectedRegion);
            //     }
            // });

            // Create the map
            // var map = new ol.Map({
            //     layers: [],
            //     target: 'map_canvas',
            //     view: new ol.View({
            //         center: ol.proj.transform([78.9629, 20.5937], 'EPSG:4326', 'EPSG:3857'),
            //         zoom: 4.5
            //     })
            // });

            // var indiaZoom = 5;
            // var odishaZoom = 7;
            // var feats = [];
            // stations.forEach(function (s) {
            //     feats.push(new ol.Feature({
            //         geometry: new ol.geom.Point(ol.proj.transform([parseFloat(s.lng), parseFloat(s.lat)], 'EPSG:4326', 'EPSG:3857')),
            //         station: s
            //     }));
            // });
            //filter code start
            // function loadShapefile(url) {
            //     var vectorSource = new ol.source.Vector({
            //         url: url,
            //         format: new ol.format.GeoJSON()
            //     });

            //     var vectorLayer = new ol.layer.Vector({
            //         source: vectorSource
            //     });

            //     map.addLayer(vectorLayer);
            // }

            // // Event listener for the submit button
            // document.getElementById('submit-button').addEventListener('click', function () {
            //     var country = document.getElementById('country-input').value;
            //     if (country === 'India') {
            //         loadShapefile('DATA/INDIA_COUNTRY.json');
            //         map.getView().setCenter(ol.proj.fromLonLat([78.9629, 20.5937]));
            //         map.getView().setZoom(5);
            //     }
            // });
            //filter code end


            // india_boundary.on('change:visible', function () {
            //     if (india_boundary.getVisible()) {
            //         odisha_boundary.setVisible(false);
            //         lat = 20.5937;
            //         lng = 78.9629;
            //         map.getView().setCenter(ol.proj.transform([lng, lat], 'EPSG:4326', 'EPSG:3857'));
            //         map.getView().setZoom(indiaZoom);
            //     }
            // });

            var vectorLayer = new ol.layer.Vector({
                source: new ol.source.Vector({
                    features: feats
                }),
                style: new ol.style.Style({
                    image: new ol.style.Icon({
                        anchor: [0.5, 0.5],
                        anchorXUnits: "fraction",
                        anchorYUnits: "fraction",
                        src: "<?php echo base_url(); ?>img/anime/stations.png",
                        scale: 0.5
                    })
                }),
                zIndex: 99 // Ensure this layer is on top
            });

            map.addLayer(vectorLayer);

            // Handle map click event
            map.on("click", function (e) {
                map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {
                    $('#temp_graph_extension_chart').html('');
                    $("#dialog_temp_graph_extension_chart").dialog({
                        open: function (event, ui) {
                            $(".ui-widget-overlay").bind("click", function (event, ui) {
                                $("#dialog_temp_graph_extension_chart").dialog("close");
                            });
                        },
                        closeOnEscape: true,
                        draggable: true,
                        resizable: true,
                        title: 'Loading...',
                        width: 1000,
                        modal: true,
                    });

                    var date_picker = $('#reportrange').data('daterangepicker');
                    var station_id = feature.get('station').StationID;
                    var post_data = { 'id': station_id };
                    post_data['start_date'] = date_picker.startDate.format("YYYY-MM-DD");
                    post_data['end_date'] = date_picker.endDate.format("YYYY-MM-DD");

                    $.ajax({
                        type: 'POST',
                        data: post_data,
                        url: '<?php echo base_url('Rainfall_Validation/get_station_data'); ?>',
                        success: function (res) {
                            var result = JSON.parse(res);
                            if (result.xss_error) {
                                alert('Invalid Input');
                            } else {
                                showPieChart(result, feature.get('station').StationName, feature.get('station').StationID);
                            }
                        }
                    });
                });
            });

            // var labels = new ol.layer.Tile({
            //     visible: true,
            //     opacity: 1,
            //     source: new ol.source.TileWMS({
            //         url: 'https://geoserver.rimes.int:8443/geoserver/wms',
            //         singleTile: true,
            //         params: {
            //             'LAYERS': 'rimes:districts_s,rimes:block_s_bkp',
            //             tilesorigin: '85.0985,20.9517',
            //             'styles': 'district_label,block_label'
            //         },
            //         serverType: 'geoserver',
            //         transition: 0
            //     })
            // });
            // map.addLayer(labels);
            var ls = new ol.control.LayerSwitcher({ tipLabel: 'Legend' });
            map.addControl(ls);

            //date picker 


            var startDateText;
            var endDateText;

            $(function () {
                // var start = moment().subtract(29, 'days');
                // var end = moment();
                var start = moment('2024-04-01');
                var end = moment('2024-04-15');

                function cb(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    startDateText = start.format('MMMM D, YYYY');
                    endDateText = end.format('MMMM D, YYYY');

                    console.log(start.format('MMMM D, YYYY'));
                    console.log(end.format('MMMM D, YYYY'));
                }
                $('#reportrange').daterangepicker({
                    startDate: start,
                    endDate: end,
                    minDate: '02/24/2019',
                    maxDate: moment(),
                    ranges: {
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'Last 2 Months': [moment().subtract(2, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }, cb);
                cb(start, end);
            });

            document.getElementById('toggleButton').addEventListener('click', function () {
    var toggleDiv = document.getElementById('toggleDiv');
    var parentDiv = document.querySelector('.parent');
    var arrowIcon = document.getElementById('arrowIcon');
    var mapCanvas = document.getElementById('map_canvas').parentNode; // Get the parent div of the map_canvas

    if (toggleDiv.style.display === 'none') {
        toggleDiv.style.display = 'flex';
        parentDiv.style.maxWidth = '100%';
        mapCanvas.style.width = '890px'; // Adjust the width of the map container
        arrowIcon.src = 'img/anime/swipe.gif'; // Change the image source
    } else {
        toggleDiv.style.display = 'none';
        parentDiv.style.maxWidth = '1300px';
        mapCanvas.style.width = '1140px'; // Adjust the width of the map container
        arrowIcon.src = 'img/anime/swipe-left.gif'; // Change the image source
    }
});


            //         document.getElementById('fullscreen-button').addEventListener('click', function () {
            //     var mapElement = document.getElementById('map_canvas');
            //     if (mapElement.requestFullscreen) {
            //         mapElement.requestFullscreen();
            //     } else if (mapElement.mozRequestFullScreen) { /* Firefox */
            //         mapElement.mozRequestFullScreen();
            //     } else if (mapElement.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
            //         mapElement.webkitRequestFullscreen();
            //     } else if (mapElement.msRequestFullscreen) { /* IE/Edge */
            //         mapElement.msRequestFullscreen();
            //     }
            // });
        </script>


</body>

</html>