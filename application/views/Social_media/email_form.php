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
    <div class="content-wrapper" style="width: 100%;">
        <section class="content">
            <div style="margin-left: 1%;">
                <div class="container" style="margin-left: 0%;">
                    <div style="display:flex;">
                        <i class="fa-solid fa-envelope fa-xl"></i>
                        <!-- <img src="img/anime/calendar.gif" alt="calendar" style="width: 20px;"> -->
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
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Choose MC
                            </button>
                            <ul id="dropdown-menu" class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                                <!-- AJAX MC -->
                            </ul>
                            <textbox style="margin-left: 10%; background-color: #adf5f5;" id="getDD1Val"></textbox>
                        </div>
                    </div>

                    <!-- col-7 ends here -->

                </div> <!-- class="row" -->

                <!-- selecting department Auto ON/OFF -->
                <div class="row">
                    <!-- col-5 starts here -->
                    <div class="col-7">
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                style="margin-top: 22%;" data-bs-toggle="dropdown" aria-expanded="false">
                                MC Groups
                            </button>

                            <ul id="dropdown-menu-2" class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- radio btn starts here -->
                <div class="row">
                    <div style="margin-top: 1%; width: -webkit-fill-available;">
                        <div style="display: flex;">
                            <label>Create or Edit</label>
                            <div class="radioCls"><input type="radio" name="create_edit_option" value="none" checked />
                                <label>None</label>
                            </div>

                            <div class="radioCls"><input type="radio" name="create_edit_option"
                                    value="existing_group" />
                                <label>Create Group/Existing Group</label>
                            </div>
                        </div>
                    </div>
                </div> <!-- radio btn ends here -->

                <!-- Existing Group radio btn BOX ends here -->
                <div id="existingGroupIdDis" class="hidden">
                    <div class="row" style="display: flex;justify-content: space-evenly;">
                        <div class="col-6" style=" margin-top: 1%;height: 18.5rem;width: 23rem;background-color:
                                #cccccc;">
                            <div style="margin-left: 3%;">
                                <div style="padding-top: 2%;">Existing Group</div>
                                <div>
                                    <!-- existing grp ENDS here -->
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
                                            <textbox style="margin-left: 10%; background-color: #adf5f5;"
                                                id="getDD3Val">
                                            </textbox>
                                        </div>
                                        <!-- Choose grp dropdown ends here -->

                                        <!-- addemail -->
                                        <div style="margin-top:2%;">
                                            <input id="add_email" type="email" style="width:82%;"
                                                placeholder="add email here" />
                                            <button id="submit_email" class="btn btn-light btn-sm"
                                                type="submit">Add</button>
                                        </div> <!-- addemail ends here-->
                                    </div>
                                    <!-- existing grp ENDS here -->
                                    <hr />

                                    <!-- new grp STARTS here -->
                                    <div>
                                        <div id="newGroupIdDis">
                                            <div style="background-color: #cccccc;">
                                                <div>
                                                    <div>New Group</div>
                                                    <div>
                                                        <input type="text" style="width:82%;" id="newGroupInput"
                                                            placeholder="Enter new group name" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Add Email Section -->
                                        <div style="margin-top:2%;">
                                            <input id="ng_add_email" type="email" style="width:82%;"
                                                placeholder="Add email here" />
                                            <button id="ng_sub_mail" class="btn btn-light btn-sm" type="submit"
                                                disabled>Add</button>
                                        </div> <!-- Add email ends here -->
                                    </div>
                                    <!-- new grp ENDS here -->
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
                        <div class="col-3"
                            style="margin-top: 1%;height: 16.25rem;width: 23rem;background-color: #cccccc;">
                            <span id="disEmail">

                            </span>
                        </div>
                        <!--  -->

                    </div>
                </div><!-- Existing Group radio btn BOX ends here -->

                <!-- Data content type -->
                <div>
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 22%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Choose DataType
                        </button>
                        <ul id="dropdownMenu" class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="Add New">Add New</a></li>
                            <li><a class="dropdown-item" href="#" data-value="Heatwave">Heatwave</a></li>
                            <li><a class="dropdown-item" href="#" data-value="Coldwave">Coldwave</a></li>
                            <li><a class="dropdown-item" href="#" data-value="Nowcast">Nowcast</a></li>
                        </ul>
                    </div>
                </div>

                <!-- mail send btn -->
                <form id="emailForm" method="POST" action="<?=base_url('email/send_email')?>"
                    enctype="multipart/form-data">
                    <div class="row" style="margin-top: 2%;">
                        <div class="col-8">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" style="width: 70%;" />
                        </div>
                    </div>

                    <div class="row" style="margin-top: 2%;">
                        <div class="col-12">
                            <label for="message">Message</label>
                            <textarea style="width: 70%;height: 70%;" name="message" id="message"
                                class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 2%;">
                        <div class="col-4">
                            <label for="file">Upload</label>
                            <input type="file" name="files[]" id="file" class="form-control" multiple />
                        </div>
                    </div>

                    <input type="hidden" id="getEmailFromGrpInput" name="getEmailFromGrp" />

                    <div class="row">
                        <div class="col-4">
                            <input style="margin-top: 5%;" type="submit" id="submitButton"
                                class="btn btn-success btn-sm" value="Submit" />
                        </div>
                    </div>
                </form>
                <br>
                <!--  -->

            </div>
        </section>
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

    function initializePage() {
        $.ajax({
            url: "<?php echo base_url('Email/fetch_mc_names'); ?>",
            method: "GET",
            dataType: "json",
            success: function(data) {
                var dropdownMenu = $('#dropdown-menu');
                var uniqueMcNames = new Set();

                $.each(data, function(index, item) {
                    uniqueMcNames.add(item.mc_name);
                });

                Array.from(uniqueMcNames).forEach(function(mcName) {
                    var listItem = `
            <li>
                <a class="dropdown-item" href="#">
                    <input type="checkbox" class="dropdown-checkbox" data-name="${mcName}">
                    <span>${mcName}</span>
                </a>
            </li>`;
                    dropdownMenu.append(listItem);
                });

                // Ensure checkboxes are selectable
                $('.dropdown-checkbox').on('change', function() {
                    updateSelectedNames();
                });

                // Prevent checkbox click from triggering the anchor click event
                $('.dropdown-checkbox').on('click', function(e) {
                    e.stopPropagation();
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching data: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }

    // Initializing the page
    $(document).ready(function() {
        initializePage();
    });

    // Function to update selected names in Dropdown 1
    function updateSelectedNames() {
        var selectedNames = [];
        $('.dropdown-checkbox:checked').each(function() {
            selectedNames.push($(this).data('name'));
        });

        // Update textbox with selected names
        var textboxValue = selectedNames.join(', '); // Adjust as per your requirement
        $('#getDD1Val').text(textboxValue);

        // Update Dropdown 2 based on selected names
        updateDropdown2(selectedNames);
    }

    // Function to update groups_checkbox and auto_email columns
    function updateCheckboxStatus(mcName, groupName, columnName, isChecked) {
        $.ajax({
            url: '<?php echo base_url('Email/update_checkbox_status'); ?>',
            type: 'POST',
            data: {
                mc_name: mcName,
                group_name: groupName,
                column_name: columnName,
                is_checked: isChecked
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    console.log(columnName + ' updated successfully');
                } else {
                    console.error('Failed to update ' + columnName);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error updating " + columnName + ": ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }

    function updateDropdown2(selectedNames) {
        var existingMCNames = $('#dropdown-menu-2 .dropdown-item').map(function() {
            return $(this).find('.grp-NamChkBox').data('group');
        }).get();

        existingMCNames.forEach(function(groupName) {
            if (!selectedNames.includes(groupName)) {
                $('#dropdown-menu-2 .grp-NamChkBox[data-group="' + groupName + '"]').closest('li').remove();
            }
        });

        selectedNames.forEach(function(mcName) {
            if (!$('#dropdown-menu-2 .grp-NamChkBox[data-group="' + mcName + '"]').length) {
                refreshDropdowns(mcName);
            }
        });
    }

    function refreshDropdowns(mcName) {
        $.ajax({
            url: '<?php echo base_url('Email/get_email_groups_by_mc_name'); ?>',
            type: 'GET',
            data: {
                mc_name: mcName
            },
            dataType: 'json',
            success: function(data) {
                var menu2 = $('#dropdown-menu-2');
                var existingMCNames = menu2.find('.grp-NamChkBox').map(function() {
                    return $(this).data('group');
                }).get();

                data.forEach(function(group) {
                    var groupName = group.groups;
                    var groupsCheckboxChecked = group.groups_checkbox ? 'checked' : '';
                    var autoEmailChecked = group.auto_email ? 'checked' : '';

                    if (existingMCNames.indexOf(groupName) === -1) {
                        var listItem = `
                    <li>
                        <a class="dropdown-item" href="#">
                            <input type="checkbox" class="grp-NamChkBox" data-group="${groupName}" ${groupsCheckboxChecked}>
                            <span>${groupName}</span>
                            <input type="checkbox" class="auto-email-checkbox" id="auto-email-${groupName}" ${autoEmailChecked}>
                            <label for="auto-email-${groupName}">Auto Email On/Off</label>
                        </a>
                    </li>`;
                        menu2.append(listItem);

                        // Attach event listeners to checkboxes
                        menu2.find('.grp-NamChkBox[data-group="' + groupName + '"]').on('change',
                            function() {
                                var isChecked = $(this).is(':checked');
                                updateCheckboxStatus(mcName, groupName, 'groups_checkbox',
                                    isChecked);
                                if (isChecked) {
                                    fetchEmails(mcName, groupName);
                                } else {
                                    $(this).closest('li').remove();
                                }
                            });

                        menu2.find('.auto-email-checkbox#auto-email-' + groupName).on('change',
                            function() {
                                var isChecked = $(this).is(':checked');
                                updateCheckboxStatus(mcName, groupName, 'auto_email',
                                isChecked);
                            });
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching data for Dropdown 2: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });

        $.ajax({
            url: '<?php echo base_url('Email/get_email_groups_by_mc_name'); ?>',
            type: 'GET',
            data: {
                mc_name: mcName
            },
            dataType: 'json',
            success: function(data) {
                var menu3 = $('#dropdown-menu-3');
                menu3.empty();

                var uniqueGroups = new Set();
                data.forEach(function(group) {
                    uniqueGroups.add(group.groups);
                });

                uniqueGroups.forEach(function(groupName) {
                    var listItem = `
                <li>
                    <a class="dropdown-item" href="#">
                        <span>${groupName}</span>
                    </a>
                </li>`;
                    menu3.append(listItem);
                });

                $('#dropdown-menu-3').on('click', 'a.dropdown-item', function(event) {
                    event.preventDefault();
                    var groupText = $(this).find('span').text();
                    $('#getDD3Val').text(groupText);

                    $.ajax({
                        url: '<?php echo base_url('Email/get_email_by_group'); ?>',
                        type: 'GET',
                        data: {
                            mc_name: mcName,
                            group: groupText
                        },
                        dataType: 'json',
                        success: function(data) {
                            if (data.length > 0) {
                                var emails = data.map(function(item) {
                                    return `<div>${item.email} <button class="delete-email" data-email="${item.email}">X</button></div>`;
                                }).join('');
                                $('#disEmail').html(emails);
                            } else {
                                $('#disEmail').text('No email found');
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error("Error fetching email: ", textStatus,
                                errorThrown);
                            console.error("Response Text: ", jqXHR.responseText);
                        }
                    });
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching data for Dropdown 3: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }



    let getEmailFromGrp = [];

    // this for passing the emails to variable getEmailFromGrp, based on grp selection
    function fetchEmails(mcName, groupName) {
        $.ajax({
            url: '<?php echo base_url('Email/get_email_by_group'); ?>',
            type: 'GET',
            data: {
                mc_name: mcName,
                group: groupName
            },
            dataType: 'json',
            success: function(data) {
                if (data.length > 0) {
                    var emails = data.map(function(item) {
                        return item.email;
                    });
                    getEmailFromGrp = [...getEmailFromGrp, ...emails];
                    console.log('getEmailFromGrp:', getEmailFromGrp);

                    $(document).ready(function() {
                        let getEmailFromGrpInput = document.getElementById('getEmailFromGrpInput');
                        getEmailFromGrpInput.value = JSON.stringify(getEmailFromGrp);
                        console.log(getEmailFromGrpInput.value, 'getEmailFromGrpInput');
                    });
                } else {
                    console.log('No email found');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching email: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }

    // delete button for email list STARTS
    $(document).ready(function() {
        $('#disEmail').on('click', '.delete-email', function(event) {
            event.preventDefault();

            var email = $(this).data('email');
            var mcName = document.getElementById('getDD1Val').innerHTML;
            var group = document.getElementById('getDD3Val').innerHTML;

            var emailElement = $(this).parent();

            $.ajax({
                url: '<?php echo base_url('Email/delete_email'); ?>',
                type: 'POST',
                data: {
                    email: email,
                    mc_name: mcName,
                    groups: group
                },
                success: function(response) {
                    try {
                        var jsonResponse = JSON.parse(response);
                        if (jsonResponse.success) {
                            console.log("Email deleted successfully");
                            emailElement.remove();
                            $('#dropdown-menu-3 a.dropdown-item').eq(0).trigger('click');
                        } else {
                            console.log("Error deleting email:", jsonResponse.message);
                            alert('Error deleting email');
                        }
                    } catch (e) {
                        console.log("Error parsing JSON response:", e);
                        alert('Error deleting email');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error deleting email: ", textStatus, errorThrown);
                    console.error("Response Text: ", jqXHR.responseText);
                }
            });
        });
    });
    //  delete button for email list ENDS


    // Existing group add email
    document.getElementById('submit_email').addEventListener('click', function(event) {
        event.preventDefault();

        let mc_name = document.getElementById('getDD1Val').innerHTML;
        let groups = document.getElementById('getDD3Val').innerHTML;
        let emailInput = document.getElementById('add_email');
        let email = emailInput.value;
        console.log(mc_name, groups, email, "log");

        if (mc_name && groups && email) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo base_url('Email/add_email'); ?>', true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('Email added successfully');
                        $('#dropdown-menu-3 a.dropdown-item').eq(0).trigger('click');
                        emailInput.value = ""; // Clear the input field
                    } else {
                        console.log('Error adding email');
                    }
                }
            };

            let data = JSON.stringify({
                mc_name: mc_name,
                groups: groups,
                email: email
            });

            xhr.send(data);
        } else {
            console.log('Please fill in all fields');
        }
    });
    // 

    // new group code starts here
    $(document).ready(function() {
        let newGroupInputVar = document.getElementById('newGroupInput').innerHTML;
        let ng_add_emailVar = document.getElementById('ng_add_email').innerHTML;

        // Function to enable/disable the submit button
        function toggleSubmitButton() {
            const groupValue = $('#newGroupInput').val().trim();
            const emailValue = $('#ng_add_email').val().trim();
            $('#ng_sub_mail').prop('disabled', !(groupValue && emailValue));
        }

        // Event listeners for input fields
        $('#newGroupInput, #ng_add_email').on('input', toggleSubmitButton);

        // AJAX request on button click
        $('#ng_sub_mail').on('click', function(event) {
            event.preventDefault();

            let mc_name = $('#getDD1Val').text().trim();
            let group = $('#newGroupInput').val().trim();
            let email = $('#ng_add_email').val().trim();

            if (mc_name && group && email) {
                let data = {
                    mc_name: mc_name,
                    groups: group,
                    email: email,
                    auto_email: false
                };

                $.ajax({
                    url: '<?php echo base_url('Email/add_new_group_email'); ?>',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(data),
                    success: function(response) {
                        console.log(response, "response");

                        if (response == true || "success") {
                            console.log('Email added successfully');

                            $('#newGroupInput').val('');
                            $('#ng_add_email').val('');
                            // 
                            $('#getDD3Val').text('');
                            $('#disEmail').val('');

                            $('#ng_sub_mail').prop('disabled', true);
                        } else {
                            console.log('Error adding email');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Error adding email: ", textStatus, errorThrown);
                        console.error("Response Text: ", jqXHR.responseText);
                    }
                });
            } else {
                console.log('Please fill in all fields');
            }
        });
    });
    // 

    // Dropdown content
    document.getElementById('dropdownMenu').addEventListener('click', function(event) {
        const selectedItem = event.target;
        const selectedValue = selectedItem.getAttribute('data-value');
        const subjectField = document.getElementById('subject');
        const messageField = document.getElementById('message');

        let mc_name = $('#getDD1Val').text()

        if (selectedValue === 'Heatwave') {
            subjectField.value = 'Heatwave Alert';
            messageField.value =
                'Respected Authority,\nThis is to inform you that ' + mc_name +
                ' is experiencing a severe heatwave today. As of 2:00 PM, the temperature has been recorded at temperature 45°C, significantly above the average for this period.';
        } else if (selectedValue === 'Coldwave') {
            subjectField.value = 'Coldwave Alert';
            messageField.value =
                'Respected Authority,\nThis is to inform you that ' + mc_name +
                ' is experiencing a severe coldwave today. As of 2:00 PM, the temperature has been recorded at temperature 0°C, significantly above the average for this period.';
        } else {
            subjectField.value = '';
            messageField.value = '';
        }
    });
    // 

    //getting the upload file names
    document.getElementById('file').addEventListener('change', function(e) {
        const files = e.target.files;

        for (let i = 0; i < files.length; i++) {
            console.log("Chosen File Name: ", files[i].name);
        }
    });
    // 
    </script>


    <!-- <?php } ?> -->