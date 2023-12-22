<?php

abstract class Person {
    protected string $name;
    public string $address;
    public string $zipCode;
    public string $phone;
    public string $email;

    
    abstract public function setProps($a, $b, $c);
    abstract public function getMessage();

}

?>