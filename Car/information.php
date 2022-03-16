<?php 
include_once ('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Check</title>
</head>
<body>
    

<div class="container py-3 px-5">
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="form">
        <h2><a href="#" style="text-decoration: none;"> Information Form</a></h2>
        <input type="number" name="show_driving_id" id="" placeholder="Enter your Driving Id Number" class="form-control mb-3" required>
        <input type="number" name="show_car_number" id="" placeholder="Enter your Car Number" class="form-control mb-3" required>
        <input type="submit" value="Stubmit" class="btn btn-outline-success ">   
    </form>
</div>


</body>
</html>



<?php
include_once ('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $show_driving_id = validation($_POST['show_driving_id']);
    $show_car_number = validation($_POST['show_car_number']);
    
    $select = mysqli_query($conn, "SELECT * FROM `car_information` WHERE `d_id_number` = '$show_driving_id' AND `car_number` ='$show_car_number' ");
    $row = mysqli_fetch_array($select);
    if($row){
        echo "hello";
    }else{
        echo mysqli_connect_error($conn). $row;
    }
    if(is_array($row)){
        // $_SESSION['driving_id']= 
        echo $row['d_id_number'];
        // $_SESSION['car_number']=
        echo $row['car_number'];
    }else{
        "<script> alert('Invild user and pass'); </script>";
    }


}


function validation($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}




?>