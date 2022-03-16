<?php
include "db.php";



if(isset($_POST['btn_submit'])){
   $btn_name = $_POST['btn_name'];
   $btn_phn = $_POST['btn_phn'];
   $btn_address = $_POST['btn_address'];
   header("location:index.php");
   
   $sql = "INSERT INTO `ones`(`Name`,`Number`,`Adress`) VALUES('$btn_name', $btn_phn, '$btn_address')";
   $result = mysqli_query($conn, $sql);
   if(!$result){
    echo die("Data insert connect error". mysqli_error($conn). $sql);
   }else{
       
       header("location:index.php?updat_msg=Data Insert Successfully.");
   }
}


?>
