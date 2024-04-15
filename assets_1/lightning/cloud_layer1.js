var predata = "1";
var counttemp=0;
for (j =0;j<=getHours(); j++) {
    cloudURL = 'https://www.skymetweather.com/media/insatalpha/SATELLITE-IMAGE-INDIA-' + getCurrentDate().toUpperCase() + '-' + checkForDoubleDigits(j) + '-RAW_ALPHA.png';
    if(counttemp<=10){
        predata += "<img src=" + cloudURL + ">";
    }
    counttemp=counttemp+1;
}
$('body').append('<div style="display:none;">'+predata+'</div>');    

$(window).ready(function () {
    /*var radTime = new Date();
    var imageBounds = new L.LatLngBounds(
                        new L.LatLng(45, 45),
                        new L.LatLng(-10, 110)
                    );

    var maxHour = getIncrHours();
        maxHour = checkForDoubleDigits(maxHour);
    var radLayers = new Array;

    var predata = "";
    for (j = 0; j <= getHours() - 1 ; j++) {
        cloudURL = 'https://www.skymetweather.com/media/insatalpha/SATELLITE-IMAGE-INDIA-' + getCurrentDate().toUpperCase() + '-' + checkForDoubleDigits(j) + '-RAW_ALPHA.png';
        var temp = 'radar_current_' + j;
        var temp = L.imageOverlay(cloudURL, imageBounds, { time: j.toLocaleString() });
        temp.setOpacity(0.7);
        radLayers.push(temp);

    }

    var layerGroup = L.layerGroup(radLayers);

    sliderControl = L.control.sliderControl({
        layer: layerGroup,
        opacity:0,
        value:0,               
        follow: true,
    });

    $('#cloud_layer').on('click', function () {

        if(sliderControlLight._map!=null){
            map.removeControl(sliderControlLight);
            clicklight=0
        }
        if (clicklight == 0) {
            clicklight = 1;
            removebaselayers();
            map.addControl(sliderControl);
            sliderControl.startSlider();
            // function to auto slide
            var clickplaypause=1;
            var interval;

            $('#slidercloudouter').click(function(e) {
                if(clickplaypause==1){
                    for(i=0; i<10000; i++) {
                        window.clearInterval(i);
                    }
                    $("#sliderpause").hide();
                    $("#sliderplay").show();

                    clickplaypause=0;
                }else{
                    interval=setInterval(function(){
                        var current = $('#leaflet-slider').slider("value");
                        var max = sliderControl.options.maxValue;
                        var step = current +1;
                        if(step>max){
                            step=0;
                        }
                        $('#leaflet-slider').slider("value", step);
                        sliderControl.slide(null, {value: step});                                                                                  
                    }, 1000);
                    clickplaypause=1;
                    $("#sliderplay").hide();
                    $("#sliderpause").show();
                }
            });                                                                           


            interval=setInterval(function(){
                var current = $('#leaflet-slider').slider("value");
                var max = sliderControl.options.maxValue;
                var step = current + 1;
                if(step>max){
                    step=0;
                }
                $('#leaflet-slider').slider("value", step);
                sliderControl.slide(null, {value: step});
            }, 1000);
            cloudtemp=1;
            $("#lightning").removeClass('layer-items-active')
            $("#cloud_layer").addClass('layer-items-active')
        }
        else {
            if( typeof sliderControl  !=  'undefined' && sliderControl._map != null){
                map.removeControl(sliderControl);
            }	
            clicklight = 0;
            $("#cloud_layer").removeClass('layer-items-active')        
        }
        return false;
    });*/
});