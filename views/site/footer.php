<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row" style="background-color:#FFF">
	<hr/>
	<div class="col-md-6 col-xs-12">
		<h3 style="color:#86B545">DỊCH VỤ KẾ TOÁN TẠI NHÀ</h3>
		56 Đường D2, Phường 25, Quận Bình Thạnh, Tp HCM<br/>

		Kế toán&nbsp;:	Đỗ Hằng<br/>
		Di động&nbsp;:	0937 31 91 94 - 0965 71 48 78<br/>
		Email&nbsp;&nbsp;&nbsp;&nbsp;:	dvkthang@yahoo.com<br/>
		Website&nbsp;:	ketoanbanthoigian.com
	</div>
	<div class="col-md-6 col-xs-12 text-right">
		<h3 style="color:#86B545">THỐNG KÊ TRUY CẬP</h3>
		Hôm Nay: <?=$this->tkt_useronline->tkt_get_today()?><br/>
		Hôm Qua: <?=$this->tkt_useronline->tkt_get_yesterday()?><br/>
		Tháng Này: <?=$this->tkt_useronline->tkt_get_month()?><br/>
		Tổng Cộng: <?=$this->tkt_useronline->tkt_get_total()?><br/>
	</div>
</div>