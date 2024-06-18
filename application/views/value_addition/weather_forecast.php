<!-- HTML <head> -->
<?php $this->load->view('Menu/template/header_'); ?>
<?php $this->load->view('Menu/template//sidebar_'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/js/jquery-ui-1.12.1/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.fullscreen.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_map/grouped_layer_control/leaflet.groupedlayercontrol.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/css/va/va.css">  
<style>
    .leaflet-bottom.leaflet-right, .leaflet-bottom.leaflet-left{
        display: inline-flex;
    }
    .lbl-lat,.lbl-lon{
        font-weight:bold;
    }
    .eq-ul-layers li{
        display: -webkit-box;
    }
    .eq-ul-layers {
        font-size: 12px;
    }
    .leaflet-popup-content{
        width: auto !important;
    }
    .d-none {
        display: none !important;
    }
    .div-fault{
        position: absolute !important;
        margin-top: -70px; 
    }
    .div-hazard{
        position: absolute !important;
        margin-top: -150px; 
    }
    .info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; text-align: left;} 
    .info h4 { margin: 0 0 5px; color: #777; }
    .legend {
        line-height: 18px;
        color: #555;
    }
    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 1;
    }
</style> 
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                    $day_attr = array("name" => "day_form", "method" => "get");
                    echo form_open("ValueAddition/WeatherForecast/index/");
                ?>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Model</label>
                            <select name="models" class="custom-select" id="models">
                                <option value="0">Select Model</option>
                                <?php if(!empty($model_list)) { 
                                    foreach($model_list as $key => $val){ 
                                ?>
                                    <option <?= ($val['id'] == $model_choosed) ? "selected" : "" ?> value="<?= $val['id']; ?>">
                                        <?= $val['model_name']; ?>
                                    </option>
                                <?php } }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Parameter</label>
                            <select name="parameter" class="custom-select" id="parameter">
                                <option value="0">Select Parameter</option>
                                    <?php if(!empty($param_list)) { 
                                        foreach($param_list as $key => $val){ 
                                    ?>
                                    <option <?= ($val['id'] == $param_choosed) ? "selected" : "" ?> value="<?= $val['id']; ?>">
                                        <?= $val['parameter_name']; ?>
                                    </option>
                                <?php } }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-block bg-gradient-success btn-sm">Submit</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
                </form>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-body">
                                    <div style="border:#333 1px ridge; overflow: hidden;">
                                        <div id="map_canvas" style="width:100%; height:760px; float: left;" align="center"></div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('Menu/template/footer_js_'); ?>
<script type="text/javascript" src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>   
<script src="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_v1.5.1/leaflet.ajax.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/Leaflet.fullscreen.min.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/js/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/js/va/script.js"></script>
<script src="<?php echo base_url(); ?>stylesheet/js/earthquake/Leaflet.Control.Custom.js"></script>
<script>
    $(document).ready(function(){
        $("#models").on("change",function(_e){
            _e.preventDefault();
            var _this = $(this);
            var choosen_model = _this.val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('ValueAddition/MaxTemp/ajax_param_list'); ?>",
                data: {model_id: choosen_model},
                success:function(data){
                    $("#parameter").html(data);
                }
            });
        });
    });


</script>
<script>
    var parameter_ = '<?php echo $paramName; ?>';
    const ZOOMLEVEL = 5;
    const SLAT = 22.5937;   //Default to INDIA
    const SLONG = 78.9629;               
    const MYCENTER = [SLAT, SLONG]; 
    const   URLTILEMAP_WHITE = "https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png",
            URLTILEMAP_BLACK = "https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png",
            URLTILEMAP_SATELLITE = "https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}",
            URLTILEMAP_OSM = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
    const MWHITE  = L.tileLayer(URLTILEMAP_WHITE, {
                maxZoom: 20
            }),
            MSATELLITE = L.tileLayer(URLTILEMAP_SATELLITE, {
                maxZoom: 20
            }),
            MOSM =  L.tileLayer(URLTILEMAP_OSM, {
                maxZoom: 18
            }),
            MBLACK =  L.tileLayer(URLTILEMAP_BLACK, {
                maxZoom: 20
            });       
    let cbasemap = getLayer("<?php echo $basemap; ?>") // Current basemap
    //**** Initialize Map
    map = L.map('map_canvas', {
        attributionControl: false,
        zoomControl: true,
        zoom: ZOOMLEVEL,
        center: MYCENTER,
        layers: [cbasemap],
        preferCanvas: true // recommended when loading large layers.
    });
    map.addControl(new L.Control.Fullscreen());
    L.control.scale().addTo(map); 
    // Long Lat Control
    L.Control.Watermark = L.Control.extend({
        onAdd: function(map) {
            const div = L.DomUtil.create('div', 'leaflet-control-layers leaflet-control');
            div.innerHTML =   `
                <div class="text-muted p-1 mt-1" style="color:#667 !important">
                    &nbsp;<i class="fa fa-location-arrow f-14"></i>&nbsp;&nbsp;Latitude:<span class="lbl-lat">0</span>&nbsp;Longitude:<span class="lbl-lon">0</span>
                </div>  `
            return div;
        },
    });
    L.control.watermark = function(opts) {
        return new L.Control.Watermark(opts);
    }
    L.control.watermark({ position: 'bottomleft' }).addTo(map);
    function getLayer(layer){
           let slayer;
           switch (layer) {
               case "white":
                   slayer = MWHITE
                   break;
               case "black":
                   slayer = MBLACK
                   break;
               case "satellite":
                   slayer = MSATELLITE
                   break;
               case "osm":
                   slayer = MOSM;
                   break; 
               case "show_contour":
                   slayer = L_CONTOUR;
                   break; 
           }
           return slayer;
       }
    // EVENTS
    map.on('mousemove', function(e) {
        const latLng = getCoordinates(e.latlng);
        $(".lbl-lat").html(latLng[0]);
        $(".lbl-lon").html(latLng[1]);
    });

    // Basemaps Controls
    L.Control.MyControl = L.Control.extend({
            onAdd: function(map) {
                var el = L.DomUtil.create('div', 'leaflet-control-layers leaflet-control');
                el.innerHTML = `
                    <button class="eq-button button-map-control" id="btn-basemap"><i class="fa fa-globe f-14"></i>&nbsp;BASEMAPS</button>
                `;
                return el;
            },
            onClick: function(map) {
            
            },
            onRemove: function(map) {
                // Nothing to do here
            }
        });

        L.control.myControl = function(opts) {
            return new L.Control.MyControl(opts);
        }

        L.control.myControl({
            position: 'bottomright'
        }).addTo(map);
    // Basemap Selection
    L.Control.MyControl = L.Control.extend({
        onAdd: function(map) {
            var el = L.DomUtil.create('div', 'leaflet-control-layers leaflet-control ctrl-basemap');
            el.innerHTML = `
            <div class="basemap__dropdown is-open noselect">
                <span class="options__title">Basemaps</span>
                <div class="basemap__options">
                    <div class="basemap b-switch <?php echo $basemap =='white' ? 'is-active' :'' ?> " title="CartoDB White Basemap" layer="white">
                        <img src="<?php echo base_url(); ?>stylesheet/images/va/white.jpg">
                        <span class="basemap__title">WHITE</span>
                    
                    </div>
                    <div class="basemap b-switch <?php echo $basemap =='black' ? 'is-active' :'' ?>" title="CartoDB Black Basemap" layer="black">
                        <img src="<?php echo base_url(); ?>stylesheet/images/va/black.jpg">
                        <span class="basemap__title">BLACK</span>
                        
                    </div>
                    <div class="basemap b-switch <?php echo $basemap =='satellite' ? 'is-active' :'' ?>" title="Satellite Basemap" layer="satellite">
                        <img src="<?php echo base_url(); ?>stylesheet/images/va/satellite.jpg" >
                        <span class="basemap__title">SATELLITE</span>
                        
                    </div>
                    <div class="basemap b-switch <?php echo $basemap =='osm' ? 'is-active' :'' ?>"  title="OSM Basemap" layer="osm">
                        <img src="<?php echo base_url(); ?>stylesheet/images/va/osm.jpg" >
                        <span class="basemap__title">OSM</span>
                        
                    </div>
                </div>
            </div>
            `;

        
            el.style.position = 'absolute';
            el.style.bottom = "50px";
            el.style.right = "0px";
            L.DomEvent.disableClickPropagation(el);

            return el;
        },

        onRemove: function(map) {
            // Nothing to do here
        }
    });

    L.control.myControl = function(opts) {
        return new L.Control.MyControl(opts);
    }

    L.control.myControl({
        position: 'bottomright'
    }).addTo(map);

    $(document).on('click','#btn-basemap', function() { 
        ctrl_layer =  $(".ctrl-basemap");
        $(".ctrl-layers").hide("slide", {direction: "right"}, 100);
        if (ctrl_layer.is(":visible"))
            ctrl_layer.hide("slide", {direction: "right"}, 100);
        else
            ctrl_layer.show("slide", {direction: "right"}, 100);
    });
    $(document).on('click','.b-switch', function() { 
        const slayer = getLayer($(this).attr('layer'));
        $('.b-switch').removeClass('is-active'); // Remove other class
        $(this).addClass('is-active'); // Add active to selected basemap
        map.removeLayer(cbasemap);	
        map.addLayer(slayer);	
        cbasemap = slayer;
    });

    var district_data = <?php echo json_encode($info); ?>;
    var district_fc = new Array();
    console.log(district_data);
    _geojson_india_district = "<?php echo base_url(); ?>DATA/INDIA_DISTRICT.json";
    var india_district = new L.GeoJSON.AJAX(_geojson_india_district, {
        color: 'black',
        weight: 1,
        style: fill_colour,
        onEachFeature: function (feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight
            });
        }
    });
    var ctl_india_district = L.layerGroup([india_district]);
    ctl_india_district.addTo(map);

    function fill_colour(feature) {

        var district_id = feature.properties.OBJECTID_1;
        console.log(district_id);
        data_fc = district_data[district_id];
        //console.log(data_fc);
        
        var fill_color = '';
        if(parameter_ == 'temp_max'){
            map.removeControl(Humidity_legend );
            map.removeControl(Rainfall_legend);
            map.removeControl(Min_temp_legend);
            Max_temp_legend.addTo(map);
            return style_max_temp(feature);
        } else if(parameter_ == 'temp_min'){
            map.removeControl(Humidity_legend );
            map.removeControl(Rainfall_legend);
            map.removeControl(Max_temp_legend);
            Min_temp_legend.addTo(map);
            return style_min_temp(feature);
        } else if(parameter_ == 'rainfall'){
            map.removeControl(Humidity_legend );
            map.removeControl(Min_temp_legend);
            map.removeControl(Max_temp_legend);
            Rainfall_legend.addTo(map);
            return style_rainfall(feature);
        } else if(parameter_ == 'humidity'){
            map.removeControl(Rainfall_legend );
            map.removeControl(Min_temp_legend);
            map.removeControl(Max_temp_legend);
            Humidity_legend.addTo(map);
            return style_humidity(feature);
        } else if(parameter_ == 'wind_speed'){
            return style_wind_speed(feature);
        } else if(parameter_ == 'cloud_cover'){
            return style_cloud_cover(feature);
        }
        // return {
        //     fillColor: fill_color,
        //     weight: 1,
        //     opacity: 0.6,
        //     color: 'black',
        //     fillOpacity: 1
        // };
    }
    function getColorRainfall(d) {
            return d <= 0 ? '#808080' :
                   d >= 0.01 && d <= 2.49 ? '#90ee90' :
                   d >= 2.50 && d <= 7.59 ? '#008000' :
                   d >= 7.60 && d <= 20.49 ? '#add8e6' :
                   d >= 20.50 && d <= 35.59 ? '#0000ff' :
                   d >= 35.60 && d <= 64.49 ? '#ffff00' :
                   d >= 64.50 && d <= 124.49 ? '#ffd700' :
                   d >= 124.50 && d <= 150.49 ? '#ff8c00' :
                   d >= 150.50 && d <= 204.39 ? '#ff0000' :
                   d >= 204.40  ? '#800000' : '#FFFFFF';
        }
    function style_rainfall(feature, _new) {
        
        var block_id = feature.properties.OBJECTID_1;
        data_fc = district_data[block_id];
        return {
            fillColor: getColorRainfall(data_fc),
            weight: 1,
            opacity: 0.6,
            color: 'black',
            fillOpacity: 1
        };
    }

    function getColorHumidity(d) {
        return (d <= 10) ? '#85006a' :
               (d >= 11 && d<= 20) ? '#790dd7' :
               (d >= 21 && d<= 30) ? '#1f73a8' :
               (d >= 31 && d<= 40) ? '#307bca' :
               (d >= 41 && d<= 50) ? '#00cad4' :
               (d >= 51 && d<= 60) ? '#00c410' :
               (d >= 61 && d<= 70) ? '#8ad303' :
               (d >= 71 && d<= 80) ? '#f6ee07' :
               (d >= 81 && d<= 90) ? '#e9bb00' :
               d >= 91  ? '#f30000' : '#FFFFFF';
    }
    function style_humidity(feature, _new) {
            var block_id = feature.properties.OBJECTID_1;
            data_fc = district_data[block_id];
       
        return {
            fillColor: getColorHumidity(data_fc),
            weight: 1,
            opacity: 0.6,
            color: 'black',
            fillOpacity: 1
        };
    }

    function getColorMaxTemp(d) {
        return (d >= 0 && d<= 10) ? '#808080' :
               (d >= 10 && d<= 14) ? '#00ffff' :
               (d >= 15 && d<= 19) ? '#0000ff' :
               (d >= 20 && d<= 24) ? '#00008b' :
               (d >= 25 && d<= 29) ? '#006400' :
               (d >= 30 && d<= 34) ? '#90ee90' :
               (d >= 35 && d<= 37) ? '#ffff00' :
               (d >= 38 && d<= 40) ? '#ffd580' :
               (d >= 41 && d<= 42) ? '#ffa500' :
               (d >= 43 && d<= 44) ? '#f30000' :
               (d >= 45)  ? '#8b0000' : '#FFFFFF';
    }

    function style_max_temp(feature) {
        var block_id = feature.properties.OBJECTID_1;
        data_fc = district_data[block_id];
        return {
            fillColor: getColorMaxTemp(data_fc),
            weight: 1,
            opacity: 0.6,
            color: 'black',
            fillOpacity: 1
        };
    }

    function getColorMinTemp(d) {
        return (d <= -6) ? '#A52A2A' :
               (d >= -5 && d<= -1) ? '#8B0000' :
               (d >= 0 && d<= 4) ? '#FF0000' :
               (d >= 4 && d<= 9) ? '#FFA500' :
               (d >= 10 && d<= 14) ? '#FED8B1' :
               (d >= 15 && d<= 19) ? '#FFFF00' :
               (d >= 20 && d<= 24) ? '#90EE90' :
               (d >= 25 && d<= 29) ? '#008000' :
               (d >= 30 && d<= 34) ? '#8467D7' :
               (d >= 35)  ? '#800080' : '#FFFFFF';
    }

    function style_min_temp(feature) {
       
            var block_id = feature.properties.OBJECTID_1;
            data_fc = district_data[block_id];
        
        return {
            fillColor: getColorMinTemp(data_fc),
            weight: 1,
            opacity: 0.6,
            color: 'black',
            fillOpacity: 1
        };
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
    
    function getInfo(props){
        console.log(props);
        paramName = '<?php echo $parameter_name; ?>';
        dist_id = props.OBJECTID_1;
        value = district_data[dist_id];
        return '<b> State : ' + props.state + '<br /> District : ' + props.district  + '<br /> Sub Division : ' + props.subdivisio + '<br />' + paramName + ': ' + value +'</b>';
    }
    info.update = function (props) {
        console.log(props);
        this._div.innerHTML = '<h4>Information</h4>' +  (props ? getInfo(props) : 'Hover Over a District');    
    };
    info.addTo(map);

    var Humidity_legend = L.control({position: 'topright'});
    Humidity_legend.onAdd = function (mymap) {
        var div = L.DomUtil.create('div', 'info legend'),
            labels = [];
            labels.push( 'in (%)');
            labels.push( '<i style="background:#85006a"></i> < 10');
            labels.push( '<i style="background:#790dd7"></i> 11 - 20');
            labels.push( '<i style="background:#1f73a8"></i> 21 - 30');
            labels.push( '<i style="background:#307bca"></i> 31 - 40');
            labels.push( '<i style="background:#00cad4"></i> 41 - 50');
            labels.push( '<i style="background:#00c410"></i> 51 - 60');
            labels.push( '<i style="background:#8ad303"></i> 61 - 70');
            labels.push( '<i style="background:#f6ee07"></i> 71 - 80');
            labels.push( '<i style="background:#e9bb00"></i> 81 - 90');
            labels.push( '<i style="background:#f30000"></i> > 91');
        div.innerHTML = labels.join('<br>');
        return div;
    };
    var Rainfall_legend = L.control({position: 'topright'});
    Rainfall_legend.onAdd = function (mymap) {
        var div = L.DomUtil.create('div', 'info legend'),
            labels = [];
            labels.push( 'in (mm)');
            labels.push( '<i style="background:#808080"></i> 0');
            labels.push( '<i style="background:#90ee90"></i> 0.01 - 2.49');
            labels.push( '<i style="background:#008000"></i> 2.50 - 7.59');
            labels.push( '<i style="background:#add8e6"></i> 7.60 - 20.49');
            labels.push( '<i style="background:#0000ff"></i> 20.50 - 35.59');
            labels.push( '<i style="background:#ffff00"></i> 35.60 - 64.49');
            labels.push( '<i style="background:#ffd700"></i> 64.50 - 124.49');
            labels.push( '<i style="background:#ff8c00"></i> 124.50 - 150.49');
            labels.push( '<i style="background:#ff0000"></i> 150.50 - 204.39');
            labels.push( '<i style="background:#800000"></i> >= 204.40');
        div.innerHTML = labels.join('<br>');
        return div;
    };
    var Max_temp_legend = L.control({position: 'topright'});
    Max_temp_legend.onAdd = function (map) {
        var div = L.DomUtil.create('div', 'info legend'),
            labels = [];
            labels.push( 'in (ºC)');
            labels.push( '<i style="background:#808080"></i> 0 - 10');
            labels.push( '<i style="background:#00ffff"></i> 10 - 14');
            labels.push( '<i style="background:#0000ff"></i> 15 - 19');
            labels.push( '<i style="background:#00008b"></i> 20 - 24');
            labels.push( '<i style="background:#006400"></i> 25 - 29');
            labels.push( '<i style="background:#90ee90"></i> 30 - 34');
            labels.push( '<i style="background:#ffff00"></i> 35 - 37');
            labels.push( '<i style="background:#ffd580"></i> 38 - 40');
            labels.push( '<i style="background:#ffa500"></i> 41 - 42');
            labels.push( '<i style="background:#f30000"></i> 43 - 44');
            labels.push( '<i style="background:#8b0000"></i> >= 45');
        div.innerHTML = labels.join('<br>');
        return div;
    };

    var Min_temp_legend = L.control({position: 'topright'});
    Min_temp_legend.onAdd = function (mymap) {
        var div = L.DomUtil.create('div', 'info legend'),
            labels = [];
            labels.push( 'in (ºC)');
            labels.push( '<i style="background:#A52A2A"></i> <-6');
            labels.push( '<i style="background:#8B0000"></i> -5 - -1');
            labels.push( '<i style="background:#FF0000"></i> 0 - 4');
            labels.push( '<i style="background:#FFA500"></i> 4 - 9');
            labels.push( '<i style="background:#FED8B1"></i> 10 - 14');
            labels.push( '<i style="background:#FFFF00"></i> 15 - 19');
            labels.push( '<i style="background:#90EE90"></i> 20 - 24');
            labels.push( '<i style="background:#008000"></i> 25 - 29');
            labels.push( '<i style="background:#8467D7"></i> 30 - 34');
            labels.push( '<i style="background:#800080"></i> > 35');
        div.innerHTML = labels.join('<br>');
        return div;
    };

</script>
<?php $this->load->view('Menu/template/footer_'); ?>