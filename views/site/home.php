<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// slide
$slides['slides'] = $slides;
$this->load->view('site/slider',$slides);
// end slide
// list dich vu
$dem=0;
foreach($dichvuketoans as $dvkt)
{
	if(++$dem%4==0) echo "<div class='row'>";
	?>
	<div class="col-md-3 col-xs-12" style="padding:5px;">
		<a href="/<?=rewrite($dvkt['blog_name'])?>-<?=$dvkt['blog_id']?>.html">
			<img class="img-responsive thumbnail" src="<?=$dvkt['blog_image']?>" />
		</a>
		<h4>
			<a href="/<?=rewrite($dvkt['blog_name'])?>-<?=$dvkt['blog_id']?>.html"><?=$dvkt['blog_name']?></a>
		</h4>
	</div>
	<?php
	if($dem%4==0) echo "</div>";
}
?>
<!-- /dich vu -->
<!-- kinh nghiem -->
<?php
$kinhnghiems['kinhnghiems'] = $kinhnghiems;
$this->load->view('site/kinhnghiem.php',$kinhnghiems);
?>
<div class="text-right"><?=$kn_pagination?></div>
<!-- /kinh nghiem -->
<!-- kinh nghiem -->
<?php
$tintucs['tintucs'] = $tintucs;
$this->load->view('site/tintuc.php',$tintucs);
?>
<div class="text-right"><?=$tt_pagination?></div>
<!-- /kinh nghiem -->