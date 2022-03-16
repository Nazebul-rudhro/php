
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
        <label for=""> Enter the First Number  </label>
        <input type="number" name="first"> 
        <br> <br>
        <label for=""> Enter The second Number  </label>
        <input type="number" name="second">
         <br>
         <br>
        <input type="submit" value="Calculator" name="cal_submit">
    </form>
    



</body>
</html>

<?php
include "function.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
       $fnumber = $_POST['first'];
       $snumber = $_POST['second'];
       

       if(empty($fnumber) or empty($snumber)){
        echo "<span style='color: red; '> Please try Again </span>";
       } else{
        echo  "<hr>  <span style='color: red; '> Math Successfully php ob <br> </span>"; 
        $objculculator = new calculator;
        $objculculator->add($fnumber, $snumber);
        $objculculator->subtraction($fnumber, $snumber); 
        }
   

    


}



?>