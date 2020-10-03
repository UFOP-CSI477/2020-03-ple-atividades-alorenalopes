@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped margem">
        <thead class="thead-dark">
            <tr>
                <th>ID Paciente</th>
                <th>Paciente</th>
                <th>Tipo Sanguíneo</th>
                <th>Local de coleta</th>
                <th>Cidade de coleta</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>

            @foreach($dados as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->pessoas->nome }} </td>
                    <td>{{ $d->coletas->nome }}</td>
                    <td>{{ $d->data }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection