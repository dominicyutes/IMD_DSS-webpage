<!DOCTYPE html>
<html>

<head>
    <!-- <img src="img/imd_logo_a.png" alt="IMD_DSS Logo"> -->
    <title>IMD DSS</title>
    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">
    <!-- <link rel="shortcut icon" href="img/IMDlogo_Ipart-iris.png" type="image/png"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrows-expand-right-alt.css' rel='stylesheet'
        crossorigin="anonymous">
    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" crossorigin="anonymous" />

    <!-- Leaflet.GroupedLayerControl CSS and JS -->
    <link rel="stylesheet"
        href="https://unpkg.com/leaflet-groupedlayercontrol/dist/leaflet.groupedlayercontrol.min.css" />


    <!-- leaflet-draw CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.css" crossorigin="anonymous" />
    <!-- Include Leaflet fullscreen CSS -->
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
        rel='stylesheet' crossorigin="anonymous" />
    <!-- Include Leaflet LocationSearch CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"
        crossorigin="anonymous" />
    <!-- Include Leaflet mouseposition CSS -->
    <link href="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.2.0/src/L.Control.MousePosition.min.css"
        rel="stylesheet" crossorigin="anonymous">
    <!-- Include Leaflet styleEditor CSS -->
    <link href="https://cdn.jsdelivr.net/npm/leaflet-styleeditor@0.1.21/dist/css/Leaflet.StyleEditor.min.css"
        rel="stylesheet" crossorigin="anonymous">
    <!-- leaflet-panel-layers -->
    <link href="
    https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.3.1/dist/leaflet-panel-layers.min.css
    " rel="stylesheet" crossorigin="anonymous">
    <!-- leaflet time dimensions -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/leaflet-timedimension@1.1.1/dist/leaflet.timedimension.control.min.css"
        crossorigin="anonymous" />
    <!-- Leaflet Side-by-Side CSS-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" crossorigin="anonymous" />

    <!-- Include Leaflet Side-by-Side CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet-side-by-side@1.0.4/dist/leaflet-side-by-side.css" /> -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css">
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.markercluster/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.markercluster/dist/MarkerCluster.Default.css" />

    <!-- Leaflet EasyPrint CSS and JS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet-easyprint/dist/easyPrint.css" />
    <script src="https://unpkg.com/leaflet-easyprint/dist/easyPrint.js"></script> -->
    <!-- Leaflet.GroupedLayerControl CSS and JS -->
    <!-- <link rel="stylesheet" href="path/to/leaflet.groupedlayercontrol.css" />
    <script src="path/to/leaflet.groupedlayercontrol.js"></script> -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Include Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Leaflet.GroupedLayerControl CSS and JS -->
    <script src="https://unpkg.com/leaflet-groupedlayercontrol/dist/leaflet.groupedlayercontrol.min.js"></script>


    <!-- <script src="https://unpkg.com/leaflet"></script>
    <script src="https://unpkg.com/leaflet-simple-map-screenshoter"></script> -->

    <!-- Include Leaflet fullscreen JS-->
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <!-- leaflet-draw JS -->
    <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script> -->
    <!-- timeDimension CSS -->
    <!-- <link rel="stylesheet"
        href="https://raw.githubusercontent.com/socib/Leaflet.TimeDimension/master/dist/leaflet.timedimension.min.css"> -->

    <!-- Include Leaflet LocationSearch JS -->
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <!-- Include Leaflet mouseposition JS -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.2.0/src/L.Control.MousePosition.min.js"></script>
    <!-- Include Leaflet styleEditor JS -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-styleeditor@0.1.21/dist/javascript/Leaflet.StyleEditor.min.js">
    </script>
    <!-- leaflet-panel-layers -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet-panel-layers@1.3.1/dist/leaflet-panel-layers.min.js"></script>

    <!-- Leaflet AJAX plugin -->
    <!-- <script src="https://unpkg.com/leaflet-ajax@2.1.0/dist/leaflet.ajax.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
        integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <!-- jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/iso8601-js-period@0.2.1/iso8601.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/dateformat@3.0.3/lib/dateformat.js"></script>
    <script type="text/javascript" src="https://apps.socib.es/Leaflet.TimeDimension/src/leaflet.timedimension.js">
    </script>
    <script type="text/javascript" src="https://apps.socib.es/Leaflet.TimeDimension/src/leaflet.timedimension.util.js">
    </script>
    <script type="text/javascript" src="https://apps.socib.es/Leaflet.TimeDimension/src/leaflet.timedimension.layer.js">
    </script>
    <script type="text/javascript"
        src="https://apps.socib.es/Leaflet.TimeDimension/src/leaflet.timedimension.layer.wms.js"></script>
    <script type="text/javascript"
        src="https://apps.socib.es/Leaflet.TimeDimension/src/leaflet.timedimension.layer.geojson.js"></script>
    <script type="text/javascript"
        src="https://apps.socib.es/Leaflet.TimeDimension/src/leaflet.timedimension.player.js"></script>
    <script type="text/javascript"
        src="https://apps.socib.es/Leaflet.TimeDimension/src/leaflet.timedimension.control.js"></script>

    <!-- leaflet-side-by-side -->
    <script src="https://lab.digital-democracy.org/leaflet-side-by-side/leaflet-side-by-side.js"></script>


    <!-- // Include the necessary libraries -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/html2canvas/html2canvas.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/canvas2image/canvas2image.js">
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script> -->


    <!-- adding css -->
    <?php $this->load->view('HomePage/style'); ?>

    <style>
    @media print {

        body,
        html,
        #map {
            width: 100%;
            margin: auto;
            height: 100%;
        }

        .print-title {
            font-size: 30px;
        }
    }
    </style>

</head>

<body>
    <!-- Title start here -->
    <div class="body">
        <div
            style="display: flex; align-items: center; justify-content: space-between; height: 60px; width: calc(100% - 60px); position: relative;">
            <img src="img/emblem.png" alt="Emblem of India" height="50"
                style="margin-right: auto; margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">
            <div style="flex: 1; text-align: center;">
                <span class="text" style="font-family: 'Times New Roman';">WEATHER DECISION SUPPORT SYSTEM</span>

            </div>
            <img src="img/imd_logo.png" alt="IMD logo" height="50"
                style="margin-left: auto; margin-right: -31px; margin-top: 5px; margin-bottom: 5px;">
        </div>



        <!-- navbar -->
        <div style="height: 15%;width: 100%; background-color:#f4fcff;">
            <div style="display:flex;padding:0.2em 0.2em 0.2em 1.3em" class="mx-auto heightChange">
                <div style="width: 100%;display: flex;">
                    <div class="d-flex flex-wrap w-100 gx-3 gy-3 mt-1" id="parent"
                        style="justify-content: space-between">

                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="exposure" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Exposure</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="metar" style="font-family: 'Times New Roman'; font-size: 20px;">Metar
                            </p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="synop" style="font-family: 'Times New Roman'; font-size: 20px;">Synop
                            </p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="sounding" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Sounding</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="ship_and_buoy"
                                style="font-family: 'Times New Roman'; font-size: 20px;">Ship and Buoy</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="radar" style="font-family: 'Times New Roman'; font-size: 20px;">Radar
                            </p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="satellite" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Satellite</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="lightning" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Lightning</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="mesolscale" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Mesoscale Forecast</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="medium_range"
                                style="font-family: 'Times New Roman'; font-size: 20px;">Medium Range</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p style="font-family: 'Times New Roman'; font-size: 20px;" class="btn-val">Export Polygon
                            </p>
                            <div class="underline"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 72%;width:100%;margin-left: 0px;" class="row">
            <!-- MAP -->
            <div id="map" class="col-lg-10"></div>

            <!-- OBSERVATION -->

            <div id="ObservationContainer" class="obsClass hidden col-sm-2" style="position: relative;">
                <div style="display: flex; justify-content: space-between;">
                    <h6 class="obsh4" style="font-family: 'Times New Roman', Times, serif; font-size: 20px">OBSERVATION
                    </h6>
                    <span title="Close" class="playBtnClasX" onClick="obsCloseX()">X</span>
                </div>

                <!-- model -->
                <form id="obsForm">
                    <div>
                        <label name="modelNames" class="firstDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Type:</label>
                        <select class="firstDD" id="modelNames" onchange="showParameterNames(this.value)" &nbsp;>
                        </select>
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    <!-- parameter -->
                    <div>
                        <label name="parameter" class="secondDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Time:</label>
                        <select class="secondDD" id="parameterNames" onchange="showSubParameterNames(this.value)"
                            &nbsp;>
                        </select>
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    <!-- SubParameter -->
                    <div>
                        <label name="subparameter" class="thirdDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Parameter</label>
                        <select class="thirdDD" id="subparameter" &nbsp;>
                        </select>
                        <div id="checkboxListContainer"></div>
                    </div>
                    <!-- <span>&nbsp;</span> -->


                    <div>
                        <label name="start_date" class="dateDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Date:</label>
                        <input type="date" id="start_date" class="dateDD">
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    <!-- <div>
                    <label for="end_date" class="dateDDLabel">To Date:</label>
                    <input type="date" id="end_date" class="dateDD">
                </div> -->
                    <!-- <span>&nbsp;</span> -->
                    <div>
                        <span id="TimNon" style="display: contents;">
                            <label name="hourSelect" class="TimeLabel"
                                style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Time:</label>
                            <select id="hourSelect" class="TimeHR">
                            </select>
                            <select id="minuteSelect" class="TimeMin">
                            </select>
                        </span>
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    </select>
                </form>
                <!-- Submit -->
                <div style="display: flex;justify-content: space-around;">
                    <button id="submitButton" onclick="obs_SubmitForm()" class="submitBtn">Submit</button>
                    <button class="obsRemCls" id="obsRemBtn" onclick="obs_Rem_()">Remove</button>
                </div>
                <div
                    style="position: absolute; bottom: 0; background-color: #f4fcff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; max-width: 300px; font-family: 'Times New Roman', Times, serif;">
                    <h4
                        style="background-color: #d4e6ff; padding: 10px; margin-top: 0; border-top-left-radius: 8px; border-top-right-radius: 8px; text-align: center;">
                        Note</h4>
                    <ul style="list-style-type: none; padding-left: 0; margin-top: 10px; text-align: justify;">
                        <span style="font-size: 15px; line-height: 1.6; color: #333;">
                            This option aims to present a comprehensive summary of the observed data for various
                            parameters. Please ensure that all fields are filled in to access the information.
                        </span>
                    </ul>

                </div>
            </div>

            <!-- MACRO -->
            <div id="macroContainer" class="hidden obsClass col-sm-2" style="position: relative;">

                <div class="row">
                    <div style="height: 60vh;overflow: auto; ">
                        <div style="display:flex;">
                            <button class="createMacroCls" style="font-size: 20px"
                                onclick="createMacroForm()">+</button>
                            <span
                                style="color: #2c5383;font-family: 'Archivo', sans-serif;font-size: 20px;font-weight: bold;margin-left: 6%;margin-top: 1%; font-size: 20px">Create
                                Macro</span>
                        </div>

                        <div style="overflow: auto;" id="showCreatedMacro"></div>
                    </div>

                    <!-- MacroNote -->
                    <div
                        style="height: 40%;position: absolute; bottom: 0; background-color: #f4fcff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; font-family: 'Times New Roman', Times, serif;text-align: center; overflow: auto;">
                        <h4
                            style="background-color: #d4e6ff; padding: 10px; margin-top: 0; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                            Note</h4>
                        <ul style="list-style-type: none; padding-left: 0; margin-top: 10px; text-align: justify;">
                            <span style="font-size: 15px; line-height: 1.6; color: #333;">
                                The Macro feature will facilitate the user/forecaster in streamlining daily operations
                                by
                                storing selected layers/information in a group, therefore simplifying the process of
                                viewing
                                them. Click on the "+" symbol to generate a new macro and follow the instructions given
                                to
                                save, edit, run, and delete options.
                            </span>
                        </ul>
                    </div>

                </div>
                <!--  -->
                <div class="create_Macro">
                    <div class="create_Macro_body" style="position: relative;">
                        <div class="create_Macro_body_div">
                            <span class="macroLegend">X</span>
                            <h4 class="create_Macro_h4" style="margin: 0 auto;"
                                style="font-family: 'Times New Roman', Times, serif; font-size: 20px">
                                <span id="creatRedit">Create Macro</span>
                            </h4>
                        </div>


                        <!-- MACRO-model -->
                        <div id="showCreateMacroLayers">
                            <form id="myForm">
                                <div>
                                    <label name="macroNames" class="macroNameLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Macro
                                        Name:</label>
                                    <input type="text" class="macroNameInput" id="macroNames"
                                        placeholder="customize name" onchange="handleInputChange()" autocomplete="off"
                                        required &nbsp;>
                                </div>
                                <div>
                                    <label name="mac_modelNames" class="mac_firstDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Type:</label>
                                    <select class="mac_firstDD" id="mac_modelNames"
                                        onchange="macShowParameterNames(this.value)" &nbsp;>
                                    </select>
                                </div>
                                <!-- parameter -->
                                <div>
                                    <label name="mac_parameter" class="mac_secondDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Time:</label>
                                    <select class="mac_secondDD" id="mac_parameterNames"
                                        onchange="macShowSubParameterNames(this.value)" &nbsp;>
                                    </select>
                                </div>
                                <!-- SubParameter -->
                                <div>
                                    <label name="mac_subparameter" class="mac_thirdDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Parameter</label>
                                    <select class="mac_thirdDD" id="mac_subparameter" &nbsp;>
                                    </select>
                                </div>

                                <!-- Submit -->
                                <div style="display: flex;">
                                    <button id="mac_addButton" onclick="macAddForm()" style="font-size: 18px"
                                        class="macSubmitBtn" type="button" disabled>Add</button>
                                    <button id="mac_submitButton" style="display:block; font-size: 18px"
                                        onclick="macSubmitForm()" class="macSubmitBtn" type="button"
                                        disabled>Save</button>
                                    <button id="mac_updateButton" onclick="updateForm()" class="macSubmitBtn"
                                        type="button" style="display:none; font-size: 18px" disabled>Update</button>
                                </div>
                            </form>
                            <!--  -->
                            <div class="addBox" id="addedInfoContainer">
                            </div>
                        </div>
                        <!--MACRO model_end  -->
                    </div>
                </div>

                <div class="view_Create_Macro">
                    <div class="view_Create_Macro_body" style="position: relative;">
                        <div class="view_Create_Macro_body_div">
                            <span class="viewMacroLegend">X</span>
                            <h4 class="view_Macro_h4" style="margin: 0 auto; font-size: 20px">
                                <span id="viewMacroTitle"></span>
                            </h4>
                        </div>
                        <div style="color:black;" id="viewMacroDetails"></div>
                    </div>
                </div>

            </div>

            <!-- Layer_Name_bottom  display: none; -->
            <div
                style="display: flex; height: 38px; width: 100%; background-color: #2e578647; font-family: 'Times New Roman'; justify-content: center;align-items: center; border-radius: 6px">
                <div
                    style="width: 50%; display: flex; justify-content: space-between; align-items: center; border-radius: 7px; background-color: #f4fcff;">
                    <span id="prevLayer"
                        style="height: 31px;width: 37px;background-color: #156e9d;display: flex;justify-content: flex-end;align-items: center;margin-left: 10px;cursor: pointer;border-radius: 6px"
                        title="previous">
                        <i class="fa-solid fa-arrow-left fa-beat-fade fa-lg"
                            style="margin-right: 11px;color: #c7d6dc;"></i>
                    </span>
                    <span>
                        <div
                            style="height: 38px; width: 100%; background-color: white; font-family: 'Times New Roman'; display: flex;">
                            <div id="layerNone" style="display: flex;">
                                <h4>Layers Selected None</h4>
                            </div>
                            <!-- EXPO -->
                            <div id="ExposureRow_M" style="flex-grow: 1; display: none; flex-wrap: wrap;">
                                <h4 id="EXPOSURE_M" style="border-radius: 2px;margin-right: 10px;"></h4>
                                <h5 id="exposure_layers_Title_M"
                                    style="color: #000000;margin-right: 10px;margin-right: 10px;"></h5>
                                <h5 id="exposure_layers_lists_M" style="display: flex; flex-wrap: wrap;"></h5>
                            </div>
                            <!--  -->
                            <!-- RADARPRODUCTS -->
                            <div id="RADAR_Row_M" style="flex-grow: 1; display: none;">
                                <h4 id="RADARPRODUCTS_M"
                                    style="border-radius: 8px; background-color: #00719c; margin-right: 10px;"></h4>
                                <h5 id="RADARPRODUCTS_Title_M" style="color: #000000;margin-right: 10px;"></h5>
                                <h5 id="RADARPRODUCTS_lists_M" style="display: flex;flex-wrap: wrap;"></h5>
                            </div>
                            <!--  -->
                            <!-- SATELLITE -->
                            <div id="SATELLITE_Row_M" style="flex-grow: 1; display: none;">
                                <h4 id="SATELLITE_M"
                                    style="border-radius: 8px; background-color: #00719c;margin-right: 10px;"></h4>
                                <h5 id="SATELLITE_Title_M" style="color: #000000;margin-right: 10px;"></h5>
                                <h5 id="SATELLITE_lists_M" style="display: flex;flex-wrap: wrap;"></h5>
                            </div>
                            <!--  -->
                        </div>
                    </span>
                    <span
                        style="height: 31px;width: 37px;background-color: #156e9d;display: flex;justify-content: flex-end;align-items: center;margin-right: 10px;cursor: pointer; border-radius: 6px"
                        title="Next" onClick="nextLayer"><i class="fa-solid fa-arrow-right fa-beat-fade fa-lg"
                            style="margin-right: 11px;color: #c7d6dc;"></i></span>
                </div>
                <div id="second_div"
                    style="background-color: #f4fcff; margin-left: 15px; border-radius: 7px; display: flex; align-items: center; justify-content: center;">
                    <h5 id="layerName_count"
                        style="border-radius: 7px; width: 22px; display: flex; justify-content: center;">0</h5>
                </div>
            </div>
















            <!-- row map class ends here  -->
        </div>

        <!-- MACRO Run model; display: none; -->
        <div id="macroDetails" class="modal" style="display:none;width: 500px; left: 11%; top: 90%;">
            <div class="modal-content"
                style="z-index: 999 ; font-family: Arial, sans-serif; background-color: #ffffff; border-radius: 10px;">
                <!--  align-items: center; -->
                <div class="playLine-container">
                    <div class="macroPlayClass">
                        <button title="Stop" class="stopBtnClas"><i class="fa-sharp fa-solid fa-stop fa-xs"
                                style="color: #000000;"></i></button>
                        <button title="Play" class="playBtnClas"><i class="fa-sharp fa-solid fa-play fa-xs"
                                style="color: #000000;"></i></button>
                        <button title="Pause" class="pauseBtnClas"><i class="fa-sharp fa-solid fa-pause fa-xs"
                                style="color: #000000;"></i></button>
                        <button title="Previous" class="leftMacBtn"><i class="fa-sharp fa-solid fa-arrow-left fa-xs"
                                style="color: #000000;"></i></button>
                        <span style="font-size: 17px;font-weight: bold; padding: 0 10px" id="playerText"></span>
                        <button title="Next" class="rightMacBtn"><i class="fa-sharp fa-solid fa-arrow-right fa-xs"
                                style="color: #000000;"></i></button>
                        <span class="playBtnClasCount" id="counting"></span>
                        <span class="vertical-line"></span>
                        <span title="Close" class="playBtnClasX" id="closingPlayBtn" onClick="macroRunFnX()">X</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MACRO Delete Warning -->
        <div id="deleteMacroModal" class="modal" style="display: none; width: 27%; left: 33%; top: 9%; height: auto;">
            <div class="modal-content"
                style="z-index: 999 ;display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #ffffff; padding: 10px; border-radius: 10px; align-items: center;">
                <h3 class="warningCls" style="font-family: 'Times New Roman'; font-size: 20px">WARNING !</h3>
                <div style="width: 100%;">
                    <div style="margin-left: 12%; width: 74%;" class="col-6">
                        <label class="labelDelMac" for="userName"
                            style="font-family: 'Times New Roman'; font-size: 18px">Employee Name:</label>
                        <div class="input-group mb-3">
                            <input style="border-color: #d5caca;" type="text" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" id="userName" required>
                        </div>
                    </div>
                    <div style="margin-left: 12%; width: 74%;" class="col-6">
                        <label class="labelDelMac" for="deleteReason"
                            style="font-family: 'Times New Roman'; font-size: 18px">Reason for Deletion:</label>
                        <div class="input-group mb-3">
                            <input style="border-color: #d5caca;" type="text" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" id="deleteReason" required>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: center;">
                    <button type="button" onclick="closeDeleteMacroModal()" class="btn btn-primary"
                        style="font-family: 'Times New Roman'; font-size: 18px">Cancel</button>
                    <button type="button" id="macCanBtn" onclick="submitDeleteMacro()" class="btn btn-primary"
                        style="font-family: 'Times New Roman'; font-size: 18px">Submit</button>
                </div>
            </div>
        </div>

        <!-- observation Layer name on Map-->
        <div id="obsLayerNamShw" class="modal" style="width: 500px; left: 11%; top: 90%;">
            <div class="modal-content"
                style="z-index: 999 ; font-family: Arial, sans-serif; background-color: #ffffff; border-radius: 10px;">
                <!--  align-items: center; -->
                <div class="playLine-container">
                    <div class="macroPlayClass">
                        <span style="color: black;font-size: 17px;font-weight: bold; padding: 0 10px"
                            id="obsLayTxt"></span>
                        <span title="Close" class="playBtnClasX" id="close_obsLayerNam"
                            onClick="obsLayerNameX()">X</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MOdels time update BOX -->
        <div id="model_Tim" class="model_MM" style="display: none;">
            <div class="model-body_MM" style="position: relative;overflow: hidden;">
                <div
                    style="z-index: 999; display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #00415a; padding: 10px; border-radius: 10px;">
                    <h4 id="Model_Tim_Tit" style="color: #f5f5f5; margin: 0 auto; font-size: 20px"></h4>
                    <i class="fa-solid fa-arrow-up fa-bounce" style="color: #f5f5f5; cursor: pointer;"
                        onclick="timeUpdateBoxTog()"></i>
                </div>
                <div>
                    <p id="Model_Tim_lis" ;></p>
                </div>
            </div>
        </div>
        <!--  -->


        <!-- LEGEND model popup -->
        <div class="model" style="display: none; left: 253px; top: 94px; height:0;">
            <div class="model-body" style="position: relative;">
                <div
                    style="z-index: 999 ;display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #00415a; padding: 10px; border-radius: 10px; align-items: center;">
                    <legend title="Close"
                        style="cursor: pointer;color: #83ffee;text-shadow: 0 0 10px #7b7be7, 0 0 20px #8a8ad8, 0 0 30px #f5f5f5;">
                        X</legend>
                    <h4 style="margin: 0 auto; font-size: 20px">Selected Parameters</h4>
                </div>

                <div class="row" id="Light_RadarRow" style="display: none;">
                    <div>
                        <!-- HomePage-Lightning -->
                        <h5 id="panelLayer-Lightning-Title"></h5>
                        <p id="panelLayer-Lightning-lists"></p>

                        <!-- HomePage-Radar -->
                        <!-- <h5 id="panelLayer-radar-Title"></h5>
                        <p id="panelLayer-radar-lists" style="display: flex; flex-wrap: wrap;"></p> -->
                    </div>
                </div>


                <div id="printlegend">

                    <!-- lehends for observation -->
                    <div id="METAR_mm" style="display: none;">
                        <h5 id="metarTemp-Title_mm" style="color: #000000;">METAR 00UTC:</h5>
                        <p id="metarTemp-lists_mm" style="flex-wrap: wrap;">Temperature_00</p>
                        <div id="metarTempImage_mm" style="margin-left: 40px; flex-wrap: wrap;">
                            <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
                            </span>
                        </div>
                    </div>
                    <!--  -->


                    <!-- Exposure -->
                    <div id="ExposureRow" style="display: none; ">
                        <h4 id="EXPOSURE" style=" border-radius: 2px; background-color: #00719c;  text-align: center;">
                            EXPOSURE
                        </h4>
                        <h5 id="exposure-layers-Title" style="color: #000000;"></h5>
                        <p id="exposure-layers-lists" style="display: flex; flex-wrap: wrap;">
                    </div>

                    <!-- METAR -->
                    <div id="METAR_Row">
                        <h4 id="METAR" style=" border-radius: 8px; background-color: #00719c; text-align: center;"></h4>
                        <!-- METARTEMP -->
                        <h5 id="metarTemp-Title" style="color: #000000;"></h5>
                        <div id="metarTempImage" style="margin-left: 40px; flex-wrap: wrap;"></div>
                        <p id="metarTemp-lists" style="display: none; flex-wrap: wrap;"></p>

                        <!-- METARDewPoint -->
                        <h5 id="metarDewPoint-Title" style="color: #000000;"></h5>
                        <div id="metarDewPointImage" style="margin-left: 40px; flex-wrap: wrap;"></div>
                        <p id="metarDewPoint-lists" style="display: none; flex-wrap: wrap;"></p>

                        <!-- METARVisibility -->
                        <h5 id="metarVisibility-Title" style="color: #000000;"></h5>
                        <div id="metarVisibilityImage" style="margin-left: 40px; flex-wrap: wrap;"></div>
                        <p id="metarVisibility-lists" style="display: none; flex-wrap: wrap;"></p>

                        <!-- METARWindSpeedAndDirection -->
                        <h5 id="metarWindSpeedAndDirection-Title" style="color: #000000;"></h5>
                        <div id="metarWindSpeedAndDirectionImage"
                            style="margin-left: 40px; display: flex; flex-wrap: wrap;"></div>
                        <p id="metarWindSpeedAndDirection-lists" style="display: flex; display: none; flex-wrap: wrap;">
                        </p>
                    </div>

                    <!-- SYNOP -->
                    <div class="row" id="SYNOP_Row" style="display: none;">
                        <h4 id="SYNOP" style=" border-radius: 8px; background-color: #00719c; text-align: center;"></h4>

                        <!-- synopTEMP -->
                        <h5 id="synopTemp-Title" style="color: #000000;"></h5>
                        <div id="synopTempImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="synopTemp-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopMeanSeaLevel -->
                        <h5 id="synopMeanSeaLevel-Title" style="color: #000000;"></h5>
                        <div id="synopMeanSeaLevelImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopMeanSeaLevel-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopCloudCover -->
                        <h5 id="synopCloudCover-Title" style="color: #000000;"></h5>
                        <div id="synopCloudCoverImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="synopCloudCover-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>


                        <!-- synopGeopotentialHeight -->
                        <h5 id="synopGeopotentialHeight-Title" style="color: #000000;"></h5>
                        <div id="synopGeopotentialHeightImage"
                            style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopGeopotentialHeight-lists" style="display: flex; display: none; flex-wrap: wrap;">
                        </p>

                        <!-- synopRelativeHumidity -->
                        <h5 id="synopRelativeHumidity-Title" style="color: #000000;"></h5>
                        <div id="synopRelativeHumidityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopRelativeHumidity-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopVisibility -->
                        <h5 id="synopVisibility-Title" style="color: #000000;"></h5>
                        <div id="synopVisibilityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopVisibility-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopWindSpeedAndDirection -->
                        <h5 id="synopWindSpeedAndDirection-Title" style="color: #000000;"></h5>
                        <div id="synopWindSpeedAndDirectionImage"
                            style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopWindSpeedAndDirection-lists" style="display: flex; display: none; flex-wrap: wrap;">
                        </p>

                        <!-- synop3hRainfall -->
                        <h5 id="synop3hRainfall-Title" style="color: #000000;"></h5>
                        <div id="synop3hRainfallImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synop3hRainfall-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>
                    </div>

                    <!-- Radar -->
                    <div class="row" id="RADAR_Row" style="display: none;">
                        <h4 id="RADARPRODUCTS"
                            style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="RADARImage"
                            style="margin-left: 10px; margin-top: 10px display: flex; flex-wrap: wrap;">
                        </div>

                        <h5 id="RADARPRODUCTS-Title" style="color: #000000;"></h5>
                        <p id="RADARPRODUCTS-lists" style="flex-wrap: wrap;"></p>
                    </div>

                    <!-- SATELLITE -->
                    <div class="row" id="SATELLITE_Row" style="display: none;">
                        <h4 id="SATELLITE" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>

                        <h5 id="SATELLITE-Title" style="color: #000000;"></h5>
                        <p id="SATELLITE-lists" style="display: flex; flex-wrap: wrap;"></p>

                    </div>

                    <!-- LIGHTINING -->
                    <div class="row" id="LIGHTINING_Row" style="display: none;">
                        <h4 id="LIGHTINING" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="LIGHTININGImage"
                            style="margin-left: 10px; margin-top: 10px display: flex; flex-wrap: wrap;">
                        </div>

                        <h5 id="LIGHTINING-Title" style="color: #000000;"></h5>
                        <p id="LIGHTINING-lists" style="flex-wrap: wrap;"></p>

                    </div>
                    <!-- SOUNDING -->
                    <div id="SOUNDING_Row" style="display: none;">
                        <h4 id="SOUNDING" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="soundingImage"
                            style="margin-left: 10px; margin-top: 10px display: flex; flex-wrap: wrap;">
                        </div>

                        <h5 id="SOUNDING00UTCWIND-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING00UTCWIND-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING12UTCWIND-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING12UTCWIND-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING00UTCTEMP-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING00UTCTEMP-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING12UTCTEMP-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING12UTCTEMP-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING00UTCDEWPOINT-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING00UTCDEWPOINT-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING12UTCDEWPOINT-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING12UTCDEWPOINT-lists" style="flex-wrap: wrap;"></p>

                    </div>
                    <!-- SHIPANDBUOY -->
                    <div class="row" id="SHIPANDBUOY_Row" style="display: none;">
                        <h4 id="SHIPANDBUOY"
                            style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="SHIPANDBUOYImage"
                            style="margin-left: 50px; margin-top: 10px display: flex; flex-wrap: wrap;"></div>
                        <h5 id="SHIPANDBUOY-Title" style="color: #000000;"></h5>
                        <p id="SHIPANDBUOY-lists" style="flex-wrap: wrap;"></p>
                    </div>
                    <!-- MESOLSCALE -->
                    <div class="row" id="MESOLSCALE_Row" style="display: none;">
                        <h4 id="MESOLSCALE" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>

                        <h5 id="WRFReflectivity-Title" style="color: #000000;"></h5>
                        <div id="WRFReflectivityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="WRFReflectivity-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="WRFlightningProduct-Title" style="color: #000000;"></h5>
                        <div id="WRFlightningProductImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="WRFlightningProduct-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="WRFAccumlatedRainfall-Title" style="color: #000000;"></h5>
                        <div id="WRFAccumlatedRainfallImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="WRFAccumlatedRainfall-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="lightningPotentialindex-Title" style="color: #000000;"></h5>
                        <div id="lightningPotentialindexImage"
                            style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="lightningPotentialindex-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="NCUMRlightningProduct-Title" style="color: #000000;"></h5>
                        <div id="NCUMRlightningProductImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="NCUMRlightningProduct-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="NCUMRWindGust-Title" style="color: #000000;"></h5>
                        <div id="NCUMRWindGustImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="NCUMRWindGust-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="NCUMRRainfall-Title" style="color: #000000;"></h5>
                        <div id="NCUMRRainfallImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="NCUMRRainfall-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="HRRR_SPHourlyDBZ-Title" style="color: #000000;"></h5>
                        <div id="HRRR_SPHourlyDBZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="HRRR_SPHourlyDBZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="HRRR_NEHourlyDBZ-Title" style="color: #000000;"></h5>
                        <div id="HRRR_NEHourlyDBZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="HRRR_NEHourlyDBZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="HRRR_NWHourlyDBZ-Title" style="color: #000000;"></h5>
                        <div id="HRRR_NWHourlyDBZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="HRRR_NWHourlyDBZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="EWRFMaxZ-Title" style="color: #000000;"></h5>
                        <div id="EWRFMaxZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="EWRFMaxZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="EWRFLightning-Title" style="color: #000000;"></h5>
                        <div id="EWRFLightningImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="EWRFLightning-lists" style="flex-wrap: wrap;"></p>

                    </div>
                    <!-- MEDIUM -->
                    <div class="row" id="MEDIUM_Row" style="display: none;">
                        <h4 id="MEDIUM" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>

                        <div id="RainfallIntensityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <h5 id="RainfallIntensityDay1-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay1-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay2-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay2-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay3-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay3-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay4-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay4-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay5-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay5-lists" style="flex-wrap: wrap;"></p>

                        <div id="MSLPDayImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <h5 id="MSLPDay1-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay1-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay2-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay2-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay3-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay3-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay4-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay4-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay5-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay5-lists" style="flex-wrap: wrap;"></p>

                        <div id="mWINDDayImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <h5 id="mWINDDay1-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay1-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay2-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay2-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay3-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay3-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay4-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay4-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay5-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay5-lists" style="flex-wrap: wrap;"></p>

                    </div>

                </div>
            </div>
        </div>
</body>
<!-- adding JS -->
<?php $this->load->view('HomePage/scripts'); ?>

<!-- screenshoter -->
<!-- <script src="https://unpkg.com/leaflet-simple-map-screenshoter"></script>
<script>
L.simpleMapScreenshoter().addTo(map);
</script> -->



<!-- <script> -->
<!-- L.simpleMapScreenshoter().addTo(map)
Initialize the Leaflet.Screenshot control
L.control.screenshot().addTo(map);
let printMap = L.control.browserPrint({
position: 'topleft',
documentTitle: 'WEATHER DECISION SUPPORT SYSTEM',
documentTitleClass: 'print-title'
}).addTo(map); -->
<!-- </script> -->
<script type="text/javascript">
// 
window.onload = function() {
    var element = document.querySelector('.leaflet-panel-layers-list.leaflet-control-layers-scrollbar');

    if (element) {
        element.style = null;
        element.style.overflow = 'hidden';
    }
};









// 
$("body").addClass("sidebar-collapse");
var wea = L.marker([22.21, 61.56], {
    icon: L.divIcon({
        html: 'NWA',
        className: 'text-marker',
    })
}).bindTooltip('NORTH WEST ARABIAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var nea = L.marker([21.69, 67.34], {
    icon: L.divIcon({
        html: 'NEA',
        className: 'text-marker',
    })
}).bindTooltip('NORTH EAST ARABIAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var wca = L.marker([15.77, 60.68], {
    icon: L.divIcon({
        html: 'WCA',
        className: 'text-marker',
    })
}).bindTooltip('WEST CENTRAL ARABIAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var eca = L.marker([17.37, 67.95], {
    icon: L.divIcon({
        html: 'ECA',
        className: 'text-marker',
    })
}).bindTooltip('EAST CENTRAL ARABIAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var swa = L.marker([8.50, 59.87], {
    icon: L.divIcon({
        html: 'SWA',
        className: 'text-marker',
    })
}).bindTooltip('SOUTH WEST ARABIAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var sea = L.marker([8.87, 68.25], {
    icon: L.divIcon({
        html: 'SEA',
        className: 'text-marker',
    })
}).bindTooltip('SOUTH EAST ARABIAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var lak = L.marker([9.67, 73.45], {
    icon: L.divIcon({
        html: 'LAK',
        className: 'text-marker',
    })
}).bindTooltip('LAKSHADWEEP AREA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var mal = L.marker([6.07, 72.85], {
    icon: L.divIcon({
        html: 'MAL',
        className: 'text-marker',
    })
}).bindTooltip('MALDIVES AREA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var com = L.marker([6.42, 76.68], {
    icon: L.divIcon({
        html: 'COM',
        className: 'text-marker',
    })
}).bindTooltip('COMORIN AREA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var swb = L.marker([8.23, 83.20], {
    icon: L.divIcon({
        html: 'SWB',
        className: 'text-marker',
    })
}).bindTooltip('SOUTH WEST BAY OF BENGAL', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var seb = L.marker([8.33, 89.36], {
    icon: L.divIcon({
        html: 'SEB',
        className: 'text-marker',
    })
}).bindTooltip('SOUTH EAST BAY OF BENGAL', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var sas = L.marker([7.48, 95.42], {
    icon: L.divIcon({
        html: 'SAS',
        className: 'text-marker',
    })
}).bindTooltip('SOUTH ANDAMAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var wcb = L.marker([15.09, 84.66], {
    icon: L.divIcon({
        html: 'WCB',
        className: 'text-marker',
    })
}).bindTooltip('WEST CENTRAL BAY OF BENGAL', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var ecb = L.marker([15.19, 90.87], {
    icon: L.divIcon({
        html: 'ECB',
        className: 'text-marker',
    })
}).bindTooltip('EAST CENTRAL BAY OF BENGAL', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var nas = L.marker([11.85, 96.07], {
    icon: L.divIcon({
        html: 'NAS',
        className: 'text-marker',
    })
}).bindTooltip('NORTH ANDAMAN SEA', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var nwb = L.marker([19.00, 87.59], {
    icon: L.divIcon({
        html: 'NWB',
        className: 'text-marker',
    })
}).bindTooltip('NORTH WEST BAY OF BENGAL', {
    permanent: false,
    direction: 'auto'
}).addTo(map);
var neb = L.marker([18.70, 91.83], {
    icon: L.divIcon({
        html: 'NEB',
        className: 'text-marker',
    })
}).bindTooltip('NORTH EAST BAY OF BENGAL', {
    permanent: false,
    direction: 'auto'
}).addTo(map);

var oc =
    '{"type": "FeatureCollection","name": "bob","crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },"features": [{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 63.2, 20.0 ], [ 72.6, 20.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 57.8, 20.0 ], [ 72.6, 20.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 83.6, 18.0 ], [ 94.4, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 90.0, 22.0 ], [ 90.0, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 88.5, 18.0 ], [ 88.5, 13.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 80.27, 13.0 ], [ 92.97, 13.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 13.0 ], [ 93.0, 7.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 86.0, 13.0 ], [ 86.0, 7.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 13.0 ], [ 94.4, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 25.2 ], [ 65.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 5.0 ], [ 79.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 75.0, 8.0 ], [ 75.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 7.0 ], [ 79.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 5.0 ], [ 93.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 86.0, 7.0 ], [ 86.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 7.0 ], [ 93.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 75.0, 8.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 71.5, 12.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 71.497353553605507, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 5.0 ], [ 95.36, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 9.0 ], [ 98.2, 9.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 98.26, 8.0 ], [ 96.0, 5.38 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 7.0 ], [ 79.0, 8.9 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 8.9 ], [ 79.0, 9.260000000000105 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 5.0 ], [ 48.6, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 75.2, 12.000000000000114 ], [ 52.000000000000114, 12.000000000000114 ], [ 50.715135973047325, 11.999682222026195 ] ] } }]}';
ocean1 = L.geoJson((JSON.parse(oc)), {
    color: 'grey',
}).addTo(map);

function createGrid() {
    var gridLines = [];

    // Create latitude lines passing through longitude 0
    for (var lat = -90; lat <= 90; lat += 10) {
        var line = {
            "type": "Feature",
            "properties": {
                "Id": 0
            },
            "geometry": {
                "type": "LineString",
                "coordinates": [
                    [0, lat],
                    [180, lat]
                ]
            }
        };
        gridLines.push(line);
    }

    // Create longitude lines passing through latitude 0
    for (var lon = -180; lon <= 180; lon += 10) {
        var line = {
            "type": "Feature",
            "properties": {
                "Id": 0
            },
            "geometry": {
                "type": "LineString",
                "coordinates": [
                    [lon, 0],
                    [lon, 90]
                ]
            }
        };
        gridLines.push(line);
    }

    return gridLines;
}

// Create the grid with dotted lines
// var worldGrid = L.geoJson({
//     "type": "FeatureCollection",
//     "features": createGrid()
// }, {
//     color: 'white',
//     dashArray: '5, 5'
// }).addTo(map);
</script>
<!-- print code start  -->
<script>
//function generate_report_and_save() {
$(".printbutton").click(function() {
    $(".printbutton").addClass('running');
    html2canvas($("#map"), {
        useCORS: true,
        allowTaint: false,
        onrendered: function(canvas) {
            var image = Canvas2Image.convertToPNG(canvas);
            var image_data = $(image).attr('src');
            var random_name = "<?php echo date('Y_m_d_H_i_s'); ?>";
            $.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>Welcome/saveReportImg",
                data: {
                    base64: image_data,
                    r_file_name: random_name
                },
                success: function(_data_, status) {
                    var _status = status;
                    if (_status == 'success') {
                        var win = window.open('<?php echo base_url()?>' + _data_,
                            '_blank');
                        if (win) {
                            win.focus();
                        } else {
                            alert('Please allow popups for this website');
                        }
                    } else {
                        alert("Something wrong with your please check it later");
                    }
                }
            });
        }
    });

});
</script>
<script>
$(document).ready(function() {
    $(".printbutton").on("click", function() {
        let printlegenddata = document.getElementById('printlegend').innerHTML;
        // console.log("printasdjkhcvjks", printlegenddata);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('welcome/legends'); ?>",
            data: {
                content: printlegenddata
            }, // Changed userId to content
            success: function(response) {
                console.log("resp", response);
            },
            error: function(error) {
                console.error('error', error);
            }
        });
    })
});
</script>
<script src="leaflet.browser.print.min.js"></script>
<script>
var browserControl = L.control.browserPrint().addTo(map);

// css
browserControl.getContainer().style.top = '-76px';
</script>
<!-- print code end  -->