<?php

//-----------------------------------------------------Get Class Name
class abc 
{
    public function name()
    {
        echo "Class Name is : " . get_class($this) . "<br>";
    }

}
$objabc = new abc();
$objabc->name();
echo "Class Name is : " . get_class($objabc) . "<br>";

//--------------------------------------------------Get parent class name
class parentclass 
{
    public function parentmethod()
    {

    }

}
class childclass extends parentclass 
{
    public function childmethod()
    {
        echo "Class Name is : " . get_parent_class($this). "<br>";

    }

}
$objchildclass = new childclass();
$objchildclass->childmethod();
echo "Class Name is : " . get_parent_class($objchildclass) . "<br>";

//------------------------------------------------------Get Method



class Methodclass 
{
    public function __construct()
    {
        print_r(get_class_methods($this));

    }
    public function myfunc1()
    {

    }
    public function myfunc2()
    {

    }
    private function myfunc3()
    {

    }

}
$class_method = get_class_methods('Methodclass');
echo "<pre>" ; print_r($class_method);

// foreach ($class_method as  $methods)
//  {
//     echo '<pre>'; print_r($methods);

//  }
$objmethodclass = new Methodclass();


//-------------------------------------------------Get Class variable And Object Variables


class classvariable 
{
    public $var1;
    public $var2 = "hello";
    public $var3 = 100;
    private $var4;

    public function __construct()
    {
        $this->var1 = "SONU";
        $this->var2 = "Man";

      echo "<pre>"; print_r(get_class_vars(__CLASS__));
      

    }
    public function getobjectvars()
    {
        $this->var1 = "Raj";
        $this->var2 = "Babu";
        $this->var3 = "King";
        $this->var4 = "Queen"; 
      echo "<pre>"; print_r(get_object_vars($this));

    }
}

$objclassvariable = new classvariable();
$class_variables = get_class_vars('classvariable');
echo "<pre>"; print_r($class_variables);


$class_variables = get_object_vars($objclassvariable);
echo "<pre>"; print_r($class_variables);

$getobjectvariabless = $objclassvariable->getobjectvars();


//----------------------------------------------------Get Called Class



class calledclass 
{
    static public function test()
    {
        var_dump(get_called_class());

    }

}
class childcalledclass extends calledclass 
{


}

calledclass::test();
childcalledclass::test();

//-----------------------------------------------------Get Declair class


class declairclass
{

}
class childdectairclass extends declairclass 
{

}
print_r(get_declared_classes());



//---------------------------------------------Get Interfaces


interface myinterface 
{

}
print_r(get_declared_interfaces());


//-----------------------------------------Get Traits



trait mytrait 
{

}
trait mytrait2
{

}
class mytraitclass 
{
    use mytrait;
}
print_r(get_declared_traits());


//-------------------------------------------------Class Alias




class myaliasclass 
{
    public $name;
}

class_alias('myaliasclass','mac');


$a = new myaliasclass();
$b = new mac();

$a->name = "SONU <br>";

echo $a->name;
$b->name = "SONU";

echo $b->name;