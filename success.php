<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
</head>
<body>
    <h1>Registration Successful</h1>
    <p>Thank you for registering!</p>
    
    <h2>Your Registration Details:</h2>
    <?php
    // Start or resume the session
    session_start();
    
    // Display the registered user's data from session variables
    if (isset($_SESSION["registeredUsername"]) && isset($_SESSION["registeredEmail"])) {
        $registeredUsername = $_SESSION["registeredUsername"];
        $registeredEmail = $_SESSION["registeredEmail"];
        
        echo "<p>Username: $registeredUsername</p>";
        echo "<p>Email: $registeredEmail</p>";
    } else {
        echo "Data not available.";
    }
    ?>

    <p><a href="registration.html">Go back to registration</a></p>
</body>
</html>
