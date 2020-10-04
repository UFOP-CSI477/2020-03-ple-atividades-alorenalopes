@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Tipo Sanguíneo</th>
            </tr>
        </thead>
        <tbody>

            @foreach($dados as $d)
                <tr>
                    <td>{{ $d->nome }} </td>
                    <td>{{ $d->tipo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection