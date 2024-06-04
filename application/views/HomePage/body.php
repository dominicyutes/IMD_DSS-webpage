<body>
    <!-- Title start here -->
    <div class="body">
        <!-- imd logo title START -->
        <div
            style="display: flex; align-items: center; justify-content: space-between; height: 60px; width: calc(100% - 60px); position: relative;">
            <img src="img/emblem.png" alt="Emblem of India" height="50"
                style="margin-right: auto; margin-left: 30px; margin-top: 5px; margin-bottom: 5px;">

            <div style="flex: 1; text-align: center;">
                <span class="text" style="font-family: 'Times New Roman';">WEATHER DECISION SUPPORT SYSTEM</span>
            </div>

            <img src="img/imd_logo.png" alt="IMD logo" height="50"
                style="margin-left: auto; margin-right: -31px; margin-top: 5px; margin-bottom: 5px;">
        </div>
        <!-- imd logo title END -->


        <!-- navbar -->
        <div style="height: 15%;width: 100%; background-color:#f4fcff;">
            <div style="display:flex;padding:0.2em 0.2em 0.2em 1.3em" class="mx-auto heightChange">
                <div style="width: 100%;display: flex;">
                    <div class="d-flex flex-wrap w-100 gx-3 gy-3 mt-1" id="parent"
                        style="justify-content: space-between">

                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="exposure" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Exposure</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="metar" style="font-family: 'Times New Roman'; font-size: 20px;">Metar
                            </p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="synop" style="font-family: 'Times New Roman'; font-size: 20px;">Synop
                            </p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="sounding" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Sounding</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="ship_and_buoy"
                                style="font-family: 'Times New Roman'; font-size: 20px;">Ship and Buoy</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="radar" style="font-family: 'Times New Roman'; font-size: 20px;">Radar
                            </p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="satellite" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Satellite</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="lightning" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Lightning</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="mesolscale" style="font-family: 'Times New Roman'; font-size: 20px;">
                                Mesoscale Forecast</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p class="btn-val" id="medium_range"
                                style="font-family: 'Times New Roman'; font-size: 20px;">Medium Range</p>
                            <div class="underline"></div>
                        </button>
                        <button class="d-flex btn border-end border-2 pe-3" style="flex-direction:column;">
                            <p style="font-family: 'Times New Roman'; font-size: 20px;" class="btn-val">Export Polygon
                            </p>
                            <div class="underline"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 72%;width:100%;margin-left: 0px;" class="row">
            <!-- MAP -->
            <div id="map" class="col-lg-10"></div>

            <!-- weather inference -->
            <div id="weatherinferencecontainer" class="obsClass hidden col-sm-2" style="position: relative;">
                <div style="display: flex; justify-content: space-between;">
                    <h6 class="obsh4" style="font-family: 'Times New Roman', Times, serif; font-size: 20px">WEATHER
                        INFERENCE
                    </h6>
                    <span title="Close" class="playBtnClasX" onClick="inferenceCloseX()">X</span>
                </div>

                <div>
                    <label name="start_dates" class="dateDDLabel"
                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Date:</label>
                    <input type="date" id="start_dates" class="dateDD">
                </div>
                <div>
                    <label name="subparameter" class="thirdDDLabel"
                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Drawings</label>
                    <select class="thirdDD" id="subparameter" &nbsp;>
                    </select>
                    <div id="checkboxListContainer"></div>
                </div>
                </form>
                <!-- Submit -->
                <div style="display: flex;justify-content: space-around;">
                    <button id="submitButton" onclick="SubmitForm()" class="submitBtn">Submit</button>
                    <button class="submitBtn" onclick="confirmDelete()" id="deleteDrawing">Delete</button>
                    <button class="submitBtn" onclick="toggleDrawing()" class="multipleBtn">Active Multiple</button>
                    <button class="submitBtn" onclick="eraseDrawing()" id="eraseDrawing">Erase</button>
                </div>
                <div>
                    <?php
                    if (isset($name)) {
                        if ($name === "Super_Admin_HQ") {
                            echo '<button id="login_button" class="submitBtn" onclick="toggleVisibility()" style="margin-top: 30px; width: 270px;">VIEW ALL MC\'S</button>';
                        } else if ($name === "MC_Bhubaneswar") {
                            echo '<style>#login_button { display: none; }</style>';
                            echo '<button id="login_button_odisha" class="submitBtn" onclick="toggleVisibility_odisha()" style="margin-top: 30px; width: 270px;">MC HEAD</button>';
                        } else if ($name === "RMC_NewDelhi") {
                            echo '<style>#login_button { display: none; }</style>';
                            echo '<button id="login_button_delhi" class="submitBtn" onclick="toggleVisibility_delhi()" style="margin-top: 30px; width: 270px;">MC HEAD</button>';
                        }
                    }
                    ?>
                </div>
                <br>
                <div id="contentDiv"
                    style="width: 290px; height: 518px; border: 3px solid #244c7e; overflow: auto; padding: 10px; display: none;">
                    <div
                        style="width: 268px; padding: 20px; border: 2px solid #ccc; border-radius: 5px; display: flex; justify-content: space-between; align-items: center;">
                        <label for="dropdown" style="margin-right: 10px;">Select an MC:</label>
                        <select id="dropdown" style="flex: 1; padding: 8px;" onchange="showSelectedSection()">
                            <option value="all">ALL MC's</option>
                            <option value="mc-odisha">MC_Bhubaneswar</option>
                            <option value="mc-delhi">MC Delhi</option>
                            <option value="mc-hyd">MC Hyderabad</option>
                        </select>
                    </div>

                    <div
                        style="width: 268px; height: 50px; border: 1px solid #4c3248; overflow: auto; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
                        <i style="font-size: 30px;" class="fa-solid fa-backward" onclick="startBackward()"></i>
                        <i id="playButton" class="fa fa-play"
                            style="font-size: 30px; margin-left: 10px; cursor: pointer;" onclick="startPlay()"></i>
                        <i id="pauseButton" class="fa-solid fa-pause"
                            style="font-size: 30px; display: none; cursor: pointer;" onclick="startPause()"></i>

                        <i style="font-size: 30px;" class="fa-solid fa-forward" onclick="startForward()"></i>

                    </div>


                    <div id="all">
                        <div id="mc-odisha"
                            style="width: 268px; height: 250px; border: 1px solid #4c3248; overflow: auto; padding: 10px;">
                            <div style="color: #333; font-family: Arial, sans-serif;">
                                <div style="display: flex; justify-content: center;">MC Bhubaneswar</div>
                                <div>
                                    <label for="start_date_odisha_hq" class="dateDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Date:</label>
                                    <input type="date" id="start_date_odisha_hq" class="dateDD" onchange="fetchName()">
                                </div>
                            </div>
                            <div id="drawings_data_odisha_hq"></div>
                        </div>


                        <div id="mc-delhi"
                            style="width: 268px; height: 250px; border: 1px solid #4c3248; overflow: auto; padding: 10px;">
                            <div style="color: #333; font-family: Arial, sans-serif;">
                                <div style="display: flex; justify-content: center;">RMC DELHI</div>
                                <div>
                                    <label name="start_date_delhi_hq" class="dateDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Date:</label>
                                    <input type="date" id="start_date_delhi_hq" class="dateDD" onchange="fetchName()">
                                </div>
                            </div>
                            <div id="drawings_data_delhi_hq"></div>
                        </div>

                        <div id="mc-hyd"
                            style="width: 268px; height: 250px; border: 1px solid #4c3248; overflow: auto; padding: 10px;">
                            <div style="color: #333; font-family: Arial, sans-serif;">
                                <div style="display: flex; justify-content: center;">MC HYDERABAD</div>
                                <div>
                                    <label name="start_date_hyd_hq" class="dateDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Date:</label>
                                    <input type="date" id="start_date_hyd_hq" class="dateDD" onchange="fetchName()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="contentDiv_odisha"
                    style="width: 290px; height: 480px; border: 3px solid #244c7e; overflow: auto; padding: 10px; display: none;">
                    <button class="submitBtn" style="margin-left:60px;width: 150px;" id="PassDrawings_bhu">Forward to
                        HQ</button>
                    <div id="mc-odisha"
                        style="width: 268px; height: 410px; border: 1px solid #4c3248; overflow: auto; padding: 10px;">
                        <div style="color: #333; font-family: Arial, sans-serif;">
                            <div style="display: flex; justify-content: center;">MC Bhubaneswar</div>
                            <div>
                                <label for="start_date_odisha" class="dateDDLabel"
                                    style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Date:</label>
                                <input type="date" id="start_date_odisha" class="dateDD" onchange="fetchName()">
                            </div>
                        </div>
                        <div id="drawings_data_odisha"></div>
                    </div>
                </div>

                <div id="contentDiv_delhi"
                    style="width: 290px; height: 480px; border: 3px solid #244c7e; overflow: auto; padding: 10px; display: none;">
                    <button class="submitBtn" style="margin-left:60px;width: 150px;" id="PassDrawings_delhi">Forward to
                        HQ</button>
                    <div id="rmc-delhi"
                        style="width: 268px; height: 410px; border: 1px solid #4c3248; overflow: auto; padding: 10px;">
                        <div style="color: #333; font-family: Arial, sans-serif;">
                            <div style="display: flex; justify-content: center;">RMC delhi</div>
                            <div>
                                <label for="start_date_delhi" class="dateDDLabel"
                                    style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Date:</label>
                                <input type="date" id="start_date_delhi" class="dateDD" onchange="fetchName()">
                            </div>
                        </div>
                        <div id="drawings_data_delhi"></div>
                    </div>
                </div>
                <div id="contentDiv_hyd"
                    style="width: 290px; height: 480px; border: 3px solid #244c7e; overflow: auto; padding: 10px; display: none;">
                    <button class="submitBtn" style="margin-left:60px;width: 150px;" id="PassDrawings_hyd">Forward to
                        HQ</button>
                    <div id="mc-hyd"
                        style="width: 268px; height: 410px; border: 1px solid #4c3248; overflow: auto; padding: 10px;">
                        <div style="color: #333; font-family: Arial, sans-serif;">
                            <div style="display: flex; justify-content: center;">MC Hyderabad</div>
                            <div>
                                <label for="start_date_hyd" class="dateDDLabel"
                                    style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Date:</label>
                                <input type="date" id="start_date_hyd" class="dateDD" onchange="fetchName()">
                            </div>
                        </div>
                        <div id="drawings_data_hyd"></div>
                    </div>
                </div>
            </div>


            <!-- OBSERVATION -->
            <div id="ObservationContainer" class="obsClass hidden col-sm-2" style="position: relative;">
                <div style="display: flex; justify-content: space-between;">
                    <h6 class="obsh4" style="font-family: 'Times New Roman', Times, serif; font-size: 20px">OBSERVATION
                    </h6>
                    <span title="Close" class="playBtnClasX" onClick="obsCloseX()">X</span>
                </div>

                <!-- model -->
                <form id="obsForm">
                    <div>
                        <label name="modelNames" class="firstDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Type:</label>
                        <select class="firstDD" id="modelNames" onchange="showParameterNames(this.value)" &nbsp;>
                        </select>
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    <!-- parameter -->
                    <div>
                        <label name="parameter" class="secondDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Time:</label>
                        <select class="secondDD" id="parameterNames" onchange="showSubParameterNames(this.value)"
                            &nbsp;>
                        </select>
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    <!-- SubParameter -->
                    <div>
                        <label name="subparameter" class="thirdDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Parameter</label>
                        <select class="thirdDD" id="subparameterpp" &nbsp;>
                        </select>
                        <div id="checkboxListContainer"></div>
                    </div>
                    <!-- <span>&nbsp;</span> -->


                    <div>
                        <label name="start_date" class="dateDDLabel"
                            style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Date:</label>
                        <input type="date" id="start_date" class="dateDD">
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    <!-- <div>
                    <label for="end_date" class="dateDDLabel">To Date:</label>
                    <input type="date" id="end_date" class="dateDD">
                </div> -->
                    <!-- <span>&nbsp;</span> -->
                    <div>
                        <span id="TimNon" style="display: contents;">
                            <label name="hourSelect" class="TimeLabel"
                                style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Time:</label>
                            <select id="hourSelect" class="TimeHR">
                            </select>
                            <select id="minuteSelect" class="TimeMin">
                            </select>
                        </span>
                    </div>
                    <!-- <span>&nbsp;</span> -->
                    </select>
                </form>
                <!-- Submit -->
                <div style="display: flex;justify-content: space-around;">
                    <button id="submitButton" onclick="obs_SubmitForm()" class="submitBtn">Submit</button>
                    <button class="obsRemCls" id="obsRemBtn" onclick="obs_Rem_()">Remove</button>
                </div>
                <div
                    style="position: absolute; bottom: 0; background-color: #f4fcff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; max-width: 300px; font-family: 'Times New Roman', Times, serif;">
                    <h4
                        style="background-color: #d4e6ff; padding: 10px; margin-top: 0; border-top-left-radius: 8px; border-top-right-radius: 8px; text-align: center;">
                        Note</h4>
                    <ul style="list-style-type: none; padding-left: 0; margin-top: 10px; text-align: justify;">
                        <span style="font-size: 15px; line-height: 1.6; color: #333;">
                            This option aims to present a comprehensive summary of the observed data for various
                            parameters. Please ensure that all fields are filled in to access the information.
                        </span>
                    </ul>

                </div>
            </div>

            <!-- MACRO -->
            <div id="macroContainer" class="hidden obsClass col-sm-2" style="position: relative;">

                <div class="row">
                    <div style="height: 60vh;overflow: auto; ">
                        <div style="display:flex;">
                            <button class="createMacroCls" style="font-size: 20px"
                                onclick="createMacroForm()">+</button>
                            <span
                                style="color: #2c5383;font-family: 'Archivo', sans-serif;font-size: 20px;font-weight: bold;margin-left: 6%;margin-top: 1%; font-size: 20px">Create
                                Macro</span>
                            <?php if ($user_id == "450632a9-5717-4261-ada6-dc97cbea0ee9"): ?>
                            <a href="<?php echo base_url(); ?>HomePage/fetch_names" id="userFilterLink">
                                <i title="User Filter" style="margin: 16px 15px 0 27px;"
                                    class="fa-regular fa-user fa-lg"></i>
                            </a>
                            <!--  -->
                            <a href="<?php echo base_url(); ?>HomePage/displayDeletedMacros">
                                <i title="Deleted MacroGroup" style="margin: 16px 22px 0 15px;"
                                    class="fa-regular fa-trash-can fa-lg"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div style="overflow: auto;" id="showCreatedMacro"></div>
                        <!--  -->
                        <!-- SUPERADMIN macroGroup User list dialog box- Dragable -->
                        <div class="modelForMacroGroup1" style="display: none; left: 1298px; top: 390px; height:0;">
                            <div class="modelForMacroGroup2" style="position: relative;">
                                <div
                                    style="z-index: 999; display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #00415a; padding: 10px; border-radius: 10px; align-items: center;">
                                    <h4 style="color: white; margin: 0 auto; font-size: 20px">MacroGroup Users</h4>
                                    <span title="Close" class="modelForMacroGroupLegend">X</span>
                                </div>
                                <div>
                                    <p id="showMacroGrpUsers"></p>
                                    <p style="margin-left: 20px;" id="showMacroGrpUsersALL" class="macroGrpUserSA">All
                                        MAcros</p>
                                </div>
                            </div>
                        </div>
                        <!-- SUPERADMIN macroGroup User list dialog box -->
                    </div>

                    <!-- MacroNote -->
                    <div
                        style="height: 40%;position: absolute; bottom: 0; background-color: #f4fcff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; font-family: 'Times New Roman', Times, serif;text-align: center; overflow: auto;">
                        <h4
                            style="background-color: #d4e6ff; padding: 10px; margin-top: 0; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                            Note</h4>
                        <ul style="list-style-type: none; padding-left: 0; margin-top: 10px; text-align: justify;">
                            <span style="font-size: 15px; line-height: 1.6; color: #333;">
                                The Macro feature will facilitate the user/forecaster in streamlining daily
                                operations
                                by
                                storing selected layers/information in a group, therefore simplifying the process of
                                viewing
                                them. Click on the "+" symbol to generate a new macro and follow the instructions
                                given
                                to
                                save, edit, run, and delete options.
                            </span>
                        </ul>
                    </div>

                </div>
                <!--  -->

                <!--  -->
                <div class="create_Macro">
                    <div class="create_Macro_body" style="position: relative;">
                        <div class="create_Macro_body_div">
                            <span class="macroLegend" title="Close" onclick="closCreatMac()">X</span>
                            <h4 class="create_Macro_h4" style="margin: 0 auto;"
                                style="font-family: 'Times New Roman', Times, serif; font-size: 20px">
                                <span id="creatRedit">Create Macro</span>
                            </h4>
                        </div>


                        <!-- MACRO-model -->
                        <div id="showCreateMacroLayers">
                            <form id="macroForm" action="<?php echo base_url('HomePage/macAddForm'); ?>" method="post">
                                <div>
                                    <label for="macroNames" class="macroNameLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Macro
                                        Name:</label>
                                    <input type="text" class="macroNameInput" name="macroname" id="macroNames"
                                        placeholder="customize name" required>
                                </div>
                                <div>
                                    <label for="mac_modelNames" class="mac_firstDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Type:</label>
                                    <select class="mac_firstDD" name="modelname" id="mac_modelNames"
                                        onchange="macShowParameterNames(this.value)"></select>
                                </div>
                                <!-- parameter -->
                                <div>
                                    <label for="mac_parameterNames" class="mac_secondDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Time:</label>
                                    <select class="mac_secondDD" name="parametername" id="mac_parameterNames"
                                        onchange="macShowSubParameterNames(this.value)"></select>
                                </div>
                                <!-- SubParameter -->
                                <div>
                                    <label for="mac_subparameter" class="mac_thirdDDLabel"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 18px">Parameter</label>
                                    <select class="mac_thirdDD" name="subparametername" id="mac_subparameter"></select>
                                </div>
                                <!-- Submit buttons -->
                                <div style="display: flex;">
                                    <input type="button" value="Add" style="font-size: 18px" class="macSubmitBtn"
                                        id="addBtn" onclick="macAddForm()" />
                                    <input type="button" value="Save" style="font-size: 18px" class="macSubmitBtn"
                                        id="subBtn" onclick="submitForm()" />

                                    <?php if (isset($id)): ?>
                                    <input type="button" value="Update" style="display: none; font-size: 18px"
                                        class="macSubmitBtn" id="updBtn" onclick="updateForm(<?php echo $id; ?>)" />
                                    <?php else: ?>
                                    <input type="button" value="Update" style="display: none; font-size: 18px"
                                        class="macSubmitBtn" id="updBtn" onclick="updateForm()" />
                                    <?php endif; ?>

                                    <input type="button" value="Cancel" style="display: none; font-size: 18px"
                                        class="macSubmitBtn" id="canBtn" onclick="cancelForm()" />
                                </div>
                            </form>
                            <!-- * -->
                            <div class="addBox" id="addedInfoContainer"></div>
                            <!-- * -->
                        </div>
                    </div>
                </div>

                <div class="view_Create_Macro">
                    <div class="view_Create_Macro_body" style="position: relative;">
                        <div class="view_Create_Macro_body_div">
                            <span class="viewMacroLegend">X</span>
                            <h4 class="view_Macro_h4" style="margin: 0 auto; font-size: 20px">
                                <span id="viewMacroTitle"></span>
                            </h4>
                        </div>
                        <div style="color:black;" id="viewMacroDetails"></div>
                    </div>
                </div>

            </div>

            <!-- Layer_Name_bottom  display: none; -->
            <div class="body_bottom">
                <a href="<?php echo base_url('HomePage/Menu'); ?>">
                    <span><button
                            style="  color: black; font-size: 15px; padding: 16px 30px; border-radius: 5px;text-align: center;">MENU</button></span>
                </a>

                <!-- Layer Selected Name -->
                <div
                    style="width: 50%; display: flex; justify-content: center; border-radius: 7px; background-color: #f4fcff;">
                    <span>
                        <div
                            style="height: 38px; width: 100%; background-color: white; font-family: 'Times New Roman'; display: flex;">
                            <div id="layerNone" style="display: flex;">
                                <h4 id="bottomLayer">Layers Selected None</h4>
                            </div>
                            <!--  -->
                        </div>
                    </span>
                </div>
                <!--  -->

                <span>
                    <!-- USERNAME -->
                    <span>
                        <?php if (!empty($name)): ?>
                        <strong class="username" style="color: black;">&nbsp;&nbsp;&nbsp;USER:
                            <?= ucfirst($name) ?>!!</strong>
                        <?php endif; ?>
                    </span>

                    <!-- LOGOUT -->
                    <span>&nbsp;&nbsp;&nbsp;
                        <span class="logOut_btn"><a href="<?php echo base_url(); ?>Login/logout">LogOut</a>
                        </span>
                    </span>
                </span>
            </div>





            <!-- row map class ends here  -->
        </div>

        <!-- MACRO Run model; display: none; -->
        <div id="macroDetails" class="modal" style="display:none;width: 500px; left: 11%; top: 90%;">
            <div class="modal-content"
                style="z-index: 999 ; font-family: Arial, sans-serif; background-color: #ffffff; border-radius: 10px;">
                <!--  align-items: center; -->
                <div class="playLine-container">
                    <div class="macroPlayClass">
                        <button title="Stop" class="stopBtnClas"><i class="fa-sharp fa-solid fa-stop fa-xs"
                                style="color: #000000;"></i></button>
                        <button title="Play" class="playBtnClas"><i class="fa-sharp fa-solid fa-play fa-xs"
                                style="color: #000000;"></i></button>
                        <button title="Pause" class="pauseBtnClas"><i class="fa-sharp fa-solid fa-pause fa-xs"
                                style="color: #000000;"></i></button>
                        <button title="Previous" class="leftMacBtn"><i class="fa-sharp fa-solid fa-arrow-left fa-xs"
                                style="color: #000000;"></i></button>
                        <span style="font-size: 17px;font-weight: bold; padding: 0 10px" id="playerText"></span>
                        <button title="Next" class="rightMacBtn"><i class="fa-sharp fa-solid fa-arrow-right fa-xs"
                                style="color: #000000;"></i></button>
                        <span class="playBtnClasCount" id="counting"></span>
                        <span class="vertical-line"></span>
                        <span title="Close" class="playBtnClasX" id="closingPlayBtn" onClick="macroRunFnX()">X</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MACRO Delete Warning -->
        <div id="deleteMacroModal" class="modal" style="display: none; width: 27%; left: 33%; top: 9%; height: auto;">
            <div class="modal-content"
                style="z-index: 999; display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #ffffff; padding: 10px; border-radius: 10px; align-items: center;">
                <h3 class="warningCls" style="font-family: 'Times New Roman'; font-size: 20px">WARNING !</h3>
                <div style="width: 100%;">
                    <div style="margin-left: 12%; width: 74%;" class="col-6">
                        <label class="labelDelMac" for="userName"
                            style="font-family: 'Times New Roman'; font-size: 18px">Employee Name:</label>
                        <div class="input-group mb-3">
                            <input style="border-color: #d5caca;" type="text" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" id="userName" required>
                        </div>
                    </div>
                    <div style="margin-left: 12%; width: 74%;" class="col-6">
                        <label class="labelDelMac" for="deleteReason"
                            style="font-family: 'Times New Roman'; font-size: 18px">Reason for Deletion:</label>
                        <div class="input-group mb-3">
                            <input style="border-color: #d5caca;" type="text" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" id="deleteReason" required>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: center;">
                    <button type="button" onclick="closeDeleteMacroModal()" class="btn btn-primary"
                        style="font-family: 'Times New Roman'; font-size: 18px">Cancel</button>
                    <button type="button" id="macCanBtn" class="btn btn-primary"
                        style="font-family: 'Times New Roman'; font-size: 18px" disabled>Submit</button>
                </div>
            </div>
        </div>


        <!-- observation Layer name on Map-->
        <div id="obsLayerNamShw" class="modal" style="width: 500px; left: 11%; top: 90%;">
            <div class="modal-content"
                style="z-index: 999 ; font-family: Arial, sans-serif; background-color: #ffffff; border-radius: 10px;">
                <!--  align-items: center; -->
                <div class="playLine-container">
                    <div class="macroPlayClass">
                        <span style="color: black;font-size: 17px;font-weight: bold; padding: 0 10px"
                            id="obsLayTxt"></span>
                        <span title="Close" class="playBtnClasX" id="close_obsLayerNam"
                            onClick="obsLayerNameX()">X</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MOdels time update BOX -->
        <div id="model_Tim" class="model_MM" style="display: none;">
            <div class="model-body_MM" style="position: relative;overflow: hidden;">
                <div
                    style="z-index: 999; display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #00415a; padding: 10px; border-radius: 10px;">
                    <h4 id="Model_Tim_Tit" style="color: #f5f5f5; margin: 0 auto; font-size: 20px"></h4>
                    <i class="fa-solid fa-arrow-up fa-bounce" style="color: #f5f5f5; cursor: pointer;"
                        onclick="timeUpdateBoxTog()"></i>
                </div>
                <div>
                    <p id="Model_Tim_lis"></p>
                </div>
            </div>
        </div>
        <!--  -->


        <!-- LEGEND model popup -->
        <div class="model" style="display: none; left: 253px; top: 94px; height:0;">
            <div class="model-body" style="position: relative;">
                <div
                    style="z-index: 999 ;display: flex; position: sticky; top: 0; font-family: Arial, sans-serif; background-color: #00415a; padding: 10px; border-radius: 10px; align-items: center;">
                    <legend title="Close"
                        style="cursor: pointer;color: #83ffee;text-shadow: 0 0 10px #7b7be7, 0 0 20px #8a8ad8, 0 0 30px #f5f5f5;">
                        X</legend>
                    <h4 style="margin: 0 auto; font-size: 20px">Selected Parameters</h4>
                </div>

                <div class="row" id="Light_RadarRow" style="display: none;">
                    <div>
                        <!-- HomePage-Lightning -->
                        <h5 id="panelLayer-Lightning-Title"></h5>
                        <p id="panelLayer-Lightning-lists"></p>

                        <!-- HomePage-Radar -->
                        <!-- <h5 id="panelLayer-radar-Title"></h5>
                        <p id="panelLayer-radar-lists" style="display: flex; flex-wrap: wrap;"></p> -->
                    </div>
                </div>


                <div id="printlegend">

                    <!-- lehends for observation -->
                    <div id="METAR_mm" style="display: none;">
                        <h5 id="metarTemp-Title_mm" style="color: #000000;">METAR 00UTC:</h5>
                        <p id="metarTemp-lists_mm" style="flex-wrap: wrap;">Temperature_00</p>
                        <div id="metarTempImage_mm" style="margin-left: 40px; flex-wrap: wrap;">
                            <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">0-10</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">30-35</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">35-40</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color:rgb(254, 101, 49,1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">40-45</span>
                                <span
                                    style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px;margin-right: 0">>45</span>
                            </span>
                        </div>
                    </div>
                    <!--  -->


                    <!-- Exposure -->
                    <div id="ExposureRow" style="display: none; ">
                        <h4 id="EXPOSURE" style=" border-radius: 2px; background-color: #00719c;  text-align: center;">
                            EXPOSURE
                        </h4>
                        <h5 id="exposure-layers-Title" style="color: #000000;"></h5>
                        <p id="exposure-layers-lists" style="display: flex; flex-wrap: wrap;">
                    </div>

                    <!-- METAR -->
                    <div id="METAR_Row">
                        <h4 id="METAR" style=" border-radius: 8px; background-color: #00719c; text-align: center;"></h4>
                        <!-- METARTEMP -->
                        <h5 id="metarTemp-Title" style="color: #000000;"></h5>
                        <div id="metarTempImage" style="margin-left: 40px; flex-wrap: wrap;"></div>
                        <p id="metarTemp-lists" style="display: none; flex-wrap: wrap;"></p>

                        <!-- METARDewPoint -->
                        <h5 id="metarDewPoint-Title" style="color: #000000;"></h5>
                        <div id="metarDewPointImage" style="margin-left: 40px; flex-wrap: wrap;"></div>
                        <p id="metarDewPoint-lists" style="display: none; flex-wrap: wrap;"></p>

                        <!-- METARVisibility -->
                        <h5 id="metarVisibility-Title" style="color: #000000;"></h5>
                        <div id="metarVisibilityImage" style="margin-left: 40px; flex-wrap: wrap;"></div>
                        <p id="metarVisibility-lists" style="display: none; flex-wrap: wrap;"></p>

                        <!-- METARWindSpeedAndDirection -->
                        <h5 id="metarWindSpeedAndDirection-Title" style="color: #000000;"></h5>
                        <div id="metarWindSpeedAndDirectionImage"
                            style="margin-left: 40px; display: flex; flex-wrap: wrap;"></div>
                        <p id="metarWindSpeedAndDirection-lists" style="display: flex; display: none; flex-wrap: wrap;">
                        </p>
                    </div>

                    <!-- SYNOP -->
                    <div class="row" id="SYNOP_Row" style="display: none;">
                        <h4 id="SYNOP" style=" border-radius: 8px; background-color: #00719c; text-align: center;"></h4>

                        <!-- synopTEMP -->
                        <h5 id="synopTemp-Title" style="color: #000000;"></h5>
                        <div id="synopTempImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="synopTemp-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopMeanSeaLevel -->
                        <h5 id="synopMeanSeaLevel-Title" style="color: #000000;"></h5>
                        <div id="synopMeanSeaLevelImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopMeanSeaLevel-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopCloudCover -->
                        <h5 id="synopCloudCover-Title" style="color: #000000;"></h5>
                        <div id="synopCloudCoverImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="synopCloudCover-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>


                        <!-- synopGeopotentialHeight -->
                        <h5 id="synopGeopotentialHeight-Title" style="color: #000000;"></h5>
                        <div id="synopGeopotentialHeightImage"
                            style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopGeopotentialHeight-lists" style="display: flex; display: none; flex-wrap: wrap;">
                        </p>

                        <!-- synopRelativeHumidity -->
                        <h5 id="synopRelativeHumidity-Title" style="color: #000000;"></h5>
                        <div id="synopRelativeHumidityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopRelativeHumidity-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopVisibility -->
                        <h5 id="synopVisibility-Title" style="color: #000000;"></h5>
                        <div id="synopVisibilityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopVisibility-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>

                        <!-- synopWindSpeedAndDirection -->
                        <h5 id="synopWindSpeedAndDirection-Title" style="color: #000000;"></h5>
                        <div id="synopWindSpeedAndDirectionImage"
                            style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synopWindSpeedAndDirection-lists" style="display: flex; display: none; flex-wrap: wrap;">
                        </p>

                        <!-- synop3hRainfall -->
                        <h5 id="synop3hRainfall-Title" style="color: #000000;"></h5>
                        <div id="synop3hRainfallImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="synop3hRainfall-lists" style="display: flex; display: none; flex-wrap: wrap;"></p>
                    </div>

                    <!-- Radar -->
                    <div class="row" id="RADAR_Row" style="display: none;">
                        <h4 id="RADARPRODUCTS"
                            style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="RADARImage"
                            style="margin-left: 10px; margin-top: 10px display: flex; flex-wrap: wrap;">
                        </div>

                        <h5 id="RADARPRODUCTS-Title" style="color: #000000;"></h5>
                        <p id="RADARPRODUCTS-lists" style="flex-wrap: wrap;"></p>
                    </div>

                    <!-- SATELLITE -->
                    <div class="row" id="SATELLITE_Row" style="display: none;">
                        <h4 id="SATELLITE" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>

                        <h5 id="SATELLITE-Title" style="color: #000000;"></h5>
                        <p id="SATELLITE-lists" style="display: flex; flex-wrap: wrap;"></p>

                    </div>

                    <!-- LIGHTINING -->
                    <div class="row" id="LIGHTINING_Row" style="display: none;">
                        <h4 id="LIGHTINING" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="LIGHTININGImage"
                            style="margin-left: 10px; margin-top: 10px display: flex; flex-wrap: wrap;">
                        </div>

                        <h5 id="LIGHTINING-Title" style="color: #000000;"></h5>
                        <p id="LIGHTINING-lists" style="flex-wrap: wrap;"></p>

                    </div>
                    <!-- SOUNDING -->
                    <div id="SOUNDING_Row" style="display: none;">
                        <h4 id="SOUNDING" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="soundingImage"
                            style="margin-left: 10px; margin-top: 10px display: flex; flex-wrap: wrap;">
                        </div>

                        <h5 id="SOUNDING00UTCWIND-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING00UTCWIND-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING12UTCWIND-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING12UTCWIND-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING00UTCTEMP-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING00UTCTEMP-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING12UTCTEMP-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING12UTCTEMP-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING00UTCDEWPOINT-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING00UTCDEWPOINT-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="SOUNDING12UTCDEWPOINT-Title" style="color: #000000;"></h5>
                        <p id="SOUNDING12UTCDEWPOINT-lists" style="flex-wrap: wrap;"></p>

                    </div>
                    <!-- SHIPANDBUOY -->
                    <div class="row" id="SHIPANDBUOY_Row" style="display: none;">
                        <h4 id="SHIPANDBUOY"
                            style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>
                        <div id="SHIPANDBUOYImage"
                            style="margin-left: 50px; margin-top: 10px display: flex; flex-wrap: wrap;"></div>
                        <h5 id="SHIPANDBUOY-Title" style="color: #000000;"></h5>
                        <p id="SHIPANDBUOY-lists" style="flex-wrap: wrap;"></p>
                    </div>
                    <!-- MESOLSCALE -->
                    <div class="row" id="MESOLSCALE_Row" style="display: none;">
                        <h4 id="MESOLSCALE" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>

                        <h5 id="WRFReflectivity-Title" style="color: #000000;"></h5>
                        <div id="WRFReflectivityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="WRFReflectivity-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="WRFlightningProduct-Title" style="color: #000000;"></h5>
                        <div id="WRFlightningProductImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="WRFlightningProduct-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="WRFAccumlatedRainfall-Title" style="color: #000000;"></h5>
                        <div id="WRFAccumlatedRainfallImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="WRFAccumlatedRainfall-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="lightningPotentialindex-Title" style="color: #000000;"></h5>
                        <div id="lightningPotentialindexImage"
                            style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="lightningPotentialindex-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="NCUMRlightningProduct-Title" style="color: #000000;"></h5>
                        <div id="NCUMRlightningProductImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="NCUMRlightningProduct-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="NCUMRWindGust-Title" style="color: #000000;"></h5>
                        <div id="NCUMRWindGustImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="NCUMRWindGust-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="NCUMRRainfall-Title" style="color: #000000;"></h5>
                        <div id="NCUMRRainfallImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="NCUMRRainfall-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="HRRR_SPHourlyDBZ-Title" style="color: #000000;"></h5>
                        <div id="HRRR_SPHourlyDBZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="HRRR_SPHourlyDBZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="HRRR_NEHourlyDBZ-Title" style="color: #000000;"></h5>
                        <div id="HRRR_NEHourlyDBZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="HRRR_NEHourlyDBZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="HRRR_NWHourlyDBZ-Title" style="color: #000000;"></h5>
                        <div id="HRRR_NWHourlyDBZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <p id="HRRR_NWHourlyDBZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="EWRFMaxZ-Title" style="color: #000000;"></h5>
                        <div id="EWRFMaxZImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="EWRFMaxZ-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="EWRFLightning-Title" style="color: #000000;"></h5>
                        <div id="EWRFLightningImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <p id="EWRFLightning-lists" style="flex-wrap: wrap;"></p>

                    </div>
                    <!-- MEDIUM -->
                    <div class="row" id="MEDIUM_Row" style="display: none;">
                        <h4 id="MEDIUM" style=" border-radius: 8px; background-color: #00719c; text-align: center;">
                        </h4>

                        <div id="RainfallIntensityImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;">
                        </div>
                        <h5 id="RainfallIntensityDay1-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay1-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay2-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay2-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay3-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay3-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay4-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay4-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="RainfallIntensityDay5-Title" style="color: #000000;"></h5>
                        <p id="RainfallIntensityDay5-lists" style="flex-wrap: wrap;"></p>

                        <div id="MSLPDayImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <h5 id="MSLPDay1-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay1-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay2-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay2-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay3-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay3-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay4-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay4-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="MSLPDay5-Title" style="color: #000000;"></h5>
                        <p id="MSLPDay5-lists" style="flex-wrap: wrap;"></p>

                        <div id="mWINDDayImage" style="margin-left: 10px; display: flex; flex-wrap: wrap;"></div>
                        <h5 id="mWINDDay1-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay1-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay2-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay2-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay3-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay3-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay4-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay4-lists" style="flex-wrap: wrap;"></p>

                        <h5 id="mWINDDay5-Title" style="color: #000000;"></h5>
                        <p id="mWINDDay5-lists" style="flex-wrap: wrap;"></p>

                    </div>

                </div>
            </div>
        </div>
</body>

<script>
var today = new Date().toISOString().slice(0, 10);
document.getElementById('start_date_odisha_hq').value = today;

var today = new Date().toISOString().slice(0, 10);
document.getElementById('start_date_delhi_hq').value = today;

// var today = new Date().toISOString().slice(0, 10);
// document.getElementById('start_date__hq').value = today;

var today = new Date().toISOString().slice(0, 10);
document.getElementById('start_date_odisha').value = today;

var today = new Date().toISOString().slice(0, 10);
document.getElementById('start_date_delhi').value = today;

// var today = new Date().toISOString().slice(0, 10);
// document.getElementById('start_date_hyd').value = today;


function toggleVisibility() {
    var contentDiv = document.getElementById("contentDiv");
    if (contentDiv.style.display === "none") {
        contentDiv.style.display = "block";
    } else {
        contentDiv.style.display = "none";
    }
}


function showSelectedSection() {
    var dropdown = document.getElementById("dropdown");
    var selectedValue = dropdown.value;

    var sections = document.querySelectorAll('[id^="mc-"]');

    sections.forEach(function(section) {
        if (selectedValue === "all") {
            section.style.display = "block";
        } else {
            if (section.id === selectedValue) {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        }
    });
}


document.addEventListener("DOMContentLoaded", function() {
    var today = new Date().toISOString().slice(0, 10);
    <?php if (isset($name)): ?>
    if ('<?php echo $name; ?>' === "Super_Admin_HQ") {
        document.getElementById('start_date_odisha_hq').value = today;
        document.getElementById('start_date_delhi_hq').value = today;
    } else if ('<?php echo $name; ?>' === "MC_Bhubaneswar") {
        document.getElementById('start_date_odisha').value = today;
    } else if ('<?php echo $name; ?>' === "RMC_NewDelhi") {
        document.getElementById('start_date_delhi').value = today;
    } else if ('<?php echo $name; ?>' === "MC_Hyderabad") {
        document.getElementById('start_date_hyd').value = today;
    }
    <?php endif; ?>
    // document.getElementById('start_date_odisha').value = today;

    fetchName();
});



var isPlaying = false;
var index = 0;
var timeouts = [];

function startPlay() {
    document.getElementById('playButton').style.display = 'none';
    document.getElementById('pauseButton').style.display = 'inline';
    if (!isPlaying) {
        isPlaying = true;
        triggerNextCheckbox();
    }
}

function startPause() {
    document.getElementById('pauseButton').style.display = 'none';
    document.getElementById('playButton').style.display = 'inline';
    if (isPlaying) {
        isPlaying = false;
        clearTimeouts();
    }
}

function startForward() {
    if (!isPlaying) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        // Uncheck the currently active checkbox
        if (index >= 0 && index < checkboxes.length) {
            checkboxes[index].checked = false;
            checkboxes[index].dispatchEvent(new Event('change'));

        }
        // Move one step forward
        index++;
        if (index < checkboxes.length) {
            checkboxes[index].checked = true;
            checkboxes[index].dispatchEvent(new Event('change'));
        } else {
            // Reset index if out of bounds
            index = checkboxes.length - 1;
        }
    }
}

function startBackward() {
    if (!isPlaying) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        // Uncheck the currently active checkbox
        if (index >= 0 && index < checkboxes.length) {
            checkboxes[index].checked = false;
            checkboxes[index].dispatchEvent(new Event('change'));
        }
        // Move one step backward
        index--;
        if (index >= 0) {
            checkboxes[index].checked = true;
            checkboxes[index].dispatchEvent(new Event('change'));
        } else {
            // Reset index if out of bounds
            index = 0;
        }
    }
}

function triggerNextCheckbox() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    if (index < checkboxes.length && isPlaying) {
        checkboxes[index].checked = true;
        checkboxes[index].dispatchEvent(new Event('change'));

        var timeoutId = setTimeout(function() {
            checkboxes[index].checked = false;
            checkboxes[index].dispatchEvent(new Event('change'));
            index++;
            triggerNextCheckbox();
        }, 3000);

        timeouts.push(timeoutId);
    } else {
        isPlaying = false;
        index = 0;
        timeouts = [];
    }
}

function clearTimeouts() {
    timeouts.forEach(function(timeoutId) {
        clearTimeout(timeoutId);
    });
    timeouts = [];
}








// Array to store references to drawn polylines
var drawnPolylines = [];

// Function to fetch and display names with checkboxes
function fetchName() {
    var startDateId;
    var weatherDataDivs;
    var ajaxUrls = [];

    <?php if (isset($name)): ?>
    if ('<?php echo $name; ?>' === "Super_Admin_HQ") {
        startDateId = ["start_date_odisha_hq", "start_date_delhi_hq"];
        weatherDataDivs = [
            document.getElementById("drawings_data_odisha_hq"),
            document.getElementById("drawings_data_delhi_hq")
        ];
        ajaxUrls = [
            "<?php echo base_url('Drawings/Drawing/fetch_name_odisha_hq'); ?>",
            "<?php echo base_url('Drawings/Drawing/fetch_name_delhi_hq'); ?>"
        ];
    } else if ('<?php echo $name; ?>' === "MC_Bhubaneswar") {
        startDateId = ["start_date_odisha"];
        weatherDataDivs = [document.getElementById("drawings_data_odisha")];
        ajaxUrls = ["<?php echo base_url('Drawings/Drawing/fetch_names_odisha'); ?>"];
    } else if ('<?php echo $name; ?>' === "RMC_NewDelhi") {
        startDateId = ["start_date_delhi"];
        weatherDataDivs = [document.getElementById("drawings_data_delhi")];
        ajaxUrls = ["<?php echo base_url('Drawings/Drawing/fetch_names_delhi'); ?>"];
    }
    <?php endif; ?>

    startDateId.forEach((id, index) => {
        var selectedDate = document.getElementById(id).value;
        fetchAndDisplayData(ajaxUrls[index], selectedDate, weatherDataDivs[index]);
    });
}

function fetchAndDisplayData(ajaxUrl, selectedDate, weatherDataDiv) {
    $.ajax({
        url: ajaxUrl,
        type: "GET",
        data: {
            date: selectedDate
        },
        success: function(data) {
            console.log(data);
            weatherDataDiv.innerHTML = "";

            if (data && data.length > 0) {
                var checkboxContainer = document.createElement("div");

                data.forEach(function(item, index) {
                    if (item && item.date && item.name && item.latitudes && item.longitudes) {
                        var checkbox = document.createElement("input");
                        checkbox.type = "checkbox";
                        checkbox.id = "checkbox_" + index;
                        checkbox.value = JSON.stringify(item);

                        var label = document.createElement("label");
                        label.textContent = item.name;
                        label.setAttribute("for", "checkbox_" + index);

                        checkboxContainer.appendChild(checkbox);
                        checkboxContainer.appendChild(label);
                        checkboxContainer.appendChild(document.createElement("br"));

                        checkbox.addEventListener("change", function() {
                            if (checkbox.checked) {
                                var latitudes = item.latitudes.replace(/[{}]/g, '').split(
                                    ',').map(Number);
                                var longitudes = item.longitudes.replace(/[{}]/g, '').split(
                                    ',').map(Number);
                                var markersData = JSON.parse(item.markers);

                                drawPolyline(latitudes, longitudes, item.name, markersData);
                            } else {
                                clearPolyline(item.name);
                            }
                        });
                    }
                });

                weatherDataDiv.appendChild(checkboxContainer);
            } else {
                weatherDataDiv.textContent = "No drawings found for the selected date.";
            }
        },
        error: function(xhr, status, error) {
            console.error("Error fetching names:", error);
            weatherDataDiv.textContent = "Error fetching names. Please try again later.";
        }
    });
}


// function fetchName_hq() {

//     var selectedDate = document.getElementById("start_date_odisha").value;

//     $.ajax({
//         url: "<?php echo site_url('Drawings/Drawing/fetch_name_odisha_hq'); ?>",
//         type: "GET",
//         data: {
//             date: selectedDate
//         },
//         success: function (data) {
//             // console.log(data);
//             weatherDataDiv = document.getElementById("drawings_data_odisha");
//             weatherDataDiv.innerHTML = "";

//             if (data && data.length > 0) {
//                 var checkboxContainer = document.createElement("div");

//                 data.forEach(function (item, index) {
//                     if (item && item.date && item.name && item.latitudes && item.longitudes) {
//                         var checkbox = document.createElement("input");
//                         checkbox.type = "checkbox";
//                         checkbox.id = "checkbox_" + index;
//                         checkbox.value = item.name;
//                         checkbox.value = JSON.stringify(item);

//                         var label = document.createElement("label");
//                         label.textContent = item.name;
//                         label.setAttribute("for", "checkbox_" + index);

//                         checkboxContainer.appendChild(checkbox);
//                         checkboxContainer.appendChild(label);
//                         checkboxContainer.appendChild(document.createElement("br"));
//                         // Attach event listener to checkbox
//                         checkbox.addEventListener("change", function () {
//                             if (checkbox.checked) {
//                                 var latitudes = item.latitudes.replace(/[{}]/g, '').split(',').map(Number);
//                                 var longitudes = item.longitudes.replace(/[{}]/g, '').split(',').map(Number);
//                                 var markersData = JSON.parse(item.markers);

//                                 // Draw polyline when checkbox is checked
//                                 drawPolyline(latitudes, longitudes, item.name, markersData);
//                             } else {
//                                 // Remove polyline when checkbox is unchecked
//                                 clearPolyline(item.name);
//                             }
//                         });
//                     }
//                 });

//                 weatherDataDiv.appendChild(checkboxContainer);
//             } else {
//                 weatherDataDiv.textContent = "No drawings found for the selected date.";
//             }
//         },
//         error: function (xhr, status, error) {
//             console.error("Error fetching names:", error);
//             weatherDataDiv = document.getElementById("drawings_data_odisha");
//             weatherDataDiv.textContent = "Error fetching names. Please try again later.";
//         }
//     });
// }

document.getElementById("PassDrawings_bhu").addEventListener("click", function() {
    handleCheckboxes("<?php echo site_url('Drawings/Drawing/save_coordinates_to_hq_odisha'); ?>");
});

document.getElementById("PassDrawings_delhi").addEventListener("click", function() {
    handleCheckboxes("<?php echo site_url('Drawings/Drawing/save_coordinates_to_hq_delhi'); ?>");
});

function handleCheckboxes(ajaxUrl) {
    var checkedItems = [];

    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            var itemData = JSON.parse(checkbox.value);
            checkedItems.push(itemData);
        }
    });

    // Prepare the data for AJAX request
    var postData = JSON.stringify(checkedItems);
    // console.log(postData);
    $.ajax({
        url: ajaxUrl,
        type: "POST",
        data: postData,
        contentType: "application/json",
        success: function(response) {
            console.log(response);
            alert("Data forwarded to HQ successfully!");
        },
        error: function(xhr, status, error) {
            console.error("Error forwarding data to HQ:", error);
            alert("Failed to forward data. Please try again.");
        }
    });
}




// fetchName();



// Function to draw a polyline on the map
// function drawPolylines(latitudes, longitudes, name, markersData) {
//         var existingPolyline = drawnPolylines.find(function (polyline) {
//             return polyline.options.name === name;
//         });

//         if (existingPolyline) {
//             existingPolyline.addTo(map);
//         } else {
//             var polylineCoords = [];
//             for (var i = 0; i < latitudes.length; i++) {
//                 polylineCoords.push([parseFloat(latitudes[i]), parseFloat(longitudes[i])]);
//             }

//             var polyline = L.polyline(polylineCoords, {
//                 color: getRandomColor(),
//                 weight: 3,
//                 opacity: 0.7,
//                 name: name
//             });

//             drawnPolylines.push(polyline);

//             polyline.addTo(map);

//             // Add markers if markersData is provided
//             if (markersData && markersData.length > 0) {
//                 markersData.forEach(function (marker) {
//                     var latLng = L.latLng(marker.latitude, marker.longitude);
//                     var markerText = marker.tooltipText;

//                     // Create a marker with a tooltip
//                     var customMarker = L.marker(latLng).addTo(map);
//                     customMarker.bindTooltip(markerText, {
//                         permanent: true,
//                         direction: 'top',
//                         opacity: 0.7
//                     });
//                 });
//             }
//         }
//     }

// Function to clear a specific polyline from the map
function clearPolyline(name) {
    var polylineToRemoveIndex = drawnPolylines.findIndex(function(polyline) {
        return polyline.options.name === name;
    });

    if (polylineToRemoveIndex !== -1) {
        var polylineToRemove = drawnPolylines[polylineToRemoveIndex];
        map.removeLayer(polylineToRemove); // Remove the polyline from the map
        drawnPolylines.splice(polylineToRemoveIndex, 1); // Remove the polyline from the array
    }
}

// Function to generate a random color
function getRandomColor() {
    var r = Math.floor(Math.random() * 128);
    var g = Math.floor(Math.random() * 128);
    var b = Math.floor(Math.random() * 128);
    return 'rgb(' + r + ',' + g + ',' + b + ')';
}



function toggleVisibility_odisha() {
    var contentDiv = document.getElementById("contentDiv_odisha");
    if (contentDiv.style.display === "none") {
        contentDiv.style.display = "block";
    } else {
        contentDiv.style.display = "none";
    }
}


function toggleVisibility_delhi() {
    var contentDiv = document.getElementById("contentDiv_delhi");
    if (contentDiv.style.display === "none") {
        contentDiv.style.display = "block";
    } else {
        contentDiv.style.display = "none";
    }
}
</script>