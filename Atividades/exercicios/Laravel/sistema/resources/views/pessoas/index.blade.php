@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped margem">
        <thead class="thead-dark">
            <tr>
            <th>Id</th>
            <th>Pessoa</th>
            <th>Produto</th>
            <th>Data</th>
            <th>Editar</th>
            </tr>
        </thead>
        <tbody>

            @foreach($compras as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->pessoa->nome }} </td>
                    <td>{{ $e->produtos->nome }}</td>
                    <td>{{ $e->dataCompra}}</td>
                    <td><a href="{{route('compras.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection