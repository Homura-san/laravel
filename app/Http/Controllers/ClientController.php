<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Lista de clientes da loja
     * @return void
     */
    public function index(){
        $clients = \App\Models\Client::get();

        return view('clients.index', compact('clients'));
    }

    /**
     * Criar cliente
     * @return void
     */
    public function create() {
        return view('clients.form');
    }

    /**
     * Salvar cliente
     * @return void
     */
    public function save() {
        return 'Cliente criado com sucesso.';
    }

    /**
     * Editar cliente
     * @param [type] $id
     * @param [type] $name
     * @return void
     */
    public function edit($id, $name) {
        return view('clients.form');
    }
}
