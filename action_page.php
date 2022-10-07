<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anwar_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
var_dump($result);

if ($result) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		var_dump($row);

		  }
} 
else {
  echo "0 results";
}

$conn->close();




?>


