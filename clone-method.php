<?php
class abc 
{
    public $name;
    public $course;

    public function __construct($n)
    {
        $this->name = $n;
    }
    public function setCourse(xyz $c)
    {
        $this->course = $c;

    }
    public function __clone()
    {
        $this->course = clone $this->course;
    }
}
class xyz
{
    public $cname;

    public function __construct($c)
    {
        $this->cname = $c;
    }
}
$abc1 = new abc('Sonu');
$course1 = new xyz('PHP');
$abc1->setCourse($course1);

$abc2 = clone $abc1; //clone do copy by value

$abc2->name = 'Tarique';
$abc2->course->cname = 'Python';
// echo $abc1->name;
// echo $abc2->name;

echo '<pre>'; print_r($abc1);
echo '<pre>'; print_r($abc2);



