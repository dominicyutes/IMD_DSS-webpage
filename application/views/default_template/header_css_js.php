<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SATARK Portal</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" csrf_hash="<?php echo $this->security->get_csrf_hash(); ?>" csrf_name="<?php echo $this->security->get_csrf_token_name(); ?>" />
        
        

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        
        <!-- datepicker -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" >
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheet/dist/css/daterangepicker.css" >

        
    </head>
    

