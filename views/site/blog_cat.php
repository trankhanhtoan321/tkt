<div class="navbar navbar-default">
	<img style="width: 100%;margin: 0;padding: 0;" src="/uploads/banner.jpg">
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header text-center"><?=$blogcat['blogcat_name']?><br/></h1>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-9">
			<?php foreach($blogs as $blog){ ?>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<img class="img-responsive" src="<?=$blog['blog_image']?>" />
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<h4 style="color:#0082C8">
						<a href="/<?=rewrite($blog['blog_name'])?>-<?=$blog['blog_id']?>.html">
							<?=$blog['blog_name']?>
						</a>
					</h4>
					<i><i class="fa fa-calendar"></i> <?=date("H:i d/m/Y",$blog['blog_time'])?></i>
					<br/>
					<i><?=get_excerpt($blog['blog_content'],500)?></i>
				</div>
			</div><hr/>
			<?php } ?>
			<?=$pagination?>
		</div>
		<div class="col-sm-3 col-xs-12 col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading text-center" style="background-color: #0082C8; color:#ffffff;"><i class="fa fa-bullhorn"></i> Tin Tức</div>
				<div class="panel-body">
					<?php 
						foreach($blog_news as $temp)
						{
							echo "<a href='".rewrite($temp['blog_name'])."-".$temp['blog_id'].".html'><span class='glyphicon glyphicon-menu-right'> </span>".$temp['blog_name']."</a><hr/>";
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>