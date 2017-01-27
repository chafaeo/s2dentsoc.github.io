  <?php
   $pageTitle = "Manage Skill";
   include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';

   $query = $db->query("SELECT `skill`.`skill`, `category`.`category` FROM `skill`, `category` WHERE `skill`.`category_id` = `category`.`category_id`");
?>
<div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manage Skill
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/">Dashboard</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-student/">Manage Student</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-category/">Manage Category</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-skill/">Manage Skill</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                         <a id="btn-add-new" href="add-skill.php" style="background-color:skyblue" class="btn btn-md pull-right">Add new</a>
                    </div>  
                    <div class="col-lg-12">
                         <h2 id="skill-heading">Skill Lists</h2><span></span>
                    </div>  
                    <div class="col-lg-12">
                        <table class="table-skill table">
                           <thead>
                              <th>Skill</th>
                              <th>Category</th>
                              <th>Edit/Delete</th>
                           </thead>
                           <tbody>
                             <?php while($rows = $query->fetch()){?>
                              <tr>
                                <td><?php echo $rows['skill'];?></td>
                                <td><?php echo $rows['category'];?></td>
                                <td>edit/delete</td>
                              </tr>
                              <?php }?>
                           </tbody>
                        </table>
                    </div>            
                </div>
            </div>

</div>
<?php include '../inc/footer.php';?>