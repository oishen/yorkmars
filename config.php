<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "yorkmars";
    $conn = mysqli_connect($server, $user, $pass, $db);

    if($conn === FALSE){
        die("Connection failed:".$conn->mysqli_connect_error);
    }
?>