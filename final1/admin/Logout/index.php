<?php session_start();
   if(session_destroy()){
   include '../inc/config.php';
   header("Location: ".BASE_URL);
  }
?>