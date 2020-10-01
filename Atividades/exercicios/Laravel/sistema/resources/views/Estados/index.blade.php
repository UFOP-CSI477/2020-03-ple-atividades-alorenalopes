@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped margem">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($estados as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->sigla }}</td>
                    <td><a href="{{route('estados.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection