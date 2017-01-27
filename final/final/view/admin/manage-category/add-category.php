<?php 
  $pageTitle = "Add New Category";
  include '../inc/config.php';
  include '../inc/database.php';

  include '../inc/head.php';
  include '../inc/nav.php';
?>
  <div id="page-wrapper">

            <div class="container-fluid">
                <a id="btn-back" href="./" class="btn btn-success btn-md pull-right">Back</a>
                   <div class="add-category">
                   	  <h4 id="category-heading">Add New Category</h4>
                         	<form>
                                <div class="form-group row">
                    						    <label for="add-category" class="col-xs-3 col-form-label">Category Name</label>
                    						<div class="col-xs-8">
                    						    <input id="category_name" class="form-control" type="text" placeholder="Enter category">
                    						</div>
                    						</div>
                    						    <a id="add" class="btn btn-success">Add</a>
                         	</form>
                   </div>
                   <div id="spinner" class="spinner" style="">
                           <img id="img-spinner" width="50px" style="display:none;" src="<?php echo BASE_URL;?>admin/img/loading.png" alt="Loading"/>
                   </div>
            </div>

</div>
<?php include '../inc/footer.php'; ?>