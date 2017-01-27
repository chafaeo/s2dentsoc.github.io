<?php 
   include 'Connections/connect.php';
   if(isset($_POST["submit"]))
   {
	   
	   if(!empty($_POST['Username']) && !empty($_POST['Password']))
	   {
		    $Username=$_POST['Username'];
			$Password=$_POST['Password'];
		
			$con=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('clientserver') or die("cannot select DB");
		
		}
   }
   
   session_start();
    $_SESSION['err'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
  
   try{
 $query1 = "SELECT * FROM user WHERE Username= '$Username' && Password = md5('$Password')";
 $stmt1 = $conn->query($query1);
 while($row = $stmt1->fetch()) {
   $type = $row['UserID'];
}
if($type == 1){
  $_SESSION['Username'] = $Username;
  unset($_SESSION['err']);
  header('Location: admin.php');
} 
else if($type == 2){
  unset($_SESSION['err']);
  header('Location: account.php');
}
if(!isset($type)){
	
  $_SESSION['err'] = "Invalid username or password";
  if(isset($_SESSION['err'])){
    header('Location: LogIn.php');
  }
}

}catch(Exception $e){
   echo $e;
}
?>
 <?php if(isset($_SESSION['err'])){echo 'animated shake';}?>
 <?php
 /////////////------------ LOGIN PAGE ------------////////
 
 ////////////------------- REGISTER PAGE BELOW-----------////////////
 ?>