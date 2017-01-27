<?php 
 include '../inc/config.php';
 include '../inc/database.php';
 
 $skill_id = $_POST['skill_id'];

 $query = $db->prepare('DELETE FROM `skill` WHERE `skill_id` = ?');
 $query->execute(array($skill_id));
 echo "success";
?>