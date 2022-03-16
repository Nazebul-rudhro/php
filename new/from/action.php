<?php

if(isset($_POST['stn_submit'])){
   $stn_user = $_POST['stn_user'];
    $stn_pass = $_POST['stn_pass'];
    // header("location:index.php");
    echo $stn_user. "  " . $stn_pass . "<hr>";
    
}


?>