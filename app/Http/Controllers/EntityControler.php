<?php

namespace App\Http\Controllers;


use App\Models\Entity;
use App\Models\Entity_image;
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
        $request->validate([
            'name'=> 'required|string|max:255',
            'gender' => 'nullable|string|max:255',
            'other_names' => 'nullable|string|max:255',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $entity = Entity::create([
            'ent_name'=> $request->name,
            'ent_gender' => $request->input('gender','indefinido'),
            'ent_otherNames'=> $request->other_names
        ]);

        if($request->hasFile('images')){
            
            foreach($request->file('images') as $file){
                $file_name = md5($file->getClientOriginalName() . strtotime('now')) . '.' . $file->extension();
                print("dentro");
                $path = $file->storeAs('img/entities',$file_name,'public');
                
                Entity_image::create([
                    'entity_ent_id'=> $entity->ent_id,
                    'img_path'=> $path
                ]);
            }
        }

        return redirect('/entity')->with('success','Entidade cirada com sucesso!');
    }
}
