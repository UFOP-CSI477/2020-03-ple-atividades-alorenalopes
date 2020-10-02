@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped margem">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($cidades as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->estado->nome }}-{{$e->estado->sigla}}</td>
                    <td><a href="{{route('cidades.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection