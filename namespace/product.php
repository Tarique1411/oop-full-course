<?php
namespace pro;

class product 
{
    public function __construct()
    {
        // echo "This is Product Class";
        $check = new \test\product;
    }
}

function test()
{
    echo "Test from Product file <br>";
}