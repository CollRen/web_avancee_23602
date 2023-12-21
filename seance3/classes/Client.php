<?php
require_once('Person.php');

class Client extends Person{
    public $account;

    // public function __construct($name, $account, $country){
    //     $this->name = $name;
    //     $this->account = $account;
    //     $this->country = $country;
    // }

    
    public function message(){
        return "$this->name  - account: $this->account";
    }
}


?>