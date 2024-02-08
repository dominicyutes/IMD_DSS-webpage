<script>
//Leaflet-sideBySide

let sideBySideControl = null;
let sideBySideVisible = false;
let activeLayers = 0;

function toggleSideBySide() {
    if (sideBySideVisible) {
        if (sideBySideControl !== null) {
            map.removeControl(sideBySideControl);
            sideBySideControl = null;
        }
        sideBySideVisible = false;
    } else {
        sideBySideControl = L.control.sideBySide(mywmsIITM, mywmsNcum, mywmsNowcast, syn00utc_tem, met00utc_tem,
            med_gfs1).addTo(map);
        sideBySideVisible = true;
    }
    updateActiveLayers();
}
</script>