<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SATARK Portal</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" csrf_hash="<?php echo $this->security->get_csrf_hash(); ?>" csrf_name="<?php echo $this->security->get_csrf_token_name(); ?>" />
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- multiselect -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/bootstrap-multiselect.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/dist/css/AdminLTE.min.css">        
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/dist/css/system_custom.css">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>stylesheet/images/rimes.ico">
        <!-- loading buttons -->
         <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/loading-btn.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/loading.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheet/dist/css/daterangepicker.css" >

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/air-datepicker/css/datepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
        <style type="text/css">
            
            /** LEAFLET STYLE PATCH PLOTTING RAINFALL DATA **/

            .leaflet-container{
                z-index: 0
            }

            .leaflet-popup-pane{
                z-index: 300;
            }

            .leaflet-tile-pane{
                z-index: 200;
            }

            .leaflet-overlay-pane{
                z-index: 100;
            }

            .leaflet-overlay-pane canvas{
                z-index: 100;
            }
            .leaflet-overlay-pane .leaflet-draw-guides{
                z-index: 500;
            }
            .leaflet-draw-guide-dash{
                z-index: 3552;
            }

        </style>
    </head>
    

