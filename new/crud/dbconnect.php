<?php
$localhost = "localhost";
$user = "root";
$password = "";
$dbname = "rudhro_website";
$conn = mysqli_connect($localhost, $user, $password, $dbname);

if(!$conn){
    die(mysqli_connect_error($conn));
}

?>