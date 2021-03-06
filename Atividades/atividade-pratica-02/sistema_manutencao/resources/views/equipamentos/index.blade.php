@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>ID</th>
            </tr>
        </thead>
        <tbody>

            @foreach($dados as $d)
                <tr>
                    <td>{{ $d->nome }} </td>
                    <td><a href="{{route('equipamentos.show', $d->id)}}">{{ $d->id }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection