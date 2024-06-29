<?php
$dbname="u835332569_vcosmetic";
$dbuser="u835332569_vcos_admin";
$pass="Binu@#$321";
$host="localhost";
$conn = new mysqli($host,$dbuser,$pass,$dbname);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>
