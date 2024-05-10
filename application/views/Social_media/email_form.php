<!-- <?php if($this->session->userdata('is_loggedin') == TRUE){  ?> -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
            <!-- Landing_page title logo> -->
            <?php $this->load->view('Menu/Landing_page_top'); ?>
        </div>


        <div class="row">
            <!-- Landing_page sidebar> -->
            <?php $this->load->view('Menu/Landing_page_side'); ?>


            <!-- editing content starts here -->
            <div class="col-9" style="width: 88%">
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
                                    <label style="margin-left:5%" for="toggleButton">ON/OFF</label>
                                    <!-- To Deliver -->
                                    <input type="checkbox" id="toggleButton">
                                    <button style="margin-left: 10px" type="submit" id="submitButton"
                                        class="btn btn-success ml-2" disabled>Auto Email</button>
                                    <!--Submit -->
                                </div>
                                <div class="col-2 text-right">
                                    <button class="btn btn-primary" id="toggleEmailLogTable">Log Information</button>
                                </div>
                            </div>
                            <br>
                        </form>
                        <br><br><br>
                        <!--  -->
                        <!-- <div>
                            <lable for="groupSelect">Choose Group</lable>
                            <select id="groupSelect">
                                <option value="">--Select a MC--</option>
                                <option value="MC_Ahmedabad">MC_Ahmedabad</option>
                                <option value="MC_Amaravati">MC_Amaravati</option>
                                <option value="MC_Bengaluru">MC_Bengaluru</option>
                            </select>
                        </div>
                        <div>
                            <button onclick="groupSelect()">Accept</button>
                        </div> -->
                        <!--  -->
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

    function groupSelect() {
        var selectedValue = document.getElementById("groupSelect").value;
        var emailAddresses;

        // Object to store email addresses corresponding to each option value
        var emailData = {
            "MC_Ahmedabad": ["xx@gmail.com", "xy@gmail.com"],
            "MC_Amaravati": ["yy@gmail.com", "xy@gmail.com"],
            "MC_Bengaluru": ["zz@gmail.com", "xy@gmail.com"]
        };

        // Get the email addresses based on the selected option value
        emailAddresses = emailData[selectedValue] || [];

        // Log the selected option value and email addresses to the console
        console.log("Selected option:", selectedValue);
        console.log("Corresponding email addresses:", emailAddresses);
    }
    </script>
</body>

</html>

<!-- <?php } ?> -->