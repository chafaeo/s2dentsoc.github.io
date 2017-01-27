<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
h1 {
	font-size: 24px;
}
</style>
<link href="/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>

<body>

<div id="Holder">
	<div id="Header"></div>
    <div id="NavBar">
    	
        <nav>
       	  <ul>
            	<li><a href="Login.php">Login</a></li>
                <li><a href="Register.php">Register</a></li>
                <li><a href="ForgotPassword.php">Forgot Password</a></li>
          </ul>
        </nav>
    
  </div>
    <div id="Content">
   	  <div id="PageHeading"><h1>Page Heading</h1></div>
   	  <div id="ContentLeft">
   	    <h2>Your Message Here</h2></br>
        <h6></br>
   	    Your Message
        </h6>
   	  </div>
      <div id="ContentRight">
        <form id="ForgotPassword" name="ForgotPassword" method="post" action="">
          <table width="500" border="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><span id="sprytextfield1">
                <label for="SearchUsername"></label>
                <input name="SearchUsername" type="text" class="StyleTxtField" id="SearchUsername" />
              <span class="textfieldRequiredMsg"></span></span> <input type="submit" name="SeachButton" id="SeachButton" value="Search" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><span id="sprytextfield2">
                <label for="ChangePassword"></label>
                <input name="ChangePassword" type="text" class="StyleTxtField" id="ChangePassword" />
              <span class="textfieldRequiredMsg"></span></span> <input type="submit" name="ChangeButton" id="ChangeButton" value="Change" /></td>
            </tr>
          </table>
        </form>
      </div>
  </div>
    <div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>