<?php
	$email=$_GET['email'];
	$message=$_GET['msg'];
	$subject=$_GET['subject'];

	session_start();
	$_SESSION['email'] = $email;

	require_once('../resources/assets/mailer/class.phpmailer.php');

		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 1;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 465;             
		$mail->AddAddress($email);
		$mail->Username="arvinreydp@gmail.com";  
		$mail->Password="grethyl99";            
		$mail->SetFrom('arvinreydp@gmail.com','ArvinReyDp');
		$mail->AddReplyTo("arvinreydp@gmail.com","ArvinReyDp");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
?>