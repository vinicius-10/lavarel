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
            'ent_name'=> $request->input('name'),
            'ent_gender' => $request->input('gender'),
            'ent_otherNames'=> $request->input('other_names')
        ]);

        $file = $request->file('image');

        $extensio = $file->extension();

        $image_name = md5($file->getClientOriginalName() . strtotime('now')) . '.' . $extensio;

        $file->move(public_path('img/upload/entity/'),$image_name);

        return redirect('/entity')->with('success','Entidade cirada com sucesso!');
    }
}
