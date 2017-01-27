<?php 
include '../inc/config.php';
include '../inc/database.php';
$id = $_POST['id'];
try{
$query = "DELETE FROM user WHERE user_id = $id";
$result = $db->query($query) or die("error");
echo "ok";
}catch(Exception $e){
  echo "Unable to delete!";
}

?>