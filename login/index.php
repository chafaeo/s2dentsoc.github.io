<?php 
session_start();
$pageTitle = 'Login';
include '../inc/config.php';
include '../inc/header.php';
include '../inc/nav.php';?>
   <div class="row">
      <div class="col-sm-12 col-md-12">
       <h1 style="text-align: center;">Login</h1>
       <form class = "form-signin w3-card-8 <?php if(isset($_SESSION['error'])){echo 'animated shake';}?>" role = "form" action = "../actions/check_user_login.php" method="post">
        
          <table width="400" border="0" align="center">
            <tr>
              <td><h6><span id="sprytextfield1">
                <label for="UserName"></label>
               <b> Username :</b><br />
                <br />
                <input <?php if(isset($_SESSION['error'])){echo 'style="border: 1px solid red;"';}?> name="Username" type="text" class="StyleTxtField" placeholder = "Enter username" required autofocus/>
              </span></h6>
              <span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h6><span id="sprypassword1">
                <label for="Password"></label>
                Password :<br /><br />
                <input <?php if(isset($_SESSION['error'])){echo 'style="border: 1px solid red;"';}?> name="Password" type="password" class="StyleTxtField" id="Password" placeholder = "Enter password" />
              </span></h6>
              <span><span class="passwordRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input class="btn btn-primary" type="submit" name="login" id="LoginButton" value="LogIn" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form>
      </div>
    </div>
</div>
<?php include '../inc/footer.php';?>