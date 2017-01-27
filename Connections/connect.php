<?php
$servername = "localhost";
$Username = "root";
$Password = "";
$db = "clientserver";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $Username, $Password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
