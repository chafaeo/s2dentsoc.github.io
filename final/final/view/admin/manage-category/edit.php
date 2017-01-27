<?php 
  $pageTitle = "Add New Category";
  include '../inc/config.php';
  include '../inc/database.php';
  if(isset($_GET['id'])){
     $category_id = $_GET['id'];
     $query = $db->prepare("SELECT * FROM `category` WHERE `category_id` = ?");
     $query->execute(array($category_id));
  }
  include '../inc/head.php';
  include '../inc/nav.php';
?>
  <div id="page-wrapper">

            <div class="container-fluid">
                <a id="btn-back" href="./" class="btn btn-success btn-md pull-right">Back</a>
                   <div class="add-category">
                   	  <h4 id="category-heading">Edit Category</h4>
                         	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <input id="category_id" type="hidden" value="<?php echo $_GET['id'];?>">
                                <div class="form-group row">
                    						    <label for="add-category" class="col-xs-3 col-form-label">Category Name</label>
                    						<div class="col-xs-8">
                                   <?php while($rows = $query->fetch()){?>
                    						    <input class="form-control" type="text" value="<?php echo $rows['category'];?>" id="category">
                                   <?php }?>
                    						</div>
                    						</div>
                    						    <a id="update" class="btn btn-success">Update</a>
                         	</form>
                   </div>
            </div>

</div>
<?php include '../inc/footer.php'; ?>