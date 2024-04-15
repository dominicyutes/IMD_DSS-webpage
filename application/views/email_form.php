<!-- <?php if($this->session->userdata('is_loggedin') == TRUE){  ?> -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IMD DSS</title>
    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    body {
        overflow-x: hidden !important;
    }

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
    </style>
</head>

<body>
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
                        <button style="margin-left: 10px" type="submit" id="submitButton" class="btn btn-success ml-2"
                            disabled>Submit</button>
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

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> -->

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

<!-- <?php } ?> -->