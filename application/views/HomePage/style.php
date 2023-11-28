<style>
body {
    padding: 0;
    margin: 0;
}

.home-page {
    /* position: relative; */
    /* background-color: #1db598; */
    /* background-image: linear-gradient(180deg, #1db598 89%, #d8d8dd 100%); */
    /* height: 116vh;
    width: 100%; */
    background-image: url(https://img.freepik.com/free-photo/artistic-blurry-colorful-wallpaper-background_58702-8192.jpg?size=626&ext=jpg&ga=GA1.1.947931461.1697391845&semt=ais);
    background-size: cover;
}

div.w-100 {
    width: 99% !important;
}

div.h-75 {
    height: 80% !important;
}

nav {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.span_bold {
    font-weight: 600 !important;
}

/*  */
#toggleButton {
    background-color: blue;
    color: white;
    cursor: pointer;
}

.additionalButtons {
    display: none;
}

/* observationToggle */
.hidden {
    display: none;
}

/*  */
.mapAreaBg {
    background-color: #f8f6f8;
}

.optionsMap {
    height: 93vh;
    width: 100%;
}

.firstDD {
    width: 16%;
    height: 34px;
    border-radius: 10px;
    margin: 10px 211px 10px 0;

}

.firstDDLabel {
    margin-left: 40px;
}

.dateDDLabel {
    margin-left: 40px;
}

.secondDD {
    width: 16%;
    height: 34px;
    border-radius: 10px;
    margin: 10px 0;
    margin: 10px 211px 10px 0;
}

.thirdDD {
    width: 16%;
    height: 34px;
    border-radius: 10px;
    margin: 10px 0;
}

.dropdownSelect {
    width: 20%;
}

.dateDD {
    width: 12%;
    height: 34px;
    border-radius: 10px;
    border: 1px solid #646464;
    margin: 8px 237px 0 0;
}

.SecDD {
    width: 3%;
    height: 34px;
    border-radius: 10px;
    margin: 8px 0 0 0;
    border: 1px solid #646464;
}

.TimeLabel {
    margin-left: 46px;
}

.TimeHR {
    width: 3%;
    height: 34px;
    border-radius: 10px;
    margin: 8px 10px 0 0;
    border: 1px solid #646464;
}

.TimeMin {
    width: 3%;
    height: 34px;
    border-radius: 10px;
    margin: 8px 1px 0 0;
    border: 1px solid #646464;
}

.timeUTC {
    width: 20%;
}

.submitBtn {
    width: 7%;
    height: auto;
    border-radius: 7px;
    background-color: #00aa55;
    color: ghostwhite;
    border-color: mediumaquamarine;
    margin-left: 91px;
}

/* map starts here*/
#map {
    height: 83vh;
    width: 96%;
    border: 2px solid #646464;
    margin: 0 5px 15px 25px;
    position: relative;
}

.col-3 {
    flex: 0 0 auto;
    width: 28%;
    margin-left: -55px;
}

.wrapper {
    float: right;
    height: 597px;
    margin-top: 10px;
    background-color: #a5dad8;
}

.bar {
    height: 578px;
    margin-right: 10px;
    border-radius: 4px;
    background-color: #f8f6f8;
}

.legend1 {
    width: 91%;
    height: 57vh;
    margin: 0 7px 0 0;
    float: right;
    border: 4px solid white;
    padding-bottom: 12px;
}

.legend2 {
    width: 91%;
    height: 25vh;
    margin: 7px 6px 0px 0px;
    float: right;
    border: 2px solid #646464;
}

/* legendexpand button STARTS*/
.gg-arrows-expand-right-alt {
    box-sizing: border-box;
    position: relative;
    display: block;
    transform: scale(var(--ggs, 1));
    width: 14px;
    height: 14px;
    margin: -1px;
    box-shadow:
        -6px 6px 0 -4px,
        6px -6px 0 -4px
}

.gg-arrows-expand-right-alt::after,
.gg-arrows-expand-right-alt::before {
    content: "";
    display: block;
    box-sizing: border-box;
    position: absolute;
    transform: rotate(45deg)
}

.gg-arrows-expand-right-alt::before {
    width: 2px;
    height: 22px;
    top: -4px;
    left: 6px;
    border-top: 9px solid;
    border-bottom: 9px solid
}

.gg-arrows-expand-right-alt::after {
    width: 8px;
    height: 2px;
    background: currentColor;
    top: 6px;
    left: 3px
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
    width: 225px;
    height: 300px;
    margin: 315px 0 0 100px;
    transform: translate(-50%, -50%);
    background-color: #fff;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.404);
    border-radius: 6px;
    user-select: none;
    overflow: auto;
    /* resize: both; */
}

.model-body h4 {
    font-size: 16px;
    padding-left: 11px;
    margin: 5px 0 0 10px;
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

//


/* legendexpand button ENDS*/

.leaflet-panel-layers.expanded {
    padding: 12px;
}

.leaflet-top.leaflet-right .leaflet-panel-layers:not(.compact) {
    margin: 7px;
}

/* */
@media (max-width: 1225px) {
    .legend1 {
        width: 86%;
    }

    .legend2 {
        width: 86%;
    }
}
</style>