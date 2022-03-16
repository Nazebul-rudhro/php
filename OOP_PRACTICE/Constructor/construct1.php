<?php

// class Text{
//     public $name;
//     public $age;
//     public function __construct($a, $b)
//     {
//         $this->name = $a;
//         $this->age = $b;
//     }
//     public function person(){
//         echo "My Name is {$this->name} and my age is {$this->age}";
//     }
// }
// $obj = new Text("Nazebul", 18);
// $obj->person();



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <input type="number" name="fnumber" id="">
    <input type="number" name="snumber" id="">
    <input type="submit" value="Calculate">
</form>



</body>
</html>
<?php
include "function.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fnumber = $_POST['fnumber'];
    $snumber = $_POST['snumber'];
    if(empty($snumber) or empty($fnumber)){
        echo "please try again";
    }else{
    $ob->sum($fnumber, $snumber);
    }
}




// class usrdata{
//     const NAME = "Nazebul Hasan Rudhro";
//     public function display(){
//         echo "My name is ". usrdata::NAME;
//     }
// }
// $obj = new usrdata;
// $obj->display();


?>