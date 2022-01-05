<?php
$servername ="rdsinstance.cdxhhswkgl8b.us-east-2.rds.amazonaws.com";
$username = "umesh";
$password = "umesh123";
$dbname = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  echo "connected successfully";
}
?>
