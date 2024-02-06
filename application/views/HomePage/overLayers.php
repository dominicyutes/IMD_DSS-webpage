<script>
let macro_SubParameter;
let currentMacroIndex = 0;
let intervalId;
let countingElement = document.getElementById("counting");
let intervalInSeconds = 10;
let playingMacro = false;

let playerTextElement = document.getElementById("playerText");


function applyLayers(macroGroupName) {
    const macro = savedMacro.find(x => x.macroGroupName === macroGroupName);

    if (macro && macro.listOfMacro) {
        const macroDetails = macro.listOfMacro[currentMacroIndex];
        const macro_SubParameter = macroDetails.mac_sub_parameter;

        document.getElementById("macroDetails").style.display = "block";

        map.eachLayer(layer => {
            if (layer instanceof L.TileLayer.WMS) {
                map.removeLayer(layer);
            }
        });

        if (subParametersList.some(subParam => subParam.name === macro_SubParameter)) {
            switch (macro_SubParameter) {
                case "Last 00-05 min":
                    map.addLayer(mywmsIITM);
                    playerTextElement.innerHTML = 'Last 00-05 min';
                    console.log("1-Last 00-05 min");
                    break;
                case "00UTC":
                    map.addLayer(ship_00utc);
                    playerTextElement.innerHTML = 'Ship and Buoy 00UTC';
                    console.log("2-00UTC");
                    break;
                case "Radar Reflectivity":
                    map.addLayer(rad_ref);
                    playerTextElement.innerHTML = 'Radar Reflectivity';
                    console.log("3-rad_ref");
                    break;
                case "Oil Refineries":
                    map.addLayer(exp_oil);
                    playerTextElement.innerHTML = 'Exposure Oil Refineries';
                    console.log("4-exp_oil");
                    break;
                case "RI GFS DAY1":
                    map.addLayer(med_gfs1);
                    playerTextElement.innerHTML = 'Rainfall Intensity Day1 - RI GFS DAY1';
                    console.log("5-RI GFS DAY1");
                    break;
            }
        }
    }
}

async function playMacro(macroGroupName) {
    let macro = savedMacro.find(x => x.macroGroupName === macroGroupName);

    if (macro) {
        currentMacroIndex = 0;
        clearInterval(intervalId);

        applyLayers(macroGroupName);
        startMacroPlayback();
    }
}


function startMacroPlayback() {
    playingMacro = true;
    intervalId = setInterval(() => {
        // Check if reached the end of the macro
        if (currentMacroIndex >= savedMacro[0].listOfMacro.length - 1) {
            clearInterval(intervalId);
            playingMacro = false;
            return;
        }

        // Move to the next switch case
        currentMacroIndex++;
        applyLayers(savedMacro[0].listOfMacro[currentMacroIndex].mac_macroNames);
    }, 10000);
}

function pauseMacroPlayback() {
    clearInterval(intervalId);
}

function resumeMacroPlayback() {
    if (!playingMacro) {
        startMacroPlayback();
    }
}

function goToNextMacro() {
    if (currentMacroIndex < savedMacro[0].listOfMacro.length - 1) {
        currentMacroIndex++;
        applyLayers(savedMacro[0].listOfMacro[currentMacroIndex].mac_macroNames);
    }
}

function goToPreviousMacro() {
    if (currentMacroIndex > 0) {
        currentMacroIndex--;
        applyLayers(savedMacro[0].listOfMacro[currentMacroIndex].mac_macroNames);
    }
}

function stopMacroPlayback() {
    clearInterval(intervalId);
    currentMacroIndex = 0;
    playingMacro = false;
    applyLayers(savedMacro[0].listOfMacro[currentMacroIndex].mac_macroNames);
}

// Event listeners for the buttons
document.querySelector('.playBtnClas').addEventListener('click', resumeMacroPlayback);
document.querySelector('.pauseBtnClas').addEventListener('click', pauseMacroPlayback);
document.querySelector('.rightMacBtn').addEventListener('click', goToNextMacro);
document.querySelector('.leftMacBtn').addEventListener('click', goToPreviousMacro);
document.querySelector('.stopBtnClas').addEventListener('click', stopMacroPlayback);
</script>