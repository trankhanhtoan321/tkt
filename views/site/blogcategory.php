<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header">
	<h1 class="text-center" style="color:#86B545"><?=$blogcat['blogcat_name']?></h1>
</div>
<div class="list-group">
<?php foreach($blogs as $blog){ ?>
	<div class="list-group-item">
		<table>
			<tr>
				<td style="width:200px">
					<img style="width:190px;height:190px" src="<?=$blog['blog_image']?>" />
				</td>
				<td>
					<a href="/<?=rewrite($blog['blog_name'])?>-<?=$blog['blog_id']?>.html">
						<h3><?=$blog['blog_name']?></h3>
					</a>
					<br/>
					<i><?=get_excerpt($blog['blog_content'],500)?></i>
					<br/>
					<i class="pull-right" ><a href="/<?=rewrite($blog['blog_name'])?>-<?=$blog['blog_id']?>.html">Xem Thêm &gt;&gt;	</a></i>
				</td>
			</tr>
		</table>
	</div>
<?php } ?>
</div>