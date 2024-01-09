<?php
require_once('interface/Shape.php');

class Rectangle implements Shape {
    
    private float $height;
    private float $width;

    public function __construct($h, $w){
        $this->height = $h;
        $this->width = $w;
    }

    public function calcArea(){
        return $this->height*$this->width;
    }
}