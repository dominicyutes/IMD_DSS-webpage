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
    <!-- <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/leaflet.draw.js">
    </script>
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