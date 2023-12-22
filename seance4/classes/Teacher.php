<?php
require_once('classes/Person.php');

class Teacher extends Person {

    private int $teacherId;
    private float $salary;

    public function setProps($id, $name, $salary){
        $this->teacherId = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getMessage(){
        return "The teacher name is $this->name";
    }

}