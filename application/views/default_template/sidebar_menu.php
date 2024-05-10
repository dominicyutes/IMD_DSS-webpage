
<aside class="main-sidebar">                
    <section class="sidebar">
        <ul class="sidebar-menu">
            
                     

            <li class="<?php echo ($this->uri->segment(1) == "Home") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>Home/index"><i class="fa fa-home"></i> <span>Home</span></a></li>

            <li class="<?php echo ($this->uri->segment(2) == "Overview") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Overview_new/ecmwf'); ?>"><img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Heat wave Forecast.png');?>"/> <span>Heat Wave Overview</span></a></li>
            <li class="<?php echo ($this->uri->segment(2) == "ColdWave_ovw") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/ColdWave_ovw/ecmwf'); ?>"><img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Cold wave Forecast.png');?>"/> <span>Cold Wave Overview</span></a></li>
            <li class="<?php echo ($this->uri->segment(2) == "WarmNight") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/WarmNight/ecmwf'); ?>"><img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Cold wave Forecast.png');?>"/> <span>Warm Night</span></a></li>

            <li class="<?php echo ($this->uri->segment(2) == "HeatIndex") ? "active" : ""; ?> treeview">
                    <a href="#">
                        <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Heat_index_Forecast.png');?>"/> <span>Heat Index Forecast</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(3) == "imd_gfs") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatIndex/imd_gfs'); ?>"><i class="fa fa-circle-o"></i>IMD-GFS</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "ensemble") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatIndex/ensemble'); ?>"><i class="fa fa-circle-o"></i>ENSEMBLE</a></li>
                        <!-- <li class="<?php echo ($this->uri->segment(3) == "wrf") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatIndex/wrf'); ?>"><i class="fa fa-circle-o"></i>WRF</a></li> -->
                        <li class="<?php echo ($this->uri->segment(3) == "ecmwf") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatIndex/ecmwf'); ?>"><i class="fa fa-circle-o"></i>ECMWF</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "value_added") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatIndex/value_added'); ?>"><i class="fa fa-circle-o"></i>VALUE ADDED</a></li> 
                    </ul>
                </li>  

               <!--  <li class="<?php echo ($this->uri->segment(3) == "WeatherForecast") ? "active" : ""; ?><?php echo ($this->uri->segment(3) == "value_added_forecast") ? "active" : ""; ?> treeview">
                    <a href="#">
                        <i class="fa fa-cloud"></i> <span>Weather Forecast</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(4) == "imd_gfs") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/WeatherForecast/imd_gfs'); ?>"><i class="fa fa-circle-o"></i>IMD-GFS</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "wrf") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/WeatherForecast/wrf'); ?>"><i class="fa fa-circle-o"></i>WRF</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "ecmwf") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/WeatherForecast/ecmwf'); ?>"><i class="fa fa-circle-o"></i>ECMWF</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "ensemble") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/WeatherForecast/ensemble'); ?>"><i class="fa fa-circle-o"></i>ENSEMBLE</a></li>
                         <li class="<?php echo ($this->uri->segment(3) == "value_added_forecast") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/value_added_forecast'); ?>"><i class="fa fa-circle-o"></i>Value Added Forecast</a></li> 
                    </ul>
                </li>  -->

                <li class="<?php echo ($this->uri->segment(2) == "Comparision") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Comparision'); ?>"><img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Heat_wave-Obsevation_vs_Forecast.png');?>"/><span> Observed vs Forecast</span></a></li> 
                <?php if ($this->session->userdata('role') == "1" && "10") { ?>
                <li class="<?php echo ($this->uri->segment(3) == "Stations") ? "active" : ""; ?> treeview">
                    <a href="#">
                        <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Heatwave-Temp. Normals.png');?>"/>  <span>Temperature Normals</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(4) == "imd_gfs") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Stations/heatwave'); ?>"><i class="fa fa-circle-o"></i>Heat Wave</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "wrf") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Stations/coldwave'); ?>"><i class="fa fa-circle-o"></i>Cold Wave</a></li>
                    </ul>

                </li>
                <?php } ?>
            <!-- <?php
            if ($this->session->userdata('role') == "1") {
                ?>
            <li class="<?php echo ( ($this->uri->segment(2) == "HeatwaveSetAlert") || ($this->uri->segment(2) == "HeatwaveAdvisory") || ($this->uri->segment(2) == "HeatwaveSendAlert") )  ? "active" : ""; ?> treeview">
                <a href="#">
                    <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Heatwave-Value Addition Graphical.png');?>"/><span> Value Addition Graphical</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(3) == "Heatwave") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatwaveSetAlert/Heatwave'); ?>"><i class="fa fa-circle-o"></i>Heat Wave Alert Dissemination</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "Heatwave_draw") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatwaveSetAlert/Heatwave_draw'); ?>"><i class="fa fa-circle-o"></i>Alert Dissemination (Testing)</a></li> 
                    <li class="<?php echo ($this->uri->segment(3) == "Advisory") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/HeatwaveAdvisory/Advisory'); ?>"><i class="fa fa-circle-o"></i> Advisory</a></li>

                    <li class="<?php //echo ($this->uri->segment(3) == "sendAlert") ? "active" : ""; ?>"><a href="<?//= site_url('ValueAddition/Va_add_graphic_send_alert/sendAlert'); ?>"><i class="fa fa-circle-o"></i> Send Alert</a></li>

                </ul>
            </li> -->
            
<!--
            <li class="<?php echo ($this->uri->segment(2) == "Imd_advisory_hw") ? "active" : ""; ?> treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Imd advisory </span> <i class="fa fa-angle-left pull-right"></i>
                </a>                                        
                <ul class="treeview-menu">
                    <?php if ($role == 5) { ?>                       
                        <li class="<?php echo ($this->uri->segment(3) == "heatwave_imd") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Imd_advisory_hw/heatwave_imd'); ?>"><i class="fa fa-circle-o"></i>Heat advisory</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "va_heatwave_index") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Imd_advisory_hw/va_heatwave_index'); ?>"><i class="fa fa-circle-o"></i>Heat advisory Edit/Update</a></li>
                    <?php } else { ?>
                        <li class="<?php echo ($this->uri->segment(3) == "heatwave_imd") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Imd_advisory_hw/heatwave_imd'); ?>"><i class="fa fa-circle-o"></i>Heat advisory</a></li>                        
                    <?php }?>    
                </ul>
            </li>
-->
                
               <!--  <li class="<?php echo ($this->uri->segment(2) == "Stations") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Stations'); ?>"><i class="fa fa-bar-chart-o"></i><span>Temperature Normals</span></a></li> -->
                

            <?php } ?>

                
                <!-- <li class="<?php echo ($this->uri->segment(3) == "HeatWave") ? "active" : ""; ?> treeview">
                    <a href="#">
                        <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Heat wave Forecast.png');?>"/> <span>Heat Wave Overview</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(4) == "imd_gfs") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/HeatWave/imd_gfs'); ?>"><i class="fa fa-circle-o"></i>IMD</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "wrf") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/HeatWave/wrf'); ?>"><i class="fa fa-circle-o"></i>WRF</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "ecmwf") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/HeatWave/ecmwf'); ?>"><i class="fa fa-circle-o"></i>ECMWF</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "ensemble") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Forecast/HeatWave/ensemble'); ?>"><i class="fa fa-circle-o"></i>Ensemble</a></li>
                    </ul>
                </li>   -->
               <!--  <li class="<?php echo ($this->uri->segment(3) == "ColdWave") ? "active" : ""; ?> treeview">
                    <a href="#">
                       <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Cold wave Forecast.png');?>"/> <span>Cold Wave Forecast</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(4) == "imd_gfs") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Forecast/ColdWave/imd_gfs'); ?>"><i class="fa fa-circle-o"></i>IMD</a></li> 
                        <li class="<?php echo ($this->uri->segment(4) == "wrf") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Forecast/ColdWave/wrf'); ?>"><i class="fa fa-circle-o"></i>WRF</a></li>
                        <li class="<?php echo ($this->uri->segment(4) == "ecmwf") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Forecast/ColdWave/ecmwf'); ?>"><i class="fa fa-circle-o"></i>ECMWF</a></li>
                         <li class="<?php echo ($this->uri->segment(4) == "ensemble") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Forecast/ColdWave/ensemble'); ?>"><i class="fa fa-circle-o"></i>Ensemble</a></li> 
                    </ul>
                </li>   -->

                
            <?php
            if ($this->session->userdata('role') == "1" && "10") { ?>
                <li class="<?php echo ($this->uri->segment(2) == "Advisory") ? "active" : ""; ?>"><a href="#"><i class="fa fa-paperclip"></i><span>Advisory</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(3) == "HeatWave") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Advisory/AdvisoryPdf'); ?>"><i class="fa fa-circle-o"></i>Heat Wave</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "ColdWave") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Advisory/AdvisoryPdf'); ?>"><i class="fa fa-circle-o"></i>Cold Wave</a></li>
                    </ul>
                </li>
            <?php  }  ?>
            <li class="<?php echo ($this->uri->segment(3) == "Awareness") ? "active" : ""; ?> treeview">
                <a href="#">
                    <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Heat/Heatwave Awareness.png');?>"/> <span>Awareness</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(4) == "HeatWave") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Page/Awareness'); ?>"><i class="fa fa-circle-o"></i><span>Heat Wave</span></a></li>
                    <li class="<?php echo ($this->uri->segment(4) == "ColdWave") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Page/Awareness'); ?>"><i class="fa fa-circle-o"></i><span>Cold Wave</span></a></li>
                </ul>
            </li>
            <!-- <li class="treeview <?php echo ($this->uri->segment(2) == "Feedbacks") ? "active" : ""; ?>">
                <a href="<?= site_url('HeatWave/Feedbacks/index'); ?>"> <i class="fa fa-comments-o"></i> <span>Feedback</span></a>
            </li> -->
            <?php
            if ($this->session->userdata('role') == "1" && "3") {
                ?>
                <li class="<?php echo ($this->uri->segment(2) == "DataPanel") ? "active" : ""; ?> <?php echo ($this->uri->segment(2) == "Heatwave_Awareness") ? "active" : ""; ?> <?php echo ($this->uri->segment(2) == "Coldwave_Awareness") ? "active" : ""; ?> treeview">
                    <a href="#">
                        <i class="fa fa-database"></i> <span>Data Panel</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(3) == "DeathData") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/DataPanel/DeathData'); ?>"><i class="fa fa-circle-o"></i>Death Data</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "Stations") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/DataPanel/Stations'); ?>"><i class="fa fa-circle-o"></i>Weather Stations</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "StationNormals") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/DataPanel/StationNormals'); ?>"><i class="fa fa-circle-o"></i>Weather Stations Normals</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "ObservationSationsRecords") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/DataPanel/ObservationSationsRecords'); ?>"><i class="fa fa-circle-o"></i>IMD Stations Observations</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "StationsDistricts") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/DataPanel/StationsDistricts'); ?>"><i class="fa fa-circle-o"></i>District's Stations</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "StationsBlocks") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/DataPanel/StationsBlocks'); ?>"><i class="fa fa-circle-o"></i>Block's Stations</a></li>
                        <li class="<?php echo ($this->uri->segment(2) == "Heatwave_Awareness") ? "active" : ""; ?>"><a href="<?= site_url('HeatWave/Heatwave_Awareness/show_list'); ?>"><i class="fa fa-circle-o"></i>Heatwave Awareness</a></li>
                        <li class="<?php echo ($this->uri->segment(2) == "Coldwave_Awareness") ? "active" : ""; ?>"><a href="<?= site_url('ColdWave/Coldwave_Awareness/show_list'); ?>"><i class="fa fa-circle-o"></i>Coldwave Awareness</a></li> 

                    </ul>
                </li>
                <?php
            }
            ?>
            <!-- <li class="treeview"> <a href="<?= site_url('index.php/Login/log_out'); ?>" id="log_out_firebase" > <i class="fa fa-power-off"></i> <span>Logout</span></a></li> -->         
        </ul>        
    </section>    
</aside>