<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "db_peerapat";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>