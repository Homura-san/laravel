@extends('layout')

@section('titulo')
    Editar Cliente
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-8 col-offset-2">
            <form action="{{route('clients.update', $client->id)}}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                @include('clients.form')
            </form>

            <a href="<?= route('clients.index') ?> "> Lista de Clientes</a>
        </div>
    </div>

@endsection