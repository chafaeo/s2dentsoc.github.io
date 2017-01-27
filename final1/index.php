
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="resources/assets/signup-form.css" type="text/css" />

<!-- scripts here -->
<script src="resources/assets/jquery-1.11.2.min.js"></script>
<script src="resources/assets/jquery.validate.min.js"></script>
<script src="resources/js/login/login.js"></script>
</head>

<body>

	<div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form role="form" method="post" autocomplete="off">
         
         <div class="form-header">
         	<h3 class="form-title"><i class="fa fa-user"></i> Sign in</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">

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
                 <a id="login" onclick="login()" onkeypress="return runScript(event)" class="btn btn-info col-lg-12"> Sign In</a>
                 <br><br>
                 <div class="row">
                 	<a href="" class="pull-left"> Lost Password?</a>
                 	<a href="view/register" class="pull-right"> Sign up</a>
                 </div>
            </div>

            </form>
            
           </div>

	</div>
</body>
</html>
