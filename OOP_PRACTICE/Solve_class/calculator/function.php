<?php

class calculator{
    public function sum($a, $b){
        echo "Sumation : ". ($a + $b);
    }
}
$obsum = new calculator;


class cons{
    public $name;
    public $roll;
    const NAME = "Nazebul Hasan Rudhro";
    public function __construct($a, $b)
    {
        $this->name = $a;
        $this->roll = $b;
    }
    public function uniqe(){
        echo "MY Name is {$this->name} My roll age is {$this->roll}  " . cons::NAME . " " ;
        
    }
    // public function alom(){
    //     echo "this name is ". cons::NAME;
    // }
}
$obj = new cons("Nazebul Hasan ", 21);
$obj->uniqe();
// $obj->alom();




?>