<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid" style="background-image:url('/uploads/icons/bg.jpg');color:#000;">
	<div class="row" style="padding-top:15px;padding-bottom: 15px;">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h4 style="color:#000">LIÊN HỆ</h4>
			<b>Địa Chỉ:</b><i> 56 Đường D2, Phường 25, Quận Bình Thạnh, Tp HCM</i><br/>
			<b>Kế Toán Trưởng:</b><i> Đỗ Hằng</i><br/>
			<b>Số Điện Thoại:</b><i> 0937 31 91 94 - 0965 71 48 78</i><br/>
			<b>Email:</b><i> dvkthang@yahoo.com</i><br/>
			<b>Website:</b><i> http://ketoanbanthoigian.com - http://dichvuketoantainha.net</i><br/>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<!-- <h4 style="color:#000">SOCIAL</h4>
			<i style="font-size:40px;" class="fa fa-facebook-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-google-plus-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-youtube-square" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-skype" aria-hidden="true"></i>
			<i style="font-size:40px;" class="fa fa-twitter-square" aria-hidden="true"></i> -->
			<h4 style="color:#000">KẾT NỐI VỚI CHÚNG TÔI</h4>
			<div class="fb-page" data-href="https://www.facebook.com/DichVuKeToanTaiNha/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/DichVuKeToanTaiNha/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DichVuKeToanTaiNha/">Dịch vụ kế toán tại nhà</a></blockquote></div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
		<h4 style="color:#000">DỊCH VỤ KẾ TOÁN TẠI NHÀ</h4>
			<?php foreach($dichvuketoans as $dvkt){ ?>
			<a style="color:#000;" href="/<?=rewrite($dvkt['blog_name'])?>-<?=$dvkt['blog_id']?>.html"><?=$dvkt['blog_name']?></a><br/>
			<?php } ?>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h4 style="color:#000">ĐĂNG KÝ NHẬN TIN QUA EMAIL</h4>
			<form>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Nhập Email">
					<div class="input-group-btn">
						<button class="btn btn-success" type="submit">Đăng Ký</button>
					</div>
				</div>
			</form>
			<table>
				<tr><td colspan="2"><h4 style="color:#000">THỐNG KÊ TRUY CẬP</h4></td></tr>
				<tr style="text-align:right;">
					<td>Đang Truy Cập : </td>
					<td><?=$this->tkt_online->get_online()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Hôm Nay: </td>
					<td><?=$this->tkt_online->get_today()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Hôm Qua: </td>
					<td><?=$this->tkt_online->get_yesterday()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Tháng Này: </td>
					<td><?=$this->tkt_online->get_thismonth()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Tháng Trước: </td>
					<td><?=$this->tkt_online->get_premonth()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>Tổng Lượt Truy Cập: </td>
					<td><?=$this->tkt_online->get_total()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>bot/spider online: </td>
					<td><?=$this->tkt_online->get_bot_online()?></td>
				</tr>
				<tr style="text-align:right;">
					<td>total bot: </td>
					<td><?=$this->tkt_online->get_bot()?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<!-- <div class="hidden-sm hidden-md hidden-lg" style="height:50px;"></div>
<nav class="navbar navbar-default navbar-fixed-bottom hidden-sm hidden-md hidden-lg" style="background-color:#86B545;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" onclick="_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);" style="color:#FFF;" href="tel:0937319194">
      <i class="fa fa-phone"></i>
      Gọi Ms.Hằng: 0937.31.91.94</a>
    </div>
  </div>
</nav> -->

<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58a3e83757ed180aac1a2ba9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->