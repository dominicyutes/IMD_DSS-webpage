<script>
$(".printbutton").click(function() {
    html2canvas($("#map"), {
        useCORS: true,
        allowTaint: false,
        onrendered: function(canvas) {
            var image = Canvas2Image.convertToPNG(canvas);
            var image_data = $(image).attr('src');
            var random_name = "<?php echo date('Y_m_d_H_i_s'); ?>";
            $.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>pdfController/createPdf/saveReportImg",
                data: {
                    base64: image_data,
                    r_file_name: random_name
                },
                success: function() {
                    printDiv('map_img_' + random_name + '.jpeg');
                }
            });
        }
    });

});

function printDiv(imageFileName) {
    function getCurrentDateTime() {
        const now = new Date();

        const hours = now.getHours();
        const minutes = now.getMinutes();
        const ampm = hours >= 12 ? 'PM' : 'AM';

        const formattedTime = `${hours % 12 || 12}:${minutes.toString().padStart(2, '0')}${ampm}`;
        const formattedDate =
            `${now.getDate()}-${(now.getMonth() + 1).toString().padStart(2, '0')}-${now.getFullYear()}`;

        const formattedDateTime = `${formattedTime}\n${formattedDate}`;

        return formattedDateTime;
    }
    const formattedDateTime = getCurrentDateTime();

    var win = window.open('');

    win.document.write(
        "<div style='text-align: center;'><span style='float: left;'><img src='https://mausam.imd.gov.in/responsive/img/logo/imd_logo_a.png' alt='IMD' width='50px' height='100px'></span>" +
        "<span style='display: inline-block;'><u><h1>WEATHER DECISION SUPPORT SYSTEM</h1></u></span>" +
        "<span style='float: right;'><label>" + formattedDateTime + "</label></span></div>"
    );

    win.document.write('<img src="<?php echo base_url()?>D:/pdf/' + imageFileName +
        '" style="page-break-before: always;"/>');
    win.document.close();
}


_dist_geojson = "<?php echo base_url(); ?>DATA/INDIA_COUNTRY.json";
var geojson = new L.GeoJSON.AJAX(_dist_geojson, {
    color: 'black',
    weight: 1,
    style: {
        color: '#3f51b5',
        opacity: 0.5,
        fillOpacity: 0.5,
        weight: 1
    }
});

throwing cors error, how to rectify it
</script>