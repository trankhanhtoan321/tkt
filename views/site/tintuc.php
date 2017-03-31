<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-header"><h3><a style="color:#0082C8" href="/tin-tuc-4-cat.html">Tin Tức</a></h3></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6" style="padding-right:15px;">
				<img class="img-responsive" style="width:100%;max-height:400px;" src="<?=$tintucs[0]['blog_image']?>" /><br/>
				<a style="color:#0082C8;font-weight:bold;" href="/<?=rewrite($tintucs[0]['blog_name'])?>-<?=$tintucs[0]['blog_id']?>.html">
					<?=$tintucs[0]['blog_name']?>
				</a>
				<p>
					<i><?=get_excerpt($tintucs[0]['blog_content'],255)?></i>
				</p>
			</div>
			<?php for($i=1;$i<count($tintucs);$i++){ ?>
			<div class="col-xs-12 col-sm-6 col-md-6" style="padding:5px;padding-left:15px;">
				<table>
					<tr>
						<td><img style="width:150px;height:100px;" src="<?=$tintucs[$i]['blog_image']?>" /></td>
						<td style="padding:5px;">
							<a style="color:#0082C8;font-weight:bold;" href="/<?=rewrite($tintucs[$i]['blog_name'])?>-<?=$tintucs[$i]['blog_id']?>.html">
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