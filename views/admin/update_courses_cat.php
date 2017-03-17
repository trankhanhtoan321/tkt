<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-title">
   <div class="title_left">
      <h3>Edit Category</h3>
   </div>
</div>
<form enctype="multipart/form-data" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">

   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <a href="/admin/courses_cat" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Back</a>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cc_id">
                     Category ID:<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" id="cc_id" class="form-control col-md-7 col-xs-12" name="cc_id" disabled value="<?= $course_cat['cc_id']; ?>" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cc_name">
                     Category Name:<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" id="cc_name" class="form-control col-md-7 col-xs-12" name="cc_name" required="required" value="<?= $course_cat['cc_name']; ?>" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cc_image">
                     Images:
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="file" id="cc_image" class="form-control col-md-7 col-xs-12" name="cc_image"/>
                     <img style="width:200px;" src="<?= $course_cat['cc_image']; ?>" />
                  </div>
               </div>
               <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Parent:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <select name="blogcat_parent_id" class="select2_single form-control" tabindex="-1">
                        <option></option>
                        <option value="0">None (NULL)</option>
                        <?php foreach($coursescats as $cat){ ?>
                           <option <?php if($cat['cc_id']==$course_cat['cc_parent_id']) echo "selected"; ?> value="<?= $cat['cc_id']; ?>"><?= $cat['cc_name']; ?></option>
                        <?php } ?>
                     </select>
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
               <h2>Category SEO</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cc_seo_title">
                     Title:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="cc_seo_title" class="form-control col-md-7 col-xs-12" name="cc_seo_title" value="<?= $course_cat['cc_seo_title']; ?>" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cc_seo_keyword">
                     Keyword:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="cc_seo_keyword" class="form-control col-md-7 col-xs-12" name="cc_seo_keyword" value="<?= $course_cat['cc_seo_keyword']; ?>" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cc_seo_description">
                     Description:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="cc_seo_description" class="form-control col-md-7 col-xs-12" name="cc_seo_description" value="<?= $course_cat['cc_seo_description']; ?>" />
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
               <h2>Category Description</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <textarea class="ckeditor" name="cc_description"><?= $course_cat['cc_description']; ?></textarea>
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
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <input type="reset" class="btn btn-warning" value="Reset" />
                     <input type="submit" class="btn btn-success" name="update_courses_cat" value="Update" />
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                     <a href="/admin/courses_cat" class="btn btn-danger">Cancel</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</form>