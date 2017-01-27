<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
h1 {
	font-size: 24px;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>



</head>

<body>



<div id="Holder">
	<div id="Header"></div>
    <div id="NavBar">
    	
        <nav>
       	  <ul>
            	<li><a href="Login.php">Login</a></li>
                <li><a href="Register.php">Register</a></li>
           </ul>
        </nav>
    
  </div>
   <div id="Content">
  <?php session_start();
      $pageTitle = "Login";
      include 'Connections/header.php';
	  include 'Connections/connect.php';
?>
         
   
   	  <div id="PageHeading">
   	    <h1>LogIn!</h1></div>
   	  <div id="ContentLeft">
   	    <h2>&nbsp;</h2>
   	  </div>
      <div id="ContentRight">
       <form class = "form-signin w3-card-8" role = "form" action = "check_user_Login.php" method="post">
        
          <table width="400" border="0" align="center">
            <tr>
              <td><h6><span id="sprytextfield1">
                <label for="UserName"></label>
                Username :<br />
                <br />
                <input name="Username" type="text" class="StyleTxtField" id="Username" placeholder = "Enter username" required autofocus/>
              </span></h6>
              <span><span class="textfieldRequiredMsg"><b>A value is required.</b></span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6><span id="sprypassword1">
                <label for="Password"></label>
                Password :<br />
  <br />
                <input name="Password" type="password" class="StyleTxtField" id="Password" placeholder = "Enter password" />
              </span></h6>
              <span><span class="passwordRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input type="submit" name="LoginButton" id="LoginButton" value="LogIn" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form>
      </div>
  </div>
    <div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>

<!--<script type="text/javascript" src="/jquery.js"> </script>
<script>
		$(document).ready(function(){
			$('#Username').click(function(){
				$('#UN').animateshake;
				});
			$('#Password').click(function(){
				$('#PW').animateshake;
				});
		});

</script>-->
<?php
//if($Username = $_POST['Username']){
  //$_SESSION['user'] = $username;
//  unset($_SESSION['UN']);
//}
//else if($Password = $_POST['Password']){
//  unset($_SESSION['PW']);
//}

?>

</body>
</html>