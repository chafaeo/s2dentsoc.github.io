<?php 
 include '../inc/config.php';
 include '../inc/database.php';

 $category_id = $_POST['category_id'];
 $query = $db->prepare('DELETE FROM `category` WHERE `category_id` = ?');
 $query->execute(array($category_id));
 echo "success";
?>