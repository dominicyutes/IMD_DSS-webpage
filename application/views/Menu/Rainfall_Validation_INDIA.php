<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
       .btn {
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

<?php $this->load->view('Menu/template/header_'); ?>
    <?php $this->load->view('Menu/template//sidebar_'); ?>

    <div class="parent" style="max-width: 1300px;">
        <div class="content-wrapper" style="display: inline-block;">
            <section class="content">
            <img src="img/anime/drizzle.gif" alt="Drizzle Animation" style="width: 28px;">
            <h4 style="font-family: 'Times New Roman', Times, serif; display: inline;">RAINFALL VALIDATION INDIA</h4>
                <div class="box box-info">
                <div style="padding-top: 5px; padding-bottom: 5px;">
                        Click on the <img src="img/anime/stations.gif" alt="Station Icon" style="width: 25px;">station to view the comparison plot. You can even use the  <img src="img/anime/calendar.gif" alt="calendar" style="width: 20px;">date and
                        parameter
                        filters.
                    </div>
                    <!-- <button id="fullscreen-button">Fullscreen</button> -->

                    <div style="display: flex; justify-content: end;">
                        <button id="toggleButton" style="background: none; border: none; cursor: pointer;"
                            onclick="toggleWidth()">
                            <img src="img/anime/swipe-left.gif" id="arrowIcon"
                                style="width: 30px; height: 30px; margin-top: -50px;">
                        </button>
                    </div>
                    <!-- <div id="reportrange"
                        style="position: absolute;    margin-left: 182px; transform: translateX(-50%); padding: 5px 10px; background: #fff; cursor: pointer; border: 1px solid #ccc; z-index: 9699;">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div> -->
                    <div class="box-body">
                        <div class="active tab-pane" id="showmap">
                            <div class="post">
                                <div id="dialog_temp_graph_extension_chart" style="display: none;">
                                    <div id="temp_graph_extension_chart" class="dialog"></div>
                                </div>
                                <div class="box-body">
                                    <div id="container"
                                        style="border:#333 1px ridge; overflow: hidden; width: 1140px;     margin-top: -35px;">
                                        <div id="map_canvas"
                                            style="width: 1200px; height: 656px; float: left; z-index: 0;"
                                            align="center"></div>
                                        <!-- 1140 -->
                                        <!-- 850 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="toggleDiv"
            style="flex-direction: column; padding: 20px; border: 2px solid #000; border-radius: 10px; margin-top: -771px; width: 265px; margin-left: 1164px; height: 709px;">
            <h4 style="text-align: center; font-family: 'Times New Roman';">FILTERS</h4>


            <div style="display: flex; flex-direction: column; justify-content: space-between;">
                <div
                    style="width: 100%; padding: 20px; border: 1px solid #ccc; border-radius: 10px; margin-bottom: 5px; height: 217px; display: flex; flex-direction: column; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column;">
                        <label style="margin-bottom: 5px;">Station Name:</label>
                        <div style="display: flex; flex-direction: row; align-items: center;">
                            <input type="text" id="station-name" list="station-name-list" placeholder="Station Name"
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



                <div style="width: 100%; padding: 20px; border: 1px solid #ccc; border-radius: 10px; height: 370px;">
                    <div style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
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

                        <button id="submitRegion" type="button" class="btn" style="font-size: 10px;">Submit</button>
                    </div>

                </div>

            </div>


        </div>

        <?php $this->load->view('Menu/template/footer_js_'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>stylesheet/jQuery/jQuery-2.2.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>stylesheet/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">


    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/new_js/highcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/new_js/exporting.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/new_js/moment.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/js/daterangepicker.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/air-datepicker/css/datepicker.min.css">

    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/ol4/ol-layerswitcher.css" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/ol4/ol.css" type="text/css">
    <script src="<?php echo base_url(); ?>stylesheet/ol4/ol.js"></script>

    <!-- OpenLayers LayerSwitcher CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ol-layerswitcher@3.0.0/src/ol-layerswitcher.css" />
    <script src="https://unpkg.com/ol-layerswitcher@3.0.0"></script>


    <!-- <script>


        $(document).ready(function () {
            $('#submit-name').click(function () {
                var station_name = $('#station-name').val();
                $.ajax({
                    url: "<?php echo site_url('Rainfall_Validation_INDIA/getStationCoordinates_name'); ?>",
                    type: 'POST',
                    data: { station_name: station_name },
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        var latitude = parseFloat(response.latitude);
                        var longitude = parseFloat(response.longitude);
                        map.getView().setCenter(ol.proj.fromLonlatitude([longitude, latitude]));
                        map.getView().setZoom(15);
                    }
                });
            });
        });

       document.getElementById('submit-name').addEventListener('click', function () {
    var stationName = document.getElementById('station-name').value;
    fetch('<?php echo base_url('Rainfall_Validation_INDIA/getStationId'); ?>/' + encodeURIComponent(stationName))
        .then(response => response.text())
        .then(stationId => {
            document.getElementById('station-id').value = stationId;
        })
        .catch(error => {
            console.error('Error:', error);
        });
});



        $(document).ready(function () {
            $('#submit-id').click(function () {
                var station_id = $('#station-id').val();
                $.ajax({
                    url: "<?php echo site_url('Rainfall_Validation_INDIA/getStationCoordinates_id'); ?>",
                    type: 'POST',
                    data: { station_id: station_id },
                    dataType: 'json',
                    success: function (response) {
                        var latitude = parseFloat(response.latitude);
                        var longitude = parseFloat(response.longitude);
                        map.getView().setCenter(ol.proj.fromLonlatitude([longitude, latitude]));
                        map.getView().setZoom(15);
                    }
                });
            });
        });

    </script> -->


    <script type="text/javascript">
        function showPieChart(data, name, id) {
            // console.log(data);
            $('#temp_graph_extension_chart').html('');
            $('#temp_graph_extension_chart').highcharts({
                chart: {
                    type: 'spline'
                },
                title: {
                    text: $("#param option:selected").text() + ' Comparison for <b>' + name + '</b> station.'
                },
                subtitle: {
                    text: document.ontouchstart === undefined ? 'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
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
                ]
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
                title: 'Observation  station :' + id,
                width: 1000,
                modal: true,
            });
        }
        var stations = <?php echo json_encode($stations, JSON_NUMERIC_CHECK); ?>;

        console.log(stations);

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

        var odisha_boundary = new ol.layer.Vector({
            renderMode: 'image',
            title: "Odisha",
            visible: false,
            baseLayer: false,
            source: new ol.source.Vector({
                url: '<?= base_url('/DATA/Odisha_Dist_line.geojson') ?>',
                format: new ol.format.GeoJSON()
            }),
            style: indiastyle
        });

        var india_boundary = new ol.layer.Vector({
            renderMode: 'image',
            title: "India",
            visible: false,
            baseLayer: false,
            source: new ol.source.Vector({
                url: '<?= base_url('/DATA/INDIA_COUNTRY.json') ?>',
                format: new ol.format.GeoJSON()
            }),
            style: indiastyle
        });

        var layers = [
            new ol.layer.Group({
                layers: [osm]
            }), odisha_boundary, india_boundary
        ];

        map = new ol.Map({
            layers: layers,
            target: 'map_canvas',
            view: new ol.View({
                center: ol.proj.transform([78.9629, 20.5937], 'EPSG:4326', 'EPSG:3857'),
                zoom: 4.5
            })
        });

        // var latitude = 25.096100;
        // var longitude = 85.313100;


        var indiaZoom = 5;
        var odishaZoom = 7;
        var feats = [];
        stations.forEach(function (s) {
            feats.push(new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.transform([parseFloat(s.longitude), parseFloat(s.latitude)], 'EPSG:4326', 'EPSG:3857')),
                station: s
            }))
        });

        odisha_boundary.on('change:visible', function () {
            if (odisha_boundary.getVisible()) {
                india_boundary.setVisible(false);
                latitude = 20.1992;
                longitude = 84.4510;
                map.getView().setCenter(ol.proj.transform([longitude, latitude], 'EPSG:4326', 'EPSG:3857'));
                map.getView().setZoom(odishaZoom);
            }
        });

        india_boundary.on('change:visible', function () {
            if (india_boundary.getVisible()) {
                odisha_boundary.setVisible(false);
                latitude = 20.5937;
                longitude = 78.9629;
                map.getView().setCenter(ol.proj.transform([longitude, latitude], 'EPSG:4326', 'EPSG:3857'));
                map.getView().setZoom(indiaZoom);
            }
        });


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
            })
        });
        map.addLayer(vectorLayer);
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
                    url: '<?php echo base_url('Rainfall_Validation_INDIA/get_station_data'); ?>',
                    success: function (res) {
                        var result = JSON.parse(res);
                        // console.log(res, "hfbvujgv")
                        if (result.xss_error) {
                            alert('Invalid Input');
                        } else {
                            showPieChart(result, feature.get('station').StationName, feature.get('station').StationID);
                        }
                    }
                });
            })
        });

    
        var ls = new ol.control.LayerSwitcher({ tipLabel: 'Legend' });
        map.addControl(ls);

        // //date picker 
        // $(function () {
        //     // var start = moment().subtract(29, 'days');
        //     // var end = moment();
        //     var start = moment('2024-04-01');
        //     var end = moment('2024-04-15');

        //     function cb(start, end) {
        //         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //     }
        //     $('#reportrange').daterangepicker({
        //         startDate: start,
        //         endDate: end,
        //         minDate: '02/24/2019',
        //         maxDate: moment(),
        //         ranges: {
        //             'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        //             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //             'Last 2 Months': [moment().subtract(2, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        //         }
        //     }, cb);
        //     cb(start, end);
        // });

        document.getElementById('toggleButton').addEventListener('click', function () {
            var toggleDiv = document.getElementById('toggleDiv');
            var parentDiv = document.querySelector('.parent');
            var arrowIcon = document.getElementById('arrowIcon');
            if (toggleDiv.style.display === 'none') {
                toggleDiv.style.display = 'flex';
                parentDiv.style.maxWidth = '100%';
                arrowIcon.className = 'fa fa-arrow-circle-left';
            } else {
                toggleDiv.style.display = 'none';
                parentDiv.style.maxWidth = '870px';
                arrowIcon.className = 'fa fa-arrow-circle-right';
            }
        });
    </script>


</body>

</html>