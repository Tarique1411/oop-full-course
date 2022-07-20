<?php

class abc 
{
    public $course = "PHP";
    private $firstname ;
    private $lastname ;

    public function setName($fname,$lname)
    {
        $this->firstname = $fname;
        $this->lastname = $lname;
    }
    public function __sleep()
    {
        return array('firstname','lastname');
    }



}

$obj = new abc();
$obj->setName('Sonu','Rahman');

// serialize() function use for convert object into array

$srl = serialize($obj);
echo $srl;