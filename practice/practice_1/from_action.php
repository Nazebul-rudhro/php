<?php
include "dbname.php";

if(isset($_POST["btn_submit"])){
    $btn_name = $_POST['btn_name'];
    $btn_roll = $_POST['btn_roll'];
    $btn_email = $_POST['btn_email'];
    // echo $btn_name . " " . $btn_email . " ". $btn_roll;

   $sql = "INSERT INTO `studennt`(`Name`, `Roll`, `Email`) VALUES ('$btn_name', $btn_roll, '$btn_email')";
  $result = mysqli_query($conn, $sql);
  if($result){
      
      header("location:index.php?new_id= Data insert Successfully ");
      
  }else{
      echo die(mysqli_error($conn). $result .  $sql);
  }

}


?>