@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Data</th>
            <th>Nome do Equipamento</th>
            <th>Nome do Usuário</th>
            <th>Tipo da Manutenção</th>
            <th>Descrição</th>
            <th>ID</th>

        </tr>
    </thead>
    <tbody>

        @foreach($dados as $r)
        <tr>
            <td>{{ $r->datalimite }}</td>
            <td>{{ $r->nome}} </td>
            <td>{{ $r->name}} </td>
            <td>{{ $r->tipo}}</td>
            <td>{{ $r->descricao }} </td>
            <td><a href="{{route('registros.show', $r->id)}}">{{ $r->id }}</a></td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection