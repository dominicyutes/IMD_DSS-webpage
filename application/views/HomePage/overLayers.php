<script>
var customButtonsContainer = L.DomUtil.create('div', 'leaflet-bar leaflet-control customClass');
var ObservationButton = L.Control.extend({
    options: {
        position: 'bottomleft'
    },
    onAdd: function() {
        var obsbtn = L.DomUtil.create('span',
            'leaflet-bar leaflet-control leaflet-control-custom custom-btn');
        obsbtn.innerHTML = 'Observation';
        L.DomEvent.on(obsbtn, 'click', function() {
            toggleObservation();
        });

        return obsbtn;
    }
});

var timeDimensionControlButton = L.Control.extend({
    onAdd: function() {
        var button = L.DomUtil.create('button');
        button.innerHTML = 'Time Dimension';
        button.style.padding = '2px';
        button.style.cursor = 'pointer';

        button.onclick = function() {
            toggleTimeDimensionControl();
        };

        return button;
    },
    onRemove: function() {}
});
</script>