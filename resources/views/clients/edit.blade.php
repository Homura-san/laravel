@extends('layout')

@section('titulo')
    Editar Cliente
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-8 col-offset-2">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{route('clients.update', $client->id)}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                @include('clients.form')
            </form>

            <a href="<?= route('clients.index') ?> "> Lista de Clientes</a>
        </div>
    </div>

@endsection