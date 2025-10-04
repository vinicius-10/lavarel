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
    return view('index');
});

Route::get('/myrron', function () {
    return view('myrron');
});

Route::get('/demon', function () {
    return view('demon');
});

Route::get('/shadow', function () {
    return view('shadow');
});
