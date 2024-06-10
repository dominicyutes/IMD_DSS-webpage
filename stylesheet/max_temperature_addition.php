<?php $this->load->view('default_template/header_css_js'); ?>
<?php $this->load->view('default_template/system_header'); ?>
<?php $this->load->view('default_template/sidebar_about_only'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/js/jquery-ui-1.12.1/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_draw/leaflet.draw.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.fullscreen.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheet/leaflet_map/coordinate/Leaflet.Coordinates-0.1.3.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_map/grouped_layer_control/leaflet.groupedlayercontrol.css" />

<style>
    th.dt-center, td.dt-center { text-align: center; }
    /* Create two equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .leaflet-control-lasso{
        display: none !important;
    }
    .temp_tooltip_cont{
        background: none;
        border:none;
        box-shadow: none;
    }

    [class*="forecast_temp_tooltip_cont_"] {
        background: none !important;
        border:none !important;
        box-shadow: none !important;
    }

    .temp_tooltip{
        overflow: hidden;
        border-radius: 5px;
        color:white;
        box-shadow: 0px 0px 1px black;
        text-align:center !important;
    }
    .leaflet-control-layers-list{
        text-align:initial !important;
    }
    
    .leaflet-control-layers-scrollbar{
        height: 100% !important;
    }
    .leaflet-control-attribution leaflet-control{
        display: none !important;
    }
    img.leaflet-marker-icon.leaflet-zoom-animated.leaflet-interactive{
        display: none !important;
    }
    .ui-dialog { z-index: 9999999 !important ;}
    /*.ui-button.ui-corner-all.ui-widget.ui-button-icon-only.ui-dialog-titlebar-close {
        display: none;
    }*/
    /*ui-button-icon ui-icon ui-icon-closethick*/

    .info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; text-align: left;} 
    .info h4 { margin: 0 0 5px; color: #777; }
	.uiElement {
	    color: firebrick;
	    background: transparent;
	    font-size: x-small;
	    font: 13px/1.5 "Helvetica Neue", Arial, Helvetica, sans-serif;
	}
	.leaflet-control-coordinates{
		background-color: transparent !important;
	}

    #toggle_right_panel{
        cursor: pointer;
    }
    .legend_max_temp {
        line-height: 18px;
        color: #555;
    }
    .legend_max_temp i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 1;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1> Maximum Temperature </h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);"><i class="fa ion-map"></i>Value Addition Graphical</a></li>
            <li class="active"><a href="<?=base_url('ValueAddition/HeatwaveSetAlert/index');?>">Max. Temperature</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active" ><a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert" >Max. Temperature</a></li>
                        <li><a href="<?php echo base_url(); ?>ValueAddition/Min_temp" >Min. Temperature</a></li>
                        <li><a href="<?php echo base_url(); ?>ValueAddition/Rainfall">Rainfall</a></li>
                        <li><a href="<?php echo base_url(); ?>ValueAddition/Humidity">Relative Humidity</a></li>
                        <!-- <li><a href="<?php echo base_url(); ?>ValueAddition/Min_temperature" >ColdWave</a></li> -->
                        
                        <div class="data_type_bt pull-right" style="margin-top: 7px;margin-right: 5px;">
                            <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/imd" type="button" class="btn <?php echo preg_match("/imd/", $fcst_data_type)?'active btn-info':'btn btn-warning'; ?>">IMD - GFS</a>
                            <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/ecmwf" type="button" class="btn <?php echo preg_match("/ecmwf/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">ECMWF</a>
                            <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/ensemble" type="button" class="btn <?php echo preg_match("/ensemble/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">ENSEMBLE</a> 
                            <!-- <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/wrf" type="button" class="btn <?php echo preg_match("/wrf/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">WRF</a> -->
                            <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/weight" type="button" class="btn <?php echo preg_match("/weight/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">WEIGHTED</a>
                        </div>
                        <select name="regionals" id="regionals"  style="margin-top: 15px;margin-right: 5px;">
                            <option value="0">Select Region</option>
                            <option value="1">NIO</option>
                            <option value="2">NCO</option>
                            <option value="3">SIO</option>
                            <option value="4">SCO</option>
                        </select>
                        <div class="box-tools pull-right" style="margin-top: 7px;margin-right: 5px;">
                            <div class="btn-group">
                                <?php
                                    $day_attr = array("name" => "day_form", "method" => "get");
                                    echo form_open("ValueAddition/HeatwaveSetAlert/index/".$active_map_type."/".$fcst_data_type."/".$active_param_type, $day_attr);
                                ?>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/1$/", $active_day)?'active':''; ?>" value="Day 1"/>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/2$/", $active_day)?'active':''; ?>" value="Day 2"/>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/3$/", $active_day)?'active':''; ?>" value="Day 3"/>
                                    <?php if($fcst_data_type != 'wrf') {?>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/4$/", $active_day)?'active':''; ?>" value="Day 4"/>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/5$/", $active_day)?'active':''; ?>" value="Day 5"/>  
                                    <?php } ?>                  
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </ul>
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-12" id="initial_max">
                                <!-- DIRECT CHAT -->
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><i class="fa fa-calendar-check-o"></i> Day [<span style="color: #00b3ee;" ><?php echo date('d-M-Y', strtotime("$curr_date")); ?></span>]</h3>
                                    </div> <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-tools pull-right" id="back_bt" style="display: none;">
                                            <button type="button" name="" class="btn btn-block btn-danger" value=""><i class="ion-ios-undo"></i>&nbsp;&nbsp; Back to District</button>
                                        </div>
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <!-- <li class="<?php echo preg_match("/block_wise/", $active_map_type)?'active':''; ?>"><a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/block_wise/<?php echo $fcst_data_type; ?>">Block Wise</a></li> -->
                                                <li class="pull-right"><img  title="open" id="toggle_right_panel" attr-togglev="1" class="toggle_right_panel" src="<?php echo base_url('stylesheet/images/collapse_open.png'); ?>" style="display: none;" /> </li>
                                                <!-- <li class="<?php echo preg_match("/block_from_district/", $active_map_type)?'active':''; ?>"><a href="<?php echo base_url(); ?>HeatWave/HeatwaveSetAlert/Heatwave/block_from_district/<?php echo $fcst_data_type; ?>">Blocks From District</a></li> -->
                                             </ul>
                                            <div class="active tab-pane">
                                                <div style="border:#333 1px ridge; overflow: hidden;">
                                                    <div id="map_canvas" style="width:100%; height:500px; float: left;" align="center"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.col -->

                            <div class="col-md-4" style="display: none;" id="hidden_tab">
                                <div class="box" style="height: 500px; margin-bottom: 60px; " >
                                    <div class="box-header with-border">
                                        <div id="select_map_tools_gp">
                                            <div>
                                                <button id="_add_temp_value" type="button" style="display: none;" class="btn btn-success btn-sm"><b><i class="ion-ios-plus"></i>&nbsp;&nbsp;Add</b></button>
                                                <button id="_subtract_temp_value" type="button" style="display: none;" class="btn btn-success btn-sm"><b><i class="ion-ios-minus"></i>&nbsp;&nbsp;Subtract</b></button>
                                                <input id="enter_add_subtract_temp_value" type="number" style="display: none; width: 5em;" step="0.01"  ></input>
                                                <input type="hidden" id="flag_add_subtract" value="0">
                                            </div>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-header with-border">
                                        <div id="select_map_tools_gp">
                                            <div>
                                                <input type="radio" id="_less_than" name="less_greater_filter" value="1">
                                                <label for="html"><i class="fa-solid fa-less-than-equal"></i></label>
                                                <input type="radio" id="_greater_than" name="less_greater_filter" value="2">
                                                <label for="css"><i class="fa-solid fa-greater-than-equal"></i></label>
                                                <input id="_less_greater_temp_value" type="number"></input>
                                                <button id="filter_less_greater" type="button" class="btn btn-success btn-sm"><b><i class="fa-solid fa-filter"></i>Filter</b></button>
                                                <input type="hidden" id="flag_less_greater" value="0">
                                            </div>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body" style="height: 75%">
                                        <div id="selectedAreaTBResultPart"></div>
                                        <div class="col-md-12" id="group_name_polygon_tab">
                                            <label for="group_name_polygon" class="col-md-6">Polygon Group Name</label>
                                            <div class="col-md-6">
                                                <input id="group_name_polygon" type="text" name="group_name_polygon" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div id="selectedResult"></div>
                                    </div><!-- /.box-body -->
                                    
                                    <div class="box-footer" style="margin-top: 15px;">
                                        <button id="set_alert_bt" type="button" name="" class="btn btn-block btn-success" value="" style="display: none;">Ok</button>
                                    </div><!-- /.box-footer -->
                                </div><!--/.box -->
                                
                                <div class="box box-primary" style="height: 400px;">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Set Alert List</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body" style="height: 75%">
                                        <div id="selectedAlertTBResultPart"></div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button id="confirm_alert_bt" type="button" name="" class="btn btn-block btn-primary" value="" style="display: none;">Confirm Set Alert</button>
                                    </div><!-- /.box-footer -->
                                </div> <!-- /.box -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                </div>
         </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Block Wise Alert</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div id="currAlertTBResultPart"></div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <span id="update_info"></span>
                    </div><!-- /.box-footer -->
                </div>
            </div>
        </div>
        <div id="dialog_temp_extension_block" style="display: none;">
        	<div id="temp_extension_block" class="dialog" ></div>
        </div>
        <div id="dialog_add_subtract" style="display: none;">
        	<div id="add_subtract_data" class="dialog" ></div>
        </div>

        <div id="dialog_map_choose_block" style="display: none;">
            <div id="map_choose_block" class="dialog" ></div>
        </div>

    </section>
</div>
<?php $this->load->view('default_template/footer_js'); ?>

<script src="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_v1.5.1/leaflet.ajax.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_draw/leaflet.draw.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/Leaflet.fullscreen.min.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/js/jquery-ui-1.12.1/jquery-ui.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>stylesheet/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/plugins/datatables/numeric-comma.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/plugins/randomColor.min.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_map/coordinate/Leaflet.Coordinates-0.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_map/leaflet-grids-master/mgrs.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_map/leaflet-grids-master/leaflet-grids.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_map/leaflet-grids-master/leaflet-control.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_map/grouped_layer_control/leaflet.groupedlayercontrol.js"></script>
<script type="text/javascript">
    const selectedAreaTBResultPart = document.querySelector('#selectedAreaTBResultPart');
    const selectedAlertTBResultPart = document.querySelector('#selectedAlertTBResultPart');
    const currAlertTBResultPart = document.querySelector('#currAlertTBResultPart');
    const latestUpdateText = document.querySelector('#update_info');
    var fcst_date = '<?php echo date('Y-m-d', strtotime("$curr_date")); ?>';
    var fcst_data_type = '<?php echo $fcst_data_type; ?>';
    var block_list = <?php echo json_encode($block_list); ?>;
    /* Max Temp. forecast data */
    var tx_fcst_list = <?php echo json_encode($fcst_list); ?>;
    /* Max Temp. normal data */
    var tx_normal_list = <?php echo json_encode($normal_list); ?>;
    AJAXLatestUpdate(fcst_date, fcst_data_type);
    //console.log(<?php echo json_encode($region_info,JSON_NUMERIC_CHECK) ?>);
    var region_types = <?php echo json_encode($region_info,JSON_NUMERIC_CHECK) ?>;
    //console.log(region_types);
    /* Max Temp. forecast data */
    var tx_fcst_history_obj = <?php echo json_encode($history_list); ?>;
    var tx_fcst_history = Object.entries(tx_fcst_history_obj);
    var tx_fcst_history_arr = [];
    // Convert to array
    tx_fcst_history.forEach(([key, value]) => {
        tx_fcst_history_arr.push(value);
    });
    getCurrentAlertTB(tx_fcst_history_arr);
    /* Updated Info. forecast data */
    var tx_fcst_updated_data_object = <?php echo json_encode($updated_data); ?>;
    var tx_fcst_updated_data = Object.entries(tx_fcst_updated_data_object);
    var tx_fcst_updated_data_arr = [];
    // Convert to array
    tx_fcst_updated_data.forEach(([key, value]) => {
        tx_fcst_updated_data_arr.push(parseInt(value));
    });
    var active_map_type = '<?php echo $active_map_type; ?>';
    var selected_district_id = '';
    $("#set_alert_bt").css("display", "none");
    $("#group_name_polygon").css("display", "none");
    $("#group_name_polygon_tab").css("display", "none");
    $("#group_name_polygon").val("");
    var _count_poly = 0;
    var _layer_store_temp = [];
    var _group_name_arr = [];
    var _update_temp_data = [];
    /* Leaflet map */
    var mymap;
    var geojson_file = '<?php echo $geojson_file; ?>';
    var center = [<?php echo $lat_lng; ?>];
    var zoom = <?php echo $map_zoom; ?>;
    var featuresSelected = [];
    var locSelected = [];
    var tmpLocSetAlert = [];
    var leafletMap;
    var leafletDistLineMap;
    var tooltip_layer;
    var g_layer_list_temp = [];
    var g_layer_list_main = [];
    /*Style for selected layers*/
    var stylelayer = {
        reset: {
            color: "#3388FF",
            opacity: 1,
            fillcolor: "#868686",
            fillOpacity: 1,
            weight: 2
        },
        selected: {
            fillColor: '#28912E',
            weight: 2,
            opacity: 1,
            fillOpacity: 1
        }
    };
    // show map
    mymap = L.map('map_canvas', {attributionControl: false});
    geojson_map(geojson_file);
    
    // Legend for Max. Temp - Start
    var legend_info = <?php echo json_encode($legend_data); ?>;
    var theLegend = L.control({
        position: 'bottomleft'
    });
    theLegend.onAdd = function(map) {
        var div = L.DomUtil.create('table', 'legend_max_temp');
        //div.style.width = '98%';
        div.style.height = '30px';
        let font_color_ = _name = '';
        labels = [];
        //labels.push( 'in (°C)');
        if(legend_info.length !== 0) {
            $.each(legend_info,function(key,value){
                if(value.max_val === null && value.min_val !== null){
                    font_color_ = value.color;
                    _name = '<'+value.min_val;
                } else if(value.min_val === null && value.max_val !== null ){
                    font_color_ = value.color;
                    _name = '>'+value.max_val;
                } else if(value.min_val !== null && value.max_val !== null){
                    font_color_ = value.color;
                    _name = value.legend_name;
                }
                labels.push( '<i style="background-color:'+font_color_+'"></i>'+_name);
            });                        
        }
        div.innerHTML = labels.join('<br>');
        return div;
    };
    theLegend.addTo(mymap);
        
    // Countour - Start
        var theContour = L.control({
            position: 'bottomright'
        });

        theContour.onAdd = function(mymap) {
        var div = L.DomUtil.create('div', 'info legend');
        div.innerHTML += '<img src="<?php echo base_url($contour_legend); ?>" style="display: block;  margin-left:auto; margin-right: auto; width:100%;  ">';
        return div;
    };
    theContour.addTo(mymap);
    // Countour - End
    // Legend for Max. Temp - End

    function getRandomColor() {
        return randomColor({
           luminosity: 'dark',
           format: 'rgba',
           alpha: 1 // e.g. 'rgba(9, 1, 107, 0.5)',
        });
    }

    $('#toggle_right_panel').on("click",function(){
        let c_toogle = $(this).attr('attr-togglev');
        if(c_toogle == 1){ // Right panel is open
            $("#initial_max").addClass('col-md-12');
            $("#initial_max").removeClass('col-md-8');
            $("#hidden_tab").hide("slow");
            $("#toggle_right_panel").attr("src","<?php echo base_url('stylesheet/images/collapse_open.png'); ?>");
            $(this).attr('attr-togglev',2);
            $(this).attr('title',"open");
        } else if(c_toogle == 2){ // Right panel is close
            $("#initial_max").removeClass('col-md-12');
            $("#initial_max").addClass('col-md-8');
            $("#hidden_tab").show("slow");
            $("#toggle_right_panel").attr("src","<?php echo base_url('stylesheet/images/collapse_close.png'); ?>");
            $(this).attr('attr-togglev',1);
            $(this).attr('title',"close");
        }
        window.mymap.invalidateSize();
    });

    // ldraw - START
    var draw_layer = new L.FeatureGroup();
    mymap.addLayer(draw_layer);
    var drawControlFull = new L.Control.Draw({
        draw: {
            polygon: {
                //allowIntersection: false, // Restricts shapes to simple polygons
                drawError: {
                    color: '#e1e100', // Color the shape will turn when intersects
                    message: '<strong>Oh snap!<strong> you can\'t draw that!' // Message that will show when intersect
                },
                shapeOptions: {
                    color: '#97009c'
                },
                allowIntersection: false,
                showArea: true
            },
            polyline: false,
            circle: false,
            rectangle: false,
            marker: false,
            circlemarker: false,
            poly: {
                allowIntersection: false
            }
        },
        edit: {
            featureGroup: draw_layer,
            remove: true,
            edit:false
        }
    });
    mymap.addControl(drawControlFull);

    mymap.on(L.Draw.Event.CREATED, function (e) {
        var type = e.layerType, layer = e.layer;
        if(type === 'polygon'){
            layer.options.color = getRandomColor();
            var region_to_check = "";
            var _coords = layer.getLatLngs()[0];
            region_to_check += 'INTERSECTS(SHAPE,POLYGON((';
            $.each(_coords,function(ind,val){
                region_to_check += val.lng +' '+ val.lat+',';
            });
            region_to_check += _coords[0].lng +' '+_coords[0].lat+')))'; 
            $("#toggle_right_panel").css("display", "block");
            $("#initial_max").addClass('col-md-8');
            $("#initial_max").removeClass('col-md-12');
            $("#toggle_right_panel").attr("src","<?php echo base_url('stylesheet/images/collapse_close.png'); ?>");
            $("#hidden_tab").show("slow");
            window.mymap.invalidateSize();
            check_polygon_inside_odisha_region(region_to_check);
        }
        mymap.addLayer(layer);
    });
    // Disable "Clear all" option from delete button
    L.EditToolbar.Delete.include({
        removeAllLayers: false
    });
    mymap.on('draw:created', function(e) {draw_layer.addLayer(e.layer);});
    mymap.on("layeradd", function (event) {
        draw_layer.bringToFront();
    });
    mymap.on('draw:deleted', function (e) {
        var layers = e.layers;
        layers.eachLayer(function (layer) {
            var region_to_check = "";
            var _coords = layer.getLatLngs()[0];
            region_to_check += 'INTERSECTS(SHAPE,POLYGON((';
            $.each(_coords,function(ind,val){
                region_to_check += val.lng +' '+ val.lat+',';
            });
            region_to_check += _coords[0].lng +' '+_coords[0].lat+')))'; 
            
            check_polygon_inside_odisha_region(region_to_check,'delete');
        });
    });

    // /ldraw - END
    var geo_server = 'https://geoserver.rimes.int:8443/geoserver/rimes/ows';
    function check_polygon_inside_odisha_region(region_to_check,draw_type=null){
        var layer_type_to_check = 'rimes:blocks_exposure';
        var defaultParameters = {
            service: 'WFS',
            version: '1.0.0',
            CQL_FILTER:region_to_check,
            request: 'GetFeature',
            typeName: layer_type_to_check,
            maxFeatures: 100000,
            outputFormat: 'text/javascript',
            format_options: 'callback: getJson',
            srsName:'EPSG:4326',
        };
        var parameters = L.Util.extend(defaultParameters);
        $.ajax({
            jsonp : false,
            url: geo_server + L.Util.getParamString(parameters),
            dataType: 'jsonp',
            jsonpCallback: 'getJson',
            success: handleJson
        });
        var geojsonlayer;
        var layers_group_arr = [];
        function handleJson(data) {
            console.log("Draw Type"+draw_type);
            var covered_features = data.features;
            geojsonlayer  =L.geoJson(data, {
                style: function(feature) {
                    if(draw_type === 'delete'){
                        return {
                            fillColor: '#C9D5E7',
                            weight: 2,
                            opacity: 1,
                            color: '#3589FF',  //Outline color
                            fillOpacity: 1
                        };
                    } else {
                        //console.log("sddssdsd");
                        return {weight: 2,opacity: 1,color: 'green',fillOpacity: 0.8 }; 
                    }
                },
                onEachFeature: function(feature,layer){
                    console.log(layer);
                    layers_group_arr.push(layer);
                    layer.on('click', function(e) { 
                        selectArea(layer,'leaflet_draw'); 
                    });
                    if(draw_type === 'delete'){
                        //console.log("On delete select");
                        console.log(layers_group_arr);
                        selectArea(layer,'delete');
                    }
                }
            }).addTo(mymap);
            if(draw_type === 'delete'){
                //console.log("after Delete");
            } else {
                setSelectedLayers(layers_group_arr);
            }
        }
    }
    // Load Geojson Map
    function geojson_map(geojson_map_file){
        mymap.setView(center, zoom);
        if( selected_district_id !== ''){
            mymap.removeLayer(leafletMap);
            $("#back_bt").css("display", "block");
            $(".leaflet-control-lasso").attr( "style", "display: none !important;" );
            $("#select_map_tools_gp").css("display", "block");
        }
        if( active_map_type === 'block_from_district' && (selected_district_id === '' || selected_district_id === null) ){
            $("#back_bt").css("display", "none");
            $(".leaflet-control-lasso").attr( "style", "display: none !important;" );
            $("#select_map_tools_gp").css("display", "none");
        }
        leafletMap = new L.GeoJSON.AJAX([geojson_map_file],{
            onEachFeature: clickArea,
            style: polystyle            
        }).addTo(mymap);
    }
    
    // for select by click area
    function clickArea(feature, layer) {
        if( active_map_type === 'block_from_district' && !(selected_district_id)){
            layer.on({
                click: selectDistrict,
                mouseover: highlightFeature,
                mouseout: resetHighlight
            });
        } else{
            layer.on({
                click: selectArea,
                mouseover: highlightFeature,
                mouseout: resetHighlight
            });
        }
    }

    function highlightFeature(e) {
        //console.log(e);
        var layer = e.target;
        info.update(layer.feature.properties);
    }
    function resetHighlight(e) {
        info.update();
    }

    var info = L.control();
    info.onAdd = function (map) {
        this._div = L.DomUtil.create('div', 'info');
        this.update();
        return this._div;
    };

    info.update = function (props) {
        if( active_map_type === 'block_from_district' && !(selected_district_id)){
            this._div.innerHTML = '<h4>Information</h4>' +  (props ?
            '<b> District : ' + props.name +'</b>'
            : 'Hover Over a Block');
        } else {
            this._div.innerHTML = '<h4>Information</h4>' +  (props ?
            '<b> District : ' + props.DIST_NAME + '<br /> Block : ' + props.block_name +'</b>'
            : 'Hover Over a Block');    
        }
    };
    info.addTo(mymap);

    // Layer wise selection -- single click selection
    function selectArea(e,draw = null) {
        console.log(e);
        var layer, feature = loc_id = ''; 
        if(draw == 'leaflet_draw' || draw == 'delete'){
            layer = e;
            feature = e.feature;
            loc_id = feature.properties.id;
            if(draw == 'delete'){
                console.log("resetFcst"+loc_id);
                resetFcst(loc_id);
            }
        } else {
            layer = e.target;
            feature = e.target.feature;
            loc_id = layer.feature.properties.id;
        }
        //console.log(loc_id);
        if (checkExistsLayers(feature)) {
            console.log('Exist');
            map_set_color = map_color(loc_id);
            map_layer_set_style = layer.setStyle(map_set_color);
            for(var i=0; i<g_layer_list_temp.length;i++){
                if(loc_id == g_layer_list_temp[i].feature.properties.id){
                    var index_to_delete = i;
                    g_layer_list_temp.splice(index_to_delete,1);
                }
            }
            removerlayers(feature, setStyleLayer, layer, map_layer_set_style);
        } else {
            console.log("Not exist");
            setSelectedLayers(layer);
            map_set_color = map_color(loc_id);
            g_layer_list_temp.push(layer);
            addLayers(feature, setStyleLayer, layer, stylelayer.selected);
        }
        //console.log(g_layer_list_temp.length);
        if (g_layer_list_temp.length == 0){
            $("#initial_max").addClass('col-md-12');
            $("#initial_max").removeClass('col-md-8');
            $("#hidden_tab").hide("slow");
            $("#toggle_right_panel").attr("src","<?php echo base_url('stylesheet/images/collapse_open.png'); ?>");
            $("#toggle_right_panel").attr("title","close");
            $("#toggle_right_panel").hide("slow");
            window.mymap.invalidateSize();
        }
    }
    
    function selectDistrict(e){
        // e = event
        var lat;
        var lng;
        district_loc_id = e.target.feature.properties.id;
        
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('ValueAddition/HeatwaveSetAlert/Block_from_district'); ?>",
            data: {district_loc_id: district_loc_id},
            dataType: 'json',
            success:function(data){
                geojson_file = data.geojson_file;
                lat_lng = (data.lat_lng).split(',');
                lat = Number(lat_lng[0]);
                lng = Number(lat_lng[1]);
                center = [lat, lng];
                zoom = data.map_zoom;
                selected_district_id = data.selected_district_id;
                
                geojson_map(geojson_file);
            }
        });
    }
    
    function polystyle(feature) {
        loc_id = feature.properties.id;
        if(active_map_type === 'block_from_district' && (selected_district_id === '' || selected_district_id === null)){
            return {
                weight: 2,
                color: '#868686',  //Outline color
                fillOpacity: 0.6
            };
        } else{
            return map_color(loc_id);
        }
    }
    
    function map_color(block){
        var map_set_style;
        if(block){
            if ($.inArray(block, tx_fcst_updated_data_arr) !== -1)
            {
                map_set_style = {  weight: 2,opacity: 1,fillColor: '#ff1493',fillOpacity: 1};
            } else {
                map_set_style =  {  fillColor: '#C9D5E7', weight: 2, opacity: 1, color: '#3589FF',   fillOpacity: 1  };
            }
        }
        //console.log(map_set_style);
        return map_set_style;
    }
    
    function map_area_selected_color(){
        leafletMap.eachLayer(function(layer) {
            if (layer instanceof L.Path) {
                loc_id = layer.feature.properties.id;
                console.log(loc_id);
                map_set_color = map_color(loc_id);
                layer.setStyle(map_set_color);
            }
        });
    }
    
    function checkExistsLayers(feature) {
        console.log(feature);
        console.log(featuresSelected);
        var result = false;
        for (var i = 0; i < featuresSelected.length; i++) {
            if (featuresSelected[i].loc_id === feature.properties.id) {
                result = true;
                break;
            }
        };
        return result;
    }
    
    function setStyleLayer(layer, styleSelected) {
        console.log(styleSelected);
        layer.setStyle(styleSelected);
    }
   
    function addLayers(feature, callback) {
        //console.log("From single click");
        $("#toggle_right_panel").css("display", "block");
        $("#initial_max").addClass('col-md-8');
        $("#initial_max").removeClass('col-md-12');
        $("#hidden_tab").show("slow");
        $("#toggle_right_panel").attr("title","close");
        $("#toggle_right_panel").attr("src","<?php echo base_url('stylesheet/images/collapse_close.png'); ?>");
        window.mymap.invalidateSize();
        var historyResult = tx_fcst_history_arr.find( ({ block_id }) => parseInt(block_id) === feature.properties.id );
        var tmpResult = tmpLocSetAlert.find( ({ selected_loc_id }) => selected_loc_id === feature.properties.id );
        featuresSelected.push({
            loc_id: feature.properties.id,
            feature: feature,
            tx_fcst: (!(tmpResult)) ? ( (!(historyResult)) ? tx_fcst_list[feature.properties.id] : historyResult.tx_dynamic ) : tmpResult.selected_tx_fcst_dynamic,
            tx_fcst_dynamic: (!(tmpResult))? ( (!(historyResult)) ? tx_fcst_list[feature.properties.id] : historyResult.tx_dynamic ) : $("#fcst_id_"+feature.properties.id).val(),
            tx_normal: tx_normal_list[feature.properties.id],
            alert: (!(tmpResult)) ? ((!(historyResult)) ? 0 : historyResult.warning_level_id) : tmpResult.selected_alert
        });
        locSelected.push({
            loc_id: feature.properties.id,
            loc_name: block_list[loc_id],
            tx_fcst: (!(tmpResult)) ? ( (!(historyResult)) ? tx_fcst_list[feature.properties.id] : historyResult.tx_dynamic ) : tmpResult.selected_tx_fcst_dynamic,
            tx_fcst_dynamic: (!(tmpResult))? ( (!(historyResult)) ? tx_fcst_list[feature.properties.id] : historyResult.tx_dynamic ) : $("#fcst_id_"+feature.properties.id).val(),
            tx_normal: tx_normal_list[feature.properties.id],
            alert: (!(tmpResult)) ? ((!(historyResult)) ? 0 : historyResult.warning_level_id) : tmpResult.selected_alert
        });
        setSelectedTable(featuresSelected);
        callback(arguments[2], arguments[3]);
    }
     
    function removerlayers(feature, callback) {
        console.log("IN removerlayers");
        console.log(callback);
        featuresSelected = featuresSelected.filter(obj => obj.loc_id !== feature.properties.id);
        locSelected = locSelected.filter(obj => obj.loc_id !== feature.properties.id);
        setSelectedTable(featuresSelected);
        console.log(arguments);
        callback(arguments[2], arguments[3]);
    }

// for both select function
    function setSelectedLayers(layers) {
        console.log("Herer after single click block");
        // for free hand drawing
        if(layers.length > 0){
            layers.forEach(layer => {
                if (layer instanceof L.Path) {
                    layer.setStyle({weight: 1, color: 'green', fillOpacity: 0.8 });
                }
            });
        }
        for(var i = 0; i < layers.length; i++){
            g_layer_list_temp.push(layers[i]);
            var historyResult = tx_fcst_history_arr.find( ({ block_id }) => parseInt(block_id) === layers[i].feature.properties.id );
            var tmpResult = tmpLocSetAlert.find( ({ selected_loc_id }) => selected_loc_id === layers[i].feature.properties.id );
            if( locSelected.includes(layers[i].feature.properties.id) === false && (layers[i].feature.properties.id) ){
                featuresSelected.push({
                    loc_id: layers[i].feature.properties.id,
                    feature: layers[i].feature,
                    tx_fcst: (!(tmpResult)) ? ( (!(historyResult)) ? tx_fcst_list[layers[i].feature.properties.id] : historyResult.tx_dynamic ) : tmpResult.selected_tx_fcst_dynamic,
                    tx_fcst_dynamic: (!(tmpResult))? ( (!(historyResult)) ? tx_fcst_list[layers[i].feature.properties.id] : historyResult.tx_dynamic ) : $("#fcst_id_"+layers[i].feature.properties.id).val(),
                    tx_normal: tx_normal_list[layers[i].feature.properties.id],
                    alert: (!(tmpResult)) ? ((!(historyResult)) ? 0 : historyResult.warning_level_id) : tmpResult.selected_alert
                });
                locSelected.push({
                    loc_id: layers[i].feature.properties.id,
                    loc_name: layers[i].feature.properties.block_name,
                    tx_fcst: (!(tmpResult)) ? ( (!(historyResult)) ? tx_fcst_list[layers[i].feature.properties.id] : historyResult.tx_dynamic ) : tmpResult.selected_tx_fcst_dynamic,
                    tx_fcst_dynamic: (!(tmpResult))? ( (!(historyResult)) ? tx_fcst_list[layers[i].feature.properties.id] : historyResult.tx_dynamic ) : $("#fcst_id_"+layers[i].feature.properties.id).val(),
                    tx_normal: tx_normal_list[layers[i].feature.properties.id],
                    alert: (!(tmpResult)) ? ((!(historyResult)) ? 0 : historyResult.warning_level_id) : tmpResult.selected_alert
                });

            }
        } 
        $("#_add_temp_value").show("slow");
        $("#_subtract_temp_value").show("slow");
        setSelectedTable(featuresSelected);
    }

    function removeDuplicateLayers(arrs){
        var result = [];
        $.each(arrs, function (i, e) {
            var matchingItems = $.grep(result, function (item) {
                return item.loc_id === e.loc_id;
            });
            if (matchingItems.length === 0) result.push(e);
        });
        return result;
    }
    
    function getSelectOptions(value) {
        var select_alert_dropdown = $("<select><option value='0'>Select Alert</option><option value='1'>No Heatwave</option><option value='2'>Heatwave</option><option value='3'>Severe Heatwave</option></select>");
        if (value) {
          select_alert_dropdown.val(value).find(':selected').attr('selected', true);
        }
        return select_alert_dropdown.html();
    }

    function setSelectedTable(data_list){
        data_list = removeDuplicateLayers(data_list);
        selectedResult.innerHTML = data_list.length ? '<span style="font-size: 16px;"><b>Selected </b>'+data_list.length+' <b>blocks</b></span>': '';
        var area_txt = '';
        for(var i = 0; i < data_list.length; i++){
            loc_id = parseInt(data_list[i].loc_id);
            tx_fcst = parseFloat(data_list[i].tx_fcst);
            alert_status = data_list[i].alert;
            if( i === 0 ){
                area_txt += getTBHeader('selectedAreaTBResult');
            }
            loc_name = block_list[loc_id];
            area_txt += '<tr>\n\
                            <td style="display:none;">'+loc_id+'</td>\n\
                            <td>&nbsp;'+loc_name+'&nbsp;</td>\n\
                            <td>'+tx_normal_list[loc_id]+'</td>\n\
                            <td><input id="fcst_id_'+loc_id+'" type="number" style="width: 5em" value="'+tx_fcst+'">&nbsp;&nbsp;&nbsp;<a id="reset_fcst_'+loc_id+'" onclick="resetFcst('+loc_id+')"><b><i class="ion-refresh"></i></b></a></td>\n\
                            <td>'+alert_status+'</td>\n\
                            <input type="hidden" id="hidden_normal_'+loc_id+'" value="'+tx_normal_list[loc_id]+'"/>\n\
                            <input type="hidden" id="hidden_fcst_id_'+loc_id+'" value="'+tx_fcst+'"/>\n\
                        </tr>';
        }
        area_txt += getTBFooter();
        selectedAreaTBResultPart.innerHTML = area_txt;
        $("#set_alert_bt").css("display", "block");
        $("#group_name_polygon").css("display", "block");
        $("#group_name_polygon_tab").css("display", "block");
        if(data_list.length === 0){
            $("#set_alert_bt").css("display", "none");
            $("#group_name_polygon").css("display", "none");
            $("#group_name_polygon_tab").css("display", "none");
        }
        else{
            DataTablesFormat('#selectedAreaTBResult');
        }
    }
   
    $(function() {
        // Delete Polygon
        $("body").on("click","button[id^='delete_poly_']",function (e) {
            //console.log("sssd");
            var _layer_g_dtls;
            var _layer_g_index;
            let _poly_btn_id = $(this).attr("id");
            let _poly_no = _poly_btn_id.slice(12);
            //console.log("_poly_no- "+_poly_no);
            console.log(g_layer_list_main);
            for(var s=0; s< g_layer_list_main.length; s++){
                if(g_layer_list_main[s].poly_no == _poly_no){
                    _layer_g_dtls = g_layer_list_main[s].layers;
                    _layer_g_index = s;
                }
            }
            //console.log("Remove index - : "+_layer_g_index);
            //console.log(_layer_g_dtls);
            if(_layer_g_dtls.length>0){
                for(var l = 0; l < _layer_g_dtls.length; l++){
                    //console.log(_layer_g_dtls[l]);
                    var blk_to_reset = _layer_g_dtls[l].feature.properties.id;
                    //console.log(_layer_g_dtls[l].feature.properties.id);
                    resetFcst(blk_to_reset);
                    var _layer_to_remove = _layer_g_dtls[l];
                    _layer_to_remove.setStyle({
                        fillColor: '#C9D5E7',
                        weight: 2,
                        opacity: 1,
                        color: '#3589FF',  //Outline color
                        fillOpacity: 1
                    });
                }
                g_layer_list_main.splice(_layer_g_index, 1); // remove 4th row
                //console.log(g_layer_list_main);
                //console.log($(this).parent().parent().hide("slow"));
                $(this).parent().parent().hide("slow");
                //console.log(_group_name_arr);
                
                for(var g=0;g<_group_name_arr.length;g++){
                    //var group_name_to_delete = _group_name_arr[g].poly_no;
                    if(_poly_no == _group_name_arr[g].poly_no){
                        //console.log("_poly_no"+_poly_no);
                        //console.log("GNAME to de:"+g);
                        _group_name_arr.splice(g,1);
                    }
                }
                console.log(_group_name_arr);
                for(var l=0;l<_layer_store_temp.length;l++){
                    //var layer_store_to_delete = _layer_store_temp[l].poly_no;
                    if(_poly_no == _layer_store_temp[l].poly_no){
                        _layer_store_temp.splice(l,1);
                    }
                }
            }
            //console.log(tmpLocSetAlert);
            for(var q=0; q<tmpLocSetAlert.length; q++){
                for(var p=0; p<_layer_g_dtls.length;p++){
                    //if(_layer_g_dtls[l].)
                    var _layer_dtls_to_remove = _layer_g_dtls[p].feature.properties;
                    //console.log(_layer_dtls_to_remove);
                    var id_to_delete;
                    if(_layer_dtls_to_remove.blk_id){
                        id_to_delete = _layer_dtls_to_remove.blk_id;
                    } else {
                        id_to_delete = _layer_dtls_to_remove.id;
                    }
                    if(id_to_delete == tmpLocSetAlert[q].selected_loc_id){
                        //console.log('Remove');
                        var indx_to_remove = q;
                        tmpLocSetAlert.splice(indx_to_remove, 1); // remove 4th row
                    }
                }
            }

            //console.log(tmpLocSetAlert);
            if(tmpLocSetAlert.length === 0){
                // Hide()
                selectedAlertTBResultPart.innerHTML = '';
                $('#confirm_alert_bt').hide();

            }
            //var index = g_layer_list_main.indexOf(item);
            
            //console.log(_poly_no);
            //console.log(layer_dtls);
        });
        // Edit polygon
        $("body").on("click","button[id^='edit_poly_']",function (e) {
            $("#enter_add_subtract_temp_value").hide("slow");
            $("#enter_add_subtract_temp_value").hide();
            $("#enter_add_subtract_temp_value").val("");
            $("#enter_add_subtract_temp_value").show("slow");
            var temp_arr = [];
            var poly_dtls;
            var poly_index;
            $("#temp_extension_block").html("");
            let _poly_btn_id = $(this).attr("id");
            let _poly_no = _poly_btn_id.slice(10);
            //var poly_dtls = _layer_store_temp[_poly_no];

            for(var s=0; s< _layer_store_temp.length; s++){
                if(_layer_store_temp[s].poly_no == _poly_no){
                    poly_dtls = _layer_store_temp[s].layer_details;
                    poly_index = s;
                }
            }
            $("#dialog_temp_extension_block").dialog({
                closeOnEscape: false,
                open: function(event, ui) {
                    $(".ui-dialog-titlebar-close", ui).hide();
                },
                closeOnEscape: false,
                draggable: true,
                resizable: true,
                title: 'Alert View',
                width: 1000,
                modal: true,
            });

            for(var i=0;i<tmpLocSetAlert.length;i++){
                for(var j=0;j<poly_dtls.length;j++){
                    if(tmpLocSetAlert[i].selected_loc_id == poly_dtls[j].loc_id){
                        temp_arr.push(tmpLocSetAlert[i]);
                        _update_temp_data.push(tmpLocSetAlert[i]);
                    }
                }
            }
            var area_txt = '';
            area_txt += getTBHeader('selectedAreaTBResultEdit');
            for(var t=0;t<temp_arr.length;t++){
                loc_id = temp_arr[t].selected_loc_id;
                //loc_name = temp_arr[t].selected_loc_name;
                loc_name = block_list[loc_id];
                tx_fcst = parseFloat(temp_arr[t].selected_tx_fcst_dynamic);
                alert_status = temp_arr[t].selected_alert;
                area_txt += '<tr>\n\
                                <td style="display:none;">'+loc_id+'</td>\n\
                                <td>&nbsp;'+loc_name+'&nbsp;</td>\n\
                                <td>'+tx_normal_list[loc_id]+'</td>\n\
                                <td><input id="fcst_id_'+loc_id+'" type="number" style="width: 5em" value="'+tx_fcst+'">&nbsp;&nbsp;&nbsp;<a id="reset_fcst_'+loc_id+'" onclick="resetFcst('+loc_id+')"><b><i class="ion-refresh"></i></b></a></td>\n\
                                <td>'+alert_status+'</td>\n\
                                <input type="hidden" id="hidden_normal_'+loc_id+'" value="'+tx_normal_list[loc_id]+'"/>\n\
                                <input type="hidden" id="hidden_fcst_id_'+loc_id+'" value="'+tx_fcst+'"/>\n\
                            </tr>';
            }
            area_txt += getTBFooter();
            area_txt += '<div class="row"><div class="column">\n\
                            <button id="_add_temp_value" type="button" class="btn btn-success btn-sm"><b><i class="ion-ios-plus"></i>&nbsp;&nbsp;Add</b></button>\n\
                            <button id="_subtract_temp_value" type="button" class="btn btn-success btn-sm"><b><i class="ion-ios-minus"></i>&nbsp;&nbsp;Subtract</b></button>\n\
                            <input id="enter_add_subtract_temp_value_dialog" type="number" style="display: none;" step="0.01"  ></input>\n\
                            <input type="hidden" id="flag_add_subtract" value="0">\n\
                        </div>';
            area_txt += '<div class="column">\n\
                            <button id="_save_dialog_data" type="button" class="btn btn-success btn-sm"><b><i class="ion-ios-plus"></i>&nbsp;&nbsp;Save & Close</b></button>\n\
                        </div></div>';
            $("#temp_extension_block").html(area_txt);
            DataTablesFormat('#selectedAreaTBResultEdit');
        });
    });
    
    function resetFcst(loc_id){
        let reset_val = tx_fcst_list[loc_id];
        let _block_id = loc_id;
        $("#fcst_id_"+loc_id).val(tx_fcst_list[loc_id]);
        change_map_forecast_max_temp(_block_id,reset_val);
    }
    
    function resetSelectedArea() {
        console.log("resetSelectedArea");
        $("#_add_temp_value").hide("slow");
        $("#_subtract_temp_value").hide("slow");
        $("#enter_add_subtract_temp_value").hide("slow");
        map_area_selected_color();
        area_txt = '';
        selectedResult.innerHTML = '';
        selectedAreaTBResultPart.innerHTML = '';
        featuresSelected = [];
        locSelected = [];
        $("#set_alert_bt").css("display", "none");
        $("#group_name_polygon").css("display", "none");
        $("#group_name_polygon_tab").css("display", "none");
    }

    function resetSelectedAreaWithoutMapColor() {
        console.log("resetSelectedAreaWithoutMapColor");
        $("#_add_temp_value").hide("slow");
        $("#_subtract_temp_value").hide("slow");
        $("#enter_add_subtract_temp_value").hide("slow");
        area_txt = '';
        selectedResult.innerHTML = '';
        selectedAreaTBResultPart.innerHTML = '';
        featuresSelected = [];
        locSelected = [];
        $("#set_alert_bt").css("display", "none");
        $("#group_name_polygon").css("display", "none");
        $("#group_name_polygon_tab").css("display", "none");
    }
    
    $("#back_bt").click(function() {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('ValueAddition/HeatwaveSetAlert/Block_from_district'); ?>",
            data: {district_loc_id: ''},
            dataType: 'json',
            success:function(data){
                geojson_file = data.geojson_file;
                lat_lng = (data.lat_lng).split(',');
                lat = Number(lat_lng[0]);
                lng = Number(lat_lng[1]);
                center = [lat, lng];
                zoom = data.map_zoom;
                selected_district_id = data.selected_district_id;
                geojson_map(geojson_file);
            }
        });
    });

    $("body").on("click","#_save_dialog_data,.ui-icon-closethick",function(){

        $("#enter_add_subtract_temp_value").hide("slow");
            $("#enter_add_subtract_temp_value").hide();
            $("#enter_add_subtract_temp_value").val("");
            $("#enter_add_subtract_temp_value").show("slow");
        for(var i = 0; i < _update_temp_data.length; i++){
            sel_loc_id_selected = parseInt(_update_temp_data[i].selected_loc_id);
            //console.log(sel_loc_id_selected);
            sel_loc_name_selected = block_list[sel_loc_id_selected]; 
            sel_loc_fcst_selected = _update_temp_data[i].selected_fcst;
            sel_loc_fcst_dynamic = $("#fcst_id_"+sel_loc_id_selected).val();
            sel_loc_fcst_normal = tx_normal_list[sel_loc_id_selected];
            sel_loc_alert_selected = $("#mySelect_"+sel_loc_id_selected).val(); //locSelected[i].alert;
            for(q=0; q<tmpLocSetAlert.length; q++){
                if(tmpLocSetAlert[q].selected_loc_id == sel_loc_id_selected){
                    tmpLocSetAlert[q].selected_tx_fcst_dynamic = sel_loc_fcst_dynamic;
                    tmpLocSetAlert[q].selected_alert = sel_loc_alert_selected;
                }
            }
        }
        _update_temp_data = [];
        $('#dialog_temp_extension_block').dialog('close');

    })

    function checkValue_exist_or_not(value,arr){
        var status = 1; // Not exist
        for(var i=0; i<arr.length; i++){
            var name_to_check = arr[i].g_name;
            if(value == name_to_check){
                status = 2; // exist
                break;
            }
        }
        return status;
    }
    $("#set_alert_bt").click(function(_event) {
        var _group_name = '';
        var _group_name_exist = 1;
        _group_name = $("#group_name_polygon").val();
        if(_group_name == ""){
            _event.preventDefault();
            alert("Enter a name for polygon group.");
            return false;
        }
        _group_name_exist = checkValue_exist_or_not(_group_name,_group_name_arr);
        if(_group_name_exist == 2){
            alert("This name is already exist. Please use different one.");
            return false;
        }
        //console.log(draw_layer.getLayers());
        if(mymap.hasLayer(draw_layer)){
            draw_layer.eachLayer(
                function(l){
                    draw_layer.removeLayer(l);
            });
        }  
        //console.log(draw_layer.getLayers());
        var _temp_g_name = [];
        _temp_g_name = {'poly_no':_count_poly,'g_name':_group_name};
        _group_name_arr.push(_temp_g_name);
        //_group_name_arr[_count_poly] = _group_name;
        //console.log(_group_name_arr);
        console.log(locSelected);
        locSelected = removeDuplicateLayers(locSelected);
        for(var i = 0; i < locSelected.length; i++){
            loc_id_selected = parseInt(locSelected[i].loc_id);
            //loc_name_selected = locSelected[i].loc_name;
            loc_name_selected = block_list[loc_id_selected]; 
            loc_fcst_selected = locSelected[i].tx_fcst;
            var chk_dynamic_val = $("#fcst_id_"+loc_id_selected).val();
            console.log(chk_dynamic_val);
            if(!chk_dynamic_val || chk_dynamic_val.length === 0) {
                loc_fcst_dynamic = locSelected[i].tx_fcst;
                loc_alert_selected = locSelected[i].alert;
            } else {
                loc_fcst_dynamic = $("#fcst_id_"+loc_id_selected).val();
                loc_alert_selected = $("#mySelect_"+loc_id_selected).val(); //locSelected[i].alert;
            }
            //loc_fcst_dynamic = $("#fcst_id_"+loc_id_selected).val();
            loc_fcst_normal = tx_normal_list[loc_id_selected];
            locSelected[i].alert = HeatwaveAlertCriteria(loc_id_selected, loc_fcst_dynamic, loc_fcst_normal);
            //loc_alert_selected = $("#mySelect_"+loc_id_selected).val(); //locSelected[i].alert;
            
            if( tmpLocSetAlert.find( ({ selected_loc_id }) => selected_loc_id === loc_id_selected) ){
                tmpLocSetAlert_index = tmpLocSetAlert.findIndex( ({ selected_loc_id }) => selected_loc_id === loc_id_selected );
                tmpLocSetAlert[tmpLocSetAlert_index].selected_tx_fcst_dynamic = loc_fcst_dynamic;
                tmpLocSetAlert[tmpLocSetAlert_index].selected_alert = loc_alert_selected;
            }
            else{
                tmpLocSetAlert.push({
                    selected_loc_id: loc_id_selected,
                    selected_loc_name: loc_name_selected,
                    selected_fcst: loc_fcst_selected,
                    selected_tx_fcst_dynamic: loc_fcst_dynamic,
                    selected_tx_normal_val: loc_fcst_normal,
                    selected_alert: loc_alert_selected
                });
            }
        }
        var _local_temp = [];
        _local_temp = {'poly_no':_count_poly,'layer_details':locSelected};
        _layer_store_temp.push(_local_temp);
        resetSelectedAreaWithoutMapColor();
        // update polygon wise 
        var selected_area_txt = '';
        //console.log(_count_poly);
        if(_layer_store_temp.length > 0){
            selected_area_txt += getTBHeaderPolywise('selectedAlertTBResult');
            for(var j = 0, i=1; j < _layer_store_temp.length; j++,i++){
            selected_area_txt += '<tr>\n\
                                    <td>'+_group_name_arr[j].g_name+'</td>\n\
                                    <td>&nbsp; <button type = "button" id="edit_poly_'+_layer_store_temp[j].poly_no+'" class="btn btn-sm" >Edit </button> &nbsp;&nbsp; <button type = "button" id="delete_poly_'+_layer_store_temp[j].poly_no+'" class="btn btn-danger" >Delete </button> &nbsp;</td>\n\
                                  </tr>';
            }
            selected_area_txt += getTBFooter();
            selectedAlertTBResultPart.innerHTML = selected_area_txt;
        }
        //console.log(g_layer_list_temp);
        var _temp = [];
        _temp = {'poly_no':_count_poly,'layers':g_layer_list_temp};
        g_layer_list_main.push(_temp);
        g_layer_list_temp = [];
        _count_poly = _count_poly +1;
        //console.log(g_layer_list_main);
        $("#group_name_polygon").val("");
        if(tmpLocSetAlert.length > 0){
            DataTablesFormatPolyWise('#selectedAlertTBResult');
            $('#confirm_alert_bt').show();
        }
        else{
            $('#confirm_alert_bt').hide();
        }

    });
    
    $("#confirm_alert_bt").click(function() {
        tx_fcst_history_obj = AJaxSaveAlert(tmpLocSetAlert);
        AJAXLatestUpdate(fcst_date, fcst_data_type);
        tx_fcst_history = Object.entries(tx_fcst_history_obj);
        tx_fcst_history_arr = [];
        // Convert to array
        tx_fcst_history.forEach(([key, value]) => {
            tx_fcst_history_arr.push(value);
        });
        getCurrentAlertTB(tx_fcst_history_arr);
        tmpLocSetAlert = [];
        $('#confirm_alert_bt').hide();
        selectedAlertTBResultPart.innerHTML = '';
        map_area_selected_color();
        //return false;
        alert("Saved.");
        window.location.reload();
    });
    
    function AJaxSaveAlert(data_list){
        fcst_date = '<?php echo date('Y-m-d', strtotime("$curr_date")); ?>';
        return data = $.parseJSON($.ajax({
                        type: "POST",
                            url: "<?php echo site_url('ValueAddition/HeatwaveSetAlert/saveAlertData'); ?>",
                            data: {
                                set_alert_list: data_list,
                                fcst_date: fcst_date,
                                fcst_data_type: fcst_data_type
                            },
                        async: false
                        }).responseText);
    }
    
    function AJAXLatestUpdate(fcst_date, fcst_type){
        $.ajax({
                type: "POST",
                url: "<?php echo site_url('ValueAddition/HeatwaveSetAlert/get_updated_info'); ?>",
                data: {
                    fcst_date: fcst_date,
                    fcst_data_type: fcst_type
                },
                dataType: 'json',
                success:function(info){
                    latestUpdateText.innerHTML = info;
                }
        });
    }
    
    function HeatwaveAlertCriteria(loc_id, fcst, normal){
        var region_type = region_types[loc_id];
        var deviation = fcst - normal;
        let heat_alert = ''; // 1 - No Heatwave , 2 - Heatwave, 3 - Severe Hetwave

        // if(fcst !== null && normal !== null){
        //     if(fcst >= 47 && (fcst - normal > 6.4) ){
        //         alert_id = 3;
        //     }
        //     else if((fcst - normal > 6.4)){
        //         alert_id = 3;
        //     }
        //     else if(fcst >= 45 && ( (fcst - normal >= 4.5) && (fcst - normal <= 6.4 ) ) ){
        //         alert_id = 2;
        //     }
        //     else if( (fcst - normal >= 4.5) && (fcst - normal <= 6.4 ) ){
        //         alert_id = 2;
        //     } 
        //     else if(fcst - normal < 4.5){
        //         alert_id = 1;
        //     }
        //     return alert_id;
        // } 
        console.log("Region - "+region_type);
        console.log("Forecast = "+fcst);
        console.log("Deviation = "+deviation);
        <?php if($today_m_d >= '03-01' AND $today_m_d <= '06-10'){ ?>
        if(region_type == 1){ // Hilly
            if(deviation > 6.4){
                console.log("Region type 1 1");
                heat_alert = 3;
            } else if( fcst >= 30 || (deviation >= 4.5 && deviation <= 6.4)){
                heat_alert = 2;
            } else {
                heat_alert = 1;
            }
        } else if (region_type == 2){ // Plain
            if ((fcst >= 40) && (deviation > 6.4)){
                heat_alert = 3;
            } else if (fcst >= 47){
                heat_alert = 3;
            } else if(fcst > 45 && fcst < 47){
                heat_alert = 2;
            } else if ((fcst >= 40) || (deviation >= 4.5 && deviation <= 6.4 )){
                heat_alert = 2;
            }  else {
                heat_alert =1;
            }
        } else if(region_type == 3) { // Coastal
            if(deviation > 6.4) {
                heat_alert = 3;
            } else if (fcst >= 37 || deviation >= 4.5 && deviation <= 6.4){
                heat_alert = 2;
            } else {
                heat_alert = 1;
            }
        }
        <?php } else {?>
            heat_alert = 1;
        <?php }?>
        console.log(heat_alert);
        // if (region_type == 1 && deviation > 6.4){
        //     console.log("Region type 1 1");
        //     heat_alert = 3;
        // } else if (region_type == 1 && fcst >= 30 || deviation >= 4.5 && deviation <= 6.4){
        //     console.log("Region type 1 2");
        //     heat_alert = 2;
        // } else if (region_type == 2 && fcst >= 47){ 
        //     console.log("Region type 2 1");
        //     heat_alert = 3;
        // } else if (region_type == 2 && (fcst >= 40 && deviation > 6.4)){
        //     console.log("Region type 2 2");
        //     heat_alert = 3;
        // } else if (region_type == 2 && (fcst >= 45 && fcst < 47)){
        //     console.log("Region type 2 3");
        //     heat_alert = 2;
        // } else if (region_type == 2 && fcst >= 40 || deviation >= 4.5 && deviation <= 6.4){
        //     console.log("Region type 2 4");
        //     heat_alert = 2;
        // } else if (region_type == 3 && deviation > 6.4){
        //     console.log("Region type 3 1");
        //     heat_alert = 3;
        // } else if (region_type == 3 && fcst >= 37 || deviation >= 4.5 && deviation <= 6.4){
        //     console.log("Region type 3 2");
        //     heat_alert = 2;
        // } else{
        //     console.log("Region Type 0");
        //     heat_alert = 1;
        // }
        console.log("heat_alert--"+heat_alert);
        return heat_alert;
    }
    
    function DataTablesFormat(tb_id){
        $(tb_id).DataTable( {
            "columnDefs": [
                { 
                    "type": "numeric-comma", 
                    targets: 0 
                },
                {"className": "dt-center", "targets": "_all"},
                { 
                    "type": "numeric-comma",
                    targets : 4,
                    "render": function(data, type, row, meta) {
                        if(tb_id == '#selectedAreaTBResult' || tb_id == '#selectedAreaTBResultEdit'){
                           return "<select class='mySelect' id='mySelect_"+row[0]+"' data-col='" + meta.col + "'>" +
                                getSelectOptions(data) + "</select>"; 
                        } else {
                            switch(data) {
                                case '1' : return '<span style="color: #00a65a; font-weight: bold;">No Heatwave Alert</span>'; break;
                                case '2' : return '<span style="color: #f3e411; font-weight: bold;">Heatwave Alert</span>'; break;
                                case '3' : return '<span style="color: #f56954; font-weight: bold;">Severe Heat Alert For The Day</span>'; break;
                                case '4' : return '<span style="color: #f56954; font-weight: bold;">Extreme heat alert for the day</span>'; break;
                                default  : return '<span style="color: #d2d6de; font-weight: bold;">N/A</span>';
                            } 
                        }
                    }
                }
            ],
            "searching": false,
            "scrollY": "200px",
            "paging": false,
            "bInfo" : false,
            "scrollX" : true,
        });
    }

    function DataTablesFormatPolyWise(tb_id){
        $(tb_id).DataTable( {
            "columnDefs": [
                { 
                    "type": "numeric-comma", 
                    targets: 0 
                },
                { 
                    "type": "numeric-comma",
                }
            ],
            "searching": false,
            "scrollY": "200px",
            "paging": false,
            "bInfo" : false,
            "scrollX" : true,
        });
    }
    
    function getTBHeaderPolywise(map_html_id){
        var txt = '';
        txt += '<table border ="1" style="font-size: 16px; width: 100% !important;" id="'+map_html_id+'" class="table table-bordered table-striped">\n\
                        <thead>\n\
                            <tr>\n\
                                <th scope="col">Polygon</th>\n\
                                <th scope="col">Actions</th>';
        txt +=                  '</tr>\n\
                        </thead>\n\
                    <tbody>';
        return txt;
    }

    function getTBHeader(map_html_id){
        var txt = '';
        txt += '<table border ="1" style="font-size: 16px;  width: 100% !important;" id="'+map_html_id+'" class="table table-bordered table-striped">\n\
                        <thead>\n\
                            <tr>\n\
                                <th style="display:none;" scope="col">Block ID</th>\n\
                                <th scope="col">Block Name</th>\n\
                                <th scope="col">Normal Max. Temp.</th>';
        if(map_html_id == "currentAlertTBResult"){
                txt +=                '<th scope="col">Forecast Max. Temp.</th>';
        } else {
             txt +=                '<th scope="col">Fcst. Max. Temp.</th>';
        }   
        if(map_html_id == "selectedAreaTBResult") {
            txt +=              '<th scope="col">Change Alert</th>';
            
        } else {
            txt +=              '<th scope="col">Alert</th>';
        }
        txt +=                  '</tr>\n\
                        </thead>\n\
                    <tbody>';
        return txt;
    }
    
    function getTBFooter(){
        return '</tbody></table>';
    }
    
    function getCurrentAlertTB(data_list){
        var txt = '';
        for(var k = 0; k < data_list.length; k++){
            if( k === 0 ){
                txt += getTBHeader('currentAlertTBResult');
            }
            txt += '<tr>\n\
                        <td style="display:none;">'+data_list[k].block_id+'</td>\n\
                        <td>&nbsp;'+block_list[data_list[k].block_id]+'&nbsp;</td>\n\
                        <td>'+tx_normal_list[data_list[k].block_id]+'</td>\n\
                        <td>'+data_list[k].tx_dynamic+'</td>\n\
                        <td>'+data_list[k].warning_level_id+'</td>\n\
                    </tr>';
        }
        txt += getTBFooter();
        currAlertTBResultPart.innerHTML = txt;
        $("#set_alert_bt").css("display", "block");
        $("#group_name_polygon").css("display", "block");
        $("#group_name_polygon_tab").css("display", "block");
        if(data_list.length === 0){
            $("#set_alert_bt").css("display", "none");
            $("#group_name_polygon").css("display", "none");
            $("#group_name_polygon_tab").css("display", "none");
        }
        else{
            DataTablesFormat('#currentAlertTBResult');
        }
    }


    // Add to all layer dynamically 
    $("body").on("click","#_add_temp_value",function(){
        console.log("on click add dialouge");
        $("#enter_add_subtract_temp_value").hide("slow");
        $("#enter_add_subtract_temp_value").hide();
        $("#enter_add_subtract_temp_value").val("");
        $("#enter_add_subtract_temp_value").show("slow");
        $("#enter_add_subtract_temp_value").attr("placeholder","Add");
        $("#enter_add_subtract_temp_value_dialog").hide("slow");
        $("#enter_add_subtract_temp_value_dialog").val("");
        $("#enter_add_subtract_temp_value_dialog").show("slow");
        $("#enter_add_subtract_temp_value_dialog").attr("placeholder","Add");
        $("#flag_add_subtract").val("1");
    });
    $("body").on("click","#_subtract_temp_value",function(){
        //console.log("on click Subtract");
        $("#enter_add_subtract_temp_value").hide("slow");
        $("#enter_add_subtract_temp_value").val("");
        $("#enter_add_subtract_temp_value").show("slow");
        $("#enter_add_subtract_temp_value").attr("placeholder","Subtract");
        $("#enter_add_subtract_temp_value_dialog").hide("slow");
        $("#enter_add_subtract_temp_value_dialog").val("");
        $("#enter_add_subtract_temp_value_dialog").show("slow");
        $("#enter_add_subtract_temp_value_dialog").attr("placeholder","Subtract");
        $("#flag_add_subtract").val("2");
    });

    $("body").on("keyup","#enter_add_subtract_temp_value,#enter_add_subtract_temp_value_dialog",function(){
        this.value = this.value.replace(/[^0-9\.]/g,'');
        let _final_val = 0;
        let _input_val = parseFloat(this.value);
        let _flag = parseInt($("#flag_add_subtract").val());
        $("input[id^='fcst_id_']").each(function (i, el) {
            console.log(el);
            let _auto_ids = el.id;
            let _block_id = _auto_ids.slice(8);
            let _hidden_values = parseFloat($("#hidden_"+_auto_ids).val());
            let _hidden_normal_value = parseFloat($("#hidden_normal_"+_block_id).val());
            let _auto_id_vals = parseFloat(el.value);
            if(_flag == "1"){
                if(isNaN(_input_val)){
                    _final_val = _hidden_values + 0;
                } else {
                    _final_val = _hidden_values + _input_val;
                }  
            } else if(_flag == "2") {
               if(isNaN(_input_val)){
                    _final_val = _hidden_values - 0;
                } else {
                    _final_val = _hidden_values - _input_val;
                }
            }
            //console.log(_final_val);
            let alert_id_latest = HeatwaveAlertCriteria(_block_id,_final_val,_hidden_normal_value);
            $("#mySelect_"+_block_id).val(alert_id_latest).change();
            $("#"+_auto_ids).val(_final_val);
            
            // Map value change
            change_map_forecast_max_temp(_block_id,_final_val);

        });
    });
    $("body").on("keyup change","input[id^='fcst_id_']",function (e) {
    	//console.log("key up or change");
        let _this_id = $(this).attr("id");
        let _block_id = _this_id.slice(8);
        let _fcst_value = parseFloat($("#fcst_id_"+_block_id).val());
        let _normal_value = parseFloat($("#hidden_normal_"+_block_id).val());
        let alert_id_latest = HeatwaveAlertCriteria(_block_id,_fcst_value,_normal_value);
        $("#mySelect_"+_block_id).val(alert_id_latest).change();
        change_map_forecast_max_temp(_block_id,_fcst_value);
    });

    function change_map_forecast_max_temp(_block_id,_fcst_value){
        let font_color_ = '';
        font_color_ = font_color_for_forecast_temp(_fcst_value);
        let _dynamic_tooltip_val = '<div class="temp_tooltip" style="color: '+font_color_[0]+';background:'+font_color_[1]+'">'+_fcst_value+'</div>';
        $(".forecast_temp_tooltip_cont_"+_block_id).html(_dynamic_tooltip_val);

    }

    let contour_geojson = "<?php echo base_url($contour_geojson); ?>";
    //let contour_geojson = "<?php echo $contour_geojson; ?>";
    var contour_geojson_layer = new L.GeoJSON.AJAX(contour_geojson,
        {
            style: function(ft){
                return { 
                    color: ft.properties['stroke'],
                    width: ft.properties['stroke-width'], // feature.properties['stroke-width'],
                }
        }
    });
    
    // Forecast Max. temp. Tooltip
    let forecast_centroid_geojson = "<?php echo base_url(); ?>DATA/Odisha_block/Odisha_block_centroid.json";
    let forecast_centroid_geojson_layer =  new L.GeoJSON.AJAX(forecast_centroid_geojson,{
        onEachFeature:function(ft,lr){
                let ft_id= ft['properties']['id'];
                let fcst_val = tx_fcst_list[ft_id];
                let font_color_ = "#d2d6de";
                let text_color = 'white';
                /*if ($.inArray(ft_id, tx_fcst_updated_data_arr) !== -1){
                    font_color_ = "#ff851b";
                } else {*/
                    if(fcst_val < 10){
                        font_color_ = '#808080';
                    } else if( fcst_val >= 10 && fcst_val <= 14){
                        font_color_ = '#00FFFF';
                        text_color = 'black';
                    } else if( fcst_val >= 15 && fcst_val <= 19){
                        font_color_ = '#0000FF';
                    } else if( fcst_val >= 20 && fcst_val <= 24){
                        font_color_ = '#00008B';
                    } else if( fcst_val >= 25 && fcst_val <= 29){
                        font_color_ = '#006400';
                    } else if( fcst_val >= 30 && fcst_val <= 34){
                        font_color_ = '#90EE90';
                        text_color = 'black';
                    } else if( fcst_val >= 35 && fcst_val <= 37){
                        font_color_ = '#FFFF00';
                        text_color = 'black';
                    } else if( fcst_val >= 38 && fcst_val <= 40){
                        font_color_ = '#FFD580';
                        text_color = 'black';
                    } else if( fcst_val >= 41 && fcst_val <= 42){
                        font_color_ = '#FFA500';
                        text_color = 'black';
                    } else if( fcst_val >= 43 && fcst_val <= 44){
                        font_color_ = '#f30000';
                    } else if( fcst_val >= 45){
                        font_color_ = '#8B0000';
                    }
                //}
                let tooltip_text=`<div class="temp_tooltip" style="color: ${text_color};background:${font_color_}">${fcst_val}</div>`;
                lr.bindTooltip(tooltip_text, {permanent: true,sticky : true, direction: "center",className: "forecast_temp_tooltip_cont_"+ft_id}).openTooltip();
            }
    }).addTo(mymap);
    
    // Normal temp. Tooltip
    let normal_centroid_geojson = "<?php echo base_url(); ?>DATA/Odisha_block/Odisha_block_centroid.json";
    let normal_centroid_geojson_layer =  new L.GeoJSON.AJAX(normal_centroid_geojson,{
        onEachFeature:function(ft,lr){
                let ft_id= ft['properties']['id'];
                let normal_val = tx_normal_list[ft_id];
                //console.log(normal_val);
                let text_color = 'white';
                let font_color_ = "#000000";
                if(normal_val < 10){
                    font_color_ = '#808080';
                } else if( normal_val >= 10 && normal_val <= 14){
                    font_color_ = '#00FFFF';
                    text_color = 'black';
                } else if( normal_val >= 15 && normal_val <= 19){
                    font_color_ = '#0000FF';
                } else if( normal_val >= 20 && normal_val <= 24){
                    font_color_ = '#00008B';
                } else if( normal_val >= 25 && normal_val <= 29){
                    font_color_ = '#006400';
                } else if( normal_val >= 30 && normal_val <= 34){
                    font_color_ = '#90EE90';
                    text_color = 'black';
                } else if( normal_val >= 35 && normal_val <= 37){
                    font_color_ = '#FFFF00';
                    text_color = 'black';
                } else if( normal_val >= 38 && normal_val <= 40){
                    font_color_ = '#FFD580';
                    text_color = 'black';
                } else if( normal_val >= 41 && normal_val <= 42){
                    font_color_ = '#FFA500';
                    text_color = 'black';
                } else if( normal_val >= 43 && normal_val <= 44){
                    font_color_ = '#FF7F7F';
                } else if( normal_val >= 45){
                    font_color_ = '#8B0000';
                }

                let tooltip_text=`<div class="temp_tooltip" style="color: ${text_color};background:${font_color_}">${normal_val}</div>`;
                lr.bindTooltip(tooltip_text, {permanent: true,sticky : true,direction: "center", className: "temp_tooltip_cont"}).openTooltip();
            }
    });
    
    function font_color_for_forecast_temp(fcst_val){
        let font_color_ = "#d2d6de";
        let text_color = 'white';
        if(fcst_val < 10){
            font_color_ = '#808080';
        } else if( fcst_val >= 10 && fcst_val <= 14){
            font_color_ = '#00FFFF';
            text_color = 'black';
        } else if( fcst_val >= 15 && fcst_val <= 19){
            font_color_ = '#0000FF';
        } else if( fcst_val >= 20 && fcst_val <= 24){
            font_color_ = '#00008B';
        } else if( fcst_val >= 25 && fcst_val <= 29){
            font_color_ = '#006400';
        } else if( fcst_val >= 30 && fcst_val <= 34){
            font_color_ = '#90EE90';
            text_color = 'black';
        } else if( fcst_val >= 35 && fcst_val <= 37){
            font_color_ = '#FFFF00';
            text_color = 'black';
        } else if( fcst_val >= 38 && fcst_val <= 40){
            font_color_ = '#FFD580';
            text_color = 'black';
        } else if( fcst_val >= 41 && fcst_val <= 42){
            font_color_ = '#FFA500';
            text_color = 'black';
        } else if( fcst_val >= 43 && fcst_val <= 44){
            font_color_ = '#f30000';
        } else if( fcst_val >= 45){
            font_color_ = '#8B0000';
        }
        return [text_color, font_color_];
    }


    mymap.on('zoomstart', function () {
        var zoomLevel = mymap.getZoom();
        //console.log(zoomLevel);
        var tooltip = $('.temp_tooltip');
        switch (zoomLevel) {
            case 1:
                tooltip.css('font-size', 1);
                break;
            case 2:
                tooltip.css('font-size', 3);
                break;
            case 3:
                tooltip.css('font-size', 4);
                break;
            case 4:
                tooltip.css('font-size', 6);
                break;
            case 5:
                tooltip.css('font-size', 7);
                break;
            case 6:
                tooltip.css('font-size', 8);
                break;
            case 7:
                tooltip.css('font-size', 9);
                break;
            case 8:
                tooltip.css('font-size', 10);
                break;
            default:
                tooltip.css('font-size', 12);
        }
    });

    var odisha_district = new L.GeoJSON.AJAX("<?php echo base_url(); ?>DATA/Odisha_Dist_line.geojson",
            {
                color: 'brown',
                dashArray: '5, 5', 
                dashOffset: '0',
                weight: 4
            });

    var ctl_odisha_district = L.layerGroup([odisha_district]);
    
    // Coordinates
    L.control.coordinates({
        position:"topright",
        useDMS:false,
        useLatLngOrder:true
    }).addTo(mymap);
    $(".labelFirst").on("click",function(e){ return false;});
    

    var grid_options = {
        gridType: 'distance',
        showMetric: true,
    };
    var scale = L.control.gridscale(grid_options); 
    scale.addTo(mymap);
    var grid_dms = L.grids.dms();

    // Region Wise Filter
    $("#regionals").on("change",function(e){
        e.preventDefault();
        _this = $(this);
        var choosen_region = _this.val();
        //console.log(choosen_region);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('ValueAddition/HeatwaveSetAlert/block_from_region'); ?>",
            data: {region_id: choosen_region},
            dataType: 'json',
            success:function(data){
                //console.log(data);
                resetSelectedArea();
                var _region_ids = data;
                layers = leafletMap._layers;
                var layers_group_arr_region = [];
                var delete_layers_region = [];
                $.each(layers,function(ind,val){
                    var _bk_id = val.feature.properties.id;
                    for(i=0;i<_region_ids.length;i++){
                        if(_region_ids[i].id == _bk_id ){
                            layers_group_arr_region.push(val);
                        }      
                    }
                });
                $.each(layers_group_arr_region, function(feature,layer){
                    checkExistsLayers(layer.feature);
                    selectArea(layer,'leaflet_draw'); 
                });
            }
        });

    });

    $("body").on("click","#filter_less_greater",function (e) {
    	var check_val = $('input[name=less_greater_filter]:checked').val()
        var filter_val = $("#_less_greater_temp_value").val();
        //console.log(featuresSelected);
        var selected_layers = featuresSelected;
        //layers = leafletMap._layers;
        //console.log(layers);
        var filtered_layers_selected = [];
        var delete_layers_region = [];
        console.log(filter_val);
        if(check_val == 1 || check_val == 2){
            $.each(selected_layers,function(ind,val){
                var fcst_val = val.tx_fcst;
                //console.log(fcst_val);
                if(check_val == 1){
                    if(fcst_val <= filter_val){
                        filtered_layers_selected.push(val);
                    }
                } else if(check_val == 2) {
                    if(fcst_val >= filter_val){
                        filtered_layers_selected.push(val);
                    }
                } else {
                    alert("Please select an option first.");
                    return false;
                }            
            });
        } else {
            alert("Please select an option to filter.");
            return false;
        }
        console.log(featuresSelected);
        console.log(filtered_layers_selected);
        setSelectedTable(filtered_layers_selected);
    });

    
    var overlays = {
        'Normal' : normal_centroid_geojson_layer ,
        'Forecast' : forecast_centroid_geojson_layer,
        'Contour Lines' : contour_geojson_layer,
        'District Line': ctl_odisha_district,
        'Block': leafletMap,
        "Grid Line" : grid_dms
    };

    // Overlay layers are grouped
    var groupedOverlays = {
      "Temperature": {
        "Normal": normal_centroid_geojson_layer,
        "Forecast": forecast_centroid_geojson_layer
      },
      "": {
        "Contour Lines": contour_geojson_layer,
        "District Line": ctl_odisha_district,
        "Block": leafletMap,
        "Grid Line": grid_dms,
      }
    };

    var options = {
      // Make the "Temperature" group exclusive (use radio inputs)
      exclusiveGroups: ["Temperature"],
      // Show a checkbox next to non-exclusive group labels for toggling all
      groupCheckboxes: true
    };

    var layerControl = L.control.groupedLayers('',groupedOverlays, options);
    mymap.addControl(layerControl);

    mymap.addControl(new L.Control.Fullscreen());
    //L.control.layers(baseLayers,overlays,{position: 'topright',collapsed:true}).addTo(mymap);


    

</script>
<?php
$this->load->view('default_template/footer_html');
?>