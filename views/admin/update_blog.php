<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function dequycategory($blogcategorys,$num=0)
{
   echo '<ul style="list-style-type:none;">';
   foreach($blogcategorys as $blogcat)
   {
      if($blogcat['blogcat_parent_id'] == $num)
      {
         echo "<li><label class='control-label'><input id='tkt_cat_".$blogcat['blogcat_id']."' name='blog_cat_ids[]' type='checkbox' class='flat' value='".$blogcat['blogcat_id']."' /> ".$blogcat['blogcat_name']."</label>";
         dequycategory($blogcategorys,$blogcat['blogcat_id']);
         echo "<li>";
      }
   }
   echo '</ul>';
}
?>
<div class="page-title">
   <div class="title_left">
      <h3>New Article</h3>
   </div>
</div>
<form enctype="multipart/form-data" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <a href="/admin/blogs" class="btn btn-primary">Back</a>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog_id">
                     ID:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" value="<?= $blog['blog_id']; ?>" id="blog_id" class="form-control col-md-7 col-xs-12" name="blog_id" disabled />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog_name">
                     Title:<span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="blog_name" class="form-control col-md-7 col-xs-12" name="blog_name" value="<?= $blog['blog_name']; ?>" required />
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
                     <input type="file" class="form-control col-md-7 col-xs-12" name="blog_image" />
                     <br/>
                     <img style="width:200px;" src="<?= $blog['blog_image']; ?>"
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
               <h2>Articles Category:</h2>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
                     <?php dequycategory($blogcategorys); ?>
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog_seo_title">
                     Title:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="blog_seo_title" class="form-control col-md-7 col-xs-12" name="blog_seo_title" value="<?= $blog['blog_seo_title']; ?>" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog_seo_keyword">
                     Keyword:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="blog_seo_keyword" class="form-control col-md-7 col-xs-12" name="blog_seo_keyword" value="<?= $blog['blog_seo_keyword']; ?>" />
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog_seo_description">
                     Description:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" id="blog_seo_description" class="form-control col-md-7 col-xs-12" name="blog_seo_description" value="<?= $blog['blog_seo_description']; ?>" />
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
                     <textarea class="ckeditor" name="blog_content"><?= $blog['blog_content']; ?></textarea>
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
                     <input type="submit" class="btn btn-success" name="update_blog" value="Update" />
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                     <a href="/admin/blogs" class="btn btn-danger">Cancel</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</form>
<?php
$temp = json_decode($blog['blog_cat_ids']);
if($temp){?>
<script>
   $(document).ready(function(){
      var tkt_cat = <?= $blog['blog_cat_ids']; ?>;
      for (var i = tkt_cat.length - 1; i >= 0; i--) {
         $("#tkt_cat_"+tkt_cat[i]).attr("checked","checked");
      }
   });
</script>
<?php } ?>