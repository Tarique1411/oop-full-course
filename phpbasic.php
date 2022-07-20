<?php
  $numArray = [1,1,2,3,3,1,2,4,5,4,6,5,7,9];

  //Writhe the Code to find number with less occurance



//   $itnemCountArray = [1=>3,2=>2,3=>2,4=>2,5=>2,6=>1,7=>1,9=>1,11=>1];
$itemCounArray=[];


foreach ($numArray as $value) {
   $itemCounArray[$value]++;

    
}
echo '<pre>';
 print_r($itemCounArray);



 echo '<pre>','sort';
 sort($itemCounArray);
 print_r($itemCounArray);

 

  echo '<pre>','asort';
 asort($itemCounArray);
print_r($itemCounArray);





$keyArray = array_keys($itemCounArray);

echo '<pre>' ,'key';

print_r($keyArray);


$outcount = array_count_values($numArray);

echo '<pre>'; 

print_r($outcount);




?>