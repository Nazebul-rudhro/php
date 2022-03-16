<?php

// class Details{
//     public $name;
//     public $age;
//     public $adress;
//     public function __construct($fname, $rage, $radress){
//         $this->name = $fname;
//         $this->age = $rage;
//         $this->adress = $radress;
//     }
//     public function output(){
//         echo "My Name Is {$this->name}  My age is {$this->age}  I live in {$this->adress}" ;
//     }
// }
// $obj = new Details("Nazebul Hasan", 18, "Dhaka");
// $obj->output();


class info{
    public $name;
    public $age;
     public function __construct($name, $age)
     {
          $this->name = $name;
          $this->age = $age;
     }
     public function FunctionName(){
         echo " My Name Is {$this->name} My Age Is  {$this->age}";
     }
}
$obj = new info("Nazebul", 20);
$obj->FunctionName();

?>