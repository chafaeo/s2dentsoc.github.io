<?php 
$pageTitle = "View Reports";
include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';
   $query = $db->query("SELECT * FROM `account` WHERE `type_id` = 2");
   $total = $query->rowCount();
   $query1 = $db->query("SELECT * FROM `account` WHERE `type_id` = 2 AND `verify` = 'y'");
   $total1 = $query1->rowCount();
   $query2 = $db->query("SELECT * FROM `account` WHERE `type_id` = 2 AND `verify` = 'n'");
   $total2 = $query2->rowCount();
?>
<div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           View Reports
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/">Dashboard</a>/
                                <a id="breadcrumb-link" href="<?php echo BASE_URL;?>admin/view_reports/">View Reports</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 table-responsive">
                       <div id="current-student" class="col-lg-12">
                          <h1>Reports</h1>
                       </div>
                       <table class="table table-hover manage-student">
                           <thead>
                              <th>Students Registered</th>
                              <th>Students Verified</th>
                              <th>Students Unverified</th>
                              <th></th>
                           </thead>
                           <tbody>
                               <tr>
                                 <td><?php echo $total;?></td>
                                 <td><?php echo $total1;?></td>
                                 <td><?php echo $total2;?></td>
                               </tr>
                           </tbody>
                       </table>

                   </div>
                </div>

            </div>

</div>
<?php include '../inc/footer.php';?>