<!DOCTYPE html>
<html>


<body>
    <div class="row">
        <img src="iIMDlogo_Ipart.png" alt='IMD' class="imgCls col-8">
        <h1 class="title col-2">WEATHER DECISION SUPPORT SYSTEM</h1>
        <?php date_default_timezone_set('Asia/Kolkata');
              echo "<p class='istTime col-2'>" . date('d-m-y h:i a') . "</p>";
        ?>
    </div>
    <div>
        <img src="<?php echo base_url();?>pdf/<?php echo $image?>" />
        <!-- <img src="' + base_url + 'pdf/' + filename + '" style="page-break-before: always;" /> -->
    </div>
</body>

</html>