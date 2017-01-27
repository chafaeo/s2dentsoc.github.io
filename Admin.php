<?php include 'inc/header.php'; ?>
<div id="Holder">
	<div id="Header"></div>
    <div id="NavBar">
    	
        <nav>
       	  <ul>
            	<li><a href="Logout.php">LogOut</a></li>
              </ul>
        </nav>
    
  </div>
    <div id="Content">
   	  <div id="PageHeading">
   	    <h1>Hello Admin!</h1></div>
   	  <div id="ContentLeft">
   	    <h2>&nbsp;</h2>
   	  </div>
      <div id="ContentRight">
        <table width="635" border="0">
          <tr>
            <td width="177">Name</td>
            <td width="52">Age</td>
            <td width="77">Course</td>
            <td width="99">Year Level</td>
            <td width="92">Department</td>
            <td width="112">Gender</td>
          </tr>
          <?php
		  		   $conn = mysqli_connect("localhost","root","","clientserver");
		   if(!$conn){
			   die("NOOOOOOOOOO");
		   }else{
		   echo"";
		   }
		   $sql = "SELECT * FROM user";
		   $result = $conn->query($sql);
		   if($result->num_rows > 0){
          while($row = $result->fetch_assoc()) {
			  if($row['UserID'] != 1){
     echo "<tr><td>".$row['Lname'].",".$row['Fname']." ".$row['Mname']."</td><td>".$row['Age']."</td><td>".$row['Course']."</td><td>".$row['YearLevel']."</td><td>".$row['Department']."</td><td>".$row['Gender']."</td></tr>";
	 
		}}
		   }
		?>
        </table>
      </div>
  </div>
   