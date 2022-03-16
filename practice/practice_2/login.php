 <?php
   include "header.php";
 
   ?>



<div class="container p-5 ">
<form action="loginconfig.php" method="post" class="form  p-5">
    <h2><a href="#" style="text-decoration: none;">Login Form </a></h2>
    <input type="text" name="btn_user" id="fname" onchange="upperCase()" placeholder="Enter your User name" class="form-control mb-2">
    <input type="email" name="btn_email" placeholder="Enter your Email" class="form-control mb-2">
    <input type="Password" name="btn_pass" placeholder="Enter your Email" class="form-control mb-2">
    <input type="submit" value="Login" name="btn_submit" class=" mb-2 btn btn-primary">
</form>
</div>








<script>

    function upperCase() {
  const x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}


</script>







<?php
   include "footer.php";
   
   ?>