<?php

require_once('classes/Utility.php');

$util =  new Utility;
echo $util->calculate(10, 5);




echo Utility::calculate(10, 5);

echo Utility::$staticProperty;

//Utility::redirect('https://good4college.com/online-course/php-object-oriented/fr#84');
