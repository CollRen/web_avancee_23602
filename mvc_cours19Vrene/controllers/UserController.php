<?php
namespace App\Controllers;

use App\Models\Privilege;
use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;


class UserController {

    public function create(){
        $privilege = new Privilege;
        $privileges = $privilege->select('privilege');

        return View::render('user/create', ['privileges' => $privileges]);
    }

    public function store($data) {

        $validator = new Validator;
        $validator->field('name', $data['name'])->min(2)->max(30);

        if(!$validator) {
            
        }


    }

}