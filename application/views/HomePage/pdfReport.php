<!DOCTYPE html>
<html>


<body style="text-align: center;">

<div style="display: flex; align-items: center; justify-content: center; height: 75vh; margin-bottom: 10px;">
    <img src="img/imd_logo.png" alt="Emblem of India" height="100" style="display: block; margin: 0 auto;">
</div>

<div style="font-family: 'Times New Roman'; color: black; font-size: 15px; text-align: center;">
    <strong>Government of India</strong><br>
    <strong>Earth System Science Organization</strong><br>
    <strong>Ministry of Earth Sciences</strong><br>
    <strong>India Meteorological Department</strong>
</div>

<?php
date_default_timezone_set('Asia/Kolkata');

$date = date('d M Y');
$time = date('h:i A');
$year = date('Y');

echo "<div class='istTime col-2' style='margin-top: -10px;'> <!-- Adjust the margin-top value as needed -->
        <p>Date: $date | Time: $time | Year: $year</p>
      </div>";
?>


    <div>
        <img src="<?php echo base_url();?>pdf/<?php echo $image?>" />
        <!-- <img src="' + base_url + 'pdf/' + filename + '" style="page-break-before: always;" /> -->
    </div>
    <div style="display: flex; align-items: center;">
        <span style="display: flex; flex-direction: row; font-family: Arial, sans-serif;">
            <span
                style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #32ff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0">0-10</span>
            <span
                style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #fcff36; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0">30-35</span>
            <span
                style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ffad2d; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0">35-40</span>
            <span
                style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: rgb(254, 101, 49, 1); color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0">40-45</span>
            <span
                style="align-items: center; width:30px; height:18px; border-radius: 15%; background-color: #ff3737; color:black; font-weight:bolder; padding:2px; font-size:10px; margin-right: 10px; margin-right: 0">>45</span>
        </span>
    </div>
    
    <div style="text-align: center; color: green; font-size: 5px; font-weight: bold;">
    <p style="color: red;"><strong>* Red colour warning does not mean "Red Alert", Red colour warning means "Take Action".</strong></p>
    <p style="color: blue;"><strong>Forecast and Warning for any day is valid from 0830 hours IST of day till 0830 hours IST of next day.</strong></p>
    <p><strong><a href="https://mausam.imd.gov.in" style="color: blue;">For more details, kindly visit</a></strong> <span style="color: red;">https://mausam.imd.gov.in</span><span style="color: blue;">or contact: </span><span style="color: red;">011-2434-4599</span></p>
    <p style="color: green;"><strong>(Service to the Nation since 1875)</strong></p>
</div>


</body>

</html>