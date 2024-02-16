<?php
namespace App\Controllers;

use App\Models\Client;
use App\Providers\View;

class ClientController {

    public function index(){
        $client = new Client;
        $select = $client->select();
        //print_r($select);
        //include('views/client/index.php');
        if($select){
            return View::render('client/index', ['clients' => $select]);
        }else{
            return View::render('error');
        }    
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if($selectId){
                return View::render('client/show', ['client' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('client/create');
    }

    public function store($data){
        //print_r($data);
        $client = new Client;
        $insert = $client->insert($data);        
        if($insert){
            return View::redirect('client');
        }else{
            return View::render('error');
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if($selectId){
                return View::render('client/edit', ['client' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }
    public function update(){
        
    }

    public function delete($data){
        $client = new  Client;
        $delete = $client->delete($data['id']);
        if($delete){
            return View::redirect('client');
        }else{
            return View::render('error');
        }
    }
}