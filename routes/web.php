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

# Rotas de estudo

Route::prefix('clients')->group(function () {
    Route::get('/', function() {
        return '<h1> lista de clientes</h1>';
    })-> name('clients.list'); // O nome da rota pode ser qualquer nome
    
    /*
        Quando se chama uma rota pelo nome, o endereço pode ser alterado
        à vontade.
    */
    
    Route::get('create/new', function() {
        $html = '<h1>Criar cliente</h1>';
        $html .= '<br><a href="' . route('clients.list') . '"> Lista de Clientes</a>';
        return $html;
    });
    
    Route::get('{name}/{age}', function ($name, $age) {
        $html =  "Detalhes do cliente {$name}, {$age} anos.";
        $html .= '<br><a href="' . route('clients.list') . '"> Lista de Clientes</a>';
        return $html;
    })->where(['age' => '[0-9]+', 'name' => '[A-Za-z]+']);
    
});
