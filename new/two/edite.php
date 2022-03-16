<?
if(isset($_GET['new_id'])){
    $new_id = $_GET['new_id'];
}

$conn = mysqli_connect("localhost", "root", "", "diptti_student");

$sql = "SELECT * FROM `diptti` WHERE `id`= '$new_id' ";
$result = mysqli_query($conn, $sql);
if(!$result){
    die(mysqli_error($conn));
}else{
    $data_assos = mysqli_fetch_assoc($result);
    
}
?>
<?php

if(isset($_POST['btn_submit'])){
    if(isset($_GET['update_data'])){
        $id = $_GET['update_data'];
    }
    $btn_name = text_validation($_POST['btn_name']);
    $btn_roll = text_validation($_POST['btn_roll']);
    $btn_semester = text_validation($_POST['btn_semester']);
    $btn_email = text_validation($_POST['btn_email']);
    
    
   echo $btn_name . $btn_roll. $btn_semester.  $btn_email;
   


$query = "UPDATE `diptti` SET `Name`='$btn_name',`Roll`=$btn_roll,`Semester`='$btn_semester',`Email`='$btn_email' WHERE id = '$id '";
$query_result = mysqli_query($conn, $query);


 }

 function text_validation($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;
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

<div class="container p-4">
<form action="index.php?update_data=<?php $new_id; ?>" method="POST" class="from my-4">
    <h2><a href="#" style="text-decoration: none;">Update Data Form</a></h2>
    <input type="text"  name="btn_name" placeholder="Enter your Name" class="form-control mb-2"  value="<?php echo $data_assos['Name']; ?>">
    <input type="text" name="btn_email" placeholder="Enter your Email" class="form-control mb-2" value="<?php echo $data_assos['Semester']; ?>">
    <input type="number" name="btn_roll" placeholder="Enter your Roll" class="form-control mb-2" value="<?php echo $data_assos['Email']; ?>">
    <input type="text" name="btn_semester" placeholder="Enter your Semester" class="form-control mb-2" value="<?php echo $data_assos['Roll']; ?>">
    
    <input type="submit" value="Update" name="btn_submit"  class="form-control bg-success mb-2">
</form>
</div>









  </head>
  <body>
    

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