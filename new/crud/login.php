<?php
include "dbconnect.php";
$sql_query = "SELECT * FROM `login_from`";
$add = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($add);
$id = $row['id'];



if(isset($_SESSION['user'])){
  header("location: index.php");
}



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
    <div class="container p-5 my-5 ">
    <form action="from_config.php?new_id=<?php echo $id ; ?>" method="post" class="form mx-5 card p-4">
        <h2  class="text-center"><a href="#" style="text-decoration: none; color:green; ">Login Form </a></h2>
    <label>Email : </label>
    <input type="email" name="lg_email" placeholder="Enter your Email '@gmail.com'" class="form-control mb-3" required>
    <label>Password : </label>
    <input type="password" name="lg_password" placeholder="Enter your Unique Password" class="form-control mb-3" required>
    <input type="submit" value="Log In" name="lg_submit"  class="form-control mb-3 bg-warning">
    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>