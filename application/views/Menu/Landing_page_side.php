<style>
.sidebar {
    height: 43rem;
    width: 13%;
    background-color: #2c5383;
}

.sidebar a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 10px;
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

        <a href="<?php echo base_url('D_Retrieval_Controller'); ?>"><i class="fa-solid fa-draw-polygon"></i></i>Data
            Retrieval</a>

        <?php if (isset($name) && $name == 'Super_Admin_HQ'): ?>
        <div class="dropdown">
            <a href="#"><i class="fa-solid fa-share-from-square"></i> Social Media <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="<?php echo base_url('SMS_controller'); ?>">SMS</a>
                <a href="<?php echo base_url('Email'); ?>">Email</a>
                <a href="<?php echo base_url('Whatsapp_controller'); ?>">Whatsapp</a>
                <a href="<?php echo base_url('Facebook_post'); ?>">Facebook FB</a>
                <a href="<?php echo base_url('Twitter_post'); ?>">Twitter</a>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>