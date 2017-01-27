<?php
$pageTitle = "Register";
include '../inc/config.php';
include '../inc/database.php';
include '../inc/header.php';
include '../inc/nav2.php';
?>
  <div class="row">
  	<div class="col-sm-10 col-md-10">
  	    <h1 style="text-align: center;">Register</h1>
  		<form id="RegisterForm" method="post" action="<?php echo BASE_URL;?>actions/register.php">
          <table width="400" border="0" align="center">
            <tr>
              <td><table border="0">
                <tr>
                  <td><h6 id="sprytextfield1">Last Name :<span id="sprytextfield1">
                    <input name="lname" type="text" class="StyleTxtField" id="Lname" value="">
                    </span></span></h6>
                  </td>
                  <td><h6><span id="sprytextfield2">
                    <label for="Fname"></label>
                    First Name :<br id="sprytextfield2" />
                    <input name="fname" type="text" class="StyleTxtField" id="Fname"/>
                  </span></h6>
                  <span><span class="textfieldRequiredMsg"></span></span></td>
                  <td><span id="sprytextfield5">
                    <label for="Mname"></label>
                    Middle Name :<br />
                    <input name="mname" type="text" class="StyleTxtField" id="Mname"></span></span></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="sprytextfield3">Age :  <span id="sprytextfield3">
                <label for="Age"></label>
                <input name="age" type="number" class="StyleTxtField" id="Age"/>
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
               <input type="radio" name="gender"/>
Male
<input type="radio" name="gender" value="Female"/>
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
                <select name="course" class="StyleTxtField" id="Course2" />
                  <option>Select</option>
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
                      <select name="yearlevel" class="StyleTxtField" id="YearLevel2"/>
                        <option>Select</option>
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
                <select name="department" class="StyleTxtField" id="Department"/>
                  <option>Select</option>
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
                <input name="username" type="text" class="StyleTxtField" id="Username2" value="<?php if(isset($_POST['Username'])) echo $_POST['Username']; ?>" />
              <span class="textfieldRequiredMsg">A value is required.</span></span> </h6>                <h6 id="Password">&nbsp;</h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="Password2">Password : <span id="sprypassword1">
                <label for="Password3"></label>
                <input name="password" type="password" class="StyleTxtField" id="Password2"  value="<?php if(isset($_POST['Password'])) echo $_POST['Password']; ?>" />
                <span class="passwordRequiredMsg"></span></span> </h6>
                <h6><span><br />
            </span></h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><p>
                <input type="checkbox" name="Terms" name="terms" />
I accept Terms and Conditions
                </p>
                <p>
                  <input type="submit" class="btn btn-primary" name="register" id="RegisterButton" value="Register" />
              </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Already have account? <a href="<?php echo BASE_URL;?>login/" style="font-weight: bold; font-family:oblique;">Login</a></td>
            </tr>
          </table>
          <input type="hidden" name="hiddenField" id="hiddenField" />
        </form>
  	</div>
  </div>
<?php include '../inc/footer.php';?>