<?php

// $localhost = "localhost";
// $Username = "root";
// $password = "";
// $conn = mysqli_connect($localhost, $Username, $password);

// if($conn){
//     echo "Databade Connect Successfully";
// }else{
//     echo "Not Successfully";
// }
// mysqli_close($conn);



$localhost = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($localhost, $username, $password);

if(!$conn){
    echo die(mysqli_connect_error());
}else{
    echo " OK ";
}

mysqli_close($conn);

?>