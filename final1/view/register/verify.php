<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verify your account</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
	include 'resources.php';
?>
</head>
<body>

	<div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form method="post" role="form" id="register-form" autocomplete="off">
         
	         <div class="form-header">
	         	<h3 class="form-title"><i class="fa fa-user"></i> Verify your account</h3>
	         </div>
	                  
	         <div class="form-body">
	         	<h5>
	         		<b>
						We've sent an email to <span style="color:green"><?php echo $_SESSION['email'] ?></span>.<br><br>
                    Please check your inbox and click on the confirmation link to create your account.
	         		</b>
	         	</h5>
			 </div>


         </form>
            
    </div>

	</div>

</body>
</html>