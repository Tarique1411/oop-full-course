<?php

class abc 
{
    public $course = "PHP";
    private $firstname;
    private $lastname;
    private $conn;

    public function setName($fname,$lname)
    {
        $this->firstname = $lname;
        $this->firstname = $lname;
    }
    public function __construct()
    {
        $this->conn = mysqli_connect();
    }
    public function __sleep()
    {
        mysqli_close();
        return array('firstname','lastname');
    }
    public function __wakeup()
    {
        $this->conn = mysqli_connect();
        
        echo "This is Wakeup Message";

    }
}

$obj = new abc();

$obj->setName('Sonu','Rahman');

$srl = serialize($obj);

$usrl = unserialize($srl);

echo '<pre>'; print_r($usrl);

