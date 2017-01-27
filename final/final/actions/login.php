<?php
	session_start();
	include '../include/connect.php';

	$un=$_GET['uname'];
	$pw=$_GET['pword'];
	$type_id = 0;
	$_SESSION['check_skills'] = 'N';
	
		$q=mysql_query("SELECT CONCAT(`first_name`,' ',`last_name`) as name, `account_id` as accID, `username` as user, `type_id` as typeID, `verify` as verify, `email` as email, `first_name` as fname, `token_code` as token
						FROM `account` 
						WHERE `username` ='$un'
						AND `password` = md5('".$pw."')") 
						or die(mysql_error());

	while($row=mysql_fetch_array($q)){
		if($row['verify'] == 'N'){
			$_SESSION['email1'] = "'".$row['email']."'";
			$_SESSION['fname1'] = "'".$row['fname']."'";
			$_SESSION['token1'] = "'".$row['token']."'";
			echo 'unverified';
		}else{
			$_SESSION['uname'] = $row['user'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['userID'] = $row['accID'];

			if($row['typeID']==1)
			{
				echo 'admin';
			}
			else if($row['typeID']==2)
			{
				$q1=mysql_query("SELECT * FROM `skill_detail`
						WHERE `account_id` = ".$row['accID']) 
						or die(mysql_error());

				while($row1=mysql_fetch_array($q1)){
					$_SESSION['check_skills'] = 'Y';
				}

				echo 'student';
			}
			else if($row['typeID']==3)
			{
				echo 'employer';
			}
			else
			{
				echo 'teacher';
			}
		}
	}
	
?>