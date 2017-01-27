  <?php
   $pageTitle = "Manage Skill";
   include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';

   $query = $db->query("SELECT *, `category`.`category` FROM `skill`, `category` WHERE `skill`.`category_id` = `category`.`category_id`");
   
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
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-student/">Student</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-category/">Manage Category</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-skill/">Manage Skill</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                         <a id="btn-add-new" href="add-skill.php" class="btn btn-md btn-success pull-right">Add new</a>
                  </div>
                </div>
                <div class="row">  
                    <div class="col-lg-12">
                         <h2 id="skill-heading">Skill Lists</h2><span></span>
                    </div>  
                    <div class="col-lg-12">
                        <table class="table-skill table table-hover">
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
                                <td><a href="add-skill.php?id=<?php echo $rows['skill_id'];?>" style="color: #f34c60;" class="glyphicon glyphicon-pencil">edit</a>/<a onclick="delete_skill(<?php echo $rows['skill_id'];?>)" href="?id=<?php echo $rows['skill_id'];?>" style="color: #1b7a9f;" class="glyphicon glyphicon-trash">delete</a></td>
                              </tr>
                              <?php }?>
                           </tbody>
                        </table>
                    </div>            
                </div>
            </div>

</div>
<?php include '../inc/footer.php';?>