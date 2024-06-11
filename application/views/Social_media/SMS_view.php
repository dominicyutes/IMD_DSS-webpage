<?php $this->load->view('Menu/template/header_'); ?>
<?php $this->load->view('Menu/template//sidebar_'); ?>
<!--  CSS  FIELS START -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<!-- CSS LINKS END HERE -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
        <div class="col-md-12">
            <!-- editing content starts here -->
            <div class="col-9" style="width: 85%">
                <i class="fa-solid fa-comment-sms fa-2xl"></i>
                <!-- <span>SMS</span> -->

                <!-- Auto Checkbox starts here -->
                <div style="margin-top: 2%;">
                    <input type="checkbox" id="toggleButton">
                    <label for="toggleButton">Auto SMS ON/OFF</label>
                </div>

                <!-- MC dropdown starts here -->
                <div class="row">
                    <div class="btn-group dropend" style="width: 14%;">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 8%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Choose MC
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">MC Mumbai</a></li>
                            <li><a class="dropdown-item" href="#">MC Delhi</a></li>
                            <li><a class="dropdown-item" href="#">MC Kolkata</a></li>
                            <li><a class="dropdown-item" href="#">MC Chennai</a></li>
                            <li><a class="dropdown-item" href="#">MC Bangalore</a></li>
                            <li><a class="dropdown-item" href="#">MC Hyderabad</a></li>
                            <li><a class="dropdown-item" href="#">MC Ahmedabad</a></li>
                            <li><a class="dropdown-item" href="#">MC Pune</a></li>
                            <li><a class="dropdown-item" href="#">MC Thiruvananthapuram</a></li>
                            <li><a class="dropdown-item" href="#">MC Bhubaneswar</a></li>
                        </ul>
                    </div>
                </div>
                <!-- MC dropdown ends here -->

                <!-- State dropdown starts here -->
                <div class="row">
                    <div class="btn-group dropend" style="width: 14%;">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 8%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Choose State
                        </button>
                        <ul class="dropdown-menu" style="height: 20rem; overflow-y: scroll; ">
                            <li><a class="dropdown-item" href="#">Andhra Pradesh</a></li>
                            <li><a class="dropdown-item" href="#">Arunachal Pradesh</a></li>
                            <li><a class="dropdown-item" href="#">Assam</a></li>
                            <li><a class="dropdown-item" href="#">Bihar</a></li>
                            <li><a class="dropdown-item" href="#">Chhattisgarh</a></li>
                            <li><a class="dropdown-item" href="#">Goa</a></li>
                            <li><a class="dropdown-item" href="#">Gujarat</a></li>
                            <li><a class="dropdown-item" href="#">Haryana</a></li>
                            <li><a class="dropdown-item" href="#">Himachal Pradesh</a></li>
                            <li><a class="dropdown-item" href="#">Jharkhand</a></li>
                            <li><a class="dropdown-item" href="#">Karnataka</a></li>
                            <li><a class="dropdown-item" href="#">Kerala</a></li>
                            <li><a class="dropdown-item" href="#">Madhya Pradesh</a></li>
                            <li><a class="dropdown-item" href="#">Maharashtra</a></li>
                            <li><a class="dropdown-item" href="#">Manipur</a></li>
                            <li><a class="dropdown-item" href="#">Meghalaya</a></li>
                            <li><a class="dropdown-item" href="#">Mizoram</a></li>
                            <li><a class="dropdown-item" href="#">Nagaland</a></li>
                            <li><a class="dropdown-item" href="#">Odisha</a></li>
                            <li><a class="dropdown-item" href="#">Punjab</a></li>
                            <li><a class="dropdown-item" href="#">Rajasthan</a></li>
                            <li><a class="dropdown-item" href="#">Sikkim</a></li>
                            <li><a class="dropdown-item" href="#">Tamil Nadu</a></li>
                            <li><a class="dropdown-item" href="#">Telangana</a></li>
                            <li><a class="dropdown-item" href="#">Tripura</a></li>
                            <li><a class="dropdown-item" href="#">Uttar Pradesh</a></li>
                            <li><a class="dropdown-item" href="#">Uttarakhand</a></li>
                            <li><a class="dropdown-item" href="#">West Bengal</a></li>
                        </ul>
                    </div>
                </div>
                <!-- State dropdown ends here -->

                <!-- District dropdown starts here -->
                <div class="row">
                    <div class="btn-group dropend" style="width: 14%;">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 8%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Choose District
                        </button>
                        <ul class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                            <li><a class="dropdown-item" href="#">Ariyalur</a></li>
                            <li><a class="dropdown-item" href="#">Chengalpattu</a></li>
                            <li><a class="dropdown-item" href="#">Chennai</a></li>
                            <li><a class="dropdown-item" href="#">Coimbatore</a></li>
                            <li><a class="dropdown-item" href="#">Cuddalore</a></li>
                            <li><a class="dropdown-item" href="#">Dharmapuri</a></li>
                            <li><a class="dropdown-item" href="#">Dindigul</a></li>
                            <li><a class="dropdown-item" href="#">Erode</a></li>
                            <li><a class="dropdown-item" href="#">Kallakurichi</a></li>
                            <li><a class="dropdown-item" href="#">Kanchipuram</a></li>
                            <li><a class="dropdown-item" href="#">Kanyakumari</a></li>
                            <li><a class="dropdown-item" href="#">Karur</a></li>
                            <li><a class="dropdown-item" href="#">Krishnagiri</a></li>
                            <li><a class="dropdown-item" href="#">Madurai</a></li>
                            <li><a class="dropdown-item" href="#">Nagapattinam</a></li>
                            <li><a class="dropdown-item" href="#">Namakkal</a></li>
                            <li><a class="dropdown-item" href="#">Nilgiris</a></li>
                            <li><a class="dropdown-item" href="#">Perambalur</a></li>
                            <li><a class="dropdown-item" href="#">Pudukkottai</a></li>
                            <li><a class="dropdown-item" href="#">Ramanathapuram</a></li>
                            <li><a class="dropdown-item" href="#">Ranipet</a></li>
                            <li><a class="dropdown-item" href="#">Salem</a></li>
                            <li><a class="dropdown-item" href="#">Sivagangai</a></li>
                            <li><a class="dropdown-item" href="#">Tenkasi</a></li>
                            <li><a class="dropdown-item" href="#">Thanjavur</a></li>
                            <li><a class="dropdown-item" href="#">Theni</a></li>
                            <li><a class="dropdown-item" href="#">Thiruvallur</a></li>
                            <li><a class="dropdown-item" href="#">Thiruvarur</a></li>
                            <li><a class="dropdown-item" href="#">Thoothukudi</a></li>
                            <li><a class="dropdown-item" href="#">Tiruchirappalli</a></li>
                            <li><a class="dropdown-item" href="#">Tirunelveli</a></li>
                            <li><a class="dropdown-item" href="#">Tirupattur</a></li>
                            <li><a class="dropdown-item" href="#">Tiruppur</a></li>
                            <li><a class="dropdown-item" href="#">Tiruvannamalai</a></li>
                            <li><a class="dropdown-item" href="#">Vellore</a></li>
                            <li><a class="dropdown-item" href="#">Viluppuram</a></li>
                            <li><a class="dropdown-item" href="#">Virudhunagar</a></li>
                        </ul>
                    </div>
                </div>
                <!-- District dropdown ends here -->

                <!-- Block dropdown starts here -->
                <div class="row">
                    <div class="btn-group dropend" style="width: 14%;">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 8%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Choose Block
                        </button>
                        <ul class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                            <li><a class="dropdown-item" href="#">Chennai Central</a></li>
                            <li><a class="dropdown-item" href="#">Chennai North</a></li>
                            <li><a class="dropdown-item" href="#">Chennai South</a></li>
                            <li><a class="dropdown-item" href="#">Tondiarpet</a></li>
                            <li><a class="dropdown-item" href="#">Madhavaram</a></li>
                            <li><a class="dropdown-item" href="#">Ambattur</a></li>
                            <li><a class="dropdown-item" href="#">Anna Nagar</a></li>
                            <li><a class="dropdown-item" href="#">Teynampet</a></li>
                            <li><a class="dropdown-item" href="#">Kodambakkam</a></li>
                            <li><a class="dropdown-item" href="#">Valasaravakkam</a></li>
                            <li><a class="dropdown-item" href="#">Alandur</a></li>
                            <li><a class="dropdown-item" href="#">Adyar</a></li>
                            <li><a class="dropdown-item" href="#">Perungudi</a></li>
                            <li><a class="dropdown-item" href="#">Sholinganallur</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Block dropdown ends here -->

                <!-- Village dropdown starts here -->
                <div class="row">
                    <div class="btn-group dropend" style="width: 14%;">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 8%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Choose Village
                        </button>
                        <ul class="dropdown-menu" style="height: 20rem; overflow-y: scroll;">
                            <li><a class="dropdown-item" href="#">Chennai Central</a></li>
                            <li><a class="dropdown-item" href="#">Chennai North</a></li>
                            <li><a class="dropdown-item" href="#">Chennai South</a></li>
                            <li><a class="dropdown-item" href="#">Tondiarpet</a></li>
                            <li><a class="dropdown-item" href="#">Madhavaram</a></li>
                            <li><a class="dropdown-item" href="#">Ambattur</a></li>
                            <li><a class="dropdown-item" href="#">Anna Nagar</a></li>
                            <li><a class="dropdown-item" href="#">Teynampet</a></li>
                            <li><a class="dropdown-item" href="#">Kodambakkam</a></li>
                            <li><a class="dropdown-item" href="#">Valasaravakkam</a></li>
                            <li><a class="dropdown-item" href="#">Alandur</a></li>
                            <li><a class="dropdown-item" href="#">Adyar</a></li>
                            <li><a class="dropdown-item" href="#">Perungudi</a></li>
                            <li><a class="dropdown-item" href="#">Sholinganallur</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Village dropdown ends here -->

                <!-- Choose Datatype -->
                <div class = "row">
                    <div class="btn-group dropend" style="width: 14%;">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" style="margin-top: 8%;"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Choose DataType
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Add New</a></li>
                            <li><a class="dropdown-item" href="#">Heatwave</a></li>
                            <li><a class="dropdown-item" href="#">Coldwave</a></li>
                            <li><a class="dropdown-item" href="#">Nowcast</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- content box -->
                <div style="margin-top: 2%;">
                    <lable>Content</lable>
                    <textarea style="width: 32%; height: 7rem;"></textarea>
                </div>
                <!--  -->
                <!-- POST button -->
                <div style="margin-top: 3%;">
                    <button type="submit" class="btn btn-primary btn-sm" id="smsSendBtn">Send SMS</button>
                </div>
                <!--  -->


            </div>
            <!-- editing content ends here -->
            </div>
        </div>
    </section>
</div>

    <?php $this->load->view('Menu/template/footer_js_'); ?>
    
     <!-- Bootstrap JavaScript files -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" >
    </script>
    <!-- Bootstrap ends here -->
    <!-- leaflet Js -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- Leaflet AJAX Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>

    <!-- html2canvas / canvas2image -->
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/html2canvas/html2canvas.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>stylesheet/plugins/canvas2image/canvas2image.js">
    </script>
    <script>
    // 
    document.getElementById('smsSendBtn').addEventListener('click', function() {
        let SMS_var = "IMD report: Heavy rainfall in New Delhi with 10mm/hr";

        // Send SMS_var to controller using AJAX
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Response from server
                console.log(this.responseText);
            }
        };
        xhttp.open("POST", "<?php echo base_url('SMS_controller/SMS_post'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("SMS_var=" + encodeURIComponent(SMS_var));
    });
    </script>
<?php $this->load->view('Menu/template/footer_'); ?>