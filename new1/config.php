<?php
session_start();

if(isset($_POST['reg_submit'])){
    $reg_name = test_input($_POST['reg_name']);
    $reg_password = test_input($_POST['reg_password']);
    // echo $reg_name . " " . $reg_name;

    if($reg_name && $reg_password){
      $_SESSION['user'] = "username";
      header("location: index.php");
    }else{
        echo "Please Try Againe" ;
        header("location: form.php");
    }


}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>