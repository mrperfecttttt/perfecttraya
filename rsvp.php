<?php
include 'dbconnect.php';

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitRSVPButton"])) {
    // Prepare and bind parameters
    if ($_POST['attendance'] == 'yes') {
        // If the user clicked "Yes"
        $stmt = $conn->prepare("INSERT INTO rsvp (guest_name, phone_number, attending_event, guest_email, number_of_guests) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $name, $phone, $attending_event, $email, $pax);
    } else {
        // If the user clicked "No"
        $stmt = $conn->prepare("INSERT INTO rsvp (guest_name, phone_number, attending_event) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $phone, $attending_event);
    }

    // Get form data and sanitize
    $name = $_POST['RSVP-name'];
    $phone = $_POST['RSVP-phone'];
    $attendance = $_POST['attendance'];
    $email = ($_POST['attendance'] == 'yes') ? $_POST['RSVP-email'] : ''; // Email only if attending
    $pax = ($_POST['attendance'] == 'yes') ? $_POST['RSVP-pax'] : 0; // Pax only if attending

    // Convert attendance value to boolean
    $attending_event = ($attendance == 'yes') ? 1 : 0;

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect to page.php upon successful RSVP submission
        header("Location: page.php?success=2");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    header("Location: failed.html");
}

?>
