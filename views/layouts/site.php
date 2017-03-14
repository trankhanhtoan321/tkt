<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=isset($SEO_title)?$SEO_title:''?></title>
    <meta name="Description" content="<?=isset($SEO_descriptiton)?$SEO_descriptiton:''?>">
    <meta name="Keywords" content="<?=isset($SEO_keyword)?$SEO_keyword:''?>">
    <meta name="google-site-verification" content="<?=$this->setting_model->tkt_get('google_site_verification')?>" />
    <!-- /Meta, title. -->

    <!-- css -->
    <!-- Bootstrap -->
    <link href="/style/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="/style/style.css" rel="stylesheet">
    <!-- /css -->

    <!-- script neccessary -->
    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/style/bootstrap/js/bootstrap.min.js"></script>
    <!-- /script -->
</head>

<body>
   <?php $this->load->view('site/main_menu',$_varibles); ?>
   <?php if($_content=='site/home') $this->load->view('site/slider',$_varibles); ?>
   <?php $this->load->view($_content,$_varibles); ?>
   <?php $this->load->view('site/footer',$_varibles); ?>
   <?php $this->load->view('site/footer_script',$_varibles); ?>
</body>
</html>
