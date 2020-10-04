@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>

            @foreach($dados as $d)
                <tr>
                    <td>{{ $d->nome }} </td>
                    <td>{{ $d->cidade}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection