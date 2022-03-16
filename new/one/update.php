<?php
// include "config.php";

// if(isset($_GET['id'])){
//     $id = $_GET['id'];
// }
//     $querys = "SELECT * FROM `ones` WHERE `id`= '$id'";
//     $results = mysqli_query($conn, $querys);
//     if(!$results){
//         die("query Failed ". mysqli_error($conn));
//     }else{
//         $row = mysqli_fetch_assoc($results);
//         print_r($row);
//     }


?>








<!-- <!doctype html>
<html lang="en">
  <head>
     Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Apps</title>
    <style>
        h4{
            text-align: center;
        } 
        a{
            text-decoration: none;
        }
    </style>
  </head>
  <body>
    
<div class="container p-3">
 <form action="#" method="" class="form p-5">
     <h2><a href="#" style="text-decoration:none;">Update Data Form</a></h2>
    <label for="">Full Name </label>
    <input type="text" name="up_name" class="form-control mb-2" value="<?php 
    // echo $row['Name']; 
    ?>">
    <label for="">Phone Number </label>
    <input type="number" name="up_phn" class="form-control mb-2" value="<?php 
    // echo $row['Number']; ?>">
    <label for=""> Address </label>
    <input type="text" name="up_address" class="form-control mb-2" value="<?php 
    // echo $row['Adress']; ?>">
    
    
 </form>










</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html> 







<?php
// include "config.php";
// if(isset($_GET['id'])){
//     $id = $_GET['id'];
// }
// $update_query = "SELECT * FROM `ones`  WHERE id = '$id' ";
// $results = mysqli_query($conn, $update_query);
// if(!$results){
//     die(mysqli_error($conn). $results);
// }else{
//     mysqli_fetch_assoc($results);
//     print_r($results);
// }

include "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$select = "SELECT * FROM `ones` WHERE id = '$id'";
$queryss = mysqli_query($conn, $select);
if(!$queryss){
    die(mysqli_error($conn). $queryss);
}else{
    $resultt = mysqli_fetch_assoc($queryss);
    print_r($resultt);
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

    <title>Crud Apps</title>
    <style>
        h4{
            text-align: center;
        } 
        a{
            text-decoration: none;
        }
    </style>
  </head>
  <body>
    
<div class="container p-3">
 <form action="#" method="" class="form p-5">
     <h2><a href="#" style="text-decoration:none;">Update Data Form</a></h2>
    <label for="">Full Name </label>
    <input type="text" name="up_name" class="form-control mb-2" >
    <label for="">Phone Number </label>
    <input type="number" name="up_phn" class="form-control mb-2" >
    <label for=""> Address </label>
    <input type="text" name="up_address" class="form-control mb-2" >
    
    
 </form>
    </div>