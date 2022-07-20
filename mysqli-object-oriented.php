<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oop";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die('Connection Failed : ' .$conn->connect_error);
}

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "ID : {$row["id"]} - Name : {$row["student_name"]} - Age : {$row["age"]} <br>";

    }
}
else
{
    echo "No Record Found";
}

$conn->close();


