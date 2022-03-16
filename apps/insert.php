<?php
// $localhost = "localhost";
// $username = "root";
// $password = "";
// $dbname = "students";

// $conn = mysqli_connect($localhost, $username, $password, $dbname);

// if($conn){
//     echo "Data Insert Successfully";
// }
// $result = "INSERT INTO student(Name, Roll, Email) VALUES('Nazebul', 950510, 'Nazebul@gmail.com')";
// if(mysqli_query($conn, $result)){
//     echo "Insert Successfully";
// }else{
//     echo die(mysqli_error($conn));
// }


// mysqli_close($conn);


// $localhost = "localhost";
// $username = "root";
// $password = "";
// $dbname = "students";
//  $conn = mysqli_connect($localhost, $username, $password, $dbname);
// if(!$conn){
//     echo die(mysqli_connect_error());
// }

// $sql = "INSERT INTO student(Name, Roll, Email) VALUES('Rabbi Mondol', 950512, 'rabbimondol@gmail.com')";

// if(mysqli_query($conn, $sql)){
//   echo "Data Insert Successfully";
// }else{
//     echo die(mysqli_error($conn));
// }

//  mysqli_close($conn);





$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$conn = mysqli_connect($localhost, $username, $password, $dbname);
if(!$conn){
    echo die(mysqli_connect_error());
}
$sql = "INSERT INTO student(`Name`, `Roll`, `Email`) Values('Abu Hasan', 950513, 'abuhasan@gmail.com')";
if(mysqli_query($conn, $sql)){
    echo "Data Insert Successfully";
}else{
    echo die(mysqli_error($conn));
}




?>