<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
    margin: 0;
    font-family: 'Quicksand', sans-serif;
    background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
}

.text {
    margin-right: 2%;
    padding-bottom: 10px;
    text-transform: uppercase;
    font-family: verdana;
    font-size: 2em;
    font-weight: 600;
    color: #e6e6e6;
    text-shadow: 1px 1px 1px #919191,
        1px 2px 1px #919191,
        1px 3px 1px #919191,
        1px 4px 1px #919191,
        1px 5px 1px #919191,
        1px 6px 1px #919191,
        1px 7px 1px #919191,
        1px 8px 1px #919191,
        1px 9px 1px #919191,
        1px 10px 1px #919191,
        1px 18px 6px rgba(16, 16, 16, 0.4),
        1px 22px 10px rgba(16, 16, 16, 0.2),
        1px 25px 35px rgba(16, 16, 16, 0.2),
        1px 30px 60px rgba(16, 16, 16, 0.4);
}

.btn {
    border: none;
    padding: 0;
    background: none;
    cursor: pointer;
    font: inherit;
    outline: inherit;
}

.btn:focus>.underline {
    visibility: visible;
}

.btn-val {
    color: #02275f;
    background-color: #eff4ff;
    vertical-align: baseline;
    font-weight: inherit;
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

.border-end {
    border-right: var(--bs-border-width) var(--bs-border-style) #abaeb1 !important;
}

/* media query for navbar */
@media (max-width: 1354px) {
    .btn-val {
        font-size: 16px;
    }
}

@media (max-width: 1287px) {
    .btn-val {
        font-size: 14px;
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
    margin-top: -2%;
    height: 79vh;
}

.firstDD {
    width: 100%;
    height: 32px;
    border-radius: 10px;
    color: #02275f;
    overflow-y: auto;
}

.firstDDLabel {
    margin-left: 0;
    color: #fff;
    font-size: 1.1em;
}

.secondDDLabel {
    margin-left: 0;
    color: #fff;
    font-size: 1.1em;
}

.thirdDDLabel {
    margin-left: 0;
    color: #fff;
    font-size: 1.1em;
}

.dateDDLabel {
    margin-left: 0;
    color: #fff;
    font-size: 1.1em;
}

.secondDD {
    width: 100%;
    height: 32px;
    border-radius: 10px;
    color: #02275f;
    overflow-y: auto;
}

.thirdDD {
    width: 100%;
    height: 32px;
    border-radius: 10px;
    color: #02275f;
    overflow-y: auto;
}

.dateDD {
    width: 100%;
    height: 34px;
    border-radius: 10px;
    border: 1px solid #646464;
}

.TimeLabel {
    color: #fff;
    font-size: 1.1em;
}

.TimeHR {
    width: 24%;
    height: 34px;
    border-radius: 10px;
    color: #02275f;
}

.TimeMin {
    width: 24%;
    height: 34px;
    border-radius: 10px;
    color: #02275f;

}

.submitBtn {
    width: 50%;
    height: auto;
    border-radius: 7px;
    background-color: #244c7e;
    color: ghostwhite;
    border-color: mediumaquamarine;
    font-size: 1.1em;
}

/*  */

/* Macro */
.macClass {
    margin-top: -2%;
}

.createMacroCls {
    width: 100%;
    height: auto;
    border-radius: 7px;
    background-color: #eff4ff;
    color: #244c7e;
    border-color: #ffffff91;
    font-size: 14px;
}

.macroNameLabel,
.mac_firstDDLabel,
.mac_secondDDLabel,
.mac_thirdDDLabel {
    color: #fff;
    font-size: 14px;
    border: 0;
}

.macroNameLabel::after {
    content: " *";
    color: red;
}

.macroNameInput,
.mac_firstDD,
.mac_secondDD,
.mac_thirdDD {
    width: 100%;
    height: 32px;
    border-radius: 10px;
    color: #02275f;
    font-size: 14px;
    overflow-y: auto;
}

.macSubmitBtn {
    justify-content: center;
    margin-top: 6%;
    width: 50%;
    height: auto;
    border-radius: 7px;
    background-color: #244c7e;
    color: ghostwhite;
    border-color: mediumaquamarine;
    font-size: 14px;
    /* margin-left: 21%; */
}

.listContainerMacro {
    display: none;
}

.addBox {
    height: 220px;
    width: 100%;
    background-Color: #eff4ff;
    overflow-y: scroll;
    margin-top: 12px;
    font-size: 13px;
    border-radius: 8px;
}

/*  */
/* Style the dropdown button */
.macOptCls {
    width: 100%;
    height: auto;
    border-radius: 7px;
    background-color: #244c7e;
    color: ghostwhite;
    border-color: mediumaquamarine;
    font-size: 14px;
    margin-bottom: 8px;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    width: 100%;
    background-color: #f9f9f9;
    border-radius: 10px;
    z-index: 1;
}

/* Style the buttons inside the dropdown */
.dropdown-content button {
    width: 100%;
    height: auto;
    text-align: left;
    padding: 5px;
    border: 1px solid black;
    border-radius: 10px;
    cursor: pointer;
    background-color: #dfdfdf;
    color: #1a1a1d;
    font-size: 14px;
}

/* Change color on hover */
/* .dropdown-content button:hover {
    background-color: #ddd;
} */

/* Show the dropdown content when the dropdown button is clicked */
.dropdown:hover .dropdown-content {
    display: block;
}

/*  MACRO CSS*/

/* map starts here*/
#map {
    height: 81vh;
    width: 99%;
    border: 1px solid black;
    margin-top: -39px;
    position: relative;
}

.customClass {
    float: none;
}

/* .leaflet-top,
.leaflet-control {
    margin-top: 0px;
    float: none;
    margin-left: 17px;
} */

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

/* Draggable Model PopUp */
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

.leaflet-panel-layers.expanded {
    padding: 12px;
}

.leaflet-top.leaflet-right .leaflet-panel-layers:not(.compact) {
    margin: 7px;
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
</style>