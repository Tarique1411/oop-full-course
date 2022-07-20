<?php

// Copy By Value 
$a = 5;
$b = $a;
$b =10;

echo $a ."<br>";

// copy by Reference
$a = 5;
$b = & $a;
$b =10;

echo $a;