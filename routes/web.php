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
    $data = [
        'user' => ['name' => "Lorenzo", "surname" => "De Giorgi"],
    ];
    return view('home', $data);
});

Route::get('/contatti', function () {
    return view('contact');
});