<?php 
include '../inc/config.php';
include '../inc/database.php';
$value = $_POST['valueSelected'];
try{
$query = "SELECT * FROM user ORDER BY user_id DESC";
$result = $db->query($query) or die("error");   
$output .= '<table class="table" id="main-table">  
                               <tr class="">  
                                    <th>Name</th>  
                                    <th>Age</th>  
                                    <th>Course</th>  
                                    <th>Year Level</th>  
                                    <th>Department</th>
                                    <th>Gender</th> 
                                    <th>Edit</th>
                                    <th>Delete</th>
                               </tr>';  
      while($row = $result->fetch())  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>  
                     <td>'.$row["age"].'</td>  
                     <td>'.$row["course"].'</td>  
                     <td>'.$row["year_level"].'</td>  
                     <td>'.$row["department"].'</td>  
                     <td>'.$row["gender"].'</td> 
                     <td>Edit</td>
                     <td>Delete</td>
                </tr> 
              </table> 
           ';  
       }
      echo $output;  
}catch(Exception $e){
  echo "Unable to delete!";
}

?>