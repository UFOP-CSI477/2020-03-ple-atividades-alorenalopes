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

        <tr>
            <td>{{ $compras->id }}</td>
            <td>{{ $compras->pessoa->nome }} </td>
            <td>{{ $compras->produtos->nome}}</td>
            <td>{{ $compras->dataCompra}}</td>
            <td><a href="{{route('compras.edit', $compras->id)}}">Editar</a></td>
        </tr>
    </tbody>
</table>

<form action="" name="frmDelete"
    action="{{route('compras.destroy', $compras->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão da compra?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir" class="btn btn-danger botaocentralizado">
</form>
@endsection