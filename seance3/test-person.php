<?php


require_once('classes/Person.php');

$peter = new Person('Peter', 'Pie IX', '544545', 'Brazil');

//$peter->lang('Brazil');
// $peter->setName('Peter');

// echo $peter->getName();

var_dump($peter);


echo "<br><br>";
echo $peter->message();
