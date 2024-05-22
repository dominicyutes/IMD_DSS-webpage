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
        /* zoom: 80%; */
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
            <div class="col-9" style="width: 85%">
                <div style="background-color: #f5fdfd">
                    <br>
                    <br>
                    <h2 class="text-center">EMAIL DISSEMINATIOIN</h2>

                    <!--  -->
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
                                        class="btn btn-success ml-2">Submit</button>
                                    <!--Submit -->
                                </div>
                                <!-- <div class="col-2 text-right">
                                    <button class="btn btn-primary" id="toggleEmailLogTable">Log Information</button>

                                </div> -->
                            </div>
                            <br>
                        </form>
                        <div class="col-2 text-right">
                            <button class="btn btn-primary" id="toggleEmailLogTable">Log Information</button>
                        </div>
                        <br>

                        <!-- div class row starts here  -->
                        <div class="row">
                            <!-- Left column -->
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12" style="display: flex; margin-left: 54px;">
                                        <label for="groupSelect">Choose Group</label>
                                        <select id="groupSelect" class="form-select">
                                            <option value="">--Select a MC--</option>
                                            <option value="MC_Ahmedabad">MC_Ahmedabad</option>
                                            <option value="MC_Amaravati">MC_Amaravati</option>
                                            <option value="MC_Bengaluru">MC_Bengaluru</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12" style="display: flex; margin-left: 57px;">
                                        <label for="dataTypeGrp">Data Type</label>
                                        <select id="dataTypeGrp" class="form-select" style="width: 71%;">
                                            <option value="">--Select a Data Type--</option>
                                            <option value="Heatwave">Heatwave</option>
                                            <option value="Coldwave">Coldwave</option>
                                            <option value="Cyclone">Cyclone</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12" style="margin-left: 57px;">
                                        <input type="checkbox" name="addoredit" id="addoredit" disabled>
                                        <label for="addoredit">Add/Edit</label>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12" style="margin-left: 57px;">
                                        <button id="acceptButton">Accept</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Right column -->
                            <div class="col-4">
                                <ul style="background-color: antiquewhite; margin-left: 10%;" id="emailList"></ul>
                            </div>
                        </div>

                        <!-- div class row ends here  -->

                        <br>



                    </div>
                    <!--  -->
                </div>
            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    document.getElementById("toggleEmailLogTable").addEventListener("click", function() {
        window.location = "<?php echo site_url('Email/show_logInfo'); ?>";
    });


    // 
    $(document).ready(function() {
        $('#groupSelect').change(function() {
            var selectedGroup = $(this).val();
            if (selectedGroup !== '') {
                $.ajax({
                    url: 'Email/get_emails',
                    type: 'POST',
                    data: {
                        group_name: selectedGroup
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (Array.isArray(response)) {
                            displayEmails(response);
                        } else {
                            console.error("Invalid response format:", response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", error);
                    }
                });
            } else {
                $('#emailList').empty();
            }
        });
    });

    function displayEmails(emails) {
        var emailList = $('#emailList');
        emailList.empty();
        emails.forEach(function(email) {
            var listItem = $('<li>').text(email);
            emailList.append(listItem);
        });
    }
    </script>
</body>

</html>

<!-- <?php } ?> -->