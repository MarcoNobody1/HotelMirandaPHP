<?php
$servername="localhost";
$username="root";
$password="root";
$database="mirandadb";

$connection = new mysqli($servername,$username,$password,$database);

// Check connection
if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connection -> connect_error;
  exit();
}
?>