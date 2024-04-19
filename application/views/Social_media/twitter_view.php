<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">

    <!-- Bootstrap starts here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Bootstrap ends here -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    body {
        width: 100%;
        height: 100vh;
        zoom: 80%;
        overflow: hidden;
        font-family: "Lato", sans-serif;
    }

    .text {
        font-family: 'Archivo', sans-serif;
        font-size: 2em;
        font-weight: 600;
        color: white;
        letter-spacing: 3px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fixedHead {
        background: linear-gradient(109.6deg, rgb(44, 83, 131) 18.9%, rgb(95, 175, 201) 91.1%);
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 60px;
        width: 100%;
        position: relative;
    }

    .sidebar {
        height: 54rem;
        width: 11%;
        background-color: #2c5383;
    }

    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 13px;
        color: white;
        display: block;
        width: max-content;
    }

    .sidebar a:hover {
        color: white;
    }

    .dropdown-content {
        display: none;
        padding-left: 20px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>
</head>

<body>
    <div style="height: 100%;">
        <div class="fixedHead">
            <!-- Landing_page title logo> -->
            <?php $this->load->view('Menu/Landing_page_top'); ?>
        </div>


        <div class="row">
            <!-- Landing_page sidebar> -->
            <?php $this->load->view('Menu/Landing_page_side'); ?>


            <!-- editing content starts here -->
            <div class="col-9" style="width: 88%">
                <h2>Post to Twitter</h2>
                <button id="postToFacebookBtn">Twitter</button>
            </div>
            <!-- editing content ends here -->

        </div>
    </div>

    <script>
    // let img = 'http://localhost/IMD_DSS-webpage/assets/images/Facebook-logo.png';

    // document.getElementById('postToFacebookBtn').addEventListener('click', function() {
    //     var xhr = new XMLHttpRequest();
    //     xhr.open('POST', '<?php echo base_url('Facebook_post/post_info'); ?>', true);
    //     xhr.setRequestHeader("Content-Type", "application/json");

    //     xhr.onload = function() {
    //         if (xhr.status === 200) {
    //             alert('Image posted to Facebook successfully!');
    //         } else {
    //             // alert('Error posting image to Facebook: ' + xhr.responseText);
    //             console.log(xhr.responseText, "xhr.responseText");
    //         }
    //     };
    //     xhr.send();
    // xhr.send(JSON.stringify({
    //     img: img
    // }));
    // });
    </script>
</body>

</html>