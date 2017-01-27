<?php 
   $pageTitle = "Manage Category";
   include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';
   $query = $db->query("SELECT * FROM `category`");
?>
<div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manage Category
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/">Dashboard</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-student/">Student</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-category/">Manage Category</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                         <a id="btn-add-new" href="add-category.php" class="btn btn-md btn-success pull-right">Add new</a>
                    </div> 
                </div>
                <div class="row">  
                    <div class="col-lg-12">
                         <h2 id="category-lists-heading">Category Lists</h2><span></span>
                    </div> 
                    <div class="col-lg-12 table-responsive">
                        <table class="table table-hover table-category">
                           <thead>
                              <th>Category</th>
                              <th>Edit/Delete</th>
                           </thead>
                           <tbody>
                           <?php while($rows = $query->fetch()){?>
                              <tr>
                                <td><?php echo $rows['category'];?></td>
                                <td><a href="edit.php?id=<?php echo $rows['category_id']?>" style="color: #f34c60;" class="glyphicon glyphicon-pencil">edit</a>/<a onclick="delete_category(<?php echo $rows['category_id'];?>)" style="color: #3b9cd9;" class="glyphicon glyphicon-trash">delete</a></td>
                              </tr>
                          <?php }?>
                        </tbody>
                        </table>
                        
                    </div>            
                </div>
            </div>

</div>
<?php include '../inc/footer.php';?>