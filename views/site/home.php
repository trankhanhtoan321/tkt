<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*---------------------------------------------------------------*/
$slides['slides'] = $slides;
$this->load->view('widgets/slider',$slides);
$slides = NULL;
/*-------------------------------------------------------------*/
?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3">
			<?php $this->load->view('widgets/form_registration'); ?>
		</div>
		<div class="col-xs-12 col-sm-9 col-md-9">
			<h1 class="text-center" style="color:#0082C8">Lớp Học Sắp Khai Giảng</h1>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Tên Lớp Học</th>
						<th>Thời Gian</th>
						<th>Ngày Khai Giảng</th>
						<th>Học Phí</th>
					</tr>
				</thead>
				<tbody>
					<?php $dem=1; foreach($courses as $course){ ?>
					<tr>
						<td><?=$dem++?></td>
						<td><?=$course['kh_ten']?></td>
						<td><?=$course['kh_time']?></td>
						<td><?=date("d/m/Y",$course['kh_ngaykhaigiang'])?></td>
						<td style="color:red;font-weight: bold;"><?=number_format($course['kh_hocphi'])." VND"?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row" style="background-color:#CCFFD1;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12" style="text-align:center;color:#0082C8;">
					<h2><b>HỌC GIAO TIẾP TIẾNG ANH, TẠI SAO NÊN TRẢI NGHIỆM TẠI AEC?</b></h2>
				</div>
				<div class="col-sm-6">
					<img class="img-responsive img-thumbnail" src="/uploads/lophoc.jpg"/>
				</div>
				<div class="col-sm-6">
					<br/><br/>
					<font color="blue"><b><span class="glyphicon glyphicon-star"></span> CHẤT LƯỢNG</b></font><br/>
					<i>Từng bước hoàn thiện và nâng cao chất lượng học viên.</i><br/><br/>
					<font color="blue"><b><span class="glyphicon glyphicon-star"></span> UY TÍN</b></font><br/>
					<i>Tạo sự tín nhiệm nơi học viên. Nâng cao uy tín của trung tâm AEC.</i><br/><br/>
					<font color="blue"><b><span class="glyphicon glyphicon-star"></span> TẬN TÂM</b></font><br/>
					<i>Tận tâm chăm sóc cho từng học viên với niềm đam mê, nhiệt huyết và trí tuệ.</i><br/><br/>
					<font color="blue"><b><span class="glyphicon glyphicon-star"></span> SÁNG TẠO</b></font><br/>
					<i>Sáng tạo trong công việc, cùng chia sẻ niềm vui, tạo động lực và nâng cao hiệu quả trong công việc.</i><br/><br/>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$cam_nhan_hoc_vien_s['cam_nhan_hoc_vien_s'] = $cam_nhan_hoc_vien_s;
$this->load->view('site/cam_nhan_hoc_vien',$cam_nhan_hoc_vien_s);
$cam_nhan_hoc_vien_s = NULL;
/*----------------------------------------------*/
$tintucs['tintucs'] = $tintucs;
$this->load->view('site/tintuc',$tintucs);
$tintucs=NULL;
/*---------------------------------------------*/
$hinh_anh_trai_nghiem_s['hinh_anh_trai_nghiem_s'] = $hinh_anh_trai_nghiem_s;
$this->load->view('widgets/grid_image',$hinh_anh_trai_nghiem_s);
$hinh_anh_trai_nghiem_s = NULL;
/*-----------------------------------------------*/
?>