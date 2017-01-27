<!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button style="background-color: #1b7a9f; border: 1px solid #1b7a9f;" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span style="background-color: white;" class="icon-bar"></span>
                    <span style="background-color: white;" class="icon-bar"></span>
                    <span style="background-color: white;" class="icon-bar"></span>
                </button>
                <a id="navbar-brand" class="navbar-brand" href="<?php echo BASE_URL;?>admin/">Welcome <?php echo $_SESSION['user'];?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                    -->
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Logout/"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li style="<?php if($pageTitle == 'Dashboard'){echo 'background-color: #1b7a9f;';} ?>">
                        <a style="color: white;" id="side-nav-link" href="<?php echo BASE_URL;?>admin/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li style="<?php if($pageTitle == 'Student'){echo 'background-color: #1b7a9f;';} ?>">
                        <a style="color: white;" id="side-nav-link" href="<?php echo BASE_URL;?>admin/students/"><i></i>Student</a>
                    </li>
                    <li style="<?php if($pageTitle == 'Manage Category' OR $pageTitle == 'Add New Category'){echo 'background-color: #1b7a9f;';} ?>">
                        <a style="color: white;" id="side-nav-link" href="<?php echo BASE_URL;?>admin/manage-category/"><i></i>Manage Category</a>
                    </li>
                    <li style="<?php if($pageTitle == 'Manage Skill' OR $pageTitle == 'Add New Skill'){echo 'background-color: #1b7a9f;';} ?>">
                        <a style="color: white;" id="side-nav-link" href="<?php echo BASE_URL;?>admin/manage-skill/"><i></i>Manage Skill</a>
                    </li>
                    <li style="<?php if($pageTitle == 'View Evaluation'){echo 'background-color: #1b7a9f;';} ?>">
                        <a style="color: white;" id="side-nav-link" href="<?php echo BASE_URL;?>admin/view-evaluation/"><i></i>View Evaluation</a>
                    </li>
                    <li style="<?php if($pageTitle == 'View Reports'){echo 'background-color: #1b7a9f;';} ?>">
                        <a style="color: white;" id="side-nav-link" href="<?php echo BASE_URL;?>admin/view-reports/"><i></i>View Reports</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>