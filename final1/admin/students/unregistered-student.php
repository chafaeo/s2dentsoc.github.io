<?php 
   $pageTitle = "Unregistered Student";
   include '../inc/config.php';
   include '../inc/database.php';
   include '../inc/head.php';
   include '../inc/nav.php';

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
                          <h1>Unregistered Student/s</h1>
                       </div>
                       <table class="table table-hover manage-student">
                           <thead>
                              <th>Student's Name</th>
                              <th>Email</th>
                              <th>Contact Number</th>
                           </thead>
                           <tbody>
                               <tr>
                                 <td>Reynolito Reso-or</td>
                                 <td>reynolitoresoor123@gmail.com</td>
                                 <td>0393939383</td>
                               </tr>
                           </tbody>
                       </table>

                   </div>
                </div>

            </div>

</div>
<?php include '../inc/footer.php';?>