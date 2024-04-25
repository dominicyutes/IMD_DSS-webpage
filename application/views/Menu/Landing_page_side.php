<head>


    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .fixedHead {
            background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
            width: 100%;
            position: relative;
            margin-top: -6px;
            margin-left: -8px;
        }

        .sidebar {
            height: 54rem;
            width: 13%;
            background-color: #2c5383;
            margin-left: -8px;
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
</head>
<body>
    

<div class="sidebar">
    <div class="col-3">
        <a href="<?php echo base_url('HomePage'); ?>"><i class="fa fa-fw fa-home"></i> Home</a>

        <div class="dropdown">
            <a href=""><i class="fa fa-bar-chart"></i> Data Validation <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
            
                <a href="<?php echo base_url('Rainfall_Validation'); ?>">Rainfall Validation</a>
                <a href="<?php echo base_url('Rainfall_Validation_INDIA'); ?>">Rainfall Validation INDIA</a>
                <?php
                $user_email = "rimesodisha@gmail.com";

                $rimes_email = "rimesodisha@gmail.com";
                $imd_email = "imd@gmail.com";

                $show_button = false;
                if ($user_email === $imd_email) {
                    $show_button = true;
                }

                ?>

                <a href="<?php echo base_url(''); ?>" <?php if (!$show_button) {echo 'style="display: none;"';} ?>>
                    Rainfall Validation ODISHA
                </a>

            </div>
        </div>
        <div class="dropdown">
            <a href="#"><i class="fa fa-bar-chart"></i> Social Media <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="<?php echo base_url('Email'); ?>">Email</a>
                <a href="<?php echo base_url('Facebook_post'); ?>">Facebook FB</a>
                <a href="<?php echo base_url('Twitter_post'); ?>">Twitter</a>
            </div>
        </div>
    </div>
</div>

</body>