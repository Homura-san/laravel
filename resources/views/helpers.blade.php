@extends('layout')

@section('titulo')
    <h1>Teste de helpers</h1>
@endsection

@section('conteudo')
{{-- route('clients.edit', 20)  --}}
    <a href="{{ route('clients.edit', ['id' => 20, 'name' => 'Elton']) }}">Editar</a><br>

    {{ Str::after('String de teste do helper', 'String') }}
    <br>

    {{-- app_path() --}}
    <br>

    {{ Arr::random(['Carlo', 'Pedro', 'Tati', 'Fabiano']) }}
@endsection