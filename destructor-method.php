<?php 
class abc 
{
    public function __construct()
    {
        echo " This is construct function <br>";
    }

    public function hello()
    {
        echo "Hello Everyone <br>";
    }

    public function __destruct()
    {
        echo "This is desctruct function <br>";
    }
}
$test =  new abc();
$test->hello();
$test->hello();
$test->hello();
$test->hello();