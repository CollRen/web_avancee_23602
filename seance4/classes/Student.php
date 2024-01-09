<?php
require_once('classes/Person.php');

class Student extends Person {
    
    private int $studentId;

    public function setProps($a, $b, $c){

    }
    public function getMessage(){
        return "This is a student message";

    }

}