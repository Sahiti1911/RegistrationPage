<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
</head>
<body>
    <h1>Registration Confirmation</h1>
    <?php
    if (isset($_GET['data'])) {
        $registrationData = urldecode($_GET['data']);
        echo "<p>$registrationData</p>";
    
    
    } else {
        echo "<p>No registration data available.</p>";
    }
    ?>
</body>
</html>
