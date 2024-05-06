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

    <style>
    .main_class {
        width: 100%;
        height: 100vh;
        zoom: 80%;
        overflow: hidden;
        font-family: "Lato", sans-serif;
    }

    /* .main_class {
        margin-right: 10px;
        margin-left: 180px;
        padding: 0px 10px;
        margin-top: -856px;
    } */

    .main {
        margin-right: 10px;
        margin-left: 180px;
        padding: 0px 10px;
        margin-top: -856px;
    }


    #map {
        margin-top: 1%;
        height: 100vh;
        width: 100%;
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <div class="fixedHead">
        <!-- Landing_page title logo> -->
        <?php $this->load->view('Menu/Landing_page_top'); ?>
    </div>


    <div class="row">
        <!-- Landing_page sidebar> -->
        <?php $this->load->view('Menu/Landing_page_side'); ?>
        <div style="height: 100%;">

            <div class="main">
                <h1 style="margin-top: 20px; margin-left: 400px;">Rainfall Validation INDIA</h1>
                <div class="content-wrapper">
                    <section class="content">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="active tab-pane" id="showmap">
                                    <div class="post">
                                        <div id="dialog_temp_graph_extension_chart" style="display: none;">
                                            <div id="temp_graph_extension_chart" class="dialog"></div>
                                        </div>
                                        <div class="box-body">
                                            <div style="border:#333 1px ridge; overflow: hidden;">
                                                <div id="map_canvas"
                                                    style="width:100%; height: 721px; float: left;z-index: 0;"
                                                    align="center"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- editing content starts here -->
                <!-- <div class="main_class" style="width: 88%">
                <div id="map" class="map-canvas"></div>
                <div>
                    <div>
                        <h2 style="font-style: italic;">Post to Facebook</h2>
                    </div>
                    <div>
                        <h5 style="font-style: italic;">Note: 1. Click Get Picture and 2. Click POST</h5>
                    </div>
                </div>
                <div>
                    <div>
                        <button class="btn btn-primary" id="getPic">Get Picture</button>
                        <button class="btn btn-primary" id="postToFacebookBtn">POST</button>
                    </div>
                </div>
                </span>
            </div> -->
                <!-- editing content ends here -->

            </div>
        </div>

        <script>
        // let map = L.map('map').setView([22.79459, 80.06406], 5);

        let map = L.map('map', {
            renderer: L.canvas({
                padding: 0
            }),
            zoom: 5,
            center: [22.79459, 80.06406],
        });

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
                    // fillColor: 'transparent',
                    opacity: 0.5,
                    fillOpacity: 0.0,
                    weight: 2,
                };
            }
        });


        geojson.on('data:loaded', function() {
            geojson.addTo(map);
        });
        // 
        function generateColorFromString(str) {
            var hash = 0;
            for (var i = 0; i < str.length; i++) {
                hash = str.charCodeAt(i) + ((hash << 5) - hash);
            }
            var color = '#';
            for (var j = 0; j < 3; j++) {
                var value = (hash >> (j * 8)) & 0xFF;
                color += ('00' + value.toString(16)).substr(-2);
            }
            return color;
        }

        // getin image name from contoler
        let get_filename;
        if (get_filename) {
            console.log(get_filename, "get_filename");
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
                    var filename = "map_img_" + random_name + ".jpeg";
                    get_filename = filename;
                    console.log(get_filename, "get_filename");

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>Facebook_post/getPic",
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
                            } else {
                                alert("Something went wrong, please check it later");
                            }
                        }
                    });
                }
            });
        });

        document.getElementById('postToFacebookBtn').addEventListener('click', function() {
            var filename = get_filename;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo base_url("Facebook_post/post_info"); ?>', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log("Response from server:", xhr.responseText);
                    var regex = /"id":"(\d+)"/;
                    var match = xhr.responseText.match(regex);
                    var idPart = match ? match[0] : "No ID found";
                    if (idPart !== "No ID found") {
                        alert("Successfully posted in FB with ID: " + idPart);
                    }
                } else {
                    console.error('Request failed. Error: ' + xhr.status);
                }
            };

            xhr.send('filename=' + filename);
        });
        </script>
</body>


</html>