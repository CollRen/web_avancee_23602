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
}