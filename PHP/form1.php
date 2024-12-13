<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = htmlspecialchars(trim($_POST['feedback']));
    $suggestions = htmlspecialchars(trim($_POST['suggestions']));

    // Validate data and process accordingly
    // Example: store in a file or database
    $file = 'feedback.txt';
    $current = file_get_contents($file);
    $current .= "Feedback: $feedback\nSuggestions: $suggestions\n\n";
    file_put_contents($file, $current);

    echo "Thank you for your feedback!";
}
?>	