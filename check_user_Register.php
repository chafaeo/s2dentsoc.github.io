<?php
////////////------------- REGISTER PAGE BELOW-----------////////////
?>

<?php session_start();
  include 'Connections/connect.php';
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $Lname = $_POST['Lname'];
  $Fname = $_POST['Fname'];
  $Mname = $_POST['Mname'];
  $Age = $_POST['Age'];
  $Course = $_POST['Course'];
  $YearLevel = $_POST['YearLevel'];
  $Department = $_POST['Department'];
  $AgreementID = $_POST['AgreementID'];
  if($AgreementID == 'yes'){
    $agree = 1;
  } else {
    $agree = 2;
  }

  $query_check_user = "select * from user";
  $result = $conn->query($query_check_user);  
  while($row = $result->fetch()){
      if($Username == $row['Username']){
          $user_Username = "used";
      } else if($Password == $row['Password']){
          $user_Password = "used";
      }
  }

  try{
 
 if(isset($user_Username)){
    $_SESSION['error'] = "Username was already registered!";
    if(isset($_SESSION['error'])){
      header('Location: Register.php');
    }
 } else if(isset($user_Password)){
    $_SESSION['error'] = "Password is already used!";
    if(isset($_SESSION['err'])){
      header('Location: Register.php');
    }
 } else {

 $query1 = "insert into user(UserID,Username,Password,Lname,Fname,Mname,Age,Course,YearLevel,Department,AgreementID) values(2,'$Username',md5('$Password'),'$Fname','$Lname','$Mname','$Age','$Course','$YearLevel','$Department','$agree')";
 $stmt1 = $conn->query($conn,$query1) or die(mysql_error());
   unset($_SESSION['error']);
   $_SESSION['success'] = "New user has been successfuly added!";
   header('Location: Register.php');
 }
}catch(Exception $e){
  $_SESSION['error'] = "Could not register user!";
   if(isset($_SESSION['err'])){
   header('Location: Register.php');
   }
}
?>




<!--.......................................-->
