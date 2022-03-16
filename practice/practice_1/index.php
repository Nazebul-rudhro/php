<?php
include "dbname.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Insert Crud</title>
    <style>
        h3{
            text-align: center;
        }
    </style>
  </head>
  <body>
   <div class="p-5">
   <form action="from_action.php" method="post" class="form p-5">
       <h2><a href="" style="text-decoration: none;">Data Insert File </a></h2>
        <label> Full Name : </label>
    <input type="text" name="btn_name"  placeholder="" required class="form-control mb-3">
    <label> Roll Number: </label>
    <input type="number" name="btn_roll" id="" placeholder="" required class="form-control mb-3">
    <label> email : </label>
    <input type="text" name="btn_email" id="" placeholder="" required class="form-control mb-2">

    <input type="submit" value="submit" class="form-control bg-warning" name="btn_submit">
    <h3><?php
    if(isset($_GET['new_id'])){ echo  $_GET['new_id'];}?></h3>
    </form>
   </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">




    </script>
  </body>
</html>