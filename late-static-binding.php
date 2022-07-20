<?php

class A 
{
    protected static $name = "Sonu";

    public function show()
    {
        echo static::$name . "<br>";
    }
}
class B extends A 
{
    protected static $name =  "Tarique";

}

$test  = new A();
$test->show();


$test  = new B();
$test->show();