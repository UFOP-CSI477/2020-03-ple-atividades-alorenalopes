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
            <td><a href="{{route('agendamentos.show', $d->id)}}">{{ $d->pessoa->id }}</a></td>
            <td>{{$d->pessoa->nome}} </td>
            <td>{{$d->pessoa->tipo}} </td>
            <td>{{$d->coleta->nome}}</td>
            <td>{{$d->coleta->cidade}}</td>
            <td>{{$d->data}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

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

        @foreach($data as $d)
        <tr>
            <td><a href="{{route('agendamentos.show', $d->id)}}">{{ $d->pessoa->id }}</a></td>
            <td>{{$d->pessoa->nome}} </td>
            <td>{{$d->pessoa->tipo}} </td>
            <td>{{$d->coleta->nome}}</td>
            <td>{{$d->coleta->cidade}}</td>
            <td>{{$d->data}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection