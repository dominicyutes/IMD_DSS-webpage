<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WEATHER DECISION SUPPORT SYSTEM</title>
    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('stylesheet')?>/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div style="height: 100%;">
        <div class="fixedHead">
            <img src="<?php echo base_url('img/emblem.png'); ?>" alt="Emblem of India" height="30" style="padding-left: 1%;">
            <div style="flex: 1; text-align: center;">
                <span class="text" style="font-family: 'Times New Roman';">WEATHER DECISION SUPPORT SYSTEM</span>
            </div>
            <img src="<?php echo base_url('img/imd_logo_a.png'); ?>" alt="IMD logo" height="35" style="padding-right: 1%;">
        </div>
    </div>
<div class="wrapper">    
        
        <style>
            /* .layout-fixed .main-sidebar{
                top : 48px !important;
            } */
            .text {
                font-family: 'Archivo', sans-serif;
                font-size: 160%;
                font-weight: 600;
                color: white;
                letter-spacing: 3px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .fixedHead {
                background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 60px;
                width: 100%;
                position: relative;
                margin-top: -11px;
                margin-left: 0px;
                left : 250px;
            }
            .main {
                margin-right: 10px;
                margin-left: 225px;
                margin-bottom: -300px;
                padding: 0px 10px;
                margin-top: -916px;
            }
            .btn {
                background-color: #f1f1f1;
                color: black;
                cursor: pointer;
                border-radius: 5px;
                text-align: center;
            }
            .btn:hover {
                background-color: black;
                color: white;
            }


            @media screen and (max-height: 450px) {
                .sidebar {
                    padding-top: 15px;
                }

                .sidebar a {
                    font-size: 18px;
                }
            }
            .ui-dialog {
                z-index: 9999999 !important;
            }
            .sidebar {
                height: 100vh;
                background-color: #2c5383;
            }
            .pull-right {
                float:right;
            }
    </style>
    