<?php


trait hello 
{
    public function hello()
    {
        echo "Hello Dear <br>";
    }
    public function sayHello()
    {
        echo "Say Hello Dear <br>";
    }
}
trait bye 
{
    public function bye()
    {
        echo "Bye Dear <br>";
    }   
    public function sayBye()
    {
        echo "Say Bye Dear <br>";
    }
}

class A 
{
    use hello,bye;
}
class B 
{
    use hello,bye;
}


$test = new A();

$test->hello();
$test->sayHello();
$test->bye();


$test2 = new B();
$test2->hello();
$test2->sayBye();
