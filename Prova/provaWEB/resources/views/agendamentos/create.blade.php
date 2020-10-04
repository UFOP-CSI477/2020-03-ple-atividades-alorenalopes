@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{route('agendamentos.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" name="data" id="data">
        </div>

        <div class="form-group">
            <label for="pessoa_id">Paciente</label>
            <select name="pessoa_id" id="pessoa_id" class="form-control">
                @foreach($pacientes as $p)
                <option value="{{$p->id}}">{{$p->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="coleta_id">Local da Coleta</label>
            <select name="coleta_id" id="coleta_id" class="form-control">
                @foreach($coletas as $c)
                <option value="{{$c->id}}">{{$c->nome}} - {{$c->cidade}}</option>
                @endforeach
            </select>
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection