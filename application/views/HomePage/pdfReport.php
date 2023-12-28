<!DOCTYPE html>
<html>


<body>
    <div class="row">
        <img src='https://mausam.imd.gov.in/responsive/img/logo/imd_logo_a.png' alt='IMD' class="imgCls col-8">
        <h1 class="title col-2">WEATHER DECISION SUPPORT SYSTEM</h1>
        <p class="istTime col-2"><?php echo date('d-m-y h:i:s');?></p>
    </div>
    <div>
        <img src="<?php echo base_url();?>pdf/<?php echo $data?>" />
    </div>
</body>

</html>