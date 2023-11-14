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

Route::resource('clients', ClientController::class/*, ['only'=> [
    'index', 'create', 'store
]] */); # Método only define quais rotas poderão ser criadas. Except define quais rotas Não serão criadas

// Route::get('/', [ClientController::class, 'index'])-> name('clients.list');