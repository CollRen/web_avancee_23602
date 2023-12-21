<?php

require_once('Person.php');

class Employe extends Person{
    
    public float $salary;

    public function setAddress($address){
        $this->address = $address;
    }
}

?>