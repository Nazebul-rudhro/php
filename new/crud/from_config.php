<?php
include "dbconnect.php";

session_start();

if(isset($_POST['lg_submit'])){
 $lg_email = data_filter($_POST['lg_email']);
 $lg_password = data_filter(md5($_POST['lg_password']));
//  echo $lg_email . " " . $lg_password ;

$sql = "INSERT INTO `login_from`( `Email`, `password`) VALUES ('$lg_email','$lg_password')";
$result = mysqli_query($conn, $sql);

if($lg_email && $lg_password){
    $_SESSION['user'] = "username";
    header("location: index.php");
  }else{
      echo "Please Try Againe" ;
      header("location: login.php");
  }



}

function data_filter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

?>