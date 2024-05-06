<style>
.fixedHead {
    background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 60px;
    width: 100%;
    position: relative;
}

.sidebar {
    height: 54rem;
    width: 11%;
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
        <br>
        <a href="<?php echo base_url('HomePage');?>"><i class="fa fa-fw fa-home"></i> Home</a>


        <div class="dropdown">
            <a href="#"><i class="fa fa-bar-chart"></i> Data Validation <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="<?php echo base_url('Rainfall_Validation_controller');?>">Rainfall</a>
                <a href="#service2">Heat</a>
                <a href="#service3">Cold</a>
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
                <a href="<?php echo base_url('TESTING'); ?>">TESTING</a>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>