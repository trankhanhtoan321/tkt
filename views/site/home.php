<div class="container text-center">
	<h3 style="color:#86B545;font-weight:bold;">Dịch Vụ Kế Toán Tại Nhà</h3>
	<div class="row">
		<?php $dem=0; foreach($dichvuketoans as $dv){ ?>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="thumbnail">
				<a style="color:#86B545;font-weight:bold;" href="/<?=rewrite($dv['blog_name'])?>-<?=$dv['blog_id']?>.html">
					<img style="width:250px;height:200px;" src="<?=$dv['blog_image']?>" />
					<font style="color:#86B545;font-weight:bold;"><?=$dv['blog_name']?></font>
				</a>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<div class="container-fluid" style="background-color:#F0F0F0;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-header"><h3><a style="color:#86B545" href="/kinh-nghiem-5-cat.html">Kinh Nghiệm Kế Toán</a> | <a href="/kinh-nghiem-5-cat.html"><small>Xem Tất Cả</small></a></h3></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6" style="padding-right:15px;">
				<img class="img-responsive" style="width:100%;max-height:400px;" src="<?=$kinhnghiems[0]['blog_image']?>" /><br/>
				<a style="color:#86B545;font-weight:bold;" href="/<?=rewrite($kinhnghiems[0]['blog_name'])?>-<?=$kinhnghiems[0]['blog_id']?>.html">
					<?=$kinhnghiems[0]['blog_name']?>
				</a>
				<p>
					<i><?=get_excerpt($kinhnghiems[0]['blog_content'],255)?></i>
					<a class="btn btn-success" href="/<?=rewrite($kinhnghiems[0]['blog_name'])?>-<?=$kinhnghiems[0]['blog_id']?>.html">Xem Thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
				</p>
				<p><?=$kn_pagination?></p>
			</div>
			<?php for($i=1;$i<count($kinhnghiems);$i++){ ?>
			<div class="col-xs-12 col-sm-6 col-md-6" style="padding:5px;padding-left:15px;">
				<table>
					<tr>
						<td><img style="width:150px;height:100px;" src="<?=$kinhnghiems[$i]['blog_image']?>" /></td>
						<td style="padding:5px;">
							<a style="color:#86B545;font-weight:bold;" href="/<?=rewrite($kinhnghiems[0]['blog_name'])?>-<?=$kinhnghiems[0]['blog_id']?>.html">
								<?=$kinhnghiems[$i]['blog_name']?>
							</a><br/>
							<i><?=get_excerpt($kinhnghiems[0]['blog_content'],200)?></i>
						</td>
					</tr>
				</table>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-header"><h3><a style="color:#86B545" href="/tin-tuc-4-cat.html">Tin Tức Kế Toán</a> | <a href="/kinh-nghiem-5-cat.html"><small>Xem Tất Cả</small></a></h3></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6" style="padding-right:15px;">
				<img class="img-responsive" style="width:100%;max-height:400px;" src="<?=$tintucs[0]['blog_image']?>" /><br/>
				<a style="color:#86B545;font-weight:bold;" href="/<?=rewrite($tintucs[0]['blog_name'])?>-<?=$tintucs[0]['blog_id']?>.html">
					<?=$tintucs[0]['blog_name']?>
				</a>
				<p>
					<i><?=get_excerpt($tintucs[0]['blog_content'],255)?></i>
					<a class="btn btn-success" href="/<?=rewrite($tintucs[0]['blog_name'])?>-<?=$tintucs[0]['blog_id']?>.html">Xem Thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
				</p>
				<p><?=$tt_pagination?></p>
			</div>
			<?php for($i=1;$i<count($tintucs);$i++){ ?>
			<div class="col-xs-12 col-sm-6 col-md-6" style="padding:5px;padding-left:15px;">
				<table>
					<tr>
						<td><img style="width:150px;height:100px;" src="<?=$tintucs[$i]['blog_image']?>" /></td>
						<td style="padding:5px;">
							<a style="color:#86B545;font-weight:bold;" href="/<?=rewrite($tintucs[$i]['blog_name'])?>-<?=$tintucs[$i]['blog_id']?>.html">
								<?=$tintucs[$i]['blog_name']?>
							</a><br/>
							<i><?=get_excerpt($tintucs[$i]['blog_content'],200)?></i>
						</td>
					</tr>
				</table>
			</div>
			<?php } ?>
		</div>
	</div>
</div>