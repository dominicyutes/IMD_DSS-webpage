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
        /* overflow: hidden; */
        overflow-x: hidden;
        font-family: "Lato", sans-serif;
    }


    /*  */
    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 5px;
    }

    .radioCls {
        margin-left: 10%;
    }

    .hidden {
        display: none;
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
                    <div class="container">
                        <div>
                            <h4>EMAIL</h4>
                        </div>
                        <div>
                            <button class="btn btn-info btn-sm" id="toggleEmailLogTable">Log Information</button>
                        </div>
                    </div>
                    <!--  -->
                    <div>
                        <input type="checkbox" id="toggleButton">
                        <label for="toggleButton">Auto Email ON/OFF</label>
                    </div>
                    <!--  -->
                    <div class="row">
                        <!-- col-7 starts here -->
                        <div class="col-7">
                            <div class="btn-group dropend">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                    style="margin-top: 10%;" data-bs-toggle="dropdown" aria-expanded="false">
                                    Choose MC
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">MC</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- col-7 ends here -->

                        <!-- col-5 starts here -->
                        <div class="col-5">
                            <div class="btn-group dropend">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                    style="margin-top: 10%;" data-bs-toggle="dropdown" aria-expanded="false">
                                    MC Groups
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <input type="checkbox" id="heatwave-department">
                                            <label for="heatwave-department">Heatwave Department</label>
                                            <input type="checkbox" id="auto-email-heatwave">
                                            <label for="auto-email-heatwave">Auto Email On/Off</label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <input type="checkbox" id="coldwave-department">
                                            <label for="coldwave-department">Coldwave Department</label>
                                            <input type="checkbox" id="auto-email-coldwave">
                                            <label for="auto-email-coldwave">Auto Email On/Off</label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <input type="checkbox" id="nowcast-department">
                                            <label for="nowcast-department">Nowcast Department</label>
                                            <input type="checkbox" id="auto-email-nowcast">
                                            <label for="auto-email-nowcast">Auto Email On/Off</label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- col-5 ends here -->
                    </div> <!-- class="row" -->

                    <div class="row">
                        <!-- new group && existing group starts here -->
                        <!-- radio btn starts here -->
                        <div style="margin-top: 1%;">
                            <div style="display: flex;">
                                <label>Create or Edit</label>
                                <div class="radioCls"><input type="radio" name="create_edit_option" value="none"
                                        checked />
                                    <label>None</label>
                                </div>
                                <div class="radioCls"><input type="radio" name="create_edit_option" value="new_group" />
                                    <label>Create
                                        Group</label>
                                </div>
                                <div class="radioCls"><input type="radio" name="create_edit_option"
                                        value="existing_group" />
                                    <label>Existing
                                        Group</label>
                                </div>
                            </div>
                        </div> <!-- radio btn ends here -->

                        <!-- New Group radio btn BOX starts here -->
                        <div id="newGroupIdDis" class="hidden" style="display: none;">
                            <div style="margin-top: 1%;height: 4.25rem;width: 23rem;background-color: #cccccc;">
                                <div style="margin-left: 3%;">
                                    <div>New Group</div>
                                    <div>
                                        <input type="text" style="width:82%;" />
                                        <button class="btn btn-light btn-sm" type="submit">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- New Group radio btn BOX ends here -->

                        <!-- Existing Group radio btn BOX starts here -->
                        <div id="existingGroupIdDis" class="hidden">
                            <div style="margin-top: 1%;height: 11.25rem;width: 23rem;background-color: #cccccc;">
                                <div style="margin-left: 3%;">
                                    <div style="padding-top: 2%;">Existing Group</div>
                                    <div>
                                        <!-- Choose grp dropdown starts here -->
                                        <div class=" btn-group">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Choose Group
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>MC1</li>
                                                <li>MC2</li>
                                                <li>MC3</li>
                                            </ul>
                                        </div>
                                        <!-- Choose grp dropdown neds here -->

                                        <!-- addemail -->
                                        <div style="margin-top:2%;">
                                            <input type="text" style="width:82%;" placeholder="add email here" />
                                            <button class="btn btn-light btn-sm" type="submit">Add</button>
                                        </div> <!-- addemail ends here-->

                                        <div>
                                            <span>or</span>
                                        </div>

                                        <!-- add CC -->
                                        <div style="margin-top:2%;">
                                            <input type="text" style="width:82%;" placeholder="add cc here" />
                                            <button class="btn btn-light btn-sm" type="submit">Add</button>
                                        </div> <!-- add CC ends here-->

                                    </div>
                                </div>
                            </div>
                        </div><!-- Existing Group radio btn BOX ends here -->

                    </div> <!-- new group && existing group ends here -->

                    <div>
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                style="margin-top: 10%;" data-bs-toggle="dropdown" aria-expanded="false">
                                Choose DataType
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Add New</a></li>
                                <li><a class="dropdown-item" href="#">Heatwave</a></li>
                                <li><a class="dropdown-item" href="#">Coldwave</a></li>
                                <li><a class="dropdown-item" href="#">Nowcast</a></li>
                            </ul>
                        </div>
                    </div>

                    <form id="emailForm" method="POST" action="<?=base_url('email/send_email')?>">
                        <div class="row" style="margin-top: 2%;">
                            <div class="col-8">
                                <lable>Subject</lable>
                                <input type="text" />
                            </div>
                            <div class="col-4">
                                <lable>Upload</lable>
                                <input type="file" name="myfile" />
                            </div>
                        </div>

                        <div class="row">
                            <lable>Message</lable>
                            <textarea style="margin-left: 1%; width: 50%;"></textarea>
                        </div>
                        <button style="margin-top: 2%;" type="submit" id="submitButton"
                            class="btn btn-success btn-sm">Submit</button>
                    </form>
                    <br>

                    <!--  -->
                    <div>
                        <!-- <form id="emailForm" method="POST" action="<?=base_url('email/send_email')?>"> -->
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
                                <!-- <label style="margin-left:5%" for="toggleButton">ON/OFF</label> -->
                                <!-- To Deliver -->
                                <!-- <input type="checkbox" id="toggleButton"> -->
                                <!-- <button style="margin-left: 10px" type="submit" id="submitButton"
                                        class="btn btn-success btn-sm">Submit</button> -->
                                <!--Submit -->
                            </div>
                        </div>
                        <!-- </form> -->

                        <!-- <div class="col-2 text-right">
                            <button class="btn btn-primary btn-sm" id="toggleEmailLogTable">Log Information</button>
                        </div> -->



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

    // radio btn for none, new grp, existing grp
    document.addEventListener('DOMContentLoaded', function() {
        const radios = document.querySelectorAll('input[name="create_edit_option"]');
        const newGroupDiv = document.getElementById('newGroupIdDis');
        const existingGroupDiv = document.getElementById('existingGroupIdDis');

        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'new_group') {
                    newGroupDiv.style.display = 'block';
                    existingGroupDiv.style.display = 'none';
                } else if (this.value === 'existing_group') {
                    newGroupDiv.style.display = 'none';
                    existingGroupDiv.style.display = 'block';
                } else {
                    newGroupDiv.style.display = 'none';
                    existingGroupDiv.style.display = 'none';
                }
            });
        });
    });
    // 


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