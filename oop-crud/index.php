<?php 


include "database.php";

$obj = new Database();

$obj->insert('students',['student_name' => 'Baba','age' => '29','city' => 'Dhanbad']);

echo "Insert Result is : ";
print_r($obj->getResult());


// $obj->update('students',['student_name' => 'Raja','age' => '28','city' => 'Patna'],'id="4"');

// echo "update Result is : ";
// print_r($obj->getResult());



// $obj->delete('students','id="6"');

// echo "Detele Result is : ";
// print_r($obj->getResult());


// $obj->sql('SELECT * FROM students');

// echo "SQL Result is : ";
// echo '<pre>' ; print_r($obj->getResult());

// $join = "class ON students.class = class.cid";
// $col_name = "students.id,students.student_name,students.age,students.city,class.cname";

// $obj->select('students',$col_name,$join,null,null,2);

// echo " Select Result is : ";
// echo '<pre>' ; print_r($obj->getResult());


// $obj->pagination('students',$join,null,2);
