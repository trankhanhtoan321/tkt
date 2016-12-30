<div class="page-header">
	<h3 style="color:#86B545">Kinh Nghiệm Kế Toán</h3>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<div class="row">
		<?php
		for($i=0;$i<2 && $i<count($kinhnghiems);$i++)
		{
			?>
			<div class="col-xs-12 col-md-12" style="padding:5px">
				<table style="width:100%;padding:5px">
					<tr>
						<td style="width:200px">
							<a href="/<?=rewrite($kinhnghiems[$i]['blog_name'])?>-<?=$kinhnghiems[$i]['blog_id']?>.html" >
								<img style="width:190px" src="<?=$kinhnghiems[$i]['blog_image']?>" />
							</a>
						</td>
						<td>
							<a href="/<?=rewrite($kinhnghiems[$i]['blog_name'])?>-<?=$kinhnghiems[$i]['blog_id']?>.html">
								<b style="color:#86B545"><?=$kinhnghiems[$i]['blog_name']?></b>
							</a>
							<br/>
							<i><?=get_excerpt($kinhnghiems[$i]['blog_content'])?></i>
							<a style="color:#86B545" href="/<?=rewrite($kinhnghiems[$i]['blog_name'])?>-<?=$kinhnghiems[$i]['blog_id']?>.html" > Xem Thêm &gt;&gt;
							</a>
						</td>
					</tr>
				</table>
			</div>
			<?php
		}
		?>
		</div>
	</div>
	<div class="col-xs-12 col-md-4" style="padding:5px;">
		<div class="row">
		<?php
		for($i=2;$i<count($kinhnghiems);$i++)
		{
			?>
			<div class="col-xs-12 col-md-12" style="padding:5px">
				<table style="width:100%;padding:5px">
					<tr>
						<td style="width:80px">
							<a href="/<?=rewrite($kinhnghiems[$i]['blog_name'])?>-<?=$kinhnghiems[$i]['blog_id']?>.html" >
								<img style="width:70px" src="<?=$kinhnghiems[$i]['blog_image']?>" />
							</a>
						</td>
						<td>
							<a href="/<?=rewrite($kinhnghiems[$i]['blog_name'])?>-<?=$kinhnghiems[$i]['blog_id']?>.html">
								<b style="color:#86B545"><?=$kinhnghiems[$i]['blog_name']?></b>
							</a>
						</td>
					</tr>
				</table>
			</div>
			<?php
		}
		?>
		</div>
	</div>
</div>