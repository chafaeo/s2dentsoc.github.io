<?php
	session_start();
	include '../include/connect.php';

	$un=$_GET['uname'];
	$pw=$_GET['pword'];
	$type_id = 0;
	
	$q=mysql_query("SELECT `username` as user, `type_id` as typeID
					FROM `account` 
					WHERE `username` ='$un'
					AND `password` = md5('".$pw."')") 
					or die(mysql_error());

	while($row=mysql_fetch_array($q)){
		$_SESSION['uname'] = $row['user'];

		if($row['typeID']==1){
			echo 'admin';
		}else if($row['typeID']==2){
			echo 'student';
		}else if($row['typeID']==3){
			echo 'employer';
		}else{
			echo 'teacher';
		}
	}
	
?>