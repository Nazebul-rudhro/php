<?php
include "config.php";



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
        .delete{
            width: 100%;
            margin-left: 45%;
            font-weight: 600;
            font-size: 16px;
        }
    </style>
  </head>
  <body>
    
<div class="container p-3">
 <form action="config.php" method="POST" class="form p-5">
     <h2><a href="#" style="text-decoration:none;">Input Data Form</a></h2>
    <label for="">Full Name </label>
    <input type="text" name="btn_name" class="form-control mb-2" placeholder="Enter your Full Name">
    <label for="">Phone Number </label>
    <input type="number" name="btn_phn" class="form-control mb-2" placeholder="Enter your Phone Number">
    <label for=""> Address </label>
    <input type="text" name="btn_address" class="form-control mb-2" placeholder="Enter your Address">
    <input type="submit" value="submit" name="btn_submit" class="form-control bg-success mb-2">
    
 </form>
<h4><a href=""> <?php if(isset($_GET['updat_msg'])){echo $_GET['updat_msg']; }?></a></h4>
<h4><a href=""> <?php if(isset($_GET['update_msg'])){ echo $_GET['update_msg']; } ?></a></h4>

<table class="table table-hover tabler-bordered responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th> Full Name </th>
            <th> Phone Number </th>
            <th> Address </th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
        <?php
           $fild = "SELECT * FROM `ones`";
           $query = mysqli_query($conn, $fild);
           if(!$query){
               echo die("Select query faild". mysqli_error($conn). $query);
           }else{
               while($row = mysqli_fetch_assoc($query)){
                   ?>
                <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['Name']; ?>  </td>
            <td><?php echo $row['Number']; ?> </td>
            <td><?php echo $row['Adress']; ?> </td>
            <td>
                 <a href="anotherup.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="text-decoration:none;" <?php $row['id']; ?>> Edit</a>
                 <a href="delete.php?id=<?php echo $row['id']; ?> " class="btn btn-danger" style="text-decoration:none;"> Delete</a>
            </td>
        </tr>

                   <?php
               }
           }
        
        ?>
        
    </tbody>

</table>

<a href="#"  class="text-danger delete"><?php if(isset($_GET['delete_msg'])){echo $_GET['delete_msg'];}?></a>







</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>