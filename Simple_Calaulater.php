<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" >
    <input type= "text"  name="num1" >
    <select name = "operator">
      <option>+</option>
      <option>-</option>
      <option>*</option>
      <option>/</option>
    </select>
    <input type="text" name="num2" >
    <input type="submit" name="submit" >
</form>
<?php
  if(isset($_GET["submit"])){
    $num1 = $_GET["num1"] ;
    $num2 = $_GET["num2"] ;
    $operator = $_GET["operator"] ;
    if( $operator == "+") {
        echo $num1 . " + " . $num2 . " = " . ($num1+$num2) ;
    }
    else if( $operator == "-") {
        echo $num1 . " - " .  $num2 . " = " . ($num1-$num2) ;
    }
   else  if( $operator == "*") {
        echo $num1 . " * " .  $num2 . " = " . ($num1*$num2) ;
    }
    else {
        echo $num1 . " / " .  $num2 . " = " . ($num1/$num2) ;
    }
  }
?>
</body>
</html>