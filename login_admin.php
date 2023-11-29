<?php

// Connect to the database
$server = "localhost";
$user = "root";
$pass = "";
$db = "yorkmars";
$dbConn = mysqli_connect($server, $user, $pass, $db);

if (!$dbConn) {
    die('Error: Failed to connect to MySQL database');
}

// Get form data
$username = $_POST['name'];
$password = $_POST['ps'];

// Validate user credentials
$sql = "SELECT * FROM adminlogin WHERE user_email='$username' AND password='$password'";
$result = mysqli_query($dbConn, $sql);

if (mysqli_num_rows($result) == 1) {
    // User credentials are valid
    // Redirect to protected area or perform next action
    header('Location: table_user.php');
    // echo "Success";
} else {
   // Invalid username or password
    // $errorMessage = "Invalid username or password.";
    header ('Location: index.php');
}

// Close database connection as before
mysqli_close($dbConn);


?>