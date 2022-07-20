<?php

function __autoload($class)
{
 require "classes/".$class. ".php";
    
}


$test = new first();
$test2 = new second();
