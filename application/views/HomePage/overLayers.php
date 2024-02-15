<script>
$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    console.log(_this, '_this');
    let isChecked = _this.prop('checked');

    // layer_group_name = ExposureLayer
    let layer_group_name = _this.context._layer.group.name;

    // layer_name = Airport or Hospital
    let layer_name = _this.context._layer.name
    // 
    if (isChecked) {

        // Exposure
        if (layer_group_name === "Exposure Layers") {
            if (panelLayerExposureTitle_M.innerHTML == '') {
                EXPOSURE_M.innerHTML = "EXPOSURE"
                panelLayerExposureTitle_M.innerHTML = layer_group_name
                ExposureRow_M.style.display = 'flex';
            }
            let layerExists = clickedExposureLists_M.includes(layer_name);
            if (!layerExists) {
                if (
                    layer_name == 'District Boundaries' ||
                    layer_name == 'Airport' ||
                    layer_name == 'Hospital' ||
                    layer_name == 'sports' ||
                    layer_name == 'Power Plant' ||
                    layer_name == 'Power Station' ||
                    layer_name == 'Oil Refineries' ||
                    layer_name == 'Industrail' ||
                    layer_name == 'Socio Economic Zone' ||
                    layer_name == 'Road Network' ||
                    layer_name == 'Railway Network' ||
                    layer_name == 'DEM' ||
                    layer_name == 'LULC'
                ) {
                    clickedExposureLists_M.push(layer_name);
                }
            }

            panelLayerExposureLists_M.innerHTML =
                `<p>${clickedExposureLists_M[clickedExposureLists_M.length - 1]}</p>`;
        }

        // Radar
        if (layer_group_name === "Radar Products") {
            if (panelLayerRadarTitle_M.innerHTML == '') {
                RADARPRODUCTS_M.innerHTML = "Radar Products"
                panelLayerRadarTitle_M.innerHTML = layer_group_name
                RADAR_Row_M.style.display = 'flex';
            }
            let layerExists = clickedRADARPRODUCTSLists_M.includes(layer_name);
            if (!layerExists) {
                if (
                    layer_name == 'Radar Reflectivity' ||
                    layer_name == 'Radar Animation'
                ) {
                    clickedRADARPRODUCTSLists_M.push(layer_name);
                }
            }

            panelLayerRadarLists_M.innerHTML =
                `<p>${clickedRADARPRODUCTSLists_M[clickedRADARPRODUCTSLists_M.length - 1]}</p>`;
        }

    } else {
        let uncheckLayer = layer_group_name + ' ' + layer_name;

        // exposure 
        let exposureToRem = clickedExposureLists_M.indexOf(layer_name);

        if (exposureToRem !== -1) {
            clickedExposureLists_M = clickedExposureLists_M.filter(x => {
                return x != layer_name
            });

            panelLayerExposureLists_M.innerHTML =
                `<p>${clickedExposureLists_M[clickedExposureLists_M.length - 1]}</p>`;
        }
        // exposure end here


        // // radar
        let radarToRem = clickedRADARPRODUCTSLists_M.indexOf(layer_name);
        //
        if (radarToRem !== -1) {
            clickedRADARPRODUCTSLists_M = clickedRADARPRODUCTSLists_M.filter(x => {
                return x != layer_name
            });
            // 
            panelLayerRadarLists_M.innerHTML = clickedRADARPRODUCTSLists_M.join("");
        }
        // // radar end here

    }
    // else overs here

    // 
    if (clickedExposureLists_M.length === 0) {
        EXPOSURE_M.innerHTML = "";
        panelLayerExposureTitle_M.innerHTML = "";
        document.getElementById("ExposureRow_M").style.display = "none";
    }
    // 
    if (clickedRADARPRODUCTSLists_M.length === 0) {
        RADARPRODUCTS_M.innerHTML = "";
        panelLayerRadarTitle_M.innerHTML = "";
        document.getElementById("RADAR_Row_M").style.display = "none";
    } else {
        document.getElementById("RADAR_Row_M").style.display = "flex";
    }
    // 
    if (clickedSatelliteLists_M.length === 0) {
        SATELLITE_M.innerHTML = "";
        panelLayerSatelliteTitle_M.innerHTML = "";
        document.getElementById("SATELLITE_Row_M").style.display = "none";
    }
    // 


    // 
    let expoLayLength = clickedExposureLists_M.length;
    // document.getElementById("layerName_count").innerHTML = expoLayLength;

    let radLayLength = clickedRADARPRODUCTSLists_M.length;
    // document.getElementById("layerName_count").innerHTML = radLayLength;

    let satLayLength = clickedSatelliteLists_M.length;
    // document.getElementById("layerName_count").innerHTML = satLayLength;

    let layerName_count_length = expoLayLength + radLayLength + satLayLength;
    document.getElementById("layerName_count").innerHTML = layerName_count_length;
    // 
});