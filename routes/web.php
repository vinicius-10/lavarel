<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventContrller;


Route::get('/', [EventContrller::class,'index']);

Route::get('/events/create', [EventContrller::class,'create']);

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
