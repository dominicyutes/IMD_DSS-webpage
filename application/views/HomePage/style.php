<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
    font-family: 'Quicksand', sans-serif;
    background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
    position: relative;
    height: 100vh;
    width: 100%;
    zoom: 80%;
}


.text {
    font-family: 'Archivo', sans-serif;
    font-size: 2em;
    font-weight: 600;
    color: white;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn {
    border: none;
    padding: 0;
    background: none;
    cursor: pointer;
    outline: inherit;
    font-weight: bolder;
}

.btn:focus>.underline {
    visibility: visible;
}

.btn-val {
    color: #02275f;
    background-color: #eff4ff;
    vertical-align: baseline;
    font-weight: bold;
    font-style: inherit;
    font-size: 18px;
    outline: 0;
    padding: 5px;
    margin: 0;
    border-radius: 9px;
    cursor: pointer;
}

.minsistry-text {
    background: -webkit-linear-gradient(#fdfdfd, #e0fffe);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    position: relative;
    font-size: 24px;
    padding-right: 24px;
    font-weight: 900;
}

.btn-val:hover {
    color: #153a60;
}

.btn-val:hover+.underline {
    visibility: visible;
    animation: loadingAnimation 1s 1 linear;
}

.underline {
    width: 100%;
    height: 0.15em;
    background-color: #153a60;
    visibility: hidden;
    transition: visibility 0.1s ease;
}

.leaflet-panel-layers {
    /* max-height: 300px; */
    /* Set your desired height in pixels */
    /* overflow-y: auto; */
    /* Add a scrollbar if needed */
}

/* Adjust the height of the groups within the PanelLayers control */
/* .leaflet-panel-layers .leaflet-control-layers-group {
    max-height: 150px;
} */

/* .border-end {
    border-right: var(--bs-border-width) var(--bs-border-style) #abaeb1 !important;
} */

/* media query for navbar */
@media (max-width: 1354px) {
    .btn-val {
        font-size: 16px;
    }
}

@media (max-width: 1287px) {
    .btn-val {
        font-size: 20px;
    }
}

@keyframes loadingAnimation {
    0% {
        width: 0;
    }

    50% {
        width: 100%;
    }
}

/* observationToggle */
.hidden {
    display: none;
}

.obsClass {
    background-color: #eff4ff;
    color: #1d334e;
    margin-top: 0px;
    height: 104vh;
    /* width: 258px; */
    width: 17%;
    border: 1px solid #2c5383;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
}

.obsh4 {
    font-family: 'Archivo', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #2c5383;
}

.firstDDLabel,
.secondDDLabel,
.thirdDDLabel,
.dateDDLabel,
.TimeLabel {
    margin-left: 0;
    color: #1d334e;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
}


.firstDD,
.secondDD,
.thirdDD {
    width: 100%;
    height: 32px;
    border-radius: 10px;
    color: #1d334e;
    overflow-y: auto;
    margin-bottom: 10px;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
}

.dateDD {
    width: 100%;
    height: 34px;
    border-radius: 10px;
    border: 1px solid #646464;
    margin-bottom: 10px;
    color: #1d334e;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
}

.TimeHR {
    width: 24%;
    height: 34px;
    border-radius: 10px;
    color: #1d334e;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
}

.TimeMin {
    width: 24%;
    height: 34px;
    border-radius: 10px;
    color: #1d334e;
    margin-top: 7px;
    margin-bottom: 21px;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
}

.submitBtn {
    width: 50%;
    height: auto;
    border-radius: 7px;
    background-color: #244c7e;
    color: ghostwhite;
    border-color: mediumaquamarine;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
    margin-left: 26%;
}

/*  */

/* Macro */
.macClass {
    margin-top: -2%;
}

.createMacro {
    padding: 10px 0 1px 6px;
    border-radius: 10px;
    width: 100%;
    height: 0%;
    background-color: #aeddfe;
    margin-bottom: 3%;
}

.createMacroCls {
    margin-bottom: 10px;
    width: 14%;
    height: auto;
    border-radius: 7px;
    background-color: #327ad2;
    color: #ffffff;
    border-color: #ffffff91;
    font-size: 17px;
    font-family: 'Archivo', sans-serif
}

.createMacroCls:hover+.hoverPlus {
    display: block;
    color: #1e3a5d;
    margin-left: 10px;
}

.macroNameLabel,
.mac_firstDDLabel,
.mac_secondDDLabel,
.mac_thirdDDLabel {
    margin: 0 4px;
    color: #1d334e;
    font-size: 14px;
    font-weight: 600;
    border: 0;
    font-family: 'Archivo', sans-serif
}

.macroNameLabel::after {
    content: " *";
    color: red;
}

.macroNameInput,
.mac_firstDD,
.mac_secondDD,
.mac_thirdDD {
    margin: 0 10px;
    width: 92%;
    height: 32px;
    border-radius: 10px;
    color: #1d334e;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
    overflow-y: scroll;
}

.macSubmitBtn {
    justify-content: center;
    margin: 6% 2% 0 2%;
    width: 50%;
    height: auto;
    border-radius: 7px;
    background-color: #244c7e;
    color: ghostwhite;
    border-color: mediumaquamarine;
    font-size: 14px;
    font-family: 'Archivo', sans-serif
}

.listContainerMacro {
    display: none;
    font-size: 11px;
}

.macroListCSS {
    color: black;
}

.button-container {
    display: flex;
}

.button-container button {
    margin-right: 5px;
}

.saveMacroView {
    margin-bottom: 12px;
}

.addBox {
    height: 252px;
    width: 100%;
    background-Color: #eff4ff;
    overflow-y: scroll;
    margin-top: 9px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 8px;
    border: outset;
    box-shadow: inset -1px 2px 10px 0 rgb(173 234 255);
    font-family: 'Archivo', sans-serif
}

.macroPlayClass {
    display: flex;
    margin-bottom: 5px;
}

.macroPlayNameClass {
    display: flex;
    justify-content: space-between;
}

.stopBtnClas,
.playBtnClas,
.pauseBtnClas,
.leftMacBtn,
.rightMacBtn {
    border-radius: 6px;
    margin-right: 2px;
}



/* map starts here*/
#map {
    height: 104vh;
    width: 100%;
    border: 1px solid black;
    position: relative;
}

.customClass {
    float: none;
}

.leaflet-touch .leaflet-bar {
    border: 2px solid rgba(0, 0, 0, 0.2);
    /* background-clip: padding-box; */
}

/* custom control button */
.leaflet-control-custom {
    font-weight: bold;
    background-color: #fff;
    padding: 2px 10px;
    border: 1px solid #ccc;
    cursor: pointer;
}

/* split css */
.leaflet-sbs-range {
    position: absolute;
    top: 50%;
    width: 99%;
    z-index: 999;
}

/* MACRO CSS starts here */
.create_Macro {
    width: 35%;
    position: fixed;
    z-index: 99999;
    display: none;
    left: 1155px;
    top: -25px;
    height: 0;
}

.create_Macro_body {
    width: 252px;
    height: 584px;
    margin: 416px 0 0 0px;
    transform: translate(-50%, -50%);
    background-color: #f3fbfe;
    box-shadow: inset -1px 2px 10px 0 rgb(0 183 239 / 40%);
    border: outset;
    border-radius: 6px;
    overflow: auto;
}

.create_Macro_body_div {
    z-index: 999;
    display: flex;
    position: sticky;
    top: 0;
    font-family: Arial, sans-serif;
    background-color: #00415a;
    padding: 10px;
    border-radius: 6px;
    align-items: center;
}

.macroLegend {
    cursor: pointer;
    color: #83ffee;
    text-shadow: 0 0 10px #7b7be7, 0 0 20px #8a8ad8, 0 0 30px #f5f5f5;
    font-size: 17px;
    font-weight: bold;
    position: absolute;
    top: 5px;
    right: 0px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    font-family: 'Archivo', sans-serif;
}

.addedInfoDiv_ul {
    display: flex;
}

.create_Macro_h4 {
    color: #ffffffcc;
    font-size: 16px;
    font-weight: bold;
    padding-left: 11px;
    margin: 5px 0 0 0px;
    font-family: 'Archivo', sans-serif
}

/* MACRO CSS ends here */

/* Macro View Btn starts here */
.view_Create_Macro {
    width: 35%;
    position: fixed;
    z-index: 99999;
    display: none;
    left: 887px;
    top: -25px;
    height: 0;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Archivo', sans-serif;
}

.view_Create_Macro_body {
    position: absolute;
    width: 252px;
    height: 584px;
    margin: 416px 0 0 0px;
    transform: translate(-50%, -50%);
    background-color: #f3fbfe;
    box-shadow: inset -1px 2px 10px 0 rgba(0, 0, 0, 0.404);
    border-radius: 6px;
    overflow: auto;
    position: relative;
    border: outset;
    font-family: 'Archivo', sans-serif
}

.view_Create_Macro_body_div {
    z-index: 999;
    display: flex;
    position: sticky;
    top: 0;
    font-family: Arial, sans-serif;
    background-color: #00415a;
    padding: 10px;
    border-radius: 10px;
    align-items: center;
}

.viewMacroLegend {
    cursor: pointer;
    color: #83ffee;
    text-shadow: 0 0 10px #7b7be7, 0 0 20px #8a8ad8, 0 0 30px #f5f5f5;
    font-size: 17px;
    font-weight: bold;
    position: absolute;
    top: 5px;
    right: 0px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    font-family: 'Archivo', sans-serif
}

/* .addedInfoDiv_ul {
    display: flex;
} */

.view_Macro_h4 {
    color: #ffffffcc;
    font-size: 16px;
    font-weight: bold;
    padding-left: 11px;
    margin: 5px 0 0 0px;
    font-family: 'Archivo', sans-serif
}

.run-button {
    border-radius: 6px;
}

.play-button {
    border-radius: 6px;
}

.view-button {
    border-radius: 6px;
}

.edit-button {
    border-radius: 6px;
}

.delete-button {
    border-radius: 6px;
}

/* Macro View Btn ends here */

/* Draggable Model PopUp for Legend */
.model {
    width: 35%;
    height: 55vh;
    position: fixed;
    top: 238px;
    left: 70px;
    display: none;
    z-index: 99999;
    /* background-color: red; */
}

.model-body {
    position: absolute;
    width: 250px;
    height: 300px;
    margin: 315px 0 0 100px;
    transform: translate(-50%, -50%);
    background-color: #f3fbfe;
    box-shadow: inset -1px 2px 10px 0 rgba(0, 0, 0, 0.404);
    border-radius: 6px;
    user-select: none;
    overflow: auto;
    position: relative;
    resize: both;
}

.model-body h4 {
    color: #ffffffcc;
    font-size: 16px;
    padding-left: 11px;
    margin: 5px 0 0 0px;
}

.model-body h5 {
    font-size: 15px;
    padding-left: 6px;
    margin: 8px 0 0 10px;
}

.model-body p {
    font-size: 15px;
    padding-left: 18px;
    margin: 7px 0;
    padding-left: 41px;
}

.model-body legend {
    font-size: 21px;
    font-weight: bold;
    position: absolute;
    top: 5px;
    right: 0px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
}

#model-details {
    padding-left: 11px;
}

/* Draggable Model PopUp for Legend Ends here */

.leaflet-panel-layers.expanded {
    padding: 12px;
}

.leaflet-top.leaflet-right .leaflet-panel-layers:not(.compact) {
    margin: 7px;
    /* height: 505px; */
}

.leaflet-control-layers-expanded {
    color: #000;
    background: #f9f9f9;
}

.custom-btn {
    margin-left: 43px;
    margin-top: 10px;
}

.custom-btn2,
.custom-btn3 {
    margin-left: 43px;
}

.leaflet-bar {
    border: 0;
}
/* Select the zoom in and zoom out buttons */
.leaflet-control-zoom-in,
.leaflet-control-zoom-out {
    width: 38px !important;
    height: 38px !important;
    line-height: 50px; 
}

.leaflet-control-zoom-in:before,
.leaflet-control-zoom-out:before {
    font-size: 30px;
}
.leaflet-panel-layers,
.leaflet-control,
.leaflet-control-layers-expanded,
.leaflet-drag-target {
  font-size: 15px;
}

.leaflet-panel-layers-group.collapsible:not(.expanded) {
    height: 25px;
}
</style>