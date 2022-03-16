<?php
include "dbconnect.php";
if(isset($_POST['btn_submit'])){
   $btn_name = $_POST['btn_name'];
   $btn_roll = $_POST['btn_roll'];
   $btn_email = $_POST['btn_email'];


   $sql = "INSERT INTO `crud_apps`(`Name`, `Roll`, `Email`) VALUES ('$btn_name', $btn_roll, '$btn_email')";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        echo " Data Input successfully";
    }else{
        echo die(mysqli_error($conn). " ". $sql);
    }

}



?>