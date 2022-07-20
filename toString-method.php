<?php 

class abc 
{
    public function __toString()
    {
        return "Can't Print Object as a String of class :" .get_class($this);

    }
}
$test = new abc();

echo $test;