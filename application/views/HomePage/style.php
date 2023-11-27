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

/* nav start here */

.navbarColor {
    /* height: 50px;
    margin: -14px 40px 0 40px; */
    background-color: #90bdc4;
}

/* .boxSize {
    margin: 2% 2% 1% 2%;
} */

.btns {
    display: flex;
    width: 100%;
    gap: 0.3em;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 5px;
}

.btn-val {
    letter-spacing: 1px;
    /* text-transform: uppercase; */
    font-size: 14px;
    padding: 12px;
    border-radius: 2px;
    width: fit-content;
    border-radius: 5px;
    cursor: pointer;
    border: 3px solid;
    padding: 0.25em 0.5em;
    box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px,
        5px 5px 0px 0px;
    position: relative;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    font-weight: 700;
}

.btn-val:active {
    box-shadow: 0px 0px 0px 0px;
    top: 5px;
    left: 5px;
    font-weight: 600;
}

/*  */
._btn_obs {
    background-color: rgb(240, 240, 240);
    color: black;
    letter-spacing: 1px;
    font-size: 14px;
    padding: 12px;
    border-radius: 2px;
    width: fit-content;
    border-radius: 5px;
    cursor: pointer;
    border: 3px solid;
    padding: 0.25em 0.5em;
    font-weight: 500;
    margin-bottom: 5px;
}

._btn_obs:hover {
    box-shadow: 5px 5px 10px #aaa;
    cursor: pointer;
    letter-spacing: 1px;
    font-size: 14px;
    padding: 12px;
    border-radius: 2px;
    width: fit-content;
    border-radius: 5px;
    cursor: pointer;
    border: 3px solid;
    padding: 0.25em 0.5em;
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
    background-color: white;
}

.optionsMap {
    height: 93vh;
    width: 100%;
}

.dropdownSelect {
    width: 20%;
}

.date {
    width: 20%;
}

.timeUTC {
    width: 20%;
}

.submitBtn {
    width: 10%;
}

/* map starts here*/
#map {
    height: 83vh;
    width: 95%;
    border: 2px solid #646464;
    margin: 0 5px 0 7px;
    position: relative;
    float: left;

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
    background-color: #a0c8c8;
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
    z-index: 999;
    /* background-color: red; */
}

.model-body {
    position: absolute;
    width: 100%;
    height: 54vh;
    top: 51%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.404);
    border-radius: 6px;
    user-select: none;
    overflow: auto;
    resize: both;
}

.model-body h4 {
    font-size: 20px;
    padding-left: 11px;
    margin-top: 11px;
}

.model-body h5 {
    font-size: 16px;
    padding-left: 11px;
    margin-top: 11px;
}

.model-body p {
    font-size: 15px;
    padding-left: 18px;
    margin: 7px 0;
    padding-left: 41px;
}

.model-body span {
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 2px;
    right: 3px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    border-radius: 50%;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.404);
    background-color: #d48c8c;
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

    /* .home-page {
        position: relative;
        background-image: url(https://img.freepik.com/free-photo/artistic-blurry-colorful-wallpaper-background_58702-8192.jpg?size=626&ext=jpg&ga=GA1.1.947931461.1697391845&semt=ais);
        height: 150vh;
        width: 100%;
        background-size: cover;
    } */

    /* #map {
        height: 83vh;
        width: 74%;
        border: 4px solid white;
        margin: 13px 5px 0 7px;
        position: relative;
        float: left;
    } */
}
</style>