@extends('principal')

@section('conteudo')

<table class="table margem">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Unidade de Medida</th>
            <th>Exibir</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($produtos as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->nome}}</td>
            <td>{{$d->um}}</td>
            <td><a href="{{route('produtos.show', $d->id)}}">Exibir</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection