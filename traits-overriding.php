<?php
trait hello
{
    public function sayHello()
    {
        echo "Hello from hello Trait <br>";
    }
}
trait bye
{
    private function sayHello()
    {
        echo "Hello From bye Trait <br>";
    }
}
class A 
{
    use hello,bye{
        hello::sayHello insteadOf bye;
        bye::sayHello as public byebye;
    }
   
}
// class B extends A 
// {
//     use hello,bye;
//     public function sayHello()
//     {
//         echo "Hello from Class B <br>";
//     }

// }
$test = new A();
$test->sayHello();
$test->byebye();
