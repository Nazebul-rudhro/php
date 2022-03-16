<?php
$localhost = "localhost" ;
$username = "root" ;
$password = ""; 
$dbname = "dbname" ;
$conn = mysqli_connect($localhost, $username, $password, $dbname);
if(!$conn){
    echo die(mysqli_connect_error($conn));
}



?>