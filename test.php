<?php
$servername = l,"177.104.160.170";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, port: 3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>