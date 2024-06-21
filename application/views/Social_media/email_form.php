<!-- <?php if($this->session->userdata('is_loggedin') == TRUE){  ?> -->

<?php $this->load->view('Menu/template/header_'); ?>
<?php $this->load->view('Menu/template/sidebar_'); ?>

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

    <div id="user-data" data-user-id="<?php echo $user_id; ?>" data-name="<?php echo $name; ?>"></div>

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
                    <input type="checkbox" id="mainInputCheck_m">
                    <label for="mainInputCheck_m">Auto Email ON/OFF</label>
                </div>
                <!--  -->
                <div class="row">
                    <!-- col-7 starts here -->
                    <div class="col-7">
                        <div class="btn-group dropend" style="margin-top: 4%;">

                            <!-- HQ_User -->
                            <?php if ($user_id == "0967b574-37db-4ed9-a31f-e2a4f354514f") : ?>
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Choose MC
                            </button>
                            <ul id="dropdown-menu" class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                                <!-- AJAX MC -->
                            </ul>
                            <textbox style="margin-left: 10%; background-color: #adf5f5;" id="getDD1Val"></textbox>
                            <!-- HQ_User -->
                            <?php else : ?>
                            <!-- Normal_User -->
                            <input type="checkbox" class="dropdown-checkbox" data-name="<?php echo $name; ?>"
                                id="mc_name_check" />
                            <textbox style="margin-left: 10%; background-color: #adf5f5;" id="getDD1Val">
                                <?php echo $name; ?></textbox>
                            <?php endif; ?>
                            <!-- Normal_User -->

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
    let userId = <?php echo json_encode($user_id); ?>;
    // console.log("User ID:", userId);
    //
    let LoggedMC_name = <?php echo json_encode($name); ?>;
    // console.log("LoggedMC_name:", LoggedMC_name);

    // ****************************************************//

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

    $(document).ready(function() {
        initializePage();
    });

    // Fetch mc_names for Dropdown 1 (UI)
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
                    var mcName = $(this).data('name');
                    updateSelectedNames();
                    if ($(this).is(':checked')) {
                        updateDropdown2(getSelectedMcNames());
                        fetchGroupsForMCName(mcName);
                        fetchEmails(mcName);
                    } else {
                        $('#dropdown-menu-2').empty();
                        $('#getDD3Val').text('');
                    }
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

    function getSelectedMcNames() {
        var selectedNames = [];
        $('.dropdown-checkbox:checked').each(function() {
            selectedNames.push($(this).data('name'));
        });
        return selectedNames;
        console.log(selectedNames, "selectedNames");
        fetchEmails(mcName, null);
    }

    // Function to update selected names in Dropdown 1
    function updateSelectedNames() {
        var selectedNames = getSelectedMcNames();
        // Update textbox with selected names
        var textboxValue = selectedNames.join(', ');
        $('#getDD1Val').text(textboxValue);

        console.log('Textbox Value:', $('#getDD1Val').text());
    }

    // Function to update Dropdown 2 based on selected names
    function updateDropdown2(selectedNames) {
        var menu2 = $('#dropdown-menu-2');
        menu2.empty();

        selectedNames.forEach(function(mcName) {
            refreshDropdowns(mcName);
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
            success: function(response) {
                var menu2 = $('#dropdown-menu-2');
                // Do not clear menu2 here to accumulate items from multiple calls

                var groupMap = new Map();

                response.forEach(function(group) {
                    var groupName = group.groups;
                    var groupDetails = {
                        auto_email: group.auto_email,
                        groups_checkbox: group.groups_checkbox,
                        email: group.email
                    };

                    if (groupMap.has(groupName)) {
                        var existingDetails = groupMap.get(groupName);
                        existingDetails.auto_email = group.auto_email;
                        existingDetails.groups_checkbox = group.groups_checkbox;
                        existingDetails.email = group.email;
                    } else {
                        groupMap.set(groupName, groupDetails);
                    }
                });

                // Construct dropdown items from the groupMap
                groupMap.forEach(function(details, groupName) {
                    var autoEmailChecked = details.auto_email === 't' ? 'checked' : '';
                    var groupsCheckboxChecked = details.groups_checkbox === 't' ? 'checked' : '';

                    var listItem = `
                <li>
                    <a class="dropdown-item" href="#">
                        <input type="checkbox" class="grp-NamChkBox" data-group="${groupName}" ${groupsCheckboxChecked}>
                        <span>${groupName}</span>
                        <input type="checkbox" id="auto-email-${groupName}" ${autoEmailChecked}>
                        <label for="auto-email-${groupName}">Auto Email On/Off</label>
                    </a>
                </li>`;

                    menu2.append(listItem);

                    // Attach change event to checkboxes in Dropdown 2
                    menu2.find('.grp-NamChkBox').last().on('change', function() {
                        var isChecked = $(this).is(':checked');
                        updateCheckboxStatus(mcName, groupName, 'groups_checkbox',
                            isChecked);
                    });

                    // Attach change event to auto email checkboxes in Dropdown 2
                    menu2.find(`#auto-email-${groupName}`).last().on('change', function() {
                        var isChecked = $(this).is(':checked');
                        updateCheckboxStatus(mcName, groupName, 'auto_email', isChecked);
                    });
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching data for Dropdown 2: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }



    // Function to update checkbox status on the server
    function updateCheckboxStatus(mcName, groupName, columnName, isChecked) {
        $.ajax({
            url: '<?php echo base_url('Email/update_checkbox_status'); ?>',
            type: 'POST',
            data: {
                mc_name: mcName,
                group_name: groupName,
                column_name: columnName,
                is_checked: isChecked ? 1 : 0
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    console.log(`Checkbox status updated successfully for ${groupName}`);
                } else {
                    console.error('Failed to update checkbox status');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error updating checkbox status: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }

    let getEmailFromGrp = [];

    //Email Submit function
    document.getElementById('getEmailFromGrpInput').value = JSON.stringify(getEmailFromGrp);
    document.getElementById('emailForm').addEventListener('submit', function() {
        document.getElementById('getEmailFromGrpInput').value = JSON.stringify(getEmailFromGrp);
    });
    //Email Submit-btn function


    function fetchEmails(mcName) {
        $.ajax({
            url: '<?php echo base_url('Email/get_email_by_group'); ?>',
            type: 'GET',
            data: {
                mc_name: mcName,
            },
            dataType: 'json',
            success: function(data) {
                if (data.length > 0) {
                    data.forEach(function(item) {
                        console.log('email_to_form:', item.email, item.groups, item
                            .groups_checkbox);
                        if (item.groups_checkbox == "t") {
                            getEmailFromGrp.push(item.email);
                        }
                    });
                    $('#getEmailFromGrpInput').val(getEmailFromGrp.join(', '));
                    console.log(getEmailFromGrp, "getEmailFromGrp[]");
                } else {
                    console.log('No emails found for mcName:', mcName);
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
                            $('#dropdown-menu-3 a.dropdown-item').eq(0).trigger(
                                'click');
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
                        emailInput.value = "";
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

    function fetchGroupsForMCName(mcName) {
        $.ajax({
            url: '<?php echo base_url('Email/get_email_groups_by_mc_name'); ?>',
            type: 'GET',
            data: {
                mc_name: mcName
            },
            dataType: 'json',
            success: function(response) {
                var dropdownMenu3 = $('#dropdown-menu-3');

                // Using a Map to store group names and their corresponding emails
                var groupMap = new Map();

                response.forEach(function(item) {
                    var groupName = item.groups;
                    var email = item.email;

                    if (groupMap.has(groupName)) {
                        groupMap.get(groupName).push(email);
                    } else {
                        groupMap.set(groupName, [email]);
                    }
                });

                groupMap.forEach(function(emails, groupName) {
                    // Construct HTML for dropdown item
                    var listItem = `
                <li>
                    <a class="dropdown-item" href="#" data-group="${groupName}" data-emails='${JSON.stringify(emails)}'>
                        <span>${groupName}</span>
                    </a>
                </li>`;

                    // Append the new list item to the dropdown menu
                    dropdownMenu3.append(listItem);

                    // Attach click event to handle selection
                    dropdownMenu3.find('a[data-group="' + groupName + '"]').last().on('click',
                        function(e) {
                            e.preventDefault();
                            var selectedGroup = $(this).data('group');
                            var selectedEmails = $(this).data('emails');

                            // Update #getDD3Val with selected group name
                            $('#getDD3Val').text(selectedGroup);

                            // Function to update the displayed emails
                            function updateEmailsDisplay() {
                                var emailsHtml = selectedEmails.map(email => {
                                    return `${email} <button class="btn btn-danger btn-sm delete-email" data-email="${email}">X</button>`;
                                }).join('<br>');

                                // Update #disEmail with emails and X buttons
                                $('#disEmail').html(emailsHtml);

                                // Handle delete email button click
                                $('.delete-email').on('click', function() {
                                    var emailToDelete = $(this).data('email');
                                    if (confirm(
                                            'Are you sure you want to delete the email: ' +
                                            emailToDelete + '?')) {
                                        // Remove the email from the array
                                        var emailIndex = selectedEmails.indexOf(
                                            emailToDelete);
                                        if (emailIndex > -1) {
                                            selectedEmails.splice(emailIndex, 1);
                                        }

                                        // Update the map with the new email list
                                        groupMap.set(selectedGroup, selectedEmails);

                                        // Update the displayed emails
                                        updateEmailsDisplay();

                                        // Optionally, update the server with the new email list
                                        deleteEmailFromDatabase(emailToDelete);
                                    }
                                });
                            }

                            // Initial call to display emails
                            updateEmailsDisplay();

                            // Optionally, you can perform additional actions here
                            console.log('Selected Group:', selectedGroup);
                            console.log('Selected Emails:', selectedEmails);
                        });
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching groups for MC name: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }
    fetchGroupsForMCName('MCName1');


    function deleteEmailFromDatabase(emailToDelete) {
        $.ajax({
            url: '<?php echo base_url('Email/delete_email_from_group'); ?>',
            type: 'POST',
            data: {
                email: emailToDelete
            },
            dataType: 'json',
            success: function(response) {
                // Handle success message or any UI update
                console.log('Email deleted successfully:', emailToDelete);

                // Optionally, update UI or reload data after deletion
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error deleting email: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }

    // Function to fetch groups and corresponding emails
    function fetchGroupsAndEmails(mcName) {
        $.ajax({
            url: '<?php echo base_url('Email/get_groups_by_mc_name'); ?>',
            type: 'GET',
            data: {
                mc_name: mcName
            },
            dataType: 'json',
            success: function(response) {
                var groupsTextbox = $('#getDD3Val');
                groupsTextbox.empty();

                response.forEach(function(group) {
                    var groupName = group.groups;
                    var listItem = `
                <li>
                    <a class="dropdown-item" href="#">
                        ${groupName}
                    </a>
                </li>`;
                    groupsTextbox.append(listItem);

                    // Click event for each group
                    groupsTextbox.find('.dropdown-item').last().on('click', function() {
                        displayEmail(mcName, groupName);
                    });
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching groups: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }

    // 
    function displayEmail(mcName, groupName) {
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

                    $('#disEmail').text(emails.join(', '));
                } else {
                    $('#disEmail').text('No email found');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching email: ", textStatus, errorThrown);
                console.error("Response Text: ", jqXHR.responseText);
            }
        });
    }

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

    // mc_checkbox input checkbox in second line
    $(document).ready(function() {
        $('#mc_name_check').on('change', function() {
            var isChecked = $(this).prop('checked');
            console.log('Checkbox checked:', isChecked);

            if (isChecked) {
                console.log('getEmailFromGrp[]2:', getEmailFromGrp);
            } else {
                getEmailFromGrp = [];
                console.log('getEmailFromGrp[]3:', getEmailFromGrp);
            }

        });
    });

    // main_autoemail input checkbox in first line
    $(document).ready(function() {
        $('#mainInputCheck_m').on('change', function() {
            var state = $(this).is(':checked');

            //HQ_user
            <?php if ($user_id == "0967b574-37db-4ed9-a31f-e2a4f354514f") : ?>
            $.ajax({
                url: '<?php echo base_url('Email/update_main_auto_email'); ?>',
                type: 'POST',
                data: {
                    state: state
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        console.log('Main Auto Email updated successfully.');

                        if (state && response.emails) {
                            console.log('Emails with auto_email set to true:');
                            response.emails.forEach(function(email) {
                                console.log(email.email);
                            });
                        }
                    } else {
                        console.error('Failed to update Main Auto Email.');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error updating Main Auto Email:', textStatus,
                        errorThrown);
                }
            });
            //
            //
            <?php else : ?>
            // 
            // MC_user
            $.ajax({
                url: '<?php echo base_url('Email/getEmailsWithAutoEmail_MC'); ?>',
                type: 'POST',
                data: {
                    state: state,
                    LoggedMC_name: LoggedMC_name
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        console.log(response, 'response');

                        if (state && response.emails) {
                            console.log('Emails with auto_email set to true:');
                            response.emails.forEach(function(email) {
                                console.log(email.email);
                            });
                        }
                    } else {
                        console.error('Failed to update Main Auto Email.');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error updating Main Auto Email:', textStatus,
                        errorThrown);
                }
            });
            <?php endif; ?>
        });
    });
    </script>


    <!-- <?php } ?> -->