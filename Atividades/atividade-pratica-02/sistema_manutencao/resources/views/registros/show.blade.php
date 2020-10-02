@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped margem">
    <thead class="thead-dark">
        <tr>
                <<th>Data</th>
                <th>Nome do Equipamento</th>
                <th>Nome do Usuário</th>
                <th>Tipo da Manutenção</th>
                <th>Descrição</th>
                <th>ID</th>
        </tr>
    </thead>
    <tbody>
            <td>{{ $dados->datalimite }}</td>
            <td>{{ $dados->nome}} </td>
            <td>{{ $dados->name}} </td>
            <td>{{ $dados->tipo}}</td>
            <td>{{ $dados->descricao }} </td>
            <td><a href="{{route('registros.edit', $dados->id)}}">{{ $dados->id }}</a></td>
    </tbody>
</table>

<form action="" name="frmDelete" action="{{route('registros.destroy', $dados->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão da Manutenção?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir" class="btn btn-danger botaocentralizado">
</form>
@endsection