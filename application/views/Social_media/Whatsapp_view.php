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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Bootstrap ends here -->

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




    <style>
    body {
        width: 100%;
        height: 100vh;
        /* zoom: 80%; */
        /* overflow: hidden; */
        overflow-x: hidden;
        font-family: "Lato", sans-serif;
    }

    #map {
        margin-top: 1%;
        height: 78vh;
        width: 100%;
        border: 1px solid black;
    }

    .hidden {
        display: none;
    }

    .font {
        font-variant-position: revert-layer;
        font-family: serif;
        font-size: smaller;
        font-style: normal;
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
            <div class="col-9" style="width: 85%">
                <div class="row">
                    <div class="col-9">
                        <!-- left side starts here -->
                        <h4>WHATSAPP</h4>
                        <div id="map" class="map-canvas"></div>
                    </div><!-- left side ends here  -->

                    <div class="col-3 font">
                        <div class="row">
                            <!-- right side starts here -->
                            <div class="col-8" style="margin-top: 2%;">
                                <input type="checkbox" id="toggleButton">
                                <label for="toggleButton">Auto Message ON/OFF</label>
                            </div>
                            <!-- Log Button -->
                            <div class="col-4" style="margin-top: 2%;">
                                <button
                                    onclick="window.location.href='<?php echo base_url('Facebook_post/log_information'); ?>'"
                                    class="btn btn-info btn-sm">LOG</button>
                            </div>
                            <!--  -->
                        </div>



                        <!-- Choose MC -->
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                style="margin-top: 8%;" data-bs-toggle="dropdown" aria-expanded="false">
                                Choose MC
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">MC 1</a></li>
                                <li><a class="dropdown-item" href="#">MC 2</a></li>
                                <li><a class="dropdown-item" href="#">MC 3</a></li>
                            </ul>
                        </div>
                        <!--  -->

                        <!-- selecting department Auto ON/OFF -->
                        <div class="row">
                            <!-- col-5 starts here -->
                            <div class="col-7">
                                <div class="btn-group dropend">
                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                        style="margin-top: 6%;" data-bs-toggle="dropdown" aria-expanded="false">
                                        MC Groups
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <input type="checkbox" id="heatwave-department">
                                                <label for="heatwave-department">Heatwave Department</label>
                                                <input type="checkbox" id="auto-msg-heatwave">
                                                <label for="auto-msg-heatwave">Auto On/Off</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <input type="checkbox" id="coldwave-department">
                                                <label for="coldwave-department">Coldwave Department</label>
                                                <input type="checkbox" id="auto-msg-coldwave">
                                                <label for="auto-msg-coldwave">Auto On/Off</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <input type="checkbox" id="nowcast-department">
                                                <label for="nowcast-department">Nowcast Department</label>
                                                <input type="checkbox" id="auto-msg-nowcast">
                                                <label for="auto-msg-nowcast">Auto On/Off</label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- Choose Datatype -->
                        <div>
                            <div class="btn-group dropend">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                    style="margin-top: 8%;" data-bs-toggle="dropdown" aria-expanded="false">
                                    Choose DataType
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add New</a></li>
                                    <li><a class="dropdown-item" href="#">Heatwave</a></li>
                                    <li><a class="dropdown-item" href="#">Coldwave</a></li>
                                    <li><a class="dropdown-item" href="#">Nowcast</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->

                        <!-- content box -->
                        <div style="margin-top: 8%;">
                            <lable>Content</lable>
                            <textarea style="width: 95%; height: 8rem;"></textarea>
                        </div>
                        <!--  -->

                        <!-- attachment -->
                        <div style="margin-top: 8%;">
                            <lable>Attachment</lable>
                            <input type="file" />
                        </div>
                        <!--  -->

                        <!-- POST button -->
                        <div style="margin-top: 8%;">
                            <button class="btn btn-success btn-sm" id="getPic">SEND</button> <!-- GET PIC -->
                            <button class="btn btn-primary btn-sm" id="postToWhatsappBtn"
                                style="visibility: hidden">POST</button>
                            <!-- style="visibility:none;" -->
                        </div>
                        <!--  -->


                    </div> <!-- left side ends here -->
                </div>
            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    // var map = L.map('map').setView([22.79459, 80.06406], 4);

    var map = L.map('map', {
        preferCanvas: true
    }).setView([22.79459, 80.06406], 4);

    var geojson;


    var _dist_geojson = "<?php echo base_url('DATA/INDIA_DISTRICT.json'); ?>";
    geojson = new L.GeoJSON.AJAX(_dist_geojson, {
        style: function(feature) {
            return {
                color: 'black',
                fillColor: 'transparent',
                opacity: 1,
                fillOpacity: 0.5,
                weight: 1
            };
        }
    });


    geojson.on('data:loaded', function() {
        geojson.addTo(map);
    });

    // var forecast_date = '<?php echo date('Y'); ?>';

    var now_info = JSON.parse('<?php echo json_encode($info)?>');
    // console.log(now_info);

    var now_info_dist = JSON.parse('<?php echo json_encode($dinfo)?>');
    // console.log(now_info_dist);

    var dist_id;
    var data_fc = new Array();

    // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     maxZoom: 19,
    //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    // }).addTo(map);

    // DATA/INDIA_DISTRICT.json Odisha_Dist
    var india_district_geojson = new L.GeoJSON.AJAX('<?= base_url('DATA/Odisha_Dist.geojson') ?>', {
        color: 'black',
        weight: 1,
        style: fill_color_subbasin,
        onEachFeature: function(feature, layer) {
            // console.log(feature.properties, "feature.properties.id");
            layer.on('mouseover', function(ft) {
                let popup = new L.Popup();
                popup.setLatLng(ft.latlng);
                popup.setContent(getPopUpHTML(feature));
                map.openPopup(popup);
            });
        }
    });
    india_district_geojson.addTo(map);

    function set_popup_content(district_name, _info) {
        _html_popup = "";
        if (district_name != '') {
            _html_popup += '<b> ' + district_name + ' </b><br><br>';
        }

        if (_info['date'] != '') {
            _html_popup += '<b>  Time of issue  : ' + _info['date'] + '<br> ' + _info['toi'] + ' Hrs</b><br>';
        }
        if (_info['vupto'] != '') {
            _html_popup += '<b>  Valied Upto   : ' + _info['vupto'] + ' Hrs </b>';
        }

        return _html_popup;
    }

    function getPopUpHTML(feature) {
        _popup = '';
        dist_id = feature.properties.id;
        district_name = feature.properties.district_name;

        _popup = set_popup_content(district_name, now_info[dist_id]);
        return _popup;
    }

    function fill_color_subbasin(feature) {
        var dist_id = feature.properties.id;
        data_fc[0] = now_info_dist[dist_id];
        // console.log(data_fc[0]);
        if (data_fc[0] === null) {
            color = '#FFFFFF';
            opa = 0.6;
        } else if (Number(data_fc[0]) == 1) {
            color = '#00FF00';
            opa = 0.6;
        } else if (Number(data_fc[0]) == 2) {
            color = '#FFFF00';
            opa = 0.6;
        } else if (Number(data_fc[0]) == 3) {
            color = '#FFA500';
            opa = 0.6;
        } else if (Number(data_fc[0]) == 4) {
            color = '#FF0000';
            opa = 0.6;
        } else {
            color = '#FFFFFF';
            opa = 0.6;
        }
        return {
            fillColor: color,
            fillOpacity: opa,
            strokeColor: 'black',
            strokeWeight: 0.7
        };
    }

    // adding legends to the map
    let _legend = L.control({
        position: 'bottomright'
    });

    _legend.onAdd = function(map) {
        var div = L.DomUtil.create('div', 'info legend'),
            labels = [];
        labels.push(
            '<img src="<?= base_url('assets/twitter_legends/District_nowcast_legend.PNG')?>" width="100px" height="100px" >' +
            '<br>');

        div.innerHTML = labels.join('<br>');
        return div;
    };
    _legend.addTo(map);
    // 


    // getin image name from contoler
    let get_filename;
    if (get_filename) {
        console.log(get_filename, "get_filename from controller");
    }

    //
    document.getElementById('getPic').addEventListener('click', function() {
        html2canvas($("#map"), {
            useCORS: true,
            allowTaint: false,
            onrendered: function(canvas) {
                var image = Canvas2Image.convertToPNG(canvas);
                var image_data = $(image).attr('src');
                var random_name = "<?php echo date('Y_m_d_H_i_s'); ?>";

                var filename = "map_img_" + random_name + ".png";
                get_filename = filename;
                console.log(get_filename, "get_filename");

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>Whatsapp_controller/getPic",
                    data: {
                        base64: image_data,
                        r_file_name: random_name,
                        filename: filename
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        console.log(data.status, "data.status");
                        if (data.status === 'success') {
                            console.log("Post button");

                            // 
                            setTimeout(function() {
                                document.getElementById('postToWhatsappBtn')
                                    .click();
                                console.log("post to whatsapp is clicked");
                            }, 2000);
                            // 
                        } else {
                            alert(
                                "Something went wrong, please check it later"
                            );
                        }
                    }
                });
            }
        });
    });
    // 

    // Post
    document.getElementById('postToWhatsappBtn').addEventListener('click', function() {
        var filename = get_filename;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo base_url("Whatsapp_controller/sendMessage"); ?>', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log("Response from server:", xhr.responseText);
                alert("Message sent successfully ")
            } else {
                console.error('Request failed. Error: ' + xhr.status);
            }
        };

        xhr.send('filename=' + filename);
    });

    // document.getElementById('waSendBtn').addEventListener('click', function() {
    //     var xhr = new XMLHttpRequest();
    //     xhr.open('POST', '<?php echo base_url("Whatsapp_controller/Whatsapp_post"); ?>', true);
    //     xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //     xhr.onload = function() {
    //         if (xhr.status === 200) {
    //             console.log(xhr.responseText);
    //         } else {
    //             console.error('Request failed. Error: ' + xhr.status);
    //         }
    //     };
    //     xhr.send();
    // });
    </script>
</body>

</html>