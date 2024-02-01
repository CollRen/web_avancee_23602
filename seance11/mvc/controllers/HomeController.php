<?php

class HomeController {
    
    public function index(){
        $data = 'Hello from HomeController';
        include 'views/home.php';
    }
}