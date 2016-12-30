<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
         </div>
         <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
               <li>
                  <a href="/">Trang Chủ</a>
               </li>
               <li>
                  <a href="/gioi-thieu-1.html">Giới Thiệu</a>
               </li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dịch Vụ Kế Toán
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
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
         </div>
      </div>
   </nav>
</div>