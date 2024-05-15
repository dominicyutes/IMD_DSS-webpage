<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IMD DSS</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    body {
        background-image: url('<?php echo base_url("assets/images/loginPage.jpg"); ?>');
        background-size: cover;
        background-position: center;
    }

    .container {
        margin-top: 10%;
    }

    .row {
        margin-right: -3%;
        margin-left: 32%;
    }

    .login-box {
        background-color: #ddedfa;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .form-horizontal h2 {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group h2 label {
        font-weight: bold;
    }

    .form-group input[type="email"],
    .form-group input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    </style>
</head>

<body>
    <div class="background_login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-box">
                        <form class="form-horizontal" action="<?php echo base_url('Login'); ?>" method="post">
                            <?php 
                        if (!empty($this->session->flashdata('message'))) {
                            echo $this->session->flashdata('message');
                        } elseif (!empty($this->session->flashdata('message1'))) {
                            echo $this->session->flashdata('message1');
                        }
                        ?>
                            <div class="form-group">
                                <h2>LOGIN PAGE</h2>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    value="<?php set_value('email') ?>" />
                                <?php echo form_error('email') ?>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    value="<?php set_value('password') ?>" />
                                <?php echo form_error('password') ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary" />
                                <input type="reset" value="Cancel" class="btn btn-danger" />
                            </div>
                            <p>Don't have an account? <a href="<?php echo base_url();?>Register">Register Here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>