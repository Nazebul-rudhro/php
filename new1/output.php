<?php

include "dbconnect.php";
if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}

$number_per_page = 05;
$start_from = ($page-1)*05;




$sql = "SELECT * FROM `diptti` LIMIT $start_from,$number_per_page";
$results = mysqli_query($conn, $sql);



?>



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
<div class="container my-2">
    
  <Table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name </th>
            <th>Roll Number</th>
            <th>Semeter</th>
            <th>Email</th>
            <th> Action</th>
        </tr>
    </thead>
    <?php
             


             while($data = mysqli_fetch_assoc($results)){
                
                ?>
                    <tbody>
         
         <tr>
             <td> <?php echo $data['id']?> </td>
             <td> <?php echo $data['Name']?> </td>
             <td> <?php echo $data['Roll']?></td>
             <td> <?php echo $data['Semester']?> </td>
             <td> <?php echo $data['Email']?></td>
             <td>
                 <a href="">Edit</a>
                 <a href="">Delete</a>
             </td>
         </tr>
     </tbody>

                <?php
             }
         ?>
    
</Table>



<?php 
          $per_query = "SELECT * FROM `diptti`";
          $per_result = mysqli_query($conn, $per_query);
          $total_record = mysqli_num_rows($per_result);
          $total_page = ceil($total_record / $number_per_page);
          echo $total_page;


          if($page>1){
            echo"<a href='output.php?page=".($page -1). " ' .class='btn btn-success'> Previous </a>";
          }

          for($i=1; $i<$total_page; $i++){
            echo"<a href='output.php?page=".$i. " '. class='btn btn-warning' >$i</a>";
          }

          if($i>$page){
            echo"<a href='output.php?page=".($page + 1). " ' .class='btn btn-warning' > Next </a>";
          }

?>

</div>

<!-- <a href="output.php?page=".$i." "></a> -->

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

