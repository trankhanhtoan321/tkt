<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="page-title">
   <div class="title_left">
      <h3>New Exam Result</h3>
   </div>
</div>
<form enctype="multipart/form-data" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
   <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>" />
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <a href="/admin/student_comment" class="btn btn-primary">List Exam Result</a>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_result_name">
                     Name :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="exam_result_name" class="form-control col-md-7 col-xs-12" name="exam_result_name"/>
                  </div>
               </div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_result_email">
                     Email :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="email" id="exam_result_email" class="form-control col-md-7 col-xs-12" name="exam_result_email"/>
                  </div>
               </div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_result_phone">
                     Phone :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="exam_result_phone" class="form-control col-md-7 col-xs-12" name="exam_result_phone"/>
                  </div>
               </div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_result_time">
                     Time :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="exam_result_time" class="form-control col-md-7 col-xs-12" name="exam_result_time"/>
                  </div>
               </div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_result_course">
                     Course :
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="exam_result_course" class="form-control col-md-7 col-xs-12" name="exam_result_course"/>
                  </div>
               </div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_result_goal">
                     Goal:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="exam_result_goal" class="form-control col-md-7 col-xs-12" name="exam_result_goal"/>
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
                     <input type="submit" class="btn btn-success" name="new_exam_result" value="Create" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>