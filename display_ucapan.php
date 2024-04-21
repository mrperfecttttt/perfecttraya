<?php
include 'dbconnect.php';

// Retrieve data from the database in descending order
$sql = "SELECT nama, pesan FROM ucapan ORDER BY waktu DESC"; // or ORDER BY id DESC if using id column
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='delius-regular text-center mt-2'>" . $row["nama"] . "</div>";
        echo "<div class='mate-sc-italic-guest text-center'>" . $row["pesan"] . "</div>";
    }
} else {
    echo "No ucapan found.";
}

// Close connection
$conn->close();
?>
