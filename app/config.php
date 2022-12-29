<?php

$servername = "mysql";
$username = "root";
$password = "secret123";
$databasename = "Project";

// Create database connection 
try{
     
$db = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
  
// Check connection  
}
catch (PDOException $e) {
    echo $e->getMessage();
}

?>