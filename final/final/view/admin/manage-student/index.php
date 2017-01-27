<?php 
   $pageTitle = "Manage Student";
   include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';

   $result = $db->query("SELECT * FROM `account` where `type_id` = 2");
?>
<div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manage Student
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/">Dashboard</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/manage-student/">Manage Student</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 table-responsive">
                       <div id="current-student" class="col-sm-12">
                          <h1>Current Student/s</h1>
                       </div>
                       <table class="table table-hover manage-student">
                           <thead>
                              <th>Student's Name</th>
                              <th>Email</th>
                              <th>Resume</th>
                              <th>Status</th>
                              <th>Update</th>
                           </thead>
                           <tbody>
                              <?php while($rows = $result->fetch()){ ?>
                               <tr>
                                 <td><?php echo $rows['firstname'].' '.$rows['last_name'];?></td>
                                 <td><?php echo $rows['email']; ?></td>
                                 <td><a style="color: #5cb85c;"><?php echo $rows['resume']; ?></a></td>
                                 <td><?php echo $rows['status']; ?></td>
                                 <td><a style="color: #5cb85c;">Update</a></td>
                               </tr>
                              <?php } ?>
                           </tbody>
                       </table>

                   </div>
                </div>

            </div>

</div>
<?php include '../inc/footer.php';?>