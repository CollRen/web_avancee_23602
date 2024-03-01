<?php
namespace App\Models;
use App\Models\CRUD;

class Privilege extends CRUD{
    protected $table = "privilege";
    protected $primaryKey = "id";
    /* Pas besoin d'ajouter un $fillable parce qu'on na va qu'utiliser les tables existentes */
}