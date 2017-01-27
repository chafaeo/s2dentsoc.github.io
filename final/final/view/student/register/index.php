
<!DOCTYPE html>
<html>
<head>
<title></title>
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
         	<h3 class="form-title"><i class="fa fa-user"></i> Find work as an OJT, create your account</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              submitted
              </div>

              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
	                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
	                   <input name="fname" id="txtfname" type="text" class="form-control" placeholder="First Name">
	                   </div>
	                   <span class="help-block" id="error"></span>                  
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
	                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
	                   <input name="lname" id="txtlname" type="text" class="form-control" placeholder="Last Name">
	                   </div>
	                   <span class="help-block" id="error"></span>	                   
                   </div>
                            
             </div>
                    
         	  <div class="form-group myEmail">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="email" id="txtemail" type="text" class="form-control" placeholder="Email">
                   </div> 
                   <span class="help-block emailErrorTxt" id="error"></span>                     
              </div>

              <div class="form-group">
              		<div class="input-group">
                   	<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   		<input required type="text" name="phonenumber" id="txtnum" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="Contact Number"/>
                   	</div> 
                   	<span class="help-block" id="error"></span> 
	          </div>

	          <div class="form-group uname">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" type="text" id="txtuname" class="form-control" placeholder="Username">
                   </div>
                   <span class="help-block unameErrorTxt" id="error"></span>
              </div>
                        
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" id="txtpword" type="password" class="form-control" placeholder="Retype Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>    
              </div>

             <h4>Resume	</h4>
              <div class="form-group resume">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-file"></span></div>
                        <input type="file" id="txtfile" class="form-control" name="File" />
                  </div>
                  <span class="help-block resumeErrorTxt" id="error"></span> 
                  <br>
              </div>

              <div class="form-group">
            
                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="#" title="You may read our terms and conditions by clicking on this link">terms and conditions</a>.</label><span class="req"> </span>
              	<span class="help-block" id="error"></span> 
              </div>

            
            <div class="form-footer">
            	<a href="../../" type="submit" name="SubmitBtn" id="SubmitBtn" class="btn btn-default pull-left"> Sign in
                 </a>
                 <button type="submit" name="SubmitBtn" id="SubmitBtn" class="btn btn-info pull-right"> Sign Up
                 </button>
            </div>
            <br>

            </form>
            
           </div>

	</div>
</body>
</html>
