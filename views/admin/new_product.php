<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function dequycategory($categorys,$num=0)
{
	echo '<ul style="list-style-type:none;">';
	foreach($categorys as $cat)
	{
		if($cat['cat_parent_id'] == $num)
		{
			echo "<li><label class='control-label'><input name='pro_cat_ids[]' type='checkbox' class='flat' value='".$cat['cat_id']."' /> ".$cat['cat_name']."</label>";
			dequycategory($categorys,$cat['cat_id']);
			echo "<li>";
		}
	}
	echo '</ul>';
}
?>
<div class="page-title">
	<div class="title_left">
		<h3>New Product</h3>
	</div>
</div>
<form enctype="multipart/form-data" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
	<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<a href="/admin/products" class="btn btn-primary">Products</a>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_sku">
							sku:
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" id="pro_sku" class="form-control col-md-7 col-xs-12" name="pro_sku" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_name">
							Name:<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" id="pro_name" class="form-control col-md-7 col-xs-12" name="pro_name" required="required" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_name">
							Short Descripttion:
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea class="resizable_textarea form-control" name="pro_shortdescripttion"></textarea>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_price">
							Price:
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="number" id="pro_price" class="form-control col-md-7 col-xs-12 has-feedback-right" name="pro_price"/>
							<span class="form-control-feedback right" aria-hidden="true">VND</span>
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
					<h2>Product Image:</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<input type="file" class="form-control col-md-7 col-xs-12" name="pro_image" />
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
					<h2>Product Category:</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="form-group">
						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
							<?php dequycategory($categorys); ?>
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
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_seo_title">
							Title:
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" id="pro_seo_title" class="form-control col-md-7 col-xs-12" name="pro_seo_title" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_seo_keyword">
							Keyword:
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" id="pro_seo_keyword" class="form-control col-md-7 col-xs-12" name="pro_seo_keyword" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_seo_description">
							Description:
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" id="pro_seo_description" class="form-control col-md-7 col-xs-12" name="pro_seo_description" />
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
					<h2>Product Description</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea class="ckeditor" name="pro_description"></textarea>
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
							<input type="submit" class="btn btn-success" name="new_product" value="Create" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</form>