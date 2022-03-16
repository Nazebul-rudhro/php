<?php 
include_once ("dbconnect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $btn_user = fromvalidation($_POST['btn_user']);
    $btn_email = fromvalidation($_POST['btn_email']);
    $btn_password = fromvalidation($_POST['btn_password']);
    $btn_confrom = fromvalidation($_POST['btn_confrom']);
   
    
    
   if($btn_password !=$btn_confrom){
    header("Refresh:2; url=singup.php");
   }else{
       if(isset($btn_user) and isset($btn_email)  and isset($btn_password)){
        $insert = "INSERT INTO `car_login_info`(`User`, `Email`, `Password`) VALUES ('$btn_user', '$btn_email', '$btn_password')";
        $result = mysqli_query($conn, $insert);
        $successfull = "Registration Successfully";

        header("Refresh:2; url=login.php");
       }
   }




}



function fromvalidation($data){
    $data = htmlentities($data);
    $data = trim($data);
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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title> Sing Up </title>
</head>
<body>
    
    <div class="container p-4 px-4">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" class="form" onsubmit="return myfun()">
         <h2 class="text-center"> <a href="#" style="text-decoration: none;">Sing Up Form </a></h2>
         <label> UserName : </label>
         <input type="text" name="btn_user" id="upper" onchange="uppercase()" class="form-control mb-2" value="" required>
         <label> Email : </label>
         <input type="email" name="btn_email" id="" class="form-control mb-2" required>
         <label> Password : </label>
         <input type="password" name="btn_password" id="password" class="form-control mb-2" value="">
         <span id="massage" style="color: red;"></span>
         <label> Confrom Password : </label>
         <input type="password" name="btn_confrom" id="passwords" class="form-control mb-2" value="">
         <span id="massages" style="color: red;" > </span> 
        <div style="color:#408140; padding: 0px 0px 10px 0px;"> <?=$successfull ?? null ?></div>
         <input type="submit" value="Registration" name="registration" class="btn btn-success mb-2 ">
        </form>

    </div>

    <script>
        function uppercase(){
            let x = document.getElementById('upper');
            x.value = x.value.toUpperCase();

        }

        function myfun(){
            var a =  document.getElementById('password').value;
            var b =  document.getElementById('passwords').value;
            if(a==""){
                document.getElementById('massage').innerHTML="** Please Fill Password <br>";
                return false; 
            }
            if(a.length < 5){
                document.getElementById('massage').innerHTML="** Password length must be greater then 5 characters <br>";
                return false; 
            }
            if(a.length > 25){
                document.getElementById('massage').innerHTML = "** Password length must be small then 5 charactors <br>";
                return false;
            }

            if(a !=b){
                document.getElementById('massages').innerHTML="** Password are not same <br>";
                return false; 
            }
        }
    </script>

</body>
</html>