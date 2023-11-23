@extends('layout')

@section('titulo')
    Novo Cliente
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-8 col-offset-2">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{route('clients.store')}}">
                {{ csrf_field() }}
                
                @include('clients.form')
            </form>

            <a href="<?= route('clients.index') ?> "> Lista de Clientes</a>
        </div>
    </div>

@endsection