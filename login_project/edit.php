<?php
include "db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
$sqll = "SELECT * FROM `student_add_list` WHERE `id` = '$id' ";
$resultt =mysqli_query($conn, $sqll);
if(!$resultt){
  die(mysqli_error($conn). " ". $resultt);
}else{
$rows = mysqli_fetch_assoc($resultt);
//  echo $rows['id'];
}
}




?>
<?php



if(isset($_POST['up_submit'])){
  if(isset($_GET['id_new'])){
    $id_new = $_GET['id_new'];
}
  $up_name = validation($_POST['up_name']);
  $up_roll = validation($_POST['up_roll']);
  $up_email = validation($_POST['up_email']);
  // if(isset($up_name) && isset($up_roll) && isset($up_email) ){

   $up_query = "UPDATE `student_add_list` SET `name` = '$up_name', `roll`=$up_roll, `email`='$up_email' WHERE `id`= '$id_new'"; 
   $query_conn = mysqli_query($conn, $up_query);
   if($query_conn){
    echo  "data Update successfully";
    header("location: home.php");
   }else{
     echo die(mysqli_error($conn). $query_conn);
    //  header("refresh:03; url=edit.php");
   }
  // }
}



function validation($test){
  $test = trim($test);
  $test = htmlspecialchars($test);
  $test = stripcslashes($test);
  return $test;
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

    <title>Update Form</title>
  </head>
  <body>
    <div class="container p-4">
      <form action="edit.php?id_new=<?php echo $id; ?>" method="POST" class="form my4 p-4">
        <h2 class="text-center"><a href="#" style="text-decoration: none;">Update Form</a></h2>
        <label>Name :</label>
        <input type="text" name="up_name" value="<?php echo $rows['name']; ?>"  class="form-control mb-3" placeholder="Input Your Full Name" id="fname" onchange="uppercase()">
        <label>Roll :</label>
        <input type="number" name="up_roll" value="<?php echo $rows['roll'];?>"   class="form-control mb-3" placeholder="Input Your Roll Number">
        <label>Email :</label>
        <input type="email" name="up_email" value="<?php echo $rows['email'];?>"  class="form-control mb-3" placeholder="Input Your Email">
        <input type="submit" value="Update" name="up_submit"  class="form-control mb-3 bg-success" >
      </form>
    </div>

    
    <script>
      function uppercase(){
        var x = document.getElementById("fname");
        x.value = x.value.toUpperCase();
      }
    </script>

    
  </body>
</html>