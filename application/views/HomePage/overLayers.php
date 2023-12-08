<div id="macroContainer" class="hidden macClass col-2">
    <!-- <h4>MACRO</h4> -->
    <div class="dropdown">
        <button class="macOptCls">MACRO Option</button>
        <div class="dropdown-content">
        </div>
    </div>
    <br /><br />
    <button id="createMacro" class="createMacroCls" onclick="createMacroForm()">Create Macro</button>
    <!-- model -->
    <div style="display: none" id="showCreateMacroLayers">
        <form id="myForm">
            <div>
                <label for="macroNames" class="macroNameLabel">Macro Name:</label>
                <input type="text" class="macroNameInput" id="macroNames" placeholder="customize name" &nbsp;>
            </div>
            <div>
                <label for="mac_modelNames" class="mac_firstDDLabel">Model:</label>
                <select class="mac_firstDD" id="mac_modelNames" onchange="macShowParameterNames(this.value)" &nbsp;>
                </select>
            </div>
            <!-- <span>&nbsp;</span> -->
            <!-- parameter -->
            <div>
                <label for="mac_parameter" class="mac_secondDDLabel">parameter:</label>
                <select class="mac_secondDD" id="mac_parameterNames" onchange="macShowSubParameterNames(this.value)"
                    &nbsp;>
                </select>
            </div>
            <!-- <span>&nbsp;</span> -->
            <!-- SubParameter -->
            <div>
                <label for="mac_subparameter" class="mac_thirdDDLabel">SubParameter</label>
                <select class="mac_thirdDD" id="mac_subparameter" &nbsp;>
                </select>
            </div>
            <!-- <span>&nbsp;</span> -->
            <div>
                <label for="mac_start_date" class="mac_dateDDLabel">From Date:</label>
                <input type="date" id="mac_start_date" class="mac_dateDD">
            </div>
            <!-- <span>&nbsp;</span> -->
            <div>
                <label for="end_date" class="mac_dateDDLabel">To Date:</label>
                <input type="date" id="mac_end_date" class="mac_dateDD">
            </div>
            <!-- <span>&nbsp;</span> -->
            <div>
                <span style="display: contents;">
                    <label for="mac_hourSelect" class="mac_TimeLabel">Time:</label>
                    <select id="mac_hourSelect" class="mac_TimeHR">
                    </select>
                    <select id="mac_minuteSelect" class="mac_TimeMin">
                    </select>
                </span>
            </div>
            <span>&nbsp;</span>
            </select>
        </form>
        <button id="mac_submitButton" onclick="macSubmitForm()" class="macSubmitBtn">Save</button>
        <!-- Submit -->

    </div>
</div>