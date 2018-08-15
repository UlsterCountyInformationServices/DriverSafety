<?php
$servername = "10.100.2.37";
$username = "safety";
$password = "safety";
$dbname = "SafetyDL";
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

?>