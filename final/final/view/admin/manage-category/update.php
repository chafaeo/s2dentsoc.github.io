<?php 
 include '../inc/config.php';
 include '../inc/database.php';

 $category = $_POST['category'];
 $category_id = $_POST['category_id'];

 $query = $db->prepare('UPDATE `category` SET `category` = ? WHERE `category_id` = ?');
 $query->execute(array($category,$category_id));
 echo "success";
?>