@extends('layout')

@section('titulo')
    <h1>Lista do Cliente</h1>
@endsection


@section('barra-lateral')
    {{-- @parent --}}
    <h3>Valor Personalizado</h3>
@endsection


@section('conteudo')
    
    <br>
    {{ Route::currentRouteName(); }}
    <br>
    {{-- Comentário do blade --}}

    {{ $group;}}

    @if ($group == 'Restaurante')
        <p>O grupo é Restaurante</p>
    @elseif ($group == Atacado)
        <p>É atacado.</p>
    @else
        <p>Não é Restaurante.</p>
    @endif

    @for ($i = 0; $i < 10; $i++)
        <p>O número é {{$i}}</p>
    @endfor

    @forelse ($clients as $client)
        <p>Nome do cliente: {{ $client }}</p>
    @empty
        <p>Nenhum cliente cadastrado.</p>
    @endforelse
@endsection
