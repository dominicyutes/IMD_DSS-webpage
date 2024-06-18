<!-- <?php if ($this->session->userdata('is_loggedin') == TRUE) { ?> -->

<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
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
        /* zoom: 100%; */
        overflow-x: hidden;
        font-family: "Lato", sans-serif;
    }


    /*  */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid #dddddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    /*  */
    </style>
</head>

<body>
    <?php $this->load->view('Menu/template/header_'); ?>
    <?php $this->load->view('Menu/template//sidebar_'); ?>


    <div class="content-wrapper">
        <section class="content">
            <!-- editing content starts here -->
            <div>
                <div style="background-color: #f5fdfd">
                    <br>
                    <h2 class="text-center">EMAIL DISSEMINATIOIN</h2>

                    <div>
                        <!--  -->
                        <div class="container" id="emailLogTable" style="width: max-content;">
                            <div class="row">
                                <br>
                                <h3>Email Log Table</h3>
                                <br />
                                <div class="table-responsive" style="max-height: 450px;">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Mail From</th>
                                                <th>Mail To</th>
                                                <th>Sent</th>
                                                <th>Time</th>
                                                <th>File Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 $i = 1;
                                                 foreach ($result as $row) {
                                                     echo '<tr>
                                                             <td>' . $i++ . '</td>
                                                             <td>' . $row['email_from'] . '</td>
                                                             <td>' . $row['email_to'] . '</td>
                                                             <td>' . ($row['sent'] ? 'Sent' : 'Not Sent') . '</td>
                                                             <td>' . (isset($row['sent_time']) ? date('Y-m-d H:i:s', strtotime($row['sent_time'])) : '') . '</td>
                                                             <td>' . $row['file_name'] . '</td>
                                                            </tr>';
                                                 }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <br>
                            <button class="btn btn-primary" id="getBackToEmail">Back</button>
                        </div>


                    </div>
                </div>
            </div>
            <!-- editing content ends here -->
        </section>

    </div>

    <?php $this->load->view('Menu/template/footer_js_'); ?>
</body>
<script>
document.getElementById("getBackToEmail").addEventListener("click", function() {
    window.location = "<?php echo site_url('Email/index'); ?>";
});
</script>

</html>

<!-- <?php } ?> -->