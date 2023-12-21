<?php


require_once('classes/Client.php');

require_once('classes/Employe.php');

$paul = new Employe('paul', 'sherbrooke', 'abc', 'Brazil');

//$paul = new Employe;

// $paul->name = 'Paul';
// $paul->language = 'Fr';
$paul->salary = 1500.00;

//echo $paul->message();

//$paul->address = 'Address 2';
//  $paul->setAddress("Sherbrooke");


 $paul = new Employe('paul', 'sherbrooke', 'abc', 'Brazil');

var_dump($paul);
