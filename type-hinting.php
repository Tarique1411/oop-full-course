<?php 

function sum(int $v)
{
    echo $v +1 . "<br>";
}

sum(25);

function fruits(array $name)
{
    foreach ($name as  $value) {
        echo $value . "<br>";
    }
}

$fruits = array('apple','banana','grapes');


fruits($fruits);

// --------------------------------------------Class Examples------------------------------

class school 
{
    public function getName( student $names)
    {
        foreach ($names->Names() as $value) {
            echo $value . "<br>";
        }
    }
}
class student
{
    public function Names()
    {
        return ['sonu','tarique','raja'];
    }
}
class liberary
{

}
$lib =  new liberary();
$stud = new student();
$sch = new school();

// $sch->getName($lib);
$sch->getName($stud);
