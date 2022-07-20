<?php

class abc 
{
    public $course ="PHP";
    private $firstname;
    private $lastname;

    public function setName($fname,$lname)
    {
        $this->firstname = $fname;
        $this->lastname = $lname;
    }
    public function __unset($property)
    {
        unset($this->$property);

    }
}

$test = new abc();

$test->setName('Sonu','Rahman');

unset($test->firstname);

 echo '<pre>'; print_r($test);