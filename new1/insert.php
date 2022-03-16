<?php
 include "dbconnect.php";
if(isset($_POST['btn_submit'])){
    $btn_name = test_form($_POST['btn_name']);
    $btn_Roll = test_form( $_POST['btn_Roll']);
    $btn_semester = test_form( $_POST['btn_semester']);
    $btn_email = test_form( $_POST['btn_email']);
    


   
    $sql = "INSERT INTO `diptti`( `Name`, `Roll`, `Semester`, `Email`) VALUES('$btn_name', $btn_Roll,'$btn_semester', '$btn_email')";
    $results = mysqli_query($conn, $sql);

    if(!$results){
        echo die(mysqli_error($conn). " ". $results);
    }else{
        header("location:addstudent.php?new_massage=Data Insert Successfully");
    }
}



function test_form($data){
    $$data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}


?>