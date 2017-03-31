<div class="container-fluid">
	<div class="row parallax1 text-center">
		<div class="page-header" style="color:#fff;">
			<h1><b>HÌNH ẢNH TRẢI NGHIÊM TẠI AEC</b></h1>
			<small>Những hình ảnh đặc biệt được ghi lại từ các hoạt động trong lớp học cũng như hoạt động ngoại khóa, hoạt động xã hội của học viên AEC</small>
		</div>
		<div id="ri-grid" class="ri-grid ri-grid-size-2">
			<img class="ri-loading-image" src="/lib/ri-grid/images/loading.gif"/>
			<ul>
				<?php
				foreach ($hinh_anh_trai_nghiem_s as $hinh_anh) {
					?>
					<li><a href="#"><img src="/uploads/images/hinh_anh_trai_nghiem/<?php echo $hinh_anh; ?>" /></a></li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>
</div>