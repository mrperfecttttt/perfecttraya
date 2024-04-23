<?php
$servername = "localhost"; 
$username = "mrperfectt"; 
$password = "mRperfectt123a"; 
$database = "db_testing"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
