

<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "yorkmars";
    $name = $_POST['name'];
    $password = $_POST['ps'];
    $photo = $_POST['photo'];
    $date = $_POST['date'];
    $conn = mysqli_connect($server, $user, $pass, $db);
    $sql = "INSERT INTO `tableuser` (`name`, `password`, `photo`, `create_at`) VALUES ('$name', '$password', '$photo', '$date')";

    if($conn === FALSE){
        die("Connection failed:".$conn->mysqli_connect_error);
    }

    if($conn->query($sql) === FALSE){
        echo "Connection failed:".$conn->error;
    }
    else{
        echo include 'table_user.php';
    }
?>
