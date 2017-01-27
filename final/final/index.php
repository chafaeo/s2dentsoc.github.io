
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="resources/assets/css/signup-form.css" type="text/css" />

<!-- scripts here -->
<script src="resources/bootstrap/js/bootstrap.min.js"></script>
<script src="resources/assets/jquery/jquery-1.11.2.min.js"></script>
<script src="resources/assets/jquery/jquery.validate.min.js"></script>
<script src="resources/js/login/script.js"></script>
</head>

<body>

	<div class="container">
		<?php 
			if(isset($_GET['unverified']))
			{
				session_start();
				?>
				<br>
	            <div class='alert alert-danger' id="alert-container">
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong> This Account is not yet Activated. Go to your Email > Inbox and click on the confirmation link. [ <a href="#" onclick="resend_mail(<?php echo $_SESSION['email1'].','.$_SESSION['fname1'].','.$_SESSION['token1'] ?>)" style="color:green;">Resend email</a> ] 
				</div>
	            <?php
			}
			if(isset($_GET['verified']))
			{
				$code = $_GET['token'];
				include 'include/connect.php';
				mysql_query("UPDATE `account` SET `verify` = 'Y' WHERE `account`.`token_code`='".$code."'") or die(mysql_error());
	
				?>
				<br>
	            <div class='alert alert-info'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Congrats!</strong> Your account has been verified. You can now login.
				</div>
	            <?php
			}
		?>

    <div class="signup-form-container">
    	
         <!-- form start -->
         <form method="post" role="form" id="register-form" autocomplete="off">
         
         <div class="form-header">
         	<h3 class="form-title"><i class="fa fa-user"></i> Sign in</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         	<?php
		        if(isset($_GET['error']))
				{
					?>
		            <div class='alert alert-danger'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Incorrect username or password!</strong> 
					</div>
		            <?php
				}
			?>

	          <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" type="text" id="uname" class="form-control" placeholder="Username">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                   <input name="password" id="pword" type="password" class="form-control" placeholder="Password">
                   </div>  
                   <span class="help-block" id="error"></span>                    
              </div>

            
            <div class="form-footer">
                 <button type="submit" name="submit" class="btn btn-info col-lg-12"> Sign In</button>
                 <br><br>
                 <div class="row">
                 	<a href="#" class="pull-left"> Lost Password?</a>
                 	<a href="view/common/register" class="pull-right"> Sign up</a>
                 </div>
            </div>

            </form>
            
           </div>

	</div>
</body>
</html>
