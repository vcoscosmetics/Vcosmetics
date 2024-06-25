<?php
$dbname="vcosmetics";
$dbuser="root";
$pass="";
$host="localhost";
$conn = new mysqli($host,$dbuser,$pass,$dbname);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>