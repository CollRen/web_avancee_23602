<?php

namespace App\Controllers;

use App\Models\Client;
use App\Providers\Auth;
use App\Providers\View;
use App\Providers\Validator;


class ClientController
{

    /**
     * Soit on met l'autorisation dans le __construct, soit à l'entrée de chaque fonctions
     * 
     * Voir __construct
     * Voir index
     */
    public function __construct()
    {
        Auth::session();
        // Auth::session() && $_SESSION['privilege_id'] == 1;
        
        // Le mettre ici si on veut que ça s'applique à toutes les méthodes

    }

    public function index()
    {


        if (Auth::session()) {
            $client = new Client;
            $select = $client->select('name');
            if ($select) {
                return View::render('client/index', ['clients' => $select]);
            }
            return View::render('error');
        }
    }




    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if ($selectId) {
                return View::render('client/show', ['client' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }

    public function create()
    {
        return View::render('client/create');
    }

    public function store($data)
    {

        $validator = new Validator;
        $validator->field('name', $data['name'], 'Le nom')->min(2)->max(25);
        $validator->field('address', $data['address'])->max(45);
        $validator->field('zip_code', $data['zip_code'], 'Zip Code')->max(10);
        $validator->field('phone', $data['phone'])->max(20);
        $validator->field('email', $data['email'])->required()->email()->max(45);

        if ($validator->isSuccess()) {
            $client = new Client;
            $insert = $client->insert($data);
            if ($insert) {
                return View::redirect('client');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('client/create', ['errors' => $errors, 'client' => $data]);
        }
    }

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if ($selectId) {
                return View::render('client/edit', ['client' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }
    public function update($data, $get)
    {
        // $get['id'];
        $validator = new Validator;
        $validator->field('name', $data['name'], 'Le nom')->min(2)->max(25);
        $validator->field('address', $data['address'])->max(45);
        $validator->field('zip_code', $data['zip_code'], 'Zip Code')->max(10);
        $validator->field('phone', $data['phone'])->max(20);
        $validator->field('email', $data['email'])->required()->email()->max(45);

        if ($validator->isSuccess()) {
            $client = new Client;
            $update = $client->update($data, $get['id']);

            if ($update) {
                return View::redirect('client/show?id=' . $get['id']);
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('client/edit', ['errors' => $errors, 'client' => $data]);
        }
    }

    public function delete($data)
    {
        $client = new  Client;
        $delete = $client->delete($data['id']);
        if ($delete) {
            return View::redirect('client');
        } else {
            return View::render('error');
        }
    }
}
