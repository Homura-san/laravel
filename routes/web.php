<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    return view('index');
});

# Rotas de estudo

Route::redirect('curso', 'clients', 301);

Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index'])-> name('clients.list'); // O nome da rota pode ser qualquer nome
    
    /*
        Quando se chama uma rota pelo nome, o endereço pode ser alterado
        à vontade.
    */
    
    Route::get('create/new', [ClientController::class, 'create'])-> name('form-clients');
    
    # match - aceita determinados verbos http, usar com cautela
    # any  - aceita qualquer verbo http, mas deve ser usado em último caso
    Route::match(['post', 'put'] ,'save', [ClientController::class, 'save'])->name('clients.save');

    Route::get('edit/{id}/{name}', [ClientController::class, 'edit'])-> name('clients.edit');
    
});
