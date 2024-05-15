<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidebar {
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: grey;
        overflow-x: hidden;
        padding-top: 16px;
    }

    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 13px;
        color: white;
        display: block;
    }

    .sidebar a:hover {
        color: green;
    }

    .main {
        margin-left: 160px;
        padding: 0px 10px;
    }

    .dropdown-content {
        display: none;
        padding-left: 20px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body>
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

    <div class="sidebar">
        <a href="<?php echo base_url('HomePage');?>"><i class="fa fa-fw fa-home"></i> Home</a>

        <!-- Script to dynamically set the href attribute -->
        <div class="dropdown">
            <a href="#"><i class="fa fa-bar-chart"></i> Data Validation <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="<?php echo base_url('Rainfall_Validation_controller');?>">Rainfall</a>
                <a href="#service2">Heat</a>
                <a href="#service3">Cold</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#"><i class="fa fa-bar-chart"></i> Social Media <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="<?php echo base_url('Email'); ?>">Email</a>
                <a href="<?php echo base_url('Facebook_post'); ?>">Facebook FB</a>
                <a href="<?php echo base_url('Twitter_post'); ?>">Twitter</a>
            </div>
        </div>
    </div>

    <!-- <?php $this->load->view('Default_sidebar.php'); ?> -->

    <div class="main">
        <h1>landing page matter</h1>

    </div>

</body>

</html>