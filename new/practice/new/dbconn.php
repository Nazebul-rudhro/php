<?php

$localhost = "localhost";
$username = "root";
$password = "";
$databasename = "toufik";

$conn = mysqli_connect($localhost, $username, $password, $databasename);
if(!$conn){
    echo die(mysqli_connect_error($conn));
}


?>