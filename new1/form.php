<?php include "header.php"; 
if(isset($_SESSION['user'])){
    header("location: index.php");
}

?>


<div class="container my-1">
<form action="config.php" method="post" class="form  p-5 mx-5">
    <h2><a href="#" style="text-decoration: none;">Login Form </a></h2>
    <input type="text" name="reg_name" placeholder="Enter unique username" class="form-control mb-3" required>
    <input type="password" name="reg_password" placeholder="Enter strong password" class="form-control mb-3" required>
    <input type="submit" value="Log in" name="reg_submit" class="form-control bg-warning" >
</form>
</div>



<?php include "footer.php"; ?>