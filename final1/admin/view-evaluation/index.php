<?php 
$pageTitle = "View Evaluation";
include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';
   $result = $db->query("SELECT * FROM `account` WHERE `type_id` = 2");
?>
<div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            View Evaluation
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/">Dashboard</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/student/">Manage Student</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 table-responsive">
                       <div id="current-student" class="col-sm-12">
                          <h1>Students' Evaluation</h1>
                       </div>
                       <table class="table table-hover manage-student">
                           <thead>
                              <th>Student's Name</th>
                              <th>Evaluation</th>
                           </thead>
                           <tbody>
                              <?php while($rows = $result->fetch()){?>
                               <tr>
                                 <td><?php echo $rows['first_name'].' '.$rows['last_name'];?></td>
                                 <td><a style="color: #1b7a9f;" href="#">View Evaluation</a></td>
                               </tr>
                              <?php } ?>
                           </tbody>
                       </table>
                   </div>
                </div>

            </div>

</div>
<?php include '../inc/footer.php';?>