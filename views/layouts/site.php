<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=isset($SEO_title)?$SEO_title:''?></title>
    <meta name="Description" content="<?=isset($SEO_descriptiton)?$SEO_descriptiton:''?>">
    <meta name="Keywords" content="<?=isset($SEO_keyword)?$SEO_keyword:''?>">
    <meta name="google-site-verification" content="<?=$this->setting_model->tkt_get('google_site_verification')?>" />
    <meta name="author" content="<?=$this->setting_model->tkt_get('author')?>" />
    <!-- css -->
    <link href="/style/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/style/style.css" rel="stylesheet">
    <link href="/lib/ri-grid/css/style.css" rel="stylesheet" />
    <!-- script -->
    <script src="/js/jquery.min.js"></script>
    <script src="/style/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib/ri-grid/js/modernizr.custom.26633.js"></script>
</head>
<body>
   <?php
   $this->load->view('site/main_menu',$_varibles);
   $this->load->view('site/sidenav',$_varibles);
   $this->load->view($_content,$_varibles);
   $this->load->view('site/footer',$_varibles);
   ?>
   <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/58a3e83757ed180aac1a2ba9/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- facebook -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1765825137022819";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!--/facebook-->
    <!-- gridimage -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/ri-grid/js/jquery.gridrotator.js"></script>
    <script type="text/javascript"> 
        $(function() {
        
            $( '#ri-grid' ).gridrotator( {
                rows        : 2,
                columns     : 5,
                animType    : 'random',
                animSpeed   : 3000,
                interval    : 1000,
                step        : 1,
                w320        : {
                    rows    : 1,
                    columns : 2
                },
                w240        : {
                    rows    : 1,
                    columns : 2
                }
            } );
        });
    </script>
    <!-- /gridimage -->
</body>
</html>
