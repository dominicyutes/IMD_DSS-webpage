<!DOCTYPE html>
<html>


<body style="text-align: center;">

    <div style="display: flex; align-items: center; justify-content: center; height: 75vh; margin-bottom: 10px;">
        <img src="img/imd_logo.png" alt="Emblem of India" height="60" style="display: block; margin: 0 auto;">
        <img src="https://mausam.imd.gov.in/responsive/img/logo/imd150t.png" height="50" alt="IMD_150">
    </div>

    <div style="font-family: 'Times New Roman'; color: black; font-size: 13px; text-align: center;">
        <strong>Government of India</strong><br>
        <strong>Earth System Science Organization</strong><br>
        <strong>Ministry of Earth Sciences</strong><br>
        <strong>India Meteorological Department</strong><br><br>
        <strong style="color:darkblue; font-size: 18px;">WEATHER DECISION SUPPORT SYSTEM (DSS)</strong><br>
        <strong style="color:red; font-size: 12px;">Lightning/Last 00-05 min <span style="color:green; font-size: 12px;">yy/mm/dd hh/mm</span></strong>

    </div>

    <?php
// date_default_timezone_set('Asia/Kolkata');

// $date = date('d M Y');
// $time = date('h:i A');
// $year = date('Y');

// echo "<div class='istTime col-2' style='margin-top: -10px;font-size: 10px;'> <!-- Adjust the margin-top value as needed -->
//         <p>Date: $date | Time: $time | Year: $year</p>
//       </div>";
?>


    <div>
        <img src="<?php echo base_url();?>pdf/<?php echo $image?>" />
        <!-- <img src="' + base_url + 'pdf/' + filename + '" style="page-break-before: always;" /> -->
    </div>

    <?php
    // echo $this->session->userdata('div_content'); 
    ?>
<img src="img/lighting.jpg" alt="">
    <div style="text-align: center; color: green; font-size: 5px; font-weight: bold;">
        <p><strong><a href="https://mausam.imd.gov.in/" style="color: blue;">For more details, kindly visit</a></strong>
            <span style="color: red;">https://mausam.imd.gov.in/ </span><span style="color: blue;">or contact:
            </span><span style="color: red;">011-2434-4599</span>
        </p>
        <p style="color: green;"><strong>(Service to the Nation since 1875)</strong></p>
    </div>


</body>

</html>