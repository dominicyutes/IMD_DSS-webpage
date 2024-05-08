<aside class="main-sidebar">                
    <section class="sidebar">
        <ul class="sidebar-menu">
<!--            <li class="header"></li>
            <li class="header"></li>-->

            <!-- Optionally, you can add icons to the links -->            
            <li class="<?php echo ($this->uri->segment(1) == "Home") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>Home/index"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="<?php echo ($this->uri->segment(2) == "Recent") ? "active" : ""; ?>"><a href="<?= site_url('earthquake/Recent'); ?>"><i class="fa fa-tags"></i> <span>Recent Earthquake</span></a></li>
            <li class="<?php echo ($this->uri->segment(2) == "Threat") ? "active" : ""; ?>"><a href="<?= site_url('earthquake/Threat'); ?>"><i class="fa fa-tags"></i> <span>Tsunami Threat</span></a></li>
            <li class="<?php echo ($this->uri->segment(2) == "Advisory") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>earthquake/Advisory/"><i class="fa fa-paperclip"></i> <span>Advisory</span></a></li>
            
            <?php if (in_array($this->session->userdata('role'), array(1))) {  ?>
            <li class="<?php echo ($this->uri->segment(2) == "DataPanel") ? "active" : ""; ?> <?php echo ($this->uri->segment(2) == "Setting") ? "active" : ""; ?> <?php echo ($this->uri->segment(2) == "BulletinSettings") ? "active" : ""; ?> <?php echo ($this->uri->segment(2) == "EQSettings") ? "active" : ""; ?> treeview">
                <a href="#">
                    <i class="fa fa-database"></i> <span>Data Panel</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($this->uri->segment(2) == "DataPanel") ? "active" : ""; ?>"><a href="<?= site_url('earthquake/DataPanel/show_list'); ?>"><i class="fa fa-circle-o"></i>Earthquake Advisory</a></li>                    
                    <li class="<?php echo ($this->uri->segment(2) == "EQSettings") ? "active" : ""; ?>"><a href="<?= site_url('earthquake/EQSettings/'); ?>"><i class="fa fa-circle-o"></i>Settings</a></li>                   
                    <li class="<?php echo ($this->uri->segment(2) == "BulletinSettings") ? "active" : ""; ?>"><a href="<?= site_url('earthquake/BulletinSettings/'); ?>"><i class="fa fa-circle-o"></i>Bulletin Settings</a></li> 
                    <!-- <li class="<?php echo ($this->uri->segment(4) == "population") ? "active" : ""; ?>"><a href="<?php echo base_url();?>earthquake/Setting/index/population"><i class="fa fa-circle-o"></i>Population Density</a></li>   -->
                    <!-- <li class="<?php echo ($this->uri->segment(4) == "hazard") ? "active" : ""; ?>"><a href="<?php echo base_url();?>earthquake/Setting/index/hazard"><i class="fa fa-circle-o"></i>Hazard Alert</a></li> -->
                    <!-- <li class="<?php echo ($this->uri->segment(4) == "risk") ? "active" : ""; ?>"><a href="<?php echo base_url();?>earthquake/Setting/index/risk"><i class="fa fa-circle-o"></i>Risk Alert</a></li>                                      -->
                </ul>
            </li>
            <?php } ?>

            <!-- <li class="treeview"> <a href="<?= site_url('Login/log_out'); ?>" id="log_out_firebase" > <i class="fa fa-power-off"></i> <span>Logout</span></a></li>   -->       
        </ul>        
    </section>    
</aside>