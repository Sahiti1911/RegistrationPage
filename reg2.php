<?php
// Start or resume the session
session_start();

// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = "sia";
$database = "wad";


// Create connection
$connection = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the data into the database
    $sql = "INSERT INTO det (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
    
    if ($connection->query($sql) === TRUE) {
        // Store data in session variables
        $_SESSION["registeredUsername"] = $username;
        $_SESSION["registeredEmail"] = $email;
        
        // Redirect to success page
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    // Close the database connection
    $connection->close();
}
?>