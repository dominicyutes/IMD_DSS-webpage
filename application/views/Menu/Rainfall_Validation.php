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
            margin-top: -856px;
        }

        .btn {
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
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

<body style="zoom:80%;">


<div style="height: 100%;">

<div class="fixedHead">
    <?php $this->load->view('Menu/Landing_page_top'); ?>
</div>
<?php $this->load->view('Menu/Landing_page_side.php'); ?>

<div class="main">
    <h1 style="margin-top: -8px; margin-left: 560px; margin-bottom: 20px;">Rainfall Validation</h1>

    <div style="display: flex; align-items: center;">

        <div style="margin-right: 10px;">
            <label for="state-name">State Name:</label>
            <input type="text" id="state-name" list="state-name-list" style="width: 150px;"
                placeholder="State Name">
            <datalist id="state-name-list">
                <?php foreach ($stateNames as $state): ?>
                    <option value="<?php echo $state['name']; ?>"></option>
                <?php endforeach; ?>
            </datalist>
            <button type="button" id="submit-names"
                style="padding: 5px 10px; margin-left: 40px; margin-bottom: -30px;" class="btn">Submit</button>
        </div>

        <div style="margin-right: 10px;">
            <label for="station-name">Station Name:</label>
            <input type="text" id="station-name" list="station-name-list" style="width: 150px;"
                placeholder="Station Name">
            <datalist id="station-name-list">
                <?php foreach ($stationNames as $station): ?>
                    <option value="<?php echo $station['name']; ?>"></option>
                <?php endforeach; ?>
            </datalist>
            <button type="button" id="submit-name" style="padding: 5px 10px; margin-left: 40px; margin-bottom: -30px;" class="btn">Submit</button>
        </div>
        <div style="margin-right: 10px;">
            <label for="station-id">Station ID:</label>
            <input type="text" id="station-id" list="station-id-list" style="width: 150px;"
                placeholder="12345678">
            <datalist id="station-id-list">
                <?php foreach ($stationIds as $station): ?>
                    <option value="<?php echo $station['id']; ?>"></option>
                <?php endforeach; ?>
            </datalist>
            <button type="button" id="submit-id" style="padding: 5px 10px; margin-left: 40px; margin-bottom: -30px;"
                class="btn">Submit</button>
        </div>

    </div>



    <div class="content-wrapper">
        <section class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    Click on the station to view the comparison plot. You can even use the date and parameter
                    filters.
                </div>
                <div id="reportrange"
                    style="position: absolute; top: 21%; left:283px;  padding: 5px 10px; background: #fff; cursor: pointer; border: 1px solid #ccc; z-index: 9699;">
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
                                <div style="border:#333 1px ridge; overflow: hidden;">
                                    <div id="map_canvas"
                                        style="width:100%; height: 719px; float: left;z-index: 0;"
                                        align="center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>

</div>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheet/dist/css/daterangepicker.css">


    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/ol4/ol-layerswitcher.css" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/ol4/ol.css" type="text/css">
    <script src="<?php echo base_url(); ?>stylesheet/ol4/ol.js"></script>

    <!-- OpenLayers LayerSwitcher CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ol-layerswitcher@3.0.0/src/ol-layerswitcher.css" />
    <script src="https://unpkg.com/ol-layerswitcher@3.0.0"></script>


    <script>


        $(document).ready(function () {
            $('#submit-name').click(function () {
                var station_name = $('#station-name').val();
                $.ajax({
                    url: "<?php echo site_url('Rainfall_Validation/getStationCoordinates_name'); ?>",
                    type: 'POST',
                    data: { station_name: station_name },
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        var lat = parseFloat(response.lat);
                        var lng = parseFloat(response.lng);
                        map.getView().setCenter(ol.proj.fromLonLat([lng, lat]));
                        map.getView().setZoom(15);
                    }
                });
            });
        });

        document.getElementById('submit-name').addEventListener('click', function () {
            var stationName = document.getElementById('station-name').value;
            fetch('<?php echo base_url('Rainfall_Validation/getStationId'); ?>/' + encodeURIComponent(stationName))
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
                    url: "<?php echo site_url('Rainfall_Validation/getStationCoordinates_id'); ?>",
                    type: 'POST',
                    data: { station_id: station_id },
                    dataType: 'json',
                    success: function (response) {
                        var lat = parseFloat(response.lat);
                        var lng = parseFloat(response.lng);
                        map.getView().setCenter(ol.proj.fromLonLat([lng, lat]));
                        map.getView().setZoom(15);
                    }
                });
            });
        });

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
                    text: $("#param option:selected").text() + ' Comparison for <b>' + name + '</b> station.'+ '<br>' +
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
                zoom: 5
            })
        });

        // var lat = 25.096100;
        // var lng = 85.313100;


        var indiaZoom = 5;
        var odishaZoom = 7;
        var feats = [];
        stations.forEach(function (s) {
            feats.push(new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.transform([parseFloat(s.lng), parseFloat(s.lat)], 'EPSG:4326', 'EPSG:3857')),
                station: s
            }))
        });

        odisha_boundary.on('change:visible', function () {
            if (odisha_boundary.getVisible()) {
                india_boundary.setVisible(false);
                lat = 20.1992;
                lng = 84.4510;
                map.getView().setCenter(ol.proj.transform([lng, lat], 'EPSG:4326', 'EPSG:3857'));
                map.getView().setZoom(odishaZoom);
            }
        });

        india_boundary.on('change:visible', function () {
            if (india_boundary.getVisible()) {
                odisha_boundary.setVisible(false);
                lat = 20.5937;
                lng = 78.9629;
                map.getView().setCenter(ol.proj.transform([lng, lat], 'EPSG:4326', 'EPSG:3857'));
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
                    src: "<?php echo base_url(); ?>DATA/rainfll.png"
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
                    url: '<?php echo base_url('Rainfall_Validation/get_station_data'); ?>',
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
        // var ls = new ol.control.LayerSwitcher({ tipLabel: 'Legend' });
        // map.addControl(ls);

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


    </script>


</body>

</html>