<?php

class abc 
{
    private $name ;

    public function hello()
    {
        echo $this->name;
    }
    
    public function __get($property)
    {
        echo "You're trying to access private or Non Existing Property($property)";

    }

    public function __set($property,$value)
    {
        if(property_exists($this,$property))
        {
            $this->$property = $value;

        }else
        {
        echo "This Non Existing Property : $property";
        }
    }

}

$test = new abc();
// $test->name  ;
$test->name = "SONU";

$test->hello();