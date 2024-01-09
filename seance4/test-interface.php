<?php
require_once('classes/Circle.php');
require_once('classes/Rectangle.php');

$circle = new Circle(10);
echo $circle->calcArea();
echo "<br><br>";
//var_dump($circle);

$rectangle = new Rectangle(10, 5);
echo $rectangle->calcArea();
//var_dump($rectangle);
