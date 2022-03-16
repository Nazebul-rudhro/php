<?php


if(isset($_POST['btn_submit'])){
    include "db.php";
    $btn_name = $_POST['btn_name'];
    $btn_roll = $_POST['btn_roll'];
    $btn_email = $_POST['btn_gmail'];
$sql = "INSERT INTO `student`(`Name`, `Roll`, `Email`) VALUES ('$btn_name', $btn_roll, '$btn_email')";

if(mysqli_query($conn, $sql)){
    echo " ok ";
}else{
    echo die(mysqli_error($conn));
}
}
?>