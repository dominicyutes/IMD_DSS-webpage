<style>
.sidebar {
    height: 100vh;
    width: 15%;
    background-color: #2c5383;
}

.sidebar a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 13px;
    color: white;
    display: block;
    width: max-content;
}

.sidebar a:hover {
    color: white;
}

.dropdown-content {
    display: none;
    padding-left: 20px;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

<div class="sidebar">
    <div class="col-3">
        <a href="<?php echo base_url('HomePage'); ?>"><i class="fa fa-fw fa-home"></i> Home</a>

        <div class="dropdown">
            <a href=""><i class="fa fa-bar-chart"></i> Data Validation <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">

                <a href="<?php echo base_url('Rainfall_Validation'); ?>">Rainfall Validation</a>
                <a href="<?php echo base_url('Rainfall_Validation_INDIA'); ?>">Rainfall Validation INDIA</a>

            </div>
        </div>

        <a href="<?php echo base_url('ValueAddition/MaxTemp'); ?>"> Value Addition</a>
        <?php
        $name = '';
        if ($this->session->has_userdata('name')) {
            $name = $this->session->userdata('name');
        }
        $data['name'] = $name;

        if (isset($name) && $name == 'Super_Admin_HQ'): ?>
        <div class="dropdown">
            <a href="#">Social Media <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="<?php echo base_url('SMS_controller'); ?>">SMS</a>
                <a href="<?php echo base_url('Email'); ?>">Email</a>
                <a href="<?php echo base_url('Whatsapp_controller'); ?>">Whatsapp</a>
                <a href="<?php echo base_url('Facebook_post'); ?>">Facebook FB</a>
                <a href="<?php echo base_url('Twitter_post'); ?>">X</a>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>