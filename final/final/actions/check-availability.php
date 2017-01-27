<?php
	include '../include/connect.php';
	
	$email = $_GET['email'];
	$uname = $_GET['uname'];
	$resume = $_GET['resume'];

	$userCheck = '';
	$emailCheck = '';
	$resumeCheck = 0;

	$q=mysql_query("SELECT `username` as user, `email` as email 
						FROM `account` 
						WHERE `username` ='".$uname."' OR `email` ='".$email."'") 
						or die(mysql_error());

	while($row=mysql_fetch_array($q)){
		$userCheck = $row['user'];
		$emailCheck = $row['email'];
	}
	
	if($emailCheck == $email && $userCheck == $uname) 
	{
		echo 4; //register failed
	}
	else if($emailCheck == $email) 
	{
		echo 3; //register failed
	}
	else if($userCheck == $uname) 
	{
		echo 2; //register failed
	}
	else //check resume file name if not exist
	{
		$q1=mysql_query("SELECT `resume` as resume 
							FROM `account` 
							WHERE `resume`= '".$resume."'") 
							or die(mysql_error());

		while($row1=mysql_fetch_array($q1)){
			$resumeCheck++;
		}

		if($resumeCheck > 0 ) 
		{ 
			echo 1; //resume file name already exist. register failed
		}
		else 
		{
			echo 0; //register success
		}
	}
	
?>

