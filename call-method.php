<?php

class abc 
{
    private $firstname;
    private $lastname;

    private function setName($fname,$lname)
    {
        $this->firstname = $fname;
        $this->lastname = $lname;

    }
    public function __call($method,$args)
    {
        if(method_exists($this,$method))
        {
            call_user_func_array([$this,$method],$args);

        }
        else
        {

       echo "This is Private Method or Non Existing method : $method";
       echo '<pre>'; print_r($args);
        }
    }

}
$test = new abc();
$test->setName('Sonu','Rahman');
echo '<pre>'; print_r($test);
