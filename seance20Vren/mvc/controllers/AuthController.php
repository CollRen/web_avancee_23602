<?php

namespace App\Controllers;

use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;

class AuthController
{

    public function index()
    {

        return View::render('auth/index');
    }

    public function store($data)
    {
        $validator  = new Validator;
        $validator->field('username', $data['username'])->min(2)->max(50)->email();
        $validator->field('password', $data['password'])->min(6)->max(20);

        if ($validator->isSuccess()) {


            
            $user = new User;
            $checkUser = $user->checkUser($data['username'], $data['password']);
            if($checkUser){
                print_r($_SESSION);
                die();
                return View::redirect('client');

            }else{
                $errors['message'] = "Please check your credential";
                return View::render('auth/index', ['errors' => $errors, 'user'=>$data]);
            }

        } else {
            $errors = $validator->getErrors();
            return View::render('auth/index', ['errors' => $errors, 'user' => $data]);
        }
        return View::render('auth/index');
    }
}
