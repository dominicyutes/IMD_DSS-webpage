<!DOCTYPE html>
<html>

<head>
    <title>IMD_DSS</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrows-expand-right-alt.css' rel='stylesheet'>

    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <!-- leaflet-panel-layers CSS -->
    <!-- <link rel="stylesheet" href="node_modules/leaflet-panel-layers/leaflet-panel-layers.css" /> -->
    <!-- leaflet-draw CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
    <!-- Include Leaflet fullscreen CSS -->
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
        rel='stylesheet' />
    <!-- Include Leaflet LocationSearch CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <!-- Include Leaflet mouseposition CSS -->
    <link href="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.2.0/src/L.Control.MousePosition.min.css"
        rel="stylesheet">
    <!-- Include Leaflet styleEditor CSS -->
    <link href="https://cdn.jsdelivr.net/npm/leaflet-styleeditor@0.1.21/dist/css/Leaflet.StyleEditor.min.css"
        rel="stylesheet">
    <!-- leaflet-panel-layers -->
    <link href="
https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.3.1/dist/leaflet-panel-layers.min.css
" rel="stylesheet">
    <!-- leaflet-heat-layers -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css" /> -->
    <!-- <link rel="stylesheet" href="esrilgeocoder/esri-leaflet-geocoder.css"> -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Include Leaflet JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <!-- Include Leaflet fullscreen JS-->
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <!-- leaflet-draw JS -->
    <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
    <!-- Include Leaflet LocationSearch JS -->
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <!-- Include Leaflet mouseposition JS -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.2.0/src/L.Control.MousePosition.min.js"></script>
    <!-- Include Leaflet styleEditor JS -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-styleeditor@0.1.21/dist/javascript/Leaflet.StyleEditor.min.js">
    </script>
    <!-- leaflet-panel-layers -->
    <script src="
https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.3.1/dist/leaflet-panel-layers.min.js
"></script>
    <!-- leaflet-heat-layers -->
    <!-- <script src="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.js"></script> -->
    <!-- <script src="leaflet-heat.js"></script>
    <script src="esri-leaflet-geocoder.js"></script> -->
    <!-- Leaflet AJAX plugin -->
    <script src="https://unpkg.com/leaflet-ajax@2.1.0/dist/leaflet.ajax.js"></script>
    <!-- jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>





    <!-- adding css -->
    <?php $this->load->view('HomePage/style');?>

</head>

<body>
    <div class="position-relative w-100 h-75 home-page">
        <div>
            <nav>
                <span>
                    <img src="http://103.215.208.18/dwr_img/DSS_SRC/forecast/images/emblem.png" alt="Empblem of India"
                        class="pt-1 ps-1" height="88" />
                    <!-- height="88" style="padding: 7px 0 0 7px; -->
                </span>

                <span class="w-100 min-vh-1 pt-1 ps-2 pb-1 pe-1">
                    <div class="text-center">
                        <h3 class="fs-3 lh-1 fw-bold" style="color: #302f2e ">
                            INTERACTIVE SYSTEM OF INTEGRATED METEOROLOGICAL OBSERVATON AND
                            FORECAST
                        </h3>
                    </div>
                    <div class="text-center">
                        <span class="justify-content-center fs-5 ls-1 pb-4 span_bold" style="letter-spacing: 3px;">
                            INDIA METEOROLOGICAL DEPARTMENT NEW DELHI
                        </span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="justify-content-center fs-5 ls-1 pb-4 span_bold"
                            style="letter-spacing: 3px;">MINISTRY OF EARTH
                            SCIENCES</span>
                    </div>
                </span>

                <span>
                    <img src="http://103.215.208.18/dwr_img/DSS_SRC/forecast/images/imd_logo.png"
                        alt="India Meteorological Department Logo" class="pt-1 pe-2 " height="90" />
                </span>
            </nav>
        </div>

        <!-- nav start here -->
        <div class="mx-2 h-auto ">
            <!-- navbarColor -->
            <div class="mx-3 my-4">
                <div class="d-flex flex-wrap w-100 gx-3 gy-3 justify-content-around mt-1" id="parent">
                    <!-- <div class=" btns" id="parent"> -->
                    <button class="btn-val" id="exposure">EXPOSURE</button>
                    <button class="btn-val" id="metar">METAR</button>
                    <button class="btn-val" id="synop">SYNOP</button>
                    <button class="btn-val" id="radar">RADAR</button>
                    <button class="btn-val" id="satellite">SATELLITE</button>
                    <button class="btn-val" id="lightning">LIGHTNING</button>
                    <button class="btn-val" id="sounding">SOUNDING</button>
                    <button class="btn-val" id="ship_and_buoy">SHIP AND BUOY</button>
                    <button class="btn-val" id="mesolscale">MESOSCALE FORECAST</button>
                    <button class="btn-val" id="medium_range">MEDIUM RANGE</button>
                    <button class="btn-val" id="export_polygon">EXPORT POLYGON</button>
                </div>
            </div>
        </div>
        <!-- nav ends here -->

        <!--Observation BTN , LEAFLETJS -->
        <div class="mapAreaBg" style="background-color: #f6f6f6;">
            <div class="row optionsMap" style="display: contents;">

                <div>
                    <button id="observationBtn" onclick="toggleObservation()">OBSERVATION</button>

                    <!-- // -->
                    <div id="ObservationContainer" class="hidden">

                        <label for="modelNames" class="dropdownLabel">Model:</label>
                        <select id="modelNames" onchange="dd_source()" class="dropdownSelect" &nbsp;>
                            <option disabled selected value> -- select an option -- </option>
                        </select>
                        <span>&nbsp;</span>

                        <label for="parameter" class="dropdownLabel">parameter:</label>
                        <select id="parameter" class="dropdownSelect" &nbsp;>
                            <option disabled selected value> -- select an option -- </option>
                            <option value="GFS">Dummy1</option>
                            <option value="NCUM">Dummy2</option>
                        </select>
                        <span>&nbsp;</span>

                        <label for="subparameter" class="dropdownLabel">SubParameter</label>
                        <select id="subparameter" class="dropdownSelect" &nbsp;>
                            <option disabled selected value> -- select an option -- </option>
                            <option value="GFS">SubParameter1</option>
                            <option value="NCUM">SubParameter2</option>
                        </select>
                        <span>&nbsp;</span>

                        <!-- Date -->
                        <label for="start_date" style="display: contents;">Start Date:</label>
                        <input type="date" id="start_date" onchange="logSelectedDate()" class="date">
                        <span>&nbsp;</span>

                        <label for="end_date" style="display: contents;">End Date:</label>
                        <input type="date" id="end_date" onchange="logSelectedDate()" class="date">
                        <span>&nbsp;</span>

                        <!-- TIME UTC -->
                        <label for="timeInput" style="display: contents;">Select Time (UTC):</label>
                        <input type="time" id="timeInput" onchange="logSelectedTime()" step="60" class="timeUTC">
                        <span>&nbsp;</span>

                        <!-- Submit -->
                        <button id="submitButton" onclick="submitForm()"
                            class="submitBtn btn btn-success">Submit</button>
                    </div>
                    <!-- // -->
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-9">
                    <div id="map"></div>
                </div>
                <div class="col-3">
                    <div class=" wrapper bar" onclick="toggleFunction()">
                        <i class="gg-arrows-expand-right-alt"></i>
                    </div>
                    <div id="toggleImage">
                        <img id="legend1" src="http://103.215.208.18/dwr_img/GIS/legend/model_nowcast.png" alt="legend"
                            class="legend1" />
                        <img id="legend2" src="http://103.215.208.18/dwr_img/GIS/legend/hrrr_final.png" alt="legend"
                            class="legend2" />
                    </div>

                </div>
            </div>
        </div>

        <button id="popup">Popup</button>

        <!-- model popup -->
        <div class="model">
            <div class="model-body">
                <span>&times;</span>
                <h4>List Selected</h4>
                <div class="row" id="Light_RadarRow" style="display: none;">
                    <div class="col-5">
                        <!-- HomePage-Lightning -->
                        <h5 id="panelLayer-Lightning-Title"></h5>
                        <p id="panelLayer-Lightning-lists"></p>

                        <!-- HomePage-Radar -->
                        <h5 id="panelLayer-radar-Title"></h5>
                        <p id="panelLayer-radar-lists"></p>
                    </div>
                    <div class="col-7">
                        <img id="legendModel1" alt="legend" style="width: 72%; height: 35vh;" />
                    </div>
                </div>

                <!-- Exposure -->
                <div class="row" id="ExposureRow" style="display: none;">
                    <div class="col-5">
                        <!-- HomePage-Lightning -->
                        <h4 id="EXPOSURE"></h4>
                        <h5 id="exposure-layers-Title"></h5>
                        <p id="exposure-layers-lists"></p>
                    </div>
                    <div class="col-7">
                        <img id="legendModelExposure" alt="legendExpo" style="width: 72%; height: 35vh;" />
                    </div>
                </div>

                <!-- METAR -->
                <div class="row" id="METAR_Row" style="display: none;">
                    <div class="col-5">
                        <!-- HomePage-Lightning -->
                        <h4 id="METAR"></h4>
                        <!-- METAR00UTC -->
                        <h5 id="METAR00UTC-Title"></h5>
                        <p id="METAR00UTC-lists"></p>
                        <!-- METAR01UTC -->
                        <!-- <h5 id="METAR01UTC-Title"></h5>
                        <p id="METAR01UTC-lists"></p> -->
                    </div>
                    <div class="col-7">
                        <img id="legendModelMetar" alt="legendMetar" style="width: 72%; height: 35vh;" />
                    </div>
                </div>
            </div>
        </div>

        <!-- adding JS -->
        <?php $this->load->view('HomePage/scripts');?>
</body>

</html>