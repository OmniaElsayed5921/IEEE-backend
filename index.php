<?php
 session_start();
 require 'condp.php';
    if(! isset($_SESSION['username'])){
     header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username'] ;
    ?>
    </h1>
    <a href="logout.php" >logout</a>
</body>
</html>