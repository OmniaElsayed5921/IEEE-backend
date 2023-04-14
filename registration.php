<?php
 require 'Session.php';
 if(isset($_POST["submit"])){
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $Confirmpassword = $_POST['ConfirmPassword'];
    $duplicate = mysqli_query( $con , " SELECT * FROM persondata WHERE Password = '$password' OR Username = '$username'  ");

    if(mysqli_num_rows($duplicate) > 0){
     echo 
     "<script> alert('Username has already taken') ;   </script>"   ;
    }
   else{
    if( $password == $Confirmpassword  ){
        $query = "INSERT INTO persondata VALUES('$username' ,'$password') ";
        mysqli_query($con,$query);
        echo 
     "<script> alert('Registration Sucessfuly') ;   </script>"   ;
    }
    else{
        echo 
        "<script> alert('Password does not match') ;   </script>"   ;   
    }
   }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <form class="" action="" method="post" autocomplete="off" >
    <div>
    <label for="Username" >Username</label>
    <input type="text" name="Username" >
    </div>
    <br>
    <div>
    <label for="Password">Password</label>
     <input type="password" name="Password" >
    </div>
    <br>
    <label for="Confirm Password">Confirm Password</label>
     <input type="Password" name="ConfirmPassword" >
    </div>
    <br>
    <button type="submit" name="submit" >Register</button>
    </form>
    <br>
    <a href="login.php">login</a>
</body>
</html>