<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post to Facebook</title>
</head>

<body>
    <h2>Post to Facebook</h2>
    <!-- Your HTML markup -->
    <button id="postToFacebookBtn">Post Image to Facebook</button>

    <script>
    // JavaScript to handle button click event
    document.getElementById('postToFacebookBtn').addEventListener('click', function() {
        // Send AJAX request to post image to Facebook
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo base_url('Facebook_post/post_image'); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                //
                alert('Image posted to Facebook successfully!');
            } else {
                //
                alert('Error posting image to Facebook: ' + xhr.responseText);
                console.log(xhr.responseText, "xhr.responseText");
            }
        };
        xhr.send();
    });
    </script>

</body>

</html>