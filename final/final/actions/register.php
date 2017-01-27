<?php
	include '../include/connect.php';
	
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$email = $_GET['email'];
	$num = $_GET['num'];
	$uname = $_GET['uname'];
	$pword = $_GET['pword'];
	$resume = $_GET['resume'];
	$token = md5(uniqid(rand()));

	session_start();
	$_SESSION['email'] = "'".$email."'";
	$_SESSION['fname'] = "'".$fname."'";
	$_SESSION['token'] = "'".$token."'";

	mysql_query("INSERT INTO `account` (`username`, `password`, `first_name`, `last_name`, `type_id`, `resume`, `email`, `contact_number`, `verify`, `token_code`) 
					VALUES ('$uname', MD5('$pword'), '$fname', '$lname', '2', '$resume', '$email', '$num', 'N', '$token')") 
					or die(mysql_error());
	echo $token;
	
?>

