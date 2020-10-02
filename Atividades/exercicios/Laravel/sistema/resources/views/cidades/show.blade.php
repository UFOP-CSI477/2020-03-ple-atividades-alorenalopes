@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped margem">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{ $cidade->id }}</td>
            <td>{{ $cidade->nome }} </td>
            <td>{{ $cidade->estado->nome }}</td>
            <td><a href="{{route('cidades.edit', $cidade->id)}}">Editar</a></td>
        </tr>
    </tbody>
</table>

<form action="" name="frmDelete"
    action="{{route('cidades.destroy', $cidade->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão da cidade?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir" class="btn btn-danger botaocentralizado">
</form>
@endsection