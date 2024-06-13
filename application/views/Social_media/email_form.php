<!-- <?php if($this->session->userdata('is_loggedin') == TRUE){  ?> -->

<?php $this->load->view('Menu/template/header_'); ?>
<?php $this->load->view('Menu/template//sidebar_'); ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
    integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<style>
.body {
    width: 100%;
    height: 100vh;
    overflow-x: hidden;
    font-family: "Lato", sans-serif;
}

.textFont {
    font-family: 'Archivo', sans-serif;
    font-size: 148%;
    font-weight: 600;
    color: #10464b;
    letter-spacing: 2px;
    margin-top: -4%;
    margin-left: 8%;
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
</style>

<div class="row">

    <!-- editing content starts here -->
    <div class="col-9" style="width: 85%; margin-left: 20%;">
        <div style="background-color: #f5fdfd">
            <div class="container">
                <div style="display:flex;">
                    <i class="fa-solid fa-envelope fa-xl"></i>
                    <span class="textFont">EMAIL</span>
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
                    <div class="btn-group dropend" style="margin-top: 4%;">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Choose MC
                        </button>
                        <ul id="dropdown-menu" class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                            <!-- AJAX MC -->
                        </ul>
                        <textbox style="margin-left: 10%; background-color: #adf5f5;" id="getDD1Val">
                        </textbox>
                    </div>
                </div>
                <!-- col-7 ends here -->

            </div> <!-- class="row" -->

            <!-- selecting department Auto ON/OFF -->
            <div class="row">
                <!-- col-5 starts here -->
                <div class="col-7">
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 22%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            MC Groups
                        </button>
                        <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <input type="checkbox" id="heatwave-department">
                                            <label for="heatwave-department">Heatwave Department</label>
                                            <input type="checkbox" id="auto-email-heatwave">
                                            <label for="auto-email-heatwave">Auto Email On/Off</label>
                                        </a>
                                    </li>
                                </ul> -->

                        <ul id="dropdown-menu-2" class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                        </ul>
                    </div>
                </div>
                <!-- col-5 ends here -->
                <div class="col-5">
                    <div>
                        <lable>Show Email-ID</lable><textarea id="show_email_id" style="width: 90%;"></textarea>
                    </div>
                </div>
                <!-- <div class="col-5">
                            <div>
                                <lable>Show Email-ID</lable><textarea id="show_email_id" style="width: 90%;"></textarea>
                            </div>
                        </div> -->
            </div>

            <div class="row">
                <!-- new group && existing group starts here -->
                <!-- radio btn starts here -->
                <div style="margin-top: 1%; width: -webkit-fill-available;">
                    <div style="display: flex;">
                        <label>Create or Edit</label>
                        <div class="radioCls"><input type="radio" name="create_edit_option" value="none" checked />
                            <label>None</label>
                        </div>

                        <div class="radioCls"><input type="radio" name="create_edit_option" value="existing_group" />
                            <label>Create Group/Existing Group</label>
                        </div>
                    </div>
                </div> <!-- radio btn ends here -->


                <!-- Existing Group radio btn BOX starts here -->
                <div id="existingGroupIdDis" class="hidden">
                    <div class="row" style="display: flex;justify-content: space-evenly;">
                        <div class="col-6" style=" margin-top: 1%;height: 18.25rem;width: 23rem;background-color:
                                #cccccc;">
                            <div style="margin-left: 3%;">
                                <div style="padding-top: 2%;">Existing Group</div>
                                <div>
                                    <!-- Choose grp dropdown starts here -->
                                    <div class="btn-group">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Choose Group
                                        </button>
                                        <ul id="dropdown-menu-3" class="dropdown-menu"
                                            style="height: 20rem; overflow-y: scroll;">
                                        </ul>
                                        <textbox style="margin-left: 10%; background-color: #adf5f5;" id="getDD3Val">
                                        </textbox>
                                    </div>
                                    <!-- Choose grp dropdown ends here -->

                                    <!-- addemail -->
                                    <div style="margin-top:2%;">
                                        <input id="add_email" type="text" style="width:82%;"
                                            placeholder="add email here" />
                                        <button id="submit_email" class="btn btn-light btn-sm"
                                            type="submit">Add</button>
                                    </div> <!-- addemail ends here-->
                                    <hr />

                                    <!-- new grp, class="hidden" style="display: none;" -->
                                    <div id="newGroupIdDis">
                                        <div style="background-color: #cccccc;">
                                            <div>
                                                <!-- style="margin-left: 3%;" -->
                                                <div>New Group</div>
                                                <div>
                                                    <input type="text" style="width:82%;" id="newGroupInput" />
                                                    <!-- <button class="btn btn-light btn-sm" type="submit"
                                                                id="addButton">Add</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- addemail -->
                                    <div style="margin-top:2%;">
                                        <input id="add_email" type="text" style="width:82%;"
                                            placeholder="add email here" />
                                        <button id="submit_email" class="btn btn-light btn-sm"
                                            type="submit">Add</button>
                                    </div> <!-- addemail ends here-->
                                    <hr>
                                    <div>
                                        <span>NOTE:</span>
                                        <span>Add one email at once</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <!-- list of email displaying -->
                        <div class="col-6"
                            style="margin-top: 1%;height: 16.25rem;width: 23rem;background-color: #cccccc;">
                            <span id="disEmail">
                                imd@gmail.com
                            </span>
                        </div>
                    </div>
                </div><!-- Existing Group radio btn BOX ends here -->

            </div> <!-- new group && existing group ends here -->

            <!-- Data content type -->
            <div>
                <div class="btn-group dropend">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 22%;"
                        data-bs-toggle="dropdown" aria-expanded="false">
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

            <!-- mail send btn -->
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
                    <div class="col-8">
                        <lable>Message</lable>
                        <textarea style="margin-left: 1%; width: 50%;"></textarea>
                    </div>
                    <div class="col-4">
                        <button style="margin-top: 2%;" type="submit" id="submitButton"
                            class="btn btn-success btn-sm">Submit</button>
                    </div>
                </div>

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


    <?php $this->load->view('Menu/template/footer_js_'); ?>

    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- Bootstrap ends here -->
    <!-- leaflet Js -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Leaflet AJAX Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>



    <script>
    //email Log Information button fn
    document.getElementById("toggleEmailLogTable").addEventListener("click", function() {
        window.location = "<?php echo site_url('Email/show_logInfo'); ?>";
    });

    // radio btn for none, new grp, existing grp
    document.addEventListener('DOMContentLoaded', function() {
        const radios = document.querySelectorAll('input[name="create_edit_option"]');
        const existingGroupDiv = document.getElementById('existingGroupIdDis');

        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'existing_group') {
                    existingGroupDiv.style.display = 'block';
                } else {
                    existingGroupDiv.style.display = 'none';
                }
            });
        });
    });
    // 

    // Fetch mc_names for Dropdown 1 (UI)
    $(document).ready(function() {
        $.ajax({
            url: "<?php echo base_url('Email/fetch_mc_names'); ?>",
            method: "GET",
            dataType: "json",
            success: function(data) {
                var dropdownMenu = $('#dropdown-menu');
                $.each(data, function(index, item) {
                    dropdownMenu.append('<li><a class="dropdown-item" href="#">' + item
                        .mc_name + '</a></li>');
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching data: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    });

    //Based on MC, MC group will be displayed [MC Groups DD buttun, 2nd DD]
    $('#dropdown-menu').on('click', 'a.dropdown-item', function(event) {
        event.preventDefault();
        var selectedText = $(this).text();
        $('#getDD1Val').text(selectedText);

        //
        $.ajax({
            url: '<?php echo base_url('Email/get_email_groups_by_mc_name'); ?>',
            type: 'GET',
            data: {
                mc_name: selectedText
            },
            dataType: 'json',
            success: function(data) {
                var menu = $('#dropdown-menu-2');
                menu.empty();
                data.forEach(function(group) {
                    var autoEmailChecked = group.auto_email ? 'checked' : '';
                    var listItem = `
                        <li>
                            <a class="dropdown-item" href="#">
                                <input type="checkbox" id="heatwave-department">
                                <span>${group.groups}</span>
                                <input type="checkbox" id="auto-email-${group.groups}" ${autoEmailChecked}>
                                <label for="auto-email-${group.groups}">Auto Email On/Off</label>
                            </a>
                        </li>
                    `;
                    menu.append(listItem);
                });
                console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching data: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    });

    // Existing grp DD //this DD-3
    $(document).ready(function() {
        $('#dropdown-menu').on('click', 'a.dropdown-item', function(event) {
            event.preventDefault();
            var selectedText = $(this).text();
            $('#getDD1Val').text(selectedText);

            $.ajax({
                url: '<?php echo base_url('Email/get_email_groups_by_mc_name'); ?>',
                type: 'GET',
                data: {
                    mc_name: selectedText
                },
                dataType: 'json',
                success: function(data) {
                    var menu = $('#dropdown-menu-3');
                    menu.empty();
                    data.forEach(function(group) {
                        var listItem = `
                    <li>
                        <a class="dropdown-item" href="#">
                            <span>${group.groups}</span>
                        </a>
                    </li>
                    `;
                        menu.append(listItem);
                    });

                    // Attach click event handler to newly added items in #dropdown-menu-3
                    $('#dropdown-menu-3').on('click', 'a.dropdown-item', function(
                        event) {
                        event.preventDefault();
                        var groupText = $(this).find('span').text();
                        $('#getDD3Val').text(groupText);

                        // Fetch email based on selected group
                        $.ajax({
                            url: '<?php echo base_url('Email/get_email_by_group'); ?>',
                            type: 'GET',
                            data: {
                                group: groupText
                            },
                            dataType: 'json',
                            success: function(data) {
                                // if (data.length > 0) {
                                //     $('#disEmail').text(data[0]
                                //         .email
                                //     );
                                // } else {
                                //     $('#disEmail').text(
                                //         'No email found');
                                // }
                            },
                            error: function(jqXHR, textStatus,
                                errorThrown) {
                                console.error(
                                    "Error fetching email: ",
                                    textStatus, errorThrown);
                                console.error("Response Text: ",
                                    jqXHR
                                    .responseText);
                            }
                        });
                    });

                    console.log(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error fetching data: ", textStatus, errorThrown);
                    console.error("Response Text: ", jqXHR.responseText);
                }
            });
        });
    });
    </script>


    <!-- <?php } ?> -->