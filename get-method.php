<?php

class abc 
{
    private $data = ['name'=>'sonu','address'=>'dhanbad','phone'=>'789546210'];

    public function __get($key)
    {
        // echo " You're tying to access Non Existing or Private Property($property)";
        if (array_key_exists($key,$this->data))
        {
            return $this->data[$key];
        }
        else
        {
            echo "This Key($key) is not define";
        }
    }

}
$test = new abc();
// print_r($test->data);
echo $test->name;
echo $test->age;
