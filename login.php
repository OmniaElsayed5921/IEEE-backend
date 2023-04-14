<?php
require 'Session.php';
if(isset($_POST["submit"])){
    $username = $_POST['Username'];
    $password = $_POST['password'];
    $result = mysqli_query( $con , " SELECT * FROM persondata WHERE Password  = '$password' OR Username = '$username'  ");
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0 ){
        if( is_array($row) ){
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['password'] = $row['password'];
        header("Location: index.php");
        }else{
            echo 
            "<script> alert('Username or  password wrong') ;   </script>"   ;   
        }

    }else{
        echo 
        "<script> alert('User not Registered') ;   </script>"   ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Please login</h2>
    <form class="" action="" method="post" autocomplete="off" >
    <label for="Username">Username</label>
    <input type="text" name="Username" > <br>
    <br>
    <label for="password" >Password</label>
    <input type="password" name="password" ><br>
    <button type="submit" name="submit">login</button>
    </form>
    <a href="registration.php">Registration</a>
</body>
</html>