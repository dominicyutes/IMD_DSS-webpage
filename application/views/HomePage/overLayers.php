<script>
let bgClickedLightningLists = [];

$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    console.log(_this, '_this');
    var isChecked = _this.prop('checked');
    // var isChecked = $(this).attr('checked');
    var layer_group_name = _this.context._layer ? _this.context._layer.group.name : '';
    console.log(layer_group_name, "layer_group_name");
    var layer_name;
    //

    if (isChecked) { // True
        console.log("Checked");
        layer_name = _this.context._layer ? _this.context._layer.name : _this.context.className;
        console.log(layer_name, "layer_name");

        //bgClickedLightningLists[]
        if (_this.context._layer.group.name == "Lightning") {
            if (layer_name == 'Last 00-05 min') {
                bgClickedLightningLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            if (layer_name == 'Last 05-10 min') {
                bgClickedLightningLists.push(
                    layer_group_name + " " + layer_name
                );
            }
            console.log(bgClickedLightningLists, "....bgClickedLightningLists");
        }
    } else {
        console.log("unChecked");
        var uncheckLayer = _this.context._layer ? layer_group_name + ' ' + _this.context._layer.name : _this
            .context.className;
        console.log("uncheckLayer............", uncheckLayer);
        layer_name = _this.context._layer ? _this.context._layer.name : _this.context.className;

        if (_this.context._layer.group.name == "Lightning") {
            if (layer_name == 'Last 00-05 min' || layer_name == 'Last 05-10 min') {
                var itemToRemove = layer_group_name + " " + layer_name;
                var index = bgClickedLightningLists.indexOf(itemToRemove);
                if (index !== -1) {
                    bgClickedLightningLists.splice(index, 1);
                }
                console.log(bgClickedLightningLists, "unchecked....bgClickedLightningLists");
            }
        }

    }
})

































var metarArrayBg = ["METAR 00UTC", "METAR 01UTC", "METAR 02UTC", "METAR 03UTC", "METAR 04UTC", "METAR 05UTC",
    "METAR 06UTC", "METAR 07UTC", "METAR 08UTC", "METAR 09UTC", "METAR 10UTC", "METAR 11UTC", "METAR 12UTC",
    "METAR 13UTC", "METAR 14UTC", "METAR 15UTC", "METAR 16UTC", "METAR 17UTC", "METAR 18UTC", "METAR 19UTC",
    "METAR 20UTC", "METAR 21UTC", "METAR 22UTC", "METAR 23UTC"
];

$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    console.log(_this, '_this');
    var isChecked = _this.prop('checked');
    // var isChecked = $(this).attr('checked');
    var layer_group_name = _this.context._layer ? _this.context._layer.group.name : '';
    console.log(layer_group_name, "layer_group_name");
    var layer_name;
    if (isChecked) { // True
        console.log("Checked");
        layer_name = _this.context._layer ? _this.context._layer.name : _this.context.className;
        console.log(layer_name, "layer_name");

        //EXPOSURE
        if (layer_name === "District Boundaries" || layer_name === "Airport" || layer_name ===
            "Oil Refineries" || layer_name === "Power Station" || layer_name === "Power Plant" || layer_name ===
            "DEM" || layer_name === "Hospital" || layer_name === "Industrail" || layer_name === "sports" ||
            layer_name === "Road Network" || layer_name === "Socio Economic Zone" || layer_name ===
            "Railway Network" || layer_name === "LULC") {
            $("#exposure").css("background-color", 'rgb(180, 194, 224)');
            console.log("EXPOSURE working....", layer_name);
        } else {
            $("#exposure").css("background-color", '#eff4ff');
            console.log("EXPOSURE not working....", layer_name);
        }
    } else {
        console.log("unChecked");
        var uncheckLayer = _this.context._layer ? layer_group_name + ' ' + _this.context._layer.name : _this
            .context.className;

        layer_name = _this.context._layer ? _this.context._layer.name : _this.context.className;

        if (isLayerInMetarArray) {
            if (layer_name === "TEMPERATURE" && layer_name === "DEW POINT TEMPERATURE" && layer_name ===
                "VISIBILITY" && layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", '#eff4ff');
                console.log("METAR unchecked color");
            } else {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR unchecked color not working");
            }
        } else {
            console.log("METAR not working");
        }
    }
})
</script>


<script>
var metarArrayBg = ["METAR 00UTC", "METAR 01UTC", "METAR 02UTC", "METAR 03UTC", "METAR 04UTC", "METAR 05UTC",
    "METAR 06UTC", "METAR 07UTC", "METAR 08UTC", "METAR 09UTC", "METAR 10UTC", "METAR 11UTC", "METAR 12UTC",
    "METAR 13UTC", "METAR 14UTC", "METAR 15UTC", "METAR 16UTC", "METAR 17UTC", "METAR 18UTC", "METAR 19UTC",
    "METAR 20UTC", "METAR 21UTC", "METAR 22UTC", "METAR 23UTC"
];

// //
if (layer_group_name === "METAR 00UTC") {
    if (layer_name === "TEMPERATURE" && layer_name === "DEW POINT TEMPERATURE" && layer_name ===
        "VISIBILITY" && layer_name === "WIND SPEED AND DIRECTION") {
        $("#metar").css("background-color", '#eff4ff');
        console.log("METAR unchecked color");
    } else {
        $("#metar").css("background-color", 'rgb(180, 194, 224)');
        console.log("METAR unchecked color not working");
    }
} else {
    console.log("METAR 00UTC not working");
}
//

$("body").on("change", "input[type=checkbox]", function() {
    var _this = $(this);
    console.log(_this, '_this');
    var isChecked = _this.prop('checked');
    // var isChecked = $(this).attr('checked');
    var layer_group_name = _this.context._layer ? _this.context._layer.group.name : '';
    console.log(layer_group_name, "layer_group_name");
    var layer_name;
    if (isChecked) { // True
        console.log("Checked");
        layer_name = _this.context._layer ? _this.context._layer.name : _this.context
            .className;
        console.log(layer_name, "layer_name");

        //METAR 00UTC
        if (layer_group_name === metarArrayBg) {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 00UTC not working");
        }

        // METAR 01UTC
        if (layer_group_name === "METAR 01UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 01UTC not working");
        }

        // METAR 02UTC
        if (layer_group_name === "METAR 02UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 02UTC not working");
        }

        // METAR 03UTC
        if (layer_group_name === "METAR 03UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 03UTC not working");
        }

        // METAR 04UTC
        if (layer_group_name === "METAR 04UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 04UTC not working");
        }

        // METAR 05UTC
        if (layer_group_name === "METAR 05UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 05UTC not working");
        }

        // METAR 06UTC
        if (layer_group_name === "METAR 06UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 06UTC not working");
        }

        // METAR 07UTC
        if (layer_group_name === "METAR 07UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 07UTC not working");
        }

        // METAR 08UTC
        if (layer_group_name === "METAR 08UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 08UTC not working");
        }

        // METAR 09UTC
        if (layer_group_name === "METAR 09UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 09UTC not working");
        }

        // METAR 10UTC
        if (layer_group_name === "METAR 10UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 00UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 10UTC not working");
        }

        // METAR 11UTC
        if (layer_group_name === "METAR 11UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 11UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 11UTC not working");
        }

        // METAR 12UTC
        if (layer_group_name === "METAR 12UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 12UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 12UTC not working");
        }

        // METAR 13UTC
        if (layer_group_name === "METAR 13UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 13UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 13UTC not working");
        }

        // METAR 14UTC
        if (layer_group_name === "METAR 14UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 14UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 14UTC not working");
        }

        // METAR 15UTC
        if (layer_group_name === "METAR 15UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 15UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 15UTC not working");
        }

        // METAR 16UTC
        if (layer_group_name === "METAR 16UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 16UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 16UTC not working");
        }

        // METAR 17UTC
        if (layer_group_name === "METAR 17UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 17UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 17UTC not working");
        }

        // METAR 18UTC
        if (layer_group_name === "METAR 18UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 18UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 18UTC not working");
        }

        // METAR 19UTC
        if (layer_group_name === "METAR 19UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 19UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 19UTC not working");
        }

        // METAR 20UTC
        if (layer_group_name === "METAR 20UTC") {
            if (layer_name === "TEMPERATURE" || layer_name === "DEW POINT TEMPERATURE" || layer_name ===
                "VISIBILITY" || layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR 20UTC working");
            } else {
                $("#metar").css("background-color", '#eff4ff');
            }
        } else {
            console.log("METAR 20UTC not working");
        }








        //
    } else {
        //

        console.log("unChecked");
        var uncheckLayer = _this.context._layer ? layer_group_name + ' ' + _this.context._layer.name : _this
            .context.className;

        layer_name = _this.context._layer ? _this.context._layer.name : _this.context.className;

        //METAR 00UTC
        if (layer_group_name === "METAR 00UTC") {
            if (layer_name === "TEMPERATURE" && layer_name === "DEW POINT TEMPERATURE" && layer_name ===
                "VISIBILITY" && layer_name === "WIND SPEED AND DIRECTION") {
                $("#metar").css("background-color", '#eff4ff');
                console.log("METAR unchecked color");
            } else {
                $("#metar").css("background-color", 'rgb(180, 194, 224)');
                console.log("METAR unchecked color not working");
            }
        } else {
            console.log("METAR 00UTC not working");
        }

        //METAR 01UTC

    }
})
</script>