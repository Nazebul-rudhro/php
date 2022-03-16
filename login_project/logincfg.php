<?php
include "db.php";
// $lg_username = test_validation($_POST['lg_user']);
// $select = "SELECT * FROM `login_user`";
// $query = mysqli_query($conn, $query);
// $match = mysqli_fetch_assoc($query);
// $match_user = $match['user_name'];
// if($match_user === $lg_username){
//     echo "try Again";
// }else{
if(isset($_POST['lg_submit'])){
    
    $lg_user = test_validation($_POST['lg_user']);
    $lg_email = test_validation($_POST['lg_email']);
    $lg_pass =test_validation(md5($_POST['lg_pass']));
    




    $sql = "INSERT INTO `login_user`( `user_name`, `email`, `password`) VALUES ('$lg_user', '$lg_email', '$lg_pass')";
    
    if(isset($lg_user) && isset($lg_email) && isset($lg_pass)){
        $result = mysqli_query($conn, $sql);
        $_SESSION['next_page'] = "Page_Change";
        header("location:home.php");
        
      
    }else{
        header("refresh:02;url=login.php");
    }


}



function test_validation($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}



// if(isset($_POST['lg_hidden'])){
//     echo "Hello Bangladesh";
// }else{
//     echo "whats this!";
// }

?>