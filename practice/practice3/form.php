<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in form</title>
    
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="user" >
        <input type="password" name="pass" >
        <input type="submit" value="Login" name="btn_login">

    </form>





</body>
</html>
<?php
if(isset($_POST['btn_login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    echo $user . " " . $pass;







}



?>