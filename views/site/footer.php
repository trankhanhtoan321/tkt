<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid" style="background-image:url('/uploads/icons/bg.jpg');color:#000;">
	<div class="row" style="padding-top:15px;padding-bottom: 15px;">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<?php $this->load->view('site/contact'); ?>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<!-- <h4 style="color:#000">SOCIAL</h4>
			<i style="font-size:40px;" class="fa fa-facebook-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-google-plus-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-youtube-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-skype" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-twitter-square" aria-hidden="true"></i> -->
			<?php $this->load->view('site/page_facebook'); ?>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
		<h4 style="color:#000">DỊCH VỤ KẾ TOÁN TẠI NHÀ</h4>
			<?php foreach($dichvuketoans as $dvkt){ ?>
			<a style="color:#000;" href="/<?=rewrite($dvkt['blog_name'])?>-<?=$dvkt['blog_id']?>.html"><?=$dvkt['blog_name']?></a><br/>
			<?php } ?>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<?php $this->load->view('site/subscribe_email'); ?>
			<?php $this->load->view('site/thong_ke_truy_cap'); ?>
		</div>
	</div>
</div>
<?php $this->load->view('site/footer_script'); ?>