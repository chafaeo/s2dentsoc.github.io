<?php 
 include '../inc/config.php';
 include '../inc/database.php';

 $category = $_POST['category'];
 $query = $db->prepare('INSERT INTO `category`(`category`) VALUES(?)');
 $query->execute(array($category));
 echo "success";
?>