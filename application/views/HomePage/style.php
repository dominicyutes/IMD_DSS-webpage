<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
    margin: 0;
    font-family: 'Quicksand', sans-serif;
    background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
    position: relative;
    height: 100vh;
    width: 100%;
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
    vertical-align: baseline;
    font-weight: inherit;
    font-style: inherit;
    font-size: 1.1em;
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

.with-border {
    border-right: 2px solid #e0dfdf;
    padding-right: 4px;
}

.exp_poly {
    color: #163159;
}

.expo-polygon-parent {
    border: none;
    padding: 0;
    background-color: #e0dfdf;
    cursor: pointer;
    font: inherit;
    outline: inherit;
}

.expo-polygon-parent:hover {
    background-color: #ced0cf;
}

/* observationToggle */
.hidden {
    display: none;
}

.firstDD {
    width: 100%;
    height: 32px;
    border-radius: 10px;
}

.firstDDLabel .secondDDLabel .thirdDDLabel {
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
}

.thirdDD {
    width: 100%;
    height: 32px;
    border-radius: 10px;
}

.dropdownSelect {
    width: 20%;
}

.dateDD {
    width: 100%;
    height: 34px;
    border-radius: 10px;
    border: 1px solid #646464;
}

.SecDD {
    width: 3%;
    height: 34px;
    border-radius: 10px;
    margin: 8px 0 0 0;
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
}

.TimeMin {
    width: 24%;
    height: 34px;
    border-radius: 10px;
}

.timeUTC {
    width: 20%;
}

.submitBtn {
    width: 50%;
    height: auto;
    border-radius: 7px;
    background-color: #00aa55;
    color: ghostwhite;
    border-color: mediumaquamarine;
    font-size: 1.1em;
    /* margin-left: 91px; */
}

/* map starts here*/
#map {
    height: 83vh;
    width: 99%;
    border: 1px solid black;
    margin-top: -14px;
    /* margin-left: 1px; */
    position: relative;
}

.leaflet-top .leaflet-control {
    margin-top: 3px;
}

.leaflet-control-custom {
    font-weight: bold;
    background-color: #fff;
    padding: 2px 10px;
    border: 1px solid #ccc;
    cursor: pointer;
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
    background-color: lightblue;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.404);
    border-radius: 6px;
    user-select: none;
    overflow: auto;
    position: relative;
    resize: both;
}

.model-body h4 {
    font-size: 16px;
    padding-left: 11px;
    margin: 5px 0 0 0px;
}

.model-body h5 {
    font-size: 14px;
    padding-left: 11px;
    margin: 5px 0 0 15px;
}

.model-body p {
    font-size: 15px;
    padding-left: 18px;
    margin: 7px 0;
    padding-left: 41px;
}

.model-body legend {
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    /* border-radius: 50%;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.404); */
    /* background-color: #d48c8c; */
    cursor: pointer;
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
</style>