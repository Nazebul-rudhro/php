<?php
include "db.php";
session_start();
if(isset($_SESSION['next_page'])){
    header("refresh:05;url=home.php");
}


$sql = "SELECT * FROM `login_user`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Log In </title>
  </head>
  <body>

    <div class="container p-4 my-4">
        <form action="logincfg.php?=<?php $row['id'];?>" method="post" class="form card p-4">
            <h2 class="text-center"><a href="#" style="text-decoration: none;"> Log In Form </a></h2>
            <label>Username : </label>
            
            <input type="text" name="lg_user" class="form-control mb-3" id="user" onchange="uperCase()" placeholder="Enter you username" required>
            <label> Email : </label>
            <input type="email" name="lg_email" class="form-control mb-3" placeholder="Enter you Email" required>
            <label> Password : </label>
            <input type="password" name="lg_pass" class="form-control mb-3" placeholder="Enter you Password" required>
            <input type="submit" value="Login" name="lg_submit" class="form-control mb-3 bg-success">
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     

    </script>
    <script>
        function uperCase(){
         const x = document.getElementById("user");
         x.value = x.value.toUpperCase();
     }
    </script>
  </body>
</html>