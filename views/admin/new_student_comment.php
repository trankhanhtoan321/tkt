<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="page-title">
   <div class="title_left">
      <h3>New Student Comment</h3>
   </div>
</div>
<form enctype="multipart/form-data" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
   <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>" />
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <a href="/admin/student_comment" class="btn btn-primary">Management Student Comment</a>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_comment_name">
                     Name :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="student_comment_name" class="form-control col-md-7 col-xs-12" name="student_comment_name"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_comment_image">
                     Image :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="file" id="student_comment_image" class="form-control col-md-7 col-xs-12" name="student_comment_image"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_comment_class">
                     Class :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="student_comment_class" class="form-control col-md-7 col-xs-12" name="student_comment_class"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_comment_info">
                     Info :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <textarea class="form-control resizable_textarea col-md-7 col-xs-12" name="student_comment_info" id="student_comment_info"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_comment_content">
                     Content :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <textarea class="form-control resizable_textarea col-md-7 col-xs-12" name="student_comment_content" id="student_comment_content"></textarea>
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
                     <input type="submit" class="btn btn-success" name="new_student_comment" value="Create" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>