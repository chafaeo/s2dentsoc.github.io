<?php
 include '../inc/config.php';
 include '../inc/config.php';
 include '../inc/database.php';
 $output = '';  
 $sql = "SELECT * FROM `user` WHERE `lname` LIKE '%".$_POST['search']."%'";  
 $result = $db->query($sql);  
 if(isset($result))  
 {  
      $output .= '<h4 align="center">Search Result</h4>';  
      $output .= '<div class="table-responsive">  
                          <table class="table table bordered">  
                               <tr>  
                                    <th>Name</th>  
                                    <th>Age</th>  
                                    <th>Course</th>  
                                    <th>Year Level</th>  
                                    <th>Department</th>
                                    <th>Gender</th>  
                               </tr>';  
      while($row = $result->fetch())  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["fname"].' '.$row["mname"].' '.$row['lname'].'</td>  
                     <td>'.$row["age"].'</td>  
                     <td>'.$row["course"].'</td>  
                     <td>'.$row["year_level"].'</td>  
                     <td>'.$row["department"].'</td>  
                     <td>'.$row["gender"].'</td> 
                                 
                </tr>  
           ';  
      }  
      echo $output;  
 }  
 else  
 {  
      echo 'No results';  
 }  
?>