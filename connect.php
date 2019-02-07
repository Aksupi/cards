<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1600540";
 $password = "wyDIAu57e";
 $dbname = "a1600540";
 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>
