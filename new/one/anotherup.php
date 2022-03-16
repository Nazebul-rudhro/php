<?php
include "db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];

$sql = "SELECT * FROM `ones` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
if(!$result){
    die(mysqli_error($conn). " ". $result);
}else{
    $data = mysqli_fetch_assoc($result);
    
}
}





?>

<?php

if(isset($_POST['up_submit'])){
    if(isset($_GET['id_new'])){
        $id_new = $_GET['id_new'];
    }
   $up_name = $_POST['up_name'];
    $up_phn = $_POST['up_phn'];
    $up_address = $_POST['up_address'];
    $upquery = "UPDATE `ones` SET `Name` = '$up_name', `Number`=$up_phn, `Adress`='$up_address' WHERE `id`= '$id_new'";
    $results = mysqli_query($conn, $upquery);
    if(!$results){
        die(mysqli_error($conn). $results);
    }else{
        header("location:index.php?update_msg=You have successfully update the data.");
    }
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

    <title>Update</title>
  </head>
  <body>
  <div class="container p-3">
 <form action="anotherup.php?id_new=<?php echo $id; ?>" method="post" class="form p-5">
     <h2><a href="#" style="text-decoration:none;">Update Data Form</a></h2>
    <label for="">Full Name </label>
    <input type="text" name="up_name" class="form-control mb-2" value="<?php echo $data['Name']; ?>">
    <label for="">Phone Number </label>
    <input type="number" name="up_phn" class="form-control mb-2" value="<?php echo $data['Number']; ?>">
    <label for=""> Address </label>
    <input type="text" name="up_address" class="form-control mb-2" value="<?php echo $data['Adress']; ?>">
    <input type="submit" value="Update" class="btn btn-success" name="up_submit">
    
 </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>