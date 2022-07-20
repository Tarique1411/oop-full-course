<?php 

class abc 
{
    public $a,$b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;

    }

    public function __invoke()
    {
        echo $this->a * $this->b;

    }
}

$obj = new abc(10 ,20);

$obj();
