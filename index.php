


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>GGMT</title>
</head>
<body>

    <div id="sec1">
        <form method="post" action="login_admin.php">
            <h1>Login Admin</h1><br><br>
            <span id="error-message"></span>

            <div id="div1">
                <input type="text" id="inp1" name="name" required>
                <label for="inp1">username or email</label>
            </div><br>

            <div id="div2">
                <input type="text" id="inp2" name="ps" required>
                <label for="inp2">password</label>
            </div><br><br>
            <input type="submit" id="btn1" value="Submit"><br>
            <a href="user.html" id="a">Login with User</a>
        </form>
    </div>

</body>
</html>

