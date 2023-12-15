<?php

class Person {
    public int $id;
    public string $name = 'Paul';
    public string $address;
}

$obj = new Person;

$obj->id = 10;
$obj->name = "Peter";
$obj->address = "Pie Ix";

//var_dump($obj);

echo $obj->name;
?>