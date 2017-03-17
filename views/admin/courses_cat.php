<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function dequycategory($coursescats,$num=0)
{
   echo '<ul style="list-style-type:none;">';
   foreach($coursescats as $cat)
   {
      if($cat['cc_parent_id'] == $num)
      {
         echo "<li><label class='control-label'><span class='fa fa-arrow-right'></span> ".$cat['cc_name']."</label>";
         dequycategory($coursescats,$cat['cc_id']);
         echo "<li>";
      }
   }
   echo '</ul>';
}
?>

<div class="page-title">
   <div class="title_left">
      <h3>Categorys</h3>
   </div>
</div>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

         <div class="x_title">
            <a href="/admin/new_course_cat" class="btn btn-success">Add New</a>
         </div>

         <div class="clearfix"></div>

         <div class="x_content">
            <?php dequycategory($coursescats); ?>
            <div class="ln_solid"></div>
            <div class="clearfix"></div>
            <form action="" method="post">
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
               <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category Parent</th>
                        <th>Action</th>
                     </tr>
                  </thead>


                  <tbody>
                     <?php foreach($coursescats as $cat){ ?>
                     <tr>
                        <td><input type="checkbox" class="flat" name="table_records[]" value="<?= $cat['cc_id']; ?>"></td>
                        <td><?= $cat['cc_id']; ?></td>
                        <td><img style="width:50px" src="<?= $cat['cc_image']; ?>" /></td>
                        <td><b><?= $cat['cc_name']; ?></b></td>
                        <td>
                           <?php
                           $t1 = 0;
                           foreach($coursescats as $cattemp)
                           {
                              if($cattemp['cc_id'] == $cat['cc_parent_id'])
                              {
                                 $t1 = 1;
                                 echo $cattemp['cc_name'];
                                 break;
                              }
                           }
                           if($t1 == 0) echo '<i>NULL</i>';
                           ?>
                        </td>
                        <td>
                           <a href="/admin/update_courses_cat/<?= $cat['cc_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span></a>
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