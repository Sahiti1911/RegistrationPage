<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and process registration data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Add your validation and data processing logic here
    // For demonstration purposes, we'll just return a message
    $message = "Registration successful! ";
    $ur="Username: $username"
    $e="Email: $email"
    echo $message;
    echo $ur;
    echo $e;
} else {
    echo "Invalid request.";
}
?>
