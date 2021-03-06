@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped margem">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sigla</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{ $estado->id }}</td>
            <td>{{ $estado->nome }} </td>
            <td>{{ $estado->sigla }}</td>
            <td><a href="{{route('estados.edit', $estado->id)}}">Editar</a></td>
        </tr>
    </tbody>
</table>

<form action="" name="frmDelete"
    action="{{route('estados.destroy', $estado->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do estado?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir" class="btn btn-danger botaocentralizado">
</form>
@endsection