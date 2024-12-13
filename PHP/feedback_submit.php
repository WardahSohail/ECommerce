<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (name, email, feedback) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $feedback); // Corrected to three "s"

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$stmt->execute();
$stmt->close();
$conn->close();

// Redirect to the same page to display the feedback
header("Location: Contact Us.html"); // Replace with your actual file name if different
exit();
?>
