<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li id="login" <?php if($pageTitle == "Login"){echo 'style="background-color: #a6a6a6;color:black;"';}?>><a href="<?php echo BASE_URL;?>login/"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        <li id="register" <?php if($pageTitle == "Register"){echo 'style="background-color: #a6a6a6;color:black;"';}?>><a href="<?php echo BASE_URL;?>register/"><span class="glyphicon glyphicon-registration-mark"></span>Register</a></li>
        <li id="logout" <?php if($pageTitle == "Logout"){echo 'style="background-color: #a6a6a6;color:black;"';}?>><a href="<?php echo BASE_URL;?>logout/"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top: 100px;">