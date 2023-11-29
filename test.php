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
$sql = "SELECT * FROM adminlogin WHERE user&email='$username' AND password='$password'";


// Close database connection as before

?>

<script>
    // Use JavaScript to access PHP variable and display error message
    const errorMessageElement = document.getElementById("error-message");
    errorMessageElement.textContent = "<?php echo $errorMessage; ?>";
</script>
