<?php
	include '../include/connect.php';
	
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$email = $_GET['email'];
	$num = $_GET['num'];
	$uname = $_GET['uname'];
	$pword = $_GET['pword'];

	$user = '';

	$q=mysql_query("SELECT `username` as user, `email` as email FROM `account` WHERE `username` ='".$uname."' OR `email` ='".$email."'") or die(mysql_error());
	while($row=mysql_fetch_array($q)){
		$user = $row['user'];
	}
	
	if($user==$uname){
		echo 1;
	}else{
		echo 0;
		mysql_query("INSERT INTO `account` (`username`, `password`, `first_name`, `last_name`, `type_id`, `resume`, `status`, `email`, `contact_number`, `verify`) 
			VALUES ('$uname', MD5('$pword'), '$fname', '$lname', '2', NULL, NULL, '$email', '$num', 'N')") or die(mysql_error());
	}
	
?>

