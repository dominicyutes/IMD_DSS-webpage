<style>
    @media only screen and (max-width:720px) {
        .mob-img {
            width: 0%;
            height: 0%;
            display: none;
        }
        #non-logo {
            widows: 0%;
            height: 0%;
            display: none;
        }
    }
    #flash_text a {
        color: black !important;
    }
</style>
<?php  $cont = $this->uri->segment(1);
    if($cont == "ValueAddition") {
?>    
        <body class="hold-transition skin-blue-light sidebar-mini sidebar-collapse">
<?php } else {?>
        <body class="hold-transition skin-blue-light sidebar-mini">
<?php 
    }
    $show_banner = array("Login", "Forgot_password");
    if (in_array($cont, $show_banner)) {
?>
    <img src="<?php echo base_url() ?>stylesheet/images/header_banner3.png" alt="" width="100%" height="100%"/>
<?php } ?>
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <a href="<?php echo base_url(); ?>Home/index" class="logo" id="non-logo">                    
<!--                <span class="logo-mini"><b><i class="fa fa-home"></i></b></span>                   
                <span class="logo-lg">SATARK</span>-->
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <!--Off-canvas menu: For support other devices-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a> 
                <!--Test for show user detail: Just test!!!-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="user-menu">
                            <a href="<?php echo base_url('Dashboard_new');?>">
                                <img src="<?php echo base_url(); ?>stylesheet/images/dashboard/dash.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>stylesheet/images/login3.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">
                                    <?php echo $this->session->userdata('full_name'); ?>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url(); ?>stylesheet/images/login3.png" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->userdata('full_name'); ?> 
                    <!--                  <small>Member since Nov. 2012</small>-->
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <!-- <div class="pull-left">
                                        <a href="<?php echo base_url(); ?>Home/change_password" class="btn btn-default btn-flat">Change Password</a>
                                    </div> -->
                                    <div class="pull-right">
                                        <a href="<?php echo base_url(); ?>Login/log_out" id="log_out_firebase" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                </div>
            </nav>  
        </header>  
<?php $this->load->view('flash_message/message'); ?>
 <!-- <?php date_default_timezone_set("Asia/Kolkata");
    $curr_time = strtotime(date('H:i'));
    if($curr_time < strtotime(date('13:29')) ){
        $mid_date = date("d.m.Y", strtotime("-1 days"));
    }
    else{
        $mid_date = date("d.m.Y");
    }
    if($curr_time < strtotime(date('18:29')) ){
        $eve_date = date("d.m.Y", strtotime("-1 days"));
    }
    else{
        $eve_date = date("d.m.Y");
    }
    $date = date("Y-m-d");

    if($curr_time < strtotime(date('14:29')) ){
        $forecast_date = date("d.m.Y", strtotime("-1 days"));
    }
    else{
        $forecast_date = date("d.m.Y");
    }
    $date = date("Y-m-d");
    ?>
     <marquee id="flash_text" onmouseover="this.stop();" onmouseout="this.start();" width=100% bgcolor="#8AD5D1" scrollamount=8 style=color:black;> &#9733; <a  target="_blank" href="https://mausam.imd.gov.in/bhubaneswar/mcdata/midday.pdf" id="">IMD MIDDAY WEATHER BULLETIN  (Date : <?php echo $mid_date;?>)</a> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &#x2605; <a target="_blank" href="https://mausam.imd.gov.in/bhubaneswar/mcdata/Evening.pdf" id="">IMD EVENING WEATHER BULLETIN (Date : <?php echo $eve_date;?>)</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &#x2605;  <a target="_blank" href="https://mausam.imd.gov.in/bhubaneswar/mcdata/DistrictGR.pdf" id="">Five days Forecast and Warning for Odisha (Date : <?php echo $forecast_date; ?>)</a>  </marquee> -->





