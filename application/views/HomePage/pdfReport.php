<!DOCTYPE html>
<html>


<body>
    <div class="row">
        <img src="iIMDlogo_Ipart.png" alt='IMD' class="imgCls col-8">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <div style="display: flex; align-items: center;">
                <img src="img/emblem.png" alt="IMD logo" height="25">
                <span class="text" style="font-family: 'Times New Roman'; color: black; font-size: 25px;">WEATHER
                    DECISION SUPPORT SYSTEM</span>
                <img src="img/imd_logo.png" alt="Emblem of India" height="25">
            </div>
        </div>
    </div>
    <?php
date_default_timezone_set('Asia/Kolkata');

$date = date('d-m-y');
$time = date('h:i a');
$year = date('Y');

echo "<p class='istTime col-2'>Date: $date<br>Time: $time<br>Year: $year</p>";
?>
    <div>
        <img src="<?php echo base_url();?>pdf/<?php echo $image?>" />
        <!-- <img src="' + base_url + 'pdf/' + filename + '" style="page-break-before: always;" /> -->
    </div>
    <div style="display: flex; align-items: center;">
        <h1>Legend</h1>
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

</body>

</html>