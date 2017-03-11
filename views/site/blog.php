<br/>
<div class="container">
	<div class="jumbotron">
		<h1 style="color:#86B545"><?=$blog['blog_name']?></h1>
		<?=$blog['blog_content']?>
		<hr/>
		<h4 style="color:#86B545;font-weight: bold;">Bài Viết Khác:</h4>
		<?php foreach($blogrelateds as $temp){ ?>
			<a style="color:#86B545" href="/<?=rewrite($temp['blog_name'])?>-<?=$temp['blog_id']?>.html"><i class="glyphicon glyphicon-ok"></i> <?=$temp['blog_name']?></a><br/>
		<?php } ?>
		<hr/>
		<h4 style="color:#86B545;font-weight: bold;">Bài Viết Mới:</h4>
		<?php for($i = 0;$i < 5 && $i < count($blognews); $i++){ ?>
			<a style="color:#86B545" href="/<?=rewrite($blognews[$i]['blog_name'])?>-<?=$blognews[$i]['blog_id']?>.html"><i class="glyphicon glyphicon-ok"></i> <?=$blognews[$i]['blog_name']?></a><br/>
		<?php } ?>
		<hr/>
		<div class="row" style="color:#86B545">
			<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
				<h4 style="color:#86B545;font-weight: bold;">Dịch Vụ Kế Toán Tại Nhà</h4>
				<i class="fa fa-user"></i> Kế Toán Trưởng: <i>Đỗ Hằng</i><br/>
				<i class="fa fa-phone"></i> Số Điện Thoại: <i>0937 31 91 94 - 0965 71 48 78</i><br/>
				<i class="fa fa-envelope"></i> Email: <i>dvkthang@yahoo.com</i><br/>
				<i class="fa fa-map-marker"></i> Địa Chỉ: <i>56 Đường D2, Phường 25, Quận Bình Thạnh, Tp HCM</i><br/>
			</div>
			<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
				<div class="fb-like" data-href="<?=current_url()?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				<div class="fb-comments" data-href="<?=current_url()?>" data-width="100%" data-numposts="10"></div>
			</div>
		</div>
	</div>
</div>