<?php

interface A 
{
    function calc($a,$b);
}
interface C 
{
    function sub($c,$d);

}

class B implements A,C 
{
    public function calc($a,$b)
    {
        echo $a + $b . "<br>";
    }
    public function sub($c,$d)
    {
        echo $c - $d;
    }
    
}

$test = new B();
$test->calc(1,2);
$test->sub(1,2);