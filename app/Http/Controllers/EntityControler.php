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

    public function create(){
        return view('entities.create');
    }

    public function store(Request $request){    
        Entity::create([
            'ent_name'=> $request->name,
            'ent_gender' => $request->gender,
            'ent_otherNames'=> $request->other_names
        ]);
        
        return redirect('/entity')->with('success','Entidade cirada com sucesso!');
    }
}
