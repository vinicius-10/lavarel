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
        $entity = new Entity;

        print($request->name);
        $entity->name = $request->name;
        $entity->other_names = $request->other_names;
        $entity->gender = $request->gender;

        $entity->save();
        
        return redirect('/entity')->with('success','Entidade cirada com sucesso!');
    }
}
