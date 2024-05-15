<aside class="main-sidebar">                
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo ($this->uri->segment(1) == "Home") ? "active" : ""; ?>"><a href="<?= site_url('Home/index'); ?>"><i class="fa fa-newspaper-o"></i> <span>Home</span></a></li>
 <!--           <li class="<?php echo ( ($this->uri->segment(2) == "Value_addition_graphical") || ($this->uri->segment(2) == "Va_add_graphic_advisory") || ($this->uri->segment(2) == "Va_add_graphic_send_alert") )  ? "active" : ""; ?> treeview">
                <a href="#">
                    <i class="fa ion-map"></i><span>Value Addition Graphical</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php //echo ($this->uri->segment(3) == "Heatwave") ? "active" : ""; ?>"><a href="<?= site_url('ValueAddition/Value_addition_graphical/Heatwave'); ?>"><i class="fa fa-circle-o"></i>Heat wave Alert Disemination</a></li>
                    <li class="<?php //echo ($this->uri->segment(3) == "Advisory") ? "active" : ""; ?>"><a href="<?= site_url('ValueAddition/Va_add_graphic_advisory/Advisory'); ?>"><i class="fa fa-circle-o"></i> Advisory</a></li>

                    <li class="<?php //echo ($this->uri->segment(3) == "sendAlert") ? "active" : ""; ?>"><a href="<?//= site_url('ValueAddition/Va_add_graphic_send_alert/sendAlert'); ?>"><i class="fa fa-circle-o"></i> Send Alert</a></li>

                </ul>
            </li>
-->
            <li class="<?php echo ($this->uri->segment(2) == "Value_addition") ? "active" : ""; ?> treeview">
                <a href="#">
                    <i class="fa fa-bookmark"></i><span>Value Addition</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(3) == "index_district_va") ? "active" : ""; ?>"><a href="<?= site_url('ValueAddition/Value_addition/index_district_va'); ?>"><i class="fa fa-circle-o"></i>District Wise</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "index_block_va") ? "active" : ""; ?>"><a href="<?= site_url('ValueAddition/Value_addition/index_block_va'); ?>"><i class="fa fa-circle-o"></i>Block Wise</a></li>
                </ul>               
            </li>
            <li class="<?php echo ($this->uri->segment(2) == "Va_analysis") ? "active" : ""; ?> treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i><span>Analysis</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(3) == "va_comparison_district") ? "active" : ""; ?>"><a href="<?= site_url('ValueAddition/Va_analysis/va_comparison_district'); ?>"><i class="fa fa-circle-o"></i>District Wise</a></li>
                    <li class="<?php echo ($this->uri->segment(3) == "va_comparison_block") ? "active" : ""; ?>"><a href="<?= site_url('ValueAddition/Va_analysis/va_comparison_block'); ?>"><i class="fa fa-circle-o"></i>Block Wise</a></li>
                </ul>
            </li>
            <?php if ($role == 1) { ?>
                <li class="<?php echo ($this->uri->segment(2) == "Va_data_panel") ? "active" : ""; ?> treeview">
                    <a href="#">
                        <i class="fa fa-building-o"></i><span>Data Panel</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(3) == "email_add") ? "active" : ""; ?>"><a href="<?= site_url('ValueAddition/Va_data_panel/email_add'); ?>"><i class="fa fa-circle-o"></i>Mail list</a></li>
                    </ul>
                </li>
            <?php } ?>
            <li class="treeview"> <a href="<?= site_url('Login/log_out'); ?>" id="log_out_firebase" > <i class="fa fa-power-off"></i><span>Logout</span></a></li>         
        </ul>        
    </section>    
</aside>
