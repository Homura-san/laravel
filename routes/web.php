<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ToDoTasksController;

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

# Método only define quais rotas poderão ser criadas. Except define quais rotas Não serão criadas

// Route::get('/', [ClientController::class, 'index'])-> name('clients.list');

Route::get('/', function () {
    #return view('welcome');
    return view('index');
});

Route::resource('clients', ClientController::class); 

Route::get('tasks/add/{id}', [ToDoTasksController::class, 'store']);

Route::get('tasks/delete/{id}', [ToDoTasksController::class, 'destroy']);