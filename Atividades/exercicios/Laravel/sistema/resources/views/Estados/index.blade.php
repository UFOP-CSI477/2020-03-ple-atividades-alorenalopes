@extends('principal')

@section('conteudo')

<a href="{{route('estados.create')}}">Cadastrar</a>

<table class="table">

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Estado</th>
            <th>Sigla</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($estados as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->nome}}</td>
            <td>{{$d->sigla}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection