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
    #return view('welcome');
    return view('helpers');
});

# Rotas de estudo

Route::redirect('curso', 'clients', 301);

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientController@index')-> name('clients.list'); // O nome da rota pode ser qualquer nome
    
    /*
        Quando se chama uma rota pelo nome, o endereço pode ser alterado
        à vontade.
    */
    
    Route::get('create/new', function() {
        return view('clients.form');
    })-> name('form-clients');
    
    # match - aceita determinados verbos http, usar com cautela
    # any  - aceita qualquer verbo http, mas deve ser usado em último caso
    Route::match(['post', 'put'] ,'save', function () {
        return 'Cliente criado com sucesso.';
    })->name('clients.save');

    Route::get('edit/{id}/{name}', function($id, $name) {
        return view('clients.form');
    })-> name('clients.edit');

    // Route::get('{name}/{age}', function ($name, $age) {
    //     $html =  "Detalhes do cliente {$name}, {$age} anos.";
    //     $html .= '<br><a href="' . route('clients.list') . '"> Lista de Clientes</a>';
    //     return $html;
    // })->where(['age' => '[0-9]+', 'name' => '[A-Za-z]+']);
    
});
