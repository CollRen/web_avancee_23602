<?php

abstract class Person{

    protected string $name;
    public string $address;
    public string $phone;
    protected string $country;
    protected string $language;
    

    final public function __construct($name, $address, $phone, $country){
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->country = $country;
        $this->lang();
    }

    public function message(){
        return "$this->name parle $this->language";
    }

    private function lang(){
        if($this->country == 'Brazil'){
            $this->language = 'pt';
        }
    }

    // public  function setName(string $name):void{
    //     $this->name = $name;
    // }

    // public function getName():string{
    //     return $this->name;
    // }
}

?>