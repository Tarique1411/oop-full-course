<?php  
class person{
    public $name ;
    public $age ;

    function __construct($name= " No name", $age= 0)
    {
        $this->name = $name;
        $this->age = $age;

        
    }
    function show(){
        echo $this->name. " - ". $this->age . "<br>";
    }
}


$p1 = new person();
$p2 = new person("Tarique", 30);
$p3 = new person("Sonu", 29);



// $p1->name = "Sonu";
// $p1->age = 30;

$p1->show();
$p2->show();
$p3->show();






?>