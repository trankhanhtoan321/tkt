<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid" style="background-color:#262626;color:#ACACAC;">
	<div class="row" style="padding-top:15px;padding-bottom: 15px;">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h4 style="color:#FFF">DỊCH VỤ KẾ TOÁN TẠI NHÀ</h4>
			<b>Địa Chỉ:</b><i> 56 Đường D2, Phường 25, Quận Bình Thạnh, Tp HCM</i><br/>
			<b>Kế Toán Trưởng:</b><i> Đỗ Hằng</i><br/>
			<b>Số Điện Thoại:</b><i> 0937 31 91 94 - 0965 71 48 78</i><br/>
			<b>Email:</b><i> dvkthang@yahoo.com</i><br/>
			<b>Website:</b><i> http://ketoanbanthoigian.com - http://dichvuketoantainha.net</i><br/>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h4 style="color:#FFF">KẾT NỐI VỚI CHÚNG TÔI</h4>
			<div class="fb-page" data-href="https://www.facebook.com/DichVuKeToanTaiNha/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/DichVuKeToanTaiNha/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DichVuKeToanTaiNha/">Dịch vụ kế toán tại nhà</a></blockquote></div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h4 style="color:#FFF">ĐĂNG KÝ NHẬN TIN QUA EMAIL</h4>
			<form>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Nhập Email">
					<div class="input-group-btn">
						<button class="btn btn-success" type="submit">
							Đăng Ký
						</button>
					</div>
				</div>
			</form>
			<h4 style="color:#FFF">SOCIAL</h4>
			<i style="font-size:40px;" class="fa fa-facebook-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-google-plus-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-youtube-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-skype" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-twitter-square" aria-hidden="true"></i>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<table>
				<tr><td colspan="2"><h4 style="color:#FFF">THỐNG KÊ TRUY CẬP</h4></td></tr>
				<tr style="text-align:right;">
					<td>Hôm nay : </td>
					<td><?=$this->tkt_useronline->tkt_get_today()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Hôm Qua : </td>
					<td><?=$this->tkt_useronline->tkt_get_yesterday()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Tháng Này : </td>
					<td><?=$this->tkt_useronline->tkt_get_month()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Tổng Cộng : </td>
					<td><?=$this->tkt_useronline->tkt_get_total()?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-color:#2F2F2F;color:#acacac">
	<div class="container">
		<div style="height:50px;padding:15px;">
			Copyrights © 2017 Dịch Vụ Kế Toán Tại Nhà - Kế Toán Trưởng: Ms.Hằng
		</div>
	</div>
</div>
<div class="hidden-sm hidden-md hidden-lg" style="height:50px;"></div>
<nav class="navbar navbar-default navbar-fixed-bottom hidden-sm hidden-md hidden-lg" style="background-color:#86B545;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" onclick="_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);" style="color:#FFF;" href="tel:0937319194">
      <i class="fa fa-phone"></i>
      Gọi Ms.Hằng: 0937.31.91.94</a>
    </div>
  </div>
</nav>