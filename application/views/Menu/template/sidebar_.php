<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm sidebar-dark-lightblue">
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo base_url('HomePage'); ?>" class="nav-link <?php echo ($this->uri->segment(1) == "HomePage") ? "active" : ""; ?>"> <i class="nav-icon fas fa-th"></i>
                    <p> Home  </p>
                </a>
            </li>
            <li class="nav-item has-treeview <?php echo ($this->uri->segment(1) == "Rainfall_Validation") ? "active" : ""; ?> ">
                <a href="<?php echo base_url('Rainfall_Validation'); ?>" class="nav-link"> <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p> Data Validation <i class="right fas fa-angle-left"></i> </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url('Rainfall_Validation'); ?>" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rainfall Validation v1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Rainfall_Validation_INDIA'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rainfall Validation INDIA</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a href="<?php echo base_url('ValueAddition/MaxTemp'); ?>" class="nav-link <?php echo ($this->uri->segment(2) == "MaxTemp") ? "active" : ""; ?>"> <i class="nav-icon fas fa-th"></i>
                    <p> Value Addition <span class="right badge badge-danger">New</span> </p>
                </a>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link"> <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p> Social Media <i class="right fas fa-angle-left"></i> </p>
                </a>
                <ul class="nav nav-treeview ">
                    <li class="nav-item ">
                        <a href="<?php echo base_url('SMS_controller'); ?>" class="nav-link <?php echo ($this->uri->segment(1) == "SMS_controller") ? "active" : ""; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SMS</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Email'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>EMAIL</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Whatsapp_controller'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Whatsapp</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Facebook_post'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Twitter_post'); ?>" class="nav-link">
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
  