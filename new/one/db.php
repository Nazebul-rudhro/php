<?php

$localhost  = "localhost";
$username = "root";
$passowrd = "";
$dbname = "one_crud";
$conn = mysqli_connect($localhost, $username, $passowrd, $dbname);
if(!$conn){
    echo die("Database connect error". mysqli_connect_error($conn));
}


?>