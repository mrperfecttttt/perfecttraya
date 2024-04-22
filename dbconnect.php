<?php
$servername = "db-perfecttraya-do-user-15631220-0.c.db.ondigitalocean.com"; 
$username = "doadmin"; 
$password = "AVNS_OftWmxoSd-XUnGm7B0z"; 
$database = "db_syerah"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
