<?php
//------------------------------------------------------------- Interface Exist

interface MyInterface
{

}
if(interface_exists('MyInterface'))
{
    // echo "yes";

    class abc implements MyInterface{

    }
}
else
{
    echo "no";
}


//--------------------------------------------------------------------Trait exist
trait MyTrait 
{
    public function traitMethod()
    {
        // echo "This is Trait Method";

    }
}

if(trait_exists('MyTrait'))
{
    // echo "yes";

    class xyz 
    {
        use MyTrait;
        
    }
    $objTrait = new xyz();
    $objTrait->traitMethod();

}
else
{
    echo "no";
}

//------------------------------------------------------------------------------Is object and Property


class Myproperty
{
    public $test;
}
$objproperty = new Myproperty;

if(is_a($objproperty,'Myproperty'))
{
    // echo 'yes';

}
else
{
    echo 'No';
}

if(property_exists('Myproperty','test'))
{
    // echo "yes";
}
else
{
    echo "no";
}

//----------------------------------------------------------------------------is sub Class 
class parentclass 
{

}
class childclass extends parentclass
{

}

$objmysubclass = new childclass();

if(is_subclass_of($objmysubclass,'parentclass'))
{
    // echo "This \$objmysubclass is a object of subclass of parentclass";
}
else
{
    echo "No";
}

//-----------------------------------------------------------------------------Is method
class Myclass 
{
    public function MyMethod()
    {
        echo " Hi this is MyMethod";

    }

}
$objmethod = new Myclass();

if(method_exists($objmethod,'Mymethod'))
{
    // echo "yes";
    // $objmethod->MyMethod();
}
else
{
    echo "no";
}



//------------------------------------------------------------------------class exist

if (class_exists('Myclass'))
{
    // echo "This Class is Exist" ;
    $obj = new Myclass();
}
else
{
    echo "This Class is NOT Exist" ;

}