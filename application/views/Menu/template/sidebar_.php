<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm sidebar-dark-lightblue">
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('HomePage'); ?>"
                        class="nav-link <?php echo ($this->uri->segment(1) == "HomePage") ? "active" : ""; ?>"> <i
                            class="nav-icon fas fa-th"></i>
                        <p> Home </p>
                    </a>
                </li>

                <?php
                $current_segment = $this->uri->segment(1);
                $is_rainfall_validation_active = ($current_segment == "Rainfall_Validation");
                $is_rainfall_validation_india_active = ($current_segment == "Rainfall_Validation_INDIA");
                $menu_open_class = ($is_rainfall_validation_active || $is_rainfall_validation_india_active) ? "menu-open" : "";
                ?>
                <li class="nav-item has-treeview <?php echo $menu_open_class; ?>">
                    <a href="<?php echo base_url('Rainfall_Validation'); ?>"
                        class="nav-link <?php echo ($is_rainfall_validation_active) ? "active" : ""; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Data Validation <i class="right fas fa-angle-left"></i> </p>
                    </a>
                    <ul class="nav nav-treeview" style="<?php echo ($menu_open_class) ? "display: block;" : ""; ?>">
                        <li class="nav-item">
                            <a href="<?php echo base_url('Rainfall_Validation'); ?>"
                                class="nav-link <?php echo ($is_rainfall_validation_active) ? "active" : ""; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rainfall Validation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Rainfall_Validation_INDIA'); ?>"
                                class="nav-link <?php echo ($is_rainfall_validation_india_active) ? "active" : ""; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rainfall Validation INDIA</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="<?php echo base_url('ValueAddition/WeatherForecast'); ?>"
                        class="nav-link <?php echo ($this->uri->segment(2) == "WeatherForecast") ? "active" : ""; ?>"> <i
                            class="nav-icon fas fa-th"></i>
                        <p> Weather Forecast </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="<?php echo base_url('ValueAddition/MaxTemp'); ?>"
                        class="nav-link <?php echo ($this->uri->segment(2) == "MaxTemp") ? "active" : ""; ?>"> <i
                            class="nav-icon fas fa-th"></i>
                        <p> Value Addition <span class="right badge badge-danger">New</span> </p>
                    </a>
                </li>
                <?php
                $current_segment = $this->uri->segment(1);
                $is_sms_active = ($current_segment == "SMS_controller");
                $is_email_active = ($current_segment == "Email");
                $is_whatsapp_active = ($current_segment == "Whatsapp_controller");
                $is_facebook_active = ($current_segment == "Facebook_post");
                $is_twitter_active = ($current_segment == "Twitter_post");
                $menu_open_class = ($is_sms_active || $is_email_active || $is_whatsapp_active || $is_facebook_active || $is_twitter_active) ? "menu-open" : "";
                ?>

                <li class="nav-item has-treeview <?php echo $menu_open_class; ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Social Media <i class="right fas fa-angle-left"></i> </p>
                    </a>
                    <ul class="nav nav-treeview" style="<?php echo ($menu_open_class) ? "display: block;" : ""; ?>">
                        <li class="nav-item">
                            <a href="<?php echo base_url('SMS_controller'); ?>"
                                class="nav-link <?php echo ($is_sms_active) ? "active" : ""; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Email'); ?>"
                                class="nav-link <?php echo ($is_email_active) ? "active" : ""; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>EMAIL</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Whatsapp_controller'); ?>"
                                class="nav-link <?php echo ($is_whatsapp_active) ? "active" : ""; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Whatsapp</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Facebook_post'); ?>"
                                class="nav-link <?php echo ($is_facebook_active) ? "active" : ""; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Facebook</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Twitter_post'); ?>"
                                class="nav-link <?php echo ($is_twitter_active) ? "active" : ""; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Twitter (X)</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>