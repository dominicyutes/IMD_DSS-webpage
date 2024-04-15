<?php if ($this->session->userdata('is_loggedin') == TRUE) { ?>


    <!-- HTML <head> -->
    <?php $this->load->view('HomePage/header'); ?>

    <!-- HTML <body> -->
    <?php $this->load->view('HomePage/body'); ?>

    <!-- adding JS -->
    <?php $this->load->view('HomePage/scripts'); ?>

    <script type="text/javascript">
        // 
        window.onload = function () {
            var element = document.querySelector('.leaflet-panel-layers-list.leaflet-control-layers-scrollbar');

            if (element) {
                element.style = null;
                element.style.overflow = 'hidden';
            }
        };



        // 
        $("body").addClass("sidebar-collapse");
        var wea = L.marker([22.21, 61.56], {
            icon: L.divIcon({
                html: 'NWA',
                className: 'text-marker',
            })
        }).bindTooltip('NORTH WEST ARABIAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var nea = L.marker([21.69, 67.34], {
            icon: L.divIcon({
                html: 'NEA',
                className: 'text-marker',
            })
        }).bindTooltip('NORTH EAST ARABIAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var wca = L.marker([15.77, 60.68], {
            icon: L.divIcon({
                html: 'WCA',
                className: 'text-marker',
            })
        }).bindTooltip('WEST CENTRAL ARABIAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var eca = L.marker([17.37, 67.95], {
            icon: L.divIcon({
                html: 'ECA',
                className: 'text-marker',
            })
        }).bindTooltip('EAST CENTRAL ARABIAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var swa = L.marker([8.50, 59.87], {
            icon: L.divIcon({
                html: 'SWA',
                className: 'text-marker',
            })
        }).bindTooltip('SOUTH WEST ARABIAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var sea = L.marker([8.87, 68.25], {
            icon: L.divIcon({
                html: 'SEA',
                className: 'text-marker',
            })
        }).bindTooltip('SOUTH EAST ARABIAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var lak = L.marker([9.67, 73.45], {
            icon: L.divIcon({
                html: 'LAK',
                className: 'text-marker',
            })
        }).bindTooltip('LAKSHADWEEP AREA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var mal = L.marker([6.07, 72.85], {
            icon: L.divIcon({
                html: 'MAL',
                className: 'text-marker',
            })
        }).bindTooltip('MALDIVES AREA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var com = L.marker([6.42, 76.68], {
            icon: L.divIcon({
                html: 'COM',
                className: 'text-marker',
            })
        }).bindTooltip('COMORIN AREA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var swb = L.marker([8.23, 83.20], {
            icon: L.divIcon({
                html: 'SWB',
                className: 'text-marker',
            })
        }).bindTooltip('SOUTH WEST BAY OF BENGAL', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var seb = L.marker([8.33, 89.36], {
            icon: L.divIcon({
                html: 'SEB',
                className: 'text-marker',
            })
        }).bindTooltip('SOUTH EAST BAY OF BENGAL', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var sas = L.marker([7.48, 95.42], {
            icon: L.divIcon({
                html: 'SAS',
                className: 'text-marker',
            })
        }).bindTooltip('SOUTH ANDAMAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var wcb = L.marker([15.09, 84.66], {
            icon: L.divIcon({
                html: 'WCB',
                className: 'text-marker',
            })
        }).bindTooltip('WEST CENTRAL BAY OF BENGAL', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var ecb = L.marker([15.19, 90.87], {
            icon: L.divIcon({
                html: 'ECB',
                className: 'text-marker',
            })
        }).bindTooltip('EAST CENTRAL BAY OF BENGAL', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var nas = L.marker([11.85, 96.07], {
            icon: L.divIcon({
                html: 'NAS',
                className: 'text-marker',
            })
        }).bindTooltip('NORTH ANDAMAN SEA', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var nwb = L.marker([19.00, 87.59], {
            icon: L.divIcon({
                html: 'NWB',
                className: 'text-marker',
            })
        }).bindTooltip('NORTH WEST BAY OF BENGAL', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);
        var neb = L.marker([18.70, 91.83], {
            icon: L.divIcon({
                html: 'NEB',
                className: 'text-marker',
            })
        }).bindTooltip('NORTH EAST BAY OF BENGAL', {
            permanent: false,
            direction: 'auto'
        }).addTo(map);

        var oc =
            '{"type": "FeatureCollection","name": "bob","crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },"features": [{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 63.2, 20.0 ], [ 72.6, 20.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 57.8, 20.0 ], [ 72.6, 20.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 83.6, 18.0 ], [ 94.4, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 90.0, 22.0 ], [ 90.0, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 88.5, 18.0 ], [ 88.5, 13.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 80.27, 13.0 ], [ 92.97, 13.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 13.0 ], [ 93.0, 7.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 86.0, 13.0 ], [ 86.0, 7.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 13.0 ], [ 94.4, 18.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 25.2 ], [ 65.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 5.0 ], [ 79.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 75.0, 8.0 ], [ 75.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 7.0 ], [ 79.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 5.0 ], [ 93.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 86.0, 7.0 ], [ 86.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 7.0 ], [ 93.0, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 75.0, 8.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 71.5, 12.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 71.5, 8.0 ], [ 71.497353553605507, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 5.0 ], [ 95.36, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 93.0, 9.0 ], [ 98.2, 9.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 98.26, 8.0 ], [ 96.0, 5.38 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 7.0 ], [ 79.0, 8.9 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 79.0, 8.9 ], [ 79.0, 9.260000000000105 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 65.0, 5.0 ], [ 48.6, 5.0 ] ] } },{ "type": "Feature", "properties": { "Id": 0 }, "geometry": { "type": "LineString", "coordinates": [ [ 75.2, 12.000000000000114 ], [ 52.000000000000114, 12.000000000000114 ], [ 50.715135973047325, 11.999682222026195 ] ] } }]}';
        ocean1 = L.geoJson((JSON.parse(oc)), {
            color: 'grey',
        }).addTo(map);

        function createGrid() {
            var gridLines = [];

            // Create latitude lines passing through longitude 0
            for (var lat = -90; lat <= 90; lat += 10) {
                var line = {
                    "type": "Feature",
                    "properties": {
                        "Id": 0
                    },
                    "geometry": {
                        "type": "LineString",
                        "coordinates": [
                            [0, lat],
                            [180, lat]
                        ]
                    }
                };
                gridLines.push(line);
            }

            // Create longitude lines passing through latitude 0
            for (var lon = -180; lon <= 180; lon += 10) {
                var line = {
                    "type": "Feature",
                    "properties": {
                        "Id": 0
                    },
                    "geometry": {
                        "type": "LineString",
                        "coordinates": [
                            [lon, 0],
                            [lon, 90]
                        ]
                    }
                };
                gridLines.push(line);
            }

            return gridLines;
        }

    </script>

    <!-- drawings code start-->
    <script>
        // Wait for the DOM content to load before adding event listener
        document.addEventListener("DOMContentLoaded", function () {
            // Attach the event listener to the date input
            document.getElementById("start_dates").addEventListener("change", fetchNames);
        });

        function fetchNames() {
            var selectedDate = document.getElementById("start_dates").value;
            // console.log("Selected date:", selectedDate);

            $.ajax({
                url: "<?php echo site_url('Drawings/Drawing/fetch_names'); ?>", // Adjusted URL
                type: "GET",
                data: { date: selectedDate },
                // dataType: "json",
                success: function (names) {
                    // console.log("Response:", names);
                    populateDropdown(names);
                },
                // error: function (xhr, textStatus, errorThrown) {
                //     console.error("Error:", errorThrown);
                // }
            });
        }

        function populateDropdown(names) {
            var dropdown = document.getElementById("subparameter");
            dropdown.innerHTML = ""; // Clear previous options

            names.forEach(function (item) {
                var option = document.createElement("option");
                option.text = item.name; // Extract the 'name' property
                dropdown.add(option);
            });
        }




        // Variable to track whether to clear layers or not
        var clearLayers = true;

        // Function to toggle drawing
        function toggleDrawing() {
            clearLayers = !clearLayers;

            if (clearLayers) {
                active_multiple();
                alert("Multiple drawings is now inactive.");
            } else {
                drawnItems.clearLayers();
                alert("Multiple drawings  is now active.");
            }
        }


        // Function to draw polyline on the map
        function drawPolyline(latitudes, longitudes) {
            // Clear any existing drawn items if clearLayers is true
            if (clearLayers) {
                drawnItems.clearLayers();
            }

            // Create an array to hold the polyline coordinates
            var polylineCoords = [];
            for (var i = 0; i < latitudes.length; i++) {
                polylineCoords.push([parseFloat(latitudes[i]), parseFloat(longitudes[i])]);
            }

            // Generate random RGB values
            function getRandomColor() {
                var r = Math.floor(Math.random() * 256);
                var g = Math.floor(Math.random() * 256);
                var b = Math.floor(Math.random() * 256);
                return 'rgb(' + r + ',' + g + ',' + b + ')';
            }

            // Create polyline with random color
            var polyline = L.polyline(polylineCoords, {
                color: getRandomColor(), // Use random color
                weight: 3,
                opacity: 0.7
            });


            // Add the polyline to the drawnItems feature group
            drawnItems.addLayer(polyline);

            // Fit map to the bounds of the drawn polyline
            map.fitBounds(polyline.getBounds());
        }




        // Function to erase the last drawn point from the polyline
        function eraseDrawing() {
            // Get all drawn layers
            var layers = drawnItems.getLayers();
            var lastLayerIndex = layers.length - 1;

            // Check if there are any drawn layers
            if (lastLayerIndex >= 0) {
                var lastLayer = layers[lastLayerIndex];
                // Check if the last drawn layer is a polyline
                if (lastLayer instanceof L.Polyline) {
                    var latlngs = lastLayer.getLatLngs();
                    // Remove the last point from the polyline
                    if (latlngs.length > 0) {
                        latlngs.pop();
                        lastLayer.setLatLngs(latlngs);
                    } else {
                        // If no points are left, remove the entire layer
                        drawnItems.removeLayer(lastLayer);
                    }
                }
            }
        }



        // Function to handle form submission
        function SubmitForm() {
            var selectedDate = document.getElementById("start_dates").value;
            var selectedSubparameter = document.getElementById("subparameter").value;

            // Make AJAX request to server
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('Drawings/Drawing/get_lat_long'); ?>",
                data: {
                    date: selectedDate,
                    name: selectedSubparameter
                },
                success: function (response) {
                    // console.log(response); 
                    try {
                        var data = JSON.parse(response); // Parse the response as JSON

                        // Extract latitudes and longitudes from the response data
                        var latitudes = data.latitudes.replace(/[{}]/g, '').split(',');
                        var longitudes = data.longitudes.replace(/[{}]/g, '').split(',');

                        // Draw polyline on the map using the extracted latitudes and longitudes
                        drawPolyline(latitudes, longitudes);
                    } catch (error) {
                        console.error('Error parsing JSON response:', error);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        function confirmDelete() {
            // Display a confirmation dialog
            var confirmation = confirm("Are you sure you want to delete?");

            // If the user confirms, call the deleteDrawing function
            if (confirmation) {
                deleteDrawing();
            }
        }

        function deleteDrawing() {
            var selectedDate = document.getElementById("start_dates").value;
            var selectedSubparameter = document.getElementById("subparameter").value;

            // Make AJAX request to server to delete row data
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('Drawings/Drawing/delete_row'); ?>",
                data: {
                    date: selectedDate,
                    name: selectedSubparameter
                },
                success: function (response) {
                    // console.log(response, 'asjbfadkshbk');
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }



    </script>
    <!-- drawings code end-->


    <!-- print code start  -->
    <script>
        //function generate_report_and_save() {
        $(".printbutton").click(function () {
            $(".printbutton").addClass('running');
            html2canvas($("#map"), {
                useCORS: true,
                allowTaint: false,
                onrendered: function (canvas) {
                    var image = Canvas2Image.convertToPNG(canvas);
                    var image_data = $(image).attr('src');
                    var random_name = "<?php echo date('Y_m_d_H_i_s'); ?>";
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>Welcome/saveReportImg",
                        data: {
                            base64: image_data,
                            r_file_name: random_name
                        },
                        success: function (_data_, status) {
                            var _status = status;
                            if (_status == 'success') {
                                var win = window.open('<?php echo base_url() ?>' + _data_,
                                    '_blank');
                                if (win) {
                                    win.focus();
                                } else {
                                    alert('Please allow popups for this website');
                                }
                            } else {
                                alert("Something wrong with your please check it later");
                            }
                        }
                    });
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $(".printbutton").on("click", function () {
                let printlegenddata = document.getElementById('printlegend').innerHTML;
                // console.log("printasdjkhcvjks", printlegenddata);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('welcome/legends'); ?>",
                    data: {
                        content: printlegenddata
                    }, // Changed userId to content
                    success: function (response) {
                        console.log("resp", response);
                    },
                    error: function (error) {
                        console.error('error', error);
                    }
                });
            })
        });
    </script>
    <script src="leaflet.browser.print.min.js"></script>
    <script>
        var browserControl = L.control.browserPrint().addTo(map);

        // css
        browserControl.getContainer().style.top = '-76px';
    </script>
    <!-- print code end  -->

<?php } ?>