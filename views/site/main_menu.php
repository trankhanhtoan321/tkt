<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<nav class="navbar navbar-default navbar-fixed-top" style="font-size:16px;border-bottom:1px solid #0082C8;">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <img class="img-responsive" style="height:50px;padding:0" src="<?=$this->setting_model->tkt_get('logo')?>" />
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="/"><i class="fa fa-home"></i> Trang Chủ</a></li>
            <li><a href="/gioi-thieu-1.html"><i class="fa fa-info-circle"></i> Giới Thiệu</a></li>
            <li><a href="/lich-khai-giang-2.html"><i class="fa fa-calendar"></i> Lịch Khai Giảng</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-book"></i> Chương Trình Đạo Tạo</a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/anh-van-giao-tiep-3.html"><i class="fa fa-users"></i> Anh Văn Giao Tiếp</a></li>
                    <li><a href="/luyen-thi-toeic-4.html"><i class="fa fa-graduation-cap"></i> Luyện Thi TOEIC</a></li>
                    <li><a href="/tin-hoc-ung-dung-5.html"><i class="fa fa-laptop"></i> Tin Học Ứng Dụng</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-life-ring"></i> Thư Viện</a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/tai-lieu-toeic-10-cat.html"><i class="fa fa-file"></i> Tài Liệu TOEIC</a></li>
                    <li><a href="#"><i class="fa fa-search"></i> Tra Cứu Điểm Thi</a></li>
                    <li><a href="/thu-vien-hinh-anh.html"><i class="fa fa-picture-o"></i> Hình Ảnh Trung Tâm</a></li>
                </ul>
            </li>
            <li><a href="/tin-tuc-9-cat.html"><i class="fa fa-bullhorn"></i> Tin Tức</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/login"><i class="fa fa-user"></i> Đăng Nhập</a></li>
        </ul>
    </div>
</div>
</nav>
<div style="height:50px"></div>