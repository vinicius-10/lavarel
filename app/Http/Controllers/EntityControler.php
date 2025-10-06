<?php

namespace App\Http\Controllers;


use App\Models\Entity;
use Illuminate\Http\Request;

class EntityControler extends Controller
{
    public function index(){
        $entities = Entity::all();

        return view('/entities/entity',['entities'=>$entities]);
    }
}
