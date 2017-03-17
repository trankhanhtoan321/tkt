<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-title">
   <div class="title_left">
      <h3>Courses</h3>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
         <div class="x_title">
            <a href="/admin/new_course" class="btn btn-success">Add New</a>
         </div>
         <div class="clearfix"></div>

         <div class="x_content">
            <form action="" method="post">
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
               <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Fee</th>
                        <th>date begin</th>
                        <th>Action</th>
                     </tr>
                  </thead>


                  <tbody>
                     <?php foreach($courses as $c){ ?>
                     <tr>
                        <td><input type="checkbox" class="flat" name="table_records[]" value="<?= $c['kh_id']; ?>"></td>
                        <td><?= $c['kh_id']; ?></td>
                        <td><img style="width:50px" src="<?= $c['kh_image']; ?>" /></td>
                        <td><b><?=$c['kh_ten']?></b></td>
                        <td><?=number_format($c['kh_hocphi'])?></td>
                        <td><?=date("d/m/Y",$c['kh_ngaykhaigiang'])?></td>
                        <td>
                           <a href="/admin/update_course/<?= $c['kh_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                        </td>
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