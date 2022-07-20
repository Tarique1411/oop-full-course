<?php

class abc 
{
    public $course;
    
    private $firstname;
    private $lastname;
    private $details = ['name'=>'Test Name','age' => '20'];

    public function setName($fname,$lname)
    {
        $this->firstname = $fname;
        $this->lastname = $lname;

    }
    public function __isset($name)
    {
        if(isset($this->details[$name]));
        {
            echo $this->details[$name];
        }

    }

}
$test = new abc();
// $test->firstname = "Sonu";
// $test->course = "PHP";
// $test->setName('Sonu','Rahman');
echo isset($test->name);

