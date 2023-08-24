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

Route::redirect('curso', 'clients', 301);

Route::prefix('clients')->group(function () {
    Route::get('/', function() {
        return '<h1> lista de clientes</h1>' . dd(Route::current());
    })-> name('clients.list'); // O nome da rota pode ser qualquer nome
    
    /*
        Quando se chama uma rota pelo nome, o endereço pode ser alterado
        à vontade.
    */
    
    Route::get('create/new', function() {
        $html = '<h1>Criar cliente</h1>';
        
        $link = route('clients.save');

        $html .= "
        <br>
        <form method='POST' action='{$link}'>
            <input type='hidden' name='_token' value='" . csrf_token() . "'>
            <!-- <input type='hidden' name='_method' value='PUT'> Como usar método put, delete, etc -->
            <input placeholder='insira seu nome'> <br>
            <input placeholder='insira sua idade'> <br>
            <button>Enviar</button>
        </form>";
        
        $html .= '<br><a href="' . route('clients.list') . '"> Lista de Clientes</a>';
        return $html;
    });
    
    # match - aceita determinados verbos http, usar com cautela
    # any  - aceita qualquer verbo http, mas deve ser usado em último caso
    Route::match(['post', 'put'] ,'save', function () {
        return 'Cliente criado com sucesso.';
    })->name('clients.save');

    // Route::get('{name}/{age}', function ($name, $age) {
    //     $html =  "Detalhes do cliente {$name}, {$age} anos.";
    //     $html .= '<br><a href="' . route('clients.list') . '"> Lista de Clientes</a>';
    //     return $html;
    // })->where(['age' => '[0-9]+', 'name' => '[A-Za-z]+']);
    
});
