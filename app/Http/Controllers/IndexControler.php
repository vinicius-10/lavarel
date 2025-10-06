<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexControler extends Controller
{
    public function index(){
        return view('index',['isDayOrNight'=>'nigth','sedatines'=>['Myrron Run','Demon Red','Shadow']]);
    }

    public function create(){
        return view('events/create');
    }
}
