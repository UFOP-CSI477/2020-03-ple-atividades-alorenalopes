@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped margem">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{ $dados->id }}</td>
            <td>{{ $dados->nome }} </td>
            <td><a href="{{route('equipamentos.edit', $dados->id)}}">Editar</a></td>
        </tr>
    </tbody>
</table>

<form action="" name="frmDelete"
    action="{{route('equipamentos.destroy', $dados->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do equipamento?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir" class="btn btn-danger botaocentralizado">
</form>
@endsection