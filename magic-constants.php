<?php
namespace MyNamespace;


echo "Line Number is : " .__LINE__  . "<br>"; 


echo "The Full path of this file is : " .__FILE__ . "<br>";



echo "The Full path of this Directory is : " .__DIR__ . "<br>";

function myFunction()
{
echo "The Function name is : " .__FUNCTION__ . "<br>";

}
myFunction();

trait MyTrait 
{
    public function getTraitName()
    {
        return __TRAIT__;
    }
}
class abc 
{
    use MyTrait;

  public function getClassName()
  {
    return __CLASS__ ;

  }
  public function getMethodName()
  {
    return __METHOD__ ;
  }
  public function getNameSpace()
  {
    return __NAMESPACE__;
  }
}
$obj = new abc();

echo $obj->getClassName() ."<br>";
echo $obj->getMethodName() ."<br>";
echo $obj->getNameSpace() ."<br>";
echo $obj->getTraitName() ."<br>";



