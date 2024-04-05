<aside class="main-sidebar">                
    <section class="sidebar">
        <ul class="sidebar-menu">
            
            <!--            <li class="header"></li>
                        <li class="header"></li>-->
            <!-- Optionally, you can add icons to the links -->            
            <li class="<?php echo ($this->uri->segment(1) == "Home") ? "active" : ""; ?>"><a href="<?= site_url('Home/index'); ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="<?php echo ($this->uri->segment(2) == "Drought_overview") ? "active" : ""; ?> treeview">
                <a href="javascript:void(0);">
                    <!-- <i class="fa fa-dashcube"></i>  -->
                    <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Drought/Drought_Overview3.png');?>"/><span>Drought Monitoring</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(3) == "index_week") ? "active" : ""; ?> <?php echo ($this->uri->segment(3) == "index_week_imd") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_overview/index_week'); ?>"><i class="fa fa-circle-o"></i>Weekly Overview</a></li>
                    <?php if (in_array($this->session->userdata('role'), array(1, 3))) { ?>
                    <li class="<?php echo ($this->uri->segment(3) == "index_month") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_overview/index_month'); ?>"><i class="fa fa-circle-o"></i>Monthly Overview</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "seasonal_overview") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_overview/seasonal_overview'); ?>"><i class="fa fa-circle-o"></i>Seasonal Overview</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "spi_overview") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_overview/spi_overview'); ?>"><i class="fa fa-circle-o"></i>SPI Overview</a></li>
                     <?php } ?>
                </ul>               
            </li>

            <li class="<?php echo ($this->uri->segment(2) == "Imd_weather_forecast") ? "active" : ""; ?>">
                <a href="<?= site_url('Drought/Imd_weather_forecast'); ?>"><img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Weather_Forecast.png');?>"/><span>Weather Forecast</span></a>
            </li>

            <!-- <li class="<?php echo ($this->uri->segment(3) == "Value_added_forecast" || $this->uri->segment(3) == "Imd_forecast" || $this->uri->segment(3) == "Rimes_forecast" || $this->uri->segment(3) == "Ecmwf_forecast" || $this->uri->segment(3) == "Ensemble_forecast") ? "active" : ""; ?>">
                <a href="#">
                    <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Weather_Forecast.png');?>"/><span> Weather Forecast</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(3) == "Imd_forecast") ? "active" : ""; ?>"> <a href="<?php echo base_url(); ?>Drought/Forecast/Imd_forecast/imd_rainfall_dly"><i class="fa fa-circle-o"></i>IMD-GFS</a></li>                   
                    <li class="<?php echo ($this->uri->segment(3) == "Rimes_forecast") ? "active" : ""; ?>"> <a href="<?php echo base_url(); ?>Drought/Forecast/Rimes_forecast/rimes_rainfall_dly"><i class="fa fa-circle-o"></i>RIMES</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "Ecmwf_forecast") ? "active" : ""; ?>"> <a href="<?php echo base_url(); ?>Drought/Forecast/Ecmwf_forecast/ec_rainfall_dly"><i class="fa fa-circle-o"></i>ECMWF</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "Ensemble_forecast") ? "active" : ""; ?>"> <a href="<?php echo base_url(); ?>Drought/Forecast/Ensemble_forecast/ensemble_district_fc"><i class="fa fa-circle-o"></i>ENSEMBLE</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "Value_added_forecast") ? "active" : ""; ?>"> <a href="<?php echo base_url(); ?>Drought/Forecast/Value_added_forecast/Value_added_max_temp"><i class="fa fa-circle-o"></i>Value Added Forecast</a></li>
                </ul>
            </li> -->
            
            <li class="<?php echo ($this->uri->segment(2) == "District_information") ? "active" : ""; ?>">
                <a href="<?= site_url('Drought/District_information/index'); ?>"><img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Drought/District_overview.png');?>"/><span>District Overview</span></a>
                <!-- <a href="<?= site_url('Drought/District_information/index'); ?>"><i class="fa fa-tags"></i> <span>District Overview</span></a> -->
            </li>
            <?php if (in_array($this->session->userdata('role'), array(1, 3))) { ?>
            <li class="<?php echo ($this->uri->segment(2) == "Observation_analysis") ? "active" : ""; ?>">
                <!-- <a href="<?php echo base_url(); ?>Drought/Observation_analysis/index"><i class="fa ion-arrow-graph-up-right"></i> <span>Observation Analysis</span></a> -->
                <a href="<?php echo base_url(); ?>Drought/Observation_analysis/index"><img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Drought/observation_analysis.png');?>"/> <span>Observation Analysis</span></a>
            </li>
            <?php } ?>
            <!--<li class="<?php //echo ($this->uri->segment(2) == "Drought") ? "active" : ""; ?> treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-gear"></i> <span>Forecast</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php //echo ($this->uri->segment(3) == "drought_wrf_district") ? "active" : ""; ?>"><a href="<?//= //site_url('Drought/Drought/drought_wrf_district'); ?>"><i class="fa fa-circle-o"></i>RIMES</a></li>
                    <li class="<?php //echo ($this->uri->segment(3) == "drought_ecmwf_district") ? "active" : ""; ?>"><a href="<?//= //site_url('Drought/Drought/drought_ecmwf_district'); ?>"><i class="fa fa-circle-o"></i>ECMWF</a></li>
                    <li class="<?php //echo ($this->uri->segment(3) == "drought_imd_gfs_district") ? "active" : ""; ?>"><a href="<?//= //site_url('Drought/Drought/drought_imd_gfs_district'); ?>"><i class="fa fa-circle-o"></i>IMD</a></li>
                </ul>
            </li>-->
            <?php if (in_array($this->session->userdata('role'), array(1, 3))) { ?>
                <!-- <li class="<?php echo preg_match("/[Drought_crop_panel]+[Drought_major_crops]/", $this->uri->segment(2))?'active':''; ?> treeview"> -->
                    <li class="<?php echo ($this->uri->segment(2) == "Drought_crop_panel") ?'active':''; ?> treeview">
                    <a href="javascript:void(0);">
                        <!-- <i class="fa fa-building-o"></i>  -->
                        <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Drought/Crop_panel2.png');?>"/><span>Crop Panel</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        
                        <!-- <li class="<?php echo ($this->uri->segment(3) == "add_crop") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/add_crop'); ?>"><i class="fa fa-circle-o"></i>Add Crop</a></li> -->
                        <li class="<?php echo ($this->uri->segment(3) == "crop_list") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/crop_list'); ?>"><i class="fa fa-circle-o"></i>Crop List</a></li>
                        <!-- <li class="<?php echo ($this->uri->segment(3) == "index") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_major_crops/index'); ?>"><i class="fa fa-circle-o"></i>Major Crops</a></li> -->

                        <!--<li class="<?php //echo ($this->uri->segment(3) == "growth_stage_names") ? "active" : ""; ?>"><a href="<?//= site_url('Drought/Drought_crop_panel/growth_stage_names'); ?>"><i class="fa fa-circle-o"></i>Growth Stage Names</a></li>-->
                        <!-- <li class="<?php echo ($this->uri->segment(3) == "add_growth_stage") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/add_growth_stage'); ?>"><i class="fa fa-circle-o"></i>Add Growth Stage</a></li> -->
                        <li class="<?php echo ($this->uri->segment(3) == "list_crop_growth_stage") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/list_crop_growth_stage'); ?>"><i class="fa fa-circle-o"></i>Crop Growth Stages List</a></li>
                        <!--<li class="<?php //echo ($this->uri->segment(3) == "add_crop_activity") ? "active" : ""; ?>"><a href="<?//= site_url('Drought/Drought_crop_panel/add_crop_activity'); ?>"><i class="fa fa-circle-o"></i>Add Crop Activity</a></li>
                        <li class="<?php //echo ($this->uri->segment(3) == "list_crop_activity") ? "active" : ""; ?>"><a href="<?//= site_url('Drought/Drought_crop_panel/list_crop_activity'); ?>"><i class="fa fa-circle-o"></i>Crop Activity List</a></li>-->
                        <li class="<?php echo ($this->uri->segment(3) == "ideal_condition") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/ideal_condition'); ?>"><i class="fa fa-circle-o"></i>Crop Ideal Weather Condition</a></li>
                        <li class="<?php echo ($this->uri->segment(3) == "crop_calender") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/crop_calender'); ?>"><i class="fa fa-circle-o"></i>Crop Calendar</a></li>
                        <!-- <li class="<?php echo ($this->uri->segment(3) == "custom_crop_advisory") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/custom_crop_advisory'); ?>"><i class="fa fa-circle-o"></i>Add Crop Advisory</a></li> -->
                        <li class="<?php echo ($this->uri->segment(3) == "list_custom_crop_advisory") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_crop_panel/list_custom_crop_advisory'); ?>"><i class="fa fa-circle-o"></i>Crop Advisory List</a></li>
                        
                    </ul>
                </li>
                <?php } ?> 

                <?php if (in_array($this->session->userdata('role'), array(1, 3, 5))) { ?>
                    <li class="<?php echo ($this->uri->segment(2) == "Drought_pest") ? "active" : ""; ?> treeview">
                        <a href="javascript:void(0);">
                            <i class="fa fa-bug"></i><span>Pest/Disease Panel</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo ($this->uri->segment(3) == "pest_information") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_pest/pest_information'); ?>"><i class="fa fa-circle-o"></i>Pest Information</a></li>
                            <li class="<?php echo ($this->uri->segment(3) == "disease_information") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_pest/disease_information'); ?>"><i class="fa fa-circle-o"></i>Disease Information</a></li>
                            <li class="<?php echo ($this->uri->segment(3) == "pest_list") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_pest/pest_list'); ?>"><i class="fa fa-circle-o"></i>Pest/Disease Info List</a></li>
                            <li class="<?php echo ($this->uri->segment(3) == "add_pest") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_pest/add_pest'); ?>"><i class="fa fa-circle-o"></i>Add Pest/Disease Info</a></li>
                        </ul>
                    </li>
                <?php } ?>
            
            <li class="<?php echo ($this->uri->segment(2) == "Drought_contingent_plan") ? "active" : ""; ?> treeview">
                <a href="javascript:void(0);">
                    <!-- <i class="fa fa-tree"></i> -->
                    <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Drought/Crop_Contingencyplan1.png');?>"/> <span>Crop Contingency Plan</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(3) == "contingent_plan") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_contingent_plan/contingent_plan'); ?>"><i class="fa fa-circle-o"></i>Agro-Climatic Zone</a></li>
                    <!-- <li class="<?php echo ($this->uri->segment(3) == "irrigation_potential") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_contingent_plan/irrigation_potential'); ?>"><i class="fa fa-tree"></i>Irrigation Potential</a></li> -->
                    <li class="<?php echo ($this->uri->segment(3) == "pest_occurrence_info") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_contingent_plan/pest_occurrence_info'); ?>"><i class="fa fa-circle-o"></i>Pest Occurrence</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "inter_cropping") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_contingent_plan/inter_cropping'); ?>"><i class="fa fa-circle-o"></i>Intercropping</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "history_of_natural_calamities") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_contingent_plan/history_of_natural_calamities'); ?>"><i class="fa fa-circle-o"></i>Natural Calamities</a></li>
                </ul>
            </li>

            <?php if (in_array($this->session->userdata('role'), array(1,3))) { ?>
            <li class="<?php echo ($this->uri->segment(2) == "Drought_livestock_panel") ? "active" : ""; ?> treeview">
                <a href="javascript:void(0);">
                    <i class="fa-solid fa-cow"></i>

                    <!-- <img width="20px" align="center" src="<?php echo base_url('stylesheet/images/Drought/Livestock.png');?>"/> -->
                    <span>Livestock</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(3) == "livestock_list") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_livestock_panel/livestock_list'); ?>"><i class="fa fa-circle-o"></i>Livestock Information</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php #if (in_array($this->session->userdata('role'), array(1))) { ?>
            <li class="<?php echo ($this->uri->segment(2) == "Drought_advisory") ? "active" : ""; ?> treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-paperclip"></i> <span>Advisory</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <!-- <li class="<?php echo ($this->uri->segment(3) == "district_advisory") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/district_advisory'); ?>"><i class="fa fa-paperclip"></i><span>Advisory</span></a></li> --> 
            
                    <!-- <li class="<?php echo ($this->uri->segment(3) == "contingent_measures_for_drought") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/contingent_measures_for_drought'); ?>"><i class="fa fa-info-circle"></i><span>Contingent Measures</span></a></li> -->

                    <!-- <li class="<?php echo ($this->uri->segment(3) == "advisory_for_drought") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/advisory_for_drought'); ?>"><i class="fa fa-info-circle"></i><span>Advisory</span></a></li> -->
                    <li class="<?php echo ($this->uri->segment(3) == "block_advisory") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/block_advisory'); ?>"><i class="fa fa-circle-o"></i><span>IMD Agromet Advisory</span></a></li>
                    
                    <li class="<?php echo ($this->uri->segment(3) == "preventive_measures") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/preventive_measures'); ?>"><i class="fa fa-circle-o"></i><span>Drought Preventive Measures</span></a></li>

                    <li class="<?php echo ($this->uri->segment(3) == "contingent_measures") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/contingent_measures'); ?>"><i class="fa fa-circle-o"></i><span>Drought Contingent Measures</span></a></li>
                    
                    
                </ul>
            </li>
            <!-- <li class="<?php echo ($this->uri->segment(2) == "Drought_advisory") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/district_advisory'); ?>"><i class="fa fa-paperclip"></i><span>Advisory</span></a></li>  --> 
            
            <!-- <li class="<?php echo ($this->uri->segment(2) == "Drought_advisory") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_advisory/contingent_measures_for_drought'); ?>"><i class="fa fa-paperclip"></i><span>Advisory</span></a></li> --> 

            
            <!-- <li class="<?php echo ($this->uri->segment(2) == "Feedbacks") ? "active" : ""; ?>">
                <a href="<?= site_url('Drought/Feedbacks/index'); ?>"><i class="fa fa-comments-o"></i> <span>Feedback</span></a>
            </li> -->
            <?php if (in_array($this->session->userdata('role'), array(1))) { ?>
            <li class="<?php echo ($this->uri->segment(2) == "Drought_data_panel") ? "active" : ""; ?> treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-database"></i> <span>Data Panel</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <!-- <li class="<?php echo ($this->uri->segment(3) == "monthly_normal_upload") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/monthly_normal_upload'); ?>"><i class="fa fa-circle-o"></i>Monthly Normal</a></li> -->
                    <li class="<?php echo ($this->uri->segment(3) == "weekly_obs_upload") ? "active" : ""; ?><?php echo ($this->uri->segment(3) == "district_spi") ? "active" : ""; ?><?php echo ($this->uri->segment(3) == "weekly_obs_search") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/weekly_obs_upload'); ?>"><i class="fa fa-circle-o"></i>Drought Data Records / Entry</a></li>
                    <!-- <li class="<?php echo ($this->uri->segment(3) == "src_rainfall") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/src_rainfall'); ?>"><i class="fa fa-circle-o"></i>SRC Rainfall</a></li> -->
                    <!-- <li class="<?php echo ($this->uri->segment(3) == "district_spi") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/district_spi'); ?>"><i class="fa fa-circle-o"></i>District SPI</a></li> -->

                    <li class="<?php echo ($this->uri->segment(3) == "district_info") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/district_info'); ?>"><i class="fa fa-circle-o"></i>District Information</a></li>

                    <li class="<?php echo preg_match("/irrigation_potential/", $this->uri->segment(3))?'active':''; ?>"><a href="<?= site_url('Drought/Drought_data_panel/irrigation_potential'); ?>"><i class="fa fa-circle-o"></i>Irrigation Potential</a></li>
                    <li class="<?php echo preg_match("/pest_occurrence/", $this->uri->segment(3))?'active':''; ?>"><a href="<?= site_url('Drought/Drought_data_panel/pest_occurrence'); ?>"><i class="fa fa-circle-o"></i>Pest Occurrence</a></li>
                    <li class="<?php echo preg_match("/natural_calamities/", $this->uri->segment(3))?'active':''; ?>"><a href="<?= site_url('Drought/Drought_data_panel/natural_calamities'); ?>"><i class="fa fa-circle-o"></i>Natural Calamities</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "major_crops") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/major_crops'); ?>"><i class="fa fa-circle-o"></i>Major Crops</a></li>
                    <?php if (!in_array($this->session->userdata('role'), array(5))) { ?>
                    <!--<li class="<?php echo ($this->uri->segment(3) == "receiver_group") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/receiver_group'); ?>"><i class="fa fa-circle-o"></i>Receiver Group</a></li> 
                     <li class="<?php echo ($this->uri->segment(3) == "add_user_drought") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/add_user_drought'); ?>"><i class="fa fa-circle-o"></i>Add User Information</a></li> --> 
                    <?php } ?>
                    <li class="<?php echo ($this->uri->segment(3) == "drought_affected") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/drought_affected'); ?>"><i class="fa fa-circle-o"></i>Drought Affected</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "contingent_measures") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/contingent_measures'); ?>"><i class="fa fa-circle-o"></i>Contingent Measures</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "intercropping") ? "active" : ""; ?>"><a href="<?= site_url('Drought/Drought_data_panel/intercropping'); ?>"><i class="fa fa-circle-o"></i>Intercropping</a></li>
                </ul>
            </li>   
            <?php } ?>         
            <!-- <li class="treeview"> <a href="<?= site_url('Login/log_out'); ?>" id="log_out_firebase" > <i class="fa fa-power-off"></i> <span>Logout</span></a></li> -->         
        </ul>        
    </section>    
</aside>
