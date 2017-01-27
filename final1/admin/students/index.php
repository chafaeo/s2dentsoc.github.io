<?php 
   $pageTitle = "Student";
   include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';

   if($_GET['v'] == 'y'){
     $query = $db->query("SELECT * FROM `account` WHERE `type_id` = 2 AND `verify` = 'y'");
   } elseif($_GET['v'] == 'n') {
     $query = $db->query("SELECT * FROM `account` WHERE `type_id` = 2 AND `verify` = 'n'");
   } else {
     $result = $db->query("SELECT * FROM `account` where `type_id` = 2");
   }
?>
<div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Student/s
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/">Dashboard</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/students/">Student</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 table-responsive">
                       <div id="current-student" class="col-sm-12">
                          <h1>Student Lists</h1>
                       </div>
                       <table class="table table-hover manage-student">
                           <thead>
                              <th>Student's Name</th>
                              <th>Email</th>
                              <th>Resume</th>
                              <th>Verified</th>
                           </thead>
                           <tbody>
                              <?php if($_GET['v'] == 'y'){ while($rows = $query->fetch()){?>
                               <tr>
                                 <td><?php echo $rows['firstname'].' '.$rows['last_name'];?></td>
                                 <td><?php echo $rows['email']; ?></td>
                                 <td><a style="color: #5cb85c;"><?php echo $rows['resume']; ?></a></td>
                                 <td><?php echo $rows['verify']; ?></td>
                               </tr>
                              <?php }} elseif($_GET['v'] == 'n'){ while($rows = $query->fetch()){?>
                              <tr>
                                 <td><?php echo $rows['firstname'].' '.$rows['last_name'];?></td>
                                 <td><?php echo $rows['email']; ?></td>
                                 <td><a style="color: #5cb85c;"><?php echo $rows['resume']; ?></a></td>
                                 <td><?php echo $rows['verify']; ?></td>
                               </tr>
                              <?php }} else { while($rows = $result->fetch()){?>
                              <tr>
                                 <td><?php echo $rows['firstname'].' '.$rows['last_name'];?></td>
                                 <td><?php echo $rows['email']; ?></td>
                                 <td><a style="color: #5cb85c;"><?php echo $rows['resume']; ?></a></td>
                                 <td><?php echo $rows['verify']; ?></td>
                               </tr>
                              <?php }}?>
                           </tbody>
                       </table>

                   </div>
                </div>

            </div>

</div>
<?php include '../inc/footer.php';?>