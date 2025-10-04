<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',['isDayOrNight'=>'nigth','sedatines'=>['Myrron Run','Demon Red','Shadow']]);
});

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
