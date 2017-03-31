<div class="container-fluid parallax2" style="min-height: 250px;color: #FFF;font-size: 16px;">
<div class="container">
  <center><h2 style="color:#fff;"><b>CẢM NHẬN HỌC VIÊN</b></h2></center>
  <div class="carousel slide text-center" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <?php $dem=0; foreach($cam_nhan_hoc_vien_s as $cn){ $dem++; ?>
      <div class="item <?=$dem==1?'active':''?>">
        <div class="row">
          <div class="col-xs-4">
            <img class="img-circle img-responsive" style="max-height:200px" src="<?=$cn['student_comment_image']?>" />
          </div>
          <div class="col-xs-8">
            <?=$cn['student_comment_content']?><br/>
            <i><?=$cn['student_comment_name']?>,<?=$cn['student_comment_class']?>,<?=$cn['student_comment_info']?></i>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
</div>