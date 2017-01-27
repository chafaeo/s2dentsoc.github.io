<?php 
include '../inc/config.php';
include '../inc/database.php';
$id = $_GET['id'];
$lname = $_POST['lname']; 
$mname = $_POST['mname']; 
$fname = $_POST['fname']; 
$age = $_POST['age']; 
$course = $_POST['course']; 
$department = $_POST['department'];
$gender = $_POST['gender']; 
$level = $_POST['yearlevel'];
$username = $_POST['username'];
$password = $_POST['password'];
try{
$query = "UPDATE `user` SET `lname`='$lname',`fname`='$fname',`mname`='$mname',`age`=$age,`course`='$course',`year_level`='$level',`department`='$department',`username`='$username',`password`=md5('$password'),`gender`='$gender' WHERE user_id = $id";
$result = $db->query($query) or die("Error!");
header("Location: ../admin/");
}catch(Exception $e){
   echo "Unable to update user!";
}
?>