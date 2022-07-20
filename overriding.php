<?php

class A
{
    public $name = " Class A";

    public function calc($a,$b)
    {
        return $a * $b;

    }
}

class B extends A
{
    public $name  = " Class B";

    public function calc($a,$b)
    {
        return $a + $b;

    }
}
$name =  new A();
echo $name->name . "<br>";

echo $name->calc(1,2) . "<br>"; 


$name =  new B();

echo $name->name . "<br>";

echo $name->calc(1,2);


