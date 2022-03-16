<?php
include "db.php";
if(isset($_POST['add_submit'])){
    $add_name = text_validation($_POST['add_name']);                
    $add_roll = text_validation($_POST['add_roll']);                
    $add_email = text_validation($_POST['add_email']);  
    // echo     $add_name  .$add_roll   . $add_email      ;
    $sql = "INSERT INTO `student_add_list`(`name`, `roll`, `email`) VALUES ('$add_name', $add_roll,'$add_email')";
    
    if(isset($add_name) && isset($add_roll) && isset($add_email)){
         $query = mysqli_query($conn, $sql);
         echo " <h2 style='text-align: center; left:50%; top:90%; '> <a href='#' style='text-decoration:none'>Data insert successfully </a> </h2>";
         header("refresh:02;url=home.php");
         
    }else{
        header("refresh:02;url=add_student.php");
    }

}

function text_validation($test){
    $test = trim($test);
    $test = htmlspecialchars($test);
    $test = stripcslashes($test);
    return $test;
}

?>
