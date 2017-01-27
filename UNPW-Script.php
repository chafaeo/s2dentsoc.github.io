<?php
include 'Connections/connect.php';
   
   session_start();
   // $_SESSION['err'];
    
	 if(!empty($_POST['SearchUsername']) && !empty($_POST['ChangePassword'])){
		    $Username=$_POST['SearchUsername'];
			$Password=$_POST['ChangePassword'];
		
			$con=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('clientserver') or die("cannot select DB");
		  
	  }
  
   try{
	
	 
	  
	   $query1 = "SELECT * FROM user WHERE Username='$SearchUsername%'";
	 $stmt1 = $conn->query($query1);
	 
	}catch(Exception $e){
	   echo $e;
	}
?>