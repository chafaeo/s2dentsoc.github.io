<?php
	session_start();
	include '../include/connect.php';
	
	$skills = $_GET['skills'];
	echo $skills;
	mysql_query("INSERT INTO `skill_detail` (`account_id`, `skill_id`) 
					VALUES ".$skills) 
					or die(mysql_error());

	$_SESSION['check_skills'] = 'Y';
	
?>

