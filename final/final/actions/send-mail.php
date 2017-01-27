<?php
	$fname=$_GET['fname'];
	$email=$_GET['email'];
	$subject='Confirm Registration';
	$token=$_GET['token'];

	$message = '
		Hello '.$fname.',
		<br /><br />
		Welcome to OJT Application System!<br/>
		To complete your registration, just click on the link below<br/>
		<br /><br />
		<a href="http://localhost/final/?verified&token='.$token.'">Click HERE to activate your account.</a>
		<br /><br />
		Thanks,';

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
		
		try {
	  		$mail->Send();
	  		echo 0;
		} catch (Exception $ex) {

		}
?>