<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
h1 {
	font-size: 24px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 <div id="Holder">
	<div id="Header"></div>
    <div id="NavBar">
    	
        <nav>
       	  <ul>
            	<li><</li>
                <li></li>
                <li></li>
            </ul>
        </nav>
    
  </div>
    <div id="Content">
   	  <div id="PageHeading">
   	    <h1>WELCOME, name!</h1></div>
   	  <div id="ContentLeft">
   	    <h2>&nbsp;</h2>
   	  </div>
      <div id="ContentRight">
      <?php
	  $conn = mysqli_connect("localhost","root","","clientserver");
	  session_start();
	  if(!$conn){
		  die("NOOOOOOOOOO");
	  }else{
		  print("YEEEEESSSS");
	  }
      $sql= "SELECT * FROM User WHERE Username='".$_SESSION['Username']."'";
	   $stmt1 = $conn->query($query1);
 while($row = $stmt1->fetch()){
	 {
          while($row = $result->fetch_assoc()) {
			  if($row['Username']){
     echo "<tr><td>".$row['Lname'].",".$row['Fname']." ".$row['Mname']."</td></tr>";
	 
		}}
		   }
   
}
	  ?>
        <table width="419" border="0">
          <tr>
            <td width="155">Name :</td>
            <td width="254">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Age :</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Course :</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Year Level :</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Department :</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Username :</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Password :</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        
        <input type="submit" name="LogoutButton" id="LogoutButton" value="Logout" />
      </div>
  </div>
    <div id="Footer"></div>
</div>
</body>
</html>