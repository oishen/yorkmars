<?php
    require_once('config.php');
    $query = "select * FROM tableuser";
    $result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="table_user.css">
    <title>GGMT</title>
</head>
<body>
    
    <div id="sec1">
        <div class="container">
            <h2>Welcome To Admin Dashboard</h2>
        </div>
    </div>

    <div id="sec2">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Table User</h1>
                </div>

                <div class="col-sm">
                    <a href="table_user_create.html">Create New User</a>
                </div>
            </div>  

            <div onscroll="myFunction()" id="myDIV">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Pwd</td>
                            <td>Photo</td>
                            <td>Create At</td>
                            <td>Action</td>
                        </tr>
                    </thead>
    
                    <tbody>
                        <tr>
    
                            <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>
    
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['password']?></td>
                            <td><?php echo $row['photo']?></td>
                            <td><?php echo $row['create_at']?></td>
                            <td>
                                <div>
                                    <input type="button" name="edit" id="edit" value="Edit">
                                    <input type="button" name="delete" id="delete" value="Delete">
                                </div>
                            </td>
                        </tr>
    
                            <?php
                                }
                            ?>
                    </tbody>
    
                </table>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
          const element = document.getElementById("myDIV");
          let x = element.scrollLeft;
          let y = element.scrollTop;
        }
    </script>
</body>
</html>