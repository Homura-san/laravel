@extends('layout')

@section('titulo')
    Lista de Clientes

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
                                <td>
                                    <a class="btn btn-success" href="{{ route('clients.edit', $client->id) }}">Editar</a>
                                    <form style="display: inline" action="{{ route('clients.destroy', $client->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Tem certeza que deseja remover o cliente?')">Deletar</button>
                                    </form>
                                </td>
                                
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
