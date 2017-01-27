<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'resources.php';
	?>
</head>

<body onload="getSkills()" style="color:#494949;">

    <!--header -->
    <?php
    	session_start();
    	include '../header/header.php';
    ?>
        <div class="container-fluid" style="background-color:#f5f5f5; min-height:580px;">

            	<div class="row" style="margin-bottom:80px;">
            		
                    	<?php
                    		if($_SESSION['check_skills']=='N'){
    						?>
    						<div class="col-lg-2"></div>
                    			<div class="col-lg-8">
									<div class="col-lg-12" id="skill-container">
										
									</div>

		                    	</div>
		            		<div class="col-lg-2"></div>
							<?php
				    		}
				    		else
				    		{
				    			include 'jobs.php';
				    		}
				        ?>
						<br> 
                </div>

        </div>
        <!-- /.container-fluid -->
    <?php
    	include '../../common/footer/footer.php';
    ?>

</body>

</html>
