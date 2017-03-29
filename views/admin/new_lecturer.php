<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="page-title">
   <div class="title_left">
      <h3>New Lecturer</h3>
   </div>
</div>
<form enctype="multipart/form-data" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
   <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>" />
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <a href="/admin/lecturer" class="btn btn-primary">Management Lecturer</a>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lecturer_name">
                     Name :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="lecturer_name" class="form-control col-md-7 col-xs-12" name="lecturer_name"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lecturer_image">
                     Image :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="file" id="lecturer_image" class="form-control col-md-7 col-xs-12" name="lecturer_image"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lecturer_info">
                     Info :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <textarea class="form-control resizable_textarea col-md-7 col-xs-12" name="lecturer_info" id="lecturer_info"></textarea>
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
                     <input type="submit" class="btn btn-success" name="new_lecturer" value="Create" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>