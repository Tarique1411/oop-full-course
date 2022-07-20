<?php


abstract class A 
{
    protected $name;

    abstract protected function calc($a,$b);

}
class B extends A 
{

    public function calc($c,$d)
    {
        echo $c + $d;

    }
}

$sum  = new B();
$sum->calc(1,2);
