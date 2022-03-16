<?php
$conn = mysqli_connect("localhost", "root", "", "diptti_student");
if(!$conn){
    echo die(mysqli_connect_error($conn));
}

if(isset($_GET['new_page'])){
    $page = $_GET['new_page'];
}else{
    $page = 1;
}
$number_per_page = 05;
$start_form =($page - 1) * 5;
// exit($start_form);


$query = "SELECT * FROM `diptti` LIMIT $start_form, $number_per_page";
$result = mysqli_query($conn, $query);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pagination</title>
  </head>
  <body>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Roll Number</th>
                <th>Semester</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
        
        while($row = mysqli_fetch_assoc($result)){
            ?>
 <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo $row['Name']; ?></th>
                <th><?php echo $row['Roll']; ?></th>
                <th><?php echo $row['Semester']; ?></th>
                <th><?php echo $row['Email']; ?></th>
                <th>
                    <a href="edite.php?new_id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="delete.php?new_id=<?php echo $row['id']; ?>" class="btn btn-success"> Delete</a>
                </th>
            </tr>

            <?php
        }
        
        
        ?>

           
        </tbody>
    </table>
    <?php
    
    $select_query = "SELECT * FROM `diptti`";
    $query_conn = mysqli_query($conn, $select_query);
    $totale_recode = mysqli_num_rows($query_conn);
    $totle_page = ceil($totale_recode / $number_per_page);

    if($page > 1){
        echo "<a href='samework.php?new_page=".($page - 1)."' class='btn btn-info mx-2' >Previous</a>";
      }
    for($i=1; $i<$totle_page; $i++){
        
        echo "<a href='index.php?new_page=$i'. class='btn btn-info mx-2' >$i</a>";
    }

    
    if($i > $page){
        echo "<a href='index.php?new_page=".($page + 1)."' class='btn btn-info mx-2' >Next</a>";
      }
    
    ?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>