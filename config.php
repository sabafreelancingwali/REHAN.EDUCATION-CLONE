<?php
// config.php - Database Connection
$host = "localhost";
$user = "uei4bkjtcem6s";
$pass = "wmhalmspfjgz";
$db   = "db0tt0qoh30or9";
 
$conn = mysqli_connect($host, $user, $pass, $db);
 
if(!$conn){
  die("Database connection failed: " . mysqli_connect_error());
}
?>
 
