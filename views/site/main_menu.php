<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<nav class="navbar navbar-default navbar-fixed-top" style="font-size:16px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/">
         <img class="img-responsive" style="height:50px;padding:0" src="<?=$this->setting_model->tkt_get('logo')?>" />
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li><a href="/">Trang Chủ</a></li>
        <li><a href="/gioi-thieu-1.html">Giới Thiệu</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dịch Vụ <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <?php
            foreach($dichvuketoans as $dvkt)
            {
               ?>
               <li><a href="/<?=rewrite($dvkt['blog_name'])?>-<?=$dvkt['blog_id']?>.html"><?=$dvkt['blog_name']?></a></li>
               <?php
            }
            ?>
          </ul>
        </li>
        <li>
            <a href="/tin-tuc-4-cat.html">Tin Tức</a>
         </li>
         <li>
            <a href="/kinh-nghiem-5-cat.html">Kinh Nghiệm Kế Toán</a>
         </li>
         <li>
            <a href="/lien-he-2.html">Liên Hệ</a>
         </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-success" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>
<div style="height:50px"></div>