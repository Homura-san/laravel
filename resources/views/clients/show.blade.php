@extends('layout')

@section('titulo')
    <div class="navbar navbar-light bg-light">
        <h1 class="navbar-brand">Lista de Clientes</h1>
    </div> 
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <p>Id do cliente: {{ $client->id }}</p>
            <p>Nome: {{ $client->name }}</p>
            <p>Email: {{ $client->email }}</p>
            <p>Idade: {{ $client->age }}</p>

            <a href="{{ route('clients.index') }}">Voltar para a lista de clientes</a>
        </div>
    </div>
@endsection