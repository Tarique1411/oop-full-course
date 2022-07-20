<?php
class calculation{
    public $a,$b,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();
$c1-> a =200;
$c1-> b =10;

$c2 = new calculation();
$c2-> a =233;
$c2-> b =100;


echo "Sum Value of C1 is : ". $c1->sum() . "\n";
echo "Subtraction Value of C2 is : ".$c2->sub(). "\n";
echo "Subtraction Value of C1 is : ".$c1->sub(). "\n";




?>