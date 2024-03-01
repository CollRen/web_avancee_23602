<?php

namespace App\Models;

use App\Models\CRUD;

class Login extends CRUD
{
    protected $table = "login";
    protected $primaryKey = "id";


    /**
     * À retravailler, évidemment!
     */
    public function verifyHashPassword($password)
    {
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => $cost]);
            return true;
    }

    public function login($data) {
        print_r($data);
    }
}
