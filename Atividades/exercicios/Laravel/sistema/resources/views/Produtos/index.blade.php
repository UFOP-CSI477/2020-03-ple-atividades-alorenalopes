@extends('principal')

@section('conteudo')

<a href="{{ route('produtos.create')}}">Cadastrar</a>


<table class="table">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Unidade de Medida</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($produtos as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->nome}}</td>
            <td>{{$d->um}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection