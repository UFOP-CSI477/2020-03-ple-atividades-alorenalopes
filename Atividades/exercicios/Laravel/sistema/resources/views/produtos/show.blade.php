@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped margem">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Unidade de Medidas</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }} </td>
            <td>{{ $produto->um }}</td>
            <td><a href="{{route('produtos.edit', $produto->id)}}">Editar</a></td>
        </tr>
    </tbody>
</table>

<form action="" name="frmDelete"
    action="{{route('produtos.destroy', $produto->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do produto?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir" class="btn btn-danger botaocentralizado">
</form>
@endsection