@extends('layout')

@section('titulo')
    <h1>Novo Cliente</h1>
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-8 col-offset-2">
            <form action="{{route('clients.store')}}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                
                @include('clients.form')
            </form>

            <a href="<?= route('clients.index') ?> "> Lista de Clientes</a>
        </div>
    </div>

@endsection