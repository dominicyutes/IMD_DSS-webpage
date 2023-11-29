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

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>




    <!-- adding css -->
    <?php $this->load->view('HomePage/style');?>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

    .bg-info-success-gradient {
        background-repeat: repeat-x;
        background-image: linear-gradient(225deg, #1C7DB5, #32852E);
    }


    body {
        margin: 0;
        font-family: 'Quicksand', sans-serif;
        background-color: #4682B4;
        position: relative;
    }

    #particles-js {
        position: fixed;
        width: 100%;
        z-index: -1;
    }

    .btn {
        border: none;
        padding: 0;
        background: none;
        cursor: pointer;
        font: inherit;
        outline: inherit;
    }

    .btn:focus>.underline {
        visibility: visible;
    }

    .btn-val {
        color: #163159;
        vertical-align: baseline;
        font-weight: inherit;
        font-style: inherit;
        font-size: 1.1em;
        outline: 0;
        padding: 0;
        margin: 0;
        border: 0;
        cursor: pointer;
    }

    .minsistry-text {
        margin: 0px 17px 0px 0px;
        font-size: 14px;
        color: #897777;
        position: relative;
        z-index: 1;
        margin-bottom: 20px;
        font-size: 18px;
        line-height: 1.5;
        word-break: break-word;
        transition: all 0.45s ease;
    }

    .btn-val:hover {
        color: #00aa55;
    }

    .btn-val:hover+.underline {
        visibility: visible;
        animation: loadingAnimation 1s 1 linear;
    }

    .underline {
        width: 100%;
        height: 0.15em;
        background-color: #00aa55;
        visibility: hidden;
        transition: visibility 0.1s ease;
    }

    .with-border {
        border-right: 2px solid #e0dfdf;
        padding-right: 4px;
    }

    .exp_poly {
        color: #163159;
    }

    .expo-polygon-parent {
        border: none;
        padding: 0;
        background-color: #e0dfdf;
        cursor: pointer;
        font: inherit;
        outline: inherit;
    }

    .expo-polygon-parent:hover {
        background-color: #ced0cf;
    }

    @keyframes loadingAnimation {
        0% {
            width: 0;
        }

        50% {
            width: 100%;
        }

        /* 100% {
              width: 100%;
          } */
    }
    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>
    <div class="position-relative w-full py-2" style="background-color:#4682B4">
        <div>
            <nav>
                <span>
                    <img src="http://103.215.208.18/dwr_img/DSS_SRC/forecast/images/emblem.png" alt="Empblem of India"
                        class="pt-1 ps-1" height="88" />
                    <!-- height="88" style="padding: 7px 0 0 7px; -->
                </span>

                <span class="w-100 min-vh-1 pt-1 ps-2 pb-1 pe-1">
                    <div class="text-center">
                        <h3 class="fs-3 lh-1 fw-bold" style="color: #fff ">
                            INTERACTIVE SYSTEM OF INTEGRATED METEOROLOGICAL OBSERVATON AND
                            FORECAST
                        </h3>
                    </div>
                    <div class="text-center">
                        <span class="justify-content-center fs-5 ls-1 pb-4 span_bold"
                            style="letter-spacing: 3px;color: #fff ">
                            India Meterological Department <br>
                            Ministry of Earth and Sciences
                        </span>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="justify-content-center fs-5 ls-1 pb-4 span_bold"
                            style="letter-spacing: 3px;color: #fff ">MINISTRY OF EARTH
                            SCIENCES</span> -->
                    </div>
                </span>

                <span>
                    <img src="http://103.215.208.18/dwr_img/DSS_SRC/forecast/images/imd_logo.png"
                        alt="India Meteorological Department Logo" class="pt-1 pe-2 " height="90" />
                </span>
            </nav>
        </div>
    </div>


    <!-- nav start here -->

    <div style="width: 92%; margin-bottom:1em; background-color:#ffffff;" class="mx-auto">

        <div class="text-center"
            style="background-image: linear-gradient(to right top, #eae0e0, #efe8ea, #f3f0f2, #f9f7f9, #ffffff); padding: 10px 0px 10px 0px;">
            <span class="minsistry-text">Weather Decison Support System</span>
        </div>
        <!-- navbar -->
        <div style="display:flex;height: 3em;padding:0.2em 0.2em 0.2em 1.3em" class="mx-auto">
            <div style="width: 100%;display: flex;">
                <div class="d-flex flex-wrap w-100 gx-3 gy-3 mt-1" id="parent" style="justify-content: space-between">

                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="exposure">Exposure</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="metar">Metar</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="synop">Synop</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="radar">Radar</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="satellite">Satellite</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="lightning">Lightining</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="sounding">Sounding</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="ship_and_buoy">Ship and Buoy</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="mesolscale">Mesolscale Forecast</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="medium_range">Medium Range</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="medium_range">Export Polygon</p>
                        <div class="underline"></div>
                    </button>
                    <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                        <p class="btn-val" id="medium_range export_polygon" onclick="toggleObservation()">Observation
                        </p>
                        <div class="underline"></div>
                    </button>
                </div>
            </div>
            <!-- <div style="width:12%; flex-direction:column;padding-top: 0.5em;" class="d-flex expo-polygon-parent btn">
                <p class="exp_poly " id="export_polygon">Export Polygon</p>
            </div>

            <div style="width:12%; flex-direction:column; padding-top: 0.5em; margin-left:0.6em;"
                class="d-flex expo-polygon-parent btn">
                <p class="exp_poly " id="export_polygon" onclick="toggleObservation()">OBSERVATION</p>
            </div> -->
            <!-- <div class="row optionsMap" style="display: contents;"> -->
            <!-- <button id="observationBtn expo-polygon-parent btn" style="margin-left:0.6em; text-align:center;color:#fff;width:12%; flex-direction:column;padding-top: 0.5em;" class="d-flex expo-polygon-parent btn"  onclick="toggleObservation()">OBSERVATION</button> -->
            <!-- </div> -->
        </div>
    </div>
    <!-- nav ends here -->
    <div id="particles-js"></div>



    <!--Observation BTN , LEAFLETJS -->
    <!-- <div class="mapAreaBg mx-auto" style="width:97%;"> -->
    <div id="ObservationContainer" class="hidden">
        <!-- model -->
        <div>
            <label for="modelNames" class="firstDDLabel">Model:</label>
            <select class="firstDD" id="modelNames" onchange="showParameterNames(this.value)" &nbsp;>
            </select>
            <span>&nbsp;</span>
            <!-- parameter -->
            <label for="parameter" class="dropdownLabel">parameter:</label>
            <select class="secondDD" id="parameterNames" class="dropdownSelect"
                onchange="showSubParameterNames(this.value)" &nbsp;>
            </select>
            <span>&nbsp;</span>
            <!-- SubParameter -->
            <label for="subparameter" class="dropdownLabel">SubParameter</label>
            <select class="thirdDD" id="subparameter" class="dropdownSelect" &nbsp;>
            </select>
            <span>&nbsp;</span>
        </div>

        <div>
            <!-- Date -->
            <label for="start_date" class="dateDDLabel">Start Date:</label>
            <input type="date" id="start_date" onchange="logSelectedDate()" class="dateDD">
            <span>&nbsp;</span>

            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" onchange="logSelectedDate()" class="dateDD">
            <span>&nbsp;</span>

            <span style="display: contents;">
                <label for="hourSelect" class="TimeLabel">Time:</label>
                <select id="hourSelect" class="TimeHR">
                </select>
                <select id="minuteSelect" class="TimeMin">
                </select>
            </span>
            </select>

            <!-- Submit -->
            <button id="submitButton" onclick="submitForm()" class="submitBtn">Submit</button>
        </div>

        </form>
    </div>


    </br>
    <!-- <div class="row"> -->
    <!-- <div class="col-9" style="z-index: 999;"> -->
    <!-- </div>
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

            </div> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- style="width: 7em;color: #00aa55; background-color:#00aa55 ; cursor: pointer;border: none;height: 2em;margin-top: 2px;margin-left: 1.35em; margin-bottom:2px;color: white;" -->

    <button id="popup" class="submitBtn">Legend</button>

    <div id="map"></div>

    <!-- <button id="popup">Popup</button> -->

    <!-- model popup -->
    <div class="model">
        <div class="model-body">
            <legend>x</legend>
            <h4>Selected Parameters</h4>
            <div class="row" id="Light_RadarRow" style="display: none;">
                <div>
                    <!-- HomePage-Lightning -->
                    <h5 id="panelLayer-Lightning-Title"></h5>
                    <p id="panelLayer-Lightning-lists"></p>

                    <!-- HomePage-Radar -->
                    <h5 id="panelLayer-radar-Title"></h5>
                    <p id="panelLayer-radar-lists"></p>
                </div>
                <!-- <div class="col-7">
                        <img id="legendModel1" alt="legend" style="width: 72%; height: 35vh;" />
                    </div> -->
            </div>

            <!-- Exposure -->
            <div class="row" id="ExposureRow" style="display: none;">
                <!-- <div class="col-5"> -->
                <!-- HomePage-Lightning -->
                <h4 id="EXPOSURE"></h4>
                <h5 id="exposure-layers-Title"></h5>
                <p id="exposure-layers-lists"></p>
                <!-- </div> -->
                <!-- <div class="col-7">
                        <img id="legendModelExposure" alt="legendExpo" style="width: 72%; height: 35vh;" />
                    </div> -->
            </div>

            <!-- METAR -->
            <div class="row" id="METAR_Row" style="display: none;">
                <!-- <div class="col-5"> -->
                <!-- HomePage-Lightning -->
                <h4 id="METAR"></h4>
                <!-- METAR00UTC -->
                <h5 id="METAR00UTC-Title"></h5>
                <p id="METAR00UTC-lists"></p>

                <h5 id="METAR01UTC-Title"></h5>
                <p id="METAR01UTC-lists"></p>

                <h5 id="METAR02UTC-Title"></h5>
                <p id="METAR02UTC-lists"></p>

                <h5 id="METAR03UTC-Title"></h5>
                <p id="METAR03UTC-lists"></p>

                <h5 id="METAR04UTC-Title"></h5>
                <p id="METAR04UTC-lists"></p>

                <h5 id="METAR05UTC-Title"></h5>
                <p id="METAR05UTC-lists"></p>

                <!-- METAR01UTC -->
                <!-- <h5 id="METAR01UTC-Title"></h5>
                        <p id="METAR01UTC-lists"></p> -->
                <!-- </div> -->
                <!-- <div class="col-7">
                        <img id="legendModelMetar" alt="legendMetar" style="width: 72%; height: 35vh;" />
                    </div> -->
            </div>
        </div>
    </div>

    <!-- adding JS -->
    <?php $this->load->view('HomePage/scripts');?>

    <script>
    particlesJS('particles-js', {
        particles: {
            number: {
                value: 100, // Adjust the number of particles
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: '#ffffff' // Set the color of the particles
            },
            shape: {
                type: 'circle', // Choose the shape of the particles
                stroke: {
                    width: 0,
                    color: '#000000'
                },
                polygon: {
                    nb_sides: 5
                }
            },
            opacity: {
                value: 0.5, // Adjust the opacity of the particles
                random: true,
                anim: {
                    enable: true,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false
                }
            },
            size: {
                value: 3, // Set the size of the particles
                random: true,
                anim: {
                    enable: false,
                    speed: 40,
                    size_min: 0.1,
                    sync: false
                }
            },
            line_linked: {
                enable: true,
                distance: 150,
                color: '#ffffff',
                opacity: 0.4,
                width: 1
            },
            move: {
                enable: true,
                speed: 6,
                direction: 'none',
                random: false,
                straight: false,
                out_mode: 'out',
                bounce: false,
                attract: {
                    enable: false,
                    rotateX: 600,
                    rotateY: 1200
                }
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: {
                    enable: true,
                    mode: 'grab'
                },
                onclick: {
                    enable: true,
                    mode: 'push'
                },
                resize: true
            },
            modes: {
                grab: {
                    distance: 140,
                    line_linked: {
                        opacity: 1
                    }
                },
                bubble: {
                    distance: 400,
                    size: 40,
                    duration: 2,
                    opacity: 8,
                    speed: 3
                },
                repulse: {
                    distance: 200,
                    duration: 0.4
                },
                push: {
                    particles_nb: 4
                },
                remove: {
                    particles_nb: 2
                }
            }
        },
        retina_detect: true
    });
    </script>
</body>

</html>