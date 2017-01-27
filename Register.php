<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<link href="CSS/Layout_Register.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
h1 {
	font-size: 24px;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="/SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="/SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<link href="/SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="/SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<script src="/SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>

<?php
	if(count($_POST)>0) {
		foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$message = ucwords($key) . " field is required";
		break;
		}
	}
	if($_POST['Password'] != $_POST['ConfirmPassword']){ 
		$message = 'Passwords should be same<br>'; 
	}
	if(!isset($message)) {
	if (!filter_var($_POST["Username"], FILTER_VALIDATE_EMAIL)) {
		$message = "Invalid UserEmail";
	}
	}

	if(!isset($message)) {
	if(!isset($_POST["Gender"])) {
		$message = " Gender field is required";
	}
	}

	if(!isset($message)) {
	if(!isset($_POST["Terms"])) {
		$message = "Accept Terms and conditions before submit";
	}
	}	
}
?>
<?php
if(isset($_POST['RegisterButton'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientserver";
 $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $ConfirmPassword = $_POST['ConfirmPassword'];
  $Lname = $_POST['Lname'];
  $Fname = $_POST['Fname'];
  $Mname = $_POST['Mname'];
  $Age = $_POST['Age'];
  $Course = $_POST['Course'];
  $YearLevel = $_POST['YearLevel'];
  $Department = $_POST['Department'];
  $Terms = $_POST['Terms'];
  $Gender = $_POST['Gender'];
  if($Terms == 'yes'){
    $agree = 1;
  } else {
    $agree = 2;
  }
$servername = "localhost";
$user = "root";
$pass = "";
$db = "clientserver";
// Create connection
$conn = mysqli_connect($servername, $user, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (UserID, Fname, Lname, Mname, Age, Course, YearLevel, Department, Username, Password, ConfirmPassword, Gender) VALUES(2,'$Fname','$Lname','$Mname','$Age','$Course','$YearLevel','$Department','$Username',md5('$Password'),md5('$ConfirmPassword'),'$Gender')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
</head>

<body>

<div id="Holder">
	<div id="Header"></div>
    <div id="NavBar">
    	
        <nav>
       	  <ul>
            	<li><a href="Login.php">Login</a></li>
                <!--<li><a href="Register.php">Register</a></li>-->
          </ul>
        </nav>
    
  </div>
    <div id="Content">
   	  <div id="PageHeading">
   	    <h1>Sign Up!</h1></div>
   	  <div id="ContentLeft">
   	    <h2>&nbsp;</h2>
   	  </div>
      <div id="ContentRight">
        <form id="RegisterForm" name="RegisterForm" method="post" action="">
          <table width="400" border="0" align="center">
            <tr>
              <td><table border="0">
                <tr>
                  <td><h6 id="sprytextfield1">Last Name :<span id="sprytextfield1">
                    <input name="Lname" type="text" class="StyleTxtField" id="Lname"textfieldRequiredMsg" value="<?php if(isset($_POST['Lname'])) echo $_POST['Lname']; ?>"></span></span></h6></td>
                  <td><h6><span id="sprytextfield2">
                    <label for="Fname"></label>
                    First Name :<br id="sprytextfield2" />
  <input name="Fname" type="text" class="StyleTxtField" id="Fname" value="<?php if(isset($_POST['Fname'])) echo $_POST['Fname']; ?>"/>
                  </span></h6>
                  <span><span class="textfieldRequiredMsg"></span></span></td>
                  <td><span id="sprytextfield5">
                    <label for="Mname"></label>
                    Middle Name :<br />
                    <input name="Mname" type="text" class="StyleTxtField" id="Mname"textfieldRequiredMsg" value="<?php if(isset($_POST['Mname'])) echo $_POST['Mname']; ?>"></span></span></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="sprytextfield3">Age :  <span id="sprytextfield3">
                <label for="Age"></label>
                <input name="Age" type="number" class="StyleTxtField" id="Age" value="<?php if(isset($_POST['Age'])) echo $_POST['Age']; ?>/>
              <span class="textfieldRequiredMsg">
              </span></span></h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="sprytextfield4"><span id="sprytextfield4">
                <label for="UserName"></label>
              </span>Gender:
               <input type="radio" name="Gender" value="Male" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Male") { ?>checked<?php  } ?> />
Male
<input type="radio" name="Gender" value="Female" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Female") { ?>checked<?php  } ?> />
Female
              </h6>
              <td>&nbsp;</td>
              <p>&nbsp;</p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><p>
                <label for="Course2" id="sprytextfield4">Course :                </label>
                <select name="Course" class="StyleTxtField" id="Course2" value="<?php if(isset($_POST['Course'])) echo $_POST['Course']; ?>" >
                  <option>BSIT</option>
                  <option>BSCS</option>
                </select>
<label for="YearLevel" id="spryselect1"><br />
                </label>
</p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><table border="0">
                <tr> </tr>
              </table>
                <p>
                  <label for="YearLevel2" id="spryselect1">Year Level :
                    <span id="spryselect4">
                      <select name="YearLevel" class="StyleTxtField" id="YearLevel2"  value="<?php if(isset($_POST['YearLevel'])) echo $_POST['YearLevel']; ?>">
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                      </select>
                    </span><span><span class="selectRequiredMsg"></span></span></label>
              </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="spryselect3">Department :
                  <label for="Department2"></label>
                <select name="Department" class="StyleTxtField" id="Department  value="<?php if(isset($_POST['Department'])) echo $_POST['Department']; ?>">
                  <option>College of Nursing</option>
                  <option>College of Arts and Science</option>
                  <option>College of Business Administration</option>
                  <option>College of Computer Science</option>
                  <option>College of Agriculture</option>
                  <option>Collge of Industrial Engineering</option>
                  <option>College of Education</option>
                </select>
              </h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="Username2">Username : <span id="sprytextfield7">
                <label for="Username2"></label>
                <input name="Username" type="text" class="StyleTxtField" id="Username2" value="<?php if(isset($_POST['Username'])) echo $_POST['Username']; ?>" />
              <span class="textfieldRequiredMsg">A value is required.</span></span> </h6>                <h6 id="Password">&nbsp;</h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="Password2">Password : <span id="sprypassword1">
                <label for="Password3"></label>
                <input name="Password" type="password" class="StyleTxtField" id="Password2"  value="<?php if(isset($_POST['Password'])) echo $_POST['Password']; ?>" />
                <span class="passwordRequiredMsg"></span></span> </h6>
                <h6><span><br />
            </span></h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6><span id="sprycheckbox1"> </span><span>Confirm Password :</span> <span><span id="sprypassword2">
                  <label for="ConfirmPassword"></label>
                  <input name="ConfirmPassword" type="password" class="StyleTxtField" id="ConfirmPassword"  value="<?php if(isset($_POST['ConfirmPassword'])) echo $_POST['ConfirmPassword']; ?>" />
              <span class="passwordRequiredMsg"></span></span></span></h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><p>
                <input type="checkbox" name="Terms" name="yes" />
I accept Terms and Conditions
                </p>
                <p>
                  <input type="submit" name="RegisterButton" id="RegisterButton" value="Register" />
              </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Already have account? <a href="Login.php" style="font-weight: bold; font-family:oblique;">Login</a></td>
            </tr>
          </table>
          <input type="hidden" name="hiddenField" id="hiddenField" />
        </form>
      </div>
  </div>
    <div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
</script>
</body>
</html>