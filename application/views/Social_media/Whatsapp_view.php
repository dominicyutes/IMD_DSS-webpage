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
        zoom: 80%;
        overflow: hidden;
        font-family: "Lato", sans-serif;
    }

    #map {
        margin-top: 1%;
        height: 100vh;
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
            <div class="col-9" style="width: 88%">
                <div id="map"></div>
                <h2>Post to Whatsapp</h2>
                <button type="submit" class="btn btn-primary" id="waCaptureBtn">Get Picture</button>
                <button type="submit" class="btn btn-primary" id="waSendBtn">Send Message</button>
            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    var map = L.map('map').setView([22.79459, 80.06406], 5);
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
                fillColor: 'transparent',
                opacity: 1,
                fillOpacity: 0.0,
                weight: 2
            };
        }
    });

    geojson.on('data:loaded', function() {
        geojson.addTo(map);
    });
    // 
    document.getElementById('waCaptureBtn').addEventListener('click', function() {
        html2canvas($("#map"), {
            useCORS: true,
            allowTaint: false,
            onrendered: function(canvas) {
                var image = Canvas2Image.convertToPNG(canvas);
                var image_data = $(image).attr('src');
                var random_name = "<?php echo date('Y_m_d_H_i_s'); ?>";
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>Whatsapp_controller/Whatsapp_map",
                    data: {
                        base64: image_data,
                        r_file_name: random_name
                    },
                    success: function(data) {
                        console.log("Response from server:", data);
                        data = JSON.parse(data);
                        if (data.status === 'success') {
                            console.log("Image stored successfully in folder:", data
                                .img_path);
                        } else {
                            alert(
                                "Error: Something went wrong. Please check again later."
                            );
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert(
                            "Error: Something went wrong with the request. Please try again later."
                        );
                    }
                });
            }
        });
    });


    document.getElementById('waSendBtn').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo base_url("Whatsapp_controller/Whatsapp_post"); ?>', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            } else {
                console.error('Request failed. Error: ' + xhr.status);
            }
        };
        xhr.send();
    });
    </script>
</body>

</html>