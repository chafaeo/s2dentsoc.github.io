<?php 

 function add_category (){
 	require(ROOT_PATH . "../inc/database.php");
    try{
 	$category = $_POST['category'];
    $query = $db->prepare('INSERT INTO `category`(`category`) VALUES(?)');
    $query->execute(array($category));
    $rows_affted = $query->rowCount();
   }catch(Exception $e){
   	 echo "Could not insert data to the database!";
   }
   return $rows_affted;
 }

 function add_skill (){
	 require(ROOT_PATH . "../inc/database.php");
     try{
	 $category = $_POST['category'];
	 $skill = $_POST['skill'];

	 $category_id = $db->prepare('SELECT `category_id` FROM `category` WHERE `category` = ?');
	 $category_id->execute(array($category));

	while($row = $category_id->fetch()){
		$id = $row['category_id'];
	}

	$query = $db->prepare('INSERT INTO `skill`(`skill`,`category_id`) VALUES(?,?)');
	$query->execute(array($skill,$id));
    }catch(Exception $e){
        echo "Could not insert data to the database!";
    }
	return $query->rowCount();
 }
?>