<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="list-group" style="border-radius:0">
	<a style="background-color:#86B545;color:#FFF" href="#" class="list-group-item disabled">
		<b><span class="glyphicon glyphicon-flag"></span> Bài Viết Xem Nhiều</b>
	</a>
	<?php
	foreach($popularblogs as $blog)
	{
		?>
		<table class="list-group-item">
			<tr>
				<td style="width:60px">
					<a href="/<?=rewrite($blog['blog_name'])?>-<?=$blog['blog_id']?>.html">
						<img style="width:50px;height:50px;margin:auto" src="<?=$blog['blog_image']?>" />
					</a>
				</td>
				<td>
					<a href="/<?=rewrite($blog['blog_name'])?>-<?=$blog['blog_id']?>.html">
						<?=$blog['blog_name']?>
					</a>
				</td>
			</tr>
		</table>
		<?php
	}
	?>
</div>