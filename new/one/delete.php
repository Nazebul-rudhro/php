<?php
include "db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}


$delete = "DELETE FROM `ones` WHERE `id`='$id'";
$result = mysqli_query($conn, $delete);
if(!$result){
    die("Your Delete query run error". mysqli_error($conn). $result);
}else{
    header("location:index.php?delete_msg=You have successfully Delete Recode");
}

?>