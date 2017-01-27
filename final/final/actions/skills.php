<?php
	session_start();
	include '../include/connect.php';
	$user_id = $_SESSION['userID'];
	$categoryID = '';
	$count = 0;
	
	$q=mysql_query("SELECT `category_id` AS categoryID, `category` AS category 
						FROM `category`") or die(mysql_error());

	echo '<div class="col-lg-12">
				<h1>
					Welcome! <small>Tell us about the type of work you are interested in.</small>
				</h1>  
				<hr>  
			  	<br>
			</div>';
	echo '<div class="col-lg-12" style="border-left: 1px solid #CCC; border-right: 1px solid #CCC; border-bottom: 1px solid #CCC;">
			<div class="col-lg-12">';

	while($row=mysql_fetch_array($q)){ // retrieving category
		$count++;
		$categoryID = $row['categoryID'];
		
		echo '<div class="col-lg-5">
				<div>
					<b>'.$row['category'].'</b>
				</div>
			    <hr>';
		
		$q1=mysql_query("SELECT `skill_id` as skillID, `skill` as skill, `category_id` as catID 
							FROM `skill`
							WHERE `category_id` = $categoryID") or die(mysql_error());
		
		while($row1=mysql_fetch_array($q1)){ // retrieving skills
		
			echo '<div class="checkbox">
                        <label>
                            <input type="checkbox" name="skills" id="'.$row1['skill'].'" value="'.$row1['skillID'].'"/>'.$row1['skill'].'
                        </label>
                    </div>';
		}
		
		echo '</div>
			<div class="col-lg-2"></div>';

		if($count%2 == 0){
			echo '</div><!-- col-lg-12 CLOSE -->
					<div class="col-lg-12">
						<br>';
		}
	}

	echo '</div>';
	echo '<div class="col-lg-12">
			<button class="btn btn-primary pull-right" onclick="saveSkills('.$user_id.')"> Save</button>
			<br>
			<br>
			<br>
		</div>';
	echo '</div>';

?>