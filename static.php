<?php 
 class A 
 {
    public static $name = "Sonu";

    
    // public function __construct($n)
    // {
    //     self::$name = $n;
    // }
 }

 class B extends A 
 {
    public static function show()
    {
        echo parent::$name ."<br>";
    }

 }

 echo B::$name ."<br>";
 B::show();

// $test = new B();
// $test->show();


