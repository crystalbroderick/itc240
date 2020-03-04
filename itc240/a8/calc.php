<?php

class Calc {
    public $num1;
    public $num2;
    
    function __construct($num1, $num2) {
        $this->num1=$num1;
        $this->num2=$num2;
    }
    public function numbers() {
        echo "First Number: {$this->num1} <br> Second Number: {$this->num2} <Br>";
    }
    public function Add() {
       $sum = $this->num1 + $this->num2;
       echo "{$this->num1} + {$this->num2} = $sum" . "<br>";
    }
    public function Subtract() {
        $dif = $this->num1 - $this->num2;
        echo "{$this->num1} - {$this->num2} = $dif" . "<br>";
    }

    public function Multiply(){
        $prod = $this->num1 * $this->num2;
        echo "{$this->num1} * {$this->num2} = $prod" . "<br>";
    }
    public function Divide(){
        $div = $this->num1 / $this->num2;
        echo "{$this->num1} / {$this->num2} = $div" . "<br>";
    }     
}

$n1=new Calc(63,5);
echo $n1->numbers();
echo $n1->Add();
echo $n1->Subtract();
echo $n1->Multiply();
echo $n1->Divide();
?>

