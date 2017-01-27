<?php
$pageTitle = "Update";
include '../inc/config.php';
include '../inc/database.php';
include '../inc/header.php';
include '../inc/nav.php';
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE user_id = $id";
$result = $db->query($query);
while($rows = $result->fetch()){
?>
  <div class="row">
  	<div class="col-sm-10 col-md-10">
  	    <h1 style="text-align: center;">Update User</h1>
    <?php if(isset($_GET['id'])){?>
  		<form id="RegisterForm" method="post" action="<?php echo BASE_URL;?>actions/update.php?id=<?php echo $_GET['id'];?>">
          <table width="400" border="0" align="center">
            <tr>
              <td><table border="0">
                <tr>
                  <td><h6 id="sprytextfield1">Last Name :<span id="sprytextfield1">
                    <input name="lname" type="text" class="StyleTxtField" id="Lname" value="<?php echo $rows['lname'];?>">
                    </span></span></h6>
                  </td>
                  <td><h6><span id="sprytextfield2">
                    <label for="Fname"></label>
                    First Name :<br id="sprytextfield2" />
                    <input value="<?php echo $rows['fname'];?>" name="fname" type="text" class="StyleTxtField" id="Fname"/>
                  </span></h6>
                  <span><span class="textfieldRequiredMsg"></span></span></td>
                  <td><span id="sprytextfield5">
                    <label for="Mname"></label>
                    Middle Name :<br />
                    <input value="<?php echo $rows['mname'];?>" name="mname" type="text" class="StyleTxtField" id="Mname"></span></span></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="sprytextfield3">Age :  <span id="sprytextfield3">
                <label for="Age"></label>
                <input value="<?php echo $rows['age'];?>" name="age" type="number" class="StyleTxtField" id="Age"/>
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
               <input type="radio" name="gender" value="Male" />Male
<input type="radio" name="gender" value="Female" />Female
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
                  <option <?php if($rows['course'] == 'BSIT'){echo 'selected';}?>>BSIT</option>
                  <option <?php if($rows['course'] == 'BSCS'){echo 'selected';}?>>BSCS</option>
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
                        <option <?php if($rows['year_level'] == 'I'){echo 'selected';}?>>I</option>
                        <option <?php if($rows['year_level'] == 'II'){echo 'selected';}?>>II</option>
                        <option <?php if($rows['year_level'] == 'III'){echo 'selected';}?>>III</option>
                        <option <?php if($rows['year_level'] == 'IV'){echo 'selected';}?>>IV</option>
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
                  <option <?php if($rows['department'] == 'College of Nursing'){echo 'selected';}?>>College of Nursing</option>
                  <option <?php if($rows['department'] == 'College of Arts and Science'){echo 'selected';}?>>College of Arts and Science</option>
                  <option <?php if($rows['department'] == 'College of Business Administration'){echo 'selected';}?>>College of Business Administration</option>
                  <option <?php if($rows['department'] == 'College of Computer Science'){echo 'selected';}?>>College of Computer Science</option>
                  <option <?php if($rows['department'] == 'College of Agriculture'){echo 'selected';}?>>College of Agriculture</option>
                  <option <?php if($rows['department'] == 'College of Industrial Engineering'){echo 'selected';}?>>Collge of Industrial Engineering</option>
                  <option <?php if($rows['department'] == 'College of Education'){echo 'selected';}?>>College of Education</option>
                </select>
              </h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="Username2">Username : <span id="sprytextfield7">
                <label for="Username2"></label>
                <input name="username" type="text" class="StyleTxtField" id="Username2" value="<?php echo $rows['username'];?>" />
              <span class="textfieldRequiredMsg">A value is required.</span></span> </h6>                <h6 id="Password">&nbsp;</h6></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6 id="Password2">Password : <span id="sprypassword1">
                <label for="Password3"></label>
                <input name="password" type="password" class="StyleTxtField" id="Password2" />
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
              <td>
                <p>
                  <input type="submit" class="btn btn-primary" name="update" id="RegisterButton" value="Update" />
              </p></td>
            </tr>
          </table>
          <input type="hidden" name="hiddenField" id="hiddenField" />
        </form>
      <?php }?>
  	</div>
  </div>
<?php }?>
<?php include '../inc/footer.php';?>