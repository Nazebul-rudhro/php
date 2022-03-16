<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form action="" method="post" class="form">
      <input type="text" name="user" id="" class="form-controm mb-2">
      <input type="text" name="pass" id="" class="form-controm mb-2">
      <input type="submit" value="login" name="bsubmit">
  </form>  
  </body>
</html>


<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'log') or die('unable connection');
if(isset($_POST['bsubmit'])){
   $username = $_POST['user'];
   $password = $_POST['pass'];
//    echo $username. " ". $password;
   $select = mysqli_query($conn, "SELECT * FROM `loginform` WHERE `user` = '$username' AND `pass` = '$password' ");
   $row = mysqli_fetch_array($select);
   if(is_array($row)){
       $_SESSION["users"] = $row['user'];
       $_SESSION["passwords"] = $row['pass'];
   }else{
       echo "<script> alert ('invaild Username or Password')</script> ";
   }


}

if(isset($_SESSION["users"])){
    header("location: index.php");
}


?>