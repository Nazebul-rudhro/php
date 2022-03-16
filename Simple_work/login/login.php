<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'log') or die('unable connection');


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LogIn</title>
  </head>
  <body>
    <div class="conatainer p-4">
        <form action="<?= $_SERVER["PHP_SELF"];?>" method="post" class="form px-4">
            <h2><a href="#" style="text-decoration: none;"> Login Form</a></h2>
            <input type="text" name="user" id="" class="form-control mb-2">
            <input type="text" name="password" id="" class="form-control mb-2">
            <input type="submit" value="Login" name="btn_login" class="form-control bg-warning">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = $_POST['user'];
  $pass = $_POST['password'];
  // echo $user. " " . $pass;
  $select = mysqli_query($conn, "SELECT * FROM `loginform` WHERE `user` = '$user' AND `pass`= '$pass' ");
  $row = mysqli_fetch_array($select);
  if(is_array($row)){
    $_SESSION['username'] = $row['user'];
    $_SESSION['pass'] = $row['pass'];
  }else{
    echo "<script> alert('Invild user and pass'); </script>";
  }
}
if(isset($_SESSION['username'])){
 header("location: index.php");
}

// if(isset($_POST['btn_login'])){
//     $user = $_POST['user'];
//     $password = $_POST['password'];
//     $select = mysqli_query($conn, "SELECT * FROM `loginform` WHERE `user` = '$user' AND `pass` = '$password' ");
//     $row = mysqli_fetch_array($select);
//     if(is_array($row)){
//         $_SESSION["user"] = $row['user'];
//         $_SESSION["password"] = $row['pass'];
//     }else{
//         echo "<script> alert ('invaild Username or Password')</script> ";
//     }


// }
// if(isset($_SESSION["user"])){
//     header("location: index.php");
// }




?>