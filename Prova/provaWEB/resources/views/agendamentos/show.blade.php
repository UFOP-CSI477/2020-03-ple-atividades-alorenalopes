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
            <td><a href="{{route('agendamentos.edit', $dados->id)}}">{{ $dados->id }}</a></td>
            <td>{{$dados->pessoa->nome}} </td>
            <td>{{$dados->pessoa->tipo}} </td>
            <td>{{$dados->coleta->nome}}</td>
            <td>{{$dados->coleta->cidade}}</td>
            <td>{{$dados->data}}</td>
    </tbody>
</table>

<form action="" name="frmDelete" action="{{route('agendamentos.destroy', $dados->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do Agendamento?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir" class="btn btn-danger botaocentralizado">
</form>
@endsection