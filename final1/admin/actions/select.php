<?php
function student_verified () {
	require_once(ROOT_PATH . "admin/inc/config.php");
	require_once(ROOT_PATH . "admin/inc/database.php");
     $query = $db->query("SELECT * FROM `account` WHERE `type_id` = 2 AND `verify` = 'y'");
     return $query->fetchAll(PDO::FETCH_ASSOC);
}
function student_unverified () {
	require_once(ROOT_PATH . "admin/inc/database.php");
     $query = $db->query("SELECT * FROM `account` WHERE `type_id` = 2 AND `verify` = 'n'");
     return $query->fetchAll(PDO::FETCH_ASSOC);
}
try{
  student_verified();
}catch(Exception $e){
	echo "Error!";
}
?>