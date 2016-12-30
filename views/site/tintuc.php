<div class="page-header">
	<h3 style="color:#86B545">Tin Tức</h3>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<div class="row">
		<?php
		for($i=0;$i<2 && $i<count($tintucs);$i++)
		{
			?>
			<div class="col-xs-12 col-md-12" style="padding:5px">
				<table style="width:100%;padding:5px">
					<tr>
						<td style="width:200px">
							<a href="/<?=rewrite($tintucs[$i]['blog_name'])?>-<?=$tintucs[$i]['blog_id']?>.html" >
								<img style="width:190px" src="<?=$tintucs[$i]['blog_image']?>" />
							</a>
						</td>
						<td>
							<a href="/<?=rewrite($tintucs[$i]['blog_name'])?>-<?=$tintucs[$i]['blog_id']?>.html">
								<b style="color:#86B545"><?=$tintucs[$i]['blog_name']?></b>
							</a>
							<br/>
							<i><?=get_excerpt($tintucs[$i]['blog_content'])?></i>
							<a style="color:#86B545" href="/<?=rewrite($tintucs[$i]['blog_name'])?>-<?=$tintucs[$i]['blog_id']?>.html" > Xem Thêm &gt;&gt;
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
		for($i=2;$i<count($tintucs);$i++)
		{
			?>
			<div class="col-xs-12 col-md-12" style="padding:5px">
				<table style="width:100%;padding:5px">
					<tr>
						<td style="width:80px">
							<a href="/<?=rewrite($tintucs[$i]['blog_name'])?>-<?=$tintucs[$i]['blog_id']?>.html" >
								<img style="width:70px" src="<?=$tintucs[$i]['blog_image']?>" />
							</a>
						</td>
						<td>
							<a href="/<?=rewrite($tintucs[$i]['blog_name'])?>-<?=$tintucs[$i]['blog_id']?>.html">
								<b style="color:#86B545"><?=$tintucs[$i]['blog_name']?></b>
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