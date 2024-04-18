<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">

    <!-- Bootstrap starts here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Bootstrap ends here -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    body {
        width: 100%;
        height: 100vh;
        zoom: 80%;
        overflow: hidden;
        font-family: "Lato", sans-serif;
    }

    .text {
        font-family: 'Archivo', sans-serif;
        font-size: 2em;
        font-weight: 600;
        color: white;
        letter-spacing: 3px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

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

    /*  */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid #dddddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    /*  */
    </style>
</head>

<body>
    <div style="height: 100%;">
        <div class="fixedHead">
            <img src="<?php echo base_url('img/emblem.png'); ?>" alt="Emblem of India" height="50"
                style="padding-left: 1%;">

            <div style="flex: 1; text-align: center;">
                <span class="text" style="font-family: 'Times New Roman';color: black;">WEATHER DECISION SUPPORT
                    SYSTEM</span>
            </div>

            <img src="<?php echo base_url('img/imd_logo_a.png'); ?>" alt="IMD logo" height="50"
                style="padding-right: 1%;">
        </div>


        <div class="row">
            <div class="sidebar">
                <div class="col-3">
                    <a href="<?php echo base_url('HomePage');?>"><i class="fa fa-fw fa-home"></i> Home</a>

                    <div class="dropdown">
                        <a href="#"><i class="fa fa-bar-chart"></i> Data Validation <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url('Rainfall_Validation_controller');?>">Rainfall</a>
                            <a href="#service2">Heat</a>
                            <a href="#service3">Cold</a>
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



            <!-- editing content starts here -->
            <div class="col-9" style="width: 88%">
                <!-- <button class="btn btn-primary">Pen</button>
                <p>Welcome ohme</p> -->
                <div style="background-color: #f5fdfd">
                    <br>
                    <br>
                    <h2 class="text-center">EMAIL DISSEMINATIOIN</h2>

                    <div>
                        <form id="emailForm" method="POST" action="<?=base_url('email/send_email')?>">
                            <!-- <lable>Name</lable>
                <input type="text" id="name" name="name" />
                <br>
                <lable>Subject</lable>
                <input type="text" id="subject" name="subject" />
                <br>
                <lable>Message</lable>
                <input type="text" id="message" name="message" /> -->
                            <!-- <label for="toggleButton">To Deliver</label>
                <input type="checkbox" id="toggleButton">

                <button style="margin-left: 10px" type="submit" id="submitButton" class="btn btn-success ml-2"
                    disabled>Submit</button>

                <div class="text-right">
                    <button class="btn btn-primary">Log Information</button>
                </div> -->


                            <div class="row">
                                <div class="col-10">
                                    <label style="margin-left:5%" for="toggleButton">To Deliver</label>
                                    <input type="checkbox" id="toggleButton">
                                    <button style="margin-left: 10px" type="submit" id="submitButton"
                                        class="btn btn-success ml-2" disabled>Submit</button>
                                </div>
                                <div class="col-2 text-right">
                                    <button class="btn btn-primary" id="toggleEmailLogTable">Log Information</button>
                                </div>
                            </div>

                        </form>
                        <br><br><br>
                        <div class="container" id="emailLogTable" style="display: none;">
                            <div class="row">
                                <br>
                                <h3>Email Log Table</h3>
                                <br />
                                <div class="table-responsive" style="max-height: 450px;">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Mail From</th>
                                                <th>Mail To</th>
                                                <th>Sent</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i = 1;
                                                foreach($result as $row) {
                                                    echo '<tr>
                                                        <td>'.$i++.'</td>
                                                        <td>'.$row['email_from'].'</td>
                                                        <td>'.$row['email_to'].'</td>
                                                        <td>'.($row['sent'] ? 'Sent' : 'Not Sent').'</td>
                                                        <td>'.(isset($row['sent_time']) ? date('Y-m-d H:i:s', strtotime($row['sent_time'])) : '').'</td>
                                                    </tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#toggleButton').change(function() {
            if ($(this).is(':checked')) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        });
    });

    $(document).ready(function() {
        $("#toggleEmailLogTable").click(function() {
            event.preventDefault();
            $("#emailLogTable").toggle();

        });
    });
    </script>
</body>

</html>