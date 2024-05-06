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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- leaflet Js -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Leaflet AJAX Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>

    <!-- html2canvas / canvas2image -->
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/html2canvas/html2canvas.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/canvas2image/canvas2image.js">
    </script>

    <style type="text/css">
    #map_canvas {
        width: 100%;
        height: 500px;
        float: left;
    }

    .box-header {
        position: initial;
    }

    .legend {
        line-height: 18px;
        color: #555;
        text-align: justify;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 1;
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Heat Wave Overview - Ensemble
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url('HeatWave/Overview');?>"><img width="20px" align="center"
                            src="<?php echo base_url('stylesheet/images/Heat/Heat wave Forecast.png');?>" />Heat
                        Wave</a>
                </li>
                <li><a href="<?=base_url('HeatWave/Overview_new/ecmwf');?>"> Heat Wave Overview - Ensemble</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="tab_main">
                            <div id="tab_1">
                                <div class="box-body">
                                    <div class="box-tools">
                                        <ul class="nav nav-tabs">
                                            <a href="<?php echo base_url(); ?>HeatWave/Overview_new/imd" type="button"
                                                class="btn <?php echo preg_match("/imd/", $fcst_data_type)?'active btn-info':'btn btn-warning'; ?>">IMD
                                                - GFS</a>
                                            <a href="<?php echo base_url(); ?>HeatWave/Overview_new/ecmwf" type="button"
                                                class="btn <?php echo preg_match("/ecmwf/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">ECMWF</a>
                                            <a href="<?php echo base_url(); ?>HeatWave/Overview_new/ensemble"
                                                type="button"
                                                class="btn <?php echo preg_match("/ensemble/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">ENSEMBLE</a>
                                            <a href="<?php echo base_url(); ?>HeatWave/Overview_new/va" type="button"
                                                class="btn <?php echo preg_match("/va/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">Value
                                                Added</a>
                                            <span class="box-title"><i class="fa fa-calendar-check-o"></i> Day [<span
                                                    style="color: #00b3ee;"><?php echo $date_select; ?></span>]</h3>

                                                <div class="btn-group pull-right">
                                                    <?php
                                                $attributes = array("name" => "form1", "method" => "get");
                                                echo form_open("HeatWave/Overview_new/".$active_map_type, $attributes);
                                                ?>
                                                    <input type="submit" name="submit_day"
                                                        class="btn btn-default <?php echo preg_match("/1$/", $active_day) ? 'active' : ''; ?>"
                                                        value="Day 1" />
                                                    <input type="submit" name="submit_day"
                                                        class="btn btn-default <?php echo preg_match("/2$/", $active_day) ? 'active' : ''; ?>"
                                                        value="Day 2" />
                                                    <input type="submit" name="submit_day"
                                                        class="btn btn-default <?php echo preg_match("/3$/", $active_day) ? 'active' : ''; ?>"
                                                        value="Day 3" />
                                                    <input type="submit" name="submit_day"
                                                        class="btn btn-default <?php echo preg_match("/4$/", $active_day) ? 'active' : ''; ?>"
                                                        value="Day 4" />
                                                    <input type="submit" name="submit_day"
                                                        class="btn btn-default <?php echo preg_match("/5$/", $active_day) ? 'active' : ''; ?>"
                                                        value="Day 5" />
                                                    <?php echo form_close(); ?>
                                                </div>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane active">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="map_container" style=" height: 500px;">
                                                        <div id="map_canvas" class="map-canvas"></div>
                                                    </div>
                                                    <div class=" box box-primary">
                                                        <pre><div class="div4_txt"><ol type="a">The official Heat Wave advisories considers the thresholds used by India Meteorological Department.<br> According to India Meteorological Department,Heat Wave need not be considered till<br> maximum temperature of a station reaches at least 40º C for Plains and at least 30º C for Hilly regions.<br><li>When normal maximum temperature of a station is less than or equal to 40º C<ul><li>Heat Wave Departure from normal is 5º C to 6º C</li><li>Severe Heat Wave Departure from normal is 7º C or more</li></ul></li><li>When normal maximum temperature of a station is more than 40º C<ul><li>Heat Wave Departure from normal is 4º C to 5º C</li><li>Severe Heat Wave Departure from normal is 6º C or more</li></ul></li><li>When actual maximum temperature remains 45ºC or more irrespective of normal maximum temperature, Heat Wave should be declared.</li><br></ol></div></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End of tab_main -->
                    </div><!-- End of box  -->
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
    var block_info = <?php echo json_encode($block_info); ?>;
    var district_info = <?php echo json_encode($district_info); ?>;

    var block_wise_data = <?php echo json_encode($block_wise_data); ?>;
    var dist_wise_data = <?php echo json_encode($dist_wise_data); ?>;

    var normal_block = <?php echo json_encode($normal_block); ?>;
    var normal_district = <?php echo json_encode($normal_district); ?>;

    var mymap = L.map('map_canvas', {
        attributionControl: false,
        renderer: L.canvas({
            padding: 0
        }),
        zoomControl: true,
        maxZoom: 8,
        minZoom: 7
    }).setView([20.1992, 84.4510], 7);
    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
    _block_geojson = "<?php echo base_url(); ?>DATA/block_level_new.geojson";
    var odisha_block = new L.GeoJSON.AJAX(_block_geojson, {
        color: 'black',
        weight: 1,
        style: fill_color_subbasin,
        onEachFeature: function(feature, layer) {
            layer.on('mouseover', function(ft) {
                let popup = new L.Popup();
                popup.setLatLng(ft.latlng);
                popup.setContent(getPopUpHTML(feature));
                mymap.openPopup(popup);
            });
        }
    });
    var ctl_odisha_block = L.layerGroup([odisha_block]);
    ctl_odisha_block.addTo(mymap);

    function getColorRainfall(d) {
        return d == 1 ? '#008000' :
            d == 2 ? '#ffff00' :
            d == 3 ? '#ff0000' : 'white';
    }

    function fill_color_subbasin(feature) {
        let _colr_fade = 0;
        var block_id = feature.properties.id;
        var data_rd = block_info[block_id];
        return {
            fillColor: getColorRainfall(data_rd),
            weight: 1,
            opacity: 0.6,
            color: 'black',
            fillOpacity: 1
        };
    }

    function getPopUpHTML(feature) {
        block_id = feature.properties.id;
        var data_rd = block_wise_data[block_id];
        var data_nm = normal_block[block_id];
        block_name = feature.properties.block_name;
        temp_table = '<div><h5><b>Block Name : <i>' + block_name +
            '</b></i></h5><table class="table table-bordered table-condensed">';
        // Rainfall Deviation
        temp_table = temp_table + '<tr><td>Max. Temp</td>';
        if (data_rd === null || data_rd === undefined || data_rd === '') {
            temp_table = temp_table + '<td> N/A </td></tr>';
        } else {
            temp_table = temp_table + '<td>' + data_rd + ' (°C) </td></tr>';
        }

        temp_table = temp_table + '<tr><td>Normal Max Temp</td>';
        if (data_nm == null) {
            temp_table = temp_table + '<td> N/A </td></tr>';
        } else {
            temp_table = temp_table + '<td> ' + data_nm + ' (°C)  </td></tr>';
        }

        temp_table += '</table></div>';
        return temp_table;
    }

    _dist_geojson = "<?php echo base_url(); ?>DATA/Odisha_Dist.geojson";
    var odisha_district = new L.GeoJSON.AJAX(_dist_geojson, {
        color: 'black',
        weight: 1,
        style: fill_color_subbasinDist,
        onEachFeature: function(feature, layer) {
            layer.on('mouseover', function(ft) {
                let popup = new L.Popup();
                popup.setLatLng(ft.latlng);
                popup.setContent(getPopUpHTMLDist(feature));
                mymap.openPopup(popup);
            });
        }
    });
    var ctl_odisha_district = L.layerGroup([odisha_district]);
    //ctl_odisha_district.addTo(mymap);

    function fill_color_subbasinDist(feature) {
        let _colr_fade = 0;
        var dist_id = feature.properties.id;
        var data_rd = district_info[dist_id];
        return {
            fillColor: getColorRainfall(data_rd),
            weight: 1,
            opacity: 0.6,
            color: 'black',
            fillOpacity: 1
        };
    }

    function getPopUpHTMLDist(feature) {
        district_id = feature.properties.id;
        var data_rd = dist_wise_data[district_id];
        var data_nm = normal_district[district_id];
        district_name = feature.properties.district_name;
        temp_table = '<div><h5><b>District Name : <i>' + district_name +
            '</b></i></h5><table class="table table-bordered table-condensed">';
        // Rainfall Deviation
        temp_table = temp_table + '<tr><td>Max Temp</td>';
        if (data_rd === null || data_rd === undefined || data_rd === '') {
            temp_table = temp_table + '<td> N/A </td></tr>';
        } else {
            temp_table = temp_table + '<td>' + data_rd + ' (°C)</td></tr>';
        }

        temp_table = temp_table + '<tr><td>Normal Max Temp</td>';
        if (data_nm == null) {
            temp_table = temp_table + '<td> N/A </td></tr>';
        } else {
            temp_table = temp_table + '<td> ' + data_nm + ' (°C)  </td></tr>';
        }

        temp_table += '</table></div>';
        return temp_table;
    }

    var _legend = L.control({
        position: 'bottomright'
    });
    _legend.onAdd = function(mymap) {
        var div = L.DomUtil.create('div', 'info legend'),
            labels = [];
        labels.push('<i style="background:#008000"></i> Normal');
        labels.push('<i style="background:#ffff00"></i> Heat Wave');
        labels.push('<i style="background:#ff0000"></i> Severe Heat Wave');
        div.innerHTML = labels.join('<br>');
        return div;
    };
    _legend.addTo(mymap);

    var baseLayers = {};
    // Overlay layers are grouped
    var groupedOverlays = {
        "Layer View": {
            "District": ctl_odisha_district,
            "Block": ctl_odisha_block
        },
    };
    var options = {
        exclusiveGroups: ["Layer View"]
    };

    var layerControl = L.control.groupedLayers(baseLayers, groupedOverlays, options);
    mymap.addControl(layerControl);
    </script>
</body>

</html>