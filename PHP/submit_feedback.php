<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (name, email, message, feedback, suggestions) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $message, $feedback, $suggestions);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$feedback = $_POST['feedback'];
$suggestions = $_POST['suggestions'];

$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
