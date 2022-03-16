<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
       $fnumber = $_POST['first'];
       $snumber = $_POST['second'];
       echo $fnumber;

       if(empty($fnumber) and empty($snumber)){
        echo "<span style='color: red; '> Please try Again </span>";
          

       } else{
        echo  "Log in successfully";
        // header("refresh:2; url=clculator.php");
    }
   

    // if (empty($fnumber)) {
    //     echo "Name is empty";
    //   } else {
    //     echo $fnumber;
    //   }


}



?>