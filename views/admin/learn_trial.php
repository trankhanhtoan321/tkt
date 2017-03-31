<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-title">
   <div class="title_left">
      <h3>Learn Trial</h3>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
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
                        <th>Info</th>
                        <th>Time Registration</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach($learn_trials as $rc){ ?>
                     <tr>
                        <td><input type="checkbox" class="flat" name="table_records[]" value="<?= $rc['learn_trial_id'] ?>"></td>
                        <td><?= $rc['learn_trial_id'] ?></td>
                        <td><?= $rc['learn_trial_name'] ?></td>
                        <td><?= $rc['learn_trial_email'] ?></td>
                        <td><?= $rc['learn_trial_phone'] ?></td>
                        <td><?= $rc['learn_trial_info'] ?></td>
                        <td><?= date("Y/m/d H:i",$rc['learn_trial_time']) ?></td>
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