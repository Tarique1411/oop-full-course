<?php
class A 
{
    protected $name;

     function __construct($n)
      {
          $this->name= $n;
      }

      protected function show()
    {
        echo "Your Name is : ". $this->name ."<br>" ;

    }
}

class B extends  A 
{
    public function show()
    {
        echo "Your Name is : ". $this->name;
    }
}

// $name1 =  new A('sonu');
// $name1->show();

$name2 =  new B('Tarique');
$name2->show();