@extends('layout')

@section('titulo')
    Lista de Clientes
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <p>Id do cliente: {{ $client->id }}</p>
            <p>Nome: {{ $client->name }}</p>
            <p>Email: {{ $client->email }}</p>
            <p>Idade: {{ $client->age }}</p>
            
            <p>Foto do cliente</p>
            <img src="{{ asset('storage/' . Str::after(($client->photo), 'public/')) }}" 
            alt="" width="600"> <br>

            <a href="{{ route('clients.index') }}">Voltar para a lista de clientes</a>
        </div>
    </div>
@endsection