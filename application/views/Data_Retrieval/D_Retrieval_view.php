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


    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/js/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_draw/leaflet.draw.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/leaflet_1.7.1/leaflet.fullscreen.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>stylesheet/leaflet_map/coordinate/Leaflet.Coordinates-0.1.3.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>stylesheet/leaflet_map/grouped_layer_control/leaflet.groupedlayercontrol.css" />
    <style>
        .main {
            margin-right: 10px;
            margin-left: 225px;
            margin-bottom: -300px;
            padding: 0px 10px;
            margin-top: -916px;
        }

        .btn {
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
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
    </style>
    <style type="text/css">
        .ui-dialog {
            z-index: 9999999 !important;
        }

        th.dt-center,
        td.dt-center {
            text-align: center;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .leaflet-control-lasso {
            display: none !important;
        }

        .temp_tooltip_cont {
            background: none;
            border: none;
            box-shadow: none;
        }

        [class*="forecast_temp_tooltip_cont_"] {
            background: none !important;
            border: none !important;
            box-shadow: none !important;
        }

        .temp_tooltip {
            overflow: hidden;
            border-radius: 5px;
            color: white;
            box-shadow: 0px 0px 1px black;
            text-align: center !important;
        }

        .leaflet-control-layers-list {
            text-align: initial !important;
        }

        .leaflet-control-layers-scrollbar {
            height: 100% !important;
        }

        .leaflet-control-attribution leaflet-control {
            display: none !important;
        }

        img.leaflet-marker-icon.leaflet-zoom-animated.leaflet-interactive {
            display: none !important;
        }

        .ui-dialog {
            z-index: 9999999 !important;
        }

        /*.ui-button.ui-corner-all.ui-widget.ui-button-icon-only.ui-dialog-titlebar-close {
        display: none;
    }*/
        /*ui-button-icon ui-icon ui-icon-closethick*/

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: left;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .uiElement {
            color: firebrick;
            background: transparent;
            font-size: x-small;
            font: 13px/1.5 "Helvetica Neue", Arial, Helvetica, sans-serif;
        }

        .leaflet-control-coordinates {
            background-color: transparent !important;
        }

        #toggle_right_panel {
            cursor: pointer;
        }

        .legend_max_temp {
            line-height: 18px;
            color: #555;
        }

        .legend_max_temp i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 1;
        }
    </style>
</head>

<body>


    <div style="height: 100%;">

        <div class="fixedHead">
            <?php $this->load->view('Menu/Landing_page_top'); ?>
        </div>
        <?php $this->load->view('Menu/Landing_page_side.php'); ?>
        <?php $this->load->view('Menu/Landing_page_bottom'); ?>

        <div class="main">

        <div class="content-wrapper">
    <section class="content-header">
        <!-- <h1> Maximum Temperature </h1> -->
        <ol class="breadcrumb">
            <!-- <li><a href="javascript:void(0);"><i class="fa ion-map"></i>Value Addition Graphical</a></li> -->
            <!-- <li class="active"><a href="<?=base_url('ValueAddition/HeatwaveSetAlert/index');?>">Max. Temperature</a></li> -->
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active" ><a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert" >Max. Temperature</a></li>
                        <!-- <li><a href="<?php echo base_url(); ?>ValueAddition/Min_temp" >Min. Temperature</a></li>
                        <li><a href="<?php echo base_url(); ?>ValueAddition/Rainfall">Rainfall</a></li>
                        <li><a href="<?php echo base_url(); ?>ValueAddition/Humidity">Relative Humidity</a></li> -->
                        <!-- <li><a href="<?php echo base_url(); ?>ValueAddition/Min_temperature" >ColdWave</a></li> -->
                        
                        <div class="data_type_bt pull-right" style="margin-top: 7px;margin-right: 5px;">
                            <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/imd" type="button" class="btn <?php echo preg_match("/imd/", $fcst_data_type)?'active btn-info':'btn btn-warning'; ?>">IMD - GFS</a>
                            <!-- <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/ecmwf" type="button" class="btn <?php echo preg_match("/ecmwf/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">ECMWF</a>
                            <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/ensemble" type="button" class="btn <?php echo preg_match("/ensemble/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">ENSEMBLE</a> 
                            <a href="<?php echo base_url(); ?>ValueAddition/HeatwaveSetAlert/index/<?php echo $active_map_type; ?>/weight" type="button" class="btn <?php echo preg_match("/weight/", $fcst_data_type)?'btn btn-info':'btn btn-warning'; ?>">WEIGHTED</a> -->
                        </div>
                        <!-- <select name="regionals" id="regionals"  style="margin-top: 15px;margin-right: 5px;">
                            <option value="0">Select Region</option>
                            <option value="1">NIO</option>
                            <option value="2">NCO</option>
                            <option value="3">SIO</option>
                            <option value="4">SCO</option>
                        </select> -->
                        <div class="box-tools pull-right" style="margin-top: 7px;margin-right: 5px;">
                            <div class="btn-group">
                                <!-- <?php
                                    $day_attr = array("name" => "day_form", "method" => "get");
                                    echo form_open("ValueAddition/HeatwaveSetAlert/index/".$active_map_type."/".$fcst_data_type."/".$active_param_type, $day_attr);
                                ?> -->
                                    <!-- <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/1$/", $active_day)?'active':''; ?>" value="Day 1"/>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/2$/", $active_day)?'active':''; ?>" value="Day 2"/>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/3$/", $active_day)?'active':''; ?>" value="Day 3"/>
                                    <?php if($fcst_data_type != 'wrf') {?>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/4$/", $active_day)?'active':''; ?>" value="Day 4"/>
                                    <input type="submit" name="submit_day" class="btn btn-default <?php echo preg_match("/5$/", $active_day)?'active':''; ?>" value="Day 5"/>  
                                    <?php } ?>                   -->
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </ul>
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-12" id="initial_max">
                                <!-- DIRECT CHAT -->
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><i class="fa fa-calendar-check-o"></i> Day [<span style="color: #00b3ee;" ><?php echo date('d-M-Y', strtotime("$curr_date")); ?></span>]</h3>
                                    </div> <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-tools pull-right" id="back_bt" style="display: none;">
                                            <button type="button" name="" class="btn btn-block btn-danger" value=""><i class="ion-ios-undo"></i>&nbsp;&nbsp; Back to District</button>
                                        </div>
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <!-- <li class="pull-right"><img  title="open" id="toggle_right_panel" attr-togglev="1" class="toggle_right_panel" src="<?php echo base_url('stylesheet/images/collapse_open.png'); ?>" style="display: none;" /> </li> -->
                                             </ul>
                                            <div class="active tab-pane">
                                                <div style="border:#333 1px ridge; overflow: hidden;">
                                                    <div id="map_canvas" style="width:100%; height:500px; float: left;" align="center"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.col -->

                            <div class="col-md-4" style="display: none;" id="hidden_tab">
                                <div class="box" style="height: 500px; margin-bottom: 60px; " >
                                    <div class="box-header with-border">
                                        <div id="select_map_tools_gp">
                                            <div>
                                                <button id="_add_temp_value" type="button" style="display: none;" class="btn btn-success btn-sm"><b><i class="ion-ios-plus"></i>&nbsp;&nbsp;Add</b></button>
                                                <button id="_subtract_temp_value" type="button" style="display: none;" class="btn btn-success btn-sm"><b><i class="ion-ios-minus"></i>&nbsp;&nbsp;Subtract</b></button>
                                                <input id="enter_add_subtract_temp_value" type="number" style="display: none; width: 5em;" step="0.01"  ></input>
                                                <input type="hidden" id="flag_add_subtract" value="0">
                                            </div>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-header with-border">
                                        <div id="select_map_tools_gp">
                                            <div>
                                                <input type="radio" id="_less_than" name="less_greater_filter" value="1">
                                                <label for="html"><i class="fa-solid fa-less-than-equal"></i></label>
                                                <input type="radio" id="_greater_than" name="less_greater_filter" value="2">
                                                <label for="css"><i class="fa-solid fa-greater-than-equal"></i></label>
                                                <input id="_less_greater_temp_value" type="number"></input>
                                                <button id="filter_less_greater" type="button" class="btn btn-success btn-sm"><b><i class="fa-solid fa-filter"></i>Filter</b></button>
                                                <input type="hidden" id="flag_less_greater" value="0">
                                            </div>
                                        </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body" style="height: 75%">
                                        <div id="selectedAreaTBResultPart"></div>
                                        <div class="col-md-12" id="group_name_polygon_tab">
                                            <label for="group_name_polygon" class="col-md-6">Polygon Group Name</label>
                                            <div class="col-md-6">
                                                <input id="group_name_polygon" type="text" name="group_name_polygon" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div id="selectedResult"></div>
                                    </div><!-- /.box-body -->
                                    
                                    <div class="box-footer" style="margin-top: 15px;">
                                        <button id="set_alert_bt" type="button" name="" class="btn btn-block btn-success" value="" style="display: none;">Ok</button>
                                    </div><!-- /.box-footer -->
                                </div><!--/.box -->
                                
                                <div class="box box-primary" style="height: 400px;">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Set Alert List</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body" style="height: 75%">
                                        <div id="selectedAlertTBResultPart"></div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button id="confirm_alert_bt" type="button" name="" class="btn btn-block btn-primary" value="" style="display: none;">Confirm Set Alert</button>
                                    </div><!-- /.box-footer -->
                                </div> <!-- /.box -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                </div>
         </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Block Wise Alert</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div id="currAlertTBResultPart"></div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <span id="update_info"></span>
                    </div><!-- /.box-footer -->
                </div>
            </div>
        </div>
        <div id="dialog_temp_extension_block" style="display: none;">
        	<div id="temp_extension_block" class="dialog" ></div>
        </div>
        <div id="dialog_add_subtract" style="display: none;">
        	<div id="add_subtract_data" class="dialog" ></div>
        </div>

        <div id="dialog_map_choose_block" style="display: none;">
            <div id="map_choose_block" class="dialog" ></div>
        </div>

    </section>
</div>
    </div>