<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Lista de clientes da loja
     */
    public function index(){
        $clients = \App\Models\Client::get();

        return view('clients.index', compact('clients'));
    }
}
