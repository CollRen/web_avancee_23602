<?php

require_once('classes/Teacher.php');
require_once('classes/Student.php');

// $person1 = new Person;
// $person1->setName('Lisa');

$student1 = new Student;
echo $student1->getMessage();
echo "<br><br>";
$teacher1 = new Teacher;
//$teacher1->name = 'peter';
$teacher1->setProps(1, 'Peter', 1500.50);
echo $teacher1->getMessage();
// var_dump($person1);
echo "<br><br>";
var_dump($student1);
echo "<br><br>";
var_dump($teacher1);

?>