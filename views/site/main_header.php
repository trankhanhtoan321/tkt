<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row" style="background-color:#FFF">
	<div class="col-md-8">
		<a href="/">
			<img class="img-responsive" src="<?=$this->setting_model->tkt_get('logo')?>" />
		</a>
	</div>
	<div class="col-md-4 text-right">
		<br/>
		<i style="color:red;font-size:30px" class="glyphicon glyphicon-phone-alt"><b><?=$this->setting_model->tkt_get('phone')?></b></i>
	</div>
	<div class="clearfix"></div>
</div>