<?php

use App\Http\Controllers\EntityControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexControler;


Route::get('/', [IndexControler::class,'index']);

Route::get('/entity',[EntityControler::class,'index']);

Route::get('/myrron/{id?}', function ($id = null) {
    return view('myrron',['id'=>$id]);
});

Route::get('/demon', function () {
    $id = request('id');
    return view('demon',['id'=>$id]);
});

Route::get('/shadow', function () {
    return view('shadow');
});
