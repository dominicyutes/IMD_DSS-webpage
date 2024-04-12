<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IMD DSS</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    h2 {
        font-style: 10px;
    }
    </style>
</head>

<body>

    <div>
        <br>
        <br>
        <h2>Email_form</h2>
        <div>
            <form method="POST" action="<?=base_url('email/send_email')?>">
                <!-- <lable>Name</lable> -->
                <!-- <input type="text" id="name" name="name" /> -->
                <br>
                <!-- <lable>Subject</lable> -->
                <!-- <input type="text" id="subject" name="subject" /> -->
                <br>
                <!-- <lable>Message</lable> -->
                <!-- <input type="text" id="message" name="message" /> -->
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>