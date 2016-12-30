<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="list-group" style="border-radius:0">
	<a style="background-color:#86B545;color:#FFF" href="#" class="list-group-item disabled">
		<b><span class="glyphicon glyphicon-flag"></span> Dịch Vụ Kế Toán</b>
	</a>
	<?php
	foreach($dichvuketoans as $dvkt)
	{
		?>
		<a class="list-group-item" href="/<?=rewrite($dvkt['blog_name'])?>-<?=$dvkt['blog_id']?>.html">
			<span class="glyphicon glyphicon-menu-right"></span><?=$dvkt['blog_name']?>
		</a>
		<?php
	}
	?>
</div>