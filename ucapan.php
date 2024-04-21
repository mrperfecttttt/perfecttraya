<?php
include 'dbconnect.php';

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitWishesButton"])) {
    // Check if form inputs are set
    if (isset($_POST["nameInput"]) && isset($_POST["wishesInput"])) {
        // Get form data
        $name = $_POST["nameInput"];
        $wishes = $_POST["wishesInput"];

        // Prepare SQL statement
        $sql = "INSERT INTO ucapan (nama, pesan) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("ss", $name, $wishes);

        // Execute statement
        if ($stmt->execute()) {
            header("Location: page.php?success=1");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // Handle case where form inputs are not set
        echo "Form inputs are not set.";
    }
} else {
    header("Location: failed.html");
}

// Close connection
$conn->close();
?>
