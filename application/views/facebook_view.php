<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMD DSS</title>
    <link rel="shortcut icon" href="https://mausam.imd.gov.in/responsive/img/logo/imd_icon.ico">
</head>

<body>
    <h2>Post to Facebook</h2>
    <button id="postToFacebookBtn">Facebook</button>

    <script>
    // let img = 'http://localhost/IMD_DSS-webpage/assets/images/Facebook-logo.png';

    document.getElementById('postToFacebookBtn').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo base_url('Facebook_post/post_info'); ?>', true);
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('Image posted to Facebook successfully!');
            } else {
                // alert('Error posting image to Facebook: ' + xhr.responseText);
                console.log(xhr.responseText, "xhr.responseText");
            }
        };
        xhr.send();
        // xhr.send(JSON.stringify({
        //     img: img
        // }));
    });
    </script>

</body>

</html>