<?php
include "db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delted_query = "DELETE FROM `student_add_list` WHERE id='$id'";
    if($delted_query){
    $result = mysqli_query($conn, $delted_query);
    echo " <h2 style='text-align: center; left:50%; top:90%; '> <a href='#' style='text-decoration:none'>Data Deleted successfully </a> </h2>";
         header("refresh:02;url=home.php");
}else{
    echo die(mysqli_error($conn). $result);
}
}


?>









