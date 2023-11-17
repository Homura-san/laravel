@extends('layout')

@section('titulo')
    <div class="navbar navbar-light bg-light">
        <h1 class="navbar-brand">Lista de Clientes</h1>
    </div> 
@endsection

@section('conteudo')
    
    {{-- Comentário do blade --}}

    {{-- {{ $group;}} --}}
        
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Acoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td> <a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a></td>
                                <td>{{ $client->email }}</td>
                                <td><a href="{{ route('clients.edit', $client->id) }}">Editar</a></td>
                            </tr>
                            
                        @empty
                            <tr>
                                <td>Nenhum cliente cadastrado.</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
                <a href="{{route('clients.create')}}">Criar Cliente</a>
            </div>
        </div>

    </div>
    
@endsection
