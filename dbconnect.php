<?php
$servername = "sql313.infinityfree.com"; 
$username = "if0_36323276"; 
$password = "zkV0nZGYXIuXRVp"; 
$database = "if0_36323276_db_kakma"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
