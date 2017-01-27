<?php 
 include '../inc/config.php';
 include '../inc/database.php';
 
 $skill = $_POST['skill'];
 $skill_id = $_POST['skill_id'];

 $query = $db->prepare('UPDATE `skill` SET `skill` = ? WHERE `skill_id` = ?');
 $query->execute(array($skill,$skill_id));
 echo "success";
?>