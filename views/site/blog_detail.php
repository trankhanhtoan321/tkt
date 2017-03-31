<div class="navbar navbar-default">
	<img style="width: 100%;margin: 0;padding: 0;" src="/uploads/banner.jpg">
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header text-center"><?=$blog['blog_name']?><br/></h1>
		</div>
		<div class="col-sm-9 col-xs-12 col-md-9">
			<?=$blog['blog_content']?>
			<hr/>
			<?php $this->load->view('widgets/facebook_comment'); ?>
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