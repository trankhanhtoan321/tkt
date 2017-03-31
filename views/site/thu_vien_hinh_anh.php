<?php
$images = get_filenames('uploads/images/hinh_anh_trai_nghiem/');
?>
<div class="container-fluid">
	<h1 class="page-header">Hình Ảnh Trung Tâm</h1>
	<div class="row">
		<?php $dem=0; foreach($images as $img){ $dem++;?>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<a href="/uploads/images/hinh_anh_trai_nghiem/<?=$img?>" target="_blank">
				<img class="img-thumbnail" style="width:400px;height:300px;padding:5px;" src="/uploads/images/hinh_anh_trai_nghiem/<?=$img?>" />
			</a>
		</div>
		<?php } ?>
	</div>
</div>