<?php
// include "logincfg.php";
include "db.php";
if(isset($_GET['new_page'])){
  $page = $_GET['new_page'];
}else{
  $page = 1;
}
$number_per_page = 06;
$start_form =($page - 1) * $number_per_page;

$sqls = "SELECT * FROM `student_add_list` LIMIT $start_form, $number_per_page";
$querys = mysqli_query($conn, $sqls);				


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    
<header>
    <div class="d-flex bg-success justify-content-around">
        <div class="p-3">
            <a href="add_student.php" class="style" >Add Student </a>
        </div>
        <div class="p-3">
            <a href="#myImg" class="style" onclick="showElem()" >Student List </a>
        </div>
        <div class="p-3">
            <a href="user.php" class="style">Nazebul </a>
        </div>
    </div>
</header>

<div class="con container my-2" id="myImg">
      <table class="table table-borderd table-hover table-striped responsive ">
        <thead >
          <tr>
          <th>ID</th>
          <th>Name </th>
          <th>Roll</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>

          <?php 
          while($rows = mysqli_fetch_assoc($querys)){
            ?>
            

            <tr>
            <th><?php echo $rows['id']; ?></th>
            <th><?php echo $rows['name']; ?></th>
            <th><?php echo $rows['roll']; ?></th>
            <th><?php echo $rows['email']; ?></th>
            <th>
              <a href="edit.php?id=<?php echo $rows['id']; ?>" class="btn btn-warning"> Edit</a>
              <a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-success"> Delete </a>
            </th>
          </tr>


            <?php

          }
          ?>


          
        </tbody>
      </table>
</div>

<?php
$select_query = "SELECT * FROM `student_add_list`";
$query_conn = mysqli_query($conn, $select_query);
$totale_recode = mysqli_num_rows($query_conn);
$totle_page = ceil($totale_recode / $number_per_page);

if($page > 1){
    echo "<a href='home.php?new_page=".($page - 1)."' class='btn btn-warning mx-3' >Previous</a>";
  }
for($i=1; $i<$totle_page; $i++){
    
    echo "<a href='home.php?new_page=$i'. class='btn btn-success  text-center mx-3 ' >$i</a>";
}


if($i > $page){
    echo "<a href='home.php?new_page=".($page + 1)."' class='btn btn-warning mx-3 ' >Next</a>";
  }

?>





    <script>
      function showElem() {
  document.getElementById("myImg").style.visibility = "visible"; 
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>