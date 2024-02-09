<script>
//Leaflet-sideBySide
<
div style = "height: 38px;width: 100%; background-color: white; font-family: 'Times New Roman';" >
    <
    div id = "ExposureRow_M"
style = "display: none;font-size: 17px;" >
    <
    h4 id = "EXPOSURE_M"
style = " border-radius: 2px; background-color: #00719c;  text-align: center;" >
    <
    /h4> <
h5 id = "exposure-layers-Title_M"
style = "color: #000000;" > < /h5> <
p id = "exposure-layers-lists_M"
style = "display: flex; flex-wrap: wrap;" >
    <
    /div> < /
div >

    let panelLayerExposureTitle_M = document.querySelector('#exposure-layers-Title_M')
let panelLayerExposureLists_M = document.querySelector('#exposure-layers-lists_M')

let clickedExposureLists_M = [];

//Fn for exposure
function remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer) {

    if (_context_layer) {
        console.log("if part");
        clickedExposureLists = clickedExposureLists.filter(checkList => {
            let clickedLayer = checkList.split('" checked/>')[0].split('class="')[1]
            return clickedLayer != uncheckLayer
            console.log(clickedLayer, ".......clickedLayer");
        });

        clickedExposureLists_M = clickedExposureLists_M.filter(layer => layer !==
            `<span style="margin-left: 8px;flex-direction: row;"> District Boundaries;</span>`);
        clickedExposureLists_M = clickedExposureLists_M.filter(layer => layer !==
            `<span style="margin-left: 8px;flex-direction: row;"> Airport;</span>`);


        panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
        map.removeLayer(_layer_to_remove_add);
    } else {
        console.log("else part");
        if (map.hasLayer(_layer_to_remove_add)) {
            map.removeLayer(_layer_to_remove_add);
        } else {
            map.addLayer(_layer_to_remove_add);
        }
    }
}
let getLayer_name;
$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    console.log(_this, '_this');
    var isChecked = _this.prop('checked');
    var layer_group_name = _this.context._layer ? _this.context._layer.group.name : '';
    console.log(layer_group_name, "layer_group_name");
    var layer_name;

    getLayer_name = layer_name;
    console.log(getLayer_name, "getLayer_namegetLayer_name");
    // 
    if (isChecked) { // True
        console.log("Checked");

        layer_name = _this.context._layer ? _this.context._layer.name : _this.context.className;

        console.log(layer_name, "layer_name,layer_name");

        var forExistLayer = _this.context._layer ? layer_group_name + ' ' + layer_name : _this.context
            .className;

        console.log(forExistLayer, "forExistLayer,forExistLayer");

        var _class_name = _this.attr("class");
        console.log(_class_name, "_class_name,_class_name,11");

        if (_class_name == 'Exposure Layers District Boundaries') {
            // console.log(_class_name, "_class_name,_class_name,22");
            var _context_layer = _this.context._layer;
            var _layer_to_remove_add = X144;
            remove_layer_or_add(_context_layer, _layer_to_remove_add, uncheckLayer);
        }

        if (_this.context._layer?.group.name == "Exposure Layers") {
            if (panelLayerExposureTitle.innerHTML == '') {
                EXPOSURE.innerHTML = "EXPOSURE"
                panelLayerExposureTitle.innerHTML = _this.context._layer?.group.name + ':'
                ExposureRow.style.display = 'block';
                // 
                EXPOSURE_M.innerHTML = "EXPOSURE";
                panelLayerExposureTitle_M.innerHTML = _this.context._layer?.group.name;
                ExposureRow_M.style.display = 'flex';

            }

            let ExposureLayersExit = clickedExposureLists.find(x => {
                return x.split('" checked/>')[0].split('class="')[1] == forExistLayer;
            })
            console.log(ExposureLayersExit, "ExposureLayersExit");

            if (!ExposureLayersExit) {

                if (layer_name == 'District Boundaries') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` + `<span style="width: 30px; 
                        height: 1px; 
                        border-bottom: 2px dashed #000;
                        display: inline-block;"></span>` +
                        `</span>`
                    );
                }
                if (layer_name === 'District Boundaries') {
                    clickedExposureLists_M.push(
                        '<span style="margin-left: 8px;flex-direction: row;">${getLayer_name};</span>'

                    );
                }



                if (layer_name == 'Airport') {
                    clickedExposureLists.push(
                        `<span style=" flex-direction: column; margin-right: 20px; margin-bottom: 10px;">` +
                        `<input type="checkbox" class="${layer_group_name} ${layer_name}" checked/> ${layer_name} ` +
                        `<i class="fas fa-plane"></i>` +
                        `</span>`
                    );
                }
                if (layer_name === 'Airport') {
                    clickedExposureLists_M.push(
                        '<span style="margin-left: 8px;flex-direction: row;"> Airport;</span>'

                    );
                }

            }


            panelLayerExposureLists.innerHTML = clickedExposureLists.join("");
            panelLayerExposureLists_M.innerHTML = clickedExposureLists_M.join("");
        }

    } else {
        var uncheckLayer = _this.context._layer ? layer_group_name + ' ' + _this.context._layer?.name :
            _this
            .context.className;
        console.log("uncheckLayer............", uncheckLayer);
        layer_name = _this.context._layer ? _this.context._layer?.name : _this.context.className;

        if (uncheckLayer == 'Exposure Layers District Boundaries') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X144;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);

            // Remove 'District Boundaries' from clickedExposureLists_M
            clickedExposureLists_M = clickedExposureLists_M.filter(layer => layer !==
                `<span style="margin-left: 8px;flex-direction: row;">District Boundaries;</span>`);

            // If clickedExposureLists_M is empty, reset HTML content for Exposure_M
            if (clickedExposureLists_M.length === 0) {
                EXPOSURE_M.innerHTML = "";
                panelLayerExposureTitle_M.innerHTML = "";
                panelLayerExposureLists_M.innerHTML = "";
            }
        }
        if (uncheckLayer == 'Exposure Layers Airport') {
            var _context_layer = _this.context._layer;
            var _layer_to_remove_or_add = X121;
            remove_layer_or_add(_context_layer, _layer_to_remove_or_add, uncheckLayer);

            clickedExposureLists_M = clickedExposureLists_M.filter(layer => layer !==
                `<span style="margin-left: 8px;flex-direction: row;">Airport;</span>`);

            if (clickedExposureLists_M.length === 0) {
                EXPOSURE_M.innerHTML = "";
                panelLayerExposureTitle_M.innerHTML = "";
                panelLayerExposureLists_M.innerHTML = "";
            }
        }
    }
});

if (isChecked) is working good, but in
    if (isChecked)
else part, when uncheckLayer == 'Exposure Layers Airport'
means, i want to only remove the Airport from clickedExposureLists_M and when uncheckLayer ==
    'Exposure Layers District Boundaries'
means, i want to only remove the District Boundaries from clickedExposureLists_M;
right now it is removing both Airport and District Boundaries from clickedExposureLists_M
</script>