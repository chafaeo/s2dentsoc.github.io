<?php 
include '../inc/config.php';
include '../inc/database.php';
if(isset($_POST['register'])){
$lname = $_POST['lname']; 
$mname = $_POST['mname']; 
$fname = $_POST['fname']; 
$type_id = 2;
$age = $_POST['age']; 
$course = $_POST['course']; 
$department = $_POST['department'];
$terms = 1; 
$gender = $_POST['gender']; 
$level = $_POST['yearlevel'];
$username = $_POST['username'];
$password = ($_POST['password']);
try{
$query = "INSERT INTO `user`(`type_id`, `lname`, `fname`, `mname`, `age`, `course`, `year_level`, `department`, `username`, `password`, `terms`, `gender`) 
          VALUES (2,'$lname','$fname','$mname',$age,'$course','$level','$department','$username',md5('$password'),$terms,'$gender')";
$result = $db->query($query);
}catch(Exception $e){
	echo "Unable to insert data!";
}
}
header("Location: ../login/");
?>