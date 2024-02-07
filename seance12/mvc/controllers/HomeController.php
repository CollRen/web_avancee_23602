<?php
namespace App\Controllers;

use App\Models\ExampleModel;

class HomeController {
    
    public function index(){
       // $data = 'Hello from HomeController';
        $model = new ExampleModel;
        $data = $model->getData();
        include 'views/home.php';
    }

    public function home(){
        $data = 'Hello from HomeController';
        include 'views/home.php';
    }
}