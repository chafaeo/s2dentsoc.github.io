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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body>

<div id="Holder">
	<div id="Header"></div>
    <div id="NavBar">
    	
        <nav>
       	  <ul>
            	<li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Forgot Password</a></li>
            </ul>
        </nav>
    
  </div>
    <div id="Content">
   	  <div id="PageHeading">
   	    <h1>Update Account!</h1>
   	    <form id="UpdateForm" name="UpdateForm" method="post" action="">
        </form>
   	  </div>
   	  <div id="ContentLeft">
   	    <h2>Your Message Here</h2></br>
        <h6></br>
   	    Your Message
        </h6>
   	  </div>
      <div id="ContentRight">
        <table width="600" border="0" align="center">
          <tr>
            <td><h6>Account: </h6></td>
          </tr>
        </table>
        <table width="400" border="0" align="center">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><h6><span id="sprytextfield1">
              <label for="Email"></label>
              Email :<br />
              <input name="Email" type="text" class="StyleTxtField" id="Email" />
            </span></h6>
            <span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><h6><span id="sprypassword1">
              <label for="Password"></label>
              Password<br />
              <input name="Password" type="password" class="StyleTxtField" id="Password" />
            </span></h6>
            <span><span class="passwordRequiredMsg">A value is required.</span></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
  </div>
    <div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>