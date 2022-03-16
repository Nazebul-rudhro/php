<?php
$localhost = "localhost";
$username = "root";
$passwrod = "";
$dbname = "diptti_student";
$conn = mysqli_connect($localhost, $username, $passwrod, $dbname);
if(!$conn){
    echo die(mysqli_connect_error($conn));
}
// mysqli_close($conn);


?>