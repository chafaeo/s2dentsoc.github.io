<?php 
session_start();
$pageTitle = "admin";
include '../inc/config.php';
include '../inc/database.php';
include '../inc/header.php'; 
include '../inc/nav2.php';

$query = "SELECT * FROM user";
$result = $db->query($query);  
?>
     <div class="row">
     <!--
      <div class="col-md-10">
          <div class="input-group custom-search-form" style="padding: 20px;">
          <input id="search_text" type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                     <i class="fa fa-search">Search</i>
                </button>
            </span>
          </div>
          -->
          <div class="col-sm-12 col-md-12" style="padding: 20px;">
          </div>
          <div class="row" id="result">
            
          </div>
          <div class="content">
            <table border="0" class="table" id="main-table">
              <thead>
                  <tr>
                <th id="name">Name</th>
                <th id="age">Age</th>
                <th id="course">Course</th>
                <th id="year">Year Level</th>
                <th id="department">Department</th>
                <th id="gender">Gender</th>
                <th>Edit</th>
                <th>Delete</th>
                  </tr>
              </thead>
        
        <tbody>
              <?php while($rows = $result->fetch()){?>
              <tr>
                <td><?php echo $rows['fname'].' '.$rows['mname'].' '.$rows['lname'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['course'];?></td>
                <td><?php echo $rows['year_level'];?></td>
                <td><?php echo $rows['department'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><a href="../update/index.php?id=<?php echo $rows['user_id'];?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a onclick="del(<?php echo $rows['user_id']; ?>)" id="delete" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span></a></td>
              </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
        </div>
     </div>
</div>
  <?php include '../inc/footer.php';?>
   