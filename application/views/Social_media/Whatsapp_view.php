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

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <style>
    body {
        width: 100%;
        height: 100vh;
        /* zoom: 80%; */
        /* overflow: hidden; */
        overflow-x: hidden;
        font-family: "Lato", sans-serif;
    }

    .textFont {
        font-family: 'Archivo', sans-serif;
        font-size: 148%;
        font-weight: 600;
        color: #10464b;
        letter-spacing: 2px;
        margin-top: -1%;
        margin-left: 1%;
    }

    #map {
        margin-top: 1%;
        height: 87vh;
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
                    <div class="col-8">
                        <!-- left side starts here -->
                        <div style="display:flex; margin-top: 1%;margin-right: 1%;">
                            <i class="fa-brands fa-whatsapp fa-xl"></i>
                            <span class="textFont">WHATSAPP</span>
                        </div>
                        <div id="map" class="map-canvas"></div>
                    </div><!-- left side ends here  -->

                    <div class="col-4 font">
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
                            <ul class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                                <li><a class="dropdown-item" href="#" id="mc_agartala"
                                        onclick="setInputValue('MC_Agartala')">MC_Agartala</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Ahmedabad')">MC_Ahmedabad</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Amaravati')">MC_Amaravati</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Bengaluru')">MC_Bengaluru</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setInputValue('MC_Bhopal')">MC_Bhopal</a>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Bhubaneswar')">MC_Bhubaneswar</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Chandigarh')">MC_Chandigarh</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Dehradun')">MC_Dehradun</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Gangtok')">MC_Gangtok</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Hyderabad')">MC_Hyderabad</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setInputValue('MC_Jaipur')">MC_Jaipur</a>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="setInputValue('MC_Kohima')">MC_Kohima</a>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Lucknow')">MC_Lucknow</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setInputValue('MC_Patna')">MC_Patna</a>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="setInputValue('MC_Raipur')">MC_Raipur</a>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="setInputValue('MC_Ranchi')">MC_Ranchi</a>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Shillong')">MC_Shillong</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setInputValue('MC_Shimla')">MC_Shimla</a>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Srinagar')">MC_Srinagar</a></li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="setInputValue('MC_Thiruvanthapuram')">MC_Thiruvanthapuram</a></li>
                            </ul>
                            <input type="text" id="mcInput" placeholder="MC" style="margin-top: 8%; margin-left: 6%;">
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
                                    <li><a class="dropdown-item" href="#" onClick="w_heatwave()">Heatwave</a></li>
                                    <li><a class="dropdown-item" href="#" onClick="w_coldwave()">Coldwave</a></li>
                                    <li><a class="dropdown-item" href="#" onClick="w_nowcast()">Nowcast</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->

                        <!-- message content -->
                        <div id="w_heatwave" style="display:none;">
                            `Heatwave Alert: This is to inform you that ${mc_name} is experiencing a severe heatwave
                            today. As
                            of 2:00 PM, the temperature has been recorded at temperature 45°C, significantly above the
                            average for this period.`
                        </div>
                        <!--  -->

                        <!-- coldwave content -->
                        <div id="w_coldwave" style="display:none;">
                            Coldwave Alert: This is to inform you that ${mc_name} is experiencing a severe coldwave
                            today. As
                            of 2:00 PM, the temperature has been recorded at temperature 1°C, significantly below the
                            average for this period.
                        </div>
                        <!--  -->

                        <!--  -->
                        <div id="w_nowcast" style="display:none;">
                            Nowcast Alert: This is to inform you that ${mc_name} is experiencing a severe heatwave
                            today. As
                            of 2:00 PM, the temperature has been recorded at 45°C, significantly above the average for
                            this period.
                        </div>
                        <!--  -->

                        <!-- content box -->
                        <div style="margin-top: 8%;">
                            <lable>Content</lable>
                            <textarea style="width: 95%; height: 8rem;" id="valueOfContent"></textarea>
                        </div>
                        <!--  -->

                        <!-- attachment Image -->
                        <div id="fileUploadContainer" style="margin-top: 8%;">
                            <lable>Image</lable>
                            <input type="file" id="fileInput" />
                        </div>
                        <!--  -->

                        <!-- attachment Doc -->
                        <div id="fileUploadContainer" style="margin-top: 8%;">
                            <label>Document</label>
                            <input type="file" id="fileInputDoc" />
                        </div>
                        <!--  -->

                        <!-- POST button -->
                        <div style="margin-top: 8%;">
                            <button class="btn btn-success btn-sm" id="getPic">POST</button> <!-- GET PIC -->
                            <button class="btn btn-primary btn-sm" id="postToWhatsappBtn">Dummy Btn</button>
                            <!-- POST -->
                            <button class="btn btn-danger btn-sm" id="ManualWhatsappBtn">Manual</button>
                            <!-- Manual Post -->
                        </div>
                        <!--  -->


                    </div> <!-- left side ends here -->
                </div>
            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    // checking Auto Message is ON/OFF
    document.addEventListener('DOMContentLoaded', function() {
        checkToggleButtonState();

        document.getElementById('toggleButton').addEventListener('change', function() {
            checkToggleButtonState();
        });

        function checkToggleButtonState() {
            var toggleButton = document.getElementById('toggleButton');
            var getPicButton = document.getElementById('getPic');
            var postToWhatsappButton = document.getElementById('postToWhatsappBtn');
            var ManualWhatsappButton = document.getElementById('ManualWhatsappBtn');

            if (toggleButton.checked) {
                getPicButton.style.display = 'inline-block';
                postToWhatsappButton.style.display = 'none';
                ManualWhatsappButton.style.display = 'none';
            } else {
                getPicButton.style.display = 'none';
                postToWhatsappButton.style.display = 'none';
                ManualWhatsappButton.style.display = 'inline-block';
            }
        }
    });

    // Heatwave Content fn
    function w_heatwave() {
        let getValHeat = document.getElementById('w_heatwave').innerText;
        let valOfContent = document.getElementById('valueOfContent');
        valOfContent.value = getValHeat.replace('${mc_name}', mc_name).replace(/\s+/g, ' ');
    }

    function w_coldwave() {
        let getValCold = document.getElementById('w_coldwave').innerText;
        let valOfContent = document.getElementById('valueOfContent');
        valOfContent.value = getValCold.replace('${mc_name}', mc_name).replace(/\s+/g, ' ');
    }

    function w_nowcast() {
        let getValNowcast = document.getElementById('w_nowcast').innerText;
        let valOfContent = document.getElementById('valueOfContent');
        valOfContent.value = getValNowcast.replace('${mc_name}', mc_name).replace(/\s+/g, ' ');
    }
    // var map = L.map('map').setView([22.79459, 80.06406], 4);

    var map = L.map('map', {
        preferCanvas: true,
        zoomDelta: 0.25,
        zoomSnap: 0
    }).setView([22.79459, 80.06406], 4.5);

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

    let mc_name;
    // getting the MC name from Dropdown
    function setInputValue(value) {
        document.getElementById('mcInput').value = value;
        mc_name = value;
    }


    // getin image name from contoler
    let get_filename;
    if (get_filename) {
        console.log(get_filename, "get_filename from controller");
    }

    //get pic or taking screenshot of the map
    document.getElementById('getPic').addEventListener('click', function() {
        if (document.getElementById('toggleButton').checked) {
            // Checkbox is checked: Use html2canvas
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

                                if (document.getElementById('toggleButton').checked) {
                                    setTimeout(function() {
                                        document.getElementById(
                                            'postToWhatsappBtn').click();
                                        console.log(
                                            "post to whatsapp is clicked");
                                    }, 500);
                                }
                            } else {
                                alert("Something went wrong, please check it later");
                            }
                        }
                    });
                }
            });
        }
    });
    // 

    // Post
    document.getElementById('postToWhatsappBtn').addEventListener('click', function() {
        var content = document.getElementById('valueOfContent').value;
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


    // manual post
    const fileInput = document.getElementById('fileInput');
    const fileInputDoc = document.getElementById('fileInputDoc');

    const processFile = (file, callback) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            let base64String = e.target.result;
            base64String = base64String.replace(
                /^data:(application\/[a-zA-Z]+|image\/[a-zA-Z]+);base64,/, '');
            callback(base64String, file.name);
        };
        reader.readAsDataURL(file);
    };

    document.getElementById('ManualWhatsappBtn').addEventListener('click', function() {
        // const valOfContent = document.getElementById('valueOfContent');
        // valOfContent.value = '';

        // Initialize data object
        const data = {
            content: document.getElementById('valueOfContent').value
        };

        // Process image file
        if (fileInput.files.length > 0) {
            processFile(fileInput.files[0], (base64String, filename) => {
                data.base64Image = base64String;

                // Check if both image and document have been processed
                if (fileInputDoc.files.length === 0 || data.base64Document) {
                    sendRequest(data);
                }
            });
        }

        // Process document file
        if (fileInputDoc.files.length > 0) {
            processFile(fileInputDoc.files[0], (base64String, filename) => {
                data.base64Document = base64String;
                data.documentName = filename;

                // Check if both image and document have been processed
                if (fileInput.files.length === 0 || data.base64Image) {
                    sendRequest(data);
                }
            });
        }

        // If no files selected, send request with only content
        if (fileInput.files.length === 0 && fileInputDoc.files.length === 0) {
            sendRequest(data);
        }
    });

    // Function to send AJAX request
    const sendRequest = (data) => {
        console.log(data, "data");
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo base_url("Whatsapp_controller/manualPosting"); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    console.log('Response:', xhr.responseText);
                    document.getElementById('mcInput').value = '';
                    document.getElementById('valueOfContent').value = '';
                    fileInput.value = '';
                    fileInputDoc.value = '';
                } else {
                    console.error('Error:', xhr.status, xhr.statusText);
                    console.error('Response:', xhr.responseText);
                }
            }
        };
        xhr.onerror = function() {
            console.error('Request failed');
        };
        xhr.send(JSON.stringify(data));
    };
    </script>
</body>

</html>