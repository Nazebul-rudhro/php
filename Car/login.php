<?php
session_start();
if(isset($_SESSION['user'])){
  header("location:index.php");
}
$connect = mysqli_connect('localhost', 'root', '', 'car_project') or die(mysqli_connect_error($connect));

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $btn_user = validation($_POST['btn_user']);
  $btn_email = validation($_POST['btn_email']);
  $btn_pass = validation($_POST['btn_pass']);
  // echo $btn_pass ." ". $btn_email;
  $select = mysqli_query($connect, "SELECT * FROM `car_login_info` WHERE `User` = '$btn_user' AND `Email` = '$btn_email' AND `Password`='$btn_pass' ");
  $row = mysqli_fetch_array($select);
  if(is_array($row)){
    $_SESSION['user'] = $row['User'];
    $_SESSION['email'] = $row['Email'];
    $_SESSION['pass'] = $row['Password'];
  }else{
    echo "<script> alert('Invild user and pass'); </script>";
  }


}

function validation($data){
 $data = trim($data);
 $data = htmlspecialchars($data);
 $data = stripcslashes($data);
 return $data;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    
    <div class="container px-5 p-3">
    
        <div class="d-flex px-5 prant-lg">
            <a href="<?=$_SERVER['PHP_SELF'];?>" class="log">Login</a>
            <a href="singup.php" class="sing"> Sing Up </a>
        </div>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" class="form p-4 px-5">
        <label > Enter Your User: </label>
         <input type="text" name="btn_user" id="pera" onchange="fun()" placeholder="Input your Username" class="form-control mb-3" required>
         <label > Enter Your email: </label>
         <input type="email" name="btn_email" id="" placeholder="Input your Email" class="form-control mb-3" required>
         <label > Enter Your Password: </label>
         <input type="password" name="btn_pass" id="" placeholder="Input your Password" class="form-control mb-3" required>
         
         <input type="submit" value="Log In" name="btn_submit" class="btn btn-success text-center" >
        </form>
        
    </div>
  
<script>
  function fun(){
    let x = document.getElementById('pera');
    x.value = x.value.toUpperCase();
  }

</script>
  
    
</body>
</html>

