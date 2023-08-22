<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('clients', function() {
    return '<h1> lista de clientes</h1>';
});

Route::get('clients/create/new', function() {
    return '<h1> Criar clientes</h1>';
});

Route::get('clients/{name}/{age}', function ($name, $age) {
    return "Detalhes do cliente {$name}, {$age} anos.";
})->where('age', '[0-9]+');
