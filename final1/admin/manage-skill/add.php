<?php 
 include '../inc/config.php';
 include '../inc/database.php';

 $category = $_POST['category'];
 $skill = $_POST['skill'];

 $category_id = $db->prepare('SELECT `category_id` FROM `category` WHERE `category` = ?');
 $category_id->execute(array($category));

while($row = $category_id->fetch()){
	$id = $row['category_id'];
}

$query = $db->prepare('INSERT INTO `skill`(`skill`,`category_id`) VALUES(?,?)');
$query->execute(array($skill,$id));
echo "success";
?>