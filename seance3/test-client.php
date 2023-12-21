<?php

require_once('classes/Client.php');

$lisa = new Client('Lisa', 'Pie IX', '54545465', 'Brazil');




echo $lisa->message();
echo"<br><br>";
var_dump($lisa);



?>