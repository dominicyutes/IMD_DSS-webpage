<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SATARK Portal</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- multiselect -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/bootstrap-multiselect.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/dist/css/AdminLTE.min.css">        
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/dist/css/system_custom.css">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>stylesheet/images/rimes.ico">
        <!-- loading buttons -->
         <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/loading-btn.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/loading.css">
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
    </head>

