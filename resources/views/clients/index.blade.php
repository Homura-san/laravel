@extends('layout')

@section('titulo')
    <div class="navbar navbar-light bg-light">
        <h1 class="navbar-brand">Lista do Cliente</h1>
    </div> 
@endsection

@section('conteudo')
    
    {{-- Comentário do blade --}}

    {{-- {{ $group;}} --}}


    @forelse ($clients as $client)
        <p>Id do cliente: {{ $client->id }}</p>
        <p>Nome do cliente: {{ $client->name }}</p>
        <p>Email do cliente: {{ $client->email }}</p>
        <p>Idade do cliente: {{ $client->age }}</p>
    @empty
        <p>Nenhum cliente cadastrado.</p>
    @endforelse
@endsection
