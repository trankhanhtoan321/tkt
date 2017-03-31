<form action="" method="post">
	<input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>" />
	<div class="panel panel-primary text-center" style="font-size:16px;border-radius:0px;">
		<div class="panel-heading" style="border-radius:0px;"><i>Đăng Ký Học Thử Miễn Phí</i></div>
		<div class="panel-body">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><em class="fa fa-user fa-lg fa-horizon"></em></span>
					<input style="border-radius:0px;" type="text" maxlength="100" value="" name="learn_trial_name" class="form-control" placeholder="Họ và Tên" id="learn_trial_name" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"> <em class="fa fa-envelope fa-lg fa-horizon"></em> </span>
					<input style="border-radius:0px;" type="email" maxlength="60" value="" name="femail" class="form-control" placeholder="Email" id="tv_email">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"> <em class="fa fa-phone fa-lg fa-horizon"></em> </span>
					<input style="border-radius:0px;" type="text" maxlength="60" value="" name="learn_trial_phone" class="form-control" placeholder="Số điện thoại" id="learn_trial_phone" required>
				</div>
			</div>
			<div class="form-group">
				<div>
					<textarea style="border-radius:0px;" placeholder="Lời nhắn" cols="8" name="learn_trial_info" class="form-control" maxlength="1000" id="learn_trial_info"></textarea>
				</div>
			</div>
		    <div class="text-center form-group">
	          	<input style="border-radius:0px;" type="submit" value="Hoàn tất" name="btn_learn_trial" class="btn btn-primary" onclick="return Check_TuVan()">
	      	</div>
		</div>
	</div>
</form>
<?php
if($this->input->post('btn_learn_trial',TRUE))
{
	$data_insert = array(
		'learn_trial_name' => $this->input->post('learn_trial_name',TRUE),
		'learn_trial_phone' => $this->input->post('learn_trial_phone',TRUE),
		'learn_trial_info' => $this->input->post('learn_trial_info',TRUE),
		'learn_trial_email' => $this->input->post('learn_trial_email',TRUE),
		'learn_trial_time' => time()
		);
	if($this->learn_trial_model->tkt_insert($data_insert))
	{
		?>
		<script>alert("Đã Đăng Ký Thành Công!");</script>
		<?php
	}else{
		?>
		<script>alert("Đăng Ký Thất Bại!");</script>
		<?php
	}
}
?>