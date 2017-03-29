<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-title">
   <div class="title_left">
      <h3>List Email Result</h3>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
         <div class="x_title">
            <a href="/admin/new_exam_result" class="btn btn-success">Add New</a>
         </div>
         <div class="clearfix"></div>
         <div class="x_content">
            <form action="" method="post">
               <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>" />
               <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Time</th>
                        <th>Course</th>
                        <th>Goal</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach($exam_results as $sc){ ?>
                     <tr>
                        <td><input type="checkbox" class="flat" name="table_records[]" value="<?= $sc['exam_result_id'] ?>"></td>
                        <td><?= $sc['exam_result_id'] ?></td>
                        <td><?= $sc['exam_result_name'] ?></td>
                        <td><?= $sc['exam_result_email'] ?></td>
                        <td><?= $sc['exam_result_phone'] ?></td>
                        <td><?= $sc['exam_result_time'] ?></td>
                        <td><?= $sc['exam_result_course'] ?></td>
                        <td><?= $sc['exam_result_goal'] ?></td>
                     </tr> 
                     <?php } ?>
                  </tbody>
               </table>
               <div class="ln_solid"></div>
               <div class="form-group">
                  <input type="submit" id="delete_button" class="btn btn-danger" name="delete_records" value="Delete" />
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script>
   $("#delete_button").click(function(){
      if(confirm("Are you sure to delete?")) return true;
      return false;
   });
</script>