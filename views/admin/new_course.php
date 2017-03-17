<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function dequycategory($coursescats,$num=0)
{
   echo '<ul style="list-style-type:none;">';
   foreach($coursescats as $cat)
   {
      if($cat['cc_parent_id'] == $num)
      {
         echo "<li><label class='control-label'><input name='kh_cat_ids[]' type='checkbox' class='flat' value='".$cat['cc_id']."' /> ".$cat['cc_name']."</label>";
         dequycategory($coursescats,$cat['cc_id']);
         echo "<li>";
      }
   }
   echo '</ul>';
}
?>
<div class="page-title">
   <div class="title_left">
      <h3>New Course</h3>
   </div>
</div>
<form enctype="multipart/form-data" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <a href="/admin/courses" class="btn btn-primary">Courses</a>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kh_ten">
                     Name:<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="kh_ten" class="form-control col-md-7 col-xs-12" name="kh_ten" required />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kh_time">
                     Time:<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="kh_time" class="form-control col-md-7 col-xs-12" name="kh_time" required />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kh_hocphi">
                     Fee (vnd):<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="number" id="kh_hocphi" class="form-control col-md-7 col-xs-12" name="kh_hocphi" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kh_ngaykhaigiang">
                     date begin:<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="date" id="kh_ngaykhaigiang" class="form-control col-md-7 col-xs-12" name="kh_ngaykhaigiang" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Image:</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                     <input type="file" class="form-control col-md-7 col-xs-12" name="kh_image" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Category:</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
                     <?php dequycategory($coursescats); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Product SEO</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kh_seo_title">
                     Title:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="kh_seo_title" class="form-control col-md-7 col-xs-12" name="kh_seo_title" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kh_seo_keyword">
                     Keyword:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="kh_seo_keyword" class="form-control col-md-7 col-xs-12" name="kh_seo_keyword" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kh_seo_description">
                     Description:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="kh_seo_description" class="form-control col-md-7 col-xs-12" name="kh_seo_description" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h2>Content:</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <textarea class="ckeditor" name="kh_noidung"></textarea>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_content">
               <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <input type="submit" class="btn btn-success" name="new_course" value="Create" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>